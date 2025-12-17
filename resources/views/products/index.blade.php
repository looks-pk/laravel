@extends('layouts.app')

@section('title', 'All Products')
@section('meta_description', 'Browse our complete collection of accessibility products and services.')

@push('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <style>
        .discontinued-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 20;
            pointer-events: none;
        }
        .discontinued-overlay::before,
        .discontinued-overlay::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 150%;
            height: 8px;
            background-color: #dc2626;
        }
        .discontinued-overlay::before {
            transform: translate(-50%, -50%) rotate(45deg);
        }
        .discontinued-overlay::after {
            transform: translate(-50%, -50%) rotate(-45deg);
        }
    </style>
@endpush

@section('content')
    <!-- Page Banner -->
    <section class="relative bg-gray-800 overflow-hidden" style="min-height: 350px;">

        <!-- Banner Content -->
        <div class="container mx-auto px-4 relative z-10 flex items-center justify-center" style="min-height: 350px;">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-4">All Products</h1>
                <div class="w-24 h-1 bg-primary mx-auto"></div>
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Stair Lifts 8 -->
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl flex flex-col h-full group">
                    <!-- Product Image -->
                    <div class="overflow-hidden relative">
                        <img src="{{ asset('al-prod-page-imgs/Stair-Lifts.jpg') }}" alt="Stair Lifts"
                            class="w-full object-cover transition-transform duration-500 group-hover:scale-105"
                            style="height: 400px;">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        </div>
                    </div>

                    <!-- Product Details -->
                    <div class="p-6 flex-1 flex flex-col">
                        <a href="/products-categories/stair-lifts/"
                        >
                        <h3
                            class="text-2xl font-bold text-gray-800 mb-3 group-hover:text-primary transition-colors duration-300">
                            Stair Lifts</h3>
                        </a>
                        <p class="text-gray-600 mb-4 flex-grow">Glide effortlessly between levels with our reliable stair
                            lifts, empowering individuals with limited mobility to navigate their homes with ease.</p>
                        <p class="font-bold text-primary mb-5 flex items-center">
                            <span class="bg-primary/10 text-primary px-3 py-1 rounded-full text-sm">4 Products</span>
                        </p>
                        <a href="/products-categories/stair-lifts/"
                            class="mt-auto w-full bg-primary hover:bg-primary-dark text-white py-3 px-6 rounded-lg transition duration-300 text-center font-medium">
                            View All Products
                        </a>
                    </div>
                </div>
                <!-- Grab Bars 2 -->
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl flex flex-col h-full group">
                    <!-- Product Image -->
                    <div class="overflow-hidden relative">
                        <img src="{{ asset('al-prod-page-imgs/141-1200x800-1-1024x683-min.jpg') }}"
                            alt="Barrier-Free Bathrooms"
                            class="w-full object-cover transition-transform duration-500 group-hover:scale-105"
                            style="height: 400px;">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        </div>
                    </div>

                    <!-- Product Details -->
                    <div class="p-6 flex-1 flex flex-col">
                        <a href="/products-categories/barrier-free-bathrooms/"
                        >
                        <h3
                            class="text-2xl font-bold text-gray-800 mb-3 group-hover:text-primary transition-colors duration-300">
                            Barrier-Free Bathrooms</h3>
                        </a>
                        <p class="text-gray-600 mb-4 flex-grow">Elevate your home's accessibility with our thoughtfully
                            crafted bathrooms, designed to cater to diverse mobility needs and ensure a safe, barrier-free
                            bathing experience.</p>
                        <p class="font-bold text-primary mb-5 flex items-center">
                            <span class="bg-primary/10 text-primary px-3 py-1 rounded-full text-sm">2 Products</span>
                        </p>
                        <a href="/products-categories/barrier-free-bathrooms/"
                            class="mt-auto w-full bg-primary hover:bg-primary-dark text-white py-3 px-6 rounded-lg transition duration-300 text-center font-medium">
                            View All Products
                        </a>
                    </div>
                </div>

                <!-- Safety Poles & Handrails 6 -->
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl flex flex-col h-full group">
                    <!-- Product Image -->
                    <div class="overflow-hidden relative">
                        <img src="{{ asset('al-prod-page-imgs/Ramps.jpg') }}" alt="Ramps"
                            class="w-full object-cover transition-transform duration-500 group-hover:scale-105"
                            style="height: 400px;">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        </div>
                    </div>

                    <!-- Product Details -->
                    <div class="p-6 flex-1 flex flex-col">
                        <a href="/products-categories/ramps/"
                        >
                        <h3
                            class="text-2xl font-bold text-gray-800 mb-3 group-hover:text-primary transition-colors duration-300">
                            Ramps</h3>
                        </a>
                        <p class="text-gray-600 mb-4 flex-grow">Conquer elevation changes indoors and outdoors with our
                            versatile ramps, providing a barrier-free solution for easy transitions.</p>
                        <p class="font-bold text-primary mb-5 flex items-center">
                            <span class="bg-primary/10 text-primary px-3 py-1 rounded-full text-sm">2 Products</span>
                        </p>
                        <a href="/products-categories/ramps/"
                            class="mt-auto w-full bg-primary hover:bg-primary-dark text-white py-3 px-6 rounded-lg transition duration-300 text-center font-medium">
                            View All Products
                        </a>
                    </div>
                </div>
                
                <!-- Barrier-Free Bathrooms 1 -->
                <!-- <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl flex flex-col h-full group">
                    
                    <div class="overflow-hidden relative">
                        <img src="{{ asset('al-prod-page-imgs/Automotive.jpg') }}" alt="Automotive"
                            class="w-full object-cover transition-transform duration-500 group-hover:scale-105"
                            style="height: 400px;">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        </div>
                    </div>

                    <div class="p-6 flex-1 flex flex-col">
                        <a href="/products-categories/automotive/"
                        >
                        <h3
                            class="text-2xl font-bold text-gray-800 mb-3 group-hover:text-primary transition-colors duration-300">
                            Automotive</h3>
                        </a>
                        <p class="text-gray-600 mb-4 flex-grow">Discover top-notch automotive solutions designed for
                            seamless accessibility and ease of travel.</p>
                        <p class="font-bold text-primary mb-5 flex items-center">
                            <span class="bg-primary/10 text-primary px-3 py-1 rounded-full text-sm">3 Products</span>
                        </p>
                        <a href="/products-categories/automotive/"
                            class="mt-auto w-full bg-primary hover:bg-primary-dark text-white py-3 px-6 rounded-lg transition duration-300 text-center font-medium">
                            View All Products
                        </a>
                    </div>
                </div> -->



                

                <!-- Stairlifts 3 -->
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl flex flex-col h-full group">
                    <!-- Product Image -->
                    <div class="overflow-hidden relative">
                        <img src="{{ asset('al-prod-page-imgs/Bathroom-Safety.jpg') }}" alt="Bathroom Safety"
                            class="w-full object-cover transition-transform duration-500 group-hover:scale-105"
                            style="height: 400px;">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        </div>
                    </div>

                    <!-- Product Details -->
                    <div class="p-6 flex-1 flex flex-col">
                        <a href="/products-categories/bathroom-safety/"
                        >
                        <h3
                            class="text-2xl font-bold text-gray-800 mb-3 group-hover:text-primary transition-colors duration-300">
                            Bathroom Safety</h3>
                        </a>
                        <p class="text-gray-600 mb-4 flex-grow">Elevate your bathroom's safety with our reliable products,
                            ensuring peace of mind and independence in your daily routines.</p>
                        <p class="font-bold text-primary mb-5 flex items-center">
                            <span class="bg-primary/10 text-primary px-3 py-1 rounded-full text-sm">6 Products</span>
                        </p>
                        <a href="/products-categories/bathroom-safety/"
                            class="mt-auto w-full bg-primary hover:bg-primary-dark text-white py-3 px-6 rounded-lg transition duration-300 text-center font-medium">
                            View All Products
                        </a>
                    </div>
                </div>

                <!-- Ramps 4 -->
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl flex flex-col h-full group">
                    <!-- Product Image -->
                    <div class="overflow-hidden relative">
                        <img src="{{ asset('al-prod-page-imgs/Ceiling-Lifts.jpg') }}" alt="Ceiling Lifts"
                            class="w-full object-cover transition-transform duration-500 group-hover:scale-105"
                            style="height: 400px;">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        </div>
                    </div>

                    <!-- Product Details -->
                    <div class="p-6 flex-1 flex flex-col">
                        <a href="/products-categories/ceiling-lifts/"
                        >
                        <h3
                            class="text-2xl font-bold text-gray-800 mb-3 group-hover:text-primary transition-colors duration-300">
                            Ceiling Lifts</h3>
                        </a>
                        <p class="text-gray-600 mb-4 flex-grow">Effortlessly transfer individuals with limited mobility
                            between locations with our space-efficient and safe ceiling lifts.</p>
                        <p class="font-bold text-primary mb-5 flex items-center">
                            <span class="bg-primary/10 text-primary px-3 py-1 rounded-full text-sm">6 Products</span>
                        </p>
                        <a href="/products-categories/ceiling-lifts/"
                            class="mt-auto w-full bg-primary hover:bg-primary-dark text-white py-3 px-6 rounded-lg transition duration-300 text-center font-medium">
                            View All Products
                        </a>
                    </div>
                </div>

                <!-- Tub Cuts 5 -->
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl flex flex-col h-full group">
                    <!-- Product Image -->
                    <div class="overflow-hidden relative">
                        <img src="{{ asset('al-prod-page-imgs/Grab-Bars.jpg') }}" alt="Grab Bars"
                            class="w-full object-cover transition-transform duration-500 group-hover:scale-105"
                            style="height: 400px;">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        </div>
                    </div>

                    <!-- Product Details -->
                    <div class="p-6 flex-1 flex flex-col">
                        <a href="/products-categories/grab-bars/"
                        >
                        <h3
                            class="text-2xl font-bold text-gray-800 mb-3 group-hover:text-primary transition-colors duration-300">
                            Grab Bars</h3>
                        </a>
                        <p class="text-gray-600 mb-4 flex-grow">Elevate bathroom safety with our sturdy and stylish grab
                            bars, offering essential support for confident maneuvering.</p>
                        <p class="font-bold text-primary mb-5 flex items-center">
                            <span class="bg-primary/10 text-primary px-3 py-1 rounded-full text-sm">20 Products</span>
                        </p>
                        <a href="/products-categories/grab-bars/"
                            class="mt-auto w-full bg-primary hover:bg-primary-dark text-white py-3 px-6 rounded-lg transition duration-300 text-center font-medium">
                            View All Products
                        </a>
                    </div>
                </div>

                

                <!-- Safety Poles & Handrails 7 -->
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl flex flex-col h-full group">
                    <!-- Product Image -->
                    <div class="overflow-hidden relative">
                        <img src="{{ asset('al-prod-page-imgs/Safety-Poles-Handrails.jpg') }}"
                            alt="Safety Poles & Handrails"
                            class="w-full object-cover transition-transform duration-500 group-hover:scale-105"
                            style="height: 400px;">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        </div>
                    </div>

                    <!-- Product Details -->
                    <div class="p-6 flex-1 flex flex-col">
                        <a href="/products-categories/safety-poles-handrails/"
                        >
                            <h3
                                class="text-2xl font-bold text-gray-800 mb-3 group-hover:text-primary transition-colors duration-300">
                                Safety Poles & Handrails</h3>
                        </a>
                        <p class="text-gray-600 mb-4 flex-grow">Enhance stability and safety with our strategically
                            positioned safety poles and handrails, offering crucial support throughout your living space.
                        </p>
                        <p class="font-bold text-primary mb-5 flex items-center">
                            <span class="bg-primary/10 text-primary px-3 py-1 rounded-full text-sm">3 Products</span>
                        </p>
                        <a href="/products-categories/safety-poles-handrails/"
                            class="mt-auto w-full bg-primary hover:bg-primary-dark text-white py-3 px-6 rounded-lg transition duration-300 text-center font-medium">
                            View All Products
                        </a>
                    </div>
                </div>

                

                <!-- Tub Cuts 9 - Discontinued -->
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl flex flex-col h-full group relative">
                    <div class="discontinued-overlay"></div>
                    <!-- Product Image -->
                    <div class="overflow-hidden relative">
                        <img src="{{ asset('al-prod-page-imgs/Tub-Cuts.jpg') }}" alt="Tub Cuts"
                            class="w-full object-cover transition-transform duration-500 group-hover:scale-105"
                            style="height: 400px;">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        </div>
                    </div>

                    <!-- Product Details -->
                    <div class="p-6 flex-1 flex flex-col">
                        <a href="/products-categories/tub-cuts/"
                        >
                        <h3
                            class="text-2xl font-bold text-gray-800 mb-3 group-hover:text-primary transition-colors duration-300">
                                Tub Cuts</h3>
                        </a>
                        <p class="text-gray-600 mb-4 flex-grow">Transform your bathtub into an accessible oasis with our tub
                            cuts, providing a convenient and cost-effective alternative to traditional bathing solutions for
                            individuals with mobility challenges.</p>
                        <p class="font-bold text-primary mb-5 flex items-center">
                            <span class="bg-primary/10 text-primary px-3 py-1 rounded-full text-sm">5 Products</span>
                        </p>
                        <a href="/products-categories/tub-cuts/"
                            class="mt-auto w-full bg-primary hover:bg-primary-dark text-white py-3 px-6 rounded-lg transition duration-300 text-center font-medium">
                            View All Products
                        </a>
                    </div>
                </div>

                <!-- Vertical Platform Lifts 10 -->
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl flex flex-col h-full group">
                    <!-- Product Image -->
                    <div class="overflow-hidden relative">
                        <img src="{{ asset('al-prod-page-imgs/ElevatorPorch-Lifts.jpg') }}" alt="Vertical Platform Lifts"
                            class="w-full object-cover transition-transform duration-500 group-hover:scale-105"
                            style="height: 400px;">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        </div>
                    </div>

                    <!-- Product Details -->
                    <div class="p-6 flex-1 flex flex-col">
                        <a href="/products-categories/vertical-porch-lifts-vpl/"
                        >
                        <h3
                            class="text-2xl font-bold text-gray-800 mb-3 group-hover:text-primary transition-colors duration-300">
                                Vertical Platform Lifts</h3>
                        </a>
                        <p class="text-gray-600 mb-4 flex-grow">Improve accessibility in your home or outdoor spaces with
                            our reliable elevator/porch lifts, ensuring smooth transportation between different levels.</p>
                        <p class="font-bold text-primary mb-5 flex items-center">
                            <span class="bg-primary/10 text-primary px-3 py-1 rounded-full text-sm">2 Products</span>
                        </p>
                        <a href="/products-categories/vertical-porch-lifts-vpl/"
                            class="mt-auto w-full bg-primary hover:bg-primary-dark text-white py-3 px-6 rounded-lg transition duration-300 text-center font-medium">
                            View All Products
                        </a>
                    </div>
                </div>

                <!-- best bath -->
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl flex flex-col h-full group">
                    <!-- Product Image -->
                    <div class="overflow-hidden relative">
                        <img src="{{ asset('bsafe/p1.png') }}" alt="Vertical Platform Lifts"
                            class="w-full object-cover transition-transform duration-500 group-hover:scale-105"
                            style="height: 400px;">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        </div>
                    </div>

                    <!-- Product Details -->
                    <div class="p-6 flex-1 flex flex-col">
                        <a href="/products-categories/bathroom-safety-products/"
                        >
                        <h3
                            class="text-2xl font-bold text-gray-800 mb-3 group-hover:text-primary transition-colors duration-300">
                                Best Bath</h3>
                        </a>
                        <p class="text-gray-600 mb-4 flex-grow">A secure bathroom is important in every house. We assist the family in designing bathrooms that are safe, easy</p>
                        <p class="font-bold text-primary mb-5 flex items-center">
                            <!-- <span class="bg-primary/10 text-primary px-3 py-1 rounded-full text-sm">2 Products</span> -->
                        </p>
                        <a href="/products-categories/bathroom-safety-products/"
                            class="mt-auto w-full bg-primary hover:bg-primary-dark text-white py-3 px-6 rounded-lg transition duration-300 text-center font-medium">
                            View All Products
                        </a>
                    </div>
                </div>

                <!-- sentrel -->
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl flex flex-col h-full group">
                    <!-- Product Image -->
                    <div class="overflow-hidden relative">
                        <img src="{{ asset('sent/p1.png') }}" alt="Vertical Platform Lifts"
                            class="w-full object-cover transition-transform duration-500 group-hover:scale-105"
                            style="height: 400px;">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        </div>
                    </div>

                    <!-- Product Details -->
                    <div class="p-6 flex-1 flex flex-col">
                        <a href="/products-categories/sentrel"
                        >
                        <h3
                            class="text-2xl font-bold text-gray-800 mb-3 group-hover:text-primary transition-colors duration-300">
                            Sentrel Bathroom Remodeling Vancouver</h3>
                        </a>
                        <p class="text-gray-600 mb-4 flex-grow">A secure bathroom is important in every house. Westressful to do bathroom remodelling, particularly when you wish to have a new appearance without protracted building construction</p>
                        <p class="font-bold text-primary mb-5 flex items-center">
                            <!-- <span class="bg-primary/10 text-primary px-3 py-1 rounded-full text-sm">2 Products</span> -->
                        </p>
                        <a href="/products-categories/sentrel/"
                            class="mt-auto w-full bg-primary hover:bg-primary-dark text-white py-3 px-6 rounded-lg transition duration-300 text-center font-medium">
                            View All Products
                        </a>
                    </div>
                </div>

                


                <!-- promenaid handrails -->
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl flex flex-col h-full group">
                    <!-- Product Image -->
                    <div class="overflow-hidden relative">
                        <img src="{{ asset('prom/p1.png') }}" alt="Vertical Platform Lifts"
                            class="w-full object-cover transition-transform duration-500 group-hover:scale-105"
                            style="height: 400px;">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        </div>
                    </div>

                    <!-- Product Details -->
                    <div class="p-6 flex-1 flex flex-col">
                        <a href="/products-categories/promenaid-handrail/"
                        >
                        <h3
                            class="text-2xl font-bold text-gray-800 mb-3 group-hover:text-primary transition-colors duration-300">
                            Promenaid Handrails</h3>
                        </a>
                        <p class="text-gray-600 mb-4 flex-grow">Promenaid handrails are a cost-effective and easy-to-install solution for improving accessibility in your home or business.</p>
                        <p class="font-bold text-primary mb-5 flex items-center">
                            <!-- <span class="bg-primary/10 text-primary px-3 py-1 rounded-full text-sm">2 Products</span> -->
                        </p>
                        <a href="/products-categories/promenaid-handrail/"
                            class="mt-auto w-full bg-primary hover:bg-primary-dark text-white py-3 px-6 rounded-lg transition duration-300 text-center font-medium">
                            View All Products
                        </a>
                    </div>
                </div>

                <!-- Walk-In Tub 11 -->
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl flex flex-col h-full group">
                    <!-- Product Image -->
                    <div class="overflow-hidden relative">
                        <img src="{{ asset('al-prod-page-imgs/Model-3052.jpg') }}" alt="Walk-In Tub"
                            class="w-full object-cover transition-transform duration-500 group-hover:scale-105"
                            style="height: 400px;">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        </div>
                    </div>

                    <!-- Product Details -->
                    <div class="p-6 flex-1 flex flex-col">
                        <a href="/products-categories/walk-in-tubs/"
                        >
                        <h3
                            class="text-2xl font-bold text-gray-800 mb-3 group-hover:text-primary transition-colors duration-300">
                                Walk-In Tub</h3>
                        </a>
                        <p class="text-gray-600 mb-4 flex-grow">Experience the comfort and safety of our walk-in tubs,
                            designed for easy entry and exit, promoting relaxation and peace of mind during bathing.</p>
                        <p class="font-bold text-primary mb-5 flex items-center">
                            <span class="bg-primary/10 text-primary px-3 py-1 rounded-full text-sm">1 Products</span>
                        </p>
                        <a href="/products-categories/walk-in-tubs/"
                            class="mt-auto w-full bg-primary hover:bg-primary-dark text-white py-3 px-6 rounded-lg transition duration-300 text-center font-medium">
                            View All Products
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Commitment Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="bg-primary rounded-xl overflow-hidden shadow-xl">
                <div class="flex flex-col lg:flex-row">
                    <!-- Text Content -->
                    <div class="w-full lg:w-1/2 p-8 md:p-12 text-white" style="margin: auto;">
                        <h2 class="text-3xl md:text-4xl font-bold mb-6">Enhancing Accessibility: Our Commitment to Inclusive
                            Living Solutions</h2>
                        <div class="w-20 h-1 bg-white mb-6 rounded"></div>
                        <p class="text-lg leading-relaxed mb-8">
                            Home2stay is dedicated to providing accessibility solutions to help you maintain a safe and
                            dignified lifestyle in the comfort of your own space, regardless of your age or abilities. We
                            also help business owners create safer and more inclusive commercial spaces in our British
                            Columbia community.
                        </p>
                        <a href="/about"
                            class="inline-flex items-center px-6 py-3 bg-white text-primary hover:bg-gray-100 rounded-lg font-medium transition duration-300">
                            Learn More About Our Mission
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>

                    <!-- Image -->
                    <div class="w-full lg:w-1/2 bg-primary-dark">
                        <img src="{{ asset('al-prod-page-imgs/Rectangle 320-min.png') }}" alt="Accessibility Solutions"
                            class="w-full h-full object-cover" style="min-height: 400px;">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Commitment Section 2-->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="rounded-xl overflow-hidden shadow-xl">
                <div class="flex flex-col lg:flex-row">
                    <!-- Image -->
                    <div class="w-full lg:w-1/2 bg-primary-dark">
                        <img src="{{ asset('al-prod-page-imgs/Rectangle-324-min.png') }}" alt="Accessibility Solutions"
                            class="w-full h-full object-cover" style="min-height: 400px;">
                    </div>

                    <!-- Text Content -->
                    <div class="w-full lg:w-1/2 p-8 md:p-12" style="margin: auto;">
                        <h2 class="text-3xl md:text-4xl font-bold mb-6">Leading Brands, Lasting Impact: Our Certified
                            Accessibility Solutions</h2>
                        <div class="w-20 h-1 bg-white mb-6 rounded"></div>
                        <p class="text-lg leading-relaxed mb-8">
                            We are a certified distributor and installer of the following brands: Bruno, Guldmann, Handicare
                            / Prism, Arjo, BraunAbility, Best Bath Systems, Roll-A-Ramp, Grabcessories, Clean Cut Tub Cuts,
                            etc.

                            Our range of accessibility and mobility solutions have helped countless people age-in-place in
                            the home that they love, and have allowed individuals with disabilities and mobility challenges
                            to perform everyday tasks more easily and comfortably.

                            Home2stay serves the following areas*: Vancouver, Surrey, Abbotsford, Richmond, Coquitlam,
                            Tricities, Mission, Delta, Pitt Meadows, Burnaby, Port Moody, Maple Ridge, Langley, Chilli Wack,
                            White Rock, Aldergrove and other nearby areas.

                            Is your area not listed? Give us a call at (604) 259-1211 or submit a FREE ASSESSMENT FORM to
                            check.
                        </p>
                    </div>


                </div>
            </div>
        </div>
    </section>

    <!-- Steps Section -->
    <section class="py-16 bg-secondary">
        <div class="container mx-auto px-4">
            <!-- Section Header -->
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">Accessible Living Solutions: Our Range of Premium
                    Products</h2>
                <p class="text-xl text-white/90 max-w-3xl mx-auto">We are here to serve you before, during and after your
                    purchase:</p>
            </div>

            <!-- Steps Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 lg:flex lg:flex-nowrap gap-6 pb-4 px-4 -mx-4">
                <!-- Step 1 -->
                <div
                    class="bg-primary rounded-lg text-center transform hover:scale-105 transition-transform duration-300 lg:flex-none lg:w-64 w-full">
                    <h3 class="text-lg font-bold bg-white mb-6">Step 1</h3>
                    <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                        </svg>
                    </div>

                    <p class="text-white font-medium">Free Assessment</p>
                </div>

                <!-- Step 2 -->
                <div
                    class="bg-primary rounded-lg text-center transform hover:scale-105 transition-transform duration-300 lg:flex-none lg:w-64 w-full">
                    <h3 class="text-lg font-bold bg-white mb-6">Step 2</h3>
                    <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                        </svg>
                    </div>

                    <p class="text-white font-medium mb-6 p-2">Customized Quote from Home2stay</p>
                </div>

                <!-- Step 3 -->
                <div
                    class="bg-primary rounded-lg text-center transform hover:scale-105 transition-transform duration-300 lg:flex-none lg:w-64 w-full">
                    <h3 class="text-lg font-bold bg-white mb-6">Step 3</h3>
                    <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>

                    <p class="text-white font-medium mb-6 p-2">Installation</p>
                </div>

                <!-- Step 4 -->
                <div
                    class="bg-primary rounded-lg text-center transform hover:scale-105 transition-transform duration-300 lg:flex-none lg:w-64 w-full">
                    <h3 class="text-lg font-bold bg-white mb-6">Step 4</h3>
                    <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                    </div>

                    <p class="text-white font-medium mb-6 p-2">After Sales Service</p>
                </div>

                <!-- Step 5 -->
                <div
                    class="bg-primary rounded-lg text-center transform hover:scale-105 transition-transform duration-300 lg:flex-none lg:w-64 w-full">
                    <h3 class="text-lg font-bold bg-white mb-6">Step 5</h3>
                    <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>

                    <p class="text-white font-medium mb-6 p-2">Annual Preventive Maintenance</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Assessment Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="bg-white rounded-xl shadow-lg p-8 md:p-12">
                <!-- Section Header -->
                <div class="text-center max-w-4xl mx-auto mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-6">Book Your Free Assessment with Home2stay!
                    </h2>
                    <p class="text-lg text-gray-600 leading-relaxed">
                        The assessment is usually done in your place, but for your convenience, we can also do it via a
                        video call.
                        Please check the video call option on the FREE ASSESSMENT FORM, should you prefer to have it via
                        video call.
                        To access the FREE ASSESSMENT FORM, please click the FREE ASSESSMENT button on the upper right
                        corner of every page,
                        or go to our Contact Us Page.
                    </p>
                </div>

                <!-- Image Slider -->
                <div class="mb-12 relative">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <!-- Slide 1 -->
                            <div class="swiper-slide">
                                <div class="rounded-lg overflow-hidden shadow-lg">
                                    <img src="{{ asset('al-prod-page-imgs/1-3-1-min.png') }}" alt="Assessment Process"
                                        class="w-full h-64 object-cover">
                                </div>
                            </div>
                            <!-- Slide 2 -->
                            <div class="swiper-slide">
                                <div class="rounded-lg overflow-hidden shadow-lg">
                                    <img src="{{ asset('al-prod-page-imgs/2-3-1-min.png') }}" alt="Installation Process"
                                        class="w-full h-64 object-cover">
                                </div>
                            </div>
                            <!-- Slide 3 -->
                            <div class="swiper-slide">
                                <div class="rounded-lg overflow-hidden shadow-lg">
                                    <img src="{{ asset('al-prod-page-imgs/3-2-2-min.png') }}" alt="After Service"
                                        class="w-full h-64 object-cover">
                                </div>
                            </div>
                            <!-- Slide 4 -->
                            <div class="swiper-slide">
                                <div class="rounded-lg overflow-hidden shadow-lg">
                                    <img src="{{ asset('al-prod-page-imgs/1-3-1-min.png') }}" alt="Assessment Process"
                                        class="w-full h-64 object-cover">
                                </div>
                            </div>
                            <!-- Slide 5 -->
                            <div class="swiper-slide">
                                <div class="rounded-lg overflow-hidden shadow-lg">
                                    <img src="{{ asset('al-prod-page-imgs/2-3-1-min.png') }}" alt="Installation Process"
                                        class="w-full h-64 object-cover">
                                </div>
                            </div>
                            <!-- Slide 6 -->
                            <div class="swiper-slide">
                                <div class="rounded-lg overflow-hidden shadow-lg">
                                    <img src="{{ asset('al-prod-page-imgs/3-2-2-min.png') }}" alt="After Service"
                                        class="w-full h-64 object-cover">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>

                <!-- Content Steps -->
                <div class="max-w-4xl mx-auto">
                    <div class="space-y-8">
                        <!-- Step 1 -->
                        <div
                            class="flex items-start space-x-4 p-6 bg-gray-50 rounded-lg hover:bg-gray-100 transition duration-300">
                            <span
                                class="flex-shrink-0 w-8 h-8 bg-primary text-white rounded-full flex items-center justify-center font-bold">1</span>
                            <div>
                                <p class="text-gray-700 leading-relaxed">
                                    To ensure that you have all the information you need to make the right decision,
                                    Home2stay offers <span class="font-bold text-primary">FREE ASSESSMENT**</span> (worth
                                    $150).
                                </p>
                            </div>
                        </div>

                        <!-- Step 2 -->
                        <div
                            class="flex items-start space-x-4 p-6 bg-gray-50 rounded-lg hover:bg-gray-100 transition duration-300">
                            <span
                                class="flex-shrink-0 w-8 h-8 bg-primary text-white rounded-full flex items-center justify-center font-bold">2</span>
                            <div>
                                <p class="text-gray-700 leading-relaxed">
                                    We will send you a quote with our customized recommendations for you within 2 business
                                    days
                                    (in most cases). Rest assured, we respect your decision and there is no obligation from
                                    you
                                    to purchase from us after the FREE ASSESSMENT or customized quotation.
                                </p>
                            </div>
                        </div>

                        <!-- Step 3 -->
                        <div
                            class="flex items-start space-x-4 p-6 bg-gray-50 rounded-lg hover:bg-gray-100 transition duration-300">
                            <span
                                class="flex-shrink-0 w-8 h-8 bg-primary text-white rounded-full flex items-center justify-center font-bold">3</span>
                            <div>
                                <p class="text-gray-700 leading-relaxed">
                                    Installation on our agreed schedule.
                                </p>
                            </div>
                        </div>

                        <!-- Step 4 -->
                        <div
                            class="flex items-start space-x-4 p-6 bg-gray-50 rounded-lg hover:bg-gray-100 transition duration-300">
                            <span
                                class="flex-shrink-0 w-8 h-8 bg-primary text-white rounded-full flex items-center justify-center font-bold">4</span>
                            <div>
                                <p class="text-gray-700 leading-relaxed">
                                    After installation, our technician will train you, your caregiver or the user/s on how
                                    to
                                    operate and maintain your product properly. Additional training can be requested if the
                                    main
                                    user or caregiver is not on site after the installation is completed. This can also be
                                    done
                                    via video call, for your convenience.
                                </p>
                            </div>
                        </div>

                        <!-- Step 5 -->
                        <div
                            class="flex items-start space-x-4 p-6 bg-gray-50 rounded-lg hover:bg-gray-100 transition duration-300">
                            <span
                                class="flex-shrink-0 w-8 h-8 bg-primary text-white rounded-full flex items-center justify-center font-bold">5</span>
                            <div>
                                <p class="text-gray-700 leading-relaxed">
                                    Reach out to us any time after your installation, whenever you have concerns or
                                    questions.
                                </p>
                            </div>
                        </div>

                        <!-- Step 6 -->
                        <div
                            class="flex items-start space-x-4 p-6 bg-gray-50 rounded-lg hover:bg-gray-100 transition duration-300">
                            <span
                                class="flex-shrink-0 w-8 h-8 bg-primary text-white rounded-full flex items-center justify-center font-bold">6</span>
                            <div>
                                <p class="text-gray-700 leading-relaxed">
                                    Schedule an annual preventive check with us for the proper maintenance of your motorized
                                    equipment such as stair lifts, vertical porch lifts, elevators, ceiling track lifts,
                                    etc.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Info Section -->
    <section class="mb-16">
        <div class="container mx-auto px-4 bg-primary rounded-lg">
            <div class="min-h-[200px] flex items-center justify-center">
                <h4 class="text-xl md:text-2xl text-white text-center font-medium max-w-4xl mx-auto px-4">
                    Call us anytime at <a href="tel:(604) 259-1211" class="hover:underline">(604) 259-1211</a> or send us an
                    email at <a href="mailto:info@home2stay.com" class="hover:underline">info@home2stay.com</a>, and we will
                    assist you with whatever you need!
                </h4>
            </div>
        </div>
    </section>


    <!-- ready to book Section -->
    <section class="py-16 bg-secondary">
        <div class="container mx-auto px-4">
            <div class="rounded-xl overflow-hidden">
                <div class="flex flex-col lg:flex-row">
                    <!-- Text Content -->
                    <div class="w-full lg:w-1/2 p-8 md:p-12 text-white" style="margin: auto;">
                        <h2 class="text-3xl md:text-4xl font-bold mb-6">Ready to book a schedule?</h2>
                        <div class="w-20 h-1 bg-white mb-6 rounded"></div>
                        <p class="text-lg leading-relaxed mb-8">
                            We look forward to helping you create your safe and accessible space
                        </p>
                        <a href="/contact"
                            class="inline-flex items-center px-6 py-3 bg-white text-primary hover:bg-gray-100 rounded-lg font-medium transition duration-300">
                            Book Online
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>

                    <!-- Image -->
                    <div class="w-full lg:w-1/2 bg-primary-dark">
                        <img src="{{ asset('al-prod-page-imgs/Ready-to-book-aschedule-min.png') }}"
                            alt="Accessibility Solutions" class="w-full h-full object-cover" style="min-height: 250px;">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Contact Form Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto bg-white rounded-xl shadow-lg p-8">
                <div class="text-center mb-10">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">We are Here For You</h2>
                    <p class="text-gray-600">We're here to listen, help and provide insights.

                        Tell us what you need – We would love to hear from you!</p>
                </div>

                <form action="/submit-assessment" method="POST" class="space-y-6">
                    @csrf
                    <input type="hidden" name="form_type" value="assessment">
                    <input type="hidden" name="form_source" value="products_page_assessment_form">
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
                            <label class="block text-gray-700 font-medium mb-2" for="city">City/Municipality *</label>
                            <input type="text" id="city" name="city" required
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
                        </div>
                    </div>

                    <!-- Service Selection -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-2" for="service">What service are you interested
                            in? *</label>
                        <select id="service" name="service" required
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
                            <option value="">Select a service</option>
                            <option value="barrier_free_bathrooms">Barrier-Free Bathrooms</option>
                            <option value="grab_bars">Grab Bars</option>
                            <option value="stairlifts">Stairlifts</option>
                            <option value="ramps">Ramps</option>
                            <option value="tub_cuts">Tub Cuts</option>
                            <option value="safety_poles">Safety Poles & Handrails</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <!-- Assessment Type -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Preferred Assessment Type *</label>
                        <div class="space-y-2">
                            <label class="flex items-center space-x-3">
                                <input type="radio" name="assessment_type" value="in_person"
                                    class="form-radio text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">In-Person Assessment</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="radio" name="assessment_type" value="video_call"
                                    class="form-radio text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Video Call Assessment</span>
                            </label>
                        </div>
                    </div>

                    <!-- Additional Information -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Additional Information</label>
                        <div class="space-y-2">
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="funding_assistance" class="form-checkbox text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">I need information about funding
                                    assistance</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="urgent_request" class="form-checkbox text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">This is an urgent request</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="insurance_claim" class="form-checkbox text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">This is an insurance claim</span>
                            </label>
                        </div>
                    </div>

                    <!-- Preferred Contact Time -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-2" for="contact_time">Best Time to Contact
                            You</label>
                        <select id="contact_time" name="contact_time"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
                            <option value="morning">Morning (9AM - 12PM)</option>
                            <option value="afternoon">Afternoon (12PM - 5PM)</option>
                            <option value="evening">Evening (5PM - 8PM)</option>
                        </select>
                    </div>

                    <!-- Message -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-2" for="message">Additional Notes or
                            Requirements</label>
                        <textarea id="message" name="message" rows="4"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent"
                            placeholder="Please share any specific requirements or concerns..."></textarea>
                    </div>

                    <!-- Terms -->
                    <div class="space-y-4">
                        <label class="flex items-start space-x-3">
                            <input type="checkbox" required name="terms" class="form-checkbox text-primary mt-1">
                            <span class="text-gray-700 text-sm" style="margin-left: 5px;">I agree to receive communications
                                from Home2stay regarding
                                my assessment request. I understand that my information will be handled according to
                                Home2stay's privacy policy.</span>
                        </label>
                    </div>

                    <!-- Submit Button -->
                    <div class="text-center">
                        <button type="submit"
                            class="inline-flex items-center px-6 py-3 bg-primary text-white rounded-lg hover:bg-primary-dark transition duration-300">
                            Submit
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

@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            breakpoints: {
                640: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                },
            },
        });
    </script>
@endpush