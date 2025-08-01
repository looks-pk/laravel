@extends('layouts.app')

@section('title', 'Walk-In Tub - Home2stay')
@section('meta_description', 'Experience the comfort and safety of our walk-in tubs, designed for easy entry and exit, promoting relaxation and peace of mind during bathing.')

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
        <div class="container mx-auto px-4 relative z-10 flex items-center" style="min-height: 500px;">
            <div class="max-w-3xl">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6">Walk-In Tubs</h1>
                <p class="text-xl text-white/90 mb-8">
                    A Walk-in Tub redefines your bathing experience- like having a refreshing and luxurious spa-like experience every time you take a bath. Home2stay's Walk-in Tubs are designed with superior safety and therapy systems just for you.
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
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Our Walk-In Tub Products</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Discover our range of walk-in tubs designed with superior safety and therapy systems for a spa-like bathing experience in your own home.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                <!-- Product 1 -->
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl flex flex-col h-full">
                    <div class="overflow-hidden relative">
                        <img src="{{ asset('/bathsafety-cat/walk-in-tubs-1.jpg') }}" alt="Home2stay Walk-In Bathtubs"
                            class="w-full object-cover" style="height: 400px;">
                        <div class="absolute top-0 right-0 bg-primary text-white text-sm font-bold px-3 py-1 m-4 rounded">
                            Popular
                        </div>
                    </div>
                    <div class="p-6 flex-1 flex flex-col">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Home2stay Walk-In Bathtubs</h3>
                        <p class="text-gray-600 mb-4 flex-grow">American Tubs' Walk-In Bathtubs are designed for safe, worry-free bathing. Accommodates the needs of those seeking safety, comfort, and therapeutic benefits.</p>
                        <div class="mt-auto">
                            <a href="/products/home2stay-walk-in-bathtubs/"
                                class="block w-full bg-primary hover:bg-primary-dark text-white py-3 px-4 rounded-lg transition duration-300 text-center font-medium">
                                View Product
                            </a>
                        </div>
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
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">Safe & Therapeutic Bathing Solution</h2>
                    <p class="text-lg text-gray-600">
                        If you are concerned about your or your loved ones' safety when taking a bath, rest assured that our senior walk-in tubs are made with your safety and security as our first priority.
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
                        <h3 class="text-xl font-bold text-gray-800 mb-2">ADA Compliant Safety</h3>
                        <p class="text-gray-600">Each walk-in tub is ADA-compliant, meeting the most important accessibility standards with safety U-bars and integrated safety features.</p>
                    </div>

                    <div class="bg-gray-50 p-6 rounded-lg text-center">
                        <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Low Threshold Entry</h3>
                        <p class="text-gray-600">Our walk-in tubs have a low threshold of only 6 inches, much safer than standard bathtubs with thresholds as high as 30 inches.</p>
                    </div>

                    <div class="bg-gray-50 p-6 rounded-lg text-center">
                        <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Therapeutic Spa Experience</h3>
                        <p class="text-gray-600">Air, hydro, and micro bubble therapy systems create a spa-like experience that soothes aching joints and bones in your own home.</p>
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
                            A Walk-in Tub redefines your bathing experience- like having a refreshing and luxurious spa-like experience every time you take a bath. Home2stay's Walk-in Tubs are designed with superior safety and therapy systems just for you.</p>
                        <p class="mb-5">Give us a call at <b><a href="tel:+16042591211" style="color: red;">(604) 259-1211</a></b> or submit a <b> <a href="#assessment" style="color: red;">FREE ASSESSMENT FORM</a></b> to check.</p>
                    </div>
                    <!-- Image -->
                    <div class="w-full lg:w-1/2">
                        <img src="{{ asset('/bathsafety-cat/vertical-platform-lift-bruno-residential-porch-down-by-steps.jpg') }}" alt="Walk-In Tubs"
                            class="w-full h-full object-cover" style="min-height: 400px;">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Walk-In Tub Details -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="bg-white rounded-xl shadow-md overflow-hidden">
                    <div class="p-8 md:p-12">
                        <h2 class="text-3xl font-bold text-gray-800 mb-6 text-center">Safety & Security</h2>

                        <div class="prose prose-lg max-w-none">
                            <p class="text-gray-700 mb-4">
                                If you are concerned about your or your loved ones' safety when taking a bath, rest assured that our senior walk-in tubs are made with your safety and security as our first priority. Each of Home2stay's walk-in tubs is ADA-compliant, which means they meet the most important accessibility standards in the industry.
                            </p>

                            <p class="text-gray-700 mb-4">
                                Our walk-in tubs also have a low threshold of 6 inches. This makes navigating your way in and out of our tubs much easier and safer than a standard bathtub, which can have thresholds as high as 30 inches.
                            </p>

                            <div class="my-8 p-6 bg-primary/5 border-l-4 border-primary rounded-r-lg">
                                <h3 class="text-2xl font-bold text-gray-800 mb-4">Comfort & Well-Being</h3>
                                <p class="text-gray-800 font-medium">
                                    Air, hydro, and micro bubble therapy systems create a bathing experience that soothes aching joints and bones. A spa experience in the comforts of your own home!
                                </p>
                            </div>

                            <p class="text-gray-700 mb-6">
                                The therapeutic features of our walk-in tubs can help alleviate many uncomfortable symptoms such as muscle tension, skin conditions, and everyday aches and pains.
                            </p>

                            <h3 class="text-2xl font-bold text-gray-800 mt-8 mb-4">Standard Features</h3>

                            <p class="text-gray-700 mb-4">
                                Home2stay's walk-in bath tubs by American Tub come standard with the following:
                            </p>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                                <div class="bg-gray-50 p-4 rounded-lg">
                                    <h4 class="font-semibold text-gray-800 mb-2">Safety Features</h4>
                                    <p class="text-gray-600 text-sm">Safety U-bar and integrated safety bar options for secure entry and exit.</p>
                                </div>
                                <div class="bg-gray-50 p-4 rounded-lg">
                                    <h4 class="font-semibold text-gray-800 mb-2">Durable Construction</h4>
                                    <p class="text-gray-600 text-sm">Sturdy, stainless steel frame with extra thick, hand-laid fiberglass shell.</p>
                                </div>
                                <div class="bg-gray-50 p-4 rounded-lg">
                                    <h4 class="font-semibold text-gray-800 mb-2">Premium Finish</h4>
                                    <p class="text-gray-600 text-sm">High sheen, marine grade gel coat finish for lasting beauty and durability.</p>
                                </div>
                                <div class="bg-gray-50 p-4 rounded-lg">
                                    <h4 class="font-semibold text-gray-800 mb-2">Reliable Sealing</h4>
                                    <p class="text-gray-600 text-sm">Long-lasting vinyl door seal with ergonomic, curved door handle.</p>
                                </div>
                                <div class="bg-gray-50 p-4 rounded-lg">
                                    <h4 class="font-semibold text-gray-800 mb-2">Quality Tested</h4>
                                    <p class="text-gray-600 text-sm">Constructed and 100% tested in Covina, CA for guaranteed quality.</p>
                                </div>
                                <div class="bg-gray-50 p-4 rounded-lg">
                                    <h4 class="font-semibold text-gray-800 mb-2">Easy Maintenance</h4>
                                    <p class="text-gray-600 text-sm">Easy access maintenance panels for convenient servicing.</p>
                                </div>
                            </div>

                            <h3 class="text-2xl font-bold text-gray-800 mt-8 mb-4">Customization Options</h3>

                            <p class="text-gray-700 mb-4">
                                Personalize your Home2stay walk-in tub with a variety of add-ons and features- they are customizable based on the user's size, needs, bathroom design, and more!
                            </p>

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

    <!-- Training & Support Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">Comprehensive Training & Support</h2>
                    <p class="text-lg text-gray-600">
                        Book a FREE ASSESSMENT with us at Home2stay and we'll guide you through the process of purchasing your elevator or porch lift.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
                    <div class="bg-gray-50 p-6 rounded-lg">
                        <h3 class="text-xl font-bold text-gray-800 mb-4">Installation Training</h3>
                        <p class="text-gray-600 mb-4">
                            After installation, our technicians and/or salesperson will give you, your caregiver, or the user/s a comprehensive introduction to the operation and maintenance of the product.
                        </p>
                        <ul class="text-gray-600 text-sm space-y-2">
                            <li>• Comprehensive operation training</li>
                            <li>• Maintenance guidance</li>
                            <li>• Safety procedures</li>
                            <li>• Troubleshooting basics</li>
                        </ul>
                    </div>

                    <div class="bg-gray-50 p-6 rounded-lg">
                        <h3 class="text-xl font-bold text-gray-800 mb-4">Flexible Training Options</h3>
                        <p class="text-gray-600 mb-4">
                            Additional training can be requested if the main user or caregiver is not on site after the installation is completed. This can also be done via video call, for your convenience.
                        </p>
                        <ul class="text-gray-600 text-sm space-y-2">
                            <li>• On-site training sessions</li>
                            <li>• Video call training available</li>
                            <li>• Additional sessions as needed</li>
                            <li>• Caregiver training included</li>
                        </ul>
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
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">Request Your Walk-In Tub Assessment</h2>
                    <p class="text-gray-600">Our walk-in tub specialists will evaluate your bathroom and recommend the
                        best tub solution for your safety and therapeutic needs.</p>
                </div>

                <form action="/submit-assessment" method="POST">
                    @csrf
                    <input type="hidden" name="form_type" value="quote">
                    <input type="hidden" name="form_source" value="Walk-In_Tubs_quote_form">
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

    <!-- Call to Action -->
    <section class="py-16 bg-primary">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center text-white">
                <h2 class="text-3xl font-bold mb-6">Ready to Transform Your Bathroom Safety?</h2>
                <p class="text-xl mb-8">Contact us today to explore how our walk-in tubs can make your bathing experience safer, more comfortable, and therapeutic.</p>
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