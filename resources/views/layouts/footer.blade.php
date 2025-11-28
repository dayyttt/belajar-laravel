<!-- Modern Footer with Tailwind CSS -->
<footer class="relative bg-gradient-to-br from-gray-900 via-slate-900 to-black text-white overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute inset-0">
        <div class="absolute top-0 left-0 w-96 h-96 bg-blue-500/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-purple-500/10 rounded-full blur-3xl"></div>
        <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23ffffff" fill-opacity="0.02"%3E%3Ccircle cx="30" cy="30" r="1"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')]"></div>
    </div>

    <div class="relative z-10">
        <!-- Main Footer Content -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">

                <!-- Company Info -->
                <div class="lg:col-span-2">
                    <div class="flex items-center space-x-3 mb-6">
                        <div class="w-12 h-12 from-blue-500 to-purple-600 rounded-xl flex items-center justify-center">
                        <a href="/" class="flex items-center space-x-2">
                        <img src="/assets/img/blog/TokiToki-logo.png" alt="" class="">
                        </a>
                        </div>
                        <span class="text-2xl font-bold bg-gradient-to-r from-white to-gray-300 bg-clip-text text-transparent">
                            TokiToki
                        </span>
                    </div>
                    <p class="text-gray-300 text-lg mb-6 max-w-md">
                        <strong>TokiToki</strong> adalah aplikasi penyedia layanan <strong>jasa online</strong>. Melalui aplikasi ini, setiap permintaan dan pesanan dilakukan sesama pengguna, sehingga menciptakan ekosistem layanan yang praktis, transparan, dan saling menguntungkan.
                    </p>

                </div>

                <!-- Quick Links -->
                <div>
                    <h3 class="text-lg font-semibold mb-6 text-white">Quick Links</h3>
                    <ul class="space-y-3">
                        <li>
                            <a href="/" class="text-gray-300 hover:text-white transition-colors duration-200 flex items-center group">
                                <svg class="w-4 h-4 mr-2 opacity-0 group-hover:opacity-100 transition-opacity" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('about.index') }}" class="text-gray-300 hover:text-white transition-colors duration-200 flex items-center group">
                                <svg class="w-4 h-4 mr-2 opacity-0 group-hover:opacity-100 transition-opacity" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                                About
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('contacts.index') }}" class="text-gray-300 hover:text-white transition-colors duration-200 flex items-center group">
                                <svg class="w-4 h-4 mr-2 opacity-0 group-hover:opacity-100 transition-opacity" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                                Contact
                            </a>
                        </li>
                        <li>
                            <a href="#features" class="text-gray-300 hover:text-white transition-colors duration-200 flex items-center group">
                                <svg class="w-4 h-4 mr-2 opacity-0 group-hover:opacity-100 transition-opacity" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                                Features
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Support -->
                <div>
                    <h3 class="text-lg font-semibold mb-6 text-white">Support</h3>
                    <ul class="space-y-3">
                        <li>
                            <a href="#" class="text-gray-300 hover:text-white transition-colors duration-200 flex items-center group">
                                <svg class="w-4 h-4 mr-2 opacity-0 group-hover:opacity-100 transition-opacity" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                                Help Center
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-gray-300 hover:text-white transition-colors duration-200 flex items-center group">
                                <svg class="w-4 h-4 mr-2 opacity-0 group-hover:opacity-100 transition-opacity" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                                Documentation
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-gray-300 hover:text-white transition-colors duration-200 flex items-center group">
                                <svg class="w-4 h-4 mr-2 opacity-0 group-hover:opacity-100 transition-opacity" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                                Terms of Service
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-gray-300 hover:text-white transition-colors duration-200 flex items-center group">
                                <svg class="w-4 h-4 mr-2 opacity-0 group-hover:opacity-100 transition-opacity" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                                Privacy Policy
                            </a>
                        </li>
                <!-- App Store Links -->
                <div>
                    <h3 class="text-lg font-semibold mb-6 text-white">Download Our App</h3>
                    <div class="flex space-x-4 mb-8">
                        <!-- App Store -->
                        <a href="https://apps.apple.com" target="_blank" class="inline-block">
                            <img src="https://developer.apple.com/assets/elements/badges/download-on-the-app-store.svg" alt="Download on the App Store" class="w-32 h-12 hover:opacity-80 transition-opacity">
                        </a>
                        <!-- Google Play -->
                        <a href="https://play.google.com/store" target="_blank" class="inline-block">
                            <img src="https://play.google.com/intl/en_us/badges/static/images/badges/en_badge_web_generic.png" alt="Get it on Google Play" class="w-32 h-15 hover:opacity-80 transition-opacity">
                        </a>
                    </div>

                    <!-- Social Links -->
                    <div>
                        <h4 class="text-md font-semibold mb-4 text-white">Connect with Us</h4>
                        <div class="flex space-x-4">
                            <a href="#" class="w-10 h-10 bg-white/10 hover:bg-white/20 rounded-lg flex items-center justify-center transition-all duration-300 hover:scale-110">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                                </svg>
                            </a>
                            <a href="#" class="w-10 h-10 bg-white/10 hover:bg-white/20 rounded-lg flex items-center justify-center transition-all duration-300 hover:scale-110">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                                </svg>
                            </a>
                            <a href="#" class="w-10 h-10 bg-white/10 hover:bg-white/20 rounded-lg flex items-center justify-center transition-all duration-300 hover:scale-110">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.174-.105-.949-.199-2.403.041-3.439.219-.937 1.219-5.162 1.219-5.162s-.279-.558-.279-1.379c0-1.279.74-2.237 1.658-2.237.783 0 1.16.588 1.16 1.299 0 .787-.501 1.968-.759 3.063-.219.919.461 1.668 1.36 1.668 1.639 0 2.898-1.719 2.898-4.201 0-2.198-1.579-3.736-3.837-3.736-2.617 0-4.15 1.96-4.15 3.988 0 .787.301 1.631.679 2.088.078.099.099.179.079.279-.08.301-.24 1.04-.28 1.178-.04.179-.139.219-.319.139-1.199-.559-1.939-2.298-1.939-3.697 0-2.897 2.099-5.556 6.077-5.556 3.198 0 5.675 2.278 5.675 5.321 0 3.177-2.001 5.734-4.777 5.734-.939 0-1.818-.499-2.118-1.099 0 0-.479 1.838-.599 2.277-.219.859-.8 1.919-1.199 2.577C9.197 23.814 10.566 24.001 12.017 24.001c6.624 0 11.99-5.367 11.99-11.987C24.007 5.367 18.641.001 12.017.001z"/>
                                </svg>
                            </a>
                            <a href="#" class="w-10 h-10 bg-white/10 hover:bg-white/20 rounded-lg flex items-center justify-center transition-all duration-300 hover:scale-110">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

        <!-- Bottom Footer -->
        <div class="border-t border-white/10 mt-16 pt-8">
            <div class="flex flex-col md:flex-row justify-center items-center">
            </div>
        </div>

        <!-- Copyright Centered at Bottom -->
        <div class="w-full text-justify text-gray-400 text-sm mt-8">
            {{ date('Y') }} Proton. All rights reserved. Designed with  for innovation.
        </div>
    </div>
</footer>
