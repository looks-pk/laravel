@extends('layouts.app')

@section('title', 'Indoor Promenaid Handrail Vancouver | Interior Handrail Installation | Home2Stay')
@section('meta_description', 'Expert Indoor Promenaid Handrail installation in Vancouver. Home2Stay installs safe, stylish indoor handrails for staircases, hallways, and bathrooms — built to last in every home.')

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
            style="background-image: url('{{ asset('prom/prom-hand-3.jpeg') }}');">
            <div class="absolute inset-0 bg-black opacity-60"></div>
        </div>

        <!-- Hero Content -->
        <div class="container mx-auto px-4 relative z-10 flex items-center mb-4 mt-4" style="min-height: 500px;">
            <div class="max-w-3xl">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6">Indoor Promenaid Handrail Vancouver – Safe, Stylish Support Inside Every Home</h1>
                <p class="text-xl text-white/90 mb-8">
                    Home2Stay helps Vancouver families make the inside of their homes safer without changing the way they look. Our Indoor Promenaid Handrail installations bring the trusted strength of the Promenaid system to your staircases, hallways, bathrooms, and living spaces. Whether you're supporting an aging parent, a family member with mobility challenges, or simply want a safer home for everyone, an Indoor Promenaid Handrail is one of the most effective upgrades you can make.
                </p>
                <p class="text-xl text-white/90 mb-8">
                    Promenaid's interior rail system is designed to blend seamlessly into any home décor. The anodized aluminum profiles are smooth to the touch, available in finishes that complement wood, tile, carpet, and painted walls alike. Unlike bulky grab bars or clinical-looking supports, an Indoor Promenaid Handrail looks like it was always part of your home — clean, modern, and purpose-built for daily use.
                </p>
                <p class="text-xl text-white/90 mb-8">
                    At Home2Stay, our certified team has installed indoor Promenaid handrails in hundreds of Vancouver homes. From a single staircase run to a complete indoor safety plan, we handle every detail — measuring, fitting, and finishing — so your handrail is secure, level, and ready to use from day one.
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
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Why Choose an Indoor Promenaid Handrail?</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Promenaid is trusted by homeowners and occupational therapists across Canada for good reason. Here's why it's the top choice for indoor handrail installation in Vancouver:
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <!-- Benefit 1 -->
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl flex flex-col h-full">
                    <div class="overflow-hidden relative">
                        <img src="{{ asset('prom/prom-hand-1.jpg') }}" alt="Indoor Promenaid Handrail - Blends With Home Decor"
                            class="w-full object-cover" style="height: 250px;">
                        <div class="absolute top-0 right-0 bg-primary text-white text-sm font-bold px-3 py-1 m-4 rounded">
                            Popular
                        </div>
                    </div>
                    <div class="p-6 flex-1 flex flex-col">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Blends With Your Interior:</h3>
                        <p class="text-gray-600 mb-4 flex-grow">The Indoor Promenaid Handrail is available in finishes like matte black, brushed aluminum, and dark bronze — designed to complement wood banisters, painted walls, and tiled surfaces without looking out of place.</p>
                    </div>
                </div>

                <!-- Benefit 2 -->
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl flex flex-col h-full">
                    <div class="overflow-hidden relative">
                        <img src="{{ asset('prom/prom-hand-2.jpg') }}" alt="Indoor Promenaid Handrail - Safe Grip for Everyone"
                            class="w-full object-cover" style="height: 250px;">
                    </div>
                    <div class="p-6 flex-1 flex flex-col">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Safe, Comfortable Grip:</h3>
                        <p class="text-gray-600 mb-4 flex-grow">The smooth, round aluminum profile is easy to grip firmly — important for seniors, people recovering from surgery, and anyone who needs extra confidence on indoor stairs or hallways. The consistent diameter meets accessibility guidelines for handrail grip.</p>
                    </div>
                </div>

                <!-- Benefit 3 -->
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl flex flex-col h-full">
                    <div class="overflow-hidden relative">
                        <img src="{{ asset('prom/prom-inout-3.jpg') }}" alt="Indoor Promenaid Handrail - Strong Aluminum Construction"
                            class="w-full object-cover" style="height: 250px;">
                    </div>
                    <div class="p-6 flex-1 flex flex-col">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Long-Lasting Aluminum Build:</h3>
                        <p class="text-gray-600 mb-4 flex-grow">Promenaid rails are made from high-grade anodized aluminum — they won't crack, warp, or fade indoors. Unlike wood handrails that can loosen over time, the Promenaid system stays firmly anchored and easy to clean with a simple wipe-down.</p>
                    </div>
                </div>

                <!-- Benefit 4 -->
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl flex flex-col h-full">
                    <div class="overflow-hidden relative">
                        <img src="{{ asset('prom/prom-inout-1.jpg') }}" alt="Indoor Promenaid Handrail - Modular and Adaptable"
                            class="w-full object-cover" style="height: 250px;">
                    </div>
                    <div class="p-6 flex-1 flex flex-col">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Modular for Any Indoor Layout:</h3>
                        <p class="text-gray-600 mb-4 flex-grow">Promenaid's modular system adapts to straight runs, angled staircases, landings, and curved hallways. Whether your home is heritage or modern, the indoor rail can be configured to fit any layout without major structural changes.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Where Indoor Promenaid Handrails Work Best -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">Where Indoor Promenaid Handrails Are Installed:</h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
                    <div class="bg-gray-50 p-8 rounded-lg">
                        <h3 class="text-2xl font-bold text-gray-800 mb-6">High-Traffic Indoor Areas:</h3>
                        <ul class="text-gray-600 space-y-2">
                            <li>• Interior staircases (single and multi-flight)</li>
                            <li>• Hallways and corridors</li>
                            <li>• Bathroom and shower entries</li>
                            <li>• Bedroom doorways and transitions</li>
                            <li>• Split-level landings</li>
                        </ul>
                        <p class="text-gray-600 mt-4">In high-traffic areas, the indoor Promenaid rail provides continuous, reliable support — reducing fall risk at every step without cluttering the space.</p>
                    </div>

                    <div class="bg-gray-50 p-8 rounded-lg">
                        <h3 class="text-2xl font-bold text-gray-800 mb-6">Accessibility & Care Zones:</h3>
                        <ul class="text-gray-600 space-y-2">
                            <li>• Beside beds for sit-to-stand support</li>
                            <li>• Along walls for balance and stability</li>
                            <li>• At the top and bottom of stairs</li>
                            <li>• Inside wheelchair-accessible spaces</li>
                            <li>• Near entry doors and thresholds</li>
                        </ul>
                        <p class="text-gray-600 mt-4">For seniors aging in place or anyone recovering from injury, targeted indoor handrail placement can make independent living safer and more manageable at home.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Indoor Promenaid Handrail Installation Service -->
    <section class="py-16 bg-primary">
        <div class="container mx-auto px-4">
            <div class="bg-gray-50 rounded-xl overflow-hidden shadow-lg">
                <div class="flex flex-col lg:flex-row">
                    <!-- Text Content -->
                    <div class="w-full lg:w-1/2 p-8 md:p-12 flex flex-col justify-center">
                        <h2 class="text-3xl font-bold text-gray-800 mb-4">Our Indoor Promenaid Handrail Installation Service:</h2>
                        <p class="text-lg text-gray-600 mb-4">
                            Home2Stay provides a full indoor handrail service from start to finish. Our team visits your home, assesses each area where support is needed, and installs the Promenaid rail securely into your walls using the correct anchoring hardware for your wall type — drywall, plaster, concrete, or wood stud.
                        </p>
                        <p class="text-lg text-gray-600 mb-6">
                            Every indoor Promenaid Handrail installation is done with care for your home's finishes. We patch, paint-match where needed, and leave the site clean. Our installers are experienced with interior environments and understand how to deliver a rail that looks intentional — not an afterthought. Vancouver homeowners trust Home2Stay because we treat your home like our own.
                        </p>
                        <p class="mb-5">Give us a call at <b><a href="tel:+16042591211" style="color: red;">(604) 259-1211</a></b> or submit a <b> <a href="#assessment" style="color: red;">FREE ASSESSMENT FORM</a></b> to get started.</p>
                    </div>
                    <!-- Image -->
                    <div class="w-full lg:w-1/2">
                        <img src="{{ asset('prom/prom-inout-1.jpg') }}" alt="Indoor Promenaid Handrail Installation Vancouver"
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
                        <h2 class="text-3xl font-bold text-gray-800 mb-6 text-center">How Our Indoor Handrail Installation Works:</h2>
                        <p class="text-lg text-gray-600 text-center mb-8">Our certified installers make the process simple and stress-free — here's exactly what to expect from your indoor Promenaid Handrail installation.</p>

                        <div class="prose prose-lg max-w-none">
                            <div class="space-y-6 mb-8">
                                <div class="bg-gray-50 p-6 rounded-lg">
                                    <h3 class="text-xl font-bold text-gray-800 mb-3">Step 1: Free In-Home Assessment</h3>
                                    <p class="text-gray-600">We visit your home to walk through each interior area where a handrail is needed. We note wall construction, staircase angle, and any mobility or accessibility requirements specific to the people using the space.</p>
                                </div>

                                <div class="bg-gray-50 p-6 rounded-lg">
                                    <h3 class="text-xl font-bold text-gray-800 mb-3">Step 2: Customized Indoor Plan</h3>
                                    <p class="text-gray-600">We measure each run and design a handrail layout that fits your staircase, hallway, or room. We help you choose the right finish and bracket style to match your existing interior — so the rail enhances your home rather than clashing with it.</p>
                                </div>

                                <div class="bg-gray-50 p-6 rounded-lg">
                                    <h3 class="text-xl font-bold text-gray-800 mb-3">Step 3: Wall Anchoring & Rail Fitting</h3>
                                    <p class="text-gray-600">Our technicians locate studs or use appropriate wall anchors for your wall type, then fit the Promenaid brackets at the correct height and spacing. The rail is attached, leveled, and torqued to ensure it meets BC building code load requirements.</p>
                                </div>

                                <div class="bg-gray-50 p-6 rounded-lg">
                                    <h3 class="text-xl font-bold text-gray-800 mb-3">Step 4: Safety Test & Finish Check</h3>
                                    <p class="text-gray-600">We apply a firm load test to every bracket and rail section. We also check that all end caps are fitted, surfaces are clean, and the rail height is comfortable and code-compliant before we consider the job done.</p>
                                </div>

                                <div class="bg-gray-50 p-6 rounded-lg">
                                    <h3 class="text-xl font-bold text-gray-800 mb-3">Step 5: Care Instructions & Handover</h3>
                                    <p class="text-gray-600">We walk you through how to keep your indoor Promenaid Handrail clean and in top condition. Maintenance is minimal — the anodized aluminum requires nothing more than a damp cloth to stay looking new.</p>
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
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">Why Choose Home2Stay for Indoor Handrail Installation?</h2>
                    <p class="text-lg text-gray-600">
                        Home2Stay is one of Vancouver's most trusted home safety and mobility companies. Our indoor handrail service is built on respect for your home, honest communication, and reliable workmanship. Here's what sets us apart:
                    </p>
                </div>

                <div class="space-y-6 mb-12">
                    <div class="bg-gray-50 p-6 rounded-lg">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Certified and Experienced Installers</h3>
                        <p class="text-gray-600">Our team is trained in mobility equipment and home safety solutions. We understand interior construction, accessibility standards, and how to work carefully inside occupied homes.</p>
                    </div>

                    <div class="bg-gray-50 p-6 rounded-lg">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Minimal Disruption to Your Home</h3>
                        <p class="text-gray-600">Most indoor Promenaid Handrail installations are completed within a few hours. We protect your floors, patch any wall openings cleanly, and leave no mess — so your daily routine is barely interrupted.</p>
                    </div>

                    <div class="bg-gray-50 p-6 rounded-lg">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Tailored to Your Home and Needs</h3>
                        <p class="text-gray-600">Every indoor handrail plan is custom — designed around your specific staircase, wall layout, and the needs of the people living in your home. We don't offer one-size-fits-all solutions.</p>
                    </div>

                    <div class="bg-gray-50 p-6 rounded-lg">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Transparent, Upfront Pricing</h3>
                        <p class="text-gray-600">No hidden costs or surprises. We provide a clear quote before starting any work so you know exactly what to expect.</p>
                    </div>

                    <div class="bg-gray-50 p-6 rounded-lg">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Trusted Across Vancouver</h3>
                        <p class="text-gray-600">Hundreds of Vancouver families have improved their home safety with our help. We're known for quality work, a friendly approach, and installations that hold up for years.</p>
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
                        <h2 class="text-3xl font-bold text-gray-800 mb-4">Who Benefits from an Indoor Promenaid Handrail?</h2>
                        <p class="text-lg text-gray-600 mb-4">An indoor handrail makes a meaningful difference for many different people living in Vancouver homes:</p>
                        <ul class="text-lg text-gray-600 space-y-2 mb-6">
                            <li>• <strong>Seniors Aging in Place:</strong> Reduces fall risk on stairs and in hallways, supporting independent living at home longer.</li>
                            <li>• <strong>People Recovering from Surgery:</strong> Provides the support needed to move safely through the home during rehabilitation.</li>
                            <li>• <strong>People with Mobility Challenges:</strong> Makes every interior transition — step, hallway, bathroom — safer and more manageable.</li>
                            <li>• <strong>Families with Young Children:</strong> Adds a secure grip on interior staircases where kids are at risk of slipping.</li>
                            <li>• <strong>Homeowners Planning Ahead:</strong> Installing indoor handrails now adds value and prepares your home for changing needs over time.</li>
                        </ul>
                        <h3 class="text-2xl font-bold text-gray-800 mb-3">Most Falls Happen Inside the Home:</h3>
                        <p class="text-lg text-gray-600 mb-4">
                            The majority of serious fall injuries happen on interior staircases and in hallways — often in homes that have no handrail, or one that is too low, too thin, or not anchored properly. An Indoor Promenaid Handrail, professionally installed by Home2Stay, gives every person in your household a firm, reliable grip in exactly the places they need it most.
                        </p>
                    </div>
                    <!-- Image -->
                    <div class="w-full lg:w-1/2">
                        <img src="{{ asset('prom/prom-inout-3.jpg') }}" alt="Indoor Promenaid Handrail Benefits Vancouver"
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
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">Ready to Make the Inside of Your Home Safer?</h2>
                    <p class="text-gray-600 mb-4">If you're looking for a professional Indoor Promenaid Handrail installation in Vancouver, Home2Stay is ready to help. Our team will assess your home, recommend the right setup, and install everything cleanly and securely.</p>
                    <p class="text-gray-600">Fill out the form below and we'll be in touch to arrange your free in-home assessment.</p>
                </div>

                <form action="/submit-assessment" method="POST">
                    @csrf
                    <input type="hidden" name="form_type" value="quote">
                    <input type="hidden" name="form_source" value="Indoor_Promenaid_Handrail_quote_form">
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
                        <label class="block text-gray-700 font-medium mb-2">Where do you need the indoor handrail installed? *</label>
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
                                <input type="checkbox" name="installation_areas[]" value="bedroom" class="form-checkbox text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Bedroom</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="installation_areas[]" value="landing" class="form-checkbox text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Stair Landing</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="installation_areas[]" value="entryway" class="form-checkbox text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Entryway / Foyer</span>
                            </label>
                        </div>
                    </div>

                    <!-- Safety & Mobility Requirements -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Who will be using the handrail?</label>
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
                            placeholder="Please describe your indoor areas, wall types, mobility concerns, preferred finishes, or any questions about indoor Promenaid handrails..."></textarea>
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
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">FAQs: Indoor Promenaid Handrail</h2>
                </div>

                <div class="space-y-6">
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Can an indoor Promenaid Handrail be installed on any wall type?</h3>
                        <p class="text-gray-600">
                            Yes. Our installers are experienced with drywall, plaster, concrete, and wood-stud walls. We select the appropriate anchors and brackets for your specific wall construction to ensure the rail is firmly and safely secured.
                        </p>
                    </div>

                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Will the installation damage my walls or paint?</h3>
                        <p class="text-gray-600">
                            We take care to minimize any impact on your interior finishes. Bracket holes are small and placed precisely. Where needed, we can patch and clean up after installation so the wall looks tidy.
                        </p>
                    </div>

                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">What finishes are available for indoor use?</h3>
                        <p class="text-gray-600">
                            The Promenaid indoor rail is available in matte black, dark bronze, and brushed aluminum. All finishes are anodized for durability and are designed to complement common interior color palettes and wood tones.
                        </p>
                    </div>

                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Does the indoor handrail meet BC building code?</h3>
                        <p class="text-gray-600">
                            Yes. Our installations are done to BC building code standards for handrail height (865mm–965mm from stair nosing), grip diameter, and structural load capacity. This is important for both safety and insurance or resale purposes.
                        </p>
                    </div>

                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">How long does an indoor handrail installation take?</h3>
                        <p class="text-gray-600">
                            Most single-run indoor Promenaid Handrail installations are completed in two to three hours. Larger projects covering multiple areas may take a full day. We'll give you a clear time estimate during the assessment.
                        </p>
                    </div>

                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Can the rail be installed on a curved or angled staircase?</h3>
                        <p class="text-gray-600">
                            Yes. Promenaid's modular system adapts to angled runs, landings, and curved staircases. Our installers will configure the brackets and rail sections to follow the exact pitch and turn of your staircase.
                        </p>
                    </div>

                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">How do I keep an indoor Promenaid Handrail clean?</h3>
                        <p class="text-gray-600">
                            Simply wipe the rail with a damp cloth and mild household cleaner. The anodized aluminum surface resists fingerprints and grime, and does not require any special products or ongoing maintenance.
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
                <h2 class="text-3xl font-bold mb-6">Ready to Install an Indoor Promenaid Handrail in Your Vancouver Home?</h2>
                <p class="text-xl mb-8">Contact Home2Stay today and let our team design and install an indoor Promenaid Handrail that makes your home safer and more comfortable for everyone who lives there.</p>
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
