@extends('layouts.app')

@section('title', 'Professional Ramps Installation in Burnaby, BC | Home2stay')
@section('meta_description', 'Professional ramps installation in Burnaby. Residential and commercial wheelchair ramps. Safe, reliable, code-compliant. Quick installation with quality materials.')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/area-page.css') }}">
@endpush

@section('content')
<!-- Hero Section -->
<section class="hero-section">
    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6">
            Professional Ramps Installation in Burnaby, BC
            </h1>
            <p class="text-xl md:text-1xl mb-8 opacity-90 max-w-xl mx-auto">Do you require a safe, reliable and code-compliant ramp installed at your home or business in Burnaby? You're in the right place. We are the experts of Professional Ramps Installation in Burnaby, BC suited to the real-life application to be installed- manufactured using quality material, installed by qualified professionals, and customised to suit your specific requirements. You either require the accessibility of a wheelchair, a mobility aid, or simply safer access; we make it easy, quick, and relaxing. We don't cut corners. We build solutions that last.


            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#contact" class="btn-secondary text-lg px-8 py-4">
                    Get Free Quote
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </a>
                <a href="tel:604-259-1211" class="btn-primary text-lg px-8 py-4">
                    Call (604) 259-1211
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Reliable Service Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 section-title mb-8">
                Why Choose Home2stay?
                </h2>
                <div class="prose prose-lg max-w-none">
                    <p class="text-lg text-gray-700 leading-relaxed mb-6">
                    You have options. But if you want a ramp that's done right, from design to final gameplay, you need a team that delivers more than just hardware. We build Trusted Ramps in Burnaby for homes, businesses, care facilities, and public spaces. And we make it easy for you.
                </p>
                <p class="font-semibold text-gray-900 mb-3">Here's what makes us different:</p>
                <ul style="list-style-type: disc; padding-left: 20px;">
                    <li>Local experience with Ramps in Burnaby, BC</li>
                    <li>Custom designs for residential and commercial spaces</li>
                    <li>Full code compliance with municipal and provincial standards</li>
                    <li>Quick, clean installations, no mess or delay</li>
                    <li>Friendly, knowledgeable team from start to finish</li>
                </ul>
                <p class="mb-6 mt-4">You'll feel the difference from the first phone call.</p>
                    
                </div>
            </div>
            <div class="map-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d41641.88234906319!2d-122.93747!3d49.28365!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5486730269e23c23%3A0x9e8f5a1234f5f5f5!2sBurnaby%2C%20BC%2C%20Canada!5e0!3m2!1sen!2s!4v1737728098036!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-8">
    </div>
</section>

<!-- Ramp Installation Services Section -->
<section class="py-16">
    <div class="container mx-auto px-6 lg:px-12 max-w-6xl">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 section-title mb-8 text-center">
        Our Ramp Installation Services in Burnaby
        </h2>
        <div class="max-w-4xl mx-auto prose prose-lg">
            <p class="text-lg text-gray-700 leading-relaxed mb-6">
            Every property is unique. That's why we offer a range of ramp installation services to suit your layout, budget, and accessibility goals.
            </p>
        </div>
    </div>
    
    
            @include('partials.services')
</section>

