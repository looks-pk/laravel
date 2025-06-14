@extends('layouts.app')

@section('title', 'Equipment Rentals - Home2stay')
@section('meta_description', 'Browse our collection of mobility and accessibility equipment available for rent for your home, including bathroom safety products, mobility aids, and more.')

@push('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <style>
        /* CSS Variables for consistency */
        :root {
            --primary: #0078bf;
            --primary-dark: #005f96;
            --secondary: #f8b301;
            --secondary-dark: #d99a00;
            --accent: #d40000;
            --accent-dark: #aa0000;
            --text-dark: #2d3748;
            --text-light: #718096;
            --bg-light: #f7fafc;
            --transition: all 0.3s ease;
        }

        /* Enhanced Product Cards */
        .product-card {
            background: white;
            border-radius: 1rem;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            transition: var(--transition);
            height: 100%;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            border: 1px solid rgba(0, 120, 191, 0.1);
        }

        .product-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.15), 0 10px 10px -5px rgba(0, 0, 0, 0.1);
            border-color: var(--primary);
        }

        .product-card .card-img {
            height: 280px;
            overflow: hidden;
            position: relative;
        }

        .product-card .card-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--transition);
        }

        .product-card:hover .card-img img {
            transform: scale(1.05);
        }

        .product-card .card-body {
            padding: 2rem;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }

        .product-card h3 {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            color: var(--text-dark);
            line-height: 1.3;
        }

        .product-card p {
            color: var(--text-dark);
            margin-bottom: 1.5rem;
            flex-grow: 1;
            line-height: 1.6;
        }

        .product-card .product-count {
            background: linear-gradient(45deg, var(--primary), var(--primary-dark));
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 2rem;
            font-size: 0.875rem;
            font-weight: 600;
            display: inline-block;
            margin-bottom: 1.5rem;
        }

        .product-card .btn-primary {
            background: linear-gradient(45deg, var(--primary), var(--primary-dark));
            color: white;
            padding: 0.875rem 1.5rem;
            border-radius: 0.5rem;
            font-weight: 600;
            text-align: center;
            transition: var(--transition);
            border: none;
            cursor: pointer;
            text-decoration: none;
            display: block;
        }

        .product-card .btn-primary:hover {
            background: linear-gradient(45deg, var(--primary-dark), var(--primary));
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 120, 191, 0.3);
        }

        /* Enhanced Steps Section */
        .steps-section {
            background: linear-gradient(135deg, var(--secondary) 0%, var(--secondary-dark) 100%);
            position: relative;
            overflow: hidden;
        }

        .steps-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><circle cx="20" cy="20" r="2" fill="rgba(255,255,255,0.1)"/><circle cx="80" cy="80" r="2" fill="rgba(255,255,255,0.1)"/><circle cx="40" cy="60" r="1.5" fill="rgba(255,255,255,0.1)"/><circle cx="70" cy="30" r="1.5" fill="rgba(255,255,255,0.1)"/></svg>') repeat;
            opacity: 0.3;
        }

        .steps-section .container {
            position: relative;
            z-index: 2;
        }

        .steps-section h2 {
            color: white !important;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .steps-section p {
            color: rgba(255, 255, 255, 0.9) !important;
        }

        .step-card {
            background: white;
            border-radius: 1rem;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: var(--transition);
            height: 100%;
        }

        .step-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }

        .step-header {
            background: linear-gradient(45deg, var(--primary), var(--primary-dark));
            color: white;
            padding: 1.5rem;
            text-align: center;
            position: relative;
        }

        .step-header::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 0;
            height: 0;
            border-left: 10px solid transparent;
            border-right: 10px solid transparent;
            border-top: 10px solid var(--primary-dark);
        }

        .step-content {
            padding: 2rem;
            text-align: center;
        }

        .step-icon {
            width: 4rem;
            height: 4rem;
            background: linear-gradient(45deg, var(--primary), var(--primary-dark));
            border-radius: 50%;
            margin: 0 auto 1.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 8px 16px rgba(0, 120, 191, 0.3);
            position: relative;
        }

        .step-icon::before {
            content: '';
            position: absolute;
            inset: -2px;
            background: linear-gradient(45deg, var(--primary), var(--primary-dark));
            border-radius: 50%;
            z-index: -1;
            opacity: 0.3;
            animation: pulse 2s infinite;
        }

        .step-icon svg {
            width: 2rem;
            height: 2rem;
            color: white;
            filter: drop-shadow(0 2px 4px rgba(0, 0, 0, 0.1));
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
                opacity: 0.3;
            }
            50% {
                transform: scale(1.1);
                opacity: 0.1;
            }
            100% {
                transform: scale(1);
                opacity: 0.3;
            }
        }

        .step-content p {
            color: #000000 !important;
            line-height: 1.6;
        }

        /* Enhanced Contact Form */
        .contact-form-section {
            background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
        }

        .contact-form-container {
            background: white;
            border-radius: 1rem;
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
            border-top: 4px solid var(--primary);
        }

        .form-input {
            border: 2px solid #e2e8f0;
            border-radius: 0.5rem;
            padding: 0.75rem 1rem;
            transition: var(--transition);
            font-size: 1rem;
        }

        .form-input:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(0, 120, 191, 0.1);
            outline: none;
        }

        .form-label {
            font-weight: 600;
            color: var(--text-dark);
            margin-bottom: 0.5rem;
            display: block;
        }

        .submit-btn {
            background: linear-gradient(45deg, var(--primary), var(--primary-dark));
            color: white;
            padding: 0.875rem 2rem;
            border-radius: 0.5rem;
            font-weight: 600;
            border: none;
            cursor: pointer;
            transition: var(--transition);
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }

        .submit-btn:hover {
            background: linear-gradient(45deg, var(--primary-dark), var(--primary));
            transform: translateY(-2px);
            box-shadow: 0 8px 16px rgba(0, 120, 191, 0.3);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .product-card .card-img {
                height: 240px;
            }
            
            .product-card .card-body {
                padding: 1.5rem;
            }
            
            .step-content {
                padding: 1.5rem;
            }
            
            .step-icon {
                width: 3rem;
                height: 3rem;
            }
            
            .step-icon svg {
                width: 1.5rem;
                height: 1.5rem;
            }
        }
    </style>
