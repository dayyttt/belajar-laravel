@extends('layouts.home')
@section('title', 'Tentang Kami - TokiToki')
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
                    Tentang TokiToki
                </h1>
                <p class="text-lg sm:text-xl text-gray-600 mb-8 max-w-2xl mx-auto lg:mx-0 leading-relaxed">
                    TokiToki adalah platform layanan jasa online yang menghubungkan Anda dengan penyedia layanan profesional, cepat, terpercaya, dan mudah diakses kapan saja.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                    <a href="{{ route('layanan-info.index') }}" 
                       class="inline-flex items-center justify-center px-8 py-4 bg-gradient-to-r from-green-600 to-teal-600 text-white font-bold rounded-xl shadow-lg hover:shadow-xl hover:scale-105 transition-all duration-300">
                        Pelajari Lebih Lanjut
                    </a>
                    <a href="{{ route('contacts.index') }}" 
                       class="inline-flex items-center justify-center px-8 py-4 border-2 border-green-600 text-green-600 font-bold rounded-xl hover:bg-green-50 transition-all duration-300">
                        Hubungi Kami
                    </a>
                </div>
            </div>

            {{-- Right Column: Illustration --}}
            <div class="hidden lg:block">
                <div class="relative">
                    <div class="absolute -top-4 -right-4 w-72 h-72 bg-gradient-to-br from-green-400 to-teal-500 rounded-3xl opacity-20 blur-2xl"></div>
                    <img src="{{ asset('assets/img/about-illustration.svg') }}" 
                         alt="Tentang TokiToki" 
                         class="relative z-10 w-full h-auto drop-shadow-2xl"
                         onerror="this.src='https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=600&q=80'">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ========================================
     PROFIL STARTUP TOKITOKI
     ======================================== --}}
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {{-- Section Header --}}
        <div class="text-center mb-12">
            <h2 class="text-3xl sm:text-4xl font-extrabold text-gray-900 mb-4">
                Profil Startup TokiToki
            </h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Dibangun dengan semangat inovasi dan kepedulian terhadap kebutuhan masyarakat, TokiToki hadir untuk memberikan pengalaman layanan jasa yang lebih mudah, aman, dan transparan.
            </p>
        </div>

        {{-- Profile Cards Grid --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @php
            $profiles = [
                [
                    'title' => 'Tahun Berdiri',
                    'value' => '2025',
                    'icon' => '<svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>'
                ],
                [
                    'title' => 'Bentuk',
                    'value' => 'Startup Digital',
                    'icon' => '<svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>'
                ],
                [
                    'title' => 'Tim',
                    'value' => 'Profesional & Berdedikasi',
                    'icon' => '<svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>'
                ],
                [
                    'title' => 'Berkantor di',
                    'value' => 'Cileungsi, Bogor',
                    'icon' => '<svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>'
                ],
            ];
            @endphp

            @foreach($profiles as $profile)
            <div class="bg-white border-2 border-gray-200 rounded-2xl p-6 hover:border-green-500 hover:shadow-lg transition-all duration-300 text-center">
                {{-- Icon --}}
                <div class="text-green-600 mb-4 flex justify-center">
                    {!! $profile['icon'] !!}
                </div>

                {{-- Title --}}
                <h3 class="text-sm font-semibold text-gray-500 mb-2 uppercase tracking-wide">
                    {{ $profile['title'] }}
                </h3>

                {{-- Value --}}
                <p class="text-xl font-bold text-gray-900">
                    {{ $profile['value'] }}
                </p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ========================================
     VISI & MISI SECTION
     ======================================== --}}
