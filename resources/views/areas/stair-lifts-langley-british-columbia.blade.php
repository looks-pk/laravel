@extends('layouts.app')

@section('title', 'Professional Stair Lifts in Langley, BC - Home2stay')
@section('meta_description', 'Professional stair lifts in Langley, BC. Your comfort starts with one step, and we\'ll help with the rest. Expert installation and reliable service. Call now!')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/area-page.css') }}">

@endpush

@section('content')
<!-- Hero Section -->
<section class="hero-section">
    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6">
                Professional Stair Lifts in Langley, BC
            </h1>
            <p class="text-xl md:text-2xl mb-8 opacity-90 max-w-3xl mx-auto">
                Your comfort starts with one step, and we'll help with the rest. Call now and discuss your options with our Langley-based stairlift experts.
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
                    Expert Stair Lifts in Langley, BC
                </h2>
                <div class="prose prose-lg max-w-none">
                    <p class="text-lg text-gray-700 leading-relaxed mb-6">
                        If you are shopping for stair lifts in Langley, BC, you are in the best place. We are not just selling machines. What we can do instead is offer freedom, comfort and peace of mind. Whether you have a straight stairway or one that turns around like a winding road, we have the right solution for you.
                    </p>
                    <p class="text-gray-600 leading-relaxed mb-6">
                        It shouldn't be a battle to the top of the stairs every day. Our stair lifts in Langley make life simpler. They're reliable and simple and made to last. We are helping people age in place in the homes and communities they have long known safely, independently and with dignity.
                    </p>
                    <p class="text-gray-600 leading-relaxed">
                        We are not here to sell a product. We're here to assist you. Everything we do is driven by what you need, from choosing the right products to arranging your installation and providing support.
                    </p>
                </div>
            </div>
            <div class="map-container">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d41730.82847295803!2d-122.6607!3d49.0847!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5485d8294c1b53b7%3A0x3a0e7c6c6e5b8c8c!2sLangley%2C%20BC%2C%20Canada!5e0!3m2!1sen!2sus!4v1640995400000!5m2!1sen!2sus"
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="py-20 px-10 bg-gray-50">
    <div class="container mx-auto px-6 lg:px-12 max-w-7xl">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold relative inline-block mb-12 section-title">Accessibility Solutions for Your
                    Home</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Our wide range of quality products such as grab bars, bathroom
                    safety equipment, ramps, and more are designed to enhance accessibility and aesthetics, making everyday
                    home life easier for people of all ages and abilities.</p>
            </div>

            
            @include('partials.services')
        </div>
    </section>

<!-- Contact Section -->
<section id="contact" class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 section-title mb-6">
                Contact Home2stay Langley
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Ready to make your Langley home safer and more accessible? Contact our local team for a free consultation and quote.
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
                                <li>â€¢ Surrey & White Rock</li>
                                <li>â€¢ Vancouver & Burnaby</li>
                                <li>â€¢ Coquitlam & Port Coquitlam</li>
                                <li>â€¢ Richmond & Delta</li>
                                <li>â€¢ Abbotsford & Mission</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick Quote Form -->
            <div class="contact-card">
                <h3 class="text-2xl font-bold text-gray-900 mb-6 text-center">Get Your Free Quote</h3>
                <form action="/submit-assessment" method="POST" class="space-y-6">
                @csrf
                <input type="hidden" name="form_type" value="assessment">
                    <input type="hidden" name="form_source" value="area-langley_page_assessment_form">
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
                        <input type="text" id="city" name="city" placeholder="e.g., Willoughby, Walnut Grove, Brookswood" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
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

<!-- A Natural Wonder in Richmond Hill Section -->
<section class="py-16">
    <div class="container mx-auto px-6 lg:px-12 max-w-6xl">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 section-title mb-8 text-center">
            About Langley, BC
        </h2>
        <div class="max-w-4xl mx-auto prose prose-lg">
            <p class="text-lg text-gray-700 leading-relaxed mb-6">
                The City of Langley is an expanding community, rich in history and the heart of the Fraser Valley; it is a place where the industry meets the economy, the old meets the new, and work meets play. It is where families take root and where seniors put down roots.
            </p>
            <p class="text-gray-600 leading-relaxed">
                The rolling hills, the two-storey homes which sweep you off your feet, they are both gorgeous, but a little challenging for mobility-impaired people. That's the reason why so many people want stair lifts in Langley, BC, and we are here to serve that need with care and professionalism.
            </p>
        </div>
    </div>
</section>

