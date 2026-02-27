@extends('layouts.app')

@section('title', 'Professional Tub Cuts in Delta, BC | Home2Stay')
@section('meta_description', 'Professional tub cuts in Delta, BC. Trusted tub cut dealers for homes, rentals, strata, care facilities & commercial properties. Fast, clean & reliable bath access upgrades — book your free site assessment today.')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/area-page.css') }}">

@endpush

@section('content')

<!-- Hero Section -->
<section class="hero-section">
    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6">
                Professional Tub Cuts in Delta, BC
            </h1>
            <p class="text-xl md:text-1xl mb-8 opacity-90 max-w-xl mx-auto">
                Looking for a company that is fast, caring, and quality-focused for Tub Cuts in Delta, BC? Home2stay is one of the most reputed Tub Cuts Dealers in Delta — providing secure, stylish bath access upgrades without complete bathroom destruction. Whether you are renovating a home, enhancing a rental, or upgrading a commercial space, we handle everything from assessment to installation so you do not have to manage multiple contractors.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#contact" class="btn-secondary text-lg px-8 py-4">
                    Get Free Assessment
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

<!-- Why Choose Us Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 section-title mb-8">
                    Why Home2stay is Your Trusted Choice in Delta
                </h2>
                <p class="text-lg text-gray-700 leading-relaxed mb-6">
                    When you choose Home2stay, you are choosing experience, transparency, and results. You should enjoy a smooth experience with your investment — and that is exactly what we offer.
                </p>
                <ul class="space-y-3">
                    <li class="flex items-start text-gray-700">
                        <span class="text-green-500 mr-3 mt-1 flex-shrink-0">✓</span>
                        We offer free site assessments here in Delta.
                    </li>
                    <li class="flex items-start text-gray-700">
                        <span class="text-green-500 mr-3 mt-1 flex-shrink-0">✓</span>
                        Every tub-cut solution is custom-made to suit your bath, style, and purpose.
                    </li>
                    <li class="flex items-start text-gray-700">
                        <span class="text-green-500 mr-3 mt-1 flex-shrink-0">✓</span>
                        Our installers keep your space tidy, respect your time, and complete work quickly.
                    </li>
                    <li class="flex items-start text-gray-700">
                        <span class="text-green-500 mr-3 mt-1 flex-shrink-0">✓</span>
                        High-quality materials built to resist Delta's weather and multitasking households.
                    </li>
                    <li class="flex items-start text-gray-700">
                        <span class="text-green-500 mr-3 mt-1 flex-shrink-0">✓</span>
                        One smooth process — we are both dealer and installer, so you only deal with us.
                    </li>
                </ul>
            </div>
            <div class="map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d83540.12!2d-123.05!3d49.09!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5485d8b7cf57f7db%3A0x9c0e8f67249df1e6!2sDelta%2C%20BC%2C%20Canada!5e0!3m2!1sen!2s!4v1756724098036!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>

<!-- Service Process Section -->
<section class="py-16">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 section-title mb-6">
                What the Tub Cut Service in Delta Looks Like
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Working with us means your tub cut in Delta is handled from start to finish with clarity and care.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="step-card">
                <div class="step-number">1</div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Site Visit & Assessment</h3>
                <p class="text-gray-600">We come to your Delta property, assess the existing tub, wall height, entry space, tile layout, and discuss your goals — safer entry, ageing in place, rental turnover, or commercial access.</p>
            </div>
            <div class="step-card">
                <div class="step-number">2</div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Custom Plan & Transparent Quote</h3>
                <p class="text-gray-600">We give you a detailed proposal — how much wall to cut, the threshold or insert to install, finish options, the full cost, and the timeline. You approve everything before work begins.</p>
            </div>
            <div class="step-card">
                <div class="step-number">3</div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Installation by Certified Team</h3>
                <p class="text-gray-600">On the agreed date, we protect the area, remove the tub wall section, install a low-threshold entry or door kit, waterproof, apply non-slip surfaces, match the trim or tile finish, and clean up. Most Delta jobs finish in a single day.</p>
            </div>
            <div class="step-card">
                <div class="step-number">4</div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Final Guide & Support</h3>
                <p class="text-gray-600">We test the result, ensure you are satisfied, walk you through maintenance, and provide ongoing support. After we are done, your bath is ready to use safely.</p>
            </div>
        </div>
    </div>
