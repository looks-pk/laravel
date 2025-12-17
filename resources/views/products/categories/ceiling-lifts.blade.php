@extends('layouts.app')

@section('title', 'Ceiling Lifts | Safe Solution for Patient Care - Home2stay')
@section('meta_description', 'Lessen risks of injuries for both patient and caregiver with a patient lift system. Ceiling lifts are motorized overhead moving and handling systems used to transport patients safely and comfortably from one point to another. Learn more.')

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
            style="background-image: url('{{ asset('al-prod-page-imgs/Ceiling-Lifts.jpg') }}');">
            <div class="absolute inset-0 bg-black opacity-60"></div>
        </div>

        <!-- Hero Content -->
        <div class="container mx-auto px-4 relative z-10 flex items-center" style="min-height: 500px;">
            <div class="max-w-3xl">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6">Ceiling Lifts</h1>
                <p class="text-xl text-white/90 mb-8">
                    Professional ceiling lift systems for safe, comfortable patient transfers. Providing mobility solutions with dignity and independence for homes and care facilities.
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
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Our Ceiling Lift Systems</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Discover our comprehensive range of ceiling lift solutions designed for safe, comfortable, and dignified patient transfers in homes and healthcare facilities.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Product 1 -->
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl flex flex-col h-full">
                    <div class="overflow-hidden relative">
                        <img class="contain p-2" src="{{ asset('bathsafety-cat/EasytrackFSFreestanding1.jpg') }}" alt="Home2stay Easytrack FS Portable Ceiling Lift System"
                            class="w-full object-cover" style="height: 300px;">
                        <div class="absolute top-0 right-0 bg-primary text-white text-sm font-bold px-3 py-1 m-4 rounded">
                            Popular
                        </div>
                    </div>
                    <div class="p-6 flex-1 flex flex-col">
                    <a href="{{ route('products.show', 'home2stay-easytrack-fs-portable-ceiling-lift-system') }}" > <h3 class="text-xl font-bold text-gray-800 mb-3">Home2stay Easytrack FS Portable Ceiling Lift System</h3></a>
                        <p class="text-gray-600 mb-4 flex-grow">A true portable lift and transport system for the home- easy to use and assemble. The Easytrack FS i...</p>
                        <div class="mt-auto">
                            <a href="/products/home2stay-easytrack-fs-portable-ceiling-lift-system/"
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
                        <img src="{{ asset('bathsafety-cat/Protable.jpg') }}" alt="Home2stay Portable Ceiling Lift"
                            class="w-full object-cover" style="height: 300px;">
                    </div>
                    <div class="p-6 flex-1 flex flex-col">
                    <a href="{{ route('products.show', 'home2stay-portable-ceiling-lift') }}" > <h3 class="text-xl font-bold text-gray-800 mb-3">Home2stay Portable Ceiling Lift</h3></a>
                        <p class="text-gray-600 mb-4 flex-grow">The advantages that stem from using a Ceiling Lift are undeniable and have dramatically reduced the...</p>
                        <div class="mt-auto">
                            <a href="/products/home2stay-portable-ceiling-lift"
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
                        <img src="{{ asset('bathsafety-cat/Untitled-2.jpg') }}" alt="Home2stay Maxi Sky 440 Portable Ceiling Lift System"
                            class="w-full object-cover" style="height: 300px;">
                    </div>
                    <div class="p-6 flex-1 flex flex-col">
                    <a href="{{ route('products.show', 'home2stay-maxi-sky-440-portable-ceiling-lift-system') }}" > <h3 class="text-xl font-bold text-gray-800 mb-3">Home2stay Maxi Sky 440 Portable Ceiling Lift System</h3></a>
                        <p class="text-gray-600 mb-4 flex-grow">Ceiling lifts offer a proven method for handling patients and residents with safety and dignity that...</p>
                        <div class="mt-auto">
                            <a href="/products/home2stay-maxi-sky-440-portable-ceiling-lift-system/"
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
                        <img class="contain w-full" src="{{ asset('al-prod-page-imgs/Ceiling-Lifts.jpg') }}" alt="Home2stay Maxi Sky 2 Ceiling Lift Solution"
                            class="w-full object-cover" style="height: 300px;">
                    </div>
                    <div class="p-6 flex-1 flex flex-col">
                    <a href="{{ route('products.show', 'home2stay-maxi-sky-2-ceiling-lift-solution') }}" > <h3 class="text-xl font-bold text-gray-800 mb-3">Home2stay Maxi Sky 2 Ceiling Lift Solution</h3></a>
                        <p class="text-gray-600 mb-4 flex-grow">The Maxi Sky 2 Ceiling Lift offers maximum flexibility and versatility- with tracks available in an...</p>
                        <div class="mt-auto">
                            <a href="/products/home2stay-maxi-sky-2-ceiling-lift-solution/"
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
                        <img src="{{ asset('bathsafety-cat/track-lift.jpg') }}" alt="Home2stay Ceiling Track Lift"
                            class="w-full object-cover" style="height: 300px;">
                    </div>
                    <div class="p-6 flex-1 flex flex-col">
                    <a href="{{ route('products.show', 'home2stay-ceiling-track-lift') }}" > <h3 class="text-xl font-bold text-gray-800 mb-3">Home2stay Ceiling Track Lift</h3></a>
                        <p class="text-gray-600 mb-4 flex-grow">Built for a quiet operation, the C-450 Ceiling Track Lift provides a smooth and effortless transfer...</p>
                        <div class="mt-auto">
                            <a href="/products/home2stay-ceiling-track-lift/"
                                class="block w-full bg-primary hover:bg-primary-dark text-white py-3 px-4 rounded-lg transition duration-300 text-center font-medium">
                                View Product
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Product 6 -->
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl flex flex-col h-full">
                    <div class="overflow-hidden relative">
                        <img class="contain w-full p-14" src="{{ asset('bathsafety-cat/GH3-1.jpg') }}" alt="Home2stay GH3 Ceiling Hoist / Ceiling Lift"
                            class="w-full object-cover" style="height: 300px;">
                    </div>
                    <div class="p-6 flex-1 flex flex-col">
                    <a href="{{ route('products.show', 'home2stay-gh3-ceiling-hoist-ceiling-lift') }}" > <h3 class="text-xl font-bold text-gray-800 mb-3">Home2stay GH3 Ceiling Hoist / Ceiling Lift</h3></a>
                        <p class="text-gray-600 mb-4 flex-grow">Powerful and user-friendly, Guldmann's GH3 Ceiling Hoist / Lift ensures effective lifting and movi...</p>
                        <div class="mt-auto">
                            <a href="/products/home2stay-gh3-ceiling-hoist-ceiling-lift/"
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
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">Safe & Dignified Patient Transfers</h2>
                    <p class="text-lg text-gray-600">
                        Ceiling lift systems are motorized overhead moving and handling systems used to transport patients safely and comfortably from one point or surface to another, along the track. These mechanical devices provide safety for both patients and caregivers while ensuring comfort and dignity.
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
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Safety First</h3>
                        <p class="text-gray-600">Reduces injuries for both patients and caregivers compared to manual lifting methods.</p>
                    </div>

                    <div class="bg-gray-50 p-6 rounded-lg text-center">
                        <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 11.5V14m0-2.5v-6a1.5 1.5 0 113 0m-3 6a1.5 1.5 0 00-3 0v2a7.5 7.5 0 0015 0v-5a1.5 1.5 0 00-3 0m-6-3V11m0-5.5v-1a1.5 1.5 0 013 0v1m0 0V11m0-5.5a1.5 1.5 0 013 0v3m0 0V11" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Flexible Options</h3>
                        <p class="text-gray-600">Fixed or portable systems available, accommodating weights up to 600 lbs (272 kg).</p>
                    </div>

                    <div class="bg-gray-50 p-6 rounded-lg text-center">
                        <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Time Saving</h3>
                        <p class="text-gray-600">Provides mobility comfort and reliability while saving time for caregivers.</p>
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
                            Home2stay is one of the top and most reliable ceiling lift installers in the British Columbia region, servicing the following: Vancouver, Surrey, Abbotsford, Richmond, Coquitlam, Tricities, Mission, Delta, Pitt Meadows, Burnaby, Port Moody, Maple Ridge, Langley, Chilli Wack, White Rock, Aldergrove, and other nearby areas.</p>
                        <p class="mb-5">Is your area not listed? Give us a call at <b><a href="tel:+16042591211" style="color: red;">(604) 259-1211</a></b> or submit a <b> <a href="#assessment" style="color: red;">FREE ASSESSMENT FORM</a></b> to check.
                        </p>
                    </div>
                    <!-- Image -->
                    <div class="w-full lg:w-1/2">
                        <img src="{{ asset('al-prod-page-imgs/Rectangle%20320-min.png') }}" alt="Ceiling Lift Installation"
                            class="w-full h-full object-cover" style="min-height: 400px;">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Ceiling Lifts Details -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="bg-white rounded-xl shadow-md p-8 md:p-12">
                    <h2 class="text-3xl font-bold text-gray-800 mb-6">Understanding Ceiling Lift Systems</h2>

                    <div class="prose prose-lg max-w-none">
                        <p class="text-gray-700 mb-4">
                            Ceiling lift systems are motorized overhead moving and handling systems used to transport patients safely and comfortably from one point or surface (such as beds, wheelchairs, commodes, bath tubs, etc.) to another, along the track. The use of this mechanical device instead of a manual hoist results in fewer injuries for both the patient and the caregiver. A ceiling lift saves you time and provides mobility comfort and reliability for the elderly or people with permanent or temporary disabilities.
                        </p>

                        <h3 class="text-2xl font-bold text-gray-800 mt-8 mb-4">Main Considerations Before Purchasing</h3>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 my-8">
                            <div class="bg-primary/5 p-6 rounded-lg">
                                <h4 class="font-bold text-gray-800 mb-2">Types of Ceiling Lift</h4>
                                <p class="text-gray-700">Fixed or portable systems available to meet different needs and installation requirements.</p>
                            </div>
                            <div class="bg-primary/5 p-6 rounded-lg">
                                <h4 class="font-bold text-gray-800 mb-2">Weight Capacity</h4>
                                <p class="text-gray-700">We have models that can accommodate as much as 600 lbs. (272 kg.)</p>
                            </div>
                            <div class="bg-primary/5 p-6 rounded-lg">
                                <h4 class="font-bold text-gray-800 mb-2">Sling Selection</h4>
                                <p class="text-gray-700">Choose slings that comfortably accommodate the size and weight of the end users.</p>
                            </div>
                            <div class="bg-primary/5 p-6 rounded-lg">
                                <h4 class="font-bold text-gray-800 mb-2">Ease of Use</h4>
                                <p class="text-gray-700">Consider the comfort and convenience for both patients and caregivers.</p>
                            </div>
                            <div class="bg-primary/5 p-6 rounded-lg">
                                <h4 class="font-bold text-gray-800 mb-2">Usage Type</h4>
                                <p class="text-gray-700">Individual home use or heavier commercial/healthcare facility use.</p>
                            </div>
                            <div class="bg-primary/5 p-6 rounded-lg">
                                <h4 class="font-bold text-gray-800 mb-2">Investment Options</h4>
                                <p class="text-gray-700">Purchase or rental options available to meet your budget and timeline.</p>
                            </div>
                        </div>

                        <div class="my-8 p-6 bg-primary/5 border-l-4 border-primary rounded-r-lg">
                            <p class="text-gray-800 font-medium">
                                A ceiling lift allows people with limited mobility to stay in the home that they love. It is a worthwhile investment- or if you are not ready to purchase yet, we have ceiling lifts available for RENT.
                            </p>
                        </div>

                        <h3 class="text-2xl font-bold text-gray-800 mt-8 mb-4">Expert Installation & Support</h3>

                        <p class="text-gray-700 mb-4">
                            Book a FREE ASSESSMENT with us at Home2stay and we'll guide you through the process of choosing the right ceiling lift system for yourself or your loved ones. After installation, our technicians and/or salesperson will give you, your caregiver or the user/s a comprehensive introduction to the operation and maintenance of the product.
                        </p>

                        <p class="text-gray-700 mb-4">
                            Additional training can be requested if the main user or caregiver is not on site after the installation is completed. This can also be done via video call, for your convenience.
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
                        <img src="{{ asset('bathsafety-cat/ready-to-book-a-schedule.jpg') }}" alt="Ceiling Lift Consultation"
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
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">Request Your Ceiling Lift Assessment</h2>
                    <p class="text-gray-600">Our mobility specialists will evaluate your specific needs and recommend the
                        best ceiling lift system for your home or facility.</p>
                </div>

                <form action="/submit-assessment" method="POST">
                    @csrf
                    <input type="hidden" name="form_type" value="quote">
                    <input type="hidden" name="form_source" value="Ceiling_Lifts_quote_form">
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
                            <label class="block text-gray-700 font-medium mb-2" for="location">Location/Address</label>
                            <input type="text" id="location" name="location"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
                        </div>
                    </div>

                    <!-- Lift Type Interest -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Which type of ceiling lift are you interested in? *</label>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                            <label class="flex items-center space-x-3">
                                <input type="radio" name="lift_type" value="portable" class="text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Portable Ceiling Lift</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="radio" name="lift_type" value="fixed" class="text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Fixed Track System</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="radio" name="lift_type" value="both" class="text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Need Consultation</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="radio" name="lift_type" value="rental" class="text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Rental Options</span>
                            </label>
                        </div>
                    </div>

                    <!-- Usage Information -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">What is the intended use? *</label>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                            <label class="flex items-center space-x-3">
                                <input type="radio" name="usage_type" value="home_individual" class="text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Home - Individual Use</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="radio" name="usage_type" value="home_multiple" class="text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Home - Multiple Users</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="radio" name="usage_type" value="commercial" class="text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Commercial/Healthcare Facility</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="radio" name="usage_type" value="temporary" class="text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Temporary/Recovery</span>
                            </label>
                        </div>
                    </div>

                    <!-- Weight Requirements -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-2" for="weight_requirement">Weight Capacity Needed (if known)</label>
                        <select id="weight_requirement" name="weight_requirement"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
                            <option value="">Select weight capacity</option>
                            <option value="up_to_300">Up to 300 lbs (136 kg)</option>
                            <option value="300_to_450">300-450 lbs (136-204 kg)</option>
                            <option value="450_to_600">450-600 lbs (204-272 kg)</option>
                            <option value="not_sure">Not sure</option>
                        </select>
                    </div>

                    <!-- Additional Information -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-2" for="message">Additional Information</label>
                        <textarea id="message" name="message" rows="4"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent"
                            placeholder="Please share any specific requirements, room details, or concerns..."></textarea>
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
                <h2 class="text-3xl font-bold mb-6">Ready to Enhance Safety & Independence?</h2>
                <p class="text-xl mb-8">Contact us today to explore how our ceiling lift systems can transform your care environment and provide peace of mind.</p>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="{{ route('contact') }}"
                        class="px-8 py-3 bg-white text-primary hover:bg-gray-100 rounded-lg font-medium transition duration-300">
                        Contact Us
                    </a>
                    <a href="tel:+16042591211"
                        class="px-8 py-3 bg-transparent border-2 border-white text-white hover:bg-white/10 rounded-lg font-medium transition duration-300">
                        Call 604-259-1211
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