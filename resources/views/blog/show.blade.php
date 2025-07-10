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
                    
                    <div class="prose max-w-none blog-content">
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
        
        <div class="w-full md:w-1/4 mt-10 md:mt-0 space-y-6">
            <!-- Sidebar Product Cards -->
            @if($post->sidebar_cards && count($post->sidebar_cards) > 0)
                <div class="bg-white rounded-xl shadow-lg p-6 border border-gray-100">
                    <h3 class="text-xl font-bold mb-6 text-gray-900 flex items-center">
                        <svg class="w-5 h-5 mr-2 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                        </svg>
                        Related Products
                    </h3>
                    
                    <div class="space-y-4">
                        @foreach($post->sidebar_cards as $card)
                            @if(!empty($card['title']))
                                <div class="group bg-gradient-to-br from-gray-50 to-white rounded-xl p-4 border border-gray-200 hover:border-primary/30 hover:shadow-md transition-all duration-300">
                                    <div class="flex items-start space-x-4">
                                        @if(!empty($card['image']))
                                            <div class="flex-shrink-0">
                                                <img src="{{ $card['image'] }}" alt="{{ $card['title'] }}" 
                                                     class="w-16 h-16 object-cover rounded-lg group-hover:scale-105 transition-transform duration-300">
                                            </div>
                                        @endif
                                        
                                        <div class="flex-1 min-w-0">
                                            <h4 class="font-semibold text-gray-900 mb-2 group-hover:text-primary transition-colors">
                                                {{ $card['title'] }}
                                            </h4>
                                            
                                            @if(!empty($card['description']))
                                                <p class="text-gray-600 text-sm leading-relaxed mb-3">
                                                    {{ str($card['description'])->limit(80) }}
                                                </p>
                                            @endif
                                            
                                            @if(!empty($card['link']))
                                                <a href="{{ $card['link'] }}" 
                                                   class="inline-flex items-center text-primary hover:text-primary-dark font-medium text-sm group-hover:translate-x-1 transition-all duration-300">
                                                    View Product
                                                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                                                    </svg>
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            @endif

            <!-- Categories -->
            <div class="bg-white rounded-xl shadow-lg p-6 border border-gray-100">
                <h3 class="text-xl font-bold mb-4 text-gray-900 flex items-center">
                    <svg class="w-5 h-5 mr-2 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                    </svg>
                    Categories
                </h3>
                <ul class="space-y-3">
                    @foreach(\App\Models\Category::withCount('blogPosts')->orderBy('blog_posts_count', 'desc')->take(8)->get() as $category)
                        <li>
                            <a href="{{ route('blog.index', ['category' => $category->slug]) }}" 
                               class="group flex justify-between items-center p-3 rounded-lg hover:bg-gray-50 transition-all duration-200 {{ $post->categories->contains($category) ? 'bg-primary/10 text-primary' : 'text-gray-700 hover:text-primary' }}">
                                <span class="flex items-center">
                                    <svg class="w-4 h-4 mr-3 {{ $post->categories->contains($category) ? 'text-primary' : 'text-gray-400 group-hover:text-primary' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                                    </svg>
                                    <span class="font-medium">{{ $category->name }}</span>
                                </span>
                                <span class="bg-gray-100 text-gray-600 text-xs font-semibold px-2 py-1 rounded-full group-hover:bg-primary group-hover:text-white transition-all duration-200">
                                    {{ $category->blog_posts_count }}
                                </span>
                            </a>
                        </li>
                    @endforeach
                </ul>
                
                @if(\App\Models\Category::withCount('blogPosts')->count() > 8)
                    <div class="mt-4 pt-4 border-t border-gray-200">
                        <a href="{{ route('blog.index') }}" class="text-primary hover:text-primary-dark text-sm font-medium inline-flex items-center">
                            View All Categories
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </a>
                    </div>
                @endif
            </div>
            
            <!-- Popular Tags -->
            <div class="bg-white rounded-xl shadow-lg p-6 border border-gray-100 sticky top-8">
                <h3 class="text-xl font-bold mb-4 text-gray-900 flex items-center">
                    <svg class="w-5 h-5 mr-2 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.99 1.99 0 013 12V7a4 4 0 014-4z"/>
                    </svg>
                    Popular Tags
                </h3>
                <div class="flex flex-wrap gap-2">
                    @foreach(\App\Models\Tag::has('blogPosts')->withCount('blogPosts')->orderBy('blog_posts_count', 'desc')->take(12)->get() as $tag)
                        <a href="{{ route('blog.index', ['tag' => $tag->slug]) }}" 
                           class="inline-flex items-center px-3 py-2 rounded-full text-sm font-medium transition-all duration-200 hover:scale-105 {{ $post->tags->contains($tag) ? 'bg-primary text-white shadow-lg' : 'bg-gray-100 text-gray-700 hover:bg-primary hover:text-white hover:shadow-md' }}">
                            <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.99 1.99 0 013 12V7a4 4 0 014-4z"/>
                            </svg>
                            {{ $tag->name }}
                            <span class="ml-2 bg-white/20 text-xs px-1.5 py-0.5 rounded-full font-semibold">
                                {{ $tag->blog_posts_count }}
                            </span>
                        </a>
                    @endforeach
                </div>
                
                @if(\App\Models\Tag::has('blogPosts')->count() > 12)
                    <div class="mt-4 pt-4 border-t border-gray-200">
                        <a href="{{ route('blog.index') }}" class="text-primary hover:text-primary-dark text-sm font-medium inline-flex items-center">
                            View All Tags
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>

