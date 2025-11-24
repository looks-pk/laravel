<!-- Google Fonts for Typography Consistency -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

<style>
    /* Add top padding to body to account for fixed navbar */
    body {
        padding-top: 80px;
    }

    /* CSS Variables from Home Page for Consistency */
    :root {
        --primary: #0078bf;
        --primary-dark: #005f96;
        --secondary: #f8b301;
        --secondary-dark: #d99a00;
        --accent: #d40000;
        --accent-dark: #aa0000;
        --text-dark: #2d3748;
        --text-light: #718096;
        --bg-light: #f7fafc;
        --bg-dark: #2a4365;
        --transition: all 0.3s ease;
    }

    /* Base Typography */
    h1, h2, h3, h4, h5, h6 {
        font-family: 'Montserrat', sans-serif;
    }

    p, li, a, button, input, textarea, select {
        font-family: 'Open Sans', sans-serif;
    }

    /* Navigation Specific Styles */
    #navbar {
        background: rgba(255, 255, 255, 0.95) !important;
        backdrop-filter: blur(16px) !important;
        border-bottom: 1px solid rgba(229, 231, 235, 0.5) !important;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06) !important;
    }

    /* Navigation Links */
    .nav-link {
        font-family: 'Open Sans', sans-serif;
        font-weight: 500;
        letter-spacing: 0.025em;
        transition: var(--transition);
        position: relative;
    }

    .nav-link:hover {
        color: var(--primary) !important;
        background-color: rgba(0, 120, 191, 0.05) !important;
        transform: translateY(-1px);
    }

    .nav-link.active {
        color: var(--primary) !important;
        background-color: rgba(0, 120, 191, 0.1) !important;
        font-weight: 600;
    }

    /* Button Styles from Home Page */
    .btn-primary {
        background: linear-gradient(45deg, var(--primary) 0%, var(--primary-dark) 100%);
        color: white;
        padding: 0.75rem 1.5rem;
        border-radius: 0.5rem;
        font-weight: 600;
        letter-spacing: 0.5px;
        transform: translateY(0);
        box-shadow: 0 4px 6px rgba(0, 60, 95, 0.1);
        transition: var(--transition);
        border: none;
        cursor: pointer;
        font-family: 'Open Sans', sans-serif;
    }

    .btn-primary:hover {
        background: linear-gradient(45deg, var(--primary-dark) 0%, var(--primary) 100%);
        transform: translateY(-3px);
        box-shadow: 0 6px 12px rgba(0, 60, 95, 0.2);
    }

    .btn-secondary {
        background: linear-gradient(45deg, var(--secondary) 0%, var(--secondary-dark) 100%);
        color: var(--text-dark);
        padding: 0.75rem 1.5rem;
        border-radius: 0.5rem;
        font-weight: 600;
        letter-spacing: 0.5px;
        transform: translateY(0);
        box-shadow: 0 4px 6px rgba(216, 154, 0, 0.1);
        transition: var(--transition);
        border: none;
        cursor: pointer;
        font-family: 'Open Sans', sans-serif;
    }

    .btn-secondary:hover {
        background: linear-gradient(45deg, var(--secondary-dark) 0%, var(--secondary) 100%);
        transform: translateY(-3px);
        box-shadow: 0 6px 12px rgba(216, 154, 0, 0.2);
    }

    /* Dropdown Enhancements */
    .group:hover .group-hover\:block {
        animation: fadeInDown 0.3s ease-out;
    }

    /* Fix dropdown positioning - no transitions on position/transform */
    .areas-dropdown.group-hover\:block {
        transition: opacity 0.2s ease-in-out !important;
        transform: translateX(-50%) !important;
    }

    /* Prevent transform transitions for other dropdowns to avoid flicker */
    .group .group-hover\:block:not(.areas-dropdown) {
        transition: opacity 0.2s ease-in-out;
        transform: none !important;
    }

    /* Fix dropdown hover behavior - add bridge and delay */
    .group {
        position: relative;
    }

    .group .group-hover\:block {
        display: none;
        transition: opacity 0.2s ease-in-out;
    }

    .group:hover .group-hover\:block {
        display: block;
        animation: fadeInDown 0.3s ease-out;
    }

    /* Create invisible bridge between button and dropdown */
    .group::before {
        content: '';
        position: absolute;
        top: 100%;
        left: 0;
        right: 0;
        height: 8px;
        background: transparent;
        z-index: 39;
        pointer-events: auto;
    }

    /* Add hover delay to prevent quick disappearing */
    .group:hover::before {
        display: block;
    }

    /* Specific fixes for Products dropdown */
    .group .group-hover\:block.z-50 {
        margin-top: 8px;
    }

    /* Specific fixes for About Us dropdown */
    .group .group-hover\:block.z-40 {
        margin-top: 8px;
    }

    @keyframes fadeInDown {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }

    /* Mobile Menu Enhancements */
    .mobile-menu {
        background: rgba(255, 255, 255, 0.98);
        backdrop-filter: blur(16px);
        border-top: 1px solid rgba(229, 231, 235, 0.5);
    }

    /* Search Input Styling */
    .search-input {
        background: rgba(255, 255, 255, 0.9);
        border: 1px solid rgba(229, 231, 235, 0.8);
        transition: var(--transition);
    }

    .search-input:focus {
        background: rgba(255, 255, 255, 1);
        border-color: var(--primary);
        box-shadow: 0 0 0 3px rgba(0, 120, 191, 0.1);
    }

    /* Logo Styling */
    .logo img {
        transition: var(--transition);
    }

    .logo:hover img {
        transform: scale(1.05);
    }

    /* Responsive Adjustments */
    @media (max-width: 1024px) {
        #navbar {
            padding: 0.75rem 0;
        }
        
        .nav-link {
            font-size: 0.9rem;
        }
    }

    @media (max-width: 768px) {
        #navbar {
            padding: 0.5rem 0;
        }
        
        .mobile-menu {
            max-height: calc(100vh - 80px);
            overflow-y: auto;
        }
    }

    /* Ensure consistent colors across all pages */
    .text-primary {
        color: var(--primary) !important;
    }

    .bg-primary {
        background-color: var(--primary) !important;
    }

    .border-primary {
        border-color: var(--primary) !important;
    }

    .hover\:text-primary:hover {
        color: var(--primary) !important;
    }

    .hover\:bg-primary:hover {
        background-color: var(--primary) !important;
    }

    /* Additional consistency fixes */
    .bg-primary\/5 {
        background-color: rgba(0, 120, 191, 0.05) !important;
    }

    .bg-primary\/10 {
        background-color: rgba(0, 120, 191, 0.1) !important;
    }

    .bg-primary\/20 {
        background-color: rgba(0, 120, 191, 0.2) !important;
    }
