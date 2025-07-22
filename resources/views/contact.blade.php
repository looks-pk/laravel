@extends('layouts.app')

@section('title', 'Contact Us - Home2stay Accessibility Solutions')
@section('meta_description', 'Contact Home2stay for accessibility solutions in Canada. Get free quotes, consultations, and expert advice for grab bars, stairlifts, barrier-free bathrooms, and more.')

@push('styles')
    <style>
        .contact-hero {
            background: linear-gradient(135deg, #3B82F6 0%, #1D4ED8 100%);
            position: relative;
            overflow: hidden;
        }
        
        .contact-hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" fill="rgba(255,255,255,0.1)"><polygon points="0,100 1000,0 1000,100"/></svg>');
            background-size: cover;
        }
        
        .contact-card {
            background: white;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .contact-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }
        
        .contact-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #3B82F6, #1D4ED8);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
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
        
        .quick-form {
            background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
            border-radius: 16px;
            padding: 30px;
            margin-bottom: 40px;
        }
        
        .detailed-form {
            background: white;
            border-radius: 16px;
            padding: 40px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }
        
        .map-container {
            height: 400px;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }
        
        .emergency-banner {
            background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
            color: white;
            padding: 20px;
            border-radius: 12px;
            margin-bottom: 30px;
            text-align: center;
        }
        
        .business-hours {
            background: #f8fafc;
            border-radius: 12px;
            padding: 25px;
        }
        
        .hour-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 8px 0;
            border-bottom: 1px solid #e5e7eb;
        }
        
        .hour-item:last-child {
            border-bottom: none;
        }
        
        .hour-day {
            font-weight: 600;
            color: #374151;
        }
        
        .hour-time {
            color: #6b7280;
        }
        
        .hour-time.open {
            color: #059669;
            font-weight: 600;
        }
        
        .contact-method {
            display: flex;
            align-items: center;
            padding: 15px;
            background: #f8fafc;
            border-radius: 12px;
            margin-bottom: 15px;
            transition: all 0.3s ease;
        }
        
        .contact-method:hover {
            background: #e2e8f0;
            transform: translateX(5px);
        }
        
        .contact-method-icon {
            width: 40px;
            height: 40px;
            background: #3B82F6;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
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
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(59, 130, 246, 0.3);
        }
        
        .btn-secondary {
            background: white;
            border: 2px solid #3B82F6;
            color: #3B82F6;
            padding: 15px 30px;
            border-radius: 8px;
            font-weight: 600;
            transition: all 0.3s ease;
            cursor: pointer;
        }
        
        .btn-secondary:hover {
            background: #3B82F6;
            color: white;
        }
    </style>
@endpush

