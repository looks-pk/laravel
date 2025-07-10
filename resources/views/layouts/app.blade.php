<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', config('app.name', 'Laravel'))</title>
    <meta name="description" content="@yield('meta_description', 'Professional IT services and solutions')">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Styles and Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Stack for additional styles -->
    @stack('styles')
</head>
<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-50">
        <!-- Navigation -->
        <x-navigation />

        <!-- Page Content -->
        <main>
            @yield('content')
        </main>

        <!-- Footer -->
        <footer class="bg-gray-900 text-white py-12">
            <div class="container mx-auto px-4">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                    <!-- Company Info -->
                    <div>
                    <div class="flex-shrink-0 mb-4">
                <a href="{{ route('home') }}" class="flex items-center">
                    <span class="text-2xl font-bold text-primary"><img src="/logo/logo-light.png" alt=""></span>
                </a>
            </div>
                        <p class="text-gray-400 mb-4">Located in Vancouver, British Columbia, Home2stay specializes in home accessibility solutions and renovations. With over a decade of expertise in accessibility and universal design, we aim to build safe and inclusive homes and spaces for people of all ages and abilities.</p>
                        <div class="flex space-x-4">
                            <a href="#" class="text-gray-400 hover:text-white transition-colors">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-white transition-colors">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-white transition-colors">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-white transition-colors">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Quick Links -->
                    <div>
                        <h3 class="text-xl font-bold mb-4">Quick Links</h3>
                        <ul class="space-y-2">
                            <li><a href="{{ route('home') }}" class="text-gray-400 hover:text-white transition-colors">Home</a></li>
                            <li><a href="{{ route('services.index') }}" class="text-gray-400 hover:text-white transition-colors">Services</a></li>
                            <li><a href="{{ route('blog.index') }}" class="text-gray-400 hover:text-white transition-colors">Blog</a></li>
                            <li><a href="{{ route('about') }}" class="text-gray-400 hover:text-white transition-colors">About</a></li>
                            <li><a href="{{ route('contact') }}" class="text-gray-400 hover:text-white transition-colors">Contact</a></li>
                        </ul>
                    </div>

                    <!-- Products -->
                    <div>
                        <h3 class="text-xl font-bold mb-4">Products</h3>
                        <ul class="space-y-2">
                            <li><a href="/all-products/" class="text-gray-400 hover:text-white transition-colors">All Products</a></li>
                            <li><a href="/products-categories/grab-bars/" class="text-gray-400 hover:text-white transition-colors">Grab Bars</a></li>
                            <li><a href="/products-categories/barrier-free-bathrooms/" class="text-gray-400 hover:text-white transition-colors">Barrier-Free Bathrooms</a></li>
                            <li><a href="/products-categories/automotive/" class="text-gray-400 hover:text-white transition-colors">Automotive</a></li>
                            <li><a href="/accessibility-solutions" class="text-gray-400 hover:text-white transition-colors">Accessibility Solutions</a></li>
                        </ul>
                    </div>

                    <!-- Contact Info -->
                    <div>
                        <h3 class="text-xl font-bold mb-4">Contact Us</h3>
                        <ul class="space-y-3">
                            <li class="flex items-start">
                                <i class="fas fa-map-marker-alt mt-1 mr-2 text-primary"></i>
                                <div class="text-gray-400">
                                    <div>196 West 6 Ave, Vancouver, BC, V5Y 1K6</div>
                                </div>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-phone mt-1 mr-2 text-primary"></i>
                                <div class="text-gray-400">
                                    <div><a href="tel:+16042591211" class="hover:text-white transition-colors">(604) 259-1211</a></div>
                                    <div class="mt-1"><a href="tel:+16046089442" class="hover:text-white transition-colors">(604) 608-9442</a></div>
                                </div>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-envelope mt-1 mr-2 text-primary"></i>
                                <a href="mailto:info@home2stay.com" class="text-gray-400 hover:text-white transition-colors">info@home2stay.com</a>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-clock mt-1 mr-2 text-primary"></i>
                                <span class="text-gray-400">Mon - Fri: 8:30 - 16:30</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="border-t border-gray-800 mt-12 pt-8">
                    <div class="flex flex-col md:flex-row justify-between items-center text-gray-400">
                        <!-- Left Side - Copyright -->
                        <div class="text-center md:text-left mb-4 md:mb-0">
                            <p>&copy; {{ date('Y') }} Home2stay. All rights reserved.</p>
                        </div>
                        
                        <!-- Right Side - Designed & Marketed By -->
                        <div class="flex items-center text-center md:text-right">
                            <span class="mr-3">Designed & Marketed By</span>
                            <a href="https://digitalpartner.ca/" target="_blank" rel="nofollow noopener noreferrer" class="hover:opacity-80 transition-opacity">
                                <img src="https://digitalpartner.ca/wp-content/uploads/2023/11/logo.png" alt="Digital Partner" class="w-12 h-12 object-contain">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    
    <!-- Stack for additional scripts -->
    @stack('scripts')
</body>
</html>