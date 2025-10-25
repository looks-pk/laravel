@extends('layouts.app')

@section('title', 'Stairlifts Canada - Home2stay Accessibility Solutions')
@section('meta_description', 'Home2stay Stairlifts help you regain access to all levels of your home. Straight or curved stairs, we have a solution that works. Industry-leading warranties and quick install times.')

@push('styles')
    <style>
        .stairlift-hero {
            background: linear-gradient(135deg, #3B82F6 0%, #1D4ED8 100%);
            position: relative;
        }

        .content-section {
            background: white;
            border-radius: 16px;
            padding: 40px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            margin-bottom: 40px;
        }

        .feature-card {
            background: white;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            height: 100%;
        }

        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }

        .feature-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #3B82F6, #1D4ED8);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }

        .form-floating {
            position: relative;
        }
        
        .form-floating input,
        .form-floating textarea,
        .form-floating select {
            width: 100%;
            padding: 20px 16px 8px 16px;
            border: 2px solid #e5e7eb;
            border-radius: 8px;
            font-size: 16px;
            transition: all 0.3s ease;
            background: white;
        }
        
        .form-floating input:focus,
        .form-floating textarea:focus,
        .form-floating select:focus {
            outline: none;
            border-color: #3B82F6;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
        }
        
        .form-floating label {
            position: absolute;
            top: 50%;
            left: 16px;
            transform: translateY(-50%);
            transition: all 0.3s ease;
            pointer-events: none;
            color: #6b7280;
            font-size: 16px;
        }
        
        .form-floating textarea + label {
            top: 20px;
            transform: none;
        }
        
        .form-floating input:focus + label,
        .form-floating input:not(:placeholder-shown) + label,
        .form-floating textarea:focus + label,
        .form-floating textarea:not(:placeholder-shown) + label,
        .form-floating select:focus + label,
        .form-floating select:not([value=""]) + label {
            top: 8px;
            transform: none;
            font-size: 12px;
            color: #3B82F6;
            font-weight: 500;
        }

        .quick-form-section {
            background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
            border-radius: 16px;
            padding: 40px;
        }

        .btn-primary {
            background: linear-gradient(135deg, #3B82F6 0%, #1D4ED8 100%);
            border: none;
            color: white;
            padding: 15px 30px;
            border-radius: 8px;
            font-weight: 600;
            transition: all 0.3s ease;
            cursor: pointer;
            width: 100%;
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(59, 130, 246, 0.3);
        }

        .image-placeholder {
            width: 100%;
            height: 350px;
            background: linear-gradient(135deg, #e5e7eb 0%, #d1d5db 100%);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #6b7280;
            font-size: 16px;
            font-weight: 600;
            overflow: hidden;
        }

        .image-placeholder img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 12px;
        }

        .response-time-notice {
            background: #dbeafe;
            border-left: 4px solid #3B82F6;
            padding: 15px 20px;
            border-radius: 8px;
            margin-top: 20px;
        }

        .warranty-badge {
            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
            color: white;
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: 600;
            display: inline-block;
            margin-bottom: 10px;
        }
    </style>
@endpush

@section('content')
    <!-- Hero Section with Blue Background ONLY -->
    <section style="background: linear-gradient(135deg, #3B82F6 0%, #1D4ED8 100%); padding: 40px 0;">
        <div class="container mx-auto px-4">
            <div class="text-center">
                <h1 class="text-2xl md:text-3xl lg:text-4xl font-bold text-white mb-2">
                    Stairlifts Canada - Regain Freedom in Your Home
                </h1>
                <p class="text-lg md:text-xl text-blue-100 max-w-2xl mx-auto" style="margin-bottom: 0;">
                    Home2stay Stairlifts help you regain access to all levels of your home. Whether you have straight or curved stairs, we have a solution that will work for you. Backed by industry leading warranties and some of the quickest install times for straight and custom curved stairlifts, Home2stay will help you stay mobile in the home that you love.
                </p>
            </div>
        </div>
    </section>

    <!-- Images and Contact Form Section - Left Images, Right Form -->
    <section id="contact-form" style="background: #f9fafb; padding: 60px 0;">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 max-w-7xl mx-auto">
                <!-- Left Column: Images Stacked Vertically -->
                <div class="space-y-6">
                <div class="items-center justify-center">
                    <div style="height: 350px; border-radius: 12px; overflow: hidden; ">
                        <img src="{{ asset('/ads/Stair-Lifts-cat-image-min.jpg') }}" alt="Stairlift 1" style="width: 100%; height: 100%; object-fit: contain;">
                    </div>
                    <h3 class="text-center text-2xl font-bold text-gray-800">Straight Stairlifts</h3>
                    </div>
                    <div class="items-center justify-center">
                    <div style="height: 350px; border-radius: 12px; overflow: hidden;">
                        <img src="{{ asset('/ads/ads-canada.png') }}" alt="Stairlift 2" style="width: 100%; height: 100%; object-fit: contain;">
                    </div>
                    <h3 class="text-center text-2xl font-bold text-gray-800">Curved Stairlifts</h3>
                    </div>
                </div>

                <!-- Right Column: Contact Form -->
                <div>
                    <div class="text-center mb-8">
                        <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Get Your Free Quote Today</h2>
                        <p class="text-lg text-gray-600">Fill out the form below and our team will contact you shortly</p>
                    </div>

                    <div class="quick-form-section">
                        <form action="/submit-quick-contact" method="POST" class="space-y-6">
                            @csrf
                            <input type="hidden" name="form_type" value="quick_contact">
                            <input type="hidden" name="form_source" value="stairlifts_landing_page">
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="form-floating">
                                    <input type="text" id="name" name="name" placeholder=" " required>
                                    <label for="name">Your Name</label>
                                </div>
                                
                                <div class="form-floating">
                                    <input type="tel" id="phone" name="phone" placeholder=" " required>
                                    <label for="phone">Phone Number</label>
                                </div>
                            </div>
                            
                            <div class="form-floating">
                                <input type="email" id="email" name="email" placeholder=" " required>
                                <label for="email">Email Address</label>
                            </div>
                            
                            <div class="form-floating">
                                <textarea id="message" name="message" rows="4" placeholder=" " required></textarea>
                                <label for="message">Tell us about your needs</label>
                            </div>
                            
                            <div class="response-time-notice">
                                <div class="flex items-start">
                                    <svg class="w-5 h-5 text-blue-600 mr-2 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                                    </svg>
                                    <p class="text-sm text-gray-700">
                                        <strong>Fast Response Time:</strong> We will try our best to get back to you in about 3-4 business hours during our office hours (Mon-Fri, 8:00 AM - 4:30 PM).
                                    </p>
                                </div>
                            </div>
                            
                            <button type="submit" class="btn-primary">
                                Request Free Quote
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block ml-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Additional Content Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Why Choose Home2stay Stairlifts?</h2>
                    <p class="text-lg text-gray-600">Experience the difference with Canada's trusted stairlift provider</p>
                </div>

                <div class="space-y-8">
                    <div class="content-section">
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">Stay Mobile in the Home You Love</h3>
                        <p class="text-gray-700 leading-relaxed mb-4">
                            Our stairlifts are designed with your safety and comfort in mind. Experience smooth, quiet operation with intuitive controls that make navigating your stairs effortless. No more worrying about falls or struggling with mobility challenges.
                        </p>
                        <div class="space-y-3">
                            <div class="flex items-start">
                                <svg class="w-6 h-6 text-green-500 mr-3 flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                <span class="text-gray-700">Quick installation - often completed in just a few hours</span>
                            </div>
                            <div class="flex items-start">
                                <svg class="w-6 h-6 text-green-500 mr-3 flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                <span class="text-gray-700">Industry-leading warranties for peace of mind</span>
                            </div>
                            <div class="flex items-start">
                                <svg class="w-6 h-6 text-green-500 mr-3 flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                <span class="text-gray-700">Custom solutions for straight and curved staircases</span>
                            </div>
                        </div>
                    </div>

                    <div class="content-section">
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">Professional Installation & Support</h3>
                        <p class="text-gray-700 leading-relaxed mb-4">
                            Our certified technicians ensure your stairlift is installed safely and correctly. We provide comprehensive training on operation and maintenance, so you feel confident using your new stairlift from day one.
                        </p>
                        <p class="text-gray-600 leading-relaxed mb-4">
                            Every installation includes a thorough safety inspection, testing, and demonstration. We don't leave until you're completely comfortable with your stairlift and have all your questions answered.
                        </p>
                        <ul class="space-y-3 text-gray-700">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-blue-500 mr-2 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                                Free in-home consultation and assessment
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-blue-500 mr-2 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                                Professional measurement and fitting
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-blue-500 mr-2 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                                Ongoing maintenance and service available
                            </li>
                        </ul>
                    </div>

                    <div class="content-section">
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">Safety & Quality Features</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <h4 class="font-semibold text-gray-800 mb-2 flex items-center">
                                    <svg class="w-5 h-5 text-blue-600 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>
                                    Safety First
                                </h4>
                                <p class="text-gray-600 text-sm">Advanced safety features including seatbelt, sensors, and emergency stop. Battery backup ensures operation during power outages.</p>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800 mb-2 flex items-center">
                                    <svg class="w-5 h-5 text-blue-600 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>
                                    Quick Installation
                                </h4>
                                <p class="text-gray-600 text-sm">Industry-leading installation times. Most straight stairlifts installed in 2-4 hours with minimal disruption to your home.</p>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800 mb-2 flex items-center">
                                    <svg class="w-5 h-5 text-blue-600 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>
                                    Custom Solutions
                                </h4>
                                <p class="text-gray-600 text-sm">Solutions for straight, curved, narrow, and outdoor stairs. Every stairlift is tailored to your specific home layout.</p>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800 mb-2 flex items-center">
                                    <svg class="w-5 h-5 text-blue-600 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>
                                    Best Value
                                </h4>
                                <p class="text-gray-600 text-sm">Competitive pricing with flexible financing options. Industry-leading warranties protect your investment for years to come.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection

@push('scripts')
    <script>
        // Auto-resize textarea
        document.addEventListener('DOMContentLoaded', function() {
            const textarea = document.getElementById('message');
            if (textarea) {
                textarea.addEventListener('input', function() {
                    this.style.height = 'auto';
                    this.style.height = this.scrollHeight + 'px';
                });
            }
        });

        // Form validation enhancement
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.querySelector('form');
            if (form) {
                form.addEventListener('submit', function(e) {
                    const requiredFields = form.querySelectorAll('[required]');
                    let isValid = true;
                    
                    requiredFields.forEach(field => {
                        if (!field.value.trim()) {
                            isValid = false;
                            field.style.borderColor = '#ef4444';
                        } else {
                            field.style.borderColor = '#e5e7eb';
                        }
                    });
                    
                    if (!isValid) {
                        e.preventDefault();
                        alert('Please fill in all required fields.');
                    }
                });
            }
        });
    </script>
@endpush
