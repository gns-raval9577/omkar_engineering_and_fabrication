<div class="ecom-auth-container">
    {{ \Filament\Support\Facades\FilamentView::renderHook(\Filament\View\PanelsRenderHook::SIMPLE_PAGE_START, scopes: $this->getRenderHookScopes()) }}

    <!-- Left Column: Visual Showcase & Brand Highlights -->
    <div class="ecom-hero-panel">
        <div class="ecom-hero-bg" style="background-image: url('{{ asset('template/img/banner.jpg') }}');"></div>
        <div class="ecom-hero-overlay"></div>
        <div class="ecom-hero-pattern" style="background-image: url('{{ asset('template/img/dots.png') }}');"></div>

        <div class="ecom-hero-content">
            <!-- Top Tag -->
            <div class="ecom-hero-top">
                <div class="ecom-pill-badge">
                    <span class="ecom-live-indicator"></span>
                    <span class="ecom-pill-text">Omkar Industrial & Fabrication Portal</span>
                </div>
                <div class="ecom-tag-version">Admin v2.4</div>
            </div>

            <!-- Main Hero Center Message -->
            <div class="ecom-hero-center">
                <span class="ecom-hero-kicker">Precision Manufacturing • Heavy Fabrication</span>
                <h2 class="ecom-hero-headline">
                    Engineered for Scale. <br>
                    <span class="ecom-hero-gradient-text">Crafted with Precision.</span>
                </h2>
                <p class="ecom-hero-desc">
                    Centralized platform to manage industrial orders, custom CNC fabrication, laser cut inventories, and delivery logistics seamlessly.
                </p>

                <!-- Value Proposition Feature Cards -->
                <div class="ecom-features-grid">
                    <div class="ecom-feature-card">
                        <div class="ecom-feature-icon-box">
                            <svg class="ecom-svg-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                            </svg>
                        </div>
                        <div class="ecom-feature-details">
                            <h4>Catalog & Custom Orders</h4>
                            <p>Real-time inventory levels, steel stock, and client specifications.</p>
                        </div>
                    </div>

                    <div class="ecom-feature-card">
                        <div class="ecom-feature-icon-box">
                            <svg class="ecom-svg-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z" />
                            </svg>
                        </div>
                        <div class="ecom-feature-details">
                            <h4>CNC & Heavy Fabrication</h4>
                            <p>Track laser cutting, bending, assembly & automated quoting.</p>
                        </div>
                    </div>

                    <div class="ecom-feature-card">
                        <div class="ecom-feature-icon-box">
                            <svg class="ecom-svg-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                        <div class="ecom-feature-details">
                            <h4>Enterprise-Grade Security</h4>
                            <p>Multi-factor protection, encrypted logs & role permissions.</p>
                        </div>
                    </div>
                </div>

                <!-- Trust Stats Counters -->
                <div class="ecom-stats-row">
                    <div class="ecom-stat-item">
                        <div class="ecom-stat-val">1,500+</div>
                        <div class="ecom-stat-lbl">Projects Delivered</div>
                    </div>
                    <div class="ecom-stat-divider"></div>
                    <div class="ecom-stat-item">
                        <div class="ecom-stat-val">99.8%</div>
                        <div class="ecom-stat-lbl">Quality Precision</div>
                    </div>
                    <div class="ecom-stat-divider"></div>
                    <div class="ecom-stat-item">
                        <div class="ecom-stat-val">20+ Yrs</div>
                        <div class="ecom-stat-lbl">Industry Trust</div>
                    </div>
                </div>
            </div>

            <!-- Hero Bottom Quote -->
            <div class="ecom-hero-footer">
                <div class="ecom-quote-box">
                    <p class="ecom-quote-text">
                        "Delivering state-of-the-art engineering solutions and heavy structural fabrication with uncompromising standards."
                    </p>
                    <div class="ecom-quote-author">
                        <span class="ecom-author-title">Omkar Engineers & Fabricators</span>
                        <span class="ecom-rating">★★★★★ ISO 9001:2015</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Right Column: Login Portal Form -->
    <div class="ecom-form-panel">
        <!-- Top Navbar -->
        <header class="ecom-form-topbar">
            <a href="{{ route('home') }}" class="ecom-back-store-btn" title="Back to storefront">
                <svg class="ecom-nav-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
                <span>Return to Website</span>
            </a>

            <div class="ecom-support-link">
                <span>Need support?</span>
                <a href="{{ route('contact') }}">Contact Us</a>
            </div>
        </header>

        <!-- Center Form Box -->
        <div class="ecom-auth-card-wrapper">
            <div class="ecom-auth-card">
                <!-- Brand Logo & Header -->
                <div class="ecom-card-header">
                    <div class="ecom-logo-container">
                        <a href="{{ route('home') }}" title="Omkar Engineering and Fabrication">
                            <img 
                                src="{{ asset('template/img/logo-dark.png') }}" 
                                alt="Omkar Engineering and Fabrication" 
                                class="ecom-logo-image"
                            />
                        </a>
                    </div>

                    <div class="ecom-header-badge">
                        <span class="ecom-badge-dot"></span>
                        <span class="ecom-badge-text">Secure Administrator Portal</span>
                    </div>

                    <h1 class="ecom-main-title">Welcome Back</h1>
                    <p class="ecom-main-subtitle">
                        Enter your credentials to access the admin portal.
                    </p>
                </div>

                <!-- Form Content from Filament -->
                <div class="ecom-form-body">
                    {{ $this->content }}
                </div>

                <!-- Registration Option if Enabled in Filament -->
                @if (filament()->hasRegistration())
                    <div class="ecom-card-extra">
                        <span class="ecom-register-prompt">Don't have an admin account?</span>
                        <a href="{{ filament()->getRegistrationUrl() }}" class="ecom-register-link">
                            Create an account
                        </a>
                    </div>
                @endif

                <!-- Security Assurance -->
                <div class="ecom-security-notice">
                    <div class="ecom-security-badge">
                        <svg class="ecom-lock-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                        </svg>
                        <span>256-Bit SSL Encrypted Admin Gateway</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="ecom-form-footer">
            <p>© {{ date('Y') }} Omkar Engineering and Fabrication. All rights reserved.</p>
        </footer>
    </div>

    @if (! $this instanceof \Filament\Tables\Contracts\HasTable)
        <x-filament-actions::modals />
    @endif

    {{ \Filament\Support\Facades\FilamentView::renderHook(\Filament\View\PanelsRenderHook::SIMPLE_PAGE_END, scopes: $this->getRenderHookScopes()) }}
