@extends('layouts.app')

@section('title', 'Glass Mounted Promenade Handrail Vancouver | Sleek & Safe Handrail Installation | Home2Stay')
@section('meta_description', 'Discover premium Glass Mounted Promenade Handrails in Vancouver. Home2Stay offers expert glass-mounted handrail installation — modern design, maximum safety, and lasting durability for any home.')

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
            style="background-image: url('{{ asset('prom/prom-hand-5.jpg') }}');">
            <div class="absolute inset-0 bg-black opacity-60"></div>
        </div>

        <!-- Hero Content -->
        <div class="container mx-auto px-4 relative z-10 flex items-center mb-4 mt-4" style="min-height: 500px;">
            <div class="max-w-3xl">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6">Glass Mounted Promenade Handrail Vancouver – Modern Safety Without Compromise</h1>
                <p class="text-xl text-white/90 mb-8">
                    Home2Stay helps Vancouver homeowners upgrade their safety without sacrificing style. Our Glass Mounted Promenade Handrail systems combine the clean aesthetics of frameless glass with the trusted strength of the Promenade rail — giving you a sleek, open look while providing a firm, reliable grip wherever you need it most. Whether it's a staircase, balcony, deck, or entryway, a glass mounted promenade handrail is one of the most stylish safety investments you can make.
                </p>
                <p class="text-xl text-white/90 mb-8">
                    Unlike traditional wall-mounted rails, a Glass Mounted Promenade Handrail attaches directly to glass balustrade panels, preserving your sightlines and keeping spaces feeling open and bright. The aluminum Promenade rail sits cleanly on top of or alongside the glass, available in multiple finishes to complement any interior or exterior design. Homeowners across Vancouver choose this system because it elevates the look of their home while meeting the highest safety standards.
                </p>
                <p class="text-xl text-white/90 mb-8">
                    At Home2Stay, our certified team handles every step of your Glass Mounted Promenade Handrail installation — from measuring and planning to fitting and final inspection. We've helped hundreds of Vancouver families create safer, more beautiful spaces. If you're ready for a handrail that looks as good as it performs, you've come to the right place.
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
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Why Choose a Glass Mounted Promenade Handrail?</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    The Glass Mounted Promenade Handrail is the preferred choice for homeowners who want safety that doesn't interrupt the flow or beauty of their space. Here's why Vancouver residents consistently choose this system:
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <!-- Benefit 1 -->
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl flex flex-col h-full">
                    <div class="overflow-hidden relative">
                        <img src="{{ asset('prom/glass-mounted-prominad3.jpg') }}" alt="Glass Mounted Promenade Handrail - Open & Modern Look"
                            class="w-full object-cover" style="height: 250px;">
                        <div class="absolute top-0 right-0 bg-primary text-white text-sm font-bold px-3 py-1 m-4 rounded">
                            Popular
                        </div>
                    </div>
                    <div class="p-6 flex-1 flex flex-col">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Open, Modern Aesthetic:</h3>
                        <p class="text-gray-600 mb-4 flex-grow">Mounting the Promenade rail on glass panels keeps your space open and visually uncluttered. The frameless glass design preserves sightlines on staircases, balconies, and decks — giving your home a contemporary, high-end feel.</p>
                    </div>
                </div>

                <!-- Benefit 2 -->
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl flex flex-col h-full">
                    <div class="overflow-hidden relative">
                        <img src="{{ asset('prom/prom-hand-5.jpg') }}" alt="Glass Mounted Handrail - Strong Aluminum Rail"
                            class="w-full object-cover" style="height: 250px;">
                    </div>
                    <div class="p-6 flex-1 flex flex-col">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Strong, Durable Aluminum Rail:</h3>
                        <p class="text-gray-600 mb-4 flex-grow">The Promenade rail is crafted from high-grade anodized aluminum — resistant to rust, corrosion, and Vancouver's wet weather. It provides a smooth, comfortable grip that holds firm through daily use by seniors, children, and anyone needing extra support.</p>
                    </div>
                </div>

                <!-- Benefit 3 -->
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl flex flex-col h-full">
                    <div class="overflow-hidden relative">
                        <img src="{{ asset('prom/prom-hand-6.jpg') }}" alt="Glass Mounted Promenade Handrail Finishes and Colors"
                            class="w-full object-cover" style="height: 250px;">
                    </div>
                    <div class="p-6 flex-1 flex flex-col">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Multiple Finishes to Match Your Home:</h3>
                        <p class="text-gray-600 mb-4 flex-grow">Available in a range of anodized finishes — including black, bronze, and brushed aluminum — the Promenade rail pairs beautifully with clear, frosted, or tinted glass panels. It suits any interior or exterior style, from classic to ultra-modern.</p>
                    </div>
                </div>

                <!-- Benefit 4 -->
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl flex flex-col h-full">
                    <div class="overflow-hidden relative">
                        <img src="{{ asset('prom/glass-mounted-prominad4.jpg') }}" alt="Glass Mounted Handrail Installation Vancouver"
                            class="w-full object-cover" style="height: 250px;">
                    </div>
                    <div class="p-6 flex-1 flex flex-col">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Versatile Glass-Panel Compatibility:</h3>
                        <p class="text-gray-600 mb-4 flex-grow">The glass-mounted system works with most standard tempered or laminated glass balustrade panels. Its modular design adapts to straight runs, angled staircases, and curved installations — making it ideal for both new builds and renovations across Vancouver.</p>
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
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">Where Glass Mounted Promenade Handrails Work Best:</h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
                    <div class="bg-gray-50 p-8 rounded-lg">
                        <h3 class="text-2xl font-bold text-gray-800 mb-6">Indoor Spaces:</h3>
                        <ul class="text-gray-600 space-y-2">
                            <li>• Open-riser staircases with glass balustrades</li>
                            <li>• Interior balconies and mezzanines</li>
                            <li>• Hallways with glass partition walls</li>
                            <li>• Entryways and foyers</li>
                            <li>• Split-level transitions</li>
                        </ul>
                        <p class="text-gray-600 mt-4">Indoors, the glass mounted rail adds safety while keeping your space feeling light and open — no bulky posts or wall anchors interrupting your design.</p>
                    </div>

                    <div class="bg-gray-50 p-8 rounded-lg">
                        <h3 class="text-2xl font-bold text-gray-800 mb-6">Outdoor Spaces:</h3>
                        <ul class="text-gray-600 space-y-2">
                            <li>• Decks and patios with glass railings</li>
                            <li>• Exterior balconies</li>
                            <li>• Front entry steps</li>
                            <li>• Pool surrounds</li>
                            <li>• Rooftop terraces</li>
                        </ul>
                        <p class="text-gray-600 mt-4">Outdoors, the anodized aluminum rail and tempered glass panels withstand Vancouver's rain, wind, and temperature changes — delivering lasting safety and curb appeal.</p>
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
                        <h2 class="text-3xl font-bold text-gray-800 mb-4">Our Glass Mounted Promenade Handrail Installation Service:</h2>
                        <p class="text-lg text-gray-600 mb-4">
                            Installing a Glass Mounted Promenade Handrail requires precision — both for safety and aesthetics. Home2Stay provides a complete, end-to-end service: assessment, glass panel compatibility check, custom rail fitting, and a final safety inspection. We make the process seamless so you can enjoy your upgraded space right away.
                        </p>
                        <p class="text-lg text-gray-600 mb-6">
                            Our trained installers use purpose-built glass-mount brackets and hardware to secure the Promenade rail directly to your glass panels without compromising their integrity. Every rail is leveled, torqued to spec, and tested for load before we leave. Vancouver homeowners trust Home2Stay for glass mounted promenade handrail installation because we get it right the first time.
                        </p>
                        <p class="mb-5">Give us a call at <b><a href="tel:+16042591211" style="color: red;">(604) 259-1211</a></b> or submit a <b> <a href="#assessment" style="color: red;">FREE ASSESSMENT FORM</a></b> to check.</p>
                    </div>
                    <!-- Image -->
                    <div class="w-full lg:w-1/2">
                        <img src="{{ asset('prom/glass-mounted-prominad4.jpg') }}" alt="Glass Mounted Promenade Handrail Installation Vancouver"
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
                        <h2 class="text-3xl font-bold text-gray-800 mb-6 text-center">How Our Glass Mounted Handrail Installation Works:</h2>
                        <p class="text-lg text-gray-600 text-center mb-8">Our certified technicians make the glass mounted promenade handrail installation process smooth and stress-free — from first visit to final handover.</p>

                        <div class="prose prose-lg max-w-none">
                            <div class="space-y-6 mb-8">
                                <div class="bg-gray-50 p-6 rounded-lg">
                                    <h3 class="text-xl font-bold text-gray-800 mb-3">Step 1: Free Home Assessment</h3>
                                    <p class="text-gray-600">We visit your property to inspect the existing glass panels, measure the run length, and assess load requirements. We discuss your safety needs, design preferences, and any mobility concerns.</p>
                                </div>

                                <div class="bg-gray-50 p-6 rounded-lg">
                                    <h3 class="text-xl font-bold text-gray-800 mb-3">Step 2: Glass Compatibility & Custom Plan</h3>
                                    <p class="text-gray-600">We verify that your glass panels meet the thickness and temper specifications required for a safe glass-mounted installation. We then recommend the ideal bracket type, rail height, and finish to match your home's style and layout.</p>
                                </div>

                                <div class="bg-gray-50 p-6 rounded-lg">
                                    <h3 class="text-xl font-bold text-gray-800 mb-3">Step 3: Precision Glass-Mounted Installation</h3>
                                    <p class="text-gray-600">Our technicians fit the purpose-built glass-mount brackets directly to the panels using the correct clamping hardware — no drilling through the glass. The Promenade rail is then secured on top, perfectly level and flush.</p>
                                </div>

                                <div class="bg-gray-50 p-6 rounded-lg">
                                    <h3 class="text-xl font-bold text-gray-800 mb-3">Step 4: Load Testing & Final Inspection</h3>
                                    <p class="text-gray-600">We apply load tests to every bracket and rail section, checking alignment, torque, and stability. Nothing is signed off until the installation meets our safety standards and looks exactly right.</p>
                                </div>

                                <div class="bg-gray-50 p-6 rounded-lg">
                                    <h3 class="text-xl font-bold text-gray-800 mb-3">Step 5: Care Guide & Handover</h3>
                                    <p class="text-gray-600">We walk you through simple cleaning and maintenance tips for both the aluminum rail and glass panels — so your system stays looking great and performing safely for years to come.</p>
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
                        <p class="text-gray-600">We value your time. Most glass mounted promenade handrail installations are completed within a few hours, with no mess and no damage to your glass panels or surrounding surfaces.</p>
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
                        <h2 class="text-3xl font-bold text-gray-800 mb-4">Who Benefits from a Glass Mounted Promenade Handrail?</h2>
                        <p class="text-lg text-gray-600 mb-4">This system is ideal for any Vancouver homeowner who values both safety and design. Here's who benefits most:</p>
                        <ul class="text-lg text-gray-600 space-y-2 mb-6">
                            <li>• <strong>Seniors:</strong> A firm, easy-to-grip rail at the right height dramatically reduces fall risk on stairs and balconies.</li>
                            <li>• <strong>People with Mobility Challenges:</strong> Provides a stable, continuous support along glass-panel staircases and ramps.</li>
                            <li>• <strong>Families with Young Children:</strong> Adds a safe grip on open-riser stairs and elevated decks without blocking views or light.</li>
                            <li>• <strong>Homeowners Renovating:</strong> Elevates the look of a glass balustrade system while adding a practical, code-compliant handrail.</li>
                            <li>• <strong>Architects & Builders:</strong> A clean glass-mounted solution that meets BC building code requirements without compromising the design brief.</li>
                        </ul>
                        <h3 class="text-2xl font-bold text-gray-800 mb-3">Safety and Style — No Compromise:</h3>
                        <p class="text-lg text-gray-600 mb-4">
                            Falls are the leading cause of home injury in Canada. A properly installed glass mounted promenade handrail gives you a strong, reliable grip exactly where it's needed — without the visual heaviness of traditional wall-mounted rails. With Home2Stay handling the installation, you get peace of mind that your rail is safe, compliant, and built to last through Vancouver's climate and daily life.
                        </p>
                    </div>
                    <!-- Image -->
                    <div class="w-full lg:w-1/2">
                        <img src="{{ asset('prom/prom-hand-6.jpg') }}" alt="Glass Mounted Promenade Handrail Benefits Vancouver"
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
                    <p class="text-gray-600 mb-4">If you're looking for a glass mounted promenade handrail that looks stunning and delivers lasting safety, Home2Stay has the expertise to make it happen. Hundreds of Vancouver homeowners have already upgraded their glass balustrades with our professional installation service.</p>
                    <p class="text-gray-600">Fill out the form below for a free assessment, and our team will get back to you with a plan tailored to your space.</p>
                </div>

                <form action="/submit-assessment" method="POST">
                    @csrf
                    <input type="hidden" name="form_type" value="quote">
                    <input type="hidden" name="form_source" value="Glass_Mounted_Promenade_Handrail_quote_form">
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
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Does the glass mounted installation damage my glass panels?</h3>
                        <p class="text-gray-600">
                            No. Our glass-mount brackets clamp onto the panel edge or face without drilling through the glass. We only proceed once we've confirmed your panels meet the required thickness and temper specifications for a safe, non-damaging installation.
                        </p>
                    </div>

                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">What type of glass panels are compatible?</h3>
                        <p class="text-gray-600">
                            The Promenade glass-mount system works with most 10mm–21.5mm tempered or laminated glass balustrade panels. Our team will verify compatibility during the free home assessment before any work begins.
                        </p>
                    </div>

                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">What finishes are available for the Promenade rail?</h3>
                        <p class="text-gray-600">
                            The rail is available in several anodized finishes including matte black, dark bronze, and brushed aluminum. All finishes are weather-resistant and suitable for both indoor and outdoor use.
                        </p>
                    </div>

                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Can the glass mounted handrail be used outdoors?</h3>
                        <p class="text-gray-600">
                            Yes. The anodized aluminum rail and stainless hardware are designed for outdoor exposure. They resist rust, corrosion, and UV fading — performing reliably on Vancouver decks, balconies, and exterior staircases year-round.
                        </p>
                    </div>

                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">How long does a glass mounted promenade handrail installation take?</h3>
                        <p class="text-gray-600">
                            Most installations are completed in two to four hours, depending on the length of the run and the number of brackets required. Our team works efficiently and leaves the site clean.
                        </p>
                    </div>

                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Does the rail meet BC building code requirements?</h3>
                        <p class="text-gray-600">
                            Yes. The Promenade glass-mounted system is designed to comply with BC building code handrail height and load requirements. Our installers ensure every rail is positioned and secured to meet code standards.
                        </p>
                    </div>

                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">How do I maintain the rail and glass panels?</h3>
                        <p class="text-gray-600">
                            The aluminum rail can be wiped down with a mild soap and water solution. Glass panels stay clean with standard glass cleaner. We provide a full care guide at handover — both materials are low-maintenance and built to look good with minimal effort.
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
                <h2 class="text-3xl font-bold mb-6">Ready to Upgrade Your Glass Balustrade with a Promenade Handrail?</h2>
                <p class="text-xl mb-8">Contact Home2Stay today to explore how a Glass Mounted Promenade Handrail can make your Vancouver home safer, more stylish, and accessible for everyone.</p>
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