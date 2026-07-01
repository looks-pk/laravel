@extends('layouts.app')

@section('title', 'Trusted Tub Cuts in Vancouver, BC | Home2Stay')
@section('meta_description', 'Professional tub cuts in Vancouver, BC. Safe walk-in bathtub access without full renovation. Trusted tub cut dealers providing fast and affordable accessibility upgrades.')


@push('styles')
<link rel="stylesheet" href="{{ asset('css/area-page.css') }}">
@endpush


@section('content')

<!-- HERO SECTION -->
<section class="hero-section">
<div class="container mx-auto px-4 relative z-10 text-center">

<h1 class="text-4xl md:text-6xl font-bold mb-6">
Trusted Tub Cuts in Vancouver, BC
</h1>

<p class="text-xl md:text-1xl mb-8 opacity-90 max-w-xl mx-auto">
Home2stay delivers professional Tub Cuts in Vancouver designed to improve safety, accessibility, and comfort without costly bathroom renovations. Upgrade your bathtub into a safer walk-in space with clean, fast, and reliable installation.
</p>

<div class="flex flex-col sm:flex-row gap-4 justify-center">
<a href="#contact" class="btn-secondary text-lg px-8 py-4">
Free Site Consultation
</a>

<a href="tel:604-259-1211" class="btn-primary text-lg px-8 py-4">
Call (604) 259-1211
</a>
</div>

</div>
</section>


<!-- WHY CHOOSE SECTION -->
<section class="py-16 bg-gray-50">
<div class="container mx-auto px-4">
<div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

<div>
<h2 class="text-3xl md:text-4xl font-bold section-title mb-8">
Why Choose Home2stay for Tub Cuts in Vancouver?
</h2>

<p class="text-lg text-gray-700 mb-6">
Home2stay is known across Vancouver for dependable workmanship and accessibility upgrades that enhance bathroom safety while preserving style and functionality.
</p>

<ul class="space-y-3">
<li class="flex items-start"><span class="text-green-500 mr-3">âœ“</span>Dedicated tub cut specialists.</li>
<li class="flex items-start"><span class="text-green-500 mr-3">âœ“</span>Licensed and insured professionals.</li>
<li class="flex items-start"><span class="text-green-500 mr-3">âœ“</span>Residential, commercial and rental property solutions.</li>
<li class="flex items-start"><span class="text-green-500 mr-3">âœ“</span>Transparent pricing with no hidden costs.</li>
<li class="flex items-start"><span class="text-green-500 mr-3">âœ“</span>High-quality waterproof materials.</li>
<li class="flex items-start"><span class="text-green-500 mr-3">âœ“</span>Fast installation with full satisfaction follow-up.</li>
</ul>
</div>

<div class="map-container">
<iframe src="https://www.google.com/maps?q=Vancouver+BC&output=embed" loading="lazy"></iframe>
</div>

</div>
</div>
</section>


<!-- SERVICE PROCESS -->
<section class="py-16">
<div class="container mx-auto px-4">

<div class="text-center mb-12">
<h2 class="text-3xl md:text-4xl font-bold section-title">
Our Tub Cut Installation Process
</h2>

<p class="text-xl text-gray-600 max-w-3xl mx-auto">
We follow a simple, professional process ensuring efficient installation and long-lasting results.
</p>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">

<div class="step-card">
<div class="step-number">1</div>
<h3 class="font-bold mb-2">Free Assessment</h3>
<p>We inspect your bathtub, measure dimensions, and plan the safest entry solution.</p>
</div>

<div class="step-card">
<div class="step-number">2</div>
<h3 class="font-bold mb-2">Quote & Scheduling</h3>
<p>Receive a clear written estimate and convenient installation scheduling.</p>
</div>

<div class="step-card">
<div class="step-number">3</div>
<h3 class="font-bold mb-2">Expert Installation</h3>
<p>Precision cutting, waterproof insert installation, and anti-slip finishing.</p>
</div>

<div class="step-card">
<div class="step-number">4</div>
<h3 class="font-bold mb-2">Final Review</h3>
<p>We inspect the work, ensure compliance, and leave your bathroom ready to use.</p>
</div>

</div>
</div>
</section>


<!-- APPLICATIONS -->
<section class="py-16 bg-gray-50">
<div class="container mx-auto px-4">

<div class="text-center mb-12">
<h2 class="text-3xl md:text-4xl font-bold section-title">
Professional Tub Cuts for Every Vancouver Property
</h2>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 gap-8">

