@extends('layouts.app')

@section('title', 'Sitemap - Home2stay')
@section('meta_description', 'Complete sitemap of Home2stay website. Find all pages, services, products, blog posts and more.')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-gray-50 to-blue-50 py-12">
    <div class="container mx-auto px-4">
        <!-- Header -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <svg class="inline-block w-12 h-12 mr-3 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"></path>
                </svg>
                Sitemap
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Navigate through all pages on our website. Find exactly what you're looking for quickly and easily.
            </p>
        </div>

        <!-- Main Pages -->
        @if(isset($sitemap['main']) && count($sitemap['main']) > 0)
        <div class="sitemap-section">
            <div class="sitemap-header">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                </svg>
                <h2>Main Pages</h2>
            </div>
            <div class="sitemap-grid">
                @foreach($sitemap['main'] as $page)
                <a href="{{ $page['url'] }}" class="sitemap-link">
                    <span class="sitemap-link-text">{{ $page['title'] }}</span>
                    <svg class="sitemap-link-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
                @endforeach
            </div>
        </div>
        @endif

        <!-- Services -->
        @if(isset($sitemap['services']) && count($sitemap['services']) > 0)
        <div class="sitemap-section">
            <div class="sitemap-header">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                </svg>
                <h2>Services</h2>
            </div>
            <div class="sitemap-grid">
                @foreach($sitemap['services'] as $service)
                <a href="{{ $service['url'] }}" class="sitemap-link">
                    <span class="sitemap-link-text">{{ $service['title'] }}</span>
                    <svg class="sitemap-link-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
                @endforeach
            </div>
        </div>
        @endif

        <!-- Custom Services -->
        @if(isset($sitemap['custom_services']) && count($sitemap['custom_services']) > 0)
        <div class="sitemap-section">
            <div class="sitemap-header">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                </svg>
                <h2>Specialized Services</h2>
            </div>
            <div class="sitemap-grid">
                @foreach($sitemap['custom_services'] as $service)
                <a href="{{ $service['url'] }}" class="sitemap-link">
                    <span class="sitemap-link-text">{{ $service['title'] }}</span>
                    <svg class="sitemap-link-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
                @endforeach
            </div>
        </div>
        @endif

        <!-- Product Categories -->
        @if(isset($sitemap['product_categories']) && count($sitemap['product_categories']) > 0)
        <div class="sitemap-section">
            <div class="sitemap-header">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                </svg>
                <h2>Product Categories</h2>
            </div>
            <div class="sitemap-grid">
                @foreach($sitemap['product_categories'] as $category)
                <a href="{{ $category['url'] }}" class="sitemap-link">
                    <span class="sitemap-link-text">{{ $category['title'] }}</span>
                    <svg class="sitemap-link-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
                @endforeach
            </div>
        </div>
        @endif

        <!-- Products -->
        @if(isset($sitemap['products']) && count($sitemap['products']) > 0)
        <div class="sitemap-section">
            <div class="sitemap-header">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                </svg>
                <h2>Products ({{ count($sitemap['products']) }})</h2>
            </div>
            <div class="sitemap-grid sitemap-grid-compact">
                @foreach($sitemap['products'] as $product)
                <a href="{{ $product['url'] }}" class="sitemap-link sitemap-link-compact">
                    <span class="sitemap-link-text">{{ \Illuminate\Support\Str::limit($product['title'], 50) }}</span>
                    <svg class="sitemap-link-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
                @endforeach
            </div>
        </div>
        @endif

        <!-- Rental Categories -->
        @if(isset($sitemap['rental_categories']) && count($sitemap['rental_categories']) > 0)
        <div class="sitemap-section">
            <div class="sitemap-header">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <h2>Rentals</h2>
            </div>
            <div class="sitemap-grid">
                @foreach($sitemap['rental_categories'] as $rental)
                <a href="{{ $rental['url'] }}" class="sitemap-link">
                    <span class="sitemap-link-text">{{ $rental['title'] }}</span>
                    <svg class="sitemap-link-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
                @endforeach
            </div>
        </div>
        @endif

        <!-- Areas -->
        @if(isset($sitemap['areas']) && count($sitemap['areas']) > 0)
        <div class="sitemap-section">
            <div class="sitemap-header">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                </svg>
                <h2>Service Areas ({{ count($sitemap['areas']) }})</h2>
            </div>
            <div class="sitemap-grid sitemap-grid-compact">
                @foreach($sitemap['areas'] as $area)
                <a href="{{ $area['url'] }}" class="sitemap-link sitemap-link-compact">
                    <span class="sitemap-link-text">{{ $area['title'] }}</span>
                    <svg class="sitemap-link-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
                @endforeach
            </div>
        </div>
        @endif

        <!-- Blog Posts -->
        @if(isset($sitemap['blog']) && count($sitemap['blog']) > 0)
        <div class="sitemap-section">
            <div class="sitemap-header">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                </svg>
                <h2>Blog Posts ({{ count($sitemap['blog']) }})</h2>
            </div>
            <div class="sitemap-grid">
                @foreach($sitemap['blog'] as $post)
                <a href="{{ $post['url'] }}" class="sitemap-link">
                    <span class="sitemap-link-text">{{ $post['title'] }}</span>
                    <svg class="sitemap-link-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
                @endforeach
            </div>
        </div>
        @endif

        <!-- Special Pages -->
        @if(isset($sitemap['special']) && count($sitemap['special']) > 0)
        <div class="sitemap-section">
            <div class="sitemap-header">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                </svg>
                <h2>Special Pages</h2>
            </div>
            <div class="sitemap-grid">
                @foreach($sitemap['special'] as $page)
                <a href="{{ $page['url'] }}" class="sitemap-link">
                    <span class="sitemap-link-text">{{ $page['title'] }}</span>
                    <svg class="sitemap-link-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
                @endforeach
            </div>
        </div>
        @endif

        <!-- XML Sitemap Link -->
        <div class="text-center mt-12 p-8 bg-white rounded-2xl shadow-lg">
            <h3 class="text-2xl font-bold text-gray-800 mb-4">For Search Engines</h3>
            <p class="text-gray-600 mb-6">Access our XML sitemap for SEO and search engine crawling</p>
            <a href="{{ route('sitemap.xml') }}" class="inline-flex items-center gap-2 px-6 py-3 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition-colors shadow-md hover:shadow-lg">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                </svg>
                View XML Sitemap
            </a>
        </div>
    </div>
