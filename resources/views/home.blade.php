@extends('layouts.app')

@section('content')

<!-- Features Section -->
<section id="features" class="py-20 bg-gradient-to-br from-indigo-50 via-purple-50 to-pink-50 relative overflow-hidden">
    <!-- Innovative Background Elements -->
    <div class="absolute inset-0">
        <!-- Primary Gradient Overlay -->
        <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-br from-indigo-100/20 via-purple-100/20 to-pink-100/20"></div>
        
        <!-- Floating Geometric Shapes -->
        <div class="absolute top-10 left-10 w-20 h-20 bg-gradient-to-br from-yellow-400 to-orange-500 transform rotate-45 animate-bounce opacity-30"></div>
        <div class="absolute top-20 right-20 w-16 h-16 bg-gradient-to-br from-blue-400 to-cyan-500 rounded-full animate-pulse opacity-40"></div>
        <div class="absolute bottom-10 left-20 w-24 h-24 bg-gradient-to-br from-green-400 to-emerald-500 transform rotate-12 animate-bounce delay-1000 opacity-35"></div>
        <div class="absolute bottom-20 right-10 w-18 h-18 bg-gradient-to-br from-red-400 to-pink-500 rounded-lg animate-pulse delay-500 opacity-30"></div>
        
        <!-- Additional Decorative Elements -->
        <div class="absolute top-1/2 left-1/4 w-12 h-12 bg-gradient-to-br from-purple-400 to-indigo-500 transform rotate-45 animate-spin-slow opacity-25"></div>
        <div class="absolute top-1/3 right-1/3 w-14 h-14 bg-gradient-to-br from-teal-400 to-blue-500 rounded-full animate-bounce delay-1500 opacity-30"></div>
        <div class="absolute bottom-1/3 left-1/2 w-16 h-16 bg-gradient-to-br from-pink-400 to-red-500 transform rotate-30 animate-pulse delay-2000 opacity-35"></div>
        
        <!-- Animated Wave Pattern -->
        <div class="absolute bottom-0 left-0 w-full h-32 bg-gradient-to-t from-indigo-200/10 to-transparent animate-wave"></div>
        
        <!-- Particle-like Elements -->
        <div class="absolute top-1/4 left-1/6 w-2 h-2 bg-indigo-400 rounded-full animate-ping opacity-60"></div>
        <div class="absolute top-3/4 right-1/6 w-3 h-3 bg-purple-400 rounded-full animate-ping delay-300 opacity-50"></div>
        <div class="absolute top-2/3 left-2/3 w-2 h-2 bg-pink-400 rounded-full animate-ping delay-600 opacity-55"></div>
        <div class="absolute top-1/2 right-1/4 w-3 h-3 bg-cyan-400 rounded-full animate-ping delay-900 opacity-45"></div>
        <div class="absolute top-1/6 right-2/3 w-2 h-2 bg-yellow-400 rounded-full animate-ping delay-1200 opacity-50"></div>
        
        <!-- Floating Lines and Bars -->
        <div class="absolute top-1/4 left-0 w-1 h-16 bg-gradient-to-b from-indigo-300 to-transparent animate-float-horizontal opacity-40"></div>
        <div class="absolute top-3/4 right-0 w-1 h-20 bg-gradient-to-t from-purple-300 to-transparent animate-float-horizontal delay-1000 opacity-35"></div>
        <div class="absolute left-1/3 top-0 w-20 h-1 bg-gradient-to-r from-pink-300 to-transparent animate-float-vertical opacity-30"></div>
        <div class="absolute right-1/3 bottom-0 w-16 h-1 bg-gradient-to-l from-cyan-300 to-transparent animate-float-vertical delay-1500 opacity-40"></div>
        
        <!-- Pulsing Orbs -->
        <div class="absolute top-1/6 left-1/2 w-8 h-8 bg-gradient-to-br from-violet-400 to-purple-600 rounded-full animate-pulse opacity-50"></div>
        <div class="absolute bottom-1/6 right-1/2 w-10 h-10 bg-gradient-to-br from-fuchsia-400 to-pink-600 rounded-full animate-pulse delay-800 opacity-45"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4 animate-fadeInUp">
                Fitur Unggulan Kami
            </h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto animate-fadeInUp delay-200">
                Jelajahi kemampuan canggih yang membuat TokiToki menjadi pilihan terbaik untuk bisnis Anda.
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Feature 1 -->
            <div class="group bg-white/80 backdrop-blur-sm p-8 rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 border border-white/20 hover:border-primary-200 hover:-translate-y-2">
                <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-purple-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 animate-pulse">
                    <svg class="w-8 h-8 text-white animate-spin-slow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-4 group-hover:text-primary-600 transition-colors">Super Cepat</h3>
                <p class="text-gray-600 group-hover:text-gray-700 transition-colors">Rasakan performa super cepat dengan infrastruktur yang dioptimalkan dan teknologi canggih kami untuk hasil maksimal.</p>
            </div>

            <!-- Feature 2 -->
            <div class="group bg-white/80 backdrop-blur-sm p-8 rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 border border-white/20 hover:border-secondary-200 hover:-translate-y-2">
                <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-teal-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 animate-pulse delay-500">
                    <svg class="w-8 h-8 text-white animate-spin-slow delay-1000" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-4 group-hover:text-secondary-600 transition-colors">Keamanan Perusahaan</h3>
                <p class="text-gray-600 group-hover:text-gray-700 transition-colors">Keamanan tingkat bank dengan enkripsi end-to-end, memastikan data Anda selalu terlindungi dan aman dari ancaman.</p>
            </div>

            <!-- Feature 3 -->
            <div class="group bg-white/80 backdrop-blur-sm p-8 rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 border border-white/20 hover:border-purple-200 hover:-translate-y-2">
                <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-pink-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 animate-pulse delay-1000">
                    <svg class="w-8 h-8 text-white animate-spin-slow delay-1500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-4 group-hover:text-purple-600 transition-colors">Waktu Aktif 99.9%</h3>
                <p class="text-gray-600 group-hover:text-gray-700 transition-colors">Layanan andal dengan jaminan waktu aktif 99.9%, memastikan bisnis Anda tidak pernah berhenti beroperasi.</p>
            </div>

            <!-- Feature 4 -->
            <div class="group bg-white/80 backdrop-blur-sm p-8 rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 border border-white/20 hover:border-yellow-200 hover:-translate-y-2">
                <div class="w-16 h-16 bg-gradient-to-br from-yellow-500 to-orange-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 animate-pulse delay-1500">
                    <svg class="w-8 h-8 text-white animate-spin-slow delay-2000" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-4 group-hover:text-yellow-600 transition-colors">Harga Terjangkau</h3>
                <p class="text-gray-600 group-hover:text-gray-700 transition-colors">Paket fleksibel dan terjangkau yang disesuaikan dengan kebutuhan bisnis Anda untuk pertumbuhan maksimal tanpa biaya berlebihan.</p>
            </div>

            <!-- Feature 5 -->
            <div class="group bg-white/80 backdrop-blur-sm p-8 rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 border border-white/20 hover:border-indigo-200 hover:-translate-y-2">
                <div class="w-16 h-16 bg-gradient-to-br from-indigo-500 to-blue-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 animate-pulse delay-2000">
                    <svg class="w-8 h-8 text-white animate-spin-slow delay-2500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-4 group-hover:text-indigo-600 transition-colors">Dukungan 24/7</h3>
                <p class="text-gray-600 group-hover:text-gray-700 transition-colors">Tim dukungan teknis siap membantu Anda kapan saja untuk memastikan operasi bisnis berjalan lancar tanpa hambatan.</p>
            </div>

            <!-- Feature 6 -->
            <div class="group bg-white/80 backdrop-blur-sm p-8 rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 border border-white/20 hover:border-red-200 hover:-translate-y-2">
                <div class="w-16 h-16 bg-gradient-to-br from-red-500 to-pink-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 animate-pulse delay-2500">
                    <svg class="w-8 h-8 text-white animate-spin-slow delay-3000" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-4 group-hover:text-red-600 transition-colors">Inovasi Terdepan</h3>
                <p class="text-gray-600 group-hover:text-gray-700 transition-colors">Teknologi terbaru dan fitur inovatif untuk memberikan pengalaman pengguna yang unggul dan kompetitif di pasar.</p>
            </div>
        </div>

        <!-- Keunggulan TokiToki Section -->
        <div class="mt-20 text-center animate-fadeInUp delay-500">
            <h3 class="text-3xl font-bold text-gray-900 mb-6 bg-gradient-to-r from-purple-600 to-pink-600 bg-clip-text text-transparent">Keunggulan TokiToki</h3>
            <p class="text-lg text-gray-700 max-w-4xl mx-auto mb-8 leading-relaxed">
                Dengan teknologi modern dan sistem keamanan terintegrasi, TokiToki memastikan setiap transaksi layanan berjalan cepat, aman, dan stabil untuk mendukung pertumbuhan bisnismu dan mendukung kepercayaan pelanggan terhadap aplikasi dan mitra. Kami berkomitmen untuk inovasi berkelanjutan yang menghadirkan solusi terbaik bagi pengguna kami.
            </p>
        </div>

        <!-- Quick Stats Section -->
        <div class="mt-16 grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="text-center p-8 bg-gradient-to-br from-blue-100 to-purple-100 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-1 animate-fadeInUp">
                <div class="text-5xl font-bold text-primary-600 mb-3 animate-counter" data-target="100">0</div>
                <div class="text-gray-700 font-semibold text-lg">Layanan Tersedia</div>
            </div>
            <div class="text-center p-8 bg-gradient-to-br from-green-100 to-teal-100 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-1 animate-fadeInUp delay-200">
                <div class="text-5xl font-bold text-secondary-600 mb-3 animate-counter" data-target="500">0</div>
                <div class="text-gray-700 font-semibold text-lg">Mitra Profesional</div>
            </div>
            <div class="text-center p-8 bg-gradient-to-br from-purple-100 to-pink-100 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-1 animate-fadeInUp delay-400">
                <div class="text-5xl font-bold text-purple-600 mb-3 animate-counter" data-target="99.9">0</div>
                <div class="text-gray-700 font-semibold text-lg">Sistem Aman & Aktif</div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section id="services" class="tw-flex tw-flex-col tw-align-center cgwnm89 py-20 bg-gradient-to-br from-green-400 to-cyan-400 relative overflow-hidden">
    <!-- Background Decorative Elements -->
    <div class="absolute inset-0">
        <!-- Animated Background Shapes -->
        <div class="absolute top-10 left-10 w-32 h-32 bg-primary-200 rounded-full opacity-10 animate-pulse"></div>
        <div class="absolute top-20 right-20 w-24 h-24 bg-secondary-200 rounded-full opacity-15 animate-bounce"></div>
        <div class="absolute bottom-20 left-20 w-40 h-40 bg-purple-200 rounded-full opacity-10 animate-pulse delay-1000"></div>
        <div class="absolute bottom-10 right-10 w-28 h-28 bg-pink-200 rounded-full opacity-15 animate-bounce delay-500"></div>
        <!-- Additional Green Elements for Brightness -->
        <div class="absolute top-1/2 left-1/4 w-36 h-36 bg-white/20 rounded-full opacity-30 animate-pulse delay-1500"></div>
        <div class="absolute top-1/3 right-1/3 w-20 h-20 bg-cyan-200 rounded-full opacity-40 animate-bounce delay-2000"></div>
        <div class="absolute bottom-1/3 left-1/2 w-24 h-24 bg-green-200 rounded-full opacity-35 animate-pulse delay-2500"></div>
        <!-- Grid Pattern Overlay -->
        <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/5 to-transparent opacity-20"></div>
    </div>

    <div class="tw-text-sm md:tw-text-base tw-m-auto bud9ge8 text-center mb-4 relative z-10 text-white" style="--bud9ge8-0:28px;--bud9ge8-1:var(--main-white);--bud9ge8-2:var(--main-dark);--bud9ge8-3:40px;--bud9ge8-4:0 20px">
        Platform Inovatif Kami
    </div>
    <h2 class="w1islewv text-3xl md:text-4xl font-bold text-white mb-8 text-center relative z-10">
        Satu platform, banyak layanan
    </h2>
    <div class="tw-mt-8 md:tw-mt-16 c1c9s3mu max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10" style="--c1c9s3mu-0:repeat(2, 1fr);--c1c9s3mu-1:repeat(3, minmax(240px, 400px))">
        <!-- Service 1: Lokasi -->
        <a class="l16rzd2o service-card bg-white rounded-lg shadow-lg overflow-hidden transition-all duration-300 hover:shadow-xl" href="#lokasi">
            <img alt="Lokasi Terdekat" loading="lazy" width="393" height="275" class="tw-w-full tw-object-contain" src="{{ asset('assets/img/about/layanan-1.jpg') }}">
            <div class="p-6">
                <h3 class="t1btcd3f text-xl font-semibold text-gray-900 mb-2">Lokasi Terdekat</h3>
                <p class="t19f8z8o text-gray-600 mb-4">Temukan layanan dan tempat terdekat dengan mudah dan cepat.</p>
                <ul class="t15rmchh text-sm text-gray-700">
                    <li class="tbwpt6u">Pencarian Instan</li>
                    <li class="tbwpt6u">Rekomendasi Terbaik</li>
                    <li class="tbwpt6u">Akses 24/7</li>
                </ul>
            </div>
        </a>

        <!-- Service 2: Rumah Tangga -->
        <a class="l16rzd2o service-card bg-white rounded-lg shadow-lg overflow-hidden transition-all duration-300 hover:shadow-xl" href="#rumah-tangga">
            <img alt="Rumah Tangga" loading="lazy" width="393" height="275" class="tw-w-full tw-object-contain" src="{{ asset('assets/img/about/layanan-2.jpg') }}">
            <div class="p-6">
                <h3 class="t1btcd3f text-xl font-semibold text-gray-900 mb-2">Rumah Tangga</h3>
                <p class="t19f8z8o text-gray-600 mb-4">Solusi lengkap untuk kebutuhan rumah tangga dan perawatan hunian.</p>
                <ul class="t15rmchh text-sm text-gray-700">
                    <li class="tbwpt6u">Perawatan Hunian</li>
                    <li class="tbwpt6u">Produk Berkualitas</li>
                    <li class="tbwpt6u">Layanan Cepat</li>
                </ul>
            </div>
        </a>

        <!-- Service 3: Elektronik -->
        <a class="l16rzd2o service-card bg-white rounded-lg shadow-lg overflow-hidden transition-all duration-300 hover:shadow-xl" href="#elektronik">
            <img alt="Elektronik" loading="lazy" width="393" height="275" class="tw-w-full tw-object-contain" src="{{ asset('assets/img/about/layanan-3.jpg') }}">
            <div class="p-6">
                <h3 class="t1btcd3f text-xl font-semibold text-gray-900 mb-2">Elektronik</h3>
                <p class="t19f8z8o text-gray-600 mb-4">Produk dan layanan elektronik terbaru dan terpercaya untuk kehidupan modern.</p>
                <ul class="t15rmchh text-sm text-gray-700">
                    <li class="tbwpt6u">Gadget Terbaru</li>
                    <li class="tbwpt6u">Garansi Resmi</li>
                    <li class="tbwpt6u">Harga Kompetitif</li>
                </ul>
            </div>
        </a>

        <!-- Service 4: Kendaraan -->
        <a class="l16rzd2o service-card bg-white rounded-lg shadow-lg overflow-hidden transition-all duration-300 hover:shadow-xl" href="#kendaraan">
            <img alt="Kendaraan" loading="lazy" width="393" height="275" class="tw-w-full tw-object-contain" src="{{ asset('assets/img/about/layanan-4.jpg') }}">
            <div class="p-6">
                <h3 class="t1btcd3f text-xl font-semibold text-gray-900 mb-2">Kendaraan</h3>
                <p class="t19f8z8o text-gray-600 mb-4">Layanan perawatan, rental, dan informasi kendaraan untuk mobilitas Anda.</p>
                <ul class="t15rmchh text-sm text-gray-700">
                    <li class="tbwpt6u">Perawatan Mobil</li>
                    <li class="tbwpt6u">Rental Kendaraan</li>
                    <li class="tbwpt6u">Tips Berkendara</li>
                </ul>
            </div>
        </a>

        <!-- Service 5: Kesehatan -->
        <a class="l16rzd2o service-card bg-white rounded-lg shadow-lg overflow-hidden transition-all duration-300 hover:shadow-xl" href="#kesehatan">
            <img alt="Kesehatan" loading="lazy" width="393" height="275" class="tw-w-full tw-object-contain" src="{{ asset('assets/img/about/layanan-5.jpg') }}">
            <div class="p-6">
                <h3 class="t1btcd3f text-xl font-semibold text-gray-900 mb-2">Kesehatan</h3>
                <p class="t19f8z8o text-gray-600 mb-4">Informasi dan layanan kesehatan untuk menjaga kesejahteraan Anda dan keluarga.</p>
                <ul class="t15rmchh text-sm text-gray-700">
                    <li class="tbwpt6u">Konsultasi Online</li>
                    <li class="tbwpt6u">Artikel Kesehatan</li>
                    <li class="tbwpt6u">Produk Wellness</li>
                </ul>
            </div>
        </a>

        <!-- Service 6: Pendidikan -->
        <a class="l16rzd2o service-card bg-white rounded-lg shadow-lg overflow-hidden transition-all duration-300 hover:shadow-xl" href="#pendidikan">
            <img alt="Pendidikan" loading="lazy" width="393" height="275" class="tw-w-full tw-object-contain" src="{{ asset('assets/img/about/layanan-6.jpg') }}">
            <div class="p-6">
                <h3 class="t1btcd3f text-xl font-semibold text-gray-900 mb-2">Pendidikan</h3>
                <p class="t19f8z8o text-gray-600 mb-4">Sumber daya dan layanan pendidikan untuk semua usia dan tingkatan.</p>
                <ul class="t15rmchh text-sm text-gray-700">
                    <li class="tbwpt6u">Kursus Online</li>
                    <li class="tbwpt6u">Materi Belajar</li>
                    <li class="tbwpt6u">Bimbingan Karir</li>
                </ul>
            </div>
        </a>

        <!-- Service 7: Bisnis & IT -->
        <a class="l16rzd2o service-card bg-white rounded-lg shadow-lg overflow-hidden transition-all duration-300 hover:shadow-xl" href="#bisnis-it">
            <img alt="Bisnis & IT" loading="lazy" width="393" height="275" class="tw-w-full tw-object-contain" src="{{ asset('assets/img/about/layanan-7.jpg') }}">
            <div class="p-6">
                <h3 class="t1btcd3f text-xl font-semibold text-gray-900 mb-2">Bisnis & IT</h3>
                <p class="t19f8z8o text-gray-600 mb-4">Solusi bisnis dan teknologi informasi untuk pertumbuhan perusahaan Anda.</p>
                <ul class="t15rmchh text-sm text-gray-700">
                    <li class="tbwpt6u">Konsultasi IT</li>
                    <li class="tbwpt6u">Pengembangan Software</li>
                    <li class="tbwpt6u">Strategi Bisnis</li>
                </ul>
            </div>
        </a>

        <!-- Service 8: Lainnya -->
        <a class="l16rzd2o service-card bg-white rounded-lg shadow-lg overflow-hidden transition-all duration-300 hover:shadow-xl" href="#lainnya">
            <img alt="Lainnya" loading="lazy" width="393" height="275" class="tw-w-full tw-object-contain" src="{{ asset('assets/img/about/layanan-8.jpg') }}">
            <div class="p-6">
                <h3 class="t1btcd3f text-xl font-semibold text-gray-900 mb-2">Dan Lainnya</h3>
                <p class="t19f8z8o text-gray-600 mb-4">Berbagai layanan tambahan untuk memenuhi semua kebutuhan Anda.</p>
                <ul class="t15rmchh text-sm text-gray-700">
                    <li class="tbwpt6u">Layanan Khusus</li>
                    <li class="tbwpt6u">Konsultasi Umum</li>
                    <li class="tbwpt6u">Dukungan Penuh</li>
                </ul>
            </div>
        </a>
    </div>
