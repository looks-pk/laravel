@extends('layouts.app')

@section('title', 'Trusted Tub Cuts in New Westminster, BC | Home2Stay')
@section('meta_description', 'Professional tub cuts in New Westminster, BC. Safe walk-in bathtub access without full renovation. Trusted contractors for homes, rentals and commercial properties.')

@push('styles')
<style>
    :root {
        --primary: #0078bf;
        --primary-dark: #005f96;
        --secondary: #f8b301;
        --secondary-dark: #d99a00;
        --accent: #d40000;
        --text-dark: #2d3748;
        --text-light: #718096;
        --bg-light: #f7fafc;
        --transition: all 0.3s ease;
    }

    .hero-section {
        background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
        color: white;
        padding: 4rem 0;
        position: relative;
        overflow: hidden;
    }

    .hero-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="25" cy="25" r="1" fill="white" opacity="0.1"/><circle cx="75" cy="75" r="1" fill="white" opacity="0.1"/><circle cx="50" cy="10" r="1" fill="white" opacity="0.05"/><circle cx="10" cy="90" r="1" fill="white" opacity="0.05"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
        opacity: 0.3;
    }

    .service-card {
        background: white;
        border-radius: 1rem;
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        transition: var(--transition);
        overflow: hidden;
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    .service-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
    }

    .service-icon {
        width: 4rem;
        height: 4rem;
        background: linear-gradient(45deg, var(--secondary) 0%, var(--secondary-dark) 100%);
        border-radius: 1rem;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 1.5rem;
        color: var(--text-dark);
        font-size: 1.5rem;
    }

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
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        justify-content: center;
    }

    .btn-primary:hover {
        background: linear-gradient(45deg, var(--primary-dark) 0%, var(--primary) 100%);
        transform: translateY(-3px);
        box-shadow: 0 6px 12px rgba(0, 60, 95, 0.2);
        color: white;
        text-decoration: none;
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
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        justify-content: center;
    }

    .btn-secondary:hover {
        background: linear-gradient(45deg, var(--secondary-dark) 0%, var(--secondary) 100%);
        transform: translateY(-3px);
        box-shadow: 0 6px 12px rgba(216, 154, 0, 0.2);
        color: var(--text-dark);
        text-decoration: none;
    }

    .contact-card {
        background: white;
        border-radius: 1rem;
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        padding: 2rem;
        border-top: 4px solid var(--secondary);
    }

    .section-title {
        position: relative;
        display: inline-block;
        margin-bottom: 2rem;
        font-weight: 700;
        letter-spacing: -0.5px;
    }

    .section-title::after {
        content: '';
        position: absolute;
        width: 70px;
        height: 4px;
        background: linear-gradient(90deg, var(--primary) 0%, var(--primary-dark) 100%);
        bottom: -10px;
        left: 0;
        border-radius: 2px;
    }

    .map-container {
        border-radius: 1rem;
        overflow: hidden;
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        height: 400px;
    }

    .map-container iframe {
        width: 100%;
        height: 100%;
        border: none;
        filter: grayscale(20%) contrast(1.1);
        transition: var(--transition);
    }

    .map-container:hover iframe {
        filter: grayscale(0%) contrast(1.2);
    }

    .product-card {
        background: white;
        border-radius: 1rem;
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        transition: var(--transition);
        overflow: hidden;
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    .product-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
    }

    .card-img {
        height: 200px;
        overflow: hidden;
    }

    .card-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: var(--transition);
    }

    .product-card:hover .card-img img {
        transform: scale(1.05);
    }

    .card-body {
        padding: 1.5rem;
        flex: 1;
        display: flex;
        flex-direction: column;
    }

    .card-body h3 {
        font-size: 1.25rem;
        font-weight: 700;
        color: var(--text-dark);
        margin-bottom: 0.75rem;
    }

    .card-body p {
        color: var(--text-light);
        line-height: 1.6;
        flex: 1;
    }

    .card-footer {
        padding: 1rem 1.5rem;
        border-top: 1px solid #e2e8f0;
        margin-top: auto;
    }

    .faq-item {
        background: white;
        border-radius: 1rem;
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        border-top: 4px solid var(--secondary);
        overflow: hidden;
        transition: var(--transition);
    }

    .faq-question {
        padding: 1.5rem;
        cursor: pointer;
        display: flex;
        justify-content: space-between;
        align-items: center;
        background: white;
        border: none;
        width: 100%;
        text-align: left;
        font-weight: 700;
        font-size: 1.125rem;
        color: var(--text-dark);
        transition: var(--transition);
    }

    .faq-question:hover {
        background: #f8fafc;
    }

    .faq-icon {
        transition: transform 0.3s ease;
        flex-shrink: 0;
        margin-left: 1rem;
    }

    .faq-question.active .faq-icon {
        transform: rotate(180deg);
    }

    .faq-answer {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s ease;
    }

    .faq-answer.active {
        max-height: 200px;
    }

    .faq-answer-content {
        padding: 0 1.5rem 1.5rem 1.5rem;
        color: var(--text-light);
        line-height: 1.6;
    }

    .step-card {
        background: white;
        border-radius: 1rem;
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        padding: 2rem;
        border-top: 4px solid var(--primary);
        transition: var(--transition);
    }

    .step-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
    }

    .step-number {
        width: 3rem;
        height: 3rem;
        background: linear-gradient(45deg, var(--primary) 0%, var(--primary-dark) 100%);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-weight: 700;
        font-size: 1.25rem;
        margin-bottom: 1rem;
    }
