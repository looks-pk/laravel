@extends('layouts.app')

@section('title', 'Stair Lifts in Richmond, BC - Home2stay')
@section('meta_description', 'Professional stair lifts in Richmond, BC. Custom-fitted stairlifts for home and business. Free consultation and expert installation. Call our dedicated team today!')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/area-page.css') }}">

@endpush

@section('content')
<!-- Hero Section -->
<section class="hero-section">
    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6">
                Stair Lifts in Richmond, BC
            </h1>
            <p class="text-xl md:text-2xl mb-8 opacity-90 max-w-3xl mx-auto">
                Ready when you are. The stairs won't get easier, but we can make them feel that way.
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
                    Reliable Stair Lifts in Richmond, BC
                </h2>
                <div class="prose prose-lg max-w-none">
                    <p class="text-lg text-gray-700 leading-relaxed mb-6">
                        It can be a more daunting task if you're getting up and down stairs. If your stairs are making your daily life harder, and you feel too lazy after getting upstairs. Don't worry, we're here for your assistance in Richmond, BC. You can book your free assessment in your area. Our experts provide you free quote with assessment, and we'll take care of your comfort, freedom, and peace of mind. It's just one simple step away.
                    </p>
                    <p class="text-gray-600 leading-relaxed mb-6">
                        Suppose you're living in Richmond, BC, with the expert stair lift solutions just around the corner. There's no reason to struggle another day, with stairs that limit your comfort or safety. Whether your home has a straight staircase, a curved one, or even outdoor steps, there's a lift designed just for you.
                    </p>
                </div>
            </div>
            <div class="map-container">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d81748.56145896127!2d-123.19026629316407!3d49.16637799706872!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5485d9a5c6e0b7db%3A0x41fef49e3b02cf6c!2sRichmond%2C%20BC%2C%20Canada!5e0!3m2!1sen!2sus!4v1640995400000!5m2!1sen!2sus"
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
            Richmond Stair Lifts â€“ Helping You Stay Comfortable at Home
        </h2>
        <div class="max-w-4xl mx-auto prose prose-lg">
            <p class="text-lg text-gray-700 leading-relaxed mb-6">
                When your stairs start to feel unsafe or tiring, it affects everything: your daily routine, your confidence, and even your independence. Our Richmond Stair lift services are especially designed to make your life easier, right where you live. We know the layouts of Richmond homes, the local building codes, and the needs of our community. That's why we provide quick, professional, and friendly service, because we care about our neighbours.
            </p>
            <p class="text-gray-600 leading-relaxed mb-6">
                You can move freely again. From the first phone call to final installation, we handle it all. We'll discuss with you the entire process of how to manage your project and exactly what you need.
            </p>
        </div>
    </div>
</section>

<!-- Stair Lifts - Burnaby, BC Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-6 lg:px-12 max-w-6xl">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 section-title mb-8 text-center">
            Expert Stair Lift Installation in Richmond, BC
        </h2>
        <div class="max-w-4xl mx-auto prose prose-lg">
            <p class="text-lg text-gray-700 leading-relaxed mb-6">
                We keep installation simple. Our Richmond team handles every part of the job, no outsourcing, no confusion. Just simple service from local professionals who respect your time and home.
            </p>
            <div class="text-gray-600 leading-relaxed mb-6">
                <p class="mb-4">Here's what you can expect:</p>
                <ul class="list-disc pl-6 space-y-2">
                    <li>Free home visit to measure and assess your staircase</li>
                    <li>Custom recommendation for your layout and budget</li>
                    <li>Quick installation with no damage to stairs or walls</li>
                    <li>Friendly walkthrough so you know exactly how it works</li>
                </ul>
            </div>
            <p class="text-lg text-gray-700 leading-relaxed">
                Our stair lifts don't just improve mobility, they restore confidence. You'll feel the difference the first time you glide up those stairs with ease. Our stair lifts don't just improve mobility, they restore confidence.
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

