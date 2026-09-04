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
    h1, h2, h3, h4, h5, h6 { font-family: 'Montserrat', sans-serif; }
    p, li, a, button, input, textarea, select { font-family: 'Open Sans', sans-serif; }

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

    /* Search Dropdown Styling */
    .ajax-search-wrapper {
        position: relative;
        width: 100%;
        max-width: 320px;
    }

    .ajax-search-results {
        position: absolute;
        top: 100%;
        left: 0;
        right: 0;
        background: #ffffff;
        border: 1px solid rgba(229, 231, 235, 0.8);
        border-radius: 0.5rem;
        box-shadow: 0 10px 15px -3px rgba(0,0,0,0.1), 0 4px 6px -2px rgba(0,0,0,0.05);
        margin-top: 6px;
        max-height: 350px;
        overflow-y: auto;
        z-index: 100;
        display: none;
    }

    .ajax-search-item {
        display: flex;
        align-items: center;
        padding: 10px 14px;
        border-bottom: 1px solid #f3f4f6;
        transition: background 0.2s ease;
        text-decoration: none;
        color: var(--text-dark);
    }

    .ajax-search-item:last-child {
        border-bottom: none;
    }

    .ajax-search-item:hover {
        background: rgba(0, 120, 191, 0.05);
    }

    /* Mobile Menu Enhancements */
    .mobile-menu {
        background: rgba(255, 255, 255, 0.98);
        backdrop-filter: blur(16px);
        border-top: 1px solid rgba(229, 231, 235, 0.5);
    }

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

    .logo img { transition: var(--transition); }
    .logo:hover img { transform: scale(1.05); }

    @media (max-width: 1024px) {
        #navbar { padding: 0.75rem 0; }
        .nav-link { font-size: 0.9rem; }
    }

    @media (max-width: 768px) {
        #navbar { padding: 0.5rem 0; }
        .mobile-menu { max-height: calc(100vh - 80px); overflow-y: auto; }
    }
</style>

<nav class="fixed top-0 left-0 right-0 z-50 bg-white/95 backdrop-blur-md border-b border-gray-200/50 shadow-lg py-3 transition-all duration-300" id="navbar">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center gap-4">
            
            <!-- Logo (Left Side) -->
            <div class="flex-shrink-0">
                <a href="{{ route('home') }}" class="flex items-center">
                    <img src="/logo/Logo-clr.png" alt="Home2stay" class="h-10 w-auto bg-transparent">
                </a>
            </div>

            <!-- Desktop Navigation (Center) -->
            <div class="hidden lg:flex items-center justify-center space-x-6">
                <a href="{{ route('home') }}"
                    class="nav-link px-3 py-2 rounded-lg text-gray-700 hover:text-primary hover:bg-primary/5 transition-all duration-200 font-medium whitespace-nowrap {{ request()->routeIs('home') ? 'active text-primary bg-primary/10' : '' }}">
                    Home
                </a>

                <!-- Products Dropdown -->
                <div class="relative group">
                    <button class="nav-link flex items-center px-3 py-2 rounded-lg text-gray-700 hover:text-primary hover:bg-primary/5 transition-all duration-200 font-medium whitespace-nowrap">
                        Products
                        <svg class="w-4 h-4 ml-1.5 transition-transform duration-200 group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <!-- Mega Menu Dropdown -->
                    <div class="absolute left-[-100px] w-[1200px] bg-white rounded-xl shadow-2xl py-8 hidden group-hover:block z-50 border border-gray-100">
                        <div class="px-8">
                            <div class="grid grid-cols-4 gap-6">
                                <div class="space-y-3">
                                    <h3 class="text-sm font-semibold text-gray-500 uppercase tracking-wider border-b border-gray-200 pb-2 mb-3">Stair Lifts & Porch Lifts</h3>
                                    <a href="/products-categories/straight-stair-lifts/" class="flex items-center p-2 text-gray-700 hover:bg-gray-50 rounded-lg">Straight Stair Lift</a>
                                    <a href="/products-categories/curved-stair-lifts" class="flex items-center p-2 text-gray-700 hover:bg-gray-50 rounded-lg">Curved Stair Lift</a>
                                </div>
                                <div class="space-y-3">
                                    <h3 class="text-sm font-semibold text-gray-500 uppercase tracking-wider border-b border-gray-200 pb-2 mb-3">Bathroom Renovations</h3>
                                    <a href="/products-categories/bathroom-renovations/" class="flex items-center p-2 text-gray-700 hover:bg-gray-50 rounded-lg">Bathroom Renovations</a>
                                </div>
                                <div class="space-y-3">
                                    <h3 class="text-sm font-semibold text-gray-500 uppercase tracking-wider border-b border-gray-200 pb-2 mb-3">Support & Safety</h3>
                                    <a href="/all-products/" class="flex items-center p-2 text-primary font-medium">View All Products</a>
                                </div>
                                <div class="space-y-3">
                                    <h3 class="text-sm font-semibold text-gray-500 uppercase tracking-wider border-b border-gray-200 pb-2 mb-3">Services & Rentals</h3>
                                    <a href="/rentals" class="flex items-center p-2 text-gray-700 hover:bg-gray-50 rounded-lg">Equipment Rentals</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- About Us Dropdown -->
                <div class="relative group">
                    <button class="nav-link flex items-center px-3 py-2 rounded-lg text-gray-700 hover:text-primary hover:bg-primary/5 transition-all duration-200 font-medium whitespace-nowrap">
                        About Us
                        <svg class="w-4 h-4 ml-1.5 transition-transform duration-200 group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="absolute right-0 w-48 bg-white rounded-xl shadow-2xl py-2 hidden group-hover:block z-40 border border-gray-100">
                        <a href="/about-us" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50">Our Company</a>
                        <a href="{{ route('contact') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50">Contact Us</a>
                    </div>
                </div>
            </div>

            <!-- Desktop Search Bar (Right Side) -->
            <div class="hidden lg:block ajax-search-wrapper">
                <form action="{{ route('search') }}" method="GET" class="relative">
                    <input 
                        type="text" 
                        name="query" 
                        class="ajax-search-input search-input w-full pl-10 pr-4 py-2 rounded-full text-sm focus:outline-none" 
                        placeholder="Search products..." 
                        autocomplete="off"
                    >
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg class="h-4 w-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                        </svg>
                    </div>
                </form>
                <div class="ajax-search-results"></div>
            </div>

            <!-- Mobile Search & Toggle Button -->
            <div class="flex lg:hidden items-center space-x-2">
                <button id="mobile-search-toggle" class="p-2 text-gray-600 hover:text-primary focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                </button>
            </div>

        </div>

        <!-- Mobile Search Dropdown Container -->
        <div id="mobile-search-bar" class="hidden lg:hidden pt-3 pb-2 ajax-search-wrapper">
            <form action="{{ route('search') }}" method="GET" class="relative">
                <input 
                    type="text" 
                    name="query" 
                    class="ajax-search-input search-input w-full pl-10 pr-4 py-2 rounded-full text-sm focus:outline-none" 
                    placeholder="Search products..." 
                    autocomplete="off"
                >
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <svg class="h-4 w-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                </div>
            </form>
            <div class="ajax-search-results"></div>
        </div>

    </div>
