<nav class="bg-white shadow-md py-3">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center">
            <!-- Logo (Left Side) -->
            <div class="flex-shrink-0">
                <a href="{{ route('home') }}" class="flex items-center">
                    <span class="text-2xl font-bold text-primary">YourLogo</span>
                </a>
            </div>

            <!-- Desktop Navigation (Center) -->
            <div class="hidden lg:flex items-center justify-center mx-auto space-x-8">
                <a href="{{ route('home') }}" class="text-gray-700 hover:text-primary transition-colors {{ request()->routeIs('home') ? 'text-primary font-medium' : '' }}">
                    Home
                </a>
                
                <!-- Services Dropdown -->
                <div class="relative group">
                    <button class="flex items-center text-gray-700 hover:text-primary transition-colors {{ request()->routeIs('services.*') ? 'text-primary font-medium' : '' }}">
                        Services
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    
                    <!-- Dropdown Menu -->
                    <div class="absolute left-0 mt-2 w-48 bg-white rounded-lg shadow-lg py-2 hidden group-hover:block z-50">
                        <a href="{{ route('services.index') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-primary transition-colors">
                            All Services
                        </a>
                        <a href="{{ route('services.show', 'web-development') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-primary transition-colors">
                            Web Development
                        </a>
                        <a href="{{ route('services.show', 'mobile-app-development') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-primary transition-colors">
                            Mobile App Development
                        </a>
                        <a href="{{ route('services.show', 'seo-services') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-primary transition-colors">
                            SEO Services
                        </a>
                        <a href="{{ route('services.show', 'ui-ux-design') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-primary transition-colors">
                            UI/UX Design
                        </a>
                        <a href="{{ route('services.show', 'cloud-solutions') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-primary transition-colors">
                            Cloud Solutions
                        </a>
                        <a href="{{ route('services.show', 'it-support') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-primary transition-colors">
                            IT Support
                        </a>
                    </div>
                </div>

                <a href="{{ route('blog.index') }}" class="text-gray-700 hover:text-primary transition-colors {{ request()->routeIs('blog.*') ? 'text-primary font-medium' : '' }}">
                    Blog
                </a>
                <a href="{{ route('about') }}" class="text-gray-700 hover:text-primary transition-colors {{ request()->routeIs('about') ? 'text-primary font-medium' : '' }}">
                    About
                </a>
                <a href="{{ route('contact') }}" class="text-gray-700 hover:text-primary transition-colors {{ request()->routeIs('contact') ? 'text-primary font-medium' : '' }}">
                    Contact
                </a>
            </div>

            <!-- Right Side (Search & Buttons) -->
            <div class="hidden lg:flex items-center space-x-4">
                <!-- Search Bar -->
                <div class="relative">
                    <input type="text" placeholder="Search..." class="w-40 pl-10 pr-4 py-1 rounded-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                    <div class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </div>
                </div>
                
                <!-- Buttons -->
                <a href="/locations" class="btn-primary px-4 py-2 rounded-md text-sm font-medium">Visit a Location</a>
                <a href="{{ route('contact') }}" class="btn-secondary px-4 py-2 rounded-md text-sm font-medium">Contact Us Today</a>
            </div>

            <!-- Mobile Menu Button -->
            <div class="lg:hidden">
                <button type="button" class="text-gray-700 hover:text-primary focus:outline-none" onclick="toggleMobileMenu()">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
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
                <input type="text" placeholder="Search..." class="w-full pl-10 pr-4 py-2 rounded-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                <div class="absolute left-6 top-1/2 transform -translate-y-1/2 text-gray-400">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
            </div>
            
            <a href="{{ route('home') }}" class="block px-3 py-2 text-gray-700 hover:text-primary transition-colors {{ request()->routeIs('home') ? 'text-primary font-medium' : '' }}">
                Home
            </a>
            
            <!-- Mobile Services Dropdown -->
            <div class="relative">
                <button class="w-full text-left px-3 py-2 text-gray-700 hover:text-primary transition-colors flex items-center justify-between" onclick="toggleServicesMenu()">
                    Services
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                
                <div class="hidden pl-4" id="mobile-services-menu">
                    <a href="{{ route('services.index') }}" class="block px-3 py-2 text-gray-700 hover:text-primary transition-colors">
                        All Services
                    </a>
                    <a href="{{ route('services.show', 'web-development') }}" class="block px-3 py-2 text-gray-700 hover:text-primary transition-colors">
                        Web Development
                    </a>
                    <a href="{{ route('services.show', 'mobile-app-development') }}" class="block px-3 py-2 text-gray-700 hover:text-primary transition-colors">
                        Mobile App Development
                    </a>
                    <a href="{{ route('services.show', 'seo-services') }}" class="block px-3 py-2 text-gray-700 hover:text-primary transition-colors">
                        SEO Services
                    </a>
                    <a href="{{ route('services.show', 'ui-ux-design') }}" class="block px-3 py-2 text-gray-700 hover:text-primary transition-colors">
                        UI/UX Design
                    </a>
                    <a href="{{ route('services.show', 'cloud-solutions') }}" class="block px-3 py-2 text-gray-700 hover:text-primary transition-colors">
                        Cloud Solutions
                    </a>
                    <a href="{{ route('services.show', 'it-support') }}" class="block px-3 py-2 text-gray-700 hover:text-primary transition-colors">
                        IT Support
                    </a>
                </div>
            </div>

            <a href="{{ route('blog.index') }}" class="block px-3 py-2 text-gray-700 hover:text-primary transition-colors {{ request()->routeIs('blog.*') ? 'text-primary font-medium' : '' }}">
                Blog
            </a>
            <a href="{{ route('about') }}" class="block px-3 py-2 text-gray-700 hover:text-primary transition-colors {{ request()->routeIs('about') ? 'text-primary font-medium' : '' }}">
                About
            </a>
            <a href="{{ route('contact') }}" class="block px-3 py-2 text-gray-700 hover:text-primary transition-colors {{ request()->routeIs('contact') ? 'text-primary font-medium' : '' }}">
                Contact
            </a>
            
            <!-- Mobile Buttons -->
            <div class="flex flex-col space-y-2 mt-4 px-3">
                <a href="/locations" class="btn-primary py-2 text-center rounded-md text-sm font-medium">Visit a Location</a>
                <a href="{{ route('contact') }}" class="btn-secondary py-2 text-center rounded-md text-sm font-medium">Contact Us Today</a>
            </div>
        </div>
    </div>
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
</script> 