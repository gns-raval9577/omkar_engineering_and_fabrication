<div id="omkar-global-loader-container" aria-hidden="true">
    <!-- Centered Modal Spinner Overlay (Only active for major actions, never for typing/moving) -->
    <div id="omkar-spinner-overlay" style="
        position: fixed;
        inset: 0;
        z-index: 999999;
        display: flex;
        align-items: center;
        justify-content: center;
        background: rgba(15, 23, 42, 0.40);
        backdrop-filter: blur(4px);
        -webkit-backdrop-filter: blur(4px);
        opacity: 0;
        visibility: hidden;
        pointer-events: none;
        transition: opacity 0.2s ease, visibility 0.2s ease;
    ">
        <!-- Floating Glassmorphic Spinner Card -->
        <div id="omkar-spinner-card" style="
            background: #ffffff;
            border: 1px solid rgba(14, 165, 233, 0.25);
            box-shadow: 0 20px 45px -10px rgba(2, 132, 199, 0.28), 0 10px 20px -5px rgba(0, 0, 0, 0.15);
            border-radius: 20px;
            padding: 24px 36px;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 14px;
            transform: scale(0.92);
            transition: transform 0.22s cubic-bezier(0.16, 1, 0.3, 1);
            min-width: 170px;
        ">
            <!-- Dual-Ring Azure Brand Spinner -->
            <div style="position: relative; width: 50px; height: 50px;">
                <!-- Outer Track Ring -->
                <div style="
                    position: absolute;
                    inset: 0;
                    border-radius: 50%;
                    border: 3.5px solid rgba(14, 165, 233, 0.15);
                "></div>
                <!-- Outer Rotating Ring -->
                <div style="
                    position: absolute;
                    inset: 0;
                    border-radius: 50%;
                    border: 3.5px solid transparent;
                    border-top-color: #0284c7;
                    border-right-color: #0ea5e9;
                    animation: omkar-spin-fast 0.8s cubic-bezier(0.4, 0, 0.2, 1) infinite;
                "></div>
                <!-- Inner Reverse Ring -->
                <div style="
                    position: absolute;
                    inset: 7px;
                    border-radius: 50%;
                    border: 2.5px solid transparent;
                    border-bottom-color: #38bdf8;
                    animation: omkar-spin-reverse 1.1s linear infinite;
                "></div>
                <!-- Center Glowing Brand Dot -->
                <div style="
                    position: absolute;
                    top: 50%;
                    left: 50%;
                    width: 7px;
                    height: 7px;
                    margin-top: -3.5px;
                    margin-left: -3.5px;
                    background: #0284c7;
                    border-radius: 50%;
                    box-shadow: 0 0 8px #0ea5e9;
                    animation: omkar-pulse 1.2s ease-in-out infinite;
                "></div>
            </div>

            <!-- Status Text -->
            <div style="text-align: center;">
                <div id="omkar-spinnerText" style="
                    font-family: inherit;
                    font-size: 13.5px;
                    font-weight: 600;
                    color: #0f172a;
                    letter-spacing: -0.01em;
                ">Processing...</div>
                <div style="
                    font-family: inherit;
                    font-size: 11px;
                    color: #64748b;
                    margin-top: 2px;
                ">Please wait</div>
            </div>
        </div>
    </div>
</div>

<style>
    @keyframes omkar-spin-fast {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }
    @keyframes omkar-spin-reverse {
        0% { transform: rotate(360deg); }
        100% { transform: rotate(-360deg); }
    }
    @keyframes omkar-pulse {
        0%, 100% { transform: scale(0.85); opacity: 0.7; }
        50% { transform: scale(1.3); opacity: 1; }
    }
    :is(.dark) #omkar-spinner-card {
        background: #1e293b !important;
        border-color: rgba(56, 189, 248, 0.25) !important;
        box-shadow: 0 20px 45px -10px rgba(0, 0, 0, 0.6) !important;
    }
    :is(.dark) #omkar-spinner-card #omkar-spinnerText {
        color: #f8fafc !important;
    }
