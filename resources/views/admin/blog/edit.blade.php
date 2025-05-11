@extends('admin.layouts.app')

@section('title', 'Edit Blog Post')
@section('page-title', 'Edit Blog Post')

@section('styles')
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<style>
    .ql-editor {
        min-height: 200px;
    }
    .ql-toolbar.ql-snow, 
    .ql-container.ql-snow {
        border-color: #d1d5db;
    }
    .ql-toolbar.ql-snow {
        border-top-left-radius: 0.375rem;
        border-top-right-radius: 0.375rem;
    }
    .ql-container.ql-snow {
        border-bottom-left-radius: 0.375rem;
        border-bottom-right-radius: 0.375rem;
    }
    .ql-editor p, .ql-editor ol, .ql-editor ul, .ql-editor pre, .ql-editor blockquote, .ql-editor h1, .ql-editor h2, .ql-editor h3 {
        margin-bottom: 0.5em;
    }
</style>
@endsection

@section('content')
<div class="mb-6 flex justify-between items-center">
    <h1 class="text-2xl font-semibold text-gray-800">Edit Blog Post</h1>
    <div class="flex space-x-2">
        <a href="{{ route('admin.blog.index') }}" class="px-4 py-2 border border-gray-300 rounded text-gray-700 hover:bg-gray-50 transition-colors">
            <i class="fas fa-arrow-left mr-2"></i> Back to List
        </a>
        <a href="{{ route('admin.blog.create') }}" class="px-4 py-2 bg-primary text-white rounded hover:bg-primary/80 transition-colors">
            <i class="fas fa-plus mr-2"></i> New Post
        </a>
    </div>
</div>