</style>
@endpush

@section('content')

<!-- Hero Section -->
<section class="hero-section">
<div class="container mx-auto px-4 relative z-10">
<div class="text-center">

<h1 class="text-4xl md:text-6xl font-bold mb-6">
Trusted Tub Cuts in New Westminster, BC
</h1>

<p class="text-xl md:text-1xl mb-8 opacity-90 max-w-xl mx-auto">
Looking for Tub Cuts in New Westminster that combine safety, quality, and affordability? Home2stay provides professional tub cut installations that convert your existing bathtub into a safer walk-in space without expensive renovations. Perfect for homeowners, landlords, and property managers seeking fast accessibility upgrades.
</p>

<div class="flex flex-col sm:flex-row gap-4 justify-center">
<a href="#contact" class="btn-secondary text-lg px-8 py-4">
Get Free Site Visit
</a>

<a href="tel:604-259-1211" class="btn-primary text-lg px-8 py-4">
Call (604) 259-1211
</a>
</div>

</div>
</div>
</section>


<!-- Why Choose Section -->
<section class="py-16 bg-gray-50">
<div class="container mx-auto px-4">
<div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

<div>
<h2 class="text-3xl md:text-4xl font-bold section-title mb-8">
Why Choose Home2stay for Tub Cuts in New Westminster?
</h2>

<p class="text-lg text-gray-700 mb-6">
Home2stay is trusted across New Westminster for reliable, clean, and efficient accessibility upgrades. We specialize exclusively in tub cuts and bathroom access solutions designed for long-term safety and comfort.
</p>

<ul class="space-y-3">
<li class="flex items-start"><span class="text-green-500 mr-3">✓</span>Specialized tub cut professionals.</li>
<li class="flex items-start"><span class="text-green-500 mr-3">✓</span>Residential and commercial installations.</li>
<li class="flex items-start"><span class="text-green-500 mr-3">✓</span>Fast one-day installation available.</li>
<li class="flex items-start"><span class="text-green-500 mr-3">✓</span>Transparent pricing with free consultation.</li>
<li class="flex items-start"><span class="text-green-500 mr-3">✓</span>Durable waterproof materials built for BC homes.</li>
<li class="flex items-start"><span class="text-green-500 mr-3">✓</span>Clean installation with minimal disruption.</li>
</ul>
</div>

<div class="map-container">
<iframe
src="https://www.google.com/maps?q=New+Westminster+BC&output=embed"
loading="lazy">
</iframe>
</div>

</div>
</div>
</section>


