@extends('layouts.app')

@section('title', 'Stair Lifts in Vancouver, BC - Home2stay')
@section('meta_description', 'Professional stair lifts in Vancouver, BC. Custom-fitted stairlifts for home and business. Free consultation and expert installation. Call our dedicated team today!')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/area-page.css') }}">

@endpush

@section('content')
<!-- Hero Section -->
<section class="hero-section">
    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6">
                Stair Lifts in Vancouver, BC
            </h1>
            <p class="text-xl md:text-2xl mb-8 opacity-90 max-w-3xl mx-auto">
                Book your free stair lift service quote today and see just how simple it can be. We're here to help you feel safe, supported, and confident in your own space.
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
                    Trusted Stair Lifts in Vancouver, BC - Safe, Easy, and Affordable Mobility Services
                </h2>
                <div class="prose prose-lg max-w-none">
                    <p class="text-lg text-gray-700 leading-relaxed mb-6">
                        If going up and down your stairs has become a struggle, you're not alone. Many homeowners in Vancouver are now choosing stair lifts to make their homes safer and more comfortable. Call now to book a free in-home consultation anywhere in Vancouver â€“ with no pressure and no obligation, just honest help. Regain your confidence, stay independent, and enjoy your home without limits.
                    </p>
                    <p class="text-gray-600 leading-relaxed mb-6">
                        If you're an injured, elderly person or just fatigued, stairs can be challenging for you at that time. However, you don't need to worry; Home2Stay is always here to assist you. A professionally installed stair lift lets you glide smoothly between floors without any hesitation. It's a fast, affordable way to make your home better for you, so you can stay in the place you love.
                    </p>
                </div>
            </div>
            <div class="map-container">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d830690.5257473224!2d-123.27708334570312!3d49.26428489746634!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x548673f143a94fb3%3A0xbb9196ea9b81f38b!2sVancouver%2C%20BC%2C%20Canada!5e0!3m2!1sen!2sus!4v1640995400000!5m2!1sen!2sus"
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </div>
</section>

<!-- A Natural Wonder in Burnaby Section -->
<section class="py-16">
    <div class="container mx-auto px-6 lg:px-12 max-w-6xl">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 section-title mb-8 text-center">
            Vancouver Stair Lifts â€“ Installed by Local Pros Who Care
        </h2>
        <div class="max-w-4xl mx-auto prose prose-lg">
            <p class="text-lg text-gray-700 leading-relaxed mb-6">
                We're happy to serve the Vancouver community with stair lift services that make a real difference. You don't need to shop around or deal with pushy sales agents. We provide you best services at your doorstep. We know the homes in this area, from older multi-level houses to newer builds and townhomes. Our team provides custom stair lift installations that fit your exact layout and needs.
            </p>
            <div class="text-gray-600 leading-relaxed mb-6">
                <p class="mb-4">Here's what makes our Vancouver stair lift service different:</p>
                <ul class="list-disc pl-6 space-y-2">
                    <li>Local technicians, not random subcontractors</li>
                    <li>Fast scheduling and on-time appointments</li>
                    <li>Clean, respectful, and professional installations</li>
                    <li>Full walkthrough and user training before we leave</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Stair Lifts - Burnaby, BC Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-6 lg:px-12 max-w-6xl">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 section-title mb-8 text-center">
            Stair Lifts in Vancouver, BC â€“ Options for Every Staircase
        </h2>
        <div class="max-w-4xl mx-auto prose prose-lg">
            <p class="text-lg text-gray-700 leading-relaxed mb-6">
                Every home is different, so we offer a broad selection of stair lifts to match your space. Whether your stairs are straight, curved, narrow, or outdoors, we have a model that fits perfectly and looks great too.
            </p>
            <div class="text-gray-600 leading-relaxed mb-6">
                <p class="mb-4">We install:</p>
                <ul class="list-disc pl-6 space-y-2">
                    <li><strong>Straight Stair Lifts:</strong> Simple and cost-effective for standard staircases</li>
                    <li><strong>Curved Stair Lifts:</strong> Custom-fitted for winding, turning, or multi-landing stairs</li>
                    <li><strong>Outdoor Stair Lifts:</strong> Built to handle Vancouver's rain and moisture</li>
                    <li><strong>Heavy-Duty Stair Lifts:</strong> Extra support, extra comfort, same smooth ride</li>
                </ul>
            </div>
            <p class="text-lg text-gray-700 leading-relaxed">
                All our stair lifts are smooth, quiet, and come with top-of-the-line safety features. And yes, they work during power outages too. You'll get a lift that blends into your home, works flawlessly, and feels easy from the very first tour.
            </p>
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

