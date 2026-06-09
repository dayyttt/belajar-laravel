@extends('layouts.home')
@section('title', 'Produk & Layanan - TokiToki')
@section('content')

{{-- ========================================
     HERO SECTION
     ======================================== --}}
<section class="relative bg-gradient-to-br from-green-50 via-teal-50 to-emerald-50 overflow-hidden">
    {{-- Background Pattern --}}
    <div class="absolute inset-0 opacity-5">
        <div class="absolute top-0 left-0 w-96 h-96 bg-green-500 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-teal-500 rounded-full blur-3xl"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 lg:py-24">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            {{-- Left Column: Text Content --}}
            <div class="text-center lg:text-left">
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-gray-900 leading-tight mb-6">
                    Daftar Layanan
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-green-600 to-teal-600">TokiToki</span>
                </h1>
                <p class="text-lg sm:text-xl text-gray-600 mb-8 max-w-2xl mx-auto lg:mx-0">
                    Solusi jasa online untuk kebutuhan Anda sehari-hari. Temukan berbagai layanan profesional dan terpercaya yang siap membantu Anda kapan saja.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                    <a href="https://wa.me/6285771062740?text=Halo%20TokiToki,%20saya%20ingin%20memesan%20layanan%0A%0ANama:%0AAlamat:%0ALayanan%20yang%20dibutuhkan:%0ATanggal%20%26%20Waktu:%0ACatatan%20Tambahan:" 
                       target="_blank"
                       class="inline-flex items-center justify-center px-8 py-4 bg-gradient-to-r from-green-600 to-teal-600 text-white font-bold rounded-xl shadow-lg hover:shadow-xl hover:scale-105 transition-all duration-300">
                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.890-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                        </svg>
                        Pesan Layanan Sekarang
                    </a>
                    <a href="#cara-kerja" 
                       class="inline-flex items-center justify-center px-8 py-4 border-2 border-green-600 text-green-600 font-bold rounded-xl hover:bg-green-50 transition-all duration-300">
                        Pelajari Cara Kerja
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/>
                        </svg>
                    </a>
                </div>
            </div>

            {{-- Right Column: Image/Illustration --}}
            <div class="hidden lg:block">
                <div class="relative">
                    <div class="absolute -top-4 -right-4 w-72 h-72 bg-gradient-to-br from-green-400 to-teal-500 rounded-3xl opacity-20 blur-2xl"></div>
                    <img src="{{ asset('assets/img/product-hero.svg') }}" 
                         alt="TokiToki Products" 
                         class="relative z-10 w-full h-auto drop-shadow-2xl"
                         onerror="this.src='https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?w=600&q=80'">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ========================================
     SEARCH & FILTER SECTION
     ======================================== --}}
<section class="bg-white py-8 border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
            {{-- Search Input --}}
            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-gray-700 mb-2">Cari Layanan</label>
                <div class="relative">
                    <input type="text" 
                           placeholder="Cari layanan (contoh: bersih, AC, laundry)" 
                           class="w-full px-4 py-3 pl-10 border border-gray-300 rounded-xl focus:ring-2 focus:ring-green-500 focus:border-transparent transition-all">
                    <svg class="absolute left-3 top-1/2 transform -translate-y-1/2 w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                </div>
            </div>

            {{-- Category Filter --}}
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Kategori</label>
                <select class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-green-500 focus:border-transparent transition-all">
                    <option>Semua Kategori</option>
                    <option>Rumah Tangga</option>
                    <option>Elektronik</option>
                    <option>Kendaraan</option>
                    <option>Kesehatan</option>
                    <option>Pendidikan</option>
                    <option>Bisnis & IT</option>
                </select>
            </div>

            {{-- Reset Button --}}
            <div class="flex items-end">
                <button class="w-full px-6 py-3 border-2 border-gray-300 text-gray-700 font-semibold rounded-xl hover:bg-gray-50 transition-all duration-300">
                    Reset Filter
                </button>
            </div>
        </div>
    </div>
</section>

{{-- ========================================
     KATEGORI LAYANAN JASA
     ======================================== --}}