<!-- Service Process -->
<section class="py-16">
<div class="container mx-auto px-4">

<div class="text-center mb-12">
<h2 class="text-3xl md:text-4xl font-bold section-title">
Our Tub Cut Installation Process
</h2>

<p class="text-xl text-gray-600 max-w-3xl mx-auto">
Our streamlined process ensures your bathroom upgrade is completed quickly, safely, and professionally.
</p>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">

<div class="step-card">
<div class="step-number">1</div>
<h3 class="font-bold mb-2">Assessment & Consultation</h3>
<p>We inspect your bathtub, measure dimensions, and discuss accessibility goals.</p>
</div>

<div class="step-card">
<div class="step-number">2</div>
<h3 class="font-bold mb-2">Quote & Scheduling</h3>
<p>Transparent quotation covering labour, materials, and timeline.</p>
</div>

<div class="step-card">
<div class="step-number">3</div>
<h3 class="font-bold mb-2">Precision Installation</h3>
<p>We create a smooth low-threshold entry and install waterproof inserts.</p>
</div>

<div class="step-card">
<div class="step-number">4</div>
<h3 class="font-bold mb-2">Final Inspection</h3>
<p>We test sealing, ensure safety compliance, and leave your bathroom ready to use.</p>
</div>

</div>
</div>
</section>


<!-- Applications Section -->
<section class="py-16 bg-gray-50">
<div class="container mx-auto px-4">

<div class="text-center mb-12">
<h2 class="text-3xl md:text-4xl font-bold section-title">
Residential & Commercial Tub Cuts in New Westminster
</h2>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 gap-8">

<div class="service-card p-8">
<h3 class="font-bold mb-3">Residential Tub Cuts</h3>
<p>
Improve bathroom safety for families, seniors, and mobility-limited individuals without full renovation.
</p>
</div>

<div class="service-card p-8">
<h3 class="font-bold mb-3">Commercial Properties</h3>
<p>
Ideal for hotels, clinics, rental buildings, and care facilities needing accessibility upgrades with minimal downtime.
</p>
</div>

</div>
</div>
</section>


<!-- Benefits Section -->
<section class="py-16">
<div class="container mx-auto px-4">

<h2 class="text-3xl md:text-4xl font-bold section-title mb-8">
Why Choose a Tub Cut Instead of Renovation?
</h2>

<ul class="space-y-4 text-gray-700">
<li>✓ Lower cost than full bathroom remodel.</li>
<li>✓ Installation completed within hours.</li>
<li>✓ Preserve existing bathroom design.</li>
<li>✓ Reduce fall risk instantly.</li>
<li>✓ Increase property accessibility and value.</li>
</ul>

</div>
</section>


