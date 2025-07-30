@extends('layouts.app')

@section('title', 'Gallery - Home2stay Installation Projects')
@section('meta_description', 'Browse our gallery of completed accessibility installations including grab bars, stairlifts, tub cuts, barrier-free bathrooms, and more mobility solutions.')

@push('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <style>
        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 12px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            cursor: pointer;
        }
        
        .featured-item {
            height: 320px;
            width: 100%;
        }
        
        .gallery-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
        }
        
        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease, opacity 0.6s ease;
        }
        
        .gallery-item:hover img {
            transform: scale(1.05);
        }
        
        .gallery-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(to bottom, rgba(0,0,0,0.1), rgba(0,0,0,0.6));
            display: flex;
            align-items: end;
            padding: 20px;
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        
        .gallery-item:hover .gallery-overlay {
            opacity: 1;
        }
        
        .gallery-title {
            color: white;
            font-size: 1.1rem;
            font-weight: 600;
            text-shadow: 0 2px 4px rgba(0,0,0,0.5);
        }
        
        .lightbox {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.9);
            animation: fadeIn 0.3s ease;
        }
        
        .lightbox-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            max-width: 90%;
            max-height: 90%;
            border-radius: 8px;
            overflow: hidden;
        }
        
        .lightbox-content img {
            width: 100%;
            height: auto;
            display: block;
        }
        
        .lightbox-close {
            position: absolute;
            top: 20px;
            right: 30px;
            color: white;
            font-size: 40px;
            font-weight: bold;
            cursor: pointer;
            z-index: 1001;
            transition: color 0.3s ease;
        }
        
        .lightbox-close:hover {
            color: #ccc;
        }
        
        .lightbox-title {
            position: absolute;
            bottom: 20px;
            left: 20px;
            right: 20px;
            color: white;
            font-size: 1.2rem;
            font-weight: 600;
            text-align: center;
            background: rgba(0, 0, 0, 0.7);
            padding: 15px;
            border-radius: 8px;
            z-index: 1001;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        .masonry-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            align-items: start;
        }
        
        .masonry-item {
            break-inside: avoid;
            margin-bottom: 20px;
        }
        
        .category-section {
            margin-bottom: 60px;
        }
        
        .category-title {
            font-size: 2rem;
            font-weight: 700;
            color: #1f2937;
            margin-bottom: 15px;
            position: relative;
            display: inline-block;
        }
        
        .category-title::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 60px;
            height: 3px;
            background: #3B82F6;
            border-radius: 2px;
        }
        
        .stats-counter {
            background: linear-gradient(135deg, #3B82F6 0%, #1D4ED8 100%);
            color: white;
            padding: 40px 0;
            margin: 60px 0;
        }
        
        .stats-counter .stat-item {
            text-align: center;
            padding: 0 20px;
        }
        
        .stats-counter .stat-number {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 10px;
        }
        
        .stats-counter .stat-label {
            font-size: 1.1rem;
            opacity: 0.9;
        }
    </style>
@endpush

@section('content')
    <!-- Page Banner -->
    <section class="relative bg-gradient-to-br from-gray-800 to-gray-900 overflow-hidden" style="min-height: 400px;">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        
        <!-- Decorative Elements -->
        <div class="absolute top-0 left-0 w-full h-full">
            <div class="absolute top-10 left-10 w-20 h-20 bg-blue-500 rounded-full opacity-20 animate-pulse"></div>
            <div class="absolute top-32 right-20 w-16 h-16 bg-blue-400 rounded-full opacity-15 animate-pulse" style="animation-delay: 1s;"></div>
            <div class="absolute bottom-20 left-1/4 w-12 h-12 bg-blue-300 rounded-full opacity-10 animate-pulse" style="animation-delay: 2s;"></div>
        </div>

        <!-- Banner Content -->
        <div class="container mx-auto px-4 relative z-10 flex items-center justify-center" style="min-height: 400px;">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6">
                    Installation Gallery
                </h1>
                <p class="text-xl text-gray-300 mb-8 max-w-2xl mx-auto">
                    Discover our completed accessibility installations and see how we've helped transform homes across Canada
                </p>
                <div class="w-24 h-1 bg-blue-500 mx-auto mb-8"></div>
                <div class="flex justify-center space-x-4">
                    <span class="px-4 py-2 bg-blue-500 text-white rounded-full text-sm">500+ Installations</span>
                    <span class="px-4 py-2 bg-green-500 text-white rounded-full text-sm">97% Satisfaction</span>
                    <span class="px-4 py-2 bg-purple-500 text-white rounded-full text-sm">Professional Results</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Counter -->
    <div class="stats-counter">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="stat-item">
                    <div class="stat-number">500+</div>
                    <div class="stat-label">Installations Completed</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">15+</div>
                    <div class="stat-label">Years Experience</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">97%</div>
                    <div class="stat-label">Customer Satisfaction</div>
                </div>
                <div class="stat-item">
                    <div  class="stat-number">8:30 - 5:30</div>
                    <div class="stat-label">Support Available</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Gallery Sections -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            
            <!-- Featured Projects -->
            <div class="category-section">
                <h2 class="category-title mb-6">Featured Installation Projects</h2>
                <p class="text-gray-600 mb-8 text-lg">Take a look at some of our most impressive accessibility installations</p>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="gallery-item featured-item" onclick="openLightbox('{{ asset('np-img/ft-1.jpg') }}', '')">
                        <div class="image-container">
                            <div class="image-placeholder">
                                <div class="loading-spinner"></div>
                            </div>
                            <img data-lazy="{{ asset('np-img/ft-1.jpg') }}" 
                                 alt="Barrier-Free Bathroom Installation"
                                 class="lazy-image"
                                 loading="lazy">
                        </div>
                        <div class="gallery-overlay">
                        </div>
                    </div>
                    
                    <div class="gallery-item featured-item" onclick="openLightbox('{{ asset('np-img/ft-2.jpg') }}', '')">
                        <div class="image-container">
                            <div class="image-placeholder">
                                <div class="loading-spinner"></div>
                            </div>
                            <img data-lazy="{{ asset('np-img/ft-2.jpg') }}" 
                                 alt="Accessible Shower Solution"
                                 class="lazy-image"
                                 loading="lazy">
                        </div>
                        <div class="gallery-overlay">
                        </div>
                    </div>
                    
                    <div class="gallery-item featured-item" onclick="openLightbox('{{ asset('np-img/ft-3.jpg') }}', '')">
                        <div class="image-container">
                            <div class="image-placeholder">
                                <div class="loading-spinner"></div>
                            </div>
                            <img data-lazy="{{ asset('np-img/ft-3.jpg') }}" 
                                 alt="Complete Bathroom Renovation"
                                 class="lazy-image"
                                 loading="lazy">
                        </div>
                        <div class="gallery-overlay">
                        </div>
                    </div>
                    
                    <div class="gallery-item featured-item" onclick="openLightbox('{{ asset('np-img/ft-4.jpg') }}', '')">
                        <div class="image-container">
                            <div class="image-placeholder">
                                <div class="loading-spinner"></div>
                            </div>
                            <img data-lazy="{{ asset('np-img/ft-4.jpg') }}" 
                                 alt="Modern Accessible Design"
                                 class="lazy-image"
                                 loading="lazy">
                        </div>
                        <div class="gallery-overlay">
                        </div>
                    </div>
                    
                    <div class="gallery-item featured-item" onclick="openLightbox('{{ asset('np-img/ft-5.jpg') }}', '')">
                        <div class="image-container">
                            <div class="image-placeholder">
                                <div class="loading-spinner"></div>
                            </div>
                            <img data-lazy="{{ asset('np-img/ft-5.jpg') }}" 
                                 alt="Safety-First Installation"
                                 class="lazy-image"
                                 loading="lazy">
                        </div>
                        <div class="gallery-overlay">
                        </div>
                    </div>
                    
                    <div class="gallery-item featured-item" onclick="openLightbox('{{ asset('np-img/ft-6.jpg') }}', '')">
                        <div class="image-container">
                            <div class="image-placeholder">
                                <div class="loading-spinner"></div>
                            </div>
                            <img data-lazy="{{ asset('np-img/ft-6.jpg') }}" 
                                 alt="Luxury Accessible Bathroom"
                                 class="lazy-image"
                                 loading="lazy">
                        </div>
                        <div class="gallery-overlay">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Grab Bars Installation -->
            <div class="category-section">
                <h2 class="category-title mb-6">Grab Bars Installation</h2>
                <p class="text-gray-600 mb-8 text-lg">Professional grab bar installations for enhanced bathroom safety</p>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="gallery-item" style="height: 280px;" onclick="openLightbox('{{ asset('h2s-banners/promenaid grab bar.png') }}', '')">
                        <div class="image-container">
                            <div class="image-placeholder">
                                <div class="loading-spinner"></div>
                            </div>
                            <img data-lazy="{{ asset('h2s-banners/promenaid grab bar.png') }}" 
                                 alt="Promenaid Grab Bar Installation"
                                 class="lazy-image"
                                 loading="lazy">
                        </div>
                        <div class="gallery-overlay">
                        </div>
                    </div>
                    
                    <div class="gallery-item" style="height: 280px;" onclick="openLightbox('{{ asset('h2s-banners/promenaid-grab-bar-2.png') }}', '')">
                        <div class="image-container">
                            <div class="image-placeholder">
                                <div class="loading-spinner"></div>
                            </div>
                            <img data-lazy="{{ asset('h2s-banners/promenaid-grab-bar-2.png') }}" 
                                 alt="Advanced Grab Bar Solution"
                                 class="lazy-image"
                                 loading="lazy">
                        </div>
                        <div class="gallery-overlay">
                        </div>
                    </div>
                    
                    <div class="gallery-item" style="height: 280px;" onclick="openLightbox('{{ asset('np-img/grab-gal.webp') }}', '')">
                        <div class="image-container">
                            <div class="image-placeholder">
                                <div class="loading-spinner"></div>
                            </div>
                            <img data-lazy="{{ asset('np-img/grab-gal.webp') }}" 
                                 alt="Custom Grab Bar Configuration"
                                 class="lazy-image"
                                 loading="lazy">
                        </div>
                        <div class="gallery-overlay">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tub Cuts Installation -->
            <div class="category-section">
                <h2 class="category-title mb-6">Tub Cuts Installation</h2>
                <p class="text-gray-600 mb-8 text-lg">Transform your existing tub with our professional tub cut services</p>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="gallery-item" style="height: 280px;" onclick="openLightbox('{{ asset('np-img/tub-1.jpg') }}', '')">
                        <div class="image-container">
                            <div class="image-placeholder">
                                <div class="loading-spinner"></div>
                            </div>
                            <img data-lazy="{{ asset('np-img/tub-1.jpg') }}" 
                                 alt="CleanCut Tub Cut Solution"
                                 class="lazy-image"
                                 loading="lazy">
                        </div>
                        <div class="gallery-overlay">
                        </div>
                    </div>
                    
                    <div class="gallery-item" style="height: 280px;" onclick="openLightbox('{{ asset('np-img/tub-2.jpg') }}', '')">
                        <div class="image-container">
                            <div class="image-placeholder">
                                <div class="loading-spinner"></div>
                            </div>
                            <img data-lazy="{{ asset('np-img/tub-2.jpg') }}" 
                                 alt="Professional Tub Modification"
                                 class="lazy-image"
                                 loading="lazy">
                        </div>
                        <div class="gallery-overlay">
                        </div>
                    </div>
                    
                    <div class="gallery-item" style="height: 280px;" onclick="openLightbox('{{ asset('np-img/tub-3.jpg') }}', '')">
                        <div class="image-container">
                            <div class="image-placeholder">
                                <div class="loading-spinner"></div>
                            </div>
                            <img data-lazy="{{ asset('np-img/tub-3.jpg') }}" 
                                 alt="Safe Entry Tub Cut"
                                 class="lazy-image"
                                 loading="lazy">
                        </div>
                        <div class="gallery-overlay">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Barrier-Free Bathrooms -->
            <div class="category-section">
                <h2 class="category-title mb-6">Barrier-Free Bathrooms</h2>
                <p class="text-gray-600 mb-8 text-lg">Complete barrier-free bathroom solutions for maximum accessibility</p>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="gallery-item" style="height: 280px;" onclick="openLightbox('{{ asset('np-img/bari-1.jpg') }}', '')">
                        <div class="image-container">
                            <div class="image-placeholder">
                                <div class="loading-spinner"></div>
                            </div>
                            <img data-lazy="{{ asset('np-img/bari-1.jpg') }}" 
                                 alt="Sentrel Bathroom Installation"
                                 class="lazy-image"
                                 loading="lazy">
                        </div>
                        <div class="gallery-overlay">
                        </div>
                    </div>
                    
                    <div class="gallery-item" style="height: 280px;" onclick="openLightbox('{{ asset('np-img/bari-2.jpg') }}', '')">
                        <div class="image-container">
                            <div class="image-placeholder">
                                <div class="loading-spinner"></div>
                            </div>
                            <img data-lazy="{{ asset('np-img/bari-2.jpg') }}" 
                                 alt="Modern Barrier-Free Design"
                                 class="lazy-image"
                                 loading="lazy">
                        </div>
                        <div class="gallery-overlay">
                        </div>
                    </div>
                    
                    <div class="gallery-item" style="height: 280px;" onclick="openLightbox('{{ asset('np-img/bari-3.jpg') }}', '')">
                        <div class="image-container">
                            <div class="image-placeholder">
                                <div class="loading-spinner"></div>
                            </div>
                            <img data-lazy="{{ asset('np-img/bari-3.jpg') }}" 
                                 alt="Complete Accessibility Solution"
                                 class="lazy-image"
                                 loading="lazy">
                        </div>
                        <div class="gallery-overlay">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Stairlift Installation -->
            <div class="category-section">
                <h2 class="category-title mb-6">Stairlift Installation</h2>
                <p class="text-gray-600 mb-8 text-lg">Professional stairlift installations for safe and comfortable mobility</p>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="gallery-item" style="height: 300px;" onclick="openLightbox('{{ asset('np-img/str-1.jpg') }}', '')">
                        <div class="image-container">
                            <div class="image-placeholder">
                                <div class="loading-spinner"></div>
                            </div>
                            <img data-lazy="{{ asset('np-img/str-1.jpg') }}" 
                                 alt="Bruno SRE-3050 Stairlift"
                                 class="lazy-image"
                                 loading="lazy">
                        </div>
                        <div class="gallery-overlay">
                        </div>
                    </div>
                    
                    <div class="gallery-item" style="height: 300px;" onclick="openLightbox('{{ asset('np-img/str-2.jpg') }}', '')">
                        <div class="image-container">
                            <div class="image-placeholder">
                                <div class="loading-spinner"></div>
                            </div>
                            <img data-lazy="{{ asset('np-img/str-2.jpg') }}" 
                                 alt="Flow X Stairlift Installation"
                                 class="lazy-image"
                                 loading="lazy">
                        </div>
                        <div class="gallery-overlay">
                        </div>
                    </div>
                    
                    <div class="gallery-item" style="height: 300px;" onclick="openLightbox('{{ asset('np-img/str-3.jpg') }}', '')">
                        <div class="image-container">
                            <div class="image-placeholder">
                                <div class="loading-spinner"></div>
                            </div>
                            <img data-lazy="{{ asset('np-img/str-3.jpg') }}" 
                                 alt="Custom Stairlift Configuration"
                                 class="lazy-image"
                                 loading="lazy">
                        </div>
                        <div class="gallery-overlay">
                        </div>
                    </div>
                    
                    <div class="gallery-item" style="height: 300px;" onclick="openLightbox('{{ asset('np-img/str-4.jpg') }}', '')">
                        <div class="image-container">
                            <div class="image-placeholder">
                                <div class="loading-spinner"></div>
                            </div>
                            <img data-lazy="{{ asset('np-img/str-4.jpg') }}" 
                                 alt="Premium Stairlift Solution"
                                 class="lazy-image"
                                 loading="lazy">
                        </div>
                        <div class="gallery-overlay">
                        </div>
                    </div>

                    <div class="gallery-item" style="height: 300px;" onclick="openLightbox('{{ asset('np-img/str-5.jpg') }}', '')">
                        <div class="image-container">
                            <div class="image-placeholder">
                                <div class="loading-spinner"></div>
                            </div>
                            <img data-lazy="{{ asset('np-img/str-5.jpg') }}" 
                                 alt="Premium Stairlift Solution"
                                 class="lazy-image"
                                 loading="lazy">
                        </div>
                        <div class="gallery-overlay">
                        </div>
                    </div>

                    <div class="gallery-item" style="height: 300px;" onclick="openLightbox('{{ asset('np-img/str-6.jpg') }}', '')">
                        <div class="image-container">
                            <div class="image-placeholder">
                                <div class="loading-spinner"></div>
                            </div>
                            <img data-lazy="{{ asset('np-img/str-6.jpg') }}" 
                                 alt="Premium Stairlift Solution"
                                 class="lazy-image"
                                 loading="lazy">
                        </div>
                        <div class="gallery-overlay">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-16 bg-gradient-to-r from-blue-600 to-blue-700">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
                Ready to Transform Your Home?
            </h2>
            <p class="text-xl text-blue-100 mb-8 max-w-2xl mx-auto">
                Let our expert team help you create a safe, accessible, and beautiful living space. 
                Contact us today for a free consultation and quote.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/contact" class="inline-flex items-center px-8 py-4 bg-white text-blue-600 rounded-lg font-semibold hover:bg-gray-100 transition duration-300">
                    Get Free Quote
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </a>
                <a href="tel:604-259-1211" class="inline-flex items-center px-8 py-4 bg-transparent text-white border-2 border-white rounded-lg font-semibold hover:bg-white hover:text-blue-600 transition duration-300">
                    Call Now: 604-259-1211
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Lightbox Modal -->
    <div id="lightbox" class="lightbox" onclick="closeLightbox()">
        <span class="lightbox-close" onclick="closeLightbox()">&times;</span>
        <div class="lightbox-content">
            <img id="lightbox-image" src="" alt="">
            <div id="lightbox-title" class="lightbox-title"></div>
        </div>
    </div>

@endsection

@push('scripts')
    <script>
        // Lightbox Functions (using global lazy loader)
        function openLightbox(imageSrc, title) {
            const lightbox = document.getElementById('lightbox');
            const lightboxImage = document.getElementById('lightbox-image');
            const lightboxTitle = document.getElementById('lightbox-title');
            
            lightboxImage.src = imageSrc;
            
            if (title && title.trim() !== '') {
                lightboxTitle.textContent = title;
                lightboxTitle.style.display = 'block';
            } else {
                lightboxTitle.style.display = 'none';
            }
            
            lightbox.style.display = 'block';
            document.body.style.overflow = 'hidden';
        }
        
        function closeLightbox() {
            const lightbox = document.getElementById('lightbox');
            lightbox.style.display = 'none';
            document.body.style.overflow = 'auto';
        }
        
        // Close lightbox on escape key
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape') {
                closeLightbox();
            }
        });
        
        // Prevent lightbox from closing when clicking on the image
        document.getElementById('lightbox-image').addEventListener('click', function(event) {
            event.stopPropagation();
        });
        
        document.querySelector('.lightbox-content').addEventListener('click', function(event) {
            event.stopPropagation();
        });

        // Refresh lazy loader when this page loads (for any dynamically added content)
        document.addEventListener('DOMContentLoaded', function() {
            setTimeout(() => {
                if (window.lazyLoader) {
                    window.lazyLoader.refresh();
                }
            }, 200);
        });
    </script>
@endpush