<div class="service-card p-8">
<h3 class="font-bold mb-3">Residential Tub Cuts</h3>
<p>
Safer bathing access for families, seniors, and individuals with mobility needs while maintaining your bathroomâ€™s design.
</p>
</div>

<div class="service-card p-8">
<h3 class="font-bold mb-3">Commercial & Multi-Unit Properties</h3>
<p>
Ideal for rental buildings, clinics, hotels, and care facilities needing fast accessibility upgrades with minimal downtime.
</p>
</div>

</div>
</div>
</section>


<!-- BENEFITS -->
<section class="py-16">
<div class="container mx-auto px-4">

<h2 class="text-3xl md:text-4xl font-bold section-title mb-8">
Why Choose a Tub Cut Instead of Full Renovation?
</h2>

<ul class="space-y-4 text-gray-700">
<li>âœ“ Lower cost compared to bathroom remodeling.</li>
<li>âœ“ Installation completed within hours.</li>
<li>âœ“ Maintain existing tub and plumbing.</li>
<li>âœ“ Immediate improvement in accessibility.</li>
<li>âœ“ Enhances property safety and rental appeal.</li>
</ul>

</div>
</section>


{{-- PRODUCTS SECTION IDENTICAL TO MASTER --}}

{{-- PRODUCT SECTION REMAINS IDENTICAL --}}
<section class="py-20 px-10 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-bold relative inline-block mb-12 section-title">Accessibility Solutions for Your Home</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">Our wide range of quality products such as grab bars, bathroom safety equipment, ramps, and more are designed to enhance accessibility and aesthetics, making everyday home life easier for people of all ages and abilities.</p>
        </div>

        
            @include('partials.services')
    </div>
</section>

<!-- LOCAL TRUST -->
<section class="py-16 bg-gray-50">
<div class="container mx-auto px-4 text-center">

<h2 class="text-3xl md:text-4xl font-bold section-title mb-6">
Your Trusted Tub Cuts Dealers in Vancouver
</h2>

<p class="max-w-3xl mx-auto text-gray-600">
Home2stay works with trusted manufacturers and suppliers to deliver premium tub cut solutions across Vancouver homes, apartments, and commercial properties. Every project is completed with durable materials and expert craftsmanship.
</p>

</div>
</section>


{{-- CONTACT SECTION SAME AS MASTER --}}
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
                                    <p class="text-gray-600 text-sm">230 - 825 Powell street, Vancouver, BC, V6A 1H7</p>
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
                                <li>â€¢ Langley (All Areas)</li>
                                <li>â€¢ Surrey & Cloverdale</li>
                                <li>â€¢ Aldergrove & Fort Langley</li>
                                <li>â€¢ Abbotsford & Mission</li>
                                <li>â€¢ Delta & White Rock</li>
                                <li>â€¢ Greater Vancouver & Lower Mainland</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick Quote Form -->
            <div class="contact-card">
                <h3 class="text-2xl font-bold text-gray-900 mb-6 text-center">Book Your Free Site Visit</h3>
                <form action="/submit-assessment" method="POST" class="space-y-6">
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

<!-- FAQ -->
<section class="py-16">
<div class="container mx-auto max-w-4xl">

<h2 class="text-3xl md:text-4xl font-bold text-center section-title mb-12">
Frequently Asked Questions
</h2>

<div class="space-y-6">

<div class="faq-item">
<button class="faq-question">How soon can I use my tub?</button>
<div class="faq-answer active">
<div class="faq-answer-content">
Most tubs are ready the same day or by the next morning.
</div>
</div>
</div>

<div class="faq-item">
<button class="faq-question">Will the tub still look good?</button>
<div class="faq-answer">
<div class="faq-answer-content">
Yes. Our inserts are matched to your bathroom design for a clean, natural appearance.
</div>
</div>
</div>

<div class="faq-item">
<button class="faq-question">How long does installation take?</button>
<div class="faq-answer">
<div class="faq-answer-content">
Typical installation takes between 3 to 6 hours depending on the setup.
</div>
</div>
</div>

<div class="faq-item">
<button class="faq-question">Are installations code compliant?</button>
<div class="faq-answer">
<div class="faq-answer-content">
Yes. All work follows Vancouver building and safety regulations.
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
Ready to Upgrade Your Tub in Vancouver?
</h2>

<p class="max-w-3xl mx-auto mb-8">
Book your free consultation today and let Home2stay create a safer and more accessible bathroom solution.
</p>

<a href="#contact" class="btn-secondary px-8 py-4 text-lg">
Book Free Site Visit
</a>

</div>
</section>

@endsection