</div>

<!-- Scoped Styling for the E-Commerce Login Experience -->
<style>
    @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400&family=Outfit:wght@400;500;600;700;800&display=swap');

    :root {
        --omkar-blue: #0284c7;
        --omkar-blue-dark: #0369a1;
        --omkar-blue-glow: rgba(2, 132, 199, 0.25);
        --omkar-amber: #f59e0b;
        --omkar-amber-dark: #d97706;
        --omkar-slate-900: #0f172a;
        --omkar-slate-800: #1e293b;
        --omkar-slate-700: #334155;
        --omkar-border: #e2e8f0;
        --omkar-bg-surface: #ffffff;
    }

    /* Universal scrollbar removal */
    html, body, .omkar-login-portal-wrapper, .ecom-auth-container, .ecom-hero-panel, .ecom-form-panel {
        scrollbar-width: none !important;
        -ms-overflow-style: none !important;
    }

    *::-webkit-scrollbar {
        display: none !important;
        width: 0 !important;
        height: 0 !important;
    }

    html, body {
        height: 100% !important;
        width: 100% !important;
        margin: 0 !important;
        padding: 0 !important;
        overflow: hidden !important;
        font-family: 'Plus Jakarta Sans', system-ui, -apple-system, sans-serif !important;
        background-color: #f8fafc !important;
    }

    @media (max-width: 1023px) {
        html, body {
            overflow-y: auto !important;
            overflow-x: hidden !important;
        }
    }

    .omkar-login-portal-wrapper {
        width: 100vw;
        height: 100vh;
        max-height: 100vh;
        overflow: hidden;
        margin: 0;
        padding: 0;
    }

    @media (max-width: 1023px) {
        .omkar-login-portal-wrapper {
            height: auto;
            min-height: 100vh;
            overflow: visible;
        }
    }

    /* Main Container */
    .ecom-auth-container {
        display: flex;
        height: 100vh;
        max-height: 100vh;
        width: 100vw;
        overflow: hidden;
        background-color: #f8fafc;
        margin: 0;
        padding: 0;
    }

    @media (max-width: 1023px) {
        .ecom-auth-container {
            height: auto;
            min-height: 100vh;
            overflow: visible;
        }
    }

    /* LEFT HERO PANEL */
    .ecom-hero-panel {
        position: relative;
        display: none;
        flex-direction: column;
        justify-content: space-between;
        width: 50%;
        height: 100vh;
        max-height: 100vh;
        padding: clamp(1.25rem, 2.5vh, 2.5rem) clamp(1.5rem, 2.5vw, 3.5rem);
        color: #ffffff;
        overflow: hidden !important;
        background-color: #0b1120;
    }

    @media (min-width: 1024px) {
        .ecom-hero-panel {
            display: flex;
        }
    }

    .ecom-hero-bg {
        position: absolute;
        inset: 0;
        background-size: cover;
        background-position: center;
        transform: scale(1.04);
        filter: saturate(1.15) brightness(0.85);
        z-index: 1;
        transition: transform 10s ease-out;
    }

    .ecom-hero-panel:hover .ecom-hero-bg {
        transform: scale(1.08);
    }

    .ecom-hero-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(
            140deg,
            rgba(11, 17, 32, 0.94) 0%,
            rgba(15, 23, 42, 0.88) 45%,
            rgba(8, 28, 62, 0.95) 100%
        );
        z-index: 2;
    }

    .ecom-hero-pattern {
        position: absolute;
        inset: 0;
        opacity: 0.12;
        background-repeat: repeat;
        z-index: 3;
    }

    .ecom-hero-content {
        position: relative;
        z-index: 4;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        height: 100%;
    }

    /* Hero Top */
    .ecom-hero-top {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 1rem;
    }

    .ecom-pill-badge {
        display: inline-flex;
        align-items: center;
        gap: 0.6rem;
        padding: 0.45rem 1rem;
        border-radius: 9999px;
        background: rgba(255, 255, 255, 0.08);
        border: 1px solid rgba(255, 255, 255, 0.15);
        backdrop-filter: blur(12px);
    }

    .ecom-live-indicator {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background-color: #10b981;
        box-shadow: 0 0 10px #10b981;
        animation: ecom-pulse 2s infinite ease-in-out;
    }

    @keyframes ecom-pulse {
        0%, 100% { opacity: 1; transform: scale(1); }
        50% { opacity: 0.4; transform: scale(1.2); }
    }

    .ecom-pill-text {
        font-size: 0.825rem;
        font-weight: 600;
        letter-spacing: 0.03em;
        color: #f1f5f9;
        text-transform: uppercase;
    }

    .ecom-tag-version {
        font-size: 0.75rem;
        font-weight: 500;
        color: rgba(255, 255, 255, 0.6);
        background: rgba(0, 0, 0, 0.25);
        padding: 0.25rem 0.65rem;
        border-radius: 6px;
        border: 1px solid rgba(255, 255, 255, 0.08);
    }

    /* Hero Center */
    .ecom-hero-center {
        margin: clamp(0.6rem, 1.5vh, 1.25rem) 0;
    }

    .ecom-hero-kicker {
        display: inline-block;
        font-size: 0.75rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.1em;
        color: #38bdf8;
        margin-bottom: 0.35rem;
    }

    .ecom-hero-headline {
        font-family: 'Outfit', sans-serif;
        font-size: clamp(1.75rem, 2.3vw, 2.4rem);
        line-height: 1.15;
        font-weight: 800;
        letter-spacing: -0.02em;
        margin: 0 0 0.5rem 0;
        color: #ffffff;
    }

    .ecom-hero-gradient-text {
        background: linear-gradient(135deg, #38bdf8 0%, #f59e0b 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .ecom-hero-desc {
        font-size: clamp(0.825rem, 0.95vw, 0.925rem);
        line-height: 1.45;
        color: #cbd5e1;
        max-width: 32rem;
        margin: 0 0 0.85rem 0;
    }

    /* Feature Cards */
    .ecom-features-grid {
        display: flex;
        flex-direction: column;
        gap: 0.45rem;
        max-width: 32rem;
        margin-bottom: 0.85rem;
    }

    .ecom-feature-card {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        padding: 0.5rem 0.85rem;
        background: rgba(255, 255, 255, 0.05);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 10px;
        backdrop-filter: blur(10px);
        transition: all 0.25s ease;
    }

    .ecom-feature-card:hover {
        background: rgba(255, 255, 255, 0.09);
        border-color: rgba(56, 189, 248, 0.35);
        transform: translateX(4px);
    }

    .ecom-feature-icon-box {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 30px;
        height: 30px;
        border-radius: 8px;
        background: linear-gradient(135deg, rgba(2, 132, 199, 0.35) 0%, rgba(245, 158, 11, 0.25) 100%);
        border: 1px solid rgba(255, 255, 255, 0.15);
        flex-shrink: 0;
        color: #38bdf8;
    }

    .ecom-svg-icon {
        width: 16px;
        height: 16px;
    }

    .ecom-feature-details h4 {
        margin: 0;
        font-size: 0.85rem;
        font-weight: 700;
        color: #ffffff;
    }

    .ecom-feature-details p {
        margin: 0;
        font-size: 0.75rem;
        color: #94a3b8;
        line-height: 1.35;
    }

    /* Stats Row */
    .ecom-stats-row {
        display: flex;
        align-items: center;
        gap: 1rem;
        padding: 0.55rem 1rem;
        background: rgba(15, 23, 42, 0.7);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 10px;
        max-width: 32rem;
    }

    .ecom-stat-item {
        flex: 1;
    }

    .ecom-stat-val {
        font-family: 'Outfit', sans-serif;
        font-size: 1.25rem;
        font-weight: 800;
        color: #38bdf8;
        line-height: 1;
        margin-bottom: 0.15rem;
    }

    .ecom-stat-lbl {
        font-size: 0.675rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.05em;
        color: #94a3b8;
    }

    .ecom-stat-divider {
        width: 1px;
        height: 24px;
        background: rgba(255, 255, 255, 0.15);
    }

    /* Hero Footer Quote */
    .ecom-hero-footer {
        border-top: 1px solid rgba(255, 255, 255, 0.1);
        padding-top: 0.75rem;
    }

    .ecom-quote-box {
        display: flex;
        flex-direction: column;
        gap: 0.25rem;
    }

    .ecom-quote-text {
        font-style: italic;
        font-size: 0.8rem;
        line-height: 1.4;
        color: #cbd5e1;
        margin: 0;
    }

    .ecom-quote-author {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 1rem;
    }

    .ecom-author-title {
        font-size: 0.775rem;
        font-weight: 600;
        color: #38bdf8;
    }

    .ecom-rating {
        font-size: 0.725rem;
        font-weight: 700;
        color: #fbbf24;
        letter-spacing: 0.05em;
    }

    /* RIGHT FORM PANEL */
    .ecom-form-panel {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        align-items: center;
        flex: 1;
        width: 50%;
        height: 100vh;
        max-height: 100vh;
        padding: clamp(0.75rem, 1.5vh, 1.75rem) clamp(1rem, 2vw, 2.5rem);
        background: radial-gradient(circle at 100% 0%, #f1f5f9 0%, #ffffff 70%);
        overflow: hidden !important;
        overflow-y: hidden !important;
        overflow-x: hidden !important;
        scrollbar-width: none !important;
        -ms-overflow-style: none !important;
    }

    .ecom-form-panel::-webkit-scrollbar {
        display: none !important;
        width: 0 !important;
        height: 0 !important;
    }

    @media (max-width: 1023px) {
        .ecom-form-panel {
            width: 100% !important;
            height: auto !important;
            min-height: 100vh !important;
            overflow-y: auto !important;
            overflow-x: hidden !important;
        }
    }

    /* Top Bar */
    .ecom-form-topbar {
        display: flex;
        align-items: center;
        justify-content: space-between;
        width: 100%;
        max-width: 460px;
        margin: 0 auto 0.75rem auto;
    }

    .ecom-back-store-btn {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        font-size: 0.85rem;
        font-weight: 600;
        color: #475569;
        text-decoration: none;
        padding: 0.5rem 0.9rem;
        border-radius: 10px;
        background: #ffffff;
        border: 1px solid #e2e8f0;
        transition: all 0.2s ease;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.04);
    }

    .ecom-back-store-btn:hover {
        color: var(--omkar-blue);
        border-color: var(--omkar-blue);
        background: #f0f9ff;
        transform: translateX(-3px);
    }

    .ecom-nav-icon {
        width: 16px;
        height: 16px;
    }

    .ecom-support-link {
        font-size: 0.825rem;
        color: #64748b;
    }

    .ecom-support-link a {
        font-weight: 600;
        color: var(--omkar-blue);
        text-decoration: none;
        margin-left: 0.25rem;
    }

    .ecom-support-link a:hover {
        text-decoration: underline;
    }

    /* Card Wrapper */
    .ecom-auth-card-wrapper {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
        margin: auto 0;
        padding: 1rem 0;
    }

    .ecom-auth-card {
        width: 100%;
        max-width: 460px;
        background: #ffffff;
        border: 1px solid #e2e8f0;
        border-radius: 20px;
        padding: clamp(1.25rem, 2.2vh, 2rem) clamp(1.25rem, 2vw, 2.25rem);
        box-shadow: 
            0 10px 15px -3px rgba(0, 0, 0, 0.04),
            0 25px 35px -5px rgba(2, 132, 199, 0.06),
            0 0 0 1px rgba(0, 0, 0, 0.02);
        transition: all 0.3s ease;
    }

    /* Card Header & Brand Logo */
    .ecom-card-header {
        text-align: center;
        margin-bottom: 1.15rem;
    }

    .ecom-logo-container {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 0.85rem;
    }

    .ecom-logo-image {
        height: auto;
        max-height: 48px;
        width: auto;
        max-width: 220px;
        object-fit: contain;
        transition: transform 0.3s ease;
    }

    .ecom-logo-image:hover {
        transform: scale(1.03);
    }

    .ecom-header-badge {
        display: inline-flex;
        align-items: center;
        gap: 0.45rem;
        padding: 0.25rem 0.75rem;
        border-radius: 9999px;
        background: #f0f9ff;
        border: 1px solid #bae6fd;
        margin-bottom: 0.65rem;
    }

    .ecom-badge-dot {
        width: 6px;
        height: 6px;
        border-radius: 50%;
        background-color: var(--omkar-blue);
    }

    .ecom-badge-text {
        font-size: 0.7rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.06em;
        color: var(--omkar-blue-dark);
    }

    .ecom-main-title {
        font-family: 'Outfit', sans-serif;
        font-size: 1.7rem;
        font-weight: 800;
        letter-spacing: -0.02em;
        color: #0f172a;
        margin: 0 0 0.35rem 0;
        line-height: 1.2;
    }

    .ecom-main-subtitle {
        font-size: 0.825rem;
        line-height: 1.45;
        color: #64748b;
        margin: 0;
    }

    /* Form Body Enhancements */
    .ecom-form-body {
        margin-bottom: 1rem;
    }

    /* Target Filament Form Elements inside our Card */
    .ecom-form-body form {
        display: flex;
        flex-direction: column;
        gap: 0.85rem;
    }

    /* Input Wrappers */
    .ecom-form-body .fi-input-wrp {
        border-radius: 12px !important;
        border: 1.5px solid #cbd5e1 !important;
        background-color: #ffffff !important;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.03) !important;
        transition: all 0.2s cubic-bezier(0.4, 0, 0.2, 1) !important;
    }

    .ecom-form-body .fi-input-wrp:focus-within {
        border-color: var(--omkar-blue) !important;
        box-shadow: 0 0 0 4px rgba(2, 132, 199, 0.15) !important;
    }

    .ecom-form-body .fi-input {
        font-size: 0.95rem !important;
        padding: 0.75rem 1rem !important;
        color: #0f172a !important;
    }

    .ecom-form-body .fi-fo-field-wrp-label label {
        font-size: 0.875rem !important;
        font-weight: 600 !important;
        color: #1e293b !important;
        margin-bottom: 0.35rem !important;
    }

    /* Checkbox & Links */
    .ecom-form-body .fi-checkbox-input {
        border-radius: 6px !important;
        border: 1.5px solid #cbd5e1 !important;
        color: var(--omkar-blue) !important;
    }

    .ecom-form-body .fi-checkbox-input:focus {
        ring-color: var(--omkar-blue) !important;
    }

    .ecom-form-body a,
    .ecom-link {
        font-size: 0.825rem !important;
        font-weight: 600 !important;
        color: var(--omkar-blue) !important;
        text-decoration: none !important;
        transition: color 0.2s ease !important;
    }

    .ecom-form-body a:hover,
    .ecom-link:hover {
        color: var(--omkar-blue-dark) !important;
        text-decoration: underline !important;
    }

    /* Submit Button - E-Commerce High Conversion Button */
    .ecom-form-body .fi-btn,
    .ecom-form-body button[type="submit"] {
        width: 100% !important;
        padding: 0.85rem 1.5rem !important;
        border-radius: 12px !important;
        font-family: 'Plus Jakarta Sans', sans-serif !important;
        font-size: 0.95rem !important;
        font-weight: 700 !important;
        letter-spacing: 0.02em !important;
        background: linear-gradient(135deg, #0284c7 0%, #0369a1 100%) !important;
        color: #ffffff !important;
        border: none !important;
        box-shadow: 0 4px 14px rgba(2, 132, 199, 0.35) !important;
        cursor: pointer !important;
        transition: all 0.25s cubic-bezier(0.4, 0, 0.2, 1) !important;
        display: inline-flex !important;
        align-items: center !important;
        justify-content: center !important;
        gap: 0.5rem !important;
    }

    .ecom-form-body .fi-btn:hover,
    .ecom-form-body button[type="submit"]:hover {
        background: linear-gradient(135deg, #0369a1 0%, #075985 100%) !important;
        box-shadow: 0 8px 20px rgba(2, 132, 199, 0.45) !important;
        transform: translateY(-2px) !important;
    }

    .ecom-form-body .fi-btn:active,
    .ecom-form-body button[type="submit"]:active {
        transform: translateY(0) !important;
        box-shadow: 0 2px 6px rgba(2, 132, 199, 0.25) !important;
    }

    /* Extra actions / Register */
    .ecom-card-extra {
        text-align: center;
        padding: 1.15rem 0 0 0;
        margin-top: 1rem;
        border-top: 1px dashed #e2e8f0;
        font-size: 0.85rem;
    }

    .ecom-register-prompt {
        color: #64748b;
    }

    .ecom-register-link {
        color: var(--omkar-blue);
        font-weight: 700;
        text-decoration: none;
        margin-left: 0.35rem;
    }

    .ecom-register-link:hover {
        text-decoration: underline;
    }

    /* Security Notice */
    .ecom-security-notice {
        margin-top: 0.85rem;
        padding: 0.5rem 0.85rem;
        background-color: #f8fafc;
        border: 1px solid #f1f5f9;
        border-radius: 10px;
        text-align: center;
    }

    .ecom-security-badge {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 0.45rem;
        font-size: 0.75rem;
        font-weight: 700;
        color: #334155;
        margin-bottom: 0.15rem;
    }

    .ecom-lock-icon {
        width: 14px;
        height: 14px;
        color: #10b981;
    }

    .ecom-security-sub {
        font-size: 0.7rem;
        color: #94a3b8;
        margin: 0;
    }

    /* Footer */
    .ecom-form-footer {
        text-align: center;
        margin-top: 0.75rem;
    }

    .ecom-form-footer p {
        font-size: 0.75rem;
        color: #94a3b8;
        margin: 0;
    }

    /* Laptop & Short Screens Optimization */
    @media (min-width: 1024px) and (max-height: 850px), (min-width: 1024px) and (max-width: 1280px) {
        .ecom-hero-headline {
            font-size: 2.15rem !important;
            margin-bottom: 0.65rem !important;
        }

        .ecom-hero-center {
            margin: 1.25rem 0 !important;
        }

        .ecom-hero-desc {
            font-size: 0.925rem !important;
            margin-bottom: 1.25rem !important;
            line-height: 1.5 !important;
        }

        .ecom-features-grid {
            gap: 0.6rem !important;
            margin-bottom: 1.25rem !important;
        }

        .ecom-feature-card {
            padding: 0.65rem 0.85rem !important;
        }

        .ecom-feature-icon-box {
            width: 32px !important;
            height: 32px !important;
        }

        .ecom-svg-icon {
            width: 16px !important;
            height: 16px !important;
        }

        .ecom-feature-details h4 {
            font-size: 0.875rem !important;
        }

        .ecom-feature-details p {
            font-size: 0.775rem !important;
        }

        .ecom-stats-row {
            padding: 0.75rem 1rem !important;
        }

        .ecom-stat-val {
            font-size: 1.2rem !important;
        }

        .ecom-hero-footer {
            padding-top: 1rem !important;
        }

        .ecom-auth-card {
            padding: 1.85rem 1.85rem !important;
        }

        .ecom-card-header {
            margin-bottom: 1.35rem !important;
        }

        .ecom-logo-container {
            margin-bottom: 1rem !important;
        }

        .ecom-logo-image {
            max-height: 48px !important;
        }

        .ecom-main-title {
            font-size: 1.65rem !important;
        }
    }

    /* Tablet & Small Desktop (640px to 1023px) */
    @media (min-width: 640px) and (max-width: 1023px) {
        .ecom-form-panel {
            padding: 3rem 2rem !important;
            background: radial-gradient(circle at 50% 20%, #e0f2fe 0%, #f8fafc 80%) !important;
        }

        .ecom-auth-card {
            max-width: 480px !important;
            margin: auto !important;
            padding: 2.75rem 2.5rem !important;
        }
    }

    /* Mobile specific adjustments (max-width: 639px) */
    @media (max-width: 639px) {
        .ecom-form-panel {
            padding: 1.5rem 1.15rem !important;
        }

        .ecom-auth-card {
            border: none !important;
            box-shadow: none !important;
            padding: 1rem 0 !important;
            background: transparent !important;
        }

        .ecom-main-title {
            font-size: 1.65rem !important;
        }
    }

    /* Small Mobile Phones (max-width: 480px) */
    @media (max-width: 480px) {
        .ecom-form-panel {
            padding: 1.25rem 0.85rem !important;
        }

        .ecom-form-topbar {
            flex-direction: column-reverse !important;
            align-items: stretch !important;
            gap: 0.65rem !important;
            margin-bottom: 1.25rem !important;
        }

        .ecom-back-store-btn {
            justify-content: center !important;
            width: 100% !important;
        }

        .ecom-support-link {
            text-align: center !important;
        }

        .ecom-logo-image {
            max-height: 46px !important;
        }

        .ecom-main-title {
            font-size: 1.5rem !important;
        }

        .ecom-main-subtitle {
            font-size: 0.825rem !important;
        }
    }
</style>