{{-- PRODUCT SECTION REMAINS IDENTICAL --}}
<section class="py-20 px-10 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-bold relative inline-block mb-12 section-title">Accessibility Solutions for Your Home</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">Our wide range of quality products such as grab bars, bathroom safety equipment, ramps, and more are designed to enhance accessibility and aesthetics, making everyday home life easier for people of all ages and abilities.</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Product Card 1 -->
            <div class="product-card">
                <div class="card-img">
                    <img src="{{ asset('/al-prod-page-imgs/141-1200x800-1-1024x683-min.jpg') }}" alt="Barrier-Free Bathrooms" class="w-full h-full object-cover">
                </div>
                <div class="card-body">
                    <h3>Barrier-Free Bathrooms</h3>
                    <p class="mb-3">Create a safe and accessible oasis with our thoughtfully designed solutions for all mobility needs.</p>
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
                    <ul class="mb-4">
                        <li class="flex items-start mb-1">
                            <svg class="w-4 h-4 text-green-500 mr-2 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            <span class="text-sm">ADA compliant designs</span>
                        </li>
                        <li class="flex items-start mb-1">
                            <svg class="w-4 h-4 text-green-500 mr-2 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            <span class="text-sm">Non-slip surfaces for safety</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-4 h-4 text-green-500 mr-2 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            <span class="text-sm">Easy to clean & maintain</span>
                        </li>
                    </ul>
                </div>
                <div class="card-footer flex justify-between">
                    <a href="/products-categories/barrier-free-bathrooms/" class="inline-flex items-center px-4 py-2 border border-primary text-primary rounded-md hover:bg-primary hover:text-white transition-colors">
                        <span>See More</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" /></svg>
                    </a>
                    <button type="button" data-product="Barrier-Free Bathrooms" class="get-info-btn inline-flex items-center px-4 py-2 border border-black text-black rounded-md hover:bg-primary hover:text-white transition-colors">
                        <span>Get Info</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2h-1V9a1 1 0 00-1-1z" clip-rule="evenodd" /></svg>
                    </button>
                </div>
            </div>

            <!-- Product Card 2 -->
            <div class="product-card">
                <div class="card-img">
                    <img src="{{ asset('/al-prod-page-imgs/Stair-Lifts.jpg') }}" alt="Stairlifts" class="w-full h-full object-cover">
                </div>
                <div class="card-body">
                    <h3>Stairlifts</h3>
                    <p class="mb-3">Glide effortlessly between levels with our reliable stairlifts, designed for individuals with limited mobility.</p>
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
                    <ul class="mb-4">
                        <li class="flex items-start mb-1">
                            <svg class="w-4 h-4 text-green-500 mr-2 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            <span class="text-sm">Quiet & smooth operation</span>
                        </li>
                        <li class="flex items-start mb-1">
                            <svg class="w-4 h-4 text-green-500 mr-2 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            <span class="text-sm">Battery backup system</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-4 h-4 text-green-500 mr-2 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            <span class="text-sm">Custom fit to your staircase</span>
                        </li>
                    </ul>
                </div>
                <div class="card-footer flex justify-between">
                    <a href="/products-categories/stair-lifts/" class="inline-flex items-center px-4 py-2 border border-primary text-primary rounded-md hover:bg-primary hover:text-white transition-colors">
                        <span>See More</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" /></svg>
                    </a>
                    <button type="button" data-product="Stairlifts" class="get-info-btn inline-flex items-center px-4 py-2 border border-black text-black rounded-md hover:bg-primary hover:text-white transition-colors">
                        <span>Get Info</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2h-1V9a1 1 0 00-1-1z" clip-rule="evenodd" /></svg>
                    </button>
                </div>
            </div>

            <!-- Product Card 3 -->
            <div class="product-card">
                <div class="card-img">
                    <img src="{{ asset('/al-prod-page-imgs/Safety-Poles-Handrails.jpg') }}" alt="Safety Poles & Handrails" class="w-full h-full object-cover">
                </div>
                <div class="card-body">
                    <h3>Safety Poles & Handrails</h3>
                    <p class="mb-3">Enhance safety and stability with our safety poles and handrails, providing crucial support in various home areas.</p>
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
                    <ul class="mb-4">
                        <li class="flex items-start mb-1">
                            <svg class="w-4 h-4 text-green-500 mr-2 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            <span class="text-sm">Tension-mounted options</span>
                        </li>
                        <li class="flex items-start mb-1">
                            <svg class="w-4 h-4 text-green-500 mr-2 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            <span class="text-sm">No wall damage installation</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-4 h-4 text-green-500 mr-2 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            <span class="text-sm">Adjustable to your height</span>
                        </li>
                    </ul>
                </div>
                <div class="card-footer flex justify-between">
                    <a href="/products-categories/safety-poles-handrails/" class="inline-flex items-center px-4 py-2 border border-primary text-primary rounded-md hover:bg-primary hover:text-white transition-colors">
                        <span>See More</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" /></svg>
                    </a>
                    <button type="button" data-product="Safety Poles & Handrails" class="get-info-btn inline-flex items-center px-4 py-2 border border-black text-black rounded-md hover:bg-primary hover:text-white transition-colors">
                        <span>Get Info</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2h-1V9a1 1 0 00-1-1z" clip-rule="evenodd" /></svg>
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
                    <p class="mb-3">Embrace accessibility with our versatile ramps, a practical solution to conquer elevation changes indoors or outdoors.</p>
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
                    <ul class="mb-4">
                        <li class="flex items-start mb-1">
                            <svg class="w-4 h-4 text-green-500 mr-2 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            <span class="text-sm">Portable & permanent options</span>
                        </li>
                        <li class="flex items-start mb-1">
                            <svg class="w-4 h-4 text-green-500 mr-2 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            <span class="text-sm">Slip-resistant surfaces</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-4 h-4 text-green-500 mr-2 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            <span class="text-sm">Customizable to your space</span>
                        </li>
                    </ul>
                </div>
                <div class="card-footer flex justify-between">
                    <a href="/products-categories/ramps/" class="inline-flex items-center px-4 py-2 border border-primary text-primary rounded-md hover:bg-primary hover:text-white transition-colors">
                        <span>See More</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" /></svg>
                    </a>
                    <button type="button" data-product="Ramps" class="get-info-btn inline-flex items-center px-4 py-2 border border-black text-black rounded-md hover:bg-primary hover:text-white transition-colors">
                        <span>Get Info</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2h-1V9a1 1 0 00-1-1z" clip-rule="evenodd" /></svg>
                    </button>
                </div>
            </div>

            <!-- Product Card 5 -->
            <div class="product-card">
                <div class="card-img">
                    <img src="{{ asset('/al-prod-page-imgs/Tub-Cuts.jpg') }}" alt="Tub Cuts" class="w-full h-full object-cover">
                </div>
                <div class="card-body">
                    <h3>Tub Cuts</h3>
                    <p class="mb-3">Transform your bathtub into an accessible oasis with our convenient and cost-effective alternative to traditional solutions.</p>
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
                    <ul class="mb-4">
                        <li class="flex items-start mb-1">
                            <svg class="w-4 h-4 text-green-500 mr-2 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            <span class="text-sm">Quick 1-day installation</span>
                        </li>
                        <li class="flex items-start mb-1">
                            <svg class="w-4 h-4 text-green-500 mr-2 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            <span class="text-sm">Preserves existing tub</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-4 h-4 text-green-500 mr-2 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            <span class="text-sm">Watertight seal guarantee</span>
                        </li>
                    </ul>
                </div>
                <div class="card-footer flex justify-between">
                    <a href="/products-categories/tub-cuts/" class="inline-flex items-center px-4 py-2 border border-primary text-primary rounded-md hover:bg-primary hover:text-white transition-colors">
                        <span>See More</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" /></svg>
                    </a>
                    <button type="button" data-product="Tub Cuts" class="get-info-btn inline-flex items-center px-4 py-2 border border-black text-black rounded-md hover:bg-primary hover:text-white transition-colors">
                        <span>Get Info</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2h-1V9a1 1 0 00-1-1z" clip-rule="evenodd" /></svg>
                    </button>
                </div>
            </div>

            <!-- Product Card 6 -->
            <div class="product-card">
                <div class="card-img">
                    <img src="{{ asset('/al-prod-page-imgs/Grab-Bars.jpg') }}" alt="Grab Bars" class="w-full h-full object-cover">
                </div>
                <div class="card-body">
                    <h3>Grab Bars</h3>
                    <p class="mb-3">Elevate bathroom safety with our sturdy and stylish grab bars, providing essential support for confident maneuvering.</p>
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
                    <ul class="mb-4">
                        <li class="flex items-start mb-1">
                            <svg class="w-4 h-4 text-green-500 mr-2 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            <span class="text-sm">Supports up to 500 lbs</span>
                        </li>
                        <li class="flex items-start mb-1">
                            <svg class="w-4 h-4 text-green-500 mr-2 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            <span class="text-sm">Multiple finish options</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-4 h-4 text-green-500 mr-2 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            <span class="text-sm">Professional installation</span>
                        </li>
                    </ul>
                </div>
                <div class="card-footer flex justify-between">
                    <a href="/products-categories/grab-bars/" class="inline-flex items-center px-4 py-2 border border-primary text-primary rounded-md hover:bg-primary hover:text-white transition-colors">
                        <span>See More</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" /></svg>
                    </a>
                    <button type="button" data-product="Grab Bars" class="get-info-btn inline-flex items-center px-4 py-2 border border-black text-black rounded-md hover:bg-primary hover:text-white transition-colors">
                        <span>Get Info</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2h-1V9a1 1 0 00-1-1z" clip-rule="evenodd" /></svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Local Expertise -->