<!-- Modular & Custom Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-6 lg:px-12 max-w-6xl">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <h3 class="text-3xl md:text-4xl font-bold text-gray-900 section-title mb-8">
                Modular & Portable Ramp Systems
                </h3>
                <div class="prose prose-lg max-w-none">
                    <p class="text-lg text-gray-700 leading-relaxed mb-6">
                    Our modular ramps are perfect for short-term access or progress spaces.
                    </p>
                    <ul style="list-style-type: disc; padding-left: 20px;" class="text-gray-700">
                        <li>Ideal for rental properties, event venues, or ageing-in-place</li>
                        <li>Easy to assemble, disassemble, or reconfigure</li>
                        <li>Strong, safe, and weather-resistant</li>
                    </ul>
                    <p class="text-gray-700 mt-4">They're not just convenient, they're built to commercial-grade standards.</p>
                </div>
            </div>
            <div>
                <h3 class="text-3xl md:text-4xl font-bold text-gray-900 section-title mb-8">
                Custom Ramp Design & Build
                </h3>
                <div class="prose prose-lg max-w-none">
                    <p class="text-lg text-gray-700 leading-relaxed mb-6">
                    Some properties require a more customized approach. We create custom ramp designs tailored to unique layouts, elevations, or aesthetic goals.
                    </p>
                    <ul style="list-style-type: disc; padding-left: 20px;" class="text-gray-700">
                        <li>Multi-platform or switchback layouts</li>
                        <li>Integrated with landscaping and hardscaping</li>
                        <li>Smart drainage for rainy conditions</li>
                        <li>Hidden anchoring and sleek finishes</li>
                    </ul>
                    <p class="text-gray-700 mt-4">We bring safety and style together in one clean solution.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Custom Design Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-6 lg:px-12 max-w-6xl">
        <h3  class="text-3xl md:text-4xl font-bold text-gray-900 section-title mb-8 text-center">
        Custom Ramp Design & Installation
        </h3>
        <div class="max-w-4xl mx-auto prose prose-lg mb-8">
            <p class="text-lg text-gray-700 leading-relaxed mb-6">
            Every property is different. That's why we offer custom commercial ramps built around your building's exact needs.
            </p>
            <ul style="list-style-type: disc; padding-left: 20px;" class="text-gray-700">
                <li>Fits tight spaces or awkward angles</li>
                <li>Blends into existing pathways and entrances</li>
                <li>Works with automatic door entry ramps and threshold ramps</li>
            </ul>
        </div>
        
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 section-title mb-8 text-center" style="margin-top: 3rem;">
        The Process: Fast, Clear, and Smooth
        </h2>
        <div class="max-w-4xl mx-auto prose prose-lg">
            <p class="text-lg text-gray-700 leading-relaxed mb-6">
            You don't have time for delays or supposition. That's why we follow a simple, smooth process from start to finish.
            </p>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem; margin: 2rem 0;">
                <div>
                    <h3 style="font-weight: bold; color: #2d3748; margin-bottom: 0.5rem;">Step 1: On-Site Consultation:</h3>
                    <p class="text-gray-700">We visit your site and assess your needs, space, and legal requirements.</p>
                </div>
                <div>
                    <h3 style="font-weight: bold; color: #2d3748; margin-bottom: 0.5rem;">Step 2: Custom Quote:</h3>
                    <p class="text-gray-700">You get a detailed quote, clear pricing, timelines, and all options laid out.</p>
                </div>
                <div>
                    <h3 style="font-weight: bold; color: #2d3748; margin-bottom: 0.5rem;">Step 3: Permit Handling:</h3>
                    <p class="text-gray-700">We handle local paperwork, building code approval, and all compliance steps.</p>
                </div>
                <div>
                    <h3 style="font-weight: bold; color: #2d3748; margin-bottom: 0.5rem;">Step 4: Professional Installation:</h3>
                    <p class="text-gray-700">Our trained team builds your ramp quickly and safely, with minimal disturbance.</p>
                </div>
                <div>
                    <h3 style="font-weight: bold; color: #2d3748; margin-bottom: 0.5rem;">Step 5: Final Walkthrough:</h3>
                    <p class="text-gray-700">We show you how to maintain your ramp and leave the site clean and ready to use.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Safety Section -->