<!-- Fast and Easy Stair Lift Installation Section -->
<section class="py-16">
    <div class="container mx-auto px-6 lg:px-12 max-w-6xl">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 section-title mb-8 text-center">
            Fast and Easy Stair Lift Installation in Vancouver
        </h2>
        <div class="max-w-4xl mx-auto prose prose-lg mb-12">
            <p class="text-lg text-gray-700 leading-relaxed mb-6 text-center">
                Getting a stair lift shouldn't be complicated. We've made the process fast, easy, and smooth from your first call to final installation.
            </p>
            <div class="text-gray-600 leading-relaxed mb-6">
                <p class="mb-4">Here's how it works:</p>
                <ol class="list-decimal pl-6 space-y-2">
                    <li>We visit your home for a free stair check</li>
                    <li>You choose the lift that fits your needs and budget</li>
                    <li>We schedule your installation (often within days)</li>
                    <li>Our trained Vancouver techs install it in just a few hours</li>
                    <li>You get a full demo and easy instructions</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<!-- Why Homeowners Trust Our Vancouver Stair Lifts Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-6 lg:px-12 max-w-6xl">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 section-title mb-8 text-center">
            Why Homeowners Trust Our Vancouver Stair Lifts
        </h2>
        <div class="max-w-4xl mx-auto prose prose-lg mb-12">
            <p class="text-lg text-gray-700 leading-relaxed mb-6 text-center">
                We don't believe in one-size-fits-all solutions. We believe in people-first service. That's why we listen carefully, guide you honestly, and never recommend more than you truly need.
            </p>
            <p class="text-gray-600 leading-relaxed mb-6 text-center">
                Our stair lifts are handpicked from trusted manufacturers who stand behind their products. Every lift comes with a warranty, safety certification, and support when you need it.
            </p>
            <div class="text-gray-600 leading-relaxed mb-6">
                <p class="mb-4">Here's what Vancouver customers love about our stair lift service:</p>
                <ul class="list-disc pl-6 space-y-2">
                    <li>No-pressure consultations</li>
                    <li>Upfront, honest pricing</li>
                    <li>Responsive customer support</li>
                    <li>Ongoing maintenance and service plans</li>
                    <li>Flexible financing options available</li>
                </ul>
            </div>
            <p class="text-lg text-gray-700 leading-relaxed text-center">
                You'll never feel rushed or pushed. We're here to help you feel confident in your choice and proud of the results.
            </p>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 section-title mb-6">
                Contact Home2stay Vancouver
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Ready to make your Vancouver home safer and more accessible? Contact our local team for a free consultation and quote.
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
                                <li>â€¢ Vancouver (All Areas)</li>
                                <li>â€¢ Lower Mainland</li>
                                <li>â€¢ Surrey & Abbotsford</li>
                                <li>â€¢ Richmond & Coquitlam</li>
                                <li>â€¢ Port Moody & Tri-Cities</li>
                                <li>â€¢ Mission & Delta</li>
                                <li>â€¢ Burnaby & Chilliwack</li>
                                <li>â€¢ White Rock & Langley</li>
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
                    <input type="hidden" name="form_source" value="area-vancouver_page_assessment_form">
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
                        <input type="text" id="city" name="city" placeholder="e.g., Downtown, West End, Kitsilano" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
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
<section class="py-16">
    <div class="container mx-auto px-6 lg:px-12 max-w-6xl">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 section-title mb-8 text-center">
            Expert Installation & Local Support in Vancouver
        </h2>
        <div class="max-w-4xl mx-auto mb-12">
            <p class="text-lg text-gray-700 leading-relaxed mb-6 text-center">
                We are a local team living and working in Vancouver. That means we know the homes and the layout of our neighbourhoods, and most importantly. We're just a call away when you need support. Stair lifts Installation Vancouver services. Your wait will not be weeks. Installation is fast, usually taking only a few hours, and is performed with the greatest care. No damage to your walls. No mess was left behind. Just a good and working stairlift.
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
                    Our local Vancouver team will come to your residence to evaluate your mobility requirements and staircase configuration, providing professional advice on the ideal stairlift option for your home.
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
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-6 lg:px-12 max-w-6xl">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 section-title mb-8 text-center">
            Who Can Benefit from a Stairlift in Vancouver?
        </h2>
        <p class="text-lg text-gray-600 mb-12 text-center max-w-3xl mx-auto">
            We're your best partner for your stair lift installation in Vancouver, BC. Call our consultant and get your appointment for stairlift service at your home.
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
                    A lot of Vancouver seniors are choosing to remain in their homes longer. This is where a stair lift comes in; ageing in place becomes a safer reality. You won't need to downsize or go to assisted living. One easy fix can retain your independence.
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
<section class="py-16">
    <div class="container mx-auto px-6 lg:px-12 max-w-6xl">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 section-title mb-8 text-center">
            Stairlift Solutions to Suit Vancouver's Diverse Housing Styles
        </h2>
        <p class="text-lg text-gray-600 mb-12 text-center max-w-3xl mx-auto">
            Vancouver has a variety of older and newer properties, bungalows, split-levels and multi-storey houses. Regardless of the type of house that you reside in, we can create our stairlifts to suit your needs.
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
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-6 lg:px-12 max-w-6xl">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 section-title mb-8 text-center">
            Our Major Services
        </h2>
        <p class="text-lg text-gray-600 mb-12 text-center max-w-3xl mx-auto">
            We don't just install stair lifts; we offer a full range of mobility and accessibility services customised to your needs. Whether you're recovering from surgery, planning for ageing in place, or supporting a loved one with mobility challenges, we're here to help with:
        </p>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="service-card p-6">
                <h3 class="text-lg font-bold text-gray-900 mb-3">New Stair Lift Installations</h3>
                <p class="text-gray-600">Straight, curved, indoor, and outdoor models</p>
            </div>

            <div class="service-card p-6">
                <h3 class="text-lg font-bold text-gray-900 mb-3">Stair Lift Repairs</h3>
                <p class="text-gray-600">Quick, reliable fixes by our trained local techs</p>
            </div>

            <div class="service-card p-6">
                <h3 class="text-lg font-bold text-gray-900 mb-3">Regular Maintenance Services</h3>
                <p class="text-gray-600">Keep your lift running safely and smoothly year-round</p>
            </div>

            <div class="service-card p-6">
                <h3 class="text-lg font-bold text-gray-900 mb-3">Stair Lift Rentals</h3>
                <p class="text-gray-600">Ideal for short-term recovery or visiting guests</p>
            </div>

            <div class="service-card p-6">
                <h3 class="text-lg font-bold text-gray-900 mb-3">Buy-Back and Removal Programs</h3>
                <p class="text-gray-600">Smooth options when your lift is no longer needed</p>
            </div>

            <div class="service-card p-6">
                <h3 class="text-lg font-bold text-gray-900 mb-3">24/7 Support</h3>
                <p class="text-gray-600">Emergency support and service calls when you need us</p>
            </div>
        </div>

        <p class="text-gray-600 text-center mt-8 max-w-2xl mx-auto">
            Your comfort, independence, and safety are always our top priorities.
        </p>
    </div>
