@props([
    'imageSrc' => '/notice/1.jpg',
    'phoneNumber' => '+16042591211',
    'email' => 'info@home2stay.com',
    'show' => true
])

@if($show)
<div id="noticeBanner" class="notice-banner-overlay" style="display: none;">
    <div class="notice-banner-container">
        <!-- Close Button -->
        <button class="notice-banner-close" onclick="closeNoticeBanner()" aria-label="Close banner">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>

        <!-- Banner Image -->
        <div class="notice-banner-image-wrapper">
            <img src="{{ $imageSrc }}" alt="Notice Banner" class="notice-banner-image">
        </div>

        <!-- Action Buttons -->
        <div class="notice-banner-actions">
            <a href="tel:{{ $phoneNumber }}" class="notice-banner-btn notice-banner-btn-call">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                </svg>
                Call Now
            </a>
            <a href="mailto:{{ $email }}" class="notice-banner-btn notice-banner-btn-email">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
                Email Us
            </a>
        </div>
    </div>
</div>

<style>
    .notice-banner-overlay {
        position: fixed;
        bottom: 0;
        left: 0;
        right: 0;
        z-index: 9999;
        background-color: rgba(0, 0, 0, 0.5);
        backdrop-filter: blur(2px);
        padding: 1rem;
        animation: fadeInSlideUp 0.4s ease-out;
    }

    @keyframes fadeInSlideUp {
        from {
            opacity: 0;
            transform: translateY(100%);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fadeOutSlideDown {
        from {
            opacity: 1;
            transform: translateY(0);
        }
        to {
            opacity: 0;
            transform: translateY(100%);
        }
    }

    .notice-banner-overlay.closing {
        animation: fadeOutSlideDown 0.3s ease-in forwards;
    }

    .notice-banner-container {
        position: relative;
        max-width: 600px;
        margin: 0 auto;
        background: white;
        border-radius: 12px;
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        overflow: hidden;
    }

    .notice-banner-close {
        position: absolute;
        top: 0.75rem;
        right: 0.75rem;
        z-index: 10;
        background-color: rgba(0, 0, 0, 0.7);
        color: white;
        border: none;
        border-radius: 50%;
        width: 36px;
        height: 36px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .notice-banner-close:hover {
        background-color: rgba(0, 0, 0, 0.9);
        transform: rotate(90deg);
    }

    .notice-banner-image-wrapper {
        width: 100%;
        max-height: 400px;
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #f9fafb;
    }

    .notice-banner-image {
        width: 100%;
        height: auto;
        display: block;
        object-fit: contain;
    }

    .notice-banner-actions {
        display: flex;
        gap: 1rem;
        padding: 1.5rem;
        background-color: #f9fafb;
    }

    .notice-banner-btn {
        flex: 1;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 0.5rem;
        padding: 0.875rem 1.5rem;
        border-radius: 8px;
        font-weight: 600;
        font-size: 0.95rem;
        text-decoration: none;
        transition: all 0.3s ease;
        border: 2px solid transparent;
    }

    .notice-banner-btn-call {
        background: linear-gradient(135deg, #0078bf 0%, #005f96 100%);
        color: white;
    }

    .notice-banner-btn-call:hover {
        background: linear-gradient(135deg, #005f96 0%, #004872 100%);
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0, 120, 191, 0.3);
    }

    .notice-banner-btn-email {
        background: linear-gradient(135deg, #f8b301 0%, #d99a00 100%);
        color: #2d3748;
    }

    .notice-banner-btn-email:hover {
        background: linear-gradient(135deg, #d99a00 0%, #b88200 100%);
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(248, 179, 1, 0.3);
    }

    /* Responsive Design */
    @media (max-width: 640px) {
        .notice-banner-overlay {
            padding: 0.5rem;
        }

        .notice-banner-actions {
            flex-direction: column;
            padding: 1rem;
        }

        .notice-banner-btn {
            width: 100%;
        }

        .notice-banner-image-wrapper {
            max-height: 300px;
        }
    }
</style>

<script>
    // Show banner after page loads
    document.addEventListener('DOMContentLoaded', function() {
        // Check if banner was previously closed in this session
        const bannerClosed = sessionStorage.getItem('noticeBannerClosed');
        
        if (!bannerClosed) {
            // Show banner after a short delay
            setTimeout(function() {
                const banner = document.getElementById('noticeBanner');
                if (banner) {
                    banner.style.display = 'block';
                }
            }, 1000);
        }
    });

    function closeNoticeBanner() {
        const banner = document.getElementById('noticeBanner');
        if (banner) {
            banner.classList.add('closing');
            
            // Wait for animation to complete before hiding
            setTimeout(function() {
                banner.style.display = 'none';
                // Remember that user closed the banner for this session
                sessionStorage.setItem('noticeBannerClosed', 'true');
            }, 300);
        }
    }

    // Close banner when clicking outside the container
    document.addEventListener('click', function(event) {
        const banner = document.getElementById('noticeBanner');
        const container = banner?.querySelector('.notice-banner-container');
        
        if (banner && event.target === banner && !container?.contains(event.target)) {
            closeNoticeBanner();
        }
    });

    // Close banner with Escape key
    document.addEventListener('keydown', function(event) {
        if (event.key === 'Escape') {
            const banner = document.getElementById('noticeBanner');
            if (banner && banner.style.display === 'block') {
                closeNoticeBanner();
            }
        }
    });
</script>
@endif
