@extends('layouts.app')

@section('title', 'Home2stay Vancouver - Accessibility Solutions & Home Safety Equipment')
@section('meta_description', 'Home2stay provides accessibility solutions, stairlifts, grab bars, ramps, and home safety equipment in Vancouver and the Lower Mainland.')

@section('content')

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container mx-auto px-4">
            <h1>Home2stay Vancouver</h1>
            <p>Providing accessibility solutions, stairlifts, grab bars, ramps, and home safety equipment throughout Vancouver and the Lower Mainland.</p>
            <a href="{{ route('contact') }}" class="btn-primary">
                Get Free Assessment
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
            </a>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-20 px-10 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold relative inline-block mb-12 section-title">Our Services in Vancouver</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">We provide comprehensive accessibility solutions to help Vancouver residents live safely and independently in their homes.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Stairlifts -->
                <div class="service-card">
                    <div class="card-body">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                            </svg>
                        </div>
                        <h3>Stairlifts</h3>
                        <p>Custom-fitted stairlifts for straight and curved staircases, helping you navigate your Toronto home safely.</p>
                    </div>
                </div>

                <!-- Grab Bars -->
                <div class="service-card">
                    <div class="card-body">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                        </div>
                        <h3>Grab Bars & Safety Rails</h3>
                        <p>Professional installation of grab bars and safety rails throughout your Toronto home for enhanced stability.</p>
                    </div>
                </div>

                <!-- Ramps -->
                <div class="service-card">
                    <div class="card-body">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9" />
                            </svg>
                        </div>
                        <h3>Wheelchair Ramps</h3>
                        <p>Portable and permanent ramp solutions for easy access to your Toronto home and property.</p>
                    </div>
                </div>

                <!-- Bathroom Modifications -->
                <div class="service-card">
                    <div class="card-body">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                            </svg>
                        </div>
                        <h3>Bathroom Modifications</h3>
                        <p>Complete bathroom renovations and modifications including walk-in tubs, barrier-free showers, and tub cuts.</p>
                    </div>
                </div>

                <!-- Ceiling Lifts -->
                <div class="service-card">
                    <div class="card-body">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M9 19l3 3m0 0l3-3m-3 3V10" />
                            </svg>
                        </div>
                        <h3>Ceiling Track Lifts</h3>
                        <p>Professional installation of ceiling track lift systems for safe patient transfers in Toronto homes.</p>
                    </div>
                </div>

                <!-- Home Assessments -->
                <div class="service-card">
                    <div class="card-body">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                            </svg>
                        </div>
                        <h3>Free Home Assessments</h3>
                        <p>Comprehensive home safety assessments to identify accessibility needs and recommend solutions.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold relative inline-block mb-12 section-title">Contact Our Toronto Team</h2>
                    <p class="text-gray-600 max-w-2xl mx-auto">Ready to make your Toronto home more accessible? Contact our local team for a free consultation and assessment.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Contact Info -->
                    <div class="bg-gray-50 p-8 rounded-xl">
                        <h3 class="text-xl font-bold mb-6 text-gray-900">Get In Touch</h3>
                        
                        <div class="space-y-4">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                                <div class="text-gray-700">
                                    <div>Call: <a href="tel:604-259-1211" class="text-blue-600 hover:text-blue-700">(604) 259-1211</a></div>
                                    <div class="text-sm">Direct: <a href="tel:604-608-9442" class="text-blue-600 hover:text-blue-700">(604) 608-9442</a></div>
                                </div>
                            </div>
                            
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                <span class="text-gray-700"><a href="mailto:info@home2stay.ca" class="text-blue-600 hover:text-blue-700">info@home2stay.ca</a></span>
                            </div>
                            
                            <div class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary mr-3 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                </svg>
                                <div class="text-gray-700">
                                    <div class="font-semibold mb-2">Office Locations:</div>
                                    <div class="text-sm space-y-1">
                                        <div>Vancouver: 196 West 6 Ave, Vancouver, BC, V5Y 1K6</div>
                                        <div>Port Coquitlam: 305-1515 Broadway St. Port Coquitlam, BC</div>
                                    </div>
                                    <div class="mt-2 text-sm text-gray-600">Mon-Fri: 8:30AM-4:30PM</div>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary mr-3 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <span class="text-gray-700">Serving Vancouver & Lower Mainland<br>British Columbia, Canada</span>
                            </div>
                        </div>

                        <div class="mt-8">
                            <a href="{{ route('contact') }}" class="btn-primary w-full justify-center">
                                Schedule Free Assessment
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- Quick Facts -->
                    <div class="bg-gray-50 p-8 rounded-xl">
                        <h3 class="text-xl font-bold mb-6 text-gray-900">Why Choose Home2stay Vancouver?</h3>
                        
                        <ul class="space-y-3">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-3 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-gray-700">Local Vancouver team with deep community knowledge</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-3 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-gray-700">Licensed and insured professionals</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-3 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-gray-700">Free in-home consultations and assessments</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-3 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-gray-700">Comprehensive warranty on all installations</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('styles')
    <!-- Add Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    
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
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Montserrat', sans-serif;
        }

        p, li, a, button, input, textarea, select {
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

        /* Hero Section */
        .hero-section {
            background: linear-gradient(135deg, rgba(0, 120, 191, 0.9) 0%, rgba(0, 95, 150, 0.95) 100%), 
                        url('https://images.unsplash.com/photo-1517935706615-2717063c2225?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 8rem 0;
            text-align: center;
        }

        .hero-section h1 {
            font-size: 3.5rem;
            font-weight: 800;
            margin-bottom: 1.5rem;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
        }

        .hero-section p {
            font-size: 1.25rem;
            margin-bottom: 2rem;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
            text-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
        }

        .btn-primary {
            background: linear-gradient(45deg, var(--secondary) 0%, var(--secondary-dark) 100%);
            color: var(--text-dark);
            padding: 1rem 2rem;
            border-radius: 0.5rem;
            font-weight: 600;
            letter-spacing: 0.5px;
            transform: translateY(0);
            box-shadow: 0 4px 6px rgba(216, 154, 0, 0.1);
            transition: var(--transition);
            text-decoration: none;
            display: inline-flex;
            align-items: center;
        }

        .btn-primary:hover {
            background: linear-gradient(45deg, var(--secondary-dark) 0%, var(--secondary) 100%);
            transform: translateY(-3px);
            box-shadow: 0 6px 12px rgba(216, 154, 0, 0.2);
            text-decoration: none;
            color: var(--text-dark);
        }

        /* Service Cards */
        .service-card {
            background: white;
            border-radius: 1rem;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            transition: var(--transition);
            height: 100%;
            overflow: hidden;
            display: flex;
            flex-direction: column;
        }

        .service-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }

        .service-card .icon {
            width: 4rem;
            height: 4rem;
            background: linear-gradient(45deg, var(--primary) 0%, var(--primary-dark) 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            color: white;
            font-size: 1.5rem;
        }

        .service-card .card-body {
            padding: 2rem;
            text-align: center;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .service-card h3 {
            font-size: 1.25rem;
            font-weight: 700;
            margin-bottom: 1rem;
            color: var(--text-dark);
        }

        .service-card p {
            color: var(--text-light);
            flex-grow: 1;
        }

        @media (max-width: 768px) {
            .hero-section h1 {
                font-size: 2.5rem;
            }
            
            .hero-section p {
                font-size: 1.125rem;
            }
        }
    </style>
@endpush