<section id="layanan" class="py-16 lg:py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {{-- Section Header --}}
        <div class="text-center mb-12">
            <h2 class="text-3xl sm:text-4xl font-extrabold text-gray-900 mb-4">
                Kategori Layanan Jasa
            </h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Pilih kategori layanan yang sesuai dengan kebutuhan Anda dari berbagai pilihan yang tersedia.
            </p>
        </div>

        {{-- Service Category Cards Grid --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @php
            $categories = [
                [
                    'title' => 'Lokasi Terdekat',
                    'desc' => 'Temukan layanan dan tempat terdekat dengan mudah dan cepat.',
                    'badge' => 'Populer',
                    'badge_color' => 'bg-green-500',
                    'img' => 'layanan-1.jpg',
                    'features' => ['Pencarian Instan', 'Rekomendasi Terbaik', 'Akses 24/7'],
                    'button_color' => 'from-green-500 to-teal-500 hover:from-green-600 hover:to-teal-600',
                    'slug' => 'lokasi-terdekat'
                ],
                [
                    'title' => 'Rumah Tangga',
                    'desc' => 'Solusi lengkap untuk kebutuhan rumah tangga dan perawatan hunian.',
                    'badge' => 'Terpercaya',
                    'badge_color' => 'bg-teal-500',
                    'img' => 'layanan-2.jpg',
                    'features' => ['Perawatan Hunian', 'Produk Berkualitas', 'Layanan Cepat'],
                    'button_color' => 'from-teal-500 to-emerald-500 hover:from-teal-600 hover:to-emerald-600',
                    'slug' => 'rumah-tangga'
                ],
                [
                    'title' => 'Elektronik',
                    'desc' => 'Produk dan layanan elektronik terbaru dan terpercaya untuk kehidupan modern.',
                    'badge' => 'Terbaru',
                    'badge_color' => 'bg-emerald-500',
                    'img' => 'layanan-3.jpg',
                    'features' => ['Gadget Terbaru', 'Garansi Resmi', 'Harga Kompetitif'],
                    'button_color' => 'from-emerald-500 to-green-600 hover:from-emerald-600 hover:to-green-700',
                    'slug' => 'elektronik'
                ],
                [
                    'title' => 'Kendaraan',
                    'desc' => 'Layanan perawatan, rental, dan informasi kendaraan untuk mobilitas Anda.',
                    'badge' => 'Profesional',
                    'badge_color' => 'bg-green-600',
                    'img' => 'layanan-4.jpg',
                    'features' => ['Perawatan Mobil', 'Rental Kendaraan', 'Tips Berkendara'],
                    'button_color' => 'from-green-600 to-teal-600 hover:from-green-700 hover:to-teal-700',
                    'slug' => 'kendaraan'
                ],
                [
                    'title' => 'Kesehatan',
                    'desc' => 'Informasi dan layanan kesehatan terpercaya untuk keluarga Anda.',
                    'badge' => 'Penting',
                    'badge_color' => 'bg-teal-600',
                    'img' => 'layanan-5.jpg',
                    'features' => ['Konsultasi Dokter', 'Obat & Vitamin', 'Tips Sehat'],
                    'button_color' => 'from-teal-600 to-emerald-600 hover:from-teal-700 hover:to-emerald-700',
                    'slug' => 'kesehatan'
                ],
                [
                    'title' => 'Pendidikan',
                    'desc' => 'Platform pembelajaran dan pengembangan skill untuk masa depan cerah.',
                    'badge' => 'Berkualitas',
                    'badge_color' => 'bg-emerald-600',
                    'img' => 'layanan-6.jpg',
                    'features' => ['Kursus Online', 'Sertifikasi', 'Mentor Ahli'],
                    'button_color' => 'from-emerald-600 to-green-700 hover:from-emerald-700 hover:to-green-800',
                    'slug' => 'pendidikan'
                ],
                [
                    'title' => 'Bisnis & IT',
                    'desc' => 'Solusi bisnis dan teknologi informasi untuk pertumbuhan perusahaan Anda.',
                    'badge' => 'Inovatif',
                    'badge_color' => 'bg-green-500',
                    'img' => 'layanan-7.jpg',
                    'features' => ['Konsultasi Bisnis', 'Pengembangan IT', 'Digital Marketing'],
                    'button_color' => 'from-green-500 to-teal-500 hover:from-green-600 hover:to-teal-600',
                    'slug' => 'bisnis-it'
                ],
                [
                    'title' => 'Lainnya',
                    'desc' => 'Berbagai layanan tambahan untuk memenuhi kebutuhan spesifik Anda.',
                    'badge' => 'Fleksibel',
                    'badge_color' => 'bg-teal-500',
                    'img' => 'layanan-8.jpg',
                    'features' => ['Layanan Khusus', 'Konsultasi Umum', 'Support 24/7'],
                    'button_color' => 'from-teal-500 to-emerald-500 hover:from-teal-600 hover:to-emerald-600',
                    'slug' => 'lainnya'
                ],
            ];
            @endphp

            @foreach($categories as $category)
            <div class="bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 border-2 border-transparent hover:border-green-500 overflow-hidden group">
                {{-- Category Image --}}
                <div class="relative overflow-hidden h-48">
                    <img src="{{ asset('assets/img/about/' . $category['img']) }}" 
                         alt="{{ $category['title'] }}" 
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                    
                    {{-- Badge --}}
                    <div class="absolute bottom-4 left-4">
                        <span class="{{ $category['badge_color'] }} text-white px-3 py-1 rounded-full text-sm font-semibold">
                            {{ $category['badge'] }}
                        </span>
                    </div>
                </div>

                {{-- Category Content --}}
                <div class="p-6">
                    {{-- Title --}}
                    <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-green-600 transition-colors">
                        {{ $category['title'] }}
                    </h3>

                    {{-- Description --}}
                    <p class="text-gray-600 text-sm mb-4 leading-relaxed">
                        {{ $category['desc'] }}
                    </p>

                    {{-- Features List --}}
                    <ul class="text-sm text-gray-700 space-y-2 mb-6">
                        @foreach($category['features'] as $feature)
                        <li class="flex items-center">
                            <span class="w-2 h-2 bg-green-500 rounded-full mr-3"></span>
                            {{ $feature }}
                        </li>
                        @endforeach
                    </ul>

                    {{-- Action Button --}}
                    <a href="{{ route('layanan-info.show', $category['slug']) }}" 
                       class="block w-full text-center px-6 py-3 bg-gradient-to-r {{ $category['button_color'] }} text-white font-semibold rounded-xl transition-all duration-300 shadow-md hover:shadow-lg">
                        Lihat Detail
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ========================================
     ALUR PEMESANAN LAYANAN
     ======================================== --}}
