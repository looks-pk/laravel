@extends('layouts.app')

@section('title', 'Best Stair Lifts Richmond Hill - Home2stay')
@section('meta_description', 'Home2stay Richmond Hill provides professional stairlift installation and accessibility solutions. Expert stair lift installation with 24/7 support in Richmond Hill, ON.')

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

    /* Product Cards Styling */
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

    /* FAQ Collapsible Styling */
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
</style>
@endpush

@section('content')
<!-- Hero Section -->
<section class="hero-section">
    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6">
                Best Stair Lifts Richmond Hill
            </h1>
            <p class="text-xl md:text-2xl mb-8 opacity-90 max-w-3xl mx-auto">
                Call Home2Stay experts for installing a stair lift in Richmond Hill. We're available 24/7 for your assistance in Richmond Hill.
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

<!-- About Richmond Hill Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 section-title mb-8">
                    Reliable Service If Stair Lift In Richmond Hill
                </h2>
                <div class="prose prose-lg max-w-none">
                    <p class="text-lg text-gray-700 leading-relaxed mb-6">
                        If you're searching for the best stairlifts in Richmond Hill, you're in the right place. At some point, usually, the home needs to adjust to make life easier for those people we love. If you or someone else near you is searching for stairs and having more difficulty managing stairs, then a stairlift can make all the difference.
                    </p>
                    <p class="text-gray-600 leading-relaxed">
                        We're experts in stair lifts in Richmond Hill, ON. We offer reliable, safe, and stylish stairlift services customized to your specific needs. With professional service and local support, we ensure that every part of the process is smooth, from your first call to the final installation.
                    </p>
                </div>
            </div>
            <div class="map-container">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d46207.12345678901!2d-79.4872!3d43.8828!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b2a4936291733%3A0x5201760ad6b142d0!2sRichmond%20Hill%2C%20ON%2C%20Canada!5e0!3m2!1sen!2sus!4v1640995400000!5m2!1sen!2sus"
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </div>
</section>

<!-- A Natural Wonder in Richmond Hill Section -->
<section class="py-16">
    <div class="container mx-auto px-6 lg:px-12 max-w-6xl">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 section-title mb-8 text-center">
            A Natural Wonder in Richmond Hill
        </h2>
        <div class="max-w-4xl mx-auto prose prose-lg">
            <p class="text-lg text-gray-700 leading-relaxed mb-6">
                Richmond Hill is a growing, assorted community just north of Toronto. As we know, it's a place full of families, retirees and working professionals. As home age and families change, accessibility becomes more than just a concern; it becomes very essential. Our experts know the unique needs and requirements of Richmond Hill residents. We offer customised stair lift services to our aged clients. Also, we ensure your safety, and our experts take care of your comfortable movement throughout your home.
            </p>
            <p class="text-gray-600 leading-relaxed">
                If you're going to choose any multi-level place or luxury villa, our stairlift services are specially customised to help you move anywhere in your personal space.
            </p>
        </div>
    </div>
</section>