<section class="py-16 lg:py-24 bg-gray-50 relative overflow-hidden">
    {{-- Decorative Dots --}}
    <div class="absolute top-10 left-10 opacity-20">
        <div class="grid grid-cols-5 gap-2">
            @for($i = 0; $i < 15; $i++)
            <div class="w-2 h-2 bg-green-500 rounded-full"></div>
            @endfor
        </div>
    </div>
    <div class="absolute bottom-10 right-10 opacity-20">
        <div class="grid grid-cols-5 gap-2">
            @for($i = 0; $i < 15; $i++)
            <div class="w-2 h-2 bg-teal-500 rounded-full"></div>
            @endfor
        </div>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {{-- Section Header --}}
        <div class="text-center mb-12">
            <div class="inline-flex items-center px-4 py-2 bg-green-100 text-green-700 rounded-full text-sm font-semibold mb-4">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>
                </svg>
                Tentang Kami
            </div>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-gray-900 mb-4">
                Visi & Misi Kami
            </h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                Kami berkomitmen menjadi platform layanan jasa online terpercaya yang memberikan nilai terbaik bagi pelanggan dan mitra layanan.
            </p>
        </div>

        {{-- Visi & Misi Cards --}}
        <div class="grid lg:grid-cols-2 gap-8 mb-12">
            {{-- Visi Kami Card --}}
            <div class="bg-white rounded-3xl p-8 lg:p-10 shadow-lg border-2 border-gray-100 hover:border-green-500 hover:shadow-xl transition-all duration-300">
                {{-- Icon with Background Illustration --}}
                <div class="relative mb-8">
                    <div class="absolute inset-0 bg-green-50 rounded-3xl opacity-50"></div>
                    <div class="relative flex items-center justify-center h-32">
                        <div class="w-24 h-24 bg-green-100 rounded-full flex items-center justify-center">
                            <svg class="w-12 h-12 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                            </svg>
                        </div>
                        {{-- Decorative Elements --}}
                        <div class="absolute top-4 right-8 w-8 h-8 text-green-300">
                            <svg fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                        </div>
                    </div>
                </div>

                {{-- Content --}}
                <div class="text-center">
                    <span class="inline-block px-4 py-1 bg-green-100 text-green-700 text-sm font-semibold rounded-full mb-4">
                        VISI KAMI
                    </span>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">
                        Menjadi platform layanan jasa online terpercaya di Indonesia
                    </h3>
                    <div class="w-16 h-1 bg-gradient-to-r from-green-500 to-teal-500 mx-auto mb-4"></div>
                    <p class="text-gray-600 leading-relaxed">
                        Kami ingin menjadi pilihan utama yang inklusif dan memberikan nilai terbaik bagi pelanggan dan mitra layanan.
                    </p>
                </div>
            </div>

            {{-- Misi Kami Card --}}
            <div class="bg-white rounded-3xl p-8 lg:p-10 shadow-lg border-2 border-gray-100 hover:border-teal-500 hover:shadow-xl transition-all duration-300">
                {{-- Icon with Background --}}
                <div class="flex items-center justify-center mb-8">
                    <div class="w-24 h-24 bg-teal-100 rounded-full flex items-center justify-center">
                        <svg class="w-12 h-12 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
                        </svg>
                    </div>
                </div>

                {{-- Content --}}
                <div class="text-center mb-6">
                    <span class="inline-block px-4 py-1 bg-teal-100 text-teal-700 text-sm font-semibold rounded-full mb-4">
                        MISI KAMI
                    </span>
                </div>

                {{-- Mission List --}}
                <ul class="space-y-4">
                    @php
                    $missions = [
                        [
                            'icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>',
                            'text' => 'Menghubungkan pelanggan dengan penyedia layanan berkualitas.'
                        ],
                        [
                            'icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>',
                            'text' => 'Memberikan pengalaman layanan yang mudah dan aman.'
                        ],
                        [
                            'icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>',
                            'text' => 'Mendukung pertumbuhan ekonomi lokal.'
                        ],
                        [
                            'icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/></svg>',
                            'text' => 'Terus berinovasi dengan teknologi yang bermanfaat.'
                        ],
                    ];
                    @endphp

                    @foreach($missions as $mission)
                    <li class="flex items-start p-4 bg-teal-50 rounded-xl hover:bg-teal-100 transition-colors duration-200">
                        <div class="flex-shrink-0 w-10 h-10 bg-teal-500 rounded-lg flex items-center justify-center text-white mr-4">
                            {!! $mission['icon'] !!}
                        </div>
                        <p class="text-gray-700 leading-relaxed pt-2">{{ $mission['text'] }}</p>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>

        {{-- Bottom Values Grid --}}
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-6">
            @php
            $values = [
                [
                    'title' => 'Terpercaya',
                    'desc' => 'Layanan berkualitas dari mitra yang terverifikasi.',
                    'icon' => '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>'
                ],
                [
                    'title' => 'Inklusif',
                    'desc' => 'Untuk semua kalangan dan berbagai kebutuhan.',
                    'icon' => '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>'
                ],
                [
                    'title' => 'Berkualitas',
                    'desc' => 'Standar layanan tinggi untuk kepuasan pelanggan.',
                    'icon' => '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/></svg>'
                ],
                [
                    'title' => 'Inovatif',
                    'desc' => 'Selalu berkembang dengan teknologi terbaik.',
                    'icon' => '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/></svg>'
                ],
            ];
            @endphp

            @foreach($values as $value)
            <div class="bg-white rounded-2xl p-6 text-center hover:shadow-lg transition-all duration-300 border-2 border-transparent hover:border-green-500">
                <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center text-green-600 mx-auto mb-4">
                    {!! $value['icon'] !!}
                </div>
                <h4 class="text-lg font-bold text-gray-900 mb-2">{{ $value['title'] }}</h4>
                <p class="text-sm text-gray-600">{{ $value['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ========================================
     UNTUK SIAPA TOKITOKI
     ======================================== --}}
<section class="py-16 lg:py-24 bg-gradient-to-br from-gray-50 to-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {{-- Section Header --}}
        <div class="text-center mb-12">
            <h2 class="text-3xl sm:text-4xl font-extrabold text-gray-900 mb-4">
                Untuk Siapa TokiToki?
            </h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Kami melayani berbagai kebutuhan layanan untuk individu, keluarga, dan bisnis
            </p>
        </div>

        {{-- Target Audience Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @php
            $audiences = [
                [
                    'title' => 'Individu',
                    'desc' => 'Untuk kebutuhan pribadi sehari-hari',
                    'icon' => '<svg class="w-16 h-16" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>'
                ],
                [
                    'title' => 'Keluarga',
                    'desc' => 'Untuk kebutuhan rumah tangga dan keluarga',
                    'icon' => '<svg class="w-16 h-16" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>'
                ],
                [
                    'title' => 'Bisnis & UMKM',
                    'desc' => 'Untuk kebutuhan operasional bisnis',
                    'icon' => '<svg class="w-16 h-16" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>'
                ],
            ];
            @endphp

            @foreach($audiences as $audience)
            <div class="bg-white rounded-2xl p-8 shadow-sm hover:shadow-xl transition-all duration-300 border-2 border-transparent hover:border-green-500 text-center">
                {{-- Icon --}}
                <div class="text-green-600 mb-6 flex justify-center">
                    {!! $audience['icon'] !!}
                </div>

                {{-- Title --}}
                <h3 class="text-2xl font-bold text-gray-900 mb-3">
                    {{ $audience['title'] }}
                </h3>

                {{-- Description --}}
                <p class="text-gray-600 leading-relaxed">
                    {{ $audience['desc'] }}
                </p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ========================================
     MITRA LAYANAN KAMI
     ======================================== --}}
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {{-- Section Header --}}
        <div class="text-center mb-12">
            <h2 class="text-3xl sm:text-4xl font-extrabold text-gray-900 mb-4">
                Mitra Layanan Kami
            </h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Kami bekerja sama dengan ribuan mitra profesional di berbagai kategori layanan
            </p>
        </div>

        {{-- Service Categories Grid --}}
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mb-8">
            @php
            $serviceCategories = [
                ['name' => 'Kebersihan', 'slug' => 'rumah-tangga'],
                ['name' => 'Perbaikan AC', 'slug' => 'elektronik'],
                ['name' => 'Rumah Tangga', 'slug' => 'rumah-tangga'],
                ['name' => 'Lainnya', 'slug' => 'lainnya'],
            ];
            @endphp

            @foreach($serviceCategories as $category)
            <a href="{{ route('layanan-info.show', $category['slug']) }}" 
               class="bg-gray-50 border-2 border-gray-200 rounded-xl p-6 text-center hover:border-green-500 hover:bg-green-50 transition-all duration-300 group">
                <p class="text-gray-900 font-semibold group-hover:text-green-600 transition-colors">
                    {{ $category['name'] }}
                </p>
            </a>
            @endforeach
        </div>

        {{-- View All Link --}}
        <div class="text-center">
            <a href="{{ route('layanan-info.index') }}" 
               class="inline-flex items-center text-green-600 font-semibold hover:text-green-700 transition-colors">
                Lihat Semua Kategori
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
            </a>
        </div>
    </div>
</section>

{{-- ========================================
     CTA BANNER
     ======================================== --}}
<section class="py-16 lg:py-24 bg-gradient-to-r from-green-600 via-teal-600 to-emerald-600 relative overflow-hidden">
    {{-- Background Pattern --}}
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-0 left-0 w-96 h-96 bg-white rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-white rounded-full blur-3xl"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between flex-col lg:flex-row gap-8">
            {{-- Left: Icon --}}
            <div class="flex-shrink-0">
                <div class="w-20 h-20 bg-white/20 rounded-2xl flex items-center justify-center">
                    <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"/>
                    </svg>
                </div>
            </div>

            {{-- Center: Text Content --}}
            <div class="text-center lg:text-left flex-1">
                <h2 class="text-3xl sm:text-4xl font-extrabold text-white mb-4">
                    Tertarik bekerja sama atau ingin tahu lebih banyak?
                </h2>
                <p class="text-xl text-white/90 max-w-3xl mx-auto lg:mx-0">
                    Kami siap membantu kebutuhan layanan Anda atau menjadikan Anda mitra layanan Anda
                </p>
            </div>

            {{-- Right: CTA Buttons --}}
            <div class="flex flex-col sm:flex-row gap-4 flex-shrink-0">
                <a href="{{ route('contacts.index') }}" 
                   class="inline-flex items-center justify-center px-8 py-4 bg-white text-green-600 font-bold rounded-xl shadow-xl hover:shadow-2xl hover:scale-105 transition-all duration-300">
                    Hubungi Kami
                </a>
                <a href="{{ route('layanan-info.index') }}" 
                   class="inline-flex items-center justify-center px-8 py-4 border-2 border-white text-white font-bold rounded-xl hover:bg-white/10 transition-all duration-300">
                    Pelajari Lebih Lanjut
                </a>
            </div>
        </div>
    </div>
</section>

@endsection
