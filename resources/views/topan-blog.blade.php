@extends('layouts.app')

@section('title', 'Topan - Solusi Manajemen Kendaraan Modern | TokiToki')

@section('content')
<div class="min-h-screen bg-gray-50">
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-green-600 via-emerald-700 to-teal-800 text-white py-20">
        <div class="absolute inset-0 bg-black/20"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <div class="flex justify-center mb-6">
                    <img src="/assets/img/topan-logo.png" alt="Topan Logo" class="w-20 h-20" onerror="this.style.display='none'">
                </div>
                <h1 class="text-4xl md:text-6xl font-bold mb-6">
                    Revolusi Manajemen Kendaraan dengan 
                    <span class="text-yellow-400">TOPAN</span>
                </h1>
                <p class="text-xl md:text-2xl mb-8 text-green-100">
                    Pantau Semua Aktivitas Kendaraan Cukup Pakai Handphone
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <button class="border-2 border-white text-white hover:bg-white hover:text-green-700 font-bold py-4 px-8 rounded-lg transition-all duration-300">
                        Lihat Demo
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <!-- Featured Image -->
        <div class="mb-12">
            <div class="bg-white rounded-2xl shadow-xl p-8">
                <img src="/assets/img/topan-hero.jpg" alt="Topan Vehicle Management System" class="w-full rounded-xl" onerror="this.src='data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iODAwIiBoZWlnaHQ9IjQ2MCIgdmlld0JveD0iMCAwIDgwMCA0NjAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxyZWN0IHdpZHRoPSI4MDAiIGhlaWdodD0iNDYwIiBmaWxsPSIjRjNGNEY2Ii8+CjxwYXRoIGQ9Ik00MDAgMjMwQzQwMCAyMzAgNDIwIDIxMCA0NTAgMjEwQzQ4MCAyMTAgNTAwIDIzMCA1MDAgMjMwQzUwMCAyMzAgNDgwIDI1MCA0NTAgMjUwQzQyMCAyNTAgNDAwIDIzMCA0MDAgMjMwWiIgZmlsbD0iIzM3NDE1MSIvPgo8dGV4dCB4PSI0MDAiIHk9IjI4MCIgZm9udC1mYW1pbHk9IkFyaWFsLCBzYW5zLXNlcmlmIiBmb250LXNpemU9IjE4IiBmaWxsPSIjNjU3Mzg2IiB0ZXh0LWFuY2hvcj0ibWlkZGxlIj5Ub3BhbiBWZWhpY2xlIE1hbmFnZW1lbnQgU3lzdGVtPC90ZXh0Pgo8L3N2Zz4K'">
            </div>
        </div>

        <!-- Article Content -->
        <article class="prose prose-lg max-w-none">
            <!-- Introduction -->
            <div class="bg-white rounded-2xl shadow-lg p-8 mb-8">
                <h2 class="text-3xl font-bold text-gray-900 mb-6">Mengenal TOPAN: Solusi Cerdas untuk Manajemen Kendaraan</h2>
                
                <p class="text-gray-700 leading-relaxed mb-6">
                    Di era digital yang serba cepat ini, mengelola armada kendaraan menjadi tantangan tersendiri bagi perusahaan dan individu. 
                    <strong>TOPAN (TokiPantau)</strong> hadir sebagai solusi revolusioner yang memungkinkan Anda memantau dan mengelola 
                    seluruh aktivitas kendaraan hanya dengan menggunakan smartphone.
                </p>

                <div class="bg-blue-50 border-l-4 border-blue-500 p-6 mb-6">
                    <p class="text-blue-800 font-semibold">
                        💡 <strong>Tahukah Anda?</strong> Dengan sistem manajemen kendaraan yang tepat, perusahaan dapat menghemat 
                        hingga 25% biaya operasional dan meningkatkan efisiensi hingga 40%.
                    </p>
                </div>
            </div>

            <!-- Key Features -->
            <div class="bg-white rounded-2xl shadow-lg p-8 mb-8">
                <h2 class="text-3xl font-bold text-gray-900 mb-8">Fitur Unggulan TOPAN</h2>
                
                <div class="grid md:grid-cols-3 gap-8">
                    <!-- Feature 1: Location Tracking -->
                    <div class="text-center">
                        <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">LACAK</h3>
                        <p class="text-gray-600 mb-2 font-semibold">Posisi Kendaraan Real-time</p>
                        <p class="text-sm text-gray-500">
                            Pantau lokasi kendaraan secara real-time dengan akurasi tinggi menggunakan teknologi GPS terdepan.
                        </p>
                    </div>

                    <!-- Feature 2: Remote Control -->
                    <div class="text-center">
                        <div class="w-16 h-16 bg-emerald-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 100 4m0-4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 100 4m0-4v2m0-6V4"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">MATIKAN</h3>
                        <p class="text-gray-600 mb-2 font-semibold">Mesin dari Jarak Jauh</p>
                        <p class="text-sm text-gray-500">
                            Kontrol mesin kendaraan dari jarak jauh untuk keamanan maksimal dan pencegahan pencurian.
                        </p>
                    </div>

                    <!-- Feature 3: History -->
                    <div class="text-center">
                        <div class="w-16 h-16 bg-teal-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">HISTORI</h3>
                        <p class="text-gray-600 mb-2 font-semibold">Riwayat Perjalanan</p>
                        <p class="text-sm text-gray-500">
                            Akses riwayat perjalanan lengkap dengan detail rute, waktu, dan analisis pola berkendara.
                        </p>
                    </div>
                </div>
            </div>

            <!-- How It Works -->
            <div class="bg-white rounded-2xl shadow-lg p-8 mb-8">
                <h2 class="text-3xl font-bold text-gray-900 mb-8">Bagaimana TOPAN Bekerja?</h2>
                
                <div class="space-y-8">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 w-8 h-8 bg-green-600 text-white rounded-full flex items-center justify-center font-bold">1</div>
                        <div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">Instalasi Device GPS</h3>
                            <p class="text-gray-600">
                                Tim teknisi profesional kami akan memasang device GPS yang canggih dan tersembunyi pada kendaraan Anda. 
                                Proses instalasi cepat dan tidak merusak sistem kendaraan.
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 w-8 h-8 bg-green-600 text-white rounded-full flex items-center justify-center font-bold">2</div>
                        <div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">Download Aplikasi TokiPantau</h3>
                            <p class="text-gray-600">
                                Unduh aplikasi TokiPantau di smartphone Anda (tersedia untuk Android dan iOS). 
                                Interface yang user-friendly memudahkan Anda mengakses semua fitur.
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 w-8 h-8 bg-green-600 text-white rounded-full flex items-center justify-center font-bold">3</div>
                        <div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">Mulai Monitoring</h3>
                            <p class="text-gray-600">
                                Setelah aktivasi, Anda dapat langsung memantau kendaraan secara real-time, mengatur alert, 
                                dan mengakses berbagai fitur canggih lainnya.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Benefits -->
            <div class="bg-white rounded-2xl shadow-lg p-8 mb-8">
                <h2 class="text-3xl font-bold text-gray-900 mb-8">Manfaat Menggunakan TOPAN</h2>
                
                <div class="grid md:grid-cols-2 gap-8">
                    <div class="space-y-6">
                        <div class="flex items-start space-x-3">
                            <svg class="w-6 h-6 text-green-600 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <div>
                                <h4 class="font-semibold text-gray-900">Keamanan Maksimal</h4>
                                <p class="text-gray-600 text-sm">Lindungi kendaraan dari pencurian dengan sistem alarm dan remote engine cut-off</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-3">
                            <svg class="w-6 h-6 text-green-600 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <div>
                                <h4 class="font-semibold text-gray-900">Efisiensi Operasional</h4>
                                <p class="text-gray-600 text-sm">Optimalisasi rute dan monitoring konsumsi bahan bakar</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-3">
                            <svg class="w-6 h-6 text-green-600 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <div>
                                <h4 class="font-semibold text-gray-900">Kontrol Penuh</h4>
                                <p class="text-gray-600 text-sm">Pantau aktivitas driver dan kendaraan 24/7 dari mana saja</p>
                            </div>
                        </div>
                    </div>

                    <div class="space-y-6">
                        <div class="flex items-start space-x-3">
                            <svg class="w-6 h-6 text-green-600 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <div>
                                <h4 class="font-semibold text-gray-900">Laporan Detail</h4>
                                <p class="text-gray-600 text-sm">Dapatkan laporan komprehensif untuk analisis dan pengambilan keputusan</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-3">
                            <svg class="w-6 h-6 text-green-600 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <div>
                                <h4 class="font-semibold text-gray-900">Hemat Biaya</h4>
                                <p class="text-gray-600 text-sm">Kurangi biaya operasional hingga 25% dengan manajemen yang efektif</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-3">
                            <svg class="w-6 h-6 text-green-600 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <div>
                                <h4 class="font-semibold text-gray-900">Support 24/7</h4>
                                <p class="text-gray-600 text-sm">Tim support siap membantu Anda kapan saja</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Use Cases -->
            <div class="bg-white rounded-2xl shadow-lg p-8 mb-8">
                <h2 class="text-3xl font-bold text-gray-900 mb-8">Siapa yang Membutuhkan TOPAN?</h2>
                
                <div class="grid md:grid-cols-3 gap-6">
                    <div class="bg-gradient-to-br from-green-50 to-green-100 p-6 rounded-xl">
                        <div class="w-12 h-12 bg-green-600 rounded-lg flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Perusahaan Logistik</h3>
                        <p class="text-gray-600 text-sm">Kelola armada truck dan kendaraan pengiriman dengan efisien</p>
                    </div>

                    <div class="bg-gradient-to-br from-green-50 to-green-100 p-6 rounded-xl">
                        <div class="w-12 h-12 bg-green-600 rounded-lg flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3a2 2 0 012-2h4a2 2 0 012 2v4m-6 0V6a2 2 0 012-2h4a2 2 0 012 2v1m-6 0h8m-8 0H6a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V9a2 2 0 00-2-2h-2"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Rental Mobil</h3>
                        <p class="text-gray-600 text-sm">Pantau kendaraan rental dan pastikan keamanan aset</p>
                    </div>

                    <div class="bg-gradient-to-br from-teal-50 to-teal-100 p-6 rounded-xl">
                        <div class="w-12 h-12 bg-teal-600 rounded-lg flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Pemilik Pribadi</h3>
                        <p class="text-gray-600 text-sm">Amankan kendaraan pribadi dan keluarga dari pencurian</p>
                    </div>
                </div>
            </div>

            <!-- CTA Section -->
            <div class="bg-gradient-to-r from-blue-600 to-indigo-700 rounded-2xl p-8 text-center text-white">
                <h2 class="text-3xl font-bold mb-4">Siap Mengamankan Kendaraan Anda?</h2>
                <p class="text-xl mb-8 text-blue-100">
                    Bergabunglah dengan ribuan pengguna yang telah merasakan keamanan dan kemudahan TOPAN
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <button class="bg-yellow-500 hover:bg-yellow-600 text-black font-bold py-4 px-8 rounded-lg transition-all duration-300 transform hover:scale-105">
                        Mulai Gratis 30 Hari
                    </button>
                    <button class="border-2 border-white text-white hover:bg-white hover:text-blue-700 font-bold py-4 px-8 rounded-lg transition-all duration-300">
                        Hubungi Sales
                    </button>
                </div>
                <p class="text-sm text-blue-200 mt-4">
                    * Tidak perlu kartu kredit • Setup gratis • Support 24/7
                </p>
            </div>
        </article>
    </div>
</div>
@endsection

@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Smooth scroll for internal links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Add animation on scroll
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-fade-in');
            }
        });
    }, observerOptions);

    // Observe all sections
    document.querySelectorAll('section, .bg-white').forEach(section => {
        observer.observe(section);
    });
});
</script>
@endsection