<section id="cara-kerja" class="py-16 lg:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {{-- Section Header --}}
        <div class="text-center mb-12">
            <h2 class="text-3xl sm:text-4xl font-extrabold text-gray-900 mb-4">
                Alur Pemesanan Layanan
            </h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Mudah, cepat, dan praktis dalam beberapa langkah sederhana.
            </p>
        </div>

        {{-- Steps Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-5 gap-6">
            @php
            $orderSteps = [
                [
                    'step' => '1',
                    'title' => 'Pilih Layanan',
                    'desc' => 'Jelajahi dan pilih layanan yang sesuai dengan kebutuhan Anda.',
                    'icon' => '<svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h10"/></svg>',
                    'color' => 'from-green-500 to-teal-500'
                ],
                [
                    'step' => '2',
                    'title' => 'Isi Detail Pesanan',
                    'desc' => 'Masukkan informasi lengkap tentang layanan yang Anda butuhkan.',
                    'icon' => '<svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg>',
                    'color' => 'from-teal-500 to-emerald-500'
                ],
                [
                    'step' => '3',
                    'title' => 'Konfirmasi & Pembayaran',
                    'desc' => 'Tinjau pesanan dan lakukan pembayaran dengan metode yang tersedia.',
                    'icon' => '<svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"/></svg>',
                    'color' => 'from-emerald-500 to-green-600'
                ],
                [
                    'step' => '4',
                    'title' => 'Layanan Diproses',
                    'desc' => 'Mitra profesional kami akan segera memproses pesanan Anda.',
                    'icon' => '<svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>',
                    'color' => 'from-green-400 to-teal-500'
                ],
                [
                    'step' => '5',
                    'title' => 'Selesai & Beri Penilaian',
                    'desc' => 'Layanan selesai dan Anda dapat memberikan rating serta ulasan.',
                    'icon' => '<svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>',
                    'color' => 'from-teal-400 to-green-500'
                ],
            ];
            @endphp

            @foreach($orderSteps as $step)
            <div class="relative">
                {{-- Step Card --}}
                <div class="bg-white border-2 border-gray-200 rounded-2xl p-6 hover:border-green-500 hover:shadow-lg transition-all duration-300">
                    {{-- Step Number Badge --}}
                    <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">
                        <div class="w-10 h-10 bg-gradient-to-r {{ $step['color'] }} rounded-full flex items-center justify-center text-white font-bold text-lg shadow-lg">
                            {{ $step['step'] }}
                        </div>
                    </div>

                    {{-- Icon --}}
                    <div class="text-green-600 mb-4 mt-4 flex justify-center">
                        {!! $step['icon'] !!}
                    </div>

                    {{-- Title --}}
                    <h3 class="text-lg font-bold text-gray-900 mb-2 text-center">
                        {{ $step['title'] }}
                    </h3>

                    {{-- Description --}}
                    <p class="text-gray-600 text-sm text-center leading-relaxed">
                        {{ $step['desc'] }}
                    </p>
                </div>

                {{-- Arrow Connector (hidden on last item and mobile) --}}
                @if(!$loop->last)
                <div class="hidden md:block absolute top-1/2 -right-3 transform -translate-y-1/2 z-10">
                    <svg class="w-6 h-6 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                    </svg>
                </div>
                @endif
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ========================================
     MENGAPA MEMILIH TOKITOKI
     ======================================== --}}
