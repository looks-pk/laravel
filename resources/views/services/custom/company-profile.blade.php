@extends('layouts.app')

@section('title', 'Accessible Bathroom Solutions for Canadian Homes')
@section('meta_description', 'Home2stay offers professional accessible bathroom solutions across Canada. Our team creates safe, stylish, and functional bathrooms for all mobility needs.')

@section('content')
    <!-- Hero Section -->
    <section class="relative" style="height: 70vh; min-height: 500px;">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0 w-full h-full">
            <img src="{{ asset('abt-company/about-us-bg-min.png') }}" alt="About Us" class="w-full h-full object-cover">
            <!-- <div class="absolute inset-0 bg-black opacity-40"></div> -->
        </div>

        <div class="absolute inset-0 flex items-center justify-center">
            <div class="container mx-auto px-4 text-center text-white">
                <nav class="flex justify-center mb-6 text-sm" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 md:space-x-3">
                        <li class="inline-flex items-center">
                            <a href="{{ route('home') }}" class="text-white hover:text-gray-200">
                                Home
                            </a>
                        </li>

                        <li aria-current="page">
                            <div class="flex items-center">
                                <svg class="w-3 h-3 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg>
                                <span class="ml-1 font-medium text-gray-100">Company Profile</span>
                            </div>
                        </li>
                    </ol>
                </nav>
                <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-4">About Us</h1>
                <p class="text-lg md:text-xl opacity-90 max-w-3xl mx-auto">We dream of creating an accessible and inclusive
                    community. Located in Vancouver, British Columbia, Home2stay specializes in home accessibility solutions
                    and renovations. With over 20 years of expertise in accessibility and universal design, we aim to build
                    safe and inclusive homes and spaces for people of all ages and abilities.</p>
            </div>
        </div>
    </section>

    <!-- how we work -->
    <section class="py-12 md:py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="flex flex-col lg:flex-row gap-8 items-center">

                <div class="w-full lg:w-1/2">
                    <div class="bg-gray-100 rounded-lg overflow-hidden mb-4">
                        <img src="{{ asset('abt-company/how-we-work-min.png') }}" alt="Accessible Bathroom"
                            class="w-full h-auto object-cover">
                    </div>
                </div>
                <div class="w-full lg:w-1/2">
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">How We Work</h2>



                    <div class="mb-6">
                        <p class="text-gray-600 text-lg mb-4">
                            We are dedicated to finding solutions to help you maintain a safe and dignified lifestyle in the
                            comfort of your own home.
                        </p>
                        <p class="text-gray-600 text-lg">
                            Your trust is valuable to us. We are more than just a provider of accessibility and mobility
                            solutions for homes and businesses — we are here to help you before and after your purchase,
                            ensuring you have all the information you need to reach the right decision.
                        </p>
                        <p class="text-gray-600 text-lg">
                            Home2stay's mission is simple: To make homes and spaces in British Columbia safer, more
                            accessible and inclusive- one project at a time.
                        </p>
                        <p class="text-gray-600 text-lg">
                            With ACCESSIBILITY, MOBILITY, INDEPENDENCE and SAFETY within your reach, we aim to make everyday
                            life easier for you.
                        </p>
                    </div>
                </div>




            </div>
        </div>
    </section>

    <!-- Timeline Section -->
    <section class="py-16 bg-primary bg-opacity-10">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800">Our Home2stay Story So Far</h2>
            </div>

            <!-- Timeline Navigation -->
            <div class="relative max-w-4xl mx-auto mb-16">
                <!-- Timeline Line -->
                <div class="absolute top-1/2 left-0 right-0 h-1 bg-primary transform -translate-y-1/2"></div>

                <!-- Timeline Years -->
                <div class="flex justify-between relative">
                    <!-- 2001 -->
                    <div class="relative" id="year-nav-2001">
                        <button onclick="showYear('2001')"
                            class="w-16 h-16 rounded-full bg-primary text-white font-bold flex items-center justify-center z-10 relative mx-auto mb-2 hover:bg-primary-dark transition-colors duration-300 year-button active-year">2001</button>
                        <div
                            class="w-4 h-4 rounded-full bg-primary absolute bottom-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                        </div>
                    </div>

                    <!-- 2004 -->
                    <div class="relative" id="year-nav-2004">
                        <button onclick="showYear('2004')"
                            class="w-16 h-16 rounded-full bg-white text-primary font-bold flex items-center justify-center z-10 relative mx-auto mb-2 hover:bg-gray-100 transition-colors duration-300 year-button">2004</button>
                        <div
                            class="w-4 h-4 rounded-full bg-primary absolute bottom-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                        </div>
                    </div>

                    <!-- 2013 -->
                    <div class="relative" id="year-nav-2013">
                        <button onclick="showYear('2013')"
                            class="w-16 h-16 rounded-full bg-white text-primary font-bold flex items-center justify-center z-10 relative mx-auto mb-2 hover:bg-gray-100 transition-colors duration-300 year-button">2013</button>
                        <div
                            class="w-4 h-4 rounded-full bg-primary absolute bottom-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                        </div>
                    </div>

                    <!-- 2017 -->
                    <div class="relative" id="year-nav-2017">
                        <button onclick="showYear('2017')"
                            class="w-16 h-16 rounded-full bg-white text-primary font-bold flex items-center justify-center z-10 relative mx-auto mb-2 hover:bg-gray-100 transition-colors duration-300 year-button">2017</button>
                        <div
                            class="w-4 h-4 rounded-full bg-primary absolute bottom-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Timeline Content -->
            <div class="max-w-5xl mx-auto">
                <!-- 2001 Content -->
                <div id="year-2001" class="timeline-content">
                    <div class="flex flex-col lg:flex-row gap-8 items-center">
                        <div class="w-full lg:w-1/2">
                            <p class="text-lg text-gray-700 mb-4">
                                Our Founder, Rahim Lakhani, fell in love with the challenges and the fulfillment of
                                positively changing lives via the home medical equipment space. He took the leap and left
                                his work at a Fortune 100 tech company.
                            </p>
                        </div>
                        <div class="w-full lg:w-1/2">
                            <div class="bg-white rounded-xl overflow-hidden shadow-lg">
                                <img src="{{ asset('abt-company/our-story-so-far-img-1.png') }}" class="w-full h-auto">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 2004 Content -->
                <div id="year-2004" class="timeline-content hidden">
                    <div class="flex flex-col lg:flex-row gap-8 items-center">
                        <div class="w-full lg:w-1/2">
                            <p class="text-lg text-gray-700 mb-4">
                                Rahim saw the opportunity in Vancouver's booming real estate market and entered the market
                                of renovating and selling properties. This fueled his passion for building beautiful and
                                functional homes.
                            </p>
                        </div>
                        <div class="w-full lg:w-1/2">
                            <div class="bg-white rounded-xl overflow-hidden shadow-lg">
                                <img src="{{ asset('abt-company/our-story-so-far-img-1.png') }}"
                                    alt="2004 - Real Estate Ventures" class="w-full h-auto">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 2013 Content -->
                <div id="year-2013" class="timeline-content hidden">
                    <div class="flex flex-col lg:flex-row gap-8 items-center">
                        <div class="w-full lg:w-1/2">
                            <p class="text-lg text-gray-700 mb-4">
                                Home2stay was born. At the urging of many of the occupational therapists that Rahim worked
                                with, he combined his three areas of expertise: accessibility, medical equipment, and
                                construction.
                            </p>
                            <p class="text-lg text-gray-700 mb-4">
                                The vision was to be the premier accessibiltiy solutions provider in Vancouver and the Lower
                                Mainland.
                            </p>
                        </div>
                        <div class="w-full lg:w-1/2">
                            <div class="bg-white rounded-xl overflow-hidden shadow-lg">
                                <img src="{{ asset('abt-company/our-story-so-far-img-1.png') }}"
                                    alt="2013 - Home2stay Founded" class="w-full h-auto">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 2017 Content -->
                <div id="year-2017" class="timeline-content hidden">
                    <div class="flex flex-col lg:flex-row gap-8 items-center">
                        <div class="w-full lg:w-1/2">
                            <p class="text-lg text-gray-700 mb-4">
                                Home2stay moved into its beautiful new showroom and office in Vancouver in 2017.
                            </p>
                            <p class="text-lg text-gray-700 mb-4">
                                To be able to serve more people, Home2stay opened a second showroom location in Port
                                Coquitlam in 2021.
                            </p>
                        </div>
                        <div class="w-full lg:w-1/2">
                            <div class="bg-white rounded-xl overflow-hidden shadow-lg">
                                <img src="{{ asset('abt-company/our-story-so-far-img-1.png') }}" alt="2017 - New Showroom"
                                    class="w-full h-auto">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Partners and Associations Section -->
    <section class="py-16 bg-secondary bg-opacity-10
            <div class=" container mx-auto px-4">
        <!-- Official Distributor Partners -->
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold relative inline-block mb-12 section-title">Official Distributor Partner of
                Trusted Accessibility Brands</h2>
        </div>

        <!-- Brand Logos Grid -->
        <div class="grid grid-cols-2 md:grid-cols-5 gap-6 mb-16">
            <!-- Partner Brand 1 -->
            <div
                class="bg-white rounded-lg p-4 flex items-center justify-center shadow-sm hover:shadow-md transition-shadow duration-300">
                <img src="{{ asset('brands/american-tubs-logo-min.png') }}" alt="Partner Brand 1" class="max-h-16 w-auto">
            </div>

            <!-- Partner Brand 2 -->
            <div
                class="bg-white rounded-lg p-4 flex items-center justify-center shadow-sm hover:shadow-md transition-shadow duration-300">
                <img src="{{ asset('brands/arjo-logo-min.png') }}" alt="Partner Brand 2" class="max-h-16 w-auto">
            </div>

            <!-- Partner Brand 3 -->
            <div
                class="bg-white rounded-lg p-4 flex items-center justify-center shadow-sm hover:shadow-md transition-shadow duration-300">
                <img src="{{ asset('brands/best-bath-logo-min.png') }}" alt="Partner Brand 3" class="max-h-16 w-auto">
            </div>

            <!-- Partner Brand 4 -->
            <div
                class="bg-white rounded-lg p-4 flex items-center justify-center shadow-sm hover:shadow-md transition-shadow duration-300">
                <img src="{{ asset('brands/bruno-logo-min.png') }}" alt="Partner Brand 4" class="max-h-16 w-auto">
            </div>

            <!-- Partner Brand 5 -->
            <div
                class="bg-white rounded-lg p-4 flex items-center justify-center shadow-sm hover:shadow-md transition-shadow duration-300">
                <img src="{{ asset('brands/clean-cut-logo-min.png') }}" alt="Partner Brand 5" class="max-h-16 w-auto">
            </div>

            <!-- Partner Brand 6 -->
            <div
                class="bg-white rounded-lg p-4 flex items-center justify-center shadow-sm hover:shadow-md transition-shadow duration-300">
                <img src="{{ asset('brands/drive-logo-min.png') }}" alt="Partner Brand 6" class="max-h-16 w-auto">
            </div>

            <!-- Partner Brand 7 -->
            <div
                class="bg-white rounded-lg p-4 flex items-center justify-center shadow-sm hover:shadow-md transition-shadow duration-300">
                <img src="{{ asset('brands/handicare-logo-min.png') }}" alt="Partner Brand 7" class="max-h-16 w-auto">
            </div>

            <!-- Partner Brand 8 -->
            <div
                class="bg-white rounded-lg p-4 flex items-center justify-center shadow-sm hover:shadow-md transition-shadow duration-300">
                <img src="{{ asset('brands/health-craft-min.png') }}" alt="Partner Brand 8" class="max-h-16 w-auto">
            </div>

            <!-- Partner Brand 9 -->
            <div
                class="bg-white rounded-lg p-4 flex items-center justify-center shadow-sm hover:shadow-md transition-shadow duration-300">
                <img src="{{ asset('brands/livelwell-logo-min.png') }}" alt="Partner Brand 9" class="max-h-16 w-auto">
            </div>

            <!-- Partner Brand 10 -->
            <div
                class="bg-white rounded-lg p-4 flex items-center justify-center shadow-sm hover:shadow-md transition-shadow duration-300">
                <img src="{{ asset('brands/prism-medical-min.png') }}" alt="Partner Brand 10" class="max-h-16 w-auto">
            </div>
        </div>

        <!-- Our Associations -->
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold relative inline-block mb-12 section-title">Our Associations</h2>
        </div>

        <!-- Associations Logos -->
        <div class="flex flex-wrap justify-center gap-12 items-center">
            <!-- Association 1 -->
            <div
                class="bg-white rounded-lg p-6 flex items-center justify-center shadow-sm hover:shadow-md transition-shadow duration-300">
                <img src="{{ asset('associate/bbb-logo-min.png') }}" alt="Association 1" class="max-h-24 w-auto">
            </div>

            <!-- Association 2 -->
            <div
                class="bg-white rounded-lg p-6 flex items-center justify-center shadow-sm hover:shadow-md transition-shadow duration-300">
                <img src="{{ asset('associate/caps-cert-logo-min.png') }}" alt="Association 2" class="max-h-24 w-auto">
            </div>

            <!-- Association 3 -->
            <div
                class="bg-white rounded-lg p-6 flex items-center justify-center shadow-sm hover:shadow-md transition-shadow duration-300">
                <img src="{{ asset('associate/nmeda-logo-min.png') }}" alt="Association 3" class="max-h-24 w-auto">
            </div>
        </div>
        </div>
    </section>

    <!-- Statistics Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="flex flex-col lg:flex-row items-center gap-12">
                <!-- Text and Stats -->
                <div class="w-full lg:w-1/2">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-12">Vancouver's Leading Provider of Home
                        Accessibility Products</h2>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <!-- Stat 1 -->
                        <div class="text-center">
                            <div class="w-16 h-16 mx-auto mb-4 bg-primary/10 rounded-full flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-semibold text-gray-700 mb-2">Falls Prevented</h3>
                            <p class="text-4xl font-bold text-primary mb-2">9,875</p>
                            <p class="text-gray-600">Falls Prevented</p>
                        </div>

                        <!-- Stat 2 -->
                        <div class="text-center">
                            <div class="w-16 h-16 mx-auto mb-4 bg-primary/10 rounded-full flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-semibold text-gray-700 mb-2">Cities Served</h3>
                            <p class="text-4xl font-bold text-primary mb-2">82</p>
                            <p class="text-gray-600">Cities Served</p>
                        </div>

                        <!-- Stat 3 -->
                        <div class="text-center">
                            <div class="w-16 h-16 mx-auto mb-4 bg-primary/10 rounded-full flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-semibold text-gray-700 mb-2">Home Sales Cancelled</h3>
                            <p class="text-4xl font-bold text-primary mb-2">1,896</p>
                            <p class="text-gray-600">Home Sales Cancelled</p>
                        </div>
                    </div>
                </div>

                <!-- Image -->
                <div class="w-full lg:w-1/2">
                    <div class="bg-white rounded-xl overflow-hidden shadow-lg">
                        <img src="{{ asset('abt-company/shower-handrail-grab-bar-elderly-people-bathroom-hospital-retirement-home 1.png') }}"
                            alt="Vancouver's Leading Provider" class="w-full h-auto">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold relative inline-block mb-12 section-title">What Our Clients Say</h2>
            </div>

            <!-- Testimonial Slider -->
            <div class="max-w-5xl mx-auto relative">
                <div class="swiper-container testimonial-slider overflow-hidden">
                    <div class="swiper-wrapper">
                        <!-- Testimonial 1 -->
                        <div class="swiper-slide">
                            <div class="bg-gray-50 rounded-xl p-8 md:p-10 shadow-lg">
                                <div class="flex flex-col items-center mb-6">
                                    <!-- Client Avatar -->
                                    <div
                                        class="w-20 h-20 bg-gray-200 rounded-full flex items-center justify-center mb-4 border-4 border-white shadow-md">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                            class="w-12 h-12 text-gray-500">
                                            <path fill-rule="evenodd"
                                                d="M7.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM3.751 20.105a8.25 8.25 0 0116.498 0 .75.75 0 01-.437.695A18.683 18.683 0 0112 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 01-.437-.695z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>

                                    <!-- Client Name -->
                                    <h4 class="text-xl font-bold text-gray-900 mb-2">H. Hashimoto</h4>

                                    <!-- Star Rating -->
                                    <div class="flex space-x-1 text-yellow-400 mb-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                            class="w-5 h-5">
                                            <path fill-rule="evenodd"
                                                d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                            class="w-5 h-5">
                                            <path fill-rule="evenodd"
                                                d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                            class="w-5 h-5">
                                            <path fill-rule="evenodd"
                                                d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                            class="w-5 h-5">
                                            <path fill-rule="evenodd"
                                                d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                            class="w-5 h-5">
                                            <path fill-rule="evenodd"
                                                d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </div>

                                <!-- Quotation Mark -->
                                <div class="absolute top-8 right-8 text-primary opacity-20">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24"
                                        fill="currentColor">
                                        <path
                                            d="M9.983 3v7.391c0 5.704-3.731 9.57-8.983 10.609l-.995-2.151c2.432-.917 3.995-3.638 3.995-5.849h-4v-10h9.983zm14.017 0v7.391c0 5.704-3.748 9.571-9 10.609l-.996-2.151c2.433-.917 3.996-3.638 3.996-5.849h-3.983v-10h9.983z" />
                                    </svg>
                                </div>

                                <!-- Testimonial Text -->
                                <div class="text-gray-700 text-lg leading-relaxed">
                                    <p>I had 3 safety bars installed by Home2stay and the gentleman did a great job. He was
                                        very courteous and professional. He made sure the bars were exactly where I needed
                                        them before the installation. My appointment was between 10AM-11AM and the gentleman
                                        arrived at +9:50AM and was finished by 10:30AM.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 2 -->
                        <div class="swiper-slide">
                            <div class="bg-gray-50 rounded-xl p-8 md:p-10 shadow-lg">
                                <div class="flex flex-col items-center mb-6">
                                    <!-- Client Avatar -->
                                    <div
                                        class="w-20 h-20 bg-gray-200 rounded-full flex items-center justify-center mb-4 border-4 border-white shadow-md">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                            class="w-12 h-12 text-gray-500">
                                            <path fill-rule="evenodd"
                                                d="M7.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM3.751 20.105a8.25 8.25 0 0116.498 0 .75.75 0 01-.437.695A18.683 18.683 0 0112 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 01-.437-.695z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>

                                    <!-- Client Name -->
                                    <h4 class="text-xl font-bold text-gray-900 mb-2">B. Taylor</h4>

                                    <!-- Star Rating -->
                                    <div class="flex space-x-1 text-yellow-400 mb-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                            class="w-5 h-5">
                                            <path fill-rule="evenodd"
                                                d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                            class="w-5 h-5">
                                            <path fill-rule="evenodd"
                                                d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                            class="w-5 h-5">
                                            <path fill-rule="evenodd"
                                                d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                            class="w-5 h-5">
                                            <path fill-rule="evenodd"
                                                d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                            class="w-5 h-5">
                                            <path fill-rule="evenodd"
                                                d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </div>

                                <!-- Quotation Mark -->
                                <div class="absolute top-8 right-8 text-primary opacity-20">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24"
                                        fill="currentColor">
                                        <path
                                            d="M9.983 3v7.391c0 5.704-3.731 9.57-8.983 10.609l-.995-2.151c2.432-.917 3.995-3.638 3.995-5.849h-4v-10h9.983zm14.017 0v7.391c0 5.704-3.748 9.571-9 10.609l-.996-2.151c2.433-.917 3.996-3.638 3.996-5.849h-3.983v-10h9.983z" />
                                    </svg>
                                </div>

                                <!-- Testimonial Text -->
                                <div class="text-gray-700 text-lg leading-relaxed">
                                    <p>Home2stay was not only prompt in replying to my inquiry and quote request, they were
                                        very attentive and courteous every time we contacted them. We had 2 grab bars in the
                                        bathroom installed and a long handrail installed with care and attention to detail.
                                        Our experience with Home2stay was wonderful.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pagination -->
                    <div class="swiper-pagination mt-8"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-primary text-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-3xl font-bold mb-6">Get All the Things You Need for Your Accessible Bathroom in Canada from
                    Home2stay Today!</h2>
                <p class="text-xl mb-8">Home2stay can provide your family with all the things you need for an accessible
                    bathroom in Canada. We service different areas in Canada including Vancouver, Surrey, Port Moody,
                    Ticities, Delta, and Maple Ridge.</p>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="{{ route('contact') }}"
                        class="px-8 py-3 bg-white text-primary hover:bg-gray-100 rounded-lg font-medium transition duration-300">
                        Contact Us
                    </a>
                    <a href="tel:+16042393662"
                        class="px-8 py-3 bg-transparent border-2 border-white text-white hover:bg-white/10 rounded-lg font-medium transition duration-300">
                        Call +1(604) 239-3662
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection

@push('scripts')
    <script>
        function showYear(year) {
            // Hide all timeline content
            document.querySelectorAll('.timeline-content').forEach(function (content) {
                content.classList.add('hidden');
            });

            // Show selected year content
            document.getElementById('year-' + year).classList.remove('hidden');

            // Update active button styles
            document.querySelectorAll('.year-button').forEach(function (button) {
                button.classList.remove('active-year');
                button.classList.remove('bg-primary');
                button.classList.remove('text-white');
                button.classList.add('bg-white');
                button.classList.add('text-primary');
            });

            // Style active button
            const activeButton = document.querySelector('#year-nav-' + year + ' .year-button');
            activeButton.classList.add('active-year');
            activeButton.classList.remove('bg-white');
            activeButton.classList.remove('text-primary');
            activeButton.classList.add('bg-primary');
            activeButton.classList.add('text-white');
        }

        // Initialize Testimonials Swiper when document is loaded
        document.addEventListener('DOMContentLoaded', function() {
            const testimonialSwiper = new Swiper('.testimonial-slider', {
                slidesPerView: 1,
                spaceBetween: 30,
                loop: true,
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                }
            });
        });
    </script>
@endpush

@push('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
@endpush