<!-- Stair Lifts - Richmond Hill, ON Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-6 lg:px-12 max-w-6xl">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 section-title mb-8 text-center">
            Stair Lifts - Richmond Hill, ON
        </h2>
        <div class="max-w-4xl mx-auto prose prose-lg">
            <p class="text-lg text-gray-700 leading-relaxed mb-6">
                Your comfort at home matters. When walking up stairs becomes challenging, or even dangerous, it's time to consider a solution that will help make your home safe once more. We offer a choice of Stair Lifts in Richmond Hill, ON, making staying in your own home more manageable than ever. We provide options for custom-made Stair Lifts Installation Richmond Hill that fit into your existing environment. Whether it's a straight or spiral staircase, or outdoors.
            </p>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="py-20 px-10 bg-gray-50">
    <div class="container mx-auto px-6 lg:px-12 max-w-7xl">
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
                    </div>
                    <ul class="mb-4">
                        <li class="flex items-start mb-1">
                            <svg class="w-4 h-4 text-green-500 mr-2 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-sm">ADA compliant designs</span>
                        </li>
                    </ul>
                </div>
                <div class="card-footer flex justify-between">
                    <a href="/products-categories/barrier-free-bathrooms/" class="inline-flex items-center px-4 py-2 border border-primary text-primary rounded-md hover:bg-primary hover:text-white transition-colors">
                        <span>See More</span>
                    </a>
                    <button type="button" data-product="Barrier-Free Bathrooms" class="get-info-btn inline-flex items-center px-4 py-2 border border-black text-black rounded-md hover:bg-primary hover:text-white transition-colors">
                        <span>Get Info</span>
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
                    </div>
                </div>
                <div class="card-footer flex justify-between">
                    <a href="/products-categories/stair-lifts/" class="inline-flex items-center px-4 py-2 border border-primary text-primary rounded-md hover:bg-primary hover:text-white transition-colors">
                        <span>See More</span>
                    </a>
                    <button type="button" data-product="Stairlifts" class="get-info-btn inline-flex items-center px-4 py-2 border border-black text-black rounded-md hover:bg-primary hover:text-white transition-colors">
                        <span>Get Info</span>
                    </button>
                </div>
            </div>

            <!-- Product Card 3 -->
            <div class="product-card">
                <div class="card-img">
                    <img src="{{ asset('/al-prod-page-imgs/Grab-Bars.jpg') }}" alt="Grab Bars" class="w-full h-full object-cover">
                </div>
                <div class="card-body">
                    <h3>Grab Bars</h3>
                    <p class="mb-3">Elevate bathroom safety with our sturdy and stylish grab bars, providing essential support for confident maneuvering.</p>
                </div>
                <div class="card-footer flex justify-between">
                    <a href="/products-categories/grab-bars/" class="inline-flex items-center px-4 py-2 border border-primary text-primary rounded-md hover:bg-primary hover:text-white transition-colors">
                        <span>See More</span>
                    </a>
                    <button type="button" data-product="Grab Bars" class="get-info-btn inline-flex items-center px-4 py-2 border border-black text-black rounded-md hover:bg-primary hover:text-white transition-colors">
                        <span>Get Info</span>
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
                Contact Home2stay Richmond Hill
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Ready to make your Richmond Hill home safer and more accessible? Contact our local team for a free consultation and quote.
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
                                <div>
                                    <a href="tel:604-608-9442" class="text-xl font-bold text-blue-600 hover:text-blue-700">
                                        (604) 608-9442
                                    </a>
                                    <span class="text-sm text-gray-500 ml-2">Direct Line</span>
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
                            <a href="mailto:info@home2stay.ca" class="text-lg font-semibold text-blue-600 hover:text-blue-700">
                                info@home2stay.ca
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
                                <div>
                                    <p class="font-semibold text-gray-800">Port Coquitlam Office</p>
                                    <p class="text-gray-600 text-sm">305-1515 Broadway St. Port Coquitlam, BC</p>
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
                                <li>• Richmond Hill (All Areas)</li>
                                <li>• Toronto & Markham</li>
                                <li>• York Region & Durham</li>
                                <li>• Vaughan & Aurora</li>
                                <li>• Newmarket & Stouffville</li>
                                <li>• Greater Toronto Area</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick Quote Form -->
            <div class="contact-card">
                <h3 class="text-2xl font-bold text-gray-900 mb-6 text-center">Get Your Free Quote</h3>
                <form class="space-y-6">
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
                        <input type="text" id="city" name="city" placeholder="e.g., Thornhill, Oak Ridges, Jefferson" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
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

<!-- Expert Installation & Local Support Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-6 lg:px-12 max-w-6xl">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 section-title mb-8 text-center">
            Expert Installation & Local Support in Richmond Hill
        </h2>
        <div class="max-w-4xl mx-auto mb-12">
            <p class="text-lg text-gray-700 leading-relaxed mb-6 text-center">
                We are a local team living and working in Richmond Hill. That means we know the homes and the layout of our neighbourhoods, and most importantly. We're just a call away when you need support. Stair lifts Installation Richmond Hill services. Your wait will not be weeks. Installation is fast, usually taking only a few hours, and is performed with the greatest care. No damage to your walls. No mess was left behind. Just a good and working stairlift.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="service-card p-8 text-center">
                <div class="service-icon mx-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Local Expertise</h3>
                <p class="text-gray-600">
                    Our local team will come to your residence to evaluate your mobility requirements and staircase configuration, providing professional advice on the ideal stairlift option for your home.
                </p>
            </div>

            <div class="service-card p-8 text-center">
                <div class="service-icon mx-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Professional Installation</h3>
                <p class="text-gray-600">
                    Our qualified installers guarantee that your stairlift is set up swiftly and securely, allowing you to begin using it quickly without interruptions to your daily routine.
                </p>
            </div>

            <div class="service-card p-8 text-center">
                <div class="service-icon mx-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192L5.636 18.364M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Comprehensive Support</h3>
                <p class="text-gray-600">
                    We offer support and maintenance services to ensure your stairlift remains in top condition, providing you with reassurance and quiet well beyond installation.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Who Can Benefit Section -->
