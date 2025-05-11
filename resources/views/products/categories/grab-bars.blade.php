@extends('layouts.app')

@section('title', 'Grab Bars & Bathroom Safety')
@section('meta_description', 'Discover our comprehensive range of grab bars and bathroom safety solutions to enhance accessibility and independence in your home.')

@push('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
@endpush

@section('content')
    <!-- Hero Banner -->
    <section class="relative bg-gray-900 overflow-hidden" style="min-height: 450px;">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0 bg-cover bg-center"
            style="background-image: url('{{ asset('al-prod-page-imgs/Grab-Bars.jpg') }}');">
            <div class="absolute inset-0 bg-gradient-to-r from-black/70 to-black/40"></div>
        </div>

        <!-- Hero Content -->
        <div class="container mx-auto px-4 relative z-10 flex items-center" style="min-height: 450px;">
            <div class="max-w-3xl">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6">Grab Bars & Safety Solutions</h1>
                <p class="text-xl text-white/90 mb-8">
                    Enhance bathroom safety and mobility with our premium selection of grab bars and accessibility solutions.
                </p>
                <a href="#products" class="px-6 py-3 bg-primary hover:bg-primary-dark text-white rounded-lg transition duration-300 font-medium inline-flex items-center">
                    View Products
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Introduction Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">Safety & Independence in Every Bathroom</h2>
                    <p class="text-lg text-gray-600">
                        Grab bars and bathroom safety accessories are essential components in creating a secure and accessible bathroom environment. Our range of products offers both functionality and style, helping to prevent falls while maintaining the aesthetic of your space.
                    </p>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
                    <div class="bg-gray-50 p-6 rounded-lg text-center">
                        <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Safety First</h3>
                        <p class="text-gray-600">All our products are tested to exceed safety standards, providing reliable support when you need it most.</p>
                    </div>
                    
                    <div class="bg-gray-50 p-6 rounded-lg text-center">
                        <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Stylish Design</h3>
                        <p class="text-gray-600">Contemporary finishes and designs that complement your bathroom décor without sacrificing functionality.</p>
                    </div>
                    
                    <div class="bg-gray-50 p-6 rounded-lg text-center">
                        <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">For Everyone</h3>
                        <p class="text-gray-600">Solutions for all ages and abilities, whether aging in place or accommodating specific mobility needs.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <section id="products" class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Our Grab Bar Collection</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Explore our extensive range of grab bars and safety accessories designed to enhance bathroom safety without compromising on style.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Product 1 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl flex flex-col h-full">
                    <div class="overflow-hidden relative">
                        <img src="{{ asset('al-prod-page-imgs/Grab-Bars.jpg') }}" alt="Standard Grab Bars" 
                            class="w-full object-cover" style="height: 300px;">
                    </div>
                    <div class="p-6 flex-1 flex flex-col">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Standard Straight Grab Bars</h3>
                        <p class="text-gray-600 mb-4 flex-grow">Our most versatile grab bars available in multiple lengths and finishes, perfect for installation near toilets, showers, and tubs.</p>
                        <div class="mt-auto">
                            <div class="mb-4">
                                <div class="flex items-center justify-between mb-2">
                                    <span class="text-sm font-medium text-gray-600">Lengths</span>
                                    <span class="text-sm text-gray-800">12", 16", 18", 24", 32", 36"</span>
                                </div>
                                <div class="flex items-center justify-between">
                                    <span class="text-sm font-medium text-gray-600">Finishes</span>
                                    <span class="text-sm text-gray-800">Chrome, Brushed Nickel, Bronze, White</span>
                                </div>
                            </div>
                            <a href="#" class="block w-full bg-primary hover:bg-primary-dark text-white py-3 px-4 rounded-lg transition duration-300 text-center font-medium">
                                Learn More
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl flex flex-col h-full">
                    <div class="overflow-hidden relative">
                        <img src="{{ asset('al-prod-page-imgs/Safety-Poles-Handrails.jpg') }}" alt="Angled Grab Bars" 
                            class="w-full object-cover" style="height: 300px;">
                    </div>
                    <div class="p-6 flex-1 flex flex-col">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Angled & Corner Grab Bars</h3>
                        <p class="text-gray-600 mb-4 flex-grow">Specialized bars designed for shower corners and transitional areas, providing optimal support during standing and sitting movements.</p>
                        <div class="mt-auto">
                            <div class="mb-4">
                                <div class="flex items-center justify-between mb-2">
                                    <span class="text-sm font-medium text-gray-600">Angles</span>
                                    <span class="text-sm text-gray-800">45°, 90°, 135°</span>
                                </div>
                                <div class="flex items-center justify-between">
                                    <span class="text-sm font-medium text-gray-600">Load Capacity</span>
                                    <span class="text-sm text-gray-800">Up to 500 lbs</span>
                                </div>
                            </div>
                            <a href="#" class="block w-full bg-primary hover:bg-primary-dark text-white py-3 px-4 rounded-lg transition duration-300 text-center font-medium">
                                Learn More
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Product 3 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl flex flex-col h-full">
                    <div class="overflow-hidden relative">
                        <img src="{{ asset('al-prod-page-imgs/Bathroom-Safety.jpg') }}" alt="Designer Grab Bars" 
                            class="w-full object-cover" style="height: 300px;">
                        <div class="absolute top-0 right-0 bg-primary text-white text-sm font-bold px-3 py-1 m-4 rounded">
                            Premium
                        </div>
                    </div>
                    <div class="p-6 flex-1 flex flex-col">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Designer Grab Bars</h3>
                        <p class="text-gray-600 mb-4 flex-grow">Elegant grab bars that double as towel bars, toilet paper holders, and shelves, combining functionality with high-end aesthetics.</p>
                        <div class="mt-auto">
                            <div class="mb-4">
                                <div class="flex items-center justify-between mb-2">
                                    <span class="text-sm font-medium text-gray-600">Features</span>
                                    <span class="text-sm text-gray-800">Multi-function designs</span>
                                </div>
                                <div class="flex items-center justify-between">
                                    <span class="text-sm font-medium text-gray-600">Style</span>
                                    <span class="text-sm text-gray-800">Contemporary, Traditional</span>
                                </div>
                            </div>
                            <a href="#" class="block w-full bg-primary hover:bg-primary-dark text-white py-3 px-4 rounded-lg transition duration-300 text-center font-medium">
                                Learn More
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Installation Guide -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-5xl mx-auto">
                <div class="bg-gray-50 rounded-xl p-8 md:p-12">
                    <div class="flex flex-col md:flex-row gap-8">
                        <div class="md:w-1/2">
                            <h2 class="text-3xl font-bold text-gray-800 mb-6">Professional Installation for Maximum Safety</h2>
                            <p class="text-lg text-gray-600 mb-6">
                                While grab bars appear simple, proper installation is critical for safety. Our professional installation ensures:
                            </p>
                            <ul class="space-y-4">
                                <li class="flex items-start">
                                    <svg class="h-6 w-6 text-primary mt-0.5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <div>
                                        <h4 class="font-bold text-gray-800">Secure Mounting</h4>
                                        <p class="text-gray-600">Installation into wall studs or with appropriate anchors for maximum support</p>
                                    </div>
                                </li>
                                <li class="flex items-start">
                                    <svg class="h-6 w-6 text-primary mt-0.5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <div>
                                        <h4 class="font-bold text-gray-800">Strategic Placement</h4>
                                        <p class="text-gray-600">Expert positioning based on user height and specific needs</p>
                                    </div>
                                </li>
                                <li class="flex items-start">
                                    <svg class="h-6 w-6 text-primary mt-0.5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <div>
                                        <h4 class="font-bold text-gray-800">Waterproofing</h4>
                                        <p class="text-gray-600">Proper sealing to prevent water damage in wet areas</p>
                                    </div>
                                </li>
                                <li class="flex items-start">
                                    <svg class="h-6 w-6 text-primary mt-0.5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <div>
                                        <h4 class="font-bold text-gray-800">Clean Finish</h4>
                                        <p class="text-gray-600">Professional appearance with minimal wall damage</p>
                                    </div>
                                </li>
                            </ul>
                            <a href="#" class="inline-flex items-center mt-6 px-6 py-3 bg-primary hover:bg-primary-dark text-white rounded-lg transition duration-300 font-medium">
                                Schedule Installation
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                        <div class="md:w-1/2">
                            <img src="{{ asset('al-prod-page-imgs/Grab-Bars.jpg') }}" alt="Grab Bar Installation" class="rounded-lg shadow-md w-full h-auto">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Related Products -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Complete Your Bathroom Safety Setup</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Enhance bathroom accessibility with these complementary safety products.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Related Product 1 -->
                <a href="#" class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl group">
                    <div class="overflow-hidden">
                        <img src="{{ asset('al-prod-page-imgs/Bathroom-Safety.jpg') }}" alt="Shower Chairs" class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2 group-hover:text-primary transition-colors duration-300">Shower Chairs & Benches</h3>
                        <p class="text-gray-600">Stable, comfortable seating options for safe showering.</p>
                    </div>
                </a>

                <!-- Related Product 2 -->
                <a href="#" class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl group">
                    <div class="overflow-hidden">
                        <img src="{{ asset('al-prod-page-imgs/141-1200x800-1-1024x683-min.jpg') }}" alt="Anti-Slip Surfaces" class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2 group-hover:text-primary transition-colors duration-300">Anti-Slip Solutions</h3>
                        <p class="text-gray-600">Non-slip mats, treads, and treatments for wet bathroom surfaces.</p>
                    </div>
                </a>

                <!-- Related Product 3 -->
                <a href="#" class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl group">
                    <div class="overflow-hidden">
                        <img src="{{ asset('al-prod-page-imgs/Safety-Poles-Handrails.jpg') }}" alt="Toilet Safety Rails" class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2 group-hover:text-primary transition-colors duration-300">Toilet Safety Rails</h3>
                        <p class="text-gray-600">Supportive handrails for safe and independent toilet use.</p>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-16 bg-primary">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center text-white">
                <h2 class="text-3xl font-bold mb-6">Ready to Enhance Your Bathroom Safety?</h2>
                <p class="text-xl mb-8">Contact us today for a free assessment and personalized recommendations for your specific needs.</p>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="{{ route('contact') }}" class="px-8 py-3 bg-white text-primary hover:bg-gray-100 rounded-lg font-medium transition duration-300">
                        Contact Us
                    </a>
                    <a href="#products" class="px-8 py-3 bg-transparent border-2 border-white text-white hover:bg-white/10 rounded-lg font-medium transition duration-300">
                        Explore Products
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        // Any scripts needed for the page
    </script>
@endpush 