<section class="py-16 bg-gray-50">
<div class="container mx-auto px-4 text-center">

<h2 class="text-3xl md:text-4xl font-bold section-title mb-6">
Serving All Neighborhoods of New Westminster
</h2>

<p class="max-w-3xl mx-auto text-gray-600">
From Queensborough to Sapperton and Uptown New Westminster, Home2stay proudly serves homeowners and property managers with reliable accessibility solutions tailored to local housing styles.
</p>

</div>
</section>


{{-- CONTACT SECTION CLONED --}}
<!-- Contact Section -->
<section id="contact" class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 section-title mb-6">
                Contact Home2stay Langley
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Ready for a safe, stylish bath upgrade in Langley? Contact our team to organise your free site visit and custom options.
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
                                    <a href="tel:604-259-1211" class="text-xl font-bold text-blue-600 hover:text-blue-700">(604) 259-1211</a>
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
                            <a href="mailto:info@home2stay.com" class="text-lg font-semibold text-blue-600 hover:text-blue-700">info@home2stay.com</a>
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
                                <li>• Langley (All Areas)</li>
                                <li>• Surrey & Cloverdale</li>
                                <li>• Aldergrove & Fort Langley</li>
                                <li>• Abbotsford & Mission</li>
                                <li>• Delta & White Rock</li>
                                <li>• Greater Vancouver & Lower Mainland</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick Quote Form -->
            <div class="contact-card">
                <h3 class="text-2xl font-bold text-gray-900 mb-6 text-center">Book Your Free Site Visit</h3>
                <form action="/submit-assessment" class="space-y-6">
                    @csrf
                    <input type="hidden" name="form_type" value="assessment">
                    <input type="hidden" name="form_source" value="area-langley_tub-cuts_page_assessment_form">
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
                        <input type="text" id="city" name="city" placeholder="e.g., Willoughby, Murrayville, Fort Langley" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>
                    <div>
                        <label for="service_type" class="block text-sm font-medium text-gray-700 mb-2">Service Interest</label>
                        <select id="service_type" name="service_type" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            <option value="">Select a service</option>
                            <option value="tub-cuts" selected>Tub Cuts</option>
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
                        <textarea id="message" name="message" rows="4" placeholder="Tell us about your property type, tub, or specific access goals..." class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"></textarea>
                    </div>
                    <button type="submit" class="btn-primary w-full py-4 text-lg">
                        Book Free Site Visit
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                    <p class="text-xs text-gray-500 text-center">By submitting this form, you agree to our privacy policy. We will never share your information.</p>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-16">
<div class="container mx-auto max-w-4xl">

