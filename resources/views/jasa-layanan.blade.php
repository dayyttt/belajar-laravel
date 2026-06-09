@extends('layouts.home')

@section('title', 'Jasa Layanan - Service Platform TokiToki')

@section('content')

<!-- Hero Section -->
<section class="relative min-h-screen flex items-center justify-center bg-gradient-to-br from-purple-600 via-pink-600 to-indigo-800 overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute inset-0 bg-black/20"></div>
    <div class="absolute top-1/4 left-1/4 w-72 h-72 bg-white/10 rounded-full blur-3xl animate-pulse"></div>
    <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-purple-300/20 rounded-full blur-3xl animate-pulse delay-1000"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="animate-fade-in">
            <!-- Badge -->
            <div class="inline-flex items-center px-4 py-2 bg-white/10 backdrop-blur-sm rounded-full border border-white/20 mb-8">
                <svg class="w-5 h-5 text-purple-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                </svg>
                <span class="text-white/90 text-sm font-medium">Service Platform</span>
            </div>

            <!-- Main Title -->
            <h1 class="text-5xl md:text-7xl font-bold text-white mb-6">
                <span class="block">Jasa Layanan</span>
                <span class="block bg-gradient-to-r from-purple-400 via-pink-400 to-indigo-400 bg-clip-text text-transparent">
                    TokiToki
                </span>
            </h1>

            <!-- Subtitle -->
            <p class="text-xl md:text-2xl text-white/80 mb-12 max-w-3xl mx-auto leading-relaxed">
                Platform marketplace jasa terpercaya yang menghubungkan Anda dengan ribuan penyedia layanan profesional. Temukan solusi untuk setiap kebutuhan Anda.
            </p>

            <!-- CTA Buttons -->
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                <a href="#services" class="px-8 py-4 bg-gradient-to-r from-purple-500 to-pink-500 hover:from-purple-600 hover:to-pink-600 rounded-xl text-white font-semibold text-lg shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:scale-105">
                    Jelajahi Layanan
                </a>
                <a href="#partner" class="px-8 py-4 bg-white/10 backdrop-blur-sm border border-white/20 hover:bg-white/20 rounded-xl text-white font-semibold text-lg shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:scale-105">
                    Jadi Mitra
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Services Categories Section -->
<section id="services" class="py-20 bg-gradient-to-br from-gray-50 to-purple-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                Kategori Layanan Populer
            </h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Temukan berbagai layanan profesional untuk memenuhi kebutuhan pribadi dan bisnis Anda
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Service 1: Rumah Tangga -->
            <div class="group bg-white rounded-2xl shadow-lg overflow-hidden transition-all duration-300 hover:shadow-2xl hover:-translate-y-2">
                <div class="relative overflow-hidden">
                    <div class="w-full h-48 bg-gradient-to-br from-blue-400 to-blue-600 flex items-center justify-center">
                        <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                    </div>
                    <div class="absolute top-4 right-4">
                        <span class="bg-blue-500 text-white px-3 py-1 rounded-full text-sm font-semibold">Populer</span>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Rumah Tangga</h3>
                    <p class="text-gray-600 mb-4">Cleaning service, perbaikan rumah, tukang, dan perawatan hunian</p>
                    <ul class="text-sm text-gray-700 space-y-2 mb-6">
                        <li class="flex items-center"><span class="w-2 h-2 bg-blue-500 rounded-full mr-3"></span>Cleaning Service</li>
                        <li class="flex items-center"><span class="w-2 h-2 bg-blue-500 rounded-full mr-3"></span>Perbaikan & Renovasi</li>
                        <li class="flex items-center"><span class="w-2 h-2 bg-blue-500 rounded-full mr-3"></span>Tukang Listrik & AC</li>
                    </ul>
                    <button class="w-full bg-gradient-to-r from-blue-500 to-indigo-500 text-white py-3 rounded-lg font-semibold hover:from-blue-600 hover:to-indigo-600 transition-all duration-300">
                        Lihat Layanan
                    </button>
                </div>
            </div>

            <!-- Service 2: Kecantikan & Kesehatan -->
            <div class="group bg-white rounded-2xl shadow-lg overflow-hidden transition-all duration-300 hover:shadow-2xl hover:-translate-y-2">
                <div class="relative overflow-hidden">
                    <div class="w-full h-48 bg-gradient-to-br from-pink-400 to-rose-600 flex items-center justify-center">
                        <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                    </div>
                    <div class="absolute top-4 right-4">
                        <span class="bg-pink-500 text-white px-3 py-1 rounded-full text-sm font-semibold">Trending</span>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Kecantikan & Kesehatan</h3>
                    <p class="text-gray-600 mb-4">Salon, spa, massage, dan layanan kesehatan di rumah</p>
                    <ul class="text-sm text-gray-700 space-y-2 mb-6">
                        <li class="flex items-center"><span class="w-2 h-2 bg-pink-500 rounded-full mr-3"></span>Salon & Spa</li>
                        <li class="flex items-center"><span class="w-2 h-2 bg-pink-500 rounded-full mr-3"></span>Massage Therapy</li>
                        <li class="flex items-center"><span class="w-2 h-2 bg-pink-500 rounded-full mr-3"></span>Home Care</li>
                    </ul>
                    <button class="w-full bg-gradient-to-r from-pink-500 to-rose-500 text-white py-3 rounded-lg font-semibold hover:from-pink-600 hover:to-rose-600 transition-all duration-300">
                        Lihat Layanan
                    </button>
                </div>
            </div>

            <!-- Service 3: Teknologi & IT -->
            <div class="group bg-white rounded-2xl shadow-lg overflow-hidden transition-all duration-300 hover:shadow-2xl hover:-translate-y-2">
                <div class="relative overflow-hidden">
                    <div class="w-full h-48 bg-gradient-to-br from-green-400 to-teal-600 flex items-center justify-center">
                        <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path>
                        </svg>
                    </div>
                    <div class="absolute top-4 right-4">
                        <span class="bg-green-500 text-white px-3 py-1 rounded-full text-sm font-semibold">Profesional</span>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Teknologi & IT</h3>
                    <p class="text-gray-600 mb-4">Service komputer, website, aplikasi, dan konsultasi IT</p>
                    <ul class="text-sm text-gray-700 space-y-2 mb-6">
                        <li class="flex items-center"><span class="w-2 h-2 bg-green-500 rounded-full mr-3"></span>Service Komputer</li>
                        <li class="flex items-center"><span class="w-2 h-2 bg-green-500 rounded-full mr-3"></span>Web Development</li>
                        <li class="flex items-center"><span class="w-2 h-2 bg-green-500 rounded-full mr-3"></span>IT Consultant</li>
                    </ul>
                    <button class="w-full bg-gradient-to-r from-green-500 to-teal-500 text-white py-3 rounded-lg font-semibold hover:from-green-600 hover:to-teal-600 transition-all duration-300">
                        Lihat Layanan
                    </button>
                </div>
            </div>

            <!-- Service 4: Pendidikan & Kursus -->
            <div class="group bg-white rounded-2xl shadow-lg overflow-hidden transition-all duration-300 hover:shadow-2xl hover:-translate-y-2">
                <div class="relative overflow-hidden">
                    <div class="w-full h-48 bg-gradient-to-br from-orange-400 to-red-600 flex items-center justify-center">
                        <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                        </svg>
                    </div>
                    <div class="absolute top-4 right-4">
                        <span class="bg-orange-500 text-white px-3 py-1 rounded-full text-sm font-semibold">Berkualitas</span>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Pendidikan & Kursus</h3>
                    <p class="text-gray-600 mb-4">Les privat, kursus online, dan pelatihan profesional</p>
                    <ul class="text-sm text-gray-700 space-y-2 mb-6">
                        <li class="flex items-center"><span class="w-2 h-2 bg-orange-500 rounded-full mr-3"></span>Les Privat</li>
                        <li class="flex items-center"><span class="w-2 h-2 bg-orange-500 rounded-full mr-3"></span>Kursus Online</li>
                        <li class="flex items-center"><span class="w-2 h-2 bg-orange-500 rounded-full mr-3"></span>Pelatihan Skill</li>
                    </ul>
                    <button class="w-full bg-gradient-to-r from-orange-500 to-red-500 text-white py-3 rounded-lg font-semibold hover:from-orange-600 hover:to-red-600 transition-all duration-300">
                        Lihat Layanan
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- How It Works Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                Cara Kerja Platform
            </h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Proses sederhana untuk mendapatkan layanan berkualitas
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <!-- Step 1 -->
            <div class="text-center">
                <div class="w-20 h-20 bg-gradient-to-br from-purple-500 to-pink-600 rounded-full flex items-center justify-center mx-auto mb-6 shadow-lg">
                    <span class="text-2xl font-bold text-white">1</span>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Pilih Layanan</h3>
                <p class="text-gray-600">Browse kategori layanan dan pilih yang sesuai kebutuhan Anda. Filter berdasarkan lokasi, harga, dan rating.</p>
            </div>

            <!-- Step 2 -->
            <div class="text-center">
                <div class="w-20 h-20 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-full flex items-center justify-center mx-auto mb-6 shadow-lg">
                    <span class="text-2xl font-bold text-white">2</span>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Booking & Bayar</h3>
                <p class="text-gray-600">Pilih jadwal yang tersedia, konfirmasi detail layanan, dan lakukan pembayaran dengan aman melalui platform.</p>
            </div>

            <!-- Step 3 -->
            <div class="text-center">
                <div class="w-20 h-20 bg-gradient-to-br from-green-500 to-teal-600 rounded-full flex items-center justify-center mx-auto mb-6 shadow-lg">
                    <span class="text-2xl font-bold text-white">3</span>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Nikmati Layanan</h3>
                <p class="text-gray-600">Penyedia layanan akan datang sesuai jadwal. Berikan rating dan review setelah layanan selesai.</p>
            </div>
        </div>
    </div>
