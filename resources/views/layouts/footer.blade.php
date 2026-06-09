{{-- Modern Footer --}}
<footer class="bg-gray-900 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">

            {{-- Col 1 (span 2): Logo + tagline + social icons --}}
            <div class="lg:col-span-2">
                <a href="/" class="flex items-center space-x-3 mb-5">
                    <img src="/assets/img/blog/TokiToki-logo.png" alt="TokiToki" class="w-10 h-10 rounded-xl">
                    <span class="text-2xl font-bold text-white">TokiToki</span>
                </a>
                <p class="text-gray-400 text-sm leading-relaxed mb-6 max-w-sm">
                    {{ __('messages.footer_tagline') }}
                </p>
                <div class="flex items-center space-x-3">
                    <a href="https://tiktok.com/@tokitoki.tech" target="_blank" class="w-10 h-10 bg-white/10 hover:bg-green-600 rounded-lg flex items-center justify-center transition-all duration-300 hover:scale-110">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/>
                        </svg>
                    </a>
                    <a href="https://www.instagram.com/tokitoki.tech?igsh=MXZnMTdmb3dtZm1wcw==" class="w-10 h-10 bg-white/10 hover:bg-green-600 rounded-lg flex items-center justify-center transition-all duration-300 hover:scale-110">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                        </svg>
                    </a>
                    <a href="https://wa.me/6282116237010" target="_blank" class="w-10 h-10 bg-white/10 hover:bg-green-600 rounded-lg flex items-center justify-center transition-all duration-300 hover:scale-110">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488"/>
                        </svg>
                    </a>
                    <a href="mailto:helo@tokitoki.cloud" class="w-10 h-10 bg-white/10 hover:bg-green-600 rounded-lg flex items-center justify-center transition-all duration-300 hover:scale-110">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 5.457v13.909c0 .904-.732 1.636-1.636 1.636h-3.819V11.73L12 16.64l-6.545-4.91v9.273H1.636A1.636 1.636 0 0 1 0 19.366V5.457c0-.904.732-1.636 1.636-1.636h.91L12 10.09l9.455-6.269h.909c.904 0 1.636.732 1.636 1.636Z"/>
                        </svg>
                    </a>
                </div>
            </div>

            {{-- Col 2: Tautan Cepat --}}
            <div>
                <h3 class="text-base font-semibold text-white mb-5">{{ __('messages.footer_quick_links') }}</h3>
                <ul class="space-y-3">
                    <li>
                        <a href="/" class="text-gray-400 hover:text-green-400 text-sm transition-colors duration-200 flex items-center group">
                            <svg class="w-3 h-3 mr-2 opacity-0 group-hover:opacity-100 transition-opacity text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                            {{ __('messages.nav_home') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('about') }}" class="text-gray-400 hover:text-green-400 text-sm transition-colors duration-200 flex items-center group">
                            <svg class="w-3 h-3 mr-2 opacity-0 group-hover:opacity-100 transition-opacity text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                            {{ __('messages.nav_about') }}
                        </a>
                    </li>
                    <li>
                        <a href="/product" class="text-gray-400 hover:text-green-400 text-sm transition-colors duration-200 flex items-center group">
                            <svg class="w-3 h-3 mr-2 opacity-0 group-hover:opacity-100 transition-opacity text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                            {{ __('messages.nav_product') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('contacts.index') }}" class="text-gray-400 hover:text-green-400 text-sm transition-colors duration-200 flex items-center group">
                            <svg class="w-3 h-3 mr-2 opacity-0 group-hover:opacity-100 transition-opacity text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                            {{ __('messages.nav_contact') }}
                        </a>
                    </li>
                    <li>
                        <a href="#features" class="text-gray-400 hover:text-green-400 text-sm transition-colors duration-200 flex items-center group">
                            <svg class="w-3 h-3 mr-2 opacity-0 group-hover:opacity-100 transition-opacity text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                            {{ __('messages.footer_features') }}
                        </a>
                    </li>
                </ul>
            </div>

            {{-- Col 3: Dukungan --}}
            <div>
                <h3 class="text-base font-semibold text-white mb-5">{{ __('messages.footer_support') }}</h3>
                <ul class="space-y-3">
                    <li>
                        <a href="#" class="text-gray-400 hover:text-green-400 text-sm transition-colors duration-200 flex items-center group">
                            <svg class="w-3 h-3 mr-2 opacity-0 group-hover:opacity-100 transition-opacity text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                            {{ __('messages.footer_help_center') }}
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-400 hover:text-green-400 text-sm transition-colors duration-200 flex items-center group">
                            <svg class="w-3 h-3 mr-2 opacity-0 group-hover:opacity-100 transition-opacity text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                            {{ __('messages.footer_documentation') }}
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-400 hover:text-green-400 text-sm transition-colors duration-200 flex items-center group">
                            <svg class="w-3 h-3 mr-2 opacity-0 group-hover:opacity-100 transition-opacity text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                            {{ __('messages.footer_terms') }}
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-400 hover:text-green-400 text-sm transition-colors duration-200 flex items-center group">
                            <svg class="w-3 h-3 mr-2 opacity-0 group-hover:opacity-100 transition-opacity text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                            {{ __('messages.footer_privacy') }}
                        </a>
                    </li>
                </ul>
            </div>

        </div>
    </div>

    {{-- Bottom bar --}}
    <div class="border-t border-white/10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6 text-center">
            <p class="text-gray-500 text-sm">
                {{ date('Y') }} &copy; TokiToki. {{ __('messages.footer_copyright') }}
            </p>
        </div>
    </div>
</footer>
