@extends('layouts.app')

@section('title', 'Bathroom Vanities | Premium Designs & Styles - Home2stay')
@section('meta_description', 'Discover premium bathroom vanities by Home2Stay. Wide selection of modern and traditional designs, high-quality materials, custom finishes, and expert installation. Transform your bathroom with stylish vanity solutions.')

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
            style="background-image: url('{{ asset('al-prod-page-imgs/bathroom-vanties-featured.png') }}');">
            <div class="absolute inset-0 bg-black opacity-60"></div>
        </div>

        <!-- Hero Content -->
        <div class="container mx-auto px-4 relative z-10 flex items-center" style="min-height: 500px;">
            <div class="max-w-3xl">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6">Bathroom Vanities</h1>
                <p class="text-xl text-white/90 mb-8">
                    Premium bathroom vanities combining elegant design, superior functionality, and quality craftsmanship to transform your bathroom space.
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
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Our Premium Vanity Collections</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Explore our curated range of bathroom vanities featuring modern designs, traditional styles, and custom options to match your bathroom aesthetic.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <!-- product 1 -->
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl flex flex-col h-full group">
                    <!-- Product Image -->
                    <div class="overflow-hidden relative">
                        <img src="{{ asset('/al-prod-page-imgs/home2stay-vanities.png') }}" alt="Modern Bathroom Vanities"
                            class="w-full object-cover transition-transform duration-500 group-hover:scale-105"
                            style="height: 400px;">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        </div>
                    </div>

                    <!-- Product Details -->
                    <div class="p-6 flex-1 flex flex-col">
                        <a href="/products/vanities/"
                        >
                        <h3
                            class="text-2xl font-bold text-gray-800 mb-3 group-hover:text-primary transition-colors duration-300">
                            Home2Stay Vanities | Transform Your Bathroom with Style & Function</h3>
                        </a>
                        <p class="text-gray-600 mb-4 flex-grow">Do you want to make your washroom stylish with the Home2Stay Classic Oak Vanity, where practical design meets timeless elegance?</p>
                        <p class="font-bold text-primary mb-5 flex items-center">
                            <!-- <span class="bg-primary/10 text-primary px-3 py-1 rounded-full text-sm">Multiple Products</span> -->
                        </p>
                        <a href="/products/vanities/"
                            class="mt-auto w-full bg-primary hover:bg-primary-dark text-white py-3 px-6 rounded-lg transition duration-300 text-center font-medium">
                            View All Products
                        </a>
                    </div>
                </div>
                <!-- product 2 -->
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl flex flex-col h-full group">
                    <!-- Product Image -->
                    <div class="overflow-hidden relative">
                        <img src="{{ asset('/al-prod-page-imgs/ready-made-vanity (2).png') }}" alt="Modern Bathroom Vanities"
                            class="w-full object-cover transition-transform duration-500 group-hover:scale-105"
                            style="height: 400px;">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        </div>
                    </div>

                    <!-- Product Details -->
                    <div class="p-6 flex-1 flex flex-col">
                        <a href="/products/ready-made-vanities"
                        >
                        <h3
                            class="text-2xl font-bold text-gray-800 mb-3 group-hover:text-primary transition-colors duration-300">
                            Ready-Made Vanities</h3>
                        </a>
                        <p class="text-gray-600 mb-4 flex-grow">Home2Stay Vanities are the perfect way to enhance your Bathroom. They combine excellent design and everyday convenience.</p>
                        <p class="font-bold text-primary mb-5 flex items-center">
                            <!-- <span class="bg-primary/10 text-primary px-3 py-1 rounded-full text-sm">Multiple Products</span> -->
                        </p>
                        <a href="/products/ready-made-vanities"
                            class="mt-auto w-full bg-primary hover:bg-primary-dark text-white py-3 px-6 rounded-lg transition duration-300 text-center font-medium">
                            View All Productsx
                        </a>
                    </div>
                </div>
                <!-- product 3 -->
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl flex flex-col h-full group">
                    <!-- Product Image -->
                    <div class="overflow-hidden relative">
                        <img src="{{ asset('al-prod-page-imgs/Custom Millwork by Home2Stay.png') }}" alt="Modern Bathroom Vanities"
                            class="w-full object-cover transition-transform duration-500 group-hover:scale-105"
                            style="height: 400px;">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        </div>
                    </div>

                    <!-- Product Details -->
                    <div class="p-6 flex-1 flex flex-col">
                        <a href="/products/custom-millwork-by-home2stay"
                        >
                        <h3
                            class="text-2xl font-bold text-gray-800 mb-3 group-hover:text-primary transition-colors duration-300">
                            Custom Millwork by Home2Stay</h3>
                        </a>
                        <p class="text-gray-600 mb-4 flex-grow">We believe your vanity should be more than just a practical fixture; it should be a beautifully crafted centrepiece that enhances your bathroom’s style</p>
                        <p class="font-bold text-primary mb-5 flex items-center">
                            <!-- <span class="bg-primary/10 text-primary px-3 py-1 rounded-full text-sm">Multiple Products</span> -->
                        </p>
                        <a href="/products/custom-millwork-by-home2stay"
                            class="mt-auto w-full bg-primary hover:bg-primary-dark text-white py-3 px-6 rounded-lg transition duration-300 text-center font-medium">
                            View All Products
                        </a>
                    </div>
                </div>
                <!-- product 4 -->
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl flex flex-col h-full group">
                    <!-- Product Image -->
                    <div class="overflow-hidden relative">
                        <img src="{{ asset('/al-prod-page-imgs/floating-vanities.webp') }}" alt="Modern Bathroom Vanities"
                            class="w-full object-cover transition-transform duration-500 group-hover:scale-105"
                            style="height: 400px;">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        </div>
                    </div>

                    <!-- Product Details -->
                    <div class="p-6 flex-1 flex flex-col">
                        <a href="/products/floating-vanity"
                        >
                        <h3
                            class="text-2xl font-bold text-gray-800 mb-3 group-hover:text-primary transition-colors duration-300">
                            Home2Stay Floating Vanity</h3>
                        </a>
                        <p class="text-gray-600 mb-4 flex-grow">Boost your bathroom with refined modern elegance. The Home2Stay Floating Vanity blends smooth design with superior functionality</p>
                        <p class="font-bold text-primary mb-5 flex items-center">
                            <!-- <span class="bg-primary/10 text-primary px-3 py-1 rounded-full text-sm">Multiple Products</span> -->
                        </p>
                        <a href="/products/floating-vanity"
                            class="mt-auto w-full bg-primary hover:bg-primary-dark text-white py-3 px-6 rounded-lg transition duration-300 text-center font-medium">
                            View All Products
                        </a>
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
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">Why Choose Premium Vanities</h2>
                    <p class="text-lg text-gray-600">
                        Discover how a quality bathroom vanity enhances functionality, storage, and the overall aesthetic appeal of your bathroom space.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
                    <div class="bg-gray-50 p-6 rounded-lg text-center">
                        <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Stylish Design</h3>
                        <p class="text-gray-600">Premium aesthetics with modern and traditional styles that complement any bathroom décor and add visual appeal.</p>
                    </div>

                    <div class="bg-gray-50 p-6 rounded-lg text-center">
                        <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Ample Storage</h3>
                        <p class="text-gray-600">Spacious cabinets and drawers for organized bathroom storage and improved functionality.</p>
                    </div>

                    <div class="bg-gray-50 p-6 rounded-lg text-center">
                        <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Quality Craftsmanship</h3>
                        <p class="text-gray-600">Durable materials and expert construction ensuring long-lasting performance and durability.</p>
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
                        <h2 class="text-3xl font-bold text-gray-800 mb-4">Transform Your Bathroom with Premium Vanities</h2>
                        <p class="text-lg text-gray-600 mb-6">
                            Home2Stay offers a comprehensive selection of high-quality bathroom vanities serving the British Columbia region, including: Vancouver, Surrey, Abbotsford, Richmond, Coquitlam, Tricities,
                            Mission, Delta, Pitt Meadows, Burnaby, Port Moody, Maple Ridge, Langley, Chilliwack, White
                            Rock, Aldergrove, and other nearby areas.</p>
                        <p class="mb-5">Looking for the perfect vanity for your bathroom? Give us a call at <b><a href="tel:+16042591211" style="color: red;">(604) 259-1211</a></b> or submit a <b> <a href="#assessment" style="color: red;">FREE CONSULTATION FORM</a></b> to explore options.
                        </p>
                    </div>
                    <!-- Image -->
                    <div class="w-full lg:w-1/2">
                        <img src="{{ asset('al-prod-page-imgs/Ramps.jpg') }}" alt="Accessibility Ramps"
                            class="w-full h-full object-cover" style="min-height: 400px;">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Ramp Solutions Details -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="bg-white rounded-xl shadow-md p-8 md:p-12">
                    <h2 class="text-3xl font-bold text-gray-800 mb-6">Premium Bathroom Vanity Solutions</h2>

                    <div class="prose prose-lg max-w-none">
                        <p class="text-gray-700 mb-4">
                            At Home2Stay, we provide a curated selection of bathroom vanities that combine style, functionality, and durability. Whether you prefer modern sleek designs or traditional elegant styles, our vanities are crafted from premium materials to enhance your bathroom's aesthetic and functionality.
                        </p>

                        <p class="text-gray-700 mb-4">
                            Our vanities feature quality construction with ample storage, superior finishes, and easy-to-maintain surfaces. Each piece is designed to withstand daily use while maintaining its beauty and performance for years to come.
                        </p>

                        <div class="my-8 p-6 bg-primary/5 border-l-4 border-primary rounded-r-lg">
                            <p class="text-gray-800 font-medium">
                                We offer multiple vanity styles including modern minimalist designs, traditional elegant pieces, transitional styles, and custom options. All our vanities combine aesthetic appeal with practical storage solutions.
                            </p>
                        </div>

                        <p class="text-gray-700 mb-4">
                            Our vanities are available in various sizes, finishes, and configurations to fit your bathroom layout and design preferences. From single-sink units to double-sink vanities, we have options for every space and budget.
                        </p>

                        <h3 class="text-2xl font-bold text-gray-800 mt-8 mb-4">Expert Design Consultation & Installation</h3>

                        <p class="text-gray-700 mb-4">
                            Schedule a FREE CONSULTATION with Home2Stay and our design experts will help you select the perfect vanity for your bathroom. Our team will assess your space, discuss your style preferences, and recommend vanities that fit your needs and budget.
                        </p>

                        <p class="text-gray-700 mb-4">
                            Our professional installation team ensures your vanity is properly fitted, secured, and finished to perfection. We handle all aspects of installation including plumbing connections and finishing touches.
                        </p>

                        <p class="text-gray-700 mb-4">
                            We provide guidance on vanity care and maintenance to ensure your investment lasts for years. Our team is available to answer any questions about your vanity and provide support whenever you need it.
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
                        <h2 class="text-3xl font-bold text-gray-800 mb-4">Ready to upgrade your bathroom?</h2>
                        <p class="text-lg text-gray-600 mb-6">
                            Let us help you find the perfect vanity to transform your bathroom space</p>
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
                        <img src="{{ asset('al-prod-page-imgs/Ramps.jpg') }}" alt="Accessibility Ramps"
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
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">Request Your Free Vanity Consultation</h2>
                    <p class="text-gray-600">Our design experts will help you find the perfect vanity that matches your style, space, and budget.</p>
                </div>

                <form action="/submit-assessment" method="POST">
                    @csrf
                    <input type="hidden" name="form_type" value="consultation">
                    <input type="hidden" name="form_source" value="Vanities_consultation_form">
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
                            <input type="text" id="location" name="location" placeholder="e.g., Master bathroom, Guest bathroom, etc."
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
                        </div>
                    </div>

                    <!-- Product Interest -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Which vanity style interests you? *</label>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="products[]" value="modern_vanities"
                                    class="form-checkbox text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Modern Vanities</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="products[]" value="traditional_vanities"
                                    class="form-checkbox text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Traditional Vanities</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="products[]" value="transitional_vanities"
                                    class="form-checkbox text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Transitional Vanities</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="products[]" value="double_sink"
                                    class="form-checkbox text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Double Sink Vanities</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="products[]" value="custom_vanities" class="form-checkbox text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Custom Vanities</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="products[]" value="not_sure" class="form-checkbox text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Not Sure/Need Advice</span>
                            </label>
                        </div>
                    </div>

                    <!-- Additional Information -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-2" for="message">Additional Information</label>
                        <textarea id="message" name="message" rows="4"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent"
                            placeholder="Please share your bathroom dimensions, style preferences, budget range, or any specific requirements..."></textarea>
                    </div>

                    <!-- Submit Button -->
                    <div class="text-center">
                        <button type="submit"
                            class="inline-flex items-center px-6 py-3 bg-primary text-white rounded-lg hover:bg-primary-dark transition duration-300">
                            Submit Consultation Request
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
                <p class="text-xl mb-8">Contact us today to discover premium vanity options that will enhance your bathroom's style and functionality.</p>
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