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
            background: linear-gradient(135deg, rgba(0, 121, 191, 0.8) 0%, rgba(0, 60, 95, 0.95) 100%);
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
        <!-- Video Background -->
        <video class="video-background" autoplay muted loop playsinline preload="auto">
            <source src="{{ asset('h-video/main-page-lower-res-2-new.mp4') }}" type="video/mp4">
            <!-- Fallback image if video doesn't load -->
            <img src="https://images.pexels.com/photos/3184360/pexels-photo-3184360.jpeg" alt="Hero background">
        </video>

        <!-- Dark overlay -->
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
                            class="get-info-btn inline-flex items-center px-4 py-2 border border-secondary text-secondary rounded-md hover:bg-secondary hover:text-white transition-colors">
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
                            class="get-info-btn inline-flex items-center px-4 py-2 border border-secondary text-secondary rounded-md hover:bg-secondary hover:text-white transition-colors">
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
                            class="get-info-btn inline-flex items-center px-4 py-2 border border-secondary text-secondary rounded-md hover:bg-secondary hover:text-white transition-colors">
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
                            class="get-info-btn inline-flex items-center px-4 py-2 border border-secondary text-secondary rounded-md hover:bg-secondary hover:text-white transition-colors">
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
                            class="get-info-btn inline-flex items-center px-4 py-2 border border-secondary text-secondary rounded-md hover:bg-secondary hover:text-white transition-colors">
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
                            class="get-info-btn inline-flex items-center px-4 py-2 border border-secondary text-secondary rounded-md hover:bg-secondary hover:text-white transition-colors">
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

    <!-- Step by Step Process Section -->
    <section class="py-24 bg-white relative overflow-hidden">
        <!-- Abstract Background -->
        <div class="absolute inset-0 pointer-events-none opacity-10">
            <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
                <circle cx="5%" cy="15%" r="120" fill="#0078bf" opacity="0.5" />
                <circle cx="90%" cy="10%" r="80" fill="#f8b301" opacity="0.5" />
                <circle cx="15%" cy="50%" r="40" fill="#d40000" opacity="0.5" />
                <circle cx="85%" cy="85%" r="150" fill="#0078bf" opacity="0.5" />
                <circle cx="75%" cy="45%" r="60" fill="#f8b301" opacity="0.5" />
                <circle cx="20%" cy="80%" r="25" fill="#d40000" opacity="0.5" />
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

            <div class="flex flex-col items-center">
                <!-- Timeline Item 1 -->
                <div class="relative mb-20 w-full max-w-4xl mx-auto">
                    <div class="timeline-number">1</div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                        <div class="bg-white p-6 rounded-xl shadow-lg border-l-4 border-primary">
                            <div class="flex items-center">
                                <div class="flex-1 pr-4">
                                    <h5 class="text-2xl font-bold mb-3 text-primary">12,344</h5>
                                    <p class="text-gray-700 font-medium">Falls Prevented</p>
                                </div>
                                <div class="w-16 h-16 flex-shrink-0 bg-primary rounded-lg flex items-center justify-center">
                                    <img class="w-10 h-10 object-contain" src="{{ asset('h-wc/Falls-Prevented-min.png') }}"
                                        alt="Falls Prevented">
                                </div>
                            </div>
                        </div>
                        <div class="hidden md:block"></div>
                    </div>
                </div>

                <!-- Timeline Item 2 -->
                <div class="relative mb-20 w-full max-w-4xl mx-auto">
                    <div class="timeline-number">2</div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                        <div class="hidden md:block"></div>
                        <div class="bg-white p-6 rounded-xl shadow-lg border-r-4 border-secondary">
                            <div class="flex items-center">
                                <div class="flex-1 pr-4">
                                    <h5 class="text-2xl font-bold mb-3 text-secondary">103</h5>
                                    <p class="text-gray-700 font-medium">Cities Served</p>
                                </div>
                                <div
                                    class="w-16 h-16 flex-shrink-0 bg-secondary rounded-lg flex items-center justify-center">
                                    <img class="w-10 h-10 object-contain" src="{{ asset('h-wc/Cities-Served-min.png') }}"
                                        alt="Cities Served">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Timeline Item 3 -->
                <div class="relative mb-16 w-full max-w-4xl mx-auto">
                    <div class="timeline-number">3</div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                        <div class="bg-white p-6 rounded-xl shadow-lg border-l-4 border-accent">
                            <div class="flex items-center">
                                <div class="flex-1 pr-4">
                                    <h5 class="text-2xl font-bold mb-3 text-accent">2,370</h5>
                                    <p class="text-gray-700 font-medium">Home Sales Cancelled</p>
                                </div>
                                <div class="w-16 h-16 flex-shrink-0 bg-accent rounded-lg flex items-center justify-center">
                                    <img class="w-10 h-10 object-contain"
                                        src="{{ asset('h-wc/Home-Sales-Cancelled-min.png') }}" alt="Home Sales Cancelled">
                                </div>
                            </div>
                        </div>
                        <div class="hidden md:block"></div>
                    </div>
                </div>
            </div>

            <div class="mt-16 text-center">
                <a href="/contact" class="btn-primary inline-block px-8 py-4 rounded-lg font-medium text-lg">
                    Start Your Journey Today
                </a>
            </div>
        </div>
    </section>

    <!-- Promotional Sections -->
    <section class="promotional-section mt-16">
        <div class="container mx-auto">
            <!-- Top Section - Bathroom Remodeling -->
            <div class="flex flex-col md:flex-row bg-white rounded-xl overflow-hidden shadow-xl">
                <!-- Image Side -->
                <div class="w-full md:w-1/2">
                    <img src="{{ asset('h-banner/Bathroom-Remodeling-Service-min.png') }}" alt="Bathroom Remodeling Service"
                        class="w-full h-full object-cover">
                </div>

                <!-- Text Content -->
                <div
                    class="w-full md:w-1/2 p-8 md:p-12 lg:p-16 bg-gradient-to-br from-secondary/10 to-secondary/5 flex flex-col justify-center">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Transform Your Bathroom with Home2stay
                        Remodeling Solutions</h2>
                    <p class="text-gray-700 mb-8 text-lg">
                        Experience luxury and functionality with Home2stay's expert remodeling. From sleek conversions to
                        custom fixtures, we create modern retreats tailored to your style. Our team ensures attention to
                        detail and customer satisfaction. Let us bring your dream bathroom to life.
                    </p>
                    <a href="/products" class="btn-primary self-start inline-flex items-center">
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
    </section>

    <!-- Impact Statistics Section -->
    <section class="py-24 relative">
        <!-- Stats Box -->
        <div
            class="relative z-20 mx-auto max-w-5xl rounded-xl shadow-xl bg-gradient-to-r from-secondary to-secondary-dark py-16 px-6 md:px-12 mb-0">
            <div class="container mx-auto">
                <div class="flex flex-col md:flex-row items-center justify-between">
                    <!-- Our Impact Header -->
                    <div class="w-full md:w-1/4 mb-10 md:mb-0 text-center md:text-left">
                        <h2 class="text-3xl md:text-4xl font-bold text-gray-900">Our Impact</h2>
                        <div class="h-1 w-24 bg-gray-900 mt-4 mb-4 mx-auto md:mx-0"></div>
                    </div>

                    <!-- Stats Circles -->
                    <div class="w-full md:w-3/4 grid grid-cols-1 md:grid-cols-3 gap-8">
                        <!-- Communities Served -->
                        <div class="text-center">
                            <div class="stat-circle mx-auto">
                                <div class="number">200+</div>
                                <div class="label">Communities<br>Served</div>
                            </div>
                        </div>

                        <!-- Lives Impacted -->
                        <div class="text-center">
                            <div class="stat-circle mx-auto">
                                <div class="number">80k+</div>
                                <div class="label">Lives<br>Impacted</div>
                            </div>
                        </div>

                        <!-- Years Experience -->
                        <div class="text-center">
                            <div class="stat-circle mx-auto">
                                <div class="number">40</div>
                                <div class="label">Years<br>Experience</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Dark Background Call to Action -->
        <div class="gradient-bg pt-32 pb-20 relative -mt-24">
            <div class="absolute inset-0 bg-black opacity-30 z-0">
                <!-- Background overlay -->
            </div>

            <div class="container mx-auto px-4 relative z-10 text-center mt-8">
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-8">Book a FREE assessment with Home2stay!</h2>
                <p class="text-xl text-white mb-12 max-w-3xl mx-auto">
                    Vancouver's leading provider of home accessibility products
                </p>

                <a href="/contact"
                    class="btn-secondary inline-flex items-center px-10 py-4 text-gray-900 font-bold rounded-full text-lg">
                    Book Now
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-3" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
        </div>
    </section>


    <!-- Our Partners and Associations Section -->
    <section class="py-20 px-10 bg-gray-50">
        <div class="container mx-auto px-4">
            <!-- Official Distributor Partners -->
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold relative inline-block mb-12 section-title">Official Distributor Partner of
                    Trusted Accessibility Brands</h2>
            </div>

            <!-- Brand Logos Grid -->
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 gap-8 mb-20">
                <!-- Partner Logos -->
                <div class="partner-logo">
                    <img src="{{ asset('brands/american-tubs-logo-min.png') }}" alt="American Tubs" class="max-h-16 w-auto">
                </div>
                <div class="partner-logo">
                    <img src="{{ asset('brands/arjo-logo-min.png') }}" alt="Arjo" class="max-h-16 w-auto">
                </div>
                <div class="partner-logo">
                    <img src="{{ asset('brands/best-bath-logo-min.png') }}" alt="Best Bath" class="max-h-16 w-auto">
                </div>
                <div class="partner-logo">
                    <img src="{{ asset('brands/bruno-logo-min.png') }}" alt="Bruno" class="max-h-16 w-auto">
                </div>
                <div class="partner-logo">
                    <img src="{{ asset('brands/clean-cut-logo-min.png') }}" alt="Clean Cut" class="max-h-16 w-auto">
                </div>
                <div class="partner-logo">
                    <img src="{{ asset('brands/drive-logo-min.png') }}" alt="Drive" class="max-h-16 w-auto">
                </div>
                <div class="partner-logo">
                    <img src="{{ asset('brands/handicare-logo-min.png') }}" alt="Handicare" class="max-h-16 w-auto">
                </div>
                <div class="partner-logo">
                    <img src="{{ asset('brands/health-craft-min.png') }}" alt="Health Craft" class="max-h-16 w-auto">
                </div>
                <div class="partner-logo">
                    <img src="{{ asset('brands/livelwell-logo-min.png') }}" alt="Livewell" class="max-h-16 w-auto">
                </div>
                <div class="partner-logo">
                    <img src="{{ asset('brands/prism-medical-min.png') }}" alt="Prism Medical" class="max-h-16 w-auto">
                </div>
            </div>

            <!-- Our Associations -->
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold relative inline-block mb-12 section-title">Our Associations</h2>
            </div>

            <!-- Associations Logos -->
            <div class="flex flex-wrap justify-center items-center gap-12 max-w-4xl mx-auto">
                <div class="partner-logo p-8 w-64 h-64 flex items-center justify-center">
                    <img src="{{ asset('associate/bbb-logo-min.png') }}" alt="Better Business Bureau"
                        class="max-h-full max-w-full">
                </div>
                <div class="partner-logo p-8 w-64 h-64 flex items-center justify-center">
                    <img src="{{ asset('associate/caps-cert-logo-min.png') }}" alt="CAPS Certification"
                        class="max-h-full max-w-full">
                </div>
                <div class="partner-logo p-8 w-64 h-64 flex items-center justify-center">
                    <img src="{{ asset('associate/nmeda-logo-min.png') }}" alt="NMEDA" class="max-h-full max-w-full">
                </div>
            </div>
        </div>
    </section>

    <!-- What We Do Section -->
    <section class="py-24 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold relative inline-block mb-12 section-title">What We Do</h2>
            </div>

            <!-- Slider Container with Background Pattern -->
            <div class="max-w-full mx-auto mb-20 relative">
                <!-- Background Pattern -->
                <div class="absolute inset-0 pointer-events-none opacity-5">
                    <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
                        <pattern id="pattern-circles" x="0" y="0" width="50" height="50" patternUnits="userSpaceOnUse"
                            patternContentUnits="userSpaceOnUse">
                            <circle cx="25" cy="25" r="3" fill="var(--primary)" opacity="0.9"></circle>
                        </pattern>
                        <rect x="0" y="0" width="100%" height="100%" fill="url(#pattern-circles)"></rect>
                    </svg>
                </div>

                <!-- Swiper Slider -->
                <div class="swiper-container what-we-do-slider overflow-hidden rounded-xl">
                    <div class="swiper-wrapper">
                        <!-- Slide 1 -->
                        <div class="swiper-slide">
                            <div
                                class="relative rounded-xl overflow-hidden transition-all duration-300 shadow-xl h-80 md:h-[500px]">
                                <img src="{{ asset('h-slider/carousel-img-1-min.png') }}" alt="Home Accessibility Solutions"
                                    class="w-full h-full object-cover">
                                <div
                                    class="slide-overlay absolute inset-0 bg-gradient-to-r from-black/70 to-black/40 transition-opacity duration-300">
                                </div>
                            </div>
                        </div> <!-- Slide 2 -->
                        <div class="swiper-slide">
                            <div
                                class="relative rounded-xl overflow-hidden transition-all duration-300 shadow-xl h-80 md:h-[500px]">
                                <img src="{{ asset('h-slider/Carousel-item-4-min.jpg') }}" alt="Bathroom Modifications"
                                    class="w-full h-full object-cover">
                                <div
                                    class="slide-overlay absolute inset-0 bg-gradient-to-r from-black/70 to-black/40 transition-opacity duration-300">
                                </div>
                            </div>
                        </div> <!-- Slide 3 -->
                        <div class="swiper-slide">
                            <div
                                class="relative rounded-xl overflow-hidden transition-all duration-300 shadow-xl h-80 md:h-[500px]">
                                <img src="{{ asset('h-slider/Carousel-item-3-min.jpg') }}" alt="Mobility Solutions"
                                    class="w-full h-full object-cover">
                                <div
                                    class="slide-overlay absolute inset-0 bg-gradient-to-r from-black/70 to-black/40 transition-opacity duration-300">
                                </div>
                            </div>
                        </div> <!-- Slide 4 -->
                        <div class="swiper-slide">
                            <div
                                class="relative rounded-xl overflow-hidden transition-all duration-300 shadow-xl h-80 md:h-[500px]">
                                <img src="{{ asset('h-slider/Carousel-item-2-min.jpg') }}" alt="Home Safety Assessments"
                                    class="w-full h-full object-cover">
                                <div
                                    class="slide-overlay absolute inset-0 bg-gradient-to-r from-black/70 to-black/40 transition-opacity duration-300">
                                </div>
                            </div>
                        </div> <!-- Slide 5 -->
                        <div class="swiper-slide">
                            <div
                                class="relative rounded-xl overflow-hidden transition-all duration-300 shadow-xl h-80 md:h-[500px]">
                                <img src="{{ asset('h-slider/Carousel-item-5-min.jpg') }}" alt="Home Safety Assessments"
                                    class="w-full h-full object-cover">
                                <div
                                    class="slide-overlay absolute inset-0 bg-gradient-to-r from-black/70 to-black/40 transition-opacity duration-300">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Navigation Buttons -->
                    <div
                        class="swiper-button-next absolute right-4 md:right-10 top-1/2 transform -translate-y-1/2 z-10 bg-white text-primary rounded-full w-12 h-12 md:w-16 md:h-16 flex items-center justify-center shadow-lg cursor-pointer hover:bg-primary hover:text-white transition-all">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            class="w-6 h-6 md:w-8 md:h-8">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </div>
                    <div
                        class="swiper-button-prev absolute left-4 md:left-10 top-1/2 transform -translate-y-1/2 z-10 bg-white text-primary rounded-full w-12 h-12 md:w-16 md:h-16 flex items-center justify-center shadow-lg cursor-pointer hover:bg-primary hover:text-white transition-all">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            class="w-6 h-6 md:w-8 md:h-8">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </div>

                    <!-- Pagination -->
                    <div class="swiper-pagination bottom-6 absolute z-10"></div>
                </div>
            </div>

            <!-- Description -->
            <div class="max-w-3xl mx-auto text-center">
                <p class="text-lg text-gray-700 mb-10 leading-relaxed">
                    At Home2stay, we're dedicated to transforming homes into accessible, safe, and comfortable environments
                    for people of all ages and abilities. Our comprehensive range of accessibility solutions and
                    modifications are designed to promote independence, enhance quality of life, and allow individuals to
                    remain in their homes longer. From bathroom modifications and mobility aids to custom accessibility
                    solutions, our team of experts works closely with clients to deliver tailored solutions that meet their
                    specific needs and preferences.
                </p>

                <a href="/about" class="btn-primary inline-flex items-center px-8 py-3 rounded-lg text-lg">
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
    <section class="py-24 px-10 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold relative inline-block mb-12 section-title">What Our Clients Say</h2>
            </div>

            <!-- Side by Side Layout -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 md:gap-12 items-center">
                <!-- Image Side - Hidden on small screens, shown at medium breakpoint and larger -->
                <div class="relative rounded-xl overflow-hidden shadow-xl h-[300px] md:h-[400px] lg:h-[500px] hidden md:block">
                    <img src="{{ asset('h-slider/carousel-img-1-min.png') }}" alt="Happy Client"
                        class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-r from-primary/70 to-primary/40"></div>
                </div>

                <!-- Testimonials Side -->
                <div class="max-w-2xl mx-auto ab lg:mx-0">
                    <div class="swiper-container testimonial-slider overflow-hidden">
                        <div class="swiper-wrapper">
                            <!-- Testimonial 1 -->
                            <div class="swiper-slide">
                                <div class="testimonial-card">
                                    <div class="quotation">"</div>
                                    <div class="flex flex-col items-center mb-4 md:mb-8">
                                        <!-- Client Avatar -->
                                        <div class="avatar">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                                class="w-12 h-12 text-gray-500">
                                                <path fill-rule="evenodd"
                                                    d="M7.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM3.751 20.105a8.25 8.25 0 0116.498 0 .75.75 0 01-.437.695A18.683 18.683 0 0112 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 01-.437-.695z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </div>

                                        <!-- Client Name -->
                                        <h4 class="text-xl font-bold text-gray-900 mt-3 md:mt-4 mb-1 md:mb-2">H. Hashimoto</h4>

                                        <!-- Star Rating -->
                                        <div class="flex space-x-1 text-yellow-400 mb-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                                class="w-4 h-4 md:w-5 md:h-5">
                                                <path fill-rule="evenodd"
                                                    d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                                class="w-4 h-4 md:w-5 md:h-5">
                                                <path fill-rule="evenodd"
                                                    d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                                class="w-4 h-4 md:w-5 md:h-5">
                                                <path fill-rule="evenodd"
                                                    d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                                class="w-4 h-4 md:w-5 md:h-5">
                                                <path fill-rule="evenodd"
                                                    d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                                class="w-4 h-4 md:w-5 md:h-5">
                                                <path fill-rule="evenodd"
                                                    d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                    </div>

                                    <!-- Testimonial Text -->
                                    <div class="text-gray-700 text-sm md:text-lg leading-relaxed text-center px-4 md:px-8">
                                        <p>I had 3 safety bars installed by Home2stay and the gentleman did a great job. He
                                            was very courteous and professional. He made sure the bars were exactly where I
                                            needed them before the installation. My appointment was between 10AM-11AM and
                                            the gentleman arrived at +9:50AM and was finished by 10:30AM.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Testimonial 2 -->
                            <div class="swiper-slide">
                                <div class="testimonial-card">
                                    <div class="quotation">"</div>
                                    <div class="flex flex-col items-center mb-4 md:mb-8">
                                        <!-- Client Avatar -->
                                        <div class="avatar">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                                class="w-12 h-12 text-gray-500">
                                                <path fill-rule="evenodd"
                                                    d="M7.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM3.751 20.105a8.25 8.25 0 0116.498 0 .75.75 0 01-.437.695A18.683 18.683 0 0112 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 01-.437-.695z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </div>

                                        <!-- Client Name -->
                                        <h4 class="text-xl font-bold text-gray-900 mt-3 md:mt-4 mb-1 md:mb-2">B. Taylor</h4>

                                        <!-- Star Rating -->
                                        <div class="flex space-x-1 text-yellow-400 mb-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                                class="w-4 h-4 md:w-5 md:h-5">
                                                <path fill-rule="evenodd"
                                                    d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                                class="w-4 h-4 md:w-5 md:h-5">
                                                <path fill-rule="evenodd"
                                                    d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                                class="w-4 h-4 md:w-5 md:h-5">
                                                <path fill-rule="evenodd"
                                                    d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                                class="w-4 h-4 md:w-5 md:h-5">
                                                <path fill-rule="evenodd"
                                                    d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                                class="w-4 h-4 md:w-5 md:h-5">
                                                <path fill-rule="evenodd"
                                                    d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                    </div>

                                    <!-- Testimonial Text -->
                                    <div class="text-gray-700 text-sm md:text-lg leading-relaxed text-center px-4 md:px-8">
                                        <p>Home2stay was not only prompt in replying to my inquiry and quote request, they
                                            were very attentive and courteous every time we contacted them. We had 2 grab
                                            bars in the bathroom installed and a long handrail installed with care and
                                            attention to detail. Our experience with Home2stay was wonderful.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pagination -->
                        <div class="swiper-pagination mt-4 md:mt-8"></div>
                        
                        <!-- Navigation Buttons -->
                        <div class="swiper-button-next hidden md:flex"></div>
                        <div class="swiper-button-prev hidden md:flex"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Repair Request Form Section -->
    <section class="py-24 px-10 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold relative inline-block mb-12 section-title">Schedule a Repair Today</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Getting support is quick and easy. Complete this form or contact
                    a Home2stay location for availability, additional details, and pricing.</p>
            </div>

            <!-- Side by Side Layout -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <!-- Image Side -->
                <div class="relative rounded-xl overflow-hidden shadow-xl h-[600px]">
                    <img src="{{ asset('h-slider/Carousel-item-2-min.jpg') }}" alt="Repair Service"
                        class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-r from-primary/70 to-primary/40"></div>
                </div>

                <!-- Form Side -->
                <div class="bg-white rounded-xl shadow-xl overflow-hidden">
                    <!-- Form Progress Indicator -->
                    <div class="bg-gray-100 py-6 px-8">
                        <div class="form-progress">
                            <div class="progress-step active">
                                <div class="step-number">1</div>
                                <div class="step-label">Repair Details</div>
                            </div>
                            <div class="progress-step">
                                <div class="step-number">2</div>
                                <div class="step-label">Your Info</div>
                            </div>
                            <div class="progress-step">
                                <div class="step-number">3</div>
                                <div class="step-label">Contact</div>
                            </div>
                            <div class="progress-step">
                                <div class="step-number">4</div>
                                <div class="step-label">Summary</div>
                            </div>
                        </div>
                    </div>

                    <!-- Form Content -->
                    <form id="repair-form" class="p-8 md:p-10 form-step-content">
                        <!-- Step 1: Repair Details -->
                        <div id="step-1" class="form-step">
                            <h3 class="text-xl font-bold mb-8">Step 1 of 4 – What are you looking to repair?</h3>
                            <div class="mb-6"> 
                            <label for="product"
                                    class="block text-sm font-medium text-gray-700 mb-2">Enter your product*</label>
                                 <input type="text" id="product" name="product" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-colors duration-200"
                                    required placeholder="E.g., Bathroom grab bar, Stairlift, etc."> 
                            </div>
                            <div class="mb-6"> 
                                <label for="repair-details"
                                    class="block text-sm font-medium text-gray-700 mb-2">Repair or maintenance inquiry
                                    details*</label> 
                                    <textarea id="repair-details" name="repair-details" rows="4"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-colors duration-200"
                                    required placeholder="Please describe the issue you're experiencing..."></textarea>
                            </div>
                            <div class="mb-8"> <label class="block text-sm font-medium text-gray-700 mb-3">Select a location
                                    for the service*</label>
                                <div class="space-y-3"> <label
                                        class="flex items-center p-3 border border-gray-200 rounded-lg hover:bg-gray-50 transition-colors duration-200 cursor-pointer">
                                        <input type="radio" name="service-location" value="home2stay-location"
                                            class="mr-3 h-4 w-4 text-primary focus:ring-primary" checked> <span>At a
                                            Home2stay location</span> </label> <label
                                        class="flex items-center p-3 border border-gray-200 rounded-lg hover:bg-gray-50 transition-colors duration-200 cursor-pointer">
                                        <input type="radio" name="service-location" value="home-facility"
                                            class="mr-3 h-4 w-4 text-primary focus:ring-primary"> <span>At your home / care
                                            facility</span> </label> <label
                                        class="flex items-center p-3 border border-gray-200 rounded-lg hover:bg-gray-50 transition-colors duration-200 cursor-pointer">
                                        <input type="radio" name="service-location" value="virtual"
                                            class="mr-3 h-4 w-4 text-primary focus:ring-primary"> <span>Virtual appointment;
                                            if available</span> </label> 
                                </div>
                            </div>
                            <div class="mb-8"> <label class="block text-sm font-medium text-gray-700 mb-3">Did you purchase
                                    the product from Home2stay?*</label>
                                <div class="flex space-x-6"> <label
                                        class="flex items-center p-3 border border-gray-200 rounded-lg hover:bg-gray-50 transition-colors duration-200 cursor-pointer">
                                        <input type="radio" name="purchased-from-home2stay" value="yes"
                                            class="mr-3 h-4 w-4 text-primary focus:ring-primary" checked> <span>Yes</span>
                                    </label> <label
                                        class="flex items-center p-3 border border-gray-200 rounded-lg hover:bg-gray-50 transition-colors duration-200 cursor-pointer">
                                        <input type="radio" name="purchased-from-home2stay" value="no"
                                            class="mr-3 h-4 w-4 text-primary focus:ring-primary"> <span>No</span> </label>
                                </div>
                            </div>
                            <div class="flex justify-end">
                                 <button type="button" class="next-step bg-primary hover:bg-primary-dark text-white px-6 py-3 rounded-lg font-medium transition duration-300 flex items-center shadow-md hover:shadow-lg">
                                    Next <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd" /> 
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

                            <div class="flex justify-between"> <button type="button"
                                    class="prev-step bg-gray-200 hover:bg-gray-300 text-gray-800 px-6 py-3 rounded-lg font-medium transition duration-300 flex items-center shadow-md hover:shadow-lg">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                            clip-rule="evenodd" /> Back </button> <button type="button"
                                    class="next-step bg-primary hover:bg-primary-dark text-white px-6 py-3 rounded-lg font-medium transition duration-300 flex items-center shadow-md hover:shadow-lg">
                                    Next <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd" /> </button> </div>
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
                                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Enter
                                        email*</label>
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
                                            Home2stay, including product information, educational opportunities and
                                            promotional offers. You can unsubscribe at any time. View our privacy & security
                                            policy for details.</span>
                                    </label>
                                </div>
                            </div>

                            <div class="mb-6 text-xs text-gray-500">
                                <p>By clicking "Review Form," you confirm you have read and agree to Home2stay's Privacy
                                    Policy and Terms of Service. Data collected is shared with a third-party processor for
                                    the purpose of reporting and analytics. Data collected will not be sold. Alternatively,
                                    you may contact a Home2stay location to provide your information by phone or email.</p>
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