<h2 class="text-3xl md:text-4xl font-bold text-center section-title mb-12">
Frequently Asked Questions
</h2>

<div class="space-y-6">

<div class="faq-item">
<button class="faq-question">
How long does installation take?
</button>
<div class="faq-answer active">
<div class="faq-answer-content">
Most tub cuts are completed within 4–6 hours.
</div>
</div>
</div>

<div class="faq-item">
<button class="faq-question">
Will my tub still work normally?
</button>
<div class="faq-answer">
<div class="faq-answer-content">
Yes. Your bathtub remains fully functional while offering safer entry.
</div>
</div>
</div>

<div class="faq-item">
<button class="faq-question">
Is waterproofing guaranteed?
</button>
<div class="faq-answer">
<div class="faq-answer-content">
We use professional waterproof sealing systems designed specifically for wet environments.
</div>
</div>
</div>

<div class="faq-item">
<button class="faq-question">
Are grants available?
</button>
<div class="faq-answer">
<div class="faq-answer-content">
Some accessibility upgrades may qualify for government assistance programs.
</div>
</div>
</div>

</div>
</div>
</section>


<!-- CTA -->
<section class="py-16 bg-gradient-to-r from-blue-600 to-blue-700 text-white text-center">
<div class="container mx-auto px-4">

