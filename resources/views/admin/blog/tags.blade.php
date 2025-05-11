@extends('admin.layouts.app')

@section('title', 'Manage Tags')
@section('page-title', 'Manage Tags')

@section('content')
<div class="mb-6 flex justify-between items-center">
    <h1 class="text-2xl font-semibold text-gray-800">Manage Tags</h1>
    <a href="{{ route('admin.blog.index') }}" class="px-4 py-2 border border-gray-300 rounded text-gray-700 hover:bg-gray-50 transition-colors">
        <i class="fas fa-arrow-left mr-2"></i> Back to Blog Posts
    </a>
</div>

<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <!-- Create Tag Form -->
    <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <div class="p-4 bg-gray-50 border-b">
            <h2 class="font-semibold text-lg">Create New Tag</h2>
        </div>
        <div class="p-6">
            <form action="{{ route('admin.tags.store') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Tag Name <span class="text-red-600">*</span></label>
                    <input type="text" name="name" id="name" 
                        class="w-full rounded-md border-gray-300 shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50 @error('name') border-red-500 @enderror" 
                        value="{{ old('name') }}" required placeholder="Enter tag name">
                    @error('name')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex justify-end">
                    <button type="submit" class="px-4 py-2 bg-primary text-white rounded hover:bg-primary/80 transition-colors">
                        <i class="fas fa-plus-circle mr-2"></i> Add Tag
                    </button>
                </div>
            </form>
        </div>
    </div>
    
    <!-- Tags List -->
    <div class="bg-white rounded-lg shadow-md overflow-hidden md:col-span-2">
        <div class="p-4 bg-gray-50 border-b">
            <h2 class="font-semibold text-lg">All Tags</h2>
        </div>
        <div class="p-6">
            @if($tags->count() > 0)
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Slug</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Posts</th>
                                <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach($tags as $tag)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        {{ $tag->id }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                            {{ $tag->name }}
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        {{ $tag->slug }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        {{ $tag->blogPosts->count() }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <form action="{{ route('admin.tags.destroy', $tag) }}" method="POST" class="inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-600 hover:text-red-800" onclick="return confirm('Are you sure you want to delete this tag?')">
                                                <i class="fas fa-trash"></i> Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <div class="text-center py-8">
                    <p class="text-gray-500 mb-4">No tags found</p>
                    <p class="text-sm text-gray-400">Create your first tag using the form on the left</p>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection 