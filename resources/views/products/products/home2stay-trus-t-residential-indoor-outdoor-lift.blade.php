@extends('layouts.app')

@section('title', 'Home2stay Trus-T Residential Indoor / Outdoor Lift - Home2stay')
@section('meta_description', 'Trus-T Lift’s legacy of affordable mobility spans over 25 years. Engineered for both indoor and outdoor spaces, the Trus-T Lift [&hellip;]')

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
                                <a href="{{ route('products.category', 'vertical-porch-lifts-vpl') }}"
                                    class="ml-1 text-white hover:text-gray-200">
                                    Vertical Platform Lifts
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
                                <span class="ml-1 font-medium text-gray-100">Home2stay Trus-T Residential Indoor / Outdoor Lift</span>
                            </div>
                        </li>
                    </ol>
                </nav>
                <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-4">Home2stay Trus-T Residential Indoor / Outdoor Lift</h1>
                <div class="flex items-center mb-4">
                    <div class="flex text-yellow-400">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                    </div>
                    <span class="ml-2 text-sm ">Based on reviews</span>
                </div>

            </div>
        </div>
    </section>

    <!-- Product Details -->
    <section class="py-12 md:py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="flex flex-col lg:flex-row gap-8">
                <!-- Product Image Gallery -->
                <div class="w-full lg:w-1/2">
                    <div class="bg-gray-100 rounded-lg overflow-hidden mb-4">
                        <img src="{{ asset('bathsafety-cat/NEW-TTL-technical-drawing.jpg') }}"
                            alt="Home2stay Regular Vertical Porch Lift / Platform Lift" class="w-full h-auto object-contain p-4">
                    </div>
                    <!-- Request Quote Button -->
                    <div class="text-center mt-4 mb-6">
                        <button id="quoteRequestBtn"
                            class="px-6 py-3 bg-secondary text-white font-medium rounded-lg hover:bg-secondary-dark transition duration-300">
                            Request A Quote
                        </button>
                    </div>
                </div>

                <!-- Product Info -->
                <div class="w-full lg:w-1/2">
                    <div class="mb-6">
                        <p class="text-gray-600 text-lg font-medium">
                            Trus-T Lift's legacy of affordable mobility spans over 25 years.
                        </p>
                    </div>
                    <div class="mb-6">
                        <p class="text-gray-600 text-lg">
                            Engineered for both indoor and outdoor spaces, the Trus-T Lift is an intuitive wheelchair lift for vertical rises up to 14 feet.
                        </p>
                    </div>
                    <div class="mb-6">
                        <p class="text-gray-600 text-lg">
                            Oversized "Soft Touch Controls" offer riders total independence, even with limited dexterity.
                        </p>
                    </div>
                    <div class="mb-6">
                        <p class="text-gray-600 text-lg">
                            Compact size and simple installation. Safety is always a priority with its non-slip metal platform, high-sided safety enclosures and proprietary drive system.
                        </p>
                    </div>
                    <div class="mb-6 p-4 bg-green-50 border-l-4 border-green-400 rounded-r-lg">
                        <h3 class="font-semibold text-green-800 mb-2">Pricing:</h3>
                        <div class="space-y-1 text-green-700">
                            <p><strong>Please call for pricing</strong></p>
                        </div>
                    </div>
                    <div class="mb-6 p-4 bg-blue-50 border-l-4 border-blue-400 rounded-r-lg">
                        <p class="text-blue-800 font-medium">
                            CONTACT US for a price quote customized to your needs. The Trus-T Lift can be modified to accommodate three-stops and atypical platform sizes.
                        </p>
                    </div>

                    <!-- Product Tabs Section -->
                    <div class="mb-8 product-tabs">
                        <!-- Tab Navigation -->
                        <div class="mb-6">
                            <ul class="flex flex-wrap text-sm font-medium text-center border-b border-gray-200">
                                <li class="mr-2 mb-2">
                                    <button
                                        class="tab-button active inline-block p-4 border border-primary rounded-t-lg bg-white text-primary"
                                        data-target="features-tab">
                                        Features
                                    </button>
                                </li>
                                <li class="mr-2 mb-2">
                                    <button
                                        class="tab-button inline-block p-4 border border-gray-200 rounded-t-lg bg-gray-50 hover:text-gray-600 hover:bg-gray-100"
                                        data-target="pricing-tab">
                                        Pricing Options
                                    </button>
                                </li>
                                <li class="mr-2 mb-2">
                                    <button
                                        class="tab-button inline-block p-4 border border-gray-200 rounded-t-lg bg-gray-50 hover:text-gray-600 hover:bg-gray-100"
                                        data-target="images-tab">
                                        More Images
                                    </button>
                                </li>
                                <li>
                                    <button
                                        class="tab-button inline-block p-4 border border-gray-200 rounded-t-lg bg-gray-50 hover:text-gray-600 hover:bg-gray-100"
                                        data-target="technical-tab">
                                        Technical Information
                                    </button>
                                </li>
                            </ul>
                        </div>

                        <!-- Tab Content -->
                        <div class="tab-content-container">
                            <!-- Features Tab -->
                            <div class="tab-pane active" data-tab="features-tab" style="display: block !important;">
                                <div class="space-y-4">
                                    <div class="flex items-start">
                                        <svg class="h-5 w-5 text-primary flex-shrink-0 mr-3 mt-1"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <div>
                                            <h3 class="font-semibold text-gray-800">Oversized "Soft Touch Controls"</h3>
                                            <p class="text-gray-600">Intuitive controls designed for riders with limited dexterity, ensuring total independence.</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <svg class="h-5 w-5 text-primary flex-shrink-0 mr-3 mt-1"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <div>
                                            <h3 class="font-semibold text-gray-800">Indoor and Outdoor Compatible</h3>
                                            <p class="text-gray-600">Engineered for both indoor and outdoor spaces with weather-resistant components.</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <svg class="h-5 w-5 text-primary flex-shrink-0 mr-3 mt-1"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <div>
                                            <h3 class="font-semibold text-gray-800">Non-Slip Metal Platform</h3>
                                            <p class="text-gray-600">Safety-first design with non-slip metal platform surface for secure footing.</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <svg class="h-5 w-5 text-primary flex-shrink-0 mr-3 mt-1"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <div>
                                            <h3 class="font-semibold text-gray-800">High-Sided Safety Enclosures</h3>
                                            <p class="text-gray-600">Enhanced safety with high-sided enclosures providing secure ride experience.</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <svg class="h-5 w-5 text-primary flex-shrink-0 mr-3 mt-1"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <div>
                                            <h3 class="font-semibold text-gray-800">Proprietary Drive System</h3>
                                            <p class="text-gray-600">Advanced all-electric drive system with zero-load start design for optimal performance.</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <svg class="h-5 w-5 text-primary flex-shrink-0 mr-3 mt-1"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <div>
                                            <h3 class="font-semibold text-gray-800">750 lbs Lifting Capacity</h3>
                                            <p class="text-gray-600">Robust lifting capacity of 750 lbs accommodates wheelchairs and multiple passengers.</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <svg class="h-5 w-5 text-primary flex-shrink-0 mr-3 mt-1"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <div>
                                            <h3 class="font-semibold text-gray-800">Travel Up to 14 Feet</h3>
                                            <p class="text-gray-600">Vertical travel distance up to 14 feet with smooth 8 feet per minute travel speed.</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <svg class="h-5 w-5 text-primary flex-shrink-0 mr-3 mt-1"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <div>
                                            <h3 class="font-semibold text-gray-800">Three-Tier Emergency Power</h3>
                                            <p class="text-gray-600">Emergency manual crank (standard), battery backup lowering, and full 40-cycle backup options available.</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <svg class="h-5 w-5 text-primary flex-shrink-0 mr-3 mt-1"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <div>
                                            <h3 class="font-semibold text-gray-800">Energy Efficient</h3>
                                            <p class="text-gray-600">RAM Elevators use at least 50% less energy than other comparable products.</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <svg class="h-5 w-5 text-primary flex-shrink-0 mr-3 mt-1"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <div>
                                            <h3 class="font-semibold text-gray-800">Customizable Options</h3>
                                            <p class="text-gray-600">Colors, trims, doors/gates, handles, rails and more are customizable to fit your needs.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Pricing Options Tab -->
                            <div class="tab-pane" data-tab="pricing-tab" style="display: none !important;">
                                <div class="space-y-6">
                                    <h3 class="text-xl font-semibold text-gray-800 mb-4">Pricing Options</h3>

                                    <!-- Purchase Pricing -->
                                    <div class="bg-gray-50 rounded-lg p-4">
                                        <h4 class="text-lg font-semibold text-gray-800 mb-3">Complete Trus-T Residential Lift Package</h4>
                                        <div class="space-y-3">
                                            <div class="flex justify-between items-center border-b pb-2">
                                                <span class="text-gray-700 font-medium">Custom Quote Required:</span>
                                                <span class="font-semibold text-primary">Call for Pricing</span>
                                            </div>
                                            <div class="text-sm text-gray-600 mt-2">
                                                <p>* Price customized to your specific needs</p>
                                                <p>* Professional installation included</p>
                                                <p>* RAM quality and 25+ year legacy</p>
                                                <p>* Indoor and outdoor compatibility</p>
                                                <p>* Up to 14 feet vertical travel</p>
                                                <p>* 750 lbs lifting capacity</p>
                                                <p>* Customizable colors, trims, and features</p>
                                                <p>* Three-tier emergency power options</p>
                                                <p>* 50% more energy efficient than competitors</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="p-4 bg-green-50 border-l-4 border-green-400 rounded-r-lg">
                                        <p class="text-green-800 font-medium">
                                            Call for a no-obligation customized quote. The Trus-T Lift can be modified to accommodate three-stops and atypical platform sizes!
                                        </p>
                                    </div>

                                    <div class="p-4 bg-yellow-50 border-l-4 border-yellow-400 rounded-r-lg">
                                        <p class="text-yellow-800 font-medium">
                                            25+ years of affordable mobility solutions. Engineered for both indoor and outdoor spaces with maximum customization options.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- More Images Tab -->
                            <div class="tab-pane" data-tab="images-tab" style="display: none !important;">
                                <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                                    <div class="image-thumbnail cursor-pointer">
                                        <img src="{{ asset('bathsafety-cat/NEW-TTL-technical-drawing.jpg') }}"
                                            alt="Home2stay Tub Cut Ultra-Low"
                                            class="w-full h-32 object-contain rounded-lg hover:opacity-90 transition duration-200 p-2 bg-gray-50">
                                    </div>
                                </div>
                            </div>

                            <!-- Technical Information -->
                            <div class="tab-pane" data-tab="technical-tab" style="display: none !important;">
                                <div class="mb-6">
                                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Technical Specifications</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <div class="space-y-3">
                                            <div class="flex justify-between border-b pb-2">
                                                <span class="font-medium text-gray-700">Product Type:</span>
                                                <span class="text-gray-600">Residential Vertical Platform Lift</span>
                                            </div>
                                            <div class="flex justify-between border-b pb-2">
                                                <span class="font-medium text-gray-700">Installation Type:</span>
                                                <span class="text-gray-600">Indoor and Outdoor</span>
                                            </div>
                                            <div class="flex justify-between border-b pb-2">
                                                <span class="font-medium text-gray-700">Lifting Capacity:</span>
                                                <span class="text-gray-600">750 lbs</span>
                                            </div>
                                            <div class="flex justify-between border-b pb-2">
                                                <span class="font-medium text-gray-700">Travel Speed:</span>
                                                <span class="text-gray-600">8 feet / minute</span>
                                            </div>
                                            <div class="flex justify-between border-b pb-2">
                                                <span class="font-medium text-gray-700">Travel Distance:</span>
                                                <span class="text-gray-600">Up to 14 feet</span>
                                            </div>
                                            <div class="flex justify-between border-b pb-2">
                                                <span class="font-medium text-gray-700">Max Platform Size:</span>
                                                <span class="text-gray-600">42″ L x 60″ W (18 sq ft)</span>
                                            </div>
                                        </div>
                                        <div class="space-y-3">
                                            <div class="flex justify-between border-b pb-2">
                                                <span class="font-medium text-gray-700">Drive System:</span>
                                                <span class="text-gray-600">All-electric with zero-load start</span>
                                            </div>
                                            <div class="flex justify-between border-b pb-2">
                                                <span class="font-medium text-gray-700">Controls:</span>
                                                <span class="text-gray-600">Oversized "Soft Touch"</span>
                                            </div>
                                            <div class="flex justify-between border-b pb-2">
                                                <span class="font-medium text-gray-700">Safety Features:</span>
                                                <span class="text-gray-600">Non-slip platform, safety enclosures</span>
                                            </div>
                                            <div class="flex justify-between border-b pb-2">
                                                <span class="font-medium text-gray-700">Emergency Power:</span>
                                                <span class="text-gray-600">3-tier options available</span>
                                            </div>
                                            <div class="flex justify-between border-b pb-2">
                                                <span class="font-medium text-gray-700">Energy Efficiency:</span>
                                                <span class="text-gray-600">50% less than competitors</span>
                                            </div>
                                            <div class="flex justify-between border-b pb-2">
                                                <span class="font-medium text-gray-700">Supplier:</span>
                                                <span class="text-gray-600">RAM</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-6">
                                    <h4 class="text-lg font-semibold text-gray-800 mb-3">Product Features</h4>
                                    <div class="bg-gray-50 rounded-lg p-4">
                                        <ul class="text-gray-700 text-sm leading-relaxed space-y-2">
                                            <li>• Engineered for both indoor and outdoor spaces</li>
                                            <li>• Intuitive wheelchair lift for vertical rises up to 14 feet</li>
                                            <li>• Oversized "Soft Touch Controls" for limited dexterity users</li>
                                            <li>• Non-slip metal platform with high-sided safety enclosures</li>
                                            <li>• Proprietary all-electric drive system</li>
                                            <li>• Zero-load start design for optimal motor performance</li>
                                            <li>• 750 lbs lifting capacity accommodates wheelchairs</li>
                                            <li>• Travel speed of 8 feet per minute</li>
                                            <li>• Maximum platform size: 42″ L x 60″ W (18 square feet)</li>
                                            <li>• Three-tier emergency power options available</li>
                                            <li>• 50% more energy efficient than comparable products</li>
                                            <li>• Customizable colors, trims, doors, gates, handles, and rails</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="mb-6">
                                    <h4 class="text-lg font-semibold text-gray-800 mb-3">Emergency Power Options</h4>
                                    <div class="bg-gray-50 rounded-lg p-4">
                                        <ul class="text-gray-700 text-sm leading-relaxed space-y-2">
                                            <li>• Emergency manual crank (Standard on all units)</li>
                                            <li>• Battery backup lowering (Optional upgrade)</li>
                                            <li>• Full battery 40-cycle backup (Optional upgrade)</li>
                                            <li>• Compact size and simple installation</li>
                                            <li>• Can be modified for three-stops</li>
                                            <li>• Atypical platform sizes available</li>
                                            <li>• 25+ years of proven reliability</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="mb-8">
                                    <div class="bg-gray-50 rounded-lg p-4">
                                        <div class="flex items-center justify-between mb-2">
                                            <h3 class="text-xl font-semibold text-gray-800">Pricing</h3>
                                            <span class="text-sm text-gray-800">Call for customized quote</span>
                                        </div>
                                        <div class="flex items-center justify-between mb-2">
                                            <h3 class="text-xl font-semibold text-gray-800">Call Us</h3>
                                            <a href="tel:+16042591211" class="text-secondary">
                                                <span class="text-sm text-gray-800">604-259-1211</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Image Modal -->
    <div id="imageModal"
        class="fixed inset-0 z-50 hidden overflow-auto bg-black bg-opacity-75 flex items-center justify-center p-4">
        <div class="relative bg-white rounded-lg max-w-4xl w-full mx-auto">
            <button id="closeModal"
                class="absolute top-2 right-2 text-white hover:text-gray-300 bg-gray-800 bg-opacity-75 hover:bg-opacity-100 p-1 rounded-full transition-all duration-200">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
            <div class="p-4">
                <img id="modalImage" src="" alt="Large product image" class="w-full h-auto">
            </div>
        </div>
    </div>

    <!-- Featured Product -->
    <section class="py-16 bg-primary">
        <div class="container mx-auto px-4">
            <div class="bg-gray-50 rounded-xl overflow-hidden shadow-lg">
                <div class="flex flex-col lg:flex-row">
                    <!-- Text Content -->
                    <div class="w-full lg:w-1/2 p-8 md:p-12 flex flex-col justify-center">
                        <h2 class="text-3xl font-bold text-gray-800 mb-4">Are you interested in having this product
                            installed?</h2>
                        <p class="text-lg text-gray-600 mb-6">Accessibility solutions to make everyday home life easier and
                            safer for yourself and your loved ones.</p>
                        <p class="mb-5">Give us a call at <a href="tel:+16042591211" class="text-secondary">604-259-1211</a>
                            or submit a FREE <a href="#assessment" class="text-secondary">ASSESSMENT FORM</a> to check.</p>
                    </div>
                    <!-- Image -->
                    <div class="w-full lg:w-1/2">
                        <img src="{{ asset('bathsafety-cat/2018-talent-exiting-.jpg') }}" alt="Bathroom Safety Solutions"
                            class="w-full h-full object-cover" style="min-height: 400px;">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Related Blogs -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-10">Related Blogs</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($latestPosts as $post)
                    <div
                        class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 group">
                        @if($post->featured_image)
                            <div class="h-48 overflow-hidden">
                                <img src="{{ asset('storage/' . $post->featured_image) }}" alt="{{ $post->title }}"
                                    class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                            </div>
                        @else
                            <div class="h-48 bg-gray-200 flex items-center justify-center">
                                <span class="text-gray-400 text-2xl"><i class="fas fa-image"></i></span>
                            </div>
                        @endif

                        <div class="p-6">
                            <div class="flex items-center text-sm text-gray-500 mb-2">
                                <span class="mr-4">
                                    <i class="fas fa-calendar-alt mr-1"></i>
                                    {{ $post->published_at ? $post->published_at->format('F j, Y') : $post->created_at->format('F j, Y') }}
                                </span>
                                <span>
                                    <i class="fas fa-user mr-1"></i> {{ $post->user->name ?? 'Admin' }}
                                </span>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-2 group-hover:text-primary transition-colors">
                                {{ $post->title }}</h3>
                            <p class="text-gray-600 mb-4 line-clamp-3">{{ $post->excerpt }}</p>
                            <a href="{{ route('blog.show', $post->slug) }}"
                                class="inline-flex items-center text-primary hover:text-primary/80 font-medium">
                                Read More <i class="fas fa-arrow-right ml-1 group-hover:translate-x-1 transition-transform"></i>
                            </a>
                        </div>
                    </div>
                @empty
                    <div class="col-span-3 text-center py-8">
                        <p class="text-gray-500">No blog posts published yet. Check back soon!</p>
                    </div>
                @endforelse
            </div>

            @if($latestPosts->count() > 0)
                <div class="text-center mt-10">
                    <a href="{{ route('blog.index') }}"
                        class="inline-flex items-center px-6 py-3 bg-primary text-white rounded-lg hover:bg-primary-dark transition duration-300">
                        View All Blog Posts
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
            @endif
        </div>
    </section>

    <!-- Get Your Free Quote Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto bg-white rounded-xl shadow-lg p-8 md:p-12">
                <div class="text-center mb-10">
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">Get Your Free Quote</h2>
                    <p class="text-gray-600">We're here to listen, help and provide insights. Tell us what you need – We
                        would love to hear from you!</p>
                </div>

                <form action="#" method="POST" class="space-y-6">
                    @csrf
                    <input type="hidden" name="product" value="Home2stay Trus-T Residential Indoor / Outdoor Lift">

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
                            <label class="block text-gray-700 font-medium mb-2" for="location">Installation Location</label>
                            <input type="text" id="location" name="location" placeholder="e.g., Home entrance, Multi-level deck, Indoor stairwell, etc."
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
                        </div>
                    </div>

                    <!-- Installation Type -->
                    <div class="mb-6">
                        <h4 class="text-lg font-semibold mb-3 text-primary">What type of installation are you considering?</h4>
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <div class="grid grid-cols-2 gap-3">
                                <label class="flex items-center p-3 border border-gray-200 rounded-lg hover:bg-white cursor-pointer transition-colors">
                                    <input type="radio" name="installation_type" value="indoor" class="w-4 h-4 text-primary focus:ring-primary border-gray-300">
                                    <span class="ml-3 text-gray-700 font-medium">Indoor Installation</span>
                                </label>
                                <label class="flex items-center p-3 border border-gray-200 rounded-lg hover:bg-white cursor-pointer transition-colors">
                                    <input type="radio" name="installation_type" value="outdoor" class="w-4 h-4 text-primary focus:ring-primary border-gray-300">
                                    <span class="ml-3 text-gray-700 font-medium">Outdoor Installation</span>
                                </label>
                                <label class="flex items-center p-3 border border-gray-200 rounded-lg hover:bg-white cursor-pointer transition-colors">
                                    <input type="radio" name="installation_type" value="both" class="w-4 h-4 text-primary focus:ring-primary border-gray-300">
                                    <span class="ml-3 text-gray-700 font-medium">Both Indoor & Outdoor</span>
                                </label>
                                <label class="flex items-center p-3 border border-gray-200 rounded-lg hover:bg-white cursor-pointer transition-colors">
                                    <input type="radio" name="installation_type" value="not_sure" class="w-4 h-4 text-primary focus:ring-primary border-gray-300">
                                    <span class="ml-3 text-gray-700 font-medium">Not Sure</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Travel Distance Requirements -->
                    <div class="mb-6">
                        <h4 class="text-lg font-semibold mb-3 text-primary">What is the approximate vertical travel distance needed?</h4>
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <div class="space-y-3">
                                <label class="flex items-center p-3 border border-gray-200 rounded-lg hover:bg-white cursor-pointer transition-colors">
                                    <input type="radio" name="travel_distance" value="under_4ft" class="w-4 h-4 text-primary focus:ring-primary border-gray-300">
                                    <span class="ml-3 text-gray-700 font-medium">Under 4 feet</span>
                                </label>
                                <label class="flex items-center p-3 border border-gray-200 rounded-lg hover:bg-white cursor-pointer transition-colors">
                                    <input type="radio" name="travel_distance" value="4_to_8ft" class="w-4 h-4 text-primary focus:ring-primary border-gray-300">
                                    <span class="ml-3 text-gray-700 font-medium">4 to 8 feet</span>
                                </label>
                                <label class="flex items-center p-3 border border-gray-200 rounded-lg hover:bg-white cursor-pointer transition-colors">
                                    <input type="radio" name="travel_distance" value="8_to_14ft" class="w-4 h-4 text-primary focus:ring-primary border-gray-300">
                                    <span class="ml-3 text-gray-700 font-medium">8 to 14 feet (Maximum)</span>
                                </label>
                                <label class="flex items-center p-3 border border-gray-200 rounded-lg hover:bg-white cursor-pointer transition-colors">
                                    <input type="radio" name="travel_distance" value="not_sure" class="w-4 h-4 text-primary focus:ring-primary border-gray-300">
                                    <span class="ml-3 text-gray-700 font-medium">Not Sure - Need Assessment</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Platform Size Requirements -->
                    <div class="mb-6">
                        <h4 class="text-lg font-semibold mb-3 text-primary">Platform Size Preference</h4>
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <div class="space-y-3">
                                <label class="flex items-center p-3 border border-gray-200 rounded-lg hover:bg-white cursor-pointer transition-colors">
                                    <input type="radio" name="platform_size" value="standard" class="w-4 h-4 text-primary focus:ring-primary border-gray-300">
                                    <span class="ml-3 text-gray-700 font-medium">Standard Size (42″ L x 60″ W)</span>
                                </label>
                                <label class="flex items-center p-3 border border-gray-200 rounded-lg hover:bg-white cursor-pointer transition-colors">
                                    <input type="radio" name="platform_size" value="custom" class="w-4 h-4 text-primary focus:ring-primary border-gray-300">
                                    <span class="ml-3 text-gray-700 font-medium">Custom Size Required</span>
                                </label>
                                <label class="flex items-center p-3 border border-gray-200 rounded-lg hover:bg-white cursor-pointer transition-colors">
                                    <input type="radio" name="platform_size" value="unsure" class="w-4 h-4 text-primary focus:ring-primary border-gray-300">
                                    <span class="ml-3 text-gray-700 font-medium">Need Professional Assessment</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Emergency Power Options -->
                    <div class="mb-6">
                        <h4 class="text-lg font-semibold mb-3 text-primary">Emergency Power Options Interest</h4>
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <div class="space-y-3">
                                <label class="flex items-center p-3 border border-gray-200 rounded-lg hover:bg-white cursor-pointer transition-colors">
                                    <input type="radio" name="emergency_power" value="standard" class="w-4 h-4 text-primary focus:ring-primary border-gray-300">
                                    <span class="ml-3 text-gray-700 font-medium">Standard Manual Crank Only</span>
                                </label>
                                <label class="flex items-center p-3 border border-gray-200 rounded-lg hover:bg-white cursor-pointer transition-colors">
                                    <input type="radio" name="emergency_power" value="battery_lowering" class="w-4 h-4 text-primary focus:ring-primary border-gray-300">
                                    <span class="ml-3 text-gray-700 font-medium">Battery Backup Lowering</span>
                                </label>
                                <label class="flex items-center p-3 border border-gray-200 rounded-lg hover:bg-white cursor-pointer transition-colors">
                                    <input type="radio" name="emergency_power" value="full_battery" class="w-4 h-4 text-primary focus:ring-primary border-gray-300">
                                    <span class="ml-3 text-gray-700 font-medium">Full 40-Cycle Battery Backup</span>
                                </label>
                                <label class="flex items-center p-3 border border-gray-200 rounded-lg hover:bg-white cursor-pointer transition-colors">
                                    <input type="radio" name="emergency_power" value="discuss" class="w-4 h-4 text-primary focus:ring-primary border-gray-300">
                                    <span class="ml-3 text-gray-700 font-medium">Discuss Options</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Mobility Equipment -->
                    <div class="mb-6">
                        <h4 class="text-lg font-semibold mb-3 text-primary">What mobility equipment will be used?</h4>
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <div class="grid grid-cols-2 gap-3">
                                <label class="flex items-center p-3 border border-gray-200 rounded-lg hover:bg-white cursor-pointer transition-colors">
                                    <input type="checkbox" name="mobility_equipment[]" value="manual_wheelchair" class="w-4 h-4 text-primary focus:ring-primary border-gray-300">
                                    <span class="ml-3 text-gray-700 font-medium">Manual Wheelchair</span>
                                </label>
                                <label class="flex items-center p-3 border border-gray-200 rounded-lg hover:bg-white cursor-pointer transition-colors">
                                    <input type="checkbox" name="mobility_equipment[]" value="power_wheelchair" class="w-4 h-4 text-primary focus:ring-primary border-gray-300">
                                    <span class="ml-3 text-gray-700 font-medium">Power Wheelchair</span>
                                </label>
                                <label class="flex items-center p-3 border border-gray-200 rounded-lg hover:bg-white cursor-pointer transition-colors">
                                    <input type="checkbox" name="mobility_equipment[]" value="scooter" class="w-4 h-4 text-primary focus:ring-primary border-gray-300">
                                    <span class="ml-3 text-gray-700 font-medium">Mobility Scooter</span>
                                </label>
                                <label class="flex items-center p-3 border border-gray-200 rounded-lg hover:bg-white cursor-pointer transition-colors">
                                    <input type="checkbox" name="mobility_equipment[]" value="walker" class="w-4 h-4 text-primary focus:ring-primary border-gray-300">
                                    <span class="ml-3 text-gray-700 font-medium">Walker/Rollator</span>
                                </label>
                                <label class="flex items-center p-3 border border-gray-200 rounded-lg hover:bg-white cursor-pointer transition-colors">
                                    <input type="checkbox" name="mobility_equipment[]" value="walking" class="w-4 h-4 text-primary focus:ring-primary border-gray-300">
                                    <span class="ml-3 text-gray-700 font-medium">Walking (no equipment)</span>
                                </label>
                                <label class="flex items-center p-3 border border-gray-200 rounded-lg hover:bg-white cursor-pointer transition-colors">
                                    <input type="checkbox" name="mobility_equipment[]" value="multiple_users" class="w-4 h-4 text-primary focus:ring-primary border-gray-300">
                                    <span class="ml-3 text-gray-700 font-medium">Multiple Users</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Interest Type Section -->
                    <div class="mb-6">
                        <h4 class="text-lg font-semibold mb-3 text-primary">What type of service are you interested in?</h4>
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <div class="space-y-3">
                                <label class="flex items-center p-3 border border-gray-200 rounded-lg hover:bg-white cursor-pointer transition-colors">
                                    <input type="radio" name="interest_type" value="purchase" class="w-4 h-4 text-primary focus:ring-primary border-gray-300" checked>
                                    <span class="ml-3 text-gray-700 font-medium">Purchase Trus-T Lift</span>
                                </label>
                                <label class="flex items-center p-3 border border-gray-200 rounded-lg hover:bg-white cursor-pointer transition-colors">
                                    <input type="radio" name="interest_type" value="assessment" class="w-4 h-4 text-primary focus:ring-primary border-gray-300">
                                    <span class="ml-3 text-gray-700 font-medium">Assessment Only</span>
                                </label>
                                <label class="flex items-center p-3 border border-gray-200 rounded-lg hover:bg-white cursor-pointer transition-colors">
                                    <input type="radio" name="interest_type" value="both" class="w-4 h-4 text-primary focus:ring-primary border-gray-300">
                                    <span class="ml-3 text-gray-700 font-medium">Both Assessment and Purchase</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Additional Information -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-2" for="comments">Additional Details</label>
                        <textarea id="comments" name="comments" rows="3"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent"
                            placeholder="Please describe your space, travel distance needs, platform requirements, or any questions about the Trus-T Residential Lift..."></textarea>
                    </div>

                    <!-- Submit Button -->
                    <div class="text-center pt-4">
                        <button type="submit"
                            class="inline-flex items-center px-8 py-3 bg-primary text-white font-semibold rounded-lg hover:bg-primary-dark transition duration-300 shadow-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                            </svg>
                            Submit Quote Request
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Assessment Form Section -->
    <section id="assessment" class="py-12 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto">
                <h2 class="text-3xl font-bold text-center text-gray-800 mb-4">Are You Interested Having This Product
                    Installed</h2>
                <p class="text-lg text-center text-gray-600 mb-8">We are Here For You - We're here to listen, help and
                    provide insights.</p>

                <div class="text-center">
                    <a href="{{ route('contact') }}"
                        class="inline-flex items-center px-6 py-3 bg-primary text-white rounded-lg hover:bg-primary-dark transition duration-300">
                        Contact Us for Assessment
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Quote Request Modal -->
    <div id="quoteRequestModal"
        class="fixed inset-0 z-50 hidden overflow-auto bg-black bg-opacity-75 flex items-center justify-center p-4">
        <div class="relative bg-white rounded-lg max-w-2xl w-full mx-auto max-h-[90vh] overflow-y-auto">
            <!-- Modal Header -->
            <div class="bg-primary text-white p-4 rounded-t-lg flex justify-between items-center sticky top-0 z-10">
                <h3 class="text-xl font-bold">Request a Quote</h3>
                <button id="closeQuoteModal" class="text-white hover:text-gray-200 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <!-- Modal Body -->
            <div class="p-6">
                <form id="quoteRequestForm">
                    @csrf
                    <input type="hidden" id="product_name" name="product_name" value="Home2stay Trus-T Residential Indoor / Outdoor Lift">

                    <!-- Product Info Section -->
                    <div class="mb-6">
                        <h4 class="text-lg font-semibold mb-4 text-primary">Product Information</h4>
                        <div class="p-3 bg-gray-50 rounded-lg mb-4">
                            <p>You're requesting a quote for: <span class="font-semibold text-primary">Home2stay Trus-T Residential Indoor / Outdoor Lift</span></p>
                            <p class="text-sm text-gray-600 mt-1">25+ years of proven mobility solutions - Call for customized pricing</p>
                        </div>
                    </div>

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
                            <label class="block text-gray-700 font-medium mb-2" for="location">Installation Location</label>
                            <input type="text" id="location" name="location" placeholder="e.g., Home entrance, Multi-level deck, Indoor stairwell, etc."
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
                        </div>
                    </div>

                    <!-- Installation Type -->
                    <div class="mb-6">
                        <h4 class="text-lg font-semibold mb-3 text-primary">What type of installation are you considering?</h4>
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <div class="grid grid-cols-2 gap-3">
                                <label class="flex items-center p-3 border border-gray-200 rounded-lg hover:bg-white cursor-pointer transition-colors">
                                    <input type="radio" name="installation_type" value="outdoor_porch" class="w-4 h-4 text-primary focus:ring-primary border-gray-300">
                                    <span class="ml-3 text-gray-700 font-medium">Outdoor Porch/Deck</span>
                                </label>
                                <label class="flex items-center p-3 border border-gray-200 rounded-lg hover:bg-white cursor-pointer transition-colors">
                                    <input type="radio" name="installation_type" value="indoor" class="w-4 h-4 text-primary focus:ring-primary border-gray-300">
                                    <span class="ml-3 text-gray-700 font-medium">Indoor Installation</span>
                                </label>
                                <label class="flex items-center p-3 border border-gray-200 rounded-lg hover:bg-white cursor-pointer transition-colors">
                                    <input type="radio" name="installation_type" value="entryway" class="w-4 h-4 text-primary focus:ring-primary border-gray-300">
                                    <span class="ml-3 text-gray-700 font-medium">Entryway Access</span>
                                </label>
                                <label class="flex items-center p-3 border border-gray-200 rounded-lg hover:bg-white cursor-pointer transition-colors">
                                    <input type="radio" name="installation_type" value="not_sure" class="w-4 h-4 text-primary focus:ring-primary border-gray-300">
                                    <span class="ml-3 text-gray-700 font-medium">Not Sure</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Height Requirements -->
                    <div class="mb-6">
                        <h4 class="text-lg font-semibold mb-3 text-primary">What is the approximate height you need to travel?</h4>
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <div class="space-y-3">
                                <label class="flex items-center p-3 border border-gray-200 rounded-lg hover:bg-white cursor-pointer transition-colors">
                                    <input type="radio" name="height_requirement" value="under_4ft" class="w-4 h-4 text-primary focus:ring-primary border-gray-300">
                                    <span class="ml-3 text-gray-700 font-medium">Under 4 feet</span>
                                </label>
                                <label class="flex items-center p-3 border border-gray-200 rounded-lg hover:bg-white cursor-pointer transition-colors">
                                    <input type="radio" name="height_requirement" value="4_to_6ft" class="w-4 h-4 text-primary focus:ring-primary border-gray-300">
                                    <span class="ml-3 text-gray-700 font-medium">4 to 6 feet</span>
                                </label>
                                <label class="flex items-center p-3 border border-gray-200 rounded-lg hover:bg-white cursor-pointer transition-colors">
                                    <input type="radio" name="height_requirement" value="6_to_10ft" class="w-4 h-4 text-primary focus:ring-primary border-gray-300">
                                    <span class="ml-3 text-gray-700 font-medium">6 to 10 feet</span>
                                </label>
                                <label class="flex items-center p-3 border border-gray-200 rounded-lg hover:bg-white cursor-pointer transition-colors">
                                    <input type="radio" name="height_requirement" value="over_10ft" class="w-4 h-4 text-primary focus:ring-primary border-gray-300">
                                    <span class="ml-3 text-gray-700 font-medium">Over 10 feet</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Power Options -->
                    <div class="mb-6">
                        <h4 class="text-lg font-semibold mb-3 text-primary">Power Preference</h4>
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <div class="space-y-3">
                                <label class="flex items-center p-3 border border-gray-200 rounded-lg hover:bg-white cursor-pointer transition-colors">
                                    <input type="radio" name="power_preference" value="ac_power" class="w-4 h-4 text-primary focus:ring-primary border-gray-300">
                                    <span class="ml-3 text-gray-700 font-medium">AC Power (for 4ft and 6ft units)</span>
                                </label>
                                <label class="flex items-center p-3 border border-gray-200 rounded-lg hover:bg-white cursor-pointer transition-colors">
                                    <input type="radio" name="power_preference" value="dc_battery" class="w-4 h-4 text-primary focus:ring-primary border-gray-300">
                                    <span class="ml-3 text-gray-700 font-medium">DC Battery Power (works during power outages)</span>
                                </label>
                                <label class="flex items-center p-3 border border-gray-200 rounded-lg hover:bg-white cursor-pointer transition-colors">
                                    <input type="radio" name="power_preference" value="no_preference" class="w-4 h-4 text-primary focus:ring-primary border-gray-300">
                                    <span class="ml-3 text-gray-700 font-medium">No Preference</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Mobility Equipment -->
                    <div class="mb-6">
                        <h4 class="text-lg font-semibold mb-3 text-primary">What mobility equipment will be used?</h4>
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <div class="grid grid-cols-2 gap-3">
                                <label class="flex items-center p-3 border border-gray-200 rounded-lg hover:bg-white cursor-pointer transition-colors">
                                    <input type="checkbox" name="mobility_equipment[]" value="wheelchair" class="w-4 h-4 text-primary focus:ring-primary border-gray-300">
                                    <span class="ml-3 text-gray-700 font-medium">Manual Wheelchair</span>
                                </label>
                                <label class="flex items-center p-3 border border-gray-200 rounded-lg hover:bg-white cursor-pointer transition-colors">
                                    <input type="checkbox" name="mobility_equipment[]" value="power_wheelchair" class="w-4 h-4 text-primary focus:ring-primary border-gray-300">
                                    <span class="ml-3 text-gray-700 font-medium">Power Wheelchair</span>
                                </label>
                                <label class="flex items-center p-3 border border-gray-200 rounded-lg hover:bg-white cursor-pointer transition-colors">
                                    <input type="checkbox" name="mobility_equipment[]" value="scooter" class="w-4 h-4 text-primary focus:ring-primary border-gray-300">
                                    <span class="ml-3 text-gray-700 font-medium">Mobility Scooter</span>
                                </label>
                                <label class="flex items-center p-3 border border-gray-200 rounded-lg hover:bg-white cursor-pointer transition-colors">
                                    <input type="checkbox" name="mobility_equipment[]" value="walker" class="w-4 h-4 text-primary focus:ring-primary border-gray-300">
                                    <span class="ml-3 text-gray-700 font-medium">Walker/Rollator</span>
                                </label>
                                <label class="flex items-center p-3 border border-gray-200 rounded-lg hover:bg-white cursor-pointer transition-colors">
                                    <input type="checkbox" name="mobility_equipment[]" value="walking" class="w-4 h-4 text-primary focus:ring-primary border-gray-300">
                                    <span class="ml-3 text-gray-700 font-medium">Walking (no equipment)</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Interest Type Section -->
                    <div class="mb-6">
                        <h4 class="text-lg font-semibold mb-3 text-primary">What type of service are you interested in?</h4>
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <div class="space-y-3">
                                <label class="flex items-center p-3 border border-gray-200 rounded-lg hover:bg-white cursor-pointer transition-colors">
                                    <input type="radio" name="interest_type" value="purchase" class="w-4 h-4 text-primary focus:ring-primary border-gray-300" checked>
                                    <span class="ml-3 text-gray-700 font-medium">Purchase Platform Lift</span>
                                </label>
                                <label class="flex items-center p-3 border border-gray-200 rounded-lg hover:bg-white cursor-pointer transition-colors">
                                    <input type="radio" name="interest_type" value="assessment" class="w-4 h-4 text-primary focus:ring-primary border-gray-300">
                                    <span class="ml-3 text-gray-700 font-medium">Assessment Only</span>
                                </label>
                                <label class="flex items-center p-3 border border-gray-200 rounded-lg hover:bg-white cursor-pointer transition-colors">
                                    <input type="radio" name="interest_type" value="both" class="w-4 h-4 text-primary focus:ring-primary border-gray-300">
                                    <span class="ml-3 text-gray-700 font-medium">Both Assessment and Purchase</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Additional Information -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-2" for="comments">Additional Details</label>
                        <textarea id="comments" name="comments" rows="3"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent"
                            placeholder="Please describe your space, height requirements, access needs, or any questions about the Bruno VPL-3100 Platform Lift..."></textarea>
                    </div>

                    <div class="mt-6 flex justify-end">
                        <button type="submit"
                            class="bg-primary hover:bg-primary-dark text-white px-8 py-2 rounded-lg font-semibold transition duration-300 shadow-lg">
                            Submit Quote Request
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <style>
        .tab-pane {
            display: none;
        }

        .tab-pane.active {
            display: block;
        }

        .line-clamp-3 {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
    </style>
@endpush

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Force initial correct state
            document.querySelectorAll('.tab-pane').forEach(function (pane) {
                if (pane.classList.contains('active')) {
                    pane.style.display = 'block';
                } else {
                    pane.style.display = 'none';
                }
            });

            // Initialize product tabs
            const tabButtons = document.querySelectorAll('.tab-button');

            tabButtons.forEach(function (button) {
                button.addEventListener('click', function (e) {
                    e.preventDefault();

                    const targetId = this.getAttribute('data-target');

                    // Update button states
                    tabButtons.forEach(function (btn) {
                        if (btn.getAttribute('data-target') === targetId) {
                            btn.classList.add('active', 'border-primary', 'text-primary', 'bg-white');
                            btn.classList.remove('border-gray-200', 'bg-gray-50', 'hover:text-gray-600', 'hover:bg-gray-100');
                        } else {
                            btn.classList.remove('active', 'border-primary', 'text-primary', 'bg-white');
                            btn.classList.add('border-gray-200', 'bg-gray-50', 'hover:text-gray-600', 'hover:bg-gray-100');
                        }
                    });

                    // Show target tab content, hide others
                    document.querySelectorAll('.tab-pane').forEach(function (pane) {
                        if (pane.getAttribute('data-tab') === targetId) {
                            pane.style.display = 'block';
                        } else {
                            pane.style.display = 'none';
                        }
                    });
                });
            });

            // Image modal functionality
            const imageModal = document.getElementById('imageModal');
            const modalImage = document.getElementById('modalImage');
            const closeModal = document.getElementById('closeModal');

            // Add click handlers to all image thumbnails
            const imageThumbnails = document.querySelectorAll('.image-thumbnail');

            if (imageThumbnails.length > 0 && imageModal) {
                imageThumbnails.forEach(function (thumbnail) {
                    thumbnail.addEventListener('click', function () {
                        const imgSrc = this.querySelector('img').src;
                        const imgAlt = this.querySelector('img').alt;

                        modalImage.src = imgSrc;
                        modalImage.alt = imgAlt;
                        imageModal.classList.remove('hidden');
                        document.body.style.overflow = 'hidden'; // Prevent scrolling when modal is open
                    });
                });

                closeModal.addEventListener('click', function () {
                    imageModal.classList.add('hidden');
                    document.body.style.overflow = 'auto'; // Re-enable scrolling
                });

                // Close modal when clicking outside of image
                imageModal.addEventListener('click', function (event) {
                    if (event.target === imageModal) {
                        imageModal.classList.add('hidden');
                        document.body.style.overflow = 'auto';
                    }
                });

                // Close modal with Escape key
                document.addEventListener('keydown', function (event) {
                    if (event.key === 'Escape' && !imageModal.classList.contains('hidden')) {
                        imageModal.classList.add('hidden');
                        document.body.style.overflow = 'auto';
                    }
                });
            }

            // Quote Request Modal Functionality
            const quoteRequestBtn = document.getElementById('quoteRequestBtn');
            const quoteRequestModal = document.getElementById('quoteRequestModal');
            const closeQuoteModal = document.getElementById('closeQuoteModal');
            const quoteRequestForm = document.getElementById('quoteRequestForm');

            if (quoteRequestBtn && quoteRequestModal) {
                // Open quote modal
                quoteRequestBtn.addEventListener('click', function () {
                    quoteRequestModal.classList.remove('hidden');
                    document.body.style.overflow = 'hidden'; // Prevent scrolling when modal is open
                });

                // Close quote modal on button click
                closeQuoteModal.addEventListener('click', function () {
                    quoteRequestModal.classList.add('hidden');
                    document.body.style.overflow = 'auto'; // Re-enable scrolling
                });

                // Close quote modal when clicking outside
                quoteRequestModal.addEventListener('click', function (event) {
                    if (event.target === quoteRequestModal) {
                        quoteRequestModal.classList.add('hidden');
                        document.body.style.overflow = 'auto';
                    }
                });

                // Close quote modal with Escape key
                document.addEventListener('keydown', function (event) {
                    if (event.key === 'Escape' && !quoteRequestModal.classList.contains('hidden')) {
                        quoteRequestModal.classList.add('hidden');
                        document.body.style.overflow = 'auto';
                    }
                });

                // Handle form submission
                if (quoteRequestForm) {
                    quoteRequestForm.addEventListener('submit', function (e) {
                        e.preventDefault();

                        // Create FormData object to easily get form values
                        const formData = new FormData(this);

                        // You would typically send this data to your server with AJAX
                        // For now, just display a success message
                        alert('Your quote request has been submitted! We will contact you shortly with pricing information.');

                        // Reset form and close modal
                        this.reset();
                        quoteRequestModal.classList.add('hidden');
                        document.body.style.overflow = 'auto';
                    });
                }
            }
        });
    </script>
@endpush