@endpush

@section('content')
    <!-- Page Banner -->
    <section class="relative bg-gray-800 overflow-hidden" style="min-height: 350px;">


        <!-- Banner Content -->
        <div class="container mx-auto px-4 relative z-10 flex items-center justify-center" style="min-height: 350px;">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-4">Rentals</h1>
                <div class="w-24 h-1 bg-primary mx-auto"></div>
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Bath Lifter -->
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl flex flex-col h-full group">
                    <!-- Product Image -->
                    <div class="overflow-hidden relative">
                        <img src="{{ asset('rentals-main/Home2stay-Bath-Lifter-rentals-category-min.jpg') }}" alt="Bath Lifter"
                            class="w-full object-cover transition-transform duration-500 group-hover:scale-105"
                            style="height: 400px;">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        </div>
                    </div>

                    <!-- Product Details -->
                    <div class="p-6 flex-1 flex flex-col">
                        <h3
                            class="text-2xl font-bold text-gray-800 mb-3 group-hover:text-primary transition-colors duration-300">
                            Bath Lifter</h3>
                        <p class="text-gray-600 mb-4 flex-grow">Enhance your bathing experience with our bath lifter, designed to provide comfortable and safe access to your tub.</p>
                        <p class="font-bold text-primary mb-5 flex items-center">
                            <span class="bg-primary/10 text-primary px-3 py-1 rounded-full text-sm">1 Products</span>
                        </p>
                        <a href="#"
                            class="mt-auto w-full bg-primary hover:bg-primary-dark text-white py-3 px-6 rounded-lg transition duration-300 text-center font-medium">
                            View All Products
                        </a>
                    </div>
                </div>

                <!-- Home2stay Ceiling Track Lifts Motor -->
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl flex flex-col h-full group">
                    <!-- Product Image -->
                    <div class="overflow-hidden relative">
                        <img src="{{ asset('rentals-main/Home2stay-Ceiling-Track-Lifts-Motor-remtals-category-min.jpg') }}"
                            alt="Barrier-Free Bathrooms"
                            class="w-full object-cover transition-transform duration-500 group-hover:scale-105"
                            style="height: 400px;">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        </div>
                    </div>

                    <!-- Product Details -->
                    <div class="p-6 flex-1 flex flex-col">
                        <h3
                            class="text-2xl font-bold text-gray-800 mb-3 group-hover:text-primary transition-colors duration-300">
                            Home2stay Ceiling Track Lifts Motor</h3>
                        <p class="text-gray-600 mb-4 flex-grow">Experience seamless and efficient transfers with our advanced Ceiling Track Lifts Motor, ensuring smooth mobility and comfort.</p>
                        <p class="font-bold text-primary mb-5 flex items-center">
                            <span class="bg-primary/10 text-primary px-3 py-1 rounded-full text-sm">6 Products</span>
                        </p>
                        <a href="#"
                            class="mt-auto w-full bg-primary hover:bg-primary-dark text-white py-3 px-6 rounded-lg transition duration-300 text-center font-medium">
                            View All Products
                        </a>
                    </div>
                </div>

                <!-- Home2Stay Folding Ramp -->
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl flex flex-col h-full group">
                    <!-- Product Image -->
                    <div class="overflow-hidden relative">
                        <img src="{{ asset('rentals-main/Home2Stay-Folding-Ramp-rentals-category-min.jpg') }}" alt="Bathroom Safety"
                            class="w-full object-cover transition-transform duration-500 group-hover:scale-105"
                            style="height: 400px;">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        </div>
                    </div>

                    <!-- Product Details -->
                    <div class="p-6 flex-1 flex flex-col">
                        <h3
                            class="text-2xl font-bold text-gray-800 mb-3 group-hover:text-primary transition-colors duration-300">
                            Home2Stay Folding Ramp</h3>
                        <p class="text-gray-600 mb-4 flex-grow">Effortlessly facilitate wheelchair access in and out of your vehicle with our Folding Ramp, designed for seamless mobility and convenience.</p>
                        <p class="font-bold text-primary mb-5 flex items-center">
                            <span class="bg-primary/10 text-primary px-3 py-1 rounded-full text-sm">1 Products</span>
                        </p>
                        <a href="#"
                            class="mt-auto w-full bg-primary hover:bg-primary-dark text-white py-3 px-6 rounded-lg transition duration-300 text-center font-medium">
                            View All Products
                        </a>
                    </div>
                </div>

                <!-- Home2stay Modular Ramps -->
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl flex flex-col h-full group">
                    <!-- Product Image -->
                    <div class="overflow-hidden relative">
                        <img src="{{ asset('rentals-main/Home2stay-Modular-Ramps-rentals-category-min.jpg') }}" alt="Ceiling Lifts"
                            class="w-full object-cover transition-transform duration-500 group-hover:scale-105"
                            style="height: 400px;">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        </div>
                    </div>

                    <!-- Product Details -->
                    <div class="p-6 flex-1 flex flex-col">
                        <h3
                            class="text-2xl font-bold text-gray-800 mb-3 group-hover:text-primary transition-colors duration-300">
                            Home2stay Modular Ramps</h3>
                        <p class="text-gray-600 mb-4 flex-grow">Create a smooth and accessible pathway for wheelchairs with our Modular Ramps, offering customizable solutions to overcome elevation changes with ease.</p>
                        <p class="font-bold text-primary mb-5 flex items-center">
                            <span class="bg-primary/10 text-primary px-3 py-1 rounded-full text-sm">2 Products</span>
                        </p>
                        <a href="#"
                            class="mt-auto w-full bg-primary hover:bg-primary-dark text-white py-3 px-6 rounded-lg transition duration-300 text-center font-medium">
                            View All Products
                        </a>
                    </div>
                </div>

                <!-- Home2stay Portable Shower Unit -->
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl flex flex-col h-full group">
                    <!-- Product Image -->
                    <div class="overflow-hidden relative">
                        <img src="{{ asset('rentals-main/Home2stay-Portable-Shower-Unit-remtals-category-min.jpg') }}" alt="Grab Bars"
                            class="w-full object-cover transition-transform duration-500 group-hover:scale-105"
                            style="height: 400px;">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        </div>
                    </div>

                    <!-- Product Details -->
                    <div class="p-6 flex-1 flex flex-col">
                        <h3
                            class="text-2xl font-bold text-gray-800 mb-3 group-hover:text-primary transition-colors duration-300">
                            Home2stay Portable Shower Unit</h3>
                        <p class="text-gray-600 mb-4 flex-grow">Experience the convenience of bathing wherever you need with our Portable Shower Unit, designed for flexibility and accessibility.</p>
                        <p class="font-bold text-primary mb-5 flex items-center">
                            <span class="bg-primary/10 text-primary px-3 py-1 rounded-full text-sm">1 Products</span>
                        </p>
                        <a href="#"
                            class="mt-auto w-full bg-primary hover:bg-primary-dark text-white py-3 px-6 rounded-lg transition duration-300 text-center font-medium">
                            View All Products
                        </a>
                    </div>
                </div>

                <!-- Home2Stay Straight Indoor Stair Lift -->
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl flex flex-col h-full group">
                    <!-- Product Image -->
                    <div class="overflow-hidden relative">
                        <img src="{{ asset('rentals-main/Home2Stay-Straight-Indoor-Stair-Lift-rentals-category-min.jpg') }}" alt="Ramps"
                            class="w-full object-cover transition-transform duration-500 group-hover:scale-105"
                            style="height: 400px;">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        </div>
                    </div>

                    <!-- Product Details -->
                    <div class="p-6 flex-1 flex flex-col">
                        <h3
                            class="text-2xl font-bold text-gray-800 mb-3 group-hover:text-primary transition-colors duration-300">
                            Home2Stay Straight Indoor Stair Lift</h3>
                        <p class="text-gray-600 mb-4 flex-grow">Effortlessly move between levels in your home with our Straight Indoor Stair Lift, providing a secure and comfortable solution for individuals with mobility challenges.</p>
                        <p class="font-bold text-primary mb-5 flex items-center">
                            <span class="bg-primary/10 text-primary px-3 py-1 rounded-full text-sm">0 Products</span>
                        </p>
                        <a href="#"
                            class="mt-auto w-full bg-primary hover:bg-primary-dark text-white py-3 px-6 rounded-lg transition duration-300 text-center font-medium">
                            View All Products
                        </a>
                    </div>
                </div>

                <!-- Home2stay Threshold Ramp -->
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl flex flex-col h-full group">
                    <!-- Product Image -->
                    <div class="overflow-hidden relative">
                        <img src="{{ asset('rentals-main/Home2stay-Threshold-Ramp-rentals-category-min.jpg') }}"
                            alt="Safety Poles & Handrails"
                            class="w-full object-cover transition-transform duration-500 group-hover:scale-105"
                            style="height: 400px;">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        </div>
                    </div>

                    <!-- Product Details -->
                    <div class="p-6 flex-1 flex flex-col">
                        <h3
                            class="text-2xl font-bold text-gray-800 mb-3 group-hover:text-primary transition-colors duration-300">
                            Home2stay Threshold Ramp</h3>
                        <p class="text-gray-600 mb-4 flex-grow">Easily navigate doorways and uneven surfaces with our Threshold Ramp, designed to provide a smooth and safe transition for wheelchairs and mobility aids.
                        </p>
                        <p class="font-bold text-primary mb-5 flex items-center">
                            <span class="bg-primary/10 text-primary px-3 py-1 rounded-full text-sm">3 Products</span>
                        </p>
                        <a href="#"
                            class="mt-auto w-full bg-primary hover:bg-primary-dark text-white py-3 px-6 rounded-lg transition duration-300 text-center font-medium">
                            View All Products
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    @include('rentals.rates-section')

    <!-- How Rentals Work Section -->
    <section class="py-16 steps-section">
        <div class="container mx-auto px-4">
            <div class="text-center max-w-3xl mx-auto mb-12">
                <h2 class="text-3xl md:text-4xl font-bold mb-6">How Home2stay's Rentals Work</h2>
                <p class="text-lg">Our simple rental process makes it easy to get the accessibility equipment you need.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Step 1 -->
                <div class="step-card">
                    <div class="step-header">
                        <h3 class="text-xl font-bold">Step 1</h3>
                    </div>
                    <div class="step-content">
                        <div class="step-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </div>
                        <p>Browse through our list of items available for rental. You can take note of which accessibility solutions cater best to your needs. You can also list down any questions you have for us as well.</p>
                    </div>
                </div>
                
                <!-- Step 2 -->
                <div class="step-card">
                    <div class="step-header">
                        <h3 class="text-xl font-bold">Step 2</h3>
                    </div>
                    <div class="step-content">
                        <div class="step-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                        </div>
                        <p>Call Home2stay at 604.259.1211. During this call, you can tell our staff what items you need to rent from our list. Our staff will set an installation schedule for you. You can also submit a Free Assessment Form.</p>
                    </div>
                </div>
                
                <!-- Step 3 -->
                <div class="step-card">
                    <div class="step-header">
                        <h3 class="text-xl font-bold">Step 3</h3>
                    </div>
                    <div class="step-content">
                        <div class="step-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                        <p>Wait for your installation schedule. If you'll need to make changes to this, please inform Home2stay immediately so that we can reschedule our appointment with you.</p>
                    </div>
                </div>
                
                <!-- Step 4 -->
                <div class="step-card">
                    <div class="step-header">
                        <h3 class="text-xl font-bold">Step 4</h3>
                    </div>
                    <div class="step-content">
                        <div class="step-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <p>Using your preferred payment method, pay for the following upon installation: setup fees, removal fees, and first-month rental fee.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="py-16 contact-form-section">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto contact-form-container p-8">
                <div class="text-center mb-10">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">We are Here For You</h2>
                    <p class="text-gray-600">We're here to listen, help and provide insights.

                        Tell us what you need – We would love to hear from you!</p>
                </div>

                <form action="/submit-assessment" method="POST" class="space-y-6">
                    @csrf
                    <!-- Personal Information -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="form-label" for="name">Full Name *</label>
                            <input type="text" id="name" name="name" required
                                class="w-full form-input">
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
                        <button type="submit" class="submit-btn">
                            Submit
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
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
        // Any scripts you need for the page
    </script>
@endpush