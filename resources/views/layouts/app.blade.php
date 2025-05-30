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
                        <p class="text-gray-400 mb-4">Professional IT services and solutions for your business needs.</p>
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

                    <!-- Services -->
                    <div>
                        <h3 class="text-xl font-bold mb-4">Services</h3>
                        <ul class="space-y-2">
                            <li><a href="{{ route('services.show', 'web-development') }}" class="text-gray-400 hover:text-white transition-colors">Web Development</a></li>
                            <li><a href="{{ route('services.show', 'mobile-app-development') }}" class="text-gray-400 hover:text-white transition-colors">Mobile App Development</a></li>
                            <li><a href="{{ route('services.show', 'seo-services') }}" class="text-gray-400 hover:text-white transition-colors">SEO Services</a></li>
                            <li><a href="{{ route('services.show', 'ui-ux-design') }}" class="text-gray-400 hover:text-white transition-colors">UI/UX Design</a></li>
                            <li><a href="{{ route('services.show', 'cloud-solutions') }}" class="text-gray-400 hover:text-white transition-colors">Cloud Solutions</a></li>
                        </ul>
                    </div>

                    <!-- Contact Info -->
                    <div>
                        <h3 class="text-xl font-bold mb-4">Contact Us</h3>
                        <ul class="space-y-2">
                            <li class="flex items-start">
                                <i class="fas fa-map-marker-alt mt-1 mr-2 text-primary"></i>
                                <span class="text-gray-400">123 Business Street, City, Country</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-phone mt-1 mr-2 text-primary"></i>
                                <span class="text-gray-400">+1 234 567 890</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-envelope mt-1 mr-2 text-primary"></i>
                                <span class="text-gray-400">info@yourcompany.com</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="border-t border-gray-800 mt-12 pt-8 text-center text-gray-400">
                    <p>&copy; {{ date('Y') }} YourCompany. All rights reserved.</p>
                </div>
            </div>
        </footer>
    </div>
    
    <!-- Stack for additional scripts -->
    @stack('scripts')
</body>
</html>