@extends('layouts.app')

@section('title', 'Outdoor Promenaid Handrail Vancouver | Exterior Handrail Installation | Home2Stay')
@section('meta_description', 'Expert Outdoor Promenaid Handrail installation in Vancouver. Home2Stay installs weather-resistant exterior handrails for front steps, decks, ramps, and porches — built to handle Vancouver\'s climate.')

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
            style="background-image: url('{{ asset('prom/81761d38-90db-4ea6-8623-7e10a0ff4c57.jpg') }}');">
            <div class="absolute inset-0 bg-black opacity-60"></div>
        </div>

        <!-- Hero Content -->
        <div class="container mx-auto px-4 relative z-10 flex items-center mb-4 mt-4" style="min-height: 500px;">
            <div class="max-w-3xl">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6">Outdoor Promenaid Handrail Vancouver – Built for Safety in Any Weather</h1>
                <p class="text-xl text-white/90 mb-8">
                    Home2Stay helps Vancouver homeowners make the outside of their homes safer without compromising on looks. Our Outdoor Promenaid Handrail installations bring the trusted strength of the Promenaid system to your front steps, deck, porch, ramp, and pathways — delivering a firm, reliable grip in the wet, cold, and uneven conditions that Vancouver's climate demands. If someone in your household struggles with outdoor steps or slippery surfaces, an Outdoor Promenaid Handrail is one of the most impactful safety upgrades you can make.
                </p>
                <p class="text-xl text-white/90 mb-8">
                    Promenaid's exterior rail is built from anodized aluminum that resists rust, UV fading, and corrosion — year after year, through rain, frost, and summer heat. Unlike painted steel or wood rails that deteriorate outdoors over time, the Outdoor Promenaid Handrail holds its finish and structural integrity without regular maintenance. It's available in finishes that complement any home exterior, from heritage to modern — so your safety upgrade also improves your curb appeal.
                </p>
                <p class="text-xl text-white/90 mb-8">
                    Home2Stay's certified installation team handles every step — from assessing your outdoor surfaces and anchoring conditions to fitting the rail precisely and testing it to BC building code standards. We've helped hundreds of Vancouver families make their outdoor spaces safer, and we bring that experience to every job we take on.
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
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Why Choose an Outdoor Promenaid Handrail?</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Not every handrail is built to survive Vancouver's wet winters and year-round outdoor exposure. The Outdoor Promenaid Handrail is — and here's why Vancouver homeowners choose it over alternatives:
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <!-- Benefit 1 -->
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl flex flex-col h-full">
                    <div class="overflow-hidden relative">
                        <img src="{{ asset('prom/prom-inout-2.jpg') }}" alt="Outdoor Promenaid Handrail - Weather Resistant"
                            class="w-full object-cover" style="height: 250px;">
                        <div class="absolute top-0 right-0 bg-primary text-white text-sm font-bold px-3 py-1 m-4 rounded">
                            Popular
                        </div>
                    </div>
                    <div class="p-6 flex-1 flex flex-col">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Fully Weather-Resistant:</h3>
                        <p class="text-gray-600 mb-4 flex-grow">The anodized aluminum construction resists rust, corrosion, UV fading, and moisture damage. It handles Vancouver's heavy rainfall, coastal air, freezing temperatures, and summer heat without cracking, warping, or peeling — no annual repainting or sealing required.</p>
                    </div>
                </div>

                <!-- Benefit 2 -->
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl flex flex-col h-full">
                    <div class="overflow-hidden relative">
                        <img src="{{ asset('prom/prom-inout-4.jpeg') }}" alt="Outdoor Promenaid Handrail - Secure Grip in Wet Conditions"
                            class="w-full object-cover" style="height: 250px;">
                    </div>
                    <div class="p-6 flex-1 flex flex-col">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Secure Grip on Wet Surfaces:</h3>
                        <p class="text-gray-600 mb-4 flex-grow">The smooth, round aluminum profile provides a consistent, easy-to-grip surface even with wet hands or gloves. For seniors and anyone with reduced grip strength, a solid handrail on wet outdoor steps can be the difference between a safe trip and a serious fall.</p>
                    </div>
                </div>

                <!-- Benefit 3 -->
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl flex flex-col h-full">
                    <div class="overflow-hidden relative">
                        <img src="{{ asset('prom/IMG_20231101_133236787-scaled.jpeg') }}" alt="Outdoor Promenaid Handrail - Curb Appeal"
                            class="w-full object-cover" style="height: 250px;">
                    </div>
                    <div class="p-6 flex-1 flex flex-col">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Improves Curb Appeal:</h3>
                        <p class="text-gray-600 mb-4 flex-grow">Available in matte black, dark bronze, and brushed aluminum, the Outdoor Promenaid Handrail looks intentional and well-designed — not clinical or industrial. It complements brick, wood siding, concrete, and painted exteriors, adding to your home's appearance rather than detracting from it.</p>
                    </div>
                </div>

                <!-- Benefit 4 -->
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl flex flex-col h-full">
                    <div class="overflow-hidden relative">
                        <img src="{{ asset('prom/outdoor.png') }}" alt="Outdoor Promenaid Handrail - Any Exterior Surface"
                            class="w-full object-cover" style="height: 250px;">
                    </div>
                    <div class="p-6 flex-1 flex flex-col">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Mounts to Any Exterior Surface:</h3>
                        <p class="text-gray-600 mb-4 flex-grow">The Promenaid system uses purpose-built exterior brackets that anchor securely into concrete, masonry, wood posts, and composite decking. Our installers select the right hardware for your specific surface so the rail stays firm through years of outdoor use and load-bearing.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Where Outdoor Promenaid Handrails Work Best -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">Where Outdoor Promenaid Handrails Are Installed:</h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
                    <div class="bg-gray-50 p-8 rounded-lg">
                        <h3 class="text-2xl font-bold text-gray-800 mb-6">Entry & Step Areas:</h3>
                        <ul class="text-gray-600 space-y-2">
                            <li>• Front door steps and entry landings</li>
                            <li>• Side and rear exterior stairs</li>
                            <li>• Garage steps and doorways</li>
                            <li>• Sloped driveways and pathways</li>
                            <li>• Accessibility ramps</li>
                        </ul>
                        <p class="text-gray-600 mt-4">Entry areas are where outdoor falls most commonly happen — especially on wet or frost-covered steps. A properly anchored Outdoor Promenaid Handrail gives every family member a safe, confident grip at the main points of arrival and departure.</p>
                    </div>

                    <div class="bg-gray-50 p-8 rounded-lg">
                        <h3 class="text-2xl font-bold text-gray-800 mb-6">Decks, Porches & Outdoor Living:</h3>
                        <ul class="text-gray-600 space-y-2">
                            <li>• Wood and composite decks</li>
                            <li>• Covered and open porches</li>
                            <li>• Patio step transitions</li>
                            <li>• Pool surrounds and hot tub steps</li>
                            <li>• Garden terraces and retaining wall steps</li>
                        </ul>
                        <p class="text-gray-600 mt-4">On decks and outdoor living spaces, elevated surfaces and wet boards create real fall hazards. The Outdoor Promenaid Handrail provides a continuous support line that keeps outdoor spaces usable and safe for everyone, at any age.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Outdoor Promenaid Handrail Installation Service -->
    <section class="py-16 bg-primary">
        <div class="container mx-auto px-4">
            <div class="bg-gray-50 rounded-xl overflow-hidden shadow-lg">
                <div class="flex flex-col lg:flex-row">
                    <!-- Text Content -->
                    <div class="w-full lg:w-1/2 p-8 md:p-12 flex flex-col justify-center">
                        <h2 class="text-3xl font-bold text-gray-800 mb-4">Our Outdoor Promenaid Handrail Installation Service:</h2>
                        <p class="text-lg text-gray-600 mb-4">
                            Installing an outdoor handrail requires more than just mounting a rail — the anchoring must hold against load, weather movement, and years of outdoor use. Home2Stay assesses your specific outdoor surface, selects the correct bracket type and fasteners for concrete, wood, or masonry, and installs the Promenaid rail to meet BC building code requirements for exterior handrails.
                        </p>
                        <p class="text-lg text-gray-600 mb-6">
                            We work efficiently and leave your outdoor space clean and ready to use. Every installation includes a load test on each bracket and a final alignment check before we sign off. Vancouver homeowners choose Home2Stay for outdoor Promenaid Handrail installation because we get the anchoring right — and it shows in how the rail performs over time.
                        </p>
                        <p class="mb-5">Give us a call at <b><a href="tel:+16042591211" style="color: red;">(604) 259-1211</a></b> or submit a <b> <a href="#assessment" style="color: red;">FREE ASSESSMENT FORM</a></b> to get started.</p>
                    </div>
                    <!-- Image -->
                    <div class="w-full lg:w-1/2">
                        <img src="{{ asset('prom/IMG_20231101_133236787-scaled.jpeg') }}" alt="Outdoor Promenaid Handrail Installation Vancouver"
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
                        <h2 class="text-3xl font-bold text-gray-800 mb-6 text-center">How Our Outdoor Handrail Installation Works:</h2>
                        <p class="text-lg text-gray-600 text-center mb-8">Our certified installers follow a thorough process to ensure your Outdoor Promenaid Handrail is safe, level, and built to last through Vancouver's weather.</p>

                        <div class="prose prose-lg max-w-none">
                            <div class="space-y-6 mb-8">
                                <div class="bg-gray-50 p-6 rounded-lg">
                                    <h3 class="text-xl font-bold text-gray-800 mb-3">Step 1: Free Outdoor Assessment</h3>
                                    <p class="text-gray-600">We visit your property and inspect each outdoor area where a handrail is needed. We assess the surface material — concrete, wood, masonry, or composite — the step pitch, run length, and any drainage or moisture conditions that affect anchoring decisions.</p>
                                </div>

                                <div class="bg-gray-50 p-6 rounded-lg">
                                    <h3 class="text-xl font-bold text-gray-800 mb-3">Step 2: Surface & Anchoring Plan</h3>
                                    <p class="text-gray-600">We measure your outdoor area and design the handrail run. We select the correct exterior bracket type, anchor hardware, and waterproof sealant for your specific surface — ensuring the installation is weatherproof and will hold its load rating long-term.</p>
                                </div>

                                <div class="bg-gray-50 p-6 rounded-lg">
                                    <h3 class="text-xl font-bold text-gray-800 mb-3">Step 3: Exterior Installation</h3>
                                    <p class="text-gray-600">Our technicians drill and anchor the brackets into your chosen surface using the appropriate hardware — concrete anchors, lag bolts into structural posts, or stainless deck screws. The Promenaid rail is fitted, leveled, and all connection points are sealed against moisture ingress.</p>
                                </div>

                                <div class="bg-gray-50 p-6 rounded-lg">
                                    <h3 class="text-xl font-bold text-gray-800 mb-3">Step 4: Load Testing & Code Check</h3>
                                    <p class="text-gray-600">We apply full load tests to every bracket point and verify the rail height and extension meet BC building code requirements for exterior handrails. Nothing is signed off until the installation passes our safety standards.</p>
                                </div>

                                <div class="bg-gray-50 p-6 rounded-lg">
                                    <h3 class="text-xl font-bold text-gray-800 mb-3">Step 5: Outdoor Maintenance Handover</h3>
                                    <p class="text-gray-600">We walk you through what little maintenance your Outdoor Promenaid Handrail needs — primarily a periodic wipe-down and an annual check of the bracket anchor points. The anodized aluminum requires no painting, sealing, or rust treatment.</p>
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
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">Why Choose Home2Stay for Outdoor Handrail Installation?</h2>
                    <p class="text-lg text-gray-600">
                        Home2Stay is one of Vancouver's most trusted home safety companies. Our outdoor handrail service is built on solid workmanship, honest communication, and a genuine understanding of what it takes to install a handrail that holds up outdoors. Here's what sets us apart:
                    </p>
                </div>

                <div class="space-y-6 mb-12">
                    <div class="bg-gray-50 p-6 rounded-lg">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Experienced Outdoor Installers</h3>
                        <p class="text-gray-600">Our team is trained in exterior anchoring across all common Vancouver surface types — concrete steps, wood-framed decks, brick and masonry, and composite decking. We know which hardware to use and how to install it correctly the first time.</p>
                    </div>

                    <div class="bg-gray-50 p-6 rounded-lg">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Built for Vancouver's Climate</h3>
                        <p class="text-gray-600">Every outdoor installation we do is designed with Vancouver's wet winters and seasonal temperature swings in mind. We use exterior-rated hardware, weatherproof sealants, and finishes that won't degrade in coastal conditions.</p>
                    </div>

                    <div class="bg-gray-50 p-6 rounded-lg">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Custom-Fit to Your Outdoor Space</h3>
                        <p class="text-gray-600">Every outdoor handrail plan is designed around your actual steps, surface, and household needs — not a generic template. We size the rail run correctly, position brackets for maximum strength, and choose a finish that suits your home's exterior.</p>
                    </div>

                    <div class="bg-gray-50 p-6 rounded-lg">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Transparent, Upfront Pricing</h3>
                        <p class="text-gray-600">We provide a clear quote before any work begins — no hidden costs for hardware, anchoring, or sealing. You know exactly what you're paying for before we start.</p>
                    </div>

                    <div class="bg-gray-50 p-6 rounded-lg">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Trusted by Hundreds of Vancouver Homeowners</h3>
                        <p class="text-gray-600">Home2Stay has built a strong reputation across Vancouver for outdoor safety installations that hold up and look great. Our clients come back to us — and refer their neighbours — because the work speaks for itself.</p>
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
                        <h2 class="text-3xl font-bold text-gray-800 mb-4">Who Benefits from an Outdoor Promenaid Handrail?</h2>
                        <p class="text-lg text-gray-600 mb-4">Outdoor handrails make a meaningful difference for a wide range of Vancouver homeowners and their families:</p>
                        <ul class="text-lg text-gray-600 space-y-2 mb-6">
                            <li>• <strong>Seniors Aging in Place:</strong> Provides the grip and confidence needed to safely navigate wet front steps, exterior ramps, and deck access every day.</li>
                            <li>• <strong>People with Mobility Challenges:</strong> Makes outdoor stairs and ramps manageable and safe — supporting independent access to and from the home.</li>
                            <li>• <strong>Families with Young Children:</strong> Reduces the risk of children slipping on exterior steps, especially in wet or icy conditions.</li>
                            <li>• <strong>Homeowners Improving Accessibility:</strong> A code-compliant outdoor handrail is often a requirement for aging-in-place renovations and can support grant eligibility.</li>
                            <li>• <strong>Anyone in a Multi-Level Home:</strong> External level changes — decks, terraced gardens, side entries — become safer and more accessible for all household members.</li>
                        </ul>
                        <h3 class="text-2xl font-bold text-gray-800 mb-3">Outdoor Falls Are Preventable:</h3>
                        <p class="text-lg text-gray-600 mb-4">
                            Wet steps, moss-covered concrete, and frosty decks are among the most common causes of serious falls in Canadian homes. A properly installed Outdoor Promenaid Handrail — anchored firmly and positioned at the correct height — gives every person in your household a reliable support at exactly the points where outdoor falls are most likely to happen. Home2Stay makes that installation straightforward and stress-free.
                        </p>
                    </div>
                    <!-- Image -->
                    <div class="w-full lg:w-1/2">
                        <img src="{{ asset('prom/81761d38-90db-4ea6-8623-7e10a0ff4c57.jpg') }}" alt="Outdoor Promenaid Handrail Benefits Vancouver"
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
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">Ready to Make the Outside of Your Home Safer?</h2>
                    <p class="text-gray-600 mb-4">If you need a professionally installed Outdoor Promenaid Handrail in Vancouver, Home2Stay is ready to help. We'll assess your outdoor space, recommend the right setup for your surfaces and budget, and install everything to last.</p>
                    <p class="text-gray-600">Fill out the form below and our team will be in touch to arrange your free outdoor assessment.</p>
                </div>

                <form action="/submit-assessment" method="POST">
                    @csrf
                    <input type="hidden" name="form_type" value="quote">
                    <input type="hidden" name="form_source" value="Outdoor_Promenaid_Handrail_quote_form">
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
                            <input type="text" id="location" name="location" placeholder="e.g., Front Steps, Deck, Ramp, Side Entry, etc."
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
                        </div>
                    </div>

                    <!-- Installation Area -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Where do you need the outdoor handrail installed? *</label>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="installation_areas[]" value="front_steps" class="form-checkbox text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Front Entry Steps</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="installation_areas[]" value="deck" class="form-checkbox text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Deck</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="installation_areas[]" value="porch" class="form-checkbox text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Porch</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="installation_areas[]" value="ramp" class="form-checkbox text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Ramp</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="installation_areas[]" value="side_rear_entry" class="form-checkbox text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Side / Rear Entry</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="installation_areas[]" value="pathway_garden" class="form-checkbox text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Pathway / Garden Steps</span>
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
                            placeholder="Please describe your outdoor area, surface type (concrete, wood, brick), number of steps, mobility concerns, or any questions about outdoor Promenaid handrails..."></textarea>
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
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">FAQs: Outdoor Promenaid Handrail</h2>
                </div>

                <div class="space-y-6">
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Will the outdoor handrail rust or corrode over time?</h3>
                        <p class="text-gray-600">
                            No. The Promenaid rail is made from anodized aluminum, which is naturally corrosion-resistant. It won't rust, peel, or degrade in Vancouver's wet coastal climate. The anodized finish also resists UV fading so the colour stays consistent year after year.
                        </p>
                    </div>

                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Can it be installed into concrete steps?</h3>
                        <p class="text-gray-600">
                            Yes. We use heavy-duty concrete anchors rated for outdoor load-bearing applications. The installation is drilled and set precisely to ensure the bracket is flush, secure, and sealed against moisture getting into the anchor hole.
                        </p>
                    </div>

                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">What finishes are available for outdoor use?</h3>
                        <p class="text-gray-600">
                            The outdoor Promenaid rail is available in matte black, dark bronze, and brushed aluminum. All three finishes are anodized for exterior durability and suit a wide range of home exterior styles — from heritage character homes to modern builds.
                        </p>
                    </div>

                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Does the outdoor installation meet BC building code?</h3>
                        <p class="text-gray-600">
                            Yes. Our installations comply with BC building code requirements for exterior handrails, including height (865mm–965mm from stair nosing), structural load capacity, and required extensions at the top and bottom of stairs. This matters for insurance purposes and resale value.
                        </p>
                    </div>

                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">How long does an outdoor handrail installation take?</h3>
                        <p class="text-gray-600">
                            Most outdoor Promenaid Handrail installations are completed in two to four hours. Larger projects covering front steps, a ramp, and a deck may take longer. We'll give you a clear time estimate during the free assessment.
                        </p>
                    </div>

                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">How much maintenance does an outdoor handrail need?</h3>
                        <p class="text-gray-600">
                            Very little. We recommend wiping the rail down periodically and doing an annual check of the bracket anchor points to ensure nothing has shifted. No painting, sealing, or rust treatment is needed — the anodized aluminum takes care of itself.
                        </p>
                    </div>

                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Can it handle curved or angled outdoor staircases?</h3>
                        <p class="text-gray-600">
                            Yes. The Promenaid modular system adapts to angled runs, curved pathways, and mixed-pitch staircases. Our installers configure the bracket spacing and rail sections to follow the exact slope and turn of your outdoor steps.
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
                <h2 class="text-3xl font-bold mb-6">Ready to Install an Outdoor Promenaid Handrail at Your Vancouver Home?</h2>
                <p class="text-xl mb-8">Contact Home2Stay today and let our team design and install an Outdoor Promenaid Handrail that stands up to Vancouver's weather and keeps your family safe every time they step outside.</p>
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