</style>

<nav class="fixed top-0 left-0 right-0 z-50 bg-white/95 backdrop-blur-md border-b border-gray-200/50 shadow-lg py-3 transition-all duration-300" id="navbar">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center">
            <!-- Logo (Left Side) -->
            <div class="flex-shrink-0">
                <a href="{{ route('home') }}" class="flex items-center">
                    <img src="/logo/Logo-clr.png" alt="Home2stay" class="h-10 w-auto bg-transparent">
                </a>
            </div>

            <!-- Desktop Navigation (Center) -->
            <div class="hidden lg:flex items-center justify-center mx-auto">
                <div class="flex items-center space-x-8">
                    <a href="{{ route('home') }}"
                        class="nav-link px-3 py-2 rounded-lg text-gray-700 hover:text-primary hover:bg-primary/5 transition-all duration-200 font-medium whitespace-nowrap {{ request()->routeIs('home') ? 'active text-primary bg-primary/10' : '' }}">
                        Home
                    </a>

                    <!-- Products Dropdown -->
                    <div class="relative group">
                        <button
                            class="nav-link flex items-center px-3 py-2 rounded-lg text-gray-700 hover:text-primary hover:bg-primary/5 transition-all duration-200 font-medium whitespace-nowrap {{ request()->is('products-categories/*') || request()->is('all-products*') ? 'active text-primary bg-primary/10' : '' }}">
                            Products
                            <svg class="w-4 h-4 ml-1.5 transition-transform duration-200 group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>

                    <!-- Full Width Modern Dropdown Menu -->
                    <div class="absolute left-[-100px] w-[1200px] bg-white rounded-xl shadow-2xl py-8 hidden group-hover:block z-50 border border-gray-100">
                        <div class="px-8">
                            <div class="grid grid-cols-4 gap-6">
                                
                                <!-- Column 1: Bathroom & Safety -->
                                <div class="space-y-3">
                                    <h3 class="text-sm font-semibold text-gray-500 uppercase tracking-wider border-b border-gray-200 pb-2 mb-3">
                                        Bathroom & Safety
                                    </h3>
                                    
                                    <a href="/products-categories/barrier-free-bathrooms/" class="flex items-center p-2 text-gray-700 hover:bg-gray-50 rounded-lg transition-colors group/item">
                                        <div class="flex-shrink-0 w-8 h-8 bg-primary/10 rounded-lg flex items-center justify-center mr-3 group-hover/item:bg-primary/20 transition-colors">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
                                            </svg>
                                        </div>
                                        <div>
                                            <h4 class="font-medium text-gray-900 text-sm">Barrier-Free Bathrooms</h4>
                                            <p class="text-xs text-gray-500">Complete accessible solutions</p>
                                        </div>
                                    </a>
                                    
                                    <a href="/products-categories/bathroom-safety/" class="flex items-center p-2 text-gray-700 hover:bg-gray-50 rounded-lg transition-colors group/item">
                                        <div class="flex-shrink-0 w-8 h-8 bg-primary/10 rounded-lg flex items-center justify-center mr-3 group-hover/item:bg-primary/20 transition-colors">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                            </svg>
                                        </div>
                                        <div>
                                            <h4 class="font-medium text-gray-900 text-sm">Bathroom Safety</h4>
                                            <p class="text-xs text-gray-500">Safety equipment & accessories</p>
                                        </div>
                                    </a>
                                    
                                    <a href="/products-categories/grab-bars/" class="flex items-center p-2 text-gray-700 hover:bg-gray-50 rounded-lg transition-colors group/item">
                                        <div class="flex-shrink-0 w-8 h-8 bg-primary/10 rounded-lg flex items-center justify-center mr-3 group-hover/item:bg-primary/20 transition-colors">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                                            </svg>
                                        </div>
                                        <div>
                                            <h4 class="font-medium text-gray-900 text-sm">Grab Bars</h4>
                                            <p class="text-xs text-gray-500">Support & stability solutions</p>
                                        </div>
                                    </a>
                                    
                                    <a href="/products-categories/tub-cuts/" class="flex items-center p-2 text-gray-700 hover:bg-gray-50 rounded-lg transition-colors group/item">
                                        <div class="flex-shrink-0 w-8 h-8 bg-primary/10 rounded-lg flex items-center justify-center mr-3 group-hover/item:bg-primary/20 transition-colors">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                            </svg>
                                        </div>
                                        <div>
                                            <h4 class="font-medium text-gray-900 text-sm">Tub Cuts</h4>
                                            <p class="text-xs text-gray-500">Tub modification services</p>
                                        </div>
                                    </a>
                                    
                                    <a href="/products-categories/walk-in-tubs/" class="flex items-center p-2 text-gray-700 hover:bg-gray-50 rounded-lg transition-colors group/item">
                                        <div class="flex-shrink-0 w-8 h-8 bg-primary/10 rounded-lg flex items-center justify-center mr-3 group-hover/item:bg-primary/20 transition-colors">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z" />
                                            </svg>
                                        </div>
                                        <div>
                                            <h4 class="font-medium text-gray-900 text-sm">Walk-in Tubs</h4>
                                            <p class="text-xs text-gray-500">Safe bathing solutions</p>
                                        </div>
                                    </a>
                                </div>

                                <!-- Column 2: Mobility & Lifts -->
                                <div class="space-y-3">
                                    <h3 class="text-sm font-semibold text-gray-500 uppercase tracking-wider border-b border-gray-200 pb-2 mb-3">
                                        Mobility & Lifts
                                    </h3>
                                    
                                    <a href="/products-categories/automotive/" class="flex items-center p-2 text-gray-700 hover:bg-gray-50 rounded-lg transition-colors group/item">
                                        <div class="flex-shrink-0 w-8 h-8 bg-primary/10 rounded-lg flex items-center justify-center mr-3 group-hover/item:bg-primary/20 transition-colors">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0" />
                                            </svg>
                                        </div>
                                        <div>
                                            <h4 class="font-medium text-gray-900 text-sm">Automotive</h4>
                                            <p class="text-xs text-gray-500">Vehicle accessibility solutions</p>
                                        </div>
                                    </a>
                                    
                                    <a href="/products-categories/ceiling-lifts/" class="flex items-center p-2 text-gray-700 hover:bg-gray-50 rounded-lg transition-colors group/item">
                                        <div class="flex-shrink-0 w-8 h-8 bg-primary/10 rounded-lg flex items-center justify-center mr-3 group-hover/item:bg-primary/20 transition-colors">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11l7-7 7 7M5 19l7-7 7 7" />
                                            </svg>
                                        </div>
                                        <div>
                                            <h4 class="font-medium text-gray-900 text-sm">Ceiling Lifts</h4>
                                            <p class="text-xs text-gray-500">Patient transfer systems</p>
                                        </div>
                                    </a>
                                    
                                    <a href="/products/flow-x-stairlift/" class="flex items-center p-2 text-gray-700 hover:bg-gray-50 rounded-lg transition-colors group/item">
                                        <div class="flex-shrink-0 w-8 h-8 bg-primary/10 rounded-lg flex items-center justify-center mr-3 group-hover/item:bg-primary/20 transition-colors">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                                            </svg>
                                        </div>
                                        <div>
                                            <h4 class="font-medium text-gray-900 text-sm">Flow X Curved Stairlift</h4>
                                            <p class="text-xs text-gray-500">Custom curved stair solutions</p>
                                        </div>
                                    </a>
                                    
                                    <a href="/products-categories/ramps/" class="flex items-center p-2 text-gray-700 hover:bg-gray-50 rounded-lg transition-colors group/item">
                                        <div class="flex-shrink-0 w-8 h-8 bg-primary/10 rounded-lg flex items-center justify-center mr-3 group-hover/item:bg-primary/20 transition-colors">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                                            </svg>
                                        </div>
                                        <div>
                                            <h4 class="font-medium text-gray-900 text-sm">Ramps</h4>
                                            <p class="text-xs text-gray-500">Portable & permanent ramps</p>
                                        </div>
                                    </a>
                                    
                                    <a href="/products-categories/stair-lifts/" class="flex items-center p-2 text-gray-700 hover:bg-gray-50 rounded-lg transition-colors group/item">
                                        <div class="flex-shrink-0 w-8 h-8 bg-primary/10 rounded-lg flex items-center justify-center mr-3 group-hover/item:bg-primary/20 transition-colors">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                                            </svg>
                                        </div>
                                        <div>
                                            <h4 class="font-medium text-gray-900 text-sm">Stair Lifts</h4>
                                            <p class="text-xs text-gray-500">Indoor & outdoor stair solutions</p>
                                        </div>
                                    </a>
                                    
                                    <a href="/products-categories/vertical-porch-lifts-vpl/" class="flex items-center p-2 text-gray-700 hover:bg-gray-50 rounded-lg transition-colors group/item">
                                        <div class="flex-shrink-0 w-8 h-8 bg-primary/10 rounded-lg flex items-center justify-center mr-3 group-hover/item:bg-primary/20 transition-colors">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                                            </svg>
                                        </div>
                                        <div>
                                            <h4 class="font-medium text-gray-900 text-sm">Vertical Porch Lifts</h4>
                                            <p class="text-xs text-gray-500">Outdoor accessibility lifts</p>
                                        </div>
                                    </a>
                                </div>

                                <!-- Column 3: Support & Safety -->
                                <div class="space-y-3">
                                    <h3 class="text-sm font-semibold text-gray-500 uppercase tracking-wider border-b border-gray-200 pb-2 mb-3">
                                        Support & Safety
                                    </h3>
                                    
                                    <a href="/products-categories/safety-poles-handrails/" class="flex items-center p-2 text-gray-700 hover:bg-gray-50 rounded-lg transition-colors group/item">
                                        <div class="flex-shrink-0 w-8 h-8 bg-primary/10 rounded-lg flex items-center justify-center mr-3 group-hover/item:bg-primary/20 transition-colors">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16V4m0 0L3 8m4-4l4 4m6 0v12m0 0l4-4m-4 4l-4-4" />
                                            </svg>
                                        </div>
                                        <div>
                                            <h4 class="font-medium text-gray-900 text-sm">Safety Poles & Handrails</h4>
                                            <p class="text-xs text-gray-500">Stability & support systems</p>
                                        </div>
                                    </a>
                                    
                                    <a href="/all-products/" class="flex items-center p-2 text-gray-700 hover:bg-primary-50 border border-primary/20 rounded-lg transition-colors group/item bg-primary/5">
                                        <div class="flex-shrink-0 w-8 h-8 bg-primary/20 rounded-lg flex items-center justify-center mr-3 group-hover/item:bg-primary/30 transition-colors">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                                            </svg>
                                        </div>
                                        <div>
                                            <h4 class="font-medium text-primary text-sm">View All Products</h4>
                                            <p class="text-xs text-primary/70">Browse complete catalog</p>
                                        </div>
                                    </a>
                                </div>

                                <!-- Column 4: Services & Rentals -->
                                <div class="space-y-3">
                                    <h3 class="text-sm font-semibold text-gray-500 uppercase tracking-wider border-b border-gray-200 pb-2 mb-3">
                                        Services & Rentals
                                    </h3>
                                    
                                    <a href="/accessible-bathroom-canada" class="flex items-center p-2 text-gray-700 hover:bg-gray-50 rounded-lg transition-colors group/item">
                                        <div class="flex-shrink-0 w-8 h-8 bg-primary/10 rounded-lg flex items-center justify-center mr-3 group-hover/item:bg-primary/20 transition-colors">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                            </svg>
                                        </div>
                                        <div>
                                            <h4 class="font-medium text-gray-900 text-sm">Accessible Bathroom Services</h4>
                                            <p class="text-xs text-gray-500">Professional installation & design</p>
                                        </div>
                                    </a>
                                    
                                    <a href="/rentals" class="flex items-center p-2 text-gray-700 hover:bg-gray-50 rounded-lg transition-colors group/item">
                                        <div class="flex-shrink-0 w-8 h-8 bg-primary/10 rounded-lg flex items-center justify-center mr-3 group-hover/item:bg-primary/20 transition-colors">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                        </div>
                                        <div>
                                            <h4 class="font-medium text-gray-900 text-sm">Equipment Rentals</h4>
                                            <p class="text-xs text-gray-500">Short & long-term rentals</p>
                                        </div>
                                    </a>
                                    <!-- Featured Call-to-Action -->
                                    <div class="bg-gradient-to-br from-primary/5 to-blue-50 p-3 rounded-lg border border-primary/10 mt-4">
                                        <h4 class="font-semibold text-gray-800 mb-2 flex items-center text-sm">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                            </svg>
                                            Need Expert Advice?
                                        </h4>
                                        <p class="text-xs text-gray-600 mb-2">Get personalized recommendations from our specialists</p>
                                        <a href="{{ route('contact') }}" class="inline-flex items-center text-xs bg-primary text-white px-3 py-1.5 rounded-md hover:bg-primary-dark transition-colors">
                                            Contact Us Today
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- About Us Dropdown -->
                <div class="relative group">
                    <button
                        class="nav-link flex items-center px-3 py-2 rounded-lg text-gray-700 hover:text-primary hover:bg-primary/5 transition-all duration-200 font-medium whitespace-nowrap {{ request()->is('company-profile*') || request()->is('about-us*') || request()->is('about*') ? 'active text-primary bg-primary/10' : '' }}">
                        About Us
                        <svg class="w-4 h-4 ml-1.5 transition-transform duration-200 group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>

                    <!-- Dropdown Menu - Fixed positioning to prevent shifting -->
                    <div class="absolute right-[-80px] w-80 bg-white rounded-xl shadow-2xl py-6 hidden group-hover:block z-40 border border-gray-100">
                        <div class="px-6">
                            <div class="space-y-2">
                                <a href="/company-profile/"
                                    class="flex items-center p-3 text-gray-700 hover:bg-gray-50 rounded-lg transition-colors group/item">
                                    <div class="flex-shrink-0 w-10 h-10 bg-primary/10 rounded-lg flex items-center justify-center mr-3 group-hover/item:bg-primary/20 transition-colors">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="font-medium text-gray-900">Company Profile</h4>
                                        <p class="text-sm text-gray-500">About our mission & values</p>
                                    </div>
                                </a>
                                
                                <a href="/gallery/"
                                    class="flex items-center p-3 text-gray-700 hover:bg-gray-50 rounded-lg transition-colors group/item">
                                    <div class="flex-shrink-0 w-10 h-10 bg-primary/10 rounded-lg flex items-center justify-center mr-3 group-hover/item:bg-primary/20 transition-colors">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="font-medium text-gray-900">Gallery</h4>
                                        <p class="text-sm text-gray-500">View our work & installations</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <a href="{{ route('blog.index') }}"
                    class="nav-link px-3 py-2 rounded-lg text-gray-700 hover:text-primary hover:bg-primary/5 transition-all duration-200 font-medium whitespace-nowrap {{ request()->routeIs('blog.*') ? 'active text-primary bg-primary/10' : '' }}">
                    Blog
                </a>

                <!-- Areas We Serve Dropdown -->
                <div class="relative group">
                    <button
                        class="nav-link flex items-center px-3 py-2 rounded-lg text-gray-700 hover:text-primary hover:bg-primary/5 transition-all duration-200 font-medium whitespace-nowrap {{ request()->is('areas*') ? 'active text-primary bg-primary/10' : '' }}">
                        Areas We Serve
                        <svg class="w-4 h-4 ml-1.5 transition-transform duration-200 group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>

                    <!-- Areas Dropdown Menu - Multi-Column Layout -->
                    <div class="areas-dropdown absolute left-1/2 transform -translate-x-1/2 w-[900px] bg-white rounded-xl shadow-2xl py-8 hidden group-hover:block z-40 border border-gray-100">
                        <div class="px-8">
                            <div class="grid grid-cols-3 gap-6">
                                
                                <!-- Column 1: North Shore & Central -->
                                <div class="space-y-3">
                                    <h3 class="text-sm font-semibold text-gray-500 uppercase tracking-wider border-b border-gray-200 pb-2 mb-3">
                                        North Shore & Central
                                    </h3>
                                    
                                    <a href="/areas/stair-lifts-burnaby" class="flex items-center p-2 text-gray-700 hover:bg-gray-50 rounded-lg transition-colors group/item">
                                        <div class="flex-shrink-0 w-8 h-8 bg-primary/10 rounded-lg flex items-center justify-center mr-3 group-hover/item:bg-primary/20 transition-colors">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 616 0z" />
                                            </svg>
                                        </div>
                                        <div>
                                            <h4 class="font-medium text-gray-900 text-sm">Burnaby</h4>
                                            <p class="text-xs text-gray-500">Expert installation & support</p>
                                        </div>
                                    </a>
                                    
                                    <a href="/areas/stair-lifts-north-vancouver" class="flex items-center p-2 text-gray-700 hover:bg-gray-50 rounded-lg transition-colors group/item">
                                        <div class="flex-shrink-0 w-8 h-8 bg-primary/10 rounded-lg flex items-center justify-center mr-3 group-hover/item:bg-primary/20 transition-colors">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 616 0z" />
                                            </svg>
                                        </div>
                                        <div>
                                            <h4 class="font-medium text-gray-900 text-sm">Metro Vancouver</h4>
                                            <p class="text-xs text-gray-500">Professional stair lift services</p>
                                        </div>
                                    </a>
                                    
                                    <a href="/areas/stair-lifts-new-westminster-british-columbia" class="flex items-center p-2 text-gray-700 hover:bg-gray-50 rounded-lg transition-colors group/item">
                                        <div class="flex-shrink-0 w-8 h-8 bg-primary/10 rounded-lg flex items-center justify-center mr-3 group-hover/item:bg-primary/20 transition-colors">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 616 0z" />
                                            </svg>
                                        </div>
                                        <div>
                                            <h4 class="font-medium text-gray-900 text-sm">New Westminster</h4>
                                            <p class="text-xs text-gray-500">Luxury stair lift solutions</p>
                                        </div>
                                    </a>
                                    
                                    <a href="/areas/stair-lifts-richmond-british-columbia" class="flex items-center p-2 text-gray-700 hover:bg-gray-50 rounded-lg transition-colors group/item">
                                        <div class="flex-shrink-0 w-8 h-8 bg-primary/10 rounded-lg flex items-center justify-center mr-3 group-hover/item:bg-primary/20 transition-colors">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 616 0z" />
                                            </svg>
                                        </div>
                                        <div>
                                            <h4 class="font-medium text-gray-900 text-sm">Richmond</h4>
                                            <p class="text-xs text-gray-500">Expert installation & support</p>
                                        </div>
                                    </a>
                                    
                                    <a href="/areas/stair-lifts-vancouver-british-columbia" class="flex items-center p-2 text-gray-700 hover:bg-gray-50 rounded-lg transition-colors group/item">
                                        <div class="flex-shrink-0 w-8 h-8 bg-primary/10 rounded-lg flex items-center justify-center mr-3 group-hover/item:bg-primary/20 transition-colors">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 616 0z" />
                                            </svg>
                                        </div>
                                        <div>
                                            <h4 class="font-medium text-gray-900 text-sm">Vancouver</h4>
                                            <p class="text-xs text-gray-500">Professional stair lift services</p>
                                        </div>
                                    </a>
                                </div>

                                <!-- Column 2: Tri-Cities Area -->
                                <div class="space-y-3">
                                    <h3 class="text-sm font-semibold text-gray-500 uppercase tracking-wider border-b border-gray-200 pb-2 mb-3">
                                        Tri-Cities Area
                                    </h3>
                                    
                                    <a href="/areas/stair-lifts-coquitlam-british-columbia" class="flex items-center p-2 text-gray-700 hover:bg-gray-50 rounded-lg transition-colors group/item">
                                        <div class="flex-shrink-0 w-8 h-8 bg-primary/10 rounded-lg flex items-center justify-center mr-3 group-hover/item:bg-primary/20 transition-colors">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 616 0z" />
                                            </svg>
                                        </div>
                                        <div>
                                            <h4 class="font-medium text-gray-900 text-sm">Coquitlam</h4>
                                            <p class="text-xs text-gray-500">Trusted stair lift experts</p>
                                        </div>
                                    </a>
                                    
                                    <a href="/areas/stair-lifts-port-coquitlam-british-columbia" class="flex items-center p-2 text-gray-700 hover:bg-gray-50 rounded-lg transition-colors group/item">
                                        <div class="flex-shrink-0 w-8 h-8 bg-primary/10 rounded-lg flex items-center justify-center mr-3 group-hover/item:bg-primary/20 transition-colors">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 616 0z" />
                                            </svg>
                                        </div>
                                        <div>
                                            <h4 class="font-medium text-gray-900 text-sm">Port Coquitlam</h4>
                                            <p class="text-xs text-gray-500">Quality mobility solutions</p>
                                        </div>
                                    </a>
                                </div>

                                <!-- Column 3: Fraser Valley & Services -->
                                <div class="space-y-3">
                                    <h3 class="text-sm font-semibold text-gray-500 uppercase tracking-wider border-b border-gray-200 pb-2 mb-3">
                                        Fraser Valley
                                    </h3>
                                    
                                    <a href="/areas/stair-lifts-delta-british-columbia" class="flex items-center p-2 text-gray-700 hover:bg-gray-50 rounded-lg transition-colors group/item">
                                        <div class="flex-shrink-0 w-8 h-8 bg-primary/10 rounded-lg flex items-center justify-center mr-3 group-hover/item:bg-primary/20 transition-colors">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 616 0z" />
                                            </svg>
                                        </div>
                                        <div>
                                            <h4 class="font-medium text-gray-900 text-sm">Delta</h4>
                                            <p class="text-xs text-gray-500">Reliable stair lift services</p>
                                        </div>
                                    </a>
                                    
                                    <a href="/areas/stair-lifts-surrey-british-columbia" class="flex items-center p-2 text-gray-700 hover:bg-gray-50 rounded-lg transition-colors group/item">
                                        <div class="flex-shrink-0 w-8 h-8 bg-primary/10 rounded-lg flex items-center justify-center mr-3 group-hover/item:bg-primary/20 transition-colors">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 616 0z" />
                                            </svg>
                                        </div>
                                        <div>
                                            <h4 class="font-medium text-gray-900 text-sm">Surrey</h4>
                                            <p class="text-xs text-gray-500">Professional stair lifts</p>
                                        </div>
                                    </a>
                                    
                                    <a href="/areas/stair-lifts-white-rock" class="flex items-center p-2 text-gray-700 hover:bg-gray-50 rounded-lg transition-colors group/item">
                                        <div class="flex-shrink-0 w-8 h-8 bg-primary/10 rounded-lg flex items-center justify-center mr-3 group-hover/item:bg-primary/20 transition-colors">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 616 0z" />
                                            </svg>
                                        </div>
                                        <div>
                                            <h4 class="font-medium text-gray-900 text-sm">White Rock</h4>
                                            <p class="text-xs text-gray-500">Custom stair lift solutions</p>
                                        </div>
                                    </a>

                                    <!-- All Areas Link -->
                                    <a href="{{ route('services.custom.areas') }}" class="flex items-center p-2 text-primary hover:bg-primary-50 border border-primary/20 rounded-lg transition-colors group/item bg-primary/5 mt-4">
                                        <div class="flex-shrink-0 w-8 h-8 bg-primary/20 rounded-lg flex items-center justify-center mr-3 group-hover/item:bg-primary/30 transition-colors">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                                            </svg>
                                        </div>
                                        <div>
                                            <h4 class="font-medium text-primary text-sm">View All Areas</h4>
                                            <p class="text-xs text-primary/70">Complete service map</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <a href="{{ route('contact') }}"
                    class="nav-link px-3 py-2 rounded-lg text-gray-700 hover:text-primary hover:bg-primary/5 transition-all duration-200 font-medium whitespace-nowrap {{ request()->routeIs('contact') ? 'active text-primary bg-primary/10' : '' }}">
                    Contact
                </a>
            </div>
        </div>

        <!-- Right Side (Search & Buttons) -->
        <div class="hidden lg:flex items-center space-x-4">
            <!-- Buttons -->
            <a href="/areas" class="btn-primary px-4 py-2 rounded-md text-sm font-medium">Visit a Location</a>
            <a style="background-color:rgb(255, 0, 0); padding: 12px 20px;" href="{{ route('contact') }}" class="text-white px-4 py-2 rounded-md text-sm font-medium">Contact
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

    <!-- Mobile Menu -->
    <div class="lg:hidden hidden mobile-menu" id="mobile-menu">
        <div class="px-4 pt-4 pb-6 space-y-2 bg-white/98 backdrop-blur-md border-t border-gray-200/50">
            <!-- Mobile Search Bar -->
            <div class="relative mb-4">
                <input type="text" placeholder="Search..."
                    class="search-input w-full pl-10 pr-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                <div class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
            </div>

            <a href="{{ route('home') }}"
                class="nav-link block px-4 py-3 rounded-lg text-gray-700 hover:text-primary hover:bg-primary/5 transition-all duration-200 font-medium {{ request()->routeIs('home') ? 'active text-primary bg-primary/10' : '' }}">
                Home
            </a>

            <!-- Mobile Products Dropdown -->
            <div class="relative">
                <button
                    class="nav-link w-full text-left px-4 py-3 rounded-lg text-gray-700 hover:text-primary hover:bg-primary/5 transition-all duration-200 font-medium flex items-center justify-between {{ request()->is('products-categories/*') || request()->is('all-products*') ? 'active text-primary bg-primary/10' : '' }}"
                    onclick="toggleProductsMenu()">
                    Products
                    <svg class="w-4 h-4 transition-transform duration-200" id="products-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>

                <!-- Mobile Products Dropdown Content -->
                <div class="hidden pl-4 mt-2 space-y-1" id="mobile-products-menu">
                    <!-- Bathroom & Safety -->
                    <div class="mb-4">
                        <h4 class="text-xs font-semibold text-gray-500 uppercase tracking-wider mb-2 px-4">Bathroom & Safety</h4>
                        <a href="/products-categories/barrier-free-bathrooms/"
                            class="flex items-center px-4 py-2 text-gray-600 hover:text-primary hover:bg-primary/5 rounded-lg transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-3 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
                            </svg>
                            Barrier-Free Bathrooms
                        </a>
                        <a href="/products-categories/bathroom-safety/"
                            class="flex items-center px-4 py-2 text-gray-600 hover:text-primary hover:bg-primary/5 rounded-lg transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-3 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                            Bathroom Safety
                        </a>
                        <a href="/products-categories/grab-bars/"
                            class="flex items-center px-4 py-2 text-gray-600 hover:text-primary hover:bg-primary/5 rounded-lg transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-3 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                            </svg>
                            Grab Bars
                        </a>
                        <a href="/products-categories/tub-cuts/"
                            class="flex items-center px-4 py-2 text-gray-600 hover:text-primary hover:bg-primary/5 rounded-lg transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-3 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                            </svg>
                            Tub Cuts
                        </a>
                        <a href="/products-categories/walk-in-tubs/"
                            class="flex items-center px-4 py-2 text-gray-600 hover:text-primary hover:bg-primary/5 rounded-lg transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-3 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z" />
                            </svg>
                            Walk-in Tubs
                        </a>
                    </div>

                    <!-- Mobility & Lifts -->
                    <div class="mb-4">
                        <h4 class="text-xs font-semibold text-gray-500 uppercase tracking-wider mb-2 px-4">Mobility & Lifts</h4>
                        <a href="/products-categories/automotive/"
                            class="flex items-center px-4 py-2 text-gray-600 hover:text-primary hover:bg-primary/5 rounded-lg transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-3 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0" />
                            </svg>
                            Automotive
                        </a>
                        <a href="/products-categories/ceiling-lifts/"
                            class="flex items-center px-4 py-2 text-gray-600 hover:text-primary hover:bg-primary/5 rounded-lg transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-3 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11l7-7 7 7M5 19l7-7 7 7" />
                            </svg>
                            Ceiling Lifts
                        </a>
                        <a href="/products/flow-x-stairlift/"
                            class="flex items-center px-4 py-2 text-gray-600 hover:text-primary hover:bg-primary/5 rounded-lg transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-3 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                            </svg>
                            Flow X Curved Stairlift
                        </a>
                        <a href="/products-categories/ramps/"
                            class="flex items-center px-4 py-2 text-gray-600 hover:text-primary hover:bg-primary/5 rounded-lg transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-3 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                            </svg>
                            Ramps
                        </a>
                        <a href="/products-categories/stair-lifts/"
                            class="flex items-center px-4 py-2 text-gray-600 hover:text-primary hover:bg-primary/5 rounded-lg transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-3 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                            </svg>
                            Stair Lifts
                        </a>
                        <a href="/products-categories/vertical-porch-lifts-vpl/"
                            class="flex items-center px-4 py-2 text-gray-600 hover:text-primary hover:bg-primary/5 rounded-lg transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-3 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                            </svg>
                            Vertical Porch Lifts
                        </a>
                    </div>

                    <!-- Support & Safety -->
                    <div class="mb-4">
                        <h4 class="text-xs font-semibold text-gray-500 uppercase tracking-wider mb-2 px-4">Support & Safety</h4>
                        <a href="/products-categories/safety-poles-handrails/"
                            class="flex items-center px-4 py-2 text-gray-600 hover:text-primary hover:bg-primary/5 rounded-lg transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-3 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16V4m0 0L3 8m4-4l4 4m6 0v12m0 0l4-4m-4 4l-4-4" />
                            </svg>
                            Safety Poles & Handrails
                        </a>
                        <a href="/all-products/"
                            class="flex items-center px-4 py-2 text-primary hover:bg-primary/10 rounded-lg transition-colors border border-primary/20 bg-primary/5">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-3 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                            </svg>
                            View All Products
                        </a>
                    </div>
                </div>
            </div>

            <!-- Mobile About Us Dropdown -->
            <div class="relative">
                <button
                    class="nav-link w-full text-left px-4 py-3 rounded-lg text-gray-700 hover:text-primary hover:bg-primary/5 transition-all duration-200 font-medium flex items-center justify-between {{ request()->is('company-profile*') || request()->is('about-us*') || request()->is('about*') ? 'active text-primary bg-primary/10' : '' }}"
                    onclick="toggleAboutMenu()">
                    About Us
                    <svg class="w-4 h-4 transition-transform duration-200" id="about-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>

                <div class="hidden pl-4 mt-2 space-y-1" id="mobile-about-menu">
                    <a href="/company-profile/"
                        class="flex items-center px-4 py-2 text-gray-600 hover:text-primary hover:bg-primary/5 rounded-lg transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-3 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                        Company Profile
                    </a>
                    <a href="/gallery/"
                        class="flex items-center px-4 py-2 text-gray-600 hover:text-primary hover:bg-primary/5 rounded-lg transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-3 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        Gallery
                    </a>
                </div>
            </div>

            <a href="{{ route('blog.index') }}"
                class="nav-link block px-4 py-3 rounded-lg text-gray-700 hover:text-primary hover:bg-primary/5 transition-all duration-200 font-medium {{ request()->routeIs('blog.*') ? 'active text-primary bg-primary/10' : '' }}">
                Blog
            </a>

            <!-- Mobile Areas We Serve Dropdown -->
            <div class="relative">
                <button
                    class="nav-link w-full text-left px-4 py-3 rounded-lg text-gray-700 hover:text-primary hover:bg-primary/5 transition-all duration-200 font-medium flex items-center justify-between {{ request()->is('areas*') ? 'active text-primary bg-primary/10' : '' }}"
                    onclick="toggleAreasMenu()">
                    Areas We Serve
                    <svg class="w-4 h-4 transition-transform duration-200" id="areas-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>

                <div class="hidden pl-4 mt-2 space-y-1" id="mobile-areas-menu">
                    <a href="/areas/stair-lifts-burnaby"
                        class="flex items-center px-4 py-2 text-gray-600 hover:text-primary hover:bg-primary/5 rounded-lg transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-3 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 616 0z" />
                        </svg>
                        Burnaby
                    </a>
                    <a href="/areas/stair-lifts-coquitlam-british-columbia"
                        class="flex items-center px-4 py-2 text-gray-600 hover:text-primary hover:bg-primary/5 rounded-lg transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-3 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 616 0z" />
                        </svg>
                        Coquitlam
                    </a>
                    <a href="/areas/stair-lifts-delta-british-columbia"
                        class="flex items-center px-4 py-2 text-gray-600 hover:text-primary hover:bg-primary/5 rounded-lg transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-3 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 616 0z" />
                        </svg>
                        Delta
                    </a>
                    <a href="/areas/stair-lifts-north-vancouver"
                        class="flex items-center px-4 py-2 text-gray-600 hover:text-primary hover:bg-primary/5 rounded-lg transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-3 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 616 0z" />
                        </svg>
                        Metro Vancouver
                    </a>
                    <a href="/areas/stair-lifts-new-westminster-british-columbia"
                        class="flex items-center px-4 py-2 text-gray-600 hover:text-primary hover:bg-primary/5 rounded-lg transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-3 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 616 0z" />
                        </svg>
                        New Westminster
                    </a>
                    <a href="/areas/stair-lifts-port-coquitlam-british-columbia"
                        class="flex items-center px-4 py-2 text-gray-600 hover:text-primary hover:bg-primary/5 rounded-lg transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-3 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 616 0z" />
                        </svg>
                        Port Coquitlam
                    </a>
                    <a href="/areas/stair-lifts-surrey-british-columbia"
                        class="flex items-center px-4 py-2 text-gray-600 hover:text-primary hover:bg-primary/5 rounded-lg transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-3 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 616 0z" />
                        </svg>
                        Surrey
                    </a>
                    <a href="/areas/stair-lifts-white-rock"
                        class="flex items-center px-4 py-2 text-gray-600 hover:text-primary hover:bg-primary/5 rounded-lg transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-3 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 616 0z" />
                        </svg>
                        White Rock
                    </a>
                                            <a href="{{ route('services.custom.areas') }}"
                        class="flex items-center px-4 py-2 text-gray-600 hover:text-primary hover:bg-primary/5 rounded-lg transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-3 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 616 0z" />
                        </svg>
                        All Service Areas
                    </a>
                </div>
            </div>

            <a href="{{ route('contact') }}"
                class="nav-link block px-4 py-3 rounded-lg text-gray-700 hover:text-primary hover:bg-primary/5 transition-all duration-200 font-medium {{ request()->routeIs('contact') ? 'active text-primary bg-primary/10' : '' }}">
                Contact
            </a>

            <!-- Mobile Buttons -->
            <div class="flex flex-col space-y-3 mt-6 px-4">
                <a href="/areas" class="btn-primary py-3 text-center rounded-lg text-sm font-medium">Visit a Location</a>
                <a href="{{ route('contact') }}" class=" py-3 text-center rounded-lg text-sm font-medium">Contact Us Today</a>
            </div>
        </div>
    </div>
