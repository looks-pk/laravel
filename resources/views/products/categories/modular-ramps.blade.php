@extends('layouts.app')

@section('title', 'Modular Ramps in Vancouver | Safe Wheelchair Ramp Installation | Home2Stay')
@section('meta_description', 'Professional Modular Ramps in Vancouver. Expert Wheelchair Ramp Installation Vancouver services. Safe, strong, and built for accessibility needs by Home2Stay.')

@push('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <style>
        .product-highlight {
            border-left: 4px solid #4f46e5;
        }
    </style>
@endpush

@section('content')
    <!-- Hero Banner -->
    <section class="relative bg-gray-900 overflow-hidden" style="min-height: 500px;">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0 bg-cover bg-center"
            style="background-image: url('{{ asset('/bathsafety-cat/walk-in-tubs-1.jpg') }}');">
            <div class="absolute inset-0 bg-black opacity-60"></div>
        </div>

        <!-- Hero Content -->
        <div class="container mx-auto px-4 relative z-10 flex items-center mb-4 mt-4" style="min-height: 500px;">
            <div class="max-w-3xl">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6">Modular Ramps in Vancouver – Safe, Strong, and Built for Your Needs | Home2Stay</h1>
                <p class="text-xl text-white/90 mb-8">
                    Any human being should have access to their home that is safe and easy. Travelling in and out of your house must never be a scary, risky, or difficult thing to do. That is the reason we install quality Modular Ramps in Vancouver that enable seniors, persons with wheelchairs, and limited mobility to remain independent and have confidence. Our ramps are designed to be used in the long run, to be installed easily, and to be used on a daily basis, regardless of the weather or the structure of your house.
                </p>
                <p class="text-xl text-white/90 mb-8">
                    Home2Stay has been able to assist hundreds of families and businesses in building safer, barrier-free areas. You may want a small ramp on your front steps or a whole system with a platform and rail- you dictate this kind of system based on your lifestyle, safety requirements, and budget. Our team is courteous, sincere, and respectable, and we ensure that you get taken care of from the initial phone call to the last installation. Many families prefer Modular Ramps in Vancouver because of their long-term reliability.
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
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Why Modular Ramps Are the Best Choice:</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Home and building access are the best solutions that can be described as modular ramps. They do not require a large-scale construction as it does the concrete ramps do. They come in robust, pre-assembled units, which are almost compatible with any design. They are also reconfigurable, expandable, and relocatable in the event of a requirement change. This qualifies them as an intelligent long-term residential, leasing, business, and community center solution. These benefits make Modular Ramps in Vancouver a dependable access option for all types of properties.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-8 max-w-5xl mx-auto">
                <!-- Benefit 1 -->
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl flex flex-col h-full">
                    <div class="overflow-hidden relative">
                        <img src="{{ asset('/bathsafety-cat/walk-in-tubs-1.jpg') }}" alt="Simple and Quick Installation"
                            class="w-full object-cover" style="height: 250px;">
                        <div class="absolute top-0 right-0 bg-primary text-white text-sm font-bold px-3 py-1 m-4 rounded">
                            Popular
                        </div>
                    </div>
                    <div class="p-6 flex-1 flex flex-col">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Simple and Quick Installation:</h3>
                        <p class="text-gray-600 mb-4 flex-grow">The majority of ramps are fitted in a couple of hours. There is no need to worry about noise, mess, and lengthy construction periods. Whether you choose a simple ramp or a complete Wheelchair Ramp Installation Vancouver service, the process stays smooth and efficient.</p>
                    </div>
                </div>

                <!-- Benefit 2 -->
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl flex flex-col h-full">
                    <div class="overflow-hidden relative">
                        <img src="{{ asset('/bathsafety-cat/walk-in-tubs-1.jpg') }}" alt="Strong and Weather-Resistant"
                            class="w-full object-cover" style="height: 250px;">
                    </div>
                    <div class="p-6 flex-1 flex flex-col">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Strong and Weather-Resistant:</h3>
                        <p class="text-gray-600 mb-4 flex-grow">Vancouver receives an excessive amount of rain, whereas aluminum modular ramps do not corrode or deteriorate. They are very robust throughout the year with minimal maintenance. This makes Modular Ramps in Vancouver the ideal choice for long-term outdoor use.</p>
                    </div>
                </div>

                <!-- Benefit 3 -->
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl flex flex-col h-full">
                    <div class="overflow-hidden relative">
                        <img src="{{ asset('/bathsafety-cat/walk-in-tubs-1.jpg') }}" alt="Safe for Daily Use"
                            class="w-full object-cover" style="height: 250px;">
                    </div>
                    <div class="p-6 flex-1 flex flex-col">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Safe for Daily Use:</h3>
                        <p class="text-gray-600 mb-4 flex-grow">The ramp is safe for walkers, wheelchairs, strollers, and mobility scooters because it has non-slip surfaces, safe railings, and stable platforms. Our Wheelchair Ramp Installation Vancouver team ensures every setup meets strict safety criteria.</p>
                    </div>
                </div>

                <!-- Benefit 4 -->
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl flex flex-col h-full">
                    <div class="overflow-hidden relative">
                        <img src="{{ asset('/bathsafety-cat/walk-in-tubs-1.jpg') }}" alt="Fits Any Property"
                            class="w-full object-cover" style="height: 250px;">
                    </div>
                    <div class="p-6 flex-1 flex flex-col">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Fits Any Property:</h3>
                        <p class="text-gray-600 mb-4 flex-grow">Staircases, narrow walkways, rough surfaces, all these can be made to suit our systems. Modular ramps do not just provide a mobility enhancement; it is an upgrade to a lifestyle. They help in making your house friendlier, more convenient, and more helpful to your everyday routine. People looking for Modular Ramps in Vancouver often choose this solution because of its flexibility.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Introduction Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">Why Choose Home2stay for Bath Services in Vancouver?</h2>
                    <p class="text-lg text-gray-600">
                        All bathrooms should be made safe. We assist with the end-to-end. Planning, measuring, installing, and fine-tuning are also in our team. We put you on a path of simple steps and clear choices. We also assist the families in choosing the correct Best Bath Services Vancouver upgrades. These upgrades simplify bathing among the seniors, children, and individuals with mobility needs while ensuring access to high-quality Bathroom safety products Vancouver:
                    </p>
                    <p class="text-lg text-gray-600 mt-4">
                        We never fail to suggest safety products that can help in your everyday living. These consist of convenient features such as accessories, stable rails, and features that are easy to use. We want to defend you and your family with the right bath and toilet safety accessories in place.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
                    <div class="bg-gray-50 p-6 rounded-lg text-center">
                        <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Grab bars</h3>
                        <p class="text-gray-600">Stable grab bars help you move with confidence.</p>
                    </div>

                    <div class="bg-gray-50 p-6 rounded-lg text-center">
                        <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Non-slip mats</h3>
                        <p class="text-gray-600">High-quality mats prevent slips and provide secure footing.</p>
                    </div>

                    <div class="bg-gray-50 p-6 rounded-lg text-center">
                        <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Shower chairs</h3>
                        <p class="text-gray-600">Comfortable seating options make bathing easier and safer.</p>
                    </div>

                    <div class="bg-gray-50 p-6 rounded-lg text-center">
                        <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Walk-in options</h3>
                        <p class="text-gray-600">Modern walk-in showers and tubs for easy access.</p>
                    </div>

                    <div class="bg-gray-50 p-6 rounded-lg text-center">
                        <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Raised toilet seats</h3>
                        <p class="text-gray-600">Make sitting and standing easier with elevated solutions.</p>
                    </div>

                    <div class="bg-gray-50 p-6 rounded-lg text-center">
                        <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Easy-grip rails</h3>
                        <p class="text-gray-600">Rails that are easy to use for added stability.</p>
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
                        <h2 class="text-3xl font-bold text-gray-800 mb-4">Bathroom Safety Products That Make Life Easier:</h2>
                        <p class="text-lg text-gray-600 mb-4">
                            Safety starts with the right tools. Home2stay offers a strong list of items that make your bathroom safer. Many families in the city trust us for Best Bath Services Vancouver because we include simple, yet powerful safety products. Our collection of Bathroom safety products Vancouver is designed to offer long-term support.
                        </p>
                        <p class="text-lg text-gray-600 mb-4">
                            We carry high-quality Home2stay-approved items that last long and look good. Vancouver homes often need extra support, especially for loved ones with mobility challenges. This is why many people choose our Best Bath Services Vancouver plans that include durable Bathroom safety products Vancouver for added security.
                        </p>
                        <p class="text-lg text-gray-600 mb-6">
                            We superciliously offer Bathroom safety products Vancouver that fit every style and budget. Families trust us for safe, simple, and useful upgrades. These Bathroom safety products Vancouver give you stability and confidence during your daily routine. If you want a safer home, our safety products can make a big difference.
                        </p>
                        <p class="mb-5">Give us a call at <b><a href="tel:+16042591211" style="color: red;">(604) 259-1211</a></b> or submit a <b> <a href="#assessment" style="color: red;">FREE ASSESSMENT FORM</a></b> to check.</p>
                    </div>
                    <!-- Image -->
                    <div class="w-full lg:w-1/2">
                        <img src="{{ asset('/bathsafety-cat/vertical-platform-lift-bruno-residential-porch-down-by-steps.jpg') }}" alt="Bathroom Safety Products"
                            class="w-full h-full object-cover" style="min-height: 400px;">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bath and Toilet Safety Accessories -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="bg-white rounded-xl shadow-md overflow-hidden">
                    <div class="p-8 md:p-12">
                        <h2 class="text-3xl font-bold text-gray-800 mb-6 text-center">Bath and Toilet Safety Accessories:</h2>

                        <div class="prose prose-lg max-w-none">
                            <p class="text-gray-700 mb-4">
                                Bathrooms are usually slippery with hard floors. This renders safety accessories very significant. Home2stay equips the premises with several useful aids to avoid injuries and help in everyday care, especially through our trusted bath and toilet safety accessories.
                            </p>

                            <h3 class="text-2xl font-bold text-gray-800 mt-8 mb-4">The most useful ones include:</h3>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                                <div class="bg-gray-50 p-4 rounded-lg">
                                    <h4 class="font-semibold text-gray-800 mb-2">Toilet support frames</h4>
                                    <p class="text-gray-600 text-sm">Sturdy support frames provide balance and assistance.</p>
                                </div>
                                <div class="bg-gray-50 p-4 rounded-lg">
                                    <h4 class="font-semibold text-gray-800 mb-2">Raised seats</h4>
                                    <p class="text-gray-600 text-sm">Elevated seats make sitting and standing easier.</p>
                                </div>
                                <div class="bg-gray-50 p-4 rounded-lg">
                                    <h4 class="font-semibold text-gray-800 mb-2">Transfer benches</h4>
                                    <p class="text-gray-600 text-sm">Assist with safe entry and exit from bathtubs.</p>
                                </div>
                                <div class="bg-gray-50 p-4 rounded-lg">
                                    <h4 class="font-semibold text-gray-800 mb-2">Shower grips</h4>
                                    <p class="text-gray-600 text-sm">Provide secure grip and stability in the shower.</p>
                                </div>
                                <div class="bg-gray-50 p-4 rounded-lg">
                                    <h4 class="font-semibold text-gray-800 mb-2">Anti-slip steps</h4>
                                    <p class="text-gray-600 text-sm">Prevent slips and falls with secure footing.</p>
                                </div>
                            </div>

                            <p class="text-gray-700 mb-4">
                                Our team mentors you on all your decisions. We assemble all our products carefully and ensure that they fit you. Our Bath and toilet safety accessories are also popular among families that need to move more easily, as they assist with balance and support. These safety accessories minimize the pressure levels during bathing or when using the toilet. Our accessories will provide serenity when safety is primary. Many clients choose our bath and toilet safety accessories to create safer bathroom routines.
                            </p>

                            <h3 class="text-2xl font-bold text-gray-800 mt-8 mb-4">Our Most Popular Bath Services:</h3>

                            <p class="text-gray-700 mb-6">
                                What you want in your bathroom, we're providing you most popular bath services.
                            </p>

                            <div class="space-y-4 mb-8">
                                <div class="bg-gray-50 p-6 rounded-lg">
                                    <h4 class="font-bold text-gray-800 mb-2 text-lg">Walk-In Shower Upgrades:</h4>
                                    <p class="text-gray-600">We replace old tubs with modern walk-in showers. They look clean and feel safe. They also pair well with safety gear and Bathroom safety products Vancouver.</p>
                                </div>
                                <div class="bg-gray-50 p-6 rounded-lg">
                                    <h4 class="font-bold text-gray-800 mb-2 text-lg">Bathtub Conversions:</h4>
                                    <p class="text-gray-600">We convert tubs into safer spaces. This works great for seniors or people recovering from injury.</p>
                                </div>
                                <div class="bg-gray-50 p-6 rounded-lg">
                                    <h4 class="font-bold text-gray-800 mb-2 text-lg">Grab Bar Installation:</h4>
                                    <p class="text-gray-600">Grab bars help you move with confidence. We place them near showers, tubs, and toilets, supported by strong bath and toilet safety accessories.</p>
                                </div>
                                <div class="bg-gray-50 p-6 rounded-lg">
                                    <h4 class="font-bold text-gray-800 mb-2 text-lg">Toilet Height Adjustments:</h4>
                                    <p class="text-gray-600">A raised toilet makes sitting and standing easier. This small change can help your daily routine.</p>
                                </div>
                                <div class="bg-gray-50 p-6 rounded-lg">
                                    <h4 class="font-bold text-gray-800 mb-2 text-lg">Full Bathroom Safety Planning:</h4>
                                    <p class="text-gray-600">Our team inspects your bathroom and identifies areas that need improvement. Then we create a simple and safe plan for you.</p>
                                </div>
                            </div>

                            <div class="mt-8 flex flex-wrap gap-4 justify-center">
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
        </div>
    </section>

    <!-- Why Vancouver Families Trust Home2stay -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">Why Vancouver Families Trust Home2stay</h2>
                    <p class="text-lg text-gray-600">
                        Families trust Home2stay because we care about comfort and safety. We keep our process simple. We use clear words, safe tools, and strong installation methods. Our team completes each job with honesty and attention.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
                    <div class="bg-gray-50 p-6 rounded-lg">
                        <h3 class="text-xl font-bold text-gray-800 mb-4">When you pick Home2stay, you get:</h3>
                        <ul class="text-gray-600 space-y-2">
                            <li>• Friendly service</li>
                            <li>• Clear pricing</li>
                            <li>• Quick installation</li>
                            <li>• Quality materials</li>
                            <li>• Custom support</li>
                            <li>• A safer bathroom</li>
                        </ul>
                    </div>

                    <div class="bg-gray-50 p-6 rounded-lg">
                        <h3 class="text-xl font-bold text-gray-800 mb-4">&nbsp;</h3>
                        <p class="text-gray-600 mt-8">
                            <strong>Your safety is our goal. Your comfort is our promise.</strong>
                        </p>
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
                        <img src="{{ asset('/bathsafety-cat/walk-in-tubs-1.jpg') }}" alt="Vertical Platform Lifts"
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
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">Get Safer Bath Services for Your Home Today</h2>
                    <p class="text-gray-600 mb-4">Your bathroom should feel safe and easy to use every day. Home2stay offers the Best Bath Services Vancouver to help you enjoy unconcerned care. We install trusted products, helpful accessories, and custom features designed for real families. Whether you need advanced Bathroom safety products Vancouver or simple bath and toilet safety accessories, we are here to guide you.</p>
                    <p class="text-gray-600">If you want a safer bathroom, contact Home2stay today. We are ready to help you build a space that supports your comfort, safety, and relaxation.</p>
                </div>

                <form action="/submit-assessment" method="POST">
                    @csrf
                    <input type="hidden" name="form_type" value="quote">
                    <input type="hidden" name="form_source" value="Bathroom_Safety_Products_quote_form">
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
                            <label class="block text-gray-700 font-medium mb-2" for="location">Bathroom Location</label>
                            <input type="text" id="location" name="location" placeholder="e.g., Master bathroom, Main floor bathroom, etc."
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
                        </div>
                    </div>

                    <!-- Installation Type -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">What is your current bathing situation? *</label>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                            <label class="flex items-center space-x-3">
                                <input type="radio" name="current_situation" value="standard_tub" class="text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Standard Bathtub</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="radio" name="current_situation" value="shower_only" class="text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Shower Only</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="radio" name="current_situation" value="tub_shower_combo" class="text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Tub/Shower Combination</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="radio" name="current_situation" value="not_sure" class="text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Not Sure</span>
                            </label>
                        </div>
                    </div>

                    <!-- Therapy Interest -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Which therapeutic features interest you?</label>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="therapy_features[]" value="air_therapy"
                                    class="form-checkbox text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Air Therapy System</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="therapy_features[]" value="hydro_therapy"
                                    class="form-checkbox text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Hydro Therapy System</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="therapy_features[]" value="micro_bubble"
                                    class="form-checkbox text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Micro Bubble Therapy</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="therapy_features[]" value="heated_seating"
                                    class="form-checkbox text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Heated Seating</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="therapy_features[]" value="not_sure" class="form-checkbox text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Not Sure/Need Consultation</span>
                            </label>
                        </div>
                    </div>

                    <!-- Safety & Mobility Requirements -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">What are your primary safety concerns?</label>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="safety_concerns[]" value="high_step_over"
                                    class="form-checkbox text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">High Step-Over Height</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="safety_concerns[]" value="slipping_falling"
                                    class="form-checkbox text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Slipping/Falling Risks</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="safety_concerns[]" value="getting_in_out"
                                    class="form-checkbox text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Difficulty Getting In/Out</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="safety_concerns[]" value="standing_balance"
                                    class="form-checkbox text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Standing/Balance Issues</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="safety_concerns[]" value="mobility_aids"
                                    class="form-checkbox text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Use of Mobility Aids</span>
                            </label>
                        </div>
                    </div>

                    <!-- Additional Information -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-2" for="message">Additional Information</label>
                        <textarea id="message" name="message" rows="4"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent"
                            placeholder="Please describe your bathroom space, any health conditions that affect bathing, specific therapeutic needs, or questions about walk-in tubs..."></textarea>
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

    <!-- FAQs Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">FAQs:</h2>
                </div>

                <div class="space-y-6">
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">What type of Bathroom safety products Vancouver does Home2stay offer?</h3>
                        <p class="text-gray-600">
                            We offer grab bars, raised toilet seats, non-slip mats, shower chairs, walk-in options, and more. All products are designed to improve stability and prevent falls.
                        </p>
                    </div>

                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">How do bath and toilet safety accessories help seniors?</h3>
                        <p class="text-gray-600">
                            These accessories provide support, reduce pressure on joints, and make movement easier, helping seniors maintain independence and safety.
                        </p>
                    </div>

                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Can Home2stay install customized safety solutions?</h3>
                        <p class="text-gray-600">
                            Yes, we create a customized plan based on your layout, mobility needs, and bathroom structure to include the right safety products.
                        </p>
                    </div>

                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">How long does it take to install Bathroom safety products Vancouver?</h3>
                        <p class="text-gray-600">
                            Most installations take only a few hours, depending on what products you choose and the size of your bathroom.
                        </p>
                    </div>

                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Do I need a full renovation to improve bathroom safety?</h3>
                        <p class="text-gray-600">
                            Not always. Many families achieve great results simply by adding essential bath and toilet safety accessories without major remodeling.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-16 bg-primary">
        <div class="container mx-auto px-4">
                <div class="max-w-4xl mx-auto text-center text-white">
                <h2 class="text-3xl font-bold mb-6">Ready to Transform Your Bathroom Safety?</h2>
                <p class="text-xl mb-8">Contact us today to explore how our bathroom safety products and bath services can make your daily routine safer, more comfortable, and worry-free.</p>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="{{ route('contact') }}"
                        class="px-8 py-3 bg-white text-primary hover:bg-gray-100 rounded-lg font-medium transition duration-300">
                        Contact Us
                    </a>
                    <a href="#"
                        class="px-8 py-3 bg-transparent border-2 border-white text-white hover:bg-white/10 rounded-lg font-medium transition duration-300">
                        View All Products
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        // Initialize any scripts needed for the page
    </script>
@endpush