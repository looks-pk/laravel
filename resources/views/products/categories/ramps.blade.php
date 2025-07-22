@extends('layouts.app')

@section('title', 'Wheelchair Accessible Ramps | Available for Sale or Rental - Home2stay')
@section('meta_description', 'Wheelchair ramps make your home more accessible and inclusive to wheelchair and mobility device users, and everyone of all abilities. Home2stay brings the best selection of modular, portable, and foldable ramps to Vancouver and the Lower Mainland. Find the right ramp for your space!')

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
            style="background-image: url('{{ asset('al-prod-page-imgs/Ramps.jpg') }}');">
            <div class="absolute inset-0 bg-black opacity-60"></div>
        </div>

        <!-- Hero Content -->
        <div class="container mx-auto px-4 relative z-10 flex items-center" style="min-height: 500px;">
            <div class="max-w-3xl">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6">Ramps</h1>
                <p class="text-xl text-white/90 mb-8">
                    Enhancing accessibility and independence with durable, easy-to-install ramp solutions designed for comfort, safety, and convenience.
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
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Our Accessibility Ramp Products</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Discover our range of innovative ramp solutions designed to improve mobility and accessibility for
                    individuals with mobility challenges.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Product 1 -->
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl flex flex-col h-full">
                    <div class="overflow-hidden relative">
                        <img src="{{ asset('bathsafety-cat/Home2stay-Self-Supporting-Threshold-Ramps-min.jpg') }}" alt="Self Supporting Threshold Ramps"
                            class="w-full object-cover" style="height: 300px;">
                        <div class="absolute top-0 right-0 bg-primary text-white text-sm font-bold px-3 py-1 m-4 rounded">
                            Popular
                        </div>
                    </div>
                    <div class="p-6 flex-1 flex flex-col">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Home2stay Self Supporting Threshold Ramps</h3>
                        <p class="text-gray-600 mb-4 flex-grow">The Self Supporting Threshold Ramp is designed for doorways that swing in and out. Easy to install with durable construction for long-lasting accessibility.</p>
                        <div class="mt-auto">
                            <a href="/products/home2stay-self-supporting-threshold-ramps/"
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
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">The Advantages of Ramps</h2>
                    <p class="text-lg text-gray-600">
                        Discover how placing ramps outside and inside your home can transform accessibility and enhance your living space.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
                    <div class="bg-gray-50 p-6 rounded-lg text-center">
                        <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Improves Mobility</h3>
                        <p class="text-gray-600">Enhanced access and independence for wheelchair users and those with mobility challenges.</p>
                    </div>

                    <div class="bg-gray-50 p-6 rounded-lg text-center">
                        <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Beautifies Your Space</h3>
                        <p class="text-gray-600">Modern, attractive designs that complement your home's architecture and landscaping.</p>
                    </div>

                    <div class="bg-gray-50 p-6 rounded-lg text-center">
                        <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Easy Installation</h3>
                        <p class="text-gray-600">Quick setup with no building permits required in most cases for portable and modular systems.</p>
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
                            Home2stay is a trusted provider of accessibility and mobility solutions in the British Columbia
                            region, servicing the following: Vancouver, Surrey, Abbotsford, Richmond, Coquitlam, Tricities,
                            Mission, Delta, Pitt Meadows, Burnaby, Port Moody, Maple Ridge, Langley, Chilli Wack, White
                            Rock, Aldergrove, and other nearby areas.</p>
                        <p class="mb-5">Is your area not listed? Give us a call at <a href="tel:+16042591211"
                                class="text-secondary">(604) 259-1211</a> or submit a FREE
                            <a href="#assessment" class="text-secondary"> ASSESSMENT FORM </a> to check.
                        </p>
                    </div>
                    <!-- Image -->
                    <div class="w-full lg:w-1/2">
                        <img src="{{ asset('al-prod-page-imgs/Ramps.jpg') }}" alt="Accessibility Ramps"
                            class="w-full h-full object-cover" style="min-height: 400px;">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Ramp Solutions Details -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="bg-white rounded-xl shadow-md p-8 md:p-12">
                    <h2 class="text-3xl font-bold text-gray-800 mb-6">Accessibility Ramp Solutions</h2>

                    <div class="prose prose-lg max-w-none">
                        <p class="text-gray-700 mb-4">
                            At Home2stay, we recommend modular, folding, and portable ramps, which can suit any space and can roll / fold up when not in use. Best of all, you won't need a building or city permit (in most cases) to put these on the entrance or exit of your home because they are not considered as permanent fixtures.
                        </p>

                        <p class="text-gray-700 mb-4">
                            Home2stay ramps are made from non-slip and durable materials, and the Roll-A-Ramp Modular Ramp System has a weight capacity of up to 1,000 lbs.
                        </p>

                        <div class="my-8 p-6 bg-primary/5 border-l-4 border-primary rounded-r-lg">
                            <p class="text-gray-800 font-medium">
                                Brands available are: Roll-A-Ramp, Prairie View Industries (PVI), BestBath, and Harmar. All our ramp products are designed with safety, durability, and ease of use in mind.
                            </p>
                        </div>

                        <p class="text-gray-700 mb-4">
                            In case you'll be needing a ramp for an event or a short period of time, Home2stay has modular, threshold, and folding ramps for RENT, for a minimum of one month rental period.
                        </p>

                        <h3 class="text-2xl font-bold text-gray-800 mt-8 mb-4">Expert Installation & Support</h3>

                        <p class="text-gray-700 mb-4">
                            Book a FREE ASSESSMENT with us at Home2stay and we'll guide you through the process of choosing the right ramp solution for yourself or your loved ones. Our experienced team will evaluate your specific needs, space requirements, and recommend the most suitable ramp system.
                        </p>

                        <p class="text-gray-700 mb-4">
                            After installation, our technicians will provide you, your caregiver, or the users with a comprehensive introduction to the operation and maintenance of your ramp system. Additional training can be requested if needed, and we can even provide guidance via video call for your convenience.
                        </p>

                        <p class="text-gray-700 mb-4">
                            We ensure that you know how to use and maintain your ramp safely and accurately. Our team is extensively trained in the installation and maintenance of all our ramp products to provide you with the best possible service.
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
                        <img src="{{ asset('al-prod-page-imgs/Ramps.jpg') }}" alt="Accessibility Ramps"
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
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">Request Your Ramp Accessibility Assessment</h2>
                    <p class="text-gray-600">Our accessibility specialists will evaluate your specific needs and recommend the
                        best ramp solutions for your home or business.</p>
                </div>

                <form action="/submit-assessment" method="POST">
                    @csrf
                    <input type="hidden" name="form_type" value="quote">
                    <input type="hidden" name="form_source" value="Ramps_quote_form">
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
                            <input type="text" id="location" name="location" placeholder="e.g., Front entrance, Back door, etc."
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
                        </div>
                    </div>

                    <!-- Product Interest -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Which ramp products are you interested in? *</label>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="products[]" value="threshold_ramps"
                                    class="form-checkbox text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Threshold Ramps</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="products[]" value="modular_ramps"
                                    class="form-checkbox text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Modular Ramps</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="products[]" value="portable_ramps"
                                    class="form-checkbox text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Portable Ramps</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="products[]" value="folding_ramps"
                                    class="form-checkbox text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Folding Ramps</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="products[]" value="rental" class="form-checkbox text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Rental Options</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="products[]" value="other" class="form-checkbox text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Other/Not Sure</span>
                            </label>
                        </div>
                    </div>

                    <!-- Additional Information -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-2" for="message">Additional Information</label>
                        <textarea id="message" name="message" rows="4"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent"
                            placeholder="Please share any specific requirements, measurements, or concerns..."></textarea>
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
                <h2 class="text-3xl font-bold mb-6">Ready to Enhance Your Accessibility?</h2>
                <p class="text-xl mb-8">Contact us today to explore how our ramp solutions can improve mobility and independence in your home.</p>
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