<!-- Expert Installation & Local Support Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-6 lg:px-12 max-w-6xl">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 section-title mb-8 text-center">
            Stairlifts for Seniors in Langley
        </h2>
        <div class="max-w-4xl mx-auto mb-12">
            <p class="text-lg text-gray-700 leading-relaxed mb-6 text-center">
                Every home is different. Everyone is different. This is why our stairlifts are never one-size-fits-all. Our lifts are individualised to match your stairs and your life. You may be recuperating from surgery, coping with arthritis or just starting to climb stairs as well as you used to.
            </p>
            <p class="text-gray-600 leading-relaxed text-center">
                No matter what your circumstances, our Langley stairlifts help to make your home a safer place and your life a little bit easier. We are one of the most reliable Stair Lifts Dealers in Langley has to offer, and we are proud of it! We've helped so many families get their confidence and freedom back.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="service-card p-8 text-center">
                <div class="service-icon mx-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Commercial Stairlifts in Langley, BC</h3>
                <p class="text-gray-600">
                    We are also the best in commercial stairlifts. Public and business spaces are concerns for safety as well. Whether your installation is at a school, office building, or medical centre, wherever you need it. We're experienced in designing quality lifts that comply with safety codes and deliver long-term value.
                </p>
            </div>

            <div class="service-card p-8 text-center">
                <div class="service-icon mx-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Langley, BC After Hours Support</h3>
                <p class="text-gray-600">
                    We don't clock out when you need us most. If there's an emergency, our team is available after hours to assist you.
                </p>
            </div>

            <div class="service-card p-8 text-center">
                <div class="service-icon mx-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192L5.636 18.364M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Langley, BC Device & Regular Maintenance</h3>
                <p class="text-gray-600">
                    A little maintenance goes a long way. Our regular service checks help prevent problems and keep your lift running like new.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Who Can Benefit Section -->
<section class="py-16">
    <div class="container mx-auto px-6 lg:px-12 max-w-6xl">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 section-title mb-8 text-center">
            Residential Stair Lifts in Langley, BC
        </h2>
        <p class="text-lg text-gray-600 mb-12 text-center max-w-3xl mx-auto">
            Home is where comfort begins. Our residential stair lifts are made to blend with your home's style while offering safe, easy travel between floors.
        </p>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="service-card p-8">
                <div class="service-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Stannah 260 Curved (Indoor)</h3>
                <p class="text-gray-600">
                    If your staircase turns, we have you taken care of. The Stannah 260 Curved fits snugly against your stairs and offers a smooth, quiet ride.
                </p>
            </div>

            <div class="service-card p-8">
                <div class="service-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Stannah 600 Straight (Indoor)</h3>
                <p class="text-gray-600">
                    For straight staircases, this model is a favorite. It's sleek, modern, and simple to operate, perfect for any home.
                </p>
            </div>

            <div class="service-card p-8">
                <div class="service-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Commercial Models Available</h3>
                <div class="text-gray-600 space-y-3">
                    <p><strong>Stannah 260 Business (Indoor):</strong> Great for commercial applications with curved stairs. This lift glides right along, appears new and fresh and is suitable for all-day use.</p>
                    <p><strong>K2 Plus Commercial:</strong> Design type: for straight stairs in the business area. It has a slim profile that suits tight spaces. It's also incredibly durable and dependable.</p>
                    <p><strong>Stairfriend Commercial:</strong> Suitable for stairs with more than one turning point. It's terrific for public buildings, which call for more customisation.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stairlift Solutions Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-6 lg:px-12 max-w-6xl">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 section-title mb-8 text-center">
            Types of Stair Lifts | Housing Styles | Langley, BC
        </h2>
        <p class="text-lg text-gray-600 mb-12 text-center max-w-3xl mx-auto">
            No two homes are the same, and neither are our lifts. Whether you live in a modern townhouse, an older heritage home, or a multi-level property, we have the right type of stair lift for your setup. Our team handles everything from measurement to installation with precision and care.
        </p>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="service-card p-8">
                <div class="service-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Straight Stairs</h3>
                <p class="text-gray-600">
                    For single-run staircases. Fast and professional installation with custom-fit stair lift designs. Perfect for most homes.
                </p>
            </div>

            <div class="service-card p-8">
                <div class="service-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.367 2.684 3 3 0 00-5.367-2.684z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Curved Stairs</h3>
                <p class="text-gray-600">
                    For stairs with turns or landings. Custom-manufactured to fit your unique staircase perfectly. Smooth, safe and designed specifically for your home.
                </p>
            </div>

            <div class="service-card p-8">
                <div class="service-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Indoor and Outdoor Use</h3>
                <p class="text-gray-600">
                    We install lifts for both indoor and outdoor applications. Also available for narrow staircases, multiple floors and landings. Weather-resistant outdoor models built to last.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Our Major Services Section -->
