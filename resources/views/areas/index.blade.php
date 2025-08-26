@extends('layouts.app')

@section('title', 'Service Areas - Home2stay Accessibility Solutions')
@section('meta_description', 'Home2stay provides accessibility solutions across multiple cities. Find your local Home2stay team for stairlifts, grab bars, ramps, and home safety equipment.')

@push('styles')
<style>
    :root {
        --primary: #0078bf;
        --primary-dark: #005f96;
        --secondary: #f8b301;
        --secondary-dark: #d99a00;
        --accent: #d40000;
        --text-dark: #2d3748;
        --text-light: #718096;
        --bg-light: #f7fafc;
        --transition: all 0.3s ease;
    }

    .sticky-form {
        position: sticky;
        top: 2rem;
        height: fit-content;
    }

    .area-card {
        background: white;
        border-radius: 1rem;
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        transition: var(--transition);
        overflow: hidden;
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    .area-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
    }

    .area-map {
        height: 200px;
        background: url('/ser-bath/make safety a priority at home by installing the products for your accessible bathroom in canada.png') center center / cover no-repeat !important;
        position: relative;
        overflow: hidden;
    }

    .map-placeholder {
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 3rem;
        background: linear-gradient(45deg, rgba(255,255,255,0.1) 0%, rgba(255,255,255,0.05) 100%);
    }

    .area-card .card-body {
        padding: 1.5rem;
        display: flex;
        flex-direction: column;
        flex-grow: 1;
    }

    .area-card h3 {
        font-size: 1.5rem;
        font-weight: 700;
        margin-bottom: 0.75rem;
        color: var(--text-dark);
    }

    .area-card p {
        color: var(--text-light);
        margin-bottom: 1.5rem;
        flex-grow: 1;
        line-height: 1.6;
    }

    .btn-primary {
        background: linear-gradient(45deg, var(--primary) 0%, var(--primary-dark) 100%);
        color: white;
        padding: 0.75rem 1.5rem;
        border-radius: 0.5rem;
        font-weight: 600;
        letter-spacing: 0.5px;
        transform: translateY(0);
        box-shadow: 0 4px 6px rgba(0, 60, 95, 0.1);
        transition: var(--transition);
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        justify-content: center;
    }

    .btn-primary:hover {
        background: linear-gradient(45deg, var(--primary-dark) 0%, var(--primary) 100%);
        transform: translateY(-3px);
        box-shadow: 0 6px 12px rgba(0, 60, 95, 0.2);
        color: white;
        text-decoration: none;
    }

    .btn-secondary {
        background: linear-gradient(45deg, var(--secondary) 0%, var(--secondary-dark) 100%);
        color: var(--text-dark);
        padding: 0.75rem 1.5rem;
        border-radius: 0.5rem;
        font-weight: 600;
        letter-spacing: 0.5px;
        transform: translateY(0);
        box-shadow: 0 4px 6px rgba(216, 154, 0, 0.1);
        transition: var(--transition);
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        justify-content: center;
    }

    .btn-secondary:hover {
        background: linear-gradient(45deg, var(--secondary-dark) 0%, var(--secondary) 100%);
        transform: translateY(-3px);
        box-shadow: 0 6px 12px rgba(216, 154, 0, 0.2);
        color: var(--text-dark);
        text-decoration: none;
    }

    .quote-form {
        background: white;
        border-radius: 1rem;
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        padding: 2rem;
        border-top: 4px solid var(--secondary);
    }

    .form-input {
        width: 100%;
        padding: 0.75rem 1rem;
        border: 2px solid #e2e8f0;
        border-radius: 0.5rem;
        font-size: 0.875rem;
        transition: var(--transition);
        background: white;
    }

    .form-input:focus {
        outline: none;
        border-color: var(--primary);
        box-shadow: 0 0 0 3px rgba(0, 120, 191, 0.1);
    }

    .form-label {
        display: block;
        font-size: 0.875rem;
        font-weight: 600;
        color: var(--text-dark);
        margin-bottom: 0.5rem;
    }

    .section-title {
        position: relative;
        display: inline-block;
        margin-bottom: 2rem;
        font-weight: 700;
        letter-spacing: -0.5px;
    }

    .section-title::after {
        content: '';
        position: absolute;
        width: 70px;
        height: 4px;
        background: linear-gradient(90deg, var(--primary) 0%, var(--primary-dark) 100%);
        bottom: -10px;
        left: 0;
        border-radius: 2px;
    }

    @media (max-width: 1024px) {
        .sticky-form {
            position: static;
            margin-top: 2rem;
        }
    }
