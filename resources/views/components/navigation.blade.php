<nav class="bg-white shadow-md py-3">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center">
            <!-- Logo (Left Side) -->
            <div class="flex-shrink-0">
                <a href="{{ route('home') }}" class="flex items-center">
                    <span class="text-2xl font-bold text-primary"><img src="/logo/logo-clr.png" alt=""></span>
                </a>
            </div>

            <!-- Desktop Navigation (Center) -->
            <div class="hidden lg:flex items-center justify-center mx-auto space-x-8">
                <a href="{{ route('home') }}"
                    class="text-gray-700 hover:text-primary transition-colors {{ request()->routeIs('home') ? 'text-primary font-medium' : '' }}">
                    Home
                </a>

                <!-- Services Dropdown -->
                <div class="relative group">
                    <button
                        class="flex items-center text-gray-700 hover:text-primary transition-colors {{ request()->routeIs('services.*') ? 'text-primary font-medium' : '' }}">
                        Products
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>

                    <!-- Dropdown Menu - Redesigned to be vertical with icons and support for sub-links -->
                    <div
                        class="absolute left-0 mt-2 w-72 bg-white rounded-lg shadow-lg py-2 hidden group-hover:block z-50">
        
                    <!-- Products Section -->
                        <div class="relative group/submenu">
                            <button
                                class="w-full flex items-center justify-between px-4 py-3 text-gray-700 hover:bg-gray-100 hover:text-primary transition-colors border-b border-gray-100">
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 text-primary"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
                                    </svg>
                                    Products
                                </div>
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                            </button>

                            <!-- Products Sub-menu -->
                            <div
                                class="hidden group-hover/submenu:block absolute left-full top-0 w-64 bg-white rounded-lg shadow-lg py-2 ml-1">
                                <a href="/all-products/"
                                    class="flex items-center px-4 py-3 text-gray-700 hover:bg-gray-100 hover:text-primary transition-colors border-b border-gray-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 text-primary"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                                    </svg>
                                    All Products
                                </a>
                                <a href="/products-categories/grab-bars/"
                                    class="flex items-center px-4 py-3 text-gray-700 hover:bg-gray-100 hover:text-primary transition-colors border-b border-gray-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 text-primary"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                                    </svg>
                                    Grab Bars
                                </a>
                                <a href="/products-categories/barrier-free-bathrooms/"
                                    class="flex items-center px-4 py-3 text-gray-700 hover:bg-gray-100 hover:text-primary transition-colors border-b border-gray-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 text-primary"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
                                    </svg>
                                    Barrier-Free Bathrooms
                                </a>
                            </div>
                        </div>

                        <!-- Services Section -->
                        <div class="relative group/submenu">
                            <button
                                class="w-full flex items-center justify-between px-4 py-3 text-gray-700 hover:bg-gray-100 hover:text-primary transition-colors border-b border-gray-100">
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 text-primary"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                    Services
                                </div>
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                            </button>

                            <!-- Services Sub-menu -->
                            <div
                                class="hidden group-hover/submenu:block absolute left-full top-0 w-64 bg-white rounded-lg shadow-lg py-2 ml-1">
                                <a href="/accessible-bathroom-canada"
                                    class="flex items-center px-4 py-3 text-gray-700 hover:bg-gray-100 hover:text-primary transition-colors border-b border-gray-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 text-primary"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                                    </svg>
                                    Accessible Bathroom in Canada
                                </a>
                            </div>
                        </div>

                        <!-- Categories Section -->
                        <div class="relative group/submenu">
                            <button
                                class="w-full flex items-center justify-between px-4 py-3 text-gray-700 hover:bg-gray-100 hover:text-primary transition-colors border-b border-gray-100">
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 text-primary"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                                    </svg>
                                    Product Categories
                                </div>
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                            </button>

                            <!-- Categories Sub-menu -->
                            <div
                                class="hidden group-hover/submenu:block absolute left-full top-0 w-64 bg-white rounded-lg shadow-lg py-2 ml-1">
                                <a href="/products-categories/automotive/"
                                    class="flex items-center px-4 py-3 text-gray-700 hover:bg-gray-100 hover:text-primary transition-colors border-b border-gray-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 text-primary"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 6h16M4 10h16M4 14h16M4 18h16" />
                                    </svg>
                                    Automotive
                                </a>
                                <a href="/products-categories/grab-bars/"
                                    class="flex items-center px-4 py-3 text-gray-700 hover:bg-gray-100 hover:text-primary transition-colors border-b border-gray-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 text-primary"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                                    </svg>
                                    Grab Bars
                                </a>
                                <a href="/products-categories/barrier-free-bathrooms/"
                                    class="flex items-center px-4 py-3 text-gray-700 hover:bg-gray-100 hover:text-primary transition-colors border-b border-gray-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 text-primary"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
                                    </svg>
                                    Barrier-Free Bathrooms
                                </a>
                            </div>
                        </div>

                        <!-- Rentals Section -->
                        <div class="relative group/submenu">
                            <button
                                class="w-full flex items-center justify-between px-4 py-3 text-gray-700 hover:bg-gray-100 hover:text-primary transition-colors border-b border-gray-100">
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 text-primary"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    Rentals
                                </div>
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                            </button>

                            <!-- Rentals Sub-menu -->
                            <div
                                class="hidden group-hover/submenu:block absolute left-full top-0 w-64 bg-white rounded-lg shadow-lg py-2 ml-1">
                                <a href="/rentals"
                                    class="flex items-center px-4 py-3 text-gray-700 hover:bg-gray-100 hover:text-primary transition-colors border-b border-gray-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 text-primary"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 6h16M4 10h16M4 14h16M4 18h16" />
                                    </svg>
                                    All Rentals
                                </a>
                                <a href="/rentals/mobility-equipment"
                                    class="flex items-center px-4 py-3 text-gray-700 hover:bg-gray-100 hover:text-primary transition-colors border-b border-gray-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 text-primary"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                    Mobility Equipment
                                </a>
                                <a href="/rentals/bathroom-equipment"
                                    class="flex items-center px-4 py-3 text-gray-700 hover:bg-gray-100 hover:text-primary transition-colors border-b border-gray-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 text-primary"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z" />
                                    </svg>
                                    Bathroom Equipment
                                </a>
                            </div>
                        </div>

                        <!-- Accessibility Solutions -->
                        <a href="/accessibility-solutions"
                            class="flex items-center px-4 py-3 text-gray-700 hover:bg-gray-100 hover:text-primary transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 text-primary" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            Accessibility Solutions
                        </a>
                    </div>
                </div>
                <!-- About Drop Down -->
                <div class="relative group">
                    <button
                        class="flex items-center text-gray-700 hover:text-primary transition-colors {{ request()->routeIs('services.*') ? 'text-primary font-medium' : '' }}">
                        About Us
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>

                    <!-- Dropdown Menu - Redesigned to be vertical with icons and support for sub-links -->
                    <div
                        class="absolute left-0 mt-2 w-72 bg-white rounded-lg shadow-lg py-2 hidden group-hover:block z-50">
                        <a href="/company-profile/"
                            class="flex items-center px-4 py-3 text-gray-700 hover:bg-gray-100 hover:text-primary transition-colors border-b border-gray-100">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 text-primary" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h7" />
                            </svg>
                            Company Profile
                        </a>
                        <!-- Accessibility Solutions -->
                        <a href="/gallery/"
                            class="flex items-center px-4 py-3 text-gray-700 hover:bg-gray-100 hover:text-primary transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 text-primary" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            Gallery
                        </a>
                    </div>
                </div>

                <a href="{{ route('blog.index') }}"
                    class="text-gray-700 hover:text-primary transition-colors {{ request()->routeIs('blog.*') ? 'text-primary font-medium' : '' }}">
                    Blog
                </a>
                <a href="{{ route('about') }}"
                    class="text-gray-700 hover:text-primary transition-colors {{ request()->routeIs('about') ? 'text-primary font-medium' : '' }}">
                    About
                </a>
                <a href="{{ route('contact') }}"
                    class="text-gray-700 hover:text-primary transition-colors {{ request()->routeIs('contact') ? 'text-primary font-medium' : '' }}">
                    Contact
                </a>
            </div>

            <!-- Right Side (Search & Buttons) -->
            <div class="hidden lg:flex items-center space-x-4">
                <!-- Search Bar -->
                <div class="relative">
                    <input type="text" placeholder="Search..."
                        class="w-40 pl-10 pr-4 py-1 rounded-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                    <div class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </div>
                </div>

                <!-- Buttons -->
                <a href="/locations" class="btn-primary px-4 py-2 rounded-md text-sm font-medium">Visit a Location</a>
                <a href="{{ route('contact') }}" class="btn-secondary px-4 py-2 rounded-md text-sm font-medium">Contact
                    Us Today</a>
            </div>

            <!-- Mobile Menu Button -->
            <div class="lg:hidden">
                <button type="button" class="text-gray-700 hover:text-primary focus:outline-none"
                    onclick="toggleMobileMenu()">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div class="lg:hidden hidden" id="mobile-menu">
        <div class="px-2 pt-2 pb-3 space-y-1">
            <!-- Mobile Search Bar -->
            <div class="relative px-3 py-2">
                <input type="text" placeholder="Search..."
                    class="w-full pl-10 pr-4 py-2 rounded-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                <div class="absolute left-6 top-1/2 transform -translate-y-1/2 text-gray-400">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
            </div>

            <a href="{{ route('home') }}"
                class="block px-3 py-2 text-gray-700 hover:text-primary transition-colors {{ request()->routeIs('home') ? 'text-primary font-medium' : '' }}">
                Home
            </a>

            <!-- Mobile Services Dropdown -->
            <div class="relative">
                <button
                    class="w-full text-left px-3 py-2 text-gray-700 hover:text-primary transition-colors flex items-center justify-between"
                    onclick="toggleServicesMenu()">
                    Services
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>

                <!-- Mobile Services Dropdown Content - Updated with new links and icons -->
                <div class="hidden pl-4" id="mobile-services-menu">
                    <a href="{{ route('services.index') }}"
                        class="flex items-center px-3 py-2 text-gray-700 hover:text-primary transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-primary" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h7" />
                        </svg>
                        All Services
                    </a>

                    <a href="/accessible-bathroom-canada"
                        class="flex items-center px-3 py-2 text-gray-700 hover:text-primary transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-primary" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                        </svg>
                        Accessible Bathroom in Canada
                    </a>

                    <a href="/products-categories/barrier-free-bathrooms/"
                        class="flex items-center px-3 py-2 text-gray-700 hover:text-primary transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-primary" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
                        </svg>
                        Barrier-Free Bathrooms
                    </a>

                    <a href="/products-categories/grab-bars/"
                        class="flex items-center px-3 py-2 text-gray-700 hover:text-primary transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-primary" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                        </svg>
                        Grab Bars
                    </a>

                    <!-- Mobile sub-menu example -->
                    <div class="relative">
                        <button
                            class="w-full text-left flex items-center px-3 py-2 text-gray-700 hover:text-primary transition-colors justify-between"
                            onclick="toggleStairliftsMenu()">
                            <span class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-primary" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                                Stairlifts & Elevators
                            </span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                        </button>

                        <div class="hidden pl-4" id="mobile-stairlifts-menu">
                            <a href="#"
                                class="flex items-center px-3 py-2 text-gray-700 hover:text-primary transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-primary" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 11l7-7 7 7M5 19l7-7 7 7" />
                                </svg>
                                Stairlifts
                            </a>
                            <a href="#"
                                class="flex items-center px-3 py-2 text-gray-700 hover:text-primary transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-primary" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                                </svg>
                                Home Elevators
                            </a>
                        </div>
                    </div>

                    <a href="#" class="flex items-center px-3 py-2 text-gray-700 hover:text-primary transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-primary" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        Accessibility Solutions
                    </a>
                </div>
            </div>

            <a href="{{ route('blog.index') }}"
                class="block px-3 py-2 text-gray-700 hover:text-primary transition-colors {{ request()->routeIs('blog.*') ? 'text-primary font-medium' : '' }}">
                Blog
            </a>
            <a href="{{ route('about') }}"
                class="block px-3 py-2 text-gray-700 hover:text-primary transition-colors {{ request()->routeIs('about') ? 'text-primary font-medium' : '' }}">
                About
            </a>
            <a href="{{ route('contact') }}"
                class="block px-3 py-2 text-gray-700 hover:text-primary transition-colors {{ request()->routeIs('contact') ? 'text-primary font-medium' : '' }}">
                Contact
            </a>

            <!-- Mobile Buttons -->
            <div class="flex flex-col space-y-2 mt-4 px-3">
                <a href="/locations" class="btn-primary py-2 text-center rounded-md text-sm font-medium">Visit a
                    Location</a>
                <a href="{{ route('contact') }}"
                    class="btn-secondary py-2 text-center rounded-md text-sm font-medium">Contact Us Today</a>
            </div>
        </div>
    </div>

    <!-- Add before the closing </nav> tag, a style section that will fix the hover behavior -->
    <style>
        /* Fix dropdown hover behavior - completely new approach */
        .group .group-hover\:block,
        .group\/submenu .group-hover\/submenu\:block {
            display: none;
        }

        /* Use a custom display class controlled by JS */
        .dropdown-visible {
            display: block !important;
            animation: fadeIn 0.2s ease-in-out;
        }

        /* Create a connection between dropdown trigger and content */
        .dropdown-bridge {
            position: absolute;
            height: 20px;
            left: 0;
            right: 0;
            top: 100%;
            z-index: 40;
            background: transparent;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }
    </style>