@section('content')
    <!-- Hero Section -->
    <section class="contact-hero py-20">
        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6">
                    Contact Home2stay
                </h1>
                <p class="text-xl text-blue-100 mb-8 max-w-2xl mx-auto">
                    Ready to make your home more accessible? Get in touch with our expert team for a free consultation and quote.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="tel:604-259-1211" class="inline-flex items-center px-8 py-4 bg-white text-blue-600 rounded-lg font-semibold hover:bg-gray-100 transition duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                        </svg>
                        Call Now: 604-259-1211
                    </a>
                                         <a href="mailto:info@home2stay.com" class="inline-flex items-center px-8 py-4 bg-transparent text-white border-2 border-white rounded-lg font-semibold hover:bg-white hover:text-blue-600 transition duration-300">
                         <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                             <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                             <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                         </svg>
                         Email Us
                     </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Emergency Banner -->
    <section class="py-8 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="emergency-banner">
                <h3 class="text-2xl font-bold mb-2">🚨 Emergency Installation Services Available</h3>
                <p class="text-lg">Need urgent accessibility solutions? We offer emergency installations for critical safety needs.</p>
            </div>
        </div>
    </section>

    <!-- Contact Information Cards -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Get In Touch</h2>
                <p class="text-lg text-gray-600">Multiple ways to reach us for your accessibility needs</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Phone -->
                <div class="contact-card p-8 text-center">
                    <div class="contact-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Phone</h3>
                    <p class="text-gray-600 mb-4">Call us directly for immediate assistance</p>
                    <a href="tel:604-259-1211" class="text-blue-600 hover:text-blue-800 font-semibold">604-259-1211</a>
                </div>

                <!-- Email -->
                <div class="contact-card p-8 text-center">
                    <div class="contact-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                        </svg>
                    </div>
                                         <h3 class="text-xl font-bold text-gray-800 mb-2">Email</h3>
                     <p class="text-gray-600 mb-4">Send us your questions anytime</p>
                     <a href="mailto:info@home2stay.com" class="text-blue-600 hover:text-blue-800 font-semibold">info@home2stay.com</a>
                </div>

                <!-- Address -->
                <div class="contact-card p-8 text-center">
                    <div class="contact-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Address</h3>
                    <p class="text-gray-600 mb-4">Visit our showroom</p>
                    <p class="text-gray-800 font-semibold">
                        Vancouver, BC<br>
                        Canada
                    </p>
                </div>

                <!-- Business Hours -->
                <div class="contact-card p-8 text-center">
                    <div class="contact-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Hours</h3>
                    <p class="text-gray-600 mb-4">We're here when you need us</p>
                    <div class="text-sm text-gray-800">
                        <p class="font-semibold">Mon-Fri: 8:00 AM - 6:00 PM</p>
                        <p class="font-semibold">Sat: 9:00 AM - 4:00 PM</p>
                        <p class="font-semibold">Sun: Emergency only</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Quick Contact Form -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Quick Contact</h2>
                    <p class="text-lg text-gray-600">Get a quick response to your inquiry</p>
                </div>

                <div class="quick-form">
                    <form action="/submit-quick-contact" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        @csrf
                        <input type="hidden" name="form_type" value="quick_contact">
                        <input type="hidden" name="form_source" value="contact_page_quick_form">
                        <div class="form-floating">
                            <input type="text" id="quick_name" name="name" placeholder=" " required>
                            <label for="quick_name">Your Name</label>
                        </div>
                        
                        <div class="form-floating">
                            <input type="tel" id="quick_phone" name="phone" placeholder=" " required>
                            <label for="quick_phone">Phone Number</label>
                        </div>
                        
                        <div class="form-floating">
                            <input type="email" id="quick_email" name="email" placeholder=" " required>
                            <label for="quick_email">Email Address</label>
                        </div>
                        
                        <div class="form-floating">
                            <select id="quick_service" name="service" required>
                                <option value="">Select Service</option>
                                <option value="grab_bars">Grab Bars</option>
                                <option value="stairlifts">Stairlifts</option>
                                <option value="barrier_free_bathrooms">Barrier-Free Bathrooms</option>
                                <option value="tub_cuts">Tub Cuts</option>
                                <option value="ramps">Ramps</option>
                                <option value="other">Other</option>
                            </select>
                            <label for="quick_service">Service Needed</label>
                        </div>
                        
                        <div class="form-floating md:col-span-2">
                            <textarea id="quick_message" name="message" rows="4" placeholder=" " required></textarea>
                            <label for="quick_message">Brief Description</label>
                        </div>
                        
                        <div class="md:col-span-2 flex flex-col sm:flex-row gap-4">
                            <button type="submit" class="btn-primary flex-1">
                                Send Quick Message
                            </button>
                            <button type="button" class="btn-secondary flex-1" onclick="toggleDetailedForm()">
                                Need Detailed Quote?
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Detailed Contact Form -->
    <section id="detailed-form" class="py-16 bg-gray-50" style="display: none;">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Detailed Assessment Request</h2>
                    <p class="text-lg text-gray-600">Provide detailed information for a comprehensive quote</p>
                </div>

                <div class="detailed-form">
                    <form action="/submit-detailed-contact" method="POST" class="space-y-6">
                        @csrf
                        <input type="hidden" name="form_type" value="detailed_contact">
                        <input type="hidden" name="form_source" value="contact_page_detailed_form">
                        
                        <!-- Personal Information -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="form-floating">
                                <input type="text" id="detailed_name" name="name" placeholder=" " required>
                                <label for="detailed_name">Full Name</label>
                            </div>
                            
                            <div class="form-floating">
                                <input type="tel" id="detailed_phone" name="phone" placeholder=" " required>
                                <label for="detailed_phone">Phone Number</label>
                            </div>
                            
                            <div class="form-floating">
                                <input type="email" id="detailed_email" name="email" placeholder=" " required>
                                <label for="detailed_email">Email Address</label>
                            </div>
                            
                            <div class="form-floating">
                                <input type="text" id="detailed_city" name="city" placeholder=" " required>
                                <label for="detailed_city">City/Municipality</label>
                            </div>
                        </div>

                        <!-- Service Selection -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="form-floating">
                                <select id="detailed_service" name="service" required>
                                    <option value="">Select Primary Service</option>
                                    <option value="barrier_free_bathrooms">Barrier-Free Bathrooms</option>
                                    <option value="grab_bars">Grab Bars</option>
                                    <option value="stairlifts">Stairlifts</option>
                                    <option value="ramps">Ramps</option>
                                    <option value="tub_cuts">Tub Cuts</option>
                                    <option value="safety_poles">Safety Poles & Handrails</option>
                                    <option value="other">Other</option>
                                </select>
                                <label for="detailed_service">Primary Service Needed</label>
                            </div>
                            
                            <div class="form-floating">
                                <select id="detailed_timeline" name="timeline" required>
                                    <option value="">Select Timeline</option>
                                    <option value="immediate">Immediate (Within 1 week)</option>
                                    <option value="month">Within 1 month</option>
                                    <option value="quarter">Within 3 months</option>
                                    <option value="flexible">Flexible timeline</option>
                                </select>
                                <label for="detailed_timeline">Project Timeline</label>
                            </div>
                        </div>

                        <!-- Assessment Type -->
                        <div class="space-y-4">
                            <h3 class="text-lg font-semibold text-gray-800">Preferred Assessment Type</h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <label class="flex items-center p-4 bg-white rounded-lg border-2 border-gray-200 cursor-pointer hover:border-blue-300">
                                    <input type="radio" name="assessment_type" value="in_person" class="mr-3">
                                    <div>
                                        <div class="font-semibold">In-Person Assessment</div>
                                        <div class="text-sm text-gray-600">Our expert visits your home</div>
                                    </div>
                                </label>
                                <label class="flex items-center p-4 bg-white rounded-lg border-2 border-gray-200 cursor-pointer hover:border-blue-300">
                                    <input type="radio" name="assessment_type" value="video_call" class="mr-3">
                                    <div>
                                        <div class="font-semibold">Video Call Assessment</div>
                                        <div class="text-sm text-gray-600">Virtual consultation via video</div>
                                    </div>
                                </label>
                            </div>
                        </div>

                        <!-- Additional Options -->
                        <div class="space-y-4">
                            <h3 class="text-lg font-semibold text-gray-800">Additional Information</h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <label class="flex items-center p-3 bg-white rounded-lg">
                                    <input type="checkbox" name="funding_assistance" class="mr-3">
                                    <span>I need information about funding assistance</span>
                                </label>
                                <label class="flex items-center p-3 bg-white rounded-lg">
                                    <input type="checkbox" name="urgent_request" class="mr-3">
                                    <span>This is an urgent request</span>
                                </label>
                                <label class="flex items-center p-3 bg-white rounded-lg">
                                    <input type="checkbox" name="insurance_claim" class="mr-3">
                                    <span>This is an insurance claim</span>
                                </label>
                                <label class="flex items-center p-3 bg-white rounded-lg">
                                    <input type="checkbox" name="rental_option" class="mr-3">
                                    <span>Interested in rental options</span>
                                </label>
                            </div>
                        </div>

                        <!-- Contact Preferences -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="form-floating">
                                <select id="detailed_contact_time" name="contact_time">
                                    <option value="morning">Morning (9AM - 12PM)</option>
                                    <option value="afternoon">Afternoon (12PM - 5PM)</option>
                                    <option value="evening">Evening (5PM - 8PM)</option>
                                    <option value="anytime">Anytime</option>
                                </select>
                                <label for="detailed_contact_time">Best Time to Contact</label>
                            </div>
                            
                            <div class="form-floating">
                                <select id="detailed_contact_method" name="contact_method">
                                    <option value="phone">Phone Call</option>
                                    <option value="email">Email</option>
                                    <option value="text">Text Message</option>
                                    <option value="any">Any Method</option>
                                </select>
                                <label for="detailed_contact_method">Preferred Contact Method</label>
                            </div>
                        </div>

                        <!-- Detailed Message -->
                        <div class="form-floating">
                            <textarea id="detailed_message" name="message" rows="6" placeholder=" "></textarea>
                            <label for="detailed_message">Detailed Description of Your Needs</label>
                        </div>

                        <!-- Terms and Submit -->
                        <div class="space-y-6">
                            <label class="flex items-start p-4 bg-blue-50 rounded-lg">
                                <input type="checkbox" required name="terms" class="mr-3 mt-1">
                                <span class="text-sm text-gray-700">I agree to receive communications from Home2stay regarding my request. I understand that my information will be handled according to Home2stay's privacy policy.</span>
                            </label>
                            
                            <div class="flex flex-col sm:flex-row gap-4">
                                <button type="submit" class="btn-primary flex-1">
                                    Submit Detailed Request
                                </button>
                                <button type="button" class="btn-secondary flex-1" onclick="toggleDetailedForm()">
                                    Back to Quick Form
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Methods & Map -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Contact Methods -->
                <div>
                    <h2 class="text-3xl font-bold text-gray-800 mb-8">Multiple Ways to Reach Us</h2>
                    
                    <div class="space-y-4">
                        <div class="contact-method">
                            <div class="contact-method-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Phone Support</h4>
                                <p class="text-gray-600">Call us at <a href="tel:604-259-1211" class="text-blue-600 hover:underline">604-259-1211</a></p>
                            </div>
                        </div>

                        <div class="contact-method">
                            <div class="contact-method-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                </svg>
                            </div>
                                                         <div>
                                 <h4 class="font-semibold text-gray-800">Email Support</h4>
                                 <p class="text-gray-600">Email us at <a href="mailto:info@home2stay.com" class="text-blue-600 hover:underline">info@home2stay.com</a></p>
                             </div>
                        </div>

                        <div class="contact-method">
                            <div class="contact-method-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z" />
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Free Quotes</h4>
                                <p class="text-gray-600">Get free, no-obligation quotes for all services</p>
                            </div>
                        </div>

                        <div class="contact-method">
                            <div class="contact-method-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Expert Consultation</h4>
                                <p class="text-gray-600">Get professional advice from our accessibility experts</p>
                            </div>
                        </div>
                    </div>

                    <!-- Business Hours -->
                    <div class="business-hours mt-8">
                        <h3 class="text-xl font-bold text-gray-800 mb-4">Business Hours</h3>
                        <div class="space-y-2">
                            <div class="hour-item">
                                <span class="hour-day">Monday - Friday</span>
                                <span class="hour-time open">8:00 AM - 6:00 PM</span>
                            </div>
                            <div class="hour-item">
                                <span class="hour-day">Saturday</span>
                                <span class="hour-time open">9:00 AM - 4:00 PM</span>
                            </div>
                            <div class="hour-item">
                                <span class="hour-day">Sunday</span>
                                <span class="hour-time">Emergency Service Only</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Map -->
                <div>
                    <h2 class="text-3xl font-bold text-gray-800 mb-8">Our Location</h2>
                    <div class="map-container">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2603.3391482825785!2d-123.1207367!3d49.2827291!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x548673f143a94fb3%3A0xbb9196ea9b81f38b!2sVancouver%2C%20BC!5e0!3m2!1sen!2sca!4v1644934721054!5m2!1sen!2sca" 
                            width="100%" 
                            height="100%" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                    <div class="mt-4 p-4 bg-gray-50 rounded-lg">
                        <h4 class="font-semibold text-gray-800 mb-2">Service Areas</h4>
                        <p class="text-gray-600">We proudly serve Vancouver, Surrey, Richmond, Burnaby, and surrounding areas in British Columbia.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        function toggleDetailedForm() {
            const quickForm = document.querySelector('.quick-form').closest('section');
            const detailedForm = document.getElementById('detailed-form');
            
            if (detailedForm.style.display === 'none') {
                detailedForm.style.display = 'block';
                quickForm.style.display = 'none';
                detailedForm.scrollIntoView({ behavior: 'smooth' });
            } else {
                detailedForm.style.display = 'none';
                quickForm.style.display = 'block';
                quickForm.scrollIntoView({ behavior: 'smooth' });
            }
        }
        
        // Auto-resize textareas
        document.addEventListener('DOMContentLoaded', function() {
            const textareas = document.querySelectorAll('textarea');
            textareas.forEach(textarea => {
                textarea.addEventListener('input', function() {
                    this.style.height = 'auto';
                    this.style.height = this.scrollHeight + 'px';
                });
            });
        });
        
        // Form validation enhancement
        document.addEventListener('DOMContentLoaded', function() {
            const forms = document.querySelectorAll('form');
            forms.forEach(form => {
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
            });
        });
    </script>
@endpush
