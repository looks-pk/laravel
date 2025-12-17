@extends('layouts.app')

@section('title', 'A Barrier-Free Bathroom | Safe Bath For Seniors - Home2stay')
@section('meta_description', 'Our barrier-free bathrooms are perfect for seniors and those with mobility issues. Shower in the safety of your own home, regardless of your age or ability. Installation available.')

@push('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <style>
        .product-highlight {
            border-left: 4px solid #4f46e5;
        }
        
        .line-clamp-3 {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
    </style>
@endpush

@section('content')
    <!-- Hero Banner -->
    <section class="relative bg-gray-900 overflow-hidden" style="min-height: 500px;">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0 bg-cover bg-center"
            style="background-image: url('{{ asset('al-prod-page-imgs/141-1200x800-1-1024x683-min.jpg') }}');">
            <div class="absolute inset-0 bg-black opacity-60"></div>
        </div>

        <!-- Hero Content -->
        <div class="container mx-auto px-4 relative z-10 flex items-center" style="min-height: 500px;">
            <div class="max-w-3xl">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6">Barrier-Free Bathrooms</h1>
                <p class="text-xl text-white/90 mb-8">
                    Creating safe, accessible, and beautiful bathroom spaces that promote independence and dignity for all users.
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
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Our Barrier-Free Bathroom Solutions</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Discover our range of innovative solutions designed to make bathrooms safer, more accessible, and more comfortable for individuals with mobility challenges.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Product 1 - Shower Bay -->
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl flex flex-col h-full">
                    <div class="overflow-hidden relative">
                        <img class="w-full object-cover" src="{{ asset('/rentals-main/Home2stay-Portable-Shower-Unit-remtals-category-min.jpg') }}" alt="Shower Bay Portable Accessible Shower"
                            style="height: 300px;">
                        <div class="absolute top-0 right-0 bg-primary text-white text-sm font-bold px-3 py-1 m-4 rounded">
                            Popular
                        </div>
                    </div>
                    <div class="p-6 flex-1 flex flex-col">
                    <a href="{{ route('products.show', 'home2stay-modular-accessible-showers') }}" > <h3 class="text-xl font-bold text-gray-800 mb-3">Shower Bay - Portable Accessible Shower</h3></a>
                        <p class="text-gray-600 mb-4 flex-grow">The Shower Bay is a revolutionary portable shower designed specifically for wheelchair users. It provides a true shower experience with easy installation in any room, offering independence and dignity for users with mobility challenges.</p>
                        <div class="mt-auto">
                            <a href="/products/home2stay-modular-accessible-showers/"
                                class="block w-full bg-primary hover:bg-primary-dark text-white py-3 px-4 rounded-lg transition duration-300 text-center font-medium">
                                View Product
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Product 2 - Best Bath -->
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl flex flex-col h-full">
                    <div class="overflow-hidden relative">
                        <img src="{{ asset('np-img/best-bath.jpg') }}" alt="Best Bath Modular Showers"
                            class="w-full object-contain" style="height: 300px; background-color: #f8f9fa;">
                        <div class="absolute top-0 right-0 bg-green-500 text-white text-sm font-bold px-3 py-1 m-4 rounded">
                            ADA Compliant
                        </div>
                    </div>
                    <div class="p-6 flex-1 flex flex-col">
                    <a href="{{ route('products.show', 'bestbath-modular-barrier-free-showers') }}" > <h3 class="text-xl font-bold text-gray-800 mb-3">Best Bath Modular Barrier-Free Showers</h3></a>
                        <p class="text-gray-600 mb-4 flex-grow">Best Bath Intelligent Designs offers premium modular barrier-free showers that set the standard for safety, durability, and accessibility. Manufactured in the USA with a 30-year limited warranty.</p>
                        <div class="mt-auto">
                            <a href="/products/bestbath-modular-barrier-free-showers/"
                                class="block w-full bg-primary hover:bg-primary-dark text-white py-3 px-4 rounded-lg transition duration-300 text-center font-medium">
                                View Product
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Product 3 - Custom Tile Showers -->
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl flex flex-col h-full">
                    <div class="overflow-hidden relative">
                        <img src="{{ asset('al-prod-page-imgs/141-1200x800-1-1024x683-min.jpg') }}" alt="Custom Tile Shower Conversion Kits"
                            class="w-full object-cover" style="height: 300px;">
                    </div>
                    <div class="p-6 flex-1 flex flex-col">
                    <a href="{{ route('products.show', 'home2stay-european-wet-room-conversion-kits') }}" > <h3 class="text-xl font-bold text-gray-800 mb-3">Custom Tile Shower Conversion Kits</h3></a>
                        <p class="text-gray-600 mb-4 flex-grow">Transform your bathroom with our custom tile shower conversion kits. Create beautiful, accessible, and functional spaces with curbless shower design that combines style with universal accessibility.</p>
                        <div class="mt-auto">
                            <a href="/products/home2stay-european-wet-room-conversion-kits/"
                                class="block w-full bg-primary hover:bg-primary-dark text-white py-3 px-4 rounded-lg transition duration-300 text-center font-medium">
                                View Product
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Product 4 - Sentrel Systems -->
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl flex flex-col h-full">
                    <div class="overflow-hidden relative">
                        <img src="{{ asset('np-img/central-system.jpg') }}" alt="Sentrel Systems Showers"
                            class="w-full object-contain" style="height: 300px; background-color: #f8f9fa;">
                        <div class="absolute top-0 right-0 bg-blue-500 text-white text-sm font-bold px-3 py-1 m-4 rounded">
                            Premium
                        </div>
                    </div>
                    <div class="p-6 flex-1 flex flex-col">
                    <a href="{{ route('products.show', 'sentrel-systems-showers') }}" > <h3 class="text-xl font-bold text-gray-800 mb-3">Sentrel Systems Showers</h3></a>
                        <p class="text-gray-600 mb-4 flex-grow">Sentrel Systems provides innovative shower solutions designed for accessibility and comfort. Their advanced systems offer superior durability and modern design for barrier-free bathroom environments.</p>
                        <div class="mt-auto">
                            <a href="/products/sentrel-systems-showers/"
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
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">Creating Safe & Accessible Bathroom Spaces</h2>
                    <p class="text-lg text-gray-600">
                        Our barrier-free bathroom solutions are designed to help individuals with mobility challenges maintain independence and dignity in their daily routines. No need to sacrifice style for safety and comfort.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
                    <div class="bg-gray-50 p-6 rounded-lg text-center">
                        <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">ADA Compliant</h3>
                        <p class="text-gray-600">All our bathroom products meet or exceed ADA compliance standards and safety regulations.</p>
                    </div>

                    <div class="bg-gray-50 p-6 rounded-lg text-center">
                        <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 11.5V14m0-2.5v-6a1.5 1.5 0 113 0m-3 6a1.5 1.5 0 00-3 0v2a7.5 7.5 0 0015 0v-5a1.5 1.5 0 00-3 0m-6-3V11m0-5.5v-1a1.5 1.5 0 013 0v1m0 0V11m0-5.5a1.5 1.5 0 013 0v3m0 0V11" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Universal Design</h3>
                        <p class="text-gray-600">Beautiful, functional designs that work for everyone, regardless of age or ability level.</p>
                    </div>

                    <div class="bg-gray-50 p-6 rounded-lg text-center">
                        <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Quick Installation</h3>
                        <p class="text-gray-600">Professional installation with minimal disruption to your daily routine and living space.</p>
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
                            Home2stay has been providing accessibility solutions for almost a decade in the British Columbia region, servicing the following: Vancouver, Surrey, Abbotsford, Richmond, Coquitlam, Tricities, Mission, Delta, Pitt Meadows, Burnaby, Port Moody, Maple Ridge, Langley, Chilli Wack, White Rock, Aldergrove, and other nearby areas.
                        </p>
                        <p class="mb-5">Is your area not listed? Give us a call at <a href="tel:+16042591211" style="color:red;">(604) 259-1211</a> or submit a FREE <a href="#assessment" style="color:red;">ASSESSMENT FORM</a> to check.</p>
                    </div>
                    <!-- Image -->
                    <div class="w-full lg:w-1/2">
                        <img src="{{ asset('h2s-banners/Sentrel-Bathroom-2.png') }}" alt="Barrier-Free Bathroom Solutions"
                            class="w-full h-full object-cover" style="min-height: 400px;">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bathroom Solutions Details -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="bg-white rounded-xl shadow-md p-8 md:p-12">
                    <h2 class="text-3xl font-bold text-gray-800 mb-6">Barrier-Free Bathroom Solutions</h2>

                    <div class="prose prose-lg max-w-none">
                        <p class="text-gray-700 mb-4">
                            We are a certified distributor and installer of Best Bath Intelligent Designs - maker of premium modular barrier-free showers that are ADA-compliant. Best Bath's modular barrier-free showers set the standard for safety, durability, accessibility, and beauty. They are manufactured in the USA and backed by a 30-year limited warranty. You can choose from a wide selection of available sizes, finishes, designs, and colors to match your specific needs and preferences.
                        </p>

                        <p class="text-gray-700 mb-4">
                            The revolutionary Shower Bay is perfect for those with limited space, budget constraints, or who need a quick solution. These portable barrier-free showers can be easily installed in any room in your home without any major remodeling. The Shower Bay can be assembled quickly - simply attach to any water source and users can shower comfortably and safely while remaining seated, providing true independence and dignity.
                        </p>

                        <p class="text-gray-700 mb-4">
                            Our Sentrel Systems showers offer another premium option for those seeking advanced accessibility solutions. These innovative systems provide superior durability and modern design, perfect for creating truly barrier-free bathroom environments that don't compromise on style or functionality.
                        </p>

                        <div class="my-8 p-6 bg-primary/5 border-l-4 border-primary rounded-r-lg">
                            <p class="text-gray-800 font-medium">
                                Our custom tile shower conversion kits (also known as curbless showers) are designed to open up the bathroom by removing obstacles, including the biggest physical barrier - the bathtub. The aim is to create an open, seamless bathroom space that transforms the entire look and feel of the room. This design approach has been embraced by the design community due to its functionality and aesthetics, representing true Universal Design principles.
                            </p>
                        </div>

                        <p class="text-gray-700 mb-4">
                            No need to sacrifice style for safety and comfort. Our barrier-free bathroom solutions combine beautiful design with practical functionality, ensuring that your bathroom is both accessible and aesthetically pleasing.
                        </p>

                        <h3 class="text-2xl font-bold text-gray-800 mt-8 mb-4">Expert Assessment & Professional Installation</h3>

                        <p class="text-gray-700 mb-4">
                            Book a FREE ASSESSMENT with us at Home2stay and we'll give you our customized recommendations. Our assessment can also be done via video call, for your convenience. We work with you to design the perfect barrier-free bathroom solution that meets your specific needs and preferences.
                        </p>

                        <p class="text-gray-700 mb-4">
                            Our experienced team ensures professional installation with minimal disruption to your daily routine. We'll guide you through the entire process, from initial consultation to final installation and training on your new accessibility features.
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
                        <h2 class="text-3xl font-bold text-gray-800 mb-4">Ready to book a schedule?</h2>
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
                        <img src="{{ asset('al-prod-page-imgs/Ready-to-book-aschedule-min.png') }}" alt="Barrier-Free Bathroom Solutions"
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
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">Request Your Barrier-Free Bathroom Assessment</h2>
                    <p class="text-gray-600">Our accessibility specialists will evaluate your bathroom space and recommend the best barrier-free solutions for your needs.</p>
                </div>

                <form action="/submit-quote" method="POST">
                    @csrf
                    <input type="hidden" name="form_type" value="quote">
                    <input type="hidden" name="form_source" value="Barrier-Free-Bathrooms_quote_form">
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
                            <label class="block text-gray-700 font-medium mb-2" for="bathroom_size">Current Bathroom Size (if known)</label>
                            <input type="text" id="bathroom_size" name="bathroom_size"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
                        </div>
                    </div>

                    <!-- Product Interest -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Which bathroom solutions are you interested in? *</label>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="products[]" value="shower_bay"
                                    class="form-checkbox text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Shower Bay - Portable Accessible Showers</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="products[]" value="best_bath"
                                    class="form-checkbox text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Best Bath Modular Barrier-Free Showers</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="products[]" value="custom_tile_showers"
                                    class="form-checkbox text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Custom Tile Showers</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="products[]" value="sentrel_systems"
                                    class="form-checkbox text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Sentrel Systems Showers</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="products[]" value="bathroom_renovation"
                                    class="form-checkbox text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Complete Bathroom Renovation</span>
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
                            placeholder="Please share any specific requirements or concerns..."></textarea>
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
                <p class="text-xl mb-8">Contact us today to explore how our barrier-free bathroom solutions can enhance your independence and safety.</p>
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