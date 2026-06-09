<!-- Modern Header with Tailwind CSS -->
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
                        {{ __('messages.nav_home') }}
                        <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-gradient-to-r from-yellow-400 to-orange-500 transition-all duration-300 group-hover:w-full"></span>
                    </a>
                    <a href="{{ route('about') }}" class="text-gray-700 hover:text-primary-600 font-bold transition-all duration-200 relative group nav-item-glow px-2 py-1 rounded-lg">
                        {{ __('messages.nav_about') }}
                        <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-gradient-to-r from-purple-400 to-pink-500 transition-all duration-300 group-hover:w-full"></span>
                    </a>
                    <!-- Produk Full-Width Dropdown -->
                    <div class="relative group">
                        <button class="dropdown-toggle flex items-center space-x-1 text-gray-700 hover:text-primary-600 font-bold transition-all duration-200 relative nav-item-glow px-2 py-1 rounded-lg">
                            <span>{{ __('messages.nav_product') }}</span>
                            <svg class="chevron-icon w-4 h-4 text-gray-500 transition-transform duration-200 group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                            <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-gradient-to-r from-green-400 to-blue-500 transition-all duration-300 group-hover:w-full"></span>
                        </button>

                        <!-- Full-Width Dropdown Menu -->
                        <div class="absolute top-full left-1/2 transform -translate-x-1/2 mt-2 w-screen max-w-7xl bg-white rounded-xl shadow-2xl border border-gray-100 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform translate-y-4 group-hover:translate-y-0 z-50">
                            <div class="p-8">
                                <!-- Header -->
                                <div class="text-center mb-8">
                                    <h3 class="text-2xl font-bold text-gray-900 mb-2">Produk TokiToki</h3>
                                    <p class="text-gray-600">Solusi teknologi terdepan untuk bisnis modern</p>
                                </div>

                                <!-- Products Grid -->
                                <div class="grid md:grid-cols-3 gap-8">
                                    <!-- ToPOS -->
                                    <a href="https://tokitoki.cloud/" target="_blank" rel="noopener noreferrer" class="group/item bg-gradient-to-br from-blue-50 to-indigo-50 p-6 rounded-xl border border-blue-100 hover:border-blue-200 transition-all duration-300 hover:shadow-lg hover:-translate-y-1">
                                        <div class="flex items-center mb-4">
                                            <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-lg flex items-center justify-center mr-4">
                                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                                                </svg>
                                            </div>
                                            <div>
                                                <h4 class="text-lg font-bold text-gray-900 group-hover/item:text-blue-600 transition-colors">ToPOS</h4>
                                                <p class="text-sm text-gray-500">Point of Sale System</p>
                                            </div>
                                        </div>
                                        <p class="text-gray-600 text-sm mb-4">Sistem kasir modern dengan fitur lengkap untuk retail dan F&B</p>
                                        <div class="flex flex-wrap gap-2">
                                            <span class="px-2 py-1 bg-blue-100 text-blue-700 text-xs rounded-full">Inventory</span>
                                            <span class="px-2 py-1 bg-blue-100 text-blue-700 text-xs rounded-full">Reports</span>
                                            <span class="px-2 py-1 bg-blue-100 text-blue-700 text-xs rounded-full">Multi-Store</span>
                                        </div>
                                    </a>

                                    <!-- Topan -->
                                    <a href="/topan" class="group/item bg-gradient-to-br from-green-50 to-teal-50 p-6 rounded-xl border border-green-100 hover:border-green-200 transition-all duration-300 hover:shadow-lg hover:-translate-y-1">
                                        <div class="flex items-center mb-4">
                                            <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-teal-600 rounded-lg flex items-center justify-center mr-4">
                                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                                </svg>
                                            </div>
                                            <div>
                                                <h4 class="text-lg font-bold text-gray-900 group-hover/item:text-green-600 transition-colors">Topan</h4>
                                                <p class="text-sm text-gray-500">Business Management</p>
                                            </div>
                                        </div>
                                        <p class="text-gray-600 text-sm mb-4">Platform manajemen bisnis komprehensif untuk enterprise</p>
                                        <div class="flex flex-wrap gap-2">
                                            <span class="px-2 py-1 bg-green-100 text-green-700 text-xs rounded-full">ERP</span>
                                            <span class="px-2 py-1 bg-green-100 text-green-700 text-xs rounded-full">CRM</span>
                                            <span class="px-2 py-1 bg-green-100 text-green-700 text-xs rounded-full">Analytics</span>
                                        </div>
                                    </a>

                                    <!-- Jasa Layanan -->
                                    <a href="/jasa-layanan" class="group/item bg-gradient-to-br from-purple-50 to-pink-50 p-6 rounded-xl border border-purple-100 hover:border-purple-200 transition-all duration-300 hover:shadow-lg hover:-translate-y-1">
                                        <div class="flex items-center mb-4">
                                            <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-pink-600 rounded-lg flex items-center justify-center mr-4">
                                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                                </svg>
                                            </div>
                                            <div>
                                                <h4 class="text-lg font-bold text-gray-900 group-hover/item:text-purple-600 transition-colors">Jasa Layanan</h4>
                                                <p class="text-sm text-gray-500">Service Platform</p>
                                            </div>
                                        </div>
                                        <p class="text-gray-600 text-sm mb-4">Marketplace jasa terpercaya dengan ribuan penyedia layanan</p>
                                        <div class="flex flex-wrap gap-2">
                                            <span class="px-2 py-1 bg-purple-100 text-purple-700 text-xs rounded-full">Marketplace</span>
                                            <span class="px-2 py-1 bg-purple-100 text-purple-700 text-xs rounded-full">Booking</span>
                                            <span class="px-2 py-1 bg-purple-100 text-purple-700 text-xs rounded-full">Reviews</span>
                                        </div>
                                    </a>
                                </div>

                                <!-- Bottom CTA -->
                                <div class="mt-8 pt-6 border-t border-gray-100 text-center">
                                    <p class="text-gray-600 mb-4">Butuh bantuan memilih produk yang tepat?</p>
                                    <a href="{{ route('contacts.index') }}" class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-blue-500 to-indigo-500 text-white rounded-lg font-semibold hover:from-blue-600 hover:to-indigo-600 transition-all duration-300 shadow-lg hover:shadow-xl">
                                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                                        </svg>
                                        Konsultasi Gratis
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('contacts.index') }}" class="text-gray-700 hover:text-primary-600 font-bold transition-all duration-200 relative group nav-item-glow px-2 py-1 rounded-lg">
                        {{ __('messages.nav_contact') }}
                        <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-gradient-to-r from-red-400 to-yellow-500 transition-all duration-300 group-hover:w-full"></span>
                    </a>


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
                    <a href="{{ route('about') }}" class="px-4 py-2 text-gray-700 hover:bg-white/50 rounded-lg transition-colors">
                        {{ __('messages.nav_about') }}
                    </a>
                    <!-- Mobile Produk Dropdown -->
                    <div class="mobile-dropdown relative">
                        <div class="group">
                            <a href="/product" class="flex items-center justify-between px-4 py-2 text-gray-700 hover:bg-white/50 rounded-lg transition-colors">
                                <span>{{ __('messages.nav_product') }}</span>
                                <svg class="w-4 h-4 text-gray-500 transition-transform duration-200 group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </a>
                            <!-- Mobile Dropdown Content -->
                            <div class="mobile-dropdown-content opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 transform translate-y-2 group-hover:translate-y-0 absolute left-0 top-full mt-2 w-full bg-white rounded-lg shadow-lg border border-gray-100 z-50">
                                <div class="py-2">
                                    <a href="https://tokitoki.cloud/" target="_blank" rel="noopener noreferrer" class="flex items-center px-4 py-2 text-sm text-gray-600 hover:bg-gray-50 transition-colors">
                                        <svg class="w-4 h-4 mr-2 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                                        </svg>
                                        ToPOS
                                    </a>
                                    <a href="/topan" class="flex items-center px-4 py-2 text-sm text-gray-600 hover:bg-gray-50 transition-colors">
                                        <svg class="w-4 h-4 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                        </svg>
                                        Topan
                                    </a>
                                    <a href="/jasa-layanan" class="flex items-center px-4 py-2 text-sm text-gray-600 hover:bg-gray-50 transition-colors">
                                        <svg class="w-4 h-4 mr-2 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                        </svg>
                                        Jasa Layanan
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('contacts.index') }}" class="px-4 py-2 text-gray-700 hover:bg-white/50 rounded-lg transition-colors">
                        {{ __('messages.nav_contact') }}
                    </a>


                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
   
</header>