</div>

<style>
.sitemap-section {
    background-color: white;
    border-radius: 1rem;
    box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
    padding: 2rem;
    margin-bottom: 2rem;
    transition: all 0.3s;
}

.sitemap-section:hover {
    box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
}

.sitemap-header {
    display: flex;
    align-items: center;
    gap: 0.75rem;
    margin-bottom: 1.5rem;
    padding-bottom: 1rem;
    border-bottom: 2px solid #dbeafe;
}

.sitemap-header svg {
    color: #2563eb;
    flex-shrink: 0;
}

.sitemap-header h2 {
    font-size: 1.5rem;
    font-weight: 700;
    color: #1f2937;
}

.sitemap-grid {
    display: grid;
    grid-template-columns: 1fr;
    gap: 1rem;
}

@media (min-width: 768px) {
    .sitemap-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (min-width: 1024px) {
    .sitemap-grid {
        grid-template-columns: repeat(3, 1fr);
    }
}

.sitemap-grid-compact {
    gap: 0.75rem;
}

@media (min-width: 768px) {
    .sitemap-grid-compact {
        grid-template-columns: repeat(3, 1fr);
    }
}

@media (min-width: 1024px) {
    .sitemap-grid-compact {
        grid-template-columns: repeat(4, 1fr);
    }
}

.sitemap-link {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 1rem;
    background: linear-gradient(to right, #f9fafb, #eff6ff);
    border-radius: 0.5rem;
    border: 2px solid transparent;
    transition: all 0.2s;
    text-decoration: none;
}

.sitemap-link:hover {
    border-color: #93c5fd;
    background: linear-gradient(to right, #eff6ff, #dbeafe);
}

.sitemap-link-compact {
    padding: 0.75rem;
}

.sitemap-link-text {
    color: #374151;
    font-weight: 500;
    transition: color 0.2s;
}

.sitemap-link:hover .sitemap-link-text {
    color: #1d4ed8;
}

.sitemap-link-icon {
    width: 1.25rem;
    height: 1.25rem;
    color: #9ca3af;
    flex-shrink: 0;
    transition: all 0.2s;
}

.sitemap-link:hover .sitemap-link-icon {
    color: #2563eb;
    transform: translateX(0.25rem);
}
</style>
@endsection
