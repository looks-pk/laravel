@extends('layouts.app')

@section('title', 'Home2stay - Stairlifts, Home Modifications &amp; Home Safety Equipment in Vancouver - Home2stay')
@section('meta_description', 'Located in Vancouver, Home2stay is here to help you live safely and with maximum independence in your own home. We install grab bars, stair lifts, ramps &amp; more.')

@section('content')
    <style>
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
            --bg-dark: #2a4365;
            --transition: all 0.3s ease;
        }

        /* Base Styles */
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Montserrat', sans-serif;
        }

        p,
        li,
        a,
        button,
        input,
        textarea,
        select {
            font-family: 'Open Sans', sans-serif;
        }

        .section-title {
            position: relative;
            display: inline-block;
            margin-bottom: 3rem;
            font-weight: 700;
            letter-spacing: -0.5px;
        }

        .section-title::after {
            content: '';
            position: absolute;
            width: 70px;
            height: 4px;
            background: linear-gradient(90deg, var(--primary) 0%, var(--primary-dark) 100%);
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            border-radius: 2px;
        }

        /* Hero Section Styles */
        .image-hero {
            position: relative;
            height: 90vh;
            min-height: 600px;
            overflow: hidden;
        }

        .hero-slider-container {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
        }

        .hero-slider {
            width: 100%;
            height: 100%;
        }

        .hero-slide-bg {
            position: relative;
            width: 100%;
            height: 100%;
        }

        .hero-slide-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
        }

        .hero-slide-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(0, 121, 191, 0.1) 0%, rgba(0, 60, 95, 0.2) 100%);
            z-index: 2;
        }

        .image-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(0, 121, 191, 0.3) 0%, rgba(0, 60, 95, 0.4) 100%);
            z-index: 2;
        }

        .hero-content {
            position: relative;
            z-index: 10;
            height: 100%;
            animation: fadeIn 1s ease-in-out;
        }

        .hero-text h1 {
            font-size: 2.75rem;
            line-height: 1.2;
            font-weight: 800;
            text-shadow: 0px 2px 4px rgba(0, 0, 0, 0.2);
            margin-bottom: 1.5rem;
        }

        .hero-text p {
            font-size: 1.25rem;
            line-height: 1.6;
            margin-bottom: 2rem;
        }

        .contact-form-container {
            position: relative;
            z-index: 10;
            background-color: rgba(255, 255, 255, 0.98);
            border-radius: 0.75rem;
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.15), 0 10px 10px -5px rgba(0, 0, 0, 0.1);
            padding: 2.5rem;
            width: 100%;
            max-width: 420px;
            border-top: 5px solid var(--secondary);
            animation: slideUp 0.8s ease-out;
        }

        /* Button Styles */
        .btn-primary {
            background: linear-gradient(45deg, var(--primary) 0%, var(--primary-dark) 100%);
            color: white;
            padding: 0.75rem 1.5rem;
            border-radius: 0.5rem;
            font-weight: 600;
            letter-spacing: 0.5px;
            transform: translateY(0);
            box-shadow: 0 4px 6px rgba(0, 60, 95, 0.1);
            transition: var(--transition);
        }

        .btn-primary:hover {
            background: linear-gradient(45deg, var(--primary-dark) 0%, var(--primary) 100%);
            transform: translateY(-3px);
            box-shadow: 0 6px 12px rgba(0, 60, 95, 0.2);
        }

        .btn-secondary {
            background: linear-gradient(45deg, var(--secondary) 0%, var(--secondary-dark) 100%);
            color: var(--text-dark);
            padding: 0.75rem 1.5rem;
            border-radius: 0.5rem;
            font-weight: 600;
            letter-spacing: 0.5px;
            transform: translateY(0);
            box-shadow: 0 4px 6px rgba(216, 154, 0, 0.1);
            transition: var(--transition);
        }

        .btn-secondary:hover {
            background: linear-gradient(45deg, var(--secondary-dark) 0%, var(--secondary) 100%);
            transform: translateY(-3px);
            box-shadow: 0 6px 12px rgba(216, 154, 0, 0.2);
        }

        .btn-accent {
            background: linear-gradient(45deg, var(--accent) 0%, var(--accent-dark) 100%);
            color: white;
            padding: 0.75rem 1.5rem;
            border-radius: 0.5rem;
            font-weight: 600;
            letter-spacing: 0.5px;
            transform: translateY(0);
            box-shadow: 0 4px 6px rgba(212, 0, 0, 0.1);
            transition: var(--transition);
        }

        .btn-accent:hover {
            background: linear-gradient(45deg, var(--accent-dark) 0%, var(--accent) 100%);
            transform: translateY(-3px);
            box-shadow: 0 6px 12px rgba(212, 0, 0, 0.2);
        }

        .btn-outline {
            background: transparent;
            color: white;
            border: 2px solid white;
            padding: 0.7rem 1.5rem;
            border-radius: 0.5rem;
            font-weight: 600;
            letter-spacing: 0.5px;
            transition: var(--transition);
        }

        .btn-outline:hover {
            background: rgba(255, 255, 255, 0.1);
            transform: translateY(-3px);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        /* Product Cards */
        .product-card {
            background: white;
            border-radius: 1rem;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            transition: var(--transition);
            height: 100%;
            overflow: hidden;
            display: flex;
            flex-direction: column;
        }

        .product-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }

        .product-card .card-img {
            height: 200px;
            overflow: hidden;
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
            padding: 1.5rem;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }

        .product-card h3 {
            font-size: 1.25rem;
            font-weight: 700;
            margin-bottom: 0.75rem;
            color: var(--text-dark);
        }

        .product-card p {
            color: var(--text-light);
            margin-bottom: 1.5rem;
            flex-grow: 1;
        }

        .product-card .card-footer {
            padding: 0 1.5rem 1.5rem;
        }

        /* See More Button Hover Styles */
        .product-card .card-footer a:hover span,
        .product-card .card-footer a:hover svg {
            color: white !important;
        }

        /* Process Timeline */
        .timeline-item {
            position: relative;
            padding-bottom: 3rem;
        }

        .timeline-number {
            width: 3.5rem;
            height: 3.5rem;
            border-radius: 50%;
            background: linear-gradient(45deg, var(--primary) 0%, var(--primary-dark) 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            font-weight: 700;
            color: white;
            box-shadow: 0 8px 16px rgba(0, 60, 95, 0.2);
            z-index: 10;
            position: relative;
            margin: 0 auto 1.5rem;
        }

        .timeline-content {
            background: white;
            border-radius: 1rem;
            padding: 2rem;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            position: relative;
            z-index: 5;
            max-width: 24rem;
            margin: 0 auto;
            text-align: center;
        }

        .timeline-content h4 {
            font-size: 1.2rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            color: var(--text-dark);
        }

        .timeline-content p {
            color: var(--text-light);
            margin-bottom: 0;
        }

        /* Gradient Backgrounds */
        .gradient-bg {
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
        }

        .gradient-bg-secondary {
            background: linear-gradient(135deg, var(--secondary) 0%, var(--secondary-dark) 100%);
        }

        /* Stats Circles */
        .stat-circle {
            width: 160px;
            height: 160px;
            border-radius: 50%;
            background: white;
            border: 5px solid var(--primary);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            margin: 0 auto;
        }

        .stat-circle .number {
            font-size: 2.5rem;
            font-weight: 800;
            color: var(--primary);
            line-height: 1.2;
        }

        .stat-circle .label {
            font-size: 0.875rem;
            font-weight: 600;
            text-transform: uppercase;
            color: var(--text-dark);
            text-align: center;
            line-height: 1.2;
        }

        /* Partner Logos */
        .partner-logo {
            /* height: 70px; */
            display: flex;
            align-items: center;
            justify-content: center;
            background: white;
            border-radius: 0.5rem;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            transition: var(--transition);
        }

        .partner-logo:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        }

        .partner-logo img {
            max-height: 80%;
            max-width: 80%;
            object-fit: contain;
        }

        /* Testimonial Slider */
        .testimonial-card {
            position: relative;
            padding: 2rem;
            border-radius: 0.5rem;
            background-color: white;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            transition: all 0.3s ease;
            height: auto;
            width: 100%;
            overflow: visible;
        }

        .testimonial-card .avatar {
            width: 5rem;
            height: 5rem;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            background-color: #f3f4f6;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            margin-bottom: 1.5rem;
        }

        .testimonial-card .quotation {
            position: absolute;
            top: 1.5rem;
            right: 1.5rem;
            font-size: 4rem;
            line-height: 1;
            font-weight: bold;
            color: rgba(0, 120, 191, 0.1);
            font-family: Georgia, serif;
        }

        .testimonial-card .text-lg {
            font-size: 1.125rem;
            line-height: 1.75;
        }

        /* Blog Cards */
        .blog-card {
            background: white;
            border-radius: 1rem;
            overflow: hidden;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            transition: var(--transition);
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .blog-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }

        .blog-card .image {
            height: 220px;
            overflow: hidden;
        }

        .blog-card .image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--transition);
        }

        .blog-card:hover .image img {
            transform: scale(1.05);
        }

        .blog-card .content {
            padding: 1.5rem;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .blog-card .date {
            color: var(--text-light);
            font-size: 0.875rem;
            margin-bottom: 0.75rem;
        }

        .blog-card h3 {
            font-size: 1.25rem;
            font-weight: 700;
            margin-bottom: 0.75rem;
            color: var(--text-dark);
            line-height: 1.4;
        }

        .blog-card p {
            color: var(--text-light);
            margin-bottom: 1.5rem;
            flex-grow: 1;
        }

        .blog-card .read-more {
            color: var(--primary);
            font-weight: 600;
            display: flex;
            align-items: center;
            transition: var(--transition);
        }

        .blog-card .read-more svg {
            margin-left: 0.5rem;
            transition: var(--transition);
        }

        .blog-card .read-more:hover {
            color: var(--primary-dark);
        }

        .blog-card .read-more:hover svg {
            transform: translateX(4px);
        }

        /* Multi-step Form */
        .form-progress {
            display: flex;
            justify-content: space-between;
            margin-bottom: 2rem;
            position: relative;
        }

        .form-progress::before {
            content: '';
            position: absolute;
            top: 1.75rem;
            left: 8%;
            right: 8%;
            height: 2px;
            background: #e2e8f0;
            z-index: 1;
        }

        .progress-step {
            position: relative;
            z-index: 5;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .step-number {
            width: 2.5rem;
            height: 2.5rem;
            border-radius: 50%;
            background: #e2e8f0;
            color: #718096;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            margin-bottom: 0.5rem;
            transition: var(--transition);
        }

        .progress-step.active .step-number {
            background: var(--primary);
            color: white;
        }

        .progress-step.completed .step-number {
            background: #48bb78;
            color: white;
        }

        .step-label {
            font-size: 0.875rem;
            font-weight: 600;
            color: #718096;
            transition: var(--transition);
        }

        .progress-step.active .step-label {
            color: var(--primary);
        }

        .progress-step.completed .step-label {
            color: #48bb78;
        }

        .form-step-content {
            padding: 2rem;
            background: white;
            border-radius: 0.5rem;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }

        /* Animations */
        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .image-hero {
                height: auto;
                min-height: 800px;
            }

            .hero-text h1 {
                font-size: 2.25rem;
            }

            .hero-text p {
                font-size: 1.125rem;
            }

            .contact-form-container {
                margin-top: 2rem;
            }

            .stat-circle {
                width: 140px;
                height: 140px;
                margin-bottom: 1.5rem;
            }
        }

        /* Previous custom styles - preserving for compatibility */
        .slide-text {
            position: relative;
            z-index: 5;
        }

        .accent-border-left {
            border-left: 4px solid #d40000;
        }

        .accent-border-right {
            border-right: 4px solid #d40000;
        }

        @media screen and (max-width: 768px) {
            .ab {
                width: 350px;
            }
        }
    </style>

    <!-- Image Hero Section -->
    <section class="image-hero">
        <!-- Hero Image Carousel -->
        <div class="hero-slider-container">
            <div class="swiper-container hero-slider">
                <div class="swiper-wrapper">
                    <!-- Slide 1: Stairlift Flow X -->
                    <div class="swiper-slide">
                        <div class="hero-slide-bg">
                            <img src="{{ asset('h2s-banners/clean-cut-tub-cut-2.png') }}" alt="Stairlift Flow X" class="hero-slide-image">
                            <div class="hero-slide-overlay"></div>
                        </div>
                    </div>
                    
                    <!-- Slide 2: Bruno SRE-3050 Stairlift -->
                    <div class="swiper-slide">
                        <div class="hero-slide-bg">
                            <img src="{{ asset('h2s-banners/promenaid-grab-bar-2.png') }}" alt="Bruno SRE-3050 Stairlift" class="hero-slide-image">
                            <div class="hero-slide-overlay"></div>
                        </div>
                    </div>
                    
                    <!-- Slide 3: Sentrel Bathroom -->
                    <div class="swiper-slide">
                        <div class="hero-slide-bg">
                            <img src="{{ asset('h2s-banners/clean-cut-tub-cut-3.png') }}" alt="Sentrel Bathroom" class="hero-slide-image">
                            <div class="hero-slide-overlay"></div>
                        </div>
                    </div>
                    
                    <!-- Slide 4: Clean Cut Tub Cut -->
                    <div class="swiper-slide">
                        <div class="hero-slide-bg">
                            <img src="{{ asset('h2s-banners/Sentrel-Bathroom-2.png') }}" alt="Clean Cut Tub Cut" class="hero-slide-image">
                            <div class="hero-slide-overlay"></div>
                        </div>
                    </div>
                    
                    <!-- Slide 5: Promenaid Grab Bar -->
                    <div class="swiper-slide">
                        <div class="hero-slide-bg">
                            <img src="{{ asset('h2s-banners/stairlift-bruno-sre-3050-2.png') }}" alt="Promenaid Grab Bar" class="hero-slide-image">
                            <div class="hero-slide-overlay"></div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="hero-slide-bg">
                            <img src="{{ asset('h2s-banners/stairlift-flow-x.png') }}" alt="Promenaid Grab Bar" class="hero-slide-image">
                            <div class="hero-slide-overlay"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Dark overlay for text readability -->
        <div class="image-overlay"></div>

        <!-- Content -->
        <div class="hero-content container mx-auto px-8 h-full flex items-center" style="position: relative; z-index: 5;">
            <div class="flex flex-col lg:flex-row items-center justify-between w-full">
                <div class="text-white max-w-2xl lg:mr-8 hero-text">
                    <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6">Home2stay provides Accessibility Solutions,
                        Home Safety Improvements with a Universal Design!</h1>
                    <p class="text-xl mb-8 text-gray-100">We help you regain safety and independence in your space to help
                        you and your loved ones stay safe, even at home.</p>
                    <div class="flex flex-wrap gap-4">
                        <a href="/services" class="btn-primary inline-flex items-center">
                            Our Services
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                        <a href="/about" class="btn-outline">Learn
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
                        <button type="submit" class="w-full btn-primary py-2 px-4 rounded-md">Send
                            Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Mobility Products Section -->
    <section class="py-20 px-10 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold relative inline-block mb-12 section-title">Accessibility Solutions for Your
                    Home</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Our wide range of quality products such as grab bars, bathroom
                    safety equipment, ramps, and more are designed to enhance accessibility and aesthetics, making everyday
                    home life easier for people of all ages and abilities.</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Product Card 1 -->
                <div class="product-card">
                    <div class="card-img">
                        <img src="{{ asset('/al-prod-page-imgs/141-1200x800-1-1024x683-min.jpg') }}" alt="Barrier-Free Bathrooms"
                            class="w-full h-full object-cover">
                    </div>
                    <div class="card-body">
                        <h3>Barrier-Free Bathrooms</h3>
                        <p class="mb-3">Create a safe and accessible oasis with our thoughtfully designed solutions for all
                            mobility needs.</p>

                        <!-- Price Ranges -->
                        <div class="mb-4 text-sm">
                            <div class="flex justify-between">
                                <span class="font-semibold text-gray-700">Purchase:</span>
                                <span class="text-primary font-bold">$1,200 - $3,500</span>
                            </div>
                            <div class="flex justify-between rental-option" style="display: none;">
                                <span class="font-semibold text-gray-700">Rental:</span>
                                <span class="text-primary font-bold">Not Available</span>
                            </div>
                        </div>

                        <!-- Feature Points -->
                        <ul class="mb-4">
                            <li class="flex items-start mb-1">
                                <svg class="w-4 h-4 text-green-500 mr-2 mt-1 flex-shrink-0" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-sm">ADA compliant designs</span>
                            </li>
                            <li class="flex items-start mb-1">
                                <svg class="w-4 h-4 text-green-500 mr-2 mt-1 flex-shrink-0" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-sm">Non-slip surfaces for safety</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-4 h-4 text-green-500 mr-2 mt-1 flex-shrink-0" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-sm">Easy to clean & maintain</span>
                            </li>
                        </ul>
                    </div>
                    <div class="card-footer flex justify-between">
                        <a href="/products-categories/barrier-free-bathrooms/"
                            class="inline-flex items-center px-4 py-2 border border-primary text-primary rounded-md hover:bg-primary hover:text-white transition-colors">
                            <span>See More</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                        <button type="button" data-product="Barrier-Free Bathrooms"
                            class="get-info-btn inline-flex items-center px-4 py-2 border border-black text-black rounded-md hover:bg-primary hover:text-white transition-colors">
                            <span>Get Info</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2h-1V9a1 1 0 00-1-1z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Product Card 2 -->
                <div class="product-card">
                    <div class="card-img">
                        <img src="{{ asset('/al-prod-page-imgs/Stair-Lifts.jpg') }}" alt="Stairlifts"
                            class="w-full h-full object-cover">
                    </div>
                    <div class="card-body">
                        <h3>Stairlifts</h3>
                        <p class="mb-3">Glide effortlessly between levels with our reliable stairlifts, designed for
                            individuals with limited mobility.</p>

                        <!-- Price Ranges -->
                        <div class="mb-4 text-sm">
                            <div class="flex justify-between">
                                <span class="font-semibold text-gray-700">Purchase:</span>
                                <span class="text-primary font-bold">$2,500 - $5,000</span>
                            </div>
                            <div class="flex justify-between rental-option">
                                <span class="font-semibold text-gray-700">Rental:</span>
                                <span class="text-primary font-bold">$250/mo</span>
                            </div>
                        </div>

                        <!-- Feature Points -->
                        <ul class="mb-4">
                            <li class="flex items-start mb-1">
                                <svg class="w-4 h-4 text-green-500 mr-2 mt-1 flex-shrink-0" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-sm">Quiet & smooth operation</span>
                            </li>
                            <li class="flex items-start mb-1">
                                <svg class="w-4 h-4 text-green-500 mr-2 mt-1 flex-shrink-0" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-sm">Battery backup system</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-4 h-4 text-green-500 mr-2 mt-1 flex-shrink-0" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-sm">Custom fit to your staircase</span>
                            </li>
                        </ul>
                    </div>
                    <div class="card-footer flex justify-between">
                        <a href="/products-categories/stair-lifts/"
                            class="inline-flex items-center px-4 py-2 border border-primary text-primary rounded-md hover:bg-primary hover:text-white transition-colors">
                            <span>See More</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                        <button type="button" data-product="Stairlifts"
                            class="get-info-btn inline-flex items-center px-4 py-2 border border-black text-black rounded-md hover:bg-primary hover:text-white transition-colors">
                            <span>Get Info</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2h-1V9a1 1 0 00-1-1z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                </div>
                

                <!-- Product Card 3 -->
                <div class="product-card">
                    <div class="card-img">
                        <img src="{{ asset('/al-prod-page-imgs/Safety-Poles-Handrails.jpg') }}" alt="Safety Poles & Handrails"
                            class="w-full h-full object-cover">
                    </div>
                    <div class="card-body">
                        <h3>Safety Poles & Handrails</h3>
                        <p class="mb-3">Enhance safety and stability with our safety poles and handrails, providing crucial
                            support in various home areas.</p>

                        <!-- Price Ranges -->
                        <div class="mb-4 text-sm">
                            <div class="flex justify-between">
                                <span class="font-semibold text-gray-700">Purchase:</span>
                                <span class="text-primary font-bold">$100 - $500</span>
                            </div>
                            <div class="flex justify-between rental-option" style="display: none;">
                                <span class="font-semibold text-gray-700">Rental:</span>
                                <span class="text-primary font-bold">Not Available</span>
                            </div>
                        </div>

                        <!-- Feature Points -->
                        <ul class="mb-4">
                            <li class="flex items-start mb-1">
                                <svg class="w-4 h-4 text-green-500 mr-2 mt-1 flex-shrink-0" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-sm">Tension-mounted options</span>
                            </li>
                            <li class="flex items-start mb-1">
                                <svg class="w-4 h-4 text-green-500 mr-2 mt-1 flex-shrink-0" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-sm">No wall damage installation</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-4 h-4 text-green-500 mr-2 mt-1 flex-shrink-0" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-sm">Adjustable to your height</span>
                            </li>
                        </ul>
                    </div>
                    <div class="card-footer flex justify-between">
                        <a href="/products-categories/safety-poles-handrails/"
                            class="inline-flex items-center px-4 py-2 border border-primary text-primary rounded-md hover:bg-primary hover:text-white transition-colors">
                            <span>See More</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                        <button type="button" data-product="Safety Poles & Handrails"
                            class="get-info-btn inline-flex items-center px-4 py-2 border border-black text-black rounded-md hover:bg-primary hover:text-white transition-colors">
                            <span>Get Info</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2h-1V9a1 1 0 00-1-1z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                </div>
                 
                

                <!-- Product Card 4 -->
                <div class="product-card">
                    <div class="card-img">
                        <img src="{{ asset('/al-prod-page-imgs/Ramps.jpg') }}" alt="Ramps" class="w-full h-full object-cover">
                    </div>
                    <div class="card-body">
                        <h3>Ramps</h3>
                        <p class="mb-3">Embrace accessibility with our versatile ramps, a practical solution to conquer
                            elevation changes indoors or outdoors.</p>

                        <!-- Price Ranges -->
                        <div class="mb-4 text-sm">
                            <div class="flex justify-between">
                                <span class="font-semibold text-gray-700">Purchase:</span>
                                <span class="text-primary font-bold">$200 - $2,000</span>
                            </div>
                            <div class="flex justify-between rental-option">
                                <span class="font-semibold text-gray-700">Rental:</span>
                                <span class="text-primary font-bold">$22 - $50/mo</span>
                            </div>
                        </div>

                        <!-- Feature Points -->
                        <ul class="mb-4">
                            <li class="flex items-start mb-1">
                                <svg class="w-4 h-4 text-green-500 mr-2 mt-1 flex-shrink-0" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-sm">Portable & permanent options</span>
                            </li>
                            <li class="flex items-start mb-1">
                                <svg class="w-4 h-4 text-green-500 mr-2 mt-1 flex-shrink-0" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-sm">Slip-resistant surfaces</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-4 h-4 text-green-500 mr-2 mt-1 flex-shrink-0" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-sm">Customizable to your space</span>
                            </li>
                        </ul>
                    </div>
                    <div class="card-footer flex justify-between">
                        <a href="/products-categories/ramps/"
                            class="inline-flex items-center px-4 py-2 border border-primary text-primary rounded-md hover:bg-primary hover:text-white transition-colors">
                            <span>See More</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                        <button type="button" data-product="Ramps"
                            class="get-info-btn inline-flex items-center px-4 py-2 border border-black text-black rounded-md hover:bg-primary hover:text-white transition-colors">
                            <span>Get Info</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2h-1V9a1 1 0 00-1-1z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Product Card 5 -->
                <div class="product-card">
                    <div class="card-img">
                        <img src="{{ asset('/al-prod-page-imgs/Tub-Cuts.jpg') }}" alt="Tub Cuts"
                            class="w-full h-full object-cover">
                    </div>
                    <div class="card-body">
                        <h3>Tub Cuts</h3>
                        <p class="mb-3">Transform your bathtub into an accessible oasis with our convenient and
                            cost-effective alternative to traditional solutions.</p>

                        <!-- Price Ranges -->
                        <div class="mb-4 text-sm">
                            <div class="flex justify-between">
                                <span class="font-semibold text-gray-700">Purchase:</span>
                                <span class="text-primary font-bold">$700 - $1,500</span>
                            </div>
                            <div class="flex justify-between rental-option" style="display: none;">
                                <span class="font-semibold text-gray-700">Rental:</span>
                                <span class="text-primary font-bold">Not Available</span>
                            </div>
                        </div>

                        <!-- Feature Points -->
                        <ul class="mb-4">
                            <li class="flex items-start mb-1">
                                <svg class="w-4 h-4 text-green-500 mr-2 mt-1 flex-shrink-0" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-sm">Quick 1-day installation</span>
                            </li>
                            <li class="flex items-start mb-1">
                                <svg class="w-4 h-4 text-green-500 mr-2 mt-1 flex-shrink-0" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-sm">Preserves existing tub</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-4 h-4 text-green-500 mr-2 mt-1 flex-shrink-0" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-sm">Watertight seal guarantee</span>
                            </li>
                        </ul>
                    </div>
                    <div class="card-footer flex justify-between">
                        <a href="/products-categories/tub-cuts/"
                            class="inline-flex items-center px-4 py-2 border border-primary text-primary rounded-md hover:bg-primary hover:text-white transition-colors">
                            <span>See More</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                        <button type="button" data-product="Tub Cuts"
                            class="get-info-btn inline-flex items-center px-4 py-2 border border-black text-black rounded-md hover:bg-primary hover:text-white transition-colors">
                            <span>Get Info</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2h-1V9a1 1 0 00-1-1z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Product Card 6 -->
                <div class="product-card">
                    <div class="card-img">
                        <img src="{{ asset('/al-prod-page-imgs/Grab-Bars.jpg') }}" alt="Grab Bars"
                            class="w-full h-full object-cover">
                    </div>
                    <div class="card-body">
                        <h3>Grab Bars</h3>
                        <p class="mb-3">Elevate bathroom safety with our sturdy and stylish grab bars, providing essential
                            support for confident maneuvering.</p>

                        <!-- Price Ranges -->
                        <div class="mb-4 text-sm">
                            <div class="flex justify-between">
                                <span class="font-semibold text-gray-700">Purchase:</span>
                                <span class="text-primary font-bold">$40 - $150</span>
                            </div>
                            <div class="flex justify-between rental-option" style="display: none;">
                                <span class="font-semibold text-gray-700">Rental:</span>
                                <span class="text-primary font-bold">Not Available</span>
                            </div>
                        </div>

                        <!-- Feature Points -->
                        <ul class="mb-4">
                            <li class="flex items-start mb-1">
                                <svg class="w-4 h-4 text-green-500 mr-2 mt-1 flex-shrink-0" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-sm">Supports up to 500 lbs</span>
                            </li>
                            <li class="flex items-start mb-1">
                                <svg class="w-4 h-4 text-green-500 mr-2 mt-1 flex-shrink-0" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-sm">Multiple finish options</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-4 h-4 text-green-500 mr-2 mt-1 flex-shrink-0" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-sm">Professional installation</span>
                            </li>
                        </ul>
                    </div>
                    <div class="card-footer flex justify-between">
                        <a href="/products-categories/grab-bars/"
                            class="inline-flex items-center px-4 py-2 border border-primary text-primary rounded-md hover:bg-primary hover:text-white transition-colors">
                            <span>See More</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                        <button type="button" data-product="Grab Bars"
                            class="get-info-btn inline-flex items-center px-4 py-2 border border-black text-black rounded-md hover:bg-primary hover:text-white transition-colors">
                            <span>Get Info</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2h-1V9a1 1 0 00-1-1z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="py-24 bg-white relative overflow-hidden">
        <!-- Abstract Background -->
        <div class="absolute inset-0 pointer-events-none opacity-5">
            <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
                <pattern id="dots" x="0" y="0" width="50" height="50" patternUnits="userSpaceOnUse">
                    <circle cx="25" cy="25" r="2" fill="#0078bf" opacity="0.3" />
                </pattern>
                <rect width="100%" height="100%" fill="url(#dots)" />
            </svg>
        </div>

        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold relative inline-block mb-12 section-title">Why Choose Us?</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Choose us for our unwavering commitment to accessible living
                    solutions that transform homes into safe and inclusive spaces. With a dedicated team and a wide range of
                    premium products, we are the trusted partner in elevating your home to new heights of accessibility and
                    comfort.</p>
            </div>

            <!-- Statistics Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
                <!-- Statistic 1: Falls Prevented -->
                <div class="bg-white rounded-2xl shadow-xl p-8 text-center transform hover:scale-105 transition-all duration-300">
                    <div class="w-20 h-20 bg-gradient-to-br from-primary to-primary-dark rounded-full flex items-center justify-center mx-auto mb-6 shadow-lg">
                        <img class="w-12 h-12 object-contain filter brightness-0 invert" 
                             src="{{ asset('h-wc/Falls-Prevented-min.png') }}" alt="Falls Prevented">
                    </div>
                    <h3 class="text-4xl font-bold text-primary mb-2">12,344</h3>
                    <p class="text-gray-700 font-semibold text-lg">Falls Prevented</p>
                    <div class="w-16 h-1 bg-gradient-to-r from-primary to-primary-dark mx-auto mt-4 rounded-full"></div>
                </div>

                <!-- Statistic 2: Cities Served -->
                <div class="bg-white rounded-2xl shadow-xl p-8 text-center transform hover:scale-105 transition-all duration-300">
                    <div class="w-20 h-20 bg-gradient-to-br from-secondary to-secondary-dark rounded-full flex items-center justify-center mx-auto mb-6 shadow-lg">
                        <img class="w-12 h-12 object-contain" 
                             src="{{ asset('h-wc/Cities-Served-min.png') }}" alt="Cities Served">
                    </div>
                    <h3 class="text-4xl font-bold text-secondary mb-2">103</h3>
                    <p class="text-gray-700 font-semibold text-lg">Cities Served</p>
                    <div class="w-16 h-1 bg-gradient-to-r from-secondary to-secondary-dark mx-auto mt-4 rounded-full"></div>
                </div>

                <!-- Statistic 3: Home Sales Cancelled -->
                <div class="bg-white rounded-2xl shadow-xl p-8 text-center transform hover:scale-105 transition-all duration-300">
                    <div class="w-20 h-20 bg-gradient-to-br from-accent to-accent-dark rounded-full flex items-center justify-center mx-auto mb-6 shadow-lg">
                        <img class="w-12 h-12 object-contain filter brightness-0 invert" 
                             src="{{ asset('h-wc/Home-Sales-Cancelled-min.png') }}" alt="Home Sales Cancelled">
                    </div>
                    <h3 class="text-4xl font-bold text-accent mb-2">2,370</h3>
                    <p class="text-gray-700 font-semibold text-lg">Home Sales Cancelled</p>
                    <div class="w-16 h-1 bg-gradient-to-r from-accent to-accent-dark mx-auto mt-4 rounded-full"></div>
                </div>
            </div>

            <!-- Key Benefits Section -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-16">
                <!-- Benefit 1 -->
                <div class="text-center p-6 rounded-xl bg-gradient-to-br from-gray-50 to-white border border-gray-100 hover:shadow-lg transition-all duration-300">
                    <div class="w-12 h-12 bg-primary rounded-lg flex items-center justify-center mx-auto mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h4 class="font-bold text-gray-800 mb-2">Expert Installation</h4>
                    <p class="text-sm text-gray-600">Professional certified installers with years of experience</p>
                </div>

                <!-- Benefit 2 -->
                <div class="text-center p-6 rounded-xl bg-gradient-to-br from-gray-50 to-white border border-gray-100 hover:shadow-lg transition-all duration-300">
                    <div class="w-12 h-12 bg-secondary rounded-lg flex items-center justify-center mx-auto mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h4 class="font-bold text-gray-800 mb-2">Quick Service</h4>
                    <p class="text-sm text-gray-600">Fast installation and responsive customer support</p>
                </div>

                <!-- Benefit 3 -->
                <div class="text-center p-6 rounded-xl bg-gradient-to-br from-gray-50 to-white border border-gray-100 hover:shadow-lg transition-all duration-300">
                    <div class="w-12 h-12 bg-accent rounded-lg flex items-center justify-center mx-auto mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                    <h4 class="font-bold text-gray-800 mb-2">Quality Guarantee</h4>
                    <p class="text-sm text-gray-600">Premium products backed by comprehensive warranties</p>
                </div>

                <!-- Benefit 4 -->
                <div class="text-center p-6 rounded-xl bg-gradient-to-br from-gray-50 to-white border border-gray-100 hover:shadow-lg transition-all duration-300">
                    <div class="w-12 h-12 bg-primary rounded-lg flex items-center justify-center mx-auto mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg>
                    </div>
                    <h4 class="font-bold text-gray-800 mb-2">Personalized Care</h4>
                    <p class="text-sm text-gray-600">Customized solutions tailored to your specific needs</p>
                </div>
            </div>

            <div class="text-center">
                <a href="/contact" class="btn-primary inline-block px-8 py-4 rounded-lg font-medium text-lg">
                    Start Your Journey Today
                </a>
            </div>
        </div>
    </section>

    <!-- Promotional Sections -->
    <section class="promotional-section py-24 bg-gradient-to-br from-gray-50 to-white">
        <div class="container mx-auto px-4">
            <!-- Enhanced Bathroom Remodeling Section -->
            <div class="bg-white rounded-2xl overflow-hidden shadow-2xl border border-gray-100 hover:shadow-3xl transition-all duration-500">
                <div class="flex flex-col lg:flex-row">
                    <!-- Image Side -->
                    <div class="w-full lg:w-1/2 relative overflow-hidden">
                        <img src="{{ asset('h-banner/Bathroom-Remodeling-Service-min.png') }}" 
                             alt="Bathroom Remodeling Service"
                             class="w-full h-64 lg:h-full object-cover transform hover:scale-105 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-br from-primary/20 to-transparent"></div>
                    </div>

                    <!-- Content Side -->
                    <div class="w-full lg:w-1/2 p-8 lg:p-12 xl:p-16 flex flex-col justify-center relative">
                        <!-- Decorative Element -->
                        <div class="absolute top-6 right-6 w-20 h-20 bg-gradient-to-br from-secondary/10 to-secondary/5 rounded-full blur-xl"></div>
                        
                        <div class="relative z-10">
                            <!-- Badge -->
                            <div class="inline-flex items-center px-4 py-2 bg-secondary/10 text-secondary-dark rounded-full text-sm font-semibold mb-6">
                                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" clip-rule="evenodd"></path>
                                </svg>
                                Premium Service
                            </div>

                            <h2 class="text-3xl lg:text-4xl xl:text-5xl font-bold text-gray-900 mb-6 leading-tight">
                                Transform Your Bathroom with 
                                <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-primary-dark">
                                    Home2stay
                                </span>
                            </h2>
                            
                            <p class="text-gray-600 text-lg mb-8 leading-relaxed">
                                Experience luxury and functionality with our expert remodeling solutions. From sleek conversions to 
                                custom fixtures, we create modern retreats tailored to your style with meticulous attention to detail.
                            </p>

                            <!-- Feature Points -->
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-8">
                                <div class="flex items-center">
                                    <div class="w-8 h-8 bg-primary/10 rounded-full flex items-center justify-center mr-3">
                                        <svg class="w-4 h-4 text-primary" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <span class="text-gray-700 font-medium">Expert Installation</span>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-8 h-8 bg-primary/10 rounded-full flex items-center justify-center mr-3">
                                        <svg class="w-4 h-4 text-primary" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <span class="text-gray-700 font-medium">Premium Materials</span>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-8 h-8 bg-primary/10 rounded-full flex items-center justify-center mr-3">
                                        <svg class="w-4 h-4 text-primary" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <span class="text-gray-700 font-medium">Custom Design</span>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-8 h-8 bg-primary/10 rounded-full flex items-center justify-center mr-3">
                                        <svg class="w-4 h-4 text-primary" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <span class="text-gray-700 font-medium">Lifetime Support</span>
                                </div>
                            </div>

                            <div class="flex flex-col sm:flex-row gap-4">
                                <a href="/products" class="btn-primary inline-flex items-center justify-center px-8 py-4 rounded-xl font-semibold text-lg shadow-lg hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300">
                                    Start Your Transformation
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </a>
                                <a href="/contact" class="inline-flex items-center justify-center px-8 py-4 border-2 border-primary text-primary hover:bg-primary hover:text-white rounded-xl font-semibold text-lg transition-all duration-300">
                                    Free Consultation
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Enhanced Repair Request Form Section -->
    <section class="py-24 bg-gradient-to-br from-gray-50 via-white to-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-6">Schedule a Service Today</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    Getting support is quick and easy. Complete this form or contact a Home2stay location 
                    for availability, additional details, and pricing.
                </p>
            </div>

            <!-- Side by Side Layout -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <!-- Image Side -->
                <div class="relative rounded-2xl overflow-hidden shadow-xl h-[600px]">
                    <img src="{{ asset('h-slider/Carousel-item-2-min.jpg') }}" alt="Home Accessibility Service"
                        class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-r from-primary/70 to-primary/40"></div>
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="text-center text-white p-8">
                            <div class="w-20 h-20 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-6">
                                <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-3xl font-bold mb-4">Professional Installation</h3>
                            <p class="text-lg opacity-90">Expert technicians with over 40 years of experience</p>
                        </div>
                    </div>
                </div>

                <!-- Form Side -->
                <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden">
                    <!-- Form Header -->
                    <div class="bg-gradient-to-r from-primary to-primary-dark p-8 text-white">
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center mr-4">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold">Book Your Assessment</h3>
                                <p class="text-white/90">Free consultation and quote</p>
                            </div>
                        </div>
                    </div>

                    <!-- Form Content -->
                    <form id="service-form" class="p-8 space-y-6">
                        <!-- Name and Phone -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">
                                    Full Name *
                                </label>
                                <input type="text" id="name" name="name" required
                                    class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all duration-300"
                                    placeholder="Enter your full name">
                            </div>
                            <div>
                                <label for="phone" class="block text-sm font-semibold text-gray-700 mb-2">
                                    Phone Number *
                                </label>
                                <input type="tel" id="phone" name="phone" required
                                    class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all duration-300"
                                    placeholder="(123) 456-7890">
                            </div>
                        </div>

                        <!-- Email and Service -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">
                                    Email Address
                                </label>
                                <input type="email" id="email" name="email"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all duration-300"
                                    placeholder="your.email@example.com">
                            </div>
                            <div>
                                <label for="service-type" class="block text-sm font-semibold text-gray-700 mb-2">
                                    Service Interest *
                                </label>
                                <select id="service-type" name="service_type" required
                                    class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all duration-300">
                                    <option value="">Select a service</option>
                                    <option value="bathroom-renovation">Bathroom Renovation</option>
                                    <option value="stair-lift">Stair Lift Installation</option>
                                    <option value="grab-bars">Grab Bars & Safety</option>
                                    <option value="ceiling-lift">Ceiling Lift System</option>
                                    <option value="ramps">Ramps & Accessibility</option>
                                    <option value="home-assessment">Home Assessment</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                        </div>

                        <!-- Address -->
                        <div>
                            <label for="address" class="block text-sm font-semibold text-gray-700 mb-2">
                                Service Address
                            </label>
                            <input type="text" id="address" name="address"
                                class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all duration-300"
                                placeholder="Street address, City, Province">
                        </div>

                        <!-- Message -->
                        <div>
                            <label for="message" class="block text-sm font-semibold text-gray-700 mb-2">
                                Additional Details
                            </label>
                            <textarea id="message" name="message" rows="4"
                                class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all duration-300 resize-none"
                                placeholder="Tell us more about your needs, timeline, or any specific requirements..."></textarea>
                        </div>

                        <!-- Preferred Contact -->
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-3">
                                Preferred Contact Method
                            </label>
                            <div class="flex flex-wrap gap-4">
                                <label class="flex items-center">
                                    <input type="radio" name="contact_method" value="phone" class="text-primary focus:ring-primary">
                                    <span class="ml-2 text-gray-700">Phone Call</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="radio" name="contact_method" value="email" class="text-primary focus:ring-primary">
                                    <span class="ml-2 text-gray-700">Email</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="radio" name="contact_method" value="text" class="text-primary focus:ring-primary">
                                    <span class="ml-2 text-gray-700">Text Message</span>
                                </label>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="pt-4">
                            <button type="submit"
                                class="w-full bg-gradient-to-r from-primary to-primary-dark hover:from-primary-dark hover:to-primary text-white font-bold py-4 px-8 rounded-xl shadow-lg hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300 focus:outline-none focus:ring-4 focus:ring-primary/25">
                                <span class="flex items-center justify-center">
                                    <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                    Request Free Assessment
                                </span>
                            </button>
                            <p class="text-center text-gray-600 text-sm mt-4">
                                <svg class="w-4 h-4 inline mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                                </svg>
                                Your information is secure and will only be used to process your request
                            </p>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Contact Information Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-16">
                <!-- Phone Support -->
                <div class="bg-white rounded-2xl shadow-lg p-6 text-center border border-gray-100 hover:shadow-xl transition-all duration-300">
                    <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                    </div>
                    <h4 class="text-xl font-bold text-gray-900 mb-2">Call Us Today</h4>
                    <p class="text-gray-600 mb-4">Speak with our accessibility experts</p>
                    <a href="tel:604-217-6877" class="text-primary hover:text-primary-dark font-bold text-lg transition-colors">604-217-6877</a>
                </div>

                <!-- Email Support -->
                <div class="bg-white rounded-2xl shadow-lg p-6 text-center border border-gray-100 hover:shadow-xl transition-all duration-300">
                    <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h4 class="text-xl font-bold text-gray-900 mb-2">Email Us</h4>
                    <p class="text-gray-600 mb-4">Get detailed information via email</p>
                    <a href="mailto:info@home2stay.ca" class="text-primary hover:text-primary-dark font-bold text-lg transition-colors">info@home2stay.ca</a>
                </div>

                <!-- Visit Showroom -->
                <div class="bg-white rounded-2xl shadow-lg p-6 text-center border border-gray-100 hover:shadow-xl transition-all duration-300">
                    <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <h4 class="text-xl font-bold text-gray-900 mb-2">Visit Our Showroom</h4>
                    <p class="text-gray-600 mb-4">See our products in person</p>
                    <a href="/contact" class="text-primary hover:text-primary-dark font-bold text-lg transition-colors">Find Locations</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Beautiful Brand Partners Slider -->
    <section class="py-16 bg-gradient-to-r from-gray-50 via-white to-gray-50 relative overflow-hidden">
        <!-- Subtle background pattern -->
        <div class="absolute inset-0 opacity-20">
            <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
                <pattern id="brand-pattern" x="0" y="0" width="80" height="80" patternUnits="userSpaceOnUse">
                    <circle cx="40" cy="40" r="2" fill="currentColor" class="text-primary"></circle>
                </pattern>
                <rect x="0" y="0" width="100%" height="100%" fill="url(#brand-pattern)"></rect>
            </svg>
        </div>

        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-7xl mx-auto">
                <!-- Elegant container with subtle shadow -->
                <div class="bg-white/80 backdrop-blur-sm rounded-3xl shadow-2xl border border-white/50 overflow-hidden">
                    <!-- Improved Swiper Container -->
                    <div class="swiper-container partners-slider py-12 px-8">
                        <div class="swiper-wrapper">
                            <!-- First slide with 5 partners -->
                            <div class="swiper-slide">
                                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 lg:gap-8">
                                    <div class="group flex items-center justify-center transform hover:scale-110 transition-all duration-500">
                                        <div class="bg-gradient-to-br from-gray-50 to-white rounded-2xl p-6 h-20 w-full flex items-center justify-center group-hover:bg-gradient-to-br group-hover:from-primary/5 group-hover:to-white shadow-md group-hover:shadow-xl transition-all duration-500">
                                            <img src="{{ asset('brands/american-tubs-logo-min.png') }}" alt="American Tubs" class="max-h-10 w-auto grayscale group-hover:grayscale-0 filter brightness-90 group-hover:brightness-100 transition-all duration-500">
                                        </div>
                                    </div>
                                    <div class="group flex items-center justify-center transform hover:scale-110 transition-all duration-500">
                                        <div class="bg-gradient-to-br from-gray-50 to-white rounded-2xl p-6 h-20 w-full flex items-center justify-center group-hover:bg-gradient-to-br group-hover:from-primary/5 group-hover:to-white shadow-md group-hover:shadow-xl transition-all duration-500">
                                            <img src="{{ asset('brands/arjo-logo-min.png') }}" alt="Arjo" class="max-h-10 w-auto grayscale group-hover:grayscale-0 filter brightness-90 group-hover:brightness-100 transition-all duration-500">
                                        </div>
                                    </div>
                                    <div class="group flex items-center justify-center transform hover:scale-110 transition-all duration-500">
                                        <div class="bg-gradient-to-br from-gray-50 to-white rounded-2xl p-6 h-20 w-full flex items-center justify-center group-hover:bg-gradient-to-br group-hover:from-primary/5 group-hover:to-white shadow-md group-hover:shadow-xl transition-all duration-500">
                                            <img src="{{ asset('brands/best-bath-logo-min.png') }}" alt="Best Bath" class="max-h-10 w-auto grayscale group-hover:grayscale-0 filter brightness-90 group-hover:brightness-100 transition-all duration-500">
                                        </div>
                                    </div>
                                    <div class="group flex items-center justify-center transform hover:scale-110 transition-all duration-500">
                                        <div class="bg-gradient-to-br from-gray-50 to-white rounded-2xl p-6 h-20 w-full flex items-center justify-center group-hover:bg-gradient-to-br group-hover:from-primary/5 group-hover:to-white shadow-md group-hover:shadow-xl transition-all duration-500">
                                            <img src="{{ asset('brands/bruno-logo-min.png') }}" alt="Bruno" class="max-h-10 w-auto grayscale group-hover:grayscale-0 filter brightness-90 group-hover:brightness-100 transition-all duration-500">
                                        </div>
                                    </div>
                                    <div class="group flex items-center justify-center transform hover:scale-110 transition-all duration-500">
                                        <div class="bg-gradient-to-br from-gray-50 to-white rounded-2xl p-6 h-20 w-full flex items-center justify-center group-hover:bg-gradient-to-br group-hover:from-primary/5 group-hover:to-white shadow-md group-hover:shadow-xl transition-all duration-500">
                                            <img src="{{ asset('brands/clean-cut-logo-min.png') }}" alt="Clean Cut" class="max-h-10 w-auto grayscale group-hover:grayscale-0 filter brightness-90 group-hover:brightness-100 transition-all duration-500">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Second slide with remaining 5 partners -->
                            <div class="swiper-slide">
                                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 lg:gap-8">
                                    <div class="group flex items-center justify-center transform hover:scale-110 transition-all duration-500">
                                        <div class="bg-gradient-to-br from-gray-50 to-white rounded-2xl p-6 h-20 w-full flex items-center justify-center group-hover:bg-gradient-to-br group-hover:from-primary/5 group-hover:to-white shadow-md group-hover:shadow-xl transition-all duration-500">
                                            <img src="{{ asset('brands/drive-logo-min.png') }}" alt="Drive" class="max-h-10 w-auto grayscale group-hover:grayscale-0 filter brightness-90 group-hover:brightness-100 transition-all duration-500">
                                        </div>
                                    </div>
                                    <div class="group flex items-center justify-center transform hover:scale-110 transition-all duration-500">
                                        <div class="bg-gradient-to-br from-gray-50 to-white rounded-2xl p-6 h-20 w-full flex items-center justify-center group-hover:bg-gradient-to-br group-hover:from-primary/5 group-hover:to-white shadow-md group-hover:shadow-xl transition-all duration-500">
                                            <img src="{{ asset('brands/handicare-logo-min.png') }}" alt="Handicare" class="max-h-10 w-auto grayscale group-hover:grayscale-0 filter brightness-90 group-hover:brightness-100 transition-all duration-500">
                                        </div>
                                    </div>
                                    <div class="group flex items-center justify-center transform hover:scale-110 transition-all duration-500">
                                        <div class="bg-gradient-to-br from-gray-50 to-white rounded-2xl p-6 h-20 w-full flex items-center justify-center group-hover:bg-gradient-to-br group-hover:from-primary/5 group-hover:to-white shadow-md group-hover:shadow-xl transition-all duration-500">
                                            <img src="{{ asset('brands/health-craft-min.png') }}" alt="Health Craft" class="max-h-10 w-auto grayscale group-hover:grayscale-0 filter brightness-90 group-hover:brightness-100 transition-all duration-500">
                                        </div>
                                    </div>
                                    <div class="group flex items-center justify-center transform hover:scale-110 transition-all duration-500">
                                        <div class="bg-gradient-to-br from-gray-50 to-white rounded-2xl p-6 h-20 w-full flex items-center justify-center group-hover:bg-gradient-to-br group-hover:from-primary/5 group-hover:to-white shadow-md group-hover:shadow-xl transition-all duration-500">
                                            <img src="{{ asset('brands/livelwell-logo-min.png') }}" alt="Livewell" class="max-h-10 w-auto grayscale group-hover:grayscale-0 filter brightness-90 group-hover:brightness-100 transition-all duration-500">
                                        </div>
                                    </div>
                                    <div class="group flex items-center justify-center transform hover:scale-110 transition-all duration-500">
                                        <div class="bg-gradient-to-br from-gray-50 to-white rounded-2xl p-6 h-20 w-full flex items-center justify-center group-hover:bg-gradient-to-br group-hover:from-primary/5 group-hover:to-white shadow-md group-hover:shadow-xl transition-all duration-500">
                                            <img src="{{ asset('brands/prism-medical-min.png') }}" alt="Prism Medical" class="max-h-10 w-auto grayscale group-hover:grayscale-0 filter brightness-90 group-hover:brightness-100 transition-all duration-500">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Elegant pagination -->
                        <div class="swiper-pagination mt-8"></div>
                        
                        <!-- Custom navigation buttons -->
                        <div class="swiper-button-next absolute right-4 top-1/2 transform -translate-y-1/2 bg-white/90 hover:bg-white text-primary hover:text-primary-dark rounded-full w-12 h-12 flex items-center justify-center shadow-lg hover:shadow-xl transition-all duration-300 opacity-0 group-hover:opacity-100">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                        <div class="swiper-button-prev absolute left-4 top-1/2 transform -translate-y-1/2 bg-white/90 hover:bg-white text-primary hover:text-primary-dark rounded-full w-12 h-12 flex items-center justify-center shadow-lg hover:shadow-xl transition-all duration-300 opacity-0 group-hover:opacity-100">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Beautiful Image Slider -->
    <section class="py-16 bg-gradient-to-br from-white via-gray-50 to-white relative overflow-hidden">
        <!-- Elegant background pattern -->
        <div class="absolute inset-0 pointer-events-none opacity-20">
            <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
                <pattern id="image-pattern" x="0" y="0" width="60" height="60" patternUnits="userSpaceOnUse">
                    <circle cx="30" cy="30" r="1.5" fill="currentColor" class="text-primary"></circle>
                </pattern>
                <rect x="0" y="0" width="100%" height="100%" fill="url(#image-pattern)"></rect>
            </svg>
        </div>

        <div class="container mx-auto px-4 relative z-10">
            <!-- Clean Slider Container -->
            <div class="max-w-7xl mx-auto relative group">
                <!-- Subtle decorative elements -->
                <div class="absolute -top-8 -left-8 w-32 h-32 bg-gradient-to-br from-primary/5 to-transparent rounded-full blur-2xl"></div>
                <div class="absolute -bottom-8 -right-8 w-32 h-32 bg-gradient-to-br from-secondary/5 to-transparent rounded-full blur-2xl"></div>

                <!-- Enhanced Swiper Container -->
                <div class="swiper-container what-we-do-slider overflow-hidden rounded-3xl shadow-2xl border border-gray-100">
                    <div class="swiper-wrapper">
                        <!-- Slide 1 - Home Accessibility -->
                        <div class="swiper-slide">
                            <div class="relative overflow-hidden transition-all duration-700 h-64 md:h-96 lg:h-[500px] group">
                                <img src="{{ asset('h-slider/carousel-img-1-min.png') }}" alt="Home Accessibility Solutions"
                                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-1000 filter brightness-95 group-hover:brightness-100">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/30 via-transparent to-transparent opacity-60 group-hover:opacity-40 transition-opacity duration-500"></div>
                            </div>
                        </div>
                        
                        <!-- Slide 2 - Bathroom Modifications -->
                        <div class="swiper-slide">
                            <div class="relative overflow-hidden transition-all duration-700 h-64 md:h-96 lg:h-[500px] group">
                                <img src="{{ asset('h-slider/Carousel-item-4-min.jpg') }}" alt="Bathroom Safety Solutions"
                                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-1000 filter brightness-95 group-hover:brightness-100">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/30 via-transparent to-transparent opacity-60 group-hover:opacity-40 transition-opacity duration-500"></div>
                            </div>
                        </div>
                        
                        <!-- Slide 3 - Mobility Solutions -->
                        <div class="swiper-slide">
                            <div class="relative overflow-hidden transition-all duration-700 h-64 md:h-96 lg:h-[500px] group">
                                <img src="{{ asset('h-slider/Carousel-item-3-min.jpg') }}" alt="Mobility Independence"
                                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-1000 filter brightness-95 group-hover:brightness-100">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/30 via-transparent to-transparent opacity-60 group-hover:opacity-40 transition-opacity duration-500"></div>
                            </div>
                        </div>
                        
                        <!-- Slide 4 - Professional Assessment -->
                        <div class="swiper-slide">
                            <div class="relative overflow-hidden transition-all duration-700 h-64 md:h-96 lg:h-[500px] group">
                                <img src="{{ asset('h-slider/Carousel-item-2-min.jpg') }}" alt="Professional Assessment"
                                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-1000 filter brightness-95 group-hover:brightness-100">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/30 via-transparent to-transparent opacity-60 group-hover:opacity-40 transition-opacity duration-500"></div>
                            </div>
                        </div>
                        
                        <!-- Slide 5 - Custom Design -->
                        <div class="swiper-slide">
                            <div class="relative overflow-hidden transition-all duration-700 h-64 md:h-96 lg:h-[500px] group">
                                <img src="{{ asset('h-slider/Carousel-item-5-min.jpg') }}" alt="Custom Design Solutions"
                                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-1000 filter brightness-95 group-hover:brightness-100">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/30 via-transparent to-transparent opacity-60 group-hover:opacity-40 transition-opacity duration-500"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Elegant Navigation -->
                    <div class="swiper-button-next absolute right-6 top-1/2 transform -translate-y-1/2 z-20 bg-white/90 backdrop-blur-sm hover:bg-white text-gray-700 hover:text-primary rounded-full w-14 h-14 flex items-center justify-center shadow-xl hover:shadow-2xl cursor-pointer transition-all duration-300 opacity-0 group-hover:opacity-100">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </div>
                    <div class="swiper-button-prev absolute left-6 top-1/2 transform -translate-y-1/2 z-20 bg-white/90 backdrop-blur-sm hover:bg-white text-gray-700 hover:text-primary rounded-full w-14 h-14 flex items-center justify-center shadow-xl hover:shadow-2xl cursor-pointer transition-all duration-300 opacity-0 group-hover:opacity-100">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </div>

                    <!-- Minimalist Pagination -->
                    <div class="swiper-pagination bottom-6 absolute z-20"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Features Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
                <div class="text-center p-8 bg-gradient-to-br from-gray-50 to-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-100">
                    <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Expert Assessment</h3>
                    <p class="text-gray-600 leading-relaxed">Professional evaluation of your home to identify the best accessibility solutions tailored to your specific needs.</p>
                </div>
                <div class="text-center p-8 bg-gradient-to-br from-gray-50 to-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-100">
                    <div class="w-16 h-16 bg-secondary/10 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-secondary-dark" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Quality Installation</h3>
                    <p class="text-gray-600 leading-relaxed">Professional installation by certified technicians using premium materials and industry-leading best practices.</p>
                </div>
                <div class="text-center p-8 bg-gradient-to-br from-gray-50 to-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-100">
                    <div class="w-16 h-16 bg-accent/10 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Ongoing Support</h3>
                    <p class="text-gray-600 leading-relaxed">Comprehensive warranty and ongoing maintenance support to ensure your accessibility solutions continue to serve you well.</p>
                </div>
            </div>

            <!-- Call to Action -->
            <div class="text-center">
                <a href="/about" class="inline-flex items-center px-8 py-4 bg-primary hover:bg-primary-dark text-white rounded-xl font-semibold text-lg shadow-lg hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300">
                    Learn More About Home2stay
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Enhanced Testimonials Section -->
    <section class="py-24 bg-gradient-to-br from-gray-50 to-white relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 pointer-events-none opacity-5">
            <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
                <pattern id="testimonial-pattern" x="0" y="0" width="40" height="40" patternUnits="userSpaceOnUse">
                    <circle cx="20" cy="20" r="1.5" fill="currentColor" class="text-primary"/>
                </pattern>
                <rect width="100%" height="100%" fill="url(#testimonial-pattern)" />
            </svg>
        </div>

        <div class="container mx-auto px-4 relative z-10">
            <!-- Section Header -->
            <div class="text-center mb-20">
                <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-6">Stories That Inspire Us</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    Hear from our clients who have experienced the life-changing impact of our accessibility solutions. 
                    Their stories fuel our passion for creating safer, more accessible homes.
                </p>
            </div>

            <!-- Enhanced Layout -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center max-w-7xl mx-auto">
                <!-- Visual Side -->
                <div class="relative order-2 lg:order-1">
                    <div class="absolute inset-0 bg-gradient-to-br from-primary/20 to-secondary/20 rounded-3xl blur-3xl"></div>
                    <div class="relative bg-white rounded-3xl shadow-2xl overflow-hidden border border-gray-100">
                        <img src="{{ asset('h-slider/carousel-img-1-min.png') }}" alt="Happy Client"
                            class="w-full h-[400px] lg:h-[500px] object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-primary/80 via-primary/40 to-transparent"></div>
                        <div class="absolute bottom-8 left-8 right-8 text-white">
                            <h3 class="text-2xl font-bold mb-2">Making Homes Accessible</h3>
                            <p class="text-white/90">Transforming lives through thoughtful accessibility solutions</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonials Side -->
                <div class="order-1 lg:order-2">
                    <div class="swiper-container testimonial-slider overflow-hidden">
                        <div class="swiper-wrapper">
                            <!-- Testimonial 1 -->
                            <div class="swiper-slide">
                                <div class="bg-white rounded-2xl shadow-xl p-8 lg:p-10 border border-gray-100 relative">
                                    <!-- Quote Icon -->
                                    <div class="absolute top-6 right-6 w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center">
                                        <svg class="w-6 h-6 text-primary" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h4v10h-10z"/>
                                        </svg>
                                    </div>

                                    <!-- Rating Stars -->
                                    <div class="flex space-x-1 text-yellow-400 mb-6">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                        </svg>
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                        </svg>
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                        </svg>
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                        </svg>
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                        </svg>
                                    </div>

                                    <!-- Testimonial Text -->
                                    <p class="text-gray-700 text-lg leading-relaxed mb-8">
                                        "January 2023 my parents, both seniors, asked me to look into having grab bars installed for their bathtub and for their shower and possibly a stairlift, someone mentioned "Home2stay", turns out that was the best suggestion ever!!!"
                                    </p>

                                    <!-- Client Info -->
                                    <div class="flex items-center">
                                        <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center mr-4">
                                            <svg class="w-6 h-6 text-primary" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
                                            </svg>
                                        </div>
                                        <div>
                                            <h4 class="font-bold text-gray-900">Budman</h4>
                                            <p class="text-gray-600 text-sm">Verified Customer</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Add more testimonials with similar structure... -->
                            <!-- Testimonial 2 -->
                            <div class="swiper-slide">
                                <div class="bg-white rounded-2xl shadow-xl p-8 lg:p-10 border border-gray-100 relative">
                                    <div class="absolute top-6 right-6 w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center">
                                        <svg class="w-6 h-6 text-primary" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h4v10h-10z"/>
                                        </svg>
                                    </div>
                                    <div class="flex space-x-1 text-yellow-400 mb-6">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                        </svg>
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                        </svg>
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                        </svg>
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                        </svg>
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                        </svg>
                                    </div>
                                    <p class="text-gray-700 text-lg leading-relaxed mb-8">
                                        "My tub insert was installed today and I was impressed with the quick and professional work. The installer was efficient and polite. The work was done in the time indicated and he left my washroom in a spotless condition. Happy customer here!"
                                    </p>
                                    <div class="flex items-center">
                                        <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center mr-4">
                                            <svg class="w-6 h-6 text-primary" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
                                            </svg>
                                        </div>
                                        <div>
                                            <h4 class="font-bold text-gray-900">Agnes Casgrain</h4>
                                            <p class="text-gray-600 text-sm">Verified Customer</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Testimonial 3 -->
                            <div class="swiper-slide">
                                <div class="bg-white rounded-2xl shadow-xl p-8 lg:p-10 border border-gray-100 relative">
                                    <div class="absolute top-6 right-6 w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center">
                                        <svg class="w-6 h-6 text-primary" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h4v10h-10z"/>
                                        </svg>
                                    </div>
                                    <div class="flex space-x-1 text-yellow-400 mb-6">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                        </svg>
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                        </svg>
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                        </svg>
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                        </svg>
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                        </svg>
                                    </div>
                                    <p class="text-gray-700 text-lg leading-relaxed mb-8">
                                        "The team at Home2stay exceeded our expectations. From the initial consultation to the final installation, everything was handled professionally. Our new stair lift has given my husband his independence back."
                                    </p>
                                    <div class="flex items-center">
                                        <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center mr-4">
                                            <svg class="w-6 h-6 text-primary" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
                                            </svg>
                                        </div>
                                        <div>
                                            <h4 class="font-bold text-gray-900">Margaret Johnson</h4>
                                            <p class="text-gray-600 text-sm">Verified Customer</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Testimonial 4 -->
                            <div class="swiper-slide">
                                <div class="bg-white rounded-2xl shadow-xl p-8 lg:p-10 border border-gray-100 relative">
                                    <div class="absolute top-6 right-6 w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center">
                                        <svg class="w-6 h-6 text-primary" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h4v10h-10z"/>
                                        </svg>
                                    </div>
                                    <div class="flex space-x-1 text-yellow-400 mb-6">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                        </svg>
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                        </svg>
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                        </svg>
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                        </svg>
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                        </svg>
                                    </div>
                                    <p class="text-gray-700 text-lg leading-relaxed mb-8">
                                        "Outstanding service from start to finish! The grab bars were installed perfectly and have made such a difference in my daily routine. The team was respectful, clean, and professional."
                                    </p>
                                    <div class="flex items-center">
                                        <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center mr-4">
                                            <svg class="w-6 h-6 text-primary" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
                                            </svg>
                                        </div>
                                        <div>
                                            <h4 class="font-bold text-gray-900">Robert Chen</h4>
                                            <p class="text-gray-600 text-sm">Verified Customer</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Testimonial 5 -->
                            <div class="swiper-slide">
                                <div class="bg-white rounded-2xl shadow-xl p-8 lg:p-10 border border-gray-100 relative">
                                    <div class="absolute top-6 right-6 w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center">
                                        <svg class="w-6 h-6 text-primary" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h4v10h-10z"/>
                                        </svg>
                                    </div>
                                    <div class="flex space-x-1 text-yellow-400 mb-6">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                        </svg>
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                        </svg>
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                        </svg>
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                        </svg>
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                        </svg>
                                    </div>
                                    <p class="text-gray-700 text-lg leading-relaxed mb-8">
                                        "I can't thank Home2stay enough for the bathroom renovation. The walk-in tub has completely transformed my bathing experience. The installation was seamless and the team was wonderful to work with."
                                    </p>
                                    <div class="flex items-center">
                                        <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center mr-4">
                                            <svg class="w-6 h-6 text-primary" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
                                            </svg>
                                        </div>
                                        <div>
                                            <h4 class="font-bold text-gray-900">Linda Thompson</h4>
                                            <p class="text-gray-600 text-sm">Verified Customer</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Enhanced Pagination and Navigation -->
                        <div class="swiper-pagination mt-8"></div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Latest Blog Posts -->
    <section class="py-24 px-10 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold relative inline-block mb-12 section-title">Latest From Our Blog</h2>
                <p class="text-gray-600">Stay updated with our latest news and articles</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @forelse($latestPosts as $post)
                    <div class="blog-card">
                        <!-- Image -->
                        @if($post->featured_image)
                            <div class="image">
                                <img src="{{ asset('storage/' . $post->featured_image) }}" alt="{{ $post->title }}">
                            </div>
                        @else
                            <div class="image bg-gray-200 flex items-center justify-center">
                                <span class="text-gray-400 text-2xl"><i class="fas fa-image"></i></span>
                            </div>
                        @endif

                        <div class="content">
                            <!-- Published Date -->
                            <div class="date">
                                <time
                                    datetime="{{ $post->created_at->format('Y-m-d') }}">{{ $post->created_at->format('F j, Y') }}</time>
                            </div>

                            <!-- Title -->
                            <h3>{{ $post->title }}</h3>

                            <!-- Excerpt -->
                            <p>{{ $post->excerpt }}</p>

                            <!-- Read More Button -->
                            <a href="{{ route('blog.show', $post->slug) }}" class="read-more">
                                Read More
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </a>
                        </div>
                    </div>
                @empty
                    <div class="col-span-3 text-center py-12 bg-white rounded-xl shadow-md">
                        <p class="text-gray-500">No blog posts published yet. Check back soon!</p>
                    </div>
                @endforelse
            </div>

            <div class="text-center mt-16">
                <a href="{{ route('blog.index') }}" class="btn-primary inline-block px-8 py-3 rounded-lg text-lg">
                    View All Posts
                </a>
            </div>
        </div>
    </section>




</section>

@endsection

@push('styles')
    <!-- Add Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&family=Open+Sans:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <style>
        /* Hero Slider Specific Styles */
        .hero-slider .swiper-slide {
            width: 100%;
            height: 100%;
            opacity: 0;
            transition: opacity 1s ease-in-out;
        }

        .hero-slider .swiper-slide-active {
            opacity: 1;
        }

        /* Hide Swiper pagination and navigation for hero slider */
        .hero-slider .swiper-pagination,
        .hero-slider .swiper-button-next,
        .hero-slider .swiper-button-prev {
            display: none;
        }

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
            width: 12px;
            height: 12px;
            background-color: rgba(255, 255, 255, 0.7);
            opacity: 0.7;
            transition: all 0.3s ease;
        }

        .what-we-do-slider .swiper-pagination-bullet-active {
            background-color: var(--secondary);
            opacity: 1;
            transform: scale(1.2);
        }

        /* Hide Swiper navigation default styles */
        .what-we-do-slider .swiper-button-next:after,
        .what-we-do-slider .swiper-button-prev:after,
        .testimonial-slider .swiper-button-next:after,
        .testimonial-slider .swiper-button-prev:after {
            display: none;
        }

        /* Image container sizing */
        .what-we-do-slider .swiper-slide>div {
            height: 100%;
            width: 100%;
        }

        .what-we-do-slider .swiper-slide img {
            width: 100%;
            height: 450px;
            object-position: center;
            object-fit: cover;
        }

        /* Improve active slide appearance */
        .what-we-do-slider .swiper-slide-active>div {
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
            border: 1px solid rgba(0, 120, 191, 0.2);
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
            width: 12px;
            height: 12px;
            background-color: #e2e8f0;
            opacity: 0.7;
            margin: 0 6px;
            transition: all 0.3s ease;
        }

        .testimonial-slider .swiper-pagination-bullet-active {
            background-color: var(--primary);
            opacity: 1;
            transform: scale(1.2);
        }

        /* Form Progress Styles */
        .form-progress::before {
            background: linear-gradient(to right, var(--primary) 0%, var(--primary) 0%, #e2e8f0 0%, #e2e8f0 100%);
            transition: all 0.3s ease;
        }

        .progress-step.active .step-number {
            animation: pulse 1.5s infinite;
        }

        @keyframes pulse {
            0% {
                box-shadow: 0 0 0 0 rgba(0, 120, 191, 0.4);
            }

            70% {
                box-shadow: 0 0 0 10px rgba(0, 120, 191, 0);
            }

            100% {
                box-shadow: 0 0 0 0 rgba(0, 120, 191, 0);
            }
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .what-we-do-slider {
                padding: 20px 0;
            }

            .testimonial-card {
                padding: 1.5rem;
                min-height: auto; /* Remove fixed height on mobile */
                height: auto; /* Ensures adaptive height */
                overflow: visible; /* Prevent content from being cut off */
            }
            
            .testimonial-card .avatar {
                width: 4.5rem;
                height: 4.5rem;
                margin-bottom: 1rem;
            }
            
            .testimonial-card .quotation {
                font-size: 3.5rem;
                top: 1rem;
                right: 1rem;
            }
            
            .testimonial-card .text-lg {
                font-size: 1rem;
                line-height: 1.5;
            }
            
            .testimonial-slider {
                overflow: hidden; /* Ensure slider container doesn't overflow */
                height: auto !important; /* Force auto height */
            }
            
            .testimonial-slider .swiper-wrapper {
                height: auto !important; /* Force auto height on wrapper */
            }
            
            .testimonial-slider .swiper-slide {
                height: auto !important; /* Force auto height on slides */
            }

            .stat-circle {
                width: 130px;
                height: 130px;
            }

            .stat-circle .number {
                font-size: 2rem;
            }
            
            /* Fix image height on mobile */
            .relative.rounded-xl.overflow-hidden.shadow-xl.h-\[600px\] {
                height: 300px;
            }
        }

        @media (min-width: 1024px) {
            .what-we-do-slider {
                padding: 50px 0;
            }

            .what-we-do-slider .swiper-slide img {
                width: 100%;
                max-height: 100%;
            }
        }

        /* Enhanced Home Page Styles */
        .partner-logo {
            @apply bg-white rounded-xl p-4 shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1 flex items-center justify-center grayscale hover:grayscale-0;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: linear-gradient(to right, var(--primary), var(--secondary));
            border-radius: 2px;
        }

        /* Line clamp utilities */
        .line-clamp-2 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .line-clamp-3 {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        /* Enhanced form animations */
        .form-group input:focus + label,
        .form-group textarea:focus + label,
        .form-group select:focus + label {
            transform: translateY(-4px);
            color: white;
        }

        /* Fade in animation */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .fade-in-up {
            animation: fadeInUp 0.8s ease-out forwards;
        }

        /* Glass morphism effect */
        .glass-effect {
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        /* Enhanced hover effects */
        .hover-lift {
            transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
        }

        .hover-lift:hover {
            transform: translateY(-8px);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
        }

        /* Animated background patterns */
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-20px); }
        }

        .floating-element {
            animation: float 6s ease-in-out infinite;
        }

        /* Better focus states for accessibility */
        .focus-ring:focus {
            outline: 2px solid var(--primary);
            outline-offset: 2px;
        }

        /* Blog card hover effects */
        .blog-card {
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        .blog-card:hover {
            transform: translateY(-10px) scale(1.02);
        }

        /* Enhanced button styles */
        .btn-enhanced {
            position: relative;
            overflow: hidden;
            z-index: 1;
        }

        .btn-enhanced::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.6s;
            z-index: -1;
        }

        .btn-enhanced:hover::before {
            left: 100%;
        }
    </style>
