@extends('layouts.app')

@section('title', 'Home Page')
@section('meta_description', 'Welcome to our website - providing quality services.')

@section('content')
    <style>
        .section-title::after {
            content: '';
            position: absolute;
            width: 70px;
            height: 3px;
            background-color: #0078bf;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
        }

        /* Image Hero Styles */
        .image-hero {
            position: relative;
            height: 80vh;
            min-height: 500px;
            overflow: hidden;
        }

        .video-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: 1;
        }

        .image-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(0, 121, 191, 0.33) 0%, rgba(0, 60, 95, 0.9) 100%);
            z-index: 2;
        }

        .hero-content {
            position: relative;
            z-index: 10;
            height: 100%;
        }

        .contact-form-container {
            position: relative;
            z-index: 10;
            background-color: rgba(255, 255, 255, 0.97);
            border-radius: 0.5rem;
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
            padding: 2rem;
            width: 100%;
            max-width: 400px;
            border-top: 4px solid #f8b301;
        }

        .slide-text {
            position: relative;
            z-index: 5;
        }

        .slider-controls {
            position: absolute;
            bottom: 2rem;
            left: 0;
            right: 0;
            z-index: 20;
            display: flex;
            justify-content: center;
            gap: 0.5rem;
        }

        .slider-dot {
            width: 14px;
            height: 14px;
            border-radius: 50%;
            background-color: rgba(255, 255, 255, 0.5);
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .slider-dot.active {
            background-color: #f8b301;
            transform: scale(1.2);
        }

        .slider-arrow {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            z-index: 30;
            width: 48px;
            height: 48px;
            border-radius: 50%;
            background-color: rgba(255, 255, 255, 0.9);
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }

        .slider-arrow:hover {
            background-color: #0078bf;
            color: white;
        }

        .slider-arrow.prev {
            left: 1rem;
        }

        .slider-arrow.next {
            right: 1rem;
        }

        .accent-border-left {
            border-left: 4px solid #d40000;
        }

        .accent-border-right {
            border-right: 4px solid #d40000;
        }

        .gradient-bg {
            background: linear-gradient(135deg, #0078bf 0%, #005f96 100%);
        }

        .btn-primary {
            background-color: #0078bf;
            color: white;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #005f96;
        }

        .btn-secondary {
            background-color: #f8b301;
            color: #333;
            transition: all 0.3s ease;
        }

        .btn-secondary:hover {
            background-color: #d99a00;
        }

        .btn-accent {
            background-color: #d40000;
            color: white;
            transition: all 0.3s ease;
        }

        .btn-accent:hover {
            background-color: #aa0000;
        }
    </style>

    <!-- Image Hero Section -->
    <section class="image-hero">
        <!-- Video Background -->
        <video class="video-background" autoplay muted loop playsinline preload="auto">
            <source src="{{ asset('h-video/main-page-lower-res-2-new.mp4') }}" type="video/mp4">
            <!-- Fallback image if video doesn't load -->
            <img src="https://images.pexels.com/photos/3184360/pexels-photo-3184360.jpeg" alt="Hero background">
        </video>

        <!-- Dark overlay -->
        <div class="image-overlay"></div>

        <!-- Content -->
        <div class="hero-content container mx-auto px-4 h-full flex items-center" style="position: relative; z-index: 5;">
            <div class="flex flex-col lg:flex-row items-center justify-between w-full">
                <div class="text-white max-w-2xl lg:mr-8">
                    <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6">Home2stay provides Accessibility Solutions,
                        Home Safety Improvements with a Universal Design!</h1>
                    <p class="text-xl mb-8 text-gray-100">We help you regain safety and independence in your space to help
                        you and your loved ones stay safe, even at home.</p>
                    <div class="flex flex-wrap gap-4">
                        <a href="/services"
                            class="btn-primary px-6 py-3 rounded-lg font-medium transition duration-300 inline-flex items-center">
                            Our Services
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                        <a href="/about"
                            class="bg-white hover:bg-gray-100 text-gray-900 px-6 py-3 rounded-lg font-medium transition duration-300">Learn
                            More</a>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="contact-form-container mt-10 lg:mt-0">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Get In Touch</h3>
                    <p class="text-gray-600 mb-6">Fill out the form below and we'll get back to you soon.</p>
                    <form>
                        <div class="mb-4">
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Your Name</label>
                            <input type="text" id="name" name="name"
                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                        </div>
                        <div class="mb-4">
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                            <input type="email" id="email" name="email"
                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                        </div>
                        <div class="mb-4">
                            <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Message</label>
                            <textarea id="message" name="message" rows="3"
                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent"></textarea>
                        </div>
                        <button type="submit" class="w-full btn-primary py-2 px-4 rounded-md transition duration-300">Send
                            Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Mobility Products Section -->
    <section class="bg-gray-100 py-16">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold relative inline-block mb-12 section-title">Accessibility Solutions for Your
                    Home</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Our wide range of quality products such as , grab bars, bathroom
                    safety equipment, ramps, and more are designed to enhance accessibility and aesthetics, making everyday
                    home life easier for people of all ages and abilities.</p>
            </div>
            <div class="flex flex-col lg:flex-row">
                <!-- Grid of products (Left side) -->
                <div class="lg:w-3/3 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div
                        class="bg-white rounded-lg shadow-md p-6 flex flex-col items-center text-center transform transition duration-300 hover:-translate-y-2 h-full">
                        <div class="mb-4 w-50 h-50 flex items-center justify-center">
                            <img src="{{ asset('hprodbanner/Barrier-Free-Bathrooms.png') }}" alt="Barrier-Free Bathrooms"
                                class="w-full h-full object-cover">
                        </div>
                        <h3 class="text-lg font-bold mb-1">Barrier-Free Bathrooms</h3>
                        <p class="text-gray-600 mb-auto">Create a safe and accessible oasis with our , thoughtfully designed
                            to accommodate all mobility needs. Enjoy the freedom of movement and the comfort of an inclusive
                            bathing space.</p>
                        <a href="#"
                            class="mt-4 inline-flex items-center px-4 py-2 border border-primary text-primary rounded-md hover:bg-primary hover:text-white transition-colors">
                            <span>See More</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>

                    <div
                        class="bg-white rounded-lg shadow-md p-6 flex flex-col items-center text-center transform transition duration-300 hover:-translate-y-2 h-full">
                        <div class="mb-4 w-50 h-50 flex items-center justify-center">
                            <img src="{{ asset('hprodbanner/Grab Bars.png') }}" alt="Grab Bars"
                                class="w-full h-full object-cover">
                        </div>
                        <h3 class="text-lg font-bold mb-1">Grab Bars</h3>
                        <p class="text-gray-600 mb-auto">Elevate bathroom safety with our sturdy and stylish grab bars,
                            providing essential support for confident maneuvering. These ergonomic accessories offer peace
                            of mind and independence in your daily routines.</p>
                        <a href="#"
                            class="mt-4 inline-flex items-center px-4 py-2 border border-primary text-primary rounded-md hover:bg-primary hover:text-white transition-colors">
                            <span>See More</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>

                    <div
                        class="bg-white rounded-lg shadow-md p-6 flex flex-col items-center text-center transform transition duration-300 hover:-translate-y-2 h-full">
                        <div class="mb-4 w-50 h-50 flex items-center justify-center">
                            <img src="{{ asset('hprodbanner/Stairlifts.png') }}" alt="Stairlifts"
                                class="w-full h-full object-cover">
                        </div>
                        <h3 class="text-lg font-bold mb-1">Stairlifts</h3>
                        <p class="text-gray-600 mb-auto">Glide effortlessly between levels with our reliable stairlifts,
                            designed to empower individuals with limited mobility to navigate their homes with ease and
                            comfort.</p>
                        <a href="#"
                            class="mt-4 inline-flex items-center px-4 py-2 border border-primary text-primary rounded-md hover:bg-primary hover:text-white transition-colors">
                            <span>See More</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>

                    <div
                        class="bg-white rounded-lg shadow-md p-6 flex flex-col items-center text-center transform transition duration-300 hover:-translate-y-2 h-full">
                        <div class="mb-4 w-50 h-50 flex items-center justify-center">
                            <img src="{{ asset('hprodbanner/Ramps.png') }}" alt="Ramps" class="w-full h-full object-cover">
                        </div>
                        <h3 class="text-lg font-bold mb-1">Ramps</h3>
                        <p class="text-gray-600 mb-auto">Embrace accessibility with our versatile ramps, a practical
                            solution to conquer elevation changes. Whether indoors or outdoors, these sturdy ramps ensure
                            smooth and barrier-free transitions.</p>
                        <a href="#"
                            class="mt-4 inline-flex items-center px-4 py-2 border border-primary text-primary rounded-md hover:bg-primary hover:text-white transition-colors">
                            <span>See More</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                    <div
                        class="bg-white rounded-lg shadow-md p-6 flex flex-col items-center text-center transform transition duration-300 hover:-translate-y-2 h-full">
                        <div class="mb-4 w-50 h-50 flex items-center justify-center">
                            <img src="{{ asset('hprodbanner/Tub Cuts.png') }}" alt="Tub Cuts"
                                class="w-full h-full object-cover">
                        </div>
                        <h3 class="text-lg font-bold mb-1">Tub Cuts</h3>
                        <p class="text-gray-600 mb-auto">Transform your bathtub into an accessible oasis with our , offering
                            a convenient and cost-effective alternative to traditional bathing solutions for individuals
                            with mobility challenges.</p>
                        <a href="#"
                            class="mt-4 inline-flex items-center px-4 py-2 border border-primary text-primary rounded-md hover:bg-primary hover:text-white transition-colors">
                            <span>See More</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                    <div
                        class="bg-white rounded-lg shadow-md p-6 flex flex-col items-center text-center transform transition duration-300 hover:-translate-y-2 h-full">
                        <div class="mb-4 w-50 h-50 flex items-center justify-center">
                            <img src="{{ asset('hprodbanner/Safety-Poles-Handrails.png') }}" alt="Safety Poles & Handrails"
                                class="w-full h-full object-cover">
                        </div>
                        <h3 class="text-lg font-bold mb-1">Safety Poles & Handrails</h3>
                        <p class="text-gray-600 mb-auto">Enhance safety and stability with our safety poles and handrails,
                            thoughtfully designed to provide crucial support in various areas of your home. These essential
                            accessories offer a secure and reassuring grip for all family members.</p>
                        <a href="#"
                            class="mt-4 inline-flex items-center px-4 py-2 border border-primary text-primary rounded-md hover:bg-primary hover:text-white transition-colors">
                            <span>See More</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Step by Step Process Section -->
    <section class="py-20 bg-gray-50 relative overflow-hidden">
        <!-- Abstract Circles Background -->
        <div class="absolute inset-0 pointer-events-none opacity-10">
            <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
                <!-- Large circle top left -->
                <circle cx="5%" cy="15%" r="120" fill="#0078bf" opacity="0.5" />

                <!-- Medium circle top right -->
                <circle cx="90%" cy="10%" r="80" fill="#f8b301" opacity="0.5" />

                <!-- Small circle middle left -->
                <circle cx="15%" cy="50%" r="40" fill="#d40000" opacity="0.5" />

                <!-- Large circle bottom right -->
                <circle cx="85%" cy="85%" r="150" fill="#0078bf" opacity="0.5" />

                <!-- Medium circle middle right -->
                <circle cx="75%" cy="45%" r="60" fill="#f8b301" opacity="0.5" />

                <!-- Small circle bottom left -->
                <circle cx="20%" cy="80%" r="25" fill="#d40000" opacity="0.5" />
            </svg>
        </div>

        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold relative inline-block mb-12 section-title">Why Choose Us?</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Choose us for our unwavering commitment to accessible living
                    solutions that transform homes into safe and inclusive spaces. With a dedicated team and a wide range of
                    premium products, we are the trusted partner in elevating your home to new heights of accessibility and
                    comfort.</p>
            </div>

            <div class="relative">
                <!-- Timeline Line -->
                <div class="absolute left-1/2 transform -translate-x-1/2 h-full w-1 bg-secondary"></div>

                <!-- Step 1 -->
                <div class="relative z-10 mb-16">
                    <div class="flex flex-col md:flex-row items-center">
                        <!-- Content Left Side -->
                        <div class="md:w-1/2 md:pr-12 mb-8 md:mb-0">
                            <div
                                class="bg-white p-6 rounded-lg shadow-md border-l-4 border-primary md:ml-auto md:mr-0 max-w-md">
                                <div class="flex items-center">
                                    <div class="flex-1 pr-4">
                                        <h5 class="text-xl font-bold mb-3">12,344</h5>
                                        <p class="text-gray-600">Falls Prevented</p>
                                    </div>
                                    <div class="w-16 h-16 flex-shrink-0">
                                        <img class="bg-black p-2 rounded w-full h-full object-contain"
                                            src="{{ asset('h-wc/Falls-Prevented-min.png') }}" alt="Falls Prevented">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Number Indicator -->
                        <div
                            class="absolute left-1/2 transform -translate-x-1/2 -translate-y-1/2 flex items-center justify-center w-12 h-12 rounded-full bg-primary text-white font-bold text-xl border-4 border-white shadow-md">
                            1
                        </div>

                        <!-- Empty Right Side (for alignment) -->
                        <div class="md:w-1/2 md:pl-12">
                            <div class="h-4 w-4 rounded-full bg-secondary md:ml-0 md:mr-auto invisible md:visible"></div>
                        </div>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="relative z-10 mb-16">
                    <div class="flex flex-col md:flex-row items-center">
                        <!-- Empty Left Side (for alignment) -->
                        <div class="md:w-1/2 md:pr-12">
                            <div class="h-4 w-4 rounded-full bg-secondary md:ml-auto md:mr-0 invisible md:visible"></div>
                        </div>

                        <!-- Number Indicator -->
                        <div
                            class="absolute left-1/2 transform -translate-x-1/2 -translate-y-1/2 flex items-center justify-center w-12 h-12 rounded-full bg-primary text-white font-bold text-xl border-4 border-white shadow-md">
                            2
                        </div>

                        <!-- Content Right Side -->
                        <div class="md:w-1/2 md:pl-12">
                            <div
                                class="bg-white p-6 rounded-lg shadow-md border-r-4 border-secondary md:ml-0 md:mr-auto max-w-md">
                                <div class="flex items-center">
                                    <div class="flex-1 pr-4">
                                        <h5 class="text-xl font-bold mb-3">103</h5>
                                        <p class="text-gray-600">Cities Served</p>
                                    </div>
                                    <div class="w-16 h-16 flex-shrink-0">
                                        <img class="bg-black p-2 rounded w-full h-full object-contain"
                                            src="{{ asset('h-wc/Cities-Served-min.png') }}" alt="Cities Served">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="relative z-10 mb-16">
                    <div class="flex flex-col md:flex-row items-center">
                        <!-- Content Left Side -->
                        <div class="md:w-1/2 md:pr-12 mb-8 md:mb-0">
                            <div
                                class="bg-white p-6 rounded-lg shadow-md border-l-4 border-accent md:ml-auto md:mr-0 max-w-md">
                                <div class="flex items-center">
                                    <div class="flex-1 pr-4">
                                        <h5 class="text-xl font-bold mb-3">2,370</h5>
                                        <p class="text-gray-600">Home Sales Cancelled</p>
                                    </div>
                                    <div class="w-16 h-16 flex-shrink-0">
                                        <img class="bg-black p-2 rounded w-full h-full object-contain"
                                            src="{{ asset('h-wc/Home-Sales-Cancelled-min.png') }}"
                                            alt="Home Sales Cancelled">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Number Indicator -->
                        <div
                            class="absolute left-1/2 transform -translate-x-1/2 -translate-y-1/2 flex items-center justify-center w-12 h-12 rounded-full bg-primary text-white font-bold text-xl border-4 border-white shadow-md">
                            3
                        </div>

                        <!-- Empty Right Side (for alignment) -->
                        <div class="md:w-1/2 md:pl-12">
                            <div class="h-4 w-4 rounded-full bg-secondary md:ml-0 md:mr-auto invisible md:visible"></div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="mt-16 text-center">
                <a href="/contact"
                    class="inline-block btn-primary px-6 py-3 rounded-lg font-medium transition duration-300">
                    Start Your Journey Today
                </a>
            </div>
        </div>
    </section>

    <!-- Impact Statistics Section -->
    <section class="impact-section relative mt-5">
        <!-- Stats Box - Yellow Background -->



        <!-- Dark Background Section with Message -->
        <div class="gradient-bg pt-24 pb-16 relative">
            <div class="absolute inset-0 bg-black opacity-50 z-0">
                <!-- Background overlay -->
            </div>

            <div class="container mx-auto px-4 relative z-10 text-center">
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">Book a FREE assessment with Home2stay!</h2>
                <p class="text-xl text-white mb-10 max-w-3xl mx-auto">
                    Vancouver's leading provider of home accessibility products
                </p>

                <a href="/contact"
                    class="inline-flex items-center px-8 py-4 bg-secondary text-gray-900 font-bold rounded-full hover:bg-secondary-dark transition duration-300">
                    Book Now
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Promotional Sections -->
    <section class="promotional-section mt-5">
        <div class="container mx-auto">
            <!-- Top Section - Yellow Background with Stairlift -->
            <div class="bg-secondary">
                <div class="container mx-auto">
                    <div class="flex flex-col md:flex-row items-center">


                        <!-- Image Side -->
                        <div class="w-full md:w-1/2 bg-gray-200">
                            <img src="{{ asset('h-banner/Bathroom-Remodeling-Service-min.png') }}"
                                alt="Person using a stairlift" class="w-full h-full object-cover">
                        </div>
                        <!-- Text Content -->
                        <div class="w-full md:w-1/2 p-8 md:p-12 lg:p-16">
                            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Transform Your Bathroom with
                                Home2stay Remodeling Solutions</h2>
                            <p class="text-gray-800 mb-8">
                                Experience luxury and functionality with Home2stay's expert remodeling. From sleek
                                conversions to custom fixtures, we create modern retreats tailored to your style. Our team
                                ensures attention to detail and customer satisfaction. Let us bring your dream bathroom to
                                life.
                            </p>
                            <a href="/products"
                                class="inline-flex items-center px-6 py-3 bg-primary text-white font-medium rounded-full hover:bg-primary-dark transition duration-300">
                                Start Your Transformation
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Our Partners and Associations Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
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
                    <img src="{{ asset('brands/american-tubs-logo-min.png') }}" alt="Partner Brand 1"
                        class="max-h-16 w-auto">
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

    <!-- What We Do Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold relative inline-block mb-12 section-title">What We Do</h2>
            </div>

            <!-- Slider Container -->
            <div class="max-w-full mx-auto mb-12 relative">
                <!-- Swiper Slider -->
                <div class="swiper-container what-we-do-slider overflow-hidden rounded-lg">
                    <div class="swiper-wrapper">
                        <!-- Slide 1 -->
                        <div class="swiper-slide">
                            <div
                                class="relative rounded-xl overflow-hidden transition-all duration-300 shadow-lg bg-gray-100 h-80 md:h-[400px]">
                                <img src="{{ asset('h-slider/carousel-img-1-min.png') }}" alt="Home Accessibility Solutions"
                                    class="w-full h-full object-contain">
                                <div
                                    class="slide-overlay absolute inset-0 bg-gradient-to-r from-black/70 to-black/40 transition-opacity duration-300">
                                </div>
                            </div>
                        </div>

                        <!-- Slide 2 -->
                        <div class="swiper-slide">
                            <div
                                class="relative rounded-xl overflow-hidden transition-all duration-300 shadow-lg bg-gray-100 h-80 md:h-[400px]">
                                <img src="{{ asset('h-slider/Carousel-item-4-min.jpg') }}" alt="Bathroom Modifications"
                                    class="w-full h-full object-contain">
                                <div
                                    class="slide-overlay absolute inset-0 bg-gradient-to-r from-black/70 to-black/40 transition-opacity duration-300">
                                </div>
                            </div>
                        </div>

                        <!-- Slide 3 -->
                        <div class="swiper-slide">
                            <div
                                class="relative rounded-xl overflow-hidden transition-all duration-300 shadow-lg bg-gray-100 h-80 md:h-[400px]">
                                <img src="{{ asset('h-slider/Carousel-item-3-min.jpg') }}" alt="Mobility Solutions"
                                    class="w-full h-full object-contain">
                                <div
                                    class="slide-overlay absolute inset-0 bg-gradient-to-r from-black/70 to-black/40 transition-opacity duration-300">
                                </div>
                            </div>
                        </div>

                        <!-- Slide 4 -->
                        <div class="swiper-slide">
                            <div
                                class="relative rounded-xl overflow-hidden transition-all duration-300 shadow-lg bg-gray-100 h-80 md:h-[400px]">
                                <img src="{{ asset('h-slider/Carousel-item-2-min.jpg') }}" alt="Home Safety Assessments"
                                    class="w-full h-full object-contain">
                                <div
                                    class="slide-overlay absolute inset-0 bg-gradient-to-r from-black/70 to-black/40 transition-opacity duration-300">
                                </div>
                            </div>
                        </div>
                        <!-- Slide 5 -->
                        <div class="swiper-slide">
                            <div
                                class="relative rounded-xl overflow-hidden transition-all duration-300 shadow-lg bg-gray-100 h-80 md:h-[400px]">
                                <img src="{{ asset('h-slider/Carousel-item-5-min.jpg') }}" alt="Home Safety Assessments"
                                    class="w-full h-full object-contain">
                                <div
                                    class="slide-overlay absolute inset-0 bg-gradient-to-r from-black/70 to-black/40 transition-opacity duration-300">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Navigation Buttons -->
                    <div
                        class="swiper-button-next absolute right-4 md:right-10 top-1/2 transform -translate-y-1/2 z-10 bg-white text-primary rounded-full w-10 h-10 md:w-14 md:h-14 flex items-center justify-center shadow-md cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            class="w-5 h-5 md:w-7 md:h-7">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </div>
                    <div
                        class="swiper-button-prev absolute left-4 md:left-10 top-1/2 transform -translate-y-1/2 z-10 bg-white text-primary rounded-full w-10 h-10 md:w-14 md:h-14 flex items-center justify-center shadow-md cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            class="w-5 h-5 md:w-7 md:h-7">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </div>

                    <!-- Pagination -->
                    <div class="swiper-pagination bottom-4 absolute z-10"></div>
                </div>
            </div>

            <!-- Description -->
            <div class="max-w-3xl mx-auto text-center">
                <p class="text-lg text-gray-700 mb-8">
                    At Home2stay, we're dedicated to transforming homes into accessible, safe, and comfortable environments
                    for people of all ages and abilities. Our comprehensive range of accessibility solutions and
                    modifications are designed to promote independence, enhance quality of life, and allow individuals to
                    remain in their homes longer. From bathroom modifications and mobility aids to custom accessibility
                    solutions, our team of experts works closely with clients to deliver tailored solutions that meet their
                    specific needs and preferences.
                </p>

                <a href="/about"
                    class="inline-flex items-center px-6 py-3 bg-primary text-white font-medium rounded-lg hover:bg-primary-dark transition duration-300">
                    Learn More About Home2stay
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
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

                    <!-- Navigation Buttons -->
                    <div
                        class="swiper-button-next absolute -right-2 md:right-2 top-1/2 transform -translate-y-1/2 z-10 bg-white text-primary rounded-full w-10 h-10 md:w-12 md:h-12 flex items-center justify-center shadow-md cursor-pointer border border-gray-100">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </div>
                    <div
                        class="swiper-button-prev absolute -left-2 md:left-2 top-1/2 transform -translate-y-1/2 z-10 bg-white text-primary rounded-full w-10 h-10 md:w-12 md:h-12 flex items-center justify-center shadow-md cursor-pointer border border-gray-100">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Repair Request Form Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4 max-w-4xl">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold relative inline-block mb-12 section-title">Schedule a Repair Today</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Getting support is quick and easy. Complete this form or contact
                    a Home2stay location for availability, additional details, and pricing.</p>
            </div>

            <!-- Multi-step Form Container -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                <!-- Form Progress Indicator -->
                <div class="bg-gray-100 py-4 px-6">
                    <div class="flex justify-between">
                        <div class="flex items-center">
                            <div id="step-indicator-1"
                                class="w-8 h-8 rounded-full bg-primary text-white flex items-center justify-center font-bold">
                                1</div>
                            <div class="ml-2 text-sm font-medium">Repair Details</div>
                        </div>
                        <div class="flex-1 mx-4 hidden md:block">
                            <div class="h-1 bg-gray-300 relative top-4">
                                <div id="progress-bar" class="h-1 bg-primary w-0 transition-all duration-300"></div>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div id="step-indicator-2"
                                class="w-8 h-8 rounded-full bg-gray-300 text-gray-600 flex items-center justify-center font-bold">
                                2</div>
                            <div class="ml-2 text-sm font-medium text-gray-500">Your Info</div>
                        </div>
                        <div class="flex-1 mx-4 hidden md:block">
                            <div class="h-1 bg-gray-300 relative top-4"></div>
                        </div>
                        <div class="flex items-center">
                            <div id="step-indicator-3"
                                class="w-8 h-8 rounded-full bg-gray-300 text-gray-600 flex items-center justify-center font-bold">
                                3</div>
                            <div class="ml-2 text-sm font-medium text-gray-500">Contact</div>
                        </div>
                        <div class="flex-1 mx-4 hidden md:block">
                            <div class="h-1 bg-gray-300 relative top-4"></div>
                        </div>
                        <div class="flex items-center">
                            <div id="step-indicator-4"
                                class="w-8 h-8 rounded-full bg-gray-300 text-gray-600 flex items-center justify-center font-bold">
                                4</div>
                            <div class="ml-2 text-sm font-medium text-gray-500">Summary</div>
                        </div>
                    </div>
                </div>

                <!-- Form Content -->
                <form id="repair-form" class="p-6 md:p-8">
                    <!-- Step 1: Repair Details -->
                    <div id="step-1" class="form-step">
                        <h3 class="text-xl font-bold mb-6">Step 1 of 4 – What are you looking to repair?</h3>

                        <div class="mb-6">
                            <label for="product" class="block text-sm font-medium text-gray-700 mb-1">Enter your
                                product*</label>
                            <input type="text" id="product" name="product"
                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent"
                                required>
                        </div>

                        <div class="mb-6">
                            <label for="repair-details" class="block text-sm font-medium text-gray-700 mb-1">Repair or
                                maintenance inquiry details*</label>
                            <textarea id="repair-details" name="repair-details" rows="3"
                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent"
                                required></textarea>
                        </div>

                        <div class="mb-6">
                            <label class="block text-sm font-medium text-gray-700 mb-1">Select a location for the
                                service*</label>
                            <div class="space-y-2">
                                <label class="flex items-center">
                                    <input type="radio" name="service-location" value="motion-location" class="mr-2"
                                        checked>
                                    <span>At a Home2stay location</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="radio" name="service-location" value="home-facility" class="mr-2">
                                    <span>At your home / care facility</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="radio" name="service-location" value="virtual" class="mr-2">
                                    <span>Virtual appointment; if available</span>
                                </label>
                            </div>
                        </div>

                        <div class="mb-6">
                            <label class="block text-sm font-medium text-gray-700 mb-1">Did you purchase the product from
                                Home2stay?*</label>
                            <div class="space-y-2">
                                <label class="flex items-center">
                                    <input type="radio" name="purchased-from-motion" value="yes" class="mr-2" checked>
                                    <span>Yes</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="radio" name="purchased-from-motion" value="no" class="mr-2">
                                    <span>No</span>
                                </label>
                            </div>
                        </div>

                        <div class="flex justify-end">
                            <button type="button"
                                class="next-step bg-primary hover:bg-primary-dark text-white px-6 py-2 rounded font-medium transition duration-300 flex items-center">
                                Next
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>
                    </div>

                    <!-- Step 2: Client Information -->
                    <div id="step-2" class="form-step hidden">
                        <h3 class="text-xl font-bold mb-6">Step 2 of 4 - Can we get your information?</h3>

                        <!-- Summary of previous step -->
                        <div class="mb-6 p-4 bg-gray-50 rounded-lg">
                            <div class="flex justify-between items-center mb-2">
                                <h4 class="font-medium">What are you looking to repair?</h4>
                                <button type="button"
                                    class="go-to-step text-primary hover:text-primary-dark text-sm font-medium"
                                    data-step="1">
                                    Edit
                                </button>
                            </div>
                            <div id="step1-summary" class="text-sm text-gray-600 space-y-1">
                                <!-- Will be filled by JavaScript -->
                            </div>
                        </div>

                        <div class="mb-6">
                            <label class="block text-sm font-medium text-gray-700 mb-1">Who are you?*</label>
                            <div class="space-y-2">
                                <label class="flex items-center">
                                    <input type="radio" name="client-type" value="new" class="mr-2" checked>
                                    <span>I am a new client</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="radio" name="client-type" value="existing" class="mr-2">
                                    <span>I am an existing client</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="radio" name="client-type" value="representing" class="mr-2">
                                    <span>I am representing a client</span>
                                </label>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <div>
                                <label for="first-name" class="block text-sm font-medium text-gray-700 mb-1">First
                                    name*</label>
                                <input type="text" id="first-name" name="first-name"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent"
                                    required>
                            </div>
                            <div>
                                <label for="last-name" class="block text-sm font-medium text-gray-700 mb-1">Last
                                    name*</label>
                                <input type="text" id="last-name" name="last-name"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent"
                                    required>
                            </div>
                        </div>

                        <div class="mb-6">
                            <label for="location" class="block text-sm font-medium text-gray-700 mb-1">Select a location
                                near you*</label>
                            <select id="location" name="location"
                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent"
                                required>
                                <option value="">Choose a location</option>
                                <option value="Barrie">Barrie</option>
                                <option value="Toronto">Toronto</option>
                                <option value="Vancouver">Vancouver</option>
                                <option value="Calgary">Calgary</option>
                                <option value="Montreal">Montreal</option>
                            </select>
                        </div>

                        <div class="flex justify-between">
                            <button type="button"
                                class="prev-step bg-gray-300 hover:bg-gray-400 text-gray-800 px-6 py-2 rounded font-medium transition duration-300 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                                Back
                            </button>
                            <button type="button"
                                class="next-step bg-primary hover:bg-primary-dark text-white px-6 py-2 rounded font-medium transition duration-300 flex items-center">
                                Next
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>
                    </div>

                    <!-- Step 3: Contact Information -->
                    <div id="step-3" class="form-step hidden">
                        <h3 class="text-xl font-bold mb-6">Step 3 of 4 - How can we contact you?</h3>

                        <!-- Summary of previous steps -->
                        <div class="mb-6 p-4 bg-gray-50 rounded-lg">
                            <div class="flex justify-between items-center mb-2">
                                <h4 class="font-medium">What are you looking to repair?</h4>
                                <button type="button"
                                    class="go-to-step text-primary hover:text-primary-dark text-sm font-medium"
                                    data-step="1">
                                    Edit
                                </button>
                            </div>
                            <div id="step1-summary-2" class="text-sm text-gray-600 space-y-1 mb-4">
                                <!-- Will be filled by JavaScript -->
                            </div>

                            <div class="flex justify-between items-center mb-2">
                                <h4 class="font-medium">Can we get your information?</h4>
                                <button type="button"
                                    class="go-to-step text-primary hover:text-primary-dark text-sm font-medium"
                                    data-step="2">
                                    Edit
                                </button>
                            </div>
                            <div id="step2-summary" class="text-sm text-gray-600 space-y-1">
                                <!-- Will be filled by JavaScript -->
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <div>
                                <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Enter phone
                                    number*</label>
                                <input type="tel" id="phone" name="phone"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent"
                                    required>
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Enter email*</label>
                                <input type="email" id="email" name="email"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent"
                                    required>
                            </div>
                        </div>

                        <div class="mb-6">
                            <label class="block text-sm font-medium text-gray-700 mb-1">What is your preferred method of
                                contact?*</label>
                            <div class="space-y-2">
                                <label class="flex items-center">
                                    <input type="radio" name="contact-method" value="phone" class="mr-2" checked>
                                    <span>Via phone call</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="radio" name="contact-method" value="email" class="mr-2">
                                    <span>Via email</span>
                                </label>
                            </div>
                        </div>

                        <div class="mb-6">
                            <label class="block text-sm font-medium text-gray-700 mb-1">Marketing communications
                                consent*</label>
                            <div class="space-y-2">
                                <label class="flex items-start">
                                    <input type="checkbox" name="marketing-consent" class="mr-2 mt-1">
                                    <span class="text-sm text-gray-600">Yes, I would like to receive communications from
                                        Home2stay, including product information, educational opportunities and promotional
                                        offers. You can unsubscribe at any time. View our privacy & security policy for
                                        details.</span>
                                </label>
                            </div>
                        </div>

                        <div class="mb-6 text-xs text-gray-500">
                            <p>By clicking "Review Form," you confirm you have read and agree to Home2stay's Privacy Policy
                                and Terms of Service. Data collected is shared with a third-party processor for the purpose
                                of reporting and analytics. Data collected will not be sold. Alternatively, you may contact
                                a Home2stay location to provide your information by phone or email.</p>
                        </div>

                        <div class="flex justify-between">
                            <button type="button"
                                class="prev-step bg-gray-300 hover:bg-gray-400 text-gray-800 px-6 py-2 rounded font-medium transition duration-300 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                                Back
                            </button>
                            <button type="button"
                                class="next-step bg-primary hover:bg-primary-dark text-white px-6 py-2 rounded font-medium transition duration-300 flex items-center">
                                Review Form
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>
                    </div>

                    <!-- Step 4: Summary and Submit -->
                    <div id="step-4" class="form-step hidden">
                        <h3 class="text-xl font-bold mb-6">Step 4 of 4 - Summary</h3>

                        <!-- Summary of all steps -->
                        <div class="mb-6 p-4 bg-gray-50 rounded-lg">
                            <div class="flex justify-between items-center mb-2">
                                <h4 class="font-medium">What are you looking to repair?</h4>
                                <button type="button"
                                    class="go-to-step text-primary hover:text-primary-dark text-sm font-medium"
                                    data-step="1">
                                    Edit
                                </button>
                            </div>
                            <div id="step1-summary-3" class="text-sm text-gray-600 space-y-1 mb-4">
                                <!-- Will be filled by JavaScript -->
                            </div>

                            <div class="flex justify-between items-center mb-2">
                                <h4 class="font-medium">Can we get your information?</h4>
                                <button type="button"
                                    class="go-to-step text-primary hover:text-primary-dark text-sm font-medium"
                                    data-step="2">
                                    Edit
                                </button>
                            </div>
                            <div id="step2-summary-2" class="text-sm text-gray-600 space-y-1 mb-4">
                                <!-- Will be filled by JavaScript -->
                            </div>

                            <div class="flex justify-between items-center mb-2">
                                <h4 class="font-medium">How can we contact you?</h4>
                                <button type="button"
                                    class="go-to-step text-primary hover:text-primary-dark text-sm font-medium"
                                    data-step="3">
                                    Edit
                                </button>
                            </div>
                            <div id="step3-summary" class="text-sm text-gray-600 space-y-1">
                                <!-- Will be filled by JavaScript -->
                            </div>
                        </div>

                        <div class="flex justify-between">
                            <button type="button"
                                class="prev-step bg-gray-300 hover:bg-gray-400 text-gray-800 px-6 py-2 rounded font-medium transition duration-300 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                                Back
                            </button>
                            <button type="submit"
                                class="bg-primary hover:bg-primary-dark text-white px-8 py-2 rounded font-medium transition duration-300">
                                Submit
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Latest Blog Posts -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold relative inline-block mb-12 section-title">Latest From Our Blog</h2>
                <p class="text-gray-600">Stay updated with our latest news and articles</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @forelse($latestPosts as $post)
                    <div
                        class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 transform transition duration-300 hover:-translate-y-2">
                        <!-- Image -->
                        @if($post->featured_image)
                            <div class="h-60 overflow-hidden">
                                <img src="{{ asset('storage/' . $post->featured_image) }}" alt="{{ $post->title }}"
                                    class="w-full h-full object-cover">
                            </div>
                        @else
                            <div class="h-60 bg-gray-200 flex items-center justify-center">
                                <span class="text-gray-400 text-2xl"><i class="fas fa-image"></i></span>
                            </div>
                        @endif

                        <div class="p-6">
                            <!-- Title -->
                            <h3 class="text-xl font-bold mb-2 text-gray-800">{{ $post->title }}</h3>

                            <!-- Published Date -->
                            <div class="text-sm text-gray-500 mb-3">
                                <time
                                    datetime="{{ $post->created_at->format('Y-m-d') }}">{{ $post->created_at->format('F j, Y') }}</time>
                            </div>

                            <!-- Excerpt -->
                            <p class="text-gray-600 mb-4">{{ $post->excerpt }}</p>

                            <!-- Read More Button -->
                            <a href="{{ route('blog.show', $post->slug) }}"
                                class="inline-flex items-center text-primary font-medium group">
                                Read More
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5 ml-1 transform transition-transform group-hover:translate-x-1" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </a>
                        </div>
                    </div>
                @empty
                    <div class="col-span-3 text-center py-8">
                        <p class="text-gray-500">No blog posts published yet. Check back soon!</p>
                    </div>
                @endforelse
            </div>

            <div class="text-center mt-10">
                <a href="{{ route('blog.index') }}"
                    class="inline-block btn-primary px-6 py-3 rounded font-medium transition duration-300">
                    View All Posts
                </a>
            </div>
        </div>
    </section>

    <!-- REUSEABLE COMPONENT -->

    <!-- Impact Section -->
    <div class="bg-secondary py-8 relative z-10 mx-auto max-w-4xl rounded-lg shadow-lg -mb-16">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center">
                <!-- Our Impact Header -->
                <div class="w-full md:w-1/4 mb-6 md:mb-0">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900">Our Impact</h2>
                </div>

                <!-- Stats Circles -->
                <div class="w-full md:w-3/4 grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Communities Served -->
                    <div class="text-center">
                        <div
                            class="w-32 h-32 rounded-full bg-white mx-auto flex items-center justify-center border-4 border-primary">
                            <div>
                                <div class="text-4xl font-bold text-primary">200+</div>
                                <div class="text-xs uppercase tracking-wider text-gray-700 leading-tight">
                                    Communities<br>Served</div>
                            </div>
                        </div>
                    </div>

                    <!-- Lives Impacted -->
                    <div class="text-center">
                        <div
                            class="w-32 h-32 rounded-full bg-white mx-auto flex items-center justify-center border-4 border-primary">
                            <div>
                                <div class="text-4xl font-bold text-primary">80k+</div>
                                <div class="text-xs uppercase tracking-wider text-gray-700 leading-tight">Lives<br>Impacted
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Years Experience -->
                    <div class="text-center">
                        <div
                            class="w-32 h-32 rounded-full bg-white mx-auto flex items-center justify-center border-4 border-primary">
                            <div>
                                <div class="text-4xl font-bold text-primary">40</div>
                                <div class="text-xs uppercase tracking-wider text-gray-700 leading-tight">
                                    Years<br>Experience</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services Section -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold relative inline-block mb-12 section-title">Our Services</h2>
                <p class="text-gray-600">Discover how we can help you today</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div
                    class="bg-white rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300 p-6 text-center border-t-4 border-primary">
                    <div class="text-5xl text-primary mb-6">
                        <i class="fas fa-building"></i>
                    </div>
                    <h4 class="text-xl font-bold mb-4">Service One</h4>
                    <p class="text-gray-600 mb-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus,
                        luctus nec ullamcorper mattis.</p>
                    <a href="#"
                        class="inline-block text-primary border border-primary hover:bg-primary hover:text-white px-4 py-2 rounded text-sm transition duration-300">Learn
                        More</a>
                </div>

                <div
                    class="bg-white rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300 p-6 text-center border-t-4 border-secondary">
                    <div class="text-5xl text-secondary mb-6">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <h4 class="text-xl font-bold mb-4">Service Two</h4>
                    <p class="text-gray-600 mb-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus,
                        luctus nec ullamcorper mattis.</p>
                    <a href="#"
                        class="inline-block text-secondary border border-secondary hover:bg-secondary hover:text-white px-4 py-2 rounded text-sm transition duration-300">Learn
                        More</a>
                </div>

                <div
                    class="bg-white rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300 p-6 text-center border-t-4 border-accent">
                    <div class="text-5xl text-accent mb-6">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h4 class="text-xl font-bold mb-4">Service Three</h4>
                    <p class="text-gray-600 mb-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus,
                        luctus nec ullamcorper mattis.</p>
                    <a href="#"
                        class="inline-block text-accent border border-accent hover:bg-accent hover:text-white px-4 py-2 rounded text-sm transition duration-300">Learn
                        More</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Call to Action -->
    <section class="gradient-bg py-16">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center justify-between">
                <div class="mb-6 md:mb-0 text-center md:text-left">
                    <h3 class="text-2xl font-bold text-white mb-2">Ready to get started?</h3>
                    <p class="text-gray-200">Contact us today and discover how we can help your business grow.</p>
                </div>
                <div>
                    <a href="/contact"
                        class="inline-block bg-secondary hover:bg-secondary-dark text-gray-900 px-6 py-3 rounded font-medium transition duration-300">Contact
                        Us Today</a>
                </div>
            </div>
        </div>
    </section>


    <!-- REUSEABLE COMPONENT -->

@endsection

@push('styles')
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <style>
        /* Custom styles for the Swiper carousel */
        .what-we-do-slider {
            padding: 30px 0;
        }

        .what-we-do-slider .swiper-slide {
            transition: all 0.3s ease;
            height: auto;
            opacity: 0.4;
            transform: scale(0.8);
        }

        .what-we-do-slider .swiper-slide-active {
            opacity: 1;
            transform: scale(1);
            z-index: 10;
        }

        .what-we-do-slider .swiper-slide-prev,
        .what-we-do-slider .swiper-slide-next {
            opacity: 0.7;
            transform: scale(0.85);
        }

        .what-we-do-slider .swiper-pagination-bullet {
            width: 10px;
            height: 10px;
            background-color: rgba(255, 255, 255, 0.7);
            opacity: 0.7;
        }

        .what-we-do-slider .swiper-pagination-bullet-active {
            background-color: #f8b301;
            opacity: 1;
            transform: scale(1.2);
        }

        /* Hide Swiper navigation default styles */
        .what-we-do-slider .swiper-button-next:after,
        .what-we-do-slider .swiper-button-prev:after {
            display: none;
        }

        /* Image container sizing */
        .what-we-do-slider .swiper-slide .bg-gray-100 {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            box-sizing: border-box;
        }

        .what-we-do-slider .swiper-slide img {
            width: 99%;
            height: auto;
            max-height: 99%;
            margin: 0 auto;
            object-position: center;
            object-fit: contain;
            display: block;
        }

        /* Improve active slide appearance */
        .what-we-do-slider .swiper-slide-active .bg-gray-100 {
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
            border: 1px solid rgba(0, 120, 191, 0.2);
        }

        .what-we-do-slider .swiper-slide-active img {
            width: 90%;
        }

        @media (min-width: 1024px) {
            .what-we-do-slider {
                padding: 50px 0;
            }

            .what-we-do-slider .swiper-slide img {
                width: 99%;
                max-height: 99%;
            }
        }

        /* Testimonial Slider Styles */
        .testimonial-slider .swiper-slide {
            transition: all 0.3s ease;
            height: auto;
        }

        .testimonial-slider .swiper-pagination {
            position: relative;
            bottom: 0;
            margin-top: 2rem;
        }

        .testimonial-slider .swiper-pagination-bullet {
            width: 10px;
            height: 10px;
            background-color: #e2e8f0;
            opacity: 0.7;
            margin: 0 6px;
        }

        .testimonial-slider .swiper-pagination-bullet-active {
            background-color: #0078bf;
            opacity: 1;
            transform: scale(1.2);
        }

        .testimonial-slider .swiper-button-next:after,
        .testimonial-slider .swiper-button-prev:after {
            display: none;
        }

        .testimonial-slider .swiper-button-next,
        .testimonial-slider .swiper-button-prev {
            opacity: 0.8;
            transition: all 0.3s ease;
        }

        .testimonial-slider .swiper-button-next:hover,
        .testimonial-slider .swiper-button-prev:hover {
            opacity: 1;
            background-color: #0078bf;
            color: white;
        }

        @media (min-width: 1024px) {
            .testimonial-slider .swiper-slide {
                height: auto;
            }
        }
    </style>
@endpush

@push('scripts')
    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Initialize What We Do Slider
            const whatWeDoSlider = new Swiper('.what-we-do-slider', {
                slidesPerView: 'auto',
                centeredSlides: true,
                spaceBetween: 20,
                loop: true,
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                breakpoints: {
                    // Mobile
                    320: {
                        slidesPerView: 1,
                        spaceBetween: 10,
                        centeredSlides: true,
                    },
                    // Tablet
                    640: {
                        slidesPerView: 3,
                        spaceBetween: 15,
                        centeredSlides: true,
                    },
                    // Desktop
                    1024: {
                        slidesPerView: 5,
                        spaceBetween: 20,
                        centeredSlides: true,
                    },
                    // Large Desktop
                    1280: {
                        slidesPerView: 5,
                        spaceBetween: 30,
                        centeredSlides: true,
                    }
                },
                on: {
                    init: function () {
                        updateSlidesOpacity(this);
                    },
                    slideChange: function () {
                        updateSlidesOpacity(this);
                    }
                }
            });

            // Function to update slides opacity and overlay visibility
            function updateSlidesOpacity(swiper) {
                const slides = swiper.slides;

                // First reset all slides
                for (let i = 0; i < slides.length; i++) {
                    const slide = slides[i];
                    const overlay = slide.querySelector('.slide-overlay');

                    // Show overlay on all slides initially
                    if (overlay) {
                        overlay.style.opacity = '1';
                        overlay.style.transition = 'opacity 0.3s ease';
                    }
                }

                // Then handle active and adjacent slides
                if (swiper.activeIndex !== undefined) {
                    // Handle active slide
                    const activeSlide = swiper.slides[swiper.activeIndex];
                    if (activeSlide) {
                        const activeOverlay = activeSlide.querySelector('.slide-overlay');
                        if (activeOverlay) {
                            activeOverlay.style.opacity = '0';
                        }
                    }

                    // Optional: reduce overlay opacity for adjacent slides too
                    const prevSlide = swiper.slides[swiper.activeIndex - 1] || swiper.slides[swiper.slides.length - 1];
                    const nextSlide = swiper.slides[swiper.activeIndex + 1] || swiper.slides[0];

                    if (prevSlide) {
                        const prevOverlay = prevSlide.querySelector('.slide-overlay');
                        if (prevOverlay) {
                            prevOverlay.style.opacity = '0.5';
                        }
                    }

                    if (nextSlide) {
                        const nextOverlay = nextSlide.querySelector('.slide-overlay');
                        if (nextOverlay) {
                            nextOverlay.style.opacity = '0.5';
                        }
                    }
                }
            }

            // Initialize Testimonials Slider
            const testimonialSlider = new Swiper('.testimonial-slider', {
                slidesPerView: 1,
                spaceBetween: 30,
                loop: true,
                autoplay: {
                    delay: 8000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: '.testimonial-slider .swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.testimonial-slider .swiper-button-next',
                    prevEl: '.testimonial-slider .swiper-button-prev',
                },
                breakpoints: {
                    // Tablet
                    768: {
                        slidesPerView: 1,
                        spaceBetween: 40,
                    },
                    // Desktop
                    1024: {
                        slidesPerView: 1,
                        spaceBetween: 50,
                    }
                },
                effect: 'fade',
                fadeEffect: {
                    crossFade: true
                },
            });

            // Multi-step Form Functionality
            const form = document.getElementById('repair-form');
            if (form) {
                const steps = form.querySelectorAll('.form-step');
                const nextButtons = form.querySelectorAll('.next-step');
                const prevButtons = form.querySelectorAll('.prev-step');
                const goToStepButtons = form.querySelectorAll('.go-to-step');
                const stepIndicators = document.querySelectorAll('[id^="step-indicator-"]');
                const progressBar = document.getElementById('progress-bar');
                let currentStep = 1;
                const totalSteps = steps.length;

                // Initialize form
                updateFormState();

                // Next button click
                nextButtons.forEach(button => {
                    button.addEventListener('click', () => {
                        if (validateStep(currentStep)) {
                            updateSummaries(currentStep);
                            currentStep++;
                            updateFormState();
                        }
                    });
                });

                // Previous button click
                prevButtons.forEach(button => {
                    button.addEventListener('click', () => {
                        currentStep--;
                        updateFormState();
                    });
                });

                // Go to specific step
                goToStepButtons.forEach(button => {
                    button.addEventListener('click', () => {
                        const stepToGo = parseInt(button.getAttribute('data-step'));
                        if (stepToGo <= currentStep) {
                            currentStep = stepToGo;
                            updateFormState();
                        }
                    });
                });

                // Form submission
                form.addEventListener('submit', function (e) {
                    e.preventDefault();
                    if (validateStep(currentStep)) {
                        // Here you'd normally submit the form
                        alert('Form submitted successfully! Thank you for your request.');
                        // Reset form and go back to step 1
                        form.reset();
                        currentStep = 1;
                        updateFormState();
                    }
                });

                // Update form state based on current step
                function updateFormState() {
                    // Hide all steps
                    steps.forEach((step, index) => {
                        step.classList.add('hidden');

                        // Update step indicators
                        const stepNum = index + 1;
                        const indicator = document.getElementById(`step-indicator-${stepNum}`);

                        if (stepNum < currentStep) {
                            // Completed step
                            indicator.classList.remove('bg-gray-300', 'text-gray-600');
                            indicator.classList.add('bg-green-500', 'text-white');
                            // Add checkmark icon
                            indicator.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" /></svg>';
                        } else if (stepNum === currentStep) {
                            // Current step
                            indicator.classList.remove('bg-gray-300', 'text-gray-600', 'bg-green-500');
                            indicator.classList.add('bg-primary', 'text-white');
                            indicator.innerHTML = stepNum;
                        } else {
                            // Future step
                            indicator.classList.remove('bg-primary', 'text-white', 'bg-green-500');
                            indicator.classList.add('bg-gray-300', 'text-gray-600');
                            indicator.innerHTML = stepNum;
                        }
                    });

                    // Show current step
                    steps[currentStep - 1].classList.remove('hidden');

                    // Update progress bar
                    const progressPercentage = ((currentStep - 1) / (totalSteps - 1)) * 100;
                    progressBar.style.width = `${progressPercentage}%`;
                }

                // Validate current step fields
                function validateStep(step) {
                    const currentStepEl = steps[step - 1];
                    const requiredFields = currentStepEl.querySelectorAll('[required]');
                    let isValid = true;

                    requiredFields.forEach(field => {
                        if (!field.value.trim()) {
                            isValid = false;
                            field.classList.add('border-red-500');
                            // Show error message if not already present
                            let errorMsg = field.nextElementSibling;
                            if (!errorMsg || !errorMsg.classList.contains('error-message')) {
                                errorMsg = document.createElement('p');
                                errorMsg.classList.add('error-message', 'text-red-500', 'text-xs', 'mt-1');
                                errorMsg.innerText = 'This field is required';
                                field.parentNode.insertBefore(errorMsg, field.nextSibling);
                            }
                        } else {
                            field.classList.remove('border-red-500');
                            // Remove error message if exists
                            const errorMsg = field.nextElementSibling;
                            if (errorMsg && errorMsg.classList.contains('error-message')) {
                                errorMsg.remove();
                            }
                        }
                    });

                    return isValid;
                }

                // Update summary sections
                function updateSummaries(step) {
                    if (step === 1) {
                        // Step 1 summary (shown in steps 2, 3, and 4)
                        const product = document.getElementById('product').value;
                        const repairDetails = document.getElementById('repair-details').value;
                        const serviceLocation = document.querySelector('input[name="service-location"]:checked').value;
                        const serviceLocationText = document.querySelector(`input[name="service-location"][value="${serviceLocation}"]`).nextElementSibling.innerText;
                        const purchasedFromMotion = document.querySelector('input[name="purchased-from-motion"]:checked').value;

                        const summaryHtml = `
                                    <p><strong>Enter your product:</strong> ${product}</p>
                                    <p><strong>Repair or maintenance inquiry details:</strong> ${repairDetails}</p>
                                    <p><strong>Select a location for the service:</strong> ${serviceLocationText}</p>
                                    <p><strong>Did you purchase the product from Home2stay?:</strong> ${purchasedFromMotion === 'yes' ? 'Yes' : 'No'}</p>
                                `;

                        document.getElementById('step1-summary').innerHTML = summaryHtml;
                        document.getElementById('step1-summary-2').innerHTML = summaryHtml;
                        document.getElementById('step1-summary-3').innerHTML = summaryHtml;
                    }

                    if (step === 2) {
                        // Step 2 summary (shown in steps 3 and 4)
                        const clientType = document.querySelector('input[name="client-type"]:checked').value;
                        const clientTypeText = document.querySelector(`input[name="client-type"][value="${clientType}"]`).nextElementSibling.innerText;
                        const firstName = document.getElementById('first-name').value;
                        const lastName = document.getElementById('last-name').value;
                        const location = document.getElementById('location').value;

                        const summaryHtml = `
                                    <p><strong>Who are you?:</strong> ${clientTypeText}</p>
                                    <p><strong>First name:</strong> ${firstName}</p>
                                    <p><strong>Last name:</strong> ${lastName}</p>
                                    <p><strong>Select a location near you:</strong> ${location}</p>
                                `;

                        document.getElementById('step2-summary').innerHTML = summaryHtml;
                        document.getElementById('step2-summary-2').innerHTML = summaryHtml;
                    }

                    if (step === 3) {
                        // Step 3 summary (shown in step 4)
                        const phone = document.getElementById('phone').value;
                        const email = document.getElementById('email').value;
                        const contactMethod = document.querySelector('input[name="contact-method"]:checked').value;
                        const contactMethodText = document.querySelector(`input[name="contact-method"][value="${contactMethod}"]`).nextElementSibling.innerText;
                        const marketingConsent = document.querySelector('input[name="marketing-consent"]').checked ? 'Yes' : 'No';

                        const summaryHtml = `
                                    <p><strong>Enter phone number:</strong> ${phone}</p>
                                    <p><strong>Enter email:</strong> ${email}</p>
                                    <p><strong>What is your preferred method of contact?:</strong> ${contactMethodText}</p>
                                    <p><strong>Marketing communications consent:</strong> ${marketingConsent}</p>
                                `;

                        document.getElementById('step3-summary').innerHTML = summaryHtml;
                    }
                }
            }
        });
    </script>
@endpush