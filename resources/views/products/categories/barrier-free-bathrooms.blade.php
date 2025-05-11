@extends('layouts.app')

@section('title', 'Barrier-Free Bathroom Solutions')
@section('meta_description', 'Transform your bathroom into an accessible, safe space with our barrier-free bathroom solutions designed for comfort and independence.')

@push('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <style>
        .feature-tag {
            background-color: rgba(79, 70, 229, 0.1);
            color: #4f46e5;
            padding: 0.25rem 0.75rem;
            border-radius: 9999px;
            font-size: 0.875rem;
            font-weight: 500;
        }
    </style>
@endpush

@section('content')
    <!-- Hero Banner -->
    <section class="relative bg-gray-900 overflow-hidden" style="min-height: 500px;">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0 bg-cover bg-center"
            style="background-image: url('{{ asset('al-prod-page-imgs/141-1200x800-1-1024x683-min.jpg') }}');">
            <div class="absolute inset-0 bg-black opacity-50"></div>
        </div>

        <!-- Hero Content -->
        <div class="container mx-auto px-4 relative z-10 flex items-center" style="min-height: 500px;">
            <div class="max-w-3xl">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6">Barrier-Free Bathroom Solutions</h1>
                <p class="text-xl text-white/90 mb-8">
                    Creating beautiful, accessible bathrooms that enhance independence and safety without compromising on style.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="#products" class="px-6 py-3 bg-primary hover:bg-primary-dark text-white rounded-lg transition duration-300 font-medium">
                        Explore Solutions
                    </a>
                    <a href="#consultation" class="px-6 py-3 bg-white hover:bg-gray-100 text-primary rounded-lg transition duration-300 font-medium">
                        Free Consultation
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Introduction Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">Bathrooms Designed for Everyone</h2>
                    <p class="text-lg text-gray-600">
                        Our barrier-free bathroom solutions combine accessibility, safety, and modern design to create spaces that work for individuals of all abilities. Whether you're aging in place or addressing specific mobility challenges, we offer comprehensive solutions to transform your bathroom into a comfortable, accessible sanctuary.
                    </p>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
                    <div class="bg-gray-50 p-6 rounded-lg">
                        <h3 class="text-xl font-bold text-gray-800 mb-4">Why Choose Barrier-Free?</h3>
                        <ul class="space-y-3">
                            <li class="flex items-start">
                                <svg class="h-5 w-5 text-primary mt-0.5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-700">Enhanced safety with slip-resistant surfaces</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="h-5 w-5 text-primary mt-0.5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-700">Greater independence for users of all abilities</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="h-5 w-5 text-primary mt-0.5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-700">Improved accessibility for wheelchair users</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="h-5 w-5 text-primary mt-0.5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-700">Modern designs that add value to your home</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="h-5 w-5 text-primary mt-0.5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-700">ADA-compliant solutions for peace of mind</span>
                            </li>
                        </ul>
                    </div>
                    
                    <div class="bg-gray-50 p-6 rounded-lg">
                        <h3 class="text-xl font-bold text-gray-800 mb-4">Our Approach</h3>
                        <p class="text-gray-700 mb-4">We believe in a comprehensive, personalized approach to bathroom accessibility:</p>
                        <ol class="space-y-3 list-decimal pl-5">
                            <li class="text-gray-700">
                                <span class="font-medium">Free Assessment</span> - We evaluate your space and needs
                            </li>
                            <li class="text-gray-700">
                                <span class="font-medium">Custom Design</span> - Our experts create tailored solutions
                            </li>
                            <li class="text-gray-700">
                                <span class="font-medium">Professional Installation</span> - Experienced technicians ensure quality
                            </li>
                            <li class="text-gray-700">
                                <span class="font-medium">Ongoing Support</span> - We're here for maintenance and adjustments
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <section id="products" class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Our Barrier-Free Bathroom Solutions</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Discover our comprehensive range of accessibility products designed to create safer, more comfortable bathroom environments.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Product 1 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl flex flex-col h-full">
                    <div class="overflow-hidden relative">
                        <img src="{{ asset('al-prod-page-imgs/141-1200x800-1-1024x683-min.jpg') }}" alt="Roll-In Shower" 
                            class="w-full object-cover" style="height: 300px;">
                        <div class="absolute top-0 left-0 bg-primary text-white text-sm font-bold px-3 py-1 m-4 rounded">
                            Best Seller
                        </div>
                    </div>
                    <div class="p-6 flex-1 flex flex-col">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Roll-In Shower Systems</h3>
                        <p class="text-gray-600 mb-4 flex-grow">Zero-threshold shower systems provide seamless accessibility for wheelchair users and those with mobility limitations, featuring non-slip surfaces and elegant design.</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="feature-tag">Wheelchair Accessible</span>
                            <span class="feature-tag">Zero Threshold</span>
                        </div>
                        <a href="#" class="mt-auto block w-full bg-primary hover:bg-primary-dark text-white py-3 px-4 rounded-lg transition duration-300 text-center font-medium">
                            View Details
                        </a>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl flex flex-col h-full">
                    <div class="overflow-hidden relative">
                        <img src="{{ asset('al-prod-page-imgs/Model-3052.jpg') }}" alt="Walk-In Tub" 
                            class="w-full object-cover" style="height: 300px;">
                    </div>
                    <div class="p-6 flex-1 flex flex-col">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Accessible Walk-In Tubs</h3>
                        <p class="text-gray-600 mb-4 flex-grow">Our low-threshold walk-in tubs combine safety and luxury with easy-access doors, built-in seating, hydrotherapy jets, and anti-slip flooring.</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="feature-tag">Hydrotherapy</span>
                            <span class="feature-tag">Safety Features</span>
                        </div>
                        <a href="#" class="mt-auto block w-full bg-primary hover:bg-primary-dark text-white py-3 px-4 rounded-lg transition duration-300 text-center font-medium">
                            View Details
                        </a>
                    </div>
                </div>

                <!-- Product 3 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl flex flex-col h-full">
                    <div class="overflow-hidden relative">
                        <img src="{{ asset('al-prod-page-imgs/Grab-Bars.jpg') }}" alt="Bathroom Safety Accessories" 
                            class="w-full object-cover" style="height: 300px;">
                    </div>
                    <div class="p-6 flex-1 flex flex-col">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Bathroom Safety Accessories</h3>
                        <p class="text-gray-600 mb-4 flex-grow">Essential safety features including grab bars, shower seats, raised toilet seats, and non-slip surfaces to create a complete accessibility solution.</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="feature-tag">Grab Bars</span>
                            <span class="feature-tag">Shower Seats</span>
                        </div>
                        <a href="#" class="mt-auto block w-full bg-primary hover:bg-primary-dark text-white py-3 px-4 rounded-lg transition duration-300 text-center font-medium">
                            View Details
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Before & After Gallery -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Transformation Gallery</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    See how we've helped clients transform their bathrooms into accessible, beautiful spaces.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Before & After 1 -->
                <div class="bg-gray-50 rounded-lg overflow-hidden shadow-md">
                    <div class="grid grid-cols-2 gap-2 p-2">
                        <div>
                            <div class="aspect-square overflow-hidden rounded">
                                <img src="{{ asset('al-prod-page-imgs/Bathroom-Safety.jpg') }}" alt="Before" class="w-full h-full object-cover">
                                <div class="bg-gray-800 text-white text-xs font-bold px-2 py-1 absolute top-4 left-4 rounded">BEFORE</div>
                            </div>
                        </div>
                        <div>
                            <div class="aspect-square overflow-hidden rounded">
                                <img src="{{ asset('al-prod-page-imgs/141-1200x800-1-1024x683-min.jpg') }}" alt="After" class="w-full h-full object-cover">
                                <div class="bg-primary text-white text-xs font-bold px-2 py-1 absolute top-4 right-4 rounded">AFTER</div>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Roll-In Shower Conversion</h3>
                        <p class="text-gray-600">Transformed a standard tub into a spacious roll-in shower with grab bars and built-in seating.</p>
                    </div>
                </div>

                <!-- Before & After 2 -->
                <div class="bg-gray-50 rounded-lg overflow-hidden shadow-md">
                    <div class="grid grid-cols-2 gap-2 p-2">
                        <div>
                            <div class="aspect-square overflow-hidden rounded">
                                <img src="{{ asset('al-prod-page-imgs/Tub-Cuts.jpg') }}" alt="Before" class="w-full h-full object-cover">
                                <div class="bg-gray-800 text-white text-xs font-bold px-2 py-1 absolute top-4 left-4 rounded">BEFORE</div>
                            </div>
                        </div>
                        <div>
                            <div class="aspect-square overflow-hidden rounded">
                                <img src="{{ asset('al-prod-page-imgs/Model-3052.jpg') }}" alt="After" class="w-full h-full object-cover">
                                <div class="bg-primary text-white text-xs font-bold px-2 py-1 absolute top-4 right-4 rounded">AFTER</div>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Walk-In Tub Installation</h3>
                        <p class="text-gray-600">Replaced a hard-to-access bathtub with a therapeutic walk-in tub featuring hydrotherapy jets.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Consultation Form -->
    <section id="consultation" class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto bg-white rounded-xl shadow-lg p-8 md:p-12">
                <div class="text-center mb-10">
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">Request Your Free Bathroom Accessibility Consultation</h2>
                    <p class="text-gray-600">Our accessibility experts will evaluate your bathroom and recommend personalized solutions to improve safety and independence.</p>
                </div>

                <form action="#" method="POST" class="space-y-6">
                    @csrf
                    <!-- Personal Information -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-gray-700 font-medium mb-2" for="name">Full Name *</label>
                            <input type="text" id="name" name="name" required
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-medium mb-2" for="phone">Phone Number *</label>
                            <input type="tel" id="phone" name="phone" required
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-medium mb-2" for="email">Email Address *</label>
                            <input type="email" id="email" name="email" required
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-medium mb-2" for="city">City/Municipality *</label>
                            <input type="text" id="city" name="city" required
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
                        </div>
                    </div>

                    <!-- Assessment Type -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Preferred Consultation Type *</label>
                        <div class="space-y-2">
                            <label class="flex items-center space-x-3">
                                <input type="radio" name="assessment_type" value="in_person" class="form-radio text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">In-Home Assessment</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="radio" name="assessment_type" value="video_call" class="form-radio text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Video Consultation</span>
                            </label>
                        </div>
                    </div>
                    
                    <!-- Areas of Interest -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Areas of Interest *</label>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="interests[]" value="roll_in_shower" class="form-checkbox text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Roll-In Shower</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="interests[]" value="walk_in_tub" class="form-checkbox text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Walk-In Tub</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="interests[]" value="safety_accessories" class="form-checkbox text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Safety Accessories</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="interests[]" value="complete_remodel" class="form-checkbox text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Complete Bathroom Remodel</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="interests[]" value="funding_options" class="form-checkbox text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Funding/Financial Assistance</span>
                            </label>
                        </div>
                    </div>

                    <!-- Additional Information -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-2" for="message">Additional Information</label>
                        <textarea id="message" name="message" rows="4"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent"
                            placeholder="Please share any specific requirements or challenges..."></textarea>
                    </div>

                    <!-- Submit Button -->
                    <div class="text-center">
                        <button type="submit"
                            class="inline-flex items-center px-6 py-3 bg-primary text-white rounded-lg hover:bg-primary-dark transition duration-300">
                            Schedule Consultation
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        // Any custom scripts for the page can be initialized here
    </script>
@endpush 