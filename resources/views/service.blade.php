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
                    Solusi jasa online untuk kebutuhan Anda sehari-hari. Temukan layanan profesional yang tepat dengan mudah dan cepat.
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
                    <img src="{{ asset('assets/img/service-hero.svg') }}" 
                         alt="TokiToki Services" 
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
     GRID CARD LAYANAN
     ======================================== --}}
<section id="layanan" class="py-16 lg:py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {{-- Section Header --}}
        <div class="text-center mb-12">
            <h2 class="text-3xl sm:text-4xl font-extrabold text-gray-900 mb-4">
                Layanan Kami
            </h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Pilih layanan yang sesuai dengan kebutuhan Anda dari berbagai kategori yang tersedia.
            </p>
        </div>

        {{-- Service Cards Grid --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @php
            $services = [
                [
                    'title' => 'Bersih-Bersih',
                    'desc' => 'Layanan kebersihan rumah dan kantor dengan tenaga profesional dan peralatan lengkap.',
                    'icon' => '<svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>',
                    'color' => 'from-green-500 to-teal-500',
                    'img' => 'https://images.unsplash.com/photo-1581578731548-c64695cc6952?w=400&q=80'
                ],
                [
                    'title' => 'Perbaikan AC',
                    'desc' => 'Servis dan perbaikan AC semua merek dengan teknisi bersertifikat dan spare part original.',
                    'icon' => '<svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"/></svg>',
                    'color' => 'from-teal-500 to-emerald-500',
                    'img' => 'https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=400&q=80'
                ],
                [
                    'title' => 'Laundry',
                    'desc' => 'Layanan cuci pakaian, setrika, dan dry cleaning dengan hasil bersih dan wangi.',
                    'icon' => '<svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"/></svg>',
                    'color' => 'from-emerald-500 to-green-600',
                    'img' => 'https://images.unsplash.com/photo-1517677208171-0bc6725a3e60?w=400&q=80'
                ],
                [
                    'title' => 'Layanan Rumah Tangga',
                    'desc' => 'Asisten rumah tangga profesional untuk membantu pekerjaan rumah sehari-hari.',
                    'icon' => '<svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>',
                    'color' => 'from-green-400 to-teal-500',
                    'img' => 'https://images.unsplash.com/photo-1556911220-bff31c812dba?w=400&q=80'
                ],
                [
                    'title' => 'Perbaikan Elektronik',
                    'desc' => 'Servis TV, kulkas, mesin cuci, dan elektronik lainnya dengan garansi.',
                    'icon' => '<svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>',
                    'color' => 'from-teal-400 to-green-500',
                    'img' => 'https://images.unsplash.com/photo-1518770660439-4636190af475?w=400&q=80'
                ],
                [
                    'title' => 'Jasa Pindahan',
                    'desc' => 'Layanan pindahan rumah dan kantor dengan armada lengkap dan tenaga terlatih.',
                    'icon' => '<svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"/></svg>',
                    'color' => 'from-emerald-400 to-teal-500',
                    'img' => 'https://images.unsplash.com/photo-1600880292203-757bb62b4baf?w=400&q=80'
                ],
            ];
            @endphp

            @foreach($services as $service)
            <div class="bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 border-2 border-transparent hover:border-green-500 overflow-hidden group">
                {{-- Service Image --}}
                <div class="relative overflow-hidden h-48">
                    <img src="{{ $service['img'] }}" 
                         alt="{{ $service['title'] }}" 
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                    <div class="absolute inset-0 bg-gradient-to-t {{ $service['color'] }} opacity-0 group-hover:opacity-20 transition-opacity duration-300"></div>
                </div>

                {{-- Service Content --}}
                <div class="p-6">
                    {{-- Icon --}}
                    <div class="text-green-600 mb-4">
                        {!! $service['icon'] !!}
                    </div>

                    {{-- Title --}}
                    <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-green-600 transition-colors">
                        {{ $service['title'] }}
                    </h3>

                    {{-- Description --}}
                    <p class="text-gray-600 text-sm mb-6 leading-relaxed">
                        {{ $service['desc'] }}
                    </p>

                    {{-- Actions --}}
                    <div class="flex flex-col gap-3">
                        @php
                            // Manual encoding for service title
                            $encodedTitle = str_replace(' ', '%20', $service['title']);
                            $encodedTitle = str_replace('-', '%2D', $encodedTitle);
                        @endphp
                        <a href="https://wa.me/6285771062740?text=Halo%20TokiToki,%20saya%20ingin%20memesan%20layanan%20*{{ $encodedTitle }}*%0A%0ANama:%0AAlamat:%0ATanggal%20%26%20Waktu:%0ACatatan%20Tambahan:" 
                           target="_blank"
                           class="inline-flex items-center justify-center px-6 py-3 bg-gradient-to-r from-green-600 to-teal-600 text-white font-semibold rounded-xl hover:shadow-lg transition-all duration-300">
                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.890-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                            </svg>
                            Pesan Sekarang
                        </a>
                        <a href="{{ route('layanan-info.index') }}" 
                           class="inline-flex items-center justify-center text-green-600 font-semibold text-sm group-hover:translate-x-2 transition-transform">
                            Lihat Detail
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </a>
                    </div>
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
     KEUNGGULAN LAYANAN TOKITOKI
     ======================================== --}}