</section>

<!-- Vancouver, BC After-Hours Support Section -->
<section class="py-16">
    <div class="container mx-auto px-6 lg:px-12 max-w-6xl">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 section-title mb-8 text-center">
            Vancouver, BC After-Hours Support
        </h2>
        <div class="max-w-4xl mx-auto prose prose-lg mb-12">
            <p class="text-lg text-gray-700 leading-relaxed mb-6 text-center">
                Emergencies don't wait for business hours, and neither do we. Our Vancouver, BC, after-hours stair lift support ensures you're never alone if an issue arises. Whether it's late evening, early morning, or a weekend, our responsive team is just a call away.
            </p>
            <div class="text-gray-600 leading-relaxed mb-6">
                <ul class="list-disc pl-6 space-y-2">
                    <li>Fast response for urgent service needs</li>
                    <li>Local technicians familiar with Vancouver homes</li>
                    <li>Peace of mind 24/7</li>
                </ul>
            </div>
            <p class="text-lg text-gray-700 leading-relaxed text-center">
                Because your safety shouldn't be on hold.
            </p>
        </div>
    </div>
</section>

<!-- Service Trouble Calls Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-6 lg:px-12 max-w-6xl">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 section-title mb-8 text-center">
            Service Trouble Calls
        </h2>
        <div class="max-w-4xl mx-auto prose prose-lg mb-12">
            <p class="text-lg text-gray-700 leading-relaxed mb-6 text-center">
                If your stair lift isn't operating as expected, we're just a phone call away. Our Service Trouble Call response team is trained to diagnose and fix most issues quickly, often on the first visit.
            </p>
            <div class="text-gray-600 leading-relaxed mb-6">
                <ul class="list-disc pl-6 space-y-2">
                    <li>Quick diagnostic checks and safety reviews</li>
                    <li>Troubleshooting for error codes, slow movement, or power issues</li>
                    <li>Replacement parts for major brands</li>
                    <li>On-site or remote assistance, depending on the issue</li>
                </ul>
            </div>
            <p class="text-lg text-gray-700 leading-relaxed text-center">
                Don't wait until a small issue becomes a big concern. We're ready to help.
            </p>
        </div>
    </div>
