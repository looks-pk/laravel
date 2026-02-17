<style>

    /* ════════════════════════════════
       COOKIE POPUP
    ════════════════════════════════ */
    #cookie-banner {
      position: fixed;
      bottom: 28px;
      left: 50%;
      transform: translateX(-50%);
      width: calc(100% - 48px);
      max-width: 860px;

      /* Home2stay dark charcoal – matches their nav/footer */
      background: #1e2a35;
      border-radius: 14px;
      box-shadow: 0 8px 40px rgba(0, 0, 0, 0.35);

      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 20px;
      padding: 22px 28px;

      /* Slide up animation */
      animation: slideUp 0.45s cubic-bezier(0.22, 1, 0.36, 1) both;
      z-index: 9999;
    }

    @keyframes slideUp {
      from { opacity: 0; transform: translateX(-50%) translateY(30px); }
      to   { opacity: 1; transform: translateX(-50%) translateY(0); }
    }

    /* Hidden state */
    #cookie-banner.hidden {
      animation: slideDown 0.35s ease forwards;
    }

    @keyframes slideDown {
      to { opacity: 0; transform: translateX(-50%) translateY(40px); pointer-events: none; }
    }

    /* ── Text area ── */
    .cookie-text {
      flex: 1;
      color: rgba(255, 255, 255, 0.88);
      font-size: 15px;
      font-weight: 400;
      line-height: 1.65;
    }

    .cookie-text a {
      color: #4ab3f4;
      font-weight: 600;
      text-decoration: underline;
      text-underline-offset: 2px;
      transition: color 0.2s;
    }

    .cookie-text a:hover {
      color: #79ccff;
    }

    /* ── Buttons area ── */
    .cookie-actions {
      display: flex;
      align-items: center;
      gap: 12px;
      flex-shrink: 0;
    }

    /* Learn More / Accept button — matches Home2stay's blue CTA */
    .btn-accept {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      background: #1a6ec3;
      color: #fff;
      font-family: 'Nunito', sans-serif;
      font-size: 15px;
      font-weight: 700;
      padding: 11px 22px;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      white-space: nowrap;
      transition: background 0.2s, transform 0.15s;
    }

    .btn-accept:hover {
      background: #155fa8;
      transform: translateY(-1px);
    }

    .btn-accept svg {
      transition: transform 0.2s;
    }

    .btn-accept:hover svg {
      transform: translateX(3px);
    }

    /* Decline / close — ghost style */
    .btn-close {
      background: none;
      border: none;
      color: rgba(255, 255, 255, 0.55);
      font-size: 22px;
      line-height: 1;
      cursor: pointer;
      padding: 4px 6px;
      border-radius: 6px;
      transition: color 0.2s, background 0.2s;
    }

    .btn-close:hover {
      color: #fff;
      background: rgba(255,255,255,0.1);
    }

    /* ── Mobile ── */
    @media (max-width: 600px) {
      #cookie-banner {
        flex-direction: column;
        align-items: flex-start;
        bottom: 16px;
        padding: 20px 20px 18px;
      }

      .cookie-actions {
        width: 100%;
        justify-content: space-between;
      }

      .btn-accept {
        flex: 1;
        justify-content: center;
      }
    }
  </style>

  <!-- ════ COOKIE BANNER ════ -->
  <div id="cookie-banner" role="dialog" aria-label="Cookie consent">

    <p class="cookie-text">
      We use cookies to personalize content and to analyze our website traffic.
      For more information about cookies, visit our
      <a href="/privacy-policy">Privacy Policy</a>.
    </p>

    <div class="cookie-actions">
      <button class="btn-accept" onclick="acceptCookies()">
        Learn more
        <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
          <path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </button>

      <!-- X close button -->
      <button class="btn-close" onclick="dismissCookies()" aria-label="Close cookie banner">
        &#x2715;
      </button>
    </div>

  </div>

  <script>
    // Accept — could redirect to privacy policy or set a cookie preference
    function acceptCookies() {
      localStorage.setItem('h2s_cookie_consent', 'accepted');
      hideBanner();
      window.location.href = '/privacy-policy'; // uncomment to redirect
    }

    // Dismiss without full acceptance
    function dismissCookies() {
      localStorage.setItem('h2s_cookie_consent', 'dismissed');
      hideBanner();
    }

    function hideBanner() {
      const banner = document.getElementById('cookie-banner');
      banner.classList.add('hidden');
      setTimeout(() => banner.remove(), 400);
    }

    // Don't show again if already answered
    window.addEventListener('DOMContentLoaded', () => {
      const consent = localStorage.getItem('h2s_cookie_consent');
      if (consent) {
        document.getElementById('cookie-banner').remove();
      }
    });
  </script>