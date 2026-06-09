@extends('layouts.home')
@section('title', __('messages.nav_home') . ' - TokiToki')
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
                    Layanan Jasa Online Andalan Anda,
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-green-600 to-teal-600">Hanya di TokiToki</span>
                </h1>
                <p class="text-lg sm:text-xl text-gray-600 mb-8 max-w-2xl mx-auto lg:mx-0 leading-relaxed">
                    TokiToki adalah platform layanan jasa online yang menghubungkan Anda dengan penyedia layanan profesional, cepat, terpercaya, dan terjangkau untuk setiap kebutuhan Anda kapan saja.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                    <a href="{{ route('service') }}" 
                       class="inline-flex items-center justify-center px-8 py-4 bg-gradient-to-r from-green-600 to-teal-600 text-white font-bold rounded-xl shadow-lg hover:shadow-xl hover:scale-105 transition-all duration-300">
                        Jelajahi Layanan
                    </a>
                </div>
            </div>

            {{-- Right Column: Illustration --}}
            <div class="hidden lg:block">
                <div class="relative">
                    <div class="absolute -top-4 -right-4 w-72 h-72 bg-gradient-to-br from-green-400 to-teal-500 rounded-3xl opacity-20 blur-2xl"></div>
                    <img src="{{ asset('assets/img/hero-illustration.svg') }}" 
                         alt="TokiToki Services" 
                         class="relative z-10 w-full h-auto drop-shadow-2xl"
                         onerror="this.src='https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?w=600&q=80'">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ========================================
     LAYANAN KAMI SECTION
     ======================================== --}}
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {{-- Section Header --}}
        <div class="text-center mb-12">
            <h2 class="text-3xl sm:text-4xl font-extrabold text-gray-900 mb-4">
                Layanan Kami
            </h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Berbagai layanan untuk memenuhi kebutuhan Anda sehari-hari
            </p>
        </div>

        {{-- Service Cards Grid --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @php
            $homeServices = [
                [
                    'title' => 'Bersih-Bersih',
                    'desc' => 'Layanan kebersihan rumah, kantor, dan apartemen dengan tenaga profesional.',
                    'icon' => '<svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>',
                    'slug' => 'rumah-tangga'
                ],
                [
                    'title' => 'Perbaikan AC',
                    'desc' => 'Perbaikan, pemasangan, dan servis AC untuk semua merek dengan teknisi ahli.',
                    'icon' => '<svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"/></svg>',
                    'slug' => 'elektronik'
                ],
                [
                    'title' => 'Layanan Rumah Tangga',
                    'desc' => 'Membantu pekerjaan rumah tangga seperti memasak, mencuci, dan mengurus anak.',
                    'icon' => '<svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>',
                    'slug' => 'rumah-tangga'
                ],
                [
                    'title' => 'Lainnya',
                    'desc' => 'Masih banyak layanan lainnya seperti laundry, pindahan, dan lain-lain.',
                    'icon' => '<svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"/></svg>',
                    'slug' => 'lainnya'
                ],
            ];
            @endphp

            @foreach($homeServices as $service)
            <div class="bg-white border-2 border-gray-200 rounded-2xl p-6 hover:border-green-500 hover:shadow-lg transition-all duration-300 group">
                {{-- Icon --}}
                <div class="text-green-600 mb-4 flex justify-center">
                    {!! $service['icon'] !!}
                </div>

                {{-- Title --}}
                <h3 class="text-xl font-bold text-gray-900 mb-3 text-center group-hover:text-green-600 transition-colors">
                    {{ $service['title'] }}
                </h3>

                {{-- Description --}}
                <p class="text-gray-600 text-sm mb-6 text-center leading-relaxed">
                    {{ $service['desc'] }}
                </p>

                {{-- Action Links --}}
                <div class="flex flex-col gap-2">
                    <a href="{{ route('layanan-info.show', $service['slug']) }}" 
                       class="text-center text-green-600 font-semibold text-sm hover:underline">
                        Lihat Detail →
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ========================================
     MENGAPA MEMILIH TOKITOKI
     ======================================== --}}
