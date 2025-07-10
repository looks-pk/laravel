@extends('layouts.app')

@section('title', 'Blog')
@section('meta_description', 'Read our latest blog posts and updates')

@section('content')
<div class="container mx-auto px-4 py-12">
    <div class="text-center mb-12">
        <h1 class="text-4xl font-bold mb-4">Our Blog</h1>
        <p class="text-gray-600 text-lg">Stay up to date with our latest news and articles</p>
    </div>
    
    <div class="flex flex-col md:flex-row gap-8">
        <!-- Main Content -->
        <div class="w-full md:w-3/4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($posts as $post)
                    <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 group">
                        @if($post->featured_image)
                            <div class="h-48 overflow-hidden">
                                <img src="{{ asset('storage/' . $post->featured_image) }}" alt="{{ $post->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                            </div>
                        @else
                            <div class="h-48 bg-gray-200 flex items-center justify-center">
                                <span class="text-gray-400 text-2xl"><i class="fas fa-image"></i></span>
                            </div>
                        @endif
                        
                        <div class="p-6">
                            <div class="flex items-center text-sm text-gray-500 mb-2">
                                <span class="mr-4">
                                    <i class="fas fa-calendar-alt mr-1"></i> {{ $post->published_at->format('F j, Y') }}
                                </span>
                                <span>
                                    <i class="fas fa-user mr-1"></i> {{ $post->user->name ?? 'Admin' }}
                                </span>
                            </div>
                            <h3 class="text-xl font-bold mb-2 group-hover:text-primary transition-colors">{{ $post->title }}</h3>
                            <p class="text-gray-600 mb-4 line-clamp-3">{{ $post->excerpt }}</p>
                            <a href="{{ route('blog.show', $post->slug) }}" class="inline-flex items-center text-primary hover:text-primary/80 font-medium">
                                Read More <i class="fas fa-arrow-right ml-1 group-hover:translate-x-1 transition-transform"></i>
                            </a>
                        </div>
                    </div>
                @empty
                    <div class="col-span-3 text-center py-8">
                        <p class="text-gray-500">No blog posts published yet. Check back soon!</p>
                    </div>
                @endforelse
            </div>
            
            <div class="mt-10">
                {{ $posts->links() }}
            </div>
        </div>
        
        <!-- Sidebar -->
        <div class="w-full md:w-1/4 space-y-6">
            <!-- Categories -->
            <div class="bg-white rounded-xl shadow-lg p-6 border border-gray-100 sticky top-8">
                <h3 class="text-xl font-bold mb-4 text-gray-900 flex items-center">
                    <svg class="w-5 h-5 mr-2 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                    </svg>
                    Categories
                </h3>
                <ul class="space-y-3">
                    @foreach($categories->take(8) as $category)
                        <li>
                            <a href="{{ route('blog.index', ['category' => $category->slug]) }}" 
                               class="group flex justify-between items-center p-3 rounded-lg hover:bg-gray-50 transition-all duration-200 {{ request('category') == $category->slug ? 'bg-primary/10 text-primary' : 'text-gray-700 hover:text-primary' }}">
                                <span class="flex items-center">
                                    <svg class="w-4 h-4 mr-3 {{ request('category') == $category->slug ? 'text-primary' : 'text-gray-400 group-hover:text-primary' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
                
                @if($categories->count() > 8)
                    <div class="mt-4 pt-4 border-t border-gray-200">
                        <p class="text-gray-500 text-sm">
                            <svg class="w-4 h-4 inline mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                            </svg>
                            {{ $categories->count() - 8 }} more categories available
                        </p>
                    </div>
                @endif
            </div>
            
            <!-- Popular Tags -->
            <div class="bg-white rounded-xl shadow-lg p-6 border border-gray-100">
                <h3 class="text-xl font-bold mb-4 text-gray-900 flex items-center">
                    <svg class="w-5 h-5 mr-2 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.99 1.99 0 013 12V7a4 4 0 014-4z"/>
                    </svg>
                    Popular Tags
                </h3>
                <div class="flex flex-wrap gap-2">
                    @foreach($tags->take(12) as $tag)
                        <a href="{{ route('blog.index', ['tag' => $tag->slug]) }}" 
                           class="inline-flex items-center px-3 py-2 rounded-full text-sm font-medium transition-all duration-200 hover:scale-105 {{ request('tag') == $tag->slug ? 'bg-primary text-white shadow-lg' : 'bg-gray-100 text-gray-700 hover:bg-primary hover:text-white hover:shadow-md' }}">
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
                
                @if($tags->count() > 12)
                    <div class="mt-4 pt-4 border-t border-gray-200">
                        <p class="text-gray-500 text-sm">
                            <svg class="w-4 h-4 inline mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.99 1.99 0 013 12V7a4 4 0 014-4z"/>
                            </svg>
                            {{ $tags->count() - 12 }} more tags available
                        </p>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection 