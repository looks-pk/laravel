@extends('layouts.app')

@section('title', 'Trusted Tub Cuts in New Westminster, BC | Home2Stay')
@section('meta_description', 'Professional tub cuts in New Westminster, BC. Safe walk-in bathtub access without full renovation. Trusted contractors for homes, rentals and commercial properties.')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/area-page.css') }}">

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

        
            @include('partials.services')
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