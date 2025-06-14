@extends('layouts.app')

@section('title', 'Automotive Solutions For Seniors &amp; People with Disabilities - Home2stay')
@section('meta_description', 'Enjoy senior-friendly and disability-friend travels! Home2Stay’s range of automotive solutions, such as the Wheelchair / Scooter Lifts and Mobility Seats will allow you to bring your mobility devices securely on your trip and help those with mobility limitations to be seated safely inside the vehicle.')

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
            style="background-image: url('{{ asset('al-prod-page-imgs/Automotive.jpg') }}');">
            <div class="absolute inset-0 bg-black opacity-60"></div>
        </div>

        <!-- Hero Content -->
        <div class="container mx-auto px-4 relative z-10 flex items-center" style="min-height: 500px;">
            <div class="max-w-3xl">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6">Automotive</h1>
                <p class="text-xl text-white/90 mb-8">
                    Enabling independence on the road with innovative mobility solutions designed for comfort, safety, and
                    ease of use.
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
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Our Automotive Accessibility Products</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Discover our range of innovative solutions designed to make vehicle access and operation easier for
                    individuals with mobility challenges.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Product 1 -->
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl flex flex-col h-full">
                    <div class="overflow-hidden relative">
                        <img src="{{ asset('prod-aotumotive/bruno-curb-sider-hd-1024x683-2.jpg') }}" alt="Vehicle Transfer Seats"
                            class="w-full object-cover" style="height: 300px;">
                        <div class="absolute top-0 right-0 bg-primary text-white text-sm font-bold px-3 py-1 m-4 rounded">
                            Popular
                        </div>
                    </div>
                    <div class="p-6 flex-1 flex flex-col">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Home2stay VSL Curb-Sider Interior Lift</h3>
                        <p class="text-gray-600 mb-4 flex-grow">Bruno’s dependable hoist-style lift for scooters and
                            powerchairs, the Curb-Sider’s space-efficie

                        </p>
                        <div class="mt-auto">

                            <a href="{{ route('products.show', 'home2stay-vsl-curb-sider-interior-lift-2') }}"
                                class="block w-full bg-primary hover:bg-primary-dark text-white py-3 px-4 rounded-lg transition duration-300 text-center font-medium">
                                Learn More
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Product 2 -->
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl flex flex-col h-full">
                    <div class="overflow-hidden relative">
                        <img class="contain p-10" src="/logo/logo-clr.png" alt="Wheelchair Ramps"
                            class="w-full object-cover" style="height: 300px;">
                    </div>
                    <div class="p-6 flex-1 flex flex-col">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Home2stay Swivel Car Seat Lift</h3>
                        <p class="text-gray-600 mb-4 flex-grow">The Turny Evo mobility seat by BraunAbility is the best
                            selling handicap vehicle transfer seat for S

                        </p>
                        <div class="mt-auto">
                            <!-- <div class="mb-4">
                                    <div class="flex items-center justify-between mb-2">
                                        <span class="text-sm font-medium text-gray-600">Materials</span>
                                        <span class="text-sm text-gray-800">Aircraft-grade aluminum</span>
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <span class="text-sm font-medium text-gray-600">Length Options</span>
                                        <span class="text-sm text-gray-800">2ft to 10ft available</span>
                                    </div>
                                </div> -->
                            <a href="/products/home2stay-swivel-car-seat-lift/"
                                class="block w-full bg-primary hover:bg-primary-dark text-white py-3 px-4 rounded-lg transition duration-300 text-center font-medium">
                                Learn More
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Product 3 -->
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl flex flex-col h-full">
                    <div class="overflow-hidden relative">
                        <img src="{{ asset('prod-aotumotive/bruno-curb-sider-hd-1024x683-2.jpg') }}" alt="Hand Controls"
                            class="w-full object-cover" style="height: 300px;">
                    </div>
                    <div class="p-6 flex-1 flex flex-col">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Home2stay VSL Curb-Sider Interior Lift
                        </h3>
                        <p class="text-gray-600 mb-4 flex-grow">Bruno’s dependable hoist-style lift for scooters and powerchairs, the Curb-Sider’s space-efficie

