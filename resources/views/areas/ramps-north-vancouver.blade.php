@extends('layouts.app')

@section('title', 'Professional Ramps in North Vancouver | Home2Stay')
@section('meta_description', 'Expert ramp installation services in North Vancouver. Custom wheelchair ramps, modular systems & professional installation. Safe, durable ramps for residential and commercial properties.')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/area-page.css') }}">

@endpush

@section('content')
<!-- Hero Section -->
<section class="hero-section">
    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6">
            Professional Ramps in North Vancouver
            </h1>
            <p class="text-xl md:text-1xl mb-8 opacity-90 max-w-xl mx-auto">Don't have a homemade ramp that suits your place, complies with safety regulations and appears fantastic as well? You're in the right place. Home2stay creates Professional Ramps in North Vancouver that are not merely associated with mobility but also with peace of mind, independence, and actual convenience. It does not matter if you are at home, in business, or in the open; we ensure your ramp will be operational, secure and durable.


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
                    We are not a firm that puts ramps up. Your reliable accessibility provider, with service to every part of the North Shore. Each ramp we construct presupposes one question: How do we simplify this and do it more safely? You have a right to a team that hears you, knows the local land, takes care of all things, design, permits and installation without pressure and time wastage. That's what we do.
                </p>
                <p>We are the experts of the Trusted Ramps in North Vancouver, constructed to</p>
                <ul style="list-style-type: disc; padding-left: 20px;">
                    <li>Private residences</li>
                    <li>Senior living homes</li>
                    <li>Clinics and medical centers
                    </li>
                    <li>Shopfronts and trade premises
                    </li>
                    <li>Schools and community centres.
                    </li>
                </ul>
                <p class="mb-6">You do not just get a quote when you call Home2stay. You have a reliable workforce, a defined system and deliverables you can be comfortable with.</p>
                    
                </div>
            </div>
            <div class="map-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d41677.78830767093!2d-123.10634!3d49.31968!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54866f958f3686a7%3A0x2e83f67eac8e5d9!2sNorth%20Vancouver%2C%20BC%2C%20Canada!5e0!3m2!1sen!2s!4v1737728098036!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-8">
            <div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Our Ramp Services in North Vancouver:</h3>
                <p class="text-lg text-gray-700 leading-relaxed mb-4">
                We provide a complete range of different ramp services in accordance with property types, users, and circumstances. Here's what we can do for you:
                </p>
            </div>
            <div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Residential Ramps:</h3>
                <p class="text-gray-700 leading-relaxed">
                Your home should be comfortable and accessible, no matter your age, mobility, or needs. Our home access ramps are designed to work with your lifestyle, not disturb it.
                </p>
                <ul style="list-style-type: disc; padding-left: 20px;" class="mt-3 text-gray-700">
                    <li>Installed quickly with minimal disruption</li>
                    <li>Safe for everyday use in all weather</li>
                    <li>Customized for porches, steps, and entryways</li>
                    <li>Options for permanent or portable setups</li>
                </ul>
                <p class="text-gray-700 mt-3">We work with homeowners, caregivers, and occupational therapists to ensure the final design works for everyone.</p>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-8">
            <div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Commercial Ramps:</h3>
                <p class="text-gray-700 leading-relaxed mb-4">
                Need a ramp for your storefront or office? Let's get it done right. Our team builds Professional Ramps in North Vancouver that help you meet accessibility codes and create a welcoming experience for every customer.
                </p>
                <ul style="list-style-type: disc; padding-left: 20px;" class="text-gray-700">
                    <li>Built to meet BC Building Code standards</li>
                    <li>Durable materials that hold up to heavy foot traffic</li>
                    <li>Stylish designs that match your property</li>
                    <li>Non-slip surfaces and secure handrails included</li>
                </ul>
                <p class="text-gray-700 mt-3">We also offer maintenance and inspection services to keep your ramp up to code over time.</p>
            </div>
            <div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Modular Ramp Systems:</h3>
                <p class="text-gray-700 leading-relaxed mb-4">
                We offer high-quality modular ramp systems that can be assembled, adjusted, and even relocated as needed. Ideal for:
                </p>
                <ul style="list-style-type: disc; padding-left: 20px;" class="text-gray-700">
                    <li>Rental properties</li>
                    <li>Temporary injury recovery</li>
                    <li>Aging-in-place transitions</li>
                    <li>Events or temporary access needs</li>
                </ul>
                <p class="text-gray-700 mt-3">These systems are rigid, attractive, and fast to install.</p>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-8">
            <div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Custom Ramps for Unique Spaces:</h3>
                <p class="text-gray-700 leading-relaxed mb-4">
                We're experts in building Ramps in North Vancouver that work with challenging spaces, without cutting corners on safety or design.
                </p>
                <ul style="list-style-type: disc; padding-left: 20px;" class="text-gray-700">
                    <li>Site-specific measurements</li>
                    <li>Custom angles, switchbacks, and platforms</li>
                    <li>Smart drainage and slope solutions</li>
                    <li>Blends in with architecture and landscaping</li>
                </ul>
                <p class="text-gray-700 mt-3">If it's possible, we'll find a way.</p>
            </div>
            <div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">What is Special about our Ramps?</h3>
                <p class="text-gray-700 leading-relaxed">
                We think that a ramp must be part of the property- not an afterthought. This is what makes us do the extra mile with every install.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Ramp Features Section -->