<!-- Choose from the Best Stair Lifts in Richmond Section -->
<section class="py-16">
    <div class="container mx-auto px-6 lg:px-12 max-w-6xl">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 section-title mb-8 text-center">
            Choose from the Best Stair Lifts in Richmond
        </h2>
        <div class="max-w-4xl mx-auto prose prose-lg mb-12">
            <p class="text-lg text-gray-700 leading-relaxed mb-6 text-center">
                We carry a full range of stair lifts to match every staircase and lifestyle. Whether you have a compact staircase or a wide curved layout, we'll find the right model for you.
            </p>
            <div class="text-gray-600 leading-relaxed mb-6">
                <p class="mb-4">Here's a quick look at what we offer:</p>
                <ul class="list-disc pl-6 space-y-2">
                    <li><strong>Straight Stair Lifts:</strong> Perfect for simple, straight staircases</li>
                    <li><strong>Curved Stair Lifts:</strong> Custom-built to follow bends and landings</li>
                    <li><strong>Outdoor Stair Lifts:</strong> Designed to handle Richmond's changing weather</li>
                    <li><strong>Heavy-Duty Options:</strong> Built strong for extra weight support and comfort</li>
                </ul>
            </div>
            <p class="text-lg text-gray-700 leading-relaxed text-center">
                All of our lifts are whisper-quiet, easy to control, and designed for safety. You won't just feel supported, you'll feel in control again.
            </p>
        </div>
    </div>
</section>

<!-- Richmond Stair Lift Services That Truly Care Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-6 lg:px-12 max-w-6xl">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 section-title mb-8 text-center">
            Richmond Stair Lift Services That Truly Care
        </h2>
        <div class="max-w-4xl mx-auto prose prose-lg mb-12">
            <p class="text-lg text-gray-700 leading-relaxed mb-6 text-center">
                We're not just another stair lift company; we're Richmond locals who take dignity in real service. We're here to make your home safer, and we take that responsibility seriously.
            </p>
            <div class="text-gray-600 leading-relaxed mb-6">
                <p class="mb-4">From your first call, you'll feel the difference:</p>
                <ul class="list-disc pl-6 space-y-2">
                    <li>No high-pressure sales, just helpful guidance</li>
                    <li>Clear pricing, no surprises, no hidden fees</li>
                    <li>Ongoing support, before, during, and after installation</li>
                    <li>Maintenance and service plans to keep things running smoothly</li>
                </ul>
            </div>
            <p class="text-lg text-gray-700 leading-relaxed text-center">
                We're here when you need us. Whether you have a question next week or years from now, we're only one call away.
            </p>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 section-title mb-6">
                Contact Home2stay Richmond
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Ready to make your Richmond home safer and more accessible? Contact our local team for a free consultation and quote.
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
                                <li>â€¢ Richmond (All Areas)</li>
                                <li>â€¢ Lower Mainland</li>
                                <li>â€¢ Vancouver & Surrey</li>
                                <li>â€¢ Abbotsford & Coquitlam</li>
                                <li>â€¢ Port Moody & Tri-Cities</li>
                                <li>â€¢ Mission & Delta</li>
                                <li>â€¢ Pitt Meadows & Burnaby</li>
                                <li>â€¢ Chilliwack, White Rock, Aldergrove</li>
                                <li>â€¢ Maple Ridge & Langley</li>
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
                    <input type="hidden" name="form_source" value="area-richmond_page_assessment_form">
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
                        <input type="text" id="city" name="city" placeholder="e.g., Steveston, Bridgeport, Richmond Centre" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
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
            Expert Installation & Local Support in Richmond
        </h2>
        <div class="max-w-4xl mx-auto mb-12">
            <p class="text-lg text-gray-700 leading-relaxed mb-6 text-center">
                We are a local team living and working in Richmond. That means we know the homes and the layout of our neighbourhoods, and most importantly. We're just a call away when you need support. Stair lifts Installation Richmond services. Your wait will not be weeks. Installation is fast, usually taking only a few hours, and is performed with the greatest care. No damage to your walls. No mess was left behind. Just a good and working stairlift.
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
                    Our local Richmond team will come to your residence to evaluate your mobility requirements and staircase configuration, providing professional advice on the ideal stairlift option for your home.
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
            Who Can Benefit from a Stairlift in Richmond?
        </h2>
        <p class="text-lg text-gray-600 mb-12 text-center max-w-3xl mx-auto">
            We're your best partner for your stair lift installation in Richmond, BC. Call our consultant and get your appointment for stairlift service at your home.
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
                    A lot of Richmond seniors are choosing to remain in their homes longer. This is where a stair lift comes in; ageing in place becomes a safer reality. You won't need to downsize or go to assisted living. One easy fix can retain your independence.
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
            Stairlift Solutions to Suit Richmond's Diverse Housing Styles
        </h2>
        <p class="text-lg text-gray-600 mb-12 text-center max-w-3xl mx-auto">
            Richmond has a variety of older and newer properties, bungalows, split-levels and multi-storey houses. Regardless of the type of house that you reside in, we can create our stairlifts to suit your needs.
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
            Our experts are not working on a single stair lift service; they provide you with a complete range of mobility and accessibility services that are designed on the basis of your needs. If you're an elderly person or recovering from any surgery, you'd try our services.
        </p>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="service-card p-6">
                <h3 class="text-lg font-bold text-gray-900 mb-3">Stair Lift Installation</h3>
                <p class="text-gray-600">Expert installation by Richmond professionals</p>
            </div>

            <div class="service-card p-6">
                <h3 class="text-lg font-bold text-gray-900 mb-3">24/7 Emergency Support</h3>
                <p class="text-gray-600">Richmond Hill after-hours support when you need us</p>
            </div>

            <div class="service-card p-6">
                <h3 class="text-lg font-bold text-gray-900 mb-3">Service Trouble Calls</h3>
                <p class="text-gray-600">Quick diagnosis and fixes by local experts</p>
            </div>

            <div class="service-card p-6">
                <h3 class="text-lg font-bold text-gray-900 mb-3">Regular Maintenance</h3>
                <p class="text-gray-600">Richmond device maintenance for all major brands</p>
            </div>

            <div class="service-card p-6">
                <h3 class="text-lg font-bold text-gray-900 mb-3">Fast Local Help</h3>
                <p class="text-gray-600">Same-day assessments and quick turnaround</p>
            </div>

            <div class="service-card p-6">
                <h3 class="text-lg font-bold text-gray-900 mb-3">Flexible Options</h3>
                <p class="text-gray-600">Rental, financing, and buy-back programs</p>
            </div>
        </div>
    </div>
