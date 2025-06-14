<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use App\Models\Tag;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of blog posts.
     */
    public function index(Request $request)
    {
        $query = BlogPost::published()->orderBy('published_at', 'desc');
        
        // Filter by tag if provided
        if ($request->has('tag')) {
            $tagSlug = $request->tag;
            $query->whereHas('tags', function($q) use ($tagSlug) {
                $q->where('slug', $tagSlug);
            });
        }
        
        // Filter by category if provided
        if ($request->has('category')) {
            $categorySlug = $request->category;
            $query->whereHas('categories', function($q) use ($categorySlug) {
                $q->where('slug', $categorySlug);
            });
        }
        
        $posts = $query->paginate(9);
        $tags = Tag::has('blogPosts')->withCount('blogPosts')->get();
        $categories = Category::active()->withCount('blogPosts')->get();
        
        return view('blog.index', compact('posts', 'tags', 'categories'));
    }
    
    /**
     * Display the specified blog post.
     */
    public function show($slug)
    {
        $post = BlogPost::published()->where('slug', $slug)->firstOrFail();
        
        // Get related posts (posts with the same tags)
        $relatedPosts = BlogPost::published()
            ->where('id', '!=', $post->id)
            ->whereHas('tags', function($q) use ($post) {
                $q->whereIn('tags.id', $post->tags->pluck('id'));
            })
            ->orderBy('published_at', 'desc')
            ->take(3)
            ->get();
            
        return view('blog.show', compact('post', 'relatedPosts'));
    }
}