</nav>

<script>
    function toggleMobileMenu() {
        const mobileMenu = document.getElementById('mobile-menu');
        mobileMenu.classList.toggle('hidden');
    }

    function toggleProductsMenu() {
        const productsMenu = document.getElementById('mobile-products-menu');
        productsMenu.classList.toggle('hidden');
    }

    function toggleAboutMenu() {
        const aboutMenu = document.getElementById('mobile-about-menu');
        aboutMenu.classList.toggle('hidden');
    }

    function toggleAreasMenu() {
        const areasMenu = document.getElementById('mobile-areas-menu');
        areasMenu.classList.toggle('hidden');
    }

    function toggleDropdownSection(sectionId) {
        const section = document.getElementById(sectionId);
        const icon = document.getElementById(sectionId + '-icon');
        
        if (section && icon) {
            section.classList.toggle('hidden');
            icon.classList.toggle('rotate-180');
        }
    }

    // Sticky navbar with consistent styling across all pages
    window.addEventListener('scroll', function() {
        const navbar = document.getElementById('navbar');
        // Maintain consistent styling - no color changes on scroll
        if (window.scrollY > 100) {
            navbar.classList.add('shadow-xl');
            navbar.classList.remove('shadow-lg');
        } else {
            navbar.classList.add('shadow-lg');
            navbar.classList.remove('shadow-xl');
        }
    });

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