</section>

<!-- Who Benefits + Applications Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
            <!-- Who Benefits -->
            <div>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 section-title mb-8">
                    Who Benefits from Tub Cuts in Delta?
                </h2>
                <p class="text-lg text-gray-700 leading-relaxed mb-6">
                    Our service suits a broad clientele and range of property types across Delta.
                </p>
                <ul class="space-y-4">
                    <li class="flex items-start text-gray-700">
                        <span class="bg-blue-100 text-blue-600 rounded-full h-6 w-6 flex items-center justify-center mr-3 mt-1 shrink-0">•</span>
                        <span>Homeowners wanting safer bath access for themselves or their loved ones.</span>
                    </li>
                    <li class="flex items-start text-gray-700">
                        <span class="bg-blue-100 text-blue-600 rounded-full h-6 w-6 flex items-center justify-center mr-3 mt-1 shrink-0">•</span>
                        <span>Rental property owners and managers preparing units for accessible and efficient tenant turnover.</span>
                    </li>
                    <li class="flex items-start text-gray-700">
                        <span class="bg-blue-100 text-blue-600 rounded-full h-6 w-6 flex items-center justify-center mr-3 mt-1 shrink-0">•</span>
                        <span>Commercial spaces like clinics, spas, or care homes requiring improved access without closures.</span>
                    </li>
                    <li class="flex items-start text-gray-700">
                        <span class="bg-blue-100 text-blue-600 rounded-full h-6 w-6 flex items-center justify-center mr-3 mt-1 shrink-0">•</span>
                        <span>Strata and multi-unit buildings needing a consistent finish across units with minimal disruption.</span>
                    </li>
                    <li class="flex items-start text-gray-700">
                        <span class="bg-blue-100 text-blue-600 rounded-full h-6 w-6 flex items-center justify-center mr-3 mt-1 shrink-0">•</span>
                        <span>Clients planning to age in place or recover who need safer, easier bathtub access.</span>
                    </li>
                </ul>
            </div>

            <!-- Applications -->
            <div>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 section-title mb-8">
                    Residential vs Commercial Applications
                </h2>
                <div class="space-y-5">
                    <div class="contact-card">
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Residential Tub Cut Projects</h3>
                        <p class="text-gray-600">In homes throughout Delta, our tub cut service blends function and design. You get safer access without sacrificing aesthetics — we match finishes, protect surrounding decor, and finish quickly.</p>
                    </div>
                    <div class="contact-card">
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Commercial & Rental Upgrades</h3>
                        <p class="text-gray-600">In higher-use settings, we provide commercial-grade tub cuts that handle traffic, frequent use, and tighter scheduling — coordinating with building managers and business hours to minimise downtime.</p>
                    </div>
                    <div class="contact-card">
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Strata & Multi-Unit Buildings</h3>
                        <p class="text-gray-600">For apartment and condo complexes in Delta, we deliver consistent installations across multiple units, meet strata regulations, and finish efficiently while occupants continue their routines.</p>
                    </div>
                    <div class="contact-card">
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Accessibility & Ageing-in-Place Solutions</h3>
                        <p class="text-gray-600">Step-in thresholds, low entry walls, non-slip surfaces, and optional handrails — all without a full bath remodel. Ideal for mobility, recovery, or long-term ageing-in-place needs.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Smart Financial Sense + Materials Section -->