</style>
@endpush

@section('content')
<div class="min-h-screen bg-gray-50 py-12">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Left Content -->
            <div class="lg:col-span-2">
                <!-- Header Section -->
                <div class="mb-12">
                    <h1 class="text-4xl md:text-5xl font-bold text-gray-900 section-title mb-8">
                        Our Service Areas eeee - Updated at {{ date('Y-m-d H:i:s') }}
                    </h1>
                    <div class="prose prose-lg max-w-none">
                        <p class="text-xl text-gray-700 leading-relaxed mb-6">
                            Home2stay is proud to serve communities across Canada, bringing accessibility solutions directly to your doorstep. Our experienced local teams understand the unique needs of each region and are committed to helping you create a safer, more accessible home environment.
                        </p>
                        <p class="text-lg text-gray-600 leading-relaxed mb-6">
                            Whether you need stairlifts, grab bars, wheelchair ramps, bathroom modifications, or comprehensive home assessments, our certified professionals are ready to provide personalized solutions that enhance your independence and quality of life.
                        </p>
                        <p class="text-lg text-gray-600 leading-relaxed mb-8">
                            Each of our service areas is staffed with knowledgeable specialists who are familiar with local building codes, accessibility requirements, and community resources. We're not just a service provider – we're your neighbors, committed to helping you stay safely in the home you love.
                        </p>
                    </div>
                    
                    <a href="#quote-form" class="btn-secondary inline-flex items-center text-lg px-8 py-4">
                        Get Your Free Quote
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>

                <!-- Areas Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    @forelse($areas as $area)
                        <div class="area-card">
                            <!-- Map Section -->
                            <div class="area-map">
                                <!-- Overlay with city name -->
                                <div class="absolute inset-0 bg-black bg-opacity-60 flex items-end p-4">
                                    <h3 class="text-white text-xl font-bold">{{ ucfirst(str_replace('-', ' ', $area)) }}</h3>
                                </div>
                            </div>

                            <!-- Card Body -->
                            <div class="card-body">
                                <h3>Home2stay {{ ucwords(str_replace('-', ' ', $area)) }}</h3>
                                <p>
                                    @if($area === 'stair-lifts-surrey-british-columbia')
                                        Serving Surrey and the surrounding Fraser Valley region with professional accessibility solutions. Our Surrey team specializes in stairlifts, grab bars, ramps, and comprehensive home modifications for residents throughout the area.
                                    @elseif($area === 'stair-lifts-vancouver')
                                        Providing accessibility solutions throughout Vancouver and the Lower Mainland. We help residents create safer, more accessible homes with professional installation services.
                                    @else
                                        Professional accessibility solutions and home safety equipment for {{ ucfirst(str_replace('-', ' ', $area)) }} residents. Our experienced team provides personalized service and expert installation.
                                    @endif
                                </p>
                                
                                <a href="{{ route('areas.show', $area) }}" class="btn-primary mt-auto">
                                    <span>Learn More</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    @empty
                        <div class="col-span-2 text-center py-12">
                            <div class="bg-white rounded-xl shadow-lg p-8">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-gray-400 mx-auto mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <h3 class="text-xl font-semibold text-gray-700 mb-2">No Service Areas Available</h3>
                                <p class="text-gray-500">We're expanding our services. Check back soon for new locations!</p>
                            </div>
                        </div>
                    @endforelse
                </div>

                <!-- Contact Section for Unlisted Areas -->
                <div class="mt-16 bg-white rounded-xl shadow-lg p-8">
                    <div class="text-center">
                        <h2 class="text-2xl font-bold text-gray-900 mb-4">Don't See Your Area?</h2>
                        <p class="text-gray-600 mb-6 max-w-2xl mx-auto">
                            We're constantly expanding our service areas. If you don't see your city listed, contact us to learn about our services in your region or to request service expansion.
                        </p>
                        <div class="flex flex-col sm:flex-row gap-4 justify-center">
                            <a href="{{ route('contact') }}" class="btn-primary">
                                Contact Us
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                </svg>
                            </a>
                            <a href="tel:1-800-555-0123" class="btn-secondary">
                                Call 1-800-555-0123
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Sidebar - Sticky Quote Form -->
            <div class="lg:col-span-1">
                <div class="sticky-form">
                    <div class="quote-form" id="quote-form">
                        <div class="text-center mb-6">
                            <h3 class="text-2xl font-bold text-gray-900 mb-2">Get Your Free Quote</h3>
                            <p class="text-gray-600 text-sm">Quick and easy - no obligation</p>
                        </div>

                        <form id="quote-form-submit" class="space-y-4">
                            <div>
                                <label for="name" class="form-label">Full Name *</label>
                                <input type="text" id="name" name="name" class="form-input" required placeholder="Enter your full name">
                            </div>

                            <div>
                                <label for="email" class="form-label">Email Address *</label>
                                <input type="email" id="email" name="email" class="form-input" required placeholder="your@email.com">
                            </div>

                            <div>
                                <label for="phone" class="form-label">Phone Number *</label>
                                <input type="tel" id="phone" name="phone" class="form-input" required placeholder="(555) 123-4567">
                            </div>

                            <div>
                                <label for="city" class="form-label">City/Area *</label>
                                <input type="text" id="city" name="city" class="form-input" required placeholder="Enter your city">
                            </div>

                            <div>
                                <label for="service" class="form-label">Service Needed</label>
                                <select id="service" name="service" class="form-input">
                                    <option value="">Select a service</option>
                                    <option value="stairlift">Stairlift</option>
                                    <option value="grab-bars">Grab Bars</option>
                                    <option value="ramps">Wheelchair Ramps</option>
                                    <option value="bathroom">Bathroom Modifications</option>
                                    <option value="assessment">Home Assessment</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>

                            <div>
                                <label for="message" class="form-label">Brief Description</label>
                                <textarea id="message" name="message" rows="3" class="form-input" placeholder="Tell us about your needs..."></textarea>
                            </div>

                            <button type="submit" class="btn-primary w-full py-3">
                                Get Free Quote
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </button>

                            <div class="text-center mt-4">
                                <p class="text-xs text-gray-500">
                                    By submitting this form, you agree to our 
                                    <a href="#" class="text-blue-600 hover:underline">Privacy Policy</a>
                                </p>
                            </div>
                        </form>
                    </div>

                    <!-- Contact Info -->
                    <div class="mt-6 bg-gray-100 rounded-lg p-4">
                        <div class="text-center">
                            <h4 class="font-semibold text-gray-900 mb-2">Prefer to Call?</h4>
                            <a href="tel:1-800-555-0123" class="text-2xl font-bold text-blue-600 hover:text-blue-700">
                                1-800-555-0123
                            </a>
                            <p class="text-sm text-gray-600 mt-1">Mon-Fri 8AM-6PM</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Handle quote form submission
    const quoteForm = document.getElementById('quote-form-submit');
    if (quoteForm) {
        quoteForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form data
            const formData = new FormData(this);
            const data = Object.fromEntries(formData);
            
            // Simple validation
            if (!data.name || !data.email || !data.phone || !data.city) {
                alert('Please fill in all required fields.');
                return;
            }
            
            // Here you would typically send the data to your server
            // For now, we'll show a success message
            alert('Thank you for your quote request! We will contact you within 24 hours.');
            
            // Reset form
            this.reset();
        });
    }

    // Smooth scroll for "Get Your Free Quote" button
    const quoteButton = document.querySelector('a[href="#quote-form"]');
    if (quoteButton) {
        quoteButton.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.getElementById('quote-form');
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    }
});
</script>
@endpush 