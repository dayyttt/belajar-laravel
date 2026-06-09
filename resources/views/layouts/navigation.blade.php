<!-- Simple Navigation for App Layout -->
<nav class="fixed top-0 left-0 right-0 z-40 bg-white border-b border-gray-200 shadow-lg">
    <div class="max-w-7xl mx-auto px-5 sm:px-4 lg:px-8">
        <div class="flex justify-between items-center py-4">
            <!-- Logo -->
            <a href="/" class="flex items-center space-x-2">
                <img src="/assets/img/blog/TokiToki-logo.png" alt="" class="w-10 h-10 rounded-xl">
                <span class="text-xl font-bold bg-gradient-to-r from-gray-800 to-gray-600 bg-clip-text text-transparent">
                    TokiToki
                </span>
            </a>

            <!-- Desktop Navigation -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="/" class="text-gray-700 hover:text-primary-600 font-bold transition-all duration-200 relative group px-2 py-1 rounded-lg {{ request()->is('/') ? 'bg-primary-50' : '' }}">
                    Beranda
                    <span class="absolute -bottom-1 left-0 {{ request()->is('/') ? 'w-full' : 'w-0' }} h-0.5 bg-gradient-to-r from-yellow-400 to-orange-500 transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="{{ route('about') }}" class="text-gray-700 hover:text-primary-600 font-bold transition-all duration-200 relative group px-2 py-1 rounded-lg {{ request()->is('about') ? 'bg-primary-50' : '' }}">
                    Tentang
                    <span class="absolute -bottom-1 left-0 {{ request()->is('about') ? 'w-full' : 'w-0' }} h-0.5 bg-gradient-to-r from-purple-400 to-pink-500 transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="/product" class="text-gray-700 hover:text-primary-600 font-bold transition-all duration-200 relative group px-2 py-1 rounded-lg {{ request()->is('product') ? 'bg-primary-50' : '' }}">
                    Produk
                    <span class="absolute -bottom-1 left-0 {{ request()->is('product') ? 'w-full' : 'w-0' }} h-0.5 bg-gradient-to-r from-green-400 to-blue-500 transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="{{ route('contacts.index') }}" class="text-gray-700 hover:text-primary-600 font-bold transition-all duration-200 relative group px-2 py-1 rounded-lg {{ request()->is('contacts') ? 'bg-primary-50' : '' }}">
                    Kontak
                    <span class="absolute -bottom-1 left-0 {{ request()->is('contacts') ? 'w-full' : 'w-0' }} h-0.5 bg-gradient-to-r from-red-400 to-yellow-500 transition-all duration-300 group-hover:w-full"></span>
                </a>


            </div>

            <!-- Mobile Menu Button -->
            <button id="appMobileMenuToggle" class="md:hidden p-2 rounded-lg bg-white/80 hover:bg-white shadow-sm border border-gray-200">
                <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div id="appMobileMenu" class="hidden md:hidden border-t border-gray-200 py-4">
            <div class="flex flex-col space-y-3">
                <a href="/" class="px-4 py-2 text-gray-700 hover:bg-gray-50 rounded-lg transition-colors {{ request()->is('/') ? 'bg-gray-100' : '' }}">
                    Beranda
                </a>
                <a href="{{ route('about') }}" class="px-4 py-2 text-gray-700 hover:bg-gray-50 rounded-lg transition-colors {{ request()->is('about') ? 'bg-gray-100' : '' }}">
                    Tentang
                </a>
                <a href="/product" class="px-4 py-2 text-gray-700 hover:bg-gray-50 rounded-lg transition-colors {{ request()->is('product') ? 'bg-gray-100' : '' }}">
                    Produk
                </a>
                <a href="{{ route('contacts.index') }}" class="px-4 py-2 text-gray-700 hover:bg-gray-50 rounded-lg transition-colors {{ request()->is('contacts') ? 'bg-gray-100' : '' }}">
                    Kontak
                </a>
            </div>
        </div>
    </div>
</nav>