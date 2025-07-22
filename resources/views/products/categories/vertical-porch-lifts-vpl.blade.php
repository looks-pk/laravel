@extends('layouts.app')

@section('title', 'Vertical Platform Lifts - Home2stay')
@section('meta_description', 'Improve accessibility in your home or outdoor spaces with our reliable elevator/porch lifts, ensuring smooth transportation between different levels.')

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
            style="background-image: url('{{ asset('/al-prod-page-imgs/ElevatorPorch-Lifts.jpg') }}');">
            <div class="absolute inset-0 bg-black opacity-60"></div>
        </div>

        <!-- Hero Content -->
        <div class="container mx-auto px-4 relative z-10 flex items-center" style="min-height: 500px;">
            <div class="max-w-3xl">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6">Vertical Platform Lifts</h1>
                <p class="text-xl text-white/90 mb-8">
                    A cost-effective home accessibility solution to give scooter and wheelchair users an alternative to entryway or deck steps. Works like a mini home elevator for indoor and outdoor use.
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
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Our Vertical Platform Lift Products</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Discover our range of vertical platform lifts designed to provide safe and reliable access for wheelchair and scooter users to different levels of your home.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                <!-- Product 1 -->
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl flex flex-col h-full">
                    <div class="overflow-hidden relative">
                        <img src="{{ asset('bathsafety-cat/vertical-platform-lift-bruno-residential-porch-down-by-steps.jpg') }}" alt="Home2stay Regular Vertical Porch Lift / Platform Lift"
                            class="w-full object-cover" style="height: 400px;">
                        <div class="absolute top-0 right-0 bg-primary text-white text-sm font-bold px-3 py-1 m-4 rounded">
                            Popular
                        </div>
                    </div>
                    <div class="p-6 flex-1 flex flex-col">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Home2stay Regular Vertical Porch Lift / Platform Lift</h3>
                        <p class="text-gray-600 mb-4 flex-grow">Bruno VPL-3100 Vertical Platform Lift provides a rugged, reliable and affordable solution for individuals who use wheelchairs or scooters.</p>
                        <div class="mt-auto">
                            <a href="/products/home2stay-regular-vertical-porch-lift-platform-lift/"
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
                        <img src="{{ asset('bathsafety-cat/NEW-TTL-technical-drawing.jpg') }}" alt="Home2stay Trus-T Residential Indoor / Outdoor Lift"
                            class="w-full object-cover" style="height: 400px;">
                    </div>
                    <div class="p-6 flex-1 flex flex-col">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Home2stay Trus-T Residential Indoor / Outdoor Lift</h3>
                        <p class="text-gray-600 mb-4 flex-grow">Trus-T Lift's legacy of affordable mobility spans over 25 years. Engineered for both indoor and outdoor applications with superior weather resistance.</p>
                        <div class="mt-auto">
                            <a href="/products/home2stay-trus-t-residential-indoor-outdoor-lift/"
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
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">Safe & Reliable Accessibility Solution</h2>
                    <p class="text-lg text-gray-600">
                        Stairs may be the biggest obstacle in the home, especially for the elderly, those with mobility limitations and disabilities, and users of mobility aids such as wheelchairs, scooters, etc.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
                    <div class="bg-gray-50 p-6 rounded-lg text-center">
                        <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M9 19l3 3m0 0l3-3m-3 3V10" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Mini Home Elevator</h3>
                        <p class="text-gray-600">Works like a mini home elevator, providing vertical transportation between different levels of your home.</p>
                    </div>

                    <div class="bg-gray-50 p-6 rounded-lg text-center">
                        <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Indoor & Outdoor Use</h3>
                        <p class="text-gray-600">Engineered for both indoor and outdoor applications with superior weather resistance and durability.</p>
                    </div>

                    <div class="bg-gray-50 p-6 rounded-lg text-center">
                        <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Wheelchair & Scooter Accessible</h3>
                        <p class="text-gray-600">Cost-effective solution specifically designed for wheelchair and scooter users to access different levels safely.</p>
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
                            Home2stay is the local Bruno and RAM lifts expert in the British Columbia region, servicing the following: Vancouver, Surrey, Abbotsford, Richmond, Coquitlam, Tricities, Mission, Delta, Pitt Meadows, Burnaby, Port Moody, Maple Ridge, Lengley, Chilli Wack, White Rock, Aldergrove, and other nearby areas.</p>
                        <p class="mb-5">Is your area not listed? Give us a call at (604) 259-1211 or submit a FREE ASSESSMENT FORM to check.</p>
                    </div>
                    <!-- Image -->
                    <div class="w-full lg:w-1/2">
                        <img src="{{ asset('/bathsafety-cat/vertical-platform-lift-bruno-residential-porch-down-by-steps.jpg') }}" alt="Vertical Platform Lifts"
                            class="w-full h-full object-cover" style="min-height: 400px;">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- VPL Details -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="bg-white rounded-xl shadow-md overflow-hidden">
                    <div class="p-8 md:p-12">
                        <h2 class="text-3xl font-bold text-gray-800 mb-6 text-center">Understanding Vertical Platform Lifts</h2>

                        <div class="prose prose-lg max-w-none">
                            <p class="text-gray-700 mb-4">
                                Stairs may be the biggest obstacle in the home, especially for the elderly, those with mobility limitations and disabilities, and users of mobility aids such as wheelchairs, scooters, etc. A vertical platform / porch lift (VPL) or elevator helps you go up and down your home, whether indoors or outdoors.
                            </p>

                            <p class="text-gray-700 mb-4">
                                VPL's or residential elevators are mechanical devices used for transporting people up and down the different floors.
                            </p>

                            <div class="my-8 p-6 bg-primary/5 border-l-4 border-primary rounded-r-lg">
                                <p class="text-gray-800 font-medium">
                                    A vertical platform / porch lift (VPL) works like a mini home elevator. It is a cost-effective home accessibility solution to give scooter and wheelchair users an alternative to entryway or deck steps.
                                </p>
                            </div>

                            <h3 class="text-2xl font-bold text-gray-800 mt-8 mb-4">Trusted Brands & Quality</h3>

                            <p class="text-gray-700 mb-4">
                                Home2stay is a certified installer and distributor of two trusted top brands Bruno and RAM- which are known for their durability to withstand even harsh weather conditions, intuitive operations, and safety features.
                            </p>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                                <div class="bg-gray-50 p-4 rounded-lg">
                                    <h4 class="font-semibold text-gray-800 mb-2">Bruno Lifts</h4>
                                    <p class="text-gray-600 text-sm">Rugged, reliable and affordable solutions known for their durability and weather resistance.</p>
                                </div>
                                <div class="bg-gray-50 p-4 rounded-lg">
                                    <h4 class="font-semibold text-gray-800 mb-2">RAM Elevators</h4>
                                    <p class="text-gray-600 text-sm">Energy-efficient designs using 50% less energy than comparable products with no pit required.</p>
                                </div>
                                <div class="bg-gray-50 p-4 rounded-lg">
                                    <h4 class="font-semibold text-gray-800 mb-2">Weather Resistant</h4>
                                    <p class="text-gray-600 text-sm">Built to withstand harsh weather conditions for reliable outdoor use.</p>
                                </div>
                                <div class="bg-gray-50 p-4 rounded-lg">
                                    <h4 class="font-semibold text-gray-800 mb-2">Space Efficient</h4>
                                    <p class="text-gray-600 text-sm">Machine room-less design saves space and simplifies installation.</p>
                                </div>
                            </div>

                            <h3 class="text-2xl font-bold text-gray-800 mt-8 mb-4">RAM Residential Elevators</h3>

                            <p class="text-gray-700 mb-4">
                                Home2stay has two models of RAM residential elevators- the Stratus and the Crystal. They are both space-efficient due to their machine room-less design with no pit required. RAM Elevators use at least 50% less energy than other comparable products.
                            </p>

                            <div class="mt-8 flex flex-wrap gap-4 justify-center">
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
        </div>
    </section>

    <!-- Training & Support Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">Comprehensive Training & Support</h2>
                    <p class="text-lg text-gray-600">
                        Book a FREE ASSESSMENT with us at Home2stay and we'll guide you through the process of purchasing your elevator or porch lift.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
                    <div class="bg-gray-50 p-6 rounded-lg">
                        <h3 class="text-xl font-bold text-gray-800 mb-4">Installation Training</h3>
                        <p class="text-gray-600 mb-4">
                            After installation, our technicians and/or salesperson will give you, your caregiver, or the user/s a comprehensive introduction to the operation and maintenance of the product.
                        </p>
                        <ul class="text-gray-600 text-sm space-y-2">
                            <li>• Comprehensive operation training</li>
                            <li>• Maintenance guidance</li>
                            <li>• Safety procedures</li>
                            <li>• Troubleshooting basics</li>
                        </ul>
                    </div>

                    <div class="bg-gray-50 p-6 rounded-lg">
                        <h3 class="text-xl font-bold text-gray-800 mb-4">Flexible Training Options</h3>
                        <p class="text-gray-600 mb-4">
                            Additional training can be requested if the main user or caregiver is not on site after the installation is completed. This can also be done via video call, for your convenience.
                        </p>
                        <ul class="text-gray-600 text-sm space-y-2">
                            <li>• On-site training sessions</li>
                            <li>• Video call training available</li>
                            <li>• Additional sessions as needed</li>
                            <li>• Caregiver training included</li>
                        </ul>
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
                        <img src="{{ asset('/bathsafety-cat/NEW-TTL-technical-drawing.jpg') }}" alt="Vertical Platform Lifts"
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
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">Request Your Vertical Platform Lift Assessment</h2>
                    <p class="text-gray-600">Our vertical platform lift specialists will evaluate your home and recommend the
                        best lift solution for your accessibility needs.</p>
                </div>

                <form action="/submit-assessment" method="POST">
                    @csrf
                    <input type="hidden" name="form_type" value="quote">
                    <input type="hidden" name="form_source" value="Vertical_Porch_Lifts_VPL_quote_form">
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
                            <input type="text" id="location" name="location" placeholder="e.g., Front porch, Back deck, Indoor stairs, etc."
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
                        </div>
                    </div>

                    <!-- Installation Type -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">What type of installation are you considering? *</label>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                            <label class="flex items-center space-x-3">
                                <input type="radio" name="installation_type" value="indoor" class="text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Indoor Installation</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="radio" name="installation_type" value="outdoor" class="text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Outdoor Installation</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="radio" name="installation_type" value="both" class="text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Both Indoor & Outdoor</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="radio" name="installation_type" value="unsure" class="text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Not Sure</span>
                            </label>
                        </div>
                    </div>

                    <!-- Product Interest -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Which vertical platform lift are you interested in?</label>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="products[]" value="bruno_vpl_3100"
                                    class="form-checkbox text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Bruno VPL-3100 Platform Lift</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="products[]" value="trus_t_lift"
                                    class="form-checkbox text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Trus-T Residential Lift</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="products[]" value="ram_stratus"
                                    class="form-checkbox text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">RAM Stratus Elevator</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="products[]" value="ram_crystal"
                                    class="form-checkbox text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">RAM Crystal Elevator</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="products[]" value="not_sure" class="form-checkbox text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Not Sure/Need Consultation</span>
                            </label>
                        </div>
                    </div>

                    <!-- Mobility Requirements -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">What mobility equipment will be used?</label>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="mobility_equipment[]" value="wheelchair"
                                    class="form-checkbox text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Manual Wheelchair</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="mobility_equipment[]" value="power_wheelchair"
                                    class="form-checkbox text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Power Wheelchair</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="mobility_equipment[]" value="scooter"
                                    class="form-checkbox text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Mobility Scooter</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="mobility_equipment[]" value="walker"
                                    class="form-checkbox text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Walker/Rollator</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="mobility_equipment[]" value="none"
                                    class="form-checkbox text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">No Equipment (Walking)</span>
                            </label>
                        </div>
                    </div>

                    <!-- Additional Information -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-2" for="message">Additional Information</label>
                        <textarea id="message" name="message" rows="4"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent"
                            placeholder="Please describe your space, height requirements, any specific needs, or questions about vertical platform lifts..."></textarea>
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
                <h2 class="text-3xl font-bold mb-6">Ready to Transform Your Home Accessibility?</h2>
                <p class="text-xl mb-8">Contact us today to explore how our vertical platform lifts can make your home more accessible and improve your quality of life.</p>
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