<section class="py-16">
    <div class="container mx-auto px-6 lg:px-12 max-w-6xl">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 section-title mb-8 text-center">
            Our Major Services
        </h2>
        <p class="text-lg text-gray-600 mb-12 text-center max-w-3xl mx-auto">
            We're more than just sellers. We offer full-service support so your lift works smoothly every day. We take care of everything from start to finish.
        </p>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="service-card p-6">
                <h3 class="text-lg font-bold text-gray-900 mb-3">Free Home Assessment</h3>
                <p class="text-gray-600">Custom design consultation for your staircase</p>
            </div>

            <div class="service-card p-6">
                <h3 class="text-lg font-bold text-gray-900 mb-3">Professional Installation</h3>
                <p class="text-gray-600">Expert setup with precision and care</p>
            </div>

            <div class="service-card p-6">
                <h3 class="text-lg font-bold text-gray-900 mb-3">Warranty & Ongoing Support</h3>
                <p class="text-gray-600">Comprehensive coverage and maintenance</p>
            </div>

            <div class="service-card p-6">
                <h3 class="text-lg font-bold text-gray-900 mb-3">24/7 Emergency Service</h3>
                <p class="text-gray-600">Round-the-clock assistance when you need it</p>
            </div>

            <div class="service-card p-6">
                <h3 class="text-lg font-bold text-gray-900 mb-3">Service Trouble Calls</h3>
                <p class="text-gray-600">Issues happen, and when they do, we fix them fast</p>
            </div>

            <div class="service-card p-6">
                <h3 class="text-lg font-bold text-gray-900 mb-3">Upgrades & Replacements</h3>
                <p class="text-gray-600">Equipment updates and replacement services</p>
            </div>
        </div>

        <p class="text-gray-600 text-center mt-8 max-w-2xl mx-auto">
            We cover all of Langley and the surrounding areas. No matter where you are in the Lower Mainland, Vancouver, Surrey, Abbotsford, Richmond, Coquitlam, Port Moody, Tri-Cities, Mission, Delta, Pitt Meadows, Burnaby, Chilliwack, White Rock, Aldergrove, Maple Ridge and Langley. We are proud to provide homes and businesses in the area with the best stair lifts in Langley, BC. When you choose us, you're choosing the top-rated stair lifts dealers in Langley.
        </p>
    </div>
</section>

<!-- Call to Action Section -->
<section class="py-16 bg-gradient-to-r from-blue-600 to-blue-700 text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-6">
            Ready to Get Started?
        </h2>
        <p class="text-xl mb-8 max-w-3xl mx-auto opacity-90">
            Ready to reclaim your freedom at home? Don't wait until stairs become a serious safety concern. Call us today for a free in-home assessment. Let's talk about your needs, explore the best options, and schedule your stair lift installation at a time that works for you.
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
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 section-title mb-12 text-center">
            Frequently Asked Questions
        </h2>

                 <div class="max-w-4xl mx-auto space-y-6">
             <div class="faq-item">
                 <button class="faq-question" type="button">
                     <span>Can stairlifts be removed?</span>
                     <svg class="faq-icon w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                     </svg>
                 </button>
                 <div class="faq-answer">
                     <div class="faq-answer-content">
                         Yes, stairlifts are fully removable. We uninstall them without damaging your stairs or walls.
                     </div>
                 </div>
             </div>

             <div class="faq-item">
                 <button class="faq-question" type="button">
                     <span>Can you buy a second-hand stair lift?</span>
                     <svg class="faq-icon w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                     </svg>
                 </button>
                 <div class="faq-answer">
                     <div class="faq-answer-content">
                         Yes, we offer certified pre-owned models. They're tested, cleaned, and guaranteed to perform.
                     </div>
                 </div>
             </div>

             <div class="faq-item">
                 <button class="faq-question" type="button">
                     <span>Is there a stair lift that does not need installation?</span>
                     <svg class="faq-icon w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                     </svg>
                 </button>
                 <div class="faq-answer">
                     <div class="faq-answer-content">
                         Not really. Every safe stair lift needs to be securely installed for safety and proper operation.
                     </div>
                 </div>
             </div>

             <div class="faq-item">
                 <button class="faq-question" type="button">
                     <span>Is there a manual stair lift?</span>
                     <svg class="faq-icon w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                     </svg>
                 </button>
                 <div class="faq-answer">
                     <div class="faq-answer-content">
                         Most stair lifts are electric for ease and safety. Manual models exist but aren't common or practical for most users.
                     </div>
                 </div>
             </div>

             <div class="faq-item">
                 <button class="faq-question" type="button">
                     <span>Is there such a thing as a portable stair lift?</span>
                     <svg class="faq-icon w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                     </svg>
                 </button>
                 <div class="faq-answer">
                     <div class="faq-answer-content">
                         There are portable options like stair-climbing chairs. However, they're best suited for short-term use or emergencies, not daily needs.
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
@endpush

