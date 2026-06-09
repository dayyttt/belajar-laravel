<!-- TokiToki Global CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/tokitoki-global.css') }}" />

<!-- TokiToki Admin Specific CSS -->
<link rel="stylesheet" href="{{ asset('assets/admin/css/admin-global.css') }}" />

<!-- Tailwind CSS - Simplified for Laravel -->
<script src="https://cdn.tailwindcss.com"></script>
<script>
    // Suppress Tailwind CDN warning
    if (typeof console !== 'undefined' && console.warn) {
        const originalWarn = console.warn;
        console.warn = function(...args) {
            if (args[0] && typeof args[0] === 'string' && args[0].includes('cdn.tailwindcss.com should not be used in production')) {
                return; // Suppress this specific warning
            }
            originalWarn.apply(console, args);
        };
    }
</script>
<script>
    tailwind.config = {
        darkMode: 'class',
        theme: {
            extend: {
                colors: {
                    primary: '#10b981',
                    sidebar: '#047857',
                    'sidebar-accent': '#059669',
                    'sidebar-border': '#065f46'
                },
                animation: {
                    'fade-in': 'fadeIn 0.5s ease-in-out',
                    'slide-in': 'slideIn 0.3s ease-out',
                    'bounce-in': 'bounceIn 0.6s ease-out',
                    'scale-in': 'scaleIn 0.2s ease-out',
                    'spin-slow': 'spin 3s linear infinite',
                    'pulse-slow': 'pulse 3s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                },
                keyframes: {
                    fadeIn: {
                        '0%': { opacity: '0' },
                        '100%': { opacity: '1' },
                    },
                    slideIn: {
                        '0%': { transform: 'translateY(-10px)', opacity: '0' },
                        '100%': { transform: 'translateY(0)', opacity: '1' },
                    },
                    bounceIn: {
                        '0%': { transform: 'scale(0.3)', opacity: '0' },
                        '50%': { transform: 'scale(1.05)' },
                        '70%': { transform: 'scale(0.9)' },
                        '100%': { transform: 'scale(1)', opacity: '1' },
                    },
                    scaleIn: {
                        '0%': { transform: 'scale(0.9)', opacity: '0' },
                        '100%': { transform: 'scale(1)', opacity: '1' },
                    },
                },
                backdropBlur: {
                    xs: '2px',
                },
                spacing: {
                    '18': '4.5rem',
                    '88': '22rem',
                    '128': '32rem',
                },
                maxWidth: {
                    '8xl': '88rem',
                    '9xl': '96rem',
                },
                zIndex: {
                    '60': '60',
                    '70': '70',
                    '80': '80',
                    '90': '90',
                },
                transitionProperty: {
                    'height': 'height',
                    'spacing': 'margin, padding',
                }
            }
        }
    }
</script>

<!-- Animate.css for additional animations -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<!-- DataTables CSS -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.tailwindcss.min.css">

<!-- Legacy CSS Support -->
<link href="{{ asset('assets/admin/css/lib/chartist/chartist.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/admin/css/lib/owl.carousel.min.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/admin/css/lib/owl.theme.default.min.css') }}" rel="stylesheet" />



<!-- Select2 CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />

<!-- Bootstrap Stepper -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bs-stepper@1.7.0/dist/css/bs-stepper.min.css" />

<!-- Enhanced Sidebar CSS -->
<link rel="stylesheet" href="{{ asset('assets/admin/css/sidebar-enhanced.css') }}" />

<!-- Dashboard CSS -->
<link rel="stylesheet" href="{{ asset('assets/admin/css/dashboard.css') }}" />

<!-- Error Fixes CSS -->
<link rel="stylesheet" href="{{ asset('assets/admin/css/error-fixes.css') }}" />