<section class="py-16">
    <div class="container mx-auto px-6 lg:px-12 max-w-6xl">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 section-title mb-8 text-center">
        Safety Comes Standard
        </h2>
        <div class="max-w-4xl mx-auto prose prose-lg">
            <p class="text-lg text-gray-700 leading-relaxed mb-6">
            Every ramp we build is designed for long-term safety. That includes:
            </p>
            <ul style="list-style-type: disc; padding-left: 20px;" class="text-gray-700 mb-6">
                <li>Slip-resistant ramps for rain and coastal weather</li>
                <li>Guardrails and grab bars for added security</li>
                <li>Barrier-free ramps for full accessibility</li>
                <li>Anti-rust coatings to stand up to salt air</li>
                <li>Wide wheelchair ramps for all mobility aids</li>
            </ul>
            <p class="text-gray-700 mb-6">We also design weather-resistant ramps that hold up through White Rock's wet winters and hot summers.</p>
            
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 section-title mb-8 text-center" style="margin-top: 3rem;">More Than Just Commercial, We Do Residential Ramps Too</h2>
            <p class="text-lg text-gray-700 leading-relaxed mb-6">While we're experts in commercial properties, we're also trusted for Residential Ramps in White Rock. Whether you're modifying a home for a loved one or planning to age in place, we make your home safer and easier to access.</p>
            <ul style="list-style-type: disc; padding-left: 20px;" class="text-gray-700 mb-6">
                <li>Threshold ramps for doors</li>
                <li>Porch and deck ramps</li>
                <li>Interior mobility ramps</li>
                <li>Wood or aluminum residential ramps</li>
                <li>Clean installation with zero structural damage</li>
            </ul>
        </div>
    </div>
</section>

<!-- Types of Ramps Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-6 lg:px-12 max-w-6xl">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 section-title mb-8 text-center">
        Types of Ramps We Install
        </h2>
        <div class="max-w-4xl mx-auto prose prose-lg">
            <p class="text-lg text-gray-700 leading-relaxed mb-6">
            We match each property with the right solution. Here are a few of our most requested ramp types:
            </p>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
                <ul style="list-style-type: disc; padding-left: 20px;" class="text-gray-700">
                    <li>Aluminum wheelchair ramps</li>
                    <li>Concrete accessibility ramps</li>
                    <li>Threshold ramps for commercial doors</li>
                    <li>Non-slip surface ramps</li>
                    <li>Custom commercial ramps</li>
                    <li>Wooden ramps for back entrances</li>
                </ul>
                <ul style="list-style-type: disc; padding-left: 20px;" class="text-gray-700">
                    <li>Modular access ramps</li>
                    <li>Weather-resistant ramps</li>
                    <li>Wide wheelchair ramps</li>
                    <li>Barrier-free ramps</li>
                    <li>Portable access ramps</li>
                    <li>Heavy-duty ramps for carts and equipment</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- CTA Before Products -->
<section class="py-16 bg-blue-50">
    <div class="container mx-auto px-6 lg:px-12 max-w-6xl text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Call Home2stay Today â€“ Let's Build Your Ramp</h2>
        <p class="text-lg text-gray-700 leading-relaxed mb-8 max-w-2xl mx-auto">
        If you're ready to upgrade your building with Trusted Ramps in White Rock, give us a call. We'll visit your property, create a plan, and build your ramp fast. Don't wait until someone trips or a complaint comes in. Let's make your building safer, more welcoming, and fully accessible today.
        </p>
        <p class="text-lg text-gray-700 leading-relaxed max-w-2xl mx-auto">
        Home2stay is your one-stop solution for both Commercial Ramps in White Rock and Residential Ramps in White Rock. We don't just build ramps, we build confidence, trust, and safer spaces.
        </p>
    </div>
</section>

<!-- Services Section -->
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

