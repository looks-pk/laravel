@extends('layouts.app')

@section('title', 'Our Services')
@section('meta_description', 'Explore our range of professional services designed to meet your needs')

@section('content')
<div class="bg-primary text-white py-20">
    <div class="container mx-auto px-4">
        <div class="text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Our Services</h1>
            <p class="text-xl text-white/80 max-w-2xl mx-auto">Discover our comprehensive range of professional services designed to help you achieve your goals.</p>
        </div>
    </div>
</div>

<div class="container mx-auto px-4 py-16">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Service Card 1 -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden group hover:shadow-lg transition-shadow duration-300">
            <div class="h-48 bg-gray-200 flex items-center justify-center">
                <i class="fas fa-laptop-code text-5xl text-primary group-hover:scale-110 transition-transform duration-300"></i>
            </div>
            <div class="p-6">
                <h3 class="text-xl font-bold mb-2 group-hover:text-primary transition-colors">Web Development</h3>
                <p class="text-gray-600 mb-4">Custom web solutions tailored to your business needs, from simple websites to complex web applications.</p>
                <a href="{{ route('services.show', 'web-development') }}" class="inline-flex items-center text-primary hover:text-primary/80 font-medium">
                    Learn More <i class="fas fa-arrow-right ml-1 group-hover:translate-x-1 transition-transform"></i>
                </a>
            </div>
        </div>

        <!-- Service Card 2 -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden group hover:shadow-lg transition-shadow duration-300">
            <div class="h-48 bg-gray-200 flex items-center justify-center">
                <i class="fas fa-mobile-alt text-5xl text-primary group-hover:scale-110 transition-transform duration-300"></i>
            </div>
            <div class="p-6">
                <h3 class="text-xl font-bold mb-2 group-hover:text-primary transition-colors">Mobile App Development</h3>
                <p class="text-gray-600 mb-4">Native and cross-platform mobile applications for iOS and Android platforms.</p>
                <a href="{{ route('services.show', 'mobile-app-development') }}" class="inline-flex items-center text-primary hover:text-primary/80 font-medium">
                    Learn More <i class="fas fa-arrow-right ml-1 group-hover:translate-x-1 transition-transform"></i>
                </a>
            </div>
        </div>

        <!-- Service Card 3 -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden group hover:shadow-lg transition-shadow duration-300">
            <div class="h-48 bg-gray-200 flex items-center justify-center">
                <i class="fas fa-search text-5xl text-primary group-hover:scale-110 transition-transform duration-300"></i>
            </div>
            <div class="p-6">
                <h3 class="text-xl font-bold mb-2 group-hover:text-primary transition-colors">SEO Services</h3>
                <p class="text-gray-600 mb-4">Improve your online visibility and drive more organic traffic to your website.</p>
                <a href="{{ route('services.show', 'seo-services') }}" class="inline-flex items-center text-primary hover:text-primary/80 font-medium">
                    Learn More <i class="fas fa-arrow-right ml-1 group-hover:translate-x-1 transition-transform"></i>
                </a>
            </div>
        </div>

        <!-- Service Card 4 -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden group hover:shadow-lg transition-shadow duration-300">
            <div class="h-48 bg-gray-200 flex items-center justify-center">
                <i class="fas fa-paint-brush text-5xl text-primary group-hover:scale-110 transition-transform duration-300"></i>
            </div>
            <div class="p-6">
                <h3 class="text-xl font-bold mb-2 group-hover:text-primary transition-colors">UI/UX Design</h3>
                <p class="text-gray-600 mb-4">Create beautiful and intuitive user interfaces that enhance user experience.</p>
                <a href="{{ route('services.show', 'ui-ux-design') }}" class="inline-flex items-center text-primary hover:text-primary/80 font-medium">
                    Learn More <i class="fas fa-arrow-right ml-1 group-hover:translate-x-1 transition-transform"></i>
                </a>
            </div>
        </div>

        <!-- Service Card 5 -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden group hover:shadow-lg transition-shadow duration-300">
            <div class="h-48 bg-gray-200 flex items-center justify-center">
                <i class="fas fa-server text-5xl text-primary group-hover:scale-110 transition-transform duration-300"></i>
            </div>
            <div class="p-6">
                <h3 class="text-xl font-bold mb-2 group-hover:text-primary transition-colors">Cloud Solutions</h3>
                <p class="text-gray-600 mb-4">Scalable and secure cloud infrastructure solutions for your business.</p>
                <a href="{{ route('services.show', 'cloud-solutions') }}" class="inline-flex items-center text-primary hover:text-primary/80 font-medium">
                    Learn More <i class="fas fa-arrow-right ml-1 group-hover:translate-x-1 transition-transform"></i>
                </a>
            </div>
        </div>

        <!-- Service Card 6 -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden group hover:shadow-lg transition-shadow duration-300">
            <div class="h-48 bg-gray-200 flex items-center justify-center">
                <i class="fas fa-headset text-5xl text-primary group-hover:scale-110 transition-transform duration-300"></i>
            </div>
            <div class="p-6">
                <h3 class="text-xl font-bold mb-2 group-hover:text-primary transition-colors">IT Support</h3>
                <p class="text-gray-600 mb-4">24/7 technical support and maintenance services for your IT infrastructure.</p>
                <a href="{{ route('services.show', 'it-support') }}" class="inline-flex items-center text-primary hover:text-primary/80 font-medium">
                    Learn More <i class="fas fa-arrow-right ml-1 group-hover:translate-x-1 transition-transform"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Custom Services Section -->
@if(isset($customServices) && count($customServices) > 0)
<div class="bg-gray-50 py-16">
    <div class="container mx-auto px-4">
        <div class="text-center mb-10">
            <h2 class="text-3xl font-bold mb-4">Specialized Services</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">Discover our additional specialized services designed to meet specific needs.</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($customServices as $customService)
                <div class="bg-white rounded-lg shadow-md overflow-hidden group hover:shadow-lg transition-shadow duration-300">
                    <div class="h-32 bg-gray-200 flex items-center justify-center">
                        <i class="fas fa-cogs text-4xl text-primary group-hover:scale-110 transition-transform duration-300"></i>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2 group-hover:text-primary transition-colors">
                            {{ ucwords(str_replace('-', ' ', $customService)) }}
                        </h3>
                        @php
                            // Generate the URL based on the service name
                            $url = '/';
                            if ($customService === 'gallery') {
                                $url = route('services.custom.gallery');
                            } elseif ($customService === 'company-profile') {
                                $url = route('services.custom.company');
                            } elseif ($customService === 'accessible-bathroom-canada') {
                                $url = route('services.custom.bathroom');
                            } else {
                                $url = '/' . $customService;
                            }
                        @endphp
                        <a href="{{ $url }}" class="inline-flex items-center text-primary hover:text-primary/80 font-medium">
                            Learn More <i class="fas fa-arrow-right ml-1 group-hover:translate-x-1 transition-transform"></i>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endif

<!-- Call to Action -->
<div class="bg-gray-100 py-16">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold mb-4">Ready to Get Started?</h2>
        <p class="text-gray-600 mb-8 max-w-2xl mx-auto">Contact us today to discuss how we can help you achieve your business goals with our professional services.</p>
        <a href="{{ route('contact') }}" class="inline-block bg-primary text-white px-8 py-3 rounded-lg hover:bg-primary/90 transition-colors">
            Contact Us
        </a>
    </div>
</div>
@endsection 