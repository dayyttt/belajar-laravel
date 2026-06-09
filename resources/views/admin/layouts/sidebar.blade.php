<!-- Mobile overlay -->
<div id="sidebar-overlay" class="fixed inset-0 bg-black/50 z-40 lg:hidden backdrop-blur-sm" style="display: none;"></div>

<!-- Sidebar -->
<aside id="sidebar" class="fixed top-0 left-0 h-screen bg-gradient-to-br from-slate-900 via-slate-800 to-slate-900 text-white transition-all duration-300 z-50 w-64 flex flex-col transform -translate-x-full lg:translate-x-0 shadow-2xl border-r border-slate-700/50">
    
    <!-- Logo Header -->
    <div class="h-20 flex items-center justify-between px-6 border-b border-slate-700/50 bg-gradient-to-r from-slate-800/50 to-transparent backdrop-blur-sm">
        <div class="flex items-center gap-3">
            <div class="w-11 h-11 rounded-xl flex items-center justify-center shadow-lg bg-gradient-to-br from-emerald-500 to-emerald-600 ring-2 ring-emerald-400/20">
                <span class="text-white font-bold text-lg">T</span>
            </div>
            <div>
                <span class="font-bold text-xl tracking-tight">TokiToki</span>
                <div class="text-xs text-slate-400 font-medium">Admin Panel</div>
            </div>
        </div>
        <button onclick="toggleSidebar()" class="lg:hidden text-slate-400 hover:text-white p-2 rounded-lg hover:bg-slate-700/50 transition-all duration-200">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
    </div>

    <!-- Menu Items -->
    <nav class="flex-1 overflow-y-auto py-6 scrollbar-thin scrollbar-track-slate-800 scrollbar-thumb-slate-600">
        <div class="px-3 space-y-1">
            
            <!-- Dashboard -->
            <div class="menu-item">
                <a href="{{ route('dashboard.index') }}" class="group flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-300 hover:text-white hover:bg-slate-700/50 transition-all duration-200 {{ request()->is('dashboard') ? 'bg-emerald-600/20 text-emerald-400 border-r-2 border-emerald-500' : '' }}">
                    <div class="flex items-center justify-center w-5 h-5">
                        <svg class="w-5 h-5 {{ request()->is('dashboard') ? 'text-emerald-400' : 'text-slate-400 group-hover:text-white' }} transition-colors duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                    </div>
                    <span class="font-medium">Dashboard</span>
                </a>
            </div>

            <!-- Booking -->
            <div class="menu-item">
                <a href="{{ route('admin.pages.booking.index') }}" class="group flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-300 hover:text-white hover:bg-slate-700/50 transition-all duration-200 {{ request()->is('admin/pages/booking*') ? 'bg-emerald-600/20 text-emerald-400 border-r-2 border-emerald-500' : '' }}">
                    <div class="flex items-center justify-center w-5 h-5">
                        <svg class="w-5 h-5 {{ request()->is('admin/pages/booking*') ? 'text-emerald-400' : 'text-slate-400 group-hover:text-white' }} transition-colors duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <span class="font-medium">Booking</span>
                </a>
            </div>

            <!-- Content -->
            <div class="menu-item">
                <button onclick="toggleSubmenu('content')" class="group flex items-center justify-between w-full px-3 py-2.5 rounded-lg text-slate-300 hover:text-white hover:bg-slate-700/50 transition-all duration-200 {{ request()->is('admin/content*') ? 'bg-emerald-600/20 text-emerald-400 border-r-2 border-emerald-500' : '' }}">
                    <div class="flex items-center gap-3">
                        <div class="flex items-center justify-center w-5 h-5">
                            <svg class="w-5 h-5 {{ request()->is('admin/content*') ? 'text-emerald-400' : 'text-slate-400 group-hover:text-white' }} transition-colors duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                        </div>
                        <span class="font-medium">Content</span>
                    </div>
                    <svg id="content-chevron" class="w-4 h-4 {{ request()->is('admin/content*') ? 'text-emerald-400 rotate-180' : 'text-slate-400 group-hover:text-white' }} transition-all duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div id="content-submenu" class="submenu overflow-hidden transition-all duration-300 {{ request()->is('admin/content*') ? 'max-h-96 opacity-100' : 'max-h-0 opacity-0' }}">
                    <div class="py-2 space-y-1">
                        <a href="{{ route('admin.content.banners.index') }}" class="group flex items-center gap-3 px-3 py-2 ml-6 rounded-lg text-slate-400 hover:text-white hover:bg-slate-700/30 transition-all duration-200 {{ request()->is('admin/content/banners*') ? 'text-emerald-400 bg-emerald-600/10' : '' }}">
                            <div class="flex items-center justify-center w-4 h-4">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <span class="text-sm font-medium">Banners</span>
                        </a>
                        <a href="{{ route('admin.content.highlights.index') }}" class="group flex items-center gap-3 px-3 py-2 ml-6 rounded-lg text-slate-400 hover:text-white hover:bg-slate-700/30 transition-all duration-200 {{ request()->is('admin/content/highlights*') ? 'text-emerald-400 bg-emerald-600/10' : '' }}">
                            <div class="flex items-center justify-center w-4 h-4">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                </svg>
                            </div>
                            <span class="text-sm font-medium">Highlights</span>
                        </a>
                        <a href="{{ route('admin.content.pages.index') }}" class="group flex items-center gap-3 px-3 py-2 ml-6 rounded-lg text-slate-400 hover:text-white hover:bg-slate-700/30 transition-all duration-200 {{ request()->is('admin/content/pages*') ? 'text-emerald-400 bg-emerald-600/10' : '' }}">
                            <div class="flex items-center justify-center w-4 h-4">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                            </div>
                            <span class="text-sm font-medium">Pages</span>
                        </a>
                        <a href="{{ route('admin.content.settings.edit') }}" class="group flex items-center gap-3 px-3 py-2 ml-6 rounded-lg text-slate-400 hover:text-white hover:bg-slate-700/30 transition-all duration-200 {{ request()->is('admin/content/settings*') ? 'text-emerald-400 bg-emerald-600/10' : '' }}">
                            <div class="flex items-center justify-center w-4 h-4">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <span class="text-sm font-medium">Settings</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Customers -->
            <div class="menu-item">
                <a href="/customers" class="group flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-300 hover:text-white hover:bg-slate-700/50 transition-all duration-200 {{ request()->is('customers*') ? 'bg-emerald-600/20 text-emerald-400 border-r-2 border-emerald-500' : '' }}">
                    <div class="flex items-center justify-center w-5 h-5">
                        <svg class="w-5 h-5 {{ request()->is('customers*') ? 'text-emerald-400' : 'text-slate-400 group-hover:text-white' }} transition-colors duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                        </svg>
                    </div>
                    <span class="font-medium">Customers</span>
                </a>
            </div>

            <!-- Ketersediaan -->
            <div class="menu-item">
                <button onclick="toggleSubmenu('ketersediaan')" class="group flex items-center justify-between w-full px-3 py-2.5 rounded-lg text-slate-300 hover:text-white hover:bg-slate-700/50 transition-all duration-200 {{ request()->is('admin/ketersediaan*') ? 'bg-emerald-600/20 text-emerald-400 border-r-2 border-emerald-500' : '' }}">
                    <div class="flex items-center gap-3">
                        <div class="flex items-center justify-center w-5 h-5">
                            <svg class="w-5 h-5 {{ request()->is('admin/ketersediaan*') ? 'text-emerald-400' : 'text-slate-400 group-hover:text-white' }} transition-colors duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                            </svg>
                        </div>
                        <span class="font-medium">Ketersediaan</span>
                    </div>
                    <svg id="ketersediaan-chevron" class="w-4 h-4 {{ request()->is('admin/ketersediaan*') ? 'text-emerald-400 rotate-180' : 'text-slate-400 group-hover:text-white' }} transition-all duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div id="ketersediaan-submenu" class="submenu overflow-hidden transition-all duration-300 {{ request()->is('admin/ketersediaan*') ? 'max-h-96 opacity-100' : 'max-h-0 opacity-0' }}">
                    <div class="py-2 space-y-1">
                        <a href="{{ route('admin.pages.ketersediaan.availability.index') }}" class="group flex items-center gap-3 px-3 py-2 ml-6 rounded-lg text-slate-400 hover:text-white hover:bg-slate-700/30 transition-all duration-200 {{ request()->is('admin/pages/ketersediaan/availability*') ? 'text-emerald-400 bg-emerald-600/10' : '' }}">
                            <div class="flex items-center justify-center w-4 h-4">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <span class="text-sm font-medium">Availability</span>
                        </a>
                        <a href="{{ route('admin.pages.ketersediaan.schedules.index') }}" class="group flex items-center gap-3 px-3 py-2 ml-6 rounded-lg text-slate-400 hover:text-white hover:bg-slate-700/30 transition-all duration-200 {{ request()->is('admin/pages/ketersediaan/schedules*') ? 'text-emerald-400 bg-emerald-600/10' : '' }}">
                            <div class="flex items-center justify-center w-4 h-4">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <span class="text-sm font-medium">Schedules</span>
                        </a>
                        <a href="{{ route('admin.pages.ketersediaan.time-slots.index') }}" class="group flex items-center gap-3 px-3 py-2 ml-6 rounded-lg text-slate-400 hover:text-white hover:bg-slate-700/30 transition-all duration-200 {{ request()->is('admin/pages/ketersediaan/time-slots*') ? 'text-emerald-400 bg-emerald-600/10' : '' }}">
                            <div class="flex items-center justify-center w-4 h-4">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
                                </svg>
                            </div>
                            <span class="text-sm font-medium">Time Slots</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Manajemen -->
            <div class="menu-item">
                <button onclick="toggleSubmenu('manajemen')" class="group flex items-center justify-between w-full px-3 py-2.5 rounded-lg text-slate-300 hover:text-white hover:bg-slate-700/50 transition-all duration-200 {{ request()->is('admin/manajemen*') ? 'bg-emerald-600/20 text-emerald-400 border-r-2 border-emerald-500' : '' }}">
                    <div class="flex items-center gap-3">
                        <div class="flex items-center justify-center w-5 h-5">
                            <svg class="w-5 h-5 {{ request()->is('admin/manajemen*') ? 'text-emerald-400' : 'text-slate-400 group-hover:text-white' }} transition-colors duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                            </svg>
                        </div>
                        <span class="font-medium">Manajemen</span>
                    </div>
                    <svg id="manajemen-chevron" class="w-4 h-4 {{ request()->is('admin/manajemen*') ? 'text-emerald-400 rotate-180' : 'text-slate-400 group-hover:text-white' }} transition-all duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div id="manajemen-submenu" class="submenu overflow-hidden transition-all duration-300 {{ request()->is('admin/manajemen*') ? 'max-h-96 opacity-100' : 'max-h-0 opacity-0' }}">
                    <div class="py-2 space-y-1">
                        <a href="{{ route('admin.pages.manajemen.artikel.index') }}" class="group flex items-center gap-3 px-3 py-2 ml-6 rounded-lg text-slate-400 hover:text-white hover:bg-slate-700/30 transition-all duration-200 {{ request()->is('artikel*') ? 'text-emerald-400 bg-emerald-600/10' : '' }}">
                            <div class="flex items-center justify-center w-4 h-4">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                                </svg>
                            </div>
                            <span class="text-sm font-medium">Artikel</span>
                        </a>
                        <a href="{{ route('admin.pages.manajemen.halaman.index') }}" class="group flex items-center gap-3 px-3 py-2 ml-6 rounded-lg text-slate-400 hover:text-white hover:bg-slate-700/30 transition-all duration-200 {{ request()->is('halaman*') ? 'text-emerald-400 bg-emerald-600/10' : '' }}">
                            <div class="flex items-center justify-center w-4 h-4">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                            </div>
                            <span class="text-sm font-medium">Halaman</span>
                        </a>
                        <a href="{{ route('admin.pages.manajemen.media.index') }}" class="group flex items-center gap-3 px-3 py-2 ml-6 rounded-lg text-slate-400 hover:text-white hover:bg-slate-700/30 transition-all duration-200 {{ request()->is('media*') ? 'text-emerald-400 bg-emerald-600/10' : '' }}">
                            <div class="flex items-center justify-center w-4 h-4">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <span class="text-sm font-medium">Media</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Penugasan -->
            <div class="menu-item">
                <button onclick="toggleSubmenu('penugasan')" class="group flex items-center justify-between w-full px-3 py-2.5 rounded-lg text-slate-300 hover:text-white hover:bg-slate-700/50 transition-all duration-200 {{ request()->is('admin/penugasan*') ? 'bg-emerald-600/20 text-emerald-400 border-r-2 border-emerald-500' : '' }}">
                    <div class="flex items-center gap-3">
                        <div class="flex items-center justify-center w-5 h-5">
                            <svg class="w-5 h-5 {{ request()->is('admin/penugasan*') ? 'text-emerald-400' : 'text-slate-400 group-hover:text-white' }} transition-colors duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                        </div>
                        <span class="font-medium">Penugasan</span>
                    </div>
                    <svg id="penugasan-chevron" class="w-4 h-4 {{ request()->is('admin/penugasan*') ? 'text-emerald-400 rotate-180' : 'text-slate-400 group-hover:text-white' }} transition-all duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div id="penugasan-submenu" class="submenu overflow-hidden transition-all duration-300 {{ request()->is('admin/penugasan*') ? 'max-h-96 opacity-100' : 'max-h-0 opacity-0' }}">
                    <div class="py-2 space-y-1">
                        <a href="{{ route('admin.pages.penugasan.jadwal.index') }}" class="group flex items-center gap-3 px-3 py-2 ml-6 rounded-lg text-slate-400 hover:text-white hover:bg-slate-700/30 transition-all duration-200 {{ request()->is('admin/pages/penugasan/jadwal*') ? 'text-emerald-400 bg-emerald-600/10' : '' }}">
                            <div class="flex items-center justify-center w-4 h-4">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <span class="text-sm font-medium">Jadwal</span>
                        </a>
                        <a href="{{ route('admin.pages.penugasan.kalender.index') }}" class="group flex items-center gap-3 px-3 py-2 ml-6 rounded-lg text-slate-400 hover:text-white hover:bg-slate-700/30 transition-all duration-200 {{ request()->is('admin/pages/penugasan/kalender*') ? 'text-emerald-400 bg-emerald-600/10' : '' }}">
                            <div class="flex items-center justify-center w-4 h-4">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <span class="text-sm font-medium">Kalender</span>
                        </a>
                        <a href="{{ route('admin.pages.penugasan.assignment.index') }}" class="group flex items-center gap-3 px-3 py-2 ml-6 rounded-lg text-slate-400 hover:text-white hover:bg-slate-700/30 transition-all duration-200 {{ request()->is('admin/pages/penugasan/assignment*') ? 'text-emerald-400 bg-emerald-600/10' : '' }}">
                            <div class="flex items-center justify-center w-4 h-4">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                                </svg>
                            </div>
                            <span class="text-sm font-medium">Penugasan</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Produk -->
            <div class="menu-item">
                <button onclick="toggleSubmenu('produk')" class="group flex items-center justify-between w-full px-3 py-2.5 rounded-lg text-slate-300 hover:text-white hover:bg-slate-700/50 transition-all duration-200 {{ request()->is('admin/produk*') ? 'bg-emerald-600/20 text-emerald-400 border-r-2 border-emerald-500' : '' }}">
                    <div class="flex items-center gap-3">
                        <div class="flex items-center justify-center w-5 h-5">
                            <svg class="w-5 h-5 {{ request()->is('admin/produk*') ? 'text-emerald-400' : 'text-slate-400 group-hover:text-white' }} transition-colors duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                            </svg>
                        </div>
                        <span class="font-medium">Produk</span>
                    </div>
                    <svg id="produk-chevron" class="w-4 h-4 {{ request()->is('admin/produk*') ? 'text-emerald-400 rotate-180' : 'text-slate-400 group-hover:text-white' }} transition-all duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div id="produk-submenu" class="submenu overflow-hidden transition-all duration-300 {{ request()->is('admin/produk*') ? 'max-h-96 opacity-100' : 'max-h-0 opacity-0' }}">
                    <div class="py-2 space-y-1">
                        <a href="{{ route('admin.pages.produk.kategori.index') }}" class="group flex items-center gap-3 px-3 py-2 ml-6 rounded-lg text-slate-400 hover:text-white hover:bg-slate-700/30 transition-all duration-200 {{ request()->is('admin/pages/produk/kategori*') ? 'text-emerald-400 bg-emerald-600/10' : '' }}">
                            <div class="flex items-center justify-center w-4 h-4">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                                </svg>
                            </div>
                            <span class="text-sm font-medium">Kategori</span>
                        </a>
                        <a href="{{ route('admin.pages.produk.layanan.index') }}" class="group flex items-center gap-3 px-3 py-2 ml-6 rounded-lg text-slate-400 hover:text-white hover:bg-slate-700/30 transition-all duration-200 {{ request()->is('admin/pages/produk/layanan*') ? 'text-emerald-400 bg-emerald-600/10' : '' }}">
                            <div class="flex items-center justify-center w-4 h-4">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                                </svg>
                            </div>
                            <span class="text-sm font-medium">Layanan</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Service Owners -->
            <div class="menu-item">
                <a href="{{ route('admin.service-owners.index') }}" class="group flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-300 hover:text-white hover:bg-slate-700/50 transition-all duration-200 {{ request()->is('admin/service-owners*') ? 'bg-emerald-600/20 text-emerald-400 border-r-2 border-emerald-500' : '' }}">
                    <div class="flex items-center justify-center w-5 h-5">
                        <svg class="w-5 h-5 {{ request()->is('admin/service-owners*') ? 'text-emerald-400' : 'text-slate-400 group-hover:text-white' }} transition-colors duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <span class="font-medium">Service Owners</span>
                </a>
            </div>

            <!-- Services -->
            <div class="menu-item">
                <button onclick="toggleSubmenu('services')" class="group flex items-center justify-between w-full px-3 py-2.5 rounded-lg text-slate-300 hover:text-white hover:bg-slate-700/50 transition-all duration-200 {{ request()->is('admin/services*') ? 'bg-emerald-600/20 text-emerald-400 border-r-2 border-emerald-500' : '' }}">
                    <div class="flex items-center gap-3">
                        <div class="flex items-center justify-center w-5 h-5">
                            <svg class="w-5 h-5 {{ request()->is('admin/services*') ? 'text-emerald-400' : 'text-slate-400 group-hover:text-white' }} transition-colors duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                            </svg>
                        </div>
                        <span class="font-medium">Services</span>
                    </div>
                    <svg id="services-chevron" class="w-4 h-4 {{ request()->is('admin/services*') ? 'text-emerald-400 rotate-180' : 'text-slate-400 group-hover:text-white' }} transition-all duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div id="services-submenu" class="submenu overflow-hidden transition-all duration-300 {{ request()->is('admin/services*') ? 'max-h-96 opacity-100' : 'max-h-0 opacity-0' }}">
                    <div class="py-2 space-y-1">
                        <a href="{{ route('admin.service-categories.index') }}" class="group flex items-center gap-3 px-3 py-2 ml-6 rounded-lg text-slate-400 hover:text-white hover:bg-slate-700/30 transition-all duration-200 {{ request()->is('admin/service-categories*') ? 'text-emerald-400 bg-emerald-600/10' : '' }}">
                            <div class="flex items-center justify-center w-4 h-4">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                                </svg>
                            </div>
                            <span class="text-sm font-medium">Categories</span>
                        </a>
                        <a href="{{ route('admin.pages.services.packages.index') }}" class="group flex items-center gap-3 px-3 py-2 ml-6 rounded-lg text-slate-400 hover:text-white hover:bg-slate-700/30 transition-all duration-200 {{ request()->is('admin/pages/services/packages*') ? 'text-emerald-400 bg-emerald-600/10' : '' }}">
                            <div class="flex items-center justify-center w-4 h-4">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                                </svg>
                            </div>
                            <span class="text-sm font-medium">Packages</span>
                        </a>
                        <a href="{{ route('admin.services.services.index') }}" class="group flex items-center gap-3 px-3 py-2 ml-6 rounded-lg text-slate-400 hover:text-white hover:bg-slate-700/30 transition-all duration-200 {{ request()->is('admin/services/services*') ? 'text-emerald-400 bg-emerald-600/10' : '' }}">
                            <div class="flex items-center justify-center w-4 h-4">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                                </svg>
                            </div>
                            <span class="text-sm font-medium">Services</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Transaksi -->
            <div class="menu-item">
                <button onclick="toggleSubmenu('transaksi')" class="group flex items-center justify-between w-full px-3 py-2.5 rounded-lg text-slate-300 hover:text-white hover:bg-slate-700/50 transition-all duration-200 {{ request()->is('admin/transaksi*') ? 'bg-emerald-600/20 text-emerald-400 border-r-2 border-emerald-500' : '' }}">
                    <div class="flex items-center gap-3">
                        <div class="flex items-center justify-center w-5 h-5">
                            <svg class="w-5 h-5 {{ request()->is('admin/transaksi*') ? 'text-emerald-400' : 'text-slate-400 group-hover:text-white' }} transition-colors duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path>
                            </svg>
                        </div>
                        <span class="font-medium">Transaksi</span>
                    </div>
                    <svg id="transaksi-chevron" class="w-4 h-4 {{ request()->is('admin/transaksi*') ? 'text-emerald-400 rotate-180' : 'text-slate-400 group-hover:text-white' }} transition-all duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div id="transaksi-submenu" class="submenu overflow-hidden transition-all duration-300 {{ request()->is('admin/transaksi*') ? 'max-h-96 opacity-100' : 'max-h-0 opacity-0' }}">
                    <div class="py-2 space-y-1">
                        <a href="{{ route('admin.pages.transaksi.invoices.index') }}" class="group flex items-center gap-3 px-3 py-2 ml-6 rounded-lg text-slate-400 hover:text-white hover:bg-slate-700/30 transition-all duration-200 {{ request()->is('admin/pages/transaksi/invoices*') ? 'text-emerald-400 bg-emerald-600/10' : '' }}">
                            <div class="flex items-center justify-center w-4 h-4">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                            </div>
                            <span class="text-sm font-medium">Invoices</span>
                        </a>
                        <a href="{{ route('admin.pages.laporan.index') }}" class="group flex items-center gap-3 px-3 py-2 ml-6 rounded-lg text-slate-400 hover:text-white hover:bg-slate-700/30 transition-all duration-200 {{ request()->is('admin/pages/laporan*') ? 'text-emerald-400 bg-emerald-600/10' : '' }}">
                            <div class="flex items-center justify-center w-4 h-4">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                </svg>
                            </div>
                            <span class="text-sm font-medium">Laporan</span>
                        </a>
                        <a href="{{ route('admin.pages.transaksi.payments.index') }}" class="group flex items-center gap-3 px-3 py-2 ml-6 rounded-lg text-slate-400 hover:text-white hover:bg-slate-700/30 transition-all duration-200 {{ request()->is('admin/pages/transaksi/payments*') ? 'text-emerald-400 bg-emerald-600/10' : '' }}">
                            <div class="flex items-center justify-center w-4 h-4">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <span class="text-sm font-medium">Payments</span>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </nav>

    <!-- User Profile -->
    <div class="border-t border-slate-700/50 p-4 bg-slate-800/30">
        <div class="flex items-center gap-3 px-2 py-2 rounded-lg hover:bg-slate-700/30 transition-all duration-200 cursor-pointer group">
            <div class="w-10 h-10 rounded-full bg-gradient-to-br from-emerald-500 to-emerald-600 flex items-center justify-center ring-2 ring-emerald-400/20 group-hover:ring-emerald-400/40 transition-all duration-200">
                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                </svg>
            </div>
            <div class="flex-1 min-w-0">
                <div class="text-sm font-medium text-white truncate">{{ Auth::user()->name ?? 'Admin User' }}</div>
                <div class="text-xs text-slate-400 truncate">{{ Auth::user()->email ?? 'admin@tokitoki.com' }}</div>
            </div>
            <div class="opacity-0 group-hover:opacity-100 transition-opacity duration-200">
                <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </div>
        </div>
    </div>

</aside>

<!-- Mobile Menu Toggle Button -->
<button onclick="toggleSidebar()" class="lg:hidden fixed top-4 left-4 z-50 bg-gradient-to-br from-slate-800 to-slate-900 text-white p-3 rounded-xl shadow-lg border border-slate-700/50 hover:from-slate-700 hover:to-slate-800 transition-all duration-200 backdrop-blur-sm">
    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
    </svg>
</button>