<!-- Contact Section -->
<section id="contact" class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 section-title mb-6">
                Contact Home2stay White Rock
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Ready to install a professional ramp for your White Rock business? Contact our team for a free consultation and quote.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Contact Information -->
            <div class="space-y-8">
                <div class="contact-card">
                    <div class="flex items-start space-x-4">
                        <div class="service-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Phone</h3>
                            <p class="text-gray-600 mb-2">Call us for immediate assistance</p>
                            <div class="space-y-2">
                                <div>
                                    <a href="tel:604-259-1211" class="text-xl font-bold text-blue-600 hover:text-blue-700">
                                        (604) 259-1211
                                    </a>
                                    <span class="text-sm text-gray-500 ml-2">Main Line</span>
                                </div>
                            </div>
                            <p class="text-sm text-gray-500 mt-3">Monday - Friday: 8:30 AM - 4:30 PM</p>
                        </div>
                    </div>
                </div>

                <div class="contact-card">
                    <div class="flex items-start space-x-4">
                        <div class="service-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Email</h3>
                            <p class="text-gray-600 mb-2">Send us your questions anytime</p>
                            <a href="mailto:info@home2stay.com" class="text-lg font-semibold text-blue-600 hover:text-blue-700">
                                info@home2stay.com
                            </a>
                            <p class="text-sm text-gray-500 mt-1">We respond within 24 hours</p>
                        </div>
                    </div>
                </div>

                <div class="contact-card">
                    <div class="flex items-start space-x-4">
                        <div class="service-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Office Locations</h3>
                            <div class="space-y-3">
                                <div>
                                    <p class="font-semibold text-gray-800">Vancouver Office</p>
                                    <p class="text-gray-600 text-sm">196 West 6 Ave, Vancouver, BC, V5Y 1K6</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="contact-card">
                    <div class="flex items-start space-x-4">
                        <div class="service-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Service Area</h3>
                            <p class="text-gray-600 mb-2">We proudly serve:</p>
                            <ul class="text-gray-700 space-y-1">
                                <li>â€¢ White Rock (All Areas)</li>
                                <li>â€¢ Crescent Beach & Peace Arch</li>
                                <li>â€¢ Ocean Park & South Surrey</li>
                                <li>â€¢ Blaine, WA (Cross-Border)</li>
                                <li>â€¢ Surrey & Langley</li>
                                <li>â€¢ Throughout Metro Vancouver</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick Quote Form -->
            <div class="contact-card">
                <h2 class="text-2xl font-bold text-gray-900 mb-6 text-center">Get Your Free Quote</h2>
                <form action="/submit-assessment" method="POST" class="space-y-6">
                @csrf
                    <input type="hidden" name="form_type" value="assessment">
                    <input type="hidden" name="form_source" value="area-white-rock_page_assessment_form">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label for="first_name" class="block text-sm font-medium text-gray-700 mb-2">First Name *</label>
                            <input type="text" id="first_name" name="first_name" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                        <div>
                            <label for="last_name" class="block text-sm font-medium text-gray-700 mb-2">Last Name *</label>
                            <input type="text" id="last_name" name="last_name" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address *</label>
                        <input type="email" id="email" name="email" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>

                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Phone Number *</label>
                        <input type="tel" id="phone" name="phone" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>

                    <div>
                        <label for="city" class="block text-sm font-medium text-gray-700 mb-2">City/Neighborhood</label>
                        <input type="text" id="city" name="city" placeholder="e.g., White Rock, Crescent Beach, Peace Arch" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>

                    <div>
                        <label for="service_type" class="block text-sm font-medium text-gray-700 mb-2">Service Interest</label>
                        <select id="service_type" name="service_type" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            <option value="">Select a service</option>
                            <option value="stairlift">Stairlift</option>
                            <option value="grab-bars">Grab Bars & Safety Rails</option>
                            <option value="ramps">Wheelchair Ramps</option>
                            <option value="bathroom">Bathroom Modifications</option>
                            <option value="assessment">Home Assessment</option>
                            <option value="mobility">Mobility Equipment</option>
                            <option value="multiple">Multiple Services</option>
                            <option value="consultation">General Consultation</option>
                        </select>
                    </div>

                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Additional Details</label>
                        <textarea id="message" name="message" rows="4" placeholder="Tell us about your specific needs or questions..." class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"></textarea>
                    </div>

                    <button type="submit" class="btn-primary w-full py-4 text-lg">
                        Request Free Quote
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>

                    <p class="text-xs text-gray-500 text-center">
                        By submitting this form, you agree to our privacy policy. We will never share your information.
                    </p>
                </form>
            </div>
        </div>
    </div>
</section>



<!-- Why Choose Section -->
<section class="py-16">
    <div class="container mx-auto px-6 lg:px-12 max-w-6xl">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 section-title mb-8 text-center">
        Trusted Ramps in White Rock
        </h2>
        <div class="max-w-4xl mx-auto mb-12">
            <p class="text-lg text-gray-700 leading-relaxed mb-6">Your gateway to White Rock's best commercial ramp solutions. We've built a reputation for quality, professionalism, and accessibility expertise that puts us ahead in the White Rock community.</p>
        </div>

    </div>
</section>