</nav>

<script>
    function toggleMobileMenu() {
        const mobileMenu = document.getElementById('mobile-menu');
        mobileMenu.classList.toggle('hidden');
    }

    function toggleServicesMenu() {
        const servicesMenu = document.getElementById('mobile-services-menu');
        servicesMenu.classList.toggle('hidden');
    }

    function toggleStairliftsMenu() {
        const stairliftsMenu = document.getElementById('mobile-stairlifts-menu');
        stairliftsMenu.classList.toggle('hidden');
    }

    // Completely new approach for dropdown behavior
    document.addEventListener('DOMContentLoaded', function () {
        // Find all dropdown triggers and their content
        const dropdownTriggers = document.querySelectorAll('.group > button, .group\\/submenu > button');

        dropdownTriggers.forEach(trigger => {
            // Find the associated dropdown content
            const parent = trigger.closest('.group') || trigger.closest('.group\\/submenu');
            const dropdown = parent.querySelector('.group-hover\\:block') || parent.querySelector('.group-hover\\/submenu\\:block');

            if (!dropdown) return;

            // Create a bridge element to connect trigger and dropdown
            const bridge = document.createElement('div');
            bridge.className = 'dropdown-bridge';
            trigger.parentNode.insertBefore(bridge, dropdown);

            // Set long timeouts to prevent quick hiding
            let hideTimeout;

            // Function to show the dropdown
            const showDropdown = () => {
                clearTimeout(hideTimeout);
                dropdown.classList.add('dropdown-visible');
            };

            // Function to hide the dropdown with delay
            const hideDropdown = () => {
                hideTimeout = setTimeout(() => {
                    dropdown.classList.remove('dropdown-visible');
                }, 800); // 800ms delay - longer than before
            };

            // Add event listeners to trigger, bridge, and dropdown
            trigger.addEventListener('mouseenter', showDropdown);
            trigger.addEventListener('mouseleave', hideDropdown);

            bridge.addEventListener('mouseenter', showDropdown);
            bridge.addEventListener('mouseleave', hideDropdown);

            dropdown.addEventListener('mouseenter', showDropdown);
            dropdown.addEventListener('mouseleave', hideDropdown);
        });
    });
</script>