<section class="py-16">
    <div class="container mx-auto px-6 lg:px-12 max-w-6xl">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 section-title mb-8 text-center">
        Constructed in the Weather of North Vancouver:
        </h2>
        <div class="max-w-4xl mx-auto prose prose-lg">
            <p class="text-lg text-gray-700 leading-relaxed mb-6">
            We know what the local ramps are going through, and we construct accordingly. All ramps will be made to accommodate moisture and freeze-thaw, and the changing soil.
            </p>
            <ul style="list-style-type: disc; padding-left: 20px;" class="text-gray-700 mb-6">
                <li>Steel or aluminium that is rust-proof.</li>
                <li>Non-slippery floors to keep the premises safe.</li>
                <li>Correct drainage mechanisms to prevent standing water.</li>
                <li>Fastened firmly, so as not to move or subside.</li>
            </ul>
        </div>
    </div>
    
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mt-12">
      <div class="container mx-auto px-6 lg:px-12 max-w-6xl">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 section-title mb-8 text-center">
        Designed for Ease of Use:
        </h2>
        <div class="max-w-4xl mx-auto prose prose-lg">
            <p class="text-lg text-gray-700 leading-relaxed mb-6">
            We keep it simple. You won't need to strain, lift, or struggle.
            </p>
            <ul style="list-style-type: disc; padding-left: 20px;" class="text-gray-700">
                <li>Gentle slopes for walkers, wheelchairs, and scooters</li>
                <li>Level platforms and resting spots where needed</li>
                <li>Secure handrails on both sides</li>
                <li>Clear entry and exit points</li>
            </ul>
            <p class="text-gray-700 mt-4">Our ramps are built for comfort, not just compliance.</p>
        </div>
      </div>

      <div class="container mx-auto px-6 lg:px-12 max-w-6xl">
          <h2 class="text-3xl md:text-4xl font-bold text-gray-900 section-title mb-8 text-center">
          Professional Installation from Start to Finish:
          </h2>
          <div class="max-w-4xl mx-auto prose prose-lg">
              <p class="text-lg text-gray-700 leading-relaxed mb-6">
              You'll never be left guessing what comes next. We manage every part of the process, so your ramp is installed properly the first time.
              </p>
              <p class="text-gray-700 font-semibold mb-3">Here's how we work:</p>
              <ul style="list-style-type: disc; padding-left: 20px;" class="text-gray-700">
                  <li>Free on-site consultation</li>
                  <li>Customized quote based on real measurements</li>
                  <li>Design approval and permit guidance (if needed)</li>
                  <li>Professional, clean installation by trained experts</li>
                  <li>Final walkthrough and user orientation</li>
              </ul>
              <p class="text-gray-700 mt-4">We're fast, efficient, and respectful of your space. You can count on clean work, honest timelines, and top-tier service.</p>
          </div>
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
                Contact Home2stay North Vancouver
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Ready to make your North Vancouver home or business safer and more accessible? Contact our local team for a free consultation and quote.
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
                                <li>â€¢ North Vancouver (All Areas)</li>
                                <li>â€¢ Lynn Valley & Deep Cove</li>
                                <li>â€¢ Lonsdale & Lower Lonsdale</li>
                                <li>â€¢ West Vancouver</li>
                                <li>â€¢ Vancouver & Burnaby</li>
                                <li>â€¢ Throughout Metro Vancouver</li>
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
                    <input type="hidden" name="form_source" value="area-north-vancouver_page_assessment_form">
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
                        <input type="text" id="city" name="city" placeholder="e.g., Lynn Valley, Lonsdale, Deep Cove" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
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
        Why People Trust Home2stay for Ramps in North Vancouver:
        </h2>
        <div class="max-w-4xl mx-auto mb-12">
            <ul class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-8 pl-5 md:pl-10">
                <li class="text-gray-700 mb-3 flex items-start">
                    <span class="bg-blue-100 text-blue-600 rounded-full h-6 w-6 flex items-center justify-center mr-3 mt-1 shrink-0">â€¢</span>
                    <span>Local Expertise: We've worked with hundreds of properties across North Vancouver. From Lynn Valley to Lonsdale to Deep Cove, we know the terrain and the rules.</span>
                </li>
                <li class="text-gray-700 mb-3 flex items-start">
                    <span class="bg-blue-100 text-blue-600 rounded-full h-6 w-6 flex items-center justify-center mr-3 mt-1 shrink-0">â€¢</span>
                    <span>Quality Materials: Our ramps are built to last. No shortcuts, no cheap components. Just real materials, done right.
                    </span>
                </li>
                <li class="text-gray-700 mb-3 flex items-start">
                    <span class="bg-blue-100 text-blue-600 rounded-full h-6 w-6 flex items-center justify-center mr-3 mt-1 shrink-0">â€¢</span>
                    <span>Friendly, Clear Communication: Just real advice and honest answers to your questions.</span>
                </li>
                <li class="text-gray-700 mb-3 flex items-start">
                    <span class="bg-blue-100 text-blue-600 rounded-full h-6 w-6 flex items-center justify-center mr-3 mt-1 shrink-0">â€¢</span>
                    <span>Safety First: Everything we do follows local codes, safety guidelines, and best practices. You'll never have to second-guess your ramp's safety.
                    </span>
                </li>
                <li class="text-gray-700 mb-3 flex items-start">
                    <span class="bg-blue-100 text-blue-600 rounded-full h-6 w-6 flex items-center justify-center mr-3 mt-1 shrink-0">â€¢</span>
                    <span>Lifetime Support: If you're looking to expand or upgrade your ramp. We're here for you. One call and we're back on-site.</span>
                </li>
            </ul>
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
                Common questions about ramp installation in North Vancouver, BC
            </p>
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
                        Most residential ramps are done in 1 to 2 days. Larger or custom projects might take longer, but we'll always give you a clear schedule upfront.
                    </div>
                </div>
            </div>

            <!-- FAQ Item 2 -->
            <div class="faq-item">
                <button class="faq-question">
                    <span>Do I need a permit?</span>
                    <svg class="faq-icon h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="faq-answer">
                    <div class="faq-answer-content">
                        For most permanent ramps in North Vancouver, especially commercial ones, yes. But don't worry, we'll walk you through it and even handle the paperwork for you.
                    </div>
                </div>
            </div>

            <!-- FAQ Item 3 -->
            <div class="faq-item">
                <button class="faq-question">
                    <span>Can I choose how the ramp looks?</span>
                    <svg class="faq-icon h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="faq-answer">
                    <div class="faq-answer-content">
                        We offer a variety of finishes, colours, materials, and styles. Whether you want something modern, subtle, or bold, we'll match your taste and property.
                    </div>
                </div>
            </div>

            <!-- FAQ Item 4 -->
            <div class="faq-item">
                <button class="faq-question">
                    <span>What materials do you use?</span>
                    <svg class="faq-icon h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="faq-answer">
                    <div class="faq-answer-content">
                        We use aluminium, galvanised steel, pressure-treated wood, and composite surfaces, relying on your needs, budget, and preferences.
                    </div>
                </div>
            </div>

            <!-- FAQ Item 5 -->
            <div class="faq-item">
                <button class="faq-question">
                    <span>Can you remove my old ramp?</span>
                    <svg class="faq-icon h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="faq-answer">
                    <div class="faq-answer-content">
                        Yes. We can remove, recycle, or replace old or unsafe ramps as part of your service package.
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
        Don't wait another day to get the access you need. Call Home2stay today or book a FREE on-site consultation. We'll come to you, assess the space, and recommend the best ramp services, without pressure or assumption. We're proud to offer the most reliable, well-designed, and Professional Ramps in North Vancouver.
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


