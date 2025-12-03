@extends('layouts.app')

@section('title', 'Promenaid Handrails Vancouver | Expert Handrail Installation | Home2Stay')
@section('meta_description', 'Professional Promenaid Handrails Vancouver and Promenaid Handrails Installtion Vancouver services. Safe, stylish, and built for every home by Home2Stay.')

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
            style="background-image: url('{{ asset('/prom/p3.png') }}');">
            <div class="absolute inset-0 bg-black opacity-60"></div>
        </div>

        <!-- Hero Content -->
        <div class="container mx-auto px-4 relative z-10 flex items-center mb-4 mt-4" style="min-height: 500px;">
            <div class="max-w-3xl">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6">Promenaid Handrails Vancouver – Safe, Stylish, and Built for Every Home</h1>
                <p class="text-xl text-white/90 mb-8">
                    Home2Stay assists families, older adults, and homeowners in making their homes safer without altering the appearance of their houses. Promenaid Handrails Vancouver is one of the safest upgrades that we offer and is a modern and robust system of railings designed to be used in buildings as well as outdoors. These handrails are friendly to the entire population and provide a stable support on the stairs, ramp, hallway, deck, and any other place where additional stability is required. Many homeowners searching for Promenaid Handrails Vancouver choose Home2Stay because of our quality and reliability.
                </p>
                <p class="text-xl text-white/90 mb-8">
                    A style should never be sacrificed for the sake of safety, and Promenaid demonstrates it. They contain smooth lines, elegant colors, and sound construction, which makes them fit well in any house, old or new. Many homeowners in Vancouver also prefer the system since it enhances the safety, in addition to value addition and a clean, finished appearance to the space. This is why people looking for Promenaid Handrails Vancouver trust us for professional support.
                </p>
                <p class="text-xl text-white/90 mb-8">
                    We have a purpose to make homes safe, comfortable, and easier to move around in. Our team has assisted hundreds of families around Vancouver in installing handrails that are durable over a long period. Be it that you want assistance with the stairs, greater ease of access, or a place that is safer for the seniors, Promenaid Handrails Vancouver is a really nice place to be.
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
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Why Choose Promenaid Handrails?</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Promenaid has a global reputation for quality. The handrails are smooth, comfortable to touch, and remain solid despite the day-to-day usage. That is why the number of Vancouver homeowners who put their trust in this brand is so high:
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <!-- Benefit 1 -->
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl flex flex-col h-full">
                    <div class="overflow-hidden relative">
                        <img src="{{ asset('/prom/p1.png') }}" alt="Strong and Durable"
                            class="w-full object-cover" style="height: 250px;">
                        <div class="absolute top-0 right-0 bg-primary text-white text-sm font-bold px-3 py-1 m-4 rounded">
                            Popular
                        </div>
                    </div>
                    <div class="p-6 flex-1 flex flex-col">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Strong and Durable:</h3>
                        <p class="text-gray-600 mb-4 flex-grow">Promenaid handrails are made from high-grade aluminum. They do not rust, crack, or fade. They can handle Vancouver's rain, moisture, and temperature changes without any wear out.</p>
                    </div>
                </div>

                <!-- Benefit 2 -->
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl flex flex-col h-full">
                    <div class="overflow-hidden relative">
                        <img src="{{ asset('/prom/p2.png') }}" alt="Safe for Everyone"
                            class="w-full object-cover" style="height: 250px;">
                    </div>
                    <div class="p-6 flex-1 flex flex-col">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Safe for Everyone:</h3>
                        <p class="text-gray-600 mb-4 flex-grow">These rails are safety compatible and accessible. They securely hold on very comfortably, and these are good inasmuch as they are used by the seniors, children, and anybody who requires additional support. The surface is smooth and not slippery.</p>
                    </div>
                </div>

                <!-- Benefit 3 -->
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl flex flex-col h-full">
                    <div class="overflow-hidden relative">
                        <img src="{{ asset('/prom/p4.png') }}" alt="Modern Look"
                            class="w-full object-cover" style="height: 250px;">
                    </div>
                    <div class="p-6 flex-1 flex flex-col">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Modern Look:</h3>
                        <p class="text-gray-600 mb-4 flex-grow">The handrails are modern in design. It is available in numerous colors and finishes. They also match any interior or exterior design, wood, tile, concrete, or carpet.</p>
                    </div>
                </div>

                <!-- Benefit 4 -->
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl flex flex-col h-full">
                    <div class="overflow-hidden relative">
                        <img src="{{ asset('/prom/p5.png') }}" alt="Fits Any Space"
                            class="w-full object-cover" style="height: 250px;">
                    </div>
                    <div class="p-6 flex-1 flex flex-col">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Fits Any Space:</h3>
                        <p class="text-gray-600 mb-4 flex-grow">Promenaid handrails are flexible. They are able to move in curves, hills, and turns. They are modular in nature and thus suitable for staircases, hallways, bathrooms, decks, and ramps.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Where Promenaid Handrails Work Best -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">Where Promenaid Handrails Work Best:</h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
                    <div class="bg-gray-50 p-8 rounded-lg">
                        <h3 class="text-2xl font-bold text-gray-800 mb-6">Indoor Spaces:</h3>
                        <ul class="text-gray-600 space-y-2">
                            <li>• Staircases</li>
                            <li>• Hallways</li>
                            <li>• Bathrooms</li>
                            <li>• Entrance areas</li>
                            <li>• Around beds or high-risk zones</li>
                        </ul>
                        <p class="text-gray-600 mt-4">Indoor rails give steady support without making your home look "clinical." They blend in with your existing decor.</p>
                    </div>

                    <div class="bg-gray-50 p-8 rounded-lg">
                        <h3 class="text-2xl font-bold text-gray-800 mb-6">Outdoor Spaces:</h3>
                        <ul class="text-gray-600 space-y-2">
                            <li>• Front steps</li>
                            <li>• Porches</li>
                            <li>• Ramps</li>
                            <li>• Decks</li>
                            <li>• Pathways</li>
                        </ul>
                        <p class="text-gray-600 mt-4">Outdoor rails stay strong in any weather and help prevent slips and falls on wet or uneven surfaces.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Promenaid Handrails Installation Service -->
    <section class="py-16 bg-primary">
        <div class="container mx-auto px-4">
            <div class="bg-gray-50 rounded-xl overflow-hidden shadow-lg">
                <div class="flex flex-col lg:flex-row">
                    <!-- Text Content -->
                    <div class="w-full lg:w-1/2 p-8 md:p-12 flex flex-col justify-center">
                        <h2 class="text-3xl font-bold text-gray-800 mb-4">Our Promenaid Handrails Installation Service:</h2>
                        <p class="text-lg text-gray-600 mb-4">
                            Home2Stay offers expert, full-service support from start to finish. Our team handles everything, planning, measuring, design, installation, and after-care. We make the process easy so you can enjoy a safer home right away.
                        </p>
                        <p class="text-lg text-gray-600 mb-6">
                            The system we use is known for its fast, clean, and secure setup. With Promenaid Handrails Installtion Vancouver, our trained team ensures that every rail is aligned properly and anchored firmly. Each installation is done with precision to make sure your handrails look great and stay strong for years. Many clients specifically request Promenaid Handrails Installtion Vancouver because of our trusted expertise.
                        </p>
                        <p class="mb-5">Give us a call at <b><a href="tel:+16042591211" style="color: red;">(604) 259-1211</a></b> or submit a <b> <a href="#assessment" style="color: red;">FREE ASSESSMENT FORM</a></b> to check.</p>
                    </div>
                    <!-- Image -->
                    <div class="w-full lg:w-1/2">
                        <img src="{{ asset('/prom/p6.png') }}" alt="Promenaid Handrails Installation"
                            class="w-full h-full object-cover" style="min-height: 400px;">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How Our Installation Process Works -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="bg-white rounded-xl shadow-md overflow-hidden">
                    <div class="p-8 md:p-12">
                        <h2 class="text-3xl font-bold text-gray-800 mb-6 text-center">How Our Installation Process Works:</h2>
                        <p class="text-lg text-gray-600 text-center mb-8">Our team and skilled technicians install your handrails quickly, and now we'll guide you throughout the installation process.</p>

                        <div class="prose prose-lg max-w-none">
                            <div class="space-y-6 mb-8">
                                <div class="bg-gray-50 p-6 rounded-lg">
                                    <h3 class="text-xl font-bold text-gray-800 mb-3">Step 1: Free Home Assessment</h3>
                                    <p class="text-gray-600">We visit your home to look at the areas where support is needed. We understand your needs, mobility concerns, and design preferences.</p>
                                </div>

                                <div class="bg-gray-50 p-6 rounded-lg">
                                    <h3 class="text-xl font-bold text-gray-800 mb-3">Step 2: Customized Plan</h3>
                                    <p class="text-gray-600">After measuring your staircase, hallway, or outdoor area, we suggest the best handrail placement. We help you choose styles, colors, and finishes that match your home. This is where our Promenaid Handrails Installtion Vancouver service stands out, offering guidance tailored to your home layout.</p>
                                </div>

                                <div class="bg-gray-50 p-6 rounded-lg">
                                    <h3 class="text-xl font-bold text-gray-800 mb-3">Step 3: Professional Installation</h3>
                                    <p class="text-gray-600">Our technicians install the handrails using top-quality brackets and fasteners. Every rail is leveled, secure, and comfortable to hold.</p>
                                </div>

                                <div class="bg-gray-50 p-6 rounded-lg">
                                    <h3 class="text-xl font-bold text-gray-800 mb-3">Step 4: Testing & Final Check</h3>
                                    <p class="text-gray-600">We test stability, alignment, and overall safety. Before leaving, we make sure everything meets our quality standards.</p>
                                </div>

                                <div class="bg-gray-50 p-6 rounded-lg">
                                    <h3 class="text-xl font-bold text-gray-800 mb-3">Step 5: Simple Care Instructions</h3>
                                    <p class="text-gray-600">Promenaid handrails are easy to maintain. We guide you on how to keep them clean and long-lasting.</p>
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

    <!-- Why Choose Home2Stay -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">Why Choose Home2Stay?</h2>
                    <p class="text-lg text-gray-600">
                        Home2Stay has become one of Vancouver's most trusted mobility and safety companies because we care about our clients' quality of life. Our service is built on respect, honesty, and reliable craftsmanship. Here's what you can expect from us:
                    </p>
                </div>

                <div class="space-y-6 mb-12">
                    <div class="bg-gray-50 p-6 rounded-lg">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Certified and Experienced Team</h3>
                        <p class="text-gray-600">Our installers are trained in mobility equipment and home safety solutions. We understand both construction standards and accessibility needs.</p>
                    </div>

                    <div class="bg-gray-50 p-6 rounded-lg">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Fast and Clean Installation</h3>
                        <p class="text-gray-600">We value your time. Most handrail installations are completed within a few hours, with no mess or damage to your walls. Homeowners looking for Promenaid Handrails Installtion Vancouver also appreciate our fast service.</p>
                    </div>

                    <div class="bg-gray-50 p-6 rounded-lg">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Personalized Safety Solutions</h3>
                        <p class="text-gray-600">Every home is different. We design a handrail setup that fits your exact needs—whether it's for aging parents, young children, or improving accessibility.</p>
                    </div>

                    <div class="bg-gray-50 p-6 rounded-lg">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Clear Pricing</h3>
                        <p class="text-gray-600">No hidden fees. We explain costs up front and provide a detailed plan before starting any work.</p>
                    </div>

                    <div class="bg-gray-50 p-6 rounded-lg">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Trusted by Families Across Vancouver</h3>
                        <p class="text-gray-600">Home2Stay is known for quality work, friendly service, and a commitment to making homes safer for everyone.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Who Benefits and Safety Matters -->
    <section class="py-16 bg-primary">
        <div class="container mx-auto px-4">
            <div class="bg-gray-50 rounded-xl overflow-hidden shadow-lg">
                <div class="flex flex-col lg:flex-row">
                    <!-- Text Content -->
                    <div class="w-full lg:w-1/2 p-8 md:p-12 flex flex-col justify-center">
                        <h2 class="text-3xl font-bold text-gray-800 mb-4">Who Benefits from Promenaid Handrails?</h2>
                        <p class="text-lg text-gray-600 mb-4">We're going to share with you who can get the benefits from Promenaid handrails. Keep reading!</p>
                        <ul class="text-lg text-gray-600 space-y-2 mb-6">
                            <li>• <strong>Seniors:</strong> Helps eliminate falls and enable movement with greater safety.</li>
                            <li>• <strong>Mobility Challenged People:</strong> Makes stairs or ramps stable, safe, and sure.</li>
                            <li>• <strong>Families with Kids:</strong> Increases the safety of stairs and external steps.</li>
                            <li>• <strong>Homeowners Renovating:</strong> Improves the appearance of the house as well as making it safer.</li>
                            <li>• <strong>Caregivers:</strong> Helps take the effort out of loving loved ones and alleviates the burden.</li>
                        </ul>
                        <h3 class="text-2xl font-bold text-gray-800 mb-3">Safety Matters, And It Starts at Home:</h3>
                        <p class="text-lg text-gray-600 mb-4">
                            Among household accidents, falls are very frequent. An easy handrail will eliminate serious injuries. Promenaid handrails provide a powerful, stable hold where it is required. All installed with the professional installations of Home2Stay, you are assured of peace of mind that your home is secure for everyone. The process of safety should be simple, cheap, and tension-free. That is why our team is listening, working with respect, and providing results to bring a real change in your daily life.
                        </p>
                    </div>
                    <!-- Image -->
                    <div class="w-full lg:w-1/2">
                        <img src="{{ asset('/prom/p6.png') }}" alt="Promenaid Handrails Benefits"
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
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">Ready to Make Your Home Safer?</h2>
                    <p class="text-gray-600 mb-4">In case you desire powerful, fashionable, and durable handrails, Promenaid is what you need. And Home2Stay is there to fit them carefully and neatly. Many residents who searched for Promenaid Handrails Vancouver and Promenaid Handrails Installtion Vancouver have already upgraded their homes with us.</p>
                    <p class="text-gray-600">We are ready to talk to you now and how we can make your home a safer, more conducive place to live with your loved ones.</p>
                </div>

                <form action="/submit-assessment" method="POST">
                    @csrf
                    <input type="hidden" name="form_type" value="quote">
                    <input type="hidden" name="form_source" value="Promenaid_Handrails_quote_form">
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
                            <input type="text" id="location" name="location" placeholder="e.g., Staircase, Hallway, Bathroom, etc."
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
                        </div>
                    </div>

                    <!-- Installation Area -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Where do you need handrails installed? *</label>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="installation_areas[]" value="indoor_stairs" class="form-checkbox text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Indoor Stairs</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="installation_areas[]" value="hallways" class="form-checkbox text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Hallways</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="installation_areas[]" value="bathroom" class="form-checkbox text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Bathroom</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="installation_areas[]" value="outdoor_steps" class="form-checkbox text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Outdoor Steps</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="installation_areas[]" value="deck_porch" class="form-checkbox text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Deck/Porch</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="installation_areas[]" value="ramp" class="form-checkbox text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Ramp</span>
                            </label>
                        </div>
                    </div>

                    <!-- Safety & Mobility Requirements -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Who will be using the handrails?</label>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="users[]" value="seniors"
                                    class="form-checkbox text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Seniors</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="users[]" value="mobility_challenges"
                                    class="form-checkbox text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">People with Mobility Challenges</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="users[]" value="children"
                                    class="form-checkbox text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Children</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="users[]" value="general_safety"
                                    class="form-checkbox text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">General Home Safety</span>
                            </label>
                        </div>
                    </div>

                    <!-- Additional Information -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-2" for="message">Additional Information</label>
                        <textarea id="message" name="message" rows="4"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent"
                            placeholder="Please describe your home layout, specific mobility concerns, preferred handrail colors or finishes, or any questions about Promenaid handrails..."></textarea>
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
                        <h3 class="text-xl font-bold text-gray-800 mb-3">What is the duration of the installation?</h3>
                        <p class="text-gray-600">
                            The installations of Promenaid handrail require between two and four hours, depending on the area size.
                        </p>
                    </div>

                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Are the handrails used outdoors?</h3>
                        <p class="text-gray-600">
                            Yes. Promenaid handrails are made of weather-resistant material and can be used on outdoors steps, ramps, and decks.
                        </p>
                    </div>

                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Does it have a color or design choice?</h3>
                        <p class="text-gray-600">
                            Yes. There are a number of finishes available, such as black, bronze, brushed aluminum, etc.
                        </p>
                    </div>

                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Are the rails beneficial to the seniors in terms of balance?</h3>
                        <p class="text-gray-600">
                            They are comfortable to hold and well supported, such that even the seniors and persons requiring some assistance in terms of stability will find them to be convenient.
                        </p>
                    </div>

                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">How do I clean the handrails?</h3>
                        <p class="text-gray-600">
                            All that is required is a wipe with an easy cleaner. The substance is not rusted or faded.
                        </p>
                    </div>

                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Do you offer a warranty?</h3>
                        <p class="text-gray-600">
                            Yes. Promenaid products have the warranty of the manufacturer, and Home2Stay also offers assistance with installation.
                        </p>
                    </div>

                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Are the rails able to take curved or steep stairs?</h3>
                        <p class="text-gray-600">
                            Yes. The modular form can be fitted around slopes, corners, and turns without difficulty.
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
                <h2 class="text-3xl font-bold mb-6">Ready to Make Your Home Safer?</h2>
                <p class="text-xl mb-8">Contact us today to explore how Promenaid Handrails Vancouver can make your home safer and more accessible for everyone.</p>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="{{ route('contact') }}"
                        class="px-8 py-3 bg-white text-primary hover:bg-gray-100 rounded-lg font-medium transition duration-300">
                        Contact Us
                    </a>
                    <a href="{{ route('products.index') }}"
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