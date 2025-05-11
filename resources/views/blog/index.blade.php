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
            <!-- Categories Widget -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <h3 class="text-xl font-bold mb-4 flex items-center">
                    <i class="fas fa-folder-open mr-2 text-primary"></i> Categories
                </h3>
                <ul class="space-y-2">
                    @foreach($categories as $category)
                        <li>
                            <a href="{{ route('blog.index', ['category' => $category->slug]) }}" 
                               class="flex justify-between items-center text-gray-700 hover:text-primary transition-colors {{ request('category') == $category->slug ? 'text-primary font-medium' : '' }}">
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
                                               class="flex justify-between items-center text-gray-600 hover:text-primary transition-colors {{ request('category') == $subcategory->slug ? 'text-primary font-medium' : '' }}">
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
            
            <!-- Tags Widget -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <h3 class="text-xl font-bold mb-4 flex items-center">
                    <i class="fas fa-tags mr-2 text-primary"></i> Tags
                </h3>
                <div class="flex flex-wrap gap-2 max-h-[400px] overflow-y-auto">
                    @foreach($tags as $tag)
                        <a href="{{ route('blog.index', ['tag' => $tag->slug]) }}" 
                           class="inline-flex items-center bg-gray-100 text-gray-700 text-sm px-3 py-1 rounded-full hover:bg-primary hover:text-white transition-colors {{ request('tag') == $tag->slug ? 'bg-primary text-white' : '' }}">
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