@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    
    <!-- Page Header -->
    <div class="mb-8 border-b pb-4">
        <h1 class="text-3xl font-bold text-gray-900">
            Search Results
        </h1>
        @if(!empty($query))
            <p class="text-gray-600 mt-2">
                Showing results for: <span class="font-semibold text-[#800000]">"{{ $query }}"</span>
            </p>
        @endif
    </div>

    <!-- Search Results List -->
    @if(count($products) > 0)
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($products as $product)
                <div class="bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-200 overflow-hidden flex flex-col justify-between">
                    <div class="p-6">
                        <h2 class="text-xl font-semibold text-gray-900 mb-2">
                            {{ $product['title'] }}
                        </h2>
                        <p class="text-gray-500 text-sm mb-4">
                            Explore details, specs, and options for {{ $product['title'] }}.
                        </p>
                    </div>
                    <div class="bg-gray-50 px-6 py-4 border-t border-gray-100">
                        <a href="{{ route('products.show', $product['slug']) }}" class="inline-flex items-center text-sm font-medium text-[#800000] hover:underline">
                            View Product
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <!-- No Results Found -->
        <div class="bg-yellow-50 border-l-4 border-yellow-400 p-6 rounded-md my-8">
            <div class="flex">
                <div class="flex-shrink-0">
                    <svg class="h-5 w-5 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <div class="ml-3">
                    <h3 class="text-sm font-medium text-yellow-800">
                        No products found
                    </h3>
                    <div class="mt-2 text-sm text-yellow-700">
                        <p>We couldn't find any products matching "{{ $query }}". Try checking for spelling errors or searching for a broader term.</p>
                    </div>
                    <div class="mt-4">
                        <a href="{{ route('products.index') }}" class="text-sm font-semibold text-[#800000] hover:underline">
                            &larr; View all products
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @endif

</div>
@endsection