</section>

<!-- Richmond Hill After-Hours Support Section -->
<section class="py-16">
    <div class="container mx-auto px-6 lg:px-12 max-w-6xl">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 section-title mb-8 text-center">
            Richmond Hill After-Hours Support
        </h2>
        <div class="max-w-4xl mx-auto prose prose-lg mb-12">
            <p class="text-lg text-gray-700 leading-relaxed mb-6 text-center">
                If you're facing any issue, our experts ensure you're not alone in Richmond. Whether it's any time or day, our expert team members facilitate for you on a single call.
            </p>
            <div class="text-gray-600 leading-relaxed mb-6">
                <p class="mb-4">Our Speciality:</p>
                <ul class="list-disc pl-6 space-y-2">
                    <li>Provided urgent services</li>
                    <li>Our experts are familiar with Richmond residents needs</li>
                    <li>24/7 services available</li>
                </ul>
            </div>
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
                We're providing our best services. If you're in any hurry, our local experts are just a call away. First, we diagnose your major issue, and after that, we'll fix it quickly. We're ready for your help.
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
                Our Richmond stair lift maintenance service is specifically designed to keep your stair lift safe and smooth for you.
            </p>
            <div class="text-gray-600 leading-relaxed mb-6">
                <p class="mb-4">What we planned for you:</p>
                <ul class="list-disc pl-6 space-y-2">
                    <li>We provide our maintenance service for all major brands</li>
                    <li>Our experts check your batteries, lubrication and all updates of your device</li>
                    <li>If you've our maintenance subscription, our company provide you discount on repairs</li>
                    <li>For better performance, follow-up is compulsory</li>
                </ul>
            </div>
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
                Lower Mainland, Vancouver, Surrey, Abbotsford, Richmond, Coquitlam, Port Moody, Tri-Cities, Mission, Delta, Pitt Meadows, Burnaby, Chilliwack, White Rock, Aldergrove, Maple Ridge and Langley!
            </p>
        </div>
    </div>
