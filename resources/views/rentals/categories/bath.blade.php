@extends('layouts.app')

@section('title', 'Home2stay Bath Lifter - Home2stay')
@section('meta_description', 'Designed for safe and effortless bathing, the Home2stay Bath Lifter provides smooth lowering and raising to enhance safety and independence in the tub.')

@section('content')
    <!-- Hero Section -->
    <section class="relative pt-16 pb-12 md:pt-24 md:pb-16 bg-gradient-to-r from-primary to-primary-dark text-white">
        <div class="container mx-auto px-4">
            <div class="flex flex-col items-start">
                <nav class="flex mb-4 text-sm" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 md:space-x-3">
                        <li class="inline-flex items-center">
                            <a href="{{ route('home') }}" class="text-white hover:text-gray-200">
                                Home
                            </a>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <svg class="w-3 h-3 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg>
                                <a href="{{ route('products.index') }}" class="ml-1 text-white hover:text-gray-200">
                                    Products
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <svg class="w-3 h-3 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg>
                                <a href="{{ route('products.category', 'bath-safety') }}"
                                    class="ml-1 text-white hover:text-gray-200">
                                    Bath Safety
                                </a>
                            </div>
                        </li>
                        <li aria-current="page">
                            <div class="flex items-center">
                                <svg class="w-3 h-3 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg>
                                <span class="ml-1 font-medium text-gray-100">Bath Lifter</span>
                            </div>
                        </li>
                    </ol>
                </nav>
                <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-4">Bath Lifter</h1>
                <div class="flex items-center mb-4">
                    <div class="flex text-yellow-400">
                        @for ($i = 0; $i < 5; $i++)
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                        @endfor
                    </div>
                    <span class="ml-2 text-sm">Based on reviews</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Product Details Section -->
    <section class="py-12 md:py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="flex flex-col lg:flex-row gap-8">
                <!-- Product Image Gallery -->
                <div class="w-full lg:w-1/2">
                    <div class="bg-gray-100 rounded-lg overflow-hidden mb-4 p-4 flex items-center justify-center min-h-[350px]">
                        <img id="mainProductImage" src="{{ asset('bathsafety-cat/track-lift.jpg') }}"
                            alt="Home2stay Bath Lifter" class="w-full h-auto max-h-[450px] object-contain transition-all duration-300">
                    </div>
                    <!-- Request Quote Button -->
                    <div class="text-center mt-4 mb-6">
                        <button id="quoteRequestBtn"
                            class="w-full sm:w-auto px-8 py-3 bg-secondary text-white font-medium text-lg rounded-lg hover:bg-secondary-dark transition duration-300 shadow-md hover:shadow-lg">
                            Request A Quote
                        </button>
                    </div>
                </div>

                <!-- Product Info & Interactive Tabs -->
                <div class="w-full lg:w-1/2">
                    <div class="mb-6 space-y-4">
                        <p class="text-gray-600 text-lg leading-relaxed">
                            Designed for smooth and effortless transfers, the Home2stay Bath Lifter provides a comfortable and secure way to enjoy bathing without the fear of slipping or struggling to get up.
                        </p>
                        <p class="text-gray-600 text-lg leading-relaxed">
                            Featuring a durable, waterproof design with a reclining backrest, this bath lifter ensures maximum comfort and support. It easily lowers into the tub and raises back up at the touch of a button.
                        </p>
                        <p class="text-gray-600 text-lg leading-relaxed">
                            An ideal solution for seniors and individuals with limited mobility looking to maintain independence in their daily bathing routine.
                        </p>
                    </div>

                    <div class="mb-6 p-4 bg-primary/10 border-l-4 border-primary rounded-r-lg">
                        <p class="text-primary-dark font-semibold">
                            CONTACT US for a price quote customized to your bathroom requirements.
                        </p>
                    </div>

                    <!-- Product Tabs Section -->
                    <div class="mb-8 product-tabs">
                        <!-- Tab Navigation -->
                        <div class="mb-6 border-b border-gray-200">
                            <ul class="flex flex-wrap -mb-px text-sm font-medium text-center">
                                <li class="mr-2">
                                    <button
                                        class="tab-btn active inline-block p-4 border-b-2 border-primary text-primary font-bold rounded-t-lg"
                                        data-target="features-tab">
                                        Features
                                    </button>
                                </li>
                                <li class="mr-2">
                                    <button
                                        class="tab-btn inline-block p-4 border-b-2 border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 rounded-t-lg"
                                        data-target="images-tab">
                                        More Images
                                    </button>
                                </li>
                                <li class="mr-2">
                                    <button
                                        class="tab-btn inline-block p-4 border-b-2 border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 rounded-t-lg"
                                        data-target="technical-tab">
                                        Technical Information
                                    </button>
                                </li>
                                <li class="mr-2">
                                    <button
                                        class="tab-btn inline-block p-4 border-b-2 border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 rounded-t-lg"
                                        data-target="pricing-tab">
                                        Pricing & Rental
                                    </button>
                                </li>
                                <li>
                                    <button
                                        class="tab-btn inline-block p-4 border-b-2 border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 rounded-t-lg"
                                        data-target="supplier-tab">
                                        Supplier
                                    </button>
                                </li>
                            </ul>
                        </div>

                        <!-- Tab Content Panels -->
                        <div class="tab-content-container">
                            <!-- Features Tab -->
                            <div class="tab-pane block" id="features-tab">
                                <div class="space-y-4">
                                    <div class="flex items-start">
                                        <svg class="h-5 w-5 text-primary flex-shrink-0 mr-3 mt-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                        </svg>
                                        <div>
                                            <h3 class="font-semibold text-gray-800">Ergonomic & Lightweight Design</h3>
                                            <p class="text-gray-600">Compact two-piece construction makes it easy to set up, transfer, and store when not in use.</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <svg class="h-5 w-5 text-primary flex-shrink-0 mr-3 mt-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                        </svg>
                                        <div>
                                            <h3 class="font-semibold text-gray-800">Smooth Lowering & Reclining</h3>
                                            <p class="text-gray-600">Gentle lowering action with a reclining backrest for ultimate relaxation and comfort.</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <svg class="h-5 w-5 text-primary flex-shrink-0 mr-3 mt-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                        </svg>
                                        <div>
                                            <h3 class="font-semibold text-gray-800">High Weight Capacity</h3>
                                            <p class="text-gray-600">Sturdy frame supports up to 300 lbs, providing stability and security during use.</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <svg class="h-5 w-5 text-primary flex-shrink-0 mr-3 mt-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                        </svg>
                                        <div>
                                            <h3 class="font-semibold text-gray-800">Waterproof Hand Control</h3>
                                            <p class="text-gray-600">Floating hand remote with large buttons for effortless, independent control.</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <svg class="h-5 w-5 text-primary flex-shrink-0 mr-3 mt-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                        </svg>
                                        <div>
                                            <h3 class="font-semibold text-gray-800">Suction Cup Base</h3>
                                            <p class="text-gray-600">Non-slip suction feet attach securely to standard bathtub surfaces for optimal stability.</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <svg class="h-5 w-5 text-primary flex-shrink-0 mr-3 mt-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                        </svg>
                                        <div>
                                            <h3 class="font-semibold text-gray-800">Hygienic & Easy to Clean</h3>
                                            <p class="text-gray-600">Smooth surfaces and washable covers ensure easy maintenance and hygienic use.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- More Images Tab -->
                            <div class="tab-pane hidden" id="images-tab">
                                <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                                    <div class="thumb-item cursor-pointer border rounded-lg p-2 bg-gray-50 hover:border-primary">
                                        <img src="{{ asset('bathsafety-cat/track-lift.jpg') }}" alt="Home2stay Bath Lifter Main" class="w-full h-32 object-contain">
                                    </div>
                                    <div class="thumb-item cursor-pointer border rounded-lg p-2 bg-gray-50 hover:border-primary">
                                        <img src="{{ asset('bathsafety-cat/Regular-Track-Profile.jpg') }}" alt="Bath Lifter In Tub" class="w-full h-32 object-contain">
                                    </div>
                                </div>
                            </div>

                            <!-- Technical Information Tab -->
                            <div class="tab-pane hidden" id="technical-tab">
                                <div class="space-y-6">
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <div class="space-y-3">
                                            <div class="flex justify-between border-b pb-2">
                                                <span class="font-medium text-gray-700">Weight Capacity:</span>
                                                <span class="text-gray-600">300 lbs (136 kg)</span>
                                            </div>
                                            <div class="flex justify-between border-b pb-2">
                                                <span class="font-medium text-gray-700">Seat Width:</span>
                                                <span class="text-gray-600">15" (28" with side flaps)</span>
                                            </div>
                                            <div class="flex justify-between border-b pb-2">
                                                <span class="font-medium text-gray-700">Seat Height Range:</span>
                                                <span class="text-gray-600">2.5" to 17"</span>
                                            </div>
                                            <div class="flex justify-between border-b pb-2">
                                                <span class="font-medium text-gray-700">Backrest Recline:</span>
                                                <span class="text-gray-600">Up to 40 degrees</span>
                                            </div>
                                        </div>
                                        <div class="space-y-3">
                                            <div class="flex justify-between border-b pb-2">
                                                <span class="font-medium text-gray-700">Power Source:</span>
                                                <span class="text-gray-600">Rechargeable Li-Ion Battery</span>
                                            </div>
                                            <div class="flex justify-between border-b pb-2">
                                                <span class="font-medium text-gray-700">Control Unit:</span>
                                                <span class="text-gray-600">Waterproof Floating Hand Switch</span>
                                            </div>
                                            <div class="flex justify-between border-b pb-2">
                                                <span class="font-medium text-gray-700">Base Mount:</span>
                                                <span class="text-gray-600">Heavy-Duty Suction Feet</span>
                                            </div>
                                            <div class="flex justify-between border-b pb-2">
                                                <span class="font-medium text-gray-700">Options:</span>
                                                <span class="text-gray-600">Sale or Monthly Rental</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="bg-gray-50 p-4 rounded-lg">
                                        <h4 class="font-semibold text-gray-800 mb-2">Technical Highlights</h4>
                                        <ul class="list-disc list-inside text-gray-600 space-y-1">
                                            <li>Tool-free assembly with quick-release mechanism</li>
                                            <li>Integrated battery status indicator on hand control</li>
                                            <li>Removable and machine-washable hygienic covers</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Pricing & Rental Tab -->
                            <div class="tab-pane hidden" id="pricing-tab">
                                <div class="space-y-4">
                                    <h3 class="text-lg font-semibold text-gray-800">Flexible Options for Purchase & Rent</h3>
                                    <p class="text-gray-600">
                                        Home2stay provides both short-term rental solutions and long-term purchase options tailored to your mobility timeline.
                                    </p>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 my-4">
                                        <div class="p-4 border rounded-lg bg-gray-50">
                                            <h4 class="font-bold text-primary mb-1">Purchase Option</h4>
                                            <p class="text-sm text-gray-600">Includes brand new unit, warranty coverage, and optional professional home setup.</p>
                                        </div>
                                        <div class="p-4 border rounded-lg bg-gray-50">
                                            <h4 class="font-bold text-primary mb-1">Rental Option</h4>
                                            <p class="text-sm text-gray-600">Ideal for post-surgery recovery or short-term stays. Fully sanitized and tested.</p>
                                        </div>
                                    </div>
                                    <div class="bg-primary/5 p-4 rounded-lg border border-primary/20">
                                        <p class="text-gray-700 text-sm">
                                            <strong>Note:</strong> Pricing depends on tub configuration and optional accessories. Request a quote below for immediate pricing.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Supplier Tab -->
                            <div class="tab-pane hidden" id="supplier-tab">
                                <div class="space-y-4">
                                    <h3 class="text-lg font-semibold text-gray-800">About Home2stay</h3>
                                    <p class="text-gray-600">
                                        Home2stay is a trusted provider of home accessibility and bathroom safety solutions. We specialize in empowering seniors and individuals with physical challenges to live safely and independently at home.
                                    </p>
                                    <div class="p-4 bg-gray-50 rounded-lg">
                                        <h4 class="font-semibold text-gray-800 mb-1">Why Choose Home2stay?</h4>
                                        <ul class="list-disc list-inside text-gray-600 text-sm space-y-1">
                                            <li>Certified accessibility specialists and technicians</li>
                                            <li>Free home accessibility assessments</li>
                                            <li>Professional delivery and installation support</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Additional Overview Section -->
    <section class="py-12 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center mb-10">
                <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-4">Restore Comfort and Independence to Your Bathing Routine</h2>
                <p class="text-gray-600 text-lg">
                    Taking a bath should be a relaxing experience. The Home2stay Bath Lifter eliminates the barrier of high bathtub walls, allowing you to gently transition into and out of the water with peace of mind.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-5xl mx-auto">
                <div class="bg-white p-6 rounded-lg shadow-sm border text-center">
                    <div class="w-12 h-12 bg-primary/10 text-primary rounded-full flex items-center justify-center mx-auto mb-4 font-bold text-xl">1</div>
                    <h3 class="font-semibold text-lg text-gray-800 mb-2">Easy Setup</h3>
                    <p class="text-gray-600 text-sm">Places directly into your existing bathtub without requiring structural modifications.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-sm border text-center">
                    <div class="w-12 h-12 bg-primary/10 text-primary rounded-full flex items-center justify-center mx-auto mb-4 font-bold text-xl">2</div>
                    <h3 class="font-semibold text-lg text-gray-800 mb-2">Safe Transfers</h3>
                    <p class="text-gray-600 text-sm">Side flaps automatically align with the bathtub edge for smooth lateral seating.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-sm border text-center">
                    <div class="w-12 h-12 bg-primary/10 text-primary rounded-full flex items-center justify-center mx-auto mb-4 font-bold text-xl">3</div>
                    <h3 class="font-semibold text-lg text-gray-800 mb-2">Simple Operation</h3>
                    <p class="text-gray-600 text-sm">Lower and recline smoothly using the waterproof, floating hand controller.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Quote Modal -->
    <div id="quoteModal" class="fixed inset-0 bg-black/50 z-50 flex items-center justify-center hidden opacity-0 transition-opacity duration-300">
        <div class="bg-white rounded-lg p-6 max-w-md w-full mx-4 shadow-xl relative">
            <button id="closeModalBtn" class="absolute top-4 right-4 text-gray-500 hover:text-gray-800 text-xl font-bold">&times;</button>
            <h3 class="text-xl font-bold text-gray-800 mb-4">Request a Quote for Bath Lifter</h3>
              <form action="/submit-product-inquiry" method="POST" class="space-y-6">
                @csrf
                <input type="hidden" name="product_name" value="Home2stay Bath Lifter">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Your Name</label>
                    <input type="text" name="name" required class="w-full border border-gray-300 rounded-md p-2 text-sm focus:ring-primary focus:border-primary">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Phone Number</label>
                    <input type="tel" name="phone" required class="w-full border border-gray-300 rounded-md p-2 text-sm focus:ring-primary focus:border-primary">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                    <input type="email" name="email" required class="w-full border border-gray-300 rounded-md p-2 text-sm focus:ring-primary focus:border-primary">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Inquiry Type</label>
                    <select name="type" class="w-full border border-gray-300 rounded-md p-2 text-sm focus:ring-primary focus:border-primary">
                        <option value="Purchase">Purchase Inquiry</option>
                        <option value="Rental">Rental Inquiry</option>
                        <option value="Assessment">In-Home Assessment</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Additional Notes</label>
                    <textarea name="notes" rows="3" class="w-full border border-gray-300 rounded-md p-2 text-sm focus:ring-primary focus:border-primary" placeholder="Tub type, location, special requests..."></textarea>
                </div>
                <button type="submit" class="w-full bg-primary text-white py-2.5 rounded-md font-medium hover:bg-primary-dark transition duration-300">
                    Submit Request
                </button>
            </form>
        </div>
    </div>

    <!-- Client-Side Tab & Modal Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Tab switching logic
            const tabButtons = document.querySelectorAll('.tab-btn');
            const tabPanes = document.querySelectorAll('.tab-pane');

            tabButtons.forEach(button => {
                button.addEventListener('click', function () {
                    const targetId = this.getAttribute('data-target');

                    // Reset buttons
                    tabButtons.forEach(btn => {
                        btn.classList.remove('active', 'border-primary', 'text-primary', 'font-bold');
                        btn.classList.add('border-transparent', 'text-gray-500');
                    });

                    // Highlight active button
                    this.classList.add('active', 'border-primary', 'text-primary', 'font-bold');
                    this.classList.remove('border-transparent', 'text-gray-500');

                    // Hide all panes
                    tabPanes.forEach(pane => {
                        pane.classList.add('hidden');
                        pane.classList.remove('block');
                    });

                    // Show target pane
                    const activePane = document.getElementById(targetId);
                    if (activePane) {
                        activePane.classList.remove('hidden');
                        activePane.classList.add('block');
                    }
                });
            });

            // Thumbnail click logic
            const mainImg = document.getElementById('mainProductImage');
            const thumbs = document.querySelectorAll('.thumb-item img');

            thumbs.forEach(thumb => {
                thumb.addEventListener('click', function() {
                    if (mainImg) {
                        mainImg.src = this.src;
                    }
                });
            });

            // Modal Logic
            const quoteBtn = document.getElementById('quoteRequestBtn');
            const modal = document.getElementById('quoteModal');
            const closeBtn = document.getElementById('closeModalBtn');

            if (quoteBtn && modal && closeBtn) {
                quoteBtn.addEventListener('click', () => {
                    modal.classList.remove('hidden');
                    setTimeout(() => modal.classList.remove('opacity-0'), 10);
                });

                closeBtn.addEventListener('click', () => {
                    modal.classList.add('opacity-0');
                    setTimeout(() => modal.classList.add('hidden'), 300);
                });

                modal.addEventListener('click', (e) => {
                    if (e.target === modal) {
                        modal.classList.add('opacity-0');
                        setTimeout(() => modal.classList.add('hidden'), 300);
                    }
                });
            }
        });
    </script>
@endsection