<!-- FAQ Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 section-title mb-6">
                Frequently Asked Questions
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Common questions about ramp installation in White Rock, BC
            </p>
        </div>

        <div class="max-w-4xl mx-auto space-y-6">
            <!-- FAQ Item 1 -->
            <div class="faq-item">
                <button class="faq-question">
                    <span>Do you install after hours or on weekends?</span>
                    <svg class="faq-icon h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="faq-answer">
                    <div class="faq-answer-content">
                        Yes. We work around your schedule to minimize disruption.
                    </div>
                </div>
            </div>

            <!-- FAQ Item 2 -->
            <div class="faq-item">
                <button class="faq-question">
                    <span>How long does commercial ramp installation take?</span>
                    <svg class="faq-icon h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="faq-answer">
                    <div class="faq-answer-content">
                        Most projects are completed within 2 to 5 days, depending on size and complexity.
                    </div>
                </div>
            </div>

            <!-- FAQ Item 3 -->
            <div class="faq-item">
                <button class="faq-question">
                    <span>Can you help upgrade an old ramp?</span>
                    <svg class="faq-icon h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="faq-answer">
                    <div class="faq-answer-content">
                        We replace outdated or unsafe ramps with new, code-compliant ones.
                    </div>
                </div>
            </div>

            <!-- FAQ Item 4 -->
            <div class="faq-item">
                <button class="faq-question">
                    <span>What are your ramps made of?</span>
                    <svg class="faq-icon h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="faq-answer">
                    <div class="faq-answer-content">
                        We offer a range of materials: aluminium ramps, composite ramps, galvanised steel ramps, and pressure-treated wood ramps for covered areas.
                    </div>
                </div>
            </div>

            <!-- FAQ Item 5 -->
            <div class="faq-item">
                <button class="faq-question">
                    <span>Are your ramps BC Building Code compliant?</span>
                    <svg class="faq-icon h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="faq-answer">
                    <div class="faq-answer-content">
                        Yes. Every ramp we build is designed to meet or exceed provincial and municipal codes.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Section -->
<section class="py-16 bg-gradient-to-r from-blue-600 to-blue-700 text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-6">
            Get In Touch
        </h2>
        <p class="text-xl mb-8 max-w-3xl mx-auto opacity-90">
        If you're ready to upgrade your building with Trusted Ramps in White Rock, give us a call. We'll visit your property, create a plan, and build your ramp fast. Don't wait until someone trips or a complaint comes in.
</p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="tel:604-259-1211" class="btn-secondary text-lg px-8 py-4">
                Call (604) 259-1211
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                </svg>
            </a>
            <a href="#contact" class="btn-primary text-lg px-8 py-4">
                Get Free Quote
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
            </a>
        </div>
    </div>
</section>