</section>

<!-- Vancouver Device & Regular Maintenance Section -->
<section class="py-16">
    <div class="container mx-auto px-6 lg:px-12 max-w-6xl">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 section-title mb-8 text-center">
            Vancouver Device & Regular Maintenance
        </h2>
        <div class="max-w-4xl mx-auto prose prose-lg mb-12">
            <p class="text-lg text-gray-700 leading-relaxed mb-6 text-center">
                Preventive care is key to long-lasting stair lift performance. Our new Vancouver stair lift maintenance services are designed to keep your device safe, smooth, and worry-free all year round.
            </p>
            <div class="text-gray-600 leading-relaxed mb-6">
                <ul class="list-disc pl-6 space-y-2">
                    <li>Scheduled maintenance plans for all major models</li>
                    <li>Device checks, battery testing, lubrication, and software updates</li>
                    <li>Discounts on repairs with a maintenance subscription</li>
                    <li>Reminders so you never miss a checkup</li>
                </ul>
            </div>
            <p class="text-lg text-gray-700 leading-relaxed text-center">
                A well-maintained lift means peace of mind every time you use it.
            </p>
        </div>
    </div>
</section>

<!-- Locations We Service Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-6 lg:px-12 max-w-6xl">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 section-title mb-8 text-center">
            Locations We Service
        </h2>
        <div class="max-w-4xl mx-auto prose prose-lg mb-12">
            <p class="text-lg text-gray-700 leading-relaxed mb-6 text-center">
                We're proud to serve communities across the Lower Mainland and beyond. If you live in or around the Vancouver area, chances are we've already helped someone on your street. Our service areas include:
            </p>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 text-gray-600 leading-relaxed mb-6">
                <div>
                    <ul class="list-disc pl-6 space-y-2">
                        <li>Lower Mainland</li>
                        <li>Vancouver</li>
                        <li>Surrey</li>
                        <li>Abbotsford</li>
                        <li>Richmond</li>
                        <li>Coquitlam</li>
                    </ul>
                </div>
                <div>
                    <ul class="list-disc pl-6 space-y-2">
                        <li>Port Moody</li>
                        <li>Tri-Cities</li>
                        <li>Mission</li>
                        <li>Delta</li>
                        <li>Pitt Meadows</li>
                        <li>Burnaby</li>
                    </ul>
                </div>
                <div>
                    <ul class="list-disc pl-6 space-y-2">
                        <li>Chilliwack</li>
                        <li>White Rock</li>
                        <li>Aldergrove</li>
                        <li>Maple Ridge</li>
                        <li>Langley</li>
                    </ul>
                </div>
            </div>
            <p class="text-lg text-gray-700 leading-relaxed text-center">
                If you don't see your area listed, just give us a call; we're always expanding to help more homeowners live safely and independently.
            </p>
        </div>
    </div>
