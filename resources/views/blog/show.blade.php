@extends('layouts.app')

@section('title', $post->meta_title ?? $post->title)
@section('meta_description', $post->meta_description ?? $post->excerpt)
@section('meta_keywords', $post->meta_keywords ?? '')

@section('content')
<div class="container mx-auto px-4 py-12">
    <div class="flex flex-col md:flex-row">
        <div class="w-full md:w-3/4 md:pr-8">
            <article class="bg-white rounded-lg shadow-md overflow-hidden">
                @if($post->featured_image)
                    <div class="h-80 w-full overflow-hidden">
                        <img src="{{ asset('storage/' . $post->featured_image) }}" alt="{{ $post->title }}" class="w-full h-full object-cover">
                    </div>
                @endif
                
                <div class="p-8">
                    <h1 class="text-3xl font-bold mb-4">{{ $post->title }}</h1>
                    
                    <div class="flex items-center text-gray-500 mb-6">
                        <span class="mr-4">
                            <i class="bi bi-calendar mr-1"></i> {{ $post->published_at->format('F j, Y') }}
                        </span>
                        <span>
                            <i class="bi bi-person mr-1"></i> {{ $post->user->name ?? 'Admin' }}
                        </span>
                    </div>
                    
                    @if($post->tags->count() > 0)
                        <div class="mb-6">
                            <span class="text-gray-500 text-sm mr-2">Tags:</span>
                            @foreach($post->tags as $tag)
                                <a href="{{ route('blog.index', ['tag' => $tag->slug]) }}" class="inline-block bg-gray-100 text-gray-700 text-sm px-3 py-1 rounded-full mr-2 mb-2 hover:bg-primary hover:text-white transition-colors">
                                    <i class="fas fa-tag mr-1"></i> {{ $tag->name }}
                                </a>
                            @endforeach
                        </div>
                    @endif
                    
                    @if($post->categories->count() > 0)
                        <div class="mb-6">
                            <span class="text-gray-500 text-sm mr-2">Categories:</span>
                            @foreach($post->categories as $category)
                                <a href="{{ route('blog.index', ['category' => $category->slug]) }}" class="inline-block bg-gray-100 text-gray-700 text-sm px-3 py-1 rounded-full mr-2 mb-2 hover:bg-primary hover:text-white transition-colors">
                                    <i class="fas fa-folder mr-1"></i> {{ $category->getFullPath() }}
                                </a>
                            @endforeach
                        </div>
                    @endif
                    
                    <div class="prose max-w-none">
                        {!! $post->content !!}
                    </div>
                    
                    <!-- Dynamic Sections -->
                    @include('blog.partials.section-renderer')
                    
                    <div class="mt-8 pt-8 border-t">
                        <div class="flex justify-between">
                            <a href="{{ route('blog.index') }}" class="text-primary hover:underline">
                                <i class="bi bi-arrow-left mr-1"></i> Back to Blog
                            </a>
                            
                            <div class="flex space-x-4">
                                <a href="https://twitter.com/intent/tweet?text={{ urlencode($post->title) }}&url={{ urlencode(route('blog.show', $post->slug)) }}" target="_blank" class="text-gray-500 hover:text-blue-400" aria-label="Share on Twitter">
                                    <i class="bi bi-twitter"></i>
                                </a>
                                <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(route('blog.show', $post->slug)) }}" target="_blank" class="text-gray-500 hover:text-blue-600" aria-label="Share on Facebook">
                                    <i class="bi bi-facebook"></i>
                                </a>
                                <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(route('blog.show', $post->slug)) }}&title={{ urlencode($post->title) }}" target="_blank" class="text-gray-500 hover:text-blue-700" aria-label="Share on LinkedIn">
                                    <i class="bi bi-linkedin"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            
            @if($relatedPosts->count() > 0)
                <div class="mt-12">
                    <h2 class="text-2xl font-bold mb-6">Related Posts</h2>
                    
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        @foreach($relatedPosts as $relatedPost)
                            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
                                @if($relatedPost->featured_image)
                                    <div class="h-40 overflow-hidden">
                                        <img src="{{ asset('storage/' . $relatedPost->featured_image) }}" alt="{{ $relatedPost->title }}" class="w-full h-full object-cover">
                                    </div>
                                @else
                                    <div class="h-40 bg-gray-200 flex items-center justify-center">
                                        <span class="text-gray-400 text-2xl"><i class="bi bi-image"></i></span>
                                    </div>
                                @endif
                                
                                <div class="p-4">
                                    <div class="mb-1 text-xs text-gray-500">
                                        {{ $relatedPost->published_at->format('F j, Y') }}
                                    </div>
                                    <h3 class="text-lg font-bold mb-2">{{ $relatedPost->title }}</h3>
                                    <a href="{{ route('blog.show', $relatedPost->slug) }}" class="text-primary hover:underline text-sm font-medium">
                                        Read More <i class="bi bi-arrow-right ml-1"></i>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
        
        <div class="w-full md:w-1/4 mt-10 md:mt-0">
            <div class="bg-white rounded-lg shadow-md p-6">
                <h3 class="text-xl font-bold mb-4">Categories</h3>
                <ul class="space-y-2">
                    @foreach(\App\Models\Category::withCount('blogPosts')->get() as $category)
                        <li>
                            <a href="{{ route('blog.index', ['category' => $category->slug]) }}" 
                               class="flex justify-between items-center text-gray-700 hover:text-primary transition-colors {{ $post->categories->contains($category) ? 'text-primary font-medium' : '' }}">
                                <span class="flex items-center">
                                    <i class="fas fa-folder mr-2"></i>
                                    {{ $category->name }}
                                </span>
                                <span class="bg-gray-100 text-gray-600 text-xs font-medium px-2 py-1 rounded-full">{{ $category->blog_posts_count }}</span>
                            </a>
                            
                            @if($category->children->count() > 0)
                                <ul class="ml-4 mt-1 space-y-1">
                                    @foreach($category->children as $subcategory)
                                        <li>
                                            <a href="{{ route('blog.index', ['category' => $subcategory->slug]) }}" 
                                               class="flex justify-between items-center text-gray-600 hover:text-primary transition-colors {{ $post->categories->contains($subcategory) ? 'text-primary font-medium' : '' }}">
                                                <span class="flex items-center">
                                                    <i class="fas fa-folder-open mr-2"></i>
                                                    {{ $subcategory->name }}
                                                </span>
                                                <span class="bg-gray-100 text-gray-600 text-xs font-medium px-2 py-1 rounded-full">{{ $subcategory->blog_posts_count }}</span>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        </li>
                    @endforeach
                </ul>
            </div>
            
            <div class="bg-white rounded-lg shadow-md p-6 mt-6 sticky top-8">
                <h3 class="text-xl font-bold mb-4">Tags</h3>
                <div class="flex flex-wrap gap-2 max-h-96 overflow-y-auto">
                    @foreach(\App\Models\Tag::has('blogPosts')->withCount('blogPosts')->get() as $tag)
                        <a href="{{ route('blog.index', ['tag' => $tag->slug]) }}" 
                           class="inline-flex items-center bg-gray-100 text-gray-700 text-sm px-3 py-1 rounded-full hover:bg-primary hover:text-white transition-colors {{ $post->tags->contains($tag) ? 'bg-primary text-white' : '' }}">
                            <i class="fas fa-tag mr-1"></i>
                            {{ $tag->name }}
                            <span class="ml-1 bg-white/20 text-xs px-1.5 py-0.5 rounded-full">{{ $tag->blog_posts_count }}</span>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 