@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Handle form submission
    const form = document.querySelector('form');
    if (form) {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form data
            const formData = new FormData(this);
            const data = Object.fromEntries(formData);
            
            // Basic validation
            if (!data.first_name || !data.last_name || !data.email || !data.phone) {
                showFlash('Please fill in all required fields.', 'error');
                return;
            }
            
            var formEl = this;
            fetch('/submit-assessment', {
                method: 'POST',
                body: formData,
            }).then(function(response) {
                return response.json().catch(function() { return {}; });
            }).then(function(result) {
                showFlash(result.message || 'Thank you! Our team will contact you within 24 hours.');
                formEl.reset();
            }).catch(function() {
                showFlash('Sorry, there was an error. Please try again.', 'error');
            });
        });
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

    // FAQ Collapsible functionality
    document.querySelectorAll('.faq-question').forEach(button => {
        button.addEventListener('click', function() {
            const faqItem = this.closest('.faq-item');
            const answer = faqItem.querySelector('.faq-answer');
            const isActive = this.classList.contains('active');

            // Close all other FAQs
            document.querySelectorAll('.faq-question').forEach(otherButton => {
                otherButton.classList.remove('active');
                otherButton.closest('.faq-item').querySelector('.faq-answer').classList.remove('active');
            });

            // Toggle current FAQ
            if (!isActive) {
                this.classList.add('active');
                answer.classList.add('active');
            }
        });
    });
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
                <form id="productInfoForm" action="/submit-product-inquiry" method="POST">
                    @csrf
                    <input type="hidden" name="form_type" value="product_inquiry">
                    <input type="hidden" name="form_source" value="home_page_product_modal">
                    <input type="hidden" id="productName" name="product" />

                    <!-- Product Info Section -->
                    <div class="mb-6">
                        <h3 class="text-lg font-semibold mb-4 text-primary">Product Information</h3>
                        <div class="p-3 bg-gray-50 rounded-lg mb-4">
                            <p>You're requesting information about: <span id="displayProductName"
                                    class="font-semibold text-primary"></span></p>
                        </div>
                    </div>

                    <!-- Purpose Section -->
                    <div class="mb-6">
                        <h3 class="text-lg font-semibold mb-3 text-primary">What kind of information are you looking for?
                        </h3>
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
                        <h3 class="text-lg font-semibold mb-3 text-primary">Who will be using this product?</h3>
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
                        <h3 class="text-lg font-semibold mb-4 text-primary">Your Contact Information</h3>
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
                            <label for="modal_email" class="block text-sm font-medium text-gray-700 mb-1">Email*</label>
                            <input type="email" id="modal_email" name="email" required
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                        </div>

                        <div class="mt-4">
                            <label for="modal_phone" class="block text-sm font-medium text-gray-700 mb-1">Phone Number*</label>
                            <input type="tel" id="modal_phone" name="phone" required
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

            // Handle form submission with AJAX to prevent quick refresh and show proper feedback
            if (productInfoForm) {
                productInfoForm.addEventListener('submit', function(e) {
                    e.preventDefault(); // Prevent normal form submission to avoid quick refresh
                    
                    console.log('ðŸš€ Product form submission detected!');
                    console.log('Form action:', this.action);
                    console.log('Form method:', this.method);
                    
                    // Check if all required fields are filled
                    const requiredFields = this.querySelectorAll('[required]');
                    let allValid = true;
                    requiredFields.forEach(field => {
                        if (!field.value.trim()) {
                            console.log('Missing required field:', field.name);
                            allValid = false;
                            field.style.borderColor = 'red';
                        } else {
                            field.style.borderColor = '';
                        }
                    });
                    
                    if (!allValid) {
                        console.log('âŒ Form validation failed');
                        alert('Please fill in all required fields (First Name, Last Name, Email, Phone)');
                        return false;
                    }
                    
                    console.log('âœ… Form validation passed, submitting via AJAX...');
                    
                    // Submit form via AJAX
                    const formData = new FormData(this);
                    
                    // Debug: Log all form data
                    console.log('ðŸ“‹ Form data being sent:');
                    for (let [key, value] of formData.entries()) {
                        console.log(`  ${key}: ${value}`);
                    }
                    
                    fetch(this.action, {
                        method: 'POST',
                        body: formData,
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest',
                            'Accept': 'application/json'
                        }
                    })
                    .then(response => {
                        console.log('ðŸ“¡ Server response status:', response.status);
                        return response.json().catch(() => response.text());
                    })
                    .then(data => {
                        console.log('âœ… Server response received');
                        console.log('ðŸ“„ Response data:', data);
                        
                        // Check if it's JSON response
                        if (typeof data === 'object' && data.success !== undefined) {
                            if (data.success) {
                                showFlash(data.message || 'Thank you! Your product inquiry has been submitted successfully. We will contact you soon.');
                                
                                // Reset form and close modal
                                this.reset();
                                modal.classList.add('hidden');
                                document.body.style.overflow = 'auto';
                            } else {
                                showFlash('Error: ' + (data.message || 'There was an error submitting your request.'), 'error');
                            }
                        } else {
                            // Fallback for HTML response (shouldn't happen now)
                            showFlash('Thank you! Your product inquiry has been submitted successfully. We will contact you soon.');
                            this.reset();
                            modal.classList.add('hidden');
                            document.body.style.overflow = 'auto';
                        }
                    })
                    .catch(error => {
                        console.error('âŒ Error submitting form:', error);
                        showFlash('There was an error submitting your request. Please try again or contact us directly.', 'error');
                    });
                });
            }
        });
    </script>
@endpush