</section>

<!-- Partner Section -->
<section id="partner" class="py-20 bg-gradient-to-br from-purple-50 to-pink-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
                    Bergabung Sebagai Mitra
                </h2>
                <p class="text-xl text-gray-600 mb-8">
                    Kembangkan bisnis Anda dengan bergabung dalam ekosistem TokiToki. Dapatkan akses ke ribuan pelanggan potensial.
                </p>

                <div class="space-y-6">
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-gray-900 mb-2">Penghasilan Tambahan</h3>
                            <p class="text-gray-600">Dapatkan order konsisten dan tingkatkan penghasilan dengan komisi yang kompetitif.</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-gray-900 mb-2">Verifikasi & Training</h3>
                            <p class="text-gray-600">Proses verifikasi yang ketat dan training gratis untuk meningkatkan kualitas layanan.</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-gray-900 mb-2">Support 24/7</h3>
                            <p class="text-gray-600">Tim support yang siap membantu mitra dalam menjalankan bisnis di platform.</p>
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <a href="https://wa.me/6285771062740?text=Halo%20TokiToki,%20saya%20ingin%20mendaftar%20sebagai%20*Mitra%20Layanan*%0A%0ANama:%0ALayanan%20yang%20ditawarkan:%0APengalaman:%0ANo.%20Telepon:%0AAlamat:%0ACatatan%20Tambahan:" 
                       target="_blank"
                       class="inline-flex items-center justify-center bg-gradient-to-r from-purple-500 to-pink-500 text-white px-8 py-4 rounded-xl font-semibold text-lg hover:from-purple-600 hover:to-pink-600 transition-all duration-300 shadow-lg hover:shadow-xl">
                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.890-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                        </svg>
                        Daftar Sebagai Mitra
                    </a>
                </div>
            </div>

            <div class="bg-gradient-to-br from-purple-100 to-pink-100 p-8 rounded-2xl">
                <div class="text-center">
                    <div class="w-24 h-24 bg-gradient-to-br from-purple-500 to-pink-600 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Bergabung dengan 5000+ Mitra</h3>
                    <p class="text-gray-600 mb-6">Ribuan profesional telah mempercayai TokiToki sebagai platform untuk mengembangkan bisnis mereka.</p>
                    <div class="grid grid-cols-2 gap-4 text-center">
                        <div>
                            <div class="text-3xl font-bold text-purple-600">5000+</div>
                            <div class="text-sm text-gray-600">Mitra Aktif</div>
                        </div>
                        <div>
                            <div class="text-3xl font-bold text-purple-600">50K+</div>
                            <div class="text-sm text-gray-600">Order Selesai</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-gradient-to-br from-purple-600 to-pink-800">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
            Mulai Gunakan Jasa Layanan TokiToki
        </h2>
        <p class="text-xl text-white/90 mb-8 max-w-2xl mx-auto">
            Temukan solusi untuk setiap kebutuhan Anda dengan layanan profesional terpercaya
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="/product" class="bg-white text-purple-600 px-8 py-4 rounded-xl font-semibold text-lg hover:bg-gray-100 transition-all duration-300 shadow-lg hover:shadow-xl">
                Jelajahi Layanan
            </a>
            <a href="{{ route('contacts.index') }}" class="bg-white/10 backdrop-blur-sm border border-white/20 text-white px-8 py-4 rounded-xl font-semibold text-lg hover:bg-white/20 transition-all duration-300 shadow-lg hover:shadow-xl">
                Hubungi Kami
            </a>
        </div>
    </div>
</section>

@endsection