<style>
/* Universal Blog Content Styling */
.blog-content,
.dynamic-sections .prose,
.section-one-column .prose,
.section-two-column .prose,
.section-three-column .prose,
.section-text-image .prose {
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
    line-height: 1.7;
    color: #374151;
}

/* Universal Heading Styles for All Blog Content */
.blog-content h1,
.dynamic-sections .prose h1,
.section-one-column .prose h1,
.section-two-column .prose h1,
.section-three-column .prose h1,
.section-text-image .prose h1 {
    font-size: 2.5rem !important;
    font-weight: 800 !important;
    color: #111827 !important;
    line-height: 1.2 !important;
    margin-top: 3rem !important;
    margin-bottom: 1.5rem !important;
    border-bottom: 3px solid #3B82F6;
    padding-bottom: 0.5rem;
}

.blog-content h2 {
    font-size: 2rem !important;
    font-weight: 700 !important;
    color: #1F2937 !important;
    line-height: 1.3 !important;
    margin-top: 2.5rem !important;
    margin-bottom: 1.25rem !important;
    position: relative;
}

.blog-content h2,
.dynamic-sections .prose h2,
.section-one-column .prose h2,
.section-two-column .prose h2,
.section-three-column .prose h2,
.section-text-image .prose h2 {
    font-size: 2rem !important;
    font-weight: 700 !important;
    color: #1F2937 !important;
    line-height: 1.3 !important;
    margin-top: 2.5rem !important;
    margin-bottom: 1.25rem !important;
    position: relative;
}

