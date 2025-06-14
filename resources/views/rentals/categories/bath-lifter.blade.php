@extends('layouts.app')

@section('title', 'Bath Lifter Rentals - Home2stay')
@section('meta_description', 'Rent bath lifters and other bathroom safety products for improved accessibility and mobility at home.')

@section('content')
    <!-- Hero Banner -->
    <section class="relative bg-gray-900 overflow-hidden" style="min-height: 500px;">


        <!-- Hero Content -->
        <div class="container mx-auto px-4 relative z-10 flex items-center" style="min-height: 500px;">
            <div class="max-w-3xl">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6">Bath Lifter</h1>
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
                        <img src="{{ asset('al-prod-page-imgs/Automotive.jpg') }}" alt="Vehicle Transfer Seats"
                            class="w-full object-cover" style="height: 300px;">
                        <div class="absolute top-0 right-0 bg-primary text-white text-sm font-bold px-3 py-1 m-4 rounded">
                            Popular
                        </div>
                    </div>
                    <div class="p-6 flex-1 flex flex-col">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Vehicle Transfer Seats</h3>
                        <p class="text-gray-600 mb-4 flex-grow">Specialized seats that swivel outward and lower to make
                            vehicle entry and exit easier for individuals with mobility challenges.</p>
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
                        <img src="{{ asset('al-prod-page-imgs/Ramps.jpg') }}" alt="Wheelchair Ramps"
                            class="w-full object-cover" style="height: 300px;">
                    </div>
                    <div class="p-6 flex-1 flex flex-col">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Portable Wheelchair Ramps</h3>
                        <p class="text-gray-600 mb-4 flex-grow">Durable, lightweight ramps that make vehicle access possible
                            for wheelchair users, with foldable designs for easy storage.</p>
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
                            <a href="#"
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
                        <img src="{{ asset('al-prod-page-imgs/Safety-Poles-Handrails.jpg') }}" alt="Hand Controls"
                            class="w-full object-cover" style="height: 300px;">
                    </div>
                    <div class="p-6 flex-1 flex flex-col">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Vehicle Hand Controls</h3>
                        <p class="text-gray-600 mb-4 flex-grow">Advanced hand control systems that allow individuals with
                            limited leg mobility to operate a vehicle's gas and brake functions with their hands.</p>
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
                            <a href="#"
                                class="block w-full bg-primary hover:bg-primary-dark text-white py-3 px-4 rounded-lg transition duration-300 text-center font-medium">
                                Learn More
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