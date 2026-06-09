@extends('layouts.home')
@section('title', 'Semua Layanan - TokiToki')

@section('content')

{{-- ── Hero ── --}}
<section class="relative py-20 lg:py-24 bg-gray-50 overflow-hidden">
    {{-- Background Decorations --}}
    <div class="absolute top-10 right-20 opacity-5">
        <svg class="w-32 h-32 text-green-600" fill="currentColor" viewBox="0 0 24 24">
            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
        </svg>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            {{-- Left Column: Content --}}
            <div class="max-w-xl">
                {{-- Badge --}}
                <div class="inline-flex items-center px-4 py-2 bg-green-100 rounded-full mb-6">
                    <svg class="w-4 h-4 text-green-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>
                    </svg>
                    <span class="text-green-700 text-sm font-semibold">Semua layanan terpercaya dalam satu platform</span>
                </div>

                {{-- Title --}}
                <h1 class="text-4xl sm:text-5xl font-extrabold text-gray-900 mb-6 leading-tight">
                    Temukan Jasa Terbaik<br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-green-600 to-teal-600">Dalam Satu Platform</span>
                </h1>

                {{-- Description --}}
                <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                    Ribuan penyedia jasa profesional siap membantu kebutuhanmu, dari rumah tangga hingga bisnis.
                </p>

                {{-- Features Grid --}}
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                    {{-- Feature 1 --}}
                    <div class="flex items-start space-x-3">
                        <div class="flex-shrink-0 w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center">
                            <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-sm font-bold text-gray-900 mb-0.5">Aman & Terpercaya</h3>
                            <p class="text-xs text-gray-600">Verifikasi penyedia jasa</p>
                        </div>
                    </div>

                    {{-- Feature 2 --}}
                    <div class="flex items-start space-x-3">
                        <div class="flex-shrink-0 w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center">
                            <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-sm font-bold text-gray-900 mb-0.5">Harga Transparan</h3>
                            <p class="text-xs text-gray-600">Tanpa biaya tersembunyi</p>
                        </div>
                    </div>

                    {{-- Feature 3 --}}
                    <div class="flex items-start space-x-3">
                        <div class="flex-shrink-0 w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center">
                            <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-sm font-bold text-gray-900 mb-0.5">Layanan 24/7</h3>
                            <p class="text-xs text-gray-600">Siap membantu kapan saja</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Right Column: Illustration --}}
            <div class="hidden lg:block relative">
                {{-- Main Illustration Card --}}
                <div class="relative">
                    {{-- Background Shape --}}
                    <div class="absolute inset-0 bg-gradient-to-br from-green-100 to-teal-100 rounded-3xl transform rotate-3 scale-105"></div>
                    
                    {{-- Image Container --}}
                    <div class="relative z-10 bg-white rounded-3xl shadow-2xl p-8 overflow-hidden">
                        <img src="{{ asset('assets/img/service-worker.svg') }}" 
                             alt="Professional Service Worker" 
                             class="w-full h-auto"
                             onerror="this.src='https://images.unsplash.com/photo-1581578731548-c64695cc6952?w=600&q=80'">
                    </div>

                    {{-- Floating Icons --}}
                    {{-- Icon 1: Drill (Top Right) --}}
                    <div class="absolute -top-4 -right-6 w-20 h-20 bg-white rounded-2xl shadow-xl flex items-center justify-center animate-bounce z-20">
                        <svg class="w-10 h-10 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>
                        </svg>
                    </div>

                    {{-- Icon 2: AC (Top Left) --}}
                    <div class="absolute top-24 -left-6 w-16 h-16 bg-white rounded-xl shadow-xl flex items-center justify-center z-20">
                        <svg class="w-8 h-8 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"/>
                        </svg>
                    </div>

                    {{-- Icon 3: Washing Machine (Bottom Right) --}}
                    <div class="absolute bottom-16 -right-4 w-16 h-16 bg-white rounded-xl shadow-xl flex items-center justify-center z-20">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ── Grid Layanan ── --}}
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach($layanan as $item)
            <a href="{{ route('layanan-info.show', $item['slug']) }}"
               class="group bg-white rounded-2xl shadow-sm hover:shadow-xl hover:-translate-y-2 transition-all duration-300 overflow-hidden border border-gray-100">

                {{-- Gambar --}}
                <div class="relative overflow-hidden">
                    <img src="{{ asset('assets/img/about/' . $item['img']) }}"
                         alt="{{ $item['title'] }}"
                         class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-500">
                    @if($item['badge'])
                    <span class="absolute top-3 left-3 px-2 py-1 bg-gradient-to-r {{ $item['color'] }} text-white text-xs font-bold rounded-full shadow">
                        {{ $item['badge'] }}
                    </span>
                    @endif
                </div>

                {{-- Konten --}}
                <div class="p-5">
                    <h3 class="text-base font-bold text-gray-900 mb-1 group-hover:text-green-600 transition-colors">
                        {{ $item['title'] }}
                    </h3>
                    <p class="text-gray-500 text-sm mb-4 leading-relaxed">{{ $item['short_desc'] }}</p>
                    
                    {{-- Action Buttons --}}
                    <div class="flex flex-col gap-2">
                        @php
                            // Manual encoding for service title
                            $encodedTitle = str_replace(' ', '%20', $item['title']);
                            $encodedTitle = str_replace('-', '%2D', $encodedTitle);
                        @endphp
                        <a href="https://wa.me/6285771062740?text=Halo%20TokiToki,%20saya%20ingin%20memesan%20layanan%20*{{ $encodedTitle }}*%0A%0ANama:%0AAlamat:%0ATanggal%20%26%20Waktu:%0ACatatan%20Tambahan:" 
                           target="_blank"
                           class="inline-flex items-center justify-center px-4 py-2.5 bg-gradient-to-r from-green-600 to-teal-600 text-white font-semibold rounded-xl text-sm hover:shadow-lg transition-all duration-300">
                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.890-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                            </svg>
                            Pesan Sekarang
                        </a>
                        <a href="{{ route('layanan-info.show', $item['slug']) }}" 
                           class="inline-flex items-center justify-center text-green-600 font-semibold text-sm group-hover:translate-x-1 transition-transform">
                            Lihat Detail
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>

{{-- ── CTA ── --}}
<section class="py-16 bg-gradient-to-r from-green-500 to-teal-600">
    <div class="max-w-3xl mx-auto px-4 text-center">
        <h2 class="text-2xl md:text-3xl font-bold text-white mb-3">Tidak menemukan yang kamu cari?</h2>
        <p class="text-white/80 mb-6">Hubungi kami dan kami akan bantu carikan solusi terbaik untukmu.</p>
        <a href="{{ route('contacts.index') }}"
           class="inline-flex items-center px-6 py-3 bg-white text-green-600 font-semibold rounded-xl shadow hover:bg-gray-50 transition-all duration-300 hover:scale-105">
            Hubungi Kami
            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
            </svg>
        </a>
    </div>
</section>

@endsection
