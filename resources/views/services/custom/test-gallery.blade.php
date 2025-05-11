@extends('layouts.app')

@section('title', 'Gallery - Home2stay')
@section('meta_description', 'Browse our collection of mobility and accessibility equipment available for rent for your home, including bathroom safety products, mobility aids, and more.')

@push('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
@endpush

@section('content')
    <!-- Page Banner -->
    <section class="relative bg-gray-800 overflow-hidden" style="min-height: 350px;">
        <div class="container mx-auto px-4 relative z-10 flex items-center justify-center" style="min-height: 350px;">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-4">Gallery</h1>
                <div class="w-24 h-1 bg-primary mx-auto"></div>
            </div>
        </div>
    </section>

    <!-- Gallery Items Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-8">
                <!-- Gallery Item 1 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl flex flex-col h-full group">
                    <div class="overflow-hidden relative">
                        <img src="{{ asset('gallery/1.jpg') }}" alt="Gallery Item 1" class="w-full object-cover transition-transform duration-500 group-hover:scale-105" style="height: 400px;">
                    </div>
                    <div class="p-6 flex-1 flex flex-col">
                        <h3 class="text-2xl font-bold text-gray-800 mb-3 group-hover:text-primary transition-colors duration-300">
                            Home2stay Barrier-Free Bathrooms</h3>
                    </div>
                </div>
                
                <!-- Gallery Item 2 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl flex flex-col h-full group">
                    <div class="overflow-hidden relative">
                        <img src="{{ asset('gallery/2.jpg') }}" alt="Gallery Item 2" class="w-full object-cover transition-transform duration-500 group-hover:scale-105" style="height: 400px;">
                    </div>
                    <div class="p-6 flex-1 flex flex-col">
                        <h3 class="text-2xl font-bold text-gray-800 mb-3 group-hover:text-primary transition-colors duration-300">
                            Home2stay Ceiling Lift Installations</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
@endpush