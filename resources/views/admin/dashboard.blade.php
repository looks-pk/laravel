@extends('admin.layouts.app')

@section('title', 'Dashboard')
@section('page-title', 'Dashboard')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
    <!-- Stats Card - Blog Posts -->
    <div class="bg-white rounded-lg shadow-md p-6">
        <div class="flex items-center">
            <div class="p-3 rounded-full bg-blue-100 text-primary">
                <i class="fas fa-file-alt text-xl"></i>
            </div>
            <div class="ml-4">
                <h3 class="text-lg font-medium text-gray-700">Total Blog Posts</h3>
                <p class="text-3xl font-bold text-gray-900">{{ \App\Models\BlogPost::count() }}</p>
            </div>
        </div>
    </div>
    
    <!-- Stats Card - Published Posts -->
    <div class="bg-white rounded-lg shadow-md p-6">
        <div class="flex items-center">
            <div class="p-3 rounded-full bg-green-100 text-green-600">
                <i class="fas fa-check-circle text-xl"></i>
            </div>
            <div class="ml-4">
                <h3 class="text-lg font-medium text-gray-700">Published Posts</h3>
                <p class="text-3xl font-bold text-gray-900">{{ \App\Models\BlogPost::where('is_published', true)->count() }}</p>
            </div>
        </div>
    </div>
    
    <!-- Stats Card - Tags -->
    <div class="bg-white rounded-lg shadow-md p-6">
        <div class="flex items-center">
            <div class="p-3 rounded-full bg-yellow-100 text-yellow-600">
                <i class="fas fa-tags text-xl"></i>
            </div>
            <div class="ml-4">
                <h3 class="text-lg font-medium text-gray-700">Total Tags</h3>
                <p class="text-3xl font-bold text-gray-900">{{ \App\Models\Tag::count() }}</p>
            </div>
        </div>
    </div>
</div>

<div class="bg-white rounded-lg shadow-md">
    <div class="p-4 border-b">
        <h2 class="font-semibold text-lg">Recent Blog Posts</h2>
    </div>
    <div class="p-4">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Title</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Created</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @forelse(\App\Models\BlogPost::with('tags')->latest()->take(5)->get() as $post)
                    <tr>
                        <td class="px-6 py-4">
                            <div class="text-sm font-medium text-gray-900">
                                {{ $post->title }}
                            </div>
                            <div class="text-sm text-gray-500">
                                @foreach($post->tags as $tag)
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800 mr-1">
                                        {{ $tag->name }}
                                    </span>
                                @endforeach
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            @if($post->is_published)
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                    Published
                                </span>
                            @else
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                    Draft
                                </span>
                            @endif
                        </td>
                        <td class="px-6 py-4 text-sm text-gray-500">
                            {{ $post->created_at->format('M d, Y') }}
                        </td>
                        <td class="px-6 py-4 text-sm font-medium">
                            <a href="{{ route('admin.blog.edit', $post) }}" class="text-primary hover:text-primary/80 mr-3">
                                Edit
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="px-6 py-4 text-center text-sm font-medium text-gray-500">
                            No blog posts found. <a href="{{ route('admin.blog.create') }}" class="text-primary hover:underline">Create your first post</a>.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
        <a href="{{ route('admin.blog.index') }}" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-primary hover:bg-primary/80 focus:outline-none">
            View All Posts
        </a>
    </div>
</div>
@endsection 