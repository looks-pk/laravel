@extends('layouts.app')

@section('title', 'Convert Your Tub to a Step-In Shower or Bath - Home2stay')
@section('meta_description', 'A tub cut out is the safest, most cost-effective way of converting your bathtub into a shower or walk-in bath. Don&#039;t risk your safety! Call Home2stay at (604) 259-1211 and get your tub cut done by our team of experts.')

@push('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <style>
        .product-highlight {
            border-left: 4px solid #4f46e5;
        }
    </style>
@endpush

@section('content')
    <!-- Hero Banner -->
    <section class="relative bg-gray-900 overflow-hidden" style="min-height: 500px;">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0 bg-cover bg-center"
            style="background-image: url('{{ asset('/al-prod-page-imgs/Tub-Cuts.jpg') }}');">
            <div class="absolute inset-0 bg-black opacity-60"></div>
        </div>

        <!-- Hero Content -->
        <div class="container mx-auto px-4 relative z-10 flex items-center" style="min-height: 500px;">
            <div class="max-w-3xl">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6">Tub Cuts</h1>
                <p class="text-xl text-white/90 mb-8">
                    Convert your existing tub into a step-in shower or bath! A cost-effective way to improve bathroom safety, costing approximately only 20% of the price of a tub renovation.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="#products"
                        class="px-6 py-3 bg-primary hover:bg-primary-dark text-white rounded-lg transition duration-300 font-medium">
                        View Products
                    </a>
                    <a href="#assessment"
                        class="px-6 py-3 bg-white hover:bg-gray-100 text-primary rounded-lg transition duration-300 font-medium">
                        Request Assessment
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <section id="products" class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Our Tub Cut Products</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Discover our range of tub cut solutions designed to convert your existing bathtub into a safe, accessible step-in shower or bath.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Product 1 -->

                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl flex flex-col h-full">
                    <div class="overflow-hidden relative">
                        <img src="{{ asset('bathsafety-cat/CleanCut-Step-V1-e1503607014281.jpg') }}" alt="Home2stay Tub Cut Step"
                            class="w-full object-cover" style="height: 400px;">
                    </div>
                    <div class="p-6 flex-1 flex flex-col">
                    <a href="{{ route('products.show', 'home2stay-tub-cut-step') }}" > <h3 class="text-xl font-bold text-gray-800 mb-3">Home2stay Tub Cut Step</h3></a>
                        <p class="text-gray-600 mb-4 flex-grow">Convert your existing tub into a step-in shower! The CleanCut Step tub is the perfect and most affor</p>
                        <div class="mt-auto">
                            <a href="/products/home2stay-tub-cut-step/"
                                class="block w-full bg-primary hover:bg-primary-dark text-white py-3 px-4 rounded-lg transition duration-300 text-center font-medium">
                                View Product
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Product 2 -->

                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl flex flex-col h-full">
                    <div class="overflow-hidden relative">
                        <img src="{{ asset('bathsafety-cat/CleanCut-Step-V1-e1503607014281-1.jpg') }}" alt="Home2stay Tub Cut Ultra-Low"
                            class="w-full object-cover" style="height: 400px;">
                    </div>
                    <div class="p-6 flex-1 flex flex-col">
                    <a href="{{ route('products.show', 'home2stay-tub-cut-ultra-low') }}" > <h3 class="text-xl font-bold text-gray-800 mb-3">Home2stay Tub Cut Ultra-Low</h3></a>
                        <p class="text-gray-600 mb-4 flex-grow">Convert your existing tub into a step-in shower! The CleanCut Ultra-Low is ideal for high-profile tu</p>
                        <div class="mt-auto">
                            <a href="/products/home2stay-tub-cut-ultra-low/"
                                class="block w-full bg-primary hover:bg-primary-dark text-white py-3 px-4 rounded-lg transition duration-300 text-center font-medium">
                                View Product
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Product 3 -->

                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl flex flex-col h-full">
                    <div class="overflow-hidden relative">
                        <img src="{{ asset('bathsafety-cat/CleanCut-Convertible-wPlug-V3-e1503607459913.jpg') }}" alt="Home2stay Convertible Tub Cut"
                            class="w-full object-cover" style="height: 400px;">
                    </div>
                    <div class="p-6 flex-1 flex flex-col">
                    <a href="{{ route('products.show', 'home2stay-convertible-tub-cut') }}" > <h3 class="text-xl font-bold text-gray-800 mb-3">Home2stay Convertible Tub Cut</h3></a>
                        <p class="text-gray-600 mb-4 flex-grow">Enjoy the best of both worlds- Convert your existing tub into a step-in shower or bath! The CleanCut</p>
                        <div class="mt-auto">
                            <a href="/products/home2stay-convertible-tub-cut/"
                                class="block w-full bg-primary hover:bg-primary-dark text-white py-3 px-4 rounded-lg transition duration-300 text-center font-medium">
                                View Product
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Product 4 -->
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl flex flex-col h-full">
                    <div class="overflow-hidden relative">
                        <img src="{{ asset('bathsafety-cat/quicktub.jpg') }}" alt="Home2stay Full Convertible Tub Cut Kit"
                            class="w-full object-cover" style="height: 400px;">
                    </div>
                    <div class="p-6 flex-1 flex flex-col">
                    <a href="{{ route('products.show', 'home2stay-full-convertible-tub-cut-kit') }}" > <h3 class="text-xl font-bold text-gray-800 mb-3">Home2stay Full Convertible Tub Cut Kit</h3></a>
                        <p class="text-gray-600 mb-4 flex-grow">The best of both worlds. Our Full Quick Tub Convertible Tub Cut Kit provides you and your loved ones</p>
                        <div class="mt-auto">
                            <a href="/products/home2stay-full-convertible-tub-cut-kit/"
                                class="block w-full bg-primary hover:bg-primary-dark text-white py-3 px-4 rounded-lg transition duration-300 text-center font-medium">
                                View Product
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Product 5 -->

                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl flex flex-col h-full">
                    <div class="overflow-hidden relative">
                        <img src="{{ asset('bathsafety-cat/Group-137-2.jpg') }}" alt="Home2stay Tub Cut w/ Door"
                            class="w-full object-cover" style="height: 400px;">
                        <div class="absolute top-0 right-0 bg-primary text-white text-sm font-bold px-3 py-1 m-4 rounded">
                            Popular
                        </div>
                    </div>
                    <div class="p-6 flex-1 flex flex-col">
                    <a href="{{ route('products.show', 'home2stay-tub-cut-w-door') }}" > <h3 class="text-xl font-bold text-gray-800 mb-3">Home2stay Tub Cut w/ Door</h3></a>
                        <p class="text-gray-600 mb-4 flex-grow">Enjoy the best of both worlds- Convert your existing tub into a step-in shower or bath! The CleanCut</p>
                        <div class="mt-auto">
                            <a href="/products/tub-cut-door/"
                                class="block w-full bg-primary hover:bg-primary-dark text-white py-3 px-4 rounded-lg transition duration-300 text-center font-medium">
                                View Product
                            </a>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <!-- Introduction Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">Safe & Affordable Bathroom Solution</h2>
                    <p class="text-lg text-gray-600">
                        Stepping over the high wall of the bathtub can be a safety hazard for those with mobility and balance challenges, such as elder adults, young children, and individuals with disabilities.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
                    <div class="bg-gray-50 p-6 rounded-lg text-center">
                        <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Cost-Effective</h3>
                        <p class="text-gray-600">Only 20% of the price of a full tub renovation, making it an affordable safety solution.</p>
                    </div>

                    <div class="bg-gray-50 p-6 rounded-lg text-center">
                        <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Quick Installation</h3>
                        <p class="text-gray-600">Can be completed in as little as 2 hours with minimal disruption to your home.</p>
                    </div>

                    <div class="bg-gray-50 p-6 rounded-lg text-center">
                        <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Universal Compatibility</h3>
                        <p class="text-gray-600">Works with steel, fiberglass, or cast-iron bathtubs for versatile installation options.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Product -->
    <section class="py-16 bg-primary">
        <div class="container mx-auto px-4">
            <div class="bg-gray-50 rounded-xl overflow-hidden shadow-lg">
                <div class="flex flex-col lg:flex-row">
                    <!-- Text Content -->
                    <div class="w-full lg:w-1/2 p-8 md:p-12 flex flex-col justify-center">
                        <h2 class="text-3xl font-bold text-gray-800 mb-4">Inclusive Living Solutions: Discover Our Complete Product Catalog</h2>
                        <p class="text-lg text-gray-600 mb-6">
                            Stepping over the high wall of the bath tub can be a safety hazard for those with mobility and balance challenges, such as elder adults, young children, and individuals with disabilities. In the wet environment of the bathroom, balancing on one leg can lead to unfortunate slips and falls.</p>
                        <p class="mb-5">A tub cut out on your existing bathtub is a cost-effective way of turning it into a step-in shower or bath, costing approximately only 20% of the price of a tub renovation. It can be done in as little as 2 hours, with a water test after 48 hours- to ensure minimal disruption in your home.</p>
                    </div>
                    <!-- Image -->
                    <div class="w-full lg:w-1/2">
                        <img src="{{ asset('bathsafety-cat/CleanCut-Step-V1-e1503607014281-1.jpg') }}" alt="Tub Cuts"
                            class="w-full h-full object-cover" style="min-height: 400px;">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tub Cut Details -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto">
                <div class="bg-white rounded-xl shadow-md overflow-hidden">
                    <div class="flex flex-col lg:flex-row">
                        <!-- Text Content -->
                        <div class="w-full lg:w-1/2 p-8 md:p-12">
                            <h2 class="text-3xl font-bold text-gray-800 mb-6">Understanding Tub Cuts</h2>

                            <div class="prose prose-lg max-w-none">
                                <p class="text-gray-700 mb-4">
                                    Whether you have a steel, fiberglass, or cast-iron bathtub, a tub cut out can be done on it. If you still want to enjoy a nice, relaxing bath, opt for the convertible or tub cut with a door. All our tub cut products have a built-in anti-skid surface, not just a sticker that may peel off over time.
                                </p>

                                <p class="text-gray-700 mb-4">
                                    Units are made of non-recycled BPA-Free polyethylene, which is in conjunction with our patented and proprietary support box structure, and will ensure that your tub cutout will last for many years to come.
                                </p>

                                <div class="my-8 p-6 bg-primary/5 border-l-4 border-primary rounded-r-lg">
                                    <p class="text-gray-800 font-medium">
                                        A tub cut out on your existing bathtub is a cost-effective way of turning it into a step-in shower or bath, costing approximately only 20% of the price of a tub renovation.
                                    </p>
                                </div>

                                <h3 class="text-2xl font-bold text-gray-800 mt-8 mb-4">Tub Cut Benefits</h3>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                                    <div class="bg-gray-50 p-4 rounded-lg">
                                        <h4 class="font-semibold text-gray-800 mb-2">Safety First</h4>
                                        <p class="text-gray-600 text-sm">Eliminates the risk of stepping over high tub walls, reducing slips and falls in wet bathroom conditions.</p>
                                    </div>
                                    <div class="bg-gray-50 p-4 rounded-lg">
                                        <h4 class="font-semibold text-gray-800 mb-2">Quick Installation</h4>
                                        <p class="text-gray-600 text-sm">Professional installation completed in as little as 2 hours with minimal home disruption.</p>
                                    </div>
                                    <div class="bg-gray-50 p-4 rounded-lg">
                                        <h4 class="font-semibold text-gray-800 mb-2">Built-in Safety</h4>
                                        <p class="text-gray-600 text-sm">Anti-skid surface built into the product, not just a sticker that may peel over time.</p>
                                    </div>
                                    <div class="bg-gray-50 p-4 rounded-lg">
                                        <h4 class="font-semibold text-gray-800 mb-2">Durable Materials</h4>
                                        <p class="text-gray-600 text-sm">Made from non-recycled BPA-Free polyethylene with patented support structure.</p>
                                    </div>
                                </div>

                                <h3 class="text-2xl font-bold text-gray-800 mt-8 mb-4">Professional Service</h3>

                                <p class="text-gray-700 mb-4">
                                    Our experienced team provides expert installation and ensures your tub cut is completed to the highest standards. We conduct a water test after 48 hours to guarantee quality and functionality.
                                </p>

                                <div class="mt-8 flex flex-wrap gap-4">
                                    <a href="#assessment"
                                        class="inline-flex items-center px-6 py-3 bg-primary text-white rounded-lg hover:bg-primary-dark transition duration-300">
                                        Request Free Assessment
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Image -->
                        <div class="w-full lg:w-1/2">
                            <img src="{{ asset('bathsafety-cat/quicktub.jpg') }}" alt="Tub Cut Process"
                                class="w-full h-full py-20" style="min-height: 400px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured section 2 -->
    <section class="py-16 bg-primary">
        <div class="container mx-auto px-4">
            <div class="bg-gray-50 rounded-xl overflow-hidden shadow-lg">
                <div class="flex flex-col lg:flex-row">
                    <!-- Text Content -->
                    <div class="w-full lg:w-1/2 p-8 md:p-12 flex flex-col justify-center">
                        <h2 class="text-3xl font-bold text-gray-800 mb-4">Ready to book an Assessment Visit?</h2>
                        <p class="text-lg text-gray-600 mb-6">
                            We look forward to helping you create your safe and accessible space</p>
                        <div class="mt-8 flex flex-wrap gap-4">
                            <a href="#assessment"
                                class="inline-flex items-center px-6 py-3 bg-primary text-white rounded-lg hover:bg-primary-dark transition duration-300">
                                Book Online
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <!-- Image -->
                    <div class="w-full lg:w-1/2">
                        <img src="{{ asset('bathsafety-cat/CleanCut-Convertible-wPlug-V3-e1503607459913.jpg') }}" alt="Tub Cuts"
                            class="w-full h-full object-cover" style="min-height: 400px;">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Related Blogs -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-10">Related Blogs</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($latestPosts as $post)
                    <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 group">
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
                                    <i class="fas fa-calendar-alt mr-1"></i> {{ $post->published_at ? $post->published_at->format('F j, Y') : $post->created_at->format('F j, Y') }}
                                </span>
                                <span>
                                    <i class="fas fa-user mr-1"></i> {{ $post->user->name ?? 'Admin' }}
                                </span>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-2 group-hover:text-primary transition-colors">{{ $post->title }}</h3>
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
            
            @if($latestPosts->count() > 0)
                <div class="text-center mt-10">
                    <a href="{{ route('blog.index') }}" class="inline-flex items-center px-6 py-3 bg-primary text-white rounded-lg hover:bg-primary-dark transition duration-300">
                        View All Blog Posts
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
            @endif
        </div>
    </section>

    <!-- Assessment Form -->
    <section id="assessment" class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto bg-white rounded-xl shadow-lg p-8 md:p-12">
                <div class="text-center mb-10">
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">Request Your Tub Cut Assessment</h2>
                    <p class="text-gray-600">Our tub cut specialists will evaluate your bathtub and recommend the
                        best solution for your bathroom safety needs.</p>
                </div>

                <form action="/submit-assessment" method="POST">
                    @csrf
                    <input type="hidden" name="form_type" value="quote">
                    <input type="hidden" name="form_source" value="Tub_Cuts_quote_form">
                    <!-- Personal Information -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-gray-700 font-medium mb-2" for="name">Full Name *</label>
                            <input type="text" id="name" name="name" required
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-medium mb-2" for="phone">Phone Number *</label>
                            <input type="tel" id="phone" name="phone" required
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-medium mb-2" for="email">Email Address *</label>
                            <input type="email" id="email" name="email" required
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-medium mb-2" for="location">Bathroom Location</label>
                            <input type="text" id="location" name="location" placeholder="e.g., Main floor, Second floor, Master bathroom, etc."
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
                        </div>
                    </div>

                    <!-- Tub Type -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">What type of bathtub do you have? *</label>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-3">
                            <label class="flex items-center space-x-3">
                                <input type="radio" name="tub_type" value="steel" class="text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Steel Bathtub</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="radio" name="tub_type" value="fiberglass" class="text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Fiberglass Bathtub</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="radio" name="tub_type" value="cast_iron" class="text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Cast-Iron Bathtub</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="radio" name="tub_type" value="unsure" class="text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Not Sure</span>
                            </label>
                        </div>
                    </div>

                    <!-- Product Interest -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Which tub cut solution are you interested in?</label>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="products[]" value="tub_cut_door"
                                    class="form-checkbox text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Tub Cut w/ Door</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="products[]" value="convertible_kit"
                                    class="form-checkbox text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Full Convertible Tub Cut Kit</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="products[]" value="tub_cut_step"
                                    class="form-checkbox text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Tub Cut Step</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="products[]" value="convertible_cut"
                                    class="form-checkbox text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Convertible Tub Cut</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="products[]" value="ultra_low" class="form-checkbox text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Tub Cut Ultra-Low</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="products[]" value="not_sure" class="form-checkbox text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Not Sure/Need Consultation</span>
                            </label>
                        </div>
                    </div>

                    <!-- Additional Information -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-2" for="message">Additional Information</label>
                        <textarea id="message" name="message" rows="4"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent"
                            placeholder="Please describe your bathtub, mobility needs, or any specific requirements..."></textarea>
                    </div>

                    <!-- Submit Button -->
                    <div class="text-center">
                        <button type="submit"
                            class="inline-flex items-center px-6 py-3 bg-primary text-white rounded-lg hover:bg-primary-dark transition duration-300">
                            Submit Assessment Request
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-16 bg-primary">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center text-white">
                <h2 class="text-3xl font-bold mb-6">Ready to Transform Your Bathroom?</h2>
                <p class="text-xl mb-8">Contact us today to explore how our tub cut solutions can make your bathroom safer and more accessible.</p>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="{{ route('contact') }}"
                        class="px-8 py-3 bg-white text-primary hover:bg-gray-100 rounded-lg font-medium transition duration-300">
                        Contact Us
                    </a>
                    <a href="#"
                        class="px-8 py-3 bg-transparent border-2 border-white text-white hover:bg-white/10 rounded-lg font-medium transition duration-300">
                        View All Products
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        // Initialize any scripts needed for the page
    </script>
@endpush