</section>

<!-- Testimoni Section -->
<section class="py-20 bg-gradient-to-br from-blue-50 to-indigo-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                Apa Kata Pelanggan Kami
            </h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Dengarkan pengalaman langsung dari pelanggan yang telah merasakan manfaat TokiToki.
            </p>
        </div>

        <div class="relative max-w-6xl mx-auto">
            <!-- Carousel Container -->
            <div class="overflow-hidden rounded-2xl bg-white">
                <div class="flex transition-transform duration-500 ease-in-out testimonials-track">
            <!-- Testimoni 1 -->
            <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-100">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-gradient-to-br from-blue-400 to-purple-500 rounded-full flex items-center justify-center text-white font-bold text-lg">
                        JS
                    </div>
                    <div class="ml-4">
                        <h4 class="font-semibold text-gray-900">Joko Santoso</h4>
                    <div class="star-rating text-yellow-400">
                        <svg class="star" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="star" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="star" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="star" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="star" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    </div>
                    </div>
                </div>
                <p class="text-gray-600 italic">"TokiToki benar-benar memudahkan bisnis saya. Layanan super cepat dan dukungan 24/7 sangat membantu!"</p>
            </div>

            <!-- Testimoni 2 -->
            <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-100">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-gradient-to-br from-green-400 to-teal-500 rounded-full flex items-center justify-center text-white font-bold text-lg">
                        AW
                    </div>
                    <div class="ml-4">
                        <h4 class="font-semibold text-gray-900">Ani Wijaya</h4>
                    <div class="star-rating text-yellow-400">
                        <svg class="star" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="star" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="star" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="star" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="star" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    </div>
                    </div>
                </div>
                <p class="text-gray-600 italic">"Keamanan data sangat terjamin. Saya sangat puas dengan layanan TokiToki untuk bisnis online saya."</p>
            </div>

            <!-- Testimoni 3 -->
            <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-100">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-gradient-to-br from-purple-400 to-pink-500 rounded-full flex items-center justify-center text-white font-bold text-lg">
                        BS
                    </div>
                    <div class="ml-4">
                        <h4 class="font-semibold text-gray-900">Budi Setiawan</h4>
                    <div class="star-rating text-yellow-400">
                        <svg class="star" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="star" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="star" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="star" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="star" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    </div>
                    </div>
                </div>
                <p class="text-gray-600 italic">"Harga terjangkau dengan kualitas premium. TokiToki adalah pilihan terbaik untuk UMKM seperti saya."</p>
            </div>

            <!-- Testimoni 4 -->
            <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-100">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-gradient-to-br from-red-400 to-orange-500 rounded-full flex items-center justify-center text-white font-bold text-lg">
                        LS
                    </div>
                    <div class="ml-4">
                        <h4 class="font-semibold text-gray-900">Lia Sari</h4>
                    <div class="star-rating text-yellow-400">
                        <svg class="star" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="star" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="star" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="star" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="star" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    </div>
                    </div>
                </div>
                <p class="text-gray-600 italic">"Inovasi terdepan membuat bisnis saya lebih kompetitif. Terima kasih TokiToki atas dukungan terbaiknya!"</p>
            </div>

            <!-- Testimoni 5 -->
            <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-100">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-gradient-to-br from-cyan-400 to-blue-500 rounded-full flex items-center justify-center text-white font-bold text-lg">
                        RS
                    </div>
                    <div class="ml-4">
                        <h4 class="font-semibold text-gray-900">Rina Saputra</h4>
                    <div class="star-rating text-yellow-400">
                        <svg class="star" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="star" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="star" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="star" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="star" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    </div>
                    </div>
                </div>
                <p class="text-gray-600 italic">"Dukungan 24/7 sangat membantu. Tim TokiToki selalu responsif dan profesional."</p>
            </div>

            <!-- Testimoni 7 -->
            <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-100">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-gradient-to-br from-indigo-400 to-purple-500 rounded-full flex items-center justify-center text-white font-bold text-lg">
                        SN
                    </div>
                    <div class="ml-4">
                        <h4 class="font-semibold text-gray-900">Sari Nurhaliza</h4>
                    <div class="star-rating text-yellow-400">
                        <svg class="star" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="star" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="star" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="star" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="star" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    </div>
                    </div>
                </div>
                <p class="text-gray-600 italic">"Interface yang intuitif memudahkan tim saya beradaptasi dengan cepat. Produktivitas meningkat drastis!"</p>
            </div>

            <!-- Testimoni 8 -->
            <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-100">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-gradient-to-br from-pink-400 to-rose-500 rounded-full flex items-center justify-center text-white font-bold text-lg">
                        RA
                    </div>
                    <div class="ml-4">
                        <h4 class="font-semibold text-gray-900">Rudi Ahmad</h4>
                    <div class="star-rating text-yellow-400">
                        <svg class="star" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="star" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="star" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="star" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="star" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    </div>
                    </div>
                </div>
                <p class="text-gray-600 italic">"Fitur analitik yang powerful membantu saya memahami performa bisnis dengan lebih baik."</p>
            </div>

            <!-- Testimoni 9 -->
            <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-100">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-gradient-to-br from-teal-400 to-cyan-500 rounded-full flex items-center justify-center text-white font-bold text-lg">
                        MA
                    </div>
                    <div class="ml-4">
                        <h4 class="font-semibold text-gray-900">Maya Anggraini</h4>
                    <div class="star-rating text-yellow-400">
                        <svg class="star" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="star" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="star" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="star" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="star" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    </div>
                    </div>
                </div>
                <p class="text-gray-600 italic">"Integrasi dengan sistem existing sangat mudah. Tidak perlu migrasi data yang rumit."</p>
            </div>

            <!-- Testimoni 10 -->
            <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-100">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-gradient-to-br from-orange-400 to-red-500 rounded-full flex items-center justify-center text-white font-bold text-lg">
                        BW
                    </div>
                    <div class="ml-4">
                        <h4 class="font-semibold text-gray-900">Bayu Wicaksono</h4>
                    <div class="star-rating text-yellow-400">
                        <svg class="star" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="star" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="star" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="star" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="star" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    </div>
                    </div>
                </div>
                <p class="text-gray-600 italic">"Customer service yang responsif dan solutif. Setiap masalah teratasi dengan cepat dan tepat."</p>
            </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Values Section -->