<form id="blog-form" action="{{ route('admin.blog.update', $blog) }}" method="POST" enctype="multipart/form-data" class="bg-white rounded-lg shadow-md overflow-hidden" onsubmit="return prepareSubmit()">
    @csrf
    @method('PUT')

    <div class="p-6 space-y-6">
        <!-- Basic Information Section -->
        <div>
            <h2 class="text-lg font-medium text-gray-900 border-b pb-2 mb-4">Basic Information</h2>
            
            <!-- Title field -->
            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Post Title <span class="text-red-600">*</span></label>
                <input type="text" name="title" id="title" 
                    class="w-full rounded-md border-gray-300 shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50 @error('title') border-red-500 @enderror" 
                    value="{{ old('title', $blog->title) }}" required>
                @error('title')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            
            <!-- Content field -->
            <div class="mb-4">
                <label for="editor" class="block text-sm font-medium text-gray-700 mb-1">Content <span class="text-red-600">*</span></label>
                <div id="editor">{!! old('content', $blog->content) !!}</div>
                <input type="hidden" name="content" id="content-input">
                @error('content')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            
            <!-- Dynamic Sections Builder -->
            @include('admin.blog.partials.section-builder')
            
            <!-- Excerpt field -->
            <div class="mb-4">
                <label for="excerpt" class="block text-sm font-medium text-gray-700 mb-1">Excerpt <span class="text-gray-500 text-xs">(optional)</span></label>
                <textarea name="excerpt" id="excerpt" rows="3" 
                    class="w-full rounded-md border-gray-300 shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50 @error('excerpt') border-red-500 @enderror"
                    placeholder="A short summary of the post">{{ old('excerpt', $blog->excerpt) }}</textarea>
                <p class="mt-1 text-xs text-gray-500">If left empty, an excerpt will be automatically generated from the content.</p>
                @error('excerpt')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            
            <!-- Featured Image field -->
            <div class="mb-4">
                <label for="featured_image" class="block text-sm font-medium text-gray-700 mb-1">Featured Image <span class="text-gray-500 text-xs">(optional)</span></label>
                
                @if($blog->featured_image)
                    <div class="mb-3">
                        <div class="w-40 h-40 bg-gray-100 rounded-md overflow-hidden">
                            <img src="{{ asset('storage/' . $blog->featured_image) }}" alt="{{ $blog->title }}" class="w-full h-full object-cover">
                        </div>
                        <p class="text-xs text-gray-500 mt-1">Current featured image. Upload a new one to replace it.</p>
                    </div>
                @endif
                
                <div class="flex items-center">
                    <input type="file" name="featured_image" id="featured_image" 
                        class="w-full text-sm text-gray-500
                        file:mr-4 file:py-2 file:px-4
                        file:rounded-md file:border-0
                        file:text-sm file:font-semibold
                        file:bg-primary file:text-white
                        hover:file:bg-primary/80">
                </div>
                <p class="mt-1 text-xs text-gray-500">Accepted file types: JPG, PNG, GIF. Max size: 2MB.</p>
                @error('featured_image')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            
            <!-- Tags field -->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-1">Tags <span class="text-gray-500 text-xs">(optional)</span></label>
                <div class="flex flex-wrap gap-2">
                    @foreach($tags as $tag)
                        <label class="inline-flex items-center">
                            <input type="checkbox" name="tags[]" value="{{ $tag->id }}" 
                                class="rounded border-gray-300 text-primary shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50"
                                {{ in_array($tag->id, old('tags', $selectedTags)) ? 'checked' : '' }}>
                            <span class="ml-2 text-sm text-gray-700">{{ $tag->name }}</span>
                        </label>
                    @endforeach
                </div>
                <div class="mt-2">
                    <a href="{{ route('admin.tags.index') }}" class="text-sm text-primary hover:underline" target="_blank">
                        <i class="fas fa-plus-circle"></i> Manage Tags
                    </a>
                </div>
                @error('tags')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            
            <!-- Categories field -->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-1">Categories <span class="text-gray-500 text-xs">(optional)</span></label>
                <div class="space-y-2">
                    @foreach($categories as $category)
                        <div>
                            <label class="inline-flex items-center">
                                <input type="checkbox" name="categories[]" value="{{ $category->id }}" 
                                    class="rounded border-gray-300 text-primary shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50"
                                    {{ in_array($category->id, old('categories', $selectedCategories)) ? 'checked' : '' }}>
                                <span class="ml-2 text-sm text-gray-700">{{ $category->name }}</span>
                            </label>
                            
                            @if($category->children->count() > 0)
                                <div class="ml-6 mt-1 space-y-1">
                                    @foreach($category->children as $subcategory)
                                        <label class="inline-flex items-center">
                                            <input type="checkbox" name="categories[]" value="{{ $subcategory->id }}" 
                                                class="rounded border-gray-300 text-primary shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50"
                                                {{ in_array($subcategory->id, old('categories', $selectedCategories)) ? 'checked' : '' }}>
                                            <span class="ml-2 text-sm text-gray-700">{{ $subcategory->name }}</span>
                                        </label>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                    @endforeach
                </div>
                <div class="mt-2">
                    <a href="{{ route('admin.categories.index') }}" class="text-sm text-primary hover:underline" target="_blank">
                        <i class="fas fa-plus-circle"></i> Manage Categories
                    </a>
                </div>
                @error('categories')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            
            <!-- Publishing Options -->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-1">Publishing Options</label>
                <div class="flex items-center">
                    <input type="checkbox" name="is_published" id="is_published" value="1" 
                        class="rounded border-gray-300 text-primary shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50"
                        {{ old('is_published', $blog->is_published) ? 'checked' : '' }}>
                    <label for="is_published" class="ml-2 text-sm text-gray-700">Published</label>
                </div>
                @if($blog->is_published && $blog->published_at)
                    <p class="mt-1 text-xs text-gray-500">
                        Published on: {{ $blog->published_at->format('F j, Y \a\t g:i a') }}
                    </p>
                @else
                    <p class="mt-1 text-xs text-gray-500">If checked, the post will be published immediately.</p>
                @endif
            </div>
        </div>
        
        <!-- SEO Section -->
        <div x-data="{ open: {{ old('meta_title', $blog->meta_title) || old('meta_description', $blog->meta_description) || old('meta_keywords', $blog->meta_keywords) ? 'true' : 'false' }} }">
            <button type="button" @click="open = !open" class="flex items-center justify-between w-full text-lg font-medium text-gray-900 border-b pb-2 mb-4">
                SEO Settings
                <i class="fas" :class="open ? 'fa-chevron-up' : 'fa-chevron-down'"></i>
            </button>
            
            <div x-show="open" x-collapse>
                <!-- Meta Title field -->
                <div class="mb-4">
                    <label for="meta_title" class="block text-sm font-medium text-gray-700 mb-1">Meta Title</label>
                    <input type="text" name="meta_title" id="meta_title" 
                        class="w-full rounded-md border-gray-300 shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50"
                        value="{{ old('meta_title', $blog->meta_title) }}">
                    <p class="mt-1 text-xs text-gray-500">If left empty, the post title will be used.</p>
                </div>
                
                <!-- Meta Description field -->
                <div class="mb-4">
                    <label for="meta_description" class="block text-sm font-medium text-gray-700 mb-1">Meta Description</label>
                    <textarea name="meta_description" id="meta_description" rows="3" 
                        class="w-full rounded-md border-gray-300 shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50"
                        placeholder="Brief description for search engines">{{ old('meta_description', $blog->meta_description) }}</textarea>
                    <p class="mt-1 text-xs text-gray-500">Recommended length: 150-160 characters.</p>
                </div>
                
                <!-- Meta Keywords field -->
                <div class="mb-4">
                    <label for="meta_keywords" class="block text-sm font-medium text-gray-700 mb-1">Meta Keywords</label>
                    <input type="text" name="meta_keywords" id="meta_keywords" 
                        class="w-full rounded-md border-gray-300 shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50"
                        value="{{ old('meta_keywords', $blog->meta_keywords) }}" placeholder="keyword1, keyword2, keyword3">
                    <p class="mt-1 text-xs text-gray-500">Separate keywords with commas.</p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="px-6 py-3 bg-gray-50 border-t border-gray-200 flex justify-between">
        <button type="button" onclick="confirmDelete()" class="px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700 transition-colors">
            <i class="fas fa-trash mr-2"></i> Delete Post
        </button>
        
        <button type="submit" class="px-4 py-2 bg-primary text-white rounded hover:bg-primary/80 transition-colors">
            <i class="fas fa-save mr-2"></i> Update Post
        </button>
    </div>
