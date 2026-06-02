@extends('layouts.app')

@section('title', 'Professional Ramps in Delta, BC | Safe, Reliable, and Built for You')
@section('meta_description', 'Professional ramps in Delta, BC. Home2stay offers safe, reliable wheelchair ramps, custom installations, and accessibility solutions. Expert local service.')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/area-page.css') }}">
@endpush

@section('content')
<!-- Hero Section -->
<section class="hero-section">
    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6">
            Professional Ramps in Delta, BC | Safe, Reliable, and Built for You
            </h1>
            <p class="text-xl md:text-1xl mb-8 opacity-90 max-w-xl mx-auto">Looking for safe and durable ramps in Delta? We make accessibility easier, smoother, and more enjoyable. Whether you need a ramp for your home, a business, or a healthcare facility, our team is here to make it happen quickly and professionally. We're experts in Professional Ramps in Delta, BC, and every solution we provide is custom-fit to your needs. From the first phone call to the final installation, we make it simple, fast, and smooth.


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
                Why Choose Home2stay for Your Ramp Installation?
                </h2>
                <div class="prose prose-lg max-w-none">
                    <p class="text-lg text-gray-700 leading-relaxed mb-6">
                    You don't just need a ramp. You need one that's strong, stable, and built for real life. That's what we deliver, every time.
                    </p>
                    <p class="font-semibold text-gray-900 mb-3">Here's why more people trust Home2stay:</p>
                    <ul style="list-style-type: disc; padding-left: 20px;" class="text-gray-700">
                        <li>Fast service with zero shortcuts</li>
                        <li>Certified installers with years of hands-on experience</li>
                        <li>Personalized recommendations</li>
                        <li>ADA-compliant ramp solutions</li>
                        <li>Premium quality materials</li>
                        <li>Built for Canadian weather</li>
                        <li>No "almost right" ramps. Just professional service that fits your schedule and space.</li>
                    </ul>
                    
                </div>
            </div>
            <div class="map-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2631.2!2d-123.0724!3d49.1804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5485c8e8e8e8e8e%3A0xabcdef123456!2sDelta%2C%20BC%2C%20Canada!5e0!3m2!1sen!2s!4v1234567890" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-8">
    </div>
</section>

