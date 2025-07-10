@extends('admin.layouts.app')

@section('title', 'Create Blog Post')
@section('page-title', 'Create Blog Post')

@section('styles')
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
<style>
    .ql-editor {
        min-height: 300px;
        font-size: 16px;
        line-height: 1.6;
    }
    .ql-toolbar.ql-snow, 
    .ql-container.ql-snow {
        border-color: #e5e7eb;
    }
    .ql-toolbar.ql-snow {
        border-top-left-radius: 0.75rem;
        border-top-right-radius: 0.75rem;
        background: #f9fafb;
    }
    .ql-container.ql-snow {
        border-bottom-left-radius: 0.75rem;
        border-bottom-right-radius: 0.75rem;
    }
    .ql-editor p, .ql-editor ol, .ql-editor ul, .ql-editor pre, .ql-editor blockquote, .ql-editor h1, .ql-editor h2, .ql-editor h3 {
        margin-bottom: 0.75em;
    }
    
    .form-section {
        background: linear-gradient(145deg, #ffffff 0%, #f8fafc 100%);
        border: 1px solid #e2e8f0;
        border-radius: 1rem;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
    }
    
    .input-field {
        border: 2px solid #e2e8f0;
        border-radius: 0.75rem;
        transition: all 0.3s ease;
        background: white;
    }
    
    .input-field:focus {
        border-color: #0078bf;
        box-shadow: 0 0 0 3px rgba(0, 120, 191, 0.1);
        transform: translateY(-1px);
    }
    
    .section-header {
        background: linear-gradient(135deg, #0078bf 0%, #005a8f 100%);
        color: white;
        border-radius: 0.75rem;
        padding: 1rem 1.5rem;
        margin-bottom: 1.5rem;
        box-shadow: 0 4px 12px rgba(0, 120, 191, 0.3);
    }
    
    .btn-primary {
        background: linear-gradient(135deg, #0078bf 0%, #005a8f 100%);
        border: none;
        border-radius: 0.75rem;
        padding: 0.75rem 2rem;
        font-weight: 600;
        transition: all 0.3s ease;
        box-shadow: 0 4px 12px rgba(0, 120, 191, 0.3);
    }
    
    .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(0, 120, 191, 0.4);
    }
    
    .slug-preview {
        background: #f0f9ff;
        border: 2px dashed #0078bf;
        border-radius: 0.5rem;
        padding: 0.75rem;
        font-family: 'Courier New', monospace;
        color: #0078bf;
        font-weight: 500;
    }
    
    .tag-checkbox {
        background: white;
        border: 2px solid #e2e8f0;
        border-radius: 0.5rem;
        padding: 0.5rem 1rem;
        transition: all 0.3s ease;
        cursor: pointer;
    }
    
    .tag-checkbox:hover {
        border-color: #0078bf;
        background: #f0f9ff;
    }
    
    .tag-checkbox.selected {
        background: #0078bf;
        border-color: #0078bf;
        color: white;
    }
</style>
@endsection

@section('content')
<div class="min-h-screen bg-gradient-to-br from-slate-50 via-blue-50 to-slate-100">
    <!-- Header Section -->
    <div class="bg-white border-b border-gray-200 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center py-6">
                <div>
                    <h1 class="text-3xl font-bold text-gray-900">Create New Blog Post</h1>
                    <p class="mt-2 text-sm text-gray-600">Share your thoughts with the world</p>
                </div>
                <div class="flex space-x-3">
                    <a href="{{ route('admin.blog.index') }}" 
                       class="inline-flex items-center px-4 py-2 border-2 border-gray-300 rounded-lg text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 hover:border-gray-400 transition-all duration-200">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                        </svg>
                        Back to List
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <form id="blog-form" action="{{ route('admin.blog.store') }}" method="POST" enctype="multipart/form-data" 
              onsubmit="return prepareSubmit()" x-data="blogForm()">
            @csrf

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Main Content Column -->
                <div class="lg:col-span-2 space-y-8">
                    <!-- Basic Information Section -->
                    <div class="form-section">
                        <div class="section-header">
                            <h2 class="text-xl font-bold flex items-center">
                                <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                </svg>
                                Basic Information
                            </h2>
                        </div>
                        
                        <div class="p-6 space-y-6">
                            <!-- Title Field -->
                            <div>
                                <label for="title" class="block text-sm font-semibold text-gray-700 mb-2">
                                    Post Title <span class="text-red-500">*</span>
                                </label>
                                <input type="text" name="title" id="title" x-model="title" @input="generateSlug"
                                    class="input-field w-full px-4 py-3 text-lg @error('title') border-red-500 @enderror" 
                                    value="{{ old('title') }}" required 
                                    placeholder="Enter your blog post title...">
                                @error('title')
                                    <p class="mt-2 text-sm text-red-600 flex items-center">
                                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                        </svg>
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>

                            <!-- Slug Field -->
                            <div>
                                <label for="slug" class="block text-sm font-semibold text-gray-700 mb-2">
                                    URL Slug <span class="text-red-500">*</span>
                                </label>
                                <input type="text" name="slug" id="slug" x-model="slug"
                                    class="input-field w-full px-4 py-3 @error('slug') border-red-500 @enderror" 
                                    value="{{ old('slug') }}" required 
                                    placeholder="url-friendly-slug">
                                
                                <!-- URL Preview -->
                                <div class="mt-3 slug-preview">
                                    <span class="text-sm">URL Preview:</span><br>
                                    <span class="text-lg font-mono">{{ url('/blog') }}/<span x-text="slug || 'your-post-slug'"></span></span>
                                </div>
                                
                                @error('slug')
                                    <p class="mt-2 text-sm text-red-600 flex items-center">
                                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                        </svg>
                                        {{ $message }}
                                    </p>
                                @enderror
                                
                                <p class="mt-2 text-xs text-gray-500">
                                    The slug is automatically generated from your title, but you can customize it. Use lowercase letters, numbers, and hyphens only.
                                </p>
                            </div>

                            <!-- Content Field -->
                            <div>
                                <label for="editor" class="block text-sm font-semibold text-gray-700 mb-2">
                                    Content <span class="text-red-500">*</span>
                                </label>
                                <div class="bg-white rounded-xl overflow-hidden shadow-sm">
                                    <div id="editor">{!! old('content') !!}</div>
                                </div>
                                <input type="hidden" name="content" id="content-input">
                                @error('content')
                                    <p class="mt-2 text-sm text-red-600 flex items-center">
                                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                        </svg>
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>

                            <!-- Dynamic Sections Builder -->
                            @include('admin.blog.partials.section-builder', ['blog' => new \App\Models\BlogPost()])

                            <!-- Sidebar Cards Builder -->
                            <div class="mt-8">
                                @include('admin.blog.partials.sidebar-cards-builder', ['blog' => new \App\Models\BlogPost()])
                            </div>

                            <!-- Excerpt Field -->
                            <div>
                                <label for="excerpt" class="block text-sm font-semibold text-gray-700 mb-2">
                                    Excerpt <span class="text-gray-500 text-xs">(optional)</span>
                                </label>
                                <textarea name="excerpt" id="excerpt" rows="4" 
                                    class="input-field w-full px-4 py-3 @error('excerpt') border-red-500 @enderror"
                                    placeholder="Write a compelling summary that will appear in search results and blog previews...">{{ old('excerpt') }}</textarea>
                                <p class="mt-2 text-xs text-gray-500">
                                    A good excerpt is 150-160 characters. If left empty, one will be generated automatically.
                                </p>
                                @error('excerpt')
                                    <p class="mt-2 text-sm text-red-600 flex items-center">
                                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                        </svg>
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <!-- SEO Section -->
                    <div class="form-section" x-data="{ seoOpen: false }">
                        <div class="section-header cursor-pointer" @click="seoOpen = !seoOpen">
                            <h2 class="text-xl font-bold flex items-center justify-between">
                                <span class="flex items-center">
                                    <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                                    </svg>
                                    SEO Settings
                                </span>
                                <svg class="w-5 h-5 transition-transform duration-200" :class="seoOpen ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                                </svg>
                            </h2>
                        </div>
                        
                        <div x-show="seoOpen" x-collapse class="p-6 space-y-6">
                            <!-- Meta Title -->
                            <div>
                                <label for="meta_title" class="block text-sm font-semibold text-gray-700 mb-2">Meta Title</label>
                                <input type="text" name="meta_title" id="meta_title" 
                                    class="input-field w-full px-4 py-3" 
                                    value="{{ old('meta_title') }}"
                                    placeholder="SEO-optimized title for search engines">
                                <p class="mt-2 text-xs text-gray-500">Optimal length: 50-60 characters. If empty, the post title will be used.</p>
                            </div>
                            
                            <!-- Meta Description -->
                            <div>
                                <label for="meta_description" class="block text-sm font-semibold text-gray-700 mb-2">Meta Description</label>
                                <textarea name="meta_description" id="meta_description" rows="3" 
                                    class="input-field w-full px-4 py-3"
                                    placeholder="A compelling description that will appear in search engine results...">{{ old('meta_description') }}</textarea>
                                <p class="mt-2 text-xs text-gray-500">Optimal length: 150-160 characters. This appears in search engine results.</p>
                            </div>
                            
                            <!-- Meta Keywords -->
                            <div>
                                <label for="meta_keywords" class="block text-sm font-semibold text-gray-700 mb-2">Meta Keywords</label>
                                <input type="text" name="meta_keywords" id="meta_keywords" 
                                    class="input-field w-full px-4 py-3" 
                                    value="{{ old('meta_keywords') }}" 
                                    placeholder="keyword1, keyword2, keyword3">
                                <p class="mt-2 text-xs text-gray-500">Separate keywords with commas. Focus on 3-5 relevant keywords.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Column -->
                <div class="lg:col-span-1 space-y-8">
                    <!-- Featured Image -->
                    <div class="form-section">
                        <div class="section-header">
                            <h3 class="text-lg font-bold flex items-center">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                </svg>
                                Featured Image
                            </h3>
                        </div>
                        
                        <div class="p-6">
                            <div class="border-2 border-dashed border-gray-300 rounded-lg p-6 text-center hover:border-blue-400 transition-colors">
                                <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48">
                                    <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <div class="mt-4">
                                    <label for="featured_image" class="cursor-pointer">
                                        <span class="mt-2 block text-sm font-medium text-gray-900">Upload a featured image</span>
                                        <input type="file" name="featured_image" id="featured_image" class="sr-only" accept="image/*">
                                    </label>
                                </div>
                                <p class="mt-2 text-xs text-gray-500">PNG, JPG, GIF up to 2MB</p>
                            </div>
                            @error('featured_image')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Publishing Options -->
                    <div class="form-section">
                        <div class="section-header">
                            <h3 class="text-lg font-bold flex items-center">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                Publishing
                            </h3>
                        </div>
                        
                        <div class="p-6">
                            <div class="flex items-center justify-between p-4 bg-blue-50 rounded-lg border border-blue-200">
                                <div>
                                    <label for="is_published" class="text-sm font-medium text-gray-900">Publish Now</label>
                                    <p class="text-xs text-gray-500">Make this post visible to readers</p>
                                </div>
                                <input type="checkbox" name="is_published" id="is_published" value="1" 
                                    class="h-5 w-5 text-blue-600 border-2 border-gray-300 rounded focus:ring-blue-500"
                                    {{ old('is_published') ? 'checked' : '' }}>
                            </div>
                            <p class="mt-3 text-xs text-gray-500">
                                If unchecked, the post will be saved as a draft and can be published later.
                            </p>
                        </div>
                    </div>

                    <!-- Tags -->
                    <div class="form-section">
                        <div class="section-header">
                            <h3 class="text-lg font-bold flex items-center">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.99 1.99 0 013 12V7a4 4 0 014-4z"/>
                                </svg>
                                Tags
                            </h3>
                        </div>
                        
                        <div class="p-6">
                            <div class="space-y-3 max-h-48 overflow-y-auto">
                                @foreach($tags as $tag)
                                    <label class="tag-checkbox flex items-center cursor-pointer">
                                        <input type="checkbox" name="tags[]" value="{{ $tag->id }}" 
                                            class="sr-only"
                                            {{ in_array($tag->id, old('tags', [])) ? 'checked' : '' }}>
                                        <span class="flex-1">{{ $tag->name }}</span>
                                        <svg class="w-4 h-4 opacity-0 transition-opacity" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                        </svg>
                                    </label>
                                @endforeach
                            </div>
                            <div class="mt-4 pt-4 border-t border-gray-200">
                                <a href="{{ route('admin.tags.index') }}" target="_blank"
                                   class="text-sm text-blue-600 hover:text-blue-700 font-medium">
                                    <svg class="w-4 h-4 inline mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                                    </svg>
                                    Manage Tags
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Categories -->
                    <div class="form-section">
                        <div class="section-header">
                            <h3 class="text-lg font-bold flex items-center">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                                </svg>
                                Categories
                            </h3>
                        </div>
                        
                        <div class="p-6">
                            <div class="space-y-2 max-h-48 overflow-y-auto">
                                @foreach($categories as $category)
                                    <div>
                                        <label class="tag-checkbox flex items-center cursor-pointer">
                                            <input type="checkbox" name="categories[]" value="{{ $category->id }}" 
                                                class="sr-only"
                                                {{ in_array($category->id, old('categories', [])) ? 'checked' : '' }}>
                                            <span class="flex-1 font-medium">{{ $category->name }}</span>
                                            <svg class="w-4 h-4 opacity-0 transition-opacity" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                            </svg>
                                        </label>
                                        
                                        @if($category->children->count() > 0)
                                            <div class="ml-4 mt-2 space-y-1">
                                                @foreach($category->children as $subcategory)
                                                    <label class="tag-checkbox flex items-center cursor-pointer text-sm">
                                                        <input type="checkbox" name="categories[]" value="{{ $subcategory->id }}" 
                                                            class="sr-only"
                                                            {{ in_array($subcategory->id, old('categories', [])) ? 'checked' : '' }}>
                                                        <span class="flex-1">{{ $subcategory->name }}</span>
                                                        <svg class="w-4 h-4 opacity-0 transition-opacity" fill="currentColor" viewBox="0 0 20 20">
                                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                                        </svg>
                                                    </label>
                                                @endforeach
                                            </div>
                                        @endif
                                    </div>
                                @endforeach
                            </div>
                            <div class="mt-4 pt-4 border-t border-gray-200">
                                <a href="{{ route('admin.categories.index') }}" target="_blank"
                                   class="text-sm text-blue-600 hover:text-blue-700 font-medium">
                                    <svg class="w-4 h-4 inline mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                                    </svg>
                                    Manage Categories
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="mt-8 flex justify-end space-x-4">
                <a href="{{ route('admin.blog.index') }}" 
                   class="px-6 py-3 border-2 border-gray-300 rounded-lg text-gray-700 font-medium hover:bg-gray-50 hover:border-gray-400 transition-all duration-200">
                    Cancel
                </a>
                <button type="submit" class="btn-primary text-white font-semibold">
                    <svg class="w-5 h-5 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                    </svg>
                    Create Blog Post
                </button>
            </div>
        </form>
    </div>
</div>
@endsection

@section('scripts')
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<script>
    var quill;
    
    // Blog form Alpine.js component
    function blogForm() {
        return {
            title: '{{ old('title') }}',
            slug: '{{ old('slug') }}',
            
            generateSlug() {
                if (this.title) {
                    this.slug = this.title
                        .toLowerCase()
                        .replace(/[^a-z0-9\s-]/g, '') // Remove special characters
                        .replace(/\s+/g, '-')         // Replace spaces with hyphens
                        .replace(/-+/g, '-')          // Replace multiple hyphens with single
                        .trim('-');                   // Remove leading/trailing hyphens
                }
            }
        }
    }
    
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
                    ['link', 'image'],
                    ['clean']
                ]
            },
            placeholder: 'Start writing your amazing blog post...',
        });

        // Handle tag checkbox styling
        document.querySelectorAll('.tag-checkbox').forEach(label => {
            const checkbox = label.querySelector('input[type="checkbox"]');
            const checkmark = label.querySelector('svg');
            
            function updateStyle() {
                if (checkbox.checked) {
                    label.classList.add('selected');
                    checkmark.style.opacity = '1';
                } else {
                    label.classList.remove('selected');
                    checkmark.style.opacity = '0';
                }
            }
            
            checkbox.addEventListener('change', updateStyle);
            updateStyle(); // Set initial state
        });

        // Handle file upload preview
        document.getElementById('featured_image').addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const preview = document.createElement('img');
                    preview.src = e.target.result;
                    preview.className = 'mt-4 max-w-full h-48 object-cover rounded-lg shadow-md';
                    
                    // Remove existing preview
                    const existingPreview = document.querySelector('.file-preview');
                    if (existingPreview) {
                        existingPreview.remove();
                    }
                    
                    // Add new preview
                    const container = document.createElement('div');
                    container.className = 'file-preview';
                    container.appendChild(preview);
                    document.getElementById('featured_image').parentNode.parentNode.appendChild(container);
                };
                reader.readAsDataURL(file);
            }
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

        // Check if slug is empty
        const slugInput = document.getElementById('slug');
        if (!slugInput.value.trim()) {
            alert('Please provide a URL slug for your blog post.');
            slugInput.focus();
            return false;
        }
        
        console.log('Content is valid, proceeding with submission');
        console.log('Final content value:', contentInput.value);
        
        // Show loading state
        const submitBtn = document.querySelector('button[type="submit"]');
        submitBtn.disabled = true;
        submitBtn.innerHTML = `
            <svg class="animate-spin -ml-1 mr-2 h-4 w-4 text-white inline" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
            </svg>
            Creating Post...
        `;
        
        // Allow the form to submit
        return true;
    }
</script>
@endsection 