</nav>

<!-- Live Search AJAX Script -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Toggle Mobile Search Bar
    const searchBtn = document.getElementById('mobile-search-toggle');
    const mobileSearchBar = document.getElementById('mobile-search-bar');
    if (searchBtn && mobileSearchBar) {
        searchBtn.addEventListener('click', () => {
            mobileSearchBar.classList.toggle('hidden');
        });
    }

    // Debounced Live AJAX Search Logic
    let debounceTimer;
    document.querySelectorAll('.ajax-search-input').forEach(input => {
        input.addEventListener('input', function() {
            const wrapper = this.closest('.ajax-search-wrapper');
            const resultsContainer = wrapper.querySelector('.ajax-search-results');
            const query = this.value.trim();

            clearTimeout(debounceTimer);

            if (query.length < 2) {
                resultsContainer.style.display = 'none';
                resultsContainer.innerHTML = '';
                return;
            }

            debounceTimer = setTimeout(() => {
                fetch(`/ajax-search?query=${encodeURIComponent(query)}`)
                    .then(res => res.json())
                    .then(data => {
                        resultsContainer.innerHTML = '';
                        if (data.length > 0) {
                            data.forEach(item => {
                                resultsContainer.innerHTML += `
                                    <a href="${item.url || '/products/' + (item.slug || item.id)}" class="ajax-search-item">
                                        <div>
                                            <div class="font-medium text-sm text-gray-800">${item.title || item.name}</div>
                                            ${item.price ? `<div class="text-xs text-primary font-semibold">$${item.price}</div>` : ''}
                                        </div>
                                    </a>
                                `;
                            });
                            resultsContainer.style.display = 'block';
                        } else {
                            resultsContainer.innerHTML = `<div class="p-3 text-xs text-gray-500 text-center">No products found</div>`;
                            resultsContainer.style.display = 'block';
                        }
                    })
                    .catch(() => {
                        resultsContainer.style.display = 'none';
                    });
            }, 300);
        });
    });

    // Close Dropdown when clicking outside
    document.addEventListener('click', function(e) {
        if (!e.target.closest('.ajax-search-wrapper')) {
            document.querySelectorAll('.ajax-search-results').forEach(res => res.style.display = 'none');
        }
    });
});
</script>