</section>

<!-- Stair Lift Dealers in Vancouver, BC Section -->
<section class="py-16">
    <div class="container mx-auto px-6 lg:px-12 max-w-6xl">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 section-title mb-8 text-center">
            Stair Lift Dealers in Vancouver, BC â€“ What to Expect
        </h2>
        <div class="max-w-4xl mx-auto prose prose-lg mb-12">
            <p class="text-lg text-gray-700 leading-relaxed mb-6 text-center">
                Choosing the right stair lift dealer matters. You're not just buying equipmentâ€”you're choosing service, support, and peace of mind. That's why our Vancouver stair lift team focuses on long-term care, not one-time sales.
            </p>
            <p class="text-gray-600 leading-relaxed mb-6 text-center">
                We've worked in hundreds of homes across the Lower Mainland. We know how to spot the best fit quickly and explain it in a way that makes sense.
            </p>
            <div class="text-gray-600 leading-relaxed mb-6">
                <p class="mb-4">With us, you get:</p>
                <ul class="list-disc pl-6 space-y-2">
                    <li>Clear, honest answers to all your questions</li>
                    <li>Top-quality stair lifts made for Canadian homes</li>
                    <li>Fast delivery and expert installation</li>
                    <li>Local service and repairs when needed</li>
                    <li>Friendly follow-up and continued care</li>
                </ul>
            </div>
            <p class="text-lg text-gray-700 leading-relaxed text-center">
                You deserve to feel safe at home again. We'll make it happen, quickly and affordably.
            </p>
        </div>
    </div>
</section>

<!-- Call to Action Section -->
<section class="py-16 bg-gradient-to-r from-blue-600 to-blue-700 text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-6">
            Call Today
        </h2>
        <p class="text-xl mb-8 max-w-3xl mx-auto opacity-90">
            You don't have to keep struggling with stairs. One call can make your home feel like home again. No pressure. Just friendly, reliable stair lift service from a Vancouver team that truly cares. It's not just about getting upstairs; it's about staying independent, safe, and at ease in the home you love.
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
            FAQs
        </h2>

        <div class="max-w-4xl mx-auto space-y-6">
            <div class="faq-item">
                <button class="faq-question" type="button">
                    <span>How long does installation take?</span>
                    <svg class="faq-icon w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="faq-answer">
                    <div class="faq-answer-content">
                        Most straight stair lifts are installed in under four hours. Curved lifts take a little longer due to custom fitting.
                    </div>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" type="button">
                    <span>Are stair lifts noisy or hard to use?</span>
                    <svg class="faq-icon w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="faq-answer">
                    <div class="faq-answer-content">
                        Not at all. Our lifts are whisper-quiet and easy to operate with the push of a button.
                    </div>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" type="button">
                    <span>Can a stair lift damage my stairs or walls?</span>
                    <svg class="faq-icon w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="faq-answer">
                    <div class="faq-answer-content">
                        No damage at all. We install lifts on the stair treads, not your walls. It's secure but fully reversible.
                    </div>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" type="button">
                    <span>Do you offer rentals or financing?</span>
                    <svg class="faq-icon w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="faq-answer">
                    <div class="faq-answer-content">
                        Yes, we do. We offer flexible financing, rental options, and even buy-back programs for short-term needs.
                    </div>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" type="button">
                    <span>What if I need service later?</span>
                    <svg class="faq-icon w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="faq-answer">
                    <div class="faq-answer-content">
                        We're local, so you'll never be left waiting. Our support team is available anytime you need us.
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

