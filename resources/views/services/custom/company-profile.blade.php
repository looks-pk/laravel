@extends('layouts.app')

@section('title', 'Accessible Bathroom Solutions for Canadian Homes')
@section('meta_description', 'Home2stay offers professional accessible bathroom solutions across Canada. Our team creates safe, stylish, and functional bathrooms for all mobility needs.')

@push('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
<style>
    .hero-overlay {
        background: linear-gradient(135deg, rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0.5) 100%);
    }
    
    .timeline-line {
        background: linear-gradient(90deg, #4f46e5 0%, #7c3aed 100%);
    }
    
    .year-button {
        transition: all 0.3s ease;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
    }
    
    .year-button:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 15px -3px rgba(0, 0, 0, 0.1);
    }
    
    .active-year {
        background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 100%) !important;
        transform: scale(1.1);
    }
    
    .brand-card {
        transition: all 0.3s ease;
        border: 1px solid #e5e7eb;
    }
    
    .brand-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
        border-color: #4f46e5;
    }
    
    .stat-card {
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }
    
    .stat-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
        transition: left 0.5s ease;
    }
    
    .stat-card:hover::before {
        left: 100%;
    }
    
    .stat-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
    }
    
    .testimonial-card {
        position: relative;
        background: linear-gradient(135deg, #ffffff 0%, #f8fafc 100%);
        border: 1px solid #e2e8f0;
    }
    
    .section-title::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 4px;
        background: linear-gradient(90deg, #4f46e5 0%, #7c3aed 100%);
        border-radius: 2px;
    }
    
    .gradient-text {
        background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }
    
    .cta-gradient {
        background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 50%, #06b6d4 100%);
    }
    
    .breadcrumb-text {
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        font-weight: 500;
    }
    
    .hero-title {
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        font-weight: 700;
    }
    
    .hero-description {
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
        font-weight: 400;
    }
    
    @media (max-width: 768px) {
        .timeline-line {
            display: none;
        }
        
        .year-button {
            width: 12px;
            height: 12px;
            font-size: 0;
        }
        
        .active-year {
            transform: scale(1.2);
        }
    }
</style>
@endpush

@section('content')
    <!-- Hero Section -->
    <section class="relative" style="height: 70vh; min-height: 500px;">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0 w-full h-full">
            <img src="{{ asset('abt-company/about-us-bg-min.png') }}" alt="About Us" class="w-full h-full object-cover">
            <div class="absolute inset-0 hero-overlay"></div>
        </div>

        <div class="absolute inset-0 flex items-center justify-center">
            <div class="container mx-auto px-4 text-center text-white">
                <nav class="flex justify-center mb-6 text-sm" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 md:space-x-3">
                        <li class="inline-flex items-center">
                            <a href="{{ route('home') }}" class="breadcrumb-text text-white hover:text-gray-200 transition-colors">
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
                                <span class="ml-1 breadcrumb-text text-gray-100">Company Profile</span>
                            </div>
                        </li>
                    </ol>
                </nav>
                <h1 class="hero-title text-3xl md:text-4xl lg:text-5xl mb-6">About Us</h1>
                <p class="hero-description text-lg md:text-xl opacity-95 max-w-3xl mx-auto leading-relaxed">
                    We dream of creating an accessible and inclusive community. Located in Vancouver, British Columbia, 
                    Home2stay specializes in home accessibility solutions and renovations. With over 20 years of expertise 
                    in accessibility and universal design, we aim to build safe and inclusive homes and spaces for people 
                    of all ages and abilities.
                </p>
            </div>
        </div>
    </section>

    <!-- How We Work -->
    <section class="py-16 md:py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="flex flex-col lg:flex-row gap-12 items-center">
                <div class="w-full lg:w-1/2">
                    <div class="bg-gradient-to-br from-gray-50 to-gray-100 rounded-2xl overflow-hidden shadow-lg">
                        <img src="{{ asset('abt-company/how-we-work-min.png') }}" alt="Accessible Bathroom"
                            class="w-full h-auto object-cover hover:scale-105 transition-transform duration-500">
                    </div>
                </div>
                <div class="w-full lg:w-1/2">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-6 relative">
                        How We Work
                        <span class="absolute -bottom-2 left-0 w-20 h-1 bg-gradient-to-r from-primary to-purple-600 rounded-full"></span>
                    </h2>

                    <div class="space-y-6">
                        <p class="text-gray-600 text-lg leading-relaxed">
                            We are dedicated to finding solutions to help you maintain a safe and dignified lifestyle in the
                            comfort of your own home.
                        </p>
                        <p class="text-gray-600 text-lg leading-relaxed">
                            Your trust is valuable to us. We are more than just a provider of accessibility and mobility
                            solutions for homes and businesses — we are here to help you before and after your purchase,
                            ensuring you have all the information you need to reach the right decision.
                        </p>
                        
                        <div class="bg-gradient-to-r from-primary/5 to-purple-600/5 p-6 rounded-xl border-l-4 border-primary">
                            <p class="text-gray-700 text-lg font-medium leading-relaxed">
                                Home2stay's mission is simple: To make homes and spaces in British Columbia safer, more
                                accessible and inclusive - one project at a time.
                            </p>
                        </div>
                        
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-8">
                            <div class="text-center p-4 bg-gray-50 rounded-lg">
                                <div class="text-primary font-bold text-sm">ACCESSIBILITY</div>
                            </div>
                            <div class="text-center p-4 bg-gray-50 rounded-lg">
                                <div class="text-primary font-bold text-sm">MOBILITY</div>
                            </div>
                            <div class="text-center p-4 bg-gray-50 rounded-lg">
                                <div class="text-primary font-bold text-sm">INDEPENDENCE</div>
                            </div>
                            <div class="text-center p-4 bg-gray-50 rounded-lg">
                                <div class="text-primary font-bold text-sm">SAFETY</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Timeline Section -->
    <section class="py-20 bg-gradient-to-br from-primary/5 to-purple-600/5">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 relative inline-block">
                    Our Home2stay Story So Far
                    <span class="absolute -bottom-3 left-1/2 transform -translate-x-1/2 w-24 h-1 bg-gradient-to-r from-primary to-purple-600 rounded-full"></span>
                </h2>
            </div>

            <!-- Timeline Navigation -->
            <div class="relative max-w-4xl mx-auto mb-16">
                <!-- Timeline Line -->
                <div class="absolute top-1/2 left-0 right-0 h-2 timeline-line transform -translate-y-1/2 rounded-full"></div>

                <!-- Timeline Years -->
                <div class="flex justify-between relative">
                    <!-- 2001 -->
                    <div class="relative" id="year-nav-2001">
                        <button onclick="showYear('2001')"
                            class="year-button w-16 h-16 rounded-full bg-primary text-white font-bold flex items-center justify-center z-10 relative mx-auto mb-2 active-year">
                            <span class="hidden md:inline">2001</span>
                        </button>
                        <div class="text-center">
                            <span class="text-sm font-medium text-gray-600 md:hidden">2001</span>
                        </div>
                    </div>

                    <!-- 2004 -->
                    <div class="relative" id="year-nav-2004">
                        <button onclick="showYear('2004')"
                            class="year-button w-16 h-16 rounded-full bg-white text-primary font-bold flex items-center justify-center z-10 relative mx-auto mb-2 border-2 border-primary">
                            <span class="hidden md:inline">2004</span>
                        </button>
                        <div class="text-center">
                            <span class="text-sm font-medium text-gray-600 md:hidden">2004</span>
                        </div>
                    </div>

                    <!-- 2013 -->
                    <div class="relative" id="year-nav-2013">
                        <button onclick="showYear('2013')"
                            class="year-button w-16 h-16 rounded-full bg-white text-primary font-bold flex items-center justify-center z-10 relative mx-auto mb-2 border-2 border-primary">
                            <span class="hidden md:inline">2013</span>
                        </button>
                        <div class="text-center">
                            <span class="text-sm font-medium text-gray-600 md:hidden">2013</span>
                        </div>
                    </div>

                    <!-- 2017 -->
                    <div class="relative" id="year-nav-2017">
                        <button onclick="showYear('2017')"
                            class="year-button w-16 h-16 rounded-full bg-white text-primary font-bold flex items-center justify-center z-10 relative mx-auto mb-2 border-2 border-primary">
                            <span class="hidden md:inline">2017</span>
                        </button>
                        <div class="text-center">
                            <span class="text-sm font-medium text-gray-600 md:hidden">2017</span>
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
                            <div class="bg-white p-8 rounded-2xl shadow-lg border border-gray-100">
                                <h3 class="text-2xl font-bold text-gray-800 mb-4 gradient-text">The Beginning</h3>
                                <p class="text-lg text-gray-700 leading-relaxed">
                                    Our Founder, Rahim Lakhani, fell in love with the challenges and the fulfillment of
                                    positively changing lives via the home medical equipment space. He took the leap and left
                                    his work at a Fortune 100 tech company to pursue his passion for helping others.
                                </p>
                            </div>
                        </div>
                        <div class="w-full lg:w-1/2">
                            <div class="bg-white rounded-2xl overflow-hidden shadow-xl border border-gray-100">
                                <img src="{{ asset('abt-company/our-story-so-far-img-1.png') }}" 
                                     class="w-full h-auto hover:scale-105 transition-transform duration-500" 
                                     alt="Rahim Lakhani - Founder">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 2004 Content -->
                <div id="year-2004" class="timeline-content hidden">
                    <div class="flex flex-col lg:flex-row gap-8 items-center">
                        <div class="w-full lg:w-1/2">
                            <div class="bg-white p-8 rounded-2xl shadow-lg border border-gray-100">
                                <h3 class="text-2xl font-bold text-gray-800 mb-4 gradient-text">Real Estate Ventures</h3>
                                <p class="text-lg text-gray-700 leading-relaxed">
                                    Rahim saw the opportunity in Vancouver's booming real estate market and entered the market
                                    of renovating and selling properties. This experience fueled his passion for building 
                                    beautiful and functional homes that serve people's needs.
                                </p>
                            </div>
                        </div>
                        <div class="w-full lg:w-1/2">
                            <div class="bg-white rounded-2xl overflow-hidden shadow-xl border border-gray-100">
                                <img src="{{ asset('abt-company/our-story-so-far-img-1.png') }}"
                                     alt="2004 - Real Estate Ventures" 
                                     class="w-full h-auto hover:scale-105 transition-transform duration-500">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 2013 Content -->
                <div id="year-2013" class="timeline-content hidden">
                    <div class="flex flex-col lg:flex-row gap-8 items-center">
                        <div class="w-full lg:w-1/2">
                            <div class="bg-white p-8 rounded-2xl shadow-lg border border-gray-100">
                                <h3 class="text-2xl font-bold text-gray-800 mb-4 gradient-text">Home2stay is Born</h3>
                                <p class="text-lg text-gray-700 mb-4 leading-relaxed">
                                    Home2stay was born! At the urging of many occupational therapists that Rahim worked
                                    with, he combined his three areas of expertise: accessibility, medical equipment, and
                                    construction.
                                </p>
                                <p class="text-lg text-gray-700 leading-relaxed">
                                    The vision was to be the premier accessibility solutions provider in Vancouver and the Lower
                                    Mainland, making homes safer and more accessible for everyone.
                                </p>
                            </div>
                        </div>
                        <div class="w-full lg:w-1/2">
                            <div class="bg-white rounded-2xl overflow-hidden shadow-xl border border-gray-100">
                                <img src="{{ asset('abt-company/our-story-so-far-img-1.png') }}"
                                     alt="2013 - Home2stay Founded" 
                                     class="w-full h-auto hover:scale-105 transition-transform duration-500">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 2017 Content -->
                <div id="year-2017" class="timeline-content hidden">
                    <div class="flex flex-col lg:flex-row gap-8 items-center">
                        <div class="w-full lg:w-1/2">
                            <div class="bg-white p-8 rounded-2xl shadow-lg border border-gray-100">
                                <h3 class="text-2xl font-bold text-gray-800 mb-4 gradient-text">Expansion & Growth</h3>
                                <p class="text-lg text-gray-700 mb-4 leading-relaxed">
                                    Home2stay moved into its beautiful new showroom and office in Vancouver in 2017,
                                    marking a significant milestone in our growth and commitment to serving our community.
                                </p>
                                <p class="text-lg text-gray-700 leading-relaxed">
                                    To serve even more people, Home2stay opened a second showroom location in Port
                                    Coquitlam in 2021, expanding our reach across the Lower Mainland.
                                </p>
                            </div>
                        </div>
                        <div class="w-full lg:w-1/2">
                            <div class="bg-white rounded-2xl overflow-hidden shadow-xl border border-gray-100">
                                <img src="{{ asset('abt-company/our-story-so-far-img-1.png') }}" 
                                     alt="2017 - New Showroom"
                                     class="w-full h-auto hover:scale-105 transition-transform duration-500">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Partners and Associations Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <!-- Official Distributor Partners -->
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 relative inline-block section-title">
                    Official Distributor Partner of Trusted Accessibility Brands
                </h2>
                <p class="text-lg text-gray-600 mt-6 max-w-3xl mx-auto">
                    We partner with industry-leading brands to bring you the highest quality accessibility solutions
                </p>
            </div>

            <!-- Brand Logos Grid -->
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 mb-20">
                <!-- Partner Brand 1 -->
                <div class="brand-card bg-white rounded-xl p-6 flex items-center justify-center shadow-sm">
                    <img src="{{ asset('brands/american-tubs-logo-min.png') }}" alt="American Tubs" class="max-h-16 w-auto filter grayscale hover:grayscale-0 transition-all duration-300">
                </div>

                <!-- Partner Brand 2 -->
                <div class="brand-card bg-white rounded-xl p-6 flex items-center justify-center shadow-sm">
                    <img src="{{ asset('brands/arjo-logo-min.png') }}" alt="Arjo" class="max-h-16 w-auto filter grayscale hover:grayscale-0 transition-all duration-300">
                </div>

                <!-- Partner Brand 3 -->
                <div class="brand-card bg-white rounded-xl p-6 flex items-center justify-center shadow-sm">
                    <img src="{{ asset('brands/best-bath-logo-min.png') }}" alt="Best Bath" class="max-h-16 w-auto filter grayscale hover:grayscale-0 transition-all duration-300">
                </div>

                <!-- Partner Brand 4 -->
                <div class="brand-card bg-white rounded-xl p-6 flex items-center justify-center shadow-sm">
                    <img src="{{ asset('brands/bruno-logo-min.png') }}" alt="Bruno" class="max-h-16 w-auto filter grayscale hover:grayscale-0 transition-all duration-300">
                </div>

                <!-- Partner Brand 5 -->
                <div class="brand-card bg-white rounded-xl p-6 flex items-center justify-center shadow-sm">
                    <img src="{{ asset('brands/clean-cut-logo-min.png') }}" alt="CleanCut" class="max-h-16 w-auto filter grayscale hover:grayscale-0 transition-all duration-300">
                </div>

                <!-- Partner Brand 6 -->
                <div class="brand-card bg-white rounded-xl p-6 flex items-center justify-center shadow-sm">
                    <img src="{{ asset('brands/drive-logo-min.png') }}" alt="Drive" class="max-h-16 w-auto filter grayscale hover:grayscale-0 transition-all duration-300">
                </div>

                <!-- Partner Brand 7 -->
                <div class="brand-card bg-white rounded-xl p-6 flex items-center justify-center shadow-sm">
                    <img src="{{ asset('brands/handicare-logo-min.png') }}" alt="Handicare" class="max-h-16 w-auto filter grayscale hover:grayscale-0 transition-all duration-300">
                </div>

                <!-- Partner Brand 8 -->
                <div class="brand-card bg-white rounded-xl p-6 flex items-center justify-center shadow-sm">
                    <img src="{{ asset('brands/health-craft-min.png') }}" alt="HealthCraft" class="max-h-16 w-auto filter grayscale hover:grayscale-0 transition-all duration-300">
                </div>

                <!-- Partner Brand 9 -->
                <div class="brand-card bg-white rounded-xl p-6 flex items-center justify-center shadow-sm">
                    <img src="{{ asset('brands/livelwell-logo-min.png') }}" alt="Livelwell" class="max-h-16 w-auto filter grayscale hover:grayscale-0 transition-all duration-300">
                </div>

                <!-- Partner Brand 10 -->
                <div class="brand-card bg-white rounded-xl p-6 flex items-center justify-center shadow-sm">
                    <img src="{{ asset('brands/prism-medical-min.png') }}" alt="Prism Medical" class="max-h-16 w-auto filter grayscale hover:grayscale-0 transition-all duration-300">
                </div>
            </div>

            <!-- Our Associations -->
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 relative inline-block section-title">
                    Our Associations
                </h2>
                <p class="text-lg text-gray-600 mt-6 max-w-3xl mx-auto">
                    Proud members of leading industry organizations committed to excellence and safety
                </p>
            </div>

            <!-- Associations Logos -->
            <div class="flex flex-wrap justify-center gap-8 items-center">
                <!-- Association 1 -->
                <div class="brand-card bg-white rounded-xl p-8 flex items-center justify-center shadow-sm">
                    <img src="{{ asset('associate/bbb-logo-min.png') }}" alt="Better Business Bureau" class="max-h-24 w-auto filter grayscale hover:grayscale-0 transition-all duration-300">
                </div>

                <!-- Association 2 -->
                <div class="brand-card bg-white rounded-xl p-8 flex items-center justify-center shadow-sm">
                    <img src="{{ asset('associate/caps-cert-logo-min.png') }}" alt="CAPS Certification" class="max-h-24 w-auto filter grayscale hover:grayscale-0 transition-all duration-300">
                </div>

            </div>
        </div>
    </section>

    <!-- Statistics Section -->
    <section class="py-20 bg-gradient-to-br from-gray-50 to-gray-100">
        <div class="container mx-auto px-4">
            <div class="flex flex-col lg:flex-row items-center gap-16">
                <!-- Text and Stats -->
                <div class="w-full lg:w-1/2">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-6 relative">
                        Vancouver's Leading Provider of Home Accessibility Products
                        <span class="absolute -bottom-2 left-0 w-24 h-1 bg-gradient-to-r from-primary to-purple-600 rounded-full"></span>
                    </h2>
                    <p class="text-lg text-gray-600 mb-12 leading-relaxed">
                        Our commitment to making homes safer and more accessible has made a real difference in thousands of lives across British Columbia.
                    </p>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <!-- Stat 1 -->
                        <div class="stat-card text-center bg-white p-6 rounded-2xl shadow-lg border border-gray-200">
                            <div class="w-20 h-20 mx-auto mb-6 bg-gradient-to-br from-primary/10 to-purple-600/10 rounded-full flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-primary" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold text-gray-800 mb-3">Falls Prevented</h3>
                            <p class="text-4xl font-bold gradient-text mb-2">9,875+</p>
                            <p class="text-gray-600 text-sm">Safety installations</p>
                        </div>

                        <!-- Stat 2 -->
                        <div class="stat-card text-center bg-white p-6 rounded-2xl shadow-lg border border-gray-200">
                            <div class="w-20 h-20 mx-auto mb-6 bg-gradient-to-br from-primary/10 to-purple-600/10 rounded-full flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-primary" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold text-gray-800 mb-3">Cities Served</h3>
                            <p class="text-4xl font-bold gradient-text mb-2">82+</p>
                            <p class="text-gray-600 text-sm">Across BC</p>
                        </div>

                        <!-- Stat 3 -->
                        <div class="stat-card text-center bg-white p-6 rounded-2xl shadow-lg border border-gray-200">
                            <div class="w-20 h-20 mx-auto mb-6 bg-gradient-to-br from-primary/10 to-purple-600/10 rounded-full flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-primary" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold text-gray-800 mb-3">Home Sales Saved</h3>
                            <p class="text-4xl font-bold gradient-text mb-2">1,896+</p>
                            <p class="text-gray-600 text-sm">Prevented moves</p>
                        </div>
                    </div>
                </div>

                <!-- Image -->
                <div class="w-full lg:w-1/2">
                    <div class="bg-white rounded-2xl overflow-hidden shadow-xl border border-gray-200">
                        <img src="{{ asset('abt-company/shower-handrail-grab-bar-elderly-people-bathroom-hospital-retirement-home 1.png') }}"
                            alt="Vancouver's Leading Provider" class="w-full h-auto hover:scale-105 transition-transform duration-500">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 relative inline-block section-title">
                    What Our Clients Say
                </h2>
                <p class="text-lg text-gray-600 mt-6 max-w-3xl mx-auto">
                    Real experiences from families who've trusted us to make their homes safer and more accessible
                </p>
            </div>

            <!-- Testimonial Slider -->
            <div class="max-w-6xl mx-auto relative">
                <div class="swiper-container testimonial-slider overflow-hidden">
                    <div class="swiper-wrapper">
                        <!-- Testimonial 1 -->
                        <div class="swiper-slide">
                            <div class="testimonial-card bg-white rounded-2xl p-8 md:p-12 shadow-xl relative overflow-hidden">
                                <div class="flex flex-col items-center mb-8">
                                    <!-- Client Avatar -->
                                    <div class="w-24 h-24 bg-gradient-to-br from-primary/10 to-purple-600/10 rounded-full flex items-center justify-center mb-6 border-4 border-white shadow-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                            class="w-12 h-12 text-primary">
                                            <path fill-rule="evenodd"
                                                d="M7.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM3.751 20.105a8.25 8.25 0 0116.498 0 .75.75 0 01-.437.695A18.683 18.683 0 0112 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 01-.437-.695z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>

                                    <!-- Client Name -->
                                    <h4 class="text-2xl font-bold text-gray-900 mb-3">H. Hashimoto</h4>

                                    <!-- Star Rating -->
                                    <div class="flex space-x-1 text-yellow-400 mb-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                            <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                            <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                            <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                            <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                            <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </div>

                                <!-- Quotation Mark -->
                                <div class="absolute top-8 right-8 text-primary opacity-10">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M9.983 3v7.391c0 5.704-3.731 9.57-8.983 10.609l-.995-2.151c2.432-.917 3.995-3.638 3.995-5.849h-4v-10h9.983zm14.017 0v7.391c0 5.704-3.748 9.571-9 10.609l-.996-2.151c2.433-.917 3.996-3.638 3.996-5.849h-3.983v-10h9.983z" />
                                    </svg>
                                </div>

                                <!-- Testimonial Text -->
                                <div class="text-gray-700 text-lg leading-relaxed text-center relative z-10">
                                    <p class="text-xl">
                                        "I had 3 safety bars installed by Home2stay and the gentleman did a great job. He was very courteous and professional. He made sure the bars were exactly where I needed them before the installation. My appointment was between 10AM-11AM and the gentleman arrived at 9:50AM and was finished by 10:30AM."
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 2 -->
                        <div class="swiper-slide">
                            <div class="testimonial-card bg-white rounded-2xl p-8 md:p-12 shadow-xl relative overflow-hidden">
                                <div class="flex flex-col items-center mb-8">
                                    <!-- Client Avatar -->
                                    <div class="w-24 h-24 bg-gradient-to-br from-primary/10 to-purple-600/10 rounded-full flex items-center justify-center mb-6 border-4 border-white shadow-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                            class="w-12 h-12 text-primary">
                                            <path fill-rule="evenodd"
                                                d="M7.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM3.751 20.105a8.25 8.25 0 0116.498 0 .75.75 0 01-.437.695A18.683 18.683 0 0112 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 01-.437-.695z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>

                                    <!-- Client Name -->
                                    <h4 class="text-2xl font-bold text-gray-900 mb-3">B. Taylor</h4>

                                    <!-- Star Rating -->
                                    <div class="flex space-x-1 text-yellow-400 mb-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                            <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                            <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                            <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                            <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                            <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </div>

                                <!-- Quotation Mark -->
                                <div class="absolute top-8 right-8 text-primary opacity-10">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M9.983 3v7.391c0 5.704-3.731 9.57-8.983 10.609l-.995-2.151c2.432-.917 3.995-3.638 3.995-5.849h-4v-10h9.983zm14.017 0v7.391c0 5.704-3.748 9.571-9 10.609l-.996-2.151c2.433-.917 3.996-3.638 3.996-5.849h-3.983v-10h9.983z" />
                                    </svg>
                                </div>

                                <!-- Testimonial Text -->
                                <div class="text-gray-700 text-lg leading-relaxed text-center relative z-10">
                                    <p class="text-xl">
                                        "Home2stay was not only prompt in replying to my inquiry and quote request, they were very attentive and courteous every time we contacted them. We had 2 grab bars in the bathroom installed and a long handrail installed with care and attention to detail. Our experience with Home2stay was wonderful."
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pagination -->
                    <div class="swiper-pagination mt-12"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 cta-gradient text-white relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute inset-0" style="background-image: radial-gradient(circle at 25% 25%, white 1px, transparent 1px), radial-gradient(circle at 75% 75%, white 1px, transparent 1px); background-size: 50px 50px;"></div>
        </div>
        
        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-5xl mx-auto text-center">
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-8 leading-tight">
                    Get All the Things You Need for Your Accessible Bathroom in Canada from Home2stay Today!
                </h2>
                <p class="text-xl md:text-2xl mb-12 opacity-95 leading-relaxed max-w-4xl mx-auto">
                    Home2stay can provide your family with all the things you need for an accessible bathroom in Canada. 
                    We service different areas in Canada including Vancouver, Surrey, Port Moody, Tricities, Delta, and Maple Ridge.
                </p>
                
                <!-- Key Features -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
                    <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 border border-white/20">
                        <div class="w-16 h-16 mx-auto mb-4 bg-white/20 rounded-full flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold mb-2">Quick Installation</h3>
                        <p class="text-white/90">Professional same-day service available</p>
                    </div>
                    
                    <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 border border-white/20">
                        <div class="w-16 h-16 mx-auto mb-4 bg-white/20 rounded-full flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold mb-2">20+ Years Experience</h3>
                        <p class="text-white/90">Trusted by thousands of families</p>
                    </div>
                    
                    <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 border border-white/20">
                        <div class="w-16 h-16 mx-auto mb-4 bg-white/20 rounded-full flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold mb-2">Free Assessment</h3>
                        <p class="text-white/90">No obligation consultation</p>
                    </div>
                </div>
                
                <div class="flex flex-wrap justify-center gap-6">
                    <a href="{{ route('contact') }}"
                        class="px-10 py-4 bg-white text-primary hover:bg-gray-100 rounded-xl font-bold text-lg transition duration-300 transform hover:scale-105 shadow-lg">
                        Contact Us Today
                    </a>
                    <a href="tel:+16042393662"
                        class="px-10 py-4 bg-transparent border-2 border-white text-white hover:bg-white/20 rounded-xl font-bold text-lg transition duration-300 transform hover:scale-105">
                        📞 Call (604) 239-3662
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
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
            button.classList.add('bg-white', 'text-primary', 'border-2', 'border-primary');
        });

        // Style active button
        const activeButton = document.querySelector('#year-nav-' + year + ' .year-button');
        if (activeButton) {
            activeButton.classList.add('active-year');
            activeButton.classList.remove('bg-white', 'text-primary', 'border-2', 'border-primary');
            activeButton.classList.add('bg-primary', 'text-white');
        }
    }

    // Initialize when document is loaded
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize Testimonials Swiper
        const testimonialSwiper = new Swiper('.testimonial-slider', {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            autoplay: {
                delay: 6000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            effect: 'fade',
            fadeEffect: {
                crossFade: true
            },
            breakpoints: {
                640: {
                    effect: 'slide'
                }
            }
        });

        // Add smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Add intersection observer for fade-in animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observe all stat cards and brand cards
        document.querySelectorAll('.stat-card, .brand-card, .timeline-content').forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(20px)';
            el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(el);
        });
    });
</script>
@endpush