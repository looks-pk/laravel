@extends('layouts.app')

@section('title', 'Home2Stay VSL Curb Sider Interior Lift 2')
@section('meta_description', 'Home2stay VSL Curb Sider Interior Lift 2 - A reliable interior wheelchair lift designed for easy installation and use in most vehicles.')

@section('content')
    <!-- Hero Section -->
    <section class="relative pt-16 pb-12 md:pt-24 md:pb-16 bg-gradient-to-r from-primary to-primary-dark text-white">
        <div class="container mx-auto px-4">
            <div class="flex flex-col items-start">
                <nav class="flex mb-4 text-sm" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 md:space-x-3">
                        <li class="inline-flex items-center">
                            <a href="{{ route('home') }}" class="text-white hover:text-gray-200">
                                Home
                            </a>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <svg class="w-3 h-3 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg>
                                <a href="{{ route('products.index') }}" class="ml-1 text-white hover:text-gray-200">
                                    Products
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <svg class="w-3 h-3 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg>
                                <a href="{{ route('products.category', 'automotive') }}"
                                    class="ml-1 text-white hover:text-gray-200">
                                    Automotive
                                </a>
                            </div>
                        </li>
                        <li aria-current="page">
                            <div class="flex items-center">
                                <svg class="w-3 h-3 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg>
                                <span class="ml-1 font-medium text-gray-100">Home2stay VSL Curb-Sider Interior Lift</span>
                            </div>
                        </li>
                    </ol>
                </nav>
                <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-4">Home2stay VSL Curb-Sider Interior Lift</h1>
                <div class="flex items-center mb-4">
                    <div class="flex text-yellow-400">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                    </div>
                    <span class="ml-2 text-sm ">Based on reviews</span>
                </div>

            </div>
        </div>
    </section>

    <!-- Product Details -->
    <section class="py-12 md:py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="flex flex-col lg:flex-row gap-8">
                <!-- Product Image Gallery -->
                <div class="w-full lg:w-1/2">
                    <div class="bg-gray-100 rounded-lg overflow-hidden mb-4">
                        <img src="{{ asset('prod-aotumotive/bruno-curb-sider-hd-1024x683-2.jpg') }}"
                            alt="VSL Curb Sider Interior Lift 2" class="w-full h-auto object-cover">
                    </div>
                </div>

                <!-- Product Info -->
                <div class="w-full lg:w-1/2">


                    <div class="mb-6">
                        <p class="text-gray-600 text-lg">
                        Bruno’s dependable hoist-style lift for scooters and powerchairs, the Curb-Sider’s space-efficient design lets you keep your third-row seating when a mobility device isn’t present.
                        </p>
                    </div>
                    <div class="mb-6">
                        <p class="text-gray-600 text-lg">
                        Stand by the bumper, connect a docking device, push a button and the Curb-Sider lifts and stows your mobility device.</p>
                    </div>
                    <div class="mb-6">
                        <p class="text-gray-600 text-lg"><b>CONTACT US</b>  for a price quote customized to your needs.</p>
                    </div>

                    <div class="mb-6">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3">Technical Information</h3>
                        <ul class="space-y-2">
                            <li class="flex items-start">
                                <svg class="h-5 w-5 text-primary flex-shrink-0 mr-2 mt-0.5"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span>Fully powered, one-button seat rotation
                                </span>
                            </li>
                            <li class="flex items-start">
                                <svg class="h-5 w-5 text-primary flex-shrink-0 mr-2 mt-0.5"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span>Multiple fabric colors</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="h-5 w-5 text-primary flex-shrink-0 mr-2 mt-0.5"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span>Original seat unmodified and easily reinstalled</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="h-5 w-5 text-primary flex-shrink-0 mr-2 mt-0.5"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span>Manual seat slider extends seat beyond door frame</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="h-5 w-5 text-primary flex-shrink-0 mr-2 mt-0.5"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span>Scratch resistant, easy-to-clean fabrics</span>
                            </li>
                        </ul>
                    </div>

                    <div class="mb-8">
                        <div class="mb-6">
                            
                            <div class="bg-gray-50 rounded-lg p-4">
                                <div class="flex items-center justify-between mb-2">
                                <h3 class="text-xl font-semibold text-gray-800 mb-3">Specifications</h3>
                                <span class="text-sm text-gray-800">Bruno</span>
                            </div>
                            <div class="flex items-center justify-between mb-2">
                                <h3 class="text-xl font-semibold text-gray-800 mb-3">Pricing</h3>
                                <span class="text-sm text-gray-800">Starts at $4,250.00 + installation</span>
                            </div>
                            <div class="flex items-center justify-between mb-2">
                                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Call Us</h3>
                                    <a href="tel:+16042591211" class="text-secondary">
                                        <span class="text-sm text-gray-800">604-259-1211</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8 space-y-4">
                        <a href="#inquiry"
                            class="inline-flex items-center justify-center w-full px-6 py-3 bg-primary text-white font-medium rounded-lg hover:bg-primary-dark transition duration-300">
                            Request Information
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                        <a href="#assessment"
                            class="inline-flex items-center justify-center w-full px-6 py-3 bg-white text-primary border border-primary font-medium rounded-lg hover:bg-gray-50 transition duration-300">
                            Schedule Free Assessment
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Additional Info Sections -->
    <!-- <section class="py-12 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto prose prose-lg">
                <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">Why Choose the VSL Curb Sider Interior Lift 2
                </h2>

                <p>The VSL Curb Sider Interior Lift 2 is an excellent choice for those who want to transport their mobility
                    device securely inside their vehicle, protecting it from the elements and theft. Its compact design
                    makes it suitable for most sedans and SUVs without requiring extensive modifications to your vehicle.
                </p>

                <h3>Easy Operation</h3>
                <p>With a simple one-button control, the lift makes it easy to load and unload your mobility device without
                    assistance. The lift's smooth operation ensures your wheelchair or scooter is handled gently, preventing
                    any damage during transport.</p>

                <h3>Secure Transport</h3>
                <p>The VSL Curb Sider features a robust locking system that keeps your mobility device firmly in place
                    during travel. This eliminates concerns about movement or shifting that could potentially damage your
                    vehicle's interior or the mobility device itself.</p>

                <h3>Professional Installation</h3>
                <p>Every purchase includes professional installation by our trained technicians. We ensure that the lift is
                    properly integrated with your vehicle's electrical system and securely mounted to provide reliable
                    operation for years to come.</p>

                <div class="my-8 p-6 bg-primary/5 border-l-4 border-primary rounded-r-lg">
                    <p class="text-gray-800 font-medium">
                        "The VSL Curb Sider has made a tremendous difference in my independence. I can now travel with my
                        wheelchair securely stored inside my car without worrying about weather damage or theft. The
                        installation was quick and professional, and the operation is incredibly simple. I highly recommend
                        this product to anyone looking for an interior wheelchair lift solution."
                        <br><br>
                        - Michael R., Vancouver
                    </p>
                </div>
            </div>
        </div>
    </section> -->

    <!-- Featured Product -->
    <section class="py-16 bg-primary">
        <div class="container mx-auto px-4">
            <div class="bg-gray-50 rounded-xl overflow-hidden shadow-lg">
                <div class="flex flex-col lg:flex-row">
                    <!-- Text Content -->
                    <div class="w-full lg:w-1/2 p-8 md:p-12 flex flex-col justify-center">

                        <h2 class="text-3xl font-bold text-gray-800 mb-4">Are you interested in having this product installed?</h2>
                        <p class="text-lg text-gray-600 mb-6">Accessibility solutions to make everyday home life easier and safer for yourself and your loved ones.</p>
                        <p class="mb-5">Give us a call at <a href="tel:+16042591211"
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

    <!-- Related Products -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-10">Related Blogs</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Related product 1 -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden">
                    <div class="h-48 bg-gray-200">
                        <img src="{{ asset('images/products/exterior-wheelchair-lift.jpg') }}"
                            alt="Exterior Wheelchair Lift" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Exterior Wheelchair Lift</h3>
                        <p class="text-gray-600 mb-4">For those who prefer to transport their mobility device on the outside
                            of their vehicle.</p>
                        <a href="/products/exterior-wheelchair-lift"
                            class="inline-block text-primary font-medium hover:underline">View Details</a>
                    </div>
                </div>

                <!-- Related product 2 -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden">
                    <div class="h-48 bg-gray-200">
                        <img src="{{ asset('images/products/car-transfer-seat.jpg') }}" alt="Car Transfer Seat"
                            class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Car Transfer Seat</h3>
                        <p class="text-gray-600 mb-4">Makes getting in and out of your vehicle easier with a rotating seat
                            mechanism.</p>
                        <a href="/products/car-transfer-seat"
                            class="inline-block text-primary font-medium hover:underline">View Details</a>
                    </div>
                </div>

                <!-- Related product 3 -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden">
                    <div class="h-48 bg-gray-200">
                        <img src="{{ asset('images/products/hand-controls.jpg') }}" alt="Hand Controls"
                            class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Hand Controls</h3>
                        <p class="text-gray-600 mb-4">Allows individuals with limited leg mobility to operate their vehicle
                            using hand controls.</p>
                        <a href="/products/hand-controls" class="inline-block text-primary font-medium hover:underline">View
                            Details</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Inquiry Form -->
    <section id="inquiry" class="py-12 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto">
                <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">Interested in the VSL Curb Sider Interior Lift
                    2?</h2>
                <p class="text-lg text-center text-gray-600 mb-8">Fill out the form below and our team will get back to you
                    with detailed information and pricing.</p>

                <form action="#" method="POST" class="bg-white rounded-xl p-6 md:p-8 shadow-md">
                    @csrf
                    <input type="hidden" name="product" value="VSL Curb Sider Interior Lift 2">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label for="name" class="block text-gray-700 font-medium mb-2">Your Name</label>
                            <input type="text" id="name" name="name"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-primary focus:border-primary"
                                required>
                        </div>
                        <div>
                            <label for="email" class="block text-gray-700 font-medium mb-2">Email Address</label>
                            <input type="email" id="email" name="email"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-primary focus:border-primary"
                                required>
                        </div>
                        <div>
                            <label for="phone" class="block text-gray-700 font-medium mb-2">Phone Number</label>
                            <input type="tel" id="phone" name="phone"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-primary focus:border-primary">
                        </div>
                        <div>
                            <label for="location" class="block text-gray-700 font-medium mb-2">Your Location</label>
                            <input type="text" id="location" name="location"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-primary focus:border-primary">
                        </div>
                    </div>
                    <div class="mb-6">
                        <label for="message" class="block text-gray-700 font-medium mb-2">Your Message</label>
                        <textarea id="message" name="message" rows="4"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-primary focus:border-primary"
                            required></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit"
                            class="px-8 py-3 bg-primary text-white font-medium rounded-lg hover:bg-primary-dark transition duration-300">
                            Submit Inquiry
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Assessment Form Section -->
    <section id="assessment" class="py-12 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto">
                <h2 class="text-3xl font-bold text-center text-gray-800 mb-4">Schedule a Free Assessment</h2>
                <p class="text-lg text-center text-gray-600 mb-8">Our mobility specialists will help determine if the VSL
                    Curb Sider Interior Lift 2 is the right solution for your needs.</p>

                <!-- Assessment form here -->
                <div class="text-center">
                    <a href="{{ route('contact') }}"
                        class="inline-flex items-center px-6 py-3 bg-primary text-white rounded-lg hover:bg-primary-dark transition duration-300">
                        Contact Us for Assessment
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
    </section>
@endsection