</section>

<!-- Stair Lift Dealers in Richmond, BC Section -->
<section class="py-16">
    <div class="container mx-auto px-6 lg:px-12 max-w-6xl">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 section-title mb-8 text-center">
            Stair Lift Dealers in Richmond, BC Who Know What Matters
        </h2>
        <div class="max-w-4xl mx-auto prose prose-lg mb-12">
            <p class="text-lg text-gray-700 leading-relaxed mb-6 text-center">
                Buying a stair lift is a personal decision. You want someone who listens and knows what you need, not just someone trying to sell you the most expensive option. That's what sets our Richmond stair lift dealers apart. We take time to learn about your home, your health needs, and your comfort preferences before recommending anything.
            </p>
            <div class="text-gray-600 leading-relaxed mb-6">
                <p class="mb-4">We partner with trusted stair lift manufacturers known for:</p>
                <ul class="list-disc pl-6 space-y-2">
                    <li>Durability and low maintenance</li>
                    <li>Smooth and quiet operation</li>
                    <li>Modern design that fits your home's look</li>
                    <li>Reliable safety features and backup systems</li>
                </ul>
            </div>
            <p class="text-lg text-gray-700 leading-relaxed text-center">
                Every choice will be explained to you, and we'll answer any questions you might have, no rush, no pressure.
            </p>
        </div>
    </div>
</section>

<!-- Fast, Local Help You Can Count On Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-6 lg:px-12 max-w-6xl">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 section-title mb-8 text-center">
            Fast, Local Help You Can Count On
        </h2>
        <div class="max-w-4xl mx-auto prose prose-lg mb-12">
            <p class="text-lg text-gray-700 leading-relaxed mb-6 text-center">
                When you call us, you're not waiting on hold for hours or being transferred between departments. You're talking directly to your local Richmond stair lift team.
            </p>
            <div class="text-gray-600 leading-relaxed mb-6">
                <p class="mb-4">We're proud to offer:</p>
                <ul class="list-disc pl-6 space-y-2">
                    <li>Same-day assessments (when available)</li>
                    <li>Quick turnaround on installs</li>
                    <li>Local technicians, not third-party contractors</li>
                    <li>Friendly follow-ups and check-ins after installation</li>
                </ul>
            </div>
            <p class="text-lg text-gray-700 leading-relaxed text-center">
                You deserve a service that's smooth, professional, and smooth and that's what we're here to deliver.
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
            You don't have to keep struggling with stairs. One call can make your home feel like home again. No pressure. Just friendly, reliable stair lift service from a Richmond team that truly cares. It's not just about getting upstairs; it's about staying independent, safe, and at ease in the home you love.
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
                    <span>How long does it take to install a stair lift?</span>
                    <svg class="faq-icon w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="faq-answer">
                    <div class="faq-answer-content">
                        Most straight stair lifts can be installed in a few hours. Curved lifts may take a little longer due to custom fitting.
                    </div>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" type="button">
                    <span>Is there a stair lift for outdoor use?</span>
                    <svg class="faq-icon w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="faq-answer">
                    <div class="faq-answer-content">
                        Yes, we install weatherproof outdoor stair lifts perfect for Richmond's rain and cold winters.
                    </div>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" type="button">
                    <span>What if I have a tight or narrow staircase?</span>
                    <svg class="faq-icon w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="faq-answer">
                    <div class="faq-answer-content">
                        No problem. We have compact stair lifts designed for small spaces and narrow stairs.
                    </div>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" type="button">
                    <span>Can I rent a stair lift instead of buying?</span>
                    <svg class="faq-icon w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="faq-answer">
                    <div class="faq-answer-content">
                        We offer rental options if you only need it for a short time.
                    </div>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" type="button">
                    <span>Is financial help available?</span>
                    <svg class="faq-icon w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="faq-answer">
                    <div class="faq-answer-content">
                        Yes, we provide flexible financing and payment plans. We also help you explore local funding options if available.
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

