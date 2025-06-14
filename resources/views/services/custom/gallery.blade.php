@extends('layouts.app')

@section('title', 'Equipment Rentals - Home2stay')
@section('meta_description', 'Browse our collection of mobility and accessibility equipment available for rent for your home, including bathroom safety products, mobility aids, and more.')

@push('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
@endpush

@section('content')
    <!-- Page Banner -->
    <section class="relative bg-gray-800 overflow-hidden" style="min-height: 350px;">


        <!-- Banner Content -->
        <div class="container mx-auto px-4 relative z-10 flex items-center justify-center" style="min-height: 350px;">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-4">Gallery</h1>
                <div class="w-24 h-1 bg-primary mx-auto"></div>
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-8">
                <!-- Home2stay Barrier-Free Bathrooms Installations -->
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl flex flex-col h-full group">
                    <!-- Product Image -->
                    <div class="overflow-hidden relative">
                        <img src="{{ asset('gallery/1.jpg') }}"
                            alt="Automotive"
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
                            Home2stay Barrier-Free Bathrooms Installations</h3>
                        <a href="#"
                            class="mt-auto w-full bg-primary hover:bg-primary-dark text-white py-3 px-6 rounded-lg transition duration-300 text-center font-medium">
                            View All Products
                        </a>
                    </div>
                </div>

                <!-- Home2stay Ceilling Lift Installations -->
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
                            Home2stay Ceilling Lift Installations</h3>
                        <a href="#"
                            class="mt-auto w-full bg-primary hover:bg-primary-dark text-white py-3 px-6 rounded-lg transition duration-300 text-center font-medium">
                            View All Products
                        </a>
                    </div>
                </div>

                <!-- Home2stay Elevator/Porch Lifts Installations -->
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl flex flex-col h-full group">
                    <!-- Product Image -->
                    <div class="overflow-hidden relative">
                        <img src="{{ asset('rentals-main/Home2Stay-Folding-Ramp-rentals-category-min.jpg') }}"
                            alt="Bathroom Safety"
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
                            Home2stay Elevator/Porch Lifts Installations</h3>
                        
                        <a href="#"
                            class="mt-auto w-full bg-primary hover:bg-primary-dark text-white py-3 px-6 rounded-lg transition duration-300 text-center font-medium">
                            View All Products
                        </a>
                    </div>
                </div>

                <!-- Home2stay Grab Bars Installations -->
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl flex flex-col h-full group">
                    <!-- Product Image -->
                    <div class="overflow-hidden relative">
                        <img src="{{ asset('rentals-main/Home2stay-Modular-Ramps-rentals-category-min.jpg') }}"
                            alt="Ceiling Lifts"
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
                            Home2stay Grab Bars Installations</h3>
                        
                        <a href="#"
                            class="mt-auto w-full bg-primary hover:bg-primary-dark text-white py-3 px-6 rounded-lg transition duration-300 text-center font-medium">
                            View All Products
                        </a>
                    </div>
                </div>

                <!-- Home2stay Hand Rails Installations -->
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl flex flex-col h-full group">
                    <!-- Product Image -->
                    <div class="overflow-hidden relative">
                        <img src="{{ asset('rentals-main/Home2stay-Portable-Shower-Unit-remtals-category-min.jpg') }}"
                            alt="Grab Bars"
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
                            Home2stay Hand Rails Installations</h3>
                        
                        <a href="#"
                            class="mt-auto w-full bg-primary hover:bg-primary-dark text-white py-3 px-6 rounded-lg transition duration-300 text-center font-medium">
                            View All Products
                        </a>
                    </div>
                </div>

                <!-- Home2stay Ramp Installations -->
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl flex flex-col h-full group">
                    <!-- Product Image -->
                    <div class="overflow-hidden relative">
                        <img src="{{ asset('rentals-main/Home2Stay-Straight-Indoor-Stair-Lift-rentals-category-min.jpg') }}"
                            alt="Ramps" class="w-full object-cover transition-transform duration-500 group-hover:scale-105"
                            style="height: 400px;">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        </div>
                    </div>

                    <!-- Product Details -->
                    <div class="p-6 flex-1 flex flex-col">
                        <h3
                            class="text-2xl font-bold text-gray-800 mb-3 group-hover:text-primary transition-colors duration-300">
                            Home2stay Ramp Installations</h3>
                        
                        <a href="#"
                            class="mt-auto w-full bg-primary hover:bg-primary-dark text-white py-3 px-6 rounded-lg transition duration-300 text-center font-medium">
                            View All Products
                        </a>
                    </div>
                </div>

                <!-- Home2stay Safety Poles & Handrails Installations -->
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
                            Home2stay Safety Poles & Handrails Installations</h3>
                        <a href="#"
                            class="mt-auto w-full bg-primary hover:bg-primary-dark text-white py-3 px-6 rounded-lg transition duration-300 text-center font-medium">
                            View All Products
                        </a>
                    </div>
                </div>
                
                <!-- Home2stay Stair Lift Installations -->
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
                            Home2stay Stair Lift Installations</h3>
                        <a href="#"
                            class="mt-auto w-full bg-primary hover:bg-primary-dark text-white py-3 px-6 rounded-lg transition duration-300 text-center font-medium">
                            View All Products
                        </a>
                    </div>
                </div>

                <!-- Home2stay Tub Cuts Installations -->
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
                            Home2stay Tub Cuts Installations</h3>
                        <a href="#"
                            class="mt-auto w-full bg-primary hover:bg-primary-dark text-white py-3 px-6 rounded-lg transition duration-300 text-center font-medium">
                            View All Products
                        </a>
                    </div>
                </div>

                <!-- Home2stay Walk-in Tub Installations -->
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
                            Home2stay Walk-in Tub Installations</h3>
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
    <section class="py-16 bg-secondary bg-opacity-10">
        <div class="container mx-auto px-4">
            <div class="text-center max-w-3xl mx-auto mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-6">How Home2stay's Rentals Work</h2>
                <p class="text-lg text-gray-600">Our simple rental process makes it easy to get the accessibility equipment
                    you need.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Step 1 -->
                <div
                    class="bg-white rounded-lg shadow-lg overflow-hidden transform transition duration-300 hover:shadow-xl hover:-translate-y-1">
                    <div class="bg-primary text-white p-4 text-center">
                        <h3 class="text-xl font-bold">Step 1</h3>
                    </div>
                    <div class="p-8 text-center">
                        <div
                            class="w-16 h-16 bg-primary bg-opacity-10 rounded-full mx-auto flex items-center justify-center mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </div>
                        <p class="text-gray-600">Browse through our list of items available for rental. You can take note of
                            which accessibility solutions cater best to your needs. You can also list down any questions you
                            have for us as well.</p>
                    </div>
                </div>

                <!-- Step 2 -->
                <div
                    class="bg-white rounded-lg shadow-lg overflow-hidden transform transition duration-300 hover:shadow-xl hover:-translate-y-1">
                    <div class="bg-primary text-white p-4 text-center">
                        <h3 class="text-xl font-bold">Step 2</h3>
                    </div>
                    <div class="p-8 text-center">
                        <div
                            class="w-16 h-16 bg-primary bg-opacity-10 rounded-full mx-auto flex items-center justify-center mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                        </div>
                        <p class="text-gray-600">Call Home2stay at 604.259.1211. During this call, you can tell our staff
                            what items you need to rent from our list. Our staff will set an installation schedule for you.
                            You can also submit a Free Assessment Form.</p>
                    </div>
                </div>

                <!-- Step 3 -->
                <div
                    class="bg-white rounded-lg shadow-lg overflow-hidden transform transition duration-300 hover:shadow-xl hover:-translate-y-1">
                    <div class="bg-primary text-white p-4 text-center">
                        <h3 class="text-xl font-bold">Step 3</h3>
                    </div>
                    <div class="p-8 text-center">
                        <div
                            class="w-16 h-16 bg-primary bg-opacity-10 rounded-full mx-auto flex items-center justify-center mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                        <p class="text-gray-600">Wait for your installation schedule. If you'll need to make changes to
                            this, please inform Home2stay immediately so that we can reschedule our appointment with you.
                        </p>
                    </div>
                </div>

                <!-- Step 4 -->
                <div
                    class="bg-white rounded-lg shadow-lg overflow-hidden transform transition duration-300 hover:shadow-xl hover:-translate-y-1">
                    <div class="bg-primary text-white p-4 text-center">
                        <h3 class="text-xl font-bold">Step 4</h3>
                    </div>
                    <div class="p-8 text-center">
                        <div
                            class="w-16 h-16 bg-primary bg-opacity-10 rounded-full mx-auto flex items-center justify-center mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <p class="text-gray-600">Using your preferred payment method, pay for the following upon
                            installation: setup fees, removal fees, and first-month rental fee.</p>
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