<section class="py-16">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
            <!-- Financial Sense -->
            <div>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 section-title mb-8">
                    Why a Tub Cut Makes Smart Financial Sense
                </h2>
                <p class="text-lg text-gray-700 leading-relaxed mb-6">
                    A professionally completed tub cut is a smart idea for Delta property owners seeking better access at a fraction of the cost.
                </p>
                <ul class="space-y-4">
                    <li class="flex items-start text-gray-700">
                        <span class="bg-blue-100 text-blue-600 rounded-full h-6 w-6 flex items-center justify-center mr-3 mt-1 shrink-0 font-bold text-sm">✓</span>
                        <div><strong>Reduced cost:</strong> You retain your current tub and plumbing — no total replacement needed.</div>
                    </li>
                    <li class="flex items-start text-gray-700">
                        <span class="bg-blue-100 text-blue-600 rounded-full h-6 w-6 flex items-center justify-center mr-3 mt-1 shrink-0 font-bold text-sm">✓</span>
                        <div><strong>Reduced turnaround time:</strong> Many tub cuts finish in hours rather than the weeks a full remodel takes.</div>
                    </li>
                    <li class="flex items-start text-gray-700">
                        <span class="bg-blue-100 text-blue-600 rounded-full h-6 w-6 flex items-center justify-center mr-3 mt-1 shrink-0 font-bold text-sm">✓</span>
                        <div><strong>Less disturbance:</strong> Fewer trades, less mess, and reduced downtime — important for homes and rentals in Delta.</div>
                    </li>
                    <li class="flex items-start text-gray-700">
                        <span class="bg-blue-100 text-blue-600 rounded-full h-6 w-6 flex items-center justify-center mr-3 mt-1 shrink-0 font-bold text-sm">✓</span>
                        <div><strong>Keep design integrity:</strong> You preserve tile, fixtures, and layout while gaining better access.</div>
                    </li>
                    <li class="flex items-start text-gray-700">
                        <span class="bg-blue-100 text-blue-600 rounded-full h-6 w-6 flex items-center justify-center mr-3 mt-1 shrink-0 font-bold text-sm">✓</span>
                        <div><strong>Safety and value addition:</strong> A safer bath is easier to maintain, less risky, and adds to rental or resale attractiveness.</div>
                    </li>
                </ul>
            </div>

            <!-- Materials & Features -->
            <div>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 section-title mb-8">
                    Materials & Features You'll Get with Home2stay
                </h2>
                <p class="text-lg text-gray-700 leading-relaxed mb-6">
                    All these features combine to give your tub cut a high-quality finish, lasting performance, and genuine value.
                </p>
                <div class="space-y-4">
                    <div class="flex items-start text-gray-700">
                        <div class="service-icon w-10 h-10 mr-4 flex-shrink-0" style="margin-bottom: 0;">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <p>Ready-made low-threshold insert or door kit, custom-fit to your tub wall.</p>
                    </div>
                    <div class="flex items-start text-gray-700">
                        <div class="service-icon w-10 h-10 mr-4 flex-shrink-0" style="margin-bottom: 0;">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <p>Strong waterproof sealing designed for long-term use in wet areas.</p>
                    </div>
                    <div class="flex items-start text-gray-700">
                        <div class="service-icon w-10 h-10 mr-4 flex-shrink-0" style="margin-bottom: 0;">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <p>Non-slip surface treatment at the step-in area for safe entry and exit.</p>
                    </div>
                    <div class="flex items-start text-gray-700">
                        <div class="service-icon w-10 h-10 mr-4 flex-shrink-0" style="margin-bottom: 0;">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <p>Trim, tile match, or colour-finish options to give your tub access a high-end appearance.</p>
                    </div>
                    <div class="flex items-start text-gray-700">
                        <div class="service-icon w-10 h-10 mr-4 flex-shrink-0" style="margin-bottom: 0;">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <p>Optional grab bars or handrails for added mobility support and recovery assistance.</p>
                    </div>
                    <div class="flex items-start text-gray-700">
                        <div class="service-icon w-10 h-10 mr-4 flex-shrink-0" style="margin-bottom: 0;">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <p>Warranty on both installation workmanship and materials for complete peace of mind.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Local Expertise Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 section-title mb-6">
                Local Expertise for Delta Properties
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Working across Delta's homes, rentals, and commercial properties means we understand local budgets, finishes, schedules, property managers, and building types. When you choose us, you are opting for a team that knows the region and how to deliver smoothly.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="service-card p-8 text-center">
                <div class="service-icon mx-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Older Homes</h3>
                <p class="text-gray-600">We bring modern access upgrades to Delta's older homes — updating classic bathrooms without disrupting the character of the space.</p>
            </div>

            <div class="service-card p-8 text-center">
                <div class="service-icon mx-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Rental Unit Turnovers</h3>
                <p class="text-gray-600">Fast, clean installations scheduled around tenant changeovers — helping Delta landlords maintain occupancy and meet accessibility needs efficiently.</p>
            </div>

            <div class="service-card p-8 text-center">
                <div class="service-icon mx-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Commercial Spaces</h3>
                <p class="text-gray-600">Minimal disruption to operations for Delta clinics, care homes, and hospitality businesses — we schedule around your hours and deliver high-traffic-ready results.</p>
            </div>

            <div class="service-card p-8 text-center">
                <div class="service-icon mx-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Delta Building Standards</h3>
                <p class="text-gray-600">We know Delta's building codes, moisture conditions, and finish expectations — ensuring every installation is compliant, durable, and suited to the local environment.</p>
            </div>
        </div>
    </div>
