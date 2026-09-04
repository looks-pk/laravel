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


<!-- Column 2: Mobility & Lifts -->

<div class="space-y-3">

<h3 class="text-sm font-semibold text-gray-500 uppercase tracking-wider border-b border-gray-200 pb-2 mb-3">

Stair Lifts & Porch Lifts

</h3>



<a href="/products-categories/straight-stair-lifts/" class="flex items-center p-2 text-gray-700 hover:bg-gray-50 rounded-lg transition-colors group/item">

<div class="flex-shrink-0 w-8 h-8 bg-primary/10 rounded-lg flex items-center justify-center mr-3 group-hover/item:bg-primary/20 transition-colors">

<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">

<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M3 14h18m-9-4v8m-7 0h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />

</svg>

</div>

<div>

<h4 class="font-medium text-gray-900 text-sm">Straight Stair Lift</h4>

<p class="text-sm text-gray-500">Smooth. Safe. Simple.</p>

</div>

</a>



<a href="/products-categories/curved-stair-lifts" class="flex items-center p-2 text-gray-700 hover:bg-gray-50 rounded-lg transition-colors group/item">

<div class="flex-shrink-0 w-8 h-8 bg-primary/10 rounded-lg flex items-center justify-center mr-3 group-hover/item:bg-primary/20 transition-colors">

<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">

<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />

</svg>

</div>

<div>

<h4 class="font-medium text-gray-900 text-sm">Curved Stair Lift</h4>

<p class="text-sm text-gray-500">Built for curves.</p>

</div>

</a>



<a href="/products/outdoor-stairlifts" class="flex items-center p-2 text-gray-700 hover:bg-gray-50 rounded-lg transition-colors group/item">

<div class="flex-shrink-0 w-8 h-8 bg-primary/10 rounded-lg flex items-center justify-center mr-3 group-hover/item:bg-primary/20 transition-colors">

<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">

<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />

</svg>

</div>

<div>

<h4 class="font-medium text-gray-900 text-sm">Outdoor Stair Lift</h4>

<p class="text-sm text-gray-500">Rain. Wind. Ready.</p>

</div>

</a>



<a href="/products-categories/vertical-porch-lifts-vpl/" class="flex items-center p-2 text-gray-700 hover:bg-gray-50 rounded-lg transition-colors group/item">

<div class="flex-shrink-0 w-8 h-8 bg-primary/10 rounded-lg flex items-center justify-center mr-3 group-hover/item:bg-primary/20 transition-colors">

<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">

<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16V4m0 0L3 8m4-4l4 4m6 0v12m0 0l4-4m-4 4l-4-4" />

</svg>

</div>

<div>

<h4 class="font-medium text-gray-900 text-sm">Porch Lifts</h4>

<p class="text-sm text-gray-500">In. Out. Independent.</p>

</div>

</a>



<a href="/products-categories/ramps/" class="flex items-center p-2 text-gray-700 hover:bg-gray-50 rounded-lg transition-colors group/item">

<div class="flex-shrink-0 w-8 h-8 bg-primary/10 rounded-lg flex items-center justify-center mr-3 group-hover/item:bg-primary/20 transition-colors">

<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">

<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />

</svg>

</div>

<div>

<h4 class="font-medium text-gray-900 text-sm">Ramping</h4>

<p class="text-sm text-gray-500">Gentle. Safe. Accessible.</p>

</div>

</a>



</div>

<div class="space-y-3">

<h3 class="text-sm font-semibold text-gray-500 uppercase tracking-wider border-b border-gray-200 pb-2 mb-3">

Bathroom Renovations

</h3>


<a href="/products-categories/bathroom-renovations/" class="flex items-center p-2 text-gray-700 hover:bg-gray-50 rounded-lg transition-colors group/item">

<div class="flex-shrink-0 w-8 h-8 bg-primary/10 rounded-lg flex items-center justify-center mr-3 group-hover/item:bg-primary/20 transition-colors">

<!-- Bathroom SVG Icon -->

<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">

<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 10h10a4 4 0 014 4v2a2 2 0 01-2 2H5a2 2 0 01-2-2v-2a4 4 0 014-4zm0 0V6a2 2 0 012-2h2" />

</svg>

</div>

<div>

<h4 class="font-medium text-gray-900 text-sm">Bathroom Renovations</h4>

<p class="text-sm text-gray-500">Modern. Safe. Accessible.</p>

</div>

</a>

<a href="/products-categories/barrier-free-bathrooms/" class="flex items-center p-2 text-gray-700 hover:bg-gray-50 rounded-lg transition-colors group/item">

<div class="flex-shrink-0 w-8 h-8 bg-primary/10 rounded-lg flex items-center justify-center mr-3 group-hover/item:bg-primary/20 transition-colors">

<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">

<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />

</svg>

</div>

<div>

<h4 class="font-medium text-gray-900 text-sm">Barrier-Free Bathrooms</h4>

<p class="text-sm text-gray-500">Complete accessible solutions</p>

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

<p class="text-sm text-gray-500">Safety equipment & accessories</p>

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

<p class="text-sm text-gray-500">Support & stability solutions</p>

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

<p class="text-sm text-gray-500">Tub modification services</p>

</div>

</a>


{{-- <a href="/products-categories/walk-in-tubs/" class="flex items-center p-2 text-gray-700 hover:bg-gray-50 rounded-lg transition-colors group/item">

<div class="flex-shrink-0 w-8 h-8 bg-primary/10 rounded-lg flex items-center justify-center mr-3 group-hover/item:bg-primary/20 transition-colors">

<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">

<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z" />

</svg>

</div>

<div>

<h4 class="font-medium text-gray-900 text-sm">Walk-in Tubs</h4>

<p class="text-sm text-gray-500">Safe bathing solutions</p>

</div>

</a> --}}

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

<p class="text-sm text-gray-500">Stability & support systems</p>

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

<p class="text-sm text-primary/70">Browse complete catalog</p>

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

<p class="text-sm text-gray-500">Professional installation & design</p>

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

<p class="text-sm text-gray-500">Short & long-term rentals</p>

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

<p class="text-sm text-gray-600 mb-2">Get personalized recommendations from our specialists</p>

<a href="{{ route('contact') }}" class="inline-flex items-center text-sm bg-primary text-white px-3 py-1.5 rounded-md hover:bg-primary-dark transition-colors">

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

<div class="absolute right-[-80px] w-80 bg-white rounded-xl shadow-2xl py-6 hidden group-hover:block z-40 border
