@extends('admin.layouts.app')

@section('title', 'Manage Categories')
@section('page-title', 'Manage Categories')

@section('content')
<div class="mb-6 flex justify-between items-center">
    <h1 class="text-2xl font-semibold text-gray-800">Manage Categories</h1>
    <a href="{{ route('admin.categories.create') }}" class="px-4 py-2 bg-primary text-white rounded hover:bg-primary/80 transition-colors">
        <i class="fas fa-plus-circle mr-2"></i> Add Category
    </a>
</div>

<div class="bg-white rounded-lg shadow-md overflow-hidden">
    <div class="p-6">
        @if($categories->count() > 0)
            <div class="space-y-4">
                @foreach($categories as $category)
                    <div class="border rounded-lg p-4">
                        <div class="flex justify-between items-center">
                            <div>
                                <h3 class="text-lg font-medium">{{ $category->name }}</h3>
                                @if($category->description)
                                    <p class="text-gray-600 mt-1">{{ $category->description }}</p>
                                @endif
                            </div>
                            <div class="flex space-x-2">
                                <a href="{{ route('admin.categories.edit', $category) }}" class="text-blue-600 hover:text-blue-800">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <form action="{{ route('admin.categories.destroy', $category) }}" method="POST" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-800" onclick="return confirm('Are you sure you want to delete this category?')">
                                        <i class="fas fa-trash"></i> Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                        
                        @if($category->children->count() > 0)
                            <div class="mt-4 pl-4 border-l-2 border-gray-200">
                                <h4 class="text-sm font-medium text-gray-500 mb-2">Subcategories</h4>
                                <div class="space-y-2">
                                    @foreach($category->children as $subcategory)
                                        <div class="flex justify-between items-center">
                                            <span>{{ $subcategory->name }}</span>
                                            <div class="flex space-x-2">
                                                <a href="{{ route('admin.categories.edit', $subcategory) }}" class="text-blue-600 hover:text-blue-800">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <form action="{{ route('admin.categories.destroy', $subcategory) }}" method="POST" class="inline-block">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="text-red-600 hover:text-red-800" onclick="return confirm('Are you sure you want to delete this subcategory?')">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    </div>
                @endforeach
            </div>
        @else
            <div class="text-center py-8">
                <p class="text-gray-500 mb-4">No categories found</p>
                <a href="{{ route('admin.categories.create') }}" class="text-primary hover:underline">
                    Create your first category
                </a>
            </div>
        @endif
    </div>
</div>
@endsection 