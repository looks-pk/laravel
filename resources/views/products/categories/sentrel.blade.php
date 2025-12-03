@extends('layouts.app')

@section('title', 'Sentrel Bathroom Remodelling Vancouver | Low-Maintenance Wall Systems | Home2stay')
@section('meta_description', 'Expert Sentrel bathroom remodeling Vancouver. Fast installation, waterproof stone-look panels, and low maintenance. Sentrel bath solutions for modern bathroom upgrades.')

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
            style="background-image: url('{{ asset('/sent/p1.png') }}');">
            <div class="absolute inset-0 bg-black opacity-60"></div>
        </div>

        <!-- Hero Content -->
        <div class="container mx-auto px-4 relative z-10 flex items-center mb-4 mt-4" style="min-height: 500px;">
            <div class="max-w-3xl">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6">Sentrel Bathroom Remodelling Vancouver – A Simple Guide for Homeowners</h1>
                <p class="text-xl text-white/90 mb-8">
                    It can be stressful to do bathroom remodelling, particularly when you wish to have a new appearance without protracted building construction. Most people who own homes nowadays would select to have modern wall systems that appear like genuine stone, but these are simpler to take care of. Here is where Sentrel Bathroom Remodeling Vancouver comes in. Sentrel blusters of hard, sleek, and low-maintenance materials that will upgrade a bathroom without the big mess of tiles or destruction.
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
                <h2 class="text-3xl font-bold text-gray-800 mb-4">What Is Sentrel and Why Homeowners Love It?</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Sentrel is a wall construction that is composed of strong composite materials that resemble natural stones. It gives you what marble or granite would cost you and how difficult it would be to make. The panels are easy to install, lightweight, and waterproof. They are also made in such a manner that they are resistant to stains, mould, and moisture, and this is significant to houses in the wet climate of Vancouver. Due to this reason, Sentrel simplifies the process of bathroom remodeling and makes it a quicker process than traditional tile work. Many people looking for durable upgrades prefer using Sentrel Bathroom Remodeling Vancouver services for a smooth renovation process.
                </p>
            </div>

            <div class="max-w-4xl mx-auto mb-12">
                <div class="bg-white rounded-xl shadow-md p-8">
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">How Sentrel Bath Solutions Work in Vancouver Homes:</h3>
                    <p class="text-gray-700 mb-4">
                        Local installers can use Sentrel Bath Solutions Vancouver to implement projects that require quick results and that are of long-term strength. Most remodels take one to two days since the panels will fit on the existing surfaces. There is no need for noisy demolition or dusty days. The material is cut to fit exactly to the size of your bathroom, and this makes it look neat and polished.
                    </p>
                    <p class="text-gray-700">
                        There are also various design options. Sentrel panels are of many designs, from soft marble to massive stone designs. This allows the homeowners to either fit the bathroom to the style of their house or decorate it in a modern and spa-like design. Because of these flexible options, many residents choose Sentrel Bath Solutions Vancouver to match their preferred style.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits of Choosing Sentrel -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">Benefits of Choosing Sentrel for Your Bathroom Remodel:</h2>
                    <p class="text-lg text-gray-600">
                        We're going to choose the benefits of Sentral for your bathroom remodelling. Keep Reading!
                    </p>
                </div>

                <div class="space-y-6 mb-12">
                    <div class="bg-gray-50 p-6 rounded-lg">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Easy to Clean:</h3>
                        <p class="text-gray-600">There is no grout, so you don't have to scrub or worry about dirt building up. A simple wipe keeps the walls looking new.</p>
                    </div>

                    <div class="bg-gray-50 p-6 rounded-lg">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Fast Installation:</h3>
                        <p class="text-gray-600">Most bathrooms can be upgraded in a single weekend. This makes Sentrel perfect for busy families who can't afford long downtime and often rely on Sentrel Bathroom Remodeling Vancouver for fast results.</p>
                    </div>

                    <div class="bg-gray-50 p-6 rounded-lg">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Built for Wet Climates:</h3>
                        <p class="text-gray-600">Vancouver receives a lot of rain and moisture. Sentrel's waterproof surface helps protect walls from mold, mildew, and long-term water damage.</p>
                    </div>

                    <div class="bg-gray-50 p-6 rounded-lg">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Affordable Alternative to Tile:</h3>
                        <p class="text-gray-600">Traditional tile work can be expensive, and repairs cost even more. Sentrel offers a similar appearance at a more budget-friendly price.</p>
                    </div>

                    <div class="bg-gray-50 p-6 rounded-lg">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Long-Lasting Durability:</h3>
                        <p class="text-gray-600">Sentrel panels are made to resist cracks, stains, and everyday wear. They maintain their beauty for years with very little care.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Popular Sentrel Remodeling Options -->
    <section class="py-16 bg-primary">
        <div class="container mx-auto px-4">
            <div class="bg-gray-50 rounded-xl overflow-hidden shadow-lg">
                <div class="flex flex-col lg:flex-row">
                    <!-- Text Content -->
                    <div class="w-full lg:w-1/2 p-8 md:p-12 flex flex-col justify-center">
                        <h2 class="text-3xl font-bold text-gray-800 mb-4">Popular Sentrel Remodeling Options:</h2>
                        <div class="space-y-4 mb-6">
                            <div class="bg-white p-4 rounded-lg">
                                <h3 class="font-bold text-gray-800 mb-2">Shower Replacement:</h3>
                                <p class="text-gray-600">Upgrade an old shower with new stone-look wall panels, modern fixtures, and a cleaner layout.</p>
                            </div>
                            <div class="bg-white p-4 rounded-lg">
                                <h3 class="font-bold text-gray-800 mb-2">Tub-to-Shower Conversion:</h3>
                                <p class="text-gray-600">Many Vancouver homeowners choose to replace bathtubs with storage cupboard showers for safety and a modern style using Sentrel Bath Solutions Vancouver materials.</p>
                            </div>
                            <div class="bg-white p-4 rounded-lg">
                                <h3 class="font-bold text-gray-800 mb-2">Accessibility Improvements:</h3>
                                <p class="text-gray-600">Low thresholds, safety bars, and seating can be added during installation to make the bathroom safer for seniors or anyone with mobility needs.</p>
                            </div>
                        </div>
                        <p class="mb-5">Give us a call at <b><a href="tel:+16042591211" style="color: red;">(604) 259-1211</a></b> or submit a <b> <a href="#assessment" style="color: red;">FREE ASSESSMENT FORM</a></b> to check.</p>
                    </div>
                    <!-- Image -->
                    <div class="w-full lg:w-1/2">
                        <img src="{{ asset('/sent/p2.png') }}" alt="Sentrel Remodeling Options"
                            class="w-full h-full object-cover" style="min-height: 400px;">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Cost Considerations -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="bg-white rounded-xl shadow-md overflow-hidden">
                    <div class="p-8 md:p-12">
                        <h2 class="text-3xl font-bold text-gray-800 mb-6 text-center">Cost Considerations:</h2>

                        <div class="prose prose-lg max-w-none">
                            <p class="text-gray-700 mb-6">
                                The cost of a Sentrel bathroom remodel relies on the size of the space, design choices, and added features. However, the total is usually lower compared to full tile renovations. Because installation is fast and requires minimal labour, homeowners receive strong value for their money. Sentrel also reduces future maintenance costs, making it a smart long-term investment for anyone working with Sentrel Bathroom Remodeling Vancouver experts.
                            </p>

                            <h3 class="text-2xl font-bold text-gray-800 mt-8 mb-4">How to Choose a Reliable Sentrel Contractor in Vancouver:</h3>

                            <p class="text-gray-700 mb-6">
                                During the selection of a contractor, examine their licenses, previous job, and reviews of previous customers. Enquire whether they have used Sentrel materials before and provide any warranties. A good contractor will guide you through the design, take the right measurements, and provide an easy installation. Many trusted professionals partner with Sentrel Bath Solutions Vancouver for the best results.
                            </p>

                            <h3 class="text-2xl font-bold text-gray-800 mt-8 mb-4">Final Thoughts:</h3>

                            <p class="text-gray-700 mb-4">
                                Sentrel is a good option among the Vancouver homeowners who wish to have a modern, low-maintenance bathroom without the hassle of getting a complete renovation. Sentrel provides a smart and stylish home upgrade with quick installation, materials that last, and options to choose a beautiful design. This is why many people choose Sentrel Bathroom Remodeling Vancouver when planning a fresh, modern bathroom look.
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
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">Get Your Sentrel Bathroom Remodel Today</h2>
                    <p class="text-gray-600 mb-4">Ready to transform your bathroom with modern, low-maintenance Sentrel wall systems? Contact Home2stay today for professional Sentrel Bathroom Remodeling Vancouver services.</p>
                    <p class="text-gray-600">We offer free assessments to help you find the perfect design for your space.</p>
                </div>

                <form action="/submit-assessment" method="POST">
                    @csrf
                    <input type="hidden" name="form_type" value="quote">
                    <input type="hidden" name="form_source" value="Sentrel_Bathroom_Remodeling_quote_form">
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
                            placeholder="Please describe your bathroom space, preferred design style, timeline, or any questions about Sentrel wall systems..."></textarea>
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
                        <h3 class="text-xl font-bold text-gray-800 mb-3">What makes Sentrel bathroom remodeling different from tile?</h3>
                        <p class="text-gray-600">
                            Sentrel wall panels look like natural stone but do not need grout. They are lighter, easier to install, and much easier to clean than tile. Most projects finish faster and with less mess.
                        </p>
                    </div>

                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">How long does a Sentrel bathroom remodel take?</h3>
                        <p class="text-gray-600">
                            In most homes, the installation takes one to two days. Since the panels go over existing surfaces, there is no major demolition.
                        </p>
                    </div>

                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Are Sentrel wall panels waterproof?</h3>
                        <p class="text-gray-600">
                            Yes. The panels are fully waterproof and designed to handle constant moisture. This helps protect your walls from mold and mildew.
                        </p>
                    </div>

                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Can I replace only my shower walls with Sentrel?</h3>
                        <p class="text-gray-600">
                            Yes. You can remodel just the shower area or upgrade the entire bathroom. The system works for showers, tubs, and full wall surrounds.
                        </p>
                    </div>

                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">How durable are the panels?</h3>
                        <p class="text-gray-600">
                            Sentrel panels are strong and built to resist cracks, fading, and stains. With normal care, they can last many years.
                        </p>
                    </div>

                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Are there different design options?</h3>
                        <p class="text-gray-600">
                            Yes. Sentrel offers many patterns, including marble, granite, and modern stone styles. You can choose colors and trim to match your bathroom.
                        </p>
                    </div>

                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Is Sentrel a good choice for moist climates?</h3>
                        <p class="text-gray-600">
                            It is one of the best choices. The material is non-porous and does not absorb water, making it ideal for bathrooms in damp or rainy areas.
                        </p>
                    </div>

                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Does the installation require tearing down old walls?</h3>
                        <p class="text-gray-600">
                            No. The panels are designed to fit over existing surfaces, which reduces noise, dust, and waste.
                        </p>
                    </div>

                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Is Sentrel easy to maintain?</h3>
                        <p class="text-gray-600">
                            Very easy. You only need mild cleaners and water. Since there is no grout, the walls stay clean with minimal effort.
                        </p>
                    </div>

                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Is Sentrel remodeling expensive?</h3>
                        <p class="text-gray-600">
                            Costs varies as a function on bathroom size and design choices. However, it is often more affordable than tile installation and usually has lower long-term maintenance costs.
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
                <h2 class="text-3xl font-bold mb-6">Ready to Transform Your Bathroom?</h2>
                <p class="text-xl mb-8">Contact us today to explore how Sentrel Bathroom Remodeling Vancouver can give you a modern, low-maintenance bathroom in just days.</p>
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