</form>

<!-- Separate delete form outside the main form -->
<form id="delete-form" action="{{ route('admin.blog.destroy', ['blog' => $blog]) }}" method="POST" class="hidden">
    @csrf
    @method('DELETE')
</form>
@endsection

@section('scripts')
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<script>
    var quill;
    
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize Quill editor
        quill = new Quill('#editor', {
            theme: 'snow',
            modules: {
                toolbar: [
                    [{ 'header': [1, 2, 3, 4, 5, 6, false] }],
                    ['bold', 'italic', 'underline', 'strike'],
                    [{ 'color': [] }, { 'background': [] }],
                    ['blockquote', 'code-block'],
                    [{ 'list': 'ordered' }, { 'list': 'bullet' }],
                    [{ 'indent': '-1' }, { 'indent': '+1' }],
                    [{ 'align': [] }],
                    ['link'],
                    ['clean']
                ]
            },
            placeholder: 'Write your content here...',
        });
    });
    
    // Function to run before form submission
    function prepareSubmit() {
        console.log('Preparing to submit form...');
        
        // Get the content from Quill
        const contentInput = document.getElementById('content-input');
        const quillContent = quill.root.innerHTML;
        
        console.log('Quill content:', quillContent);
        
        // Set the content to the hidden input
        contentInput.value = quillContent;
        
        // Check if content is empty
        const isEmpty = quill.getText().trim().length === 0 || 
                        quillContent === '<p><br></p>' || 
                        quillContent === '';
        
        if (isEmpty) {
            console.log('Content is empty, preventing submission');
            alert('Please add some content to your blog post.');
            return false;
        }
        
        console.log('Content is valid, proceeding with submission');
        console.log('Final content value:', contentInput.value);
        
        // Allow the form to submit
        return true;
    }
    
    // Confirm delete function
    function confirmDelete() {
        if (confirm('Are you sure you want to delete this post? This action cannot be undone.')) {
            document.getElementById('delete-form').submit();
        }
    }
</script>
@endsection 