@endpush

@push('scripts')
    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Initialize Hero Slider
            const heroSlider = new Swiper('.hero-slider', {
                slidesPerView: 1,
                spaceBetween: 0,
                loop: true,
                autoplay: {
                    delay: 4000,
                    disableOnInteraction: false,
                },
                effect: 'fade',
                fadeEffect: {
                    crossFade: true
                },
                speed: 1000,
                allowTouchMove: false, // Disable manual swiping to keep it automatic
            });

            // Initialize Partners Slider
            const partnersSlider = new Swiper('.partners-slider', {
                slidesPerView: 1,
                spaceBetween: 30,
                loop: true,
                autoplay: {
                    delay: 4000,
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
                effect: 'fade',
                fadeEffect: {
                    crossFade: true
                },
                speed: 1000,
            });

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
                effect: 'fade',
                fadeEffect: {
                    crossFade: true
                },
                // Add responsive settings for improved mobile experience
                breakpoints: {
                    // Mobile
                    320: {
                        slidesPerView: 1,
                        spaceBetween: 20,
                        autoHeight: true,
                        effect: 'slide', // Use simpler slide effect on mobile
                    },
                    // Tablet
                    768: {
                        slidesPerView: 1,
                        spaceBetween: 30,
                        autoHeight: true,
                    },
                    // Desktop
                    1024: {
                        slidesPerView: 1,
                        spaceBetween: 30,
                        autoHeight: false,
                    }
                },
                observer: true, // Enable dynamic updates
                observeParents: true,
                resizeObserver: true, // Force resize recalculation
                updateOnWindowResize: true // Update on window resize
            });

            // Multi-step Form Functionality
            const form = document.getElementById('repair-form');
            if (form) {
                const steps = form.querySelectorAll('.form-step');
                const nextButtons = form.querySelectorAll('.next-step');
                const prevButtons = form.querySelectorAll('.prev-step');
                const goToStepButtons = form.querySelectorAll('.go-to-step');
                const progressBar = document.querySelector('.form-progress::before');
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
                    });

                    // Show current step
                    steps[currentStep - 1].classList.remove('hidden');

                    // Update progress steps
                    document.querySelectorAll('.progress-step').forEach((step, index) => {
                        if (index < currentStep - 1) {
                            step.classList.add('completed');
                            step.classList.remove('active');
                        } else if (index === currentStep - 1) {
                            step.classList.add('active');
                            step.classList.remove('completed');
                        } else {
                            step.classList.remove('active', 'completed');
                        }
                    });

                    // Update progress bar
                    if (progressBar) {
                        const progressPercentage = ((currentStep - 1) / (totalSteps - 1)) * 100;
                        progressBar.style.background = `linear-gradient(to right, var(--primary) 0%, var(--primary) ${progressPercentage}%, #e2e8f0 ${progressPercentage}%, #e2e8f0 100%)`;
                    }
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

                // Update summary sections (placeholder function - implement as needed)
                function updateSummaries(step) {
                    // This would be implemented based on your specific form fields
                    console.log('Updating summaries for step', step);
                }
            }

            // Enhanced Home Page Functionality

            // Fade in animations on scroll
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('fade-in-up');
                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);

            // Observe elements for fade-in animation
            document.querySelectorAll('.service-card, .testimonial-card, .blog-card, .feature-card').forEach(el => {
                observer.observe(el);
            });

            // Enhanced form interactions
            const formInputs = document.querySelectorAll('.repair-request-section input, .repair-request-section textarea, .repair-request-section select');
            
            formInputs.forEach(input => {
                // Add focus ring for better accessibility
                input.classList.add('focus-ring');
                
                // Enhanced focus effects
                input.addEventListener('focus', function() {
                    this.parentElement.classList.add('focused');
                });
                
                input.addEventListener('blur', function() {
                    this.parentElement.classList.remove('focused');
                });
            });

            // Blog post sharing function
            window.sharePost = function(title, url) {
                if (navigator.share) {
                    navigator.share({
                        title: title,
                        url: url
                    }).catch(console.error);
                } else {
                    // Fallback for browsers without Web Share API
                    const shareData = {
                        url: url,
                        title: title
                    };
                    
                    // Try to copy to clipboard
                    if (navigator.clipboard) {
                        navigator.clipboard.writeText(url).then(() => {
                            showNotification('Link copied to clipboard!', 'success');
                        }).catch(() => {
                            showFallbackShare(shareData);
                        });
                    } else {
                        showFallbackShare(shareData);
                    }
                }
            };

            // Fallback share options
            function showFallbackShare(data) {
                const shareMenu = document.createElement('div');
                shareMenu.className = 'fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center p-4';
                shareMenu.innerHTML = `
                    <div class="bg-white rounded-lg p-6 max-w-sm w-full">
                        <h3 class="font-bold text-lg mb-4">Share this article</h3>
                        <div class="space-y-3">
                            <a href="https://twitter.com/intent/tweet?text=${encodeURIComponent(data.title)}&url=${encodeURIComponent(data.url)}" 
                               target="_blank" 
                               class="flex items-center p-3 bg-blue-50 hover:bg-blue-100 rounded-lg transition-colors">
                                <span class="font-medium">Share on Twitter</span>
                            </a>
                            <a href="https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(data.url)}" 
                               target="_blank" 
                               class="flex items-center p-3 bg-blue-50 hover:bg-blue-100 rounded-lg transition-colors">
                                <span class="font-medium">Share on Facebook</span>
                            </a>
                            <button onclick="copyToClipboard('${data.url}')" 
                                    class="w-full flex items-center p-3 bg-gray-50 hover:bg-gray-100 rounded-lg transition-colors">
                                <span class="font-medium">Copy Link</span>
                            </button>
                        </div>
                        <button onclick="this.closest('.fixed').remove()" 
                                class="mt-4 w-full py-2 bg-gray-200 hover:bg-gray-300 rounded-lg transition-colors">
                            Close
                        </button>
                    </div>
                `;
                document.body.appendChild(shareMenu);
                
                // Close on background click
                shareMenu.addEventListener('click', (e) => {
                    if (e.target === shareMenu) {
                        shareMenu.remove();
                    }
                });
            }

            // Copy to clipboard function
            window.copyToClipboard = function(text) {
                const textArea = document.createElement('textarea');
                textArea.value = text;
                document.body.appendChild(textArea);
                textArea.select();
                document.execCommand('copy');
                document.body.removeChild(textArea);
                showNotification('Link copied to clipboard!', 'success');
                
                // Close share menu
                const shareMenu = document.querySelector('.fixed.inset-0.bg-black');
                if (shareMenu) shareMenu.remove();
            };

            // Notification system
            function showNotification(message, type = 'info') {
                const notification = document.createElement('div');
                notification.className = `fixed top-4 right-4 z-50 px-6 py-3 rounded-lg shadow-lg text-white transform translate-x-full transition-transform duration-300 ${
                    type === 'success' ? 'bg-green-500' : 
                    type === 'error' ? 'bg-red-500' : 
                    'bg-blue-500'
                }`;
                notification.textContent = message;
                
                document.body.appendChild(notification);
                
                // Slide in
                setTimeout(() => {
                    notification.classList.remove('translate-x-full');
                }, 100);
                
                // Slide out and remove
                setTimeout(() => {
                    notification.classList.add('translate-x-full');
                    setTimeout(() => {
                        document.body.removeChild(notification);
                    }, 300);
                }, 3000);
            }

            // Smooth scrolling for anchor links
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

            // Enhanced parallax effect for background elements
            window.addEventListener('scroll', () => {
                const scrolled = window.pageYOffset;
                const rate = scrolled * -0.5;
                
                document.querySelectorAll('.floating-element').forEach(element => {
                    element.style.transform = `translateY(${rate}px)`;
                });
            });

            // Form validation enhancement
            const repairForm = document.querySelector('.repair-request-section form');
            if (repairForm) {
                repairForm.addEventListener('submit', function(e) {
                    e.preventDefault();
                    
                    // Basic validation
                    const requiredFields = this.querySelectorAll('[required]');
                    let isValid = true;
                    
                    requiredFields.forEach(field => {
                        if (!field.value.trim()) {
                            isValid = false;
                            field.classList.add('border-red-500');
                            field.addEventListener('input', function() {
                                this.classList.remove('border-red-500');
                            }, { once: true });
                        }
                    });
                    
                    if (isValid) {
                        // Show loading state
                        const submitBtn = this.querySelector('button[type="submit"]');
                        const originalText = submitBtn.innerHTML;
                        submitBtn.innerHTML = `
                            <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                            </svg>
                            Submitting...
                        `;
                        submitBtn.disabled = true;
                        
                        // Simulate form submission (replace with actual form handling)
                        setTimeout(() => {
                            showNotification('Your repair request has been submitted successfully!', 'success');
                            submitBtn.innerHTML = originalText;
                            submitBtn.disabled = false;
                            this.reset();
                        }, 2000);
                    } else {
                        showNotification('Please fill in all required fields.', 'error');
                    }
                });
            }
        });
    </script>

    <!-- Product Info Modal -->
    <div id="productInfoModal" class="fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center hidden">
        <div class="bg-white rounded-xl shadow-2xl w-full max-w-2xl max-h-[90vh] overflow-y-auto">
            <!-- Modal Header -->
            <div class="bg-primary text-white p-4 rounded-t-xl flex justify-between items-center sticky top-0 z-10">
                <h3 class="text-xl font-bold" id="modalProductTitle">Get Product Information</h3>
                <button id="closeModal" class="text-white hover:text-gray-200 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <!-- Modal Body -->
            <div class="p-6">
                <form id="productInfoForm">
                    <input type="hidden" id="productName" name="productName">

                    <!-- Product Info Section -->
                    <div class="mb-6">
                        <h4 class="text-lg font-semibold mb-4 text-primary">Product Information</h4>
                        <div class="p-3 bg-gray-50 rounded-lg mb-4">
                            <p>You're requesting information about: <span id="displayProductName"
                                    class="font-semibold text-primary"></span></p>
                        </div>
                    </div>

                    <!-- Purpose Section -->
                    <div class="mb-6">
                        <h4 class="text-lg font-semibold mb-3 text-primary">What kind of information are you looking for?
                        </h4>
                        <div class="space-y-2">
                            <label class="flex items-start">
                                <input type="checkbox" name="infoType[]" value="newProduct" class="mt-1 mr-2">
                                <span>New product information</span>
                            </label>
                            <label class="flex items-start">
                                <input type="checkbox" name="infoType[]" value="repairing" class="mt-1 mr-2">
                                <span>Repairing existing product</span>
                            </label>
                            <label class="flex items-start">
                                <input type="checkbox" name="infoType[]" value="pricing" class="mt-1 mr-2">
                                <span>Pricing and payment options</span>
                            </label>
                            <label class="flex items-start">
                                <input type="checkbox" name="infoType[]" value="installation" class="mt-1 mr-2">
                                <span>Installation services</span>
                            </label>
                        </div>
                    </div>

                    <!-- For Whom Section -->
                    <div class="mb-6">
                        <h4 class="text-lg font-semibold mb-3 text-primary">Who will be using this product?</h4>
                        <div class="space-y-2">
                            <label class="flex items-center">
                                <input type="radio" name="forWhom" value="self" class="mr-2" checked>
                                <span>Myself</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="forWhom" value="familyMember" class="mr-2">
                                <span>Family member</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="forWhom" value="client" class="mr-2">
                                <span>Client/Patient</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="forWhom" value="other" class="mr-2">
                                <span>Other</span>
                            </label>
                        </div>
                    </div>

                    <!-- Contact Information -->
                    <div class="mb-6">
                        <h4 class="text-lg font-semibold mb-4 text-primary">Your Contact Information</h4>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="firstName" class="block text-sm font-medium text-gray-700 mb-1">First
                                    Name*</label>
                                <input type="text" id="firstName" name="firstName" required
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                            </div>
                            <div>
                                <label for="lastName" class="block text-sm font-medium text-gray-700 mb-1">Last
                                    Name*</label>
                                <input type="text" id="lastName" name="lastName" required
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                            </div>
                        </div>

                        <div class="mt-4">
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email*</label>
                            <input type="email" id="email" name="email" required
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                        </div>

                        <div class="mt-4">
                            <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Phone Number*</label>
                            <input type="tel" id="phone" name="phone" required
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                        </div>

                        <div class="mt-4">
                            <label for="comments" class="block text-sm font-medium text-gray-700 mb-1">Additional
                                Comments</label>
                            <textarea id="comments" name="comments" rows="3"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent"></textarea>
                        </div>
                    </div>

                    <div class="mt-6 flex justify-end">
                        <button type="submit"
                            class="bg-primary hover:bg-primary-dark text-white px-6 py-2 rounded-md font-medium transition duration-300">
                            Submit Request
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Get all elements
            const getInfoButtons = document.querySelectorAll('.get-info-btn');
            const modal = document.getElementById('productInfoModal');
            const closeModalBtn = document.getElementById('closeModal');
            const productNameInput = document.getElementById('productName');
            const displayProductName = document.getElementById('displayProductName');
            const modalProductTitle = document.getElementById('modalProductTitle');
            const productInfoForm = document.getElementById('productInfoForm');

            // Open modal when Get Info button is clicked
            getInfoButtons.forEach(button => {
                button.addEventListener('click', function () {
                    const productName = this.getAttribute('data-product');
                    productNameInput.value = productName;
                    displayProductName.textContent = productName;
                    modalProductTitle.textContent = `Get Information: ${productName}`;
                    modal.classList.remove('hidden');
                    document.body.style.overflow = 'hidden'; // Prevent scrolling
                });
            });

            // Close modal when the close button is clicked
            closeModalBtn.addEventListener('click', function () {
                modal.classList.add('hidden');
                document.body.style.overflow = 'auto'; // Re-enable scrolling
            });

            // Close modal when clicking outside the modal content
            modal.addEventListener('click', function (e) {
                if (e.target === modal) {
                    modal.classList.add('hidden');
                    document.body.style.overflow = 'auto';
                }
            });

            // Handle form submission
            productInfoForm.addEventListener('submit', function (e) {
                e.preventDefault();

                // Create FormData object to easily get form values
                const formData = new FormData(this);

                // You would typically send this data to your server with AJAX
                // For now, we'll just display a success message
                alert('Your request has been submitted! We will contact you shortly.');

                // Reset form and close modal
                this.reset();
                modal.classList.add('hidden');
                document.body.style.overflow = 'auto';
            });
        });
    </script>
@endpush