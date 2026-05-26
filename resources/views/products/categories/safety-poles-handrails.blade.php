@extends('layouts.app')

@section('title', 'Promenaid Handrails Vancouver | Home Safety Rails & Professional Installation - Home2stay')
@section('meta_description', 'Expert Promenaid Handrail installation in Vancouver. Home2Stay features Promenaid — the premium handrail system for every home — plus professional floor-mounted safety rails and home safety solutions.')

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
            style="background-image: url('{{ asset('al-prod-page-imgs/Safety Poles & Handrails.png') }}');">
            <div class="absolute inset-0 bg-black opacity-60"></div>
        </div>

        <!-- Hero Content -->
        <div class="container mx-auto px-4 relative z-10 flex items-center" style="min-height: 500px;">
            <div class="max-w-3xl">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6">Promenaid Handrails & Home Safety</h1>
                <p class="text-xl text-white/90 mb-8">
                    Featuring Promenaid — the premium handrail system trusted by homeowners across Vancouver. Safe, stylish, and built for every home. We specialize in professional handrail and home safety installations throughout the Lower Mainland.
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
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Featured Home Safety Products</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Featuring Promenaid — the premium handrail system for every Vancouver home. We also offer professional-grade floor-mounted safety rails for lasting independence and stability.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                <!-- Promenaid Handrails - Featured -->
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl flex flex-col h-full">
                    <div class="overflow-hidden relative">
                        <img src="{{ asset('prom/prom-hand-3.jpeg') }}" alt="Promenaid Handrail Installation Vancouver - Home2Stay"
                            class="w-full object-cover" style="height: 400px;">
                        <div class="absolute top-0 right-0 bg-primary text-white text-sm font-bold px-3 py-1 m-4 rounded">
                            Featured
                        </div>
                    </div>
                    <div class="p-6 flex-1 flex flex-col">
                        <a href="{{ route('products.category', 'indoor-promenaid-handrail') }}"><h3 class="text-xl font-bold text-gray-800 mb-3">Indoor Promenaid Handrails</h3></a>
                        <p class="text-gray-600 mb-4 flex-grow">Beautiful, durable, and elegantly designed for Vancouver homes. Promenaid offers indoor and outdoor handrail systems in a range of colors and finishes — enhancing safety without compromising style.</p>
                        <div class="mt-auto">
                            <a href="/products-categories/indoor-promenaid-handrail"
                                class="block w-full bg-primary hover:bg-primary-dark text-white py-3 px-4 rounded-lg transition duration-300 text-center font-medium">
                                View Product
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Promenaid - Second Image -->
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl flex flex-col h-full">
                    <div class="overflow-hidden relative">
                        <img src="{{ asset('prom/prom-inout-4.jpeg') }}" alt="Promenaid Outdoor Handrail Vancouver - Home2Stay"
                            class="w-full object-cover" style="height: 400px;">
                    </div>
                    <div class="p-6 flex-1 flex flex-col">
                        <a href="{{ route('products.category', 'outdoor-promenaid-handrail') }}"><h3 class="text-xl font-bold text-gray-800 mb-3">Promenaid Outdoor & Indoor Handrails</h3></a>
                        <p class="text-gray-600 mb-4 flex-grow">Promenaid's high-grade aluminum construction resists rust, cracking, and fading — standing up to Vancouver's rain and temperature changes year after year. Available for stairs, ramps, decks, and hallways.</p>
                        <div class="mt-auto">
                            <a href="/products-categories/outdoor-promenaid-handrail"
                                class="block w-full bg-primary hover:bg-primary-dark text-white py-3 px-4 rounded-lg transition duration-300 text-center font-medium">
                                View Product
                            </a>
                        </div>
                    </div>
                </div>
                
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl flex flex-col h-full">
                    <div class="overflow-hidden relative">
                        <img src="{{ asset('prom/glass-mounted-prominad.jpg') }}" alt="Promenaid Outdoor Handrail Vancouver - Home2Stay"
                            class="w-full object-cover" style="height: 400px;">
                    </div>
                    <div class="p-6 flex-1 flex flex-col">
                        <a href="{{ route('products.category', 'glass-mounted-promenaid-handrail') }}"><h3 class="text-xl font-bold text-gray-800 mb-3">Glass Mounted Promenaid</h3></a>
                        <p class="text-gray-600 mb-4 flex-grow">Promenaid's high-grade aluminum construction resists rust, cracking, and fading — standing up to Vancouver's rain and temperature changes year after year. Available for stairs, ramps, decks, and hallways.</p>
                        <div class="mt-auto">
                            <a href="/products-categories/glass-mounted-promenaid-handrail"
                                class="block w-full bg-primary hover:bg-primary-dark text-white py-3 px-4 rounded-lg transition duration-300 text-center font-medium">
                                View Product
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Floor-Mounted Advantage Rail -->
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl flex flex-col h-full">
                    <div class="overflow-hidden relative">
                        <img src="{{ asset('bathsafety-cat/Rendering-Advantage-Rail-1024x1024-min.jpg') }}" alt="Floor-Mounted Advantage Rail Installation Vancouver - Home2Stay"
                            class="w-full object-cover" style="height: 400px;">
                    </div>
                    <div class="p-6 flex-1 flex flex-col">
                        <a href="{{ route('products.show', 'floor-mounted-advantage-rail') }}"><h3 class="text-xl font-bold text-gray-800 mb-3">Floor-Mounted Advantage Rail</h3></a>
                        <p class="text-gray-600 mb-4 flex-grow">The Advantage Rail provides dependable vertical and horizontal support for movements and transitions throughout your home — professionally installed for maximum strength and safety.</p>
                        <div class="mt-auto">
                            <a href="/products/floor-mounted-advantage-rail/"
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
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">Professional Handrail & Home Safety Installations</h2>
                    <p class="text-lg text-gray-600">
                        Discover how Promenaid handrails and our professional safety rail installations can transform your home — adding lasting stability and confidence for you and your family.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
                    <div class="bg-gray-50 p-6 rounded-lg text-center">
                        <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Enhanced Safety</h3>
                        <p class="text-gray-600">Provides reliable support and stability to prevent falls and increase confidence in daily activities.</p>
                    </div>

                    <div class="bg-gray-50 p-6 rounded-lg text-center">
                        <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Professional Installation</h3>
                        <p class="text-gray-600">Expert installation ensures proper mounting and maximum safety for all users.</p>
                    </div>

                    <div class="bg-gray-50 p-6 rounded-lg text-center">
                        <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 11.5V14m0-2.5v-6a1.5 1.5 0 113 0m-3 6a1.5 1.5 0 00-3 0v2a7.5 7.5 0 0015 0v-5a1.5 1.5 0 00-3 0m-6-3V11m0-5.5v-1a1.5 1.5 0 013 0v1m0 0V11m0-5.5a1.5 1.5 0 013 0v3m0 0V11" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Versatile Solutions</h3>
                        <p class="text-gray-600">Multiple mounting options and configurations to suit various spaces and needs throughout your home.</p>
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
                            Home2stay is a trusted provider of accessibility and mobility solutions in the British Columbia
                            region, servicing the following: Vancouver, Surrey, Abbotsford, Richmond, Coquitlam, Tricities,
                            Mission, Delta, Pitt Meadows, Burnaby, Port Moody, Maple Ridge, Langley, Chilli Wack, White
                            Rock, Aldergrove, and other nearby areas.</p>
                        <p class="mb-5">Is your area not listed? Give us a call at <b><a href="tel:+16042591211" style="color: red;">(604) 259-1211</a></b> or submit a <b> <a href="#assessment" style="color: red;">FREE ASSESSMENT FORM</a></b> to check.
                        </p>
                    </div>
                    <!-- Image -->
                    <div class="w-full lg:w-1/2">
                        <img src="{{ asset('prom/prom-inout-5.jpeg') }}" alt="Safety Poles & Handrails"
                            class="w-full h-full object-cover" style="min-height: 400px;">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Safety Solutions Details -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="bg-white rounded-xl shadow-md p-8 md:p-12">
                    <h2 class="text-3xl font-bold text-gray-800 mb-6">Promenaid Handrails & Home Safety Solutions</h2>

                    <div class="prose prose-lg max-w-none">
                        <p class="text-gray-700 mb-4">
                            Home2Stay is a proud installer of Promenaid — the premium handrail system trusted by homeowners across Vancouver and the Lower Mainland. Promenaid's high-grade aluminum construction is built to last, resisting rust, cracking, and fading through every season.
                        </p>

                        <p class="text-gray-700 mb-4">
                            Style should never be sacrificed for safety. Promenaid offers smooth lines, elegant colors, and solid construction that fits beautifully in any home — old or new. These handrails add safety, value, and a clean, finished look to stairs, ramps, hallways, and decks.
                        </p>

                        <div class="my-8 p-6 bg-primary/5 border-l-4 border-primary rounded-r-lg">
                            <p class="text-gray-800 font-medium">
                                All our handrail and safety rail installations are carried out by our professional team and meet the highest safety standards. We ensure proper mounting and provide comprehensive training on use and maintenance.
                            </p>
                        </div>

                        <p class="text-gray-700 mb-4">
                            Whether you need stair handrails, ramp rails, outdoor railings, or floor-mounted support rails, our team can design and install the right solution for your home and lifestyle.
                        </p>

                        <h3 class="text-2xl font-bold text-gray-800 mt-8 mb-4">Expert Installation & Support</h3>

                        <p class="text-gray-700 mb-4">
                            Book a FREE ASSESSMENT with us at Home2stay and we'll guide you through the process of choosing the right safety support solutions for yourself or your loved ones. Our experienced team will evaluate your specific needs, space requirements, and recommend the most suitable safety systems.
                        </p>

                        <p class="text-gray-700 mb-4">
                            After installation, our technicians will provide you, your caregiver, or the users with a comprehensive introduction to the operation and maintenance of your safety support systems. Additional training can be requested if needed, and we can even provide guidance via video call for your convenience.
                        </p>

                        <p class="text-gray-700 mb-4">
                            We ensure that you know how to use and maintain your safety equipment safely and accurately. Our team is extensively trained in the installation and maintenance of all our safety products to provide you with the best possible service.
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
                        <img src="{{ asset('prom/prom-inout-1.jpg') }}" alt="Promenaid Handrail Installation Vancouver - Home2Stay"
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
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">Request Your Free Handrail & Home Safety Assessment</h2>
                    <p class="text-gray-600">Our specialists will evaluate your home and recommend the best Promenaid or safety rail solution for your specific needs.</p>
                </div>

                <form action="/submit-assessment" method="POST">
                    @csrf
                    <input type="hidden" name="form_type" value="quote">
                    <input type="hidden" name="form_source" value="Safety_Poles_Handrails_quote_form">
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
                            <label class="block text-gray-700 font-medium mb-2" for="location">Installation Location</label>
                            <input type="text" id="location" name="location" placeholder="e.g., Bedroom, Bathroom, Hallway, etc."
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
                        </div>
                    </div>

                    <!-- Product Interest -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Which products are you interested in? *</label>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="products[]" value="promenaid_handrails"
                                    class="form-checkbox text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Promenaid Handrails</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="products[]" value="promenaid_outdoor"
                                    class="form-checkbox text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Promenaid Outdoor Handrails</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="products[]" value="floor_mounted_rails"
                                    class="form-checkbox text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Floor-Mounted Advantage Rails</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="products[]" value="stair_handrails"
                                    class="form-checkbox text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Stair Handrails</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="products[]" value="deck_ramp_rails" class="form-checkbox text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Deck / Ramp Handrails</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="products[]" value="other" class="form-checkbox text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Other/Not Sure</span>
                            </label>
                        </div>
                    </div>

                    <!-- Additional Information -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-2" for="message">Additional Information</label>
                        <textarea id="message" name="message" rows="4"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent"
                            placeholder="Please share any specific requirements, mobility needs, or concerns..."></textarea>
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
                <h2 class="text-3xl font-bold mb-6">Ready to Install Promenaid in Your Home?</h2>
                <p class="text-xl mb-8">Contact us today to explore how Promenaid handrails and our home safety solutions can improve stability, safety, and style in your Vancouver home.</p>
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