<section class="py-16">
    <div class="container mx-auto px-6 lg:px-12 max-w-6xl">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 section-title mb-8 text-center">
            Who Can Benefit from a Stairlift in Richmond Hill?
        </h2>
        <p class="text-lg text-gray-600 mb-12 text-center max-w-3xl mx-auto">
            We're your best partner for your stair lift installation in Richmond Hill, ON. Call our consultant and get your appointment for stairlift service at your home.
        </p>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="service-card p-8">
                <div class="service-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Seniors Choosing to Age in Place</h3>
                <p class="text-gray-600">
                    A lot of Richmond Hill seniors are choosing to remain in their homes longer. This is where a stair lift comes in; ageing in place becomes a safer reality. You won't need to downsize or go to assisted living. One easy fix can retain your independence.
                </p>
            </div>

            <div class="service-card p-8">
                <div class="service-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">People with Mobility Issues</h3>
                <p class="text-gray-600">
                    Immobility issues can occur at any point in life. Whether for a short-term injury or a chronic disease such as arthritis or MS, a stair lift provides safety against falls. This way, you can comfortably and confidently navigate in your own home.
                </p>
            </div>

            <div class="service-card p-8">
                <div class="service-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Family Caregivers and Loved Ones</h3>
                <p class="text-gray-600">
                    And if you're giving a helping hand to a parent or partner, preventing them from falling, a stairlift will make your job easier. It eliminates one of the most dangerous areas in the home: the stairs. It's reassurance, both for yourself and the person that you love.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Stairlift Solutions Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-6 lg:px-12 max-w-6xl">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 section-title mb-8 text-center">
            Stairlift Solutions to Suit Richmond Hill's Diverse Housing Styles
        </h2>
        <p class="text-lg text-gray-600 mb-12 text-center max-w-3xl mx-auto">
            Richmond Hill has a variety of older and newer properties, bungalows, split-levels and multi-storey houses. Regardless of the type of house that you reside in, we can create our stairlifts to suit your needs.
        </p>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="service-card p-8">
                <div class="service-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Straight Stair Lifts</h3>
                <p class="text-gray-600">
                    Ideal for buildings with a single flight of stairs. These are the least expensive and most common options. Fast to set up and extremely reliable.
                </p>
            </div>

            <div class="service-card p-8">
                <div class="service-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.367 2.684 3 3 0 00-5.367-2.684z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Curved Stair Lifts</h3>
                <p class="text-gray-600">
                    If your staircase includes landings or curves, we'll custom-manufacture a curved stairlift that suits your home. They're smooth, safe and custom-made for your particular staircase.
                </p>
            </div>

            <div class="service-card p-8">
                <div class="service-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Outdoor Stair Lifts</h3>
                <p class="text-gray-600">
                    Our lifts also go outside! For stairs that lead to your front door, garden or patio, our outdoor stair lifts are designed to withstand all kinds of weather: snow, rain or shine.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Our Major Services Section -->
<section class="py-16">
    <div class="container mx-auto px-6 lg:px-12 max-w-6xl">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 section-title mb-8 text-center">
            Our Major services
        </h2>
        <p class="text-lg text-gray-600 mb-12 text-center max-w-3xl mx-auto">
            We're not only stairlift experts, we offer a comprehensive range of services for home safety and accessibility in Richmond Hill. And all so you can maintain your independence.
        </p>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="service-card p-6">
                <h3 class="text-lg font-bold text-gray-900 mb-3">Barrier-Free Bathrooms</h3>
                <p class="text-gray-600">Safe and simple to use, carefree designs for all types of mobility</p>
            </div>

            <div class="service-card p-6">
                <h3 class="text-lg font-bold text-gray-900 mb-3">Grab Bars</h3>
                <p class="text-gray-600">Bath, hallway, or anywhere else you may need extra support</p>
            </div>

            <div class="service-card p-6">
                <h3 class="text-lg font-bold text-gray-900 mb-3">Stairlifts</h3>
                <p class="text-gray-600">Industry-leading brands installed by experts</p>
            </div>

            <div class="service-card p-6">
                <h3 class="text-lg font-bold text-gray-900 mb-3">Ramps</h3>
                <p class="text-gray-600">For doorways, porches or anywhere that extra accessibility is needed</p>
            </div>

            <div class="service-card p-6">
                <h3 class="text-lg font-bold text-gray-900 mb-3">Tub Cuts</h3>
                <p class="text-gray-600">Convert a standard tub to a walk-in</p>
            </div>

            <div class="service-card p-6">
                <h3 class="text-lg font-bold text-gray-900 mb-3">Safety Poles & Handrails</h3>
                <p class="text-gray-600">Add stability in the places you need it most</p>
            </div>
        </div>

        <p class="text-gray-600 text-center mt-8 max-w-2xl mx-auto">
            We care deeply about your safety and comfort, which is why we design, measure and install our solutions ourselves and always have real people just a call away to support you when you need it.
        </p>
    </div>
