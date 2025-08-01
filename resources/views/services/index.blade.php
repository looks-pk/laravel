@extends('layouts.app')

@section('title', 'Our Services | Home2stay')
@section('meta_description', 'Explore our range of home accessibility services including stairlifts, home elevators, tub cuts, and grab bars to make your home safer and more accessible.')

@section('content')
<div class="bg-primary text-white py-20">
    <div class="container mx-auto px-4">
        <div class="text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Our Services</h1>
            <p class="text-xl text-white/80 max-w-2xl mx-auto">Discover our comprehensive range of professional services designed to enhance the safety and accessibility of your home.</p>
        </div>
    </div>
</div>

<div class="container mx-auto px-4 py-16">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Service Card 1: Stairlifts -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden group hover:shadow-lg transition-shadow duration-300">
            <div class="h-48 overflow-hidden">
                <img src="{{ asset('al-prod-page-imgs/Stair-Lifts.jpg') }}" alt="Stairlifts" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
            </div>
            <div class="p-6">
                <h3 class="text-xl font-bold mb-2 group-hover:text-primary transition-colors">Stairlifts</h3>
                <p class="text-gray-600 mb-4">Provide your loved ones with an easier way to get up and down the stairs safely and efficiently.</p>
                <a href="{{ url('/products-categories/stair-lifts') }}" class="inline-flex items-center text-primary hover:text-primary/80 font-medium">
                    Learn More <i class="fas fa-arrow-right ml-1 group-hover:translate-x-1 transition-transform"></i>
                </a>
            </div>
        </div>

        <!-- Service Card 2: Home Elevators -->
        <!-- <div class="bg-white rounded-lg shadow-md overflow-hidden group hover:shadow-lg transition-shadow duration-300">
            <div class="h-48 overflow-hidden">
                <img src="{{ asset('al-prod-page-imgs/ElevatorPorch-Lifts.jpg') }}" alt="Home Elevators" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
            </div>
            <div class="p-6">
                <h3 class="text-xl font-bold mb-2 group-hover:text-primary transition-colors">Home Elevators</h3>
                <p class="text-gray-600 mb-4">Take your home to a new level of convenience and accessibility with our home elevator solutions.</p>
                <a href="{{ url('/home-elevator-vancouver') }}" class="inline-flex items-center text-primary hover:text-primary/80 font-medium">
                    Learn More <i class="fas fa-arrow-right ml-1 group-hover:translate-x-1 transition-transform"></i>
                </a>
            </div>
        </div> -->

        <!-- Service Card 3: Tub Cut Outs -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden group hover:shadow-lg transition-shadow duration-300">
            <div class="h-48 overflow-hidden">
                <img src="{{ asset('/bathsafety-cat/CleanCut-Step-V1-e1503607014281.jpg') }}" alt="Tub Cut Outs" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
            </div>
            <div class="p-6">
                <h3 class="text-xl font-bold mb-2 group-hover:text-primary transition-colors">Tub Cut Outs</h3>
                <p class="text-gray-600 mb-4">Make your bathroom safer and more accessible with our custom tub cut out installations.</p>
                <a href="{{ url('/products-categories/tub-cuts/') }}" class="inline-flex items-center text-primary hover:text-primary/80 font-medium">
                    Learn More <i class="fas fa-arrow-right ml-1 group-hover:translate-x-1 transition-transform"></i>
                </a>
            </div>
        </div>

        <!-- Service Card 4: Grab Bars -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden group hover:shadow-lg transition-shadow duration-300">
            <div class="h-48 overflow-hidden">
                <img src="{{ asset('ser-bath/grab bars.png') }}" alt="Grab Bars" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
            </div>
            <div class="p-6">
                <h3 class="text-xl font-bold mb-2 group-hover:text-primary transition-colors">Grab Bars</h3>
                <p class="text-gray-600 mb-4">Enhance bathroom safety with a wide selection of grab bars for stability and support.</p>
                <a href="{{ url('/products-categories/grab-bars/') }}" class="inline-flex items-center text-primary hover:text-primary/80 font-medium">
                    Learn More <i class="fas fa-arrow-right ml-1 group-hover:translate-x-1 transition-transform"></i>
                </a>
            </div>
        </div>

        <!-- Service Card 5: Accessible Bathrooms -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden group hover:shadow-lg transition-shadow duration-300">
            <div class="h-48 overflow-hidden">
                <img src="{{ asset('ser-bath/accessible sink.png') }}" alt="Accessible Bathrooms" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
            </div>
            <div class="p-6">
                <h3 class="text-xl font-bold mb-2 group-hover:text-primary transition-colors">Accessible Bathrooms</h3>
                <p class="text-gray-600 mb-4">Professional accessible bathroom solutions to create safe, stylish, and functional bathrooms for all mobility needs.</p>
                <a href="{{ url('/products-categories/barrier-free-bathrooms/') }}" class="inline-flex items-center text-primary hover:text-primary/80 font-medium">
                    Learn More <i class="fas fa-arrow-right ml-1 group-hover:translate-x-1 transition-transform"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Call to Action -->
<div class="bg-gray-100 py-16">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold mb-4">Ready to Get Started?</h2>
        <p class="text-gray-600 mb-8 max-w-2xl mx-auto">Contact us today to discuss how we can help you enhance the safety and accessibility of your home.</p>
        <a href="{{ route('contact') }}" class="inline-block bg-primary text-white px-8 py-3 rounded-lg hover:bg-primary/90 transition-colors">
            Contact Us
        </a>
    </div>
</div>
@endsection 