<h2 class="text-4xl font-bold mb-6">
Ready to Upgrade Your Bathroom in New Westminster?
</h2>

<p class="max-w-3xl mx-auto mb-8">
Book your free assessment today and let Home2stay deliver a safer, smarter bathing solution.
</p>

<a href="#contact" class="btn-secondary px-8 py-4 text-lg">
Book Free Site Visit
</a>

</div>
</section>

@endsection



@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form');
    if (form) {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            const formData = new FormData(this);
            const data = Object.fromEntries(formData);
            if (!data.first_name || !data.last_name || !data.email || !data.phone) {
                alert('Please fill in all required fields.');
                return;
            }
            alert('Thank you for your request! Our Langley team will contact you within 24 hours.');
            this.reset();
        });
    }

    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        });
    });

    document.querySelectorAll('.faq-question').forEach(button => {
        button.addEventListener('click', function() {
            const faqItem = this.closest('.faq-item');
            const answer = faqItem.querySelector('.faq-answer');
            const isActive = this.classList.contains('active');
            document.querySelectorAll('.faq-question').forEach(otherButton => {
                otherButton.classList.remove('active');
                otherButton.closest('.faq-item').querySelector('.faq-answer').classList.remove('active');
            });
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
        <div class="bg-primary text-white p-4 rounded-t-xl flex justify-between items-center sticky top-0 z-10">
            <h3 class="text-xl font-bold" id="modalProductTitle">Get Product Information</h3>
            <button id="closeModal" class="text-white hover:text-gray-200 focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        <div class="p-6">
            <form id="productInfoForm" action="/submit-product-inquiry" method="POST">
                @csrf
                <input type="hidden" name="form_type" value="product_inquiry">
                <input type="hidden" name="form_source" value="langley_tub-cuts_page_product_modal">
                <input type="hidden" id="productName" name="product" />
                <div class="mb-6">
                    <h4 class="text-lg font-semibold mb-4 text-primary">Product Information</h4>
                    <div class="p-3 bg-gray-50 rounded-lg mb-4">
                        <p>You're requesting information about: <span id="displayProductName" class="font-semibold text-primary"></span></p>
                    </div>
                </div>
                <div class="mb-6">
                    <h4 class="text-lg font-semibold mb-3 text-primary">What kind of information are you looking for?</h4>
                    <div class="space-y-2">
                        <label class="flex items-start"><input type="checkbox" name="infoType[]" value="newProduct" class="mt-1 mr-2"><span>New product information</span></label>
                        <label class="flex items-start"><input type="checkbox" name="infoType[]" value="repairing" class="mt-1 mr-2"><span>Repairing existing product</span></label>
                        <label class="flex items-start"><input type="checkbox" name="infoType[]" value="pricing" class="mt-1 mr-2"><span>Pricing and payment options</span></label>
                        <label class="flex items-start"><input type="checkbox" name="infoType[]" value="installation" class="mt-1 mr-2"><span>Installation services</span></label>
                    </div>
                </div>
                <div class="mb-6">
                    <h4 class="text-lg font-semibold mb-3 text-primary">Who will be using this product?</h4>
                    <div class="space-y-2">
                        <label class="flex items-center"><input type="radio" name="forWhom" value="self" class="mr-2" checked><span>Myself</span></label>
                        <label class="flex items-center"><input type="radio" name="forWhom" value="familyMember" class="mr-2"><span>Family member</span></label>
                        <label class="flex items-center"><input type="radio" name="forWhom" value="client" class="mr-2"><span>Client/Patient</span></label>
                        <label class="flex items-center"><input type="radio" name="forWhom" value="other" class="mr-2"><span>Other</span></label>
                    </div>
                </div>
                <div class="mb-6">
                    <h4 class="text-lg font-semibold mb-4 text-primary">Your Contact Information</h4>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label for="firstName" class="block text-sm font-medium text-gray-700 mb-1">First Name*</label>
                            <input type="text" id="firstName" name="firstName" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                        </div>
                        <div>
                            <label for="lastName" class="block text-sm font-medium text-gray-700 mb-1">Last Name*</label>
                            <input type="text" id="lastName" name="lastName" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                        </div>
                    </div>
                    <div class="mt-4">
                        <label for="modal_email" class="block text-sm font-medium text-gray-700 mb-1">Email*</label>
                        <input type="email" id="modal_email" name="email" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                    </div>
                    <div class="mt-4">
                        <label for="modal_phone" class="block text-sm font-medium text-gray-700 mb-1">Phone Number*</label>
                        <input type="tel" id="modal_phone" name="phone" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                    </div>
                    <div class="mt-4">
                        <label for="comments" class="block text-sm font-medium text-gray-700 mb-1">Additional Comments</label>
                        <textarea id="comments" name="comments" rows="3" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent"></textarea>
                    </div>
                </div>
                <div class="mt-6 flex justify-end">
                    <button type="submit" class="bg-primary hover:bg-primary-dark text-white px-6 py-2 rounded-md font-medium transition duration-300">Submit Request</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const getInfoButtons = document.querySelectorAll('.get-info-btn');
        const modal = document.getElementById('productInfoModal');
        const closeModalBtn = document.getElementById('closeModal');
        const productNameInput = document.getElementById('productName');
        const displayProductName = document.getElementById('displayProductName');
        const modalProductTitle = document.getElementById('modalProductTitle');
        const productInfoForm = document.getElementById('productInfoForm');

        getInfoButtons.forEach(button => {
            button.addEventListener('click', function () {
                const productName = this.getAttribute('data-product');
                productNameInput.value = productName;
                displayProductName.textContent = productName;
                modalProductTitle.textContent = `Get Information: ${productName}`;
                modal.classList.remove('hidden');
                document.body.style.overflow = 'hidden';
            });
        });

        closeModalBtn.addEventListener('click', function () {
            modal.classList.add('hidden');
            document.body.style.overflow = 'auto';
        });

        modal.addEventListener('click', function (e) {
            if (e.target === modal) {
                modal.classList.add('hidden');
                document.body.style.overflow = 'auto';
            }
        });

        if (productInfoForm) {
            productInfoForm.addEventListener('submit', function(e) {
                e.preventDefault();
                const requiredFields = this.querySelectorAll('[required]');
                let allValid = true;
                requiredFields.forEach(field => {
                    if (!field.value.trim()) {
                        allValid = false;
                        field.style.borderColor = 'red';
                    } else {
                        field.style.borderColor = '';
                    }
                });
                if (!allValid) {
                    alert('Please fill in all required fields (First Name, Last Name, Email, Phone)');
                    return false;
                }
                const formData = new FormData(this);
                fetch(this.action, {
                    method: 'POST',
                    body: formData,
                    headers: { 'X-Requested-With': 'XMLHttpRequest', 'Accept': 'application/json' }
                })
                .then(response => response.json().catch(() => response.text()))
                .then(data => {
                    if (typeof data === 'object' && data.success !== undefined) {
                        if (data.success) {
                            alert(data.message || 'Thank you! Your product inquiry has been submitted successfully. We will contact you soon.');
                            this.reset();
                            modal.classList.add('hidden');
                            document.body.style.overflow = 'auto';
                        } else {
                            alert('Error: ' + (data.message || 'There was an error submitting your request.'));
                        }
                    } else {
                        alert('Thank you! Your product inquiry has been submitted successfully. We will contact you soon.');
                        this.reset();
                        modal.classList.add('hidden');
                        document.body.style.overflow = 'auto';
                    }
                })
                .catch(error => {
                    console.error('Error submitting form:', error);
                    alert('There was an error submitting your request. Please try again or contact us directly.');
                });
            });
        }
    });
</script>
@endpush