<!-- Our Ramp Services Section -->
<section class="py-16">
    <div class="container mx-auto px-6 lg:px-12 max-w-6xl">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 section-title mb-8 text-center">
        Make Your Property Safer and More Accessible Today
        </h2>
        <div class="max-w-4xl mx-auto prose prose-lg">
            <p class="text-lg text-gray-700 leading-relaxed mb-6">
            Accessibility isn't optional. Whether it's for seniors, wheelchair users, or anyone with mobility issues, the right ramp changes everything. We design ramps that fit perfectly, look clean, and last long. Our clients choose us because we bring comfort, safety, and peace of mind with every install. You'll love how quickly your new ramp is in place, and how easily it blends into your space.
            </p>
        </div>
    </div>
    
    <div class="grid grid-cols-1 gap-12 items-center mt-12">
      <div class="container mx-auto px-6 lg:px-12 max-w-6xl">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 section-title mb-8 text-center">
        Full-Service Ramp Installations in Delta, BC
        </h2>
        <div class="max-w-4xl mx-auto prose prose-lg">
            <p class="text-lg text-gray-700 leading-relaxed mb-6">
            We provide turnkey ramp services in Delta, including:
            </p>
            <ul style="list-style-type: disc; padding-left: 20px;" class="text-gray-700">
                <li>Residential ramp installation</li>
                <li>Modular aluminum ramps</li>
                <li>Permanent concrete ramps</li>
                <li>Commercial ramp systems</li>
                <li>Indoor threshold ramps</li>
                <li>Portable folding ramps</li>
                <li>Custom ramp designs</li>
            </ul>
            <p class="text-gray-700 mt-4">Every ramp we build is made to your needs. Whether it's for a front porch, a clinic entrance, or a business access point, we'll deliver a smooth, safe solution that looks great.</p>
        </div>
      </div>

      <div class="container mx-auto px-6 lg:px-12 max-w-6xl">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 section-title mb-8 text-center">
        Serving Homes and Businesses Across Delta
        </h2>
        <div class="max-w-4xl mx-auto prose prose-lg">
            <p class="text-lg text-gray-700 leading-relaxed mb-6">
            We imperiously serve homeowners, care homes, businesses, schools, and clinics throughout Delta. We understand the local bylaws and city guidelines. So you can count on us for fast approvals, smart designs, and code-compliant installs. Delta's terrain, weather, and layout require ramps that are designed right the first time. Our team has installed hundreds of ramps in Delta, and we know exactly what works here and what doesn't.
            </p>
        </div>
      </div>

      <div class="container mx-auto px-6 lg:px-12 max-w-6xl">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 section-title mb-8 text-center">
        We're Trusted Ramps Dealers in Delta, BC
        </h2>
        <div class="max-w-4xl mx-auto prose prose-lg">
            <p class="text-lg text-gray-700 leading-relaxed mb-6">
            Looking for the right supplier? You're in the right place. As trusted Ramps Dealers in Delta, BC, we don't just install, we supply premium ramp systems from leading Canadian and North American manufacturers.
            </p>
            <p class="font-semibold text-gray-900 mb-3">You'll get access to:</p>
            <ul style="list-style-type: disc; padding-left: 20px;" class="text-gray-700">
                <li>Modular ramp kits</li>
                <li>Heavy-duty aluminium systems</li>
                <li>Wooden ramps with handrails</li>
                <li>Portable travel ramps</li>
                <li>Vehicle ramps</li>
            </ul>
            <p class="text-gray-700 mt-4">We match the product to your budget, your use, and your space. It's all about getting you the best fit, with no pressure and no upselling.</p>
        </div>
      </div>
    </div>
</section>

<!-- What Makes Different Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-6 lg:px-12 max-w-6xl">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 section-title mb-8 text-center">
        What Makes Our Ramps Different?
        </h2>
        <div class="max-w-4xl mx-auto prose prose-lg">
            <p class="text-lg text-gray-700 leading-relaxed mb-6">
            Here's what puts Home2stay away:
            </p>
            <ul style="list-style-type: disc; padding-left: 20px;" class="text-gray-700">
                <li>Built to last: Our ramps stand up to weather, weight, and daily use</li>
                <li>Seamless integration: Designed to blend into your surroundings</li>
                <li>Slip-resistant: For safety in all conditions</li>
                <li>Low-maintenance: No special care needed</li>
                <li>Easy to remove or relocate: Modular systems can move with you</li>
            </ul>
            <p class="text-gray-700 mt-4">We make sure your ramp makes life easier, not harder.</p>
        </div>
    </div>
</section>

<!-- Most Popular Ramp Types Section -->
<section class="py-16">
    <div class="container mx-auto px-6 lg:px-12 max-w-6xl">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 section-title mb-8 text-center">
        Most Popular Ramp Types in Delta
        </h2>
        <div class="max-w-4xl mx-auto prose prose-lg">
            <p class="text-lg text-gray-700 leading-relaxed mb-6">
            Want to know what people in Delta are choosing? These are our best-sellers:
            </p>
            <ul style="list-style-type: disc; padding-left: 20px;" class="text-gray-700">
                <li>Aluminum modular ramps: Weatherproof, lightweight, and fast to install</li>
                <li>Concrete ramps: Strong, permanent, and great for high-traffic use</li>
                <li>Wooden ramps: Stylish and customizable for home aesthetics</li>
                <li>Threshold ramps: Small, affordable, and ideal for doorways</li>
                <li>Portable ramps: Great for travel or temporary access</li>
            </ul>
            <p class="text-gray-700 mt-4">No matter your choice, we'll help you pick the perfect match.</p>
        </div>
    </div>
