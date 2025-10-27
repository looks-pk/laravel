@props([
    'imageSrc' => '/notice/1.jpg',
    'phoneNumber' => '+16042591211',
    'email' => 'info@home2stay.com',
    'show' => true
])

@if($show)
<div id="noticeBar" class="notice-bar-wrapper">
    <div class="notice-bar-container">
        <div class="notice-bar-content">
            <!-- Banner Image -->
            <div class="notice-bar-image-wrapper">
                <img src="{{ $imageSrc }}" alt="Notice" class="notice-bar-image">
            </div>

            <!-- Action Buttons -->
            <div class="notice-bar-actions">
                <a href="tel:{{ $phoneNumber }}" class="notice-bar-btn notice-bar-btn-call">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                    Call Now
                </a>
                <a href="mailto:{{ $email }}" class="notice-bar-btn notice-bar-btn-email">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    Email Us
                </a>
            </div>
        </div>
    </div>
</div>

<style>
    .notice-bar-wrapper {
        width: 100%;
        background: linear-gradient(135deg, #f9fafb 0%, #ffffff 100%);
        border-bottom: 2px solid #e5e7eb;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
    }

    .notice-bar-container {
        position: relative;
        max-width: 1200px;
        margin: 0 auto;
        padding: 1.5rem;
    }

    .notice-bar-content {
        display: flex;
        align-items: center;
        gap: 2rem;
        flex-wrap: wrap;
        justify-content: center;
    }

    .notice-bar-image-wrapper {
        flex: 0 0 auto;
        max-width: 500px;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .notice-bar-image {
        width: 100%;
        height: auto;
        display: block;
        border-radius: 8px;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
    }

    .notice-bar-actions {
        display: flex;
        gap: 1rem;
        flex-wrap: wrap;
        justify-content: center;
    }

    .notice-bar-btn {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 0.5rem;
        padding: 0.875rem 1.75rem;
        border-radius: 8px;
        font-weight: 600;
        font-size: 0.95rem;
        text-decoration: none;
        transition: all 0.3s ease;
        border: 2px solid transparent;
        white-space: nowrap;
    }

    .notice-bar-btn-call {
        background: linear-gradient(135deg, #0078bf 0%, #005f96 100%);
        color: white;
    }

    .notice-bar-btn-call:hover {
        background: linear-gradient(135deg, #005f96 0%, #004872 100%);
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0, 120, 191, 0.3);
    }

    .notice-bar-btn-email {
        background: linear-gradient(135deg, #f8b301 0%, #d99a00 100%);
        color: #2d3748;
    }

    .notice-bar-btn-email:hover {
        background: linear-gradient(135deg, #d99a00 0%, #b88200 100%);
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(248, 179, 1, 0.3);
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .notice-bar-container {
            padding: 1rem;
        }

        .notice-bar-content {
            flex-direction: column;
            gap: 1.5rem;
        }

        .notice-bar-image-wrapper {
            max-width: 100%;
        }

        .notice-bar-actions {
            width: 100%;
            flex-direction: column;
        }

        .notice-bar-btn {
            width: 100%;
        }
    }

    @media (min-width: 769px) and (max-width: 1024px) {
        .notice-bar-content {
            gap: 1.5rem;
        }

        .notice-bar-image-wrapper {
            max-width: 400px;
        }
    }
</style>

@endif
