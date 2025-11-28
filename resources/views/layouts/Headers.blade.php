Modern Header with Tailwind CSS
<style>
    .hero-bg-slideshow {
        background-size: 100% auto; /* Memperbesar gambar ke ukuran penuh tanpa zoom berlebihan */
        background-position: center;
        background-repeat: no-repeat;
        transition: background-image 1s ease-in-out;
    }
    /* Jika masih kecil, coba: background-size: cover; untuk menutupi seluruh area */
</style>
<header class="relative overflow-hidden">
    <nav class="fixed top-0 left-0 right-0 z-40 bg-white border-b border-gray-200 shadow-lg">
        <div class="max-w-7xl mx-auto px-5 sm:px-4 lg:px-8 relative">
            <!-- Floating Particles -->
            <div class="particle" style="top: 20px; left: 10%; width: 8px; height: 8px;"></div>
            <div class="particle" style="top: 10px; right: 15%; width: 6px; height: 6px; animation-delay: 2s;"></div>
            <div class="particle" style="bottom: 15px; left: 20%; width: 10px; height: 10px; animation-delay: 4s;"></div>
            <div class="flex justify-between items-center py-4">

                <!-- Logo -->
                <a href="/" class="flex items-center space-x-2 logo-float">
                    <img src="/assets/img/blog/TokiToki-logo.png" alt="" class="w-10 h-10 rounded-xl">
                    <span class="text-xl font-bold bg-gradient-to-r from-gray-800 to-gray-600 bg-clip-text text-transparent">
                        TokiToki
                    </span>
                </a>

                <!-- Desktop Navigation -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="/" class="text-gray-700 hover:text-primary-600 font-bold transition-all duration-200 relative group nav-item-glow px-2 py-1 rounded-lg">
                        Home
                        <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-gradient-to-r from-yellow-400 to-orange-500 transition-all duration-300 group-hover:w-full"></span>
                    </a>
                    <a href="{{ route('about.index') }}" class="text-gray-700 hover:text-primary-600 font-bold transition-all duration-200 relative group nav-item-glow px-2 py-1 rounded-lg">
                        About
                        <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-gradient-to-r from-purple-400 to-pink-500 transition-all duration-300 group-hover:w-full"></span>
                    </a>
                    <a href="/product" class="text-gray-700 hover:text-primary-600 font-bold transition-all duration-200 relative group nav-item-glow px-2 py-1 rounded-lg">
                        Produk
                        <span class="absolute --bottom-1 left-0 w-0 h-0.5 bg-gradient-to-r from-green-400 to-blue-500 transition-all duration-300 group-hover:w-full"></span>
                    </a>
                    <a href="{{ route('contacts.index') }}" class="text-gray-700 hover:text-primary-600 font-bold transition-all duration-200 relative group nav-item-glow px-2 py-1 rounded-lg">
                        {{ __('messages.nav_contact') }}
                        <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-gradient-to-r from-red-400 to-yellow-500 transition-all duration-300 group-hover:w-full"></span>
                    </a>

                    <!-- Modern Language Switcher -->
                    <div class="relative group">
                        <button class="flex items-center space-x-2 px-4 py-2 bg-white/80 hover:bg-white rounded-lg shadow-sm border border-gray-200 hover:border-primary-300 transition-all duration-200">
                            @php
                                $locale = App::getLocale();
                                $flagClass = '';
                                $languageName = '';
                                switch ($locale) {
                                    case 'id':
                                        $flagClass = 'fi-id';
                                        $languageName = 'Indonesia';
                                        break;
                                    case 'en':
                                        $flagClass = 'fi-us';
                                        $languageName = 'English';
                                        break;
                                    case 'jv':
                                        $flagClass = 'fi-id';
                                        $languageName = 'Jawa';
                                        break;
                                    case 'su':
                                        $flagClass = 'fi-id';
                                        $languageName = 'Sunda';
                                        break;
                                    case 'ko':
                                        $flagClass = 'fi-kr';
                                        $languageName = '한국어';
                                        break;
                                    case 'ar':
                                        $flagClass = 'fi-sa';
                                        $languageName = 'العربية';
                                        break;
                                    case 'mlx':
                                        $flagClass = 'fi-id';
                                        $languageName = 'Ambon';
                                        break;
                                    case 'mak':
                                        $flagClass = 'fi-id';
                                        $languageName = 'Makassar';
                                        break;
                                    case 'mej':
                                        $flagClass = 'fi-id';
                                        $languageName = 'Medan';
                                        break;
                                    case 'mad':
                                        $flagClass = 'fi-id';
                                        $languageName = 'Madura';
                                        break;
                                    case 'nlu':
                                        $flagClass = 'fi-id';
                                        $languageName = 'Naulu';
                                        break;
                                    default:
                                        $flagClass = 'fi-id';
                                        $languageName = 'Indonesia';
                                        break;
                                }
                            @endphp
                            <span class="fi {{ $flagClass }} text-lg"></span>
                            <span class="text-sm font-medium text-gray-700">{{ $languageName }}</span>
                            <svg class="w-4 h-4 text-gray-500 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>

                        <!-- Dropdown Menu -->
                        <div class="absolute top-full right-0 mt-2 w-48 bg-white rounded-xl shadow-lg border border-gray-100 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 transform translate-y-2 group-hover:translate-y-0">
                            <div class="py-2">
                                <a href="{{ route('language.switch', 'id') }}" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-primary-50 hover:text-primary-600">
                                    <span class="fi fi-id mr-3"></span> Indonesia
                                </a>
                                <a href="{{ route('language.switch', 'en') }}" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-primary-50 hover:text-primary-600">
                                    <span class="fi fi-us mr-3"></span> English
                                </a>
                                <a href="{{ route('language.switch', 'jv') }}" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-primary-50 hover:text-primary-600">
                                    <span class="fi fi-id mr-3"></span> Jawa
                                </a>
                                <a href="{{ route('language.switch', 'su') }}" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-primary-50 hover:text-primary-600">
                                    <span class="fi fi-id mr-3"></span> Sunda
                                </a>
                                <a href="{{ route('language.switch', 'ko') }}" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-primary-50 hover:text-primary-600">
                                    <span class="fi fi-kr mr-3"></span> 한국어
                                </a>
                                <a href="{{ route('language.switch', 'ar') }}" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-primary-50 hover:text-primary-600">
                                    <span class="fi fi-sa mr-3"></span> العربية
                                </a>
                                <div class="border-t border-gray-100 my-1"></div>
                                <a href="{{ route('language.switch', 'mlx') }}" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-primary-50 hover:text-primary-600">
                                    <span class="fi fi-id mr-3"></span> Ambon
                                </a>
                                <a href="{{ route('language.switch', 'mak') }}" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-primary-50 hover:text-primary-600">
                                    <span class="fi fi-id mr-3"></span> Makassar
                                </a>
                                <a href="{{ route('language.switch', 'mej') }}" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-primary-50 hover:text-primary-600">
                                    <span class="fi fi-id mr-3"></span> Medan
                                </a>
                                <a href="{{ route('language.switch', 'mad') }}" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-primary-50 hover:text-primary-600">
                                    <span class="fi fi-id mr-3"></span> Madura
                                </a>
                                <a href="{{ route('language.switch', 'nlu') }}" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-primary-50 hover:text-primary-600">
                                    <span class="fi fi-id mr-3"></span> Naulu
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Mobile Menu Button -->
                <button id="mobileMenuToggle" class="md:hidden p-2 rounded-lg bg-white/80 hover:bg-white shadow-sm border border-gray-200">
                    <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>

            <!-- Mobile Menu -->
            <div id="mobileMenu" class="hidden md:hidden border-t border-white/20 py-4">
                <div class="flex flex-col space-y-3">
                    <a href="/" class="px-4 py-2 text-gray-700 hover:bg-white/50 rounded-lg transition-colors">
                        {{ __('messages.nav_home') }}
                    </a>
                    <a href="{{ route('about.index') }}" class="px-4 py-2 text-gray-700 hover:bg-white/50 rounded-lg transition-colors">
                        About
                    </a>
                    <a href="/product" class="px-4 py-2 text-gray-700 hover:bg-white/50 rounded-lg transition-colors">
                        Produk
                    </a>
                    <a href="{{ route('contacts.index') }}" class="px-4 py-2 text-gray-700 hover:bg-white/50 rounded-lg transition-colors">
                        {{ __('messages.nav_contact') }}
                    </a>

                    <!-- Mobile Language Switcher -->
                    <div class="px-4 py-2">
                        <div class="text-sm font-medium text-gray-600 mb-2">Select Language:</div>
                        <div class="grid grid-cols-2 gap-2">
                            <a href="{{ route('language.switch', 'id') }}" class="flex items-center px-3 py-2 bg-white/80 hover:bg-white rounded-lg text-sm">
                                <span class="fi fi-id mr-2"></span> Indonesia
                            </a>
                            <a href="{{ route('language.switch', 'en') }}" class="flex items-center px-3 py-2 bg-white/80 hover:bg-white rounded-lg text-sm">
                                <span class="fi fi-us mr-2"></span> English
                            </a>
                            <a href="{{ route('language.switch', 'jv') }}" class="flex items-center px-3 py-2 bg-white/80 hover:bg-white rounded-lg text-sm">
                                <span class="fi fi-id mr-2"></span> Jawa
                            </a>
                            <a href="{{ route('language.switch', 'su') }}" class="flex items-center px-3 py-2 bg-white/80 hover:bg-white rounded-lg text-sm">
                                <span class="fi fi-id mr-2"></span> Sunda
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="relative min-h-screen mt-10 flex items-center justify-center hero-bg-slideshow @yield('hero_bg_class', 'hero-bg-slideshow')" id="heroSection" style="@yield('hero_bg_style', 'background-image: url(\'' . asset('assets/img/bg/Bg-home1.jpg') . '\'); background-size: 100% auto; background-position: center; background-repeat: no-repeat;')">
        <!-- Background Elements -->
        <div class="absolute inset-0 bg-black/10"></div>
        <div class="absolute top-1/4 left-1/4 w-72 h-72 bg-white/10 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-purple-300/20 rounded-full blur-3xl animate-pulse delay-1000"></div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="animate-fade-in">

                <!-- Main Heading -->
                <h1 class="text-5xl md:text-7xl font-bold text-white mb-6 animate-slide-up delay-200">
                    <span class="block">Setiap kebutuhanmu, kini bisa terpenuhi lewat satu aplikasi.</span>
                </h1>

                <!-- Subtitle -->
                <p class="text-xl md:text-2xl text-white/90 mb-12 max-w-4xl mx-auto animate-slide-up delay-400 text-center">
                    Dengan hadirnya layanan jasa online seperti TokiToki, kamu bisa menemukan bantuan yang kamu butuhkan kapan saja dan dimana saja. Setiap keahlian punya nilai, dan setiap kebutuhan pasti ada solusinya.
                </p>

                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center animate-slide-up delay-600">
                    <a href="#features" class="btn-gradient px-8 py-4 rounded-xl text-white font-semibold text-lg shadow-xl hover:shadow-2xl transition-all duration-300">
                        {{ __('messages.btn_see_features') }}
                    </a>
                    <a href="#contact" class="px-8 py-4 bg-white/20 backdrop-blur-sm border-2 border-white/30 rounded-xl text-white font-semibold text-lg hover:bg-white/30 transition-all duration-300">
                        {{ __('messages.btn_start_free') }}
                    </a>
                </div>

                <!-- Feature Icons -->
                <div class="flex justify-center items-center mt-16 space-x-8 animate-slide-up delay-800">
                    <div class="text-center">
                        <div class="w-16 h-16 bg-white/20 backdrop-blur-sm rounded-2xl flex items-center justify-center mx-auto mb-2">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <span class="text-white/80 text-sm">Lightning Fast</span>
                    </div>
                    <div class="text-center">
                        <div class="w-16 h-16 bg-white/20 backdrop-blur-sm rounded-2xl flex items-center justify-center mx-auto mb-2">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <span class="text-white/80 text-sm">Secure</span>
                    </div>
                    <div class="text-center">
                        <div class="w-16 h-16 bg-white/20 backdrop-blur-sm rounded-2xl flex items-center justify-center mx-auto mb-2">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>
                        </div>
                        <span class="text-white/80 text-sm">Reliable</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
            <svg class="w-6 h-6 text-white/60" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
            </svg>
        </div>
    </section>
</header>

<!-- Mobile Menu JavaScript -->
<script>
    // Hero background slideshow
    const heroImages = [
        '{{ asset('assets/img/bg/Bg-home1.jpg') }}',
        '{{ asset('assets/img/bg/Bg-home2.jpg') }}',
        '{{ asset('assets/img/bg/Bg-home3.jpg') }}',
        '{{ asset('assets/img/bg/Bg-home4.jpg') }}'
    ];
    let currentHeroIndex = 0;
    const heroSection = document.getElementById('heroSection');

    function changeHeroBackground() {
        if (heroSection) {
            heroSection.style.backgroundImage = `url(${heroImages[currentHeroIndex]})`;
            currentHeroIndex = (currentHeroIndex + 1) % heroImages.length;
        }
    }

    // Set initial background and start slideshow
    changeHeroBackground();
    setInterval(changeHeroBackground, 4500); // Change every 4.5 seconds (ditambah 0.5 detik)
</script>