</section>

<!-- Quick Installation Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-6 lg:px-12 max-w-6xl">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 section-title mb-8 text-center">
        Quick Installation Procedure
        </h2>
        <div class="max-w-4xl mx-auto prose prose-lg">
            <p class="text-lg text-gray-700 leading-relaxed mb-6">
            We know how important your time is. That's why we work fast, and we get it right the first time.
            </p>
            <p class="font-semibold text-gray-900 mb-3">Our 3-step process:</p>
            <ul style="list-style-type: disc; padding-left: 20px;" class="text-gray-700">
                <li>Free consultation and site check</li>
                <li>Customized recommendation with fair pricing</li>
                <li>Professional installation within days</li>
            </ul>
            <p class="text-gray-700 mt-4">We leave your space clean, safe, and ready to use.</p>
        </div>
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

            
            @include('partials.services')
        </div>
    </section>

<!-- Contact Section -->
<section id="contact" class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 section-title mb-6">
                Contact Home2stay Delta
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Ready to install a professional ramp for your Delta home or business? Contact our team for a free consultation and quote.
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
                                <li>â€¢ Delta (All Areas)</li>
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
                    <input type="hidden" name="form_source" value="area-delta_page_assessment_form">
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
                        <input type="text" id="city" name="city" placeholder="e.g., Central PoCo, Citadel Heights, Mary Hill" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
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

    </div>
</section>


<!-- FAQ Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 section-title mb-6">
                FAQs
            </h2>
        </div>

        <div class="max-w-4xl mx-auto space-y-6">
            <!-- FAQ Item 1 -->
            <div class="faq-item">
                <button class="faq-question">
                    <span>How long does it take to install a ramp?</span>
                    <svg class="faq-icon h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="faq-answer">
                    <div class="faq-answer-content">
                        Most standard ramps can be installed within 1â€“2 days. Custom or concrete ramps may take a little longer. But we always work around your timeline.
                    </div>
                </div>
            </div>

            <!-- FAQ Item 2 -->
            <div class="faq-item">
                <button class="faq-question">
                    <span>What kind of ramps do you install?</span>
                    <svg class="faq-icon h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="faq-answer">
                    <div class="faq-answer-content">
                        We install permanent ramps, modular systems, portable ramps, and threshold ramps, whatever suits your space and mobility needs best.
                    </div>
                </div>
            </div>

            <!-- FAQ Item 3 -->
            <div class="faq-item">
                <button class="faq-question">
                    <span>Are your ramps weather-resistant?</span>
                    <svg class="faq-icon h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="faq-answer">
                    <div class="faq-answer-content">
                        Yes! All of our ramp materials are selected to handle Delta's rain, snow, and temperature shifts. That means no rusting, warping, or rotting.
                    </div>
                </div>
            </div>

            <!-- FAQ Item 4 -->
            <div class="faq-item">
                <button class="faq-question">
                    <span>Do you offer free estimates?</span>
                    <svg class="faq-icon h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="faq-answer">
                    <div class="faq-answer-content">
                        Every project starts with a free site visit and estimate. No pressure, no obligation, just helpful advice.
                    </div>
                </div>
            </div>

            <!-- FAQ Item 5 -->
            <div class="faq-item">
                <button class="faq-question">
                    <span>Are your ramps suitable for wheelchairs and walkers?</span>
                    <svg class="faq-icon h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="faq-answer">
                    <div class="faq-answer-content">
                        Our ramps meet or exceed accessibility standards. Every slope, width, and surface is designed for smooth, safe use.
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
        If you're ready to upgrade your building with Professional Ramps in Delta, BC, give us a call. We'll visit your property, create a plan, and build your ramp fast. Don't wait until someone trips or a complaint comes in.
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