</section>

<!-- Product Cards Section -->
<section class="py-20 px-10 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-bold relative inline-block mb-12 section-title">Accessibility Solutions for Your Home</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">Our wide range of quality products such as grab bars, bathroom safety equipment, ramps, and more are designed to enhance accessibility and aesthetics, making everyday home life easier for people of all ages and abilities.</p>
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
                Ready to upgrade your bath access in Delta? Contact our team to schedule your free site assessment.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <div class="space-y-8">
                <div class="contact-card">
                    <div class="flex items-start space-x-4">
                        <div class="service-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" /></svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Phone</h3>
                            <p class="text-gray-600 mb-2">Call us for immediate assistance</p>
                            <a href="tel:604-259-1211" class="text-xl font-bold text-blue-600 hover:text-blue-700">(604) 259-1211</a>
                            <span class="text-sm text-gray-500 ml-2">Main Line</span>
                            <p class="text-sm text-gray-500 mt-3">Monday - Friday: 8:30 AM - 4:30 PM</p>
                        </div>
                    </div>
                </div>

                <div class="contact-card">
                    <div class="flex items-start space-x-4">
                        <div class="service-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>
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
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" /></svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Office Locations</h3>
                            <p class="font-semibold text-gray-800">Vancouver Office</p>
                            <p class="text-gray-600 text-sm">196 West 6 Ave, Vancouver, BC, V5Y 1K6</p>
                        </div>
                    </div>
                </div>

                <div class="contact-card">
                    <div class="flex items-start space-x-4">
                        <div class="service-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Service Area</h3>
                            <p class="text-gray-600 mb-2">We proudly serve:</p>
                            <ul class="text-gray-700 space-y-1">
                                <li>• Delta — Ladner, Tsawwassen & North Delta</li>
                                <li>• Surrey & White Rock</li>
                                <li>• Richmond & Burnaby</li>
                                <li>• Langley & Cloverdale</li>
                                <li>• New Westminster & Vancouver</li>
                                <li>• Greater Vancouver & Lower Mainland</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="contact-card">
                <h3 class="text-2xl font-bold text-gray-900 mb-6 text-center">Schedule Your Free Site Assessment</h3>
                <form action="/submit-assessment" class="space-y-6">
                    @csrf
                    <input type="hidden" name="form_type" value="assessment">
                    <input type="hidden" name="form_source" value="area-delta_tub-cuts_page_assessment_form">
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
                        <input type="text" id="city" name="city" placeholder="e.g., Ladner, Tsawwassen, North Delta" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
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
                        Schedule Free Assessment
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" /></svg>
                    </button>
                    <p class="text-xs text-gray-500 text-center">By submitting this form, you agree to our privacy policy. We will never share your information.</p>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- FAQs Section -->
