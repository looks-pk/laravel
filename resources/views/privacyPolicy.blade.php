@extends('layouts.app')

@section('title', 'Privacy Policy - Home2stay Accessibility Solutions')
@section('meta_description', 'Home2stay Accessibility Ltd. Privacy Policy. Learn how we collect, use, and protect your personal information in compliance with PIPEDA.')

@push('styles')
    <style>
        .privacy-hero {
            background: linear-gradient(135deg, #3B82F6 0%, #1D4ED8 100%);
        }

        .privacy-content {
            background: white;
            padding: 60px 0;
        }

        .privacy-card {
            max-width: 1000px;
            margin-left: auto;
            margin-right: auto;
        }

        .privacy-card .last-updated {
            display: inline-block;
            background: #dbeafe;
            color: #1D4ED8;
            font-size: 13px;
            font-weight: 600;
            padding: 6px 14px;
            border-radius: 20px;
            margin-bottom: 28px;
        }

        .privacy-card .intro-text {
            background: linear-gradient(135deg, #dbeafe 0%, #bfdbfe 100%);
            border-left: 4px solid #3B82F6;
            border-radius: 0 8px 8px 0;
            padding: 24px 28px;
            margin-bottom: 40px;
        }

        .privacy-card .intro-text p {
            margin: 0;
            color: #374151;
            font-size: 16px;
            line-height: 1.75;
        }

        /* Section headings */
        .privacy-card h2 {
            font-size: 22px !important;
            font-weight: 800 !important;
            color: #1e3a5f !important;
            margin-top: 44px !important;
            margin-bottom: 14px !important;
            padding-bottom: 10px !important;
            border-bottom: 2px solid #e5e7eb !important;
            line-height: 1.3 !important;
        }

        .privacy-card h3 {
            font-size: 17px !important;
            font-weight: 700 !important;
            color: #1D4ED8 !important;
            margin-top: 28px !important;
            margin-bottom: 10px !important;
            line-height: 1.4 !important;
        }

        .privacy-card p {
            font-size: 16px !important;
            color: #374151 !important;
            line-height: 1.8 !important;
            margin-bottom: 14px !important;
        }

        /* Custom bullet lists */
        .privacy-list {
            margin: 10px 0 20px 0;
            padding: 0;
            list-style: none;
        }

        .privacy-list li {
            font-size: 16px;
            color: #374151;
            line-height: 1.75;
            padding: 5px 0 5px 28px;
            position: relative;
        }

        .privacy-list li::before {
            content: '';
            position: absolute;
            left: 0;
            top: 13px;
            width: 8px;
            height: 8px;
            background: #3B82F6;
            border-radius: 50%;
        }

        /* Contact info box */
        .contact-box {
            background: linear-gradient(135deg, #1e2a35 0%, #1D4ED8 100%);
            border-radius: 12px;
            padding: 28px 32px;
            margin: 20px 0;
            color: white;
        }

        .contact-box p {
            color: rgba(255,255,255,0.9) !important;
            margin: 4px 0 !important;
            font-size: 15px !important;
        }

        .contact-box a {
            color: #93c5fd;
            text-decoration: underline;
        }

        .contact-box a:hover {
            color: #fff;
        }

        /* Consent triggers */
        .consent-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 12px;
            margin: 16px 0 24px;
        }

        @media (max-width: 640px) {
            .consent-grid { grid-template-columns: 1fr; }
            .privacy-card { padding: 28px 20px; }
        }

        .consent-item {
            display: flex;
            align-items: flex-start;
            gap: 10px;
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 14px 16px;
        }

        .consent-item svg {
            flex-shrink: 0;
            margin-top: 2px;
        }

        .consent-item span {
            font-size: 15px;
            color: #374151;
            line-height: 1.5;
        }

        /* Tool badges */
        .tool-badge {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background: #dbeafe;
            color: #1D4ED8;
            font-size: 13px;
            font-weight: 700;
            padding: 5px 12px;
            border-radius: 6px;
            margin: 4px 4px 4px 0;
        }

        .divider {
            border: none;
            border-top: 1px solid #e5e7eb;
            margin: 36px 0;
        }
    </style>
@endpush

@section('content')

    {{-- ── HERO SECTION ── --}}
    <section class="relative bg-gray-900 overflow-hidden" style="min-height: 400px;">
        <!-- Background with gradient overlay -->
        <div class="absolute inset-0 bg-gradient-to-br from-blue-600 to-blue-800">
            <div class="absolute inset-0 bg-black opacity-20"></div>
        </div>

        <!-- Hero Content -->
        <div class="container mx-auto px-4 relative z-10 flex items-center" style="min-height: 400px;">
            <div class="max-w-3xl">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6">Privacy Policy</h1>
                <p class="text-xl text-white/90 mb-0">
                    How Home2stay Accessibility Ltd. collects, uses, and protects your personal information in compliance with PIPEDA.
                </p>
            </div>
        </div>
    </section>

    {{-- ── MAIN CONTENT ── --}}
    <section class="privacy-content">
        <div class="container mx-auto px-4">
            <div class="privacy-card">

                <span class="last-updated">Last Updated: {{ date('F Y') }}</span>

                <div class="intro-text">
                    <p>
                        Our policies and practices have been designed to comply with the
                        <strong>Personal Information Protection and Electronic Documents Act (PIPEDA)</strong>
                        and corresponding provincial privacy acts, including British Columbia's PIPA.
                        Home2stay Accessibility Ltd. ("Home2stay", "we", "us", or "our") respects your privacy
                        and is committed to protecting your personal information.
                    </p>
                </div>

                <p>
                    "Personal information" means information about an individual who can be identified.
                    This Privacy Policy (the "Policy") outlines the personal information we collect,
                    what we do with it, and why. This Policy does not cover anonymous, de-identified,
                    or business contact information.
                </p>

                {{-- ── YOUR CONSENT ── --}}
                <h2>Your Consent</h2>

                <p>You agree to this Policy when you:</p>

                <div class="consent-grid">
                    <div class="consent-item">
                        <svg class="w-5 h-5 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <span>Request or receive our products or services</span>
                    </div>
                    <div class="consent-item">
                        <svg class="w-5 h-5 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <span>Visit our website at <strong>home2stay.com</strong></span>
                    </div>
                    <div class="consent-item">
                        <svg class="w-5 h-5 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <span>Apply for a job with us</span>
                    </div>
                    <div class="consent-item">
                        <svg class="w-5 h-5 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <span>Contact us online, by phone, or in person</span>
                    </div>
                </div>

                <p>
                    We will collect, use, or share your personal information with your consent for the
                    purposes we've informed you of, or as otherwise permitted or required by law.
                    Your consent can be express or implied.
                </p>

                <p>
                    You can withhold or withdraw your consent at any time, as long as there are no
                    legal or contractual requirements for us to process your information. Withdrawal of
                    consent may impact our ability to serve you. To withdraw your consent, contact our
                    Privacy Officer using the information below.
                </p>

                <hr class="divider">

                {{-- ── COLLECTING YOUR INFO ── --}}
                <h2>Collecting and Using Your Information</h2>

                <h3>When and How We Collect Your Information</h3>
                <p>We collect your personal information when you interact with us, including when you:</p>
                <ul class="privacy-list">
                    <li>Apply for or receive a product or service (stairlifts, grab bars, bathroom modifications, etc.)</li>
                    <li>Take part in a virtual or in-person appointment or home assessment</li>
                    <li>Visit our website or one of our locations in Vancouver, BC and surrounding areas</li>
                    <li>Submit a contact or quote request form on our website</li>
                    <li>Sign up for special offers or complete a survey</li>
                    <li>Communicate with us by phone, email, video call, or social media</li>
                </ul>

                <p>We sometimes collect your information indirectly from other sources, including:</p>
                <ul class="privacy-list">
                    <li>Someone you have authorized to act on your behalf (e.g., a power of attorney or family member)</li>
                    <li>Care providers such as occupational therapists, physiotherapists, long-term care homes, hospitals, and clinics</li>
                    <li>Your insurer or funding program administrator</li>
                    <li>Online advertising partners (e.g., Google, Facebook)</li>
                    <li>Government bodies or publicly available sources relevant to providing our services</li>
                </ul>

                <h3>What Information We Collect and Why</h3>

                <p><strong>Contact information</strong> — your name, address, email, phone number, or social media account name. Used to communicate with you about inquiries, requests, and our products and services.</p>

                <p><strong>Information about your needs</strong> — your preferences, location, age, abilities, mobility requirements, and any other information required to provide the right product or service for you. This may include health-related information provided by you or your care provider.</p>

                <p><strong>Information related to your home</strong> — when you request products or services requiring a Home2stay representative to visit or virtually view your home, we may capture images or notes to determine which products are right for you and to document installation details.</p>

                <p><strong>Payment and billing information</strong> — payment details, insurance information, and public health billing information where applicable, used to process payments and bill the appropriate parties.</p>

                <p><strong>Information about funding program eligibility</strong> — information about your needs, income, medical condition (if appropriate), and whether you identify as an Indigenous person. Providing this is voluntary. If provided, we may share it with funding partners such as governments and charities to determine if you qualify for assistance programs.</p>

                <p><strong>Online usage information</strong> — information about how you use our website, including your device, browser, IP address, time zone, and cookies. See the <a href="#cookies" class="text-blue-600 underline">Cookies</a> section below for more detail.</p>

                <p>We may also use your information to:</p>
                <ul class="privacy-list">
                    <li>Promote Home2stay and our accessibility products and services</li>
                    <li>Improve our products, services, website, and business operations</li>
                    <li>Create statistical and aggregated (often anonymized) reports</li>
                    <li>Manage our day-to-day organizational and operational needs</li>
                    <li>Protect the rights, property, and safety of Home2stay, our employees, and other stakeholders</li>
                    <li>Prevent, detect, or investigate security concerns and illegal activity including fraud</li>
                    <li>Comply with applicable laws, regulations, or industry requirements</li>
                </ul>

                <hr class="divider">

                {{-- ── JOB APPLICANTS ── --}}
                <h2>Job Applicants</h2>
                <p>
                    If you submit a job application to us, we will use the information relating to that
                    application (such as your employment history) to assess your suitability for our
                    job postings. We may also collect information from third parties, such as the
                    references you list or from background checks, for the same purpose.
                </p>

                <hr class="divider">

                {{-- ── SHARING ── --}}
                <h2>Sharing Your Information</h2>
                <p>We may share your information for four main reasons:</p>

                <h3>(a) Operating Our Business</h3>
                <p>
                    We may share your information with service providers that assist us in operating our
                    business or providing our products and services. We require all service providers to
                    protect your personal information in line with our own standards and to limit use of
                    the information to the specific purposes for which we supplied it.
                </p>

                <h3>(b) Working with Care Providers and Other Partners</h3>
                <p>
                    We may share your information with care providers where reasonably required to deliver
                    our products and services — for example, if you live in a long-term care facility.
                    We may also share your information with insurers, funding partners, and other
                    organizations to assist you in accessing government or charitable funding programs.
                </p>

                <h3>(c) Legal Reasons</h3>
                <p>In rare circumstances, we may share your information if reasonably needed to:</p>
                <ul class="privacy-list">
                    <li>Respond to authorized information requests from governmental authorities</li>
                    <li>Comply with any valid legal process or applicable law, rule, or regulation</li>
                    <li>Collect a debt, or investigate, manage, or settle any actual or potential loss</li>
                    <li>Protect the rights, property, and safety of Home2stay, our employees, or others</li>
                    <li>Detect and resolve any fraud or security concerns</li>
                </ul>

                <h3>(d) Buying or Selling a Company</h3>
                <p>
                    We may share personal information with business partners where relevant to a potential
                    or actual business transaction, such as a sale, corporate re-organization, or
                    partnership or investment opportunity.
                </p>

                <hr class="divider">

                {{-- ── INTERNATIONAL TRANSFER ── --}}
                <h2>International Transfer of Your Information</h2>
                <p>
                    Your personal information may be transmitted, stored, or processed in countries other
                    than Canada, in which case the information is governed by the laws of those countries
                    and may be subject to law enforcement access by foreign authorities.
                </p>

                <hr class="divider">

                {{-- ── COOKIES ── --}}
                <h2 id="cookies">Cookies</h2>
                <p>
                    Cookies are small text files stored on your browser that assign an anonymous identifier
                    to your device and provide information to the cookie sender. Cookies may be placed on
                    your device by us when you use our website. We also use third-party cookies that track
                    how you use our website in order to target advertisements to you on other platforms.
                </p>
                <p>
                    For more information on managing cookies, check the support pages for your browser
                    (Firefox, Safari, Chrome, Edge, etc.).
                </p>

                <h3>Google Analytics</h3>
                <p>
                    We use <strong>Google Analytics</strong> to better understand how visitors use our website.
                    Google Analytics collects information on user behaviour, including how many times a user
                    visits our website, what pages they visit, and where they were referred from. Advertising
                    identifiers for mobile devices may also be collected. Google uses this data to prepare
                    reports and may use it to contextualize ads on its own advertising network.
                </p>
                <p>
                    To learn more, visit
                    <a href="https://policies.google.com/privacy/partners" target="_blank" rel="noopener noreferrer" class="text-blue-600 underline">google.com/policies/privacy/partners</a>.
                    You can opt out using the Google Analytics browser add-on at
                    <a href="https://tools.google.com/dlpage/gaoptout" target="_blank" rel="noopener noreferrer" class="text-blue-600 underline">tools.google.com/dlpage/gaoptout</a>.
                </p>

                <h3>Facebook Pixel</h3>
                <p>
                    We use <strong>Facebook Pixel</strong> to better understand your use of our website.
                    Facebook Pixel collects information on user behaviour, including pages visited and
                    referral sources. Facebook may use data collected on our website to contextualize
                    and personalize the ads on its own advertising network.
                </p>
                <p>
                    For more information or to limit the data Facebook Pixel shares, visit
                    <a href="https://www.facebook.com/privacy/policy" target="_blank" rel="noopener noreferrer" class="text-blue-600 underline">facebook.com/privacy/policy</a>.
                </p>

                <div style="margin: 16px 0 8px;">
                    <span class="tool-badge">
                        <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20"><path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/><path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/></svg>
                        Google Analytics
                    </span>
                    <span class="tool-badge">
                        <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20"><path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/><path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/></svg>
                        Facebook Pixel
                    </span>
                    <span class="tool-badge">
                        <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20"><path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/><path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/></svg>
                        Google reCAPTCHA
                    </span>
                    <span class="tool-badge">
                        <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20"><path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/><path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/></svg>
                        Zoho SalesIQ Chat
                    </span>
                </div>

                <hr class="divider">

                {{-- ── SECURITY ── --}}
                <h2>Security</h2>
                <p>
                    The security of your personal information is important to us. We protect your
                    information by limiting access to it and by implementing reasonable physical,
                    organizational, and technological safeguards as appropriate. Unfortunately,
                    no transmission of information via the internet is completely secure.
                    Although we do our best to protect your personal information, we cannot
                    guarantee the security of data transmitted to our website. Any transmission
                    of personal information is at your own risk.
                </p>

                <hr class="divider">

                {{-- ── RETENTION ── --}}
                <h2>Retention</h2>
                <p>
                    We aim to keep your personal information only as long as necessary to provide
                    you with the products and services you request, or for other legitimate purposes
                    such as complying with our legal obligations, improving our business, resolving
                    disputes, or enforcing our agreements.
                </p>

                <hr class="divider">

                {{-- ── ACCESS & CORRECTION ── --}}
                <h2>Accessing and Correcting Your Information</h2>
                <p>
                    We make reasonable efforts to keep your information accurate and up to date.
                    To access or correct your personal information, submit a written request that
                    identifies yourself, the information you want to review, and how we can contact you.
                </p>
                <p>
                    For access requests, we will inform you of the existence, use, and disclosure
                    of the personal information we maintain about you. There may be a charge for
                    copies of your personal information. We may not be able to accommodate all
                    requests depending on the circumstances.
                </p>
                <p>
                    If a change or correction is required, let us know right away and we will make
                    any appropriate updates needed. We may not accommodate a request to change
                    information if we believe the change would violate any law or legal requirement
                    or cause the information to be incorrect.
                </p>

                <hr class="divider">

                {{-- ── CONTACT ── --}}
                <h2>Contact Us</h2>
                <p>
                    If you have any questions or concerns about this Policy or about our handling
                    of your personal information, please contact our Privacy Officer:
                </p>

                <div class="contact-box">
                    <p><strong style="color: white; font-size: 16px;">Home2stay Accessibility Ltd.</strong></p>
                    <p>Attn: Privacy Officer</p>
                    <p>196 West 6th Avenue, Vancouver, BC, V5Y 1K6</p>
                    <p>Phone: <a href="tel:+16042591211">(604) 259-1211</a></p>
                    <p>Email: <a href="mailto:info@home2stay.com">info@home2stay.com</a></p>
                    <p>Hours: Mon – Fri, 8:30 AM – 4:30 PM</p>
                </div>

                <p>
                    Please note that we may need to confirm your identity or request additional
                    details in order to process your request.
                </p>

                <hr class="divider">

                {{-- ── UPDATES ── --}}
                <h2>Updates to This Policy</h2>
                <p>
                    We update our Privacy Policy when needed to meet legislative changes, provide
                    greater transparency, respond to changes in our products or services, or address
                    changes in our data processing activities or policies.
                </p>
                <p>
                    When we make material changes to this Policy, we will notify you as appropriate
                    and post the most current version on our website. Please read any such notice
                    carefully. The most current version of this Policy will govern our use of your
                    personal information.
                </p>

            </div>{{-- end .privacy-card --}}
        </div>
    </section>

@endsection