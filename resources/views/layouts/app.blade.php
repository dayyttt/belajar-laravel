<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Modern App, Landing page, Innovation, Technology">
    <meta name="author" content="Proton Team">
    <title>{{ __('messages.hero_title') }} - Proton</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon.ico') }}">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50: '#eff6ff',
                            500: '#3b82f6',
                            600: '#2563eb',
                            700: '#1d4ed8',
                        },
                        secondary: {
                            50: '#fdf4ff',
                            500: '#a855f7',
                            600: '#9333ea',
                        }
                    },
                    fontFamily: {
                        'inter': ['Inter', 'system-ui', 'sans-serif'],
                    },
                    animation: {
                        'fade-in': 'fadeIn 0.5s ease-in-out',
                        'slide-up': 'slideUp 0.6s ease-out',
                        'float': 'float 3s ease-in-out infinite',
                    }
                }
            }
        }
    </script>

    <!-- Font Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Flag Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@7.3.2/css/flag-icons.min.css" />

    <!-- Custom Styles -->
    <style>
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        @keyframes slideUp {
            from { transform: translateY(20px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }
        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        .glass-morphism {
            background: rgba(170, 237, 181, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        .hero-gradient {
            background: linear-gradient(135deg, 
               0%,rgb(84, 190, 97) 50%,rgb(171, 248, 209) 100%);
        }
        .btn-gradient {
            background: linear-gradient(135deg,rgb(71, 156, 79) 0%,rgb(107, 159, 123) 100%);
        }
        .btn-gradient:hover {
            background: linear-gradient(135deg,rgb(142, 200, 163) 0%,rgb(78, 184, 131) 100%);
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(85, 255, 179, 0.3);
        }
    </style>
</head>

<body class="font-inter antialiased bg-gradient-to-br from-slate-50 via-white to-blue-50 min-h-screen">

    <!-- Header Section -->
    @include('layouts.Headers')

    <!-- Main Content -->
    <main class="relative">
        @yield('content')
    </main>

    <!-- Footer Section -->
    @include('layouts.footer')

    <!-- Back to Top Button -->
    <button id="backToTop" class="fixed bottom-8 right-8 bg-primary-500 hover:bg-primary-600 text-white p-3 rounded-full shadow-lg transition-all duration-300 opacity-0 pointer-events-none z-50">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
        </svg>
    </button>

    <!-- Preloader -->
    <div id="preloader" class="fixed inset-0 bg-white z-50 flex items-center justify-center">
        <div class="animate-spin rounded-full h-12 w-12 border-b-2 border-primary-500"></div>
    </div>

    <!-- Scripts -->
    @include('layouts.scripts')

    <!-- Custom JavaScript -->
    <script>
        // Back to top functionality
        document.getElementById('backToTop').addEventListener('click', function() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });

        // Show/hide back to top button
        window.addEventListener('scroll', function() {
            const button = document.getElementById('backToTop');
            if (window.scrollY > 300) {
                button.classList.remove('opacity-0', 'pointer-events-none');
                button.classList.add('opacity-100');
            } else {
                button.classList.add('opacity-0', 'pointer-events-none');
                button.classList.remove('opacity-100');
            }
        });

        // Preloader
        window.addEventListener('load', function() {
            setTimeout(function() {
                document.getElementById('preloader').style.display = 'none';
            }, 500);
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>

</body>
</html>