@extends('layouts.app')

@section('title', 'Home2stay Sentrel Systems Showers - Solid Surface Shower Wall Panels Vancouver')
@section('meta_description', 'content="Home2stay offers Sentrel Systems Showers — durable, mold-resistant solid surface shower wall panels. No grout, easy maintenance, and stylish finishes for bathroom renovations in Vancouver.')

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
                                <a href="{{ route('products.category', 'barrier-free-bathrooms') }}"
                                    class="ml-1 text-white hover:text-gray-200">
                                    Barrier-Free Bathrooms
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
                                <span class="ml-1 font-medium text-gray-100">Sentrel Systems Showers</span>
                            </div>
                        </li>
                    </ol>
                </nav>
                <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-4">Sentrel Systems Showers</h1>
                <div class="flex items-center mb-4">
                    <div class="flex text-yellow-400">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                    </div>
                    <span class="ml-2 text-sm">Based on reviews</span>
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
                        <img src="{{ asset('al-prod-page-imgs/Sentrel-hospitality.webp') }}"
                            alt="Home2stay Sentrel Systems Showers" class="w-full h-auto object-contain p-10">
                    </div>
                    <!-- Request Quote Button -->
                    <div class="text-center mt-4 mb-6">
                        <button id="quoteRequestBtn"
                            class="px-6 py-3 bg-secondary text-white font-medium rounded-lg hover:bg-secondary-dark transition duration-300 mr-4">
                            Request A Purchase Quote
                        </button>
                    </div>
                </div>

                <!-- Product Info -->
                <div class="w-full lg:w-1/2">
                    <div class="mb-6">
                        <p class="text-gray-600 text-lg">
                            Sentrel Systems Showers are solid surface shower wall panels designed for homeowners who want a modern, low-maintenance bathroom without the hassle of traditional tiles or grout. These high-quality composite panels are built to resemble natural stone — with none of the upkeep.
                        </p>
                    </div>
                    <div class="mb-6">
                        <p class="text-gray-600 text-lg">
                            Suitable for both residential and light commercial applications, Sentrel Shower Systems are a smart upgrade for any bathroom renovation or main suite remodel.
                        </p>
                    </div>
                    <div class="mb-6">
                        <p class="text-gray-600 text-lg">
                            With no grout lines to worry about, these systems are naturally resistant to mold and mildew — making them easier to clean, more hygienic, and longer lasting than conventional tile showers.
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
                                        data-target="design-tab">
                                        Design Options
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
                                        data-target="delivery-tab">
                                        Installation & Setup
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
                                            <h3 class="font-semibold text-gray-800">Grout-Free Wall Panels</h3>
                                            <p class="text-gray-600">Large solid surface panels with minimal joints and seams eliminate grout lines entirely — meaning no mold, no mildew, and no scrubbing.</p>
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
                                            <h3 class="font-semibold text-gray-800">Mold & Mildew Resistant</h3>
                                            <p class="text-gray-600">Non-porous solid surface material prevents moisture absorption, making these showers inherently resistant to mold and mildew growth.</p>
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
                                            <h3 class="font-semibold text-gray-800">Durable Solid Surface Construction</h3>
                                            <p class="text-gray-600">Built with high-tech composite panels that resist chipping, cracking, and water damage — far outlasting traditional tile systems.</p>
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
                                            <h3 class="font-semibold text-gray-800">Compatible with Major Fixture Brands</h3>
                                            <p class="text-gray-600">Works seamlessly with leading fixture brands including Kohler, Moen, Delta, and American Standard for a fully coordinated bathroom look.</p>
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
                                            <h3 class="font-semibold text-gray-800">Eco-Friendly Materials</h3>
                                            <p class="text-gray-600">Manufactured using sustainable practices aligned with industry standards, making it a responsible choice for environmentally conscious homeowners.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Design Options Tab -->
                            <div class="tab-pane" data-tab="design-tab" style="display: none !important;">
                                <div class="space-y-4">
                                    <p class="text-gray-600">Sentrel Shower Systems are available in a wide range of colors and finishes designed to replicate the look of natural stone — including granite and marble styles — without the cost or maintenance.</p>

                                    <div class="flex items-start">
                                        <svg class="h-5 w-5 text-primary flex-shrink-0 mr-3 mt-1"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <div>
                                            <h3 class="font-semibold text-gray-800">Stone-Look Finishes</h3>
                                            <p class="text-gray-600">Choose from granite and marble-inspired finishes that deliver the elegance of natural stone without the upkeep.</p>
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
                                            <h3 class="font-semibold text-gray-800">Multiple Colour Options</h3>
                                            <p class="text-gray-600">A broad colour palette allows you to match your shower walls to your existing fixtures and overall bathroom aesthetic.</p>
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
                                            <h3 class="font-semibold text-gray-800">Fixture Coordination</h3>
                                            <p class="text-gray-600">Panels are compatible with Kohler, Moen, Delta, and American Standard fixtures, so your accessories and shower walls can work together seamlessly.</p>
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
                                            <h3 class="font-semibold text-gray-800">Various Sizes Available</h3>
                                            <p class="text-gray-600">Panels come in multiple sizes to suit different shower configurations — from compact ensuite bathrooms to larger master suite renovations.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- More Images Tab -->
                            <div class="tab-pane" data-tab="images-tab" style="display: none !important;">
                                <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                                    <div class="image-thumbnail cursor-pointer">
                                        <img src="{{ asset('al-prod-page-imgs/Sentrel-hospitality.webp') }}"
                                            alt="Sentrel Systems Showers"
                                            class="w-full h-32 object-contain rounded-lg hover:opacity-90 transition duration-200 p-4 bg-gray-50">
                                    </div>
                                </div>
                            </div>

                            <!-- Installation & Setup Tab -->
                            <div class="tab-pane" data-tab="delivery-tab" style="display: none !important;">
                                <div class="space-y-4">
                                    <div class="border-l-4 border-primary pl-4">
                                        <h3 class="font-semibold text-gray-800">Step 1: Assessment & Measurement</h3>
                                        <p class="text-gray-600">Our professional installers begin by measuring the shower area to ensure wall panels fit correctly and align with your existing plumbing fixtures from brands like Kohler and Moen.</p>
                                    </div>
                                    <div class="border-l-4 border-primary pl-4">
                                        <h3 class="font-semibold text-gray-800">Step 2: Surface Preparation</h3>
                                        <p class="text-gray-600">Existing tiles or wall surfaces are removed and the substructure is inspected for any damage. Any necessary repairs are completed before installation begins.</p>
                                    </div>
                                    <div class="border-l-4 border-primary pl-4">
                                        <h3 class="font-semibold text-gray-800">Step 3: Panel Installation</h3>
                                        <p class="text-gray-600">Solid surface panels are applied to the walls. Sentrel's large-format panel design means fewer joints to seal compared to traditional tile — speeding up installation and improving water-tightness.</p>
                                    </div>
                                    <div class="border-l-4 border-primary pl-4">
                                        <h3 class="font-semibold text-gray-800">Step 4: Fixture Integration</h3>
                                        <p class="text-gray-600">Shower heads, valves, and accessories from brands such as Delta, American Standard, or Moen are installed and properly sealed into the panels.</p>
                                    </div>
                                    <div class="border-l-4 border-primary pl-4">
                                        <h3 class="font-semibold text-gray-800">Step 5: Final Inspection</h3>
                                        <p class="text-gray-600">Once installed, the full system is inspected to confirm it is water-tight and correctly aligned. We walk you through care and maintenance before we leave.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Technical Information -->
                            <div class="tab-pane" data-tab="technical-tab" style="display: none !important;">
                                <div class="mb-6">
                                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Technical Information</h3>
                                    <ul class="space-y-2">
                                        <li class="flex items-start">
                                            <svg class="h-5 w-5 text-primary flex-shrink-0 mr-2 mt-0.5"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <span>High-quality composite solid surface panels</span>
                                        </li>
                                        <li class="flex items-start">
                                            <svg class="h-5 w-5 text-primary flex-shrink-0 mr-2 mt-0.5"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <span>Non-porous, water-resistant surface — no grout required</span>
                                        </li>
                                        <li class="flex items-start">
                                            <svg class="h-5 w-5 text-primary flex-shrink-0 mr-2 mt-0.5"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <span>Mold and mildew resistant by design</span>
                                        </li>
                                        <li class="flex items-start">
                                            <svg class="h-5 w-5 text-primary flex-shrink-0 mr-2 mt-0.5"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <span>Compatible with Kohler, Moen, Delta & American Standard fixtures</span>
                                        </li>
                                        <li class="flex items-start">
                                            <svg class="h-5 w-5 text-primary flex-shrink-0 mr-2 mt-0.5"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <span>Suitable for residential and light commercial use</span>
                                        </li>
                                        <li class="flex items-start">
                                            <svg class="h-5 w-5 text-primary flex-shrink-0 mr-2 mt-0.5"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <span>Eco-friendly manufacturing aligned with NAHB sustainability standards</span>
                                        </li>
                                        <li class="flex items-start">
                                            <svg class="h-5 w-5 text-primary flex-shrink-0 mr-2 mt-0.5"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <span>Faster installation than traditional tile — reducing labour costs</span>
                                        </li>
                                    </ul>
                                </div>

                                <div class="mb-8">
                                    <div class="bg-gray-50 rounded-lg p-4">
                                        <div class="flex items-center justify-between mb-2">
                                            <h3 class="text-xl font-semibold text-gray-800">Supplier</h3>
                                            <span class="text-sm text-gray-800">Sentrel Systems</span>
                                        </div>
                                        <div class="flex items-center justify-between mb-2">
                                            <h3 class="text-xl font-semibold text-gray-800">Warranty</h3>
                                            <span class="text-sm text-gray-800">Manufacturer warranty on materials & workmanship</span>
                                        </div>
                                        <div class="flex items-center justify-between mb-2">
                                            <h3 class="text-xl font-semibold text-gray-800">Purchase Pricing</h3>
                                            <span class="text-sm text-gray-800">Contact us for a quote</span>
                                        </div>
                                        <div class="flex items-center justify-between mb-2">
                                            <h3 class="text-xl font-semibold text-gray-800">Call Us</h3>
                                            <a href="tel:+16042591211" class="text-secondary">
                                                <span class="text-sm text-gray-800">604-259-1211</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Maintenance Tips -->
                                <div class="bg-blue-50 rounded-lg p-4">
                                    <h3 class="text-lg font-semibold text-gray-800 mb-3">Maintenance & Cleaning Tips</h3>
                                    <ul class="space-y-2 text-gray-600">
                                        <li class="flex items-start">
                                            <svg class="h-4 w-4 text-primary flex-shrink-0 mr-2 mt-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                            </svg>
                                            <span>Clean regularly with a gentle, non-abrasive cleaner and a soft cloth</span>
                                        </li>
                                        <li class="flex items-start">
                                            <svg class="h-4 w-4 text-primary flex-shrink-0 mr-2 mt-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                            </svg>
                                            <span>Avoid abrasive pads or harsh chemicals that may scratch the surface</span>
                                        </li>
                                        <li class="flex items-start">
                                            <svg class="h-4 w-4 text-primary flex-shrink-0 mr-2 mt-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                            </svg>
                                            <span>Rinse thoroughly after each use to prevent soap buildup</span>
                                        </li>
                                        <li class="flex items-start">
                                            <svg class="h-4 w-4 text-primary flex-shrink-0 mr-2 mt-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                            </svg>
                                            <span>Periodically check seals around fixtures to maintain water resistance</span>
                                        </li>
                                    </ul>
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
                        <h2 class="text-3xl font-bold text-gray-800 mb-4">Interested in a Sentrel Shower for Your Home?</h2>
                        <p class="text-lg text-gray-600 mb-6">Our team will help you find the right style, size, and finish for your bathroom renovation — and handle the full installation from start to finish.</p>
                        <p class="mb-5">Give us a call at <b><a href="tel:+16042591211" style="color:red;">604-259-1211</a></b> or submit a FREE <b><a href="#assessment" style="color:red;">ASSESSMENT FORM</a></b> to get started.</p>
                    </div>
                    <!-- Image -->
                    <div class="w-full lg:w-1/2">
                        <img src="{{ asset('al-prod-page-imgs/sentrel-installation.png') }}" alt="Sentrel Systems Shower Installation"
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
                    <input type="hidden" name="product" value="Home2stay Sentrel Systems Showers">
                    
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
                        <label class="block text-gray-700 font-medium mb-2">I'm interested in: *</label>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-3">
                            <label class="flex items-center space-x-3">
                                <input type="radio" name="interest_type" value="purchase" class="text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Purchasing</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="radio" name="interest_type" value="information" class="text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">More Information</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="radio" name="interest_type" value="assessment" class="text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Free Assessment</span>
                            </label>
                        </div>
                    </div>

                    <!-- Additional Information -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-2" for="message">Additional Information</label>
                        <textarea id="message" name="message" rows="4"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent"
                            placeholder="Please share any specific requirements, questions, or timeline..."></textarea>
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
                <h2 class="text-3xl font-bold text-center text-gray-800 mb-4">Schedule a Free Assessment</h2>
                <p class="text-lg text-center text-gray-600 mb-8">Our accessibility specialists will assess your bathroom and help you find the right Sentrel shower style, size, and finish for your renovation.</p>

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
                <h3 class="text-xl font-bold">Request a Purchase Quote</h3>
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
                        value="Home2stay Sentrel Systems Showers">

                    <!-- Product Info Section -->
                    <div class="mb-6">
                        <h4 class="text-lg font-semibold mb-4 text-primary">Product Information</h4>
                        <div class="p-3 bg-gray-50 rounded-lg mb-4">
                            <p>You're requesting a quote for: <span class="font-semibold text-primary">Sentrel Systems Showers</span></p>
                        </div>
                    </div>

                    <!-- Timeframe Section -->
                    <div class="mb-6">
                        <h4 class="text-lg font-semibold mb-3 text-primary">When are you looking to purchase?</h4>
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

                    <!-- For Whom Section -->
                    <div class="mb-6">
                        <h4 class="text-lg font-semibold mb-3 text-primary">Who will be using this product?</h4>
                        <div class="space-y-2">
                            <label class="flex items-center">
                                <input type="radio" name="for_whom" value="self" class="mr-2" checked>
                                <span>Myself</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="for_whom" value="familyMember" class="mr-2">
                                <span>Family member</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="for_whom" value="client" class="mr-2">
                                <span>Client/Patient</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="for_whom" value="other" class="mr-2">
                                <span>Other</span>
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
                            <label for="modal_email" class="block text-sm font-medium text-gray-700 mb-1">Email*</label>
                            <input type="email" id="modal_email" name="email" required
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                        </div>

                        <div class="mt-4">
                            <label for="modal_phone" class="block text-sm font-medium text-gray-700 mb-1">Phone Number*</label>
                            <input type="tel" id="modal_phone" name="phone" required
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                        </div>

                        <div class="mt-4">
                            <label for="comments" class="block text-sm font-medium text-gray-700 mb-1">Additional Comments</label>
                            <textarea id="comments" name="comments" rows="3"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent"></textarea>
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

            const imageThumbnails = document.querySelectorAll('.image-thumbnail');

            if (imageThumbnails.length > 0 && imageModal) {
                imageThumbnails.forEach(function (thumbnail) {
                    thumbnail.addEventListener('click', function () {
                        const imgSrc = this.querySelector('img').src;
                        const imgAlt = this.querySelector('img').alt;

                        modalImage.src = imgSrc;
                        modalImage.alt = imgAlt;
                        imageModal.classList.remove('hidden');
                        document.body.style.overflow = 'hidden';
                    });
                });

                closeModal.addEventListener('click', function () {
                    imageModal.classList.add('hidden');
                    document.body.style.overflow = 'auto';
                });

                imageModal.addEventListener('click', function (event) {
                    if (event.target === imageModal) {
                        imageModal.classList.add('hidden');
                        document.body.style.overflow = 'auto';
                    }
                });

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
                quoteRequestBtn.addEventListener('click', function () {
                    quoteRequestModal.classList.remove('hidden');
                    document.body.style.overflow = 'hidden';
                });

                closeQuoteModal.addEventListener('click', function () {
                    quoteRequestModal.classList.add('hidden');
                    document.body.style.overflow = 'auto';
                });

                quoteRequestModal.addEventListener('click', function (event) {
                    if (event.target === quoteRequestModal) {
                        quoteRequestModal.classList.add('hidden');
                        document.body.style.overflow = 'auto';
                    }
                });

                document.addEventListener('keydown', function (event) {
                    if (event.key === 'Escape' && !quoteRequestModal.classList.contains('hidden')) {
                        quoteRequestModal.classList.add('hidden');
                        document.body.style.overflow = 'auto';
                    }
                });

                if (quoteRequestForm) {
                    quoteRequestForm.addEventListener('submit', function (e) {
                        e.preventDefault();
                        alert('Your quote request has been submitted! We will contact you shortly with pricing information.');
                        this.reset();
                        quoteRequestModal.classList.add('hidden');
                        document.body.style.overflow = 'auto';
                    });
                }
            }
        });
    </script>
@endpush