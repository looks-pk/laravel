@extends('layouts.app')

@section('title', 'Quality Shower &amp; Toilet Grab Bars for Bathroom Safety - Home2stay')
@section('meta_description', 'A grab bar is a simple way to prevent falls and accidents. Affordable and can be installed quickly. Browse Home2stay&#039;s range of grab bars in a variety of shapes, sizes, colors, and features.')

@push('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <style>
        .product-highlight {
            border-left: 4px solid #4f46e5;
        }
        .product-item[style*="block"] {
            display: flex !important;
            flex-direction: column !important;
            height: 100% !important;
        }
        .product-item .p-6 {
            display: flex !important;
            flex-direction: column !important;
            flex: 1 !important;
        }
        .product-item .flex-grow {
            flex: 1 !important;
        }
        .product-item .mt-auto {
            margin-top: auto !important;
        }
    </style>
@endpush

@section('content')
    <!-- Hero Banner -->
    <section class="relative bg-gray-900 overflow-hidden" style="min-height: 500px;">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0 bg-cover bg-center"
            style="background-image: url('{{ asset('bathsafety-cat/toilet-roll-1-min.jpg') }}');">
            <div class="absolute inset-0 bg-black opacity-60"></div>
        </div>

        <!-- Hero Content -->
        <div class="container mx-auto px-4 relative z-10 flex items-center" style="min-height: 500px;">
            <div class="max-w-3xl">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6">Grab Bars</h1>
                <p class="text-xl text-white/90 mb-8">
                    Professional grab bar solutions for bathroom safety and accessibility. Providing support and confidence for independent living at home and in care facilities.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="#products"
                        class="px-6 py-3 bg-primary hover:bg-primary-dark text-white rounded-lg transition duration-300 font-medium">
                        View Products
                    </a>
                    <a href="#assessment"
                        class="px-6 py-3 bg-white hover:bg-gray-100 text-primary rounded-lg transition duration-300 font-medium">
                        Request Assessment
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <section id="products" class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Our Grab Bar Solutions</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Discover our comprehensive range of grab bars designed for safety, accessibility, and style. From traditional support bars to hidden grab bars that blend seamlessly with your bathroom decor.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Product 1 -->
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl flex flex-col h-full product-item"
                    data-page="1">
                    <div class="overflow-hidden relative">
                        <img src="{{ asset('bathsafety-cat/aUntitled-1.jpg') }}" alt="Home2stay 2-in-1 Grab Bar Tub/ Shower Spout Ring"
                            class="w-full object-cover" style="height: 400px;">
                        <div class="absolute top-0 right-0 bg-primary text-white text-sm font-bold px-3 py-1 m-4 rounded">
                            Popular
                        </div>
                    </div>
                    <div class="p-6 flex-1 flex flex-col">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Home2stay 2-in-1 Grab Bar Tub/ Shower Spout Ring</h3>
                        <p class="text-gray-600 mb-4 flex-grow">Grabcessories 2-in-1 Tub & Shower Grab Bar Ring prevents falls in two key "fall risk" zones...</p>
                        <div class="mt-auto">
                            <a href="/products/home2stay-2-in-1-grab-bar-tub-shower-spout-ring"
                                class="block w-full bg-primary hover:bg-primary-dark text-white py-3 px-4 rounded-lg transition duration-300 text-center font-medium">
                                View Product
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Product 2 -->
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl flex flex-col h-full product-item"
                    data-page="1">
                    <div class="overflow-hidden relative">
                        <img src="{{ asset('bathsafety-cat/lock-support-grab-bar.jpg') }}" alt="Home2stay Stainless Steel Locking Support Grab Bar"
                            class="w-full object-cover" style="height: 400px;">
                    </div>
                    <div class="p-6 flex-1 flex flex-col">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Home2stay Stainless Steel Locking Support Grab Bar</h3>
                        <p class="text-gray-600 mb-4 flex-grow">Mount across the toilet for when someone needs help pulling themselves up from a seated position or...</p>
                        <div class="mt-auto">
                            <a href="/products/home2stay-stainless-steel-locking-support-grab-bar/"
                                class="block w-full bg-primary hover:bg-primary-dark text-white py-3 px-4 rounded-lg transition duration-300 text-center font-medium">
                                View Product
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Product 3 -->
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl flex flex-col h-full product-item"
                    data-page="1">
                    <div class="overflow-hidden relative">
                        <img src="{{ asset('bathsafety-cat/soap-dish.jpg') }}" alt="Home2stay Invisia Soap Dish"
                            class="w-full object-cover" style="height: 400px;">
                    </div>
                    <div class="p-6 flex-1 flex flex-col">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Home2stay Invisia Soap Dish</h3>
                        <p class="text-gray-600 mb-4 flex-grow">The Soap Dish is the perfect place to store your soap and it also offers just the right amount of...</p>
                        <div class="mt-auto">
                            <a href="/products/home2stay-invisia-towel-bar/"
                                class="block w-full bg-primary hover:bg-primary-dark text-white py-3 px-4 rounded-lg transition duration-300 text-center font-medium">
                                View Product
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Product 4 -->
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl flex flex-col h-full product-item"
                    data-page="1">
                    <div class="overflow-hidden relative">
                        <img src="{{ asset('logo/logo-clr.png') }}" alt="Home2stay Invisia Accent Bar"
                            class="p-20 contain" style="height: 400px;">
                    </div>
                    <div class="p-6 flex-1 flex flex-col">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Home2stay Invisia Accent Bar</h3>
                        <p class="text-gray-600 mb-4 flex-grow">A bold, stylish way to breathe new life into any bathroom, our Accent Bar can be placed wherever sup...</p>
                        <div class="mt-auto">
                            <a href="/products/home2stay-invisia-accent-bar/"
                                class="block w-full bg-primary hover:bg-primary-dark text-white py-3 px-4 rounded-lg transition duration-300 text-center font-medium">
                                View Product
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Product 5 -->
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl flex flex-col h-full product-item"
                    data-page="1">
                    <div class="overflow-hidden relative">
                        <img src="{{ asset('bathsafety-cat/221Untitled-1.jpg') }}" alt="Home2stay 120 Degree Angle Grab Bar"
                            class="w-full object-cover" style="height: 400px;">
                    </div>
                    <div class="p-6 flex-1 flex flex-col">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Home2stay 120 Degree Angle Grab Bar</h3>
                        <p class="text-gray-600 mb-4 flex-grow">Healthcraft's 120 Degree Angle Grab provides strength and security. It is designed for shower and...</p>
                        <div class="mt-auto">
                            <a href="/products/home2stay-120-degree-angle-grab-bar/"
                                class="block w-full bg-primary hover:bg-primary-dark text-white py-3 px-4 rounded-lg transition duration-300 text-center font-medium">
                                View Product
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Product 6 -->
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl flex flex-col h-full product-item"
                    data-page="1">
                    <div class="overflow-hidden relative">
                        <img src="{{ asset('bathsafety-cat/123123Untitled-1-min.jpg') }}" alt="Home2stay L-Shaped Grab Bar (Stainless Steel)"
                            class=" object-cover" style="height: 400px;">
                    </div>
                    <div class="p-6 flex-1 flex flex-col">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Home2stay L-Shaped Grab Bar (Stainless Steel)</h3>
                        <p class="text-gray-600 mb-4 flex-grow">Our L-shaped 30 inch x 30 inch Grab Bar is the easiest to install in the industry due to the...</p>
                        <div class="mt-auto">
                            <a href="/products/home2stay-l-shaped-grab-bar-stainless-steel"
                                class="block w-full bg-primary hover:bg-primary-dark text-white py-3 px-4 rounded-lg transition duration-300 text-center font-medium">
                                View Product
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Product 7 -->
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl flex flex-col h-full product-item"
                    data-page="1">
                    <div class="overflow-hidden relative">
                        <img src="{{ asset('bathsafety-cat/kUntitled-1-min.jpg') }}" alt="Home2stay L-Shaped Grab Bar (Stainless Knurled)"
                            class="w-full object-cover" style="height: 400px;">
                    </div>
                    <div class="p-6 flex-1 flex flex-col">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Home2stay L-Shaped Grab Bar (Stainless Knurled)</h3>
                        <p class="text-gray-600 mb-4 flex-grow">HealthCraft's L-shaped grab bar is perfect for those tricky spots in your bathroom. Other L-shaped...</p>
                        <div class="mt-auto">
                            <a href="/products/home2stay-l-shaped-grab-bar-stainless-knurled"
                                class="block w-full bg-primary hover:bg-primary-dark text-white py-3 px-4 rounded-lg transition duration-300 text-center font-medium">
                                View Product
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Product 8 -->
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl flex flex-col h-full product-item"
                    data-page="1">
                    <div class="overflow-hidden relative">
                        <img src="{{ asset('bathsafety-cat/toilet-roll1-min.jpg') }}" alt="Home2stay Plus Toilet Paper Holder"
                            class="w-full object-cover" style="height: 400px;">
                    </div>
                    <div class="p-6 flex-1 flex flex-col">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Home2stay Plus Toilet Paper Holder</h3>
                        <p class="text-gray-600 mb-4 flex-grow">Using the wall as a grab bar doesn't have to happen. The PLUS Toilet Paper Holder mounts against t...</p>
                        <div class="mt-auto">
                            <a href="/products/home2stay-plus-toilet-paper-holder"
                                class="block w-full bg-primary hover:bg-primary-dark text-white py-3 px-4 rounded-lg transition duration-300 text-center font-medium">
                                View Product
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Product 9 -->
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl flex flex-col h-full product-item"
                    data-page="1">
                    <div class="overflow-hidden relative">
                        <img src="{{ asset('bathsafety-cat/1Untitled-12-min.jpg') }}" alt="Home2stay Invisia Accent Ring"
                            class="w-full object-cover" style="height: 400px;">
                    </div>
                    <div class="p-6 flex-1 flex flex-col">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Home2stay Invisia Accent Ring</h3>
                        <p class="text-gray-600 mb-4 flex-grow">A beautiful addition to any bathroom, the Accent Ring elegantly frames your shower valve while provi...</p>
                        <div class="mt-auto">
                            <a href="/products/home2stay-invisia-accent-ring"
                                class="block w-full bg-primary hover:bg-primary-dark text-white py-3 px-4 rounded-lg transition duration-300 text-center font-medium">
                                View Product
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Page 2 Products (Hidden by default) -->
                <!-- Product 10 -->
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl flex flex-col h-full product-item"
                    data-page="2" style="display: none;">
                    <div class="overflow-hidden relative">
                        <img src="{{ asset('bathsafety-cat/tower-bar-min.jpg') }}" alt="Home2stay Plus Towel Bar"
                            class="w-full object-cover" style="height: 400px;">
                    </div>
                    <div class="p-6 flex-1 flex flex-col">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Home2stay Plus Towel Bar</h3>
                        <p class="text-gray-600 mb-4 flex-grow">Your towel bar should do more than just hold your towels. The PLUS Towel Bar holds even your largest...</p>
                        <div class="mt-auto">
                            <a href="/products/home2stay-plus-towel-bar/"
                                class="block w-full bg-primary hover:bg-primary-dark text-white py-3 px-4 rounded-lg transition duration-300 text-center font-medium">
                                View Product
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Product 11 -->
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl flex flex-col h-full product-item"
                    data-page="2" style="display: none;">
                    <div class="overflow-hidden relative">
                        <img src="{{ asset('bathsafety-cat/toilet-roll-1-min.jpg') }}" alt="Home2stay Invisia Toilet Roll Holder"
                            class="w-full object-cover" style="height: 400px;">
                    </div>
                    <div class="p-6 flex-1 flex flex-col">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Home2stay Invisia Toilet Roll Holder</h3>
                        <p class="text-gray-600 mb-4 flex-grow">The Toilet Roll Holder is a stunning addition to any bathroom that offers discreet support for sitti...</p>
                        <div class="mt-auto">
                            <a href="/products/home2stay-invisia-toilet-roll-holder/"
                                class="block w-full bg-primary hover:bg-primary-dark text-white py-3 px-4 rounded-lg transition duration-300 text-center font-medium">
                                View Product
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Product 12 -->
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl flex flex-col h-full product-item"
                    data-page="2" style="display: none;">
                    <div class="overflow-hidden relative">
                        <img src="{{ asset('bathsafety-cat/Home2stay-Vinyl-Folding-Grab-Bar.jpg') }}" alt="Home2stay Vinyl Folding Grab Bar"
                            class="w-full object-cover" style="height: 400px;">
                    </div>
                    <div class="p-6 flex-1 flex flex-col">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Home2stay Vinyl Folding Grab Bar</h3>
                        <p class="text-gray-600 mb-4 flex-grow">Vinyl coating provides anti-microbial protection, superior grip, and feels warmer to the hands. Anti...</p>
                        <div class="mt-auto">
                            <a href="/products/home2stay-vinyl-folding-grab-bar-2"
                                class="block w-full bg-primary hover:bg-primary-dark text-white py-3 px-4 rounded-lg transition duration-300 text-center font-medium">
                                View Product
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Product 13 -->
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl flex flex-col h-full product-item"
                    data-page="2" style="display: none;">
                    <div class="overflow-hidden relative">
                        <img src="{{ asset('bathsafety-cat/Home2stay-Vinyl-Folding-Grab-Bar-w-Floor-Support-Leg.jpg') }}" alt="Home2stay Vinyl Folding Grab Bar w/ Floor Support Leg"
                            class="w-full object-cover" style="height: 400px;">
                    </div>
                    <div class="p-6 flex-1 flex flex-col">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Home2stay Vinyl Folding Grab Bar w/ Floor Support Leg</h3>
                        <p class="text-gray-600 mb-4 flex-grow">Vinyl coating provides anti-microbial protection, superior grip, and feels warmer to the hands. Anti...</p>
                        <div class="mt-auto">
                            <a href="/products/home2stay-vinyl-folding-grab-bar-w-floor-support-leg"
                                class="block w-full bg-primary hover:bg-primary-dark text-white py-3 px-4 rounded-lg transition duration-300 text-center font-medium">
                                View Product
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Product 14 -->
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl flex flex-col h-full product-item"
                    data-page="2" style="display: none;">
                    <div class="overflow-hidden relative">
                        <img src="{{ asset('bathsafety-cat/Home2stay-Vinyl-Folding-Rotating-Grab-Bar.jpg') }}" alt="Home2stay Vinyl Folding & Rotating Grab Bar"
                            class="w-full object-cover" style="height: 400px;">
                    </div>
                    <div class="p-6 flex-1 flex flex-col">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Home2stay Vinyl Folding & Rotating Grab Bar</h3>
                        <p class="text-gray-600 mb-4 flex-grow">Vinyl coating provides anti-microbial protection, superior grip, and feels warmer to the hands. Anti...</p>
                        <div class="mt-auto">
                            <a href="/products/home2stay-vinyl-folding-rotating-grab-bar"
                                class="block w-full bg-primary hover:bg-primary-dark text-white py-3 px-4 rounded-lg transition duration-300 text-center font-medium">
                                View Product
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Product 15 -->
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl flex flex-col h-full product-item"
                    data-page="2" style="display: none;">
                    <div class="overflow-hidden relative">
                        <img src="{{ asset('bathsafety-cat/Home2stay-Dependa-Bar-2.webp') }}" alt="Home2stay Dependa-Bar"
                            class="w-full object-cover" style="height: 400px;">
                    </div>
                    <div class="p-6 flex-1 flex flex-col">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Home2stay Dependa-Bar</h3>
                        <p class="text-gray-600 mb-4 flex-grow">This award-winning grab bar provides assistance exactly where it's needed- no reaching, leaning or...</p>
                        <div class="mt-auto">
                            <a href="/products/home2stay-dependa-bar"
                                class="block w-full bg-primary hover:bg-primary-dark text-white py-3 px-4 rounded-lg transition duration-300 text-center font-medium">
                                View Product
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Product 16 -->
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl flex flex-col h-full product-item"
                    data-page="2" style="display: none;">
                    <div class="overflow-hidden relative">
                        <img src="{{ asset('bathsafety-cat/Home2stay-Grab-Bars-Curved-Arched-or-Straight.jpg') }}" alt="Home2stay Grab Bars- Curved, Arched or Straight"
                            class="w-full object-cover p-10" style="height: 400px;">
                    </div>
                    <div class="p-6 flex-1 flex flex-col">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Home2stay Grab Bars- Curved, Arched or Straight</h3>
                        <p class="text-gray-600 mb-4 flex-grow">Grabcessories Grab Bars blend into any bathroom decor and provide dependable support for people of a...</p>
                        <div class="mt-auto">
                            <a href="/products/home2stay-grab-bars-curved-arched-or-straight"
                                class="block w-full bg-primary hover:bg-primary-dark text-white py-3 px-4 rounded-lg transition duration-300 text-center font-medium">
                                View Product
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Product 17 -->
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl flex flex-col h-full product-item"
                    data-page="2" style="display: none;">
                    <div class="overflow-hidden relative">
                        <img src="{{ asset('bathsafety-cat/Home2stay-2-in-1-Grab-Bar-Toilet-Paper-Holder.jpg') }}" alt="Home2stay 2-in-1 Grab Bar Toilet Paper Holder"
                            class="w-full object-cover" style="height: 400px;">
                    </div>
                    <div class="p-6 flex-1 flex flex-col">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Home2stay 2-in-1 Grab Bar Toilet Paper Holder</h3>
                        <p class="text-gray-600 mb-4 flex-grow">Grabcessories 2-in-1 Grab Bar Toilet Paper Holder ensures safer mobility and convenience in one of t...</p>
                        <div class="mt-auto">
                            <a href="/products/home2stay-2-in-1-grab-bar-toilet-paper-holder"
                                class="block w-full bg-primary hover:bg-primary-dark text-white py-3 px-4 rounded-lg transition duration-300 text-center font-medium">
                                View Product
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Product 18 -->
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl flex flex-col h-full product-item"
                    data-page="2" style="display: none;">
                    <div class="overflow-hidden relative">
                        <img src="{{ asset('bathsafety-cat/Home2stay-2-in-1-Grab-Bar-Towel-Bar.jpg') }}" alt="Home2stay 2-in-1 Grab Bar Towel Bar"
                            class="w-full object-cover" style="height: 400px;">
                    </div>
                    <div class="p-6 flex-1 flex flex-col">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Home2stay 2-in-1 Grab Bar Towel Bar</h3>
                        <p class="text-gray-600 mb-4 flex-grow">Grabcessories 2-in-1 Grab Bar Towel Bar prevents falls in one of the key "fall risk" zones in th...</p>
                        <div class="mt-auto">
                            <a href="/products/home2stay-2-in-1-grab-bar-towel-bar"
                                class="block w-full bg-primary hover:bg-primary-dark text-white py-3 px-4 rounded-lg transition duration-300 text-center font-medium">
                                View Product
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Page 3 Products (Hidden by default) -->
                <!-- Product 19 -->
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl flex flex-col h-full product-item"
                    data-page="3" style="display: none;">
                    <div class="overflow-hidden relative">
                        <img src="{{ asset('bathsafety-cat/Home2stay-3-in-1-Grab-Bar-Towel-Shelf.jpg') }}" alt="Home2stay 3-in-1 Grab Bar Towel Shelf"
                            class="w-full object-cover" style="height: 400px;">
                    </div>
                    <div class="p-6 flex-1 flex flex-col">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Home2stay 3-in-1 Grab Bar Towel Shelf</h3>
                        <p class="text-gray-600 mb-4 flex-grow">Grabcessories 3-in-1 Grab Bars & Towel Shelf provides beauty, fall prevention, towel &...</p>
                        <div class="mt-auto">
                            <a href="/products/home2stay-3-in-1-grab-bar-towel-shelf"
                                class="block w-full bg-primary hover:bg-primary-dark text-white py-3 px-4 rounded-lg transition duration-300 text-center font-medium">
                                View Product
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Product 20 -->
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl flex flex-col h-full product-item"
                    data-page="3" style="display: none;">
                    <div class="overflow-hidden relative">
                        <img src="{{ asset('bathsafety-cat/Home2stay-Easy-Mount-Grab-Bars-Stainless-Steel.jpg') }}" alt="Home2stay Easy Mount Grab Bars(Stainless Steel)"
                            class=" object-cover p-2" style="height: 400px;">
                    </div>
                    <div class="p-6 flex-1 flex flex-col">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Home2stay Easy Mount Grab Bars(Stainless Steel)</h3>
                        <p class="text-gray-600 mb-4 flex-grow">Easy Mount Grab Bars provide safety and security in the bathroom, shower and any room in your house...</p>
                        <div class="mt-auto">
                            <a href="/products/home2stay-easy-mount-grab-bars-stainless-steel"
                                class="block w-full bg-primary hover:bg-primary-dark text-white py-3 px-4 rounded-lg transition duration-300 text-center font-medium">
                                View Product
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pagination -->
            <div class="flex justify-center mt-12">
                <nav class="flex items-center space-x-2" id="pagination">
                    <button id="prevBtn" class="px-3 py-2 text-gray-500 bg-white border border-gray-300 rounded-md hover:bg-gray-50 disabled:opacity-50 disabled:cursor-not-allowed" disabled>Previous</button>
                    <button class="pagination-btn px-3 py-2 text-white bg-primary border border-primary rounded-md" data-page="1">1</button>
                    <button class="pagination-btn px-3 py-2 text-gray-500 bg-white border border-gray-300 rounded-md hover:bg-gray-50" data-page="2">2</button>
                    <button class="pagination-btn px-3 py-2 text-gray-500 bg-white border border-gray-300 rounded-md hover:bg-gray-50" data-page="3">3</button>
                    <button id="nextBtn" class="px-3 py-2 text-gray-500 bg-white border border-gray-300 rounded-md hover:bg-gray-50">Next</button>
                </nav>
            </div>
        </div>
    </section>

    <!-- Introduction Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">Safe & Stylish Bathroom Support</h2>
                    <p class="text-lg text-gray-600">
                        At Home2stay, we always recommend grab bars as the first step in preparing your home for aging in place or making your establishment more accessible and safe for people of all ages and abilities! Grab bars provide an affordable way to prevent accidents and falls in the bathroom, or anywhere else in your home.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
                    <div class="bg-gray-50 p-6 rounded-lg text-center">
                        <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Safety First</h3>
                        <p class="text-gray-600">Prevent accidents and falls in the bathroom with professional-grade grab bars designed for maximum support.</p>
                    </div>

                    <div class="bg-gray-50 p-6 rounded-lg text-center">
                        <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zM7 21h10a2 2 0 002-2v-5a2 2 0 00-2-2H9a2 2 0 00-2 2v5a4 4 0 01-4 4z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Stylish Design</h3>
                        <p class="text-gray-600">Hidden grab bars that blend with your decor - towel bars, toilet paper holders, and accent pieces with support.</p>
                    </div>

                    <div class="bg-gray-50 p-6 rounded-lg text-center">
                        <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Next-Day Installation</h3>
                        <p class="text-gray-600">Express service available for quick installation. Get your grab bars installed the next day!</p>
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
                        <h2 class="text-3xl font-bold text-gray-800 mb-4">Inclusive Living Solutions: Discover Our Complete Product Catalog</h2>
                        <p class="text-lg text-gray-600 mb-6">
                            Home2stay is the local Bruno stair lift expert in the British Columbia region, servicing the following: Vancouver, Surrey, Abbotsford, Richmond, Coquitlam, Tricities, Mission, Delta, Pitt Meadows, Burnaby, Port Moody, Maple Ridge, Langley, Chilli Wack, White Rock, Aldergrove, and other nearby areas.</p>
                        <p class="mb-5">Is your area not listed? Give us a call at <a href="tel:+16042591211"
                                class="text-secondary">604-259-1211</a> or submit a FREE
                            <a href="#assessment" class="text-secondary"> ASSESSMENT FORM </a> to check.
                        </p>
                    </div>
                    <!-- Image -->
                    <div class="w-full lg:w-1/2">
                        <img src="{{ asset('al-prod-page-imgs/Rectangle%20320-min.png') }}" alt="Grab Bar Installation"
                            class="w-full h-full object-cover" style="min-height: 400px;">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Grab Bars Details -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="bg-white rounded-xl shadow-md p-8 md:p-12">
                    <h2 class="text-3xl font-bold text-gray-800 mb-6">Understanding Grab Bar Solutions</h2>

                    <div class="prose prose-lg max-w-none">
                        <p class="text-gray-700 mb-4">
                            Grab bars provide an affordable way to prevent accidents and falls in the bathroom, or anywhere else in your home. They can also help a person balance and move safely and easily without assistance from others. Grab bars may appear simple, but they can make a huge impact on making your everyday life safer and more comfortable.
                        </p>

                        <p class="text-gray-700 mb-6">
                            You are probably familiar with the usual L-shaped and straight grab bars- but do you know that these safety devices now come in various shapes, sizes, and finishes? In Home2stay, we have grab bars that can blend with any style or color palette, without the institutional and clinical feel.
                        </p>

                        <h3 class="text-2xl font-bold text-gray-800 mt-8 mb-4">Installation & Pricing</h3>

                        <div class="bg-primary/5 p-6 rounded-lg mb-6">
                            <h4 class="font-bold text-gray-800 mb-2">Professional Installation Pricing</h4>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="flex justify-between">
                                    <span class="font-medium text-gray-700">First Grab Bar Installation:</span>
                                    <span class="text-gray-600 font-semibold">$150</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="font-medium text-gray-700">Each Additional Grab Bar:</span>
                                    <span class="text-gray-600 font-semibold">$75</span>
                                </div>
                            </div>
                        </div>

                        <h3 class="text-2xl font-bold text-gray-800 mt-8 mb-4">Hidden Grab Bar Solutions</h3>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 my-8">
                            <div class="bg-primary/5 p-6 rounded-lg">
                                <h4 class="font-bold text-gray-800 mb-2">Towel Bars</h4>
                                <p class="text-gray-700">Functional towel storage that doubles as a support grab bar.</p>
                            </div>
                            <div class="bg-primary/5 p-6 rounded-lg">
                                <h4 class="font-bold text-gray-800 mb-2">Toilet Paper Holders</h4>
                                <p class="text-gray-700">Essential bathroom fixtures with built-in grab bar functionality.</p>
                            </div>
                            <div class="bg-primary/5 p-6 rounded-lg">
                                <h4 class="font-bold text-gray-800 mb-2">Toiletries Shelves</h4>
                                <p class="text-gray-700">Storage solutions that provide support and organization.</p>
                            </div>
                            <div class="bg-primary/5 p-6 rounded-lg">
                                <h4 class="font-bold text-gray-800 mb-2">Corner Shelves</h4>
                                <p class="text-gray-700">Space-saving corner solutions with grab bar support.</p>
                            </div>
                            <div class="bg-primary/5 p-6 rounded-lg">
                                <h4 class="font-bold text-gray-800 mb-2">Accent Rings</h4>
                                <p class="text-gray-700">Decorative rings that frame fixtures while providing support.</p>
                            </div>
                            <div class="bg-primary/5 p-6 rounded-lg">
                                <h4 class="font-bold text-gray-800 mb-2">Robe Hooks</h4>
                                <p class="text-gray-700">Stylish hooks that offer both storage and support functionality.</p>
                            </div>
                        </div>

                        <div class="my-8 p-6 bg-primary/5 border-l-4 border-primary rounded-r-lg">
                            <p class="text-gray-800 font-medium">
                                "Hidden" grab bars that come in the form of towel bars, toilet paper holders, toiletries shelves, corner shelves, accent rings, and robe hooks provide multiple functions, beauty, and support in your space.
                            </p>
                        </div>

                        <h3 class="text-2xl font-bold text-gray-800 mt-8 mb-4">Express Installation Service</h3>

                        <p class="text-gray-700 mb-4">
                            In a hurry? We provide NEXT-DAY installation for grab bars via the Home2stay express service! Simply fill out the BOOKING FORM, and let's get your home set up for improved safety and accessibility.
                        </p>

                        <p class="text-gray-700 mb-4">
                            Check out our Home2stay Express Catalogue to see what other products you can get for NEXT-DAY installation.
                        </p>

                        <div class="mt-8 flex flex-wrap gap-4">
                            <a href="#assessment"
                                class="inline-flex items-center px-6 py-3 bg-primary text-white rounded-lg hover:bg-primary-dark transition duration-300">
                                Request Free Assessment
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
            </div>
        </div>
    </section>

    <!-- Featured section 2 -->
    <section class="py-16 bg-primary">
        <div class="container mx-auto px-4">
            <div class="bg-gray-50 rounded-xl overflow-hidden shadow-lg">
                <div class="flex flex-col lg:flex-row">
                    <!-- Text Content -->
                    <div class="w-full lg:w-1/2 p-8 md:p-12 flex flex-col justify-center">
                        <h2 class="text-3xl font-bold text-gray-800 mb-4">Ready to book a schedule?</h2>
                        <p class="text-lg text-gray-600 mb-6">
                            We look forward to helping you create your safe and accessible space</p>
                        <div class="mt-8 flex flex-wrap gap-4">
                            <a href="#assessment"
                                class="inline-flex items-center px-6 py-3 bg-primary text-white rounded-lg hover:bg-primary-dark transition duration-300">
                                Book Online
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <!-- Image -->
                    <div class="w-full lg:w-1/2">
                        <img src="{{ asset('bathsafety-cat/ready-to-book-a-schedule.jpg') }}" alt="Grab Bar Consultation"
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

    <!-- Assessment Form -->
    <section id="assessment" class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto bg-white rounded-xl shadow-lg p-8 md:p-12">
                <div class="text-center mb-10">
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">Request Your Grab Bar Assessment</h2>
                    <p class="text-gray-600">Our accessibility specialists will evaluate your specific needs and recommend the
                        best grab bar solutions for your home or facility.</p>
                </div>

                <form action="/submit-assessment" method="POST">
                    @csrf
                    <input type="hidden" name="form_type" value="quote">
                    <input type="hidden" name="form_source" value="Grab_Bars_quote_form">
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
                            <label class="block text-gray-700 font-medium mb-2" for="location">Location/Address</label>
                            <input type="text" id="location" name="location"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
                        </div>
                    </div>

                    <!-- Grab Bar Type Interest -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Which type of grab bars are you interested in? *</label>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                            <label class="flex items-center space-x-3">
                                <input type="radio" name="grab_bar_type" value="traditional" class="text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Traditional Grab Bars</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="radio" name="grab_bar_type" value="hidden" class="text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Hidden/Decorative Grab Bars</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="radio" name="grab_bar_type" value="both" class="text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Both Traditional & Hidden</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="radio" name="grab_bar_type" value="consultation" class="text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Need Consultation</span>
                            </label>
                        </div>
                    </div>

                    <!-- Installation Location -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Where do you need grab bars installed? *</label>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="installation_location[]" value="shower" class="text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Shower/Bathtub</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="installation_location[]" value="toilet" class="text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Toilet Area</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="installation_location[]" value="hallway" class="text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Hallways</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="installation_location[]" value="stairs" class="text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Stairs</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="installation_location[]" value="bedroom" class="text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Bedroom</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="installation_location[]" value="other" class="text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Other Areas</span>
                            </label>
                        </div>
                    </div>

                    <!-- Service Type -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">What service are you looking for? *</label>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                            <label class="flex items-center space-x-3">
                                <input type="radio" name="service_type" value="standard" class="text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Standard Installation</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="radio" name="service_type" value="express" class="text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Next-Day Express Service</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="radio" name="service_type" value="assessment" class="text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Assessment Only</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="radio" name="service_type" value="consultation" class="text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Design Consultation</span>
                            </label>
                        </div>
                    </div>

                    <!-- Additional Information -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-2" for="message">Additional Information</label>
                        <textarea id="message" name="message" rows="4"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent"
                            placeholder="Please share any specific requirements, room details, or concerns about grab bar installation..."></textarea>
                    </div>

                    <!-- Submit Button -->
                    <div class="text-center">
                        <button type="submit"
                            class="inline-flex items-center px-6 py-3 bg-primary text-white rounded-lg hover:bg-primary-dark transition duration-300">
                            Submit Assessment Request
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

    <!-- Call to Action -->
    <section class="py-16 bg-primary">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center text-white">
                <h2 class="text-3xl font-bold mb-6">Ready to Enhance Your Bathroom Safety?</h2>
                <p class="text-xl mb-8">Contact us today to explore how our grab bar solutions can transform your bathroom into a safer, more accessible space.</p>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="{{ route('contact') }}"
                        class="px-8 py-3 bg-white text-primary hover:bg-gray-100 rounded-lg font-medium transition duration-300">
                        Contact Us
                    </a>
                    <a href="tel:+16042591211"
                        class="px-8 py-3 bg-transparent border-2 border-white text-white hover:bg-white/10 rounded-lg font-medium transition duration-300">
                        Call 604-259-1211
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let currentPage = 1;
            const totalPages = 3;
            
            // Get all pagination buttons and product items
            const paginationBtns = document.querySelectorAll('.pagination-btn');
            const productItems = document.querySelectorAll('.product-item');
            const prevBtn = document.getElementById('prevBtn');
            const nextBtn = document.getElementById('nextBtn');
            
            // Function to show products for a specific page
            function showPage(page) {
                // Hide all products
                productItems.forEach(item => {
                    item.style.display = 'none';
                });
                
                // Show products for the current page
                const pageProducts = document.querySelectorAll(`[data-page="${page}"]`);
                pageProducts.forEach(item => {
                    item.style.display = 'block';
                });
                
                // Update pagination button states
                paginationBtns.forEach(btn => {
                    const btnPage = parseInt(btn.getAttribute('data-page'));
                    if (btnPage === page) {
                        btn.classList.remove('text-gray-500', 'bg-white', 'border-gray-300');
                        btn.classList.add('text-white', 'bg-primary', 'border-primary');
                    } else {
                        btn.classList.remove('text-white', 'bg-primary', 'border-primary');
                        btn.classList.add('text-gray-500', 'bg-white', 'border-gray-300');
                    }
                });
                
                // Update prev/next button states
                prevBtn.disabled = (page === 1);
                nextBtn.disabled = (page === totalPages);
                
                if (prevBtn.disabled) {
                    prevBtn.classList.add('opacity-50', 'cursor-not-allowed');
                } else {
                    prevBtn.classList.remove('opacity-50', 'cursor-not-allowed');
                }
                
                if (nextBtn.disabled) {
                    nextBtn.classList.add('opacity-50', 'cursor-not-allowed');
                } else {
                    nextBtn.classList.remove('opacity-50', 'cursor-not-allowed');
                }
                
                // Scroll to products section
                document.getElementById('products').scrollIntoView({ 
                    behavior: 'smooth',
                    block: 'start'
                });
            }
            
            // Add click event listeners to pagination buttons
            paginationBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    const page = parseInt(this.getAttribute('data-page'));
                    currentPage = page;
                    showPage(page);
                });
            });
            
            // Add click event listeners to prev/next buttons
            prevBtn.addEventListener('click', function() {
                if (currentPage > 1) {
                    currentPage--;
                    showPage(currentPage);
                }
            });
            
            nextBtn.addEventListener('click', function() {
                if (currentPage < totalPages) {
                    currentPage++;
                    showPage(currentPage);
                }
            });
            
            // Initialize first page
            showPage(1);
        });
    </script>
@endpush