</p>
                        <div class="mt-auto">
                            <!-- <div class="mb-4">
                                    <div class="flex items-center justify-between mb-2">
                                        <span class="text-sm font-medium text-gray-600">Installation</span>
                                        <span class="text-sm text-gray-800">Professional required</span>
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <span class="text-sm font-medium text-gray-600">Control Types</span>
                                        <span class="text-sm text-gray-800">Push/Pull & Radial</span>
                                    </div>
                                </div> -->
                            <a href="/products/home2stay-vsl-curb-sider-interior-lift/"
                                class="block w-full bg-primary hover:bg-primary-dark text-white py-3 px-4 rounded-lg transition duration-300 text-center font-medium">
                                Learn More
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
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">Enhancing Mobility & Independence</h2>
                    <p class="text-lg text-gray-600">
                        Our automotive accessibility solutions are designed to help individuals with mobility challenges
                        travel with comfort, dignity, and independence. Whether you're a driver or passenger, we offer a
                        range of products that can be customized to meet your specific needs.
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
                        <p class="text-gray-600">All our automotive products meet or exceed industry safety standards and
                            regulations.</p>
                    </div>

                    <div class="bg-gray-50 p-6 rounded-lg text-center">
                        <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 11.5V14m0-2.5v-6a1.5 1.5 0 113 0m-3 6a1.5 1.5 0 00-3 0v2a7.5 7.5 0 0015 0v-5a1.5 1.5 0 00-3 0m-6-3V11m0-5.5v-1a1.5 1.5 0 013 0v1m0 0V11m0-5.5a1.5 1.5 0 013 0v3m0 0V11" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Customizable</h3>
                        <p class="text-gray-600">Solutions tailored to individual needs with adjustable components and
                            personalized installation.</p>
                    </div>

                    <div class="bg-gray-50 p-6 rounded-lg text-center">
                        <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Easy to Use</h3>
                        <p class="text-gray-600">Intuitive designs that prioritize convenience, requiring minimal effort to
                            operate.</p>
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

                        <h2 class="text-3xl font-bold text-gray-800 mb-4">Inclusive Living Solutions: Discover Our Complete
                            Product Catalog</h2>
                        <p class="text-lg text-gray-600 mb-6">
                            Home2stay is a trusted provider of accessibility and mobility solutions in the British Columbia
                            region, servicing the following: Vancouver, Surrey, Abbotsford, Richmond, Coquitlam, Tricities,
                            Mission, Delta, Pitt Meadows, Burnaby, Port Moody, Maple Ridge, Langley, Chilli Wack, White
                            Rock, Aldergrove, and other nearby areas.</p>
                        <p class="mb-5">Is your area not listed? Give us a call at <a href="tel:+16042591211"
                                class="text-secondary">604-259-1211</a> or submit a FREE
                            <a href="#assessment" class="text-secondary"> ASSESSMENT FORM </a> to check.
                        </p>

                    </div>
                    <!-- Image -->
                    <div class="w-full lg:w-1/2">
                        <img src="{{ asset('al-prod-page-imgs/Automotive.jpg') }}" alt="Vehicle Wheelchair Lift"
                            class="w-full h-full object-cover" style="min-height: 400px;">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Automotive Solutions Details -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="bg-white rounded-xl shadow-md p-8 md:p-12">
                    <h2 class="text-3xl font-bold text-gray-800 mb-6">Automotive Mobility Solutions</h2>

                    <div class="prose prose-lg max-w-none">
                        <p class="text-gray-700 mb-4">
                            Travel comfortably, conveniently and in-style with your loved ones. Home2stay's range of
                            automotive solutions allow you to bring your mobile devices securely on your trips and help
                            those with mobility limitations to be seated safely inside the vehicle. Our Wheelchair / Scooter
                            Lifts and Mobility Seats are easy to install and can be transferred to other vehicles easily,
                            without affecting any parts of your vehicle.
                        </p>

                        <p class="text-gray-700 mb-4">
                            Whether you want your mobility device to be placed on the inside or outside of your vehicle, or
                            whatever the size of your vehicle is- Home2stay has options for you to choose from.
                        </p>

                        <div class="my-8 p-6 bg-primary/5 border-l-4 border-primary rounded-r-lg">
                            <p class="text-gray-800 font-medium">
                                For those who may have trouble entering or exiting the vehicle, the Mobility Seat is a good
                                idea. The BraunAbility Turny Evo is a fully powered seating solution that rotates, extends,
                                and moves up and down to make transferring from your wheelchair to the vehicle (and vice
                                versa) safer. The seat retains the full recline and power adjustments even after
                                installation, and a one-button push via a handheld control or with your smartphone makes
                                operation effortless.
                            </p>
                        </div>

                        <p class="text-gray-700 mb-4">
                            We have two brands of automotive solutions available: BraunAbility and Bruno. All products meet
                            or exceed applicable federal safety standards and are easy to operate.
                        </p>

                        <h3 class="text-2xl font-bold text-gray-800 mt-8 mb-4">Expert Support & Maintenance</h3>

                        <p class="text-gray-700 mb-4">
                            Book a FREE ASSESSMENT with us at Home2stay and we'll guide you through the process of choosing
                            the automotive solutions for yourself or your loved ones. After installation, our technicians
                            and/or salesperson will give you, your caregiver or the user/s a comprehensive introduction to
                            the operation and maintenance of the product.
                        </p>

                        <p class="text-gray-700 mb-4">
                            Additional training can be requested if the main user or caregiver is not on-site after the
                            installation is completed. This can also be done via video call, for your convenience.
                        </p>

                        <p class="text-gray-700 mb-4">
                            We will do our best to go over everything at the end of each installation, to ensure that you
                            know how to use and maintain the products safely and accurately. Annual maintenance will also be
                            done by our team members, as we have been extensively trained in the maintenance of BraunAbility
                            and Bruno products.
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
                        <img src="{{ asset('al-prod-page-imgs/Automotive.jpg') }}" alt="Vehicle Wheelchair Lift"
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
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">Request Your Automotive Accessibility Assessment</h2>
                    <p class="text-gray-600">Our mobility specialists will evaluate your specific needs and recommend the
                        best automotive solutions for you.</p>
                </div>

                <form action="#" method="POST" class="space-y-6">
                    @csrf
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
                            <label class="block text-gray-700 font-medium mb-2" for="vehicle">Vehicle Make/Model (if
                                known)</label>
                            <input type="text" id="vehicle" name="vehicle"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
                        </div>
                    </div>

                    <!-- Product Interest -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Which products are you interested in? *</label>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="products[]" value="transfer_seats"
                                    class="form-checkbox text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Vehicle Transfer Seats</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="products[]" value="wheelchair_ramps"
                                    class="form-checkbox text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Wheelchair Ramps</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="products[]" value="hand_controls"
                                    class="form-checkbox text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Hand Controls</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="products[]" value="wheelchair_lifts"
                                    class="form-checkbox text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Wheelchair Lifts</span>
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
                            placeholder="Please share any specific requirements or concerns..."></textarea>
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
                <h2 class="text-3xl font-bold mb-6">Ready to Enhance Your Mobility?</h2>
                <p class="text-xl mb-8">Contact us today to explore how our automotive accessibility solutions can transform
                    your travel experience.</p>
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