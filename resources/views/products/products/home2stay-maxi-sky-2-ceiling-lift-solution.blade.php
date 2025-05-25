@extends('layouts.app')

@section('title', 'Home2stay Maxi Sky 2 Ceiling Lift Solution - Home2stay')
@section('meta_description', 'The Maxi Sky 2 Ceiling Lift offers maximum flexibility and versatility- with tracks available in an array of lengths and [&hellip;]')

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
                                <a href="{{ route('products.category', 'ceiling-lifts') }}"
                                    class="ml-1 text-white hover:text-gray-200">
                                    Ceiling Lifts
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
                                <span class="ml-1 font-medium text-gray-100">Home2stay Maxi Sky 2 Ceiling Lift Solution</span>
                            </div>
                        </li>
                    </ol>
                </nav>
                <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-4">Home2stay Maxi Sky 2 Ceiling Lift Solution</h1>
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
                        <img src="{{ asset('al-prod-page-imgs/Ceiling-Lifts.jpg') }}"
                            alt="Home2stay Maxi Sky 2 Ceiling Lift Solution" class="w-full h-auto object-contain p-4">
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
                        <p class="text-gray-600 text-lg">
                            The Maxi Sky 2 Ceiling Lift offers maximum flexibility and versatility- with tracks available in an array of lengths and curves, a variety of accessories and configurations, and a full range of spreader bars and sling types to suit all needs.
                        </p>
                    </div>
                    <div class="mb-6">
                        <p class="text-gray-600 text-lg">
                            The handset and intelligent user interface enable the caregiver to perform transfers without stress or strain, and minimizes manual lifting.
                        </p>
                    </div>
                    <div class="mb-6">
                        <p class="text-gray-600 text-lg">
                            Lifting capacity up to 600 lbs. (272 kg). Increased comfort for larger and medium-sized patients.
                        </p>
                    </div>

                    <div class="mb-6 p-4 bg-primary/5 border-l-4 border-primary rounded-r-lg">
                        <p class="text-gray-700 font-medium">
                            CONTACT US for a price quote customized to your needs.
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
                                        data-target="images-tab">
                                        More Images
                                    </button>
                                </li>
                                <li class="mr-2 mb-2">
                                    <button
                                        class="tab-button inline-block p-4 border border-gray-200 rounded-t-lg bg-gray-50 hover:text-gray-600 hover:bg-gray-100"
                                        data-target="technical-tab">
                                        Technical Information
                                    </button>
                                </li>
                                <li class="mr-2 mb-2">
                                    <button
                                        class="tab-button inline-block p-4 border border-gray-200 rounded-t-lg bg-gray-50 hover:text-gray-600 hover:bg-gray-100"
                                        data-target="pricing-tab">
                                        Pricing & Rental
                                    </button>
                                </li>
                                <li>
                                    <button
                                        class="tab-button inline-block p-4 border border-gray-200 rounded-t-lg bg-gray-50 hover:text-gray-600 hover:bg-gray-100"
                                        data-target="supplier-tab">
                                        Supplier
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
                                            <h3 class="font-semibold text-gray-800">Maximum Flexibility and Versatility</h3>
                                            <p class="text-gray-600">Tracks available in an array of lengths and curves, with a variety of accessories and configurations.</p>
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
                                            <h3 class="font-semibold text-gray-800">Intelligent User Interface</h3>
                                            <p class="text-gray-600">Handset and intelligent user interface enable caregivers to perform transfers without stress or strain.</p>
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
                                            <h3 class="font-semibold text-gray-800">High Weight Capacity</h3>
                                            <p class="text-gray-600">Lifting capacity up to 600 lbs. (272 kg) with increased comfort for larger and medium-sized patients.</p>
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
                                            <h3 class="font-semibold text-gray-800">LCD Interface</h3>
                                            <p class="text-gray-600">LCD interface gives instant feedback on status of the lift for enhanced safety and control.</p>
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
                                            <h3 class="font-semibold text-gray-800">Powered Dynamic Positioning System</h3>
                                            <p class="text-gray-600">PDPS provides unique ability to change patient's position from upright and reclined for enhanced comfort.</p>
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
                                            <h3 class="font-semibold text-gray-800">Plug-and-Play Ready</h3>
                                            <p class="text-gray-600">Easy installation with plug-and-play functionality and removable cover for maintenance access.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- More Images Tab -->
                            <div class="tab-pane" data-tab="images-tab" style="display: none !important;">
                                <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                                    <div class="image-thumbnail cursor-pointer">
                                        <img src="{{ asset('bathsafety-cat/Maxi-Sky2-4.jpg') }}"
                                            alt="Home2stay Maxi Sky 2 Ceiling Lift Solution"
                                            class="w-full h-32 object-contain rounded-lg hover:opacity-90 transition duration-200 p-2 bg-gray-50">
                                    </div>
                                    <div class="image-thumbnail cursor-pointer">
                                        <img src="{{ asset('al-prod-page-imgs/Ceiling-Lifts.jpg') }}"
                                            alt="Ceiling Lift Installation"
                                            class="w-full h-32 object-contain rounded-lg hover:opacity-90 transition duration-200 p-2 bg-gray-50">
                                    </div>
                                    <div class="image-thumbnail cursor-pointer">
                                        <img src="{{ asset('bathsafety-cat/Maxi-Sky2-6.jpg') }}"
                                            alt="Ceiling Lift Solutions"
                                            class="w-full h-32 object-contain rounded-lg hover:opacity-90 transition duration-200 p-2 bg-gray-50">
                                    </div>
                                </div>
                            </div>

                            <!-- Technical Information Tab -->
                            <div class="tab-pane" data-tab="technical-tab" style="display: none !important;">
                                <div class="space-y-6">
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <div class="space-y-3">
                                            <div class="flex justify-between border-b pb-2">
                                                <span class="font-medium text-gray-700">Weight Capacity:</span>
                                                <span class="text-gray-600">Up to 600 lbs. (272 kg)</span>
                                            </div>
                                            <div class="flex justify-between border-b pb-2">
                                                <span class="font-medium text-gray-700">Interface:</span>
                                                <span class="text-gray-600">LCD with instant feedback</span>
                                            </div>
                                            <div class="flex justify-between border-b pb-2">
                                                <span class="font-medium text-gray-700">Cover:</span>
                                                <span class="text-gray-600">Removable</span>
                                            </div>
                                            <div class="flex justify-between border-b pb-2">
                                                <span class="font-medium text-gray-700">Installation:</span>
                                                <span class="text-gray-600">Plug-and-play ready</span>
                                            </div>
                                        </div>
                                        <div class="space-y-3">
                                            <div class="flex justify-between border-b pb-2">
                                                <span class="font-medium text-gray-700">Tracks:</span>
                                                <span class="text-gray-600">Embedded tracks</span>
                                            </div>
                                            <div class="flex justify-between border-b pb-2">
                                                <span class="font-medium text-gray-700">Lifting Height:</span>
                                                <span class="text-gray-600">Increased lifting height</span>
                                            </div>
                                            <div class="flex justify-between border-b pb-2">
                                                <span class="font-medium text-gray-700">PDPS:</span>
                                                <span class="text-gray-600">Powered Dynamic Positioning</span>
                                            </div>
                                            <div class="flex justify-between border-b pb-2">
                                                <span class="font-medium text-gray-700">Availability:</span>
                                                <span class="text-gray-600">Sale or Rental</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="bg-gray-50 p-4 rounded-lg">
                                        <h4 class="font-semibold text-gray-800 mb-2">Key Features</h4>
                                        <ul class="list-disc list-inside text-gray-600 space-y-1">
                                            <li>Lifting capacity up to 600 lbs. (272 kg)</li>
                                            <li>LCD interface gives instant feedback on status of the lift</li>
                                            <li>Removable cover for easy maintenance</li>
                                            <li>Plug-and-play ready installation</li>
                                            <li>Embedded tracks & increased lifting height</li>
                                        </ul>
                                    </div>

                                    <div class="bg-blue-50 p-4 rounded-lg">
                                        <h4 class="font-semibold text-gray-800 mb-2">Advanced Features</h4>
                                        <ul class="list-disc list-inside text-gray-600 space-y-1">
                                            <li>Powered Dynamic Positioning System (PDPS)</li>
                                            <li>Unique ability to change patient's position from upright and reclined</li>
                                            <li>Tracks available in array of lengths and curves</li>
                                            <li>Variety of accessories and configurations</li>
                                            <li>Full range of spreader bars and sling types</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Pricing & Rental Tab -->
                            <div class="tab-pane" data-tab="pricing-tab" style="display: none !important;">
                                <div class="space-y-6">
                                    <div>
                                        <h3 class="text-xl font-semibold text-gray-800 mb-4">Purchase Options</h3>
                                        <div class="bg-gray-50 p-6 rounded-lg">
                                            <h4 class="font-semibold text-gray-800 mb-2">Maxi Sky 2 Ceiling Lift Solution</h4>
                                            <p class="text-2xl font-bold text-primary mb-2">Starts at $3,530.86</p>
                                            <p class="text-gray-600 text-sm">Complete system with LCD interface and PDPS technology</p>
                                        </div>
                                    </div>

                                    <div class="border-t pt-6">
                                        <h3 class="text-xl font-semibold text-gray-800 mb-4">Rental Options</h3>
                                        <div class="bg-blue-50 p-6 rounded-lg">
                                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                                <div class="space-y-3">
                                                    <div class="flex justify-between">
                                                        <span class="font-medium text-gray-700">Monthly Rental Fee:</span>
                                                        <span class="text-gray-600 font-semibold">$300</span>
                                                    </div>
                                                    <div class="flex justify-between">
                                                        <span class="font-medium text-gray-700">Minimum Period:</span>
                                                        <span class="text-gray-600">1 Month</span>
                                                    </div>
                                                </div>
                                                <div class="space-y-3">
                                                    <div class="flex justify-between">
                                                        <span class="font-medium text-gray-700">Setup Fees:</span>
                                                        <span class="text-gray-600">$125</span>
                                                    </div>
                                                    <div class="flex justify-between">
                                                        <span class="font-medium text-gray-700">Removal Fees:</span>
                                                        <span class="text-gray-600">$95</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="text-gray-600 text-sm mt-3">Setup fees include measuring and installation</p>
                                        </div>
                                    </div>

                                    <div class="bg-gray-50 rounded-lg p-4">
                                        <div class="flex items-center justify-between mb-2">
                                            <h3 class="text-xl font-semibold text-gray-800">Contact for Custom Pricing</h3>
                                        </div>
                                        <div class="flex items-center justify-between">
                                            <h3 class="text-xl font-semibold text-gray-800">Call Us</h3>
                                            <a href="tel:+16042591211" class="text-secondary">
                                                <span class="text-lg font-semibold text-primary">604-259-1211</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Supplier Tab -->
                            <div class="tab-pane" data-tab="supplier-tab" style="display: none !important;">
                                <div class="space-y-6">
                                    <div class="bg-gray-50 p-6 rounded-lg">
                                        <h3 class="text-xl font-semibold text-gray-800 mb-4">Product Supplier Information</h3>
                                        <p class="text-gray-600 mb-4">
                                            The Maxi Sky 2 Ceiling Lift Solution is supplied by Arjo, a leading global provider of medical devices and solutions that enhance quality of life for people with reduced mobility and age-related health challenges.
                                        </p>
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                            <div class="space-y-3">
                                                <div class="flex justify-between border-b pb-2">
                                                    <span class="font-medium text-gray-700">Supplier:</span>
                                                    <span class="text-gray-600">Arjo</span>
                                                </div>
                                                <div class="flex justify-between border-b pb-2">
                                                    <span class="font-medium text-gray-700">Product Model:</span>
                                                    <span class="text-gray-600">Maxi Sky 2</span>
                                                </div>
                                                <div class="flex justify-between border-b pb-2">
                                                    <span class="font-medium text-gray-700">Category:</span>
                                                    <span class="text-gray-600">Ceiling Lift Solution</span>
                                                </div>
                                            </div>
                                            <div class="space-y-3">
                                                <div class="flex justify-between border-b pb-2">
                                                    <span class="font-medium text-gray-700">Certification:</span>
                                                    <span class="text-gray-600">Medical device certified</span>
                                                </div>
                                                <div class="flex justify-between border-b pb-2">
                                                    <span class="font-medium text-gray-700">Warranty:</span>
                                                    <span class="text-gray-600">Manufacturer warranty included</span>
                                                </div>
                                                <div class="flex justify-between border-b pb-2">
                                                    <span class="font-medium text-gray-700">Support:</span>
                                                    <span class="text-gray-600">Full technical support</span>
                                                </div>
                                            </div>
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

    <!-- Featured Product -->
    <section class="py-16 bg-primary">
        <div class="container mx-auto px-4">
            <div class="bg-gray-50 rounded-xl overflow-hidden shadow-lg">
                <div class="flex flex-col lg:flex-row">
                    <!-- Text Content -->
                    <div class="w-full lg:w-1/2 p-8 md:p-12 flex flex-col justify-center">
                        <h2 class="text-3xl font-bold text-gray-800 mb-4">Are you interested in having this product installed?</h2>
                        <p class="text-lg text-gray-600 mb-6">Accessibility solutions to make everyday home life easier and safer for yourself and your loved ones.</p>
                        <p class="mb-5">Give us a call at <a href="tel:+16042591211" class="text-secondary">604-259-1211</a> or submit a FREE <a href="#assessment" class="text-secondary">ASSESSMENT FORM</a> to check.</p>
                    </div>
                    <!-- Image -->
                    <div class="w-full lg:w-1/2">
                        <img src="{{ asset('al-prod-page-imgs/Rectangle%20320-min.png') }}" alt="Ceiling Lift Solutions"
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
                    <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 group">
                        @if($post->featured_image)
                            <div class="h-48 overflow-hidden">
                                <img src="{{ asset('storage/' . $post->featured_image) }}" alt="{{ $post->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                            </div>
                        @else
                            <div class="h-48 bg-gray-200 flex items-center justify-center">
                                <span class="text-gray-400 text-2xl"><i class="fas fa-image"></i></span>
                            </div>
                        @endif
                        
                        <div class="p-6">
                            <div class="flex items-center text-sm text-gray-500 mb-2">
                                <span class="mr-4">
                                    <i class="fas fa-calendar-alt mr-1"></i> {{ $post->published_at ? $post->published_at->format('F j, Y') : $post->created_at->format('F j, Y') }}
                                </span>
                                <span>
                                    <i class="fas fa-user mr-1"></i> {{ $post->user->name ?? 'Admin' }}
                                </span>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-2 group-hover:text-primary transition-colors">{{ $post->title }}</h3>
                            <p class="text-gray-600 mb-4 line-clamp-3">{{ $post->excerpt }}</p>
                            <a href="{{ route('blog.show', $post->slug) }}" class="inline-flex items-center text-primary hover:text-primary/80 font-medium">
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
                    <a href="{{ route('blog.index') }}" class="inline-flex items-center px-6 py-3 bg-primary text-white rounded-lg hover:bg-primary-dark transition duration-300">
                        View All Blog Posts
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
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
                    <p class="text-gray-600">We're here to listen, help and provide insights. Tell us what you need – We would love to hear from you!</p>
                </div>

                <form action="#" method="POST" class="space-y-6">
                    @csrf
                    <input type="hidden" name="product" value="Home2stay Maxi Sky 2 Ceiling Lift Solution">
                    
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
                            <label class="block text-gray-700 font-medium mb-2" for="location">Your Location</label>
                            <input type="text" id="location" name="location"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
                        </div>
                    </div>

                    <!-- Interest Type -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Interest Type: *</label>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-3">
                            <label class="flex items-center space-x-3">
                                <input type="radio" name="interest_type" value="purchase" class="text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Purchase</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="radio" name="interest_type" value="rental" class="text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Rental</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="radio" name="interest_type" value="assessment" class="text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Assessment</span>
                            </label>
                        </div>
                    </div>

                    <!-- Additional Information -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-2" for="message">Additional Information</label>
                        <textarea id="message" name="message" rows="4"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent"
                            placeholder="Please describe your specific needs, room layout, or any questions about the Maxi Sky 2 system..."></textarea>
                    </div>

                    <!-- Submit Button -->
                    <div class="text-center">
                        <button type="submit"
                            class="inline-flex items-center px-6 py-3 bg-primary text-white rounded-lg hover:bg-primary-dark transition duration-300">
                            Submit Quote Request
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

    <!-- Assessment Form Section -->
    <section id="assessment" class="py-12 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto">
                <h2 class="text-3xl font-bold text-center text-gray-800 mb-4">Are You Interested Having This Product Installed</h2>
                <p class="text-lg text-center text-gray-600 mb-8">We are Here For You - We're here to listen, help and provide insights.</p>

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
                    <input type="hidden" id="product_name" name="product_name"
                        value="Home2stay Maxi Sky 2 Ceiling Lift Solution">

                    <!-- Product Info Section -->
                    <div class="mb-6">
                        <h4 class="text-lg font-semibold mb-4 text-primary">Product Information</h4>
                        <div class="p-3 bg-gray-50 rounded-lg mb-4">
                            <p>You're requesting a quote for: <span class="font-semibold text-primary">Home2stay Maxi Sky 2 Ceiling Lift Solution</span></p>
                        </div>
                    </div>

                    <!-- Timeframe Section -->
                    <div class="mb-6">
                        <h4 class="text-lg font-semibold mb-3 text-primary">When are you looking to get this system?</h4>
                        <div class="space-y-2">
                            <label class="flex items-center">
                                <input type="radio" name="timeframe" value="immediately" class="mr-2" checked>
                                <span>As soon as possible</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="timeframe" value="1-3months" class="mr-2">
                                <span>In the next 1-3 months</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="timeframe" value="3-6months" class="mr-2">
                                <span>In the next 3-6 months</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="timeframe" value="just-inquiring" class="mr-2">
                                <span>Just inquiring</span>
                            </label>
                        </div>
                    </div>

                    <!-- Interest Type Section -->
                    <div class="mb-6">
                        <h4 class="text-lg font-semibold mb-3 text-primary">What are you interested in?</h4>
                        <div class="space-y-2">
                            <label class="flex items-center">
                                <input type="radio" name="interest_type" value="purchase" class="mr-2" checked>
                                <span>Purchase System</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="interest_type" value="rental" class="mr-2">
                                <span>Rental Option</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="interest_type" value="both" class="mr-2">
                                <span>Both Purchase and Rental Information</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="interest_type" value="assessment" class="mr-2">
                                <span>Assessment Only</span>
                            </label>
                        </div>
                    </div>

                    <!-- Contact Information -->
                    <div class="mb-6">
                        <h4 class="text-lg font-semibold mb-4 text-primary">Your Contact Information</h4>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="firstName" class="block text-sm font-medium text-gray-700 mb-1">First Name*</label>
                                <input type="text" id="firstName" name="first_name" required
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                            </div>
                            <div>
                                <label for="lastName" class="block text-sm font-medium text-gray-700 mb-1">Last Name*</label>
                                <input type="text" id="lastName" name="last_name" required
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                            </div>
                        </div>

                        <div class="mt-4">
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email*</label>
                            <input type="email" id="email" name="email" required
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                        </div>

                        <div class="mt-4">
                            <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Phone Number*</label>
                            <input type="tel" id="phone" name="phone" required
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                        </div>

                        <div class="mt-4">
                            <label for="comments" class="block text-sm font-medium text-gray-700 mb-1">Additional Details</label>
                            <textarea id="comments" name="comments" rows="3"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent"
                                placeholder="Please describe your specific needs, room layout, or any questions about the Maxi Sky 2 system..."></textarea>
                        </div>
                    </div>

                    <div class="mt-6 flex justify-end">
                        <button type="submit"
                            class="bg-primary hover:bg-primary-dark text-white px-6 py-2 rounded-md font-medium transition duration-300">
                            Submit Quote Request
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Image Modal -->
    <div id="imageModal"
        class="fixed inset-0 z-50 hidden overflow-auto bg-black bg-opacity-75 flex items-center justify-center p-4">
        <div class="relative bg-white rounded-lg max-w-2xl w-full mx-auto max-h-[90vh] overflow-y-auto">
            <!-- Modal Header -->
            <div class="bg-primary text-white p-4 rounded-t-lg flex justify-between items-center sticky top-0 z-10">
                <h3 class="text-xl font-bold">Image</h3>
                <button id="closeModal" class="text-white hover:text-gray-200 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <!-- Modal Body -->
            <div class="p-6">
                <img id="modalImage" src="" alt="Modal Image" class="w-full h-auto">
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