</section>

<!-- Call to Action Section -->
<section class="py-16 bg-gradient-to-r from-blue-600 to-blue-700 text-white">
    <div class="container mx-auto px-4 text-center">
        <p class="text-xl mb-8 max-w-3xl mx-auto opacity-90">
            Ready to make your home safer, easier to live in, and more comfortable for everyone? Call us today. If you're shopping or about to pull the trigger, we're here to walk you through each part of the process. You can get the Best Stair Lifts Richmond Hill by simply making a call. Let us find a way for you to stay in the home you love, without needing to navigate stairs.
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

<!-- FAQs Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-6 lg:px-12 max-w-6xl">
        <h3 class="text-xl font-bold text-gray-900 mb-8 text-center">
            FAQs
        </h3>

                 <div class="max-w-4xl mx-auto space-y-6">
             <div class="faq-item">
                 <button class="faq-question" type="button">
                     <span>How Are Stair Lifts Installed?</span>
                     <svg class="faq-icon w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                     </svg>
                 </button>
                 <div class="faq-answer">
                     <div class="faq-answer-content">
                         Most stair lifts are installed in just a few hours. They attach directly to your stair treads, not the wall, so there's no major construction or damage.
                     </div>
                 </div>
             </div>

             <div class="faq-item">
                 <button class="faq-question" type="button">
                     <span>Do Stair Lift Dealers Serve My Area?</span>
                     <svg class="faq-icon w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                     </svg>
                 </button>
                 <div class="faq-answer">
                     <div class="faq-answer-content">
                         Absolutely. We provide full-service Stairlift installation in Richmond Hill and nearby areas.
                     </div>
                 </div>
             </div>

             <div class="faq-item">
                 <button class="faq-question" type="button">
                     <span>Do Stair Lifts Have a Warranty?</span>
                     <svg class="faq-icon w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                     </svg>
                 </button>
                 <div class="faq-answer">
                     <div class="faq-answer-content">
                         Yes, all our stairlifts come with manufacturer warranties. Extended service plans are also available.
                     </div>
                 </div>
             </div>

             <div class="faq-item">
                 <button class="faq-question" type="button">
                     <span>Are Stair Lifts Covered by Health Insurance?</span>
                     <svg class="faq-icon w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                     </svg>
                 </button>
                 <div class="faq-answer">
                     <div class="faq-answer-content">
                         In most cases, health insurance doesn't cover stair lifts, but there may be tax credits or local funding options available. We'll help you explore them.
                     </div>
                 </div>
             </div>

             <div class="faq-item">
                 <button class="faq-question" type="button">
                     <span>Do Stair Lifts Work During Power Outages?</span>
                     <svg class="faq-icon w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                     </svg>
                 </button>
                 <div class="faq-answer">
                     <div class="faq-answer-content">
                         Yes! Our stair lifts come with battery backup so you can still use them even if the power goes out.
                     </div>
                 </div>
             </div>

             <div class="faq-item">
                 <button class="faq-question" type="button">
                     <span>What Stairlift Weight Capacities Are Available?</span>
                     <svg class="faq-icon w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                     </svg>
                 </button>
                 <div class="faq-answer">
                     <div class="faq-answer-content">
                         Most models support up to 300-400 lbs. We also offer heavy-duty options for higher weight capacities.
                     </div>
                 </div>
             </div>

             <div class="faq-item">
                 <button class="faq-question" type="button">
                     <span>How Much Does A Stair Lift Cost?</span>
                     <svg class="faq-icon w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                     </svg>
                 </button>
                 <div class="faq-answer">
                     <div class="faq-answer-content">
                         Prices vary depending on the model and staircase type. We offer free in-home assessments so you get an accurate quote with no surprises.
                     </div>
                 </div>
             </div>
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
                alert('Please fill in all required fields.');
                return;
            }
            
            // Here you would typically send the data to your server
            alert('Thank you for your quote request! Our Richmond Hill team will contact you within 24 hours.');
            
            // Reset form
            this.reset();
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
@endpush 