.blog-content h2:before,
.dynamic-sections .prose h2:before,
.section-one-column .prose h2:before,
.section-two-column .prose h2:before,
.section-three-column .prose h2:before,
.section-text-image .prose h2:before {
    content: '';
    position: absolute;
    left: -1rem;
    top: 50%;
    transform: translateY(-50%);
    width: 4px;
    height: 1.5rem;
    background: linear-gradient(to bottom, #3B82F6, #1D4ED8);
    border-radius: 2px;
}

.blog-content h3 {
    font-size: 1.75rem !important;
    font-weight: 600 !important;
    color: #374151 !important;
    line-height: 1.4 !important;
    margin-top: 2rem !important;
    margin-bottom: 1rem !important;
}

.blog-content h3,
.dynamic-sections .prose h3,
.section-one-column .prose h3,
.section-two-column .prose h3,
.section-three-column .prose h3,
.section-text-image .prose h3 {
    font-size: 1.75rem !important;
    font-weight: 600 !important;
    color: #374151 !important;
    line-height: 1.4 !important;
    margin-top: 2rem !important;
    margin-bottom: 1rem !important;
}

.blog-content h4 {
    font-size: 1.5rem !important;
    font-weight: 600 !important;
    color: #4B5563 !important;
    line-height: 1.4 !important;
    margin-top: 1.75rem !important;
    margin-bottom: 0.875rem !important;
}

.blog-content h4,
.dynamic-sections .prose h4,
.section-one-column .prose h4,
.section-two-column .prose h4,
.section-three-column .prose h4,
.section-text-image .prose h4 {
    font-size: 1.5rem !important;
    font-weight: 600 !important;
    color: #4B5563 !important;
    line-height: 1.4 !important;
    margin-top: 1.75rem !important;
    margin-bottom: 0.875rem !important;
}

.blog-content h5,
.dynamic-sections .prose h5,
.section-one-column .prose h5,
.section-two-column .prose h5,
.section-three-column .prose h5,
.section-text-image .prose h5 {
    font-size: 1.25rem !important;
    font-weight: 600 !important;
    color: #6B7280 !important;
    line-height: 1.5 !important;
    margin-top: 1.5rem !important;
    margin-bottom: 0.75rem !important;
}

.blog-content h6,
.dynamic-sections .prose h6,
.section-one-column .prose h6,
.section-two-column .prose h6,
.section-three-column .prose h6,
.section-text-image .prose h6 {
    font-size: 1.125rem !important;
    font-weight: 600 !important;
    color: #6B7280 !important;
    line-height: 1.5 !important;
    margin-top: 1.25rem !important;
    margin-bottom: 0.625rem !important;
    text-transform: uppercase;
    letter-spacing: 0.05em;
}

/* Universal Paragraph Styles */
.blog-content p,
.dynamic-sections .prose p,
.section-one-column .prose p,
.section-two-column .prose p,
.section-three-column .prose p,
.section-text-image .prose p {
    font-size: 1.125rem !important;
    line-height: 1.8 !important;
    margin-bottom: 1.5rem !important;
    color: #374151;
}

.blog-content p:first-of-type,
.dynamic-sections .prose p:first-of-type,
.section-one-column .prose p:first-of-type,
.section-two-column .prose p:first-of-type,
.section-three-column .prose p:first-of-type,
.section-text-image .prose p:first-of-type {
    font-size: 1.25rem !important;
    font-weight: 400;
    color: #1F2937;
}

/* Universal List Styles */
.blog-content ul,
.blog-content ol,
.dynamic-sections .prose ul,
.dynamic-sections .prose ol,
.section-one-column .prose ul,
.section-one-column .prose ol,
.section-two-column .prose ul,
.section-two-column .prose ol,
.section-three-column .prose ul,
.section-three-column .prose ol,
.section-text-image .prose ul,
.section-text-image .prose ol {
    margin: 1.5rem 0 !important;
    padding-left: 2rem !important;
}

.blog-content ul li,
.blog-content ol li,
.dynamic-sections .prose ul li,
.dynamic-sections .prose ol li,
.section-one-column .prose ul li,
.section-one-column .prose ol li,
.section-two-column .prose ul li,
.section-two-column .prose ol li,
.section-three-column .prose ul li,
.section-three-column .prose ol li,
.section-text-image .prose ul li,
.section-text-image .prose ol li {
    font-size: 1.125rem !important;
    line-height: 1.7 !important;
    margin-bottom: 0.75rem !important;
    color: #374151;
}

.blog-content ul li,
.dynamic-sections .prose ul li,
.section-one-column .prose ul li,
.section-two-column .prose ul li,
.section-three-column .prose ul li,
.section-text-image .prose ul li {
    list-style-type: none;
    position: relative;
}

.blog-content ul li:before,
.dynamic-sections .prose ul li:before,
.section-one-column .prose ul li:before,
.section-two-column .prose ul li:before,
.section-three-column .prose ul li:before,
.section-text-image .prose ul li:before {
    content: '•';
    color: #3B82F6;
    font-weight: bold;
    position: absolute;
    left: -1.5rem;
    font-size: 1.5rem;
    line-height: 1.125rem;
}

.blog-content ol li,
.dynamic-sections .prose ol li,
.section-one-column .prose ol li,
.section-two-column .prose ol li,
.section-three-column .prose ol li,
.section-text-image .prose ol li {
    list-style-type: decimal;
    list-style-position: outside;
}

/* Universal Link Styles */
.blog-content a,
.dynamic-sections .prose a,
.section-one-column .prose a,
.section-two-column .prose a,
.section-three-column .prose a,
.section-text-image .prose a {
    color: #3B82F6 !important;
    text-decoration: underline;
    font-weight: 500;
    transition: all 0.2s ease;
}

.blog-content a:hover,
.dynamic-sections .prose a:hover,
.section-one-column .prose a:hover,
.section-two-column .prose a:hover,
.section-three-column .prose a:hover,
.section-text-image .prose a:hover {
    color: #1D4ED8 !important;
    text-decoration: none;
    background-color: #EBF4FF;
    padding: 0.125rem 0.25rem;
    border-radius: 0.25rem;
}

/* Universal Blockquote Styles */
.blog-content blockquote,
.dynamic-sections .prose blockquote,
.section-one-column .prose blockquote,
.section-two-column .prose blockquote,
.section-three-column .prose blockquote,
.section-text-image .prose blockquote {
    border-left: 4px solid #3B82F6 !important;
    background: linear-gradient(to right, #EBF4FF, transparent) !important;
    padding: 1.5rem 2rem !important;
    margin: 2rem 0 !important;
    font-style: italic;
    font-size: 1.25rem !important;
    line-height: 1.6 !important;
    color: #1F2937 !important;
    border-radius: 0 0.5rem 0.5rem 0;
}

.blog-content blockquote p,
.dynamic-sections .prose blockquote p,
.section-one-column .prose blockquote p,
.section-two-column .prose blockquote p,
.section-three-column .prose blockquote p,
.section-text-image .prose blockquote p {
    margin-bottom: 0 !important;
    font-size: inherit !important;
}

/* Universal Code Styles */
.blog-content code,
.dynamic-sections .prose code,
.section-one-column .prose code,
.section-two-column .prose code,
.section-three-column .prose code,
.section-text-image .prose code {
    background-color: #F3F4F6 !important;
    color: #DC2626 !important;
    padding: 0.25rem 0.5rem !important;
    border-radius: 0.375rem !important;
    font-family: 'SF Mono', Monaco, 'Cascadia Code', 'Roboto Mono', Consolas, 'Courier New', monospace !important;
    font-size: 0.875rem !important;
    font-weight: 600;
}

.blog-content pre,
.dynamic-sections .prose pre,
.section-one-column .prose pre,
.section-two-column .prose pre,
.section-three-column .prose pre,
.section-text-image .prose pre {
    background-color: #1F2937 !important;
    color: #F9FAFB !important;
    padding: 1.5rem !important;
    border-radius: 0.75rem !important;
    overflow-x: auto !important;
    margin: 1.5rem 0 !important;
    line-height: 1.5 !important;
}

.blog-content pre code,
.dynamic-sections .prose pre code,
.section-one-column .prose pre code,
.section-two-column .prose pre code,
.section-three-column .prose pre code,
.section-text-image .prose pre code {
    background-color: transparent !important;
    color: inherit !important;
    padding: 0 !important;
    border-radius: 0 !important;
    font-size: 0.9rem !important;
}

/* Table Styles */
.blog-content table {
    width: 100% !important;
    border-collapse: collapse !important;
    margin: 2rem 0 !important;
    background: white;
    border-radius: 0.75rem;
    overflow: hidden;
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
}

.blog-content th,
.blog-content td {
    padding: 1rem !important;
    text-align: left !important;
    border-bottom: 1px solid #E5E7EB !important;
}

.blog-content th {
    background-color: #F9FAFB !important;
    font-weight: 600 !important;
    color: #374151 !important;
    font-size: 0.875rem !important;
    text-transform: uppercase;
    letter-spacing: 0.05em;
}

.blog-content td {
    color: #6B7280 !important;
}

.blog-content tr:hover {
    background-color: #F9FAFB;
}

/* Image Styles */
.blog-content img {
    max-width: 100% !important;
    height: auto !important;
    border-radius: 0.75rem !important;
    margin: 2rem 0 !important;
    box-shadow: 0 10px 25px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
    transition: all 0.3s ease;
}

.blog-content img:hover {
    transform: scale(1.02);
    box-shadow: 0 20px 40px -4px rgba(0, 0, 0, 0.15), 0 8px 16px -4px rgba(0, 0, 0, 0.1);
}

/* Horizontal Rule */
.blog-content hr {
    border: none !important;
    height: 3px !important;
    background: linear-gradient(to right, #3B82F6, #8B5CF6, #EC4899) !important;
    margin: 3rem 0 !important;
    border-radius: 1.5px;
}

/* Universal Strong and Emphasis */
.blog-content strong,
.blog-content b,
.dynamic-sections .prose strong,
.dynamic-sections .prose b,
.section-one-column .prose strong,
.section-one-column .prose b,
.section-two-column .prose strong,
.section-two-column .prose b,
.section-three-column .prose strong,
.section-three-column .prose b,
.section-text-image .prose strong,
.section-text-image .prose b {
    font-weight: 700 !important;
    color: #1F2937 !important;
}

.blog-content em,
.blog-content i,
.dynamic-sections .prose em,
.dynamic-sections .prose i,
.section-one-column .prose em,
.section-one-column .prose i,
.section-two-column .prose em,
.section-two-column .prose i,
.section-three-column .prose em,
.section-three-column .prose i,
.section-text-image .prose em,
.section-text-image .prose i {
    font-style: italic !important;
    color: #4B5563 !important;
}

/* First Letter Drop Cap */
.blog-content > p:first-of-type::first-letter {
    font-size: 4rem !important;
    font-weight: 900 !important;
    line-height: 3rem !important;
    float: left !important;
    margin-right: 0.5rem !important;
    margin-top: 0.25rem !important;
    color: #3B82F6 !important;
    font-family: Georgia, serif !important;
}

/* Responsive Design */
@media (max-width: 768px) {
    .blog-content h1 {
        font-size: 2rem !important;
        margin-top: 2rem !important;
    }
    
    .blog-content h2 {
        font-size: 1.75rem !important;
        margin-top: 2rem !important;
    }
    
    .blog-content h3 {
        font-size: 1.5rem !important;
        margin-top: 1.5rem !important;
    }
    
    .blog-content h4 {
        font-size: 1.25rem !important;
    }
    
    .blog-content p,
    .blog-content li {
        font-size: 1rem !important;
    }
    
    .blog-content blockquote {
        padding: 1rem 1.5rem !important;
        margin: 1.5rem 0 !important;
        font-size: 1.125rem !important;
    }
    
    .blog-content > p:first-of-type::first-letter {
        font-size: 3rem !important;
        line-height: 2.5rem !important;
    }
}

/* Universal Animation for content reveal */
.blog-content > *,
.dynamic-sections .prose > *,
.section-one-column .prose > *,
.section-two-column .prose > *,
.section-three-column .prose > *,
.section-text-image .prose > * {
    animation: fadeInUp 0.6s ease-out forwards;
    opacity: 0;
    transform: translateY(20px);
}

.blog-content > *:nth-child(1),
.dynamic-sections .prose > *:nth-child(1),
.section-one-column .prose > *:nth-child(1),
.section-two-column .prose > *:nth-child(1),
.section-three-column .prose > *:nth-child(1),
.section-text-image .prose > *:nth-child(1) { animation-delay: 0.1s; }

.blog-content > *:nth-child(2),
.dynamic-sections .prose > *:nth-child(2),
.section-one-column .prose > *:nth-child(2),
.section-two-column .prose > *:nth-child(2),
.section-three-column .prose > *:nth-child(2),
.section-text-image .prose > *:nth-child(2) { animation-delay: 0.2s; }

.blog-content > *:nth-child(3),
.dynamic-sections .prose > *:nth-child(3),
.section-one-column .prose > *:nth-child(3),
.section-two-column .prose > *:nth-child(3),
.section-three-column .prose > *:nth-child(3),
.section-text-image .prose > *:nth-child(3) { animation-delay: 0.3s; }

.blog-content > *:nth-child(4),
.dynamic-sections .prose > *:nth-child(4),
.section-one-column .prose > *:nth-child(4),
.section-two-column .prose > *:nth-child(4),
.section-three-column .prose > *:nth-child(4),
.section-text-image .prose > *:nth-child(4) { animation-delay: 0.4s; }

.blog-content > *:nth-child(5),
.dynamic-sections .prose > *:nth-child(5),
.section-one-column .prose > *:nth-child(5),
.section-two-column .prose > *:nth-child(5),
.section-three-column .prose > *:nth-child(5),
.section-text-image .prose > *:nth-child(5) { animation-delay: 0.5s; }

@keyframes fadeInUp {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
</style>

@endsection 