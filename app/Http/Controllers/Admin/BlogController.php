<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use App\Models\Tag;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    /**
     * Display a listing of blog posts.
     */
    public function index()
    {
        $posts = BlogPost::with('tags')
            ->orderBy('created_at', 'desc')
            ->paginate(10);
            
        return view('admin.blog.index', compact('posts'));
    }

    /**
     * Show the form for creating a new blog post.
     */
    public function create()
    {
        $tags = Tag::all();
        $categories = Category::active()->get();
        return view('admin.blog.create', compact('tags', 'categories'));
    }

    /**
     * Store a newly created blog post in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:blog_posts,slug',
            'content' => 'required|string',
            'sections' => 'nullable|json',
            'sidebar_cards' => 'nullable|json',
            'excerpt' => 'nullable|string',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'is_published' => 'boolean',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'meta_keywords' => 'nullable|string',
            'tags' => 'nullable|array',
            'categories' => 'nullable|array',
        ]);
        
        // Use the custom slug from the form, ensuring it's properly formatted
        $finalSlug = Str::slug($validated['slug']);
        
        // Handle featured image upload
        if ($request->hasFile('featured_image')) {
            $imagePath = $request->file('featured_image')->store('blog', 'public');
            $validated['featured_image'] = $imagePath;
        }
        
        // Set published_at timestamp if is_published is true
        if ($request->is_published) {
            $validated['published_at'] = now();
        }
        
        // Parse sections JSON if provided
        $sections = null;
        if ($request->has('sections')) {
            $sections = json_decode($request->sections, true);
        }
        
        // Parse sidebar cards JSON if provided
        $sidebarCards = null;
        if ($request->has('sidebar_cards')) {
            $sidebarCards = json_decode($request->sidebar_cards, true);
        }
        
        // Create the post
        $post = BlogPost::create([
            'title' => $validated['title'],
            'slug' => $finalSlug,
            'content' => $validated['content'],
            'sections' => $sections,
            'sidebar_cards' => $sidebarCards,
            'excerpt' => $validated['excerpt'] ?? null,
            'featured_image' => $validated['featured_image'] ?? null,
            'is_published' => $request->is_published ?? false,
            'published_at' => $request->is_published ? now() : null,
            'meta_title' => $validated['meta_title'] ?? null,
            'meta_description' => $validated['meta_description'] ?? null,
            'meta_keywords' => $validated['meta_keywords'] ?? null,
            'user_id' => Auth::id(),
        ]);
        
        // Handle tags
        if ($request->has('tags')) {
            $post->tags()->sync($request->tags);
        }
        
        // Handle categories
        if ($request->has('categories')) {
            $post->categories()->sync($request->categories);
        }
        
        return redirect()->route('admin.blog.index')
            ->with('success', 'Blog post created successfully');
    }

    /**
     * Show the form for editing the specified blog post.
     */
    public function edit(BlogPost $blog)
    {
        $tags = Tag::all();
        $selectedTags = $blog->tags->pluck('id')->toArray();
        $categories = Category::active()->get();
        $selectedCategories = $blog->categories->pluck('id')->toArray();
        
        return view('admin.blog.edit', compact('blog', 'tags', 'selectedTags', 'categories', 'selectedCategories'));
    }

    /**
     * Update the specified blog post in storage.
     */
    public function update(Request $request, BlogPost $blog)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:blog_posts,slug,' . $blog->id,
            'content' => 'required|string',
            'sections' => 'nullable|json',
            'sidebar_cards' => 'nullable|json',
            'excerpt' => 'nullable|string',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'is_published' => 'boolean',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'meta_keywords' => 'nullable|string',
            'tags' => 'nullable|array',
            'categories' => 'nullable|array',
        ]);
        
        // Use the custom slug from the form, ensuring it's properly formatted
        $blog->slug = Str::slug($validated['slug']);
        
        // Handle featured image upload
        if ($request->hasFile('featured_image')) {
            // Delete the old image if exists
            if ($blog->featured_image) {
                Storage::disk('public')->delete($blog->featured_image);
            }
            
            $imagePath = $request->file('featured_image')->store('blog', 'public');
            $blog->featured_image = $imagePath;
        }
        
        // Update published_at timestamp if publishing status changed
        if (!$blog->is_published && $request->is_published) {
            $blog->published_at = now();
        }
        
        // Parse sections JSON if provided
        if ($request->has('sections')) {
            $blog->sections = json_decode($request->sections, true);
        }
        
        // Parse sidebar cards JSON if provided
        if ($request->has('sidebar_cards')) {
            $blog->sidebar_cards = json_decode($request->sidebar_cards, true);
        }
        
        // Update the post
        $blog->title = $validated['title'];
        $blog->content = $validated['content'];
        $blog->excerpt = $validated['excerpt'] ?? null;
        $blog->is_published = $request->is_published ?? false;
        $blog->meta_title = $validated['meta_title'] ?? null;
        $blog->meta_description = $validated['meta_description'] ?? null;
        $blog->meta_keywords = $validated['meta_keywords'] ?? null;
        
        $blog->save();
        
        // Handle tags
        if ($request->has('tags')) {
            $blog->tags()->sync($request->tags);
        } else {
            $blog->tags()->detach();
        }
        
        // Handle categories
        if ($request->has('categories')) {
            $blog->categories()->sync($request->categories);
        } else {
            $blog->categories()->detach();
        }
        
        return redirect()->route('admin.blog.index')
            ->with('success', 'Blog post updated successfully');
    }

    /**
     * Remove the specified blog post from storage.
     */
    public function destroy(BlogPost $blog)
    {
        // Delete the featured image if exists
        if ($blog->featured_image) {
            Storage::disk('public')->delete($blog->featured_image);
        }
        
        $blog->delete();
        
        return redirect()->route('admin.blog.index')
            ->with('success', 'Blog post deleted successfully');
    }
    
    /**
     * Show the form for managing tags.
     */
    public function manageTags()
    {
        $tags = Tag::orderBy('name')->get();
        return view('admin.blog.tags', compact('tags'));
    }
    
    /**
     * Store a new tag.
     */
    public function storeTag(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:tags',
        ]);
        
        Tag::create([
            'name' => $validated['name'],
            'slug' => Str::slug($validated['name']),
        ]);
        
        return back()->with('success', 'Tag created successfully');
    }
    
    /**
     * Delete a tag.
     */
    public function destroyTag(Tag $tag)
    {
        $tag->delete();
        return back()->with('success', 'Tag deleted successfully');
    }
}
