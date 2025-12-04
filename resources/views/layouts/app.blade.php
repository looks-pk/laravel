<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', config('app.name', 'Laravel'))</title>
    <meta name="description" content="@yield('meta_description', 'Professional IT services and solutions')">
    <meta name="google-site-verification" content="0Ucpkwd7zB-q9_iN_kqFxQGogRUI3lY-eEwO79XLx7k" />
    <!-- Google reCAPTCHA site key for form protection -->
    <meta name="recaptcha-site-key" content="{{ config('services.recaptcha.site_key') }}">



    <script>window.$zoho=window.$zoho || {};$zoho.salesiq=$zoho.salesiq||{ready:function(){}}</script><script id="zsiqscript" src="https://salesiq.zohopublic.com/widget?wc=siq0bfa14f5f94a3227de3e9b2cab83f1f85d3973a6accac513dd1e254aea3dd21c84671c3c49de10717181e6f1badeb55d" defer></script>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-51J3BXNWJV"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-51J3BXNWJV');
    </script>
    <!-- DNS Prefetch for external resources -->
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="dns-prefetch" href="//cdnjs.cloudflare.com">

    <!-- Preconnect for critical resources -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Critical CSS - Inline for immediate rendering -->
    <style>
        /* Critical CSS for above-the-fold content */
        body { font-family: 'Inter', system-ui, -apple-system, sans-serif; }
        .min-h-screen { min-height: 100vh; }
        .bg-gray-50 { background-color: #f9fafb; }
        .container { max-width: 1200px; margin: 0 auto; padding: 0 1rem; }
        .font-sans { font-family: 'Inter', system-ui, -apple-system, sans-serif; }
        .antialiased { -webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale; }
        
        /* Lazy loading styles */
        .lazy-image {
            opacity: 1;
            transition: opacity 0.6s ease-in-out;
        }
        .lazy-image:not([src]) {
            opacity: 0;
        }
        .lazy-image.loaded {
            opacity: 1;
        }
        .image-placeholder {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%);
            background-size: 200% 100%;
            animation: loading 1.5s infinite;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #999;
            font-size: 14px;
            transition: opacity 0.3s ease;
            z-index: 1;
        }
        @keyframes loading {
            0% { background-position: 200% 0; }
            100% { background-position: -200% 0; }
        }
        .image-container {
            position: relative;
            width: 100%;
            height: 100%;
            overflow: hidden;
            background-color: #f8f9fa;
        }
        .image-container .lazy-image {
            position: relative;
            z-index: 2;
        }
        .loading-spinner {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 20px;
            height: 20px;
            border: 2px solid #f3f3f3;
            border-top: 2px solid #3B82F6;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }
        @keyframes spin {
            0% { transform: translate(-50%, -50%) rotate(0deg); }
            100% { transform: translate(-50%, -50%) rotate(360deg); }
        }
    </style>

    <!-- Fonts with optimized loading -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet"></noscript>

    <!-- Vite assets with optimized loading -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Stack for additional styles -->
    @stack('styles')

    <!-- Google reCAPTCHA API -->
    <script src="https://www.google.com/recaptcha/api.js?render={{ config('services.recaptcha.site_key') }}" async defer></script>
    <!-- Universal reCAPTCHA attachment script -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const siteKeyMeta = document.querySelector('meta[name="recaptcha-site-key"]');
            if (!siteKeyMeta) return; // No site key configured

            const siteKey = siteKeyMeta.content;
            if (!siteKey) return;

            // Helper to bind reCAPTCHA execution to a form
            function bindRecaptcha(form) {
                if (form.dataset.recaptchaBound === 'true') return; // Avoid duplicate bindings
                form.dataset.recaptchaBound = 'true';

                // Only intercept POST submissions (skip GET/filter/search forms)
                if (form.method && form.method.toLowerCase() !== 'post') return;
                if (form.hasAttribute('data-no-recaptcha')) return; // Allow opt-out per form

                form.addEventListener('submit', function (evt) {
                    // If token already present, allow normal submission
                    if (form.querySelector('input[name="g-recaptcha-response"]')?.value) {
                        return;
                    }
                    evt.preventDefault();

                    grecaptcha.ready(function () {
                        grecaptcha.execute(siteKey, {action: form.dataset.recaptchaAction || 'submit'}).then(function (token) {
                            let tokenField = form.querySelector('input[name="g-recaptcha-response"]');
                            if (!tokenField) {
                                tokenField = document.createElement('input');
                                tokenField.type = 'hidden';
                                tokenField.name = 'g-recaptcha-response';
                                form.appendChild(tokenField);
                            }
                            tokenField.value = token;
                            form.submit();
                        });
                    });
                });
            }

            // Initial bind on existing forms
            document.querySelectorAll('form').forEach(bindRecaptcha);

            // Observe DOM for dynamically added forms
            const observer = new MutationObserver((mutations) => {
                mutations.forEach((mutation) => {
                    mutation.addedNodes.forEach((node) => {
                        if (node.tagName === 'FORM') {
                            bindRecaptcha(node);
                        } else if (node.querySelectorAll) {
                            node.querySelectorAll('form').forEach(bindRecaptcha);
                        }
                    });
                });
            });
            observer.observe(document.body, {childList: true, subtree: true});
        });
    </script>
    <!-- Global Lazy Loading Script (Critical) -->
    <script>
        // Global Lazy Loading Implementation
        window.GlobalLazyLoader = class {
            constructor() {
                this.imageObserver = null;
                this.loadedImages = new Set();
                this.init();
            }

            init() {
                // Set placeholder src for all images to ensure they have dimensions
                this.setupPlaceholders();
                
                // Check if Intersection Observer is supported
                if ('IntersectionObserver' in window) {
                    this.imageObserver = new IntersectionObserver((entries, observer) => {
                        entries.forEach(entry => {
                            if (entry.isIntersecting) {
                                const img = entry.target;
                                if (!this.loadedImages.has(img)) {
                                    this.loadImage(img);
                                    this.loadedImages.add(img);
                                    observer.unobserve(img);
                                }
                            }
                        });
                    }, {
                        rootMargin: '150px 0px',
                        threshold: 0.1
                    });

                    this.observeImages();
                } else {
                    this.fallbackLoad();
                }
            }

            setupPlaceholders() {
                const placeholderSrc = 'data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMSIgaGVpZ2h0PSIxIiB2aWV3Qm94PSIwIDAgMSAxIiBmaWxsPSJub25lIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxyZWN0IHdpZHRoPSIxIiBoZWlnaHQ9IjEiIGZpbGw9InRyYW5zcGFyZW50Ii8+PC9zdmc+';
                
                const lazyImages = document.querySelectorAll('.lazy-image, [data-lazy]');
                lazyImages.forEach(img => {
                    if (!img.src && img.dataset.src) {
                        img.src = placeholderSrc;
                        img.classList.add('lazy-image');
                    }
                });
            }

            observeImages() {
                const lazyImages = document.querySelectorAll('.lazy-image, [data-lazy]');
                lazyImages.forEach(img => {
                    this.imageObserver.observe(img);
                });
            }

            loadImage(img) {
                if (this.loadedImages.has(img)) return;
                
                const container = img.closest('.image-container');
                const placeholder = container ? container.querySelector('.image-placeholder') : null;
                const dataSrc = img.dataset.src || img.dataset.lazy;
                
                if (!dataSrc) return;
                
                const imageLoader = new Image();
                
                imageLoader.onload = () => {
                    img.src = dataSrc;
                    img.classList.add('loaded');
                    
                    setTimeout(() => {
                        if (placeholder) {
                            placeholder.style.opacity = '0';
                            setTimeout(() => {
                                placeholder.style.display = 'none';
                            }, 300);
                        }
                    }, 100);
                };
                
                imageLoader.onerror = () => {
                    console.error('Failed to load image:', dataSrc);
                    if (placeholder) {
                        placeholder.innerHTML = '<div style="color: #999; font-size: 12px; text-align: center;">Image unavailable</div>';
                    }
                    img.classList.add('loaded');
                };
                
                imageLoader.src = dataSrc;
            }

            fallbackLoad() {
                const lazyImages = document.querySelectorAll('.lazy-image, [data-lazy]');
                lazyImages.forEach(img => {
                    this.loadImage(img);
                });
            }

            // Method to reinitialize for dynamically added content
            refresh() {
                this.setupPlaceholders();
                this.observeImages();
            }
        };

        // Initialize when DOM is ready
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', function() {
                setTimeout(() => {
                    window.lazyLoader = new GlobalLazyLoader();
                }, 100);
            });
        } else {
            setTimeout(() => {
                window.lazyLoader = new GlobalLazyLoader();
            }, 100);
        }
    </script>
    <!-- script added by client -->
    <script type='text/javascript' src='data:text/javascript;base64,LyogQWxsaSBBSSB3aWRnZXQgZm9yIGhvbWUyc3RheS5jb20gKi8KKGZ1bmN0aW9uICh3LGQscyxvLGYsanMsZmpzKSB7d1snQWxsaUpTV2lkZ2V0J109bzt3W29dID0gd1tvXSB8fCBmdW5jdGlvbiAoKSB7ICh3W29dLnEgPSB3W29dLnEgfHwgW10pLnB1c2goYXJndW1lbnRzKSB9O2pzID0gZC5jcmVhdGVFbGVtZW50KHMpLCBmanMgPSBkLmdldEVsZW1lbnRzQnlUYWdOYW1lKHMpWzBdO2pzLmlkID0gbzsganMuc3JjID0gZjsganMuYXN5bmMgPSAxOyBmanMucGFyZW50Tm9kZS5pbnNlcnRCZWZvcmUoanMsIGZqcyk7fSh3aW5kb3csIGRvY3VtZW50LCAnc2NyaXB0JywgJ2FsbGknLCAnaHR0cHM6Ly9zdGF0aWMuYWxsaWFpLmNvbS93aWRnZXQvdjEuanMnKSk7YWxsaSgnaW5pdCcsICdzaXRlX1pmeGN3SGNqSGRGS1Nyb0QnKTthbGxpKCdvcHRpbWl6ZScsICdhbGwnKTs='>
    </script>

    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-33CVH1ELP4"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-33CVH1ELP4');