<section class="py-16 lg:py-24 bg-gradient-to-br from-gray-50 to-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {{-- Section Header --}}
        <div class="text-center mb-12">
            <h2 class="text-3xl sm:text-4xl font-extrabold text-gray-900 mb-4">
                Keunggulan Layanan TokiToki
            </h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Mengapa ribuan pengguna mempercayai TokiToki untuk kebutuhan layanan mereka.
            </p>
        </div>

        {{-- Benefits Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @php
            $benefits = [
                [
                    'title' => 'Terpercaya',
                    'desc' => 'Semua mitra telah melalui verifikasi ketat dan memiliki track record yang baik dengan rating tinggi dari pengguna.',
                    'icon' => '<svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>'
                ],
                [
                    'title' => 'Kualitas Terjamin',
                    'desc' => 'Kami menjamin kualitas layanan dengan standar profesional dan garansi kepuasan untuk setiap pesanan.',
                    'icon' => '<svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/></svg>'
                ],
                [
                    'title' => 'Cepat & Tepat Waktu',
                    'desc' => 'Respon cepat dan pengerjaan tepat waktu sesuai jadwal yang telah disepakati tanpa penundaan.',
                    'icon' => '<svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>'
                ],
                [
                    'title' => 'Harga Transparan',
                    'desc' => 'Tidak ada biaya tersembunyi. Semua harga tercantum jelas dan dapat dibandingkan sebelum memesan.',
                    'icon' => '<svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>'
                ],
                [
                    'title' => 'Layanan Pelanggan',
                    'desc' => 'Tim customer service kami siap membantu Anda 24/7 untuk menjawab pertanyaan dan menyelesaikan masalah.',
                    'icon' => '<svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"/></svg>'
                ],
                [
                    'title' => 'Pembayaran Aman',
                    'desc' => 'Sistem pembayaran yang aman dengan berbagai metode pilihan dan perlindungan transaksi terjamin.',
                    'icon' => '<svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>'
                ],
            ];
            @endphp

            @foreach($benefits as $benefit)
            <div class="bg-white rounded-2xl p-8 shadow-sm hover:shadow-xl transition-all duration-300 border-2 border-transparent hover:border-green-500">
                {{-- Icon --}}
                <div class="text-green-600 mb-4">
                    {!! $benefit['icon'] !!}
                </div>

                {{-- Title --}}
                <h3 class="text-xl font-bold text-gray-900 mb-3">
                    {{ $benefit['title'] }}
                </h3>

                {{-- Description --}}
                <p class="text-gray-600 leading-relaxed">
                    {{ $benefit['desc'] }}
                </p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ========================================
     CTA MITRA LAYANAN
     ======================================== --}}
<section class="py-16 lg:py-24 bg-gradient-to-r from-green-600 via-teal-600 to-emerald-600 relative overflow-hidden">
    {{-- Background Pattern --}}
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-0 left-0 w-96 h-96 bg-white rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-white rounded-full blur-3xl"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            {{-- Left Column: Content --}}
            <div class="text-center lg:text-left">
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white mb-6">
                    Ingin Menjadi Mitra Layanan TokiToki?
                </h2>
                <p class="text-xl text-white/90 mb-8 leading-relaxed">
                    Bergabunglah dengan ribuan mitra profesional kami dan tingkatkan pendapatan Anda. Dapatkan akses ke jutaan pelanggan potensial di seluruh Indonesia.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                    <a href="https://wa.me/6285771062740?text=Halo%20TokiToki,%20saya%20ingin%20mendaftar%20sebagai%20*Mitra%20Layanan*%0A%0ANama:%0ALayanan%20yang%20ditawarkan:%0APengalaman:%0ANo.%20Telepon:%0AAlamat:%0ACatatan%20Tambahan:" 
                       target="_blank"
                       class="inline-flex items-center justify-center px-8 py-4 bg-white text-green-600 font-bold rounded-xl shadow-xl hover:shadow-2xl hover:scale-105 transition-all duration-300">
                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.890-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                        </svg>
                        Daftar Jadi Mitra
                    </a>
                    <a href="{{ route('about') }}" 
                       class="inline-flex items-center justify-center px-8 py-4 border-2 border-white text-white font-bold rounded-xl hover:bg-white/10 transition-all duration-300">
                        Pelajari Lebih Lanjut
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
            </div>

            {{-- Right Column: Benefits List --}}
            <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-8 border border-white/20">
                <h3 class="text-2xl font-bold text-white mb-6">Keuntungan Menjadi Mitra:</h3>
                <ul class="space-y-4">
                    @php
                    $partnerBenefits = [
                        'Akses ke jutaan pelanggan potensial',
                        'Sistem pembayaran yang aman dan cepat',
                        'Fleksibilitas waktu kerja sesuai jadwal Anda',
                        'Dukungan marketing dan promosi gratis',
                        'Pelatihan dan sertifikasi profesional',
                        'Komisi kompetitif untuk setiap transaksi'
                    ];
                    @endphp

                    @foreach($partnerBenefits as $partnerBenefit)
                    <li class="flex items-start text-white">
                        <svg class="w-6 h-6 mr-3 flex-shrink-0 text-green-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <span class="text-lg">{{ $partnerBenefit }}</span>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>

@endsection