<section class="py-16 lg:py-24 bg-gradient-to-r from-green-600 via-teal-600 to-emerald-600 relative overflow-hidden">
    {{-- Background Decorative Elements --}}
    <div class="absolute inset-0">
        <div class="absolute top-10 left-10 w-32 h-32 bg-white/20 rounded-full opacity-30 animate-pulse"></div>
        <div class="absolute bottom-10 right-10 w-40 h-40 bg-white/15 rounded-full opacity-25 animate-bounce"></div>
        <div class="absolute top-1/2 left-1/4 w-36 h-36 bg-white/10 rounded-full opacity-30 animate-pulse"></div>
    </div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {{-- Section Header --}}
        <div class="text-center mb-12">
            <h2 class="text-3xl sm:text-4xl font-extrabold text-white mb-6">
                Mengapa Memilih TokiToki?
            </h2>
            <p class="text-xl text-white/90 max-w-3xl mx-auto">
                Kami berkomitmen memberikan layanan terbaik dengan standar kualitas tinggi untuk kepuasan Anda.
            </p>
        </div>

        {{-- Benefits Grid --}}
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @php
            $benefits = [
                [
                    'title' => 'Kualitas Terjamin',
                    'desc' => 'Semua mitra telah melalui proses seleksi ketat untuk memastikan kualitas layanan terbaik.',
                    'icon' => '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>'
                ],
                [
                    'title' => 'Layanan Cepat',
                    'desc' => 'Respon cepat dan penyelesaian layanan yang efisien untuk kepuasan pelanggan.',
                    'icon' => '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>'
                ],
                [
                    'title' => 'Harga Transparan',
                    'desc' => 'Tidak ada biaya tersembunyi, semua harga jelas dan kompetitif di pasaran.',
                    'icon' => '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"/></svg>'
                ],
                [
                    'title' => 'Support 24/7',
                    'desc' => 'Tim customer service siap membantu Anda kapan saja, dimana saja.',
                    'icon' => '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>'
                ],
                [
                    'title' => 'Aman & Terpercaya',
                    'desc' => 'Sistem keamanan berlapis dan perlindungan data untuk menjaga privasi Anda.',
                    'icon' => '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>'
                ],
                [
                    'title' => 'Kepuasan Pelanggan',
                    'desc' => 'Komitmen kami adalah kepuasan pelanggan dengan rating tinggi dari pengguna.',
                    'icon' => '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>'
                ],
            ];
            @endphp

            @foreach($benefits as $benefit)
            <div class="bg-white/20 backdrop-blur-sm p-8 rounded-2xl border border-white/30 hover:bg-white/30 transition-all duration-300">
                {{-- Icon --}}
                <div class="w-16 h-16 bg-white/30 rounded-xl flex items-center justify-center mb-6">
                    <div class="text-white">
                        {!! $benefit['icon'] !!}
                    </div>
                </div>

                {{-- Title --}}
                <h3 class="text-xl font-bold text-white mb-4">
                    {{ $benefit['title'] }}
                </h3>

                {{-- Description --}}
                <p class="text-white/90 leading-relaxed">
                    {{ $benefit['desc'] }}
                </p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ========================================
     CTA SECTION
     ======================================== --}}
<section class="py-16 lg:py-24 bg-gradient-to-br from-gray-50 to-gray-100">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl sm:text-4xl font-extrabold text-gray-900 mb-6">
            Siap Memulai dengan TokiToki?
        </h2>
        <p class="text-xl text-gray-600 mb-8 max-w-2xl mx-auto leading-relaxed">
            Bergabunglah dengan ribuan pengguna yang telah merasakan kemudahan dan kualitas layanan kami. Mulai sekarang dan rasakan perbedaannya!
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('layanan-info.index') }}" 
               class="inline-flex items-center justify-center px-8 py-4 bg-gradient-to-r from-green-600 to-teal-600 text-white font-bold rounded-xl shadow-lg hover:shadow-xl hover:scale-105 transition-all duration-300">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                </svg>
                Mulai Sekarang
            </a>
            <a href="{{ route('contacts.index') }}" 
               class="inline-flex items-center justify-center px-8 py-4 border-2 border-gray-300 text-gray-700 font-bold rounded-xl hover:border-gray-400 hover:bg-gray-50 transition-all duration-300 shadow-md hover:shadow-lg">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
                Hubungi Kami
            </a>
        </div>
    </div>
</section>

@endsection