</script>

</head>
<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-50">
        <!-- Navigation -->
        <x-navigation />

        <!-- Notice Bar -->
        <!-- x-notice-bar -->

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
                    <span class="text-2xl font-bold text-primary">
                        <img data-lazy="/logo/logo-light.png" alt="Home2stay Logo" class="lazy-image" style="max-height: 60px;">
                        <div class="image-placeholder" style="height: 60px; width: 200px;">
                            <div class="loading-spinner"></div>
                        </div>
                    </span>
                </a>
            </div>
                        <p class="text-gray-400 mb-4">Located in Vancouver, British Columbia, Home2stay specializes in home accessibility solutions and renovations. With over a decade of expertise in accessibility and universal design, we aim to build safe and inclusive homes and spaces for people of all ages and abilities.</p>
                        <div class="flex space-x-4">
                            <a href="https://www.facebook.com/home2stayltd" target="_blank" rel="noopener noreferrer" class="text-gray-400 hover:text-white transition-colors">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="https://x.com/home2stayltd" target="_blank" rel="noopener noreferrer" class="text-gray-400 hover:text-white transition-colors">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="https://www.linkedin.com/company/home2stay/" target="_blank" rel="noopener noreferrer" class="text-gray-400 hover:text-white transition-colors">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="https://www.instagram.com/home2stayltd/" target="_blank" rel="noopener noreferrer" class="text-gray-400 hover:text-white transition-colors">
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
                            <li><a href="{{ route('contact') }}" class="text-gray-400 hover:text-white transition-colors">Contact</a></li>
                            <li><a href="{{ route('sitemap') }}" class="text-gray-400 hover:text-white transition-colors flex items-center gap-1">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"></path>
                                </svg>
                                Sitemap
                            </a></li>
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
                            <p>&copy; {{ date('Y') }} Home2stay Accessibility Ltd. All rights reserved.</p>
                        </div>
                        
                        <!-- Right Side - Designed & Marketed By -->
                        <div class="flex items-center text-center md:text-right">
                            <span class="mr-3">Designed & Marketed By</span>
                            <a href="https://digitalpartner.ca/" target="_blank" rel="nofollow noopener noreferrer" class="hover:opacity-80 transition-opacity">
                                <img data-lazy="https://digitalpartner.ca/wp-content/uploads/2023/11/logo.png" alt="Digital Partner" class="lazy-image w-12 h-12 object-contain">
                                <div class="image-placeholder" style="height: 48px; width: 48px;">
                                    <div class="loading-spinner"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    
    <!-- Performance Optimization & Non-critical Resources -->
    <script>
        // Simple Performance Monitoring (without external dependencies)
        class SimplePerformanceMonitor {
            constructor() {
                this.metrics = {};
                this.init();
            }

            init() {
                this.trackPageLoadMetrics();
                this.preloadCriticalResources();
                this.loadNonCriticalResources();
            }

            trackPageLoadMetrics() {
                window.addEventListener('load', () => {
                    setTimeout(() => {
                        const navigation = performance.getEntriesByType('navigation')[0];
                        if (navigation) {
                            this.metrics.pageLoadTime = navigation.loadEventEnd - navigation.navigationStart;
                            this.metrics.domContentLoaded = navigation.domContentLoadedEventEnd - navigation.navigationStart;
                            this.metrics.serverResponse = navigation.responseEnd - navigation.requestStart;
                            
                            console.log('Page Performance:', {
                                'Total Load Time': Math.round(this.metrics.pageLoadTime) + 'ms',
                                'DOM Content Loaded': Math.round(this.metrics.domContentLoaded) + 'ms',
                                'Server Response': Math.round(this.metrics.serverResponse) + 'ms'
                            });
                        }
                    }, 1000);
                });
            }

            preloadCriticalResources() {
                const criticalImages = [
                    '/logo/logo-light.png',
                    '/logo/Logo-clr.png'
                ];

                criticalImages.forEach(src => {
                    const link = document.createElement('link');
                    link.rel = 'preload';
                    link.as = 'image';
                    link.href = src;
                    document.head.appendChild(link);
                });
            }

            loadNonCriticalResources() {
                window.addEventListener('load', () => {
                    // Load Font Awesome after page load
                    const fontAwesome = document.createElement('link');
                    fontAwesome.rel = 'stylesheet';
                    fontAwesome.href = 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css';
                    fontAwesome.crossOrigin = 'anonymous';
                    document.head.appendChild(fontAwesome);
                });
            }

            getReport() {
                return {
                    metrics: this.metrics,
                    suggestions: this.getSuggestions()
                };
            }

            getSuggestions() {
                const suggestions = [];
                if (this.metrics.pageLoadTime > 3000) {
                    suggestions.push('Page load time is slow. Consider optimizing images and reducing server response time.');
                }
                if (this.metrics.serverResponse > 1000) {
                    suggestions.push('Server response time is high. Consider server optimization.');
                }
                return suggestions;
            }
        }

        // Initialize performance monitor
        window.performanceMonitor = new SimplePerformanceMonitor();
    </script>
    
    <!-- Stack for additional scripts -->
    @stack('scripts')
</body>
</html>