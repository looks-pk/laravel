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
            style="background-image: url('{{ asset('/mram/p3.png') }}');">
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
                        <img src="{{ asset('/mram/p2.png') }}" alt="Simple and Quick Installation"
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
                        <img src="{{ asset('/mram/p3.png') }}" alt="Strong and Weather-Resistant"
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
                        <img src="{{ asset('/mram/p4.png') }}" alt="Safe for Daily Use"
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
                        <img src="{{ asset('/mram/p5.png') }}" alt="Fits Any Property"
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

    <!-- Professional Wheelchair Ramp Installation Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">Professional Wheelchair Ramp Installation Vancouver Service:</h2>
                    <p class="text-lg text-gray-600">
                        Home2Stay offers complete Wheelchair Ramp Installation Vancouver services, from assessment to final setup. We follow every safety guideline and building requirement to make sure your ramp is safe, smooth, and comfortable.
                    </p>
                </div>

                <div class="space-y-8 mb-12">
                    <div class="bg-gray-50 p-8 rounded-lg">
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">Step 1: On-Site Assessment:</h3>
                        <p class="text-gray-600 mb-4">Our team visits your home to:</p>
                        <ul class="text-gray-600 space-y-2 ml-6">
                            <li>• Measure the height of your entry</li>
                            <li>• Check available space</li>
                            <li>• Review safety risks</li>
                            <li>• Understand your mobility needs</li>
                        </ul>
                        <p class="text-gray-600 mt-4">This helps us design a ramp that is the right size, angle, and shape for your daily use.</p>
                    </div>

                    <div class="bg-gray-50 p-8 rounded-lg">
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">Step 2: Custom Ramp Design:</h3>
                        <p class="text-gray-600 mb-4">We design your modular system based on:</p>
                        <ul class="text-gray-600 space-y-2 ml-6">
                            <li>• Your entry height</li>
                            <li>• Your turning needs</li>
                            <li>• The number of steps</li>
                            <li>• The width of mobility devices</li>
                        </ul>
                        <p class="text-gray-600 mt-4">You can choose straight ramps, switchback ramps, or full platform systems.</p>
                    </div>

                    <div class="bg-gray-50 p-8 rounded-lg">
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">Step 3: Safe Installation:</h3>
                        <p class="text-gray-600">We install your ramp with strong anchoring, slip-resistant surfaces, and stable handrails. Every piece is checked carefully to ensure long-term safety. Our Wheelchair Ramp Installation Vancouver process ensures perfect alignment and maximum stability.</p>
                    </div>

                    <div class="bg-gray-50 p-8 rounded-lg">
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">Step 4: Final Safety Check and User Guidance</h3>
                        <p class="text-gray-600">We take you through each section of your ramp to ensure you get to know how to operate and maintain it easily. Safety is not an add-on feature at Home2Stay; it is the basic building block.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Types of Modular Ramps -->
    <section class="py-16 bg-primary">
        <div class="container mx-auto px-4">
            <div class="bg-gray-50 rounded-xl overflow-hidden shadow-lg">
                <div class="flex flex-col lg:flex-row">
                    <!-- Text Content -->
                    <div class="w-full lg:w-1/2 p-8 md:p-12 flex flex-col justify-center">
                        <h2 class="text-3xl font-bold text-gray-800 mb-4">Types of Modular Ramps We Install:</h2>
                        <p class="text-lg text-gray-600 mb-4">
                            We apply a great variety of styles of modular ramps to suit homes, clinics, churches, community centers, and commercial buildings. Our Modular Ramps in Vancouver collection includes:
                        </p>
                        <ul class="text-lg text-gray-600 space-y-3 mb-6">
                            <li><strong>• Straight Ramps:</strong> Easy, direct access, low-step homes.</li>
                            <li><strong>• Switchback Ramps:</strong> Ideal to use in higher entrances where there is little space.</li>
                            <li><strong>• Porch & Landing Systems:</strong> Additional platforms facilitating turnover and rest.</li>
                            <li><strong>• Temporary Ramps:</strong> Excellent in terms of renting it, recovering, or for an event.</li>
                            <li><strong>• Permanent Modular Systems:</strong> Durable, heavy, and designed to be used daily.</li>
                        </ul>
                        <p class="mb-5">Give us a call at <b><a href="tel:+16042591211" style="color: red;">(604) 259-1211</a></b> or submit a <b> <a href="#assessment" style="color: red;">FREE ASSESSMENT FORM</a></b> to check.</p>
                    </div>
                    <!-- Image -->
                    <div class="w-full lg:w-1/2">
                        <img src="{{ asset('/mram/p6.png') }}" alt="Types of Modular Ramps"
                            class="w-full h-full object-cover" style="min-height: 400px;">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Who Needs a Modular Ramp -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="bg-white rounded-xl shadow-md overflow-hidden">
                    <div class="p-8 md:p-12">
                        <h2 class="text-3xl font-bold text-gray-800 mb-6 text-center">Who Needs a Modular Ramp?</h2>

                        <div class="prose prose-lg max-w-none">
                            <p class="text-gray-700 mb-6">
                                Modular ramps support people with:
                            </p>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-8">
                                <div class="bg-gray-50 p-4 rounded-lg">
                                    <p class="text-gray-700">• Mobility limitations</p>
                                </div>
                                <div class="bg-gray-50 p-4 rounded-lg">
                                    <p class="text-gray-700">• Disabilities</p>
                                </div>
                                <div class="bg-gray-50 p-4 rounded-lg">
                                    <p class="text-gray-700">• Injury recovery</p>
                                </div>
                                <div class="bg-gray-50 p-4 rounded-lg">
                                    <p class="text-gray-700">• Balance challenges</p>
                                </div>
                                <div class="bg-gray-50 p-4 rounded-lg">
                                    <p class="text-gray-700">• Wheelchair or scooter use</p>
                                </div>
                                <div class="bg-gray-50 p-4 rounded-lg">
                                    <p class="text-gray-700">• Elderly family members</p>
                                </div>
                            </div>

                            <p class="text-gray-700 mb-4">
                                They also help caregivers, visitors, and children move in and out of the home safely.
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

    <!-- Why Choose Home2Stay -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">Why Choose Home2Stay?</h2>
                    <p class="text-lg text-gray-600">
                        Home2Stay is trusted by families across Vancouver because we care about real people, not just projects. We take the time to know your needs and design a solution that truly helps you live more easily and safer. People searching for Modular Ramps in Vancouver rely on our quality and expertise.
                    </p>
                </div>

                <div class="mb-8">
                    <h3 class="text-2xl font-bold text-gray-800 mb-6 text-center">What Makes Us Different:</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="bg-gray-50 p-6 rounded-lg">
                            <p class="text-gray-700">• Friendly, certified installers</p>
                        </div>
                        <div class="bg-gray-50 p-6 rounded-lg">
                            <p class="text-gray-700">• Honest guidance with no pressure sales</p>
                        </div>
                        <div class="bg-gray-50 p-6 rounded-lg">
                            <p class="text-gray-700">• Custom solutions for every home</p>
                        </div>
                        <div class="bg-gray-50 p-6 rounded-lg">
                            <p class="text-gray-700">• Fast installation with strong materials</p>
                        </div>
                        <div class="bg-gray-50 p-6 rounded-lg">
                            <p class="text-gray-700">• Clear pricing with no hidden fees</p>
                        </div>
                        <div class="bg-gray-50 p-6 rounded-lg">
                            <p class="text-gray-700">• Long-term support and follow-up service</p>
                        </div>
                        <div class="bg-gray-50 p-6 rounded-lg">
                            <p class="text-gray-700">• Local Vancouver experience and expertise</p>
                        </div>
                    </div>
                </div>

                <div class="text-center mt-8">
                    <p class="text-lg text-gray-600">
                        <strong>We treat your home with respect and your safety with serious commitment.</strong>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Maintenance and Cost Section -->
    <section class="py-16 bg-primary">
        <div class="container mx-auto px-4">
            <div class="bg-gray-50 rounded-xl overflow-hidden shadow-lg">
                <div class="flex flex-col lg:flex-row">
                    <!-- Text Content -->
                    <div class="w-full lg:w-1/2 p-8 md:p-12 flex flex-col justify-center">
                        <h2 class="text-3xl font-bold text-gray-800 mb-4">Maintenance and Long-Term Care:</h2>
                        <p class="text-lg text-gray-600 mb-4">
                            Modular ramps require very little maintenance. Still, a few simple steps keep them in perfect condition:
                        </p>
                        <ul class="text-lg text-gray-600 space-y-2 mb-6">
                            <li>• Clean the surface every few weeks</li>
                            <li>• Check for loose hardware during seasonal changes</li>
                            <li>• Make sure the non-slip surface stays clear of ice or debris</li>
                            <li>• Call us if you ever notice movement or wear</li>
                        </ul>
                        <p class="text-lg text-gray-600 mb-6">
                            Our ramps are designed to last many years with minimal effort. Whether you have a temporary ramp or a complete Wheelchair Ramp Installation Vancouver setup, the care routine is simple and effective.
                        </p>
                        <h3 class="text-2xl font-bold text-gray-800 mb-3">Cost of Modular Ramp Systems:</h3>
                        <p class="text-lg text-gray-600 mb-3">Prices depend on:</p>
                        <ul class="text-lg text-gray-600 space-y-2 mb-4">
                            <li>• Ramp length</li>
                            <li>• Type of system</li>
                            <li>• Number of platforms</li>
                            <li>• Ground conditions</li>
                            <li>• Safety features added</li>
                        </ul>
                        <p class="text-lg text-gray-600">
                            Home2Stay provides fair, honest, and transparent pricing. After your assessment, we give you a clear quote with no hidden charges.
                        </p>
                    </div>
                    <!-- Image -->
                    <div class="w-full lg:w-1/2">
                        <img src="{{ asset('/mram/p5.png') }}" alt="Modular Ramp Maintenance"
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
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">Ready for Safer Access? Contact Home2Stay Today</h2>
                    <p class="text-gray-600 mb-4">If you or your loved one struggles with steps, balance, or mobility, a modular ramp can make daily life easier and safer. We offer free home assessments to help you find the best ramp for your space.</p>
                    <p class="text-gray-600">Call Home2Stay today and let us help you build a safer, more accessible home with Modular Ramps in Vancouver or professional Wheelchair Ramp Installation Vancouver services.</p>
                </div>

                <form action="/submit-assessment" method="POST">
                    @csrf
                    <input type="hidden" name="form_type" value="quote">
                    <input type="hidden" name="form_source" value="Modular_Ramps_quote_form">
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
                            <label class="block text-gray-700 font-medium mb-2" for="location">Property Address</label>
                            <input type="text" id="location" name="location" placeholder="e.g., Your home address"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
                        </div>
                    </div>

                    <!-- Ramp Type Interest -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">What type of ramp are you interested in? *</label>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="ramp_types[]" value="straight_ramp" class="form-checkbox text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Straight Ramp</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="ramp_types[]" value="switchback_ramp" class="form-checkbox text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Switchback Ramp</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="ramp_types[]" value="porch_landing" class="form-checkbox text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Porch & Landing System</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="ramp_types[]" value="temporary" class="form-checkbox text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Temporary Ramp</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="ramp_types[]" value="permanent" class="form-checkbox text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Permanent System</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="ramp_types[]" value="not_sure" class="form-checkbox text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Not Sure/Need Consultation</span>
                            </label>
                        </div>
                    </div>

                    <!-- Mobility Requirements -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Who will be using the ramp?</label>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="users[]" value="wheelchair_user"
                                    class="form-checkbox text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Wheelchair User</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="users[]" value="mobility_scooter"
                                    class="form-checkbox text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Mobility Scooter User</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="users[]" value="walker"
                                    class="form-checkbox text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Walker/Cane User</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="users[]" value="elderly"
                                    class="form-checkbox text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Elderly Family Member</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="users[]" value="injury_recovery"
                                    class="form-checkbox text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Person Recovering from Injury</span>
                            </label>
                        </div>
                    </div>

                    <!-- Entry Information -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Number of steps at your entry</label>
                        <input type="number" name="number_of_steps" placeholder="Enter number of steps" min="0"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
                    </div>

                    <!-- Additional Information -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-2" for="message">Additional Information</label>
                        <textarea id="message" name="message" rows="4"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent"
                            placeholder="Please describe your property layout, available space, ground conditions, or any questions about modular ramps..."></textarea>
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
                        <h3 class="text-xl font-bold text-gray-800 mb-3">How long does a modular ramp installation take?</h3>
                        <p class="text-gray-600">
                            Most installations take only a few hours. Larger systems may take half a day, but we finish everything the same day.
                        </p>
                    </div>

                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Are modular ramps safe during rain or winter?</h3>
                        <p class="text-gray-600">
                            Yes. They have non-slip surfaces and are built from rust-resistant aluminum, making them safe in wet and cold weather.
                        </p>
                    </div>

                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Can the ramp be moved or changed later?</h3>
                        <p class="text-gray-600">
                            Yes. Modular ramps can be expanded, shortened, or moved if your needs or home layout change.
                        </p>
                    </div>

                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Do you offer ramps for businesses or clinics?</h3>
                        <p class="text-gray-600">
                            Yes. We install modular systems for commercial buildings, offices, care homes, and community centers.
                        </p>
                    </div>

                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Is a home assessment free?</h3>
                        <p class="text-gray-600">
                            Yes, Home2Stay offers free assessments to help you choose the right ramp.
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
                <h2 class="text-3xl font-bold mb-6">Ready for Safer Access?</h2>
                <p class="text-xl mb-8">Contact us today to explore how Modular Ramps in Vancouver and professional Wheelchair Ramp Installation Vancouver can make your home safer and more accessible.</p>
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