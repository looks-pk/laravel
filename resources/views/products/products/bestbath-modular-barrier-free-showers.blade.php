@extends('layouts.app')

@section('title', 'Best Bath Modular Barrier-Free Showers - Home2Stay')
@section('meta_description', 'Home2Stay is a certified distributor and installer of Best Bath modular barrier-free showers in British Columbia. ADA-compliant, roll-in accessible, zero-threshold design, 30-year warranty. Get a free quote today.')

@section('content')

    <!-- Hero Section -->
    <section class="relative pt-16 pb-12 md:pt-24 md:pb-16 bg-gradient-to-r from-primary to-primary-dark text-white">
        <div class="container mx-auto px-4">
            <div class="flex flex-col items-start">
                <nav class="flex mb-4 text-sm" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 md:space-x-3">
                        <li class="inline-flex items-center">
                            <a href="{{ route('home') }}" class="text-white hover:text-gray-200">Home</a>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <svg class="w-3 h-3 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg>
                                <a href="{{ route('products.index') }}" class="ml-1 text-white hover:text-gray-200">Products</a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <svg class="w-3 h-3 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg>
                                <a href="{{ route('products.category', 'barrier-free-bathrooms') }}" class="ml-1 text-white hover:text-gray-200">Barrier-Free Bathrooms</a>
                            </div>
                        </li>
                        <li aria-current="page">
                            <div class="flex items-center">
                                <svg class="w-3 h-3 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg>
                                <span class="ml-1 font-medium text-gray-100">Best Bath Modular Barrier-Free Showers</span>
                            </div>
                        </li>
                    </ol>
                </nav>
                <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-4">Best Bath Modular Barrier-Free Showers</h1>
                <div class="flex items-center mb-4">
                    <div class="flex text-yellow-400">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>
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
                        <img src="{{ asset('al-prod-page-imgs/141-1200x800-1-1024x683-min.jpg') }}"
                            alt="Best Bath Modular Barrier-Free Shower - Home2Stay BC" class="w-full h-auto object-cover">
                    </div>
                    <!-- Request Quote Button -->
                    <div class="text-center mt-4 mb-6">
                        <button id="quoteRequestBtn"
                            class="px-6 py-3 bg-secondary text-white font-medium rounded-lg hover:bg-secondary-dark transition duration-300">
                            Request A Purchase Quote
                        </button>
                    </div>
                </div>

                <!-- Product Info -->
                <div class="w-full lg:w-1/2">
                    <div class="mb-6">
                        <p class="text-gray-600 text-lg">
                            Barrier-free showers are modern shower systems designed without raised edges or thresholds, allowing smooth, safe entry and exit for users of all abilities. Best Bath Modular Barrier-Free Showers are prefabricated shower systems — manufactured to precise specifications off-site and installed efficiently — making them the top choice for accessible shower systems and universal bathroom design across British Columbia.
                        </p>
                    </div>
                    <div class="mb-6">
                        <p class="text-gray-600 text-lg">
                            Unlike traditional showers that include raised curbs or bathtub surrounds posing tripping hazards, Best Bath walk-in showers and low-threshold designs eliminate these barriers entirely. Home2Stay is a certified distributor and installer of Best Bath Intelligent Designs, providing professional shower installation services across Vancouver, Surrey, Burnaby, Coquitlam, Langley, Abbotsford, and the wider BC region.
                        </p>
                    </div>
                    <div class="mb-6">
                        <p class="text-gray-600 text-lg font-semibold">
                            Why Best Bath Modular Barrier-Free Showers Are The #1 Choice For Accessible Bathrooms In BC:
                        </p>
                    </div>
                    <div class="mb-6">
                        <p class="text-gray-600 text-lg">
                            Best Bath modular showers combine zero-threshold entry, full plywood-backed walls, ADA-compliant design, and customizable safety accessories into one cohesive, code-compliant solution. Their pre-engineered modular construction reduces installation complexity and time compared to traditional tile showers — making them ideal for both renovations and new construction projects where efficiency and accessibility matter.
                        </p>
                    </div>

                    <!-- Product Tabs Section -->
                    <div class="mb-8 product-tabs">
                        <!-- Tab Navigation -->
                        <div class="mb-6">
                            <ul class="flex flex-wrap text-sm font-medium text-center border-b border-gray-200">
                                <li class="mr-2 mb-2">
                                    <button class="tab-button active inline-block p-4 border border-primary rounded-t-lg bg-white text-primary" data-target="features-tab">
                                        Features
                                    </button>
                                </li>
                                <li class="mr-2 mb-2">
                                    <button class="tab-button inline-block p-4 border border-gray-200 rounded-t-lg bg-gray-50 hover:text-gray-600 hover:bg-gray-100" data-target="applications-tab">
                                        Applications
                                    </button>
                                </li>
                                <li class="mr-2 mb-2">
                                    <button class="tab-button inline-block p-4 border border-gray-200 rounded-t-lg bg-gray-50 hover:text-gray-600 hover:bg-gray-100" data-target="images-tab">
                                        More Images
                                    </button>
                                </li>
                                <li class="mr-2 mb-2">
                                    <button class="tab-button inline-block p-4 border border-gray-200 rounded-t-lg bg-gray-50 hover:text-gray-600 hover:bg-gray-100" data-target="installation-tab">
                                        Installation Options
                                    </button>
                                </li>
                                <li>
                                    <button class="tab-button inline-block p-4 border border-gray-200 rounded-t-lg bg-gray-50 hover:text-gray-600 hover:bg-gray-100" data-target="technical-tab">
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
                                        <svg class="h-5 w-5 text-primary flex-shrink-0 mr-3 mt-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                        </svg>
                                        <div>
                                            <h3 class="font-semibold text-gray-800">Zero-Threshold Barrier-Free Entry</h3>
                                            <p class="text-gray-600">Best Bath showers feature a ¾" bevelled edge or fully flush zero-threshold base, allowing wheelchair users and those with limited mobility to roll in or step in safely — eliminating the dangerous curb that causes falls in traditional showers.</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <svg class="h-5 w-5 text-primary flex-shrink-0 mr-3 mt-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                        </svg>
                                        <div>
                                            <h3 class="font-semibold text-gray-800">Full Plywood-Backed Walls</h3>
                                            <p class="text-gray-600">Every wall panel includes full plywood backing, providing unbeatable structural strength across the entire unit. Grab bars, fold-down shower seats, handheld shower heads, and accessories can be mounted anywhere on the wall — no need to hunt for studs.</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <svg class="h-5 w-5 text-primary flex-shrink-0 mr-3 mt-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                        </svg>
                                        <div>
                                            <h3 class="font-semibold text-gray-800">Custom Sizes & Configurations</h3>
                                            <p class="text-gray-600">Best Bath modular showers come in a variety of sizes and configurations suitable for both small and large bathrooms. Whether you need a compact walk-in shower or a spacious layout for full wheelchair accessible design, these units can be customized to your exact space requirements.</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <svg class="h-5 w-5 text-primary flex-shrink-0 mr-3 mt-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                        </svg>
                                        <div>
                                            <h3 class="font-semibold text-gray-800">Slip-Resistant Flooring & Safety Features</h3>
                                            <p class="text-gray-600">Safety is built in at every level. Best Bath barrier-free showers include slip-resistant shower floors, reinforced walls for grab bar support, and optional built-in seating and handheld showerheads — essential features for handicap accessible bathrooms and senior living environments.</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <svg class="h-5 w-5 text-primary flex-shrink-0 mr-3 mt-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                        </svg>
                                        <div>
                                            <h3 class="font-semibold text-gray-800">ADA Compliant & Code-Ready</h3>
                                            <p class="text-gray-600">Best Bath modular showers meet or exceed ADA and ANSI A117.1 accessibility standards, making them suitable for residential and commercial applications alike. Every unit passes a rigorous 28-point quality inspection before shipment, and Home2Stay's certified installers ensure full compliance from day one.</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <svg class="h-5 w-5 text-primary flex-shrink-0 mr-3 mt-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                        </svg>
                                        <div>
                                            <h3 class="font-semibold text-gray-800">Durable, Low-Maintenance Materials</h3>
                                            <p class="text-gray-600">Constructed from high-quality fiberglass reinforced composite with smooth, non-porous surfaces, Best Bath modular showers resist mold, mildew, and cracking. Cleaning requires only mild, non-abrasive products — no grout lines to scrub, no harsh chemicals needed.</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <svg class="h-5 w-5 text-primary flex-shrink-0 mr-3 mt-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                        </svg>
                                        <div>
                                            <h3 class="font-semibold text-gray-800">30-Year Limited Warranty</h3>
                                            <p class="text-gray-600">Best Bath backs every shower with an industry-leading 30-year limited warranty covering manufacturing defects — the longest warranty in its class and a testament to the quality of American-made construction.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Applications Tab -->
                            <div class="tab-pane" data-tab="applications-tab" style="display: none !important;">
                                <div class="space-y-4">
                                    <h3 class="text-xl font-semibold text-gray-800 mb-4">Where Are Best Bath Barrier-Free Showers Used?</h3>

                                    <div class="bg-gray-50 rounded-lg p-4">
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                            <div class="space-y-3">
                                                <h4 class="font-medium text-gray-700">Ideal For:</h4>
                                                <ul class="space-y-1 text-gray-600">
                                                    <li>• Seniors aging in place at home</li>
                                                    <li>• Wheelchair and mobility aid users</li>
                                                    <li>• Individuals recovering from surgery or injury</li>
                                                    <li>• Multi-generational households</li>
                                                    <li>• Veterans with service-related disabilities</li>
                                                    <li>• Anyone planning ahead for long-term accessibility</li>
                                                </ul>
                                            </div>
                                            <div class="space-y-3">
                                                <h4 class="font-medium text-gray-700">Project Types:</h4>
                                                <ul class="space-y-1 text-gray-600">
                                                    <li>• Residential tub-to-shower conversions</li>
                                                    <li>• Existing shower upgrades</li>
                                                    <li>• New home construction</li>
                                                    <li>• Healthcare facilities &amp; hospitals</li>
                                                    <li>• Senior &amp; assisted living facilities</li>
                                                    <li>• Commercial &amp; institutional projects</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-6 space-y-3">
                                        <p class="text-gray-600"><strong class="text-gray-800">Residential Homes:</strong> Best Bath Modular Barrier-Free Showers are increasingly popular in BC homes for their sleek design and practical functionality. Perfect for homeowners seeking aging in place solutions or upgrading to a modern accessible walk-in shower, these units support universal bathroom design — usable by every family member regardless of age or ability.</p>
                                        <p class="text-gray-600"><strong class="text-gray-800">Healthcare Facilities &amp; Hospitals:</strong> Healthcare settings rely heavily on accessible shower systems. ADA-compliant modular shower units are commonly installed in hospitals and clinics for patient safety and ease of maintenance. Their hygienic non-porous surfaces and durable construction make prefabricated shower systems the practical choice in clinical environments.</p>
                                        <p class="text-gray-600"><strong class="text-gray-800">Senior &amp; Assisted Living Spaces:</strong> In senior living facilities, modular barrier-free showers are essential. They support resident independence while maintaining safety through slip-resistant flooring, grab bars, and fold-down seating — core features of any well-designed handicap accessible bathroom.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- More Images Tab -->
                            <div class="tab-pane" data-tab="images-tab" style="display: none !important;">
                                <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                                    <div class="image-thumbnail cursor-pointer">
                                        <img src="{{ asset('al-prod-page-imgs/141-1200x800-1-1024x683-min.jpg') }}"
                                            alt="Best Bath Barrier-Free Shower - Home2Stay"
                                            class="w-full h-32 object-cover rounded-lg hover:opacity-90 transition duration-200">
                                    </div>
                                </div>
                            </div>

                            <!-- Installation Options Tab -->
                            <div class="tab-pane" data-tab="installation-tab" style="display: none !important;">
                                <div class="space-y-4">
                                    <h3 class="text-xl font-semibold text-gray-800 mb-4">Installation Process &amp; Options</h3>

                                    <div class="space-y-4">
                                        <div class="border-l-4 border-primary pl-4">
                                            <h4 class="font-semibold text-gray-800">Pre-Fabricated Design Advantages</h4>
                                            <p class="text-gray-600">Components are manufactured to precise specifications off-site, ensuring a perfect fit during on-site assembly. This reduces errors and makes professional shower installation services significantly more efficient — especially for large-scale or multi-unit projects.</p>
                                        </div>
                                        <div class="border-l-4 border-primary pl-4">
                                            <h4 class="font-semibold text-gray-800">Exclusive Snap Joint Technology</h4>
                                            <p class="text-gray-600">Best Bath's multi-piece modular panels use snap joint assembly and fit through standard doorways — eliminating the need to widen entrances or remove walls. This makes them the ideal choice for existing bathroom renovations where single-piece units cannot be delivered.</p>
                                        </div>
                                        <div class="border-l-4 border-primary pl-4">
                                            <h4 class="font-semibold text-gray-800">Multiple Drain Locations</h4>
                                            <p class="text-gray-600">Available with center or end drain configurations to match your existing plumbing layout — reducing plumber time on-site and lowering your overall installation cost.</p>
                                        </div>
                                        <div class="border-l-4 border-primary pl-4">
                                            <h4 class="font-semibold text-gray-800">Time &amp; Cost Efficiency</h4>
                                            <p class="text-gray-600">Compared to traditional tile shower construction, modular barrier-free showers save both time and money. Faster installation means lower labour costs, while durable materials reduce long-term maintenance expenses — making Best Bath showers a cost-effective solution for residential and commercial projects alike.</p>
                                        </div>
                                        <div class="border-l-4 border-primary pl-4">
                                            <h4 class="font-semibold text-gray-800">Accessory Add-Ons at Any Time</h4>
                                            <p class="text-gray-600">Because all walls are full plywood-backed, grab bars, fold-down seats, handheld shower heads, and soap dishes can be added at installation or retrofitted later — no wall demolition required.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Technical Information Tab -->
                            <div class="tab-pane" data-tab="technical-tab" style="display: none !important;">
                                <div class="mb-6">
                                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Technical Specifications</h3>
                                    <ul class="space-y-2">
                                        <li class="flex items-start">
                                            <svg class="h-5 w-5 text-primary flex-shrink-0 mr-2 mt-0.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" /></svg>
                                            <span>Multiple size configurations available — from compact 36" x 36" to spacious 60" x 36" roll-in layouts</span>
                                        </li>
                                        <li class="flex items-start">
                                            <svg class="h-5 w-5 text-primary flex-shrink-0 mr-2 mt-0.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" /></svg>
                                            <span>Constructed from fiberglass reinforced composite (FRC) with gel-coat surface finish</span>
                                        </li>
                                        <li class="flex items-start">
                                            <svg class="h-5 w-5 text-primary flex-shrink-0 mr-2 mt-0.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" /></svg>
                                            <span>Full plywood backing on all wall panels for unlimited grab bar and accessory placement</span>
                                        </li>
                                        <li class="flex items-start">
                                            <svg class="h-5 w-5 text-primary flex-shrink-0 mr-2 mt-0.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" /></svg>
                                            <span>¾" bevelled threshold or zero-threshold base for barrier-free roll-in access</span>
                                        </li>
                                        <li class="flex items-start">
                                            <svg class="h-5 w-5 text-primary flex-shrink-0 mr-2 mt-0.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" /></svg>
                                            <span>Slip-resistant textured floor surface for enhanced safety</span>
                                        </li>
                                        <li class="flex items-start">
                                            <svg class="h-5 w-5 text-primary flex-shrink-0 mr-2 mt-0.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" /></svg>
                                            <span>Passes rigorous 28-point quality inspection before shipment</span>
                                        </li>
                                        <li class="flex items-start">
                                            <svg class="h-5 w-5 text-primary flex-shrink-0 mr-2 mt-0.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" /></svg>
                                            <span>Finish options: RealTile® (gel-coated tile-look) and Molten Stone (granite-style, UV/fire/chemical/stain resistant)</span>
                                        </li>
                                        <li class="flex items-start">
                                            <svg class="h-5 w-5 text-primary flex-shrink-0 mr-2 mt-0.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" /></svg>
                                            <span>Available accessories: grab bars, fold-down shower seat, handheld shower head, WaterStopper dam, soap dish, curtain rod &amp; heavy vinyl curtain</span>
                                        </li>
                                        <li class="flex items-start">
                                            <svg class="h-5 w-5 text-primary flex-shrink-0 mr-2 mt-0.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" /></svg>
                                            <span>Manufactured in the USA — 30-year limited warranty on manufacturing defects</span>
                                        </li>
                                    </ul>
                                </div>

                                <div class="mb-8">
                                    <div class="bg-gray-50 rounded-lg p-4">
                                        <div class="flex items-center justify-between mb-2">
                                            <h3 class="text-xl font-semibold text-gray-800">Supplier</h3>
                                            <span class="text-sm text-gray-800">Best Bath Intelligent Designs (distributed by Home2Stay)</span>
                                        </div>
                                        <div class="flex items-center justify-between mb-2">
                                            <h3 class="text-xl font-semibold text-gray-800">Origin</h3>
                                            <span class="text-sm text-gray-800">Made in the USA</span>
                                        </div>
                                        <div class="flex items-center justify-between mb-2">
                                            <h3 class="text-xl font-semibold text-gray-800">Warranty</h3>
                                            <span class="text-sm text-gray-800">30-Year Limited Warranty</span>
                                        </div>
                                        <div class="flex items-center justify-between mb-2">
                                            <h3 class="text-xl font-semibold text-gray-800">Pricing</h3>
                                            <span class="text-sm text-gray-800">Contact us for a quote</span>
                                        </div>
                                        <div class="flex items-center justify-between mb-2">
                                            <h3 class="text-xl font-semibold text-gray-800">Call Us</h3>
                                            <a href="tel:+16042591211">
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
    <div id="imageModal" class="fixed inset-0 z-50 hidden overflow-auto bg-black bg-opacity-75 flex items-center justify-center p-4">
        <div class="relative bg-white rounded-lg max-w-4xl w-full mx-auto">
            <button id="closeModal" class="absolute top-2 right-2 text-white hover:text-gray-300 bg-gray-800 bg-opacity-75 hover:bg-opacity-100 p-1 rounded-full transition-all duration-200">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
            <div class="p-4">
                <img id="modalImage" src="" alt="Large product image" class="w-full h-auto">
            </div>
        </div>
    </div>

    <!-- ============================================================
         SEO CONTENT SECTIONS
         Order: Benefits → Features Deep-Dive → Why Choose →
                Maintenance → How to Choose → CTA
    ============================================================= -->

    <!-- Benefits Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-5xl mx-auto">
                <h2 class="text-3xl font-bold text-gray-800 mb-4 text-center">Benefits of Best Bath Modular Barrier-Free Showers</h2>
                <p class="text-lg text-gray-600 text-center mb-12">Best Bath Modular Barrier-Free Showers offer enhanced safety, easy installation, long-lasting durability, and improved accessibility — making them the leading choice for accessible shower systems across British Columbia.</p>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-white rounded-xl shadow-sm p-6 border-t-4 border-primary">
                        <div class="flex items-center mb-4">
                            <div class="bg-primary bg-opacity-10 rounded-full p-3 mr-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-semibold text-gray-800">Accessibility &amp; Safety</h3>
                        </div>
                        <p class="text-gray-600">Designed specifically for handicap accessible bathrooms, Best Bath barrier-free showers feature ADA-compliant layouts, grab bar support, and slip-resistant shower floors that significantly reduce the risk of slips and falls — providing peace of mind for users and families alike.</p>
                    </div>

                    <div class="bg-white rounded-xl shadow-sm p-6 border-t-4 border-primary">
                        <div class="flex items-center mb-4">
                            <div class="bg-primary bg-opacity-10 rounded-full p-3 mr-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-semibold text-gray-800">Easy Installation</h3>
                        </div>
                        <p class="text-gray-600">As prefabricated shower systems, Best Bath modular units are faster and easier to install than traditional tile showers. Professional shower installation services from Home2Stay can complete most projects in a fraction of the time — an especially important advantage for barrier-free shower systems in Vancouver, where efficient construction timelines matter.</p>
                    </div>

                    <div class="bg-white rounded-xl shadow-sm p-6 border-t-4 border-primary">
                        <div class="flex items-center mb-4">
                            <div class="bg-primary bg-opacity-10 rounded-full p-3 mr-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-semibold text-gray-800">Durability &amp; Low Maintenance</h3>
                        </div>
                        <p class="text-gray-600">Built from high-quality fiberglass reinforced materials that resist mold, mildew, and cracking, Best Bath modular shower units deliver long-lasting performance with minimal upkeep. Their smooth, non-porous surfaces are easy to clean, eliminating the need for harsh chemicals or intensive maintenance routines.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Deep-Dive Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-5xl mx-auto">
                <h2 class="text-3xl font-bold text-gray-800 mb-4 text-center">Features of Best Bath Modular Shower Systems</h2>
                <p class="text-lg text-gray-600 text-center mb-12">Every Best Bath modular barrier-free shower is designed to balance safety, compliance, and visual appeal — giving you a bathroom that works for everyone without compromising on style.</p>

                <div class="space-y-8">
                    <div class="flex flex-col md:flex-row gap-6 items-start p-6 bg-gray-50 rounded-xl">
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 bg-primary rounded-full flex items-center justify-center text-white font-bold text-lg">1</div>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-gray-800 mb-2">Custom Sizes and Configurations</h3>
                            <p class="text-gray-600">One of the defining characteristics of Best Bath Modular Barrier-Free Showers is their flexibility. These systems come in a variety of sizes and configurations, making them suitable for both small and large bathrooms. Whether you need compact walk-in showers or spacious layouts for full wheelchair accessible design, Best Bath modular showers can be configured to meet your exact needs and fit your existing space dimensions.</p>
                        </div>
                    </div>

                    <div class="flex flex-col md:flex-row gap-6 items-start p-6 bg-gray-50 rounded-xl">
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 bg-primary rounded-full flex items-center justify-center text-white font-bold text-lg">2</div>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-gray-800 mb-2">ADA Compliance and Accessibility Standards</h3>
                            <p class="text-gray-600">Best Bath modular showers are designed to meet strict ADA and ANSI A117.1 accessibility guidelines, ensuring safe and legal use for individuals with disabilities. This focus on code compliance ensures that barrier-free shower systems in Vancouver and across BC meet all legal requirements while providing superior usability for residents, patients, and guests.</p>
                        </div>
                    </div>

                    <div class="flex flex-col md:flex-row gap-6 items-start p-6 bg-gray-50 rounded-xl">
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 bg-primary rounded-full flex items-center justify-center text-white font-bold text-lg">3</div>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-gray-800 mb-2">Slip-Resistant Flooring and Safety Options</h3>
                            <p class="text-gray-600">Safety is a built-in priority in every Best Bath barrier-free shower. Features such as slip-resistant shower floors, reinforced grab bar walls, and optional built-in seating significantly enhance user confidence. These bathroom safety features are especially critical in handicap accessible bathrooms and senior living environments where reducing fall risk is the top concern. Optional handheld showerheads and adjustable fixtures provide additional convenience for users with limited reach or mobility.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-5xl mx-auto">
                <h2 class="text-3xl font-bold text-gray-800 mb-4 text-center">Why Choose Best Bath for Modular Barrier-Free Showers?</h2>
                <p class="text-lg text-gray-600 text-center mb-12">Home2Stay provides certified Best Bath distribution and installation services across British Columbia — combining manufacturer quality with local expertise.</p>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-white rounded-xl p-6 shadow-sm">
                        <h3 class="text-lg font-semibold text-gray-800 mb-3">Quality Materials &amp; Expertise</h3>
                        <p class="text-gray-600">Best Bath modular showers are known for their superior construction quality. Built from durable fiberglass reinforced composite materials, these modular shower units withstand daily use while maintaining their appearance over decades. This commitment to quality ensures long-term value and reliable performance for every installation.</p>
                    </div>
                    <div class="bg-white rounded-xl p-6 shadow-sm">
                        <h3 class="text-lg font-semibold text-gray-800 mb-3">Wide Range of Design Options</h3>
                        <p class="text-gray-600">From minimalist modern designs to more elaborate layouts, Best Bath modular showers offer a wide variety of styles, finishes, and colour options. This flexibility allows homeowners and businesses to create barrier-free showers that complement their existing décor and integrate seamlessly into any universal bathroom design concept.</p>
                    </div>
                    <div class="bg-white rounded-xl p-6 shadow-sm">
                        <h3 class="text-lg font-semibold text-gray-800 mb-3">Trusted Industry Experience</h3>
                        <p class="text-gray-600">With decades of experience manufacturing prefabricated shower systems, Best Bath has established itself as a trusted industry name. Their expertise ensures reliable performance and consistent customer satisfaction — particularly important for barrier-free shower systems in Vancouver and BC, where quality and code compliance are non-negotiable.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Maintenance Tips Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-5xl mx-auto">
                <h2 class="text-3xl font-bold text-gray-800 mb-4 text-center">Maintenance &amp; Cleaning Tips</h2>
                <p class="text-lg text-gray-600 text-center mb-12">Best Bath barrier-free showers are designed for easy, low-effort maintenance. Follow these simple practices to keep your accessible shower system performing like new.</p>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="bg-gray-50 rounded-xl p-6">
                        <div class="flex items-center mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary mr-3 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <h3 class="text-lg font-semibold text-gray-800">Daily Cleaning Practices</h3>
                        </div>
                        <p class="text-gray-600">Maintaining barrier-free showers is straightforward. Regular cleaning with mild, non-abrasive products preserves the surface of slip-resistant shower floors and smooth wall panels. Keeping the shower dry and well-ventilated after each use prevents mold buildup, ensuring a consistently hygienic environment in your accessible shower system.</p>
                    </div>
                    <div class="bg-gray-50 rounded-xl p-6">
                        <div class="flex items-center mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary mr-3 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                            </svg>
                            <h3 class="text-lg font-semibold text-gray-800">Long-Term Care Tips</h3>
                        </div>
                        <p class="text-gray-600">For long-term performance, periodically inspect fixtures, seals, and drain connections. Best Bath modular shower units require minimal upkeep, but routine checks can significantly extend their lifespan. Using appropriate cleaning techniques and avoiding abrasive tools ensures your shower remains in excellent condition for the life of the 30-year warranty.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How to Choose Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-3xl font-bold text-gray-800 mb-6 text-center">Choosing the Right Barrier-Free Shower for Your Needs</h2>
                <p class="text-lg text-gray-600 mb-6">Choosing the right Best Bath Modular Barrier-Free Shower depends on your specific requirements — including available space, accessibility needs, and design preferences. Whether you're upgrading a home bathroom in Vancouver or outfitting a commercial or healthcare facility in BC, these showers provide a reliable, stylish, and future-ready solution.</p>
                <p class="text-lg text-gray-600 mb-6">With benefits like faster installation, enhanced safety features, ADA compliance, and a wide range of customizable designs, modular barrier-free showers are a smart long-term investment. By incorporating features like ADA-compliant layouts, walk-in entries, and accessible shower systems, you can create a bathroom that is both fully functional today and ready for whatever the future brings.</p>
                <p class="text-lg text-gray-600">Home2Stay's certified team is here to guide you through every step — from assessing your bathroom and selecting the right Best Bath configuration, to professional installation and post-install support across the Greater Vancouver area and British Columbia.</p>
            </div>
        </div>
    </section>

    <!-- Featured CTA Section -->
    <section class="py-16 bg-primary">
        <div class="container mx-auto px-4">
            <div class="bg-gray-50 rounded-xl overflow-hidden shadow-lg">
                <div class="flex flex-col lg:flex-row">
                    <div class="w-full lg:w-1/2 p-8 md:p-12 flex flex-col justify-center">
                        <h2 class="text-3xl font-bold text-gray-800 mb-4">BC's Certified Best Bath Installer</h2>
                        <p class="text-lg text-gray-600 mb-6">Home2Stay has been providing accessibility solutions across British Columbia for nearly a decade. As a certified Best Bath distributor and installer, we're the trusted local expert for barrier-free shower systems in Vancouver, Surrey, Burnaby, Coquitlam, Langley, Abbotsford, and surrounding areas.</p>
                        <p class="mb-5">Give us a call at <a href="tel:+16042591211" style="font-weight: bold; color:red;">604-259-1211</a> or submit a FREE <a href="#assessment" style="font-weight: bold; color:red;">ASSESSMENT FORM</a> to get started.</p>
                    </div>
                    <div class="w-full lg:w-1/2">
                        <img src="{{ asset('al-prod-page-imgs/Rectangle 320-min.png') }}" alt="Best Bath Barrier-Free Shower - Home2Stay BC"
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
                    <input type="hidden" name="product" value="Best Bath Modular Barrier-Free Showers">

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

                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Project Type: *</label>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-3">
                            <label class="flex items-center space-x-3">
                                <input type="radio" name="project_type" value="residential_remodel" class="text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Tub-to-Shower Conversion</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="radio" name="project_type" value="new_construction" class="text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">New Construction</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="radio" name="project_type" value="not_sure" class="text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Not Sure</span>
                            </label>
                        </div>
                    </div>

                    <div>
                        <label class="block text-gray-700 font-medium mb-2" for="message">Additional Information</label>
                        <textarea id="message" name="message" rows="4"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent"
                            placeholder="Please describe your accessibility needs, bathroom dimensions, mobility requirements, or any preferred Best Bath accessories..."></textarea>
                    </div>

                    <div class="text-center">
                        <button type="submit"
                            class="inline-flex items-center px-6 py-3 bg-primary text-white rounded-lg hover:bg-primary-dark transition duration-300">
                            Submit Quote Request
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
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
                <h2 class="text-3xl font-bold text-center text-gray-800 mb-4">Schedule Your Free Barrier-Free Shower Consultation</h2>
                <p class="text-lg text-center text-gray-600 mb-8">Our certified accessibility specialists will assess your bathroom, recommend the right Best Bath configuration for your needs, and provide a full installation quote — all at no cost to you.</p>

                <div class="text-center">
                    <a href="{{ route('contact') }}"
                        class="inline-flex items-center px-6 py-3 bg-primary text-white rounded-lg hover:bg-primary-dark transition duration-300">
                        Contact Us for Assessment
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
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
            <div class="bg-primary text-white p-4 rounded-t-lg flex justify-between items-center sticky top-0 z-10">
                <h3 class="text-xl font-bold">Request a Purchase Quote</h3>
                <button id="closeQuoteModal" class="text-white hover:text-gray-200 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <div class="p-6">
                <form id="quoteRequestForm">
                    @csrf
                    <input type="hidden" id="product_name" name="product_name" value="Best Bath Modular Barrier-Free Showers">

                    <div class="mb-6">
                        <h4 class="text-lg font-semibold mb-4 text-primary">Product Information</h4>
                        <div class="p-3 bg-gray-50 rounded-lg mb-4">
                            <p>You're requesting a quote for: <span class="font-semibold text-primary">Best Bath Modular Barrier-Free Showers</span></p>
                        </div>
                    </div>

                    <div class="mb-6">
                        <h4 class="text-lg font-semibold mb-3 text-primary">When are you looking to start your project?</h4>
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

                    <div class="mb-6">
                        <h4 class="text-lg font-semibold mb-3 text-primary">What type of project is this?</h4>
                        <div class="space-y-2">
                            <label class="flex items-center">
                                <input type="radio" name="project_type" value="residential_remodel" class="mr-2" checked>
                                <span>Tub-to-Shower Conversion</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="project_type" value="residential_new" class="mr-2">
                                <span>Residential New Construction</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="project_type" value="commercial" class="mr-2">
                                <span>Commercial / Multi-Family Project</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="project_type" value="institutional" class="mr-2">
                                <span>Institutional / Healthcare Project</span>
                            </label>
                        </div>
                    </div>

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
                            <label for="modalEmail" class="block text-sm font-medium text-gray-700 mb-1">Email*</label>
                            <input type="email" id="modalEmail" name="email" required
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                        </div>

                        <div class="mt-4">
                            <label for="modalPhone" class="block text-sm font-medium text-gray-700 mb-1">Phone Number*</label>
                            <input type="tel" id="modalPhone" name="phone" required
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                        </div>

                        <div class="mt-4">
                            <label for="comments" class="block text-sm font-medium text-gray-700 mb-1">Project Details</label>
                            <textarea id="comments" name="comments" rows="3"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent"
                                placeholder="Please describe your accessibility needs, bathroom dimensions, mobility requirements, or preferred Best Bath accessories..."></textarea>
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

            // Force initial correct state for tabs
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

                    tabButtons.forEach(function (btn) {
                        if (btn.getAttribute('data-target') === targetId) {
                            btn.classList.add('active', 'border-primary', 'text-primary', 'bg-white');
                            btn.classList.remove('border-gray-200', 'bg-gray-50', 'hover:text-gray-600', 'hover:bg-gray-100');
                        } else {
                            btn.classList.remove('active', 'border-primary', 'text-primary', 'bg-white');
                            btn.classList.add('border-gray-200', 'bg-gray-50', 'hover:text-gray-600', 'hover:bg-gray-100');
                        }
                    });

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
                        const formData = new FormData(this);
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