<section class="py-16">
    <div class="container mx-auto px-6 lg:px-12 max-w-6xl">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 section-title mb-12 text-center">FAQs</h2>
        <div class="max-w-4xl mx-auto space-y-6">
            <div class="faq-item">
                <button class="faq-question" type="button">
                    <span>How long does the installation take?</span>
                    <svg class="faq-icon w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
                <div class="faq-answer">
                    <div class="faq-answer-content">For most standard bathtub layouts, our tub cuts in Delta finish in 4–6 hours or one working day, depending on complexity.</div>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" type="button">
                    <span>Will I still have full tub functionality after the cut?</span>
                    <svg class="faq-icon w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
                <div class="faq-answer">
                    <div class="faq-answer-content">Yes. Many installations retain full tub and shower capability while improving entry access. We customise the solution to your specific needs.</div>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" type="button">
                    <span>Is this service only for homeowners?</span>
                    <svg class="faq-icon w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
                <div class="faq-answer">
                    <div class="faq-answer-content">No. We serve homeowners, rental property owners, commercial clients, and multi-unit buildings throughout Delta and the surrounding area.</div>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" type="button">
                    <span>Will the process disrupt the rest of my home or property?</span>
                    <svg class="faq-icon w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
                <div class="faq-answer">
                    <div class="faq-answer-content">We take steps to minimise disruption: protective coverings, thorough clean-up, and coordination with building managers if needed.</div>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" type="button">
                    <span>Are the modifications compliant with local standards?</span>
                    <svg class="faq-icon w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
                <div class="faq-answer">
                    <div class="faq-answer-content">Yes. We design to meet local building codes, accessibility standards, and best practices for wet-zone safety throughout Delta.</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 bg-gradient-to-r from-blue-600 to-blue-700 text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-6">Ready to Upgrade Your Bath Access in Delta?</h2>
        <p class="text-xl mb-8 max-w-3xl mx-auto opacity-90">
            If you are ready to make your bathroom safer, more functional, and accessible, call Home2stay today. We will schedule your free site assessment, guide you through your options, and get your project started. You deserve better access — and we offer it.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="tel:604-259-1211" class="btn-secondary text-lg px-8 py-4">
                Call (604) 259-1211
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" /></svg>
            </a>
            <a href="#contact" class="btn-primary text-lg px-8 py-4">
                Get Free Assessment
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" /></svg>
            </a>
        </div>
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
            alert('Thank you for your request! Our Delta team will contact you within 24 hours.');
            this.reset();
        });
    }

    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) target.scrollIntoView({ behavior: 'smooth', block: 'start' });
        });
    });

    document.querySelectorAll('.faq-question').forEach(button => {
        button.addEventListener('click', function() {
            const faqItem = this.closest('.faq-item');
            const answer = faqItem.querySelector('.faq-answer');
            const isActive = this.classList.contains('active');
            document.querySelectorAll('.faq-question').forEach(b => {
                b.classList.remove('active');
                b.closest('.faq-item').querySelector('.faq-answer').classList.remove('active');
            });
            if (!isActive) { this.classList.add('active'); answer.classList.add('active'); }
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
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
            </button>
        </div>
        <div class="p-6">
            <form id="productInfoForm" action="/submit-product-inquiry" method="POST">
                @csrf
                <input type="hidden" name="form_type" value="product_inquiry">
                <input type="hidden" name="form_source" value="delta_tub-cuts_page_product_modal">
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
document.addEventListener('DOMContentLoaded', function() {
    const getInfoButtons = document.querySelectorAll('.get-info-btn');
    const modal = document.getElementById('productInfoModal');
    const closeModalBtn = document.getElementById('closeModal');
    const productNameInput = document.getElementById('productName');
    const displayProductName = document.getElementById('displayProductName');
    const modalProductTitle = document.getElementById('modalProductTitle');
    const productInfoForm = document.getElementById('productInfoForm');

    getInfoButtons.forEach(button => {
        button.addEventListener('click', function() {
            const productName = this.getAttribute('data-product');
            productNameInput.value = productName;
            displayProductName.textContent = productName;
            modalProductTitle.textContent = `Get Information: ${productName}`;
            modal.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        });
    });

    closeModalBtn.addEventListener('click', function() {
        modal.classList.add('hidden');
        document.body.style.overflow = 'auto';
    });

    modal.addEventListener('click', function(e) {
        if (e.target === modal) { modal.classList.add('hidden'); document.body.style.overflow = 'auto'; }
    });

    if (productInfoForm) {
        productInfoForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const requiredFields = this.querySelectorAll('[required]');
            let allValid = true;
            requiredFields.forEach(field => {
                if (!field.value.trim()) { allValid = false; field.style.borderColor = 'red'; }
                else { field.style.borderColor = ''; }
            });
            if (!allValid) { alert('Please fill in all required fields (First Name, Last Name, Email, Phone)'); return false; }
            fetch(this.action, {
                method: 'POST',
                body: new FormData(this),
                headers: { 'X-Requested-With': 'XMLHttpRequest', 'Accept': 'application/json' }
            })
            .then(response => response.json().catch(() => response.text()))
            .then(data => {
                alert((typeof data === 'object' && data.message) ? data.message : 'Thank you! Your product inquiry has been submitted. We will contact you soon.');
                this.reset();
                modal.classList.add('hidden');
                document.body.style.overflow = 'auto';
            })
            .catch(() => alert('There was an error submitting your request. Please try again or contact us directly.'));
        });
    }
});
</script>
@endpush