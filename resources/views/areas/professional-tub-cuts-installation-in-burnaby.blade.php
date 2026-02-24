@extends('layouts.app')

@section('title', 'Professional Tub Cuts Installation in Burnaby, BC | Home2Stay')
@section('meta_description', 'Professional tub cut installation in Burnaby, BC. Upgrade your bathtub access with a safe step-in tub cut solution without full renovation. Fast, clean, and affordable.')

@push('styles')
<style>
    :root {
        --primary: #0078bf;
        --primary-dark: #005f96;
        --secondary: #f8b301;
        --secondary-dark: #d99a00;
        --text-dark: #2d3748;
        --text-light: #718096;
        --bg-light: #f7fafc;
        --transition: all 0.3s ease;
        --radius: 18px;
        --shadow: 0 10px 30px rgba(0,0,0,.12);
        --border: rgba(0,0,0,.08);
    }

    .hero-section {
        background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
        color: #fff;
        padding: 4rem 0;
        position: relative;
        overflow: hidden;
    }

    .hero-section::before {
        content: '';
        position: absolute;
        inset: 0;
        background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 120 120"><defs><pattern id="p" width="24" height="24" patternUnits="userSpaceOnUse"><circle cx="6" cy="6" r="1.2" fill="white" opacity="0.10"/><circle cx="18" cy="18" r="1.2" fill="white" opacity="0.08"/></pattern></defs><rect width="120" height="120" fill="url(%23p)"/></svg>');
        opacity: .35;
    }

    .section-title {
        position: relative;
        display: inline-block;
        margin-bottom: 1.75rem;
        font-weight: 800;
        letter-spacing: -0.5px;
        color: var(--text-dark);
    }

    .section-title::after {
        content: '';
        position: absolute;
        width: 72px;
        height: 4px;
        background: linear-gradient(90deg, var(--primary) 0%, var(--primary-dark) 100%);
        bottom: -12px;
        left: 0;
        border-radius: 2px;
    }

    .btn-primary {
        background: linear-gradient(45deg, var(--primary) 0%, var(--primary-dark) 100%);
        color: #fff;
        padding: 0.85rem 1.6rem;
        border-radius: 0.6rem;
        font-weight: 700;
        letter-spacing: 0.3px;
        box-shadow: 0 8px 18px rgba(0, 95, 150, .22);
        transition: var(--transition);
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border: 0;
    }

    .btn-primary:hover {
        transform: translateY(-3px);
        box-shadow: 0 12px 26px rgba(0, 95, 150, .28);
        color: #fff;
        text-decoration: none;
    }

    .btn-secondary {
        background: linear-gradient(45deg, var(--secondary) 0%, var(--secondary-dark) 100%);
        color: var(--text-dark);
        padding: 0.85rem 1.6rem;
        border-radius: 0.6rem;
        font-weight: 800;
        box-shadow: 0 8px 18px rgba(217, 154, 0, .22);
        transition: var(--transition);
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border: 0;
    }

    .btn-secondary:hover {
        transform: translateY(-3px);
        box-shadow: 0 12px 26px rgba(217, 154, 0, .28);
        color: var(--text-dark);
        text-decoration: none;
    }

    .card {
        background: #fff;
        border-radius: 1rem;
        box-shadow: var(--shadow);
        border: 1px solid var(--border);
        overflow: hidden;
        height: 100%;
    }

    .card.pad {
        padding: 1.75rem;
    }

    .icon-box {
        width: 3.75rem;
        height: 3.75rem;
        border-radius: 1rem;
        background: linear-gradient(45deg, var(--secondary) 0%, var(--secondary-dark) 100%);
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 1rem;
        box-shadow: 0 10px 20px rgba(217, 154, 0, .18);
        flex-shrink: 0;
    }

    .icon-box svg { width: 26px; height: 26px; }

    .muted { color: var(--text-light); }

    .list-check li {
        display: flex;
        align-items: flex-start;
        gap: .65rem;
        margin-bottom: .55rem;
        color: #4a5568;
    }

    .list-check svg {
        width: 18px;
        height: 18px;
        margin-top: .2rem;
        flex-shrink: 0;
        color: #16a34a;
    }

    .step {
        display: flex;
        gap: 1rem;
        align-items: flex-start;
    }

    .step-badge {
        width: 40px;
        height: 40px;
        border-radius: 999px;
        background: #e6f4ff;
        color: var(--primary-dark);
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 900;
        flex-shrink: 0;
        border: 1px solid rgba(0,120,191,.18);
    }

    .faq-item {
        border-top: 4px solid var(--secondary);
    }

    .faq-question {
        width: 100%;
        background: #fff;
        border: 0;
        padding: 1.15rem 1.25rem;
        text-align: left;
        display: flex;
        align-items: center;
        justify-content: space-between;
        font-weight: 800;
        color: var(--text-dark);
        cursor: pointer;
    }

    .faq-question:hover { background: #f8fafc; }

    .faq-icon { transition: transform .25s ease; margin-left: .75rem; }

    .faq-question.active .faq-icon { transform: rotate(180deg); }

    .faq-answer {
        max-height: 0;
        overflow: hidden;
        transition: max-height .25s ease;
    }

    .faq-answer.active { max-height: 240px; }

    .faq-answer-content {
        padding: 0 1.25rem 1.25rem 1.25rem;
        color: #4a5568;
        line-height: 1.7;
    }

    .map-container {
        border-radius: 1rem;
        overflow: hidden;
        box-shadow: var(--shadow);
        border: 1px solid var(--border);
        height: 380px;
    }

    .map-container iframe {
        width: 100%;
        height: 100%;
        border: none;
        filter: grayscale(18%) contrast(1.08);
        transition: var(--transition);
    }

    .map-container:hover iframe { filter: grayscale(0%) contrast(1.15); }
</style>
@endpush

@section('content')
<!-- Hero -->
<section class="hero-section">
    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6">
                Professional Tub Cut Installation in Burnaby, BC
            </h1>
            <p class="text-xl md:text-1xl mb-8 opacity-90 max-w-3xl mx-auto">
                Upgrade your bath access with a safe, step-in tub cut solution without the cost and mess of a full renovation.
                Home2stay delivers fast, clean, and durable tub cut installations for homes, rentals, and commercial units across Burnaby.
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

<!-- Intro + Map -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-3xl md:text-4xl section-title">
                    Trusted Tub Cuts in Burnaby, BC
                </h2>

                <div class="prose prose-lg max-w-none">
                    <p class="text-lg text-gray-700 leading-relaxed mb-6">
                        A tub cut is a smart accessibility upgrade that improves bathtub entry without replacing your tub.
                        It is ideal for aging in place, recovery after surgery, rental upgrades, and commercial spaces that need safer bathing access.
                        Our team focuses on speed, clean finishes, and long-term reliability so you can upgrade with confidence.
                    </p>

                    <ul class="list-check">
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                            Free on-site assessment and measurements
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                            Fast installation, many jobs finished in one day
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                            Durable materials and waterproof sealing for wet areas
                        </li>
                    </ul>
                </div>
            </div>

            <div class="map-container">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d166597.6426797817!2d-123.12495865321086!3d49.23472265493063!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x548698b7b8defe5b%3A0xdabcfe2b6646a5f!2sBurnaby%2C%20BC%2C%20Canada!5e0!3m2!1sen!2s!4v1756724098036!5m2!1sen!2s"
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                    allowfullscreen>
                </iframe>
            </div>
        </div>

        <!-- Why Choose -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-10">
            <div class="card pad">
                <div class="icon-box">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Local, Reliable Team</h3>
                <p class="muted leading-relaxed">
                    We work across Burnaby properties and understand common layouts, schedules, and access requirements for homes and rentals.
                </p>
            </div>

            <div class="card pad">
                <div class="icon-box">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Fast Turnaround</h3>
                <p class="muted leading-relaxed">
                    Many tub cuts are completed within hours, helping you avoid long renovation timelines and bathroom downtime.
                </p>
            </div>

            <div class="card pad">
                <div class="icon-box">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Clean Finish & Safety</h3>
                <p class="muted leading-relaxed">
                    We install a reinforced low-threshold entry, apply waterproof sealing, and add non-slip protection for safer access.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Process -->
<section class="py-16">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl section-title">How Our Tub Cut Installation Works</h2>
            <p class="text-gray-600 max-w-3xl mx-auto">
                A simple, proven process that ensures precision, clean results, and long-term performance.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <div class="card pad">
                <div class="step">
                    <div class="step-badge">1</div>
                    <div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">On-Site Consultation</h3>
                        <p class="text-gray-600 leading-relaxed">
                            We assess the tub wall height, surrounding finishes, and space. We also discuss your goals for safer, easier entry.
                        </p>
                    </div>
                </div>
            </div>

            <div class="card pad">
                <div class="step">
                    <div class="step-badge">2</div>
                    <div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Custom Plan & Transparent Quote</h3>
                        <p class="text-gray-600 leading-relaxed">
                            We recommend the best threshold height, finish options, and safety add-ons with a clear quote.
                        </p>
                    </div>
                </div>
            </div>

            <div class="card pad">
                <div class="step">
                    <div class="step-badge">3</div>
                    <div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Professional Installation</h3>
                        <p class="text-gray-600 leading-relaxed">
                            We carefully cut the tub wall section, install a reinforced low-threshold insert, seal it for waterproof performance,
                            add non-slip treatment, and clean the space thoroughly.
                        </p>
                    </div>
                </div>
            </div>

            <div class="card pad">
                <div class="step">
                    <div class="step-badge">4</div>
                    <div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Final Review & Follow-Up</h3>
                        <p class="text-gray-600 leading-relaxed">
                            We test the entry, check the sealing and finish, review the result with you, and share simple maintenance tips.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Use Cases -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl section-title">Residential & Commercial Tub Cuts in Burnaby</h2>
            <p class="text-gray-600 max-w-3xl mx-auto">
                Practical tub access upgrades for homeowners, rentals, and commercial spaces that need safe bathing solutions.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="card pad">
                <h3 class="text-xl font-bold text-gray-900 mb-2">Residential Tub Cuts</h3>
                <p class="text-gray-600 leading-relaxed">
                    Make bathing easier and safer without demolition. Ideal for aging in place, mobility support, and family safety upgrades.
                </p>
            </div>

            <div class="card pad">
                <h3 class="text-xl font-bold text-gray-900 mb-2">Commercial & Rental Units</h3>
                <p class="text-gray-600 leading-relaxed">
                    Upgrade units quickly between tenants, reduce complaints, and improve accessibility with minimal downtime.
                </p>
            </div>

            <div class="card pad">
                <h3 class="text-xl font-bold text-gray-900 mb-2">Multi-Unit & Strata Projects</h3>
                <p class="text-gray-600 leading-relaxed">
                    We plan installations efficiently across multiple suites, keeping disruption low while delivering consistent finishing.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Benefits -->
<section class="py-16">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-3xl md:text-4xl section-title">Why a Tub Cut Makes Sense</h2>
                <p class="text-gray-700 leading-relaxed mb-6">
                    A tub cut is often the best alternative to full bathtub replacement when you want improved access quickly and affordably.
                    You keep your existing tub and plumbing, reduce renovation time, and gain a safer entry right away.
                </p>

                <ul class="list-check">
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                        Economical: retain your bathtub and plumbing
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                        Quick turnaround: often completed in a day
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                        Minimal disruption: no major demolition
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                        Safer access: low threshold and non-slip surface
                    </li>
                </ul>
            </div>

            <div class="card pad">
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Materials & Features We Use</h3>
                <p class="text-gray-600 mb-4">
                    We install components designed for wet areas and high-use environments for long-term performance.
                </p>

                <ul class="list-check">
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                        Low-threshold entry insert custom-fit to your tub
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                        Waterproof sealing designed for wet environments
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                        Non-slip treatment to reduce slips and falls
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                        Finish-matching trim for a clean look
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                        Optional grab bars or handrails for extra safety
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- FAQs -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-10">
            <h2 class="text-3xl md:text-4xl section-title">FAQs</h2>
        </div>

        <div class="max-w-4xl mx-auto space-y-6">
            <div class="card faq-item">
                <button class="faq-question" type="button">
                    <span>How long does tub cut installation take?</span>
                    <svg class="faq-icon w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="faq-answer">
                    <div class="faq-answer-content">
                        Most standard tub cuts are completed in 4 to 6 hours, depending on tub type, space, and finishing.
                    </div>
                </div>
            </div>

            <div class="card faq-item">
                <button class="faq-question" type="button">
                    <span>Do you need to remove the bathtub?</span>
                    <svg class="faq-icon w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="faq-answer">
                    <div class="faq-answer-content">
                        No. In most cases, we modify the existing tub wall and install the low-threshold insert without removing the tub.
                    </div>
                </div>
            </div>

            <div class="card faq-item">
                <button class="faq-question" type="button">
                    <span>Will my bathroom be out of service?</span>
                    <svg class="faq-icon w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="faq-answer">
                    <div class="faq-answer-content">
                        Only briefly. We aim for minimal disruption. Typically the bathroom is ready the same day after sealing and final checks.
                    </div>
                </div>
            </div>

            <div class="card faq-item">
                <button class="faq-question" type="button">
                    <span>Does it meet accessibility or building code expectations?</span>
                    <svg class="faq-icon w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="faq-answer">
                    <div class="faq-answer-content">
                        We design tub cut solutions using safe installation practices suitable for Burnaby homes, rentals, and commercial units.
                    </div>
                </div>
            </div>

            <div class="card faq-item">
                <button class="faq-question" type="button">
                    <span>Is the installation messy?</span>
                    <svg class="faq-icon w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="faq-answer">
                    <div class="faq-answer-content">
                        We protect the site, control dust, and clean thoroughly after the job to keep impact low.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="py-16 bg-gradient-to-r from-blue-600 to-blue-700 text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-6">Ready to Book Your Tub Cut in Burnaby?</h2>
        <p class="text-xl mb-8 max-w-3xl mx-auto opacity-90">
            Get safer, easier bathtub access without the renovation headache. Book your free site visit, receive a clear quote,
            and upgrade your bathroom quickly with Home2stay.
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

<!-- Contact -->
<section id="contact" class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 section-title mb-6">
                Contact Home2stay Burnaby
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Request a free consultation and quote. Our local team will help you choose the best tub cut option for your home or property.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Contact Information -->
            <div class="space-y-8">
                <div class="card pad" style="height: max-content;">
                    <div class="flex items-start space-x-4">
                        <div class="icon-box">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Phone</h3>
                            <p class="text-gray-600 mb-2">Call us for immediate assistance</p>
                            <a href="tel:604-259-1211" class="text-xl font-bold text-blue-600 hover:text-blue-700">
                                (604) 259-1211
                            </a>
                            <p class="text-sm text-gray-500 mt-3">Monday to Friday: 8:30 AM to 4:30 PM</p>
                        </div>
                    </div>
                </div>

                <div class="card pad" style="height: max-content;">
                    <div class="flex items-start space-x-4">
                        <div class="icon-box">
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

                <div class="card pad" style="height: max-content;">
                    <div class="flex items-start space-x-4">
                        <div class="icon-box">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Office Location</h3>
                            <p class="font-semibold text-gray-800">Vancouver Office</p>
                            <p class="text-gray-600 text-sm">196 West 6 Ave, Vancouver, BC, V5Y 1K6</p>
                        </div>
                    </div>
                </div>

                <div class="card pad" style="height: max-content;">
                    <div class="flex items-start space-x-4">
                        <div class="icon-box">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Service Area</h3>
                            <p class="text-gray-600 mb-2">We proudly serve:</p>
                            <ul class="text-gray-700 space-y-1">
                                <li>• Burnaby (All Areas)</li>
                                <li>• Vancouver and New Westminster</li>
                                <li>• Coquitlam and Port Moody</li>
                                <li>• Richmond and Surrey</li>
                                <li>• North Vancouver and West Vancouver</li>
                                <li>• Tri-Cities and Langley</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quote Form -->
            <div class="card pad">
                <h3 class="text-2xl font-bold text-gray-900 mb-6 text-center">Get Your Free Quote</h3>

                <form action="/submit-assessment" class="space-y-6" method="POST">
                    @csrf
                    <input type="hidden" name="form_type" value="assessment">
                    <input type="hidden" name="form_source" value="area-burnaby_tubcuts_page_assessment_form">

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
                        <input type="text" id="city" name="city" placeholder="e.g., Metrotown, Brentwood, Heights" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>

                    <div>
                        <label for="service_type" class="block text-sm font-medium text-gray-700 mb-2">Service Interest</label>
                        <select id="service_type" name="service_type" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            <option value="">Select a service</option>
                            <option value="tub-cuts" selected>Tub Cuts</option>
                            <option value="grab-bars">Grab Bars and Safety Rails</option>
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
                        <textarea id="message" name="message" rows="4" placeholder="Tell us about your tub, your accessibility needs, and your timeline..." class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"></textarea>
                    </div>

                    <button type="submit" class="btn-primary w-full py-4 text-lg">
                        Request Free Quote
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>

                    <p class="text-xs text-gray-500 text-center">
                        By submitting this form, you agree to our privacy policy. We never share your information.
                    </p>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // FAQ toggle
    document.querySelectorAll('.faq-question').forEach(button => {
        button.addEventListener('click', function() {
            const item = this.closest('.faq-item');
            const answer = item.querySelector('.faq-answer');
            const isActive = this.classList.contains('active');

            document.querySelectorAll('.faq-question').forEach(btn => {
                btn.classList.remove('active');
                const a = btn.closest('.faq-item').querySelector('.faq-answer');
                if (a) a.classList.remove('active');
            });

            if (!isActive) {
                this.classList.add('active');
                answer.classList.add('active');
            }
        });
    });

    // Smooth anchor scroll
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) target.scrollIntoView({ behavior: 'smooth', block: 'start' });
        });
    });
});
</script>
@endpush