<section class="tw-mt-12 md:tw-mt-28 cgwnm89" id="our-values" data-testid="our_values">
    <div class="wwuyhkp">
        <!-- <div class="tw-text-sm md:tw-text-base bud9ge8" style="--bud9ge8-0:28px;--bud9ge8-1:var(--main-white);--bud9ge8-2:var(--main-dark);--bud9ge8-3:40px;--bud9ge8-4:0 20px">
            {{ __('messages.moto_kami') }}
        </div> -->
        <h2 class="w1islewv">
            <p>{{ __('messages.nilai_menerangi') }} <mark class="highlight">{{ __('messages.langkah') }}</mark> {{ __('messages.kami') }}</p>
        </h2>
    </div>
    <div data-testid="cards" class="c1fjuo1p">
        <!-- Card 1: Orang Banyak -->
        <div tabindex="0" class="bp73p8 values-card" data-card="people">
            <div class="cyce9xu fjkwqpz">
                <div>
                    <img src="{{asset('assets/img/clients/moto-1.png')}}" alt="" class="w-4 h-4">
                </div>
                <div class="igpz1pg">
                    <img alt="Orang Banyak" loading="lazy" decoding="async" data-nimg="fill"
                         class="tw-object-cover"
                         style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent"
                         sizes="100vw"
                         srcset="{{asset('assets/img/clients/moto-1.png')}} 640w,
                                 {{asset('assets/img/clients/moto-1.png')}} 750w,
                                 {{asset('assets/img/clients/moto-1.png')}} 828w,
                                 {{asset('assets/img/clients/moto-1.png')}} 1080w,
                                 {{asset('assets/img/clients/moto-1.png')}} 1200w,
                                 {{asset('assets/img/clients/moto-1.png')}} 1920w,
                                 {{asset('assets/img/clients/moto-1.png')}} 2048w,
                                 {{asset('assets/img/clients/moto-1.png')}} 3840w"
                         src="{{asset('assets/img/clients/moto-1.png')}}">
                </div>
            </div>
            <div class="cyce9xu bi97gev values-expanded">
                <div>
                    <p class="tw-text-lg tw-font-semibold tz9jdo6">
                        Kami hadir untuk semua, membangun kepercayaan dan suportif<br>
                        Kami terus berusaha mengembangkan diri, komunitas, maupun dunia. Fokus pada kekuatan kami dan mengapresiasi setiap keberhasilan dalam tim<br>
                        Kami memberikan dan menerima feedback dengan jujur, respek, dan rendah hati
                    </p>
                </div>
                <div class="tw-text-xs md:tw-text-sm tw-font-semibold b13y7o0h">
                    {{ __('messages.tutup') }}
                    <img class="tw-rotate-45" src="{{asset('assets/img/clients/moto-1.png')}}" alt="close icon" class="w-4 h-4">
                </div>
            </div>
            <div class="c12tzzqh values-modal">
                <button type="button" aria-disabled="false" aria-busy="false" aria-live="off"
                        class="tw-text-xs md:tw-text-sm tw-mr-0 tw-ml-auto b1en642a values-close-btn">
                    <div dir="ltr" aria-hidden="false" class="lf6do54">
                        <span class="loaxzdy">
                            <img src="{{asset('assets/img/clients/moto-1.png')}}" alt="close icon" class="w-4 h-4">
                        </span>
                    </div>
                </button>
                <h3 class="tw-text-4xl tw-font-bold tw-font-agrandir t3du10l" color="#000" style="--t3du10l-0:#000">
                    {{ __('messages.orang_banyak') }}
                </h3>
                <p class="tw-text-lg tw-font-semibold tz9jdo6">
                    {!! __('messages.orang_banyak_desc') !!}
                </p>
            </div>
        </div>

        <!-- Card 2: Tujuan -->
        <div role="button" tabindex="0" class="bp73p8 values-card" data-card="purpose">
            <div class="cyce9xu fjkwqpz">
                <div class="tw-text-xs tw-font-semibold b13y7o0h">
                    {{ __('messages.lebih_lanjut') }}
                    <img src="{{asset('assets/img/clients/moto-2.png')}}" alt="Tujuan Icon" class="w-4 h-4">
                </div>
                <div class="igpz1pg">
                    <img alt="Tujuan" loading="lazy" decoding="async" data-nimg="fill"
                         class="tw-object-cover"
                         style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent"
                         sizes="100vw"
                         srcset="{{asset('assets/img/clients/moto-2.png')}} 640w,
                                 {{asset('assets/img/clients/moto-2.png')}} 750w,
                                 {{asset('assets/img/clients/moto-2.png')}} 828w,
                                 {{asset('assets/img/clients/moto-2.png')}} 1080w,
                                 {{asset('assets/img/clients/moto-2.png')}} 1200w,
                                 {{asset('assets/img/clients/moto-2.png')}} 1920w,
                                 {{asset('assets/img/clients/moto-2.png')}} 2048w,
                                 {{asset('assets/img/clients/moto-2.png')}} 3840w"
                         src="{{asset('assets/img/clients/moto-2.png')}}">
                </div>
            </div>
            <div class="cyce9xu bi97gev values-expanded">
                <div>
                    <h3 class="tw-text-2xl md:tw-text-5xl tw-font-bold tw-font-agrandir t3du10l" color="#000" style="--t3du10l-0:#000">
                        {{ __('messages.tujuan') }}
                    </h3>
                    <p class="tw-text-lg tw-font-semibold tz9jdo6">
                        {!! __('messages.tujuan_desc') !!}
                    </p>
                </div>
                <div class="tw-text-xs md:tw-text-sm tw-font-semibold b13y7o0h">
                    {{ __('messages.tutup') }}
                    <img class="tw-rotate-45" src="{{asset('assets/img/clients/moto-2.png')}}" alt="close icon" class="w-4 h-4">
                </div>
            </div>
            <div class="c12tzzqh values-modal">
                <button type="button" aria-disabled="false" aria-busy="false" aria-live="off"
                        class="tw-text-xs md:tw-text-sm tw-mr-0 tw-ml-auto b1en642a values-close-btn">
                    <div dir="ltr" aria-hidden="false" class="lf6do54">
                        <span class="loaxzdy">
                            <img src="{{asset('assets/img/clients/moto-2.png')}}" alt="close icon" class="w-4 h-4">
                        </span>
                    </div>
                </button>
                <h3 class="tw-text-4xl tw-font-bold tw-font-agrandir t3du10l" color="#000" style="--t3du10l-0:#000">
                    {{ __('messages.tujuan') }}
                </h3>
                <p class="tw-text-lg tw-font-semibold tz9jdo6">
                    {!! __('messages.tujuan_desc') !!}
                </p>
            </div>
        </div>

        <!-- Card 3: Performa -->
        <div role="button" tabindex="0" class="bp73p8 values-card" data-card="performance">
            <div class="cyce9xu fjkwqpz">
                <div class="tw-text-xs tw-font-semibold b13y7o0h">
                    {{ __('messages.lebih_lanjut') }}
                    <img src="{{asset('assets/img/clients/moto-3.png')}}" alt="Performa Icon" class="w-4 h-4">
                </div>
                <div class="igpz1pg">
                    <img alt="Performa" loading="lazy" decoding="async" data-nimg="fill"
                         class="tw-object-cover"
                         style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent"
                         sizes="100vw"
                         srcset="{{asset('assets/img/clients/moto-3.png')}} 640w,
                                 {{asset('assets/img/clients/moto-3.png')}} 750w,
                                 {{asset('assets/img/clients/moto-3.png')}} 828w,
                                 {{asset('assets/img/clients/moto-3.png')}} 1080w,
                                 {{asset('assets/img/clients/moto-3.png')}} 1200w,
                                 {{asset('assets/img/clients/moto-3.png')}} 1920w,
                                 {{asset('assets/img/clients/moto-3.png')}} 2048w,
                                 {{asset('assets/img/clients/moto-3.png')}} 3840w"
                         src="{{asset('assets/img/clients/moto-3.png')}}">
                </div>
            </div>
            <div class="cyce9xu bi97gev values-expanded">
                <div>
                    <h3 class="tw-text-2xl md:tw-text-5xl tw-font-bold tw-font-agrandir t3du10l" color="#000" style="--t3du10l-0:#000">
                        {{ __('messages.performa') }}
                    </h3>
                    <p class="tw-text-lg tw-font-semibold tz9jdo6">
                        {!! __('messages.performa_desc') !!}
                    </p>
                </div>
                <div class="tw-text-xs md:tw-text-sm tw-font-semibold b13y7o0h">
                    {{ __('messages.tutup') }}
                    <img class="tw-rotate-45" src="{{asset('assets/img/clients/moto-3.png')}}" alt="close icon" class="w-4 h-4">
                </div>
            </div>
            <div class="c12tzzqh values-modal">
                <button type="button" aria-disabled="false" aria-busy="false" aria-live="off"
                        class="tw-text-xs md:tw-text-sm tw-mr-0 tw-ml-auto b1en642a values-close-btn">
                    <div dir="ltr" aria-hidden="false" class="lf6do54">
                        <span class="loaxzdy">
                            <img src="{{asset('assets/img/clients/moto-3.png')}}" alt="close icon" class="w-4 h-4">
                        </span>
                    </div>
                </button>
                <h3 class="tw-text-4xl tw-font-bold tw-font-agrandir t3du10l" color="#000" style="--t3du10l-0:#000">
                    {{ __('messages.performa') }}
                </h3>
                <p class="tw-text-lg tw-font-semibold tz9jdo6">
                    {!! __('messages.performa_desc') !!}
                </p>
            </div>
        </div>
    </div>