</style>

<script>
    (function() {
        if (window.OmkarLoader) return;

        let activeRequests = 0;
        let spinnerTimeout = null;
        let isVisible = false;

        const overlay = document.getElementById('omkar-spinner-overlay');
        const card = document.getElementById('omkar-spinner-card');

        window.OmkarLoader = {
            start: function(customText) {
                activeRequests++;

                if (customText) {
                    const textEl = document.getElementById('omkar-spinnerText');
                    if (textEl) textEl.textContent = customText;
                }

                if (!spinnerTimeout && !isVisible) {
                    spinnerTimeout = setTimeout(() => {
                        if (activeRequests > 0 && overlay) {
                            isVisible = true;
                            overlay.style.visibility = 'visible';
                            overlay.style.opacity = '1';
                            if (card) card.style.transform = 'scale(1)';
                        }
                    }, 100);
                }
            },

            done: function() {
                activeRequests = Math.max(0, activeRequests - 1);

                if (activeRequests === 0) {
                    if (spinnerTimeout) {
                        clearTimeout(spinnerTimeout);
                        spinnerTimeout = null;
                    }

                    if (overlay && isVisible) {
                        isVisible = false;
                        overlay.style.opacity = '0';
                        if (card) card.style.transform = 'scale(0.92)';
                        setTimeout(() => {
                            if (activeRequests === 0) {
                                overlay.style.visibility = 'hidden';
                            }
                        }, 200);
                    }
                }
            }
        };

        // Determine if a Livewire payload represents a major action (form submit, delete, restore, tab change)
        // Returns FALSE for simple keystrokes, blur events, or field value syncing
        function isMajorLivewireAction(payload) {
            if (!payload || !payload.components) return false;

            for (const comp of payload.components) {
                // If there are file uploads in progress, show loader
                if (comp.uploads && comp.uploads.length > 0) {
                    return true;
                }

                const calls = comp.calls || [];
                for (const call of calls) {
                    const method = call.method || '';

                    // 1. Form submit actions (Create product, Edit product, Save)
                    if (['create', 'save', 'submit', 'createAnother'].includes(method)) {
                        return true;
                    }

                    // 2. Filament Table / Record Actions (Delete, Restore, Force Delete, View)
                    if (['callMountedAction', 'mountAction', 'callMountedTableAction', 'mountTableAction'].includes(method)) {
                        return true;
                    }

                    // 3. Tab switching ('All Products' vs 'Archived')
                    if (method === '$set' && Array.isArray(call.params) && call.params[0] === 'activeTab') {
                        return true;
                    }

                    // 4. Table Pagination or Sorting
                    if (['sortTable', 'previousPage', 'nextPage', 'gotoPage'].includes(method)) {
                        return true;
                    }
                }
            }

            // Keystrokes, field blur, live slug generation, and cursor movements are IGNORED
            return false;
        }

        // Prevent default browser HTML5 popups ("Please fill out this field") so Filament renders proper inline validation messages
        function disableHtml5Validation() {
            document.querySelectorAll('form').forEach(form => {
                if (!form.hasAttribute('novalidate')) {
                    form.setAttribute('novalidate', 'novalidate');
                }
            });
        }

        document.addEventListener('DOMContentLoaded', disableHtml5Validation);

        // Livewire Hooks
        document.addEventListener('livewire:init', () => {
            disableHtml5Validation();

            if (window.Livewire) {
                Livewire.hook('request', ({ uri, options, payload, respond, succeed, fail }) => {
                    // Only show spinner for major actions, NEVER for input typing or field movement!
                    if (isMajorLivewireAction(payload)) {
                        window.OmkarLoader.start('Processing...');
                        respond(() => window.OmkarLoader.done());
                        succeed(() => window.OmkarLoader.done());
                        fail(() => window.OmkarLoader.done());
                    }
                });

                Livewire.hook('morph.updated', () => {
                    disableHtml5Validation();
                });
            }
        });
    })();
</script>