<section class="py-16 lg:py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {{-- Section Header --}}
        <div class="text-center mb-12">
            <h2 class="text-3xl sm:text-4xl font-extrabold text-gray-900 mb-4">
                Mengapa Memilih TokiToki?
            </h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Berbagai layanan untuk memenuhi kebutuhan Anda sehari-hari
            </p>
        </div>

        {{-- Benefits Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            @php
            $benefits = [
                [
                    'title' => 'Terpercaya',
                    'desc' => 'Penyedia layanan terverifikasi dan berpengalaman untuk kebutuhan Anda.',
                    'icon' => '<svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>'
                ],
                [
                    'title' => 'Cepat & Praktis',
                    'desc' => 'Pesan layanan dengan mudah kapan saja dan di mana saja melalui platform kami.',
                    'icon' => '<svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>'
                ],
                [
                    'title' => 'Kualitas Terjamin',
                    'desc' => 'Kami memberikan standar kualitas terbaik di setiap layanan.',
                    'icon' => '<svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"/></svg>'
                ],
                [
                    'title' => 'Harga Transparan',
                    'desc' => 'Informasi harga jelas tanpa biaya tersembunyi.',
                    'icon' => '<svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 8h6m-5 0a3 3 0 110 6H9l3 3m-3-6h6m6 1a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>'
                ],
            ];
            @endphp

            @foreach($benefits as $benefit)
            <div class="text-center">
                {{-- Icon --}}
                <div class="inline-flex items-center justify-center w-20 h-20 bg-green-50 rounded-2xl mb-6 text-green-600">
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
     TENTANG TOKITOKI SECTION
     ======================================== --}}
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            {{-- Left Column: Image/Illustration --}}
            <div class="order-2 lg:order-1">
                <div class="relative">
                    <div class="absolute -bottom-6 -left-6 w-full h-full border-4 border-green-500 rounded-3xl opacity-20"></div>
                    <img src="{{ asset('assets/img/about-preview.jpg') }}" 
                         alt="Tentang TokiToki" 
                         class="relative z-10 w-full h-96 object-cover rounded-3xl shadow-2xl"
                         onerror="this.src='https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=800&q=80'">
                </div>
            </div>

            {{-- Right Column: Content --}}
            <div class="order-1 lg:order-2">
                <h2 class="text-3xl sm:text-4xl font-extrabold text-gray-900 mb-6">
                    Tentang TokiToki
                </h2>
                <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                    TokiToki adalah platform marketplace jasa lokal yang menghubungkan Anda dengan penyedia layanan profesional terpercaya. Kami hadir untuk memudahkan hidup Anda dengan menyediakan berbagai layanan berkualitas dalam satu platform.
                </p>
                <p class="text-lg text-gray-600 leading-relaxed">
                    Kami berkomitmen menjadi platform terpercaya bagi pelanggan dan mitra layanan. Kami percaya bahwa setiap keahlian punya nilai, dan setiap kebutuhan pasti ada solusinya.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- ========================================
     APA YANG MEREKA BUTUHKAN
     ======================================== --}}
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {{-- Section Header --}}
        <div class="text-center mb-12">
            <h2 class="text-3xl sm:text-4xl font-extrabold text-gray-900 mb-4">
                Apa yang Mereka Butuhkan?
            </h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Kami memahami kebutuhan Anda dan siap memberikan solusi terbaik.
            </p>
        </div>

        {{-- Main Cards Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
            @php
            $needsCards = [
                [
                    'badge' => 'Untuk Pengusaha',
                    'title' => 'Butuh layanan cepat untuk bisnis Anda?',
                    'desc' => 'Kami membantu pengusaha menemukan mitra terpercaya untuk menghemat waktu dan meningkatkan produktivitas.',
                    'icon' => '<svg class="w-16 h-16" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>',
                    'features' => [
                        'Mitra terpercaya & berkualitas',
                        'Proses cepat & efisien',
                        'Dukungan pelanggan responsif'
                    ]
                ],
                [
                    'badge' => 'Untuk Rumah Tangga',
                    'title' => 'Butuh solusi praktis sehari-hari?',
                    'desc' => 'Kami hadir untuk membantu kebutuhan rumah tangga Anda dengan layanan yang mudah dan terjangkau.',
                    'icon' => '<svg class="w-16 h-16" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>',
                    'features' => [
                        'Booking mudah & cepat',
                        'Harga transparan',
                        'Layanan aman & terpercaya'
                    ]
                ],
                [
                    'badge' => 'Untuk Karyawan',
                    'title' => 'Butuh layanan fleksibel kapan pun Anda butuh?',
                    'desc' => 'Kami menyediakan layanan yang fleksibel dengan dukungan 24/7 untuk memenuhi kebutuhan Anda.',
                    'icon' => '<svg class="w-16 h-16" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>',
                    'features' => [
                        'Layanan 24/7',
                        'Solusi praktis & hemat waktu',
                        'Dukungan kapan saja'
                    ]
                ],
            ];
            @endphp

            @foreach($needsCards as $card)
            <div class="bg-white rounded-2xl p-8 shadow-sm border-2 border-gray-200 hover:border-green-500 hover:shadow-lg transition-all duration-300">
                {{-- Icon --}}
                <div class="w-20 h-20 bg-gray-100 rounded-2xl flex items-center justify-center text-gray-600 mb-6">
                    {!! $card['icon'] !!}
                </div>

                {{-- Badge --}}
                <span class="inline-block px-4 py-1 bg-green-100 text-green-700 text-sm font-semibold rounded-full mb-4">
                    {{ $card['badge'] }}
                </span>

                {{-- Title --}}
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    {{ $card['title'] }}
                </h3>

                {{-- Description --}}
                <p class="text-gray-600 mb-6 leading-relaxed">
                    {{ $card['desc'] }}
                </p>

                {{-- Features List --}}
                <ul class="space-y-3 mb-6">
                    @foreach($card['features'] as $feature)
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-green-600 mr-2 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span class="text-gray-700">{{ $feature }}</span>
                    </li>
                    @endforeach
                </ul>
            </div>
            @endforeach
        </div>

        {{-- Bottom Features Grid --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
            @php
            $bottomFeatures = [
                [
                    'title' => 'Mitra Terverifikasi',
                    'desc' => 'Kami bekerja sama dengan mitra terbaik dan terpercaya.',
                    'icon' => '<svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>'
                ],
                [
                    'title' => 'Proses Cepat & Mudah',
                    'desc' => 'Booking dan pembayaran mudah dalam hitungan menit.',
                    'icon' => '<svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>'
                ],
                [
                    'title' => 'Harga Transparan',
                    'desc' => 'Tidak ada biaya tersembunyi, semua jelas sejak awal.',
                    'icon' => '<svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>'
                ],
                [
                    'title' => 'Dukungan 24/7',
                    'desc' => 'Tim kami siap membantu kapan pun Anda butuh.',
                    'icon' => '<svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>'
                ],
            ];
            @endphp

            @foreach($bottomFeatures as $feature)
            <div class="flex items-start p-6 bg-gray-50 rounded-xl hover:bg-green-50 transition-all duration-300">
                <div class="text-green-600 mr-4 flex-shrink-0">
                    {!! $feature['icon'] !!}
                </div>
                <div>
                    <h4 class="font-bold text-gray-900 mb-2">{{ $feature['title'] }}</h4>
                    <p class="text-sm text-gray-600">{{ $feature['desc'] }}</p>
                </div>
            </div>
            @endforeach
        </div>

        {{-- Final CTA --}}
        <div class="text-center bg-gradient-to-br from-gray-50 to-gray-100 rounded-2xl p-12 border-2 border-gray-200">
            <div class="w-20 h-20 bg-white rounded-full flex items-center justify-center mx-auto mb-6 shadow-lg">
                <svg class="w-10 h-10 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                </svg>
            </div>
            <h3 class="text-2xl font-bold text-gray-900 mb-4">
                Temukan solusi yang tepat untuk Anda sekarang!
            </h3>
            <p class="text-gray-600 mb-8 max-w-2xl mx-auto">
                Bergabung dengan ribuan pengguna yang sudah merasakan manfaatnya.
            </p>
            <a href="{{ route('service') }}" 
               class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-green-600 to-teal-600 text-white font-bold rounded-xl shadow-lg hover:shadow-xl hover:scale-105 transition-all duration-300">
                Mulai Sekarang
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                </svg>
            </a>
        </div>
    </div>
</section>

@endsection