</section>

@endsection

<!-- Custom Styles -->
<style>
    :root {
        --primary-color: #6a11cb;
        --secondary-color: #2575fc;
        --dark-bg: #1a1a1a;
        --light-text: #f8f9fa;
        --secondary-text: #adb5bd;
    }

    body {
        font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        line-height: 1.6;
    }

    .gradient-text {
        background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .gradient-bg {
        background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
    }

    .btn-gradient {
        background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
        border: none;
        transition: all 0.3s ease;
    }

    .btn-gradient:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 25px rgba(106, 17, 203, 0.3);
    }

    .custom-card {
        background: rgba(255, 255, 255, 0.05);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.1);
        transition: all 0.3s ease;
    }

    .custom-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
    }

    .hero-title {
        animation: fadeInUp 1s ease-out;
    }

    .feature-icon {
        transition: all 0.3s ease;
    }

    .feature-icon:hover {
        transform: scale(1.1) rotate(5deg);
    }

    .pricing-card {
        transition: all 0.3s ease;
    }

    .pricing-card:hover {
        transform: translateY(-10px);
    }

    .testimonial-card {
        animation: fadeIn 1s ease-out 0.5s both;
    }

    .animate-float {
        animation: float 3s ease-in-out infinite;
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }

    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-10px); }
    }

    .section-padding {
        padding: 100px 0;
    }

    .service-card {
        display: block;
        text-decoration: none;
        color: inherit;
        border-radius: 8px;
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .service-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
    }

    .service-card img {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }

    .service-card .p-6 {
        padding: 1.5rem;
    }

    .service-card h3 {
        font-size: 1.25rem;
        font-weight: 600;
        margin-bottom: 0.5rem;
    }

    .service-card p {
        color: #6b7280;
        margin-bottom: 1rem;
    }

    .service-card ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .service-card li {
        margin-bottom: 0.25rem;
        font-size: 0.875rem;
    }

    /* Star Rating Component */
    .star-rating {
        display: flex;
        align-items: center;
        gap: 0.25rem;
        margin-bottom: 1rem;
    }

    .star {
        width: 1.25rem;
        height: 1.25rem;
        fill: currentColor;
        transition: all 0.2s ease;
    }

    .star-rating.text-yellow-400 .star {
        color: #fbbf24;
    }

    .star-rating:hover .star {
        transform: scale(1.1);
    }

    /* Testimonial Card Improvements */
    .testimonial-card-square {
        aspect-ratio: 1 / 1;
        width: 100%;
        max-width: 300px;
        height: auto;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        padding: 2rem;
        background: white;
        border-radius: 1.5rem;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        border: 1px solid #e5e7eb;
        transition: all 0.3s ease;
        margin: 0 1rem;
    }

    .testimonial-card-square:hover {
        transform: translateY(-0.5rem);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
    }

    /* Avatar Styling */
    .testimonial-avatar {
        width: 3rem;
        height: 3rem;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        font-size: 1.125rem;
        color: white;
        margin-bottom: 1rem;
    }

    /* Testimonial Content */
    .testimonial-content {
        flex: 1;
        display: flex;
        flex-direction: column;
    }

    .testimonial-name {
        font-weight: 600;
        color: #1f2937;
        margin-bottom: 0.5rem;
    }

    .testimonial-text {
        color: #6b7280;
        font-style: italic;
        line-height: 1.6;
        flex: 1;
    }

    /* Responsive margins for testimonials */
    @media (max-width: 768px) {
        .testimonial-card-square {
            margin: 0 0.75rem;
        }
    }

    @media (max-width: 480px) {
        .testimonial-card-square {
            margin: 0 0.5rem;
        }
        .tw-flex.tw-flex-col.tw-align-center.cgwnm89 {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
    }

    .bud9ge8 {
        font-size: 0.875rem;
        color: var(--main-dark);
        margin: 0 auto;
    }

    .w1islewv {
        font-size: 2.25rem;
        font-weight: 700;
        text-align: center;
    }

    .c1c9s3mu {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 1.5rem;
        margin-top: 2rem;
    }

    @media (min-width: 768px) {
        .c1c9s3mu {
            grid-template-columns: repeat(3, minmax(240px, 400px));
        }
    }

    /* Star Rating Component */
    .star-rating {
        display: flex;
        align-items: center;
        gap: 0.25rem;
        margin-bottom: 1rem;
    }

    .star {
        width: 1.25rem;
        height: 1.25rem;
        fill: currentColor;
        transition: all 0.2s ease;
    }

    .star-rating.text-yellow-400 .star {
        color: #fbbf24;
    }

    .star-rating:hover .star {
        transform: scale(1.1);
    }

    /* Testimonial Card Improvements */
    .testimonial-card-square {
        aspect-ratio: 1 / 1;
        width: 100%;
        max-width: 300px;
        height: auto;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        padding: 2rem;
        background: white;
        border-radius: 1.5rem;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        border: 1px solid #e5e7eb;
        transition: all 0.3s ease;
        margin: 0 1rem;
    }

    .testimonial-card-square:hover {
        transform: translateY(-0.5rem);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
    }

    /* Avatar Styling */
    .testimonial-avatar {
        width: 3rem;
        height: 3rem;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        font-size: 1.125rem;
        color: white;
        margin-bottom: 1rem;
    }

    /* Testimonial Content */
    .testimonial-content {
        flex: 1;
        display: flex;
        flex-direction: column;
    }

    .testimonial-name {
        font-weight: 600;
        color: #1f2937;
        margin-bottom: 0.5rem;
    }

    .testimonial-text {
        color: #6b7280;
        font-style: italic;
        line-height: 1.6;
        flex: 1;
    }

    /* Responsive margins for testimonials */
    @media (max-width: 768px) {
        .testimonial-card-square {
            margin: 0 0.75rem;
        }
    }

    @media (max-width: 480px) {
        .testimonial-card-square {
            margin: 0 0.5rem;
        }
    }

    /* Enhanced Background Animations */
    .animate-pulse {
        animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
    }

    .animate-bounce {
        animation: bounce 1s infinite;
    }

    .delay-1500 {
        animation-delay: 1.5s;
    }

    .delay-2000 {
        animation-delay: 2s;
    }

    .animate-wave {
        animation: wave 8s ease-in-out infinite;
    }

    .animate-float-horizontal {
        animation: floatHorizontal 4s ease-in-out infinite;
    }

    .animate-float-vertical {
        animation: floatVertical 5s ease-in-out infinite;
    }

    @keyframes floatHorizontal {
        0%, 100% { transform: translateX(0px) translateY(0px); }
        50% { transform: translateX(20px) translateY(-10px); }
    }

    @keyframes floatVertical {
        0%, 100% { transform: translateX(0px) translateY(0px); }
        50% { transform: translateX(-15px) translateY(20px); }
    }

    @keyframes morph {
        0% {
            border-radius: 50% 50% 50% 50% / 60% 60% 40% 40%;
            transform: scale(1) rotate(0deg);
        }
        25% {
            border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
            transform: scale(1.1) rotate(90deg);
        }
        50% {
            border-radius: 70% 30% 30% 70% / 70% 70% 30% 30%;
            transform: scale(0.9) rotate(180deg);
        }
        75% {
            border-radius: 40% 60% 60% 40% / 50% 50% 50% 50%;
            transform: scale(1.05) rotate(270deg);
        }
        100% {
            border-radius: 50% 50% 50% 50% / 60% 60% 40% 40%;
            transform: scale(1) rotate(360deg);
        }
    }

    .animate-spin-slow {
        animation: spin 4s linear infinite;
    }

    .animate-counter {
        animation: counter 2s ease-out forwards;
    }

    @keyframes spin {
        from {
            transform: rotate(0deg);
        }
        to {
            transform: rotate(360deg);
        }
    }

    /* Our Values Section - Refined Design */
    .cgwnm89 {
        padding: 5rem 0;
        background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
        position: relative;
    }

    .cgwnm89::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: radial-gradient(circle at 20% 80%, rgba(120, 119, 198, 0.1) 0%, transparent 50%),
                    radial-gradient(circle at 80% 20%, rgba(255, 177, 153, 0.1) 0%, transparent 50%);
        pointer-events: none;
    }

    .wwuyhkp {
        position: relative;
        z-index: 2;
        text-align: center;
        max-width: 800px;
        margin: 0 auto 4rem;
    }

    .bud9ge8 {
        font-size: 1rem;
        font-weight: 600;
        color: #64748b;
        text-transform: uppercase;
        letter-spacing: 0.1em;
        margin-bottom: 1rem;
        position: relative;
    }

    .bud9ge8::after {
        content: '';
        position: absolute;
        bottom: -8px;
        left: 50%;
        transform: translateX(-50%);
        width: 60px;
        height: 2px;
        background: linear-gradient(90deg, #6a11cb, #2575fc);
        border-radius: 1px;
    }

    .w1islewv {
        font-size: 3rem;
        font-weight: 700;
        color: #1e293b;
        line-height: 1.2;
        margin: 0;
    }

    .w1islewv p {
        margin: 0;
    }

    .highlight {
        background: linear-gradient(135deg, #6a11cb, #2575fc);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        font-weight: 700;
        position: relative;
    }

    /* Refined Cards Layout */
    .c1fjuo1p {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
        gap: 3rem;
        margin-top: 4rem;
        position: relative;
        z-index: 2;
    }

    .values-card {
        position: relative;
        background: #ffffff;
        border-radius: 1.5rem;
        overflow: hidden;
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        cursor: pointer;
        min-height: 480px;
        display: flex;
        flex-direction: column;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        border: 1px solid rgba(148, 163, 184, 0.1);
    }

    .values-card:hover {
        transform: translateY(-12px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        border-color: rgba(106, 17, 203, 0.2);
    }

    .values-card .cyce9xu {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        padding: 2.5rem;
        background: linear-gradient(135deg, rgba(106, 17, 203, 0.95), rgba(37, 117, 252, 0.95));
        transition: opacity 0.4s ease;
    }

    .values-card:hover .cyce9xu.fjkwqpz {
        opacity: 0;
    }

    .values-card .cyce9xu.bi97gev {
        opacity: 0;
        transform: translateY(30px);
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        background: rgba(255, 255, 255, 0.98);
        backdrop-filter: blur(10px);
        border-radius: 1.5rem;
        margin: 1rem;
        padding: 2rem;
    }

    .values-card:hover .cyce9xu.bi97gev {
        opacity: 1;
        transform: translateY(0);
    }

    .values-expanded h3 {
        color: #1e293b;
        margin-bottom: 1.5rem;
        font-size: 1.5rem;
        font-weight: 700;
    }

    .values-expanded p {
        color: #64748b;
        line-height: 1.7;
        font-size: 0.95rem;
    }

    .highlight {
        background: linear-gradient(135deg, #fbbf24, #f59e0b);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        font-weight: 600;
    }

    .values-card .c12tzzqh {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.8);
        display: none;
        align-items: center;
        justify-content: center;
        z-index: 1000;
        padding: 2rem;
        backdrop-filter: blur(8px);
    }

    .values-card.active .c12tzzqh {
        display: flex;
    }

    .values-modal {
        background: #ffffff;
        border-radius: 2rem;
        padding: 3rem;
        max-width: 600px;
        width: 90%;
        max-height: 80vh;
        overflow-y: auto;
        position: relative;
        text-align: center;
        box-shadow: 0 25px 50px rgba(0, 0, 0, 0.25);
        border: 1px solid rgba(148, 163, 184, 0.1);
    }

    .values-close-btn {
        position: absolute;
        top: 1.5rem;
        right: 1.5rem;
        background: #f1f5f9;
        border: none;
        color: #64748b;
        cursor: pointer;
        transition: all 0.2s ease;
        width: 2.5rem;
        height: 2.5rem;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .values-close-btn:hover {
        background: #e2e8f0;
        color: #475569;
        transform: scale(1.05);
    }

    .values-modal h3 {
        color: #1e293b;
        margin-bottom: 1.5rem;
        font-size: 2rem;
        font-weight: 700;
    }

    .values-modal p {
        color: #64748b;
        line-height: 1.7;
        margin-bottom: 2rem;
        font-size: 1.1rem;
    }

    .b13y7o0h {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        color: rgba(255, 255, 255, 0.9);
        font-size: 0.875rem;
        font-weight: 500;
        transition: color 0.2s ease;
        justify-content: center;
    }

    .values-card:hover .b13y7o0h {
        color: white;
    }

    .igpz1pg {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: -1;
    }

    .igpz1pg img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
        transition: transform 0.4s ease;
        border-radius: 1.5rem;
    }

    .values-card:hover .igpz1pg img {
        transform: scale(1.05);
    }

    /* Icon images in cards */
    .b13y7o0h img {
        width: 1rem;
        height: 1rem;
        object-fit: contain;
        border-radius: 0.25rem;
    }

    .values-close-btn img {
        width: 1rem;
        height: 1rem;
        object-fit: contain;
    }

    /* Responsive adjustments for values section */
    @media (max-width: 1024px) {
        .c1fjuo1p {
            grid-template-columns: repeat(2, 1fr);
            gap: 2rem;
        }

        .values-card {
            min-height: 420px;
        }
    }

    @media (max-width: 768px) {
        .c1fjuo1p {
            grid-template-columns: 1fr;
            gap: 2rem;
            margin-top: 3rem;
        }

        .values-card {
            min-height: 380px;
        }

        .values-modal {
            padding: 2.5rem;
            margin: 1rem;
            max-width: 95%;
            border-radius: 1.5rem;
        }

        .values-modal h3 {
            font-size: 1.75rem;
        }

        .values-modal p {
            font-size: 1rem;
        }
    }

    @media (max-width: 480px) {
        .c1fjuo1p {
            gap: 1.5rem;
        }

        .values-card {
            min-height: 350px;
        }

        .values-modal {
            padding: 2rem;
            border-radius: 1rem;
        }

        .values-modal h3 {
            font-size: 1.5rem;
        }
    }

    /* Animation for card interactions */
    @keyframes slideInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .values-card .values-expanded > div {
        animation: slideInUp 0.3s ease-out;
    }
</style>

<!-- Custom JavaScript -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Smooth scrolling for navigation links
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

        // Scroll-triggered animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.animationPlayState = 'running';
                    entry.target.classList.add('animate__animated', 'animate__fadeInUp');
                }
            });
        }, observerOptions);

        // Observe elements for animation
        document.querySelectorAll('.custom-card, .feature-icon, .pricing-card, .service-card').forEach(el => {
            observer.observe(el);
        });

        // Form submission handler (if form is added later)
        const contactForm = document.getElementById('contactForm');
        if (contactForm) {
            contactForm.addEventListener('submit', function(e) {
                e.preventDefault();

                const submitBtn = document.getElementById('submitBtn');
                const msgSubmit = document.getElementById('msgSubmit');

                submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Mengirim...';
                submitBtn.disabled = true;

                setTimeout(() => {
                    msgSubmit.textContent = 'Pesan berhasil dikirim! Terima kasih.';
                    msgSubmit.className = 'mt-3 fs-5 fw-bold text-success';
                    submitBtn.innerHTML = 'Kirim Pesan';
                    submitBtn.disabled = false;
                    contactForm.reset();
                }, 2000);
            });
        }

        // Parallax effect for hero section
        window.addEventListener('scroll', function() {
            const scrolled = window.pageYOffset;
            const hero = document.getElementById('home');
            if (hero) {
                const rate = scrolled * -0.5;
                hero.style.transform = `translateY(${rate}px)`;
            }
        });

        // Counter animation for stats
        function animateCounters() {
            const counters = document.querySelectorAll('.animate-counter');
            counters.forEach(counter => {
                const target = parseFloat(counter.getAttribute('data-target'));
                const duration = 2500;
                const step = target / (duration / 16);
                let current = 0;

                function updateCounter() {
                    current += step;
                    if (current < target) {
                        counter.textContent = Math.floor(current) + (target === 99.9 ? '%' : '+');
                        requestAnimationFrame(updateCounter);
                    } else {
                        counter.textContent = target + (target === 99.9 ? '%' : '+');
                    }
                }
                updateCounter();
            });
        }

        // Trigger counter animation when stats section is visible
        const statsSection = document.querySelector('.animate-counter');
        if (statsSection) {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        animateCounters();
                        observer.unobserve(entry.target);
                    }
                });
            });
            observer.observe(statsSection);
        }

        // Navbar background change on scroll
        const navbar = document.querySelector('.navbar');
        if (navbar) {
            window.addEventListener('scroll', function() {
                if (window.scrollY > 50) {
                    navbar.classList.add('navbar-scrolled');
                } else {
                    navbar.classList.remove('navbar-scrolled');
                }
            });
        }

        // Testimonials Auto Carousel
        function initTestimonialsCarousel() {
            const track = document.querySelector('.testimonials-track');
            if (!track) return;

            // Select all testimonial cards within the track
            const slides = track.querySelectorAll('.bg-white.p-8.rounded-2xl');
            if (slides.length === 0) return;

            let currentIndex = 0;
            const totalSlides = slides.length;

            // Responsive slides to show
            function getSlidesToShow() {
                return window.innerWidth >= 768 ? 3 : 1;
            }

            let slidesToShow = getSlidesToShow();
            let slideWidth = 100 / slidesToShow;

            // Set track width based on number of slides and slides to show
            function updateTrackWidth() {
                slidesToShow = getSlidesToShow();
                slideWidth = 100 / slidesToShow;
                track.style.width = `${totalSlides * (100 / slidesToShow)}%`;
            }

            updateTrackWidth();

            // Set initial position
            track.style.transform = `translateX(0%)`;

            function updateCarousel() {
                // Recalculate for current screen size
                updateTrackWidth();
                const translateX = -currentIndex * (100 / slidesToShow);
                track.style.transform = `translateX(${translateX}%)`;
            }

            function nextSlide() {
                // Allow navigation through all slides, wrapping around
                currentIndex = (currentIndex + 1) % totalSlides;
                updateCarousel();
            }

            function prevSlide() {
                currentIndex = currentIndex === 0 ? totalSlides - 1 : currentIndex - 1;
                updateCarousel();
            }

            // Auto-play
            let autoPlayInterval = setInterval(nextSlide, 4000);

            // Pause on hover
            const carouselContainer = document.querySelector('.relative.max-w-6xl');
            if (carouselContainer) {
                carouselContainer.addEventListener('mouseenter', () => {
                    clearInterval(autoPlayInterval);
                });

                carouselContainer.addEventListener('mouseleave', () => {
                    autoPlayInterval = setInterval(nextSlide, 4000);
                });
            }

            // Handle window resize
            window.addEventListener('resize', () => {
                updateCarousel();
            });

            // Optional: Add navigation dots
            const dotsContainer = document.createElement('div');
            dotsContainer.className = 'flex justify-center mt-6 space-x-2';
            carouselContainer.appendChild(dotsContainer);

            // Calculate number of dots (total slides - slides to show + 1)
            function updateDotsCount() {
                const dotsCount = Math.max(1, totalSlides - slidesToShow + 1);
                dotsContainer.innerHTML = ''; // Clear existing dots

                for (let i = 0; i < dotsCount; i++) {
                    const dot = document.createElement('button');
                    dot.className = `w-3 h-3 rounded-full transition-colors ${i === 0 ? 'bg-primary-600' : 'bg-gray-300'}`;
                    dot.addEventListener('click', () => {
                        currentIndex = i;
                        updateCarousel();
                        // Update dots
                        document.querySelectorAll('.flex.justify-center button').forEach((d, idx) => {
                            d.className = `w-3 h-3 rounded-full transition-colors ${idx === i ? 'bg-primary-600' : 'bg-gray-300'}`;
                        });
                        clearInterval(autoPlayInterval);
                        autoPlayInterval = setInterval(nextSlide, 4000);
                    });
                    dotsContainer.appendChild(dot);
                }
            }

            updateDotsCount();

            // Update dots on slide change
            const originalNextSlide = nextSlide;
            nextSlide = function() {
                originalNextSlide();
                // Update active dot based on current index
                updateDotsCount();
                const activeDotIndex = Math.min(currentIndex, dotsContainer.children.length - 1);
                document.querySelectorAll('.flex.justify-center button').forEach((d, idx) => {
                    d.className = `w-3 h-3 rounded-full transition-colors ${idx === activeDotIndex ? 'bg-primary-600' : 'bg-gray-300'}`;
                });
            };
        }

        // Our Values Section Interactive Functionality
        function initValuesSection() {
            const valuesCards = document.querySelectorAll('.values-card');

            valuesCards.forEach(card => {
                // Handle card click/enter to show modal
                card.addEventListener('click', function() {
                    showValuesModal(card);
                });

                card.addEventListener('keypress', function(e) {
                    if (e.key === 'Enter' || e.key === ' ') {
                        e.preventDefault();
                        showValuesModal(card);
                    }
                });

                // Handle close button
                const closeBtn = card.querySelector('.values-close-btn');
                if (closeBtn) {
                    closeBtn.addEventListener('click', function(e) {
                        e.stopPropagation();
                        hideValuesModal(card);
                    });
                }

                // Handle escape key to close modal
                document.addEventListener('keydown', function(e) {
                    if (e.key === 'Escape') {
                        hideValuesModal(card);
                    }
                });

                // Handle clicking outside modal to close
                const modal = card.querySelector('.values-modal');
                if (modal) {
                    modal.addEventListener('click', function(e) {
                        e.stopPropagation();
                    });

                    // Click outside modal content to close
                    card.querySelector('.c12tzzqh').addEventListener('click', function(e) {
                        if (e.target === this) {
                            hideValuesModal(card);
                        }
                    });
                }
            });
        }

        function showValuesModal(card) {
            // Hide all other modals first
            document.querySelectorAll('.values-card.active').forEach(activeCard => {
                if (activeCard !== card) {
                    hideValuesModal(activeCard);
                }
            });

            // Show the selected modal
            card.classList.add('active');
            document.body.style.overflow = 'hidden'; // Prevent background scrolling

            // Focus management for accessibility
            const modal = card.querySelector('.values-modal');
            const firstFocusableElement = modal.querySelector('button, h3, p');
            if (firstFocusableElement) {
                firstFocusableElement.focus();
            }
        }

        function hideValuesModal(card) {
            card.classList.remove('active');
            document.body.style.overflow = ''; // Restore scrolling

            // Return focus to the card for accessibility
            card.focus();
        }

        // Initialize values section
        initValuesSection();
    });
</script>