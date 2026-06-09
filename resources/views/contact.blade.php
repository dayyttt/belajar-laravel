@extends('layouts.home')
@section('title', 'Hubungi Kami - TokiToki')
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
                    Hubungi TokiToki
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-green-600 to-teal-600">Kami Siap Membantu Anda</span>
                </h1>
                <p class="text-lg sm:text-xl text-gray-600 mb-8 max-w-2xl mx-auto lg:mx-0 leading-relaxed">
                    Punya pertanyaan, butuh informasi, atau ingin bekerja sama? Tim TokiToki siap memberikan solusi layanan jasa online yang cepat, terpercaya, dan mudah.
                </p>
            </div>

            {{-- Right Column: Illustration --}}
            <div class="hidden lg:block">
                <div class="relative">
                    <div class="absolute -top-4 -right-4 w-72 h-72 bg-gradient-to-br from-green-400 to-teal-500 rounded-3xl opacity-20 blur-2xl"></div>
                    <img src="{{ asset('assets/img/contact-illustration.svg') }}" 
                         alt="Hubungi TokiToki" 
                         class="relative z-10 w-full h-auto drop-shadow-2xl"
                         onerror="this.src='https://images.unsplash.com/photo-1423666639041-f56000c27a9a?w=600&q=80'">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ========================================
     INFORMASI KONTAK KAMI
     ======================================== --}}
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {{-- Section Header --}}
        <div class="text-center mb-12">
            <h2 class="text-3xl sm:text-4xl font-extrabold text-gray-900 mb-4">
                Informasi Kontak Kami
            </h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Berbagai cara untuk berhubungan dengan TokiToki
            </p>
        </div>

        {{-- Contact Info Cards Grid --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-6">
            @php
            $contactInfo = [
                [
                    'title' => 'Telepon',
                    'value' => '0812-3456-7890',
                    'subtext' => 'Senin - Jumat, 09:00 - 17:00',
                    'icon' => '<svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>'
                ],
                [
                    'title' => 'Email',
                    'value' => 'halo@tokitoki.id',
                    'subtext' => 'Respons dalam 24 jam',
                    'icon' => '<svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>'
                ],
                [
                    'title' => 'Alamat',
                    'value' => 'Jl. Raya Cileungsi',
                    'subtext' => 'Cileungsi, Bogor 16820',
                    'icon' => '<svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>'
                ],
                [
                    'title' => 'Jam Operasional',
                    'value' => '09.00 - 17.00 WIB',
                    'subtext' => '(Senin Hari Libur)',
                    'icon' => '<svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>'
                ],
                [
                    'title' => 'Sosial Media',
                    'value' => '@TokiToki',
                    'subtext' => 'Ikuti kami',
                    'icon' => '<svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"/></svg>'
                ],
            ];
            @endphp

            @foreach($contactInfo as $info)
            <div class="bg-white border-2 border-gray-200 rounded-2xl p-6 hover:border-green-500 hover:shadow-lg transition-all duration-300 text-center">
                {{-- Icon --}}
                <div class="text-green-600 mb-4 flex justify-center">
                    {!! $info['icon'] !!}
                </div>

                {{-- Title --}}
                <h3 class="text-sm font-semibold text-gray-500 mb-2 uppercase tracking-wide">
                    {{ $info['title'] }}
                </h3>

                {{-- Value --}}
                <p class="text-lg font-bold text-gray-900 mb-1">
                    {{ $info['value'] }}
                </p>

                {{-- Subtext --}}
                <p class="text-sm text-gray-600">
                    {{ $info['subtext'] }}
                </p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ========================================
     FORM & MAP SECTION
     ======================================== --}}
<section class="py-16 lg:py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-12">
            {{-- Left Column: Contact Form --}}
            <div>
                <div class="bg-white rounded-2xl p-8 shadow-sm border-2 border-gray-200">
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">
                        Kirim Pesan Kepada Kami
                    </h3>
                    <p class="text-gray-600 mb-8">
                        Isi formulir di bawah ini dan kami akan segera menghubungi Anda.
                    </p>

                    <form class="space-y-6">
                        {{-- Nama Lengkap --}}
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-2">
                                Nama Lengkap
                            </label>
                            <input
                                type="text"
                                id="name"
                                name="name"
                                placeholder="Masukkan nama lengkap Anda"
                                class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-green-500 focus:border-transparent transition-all"
                            >
                        </div>

                        {{-- Email --}}
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                                Email
                            </label>
                            <input
                                type="email"
                                id="email"
                                name="email"
                                placeholder="Masukkan email Anda"
                                class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-green-500 focus:border-transparent transition-all"
                            >
                        </div>

                        {{-- Subjek --}}
                        <div>
                            <label for="subject" class="block text-sm font-medium text-gray-700 mb-2">
                                Subjek
                            </label>
                            <select
                                id="subject"
                                name="subject"
                                class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-green-500 focus:border-transparent transition-all"
                            >
                                <option value="">Pilih atau tulis subjek pesan Anda</option>
                                <option value="layanan">Pertanyaan Layanan</option>
                                <option value="mitra">Menjadi Mitra</option>
                                <option value="keluhan">Keluhan</option>
                                <option value="lainnya">Lainnya</option>
                            </select>
                        </div>

                        {{-- Pesan --}}
                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700 mb-2">
                                Pesan
                            </label>
                            <textarea
                                id="message"
                                name="message"
                                rows="5"
                                placeholder="Tulis pesan Anda di sini..."
                                class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-green-500 focus:border-transparent transition-all resize-none"
                            ></textarea>
                        </div>

                        {{-- Submit Button --}}
                        <div>
                            <button
                                type="submit"
                                class="w-full px-8 py-4 bg-gradient-to-r from-green-600 to-teal-600 text-white font-bold rounded-xl shadow-lg hover:shadow-xl hover:scale-105 transition-all duration-300"
                            >
                                Kirim Pesan
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            {{-- Right Column: Map --}}
            <div>
                <div class="bg-white rounded-2xl p-8 shadow-sm border-2 border-gray-200 h-full">
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">
                        Lokasi Kami
                    </h3>
                    <p class="text-gray-600 mb-6">
                        Kunjungi kantor TokiToki atau temukan lokasi langsung
                    </p>

                    {{-- Map Placeholder --}}
                    <div class="relative bg-gray-100 rounded-xl overflow-hidden h-80 mb-6">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126748.56347862248!2d106.93230744863283!3d-6.394090799999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e699c6788b8b935%3A0x401e8f1fc28cc20!2sCileungsi%2C%20Bogor%20Regency%2C%20West%20Java!5e0!3m2!1sen!2sid!4v1234567890"
                            width="100%" 
                            height="100%" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade"
                            class="rounded-xl">
                        </iframe>
                    </div>

                    {{-- Map Button --}}
                    <a href="https://www.google.com/maps/place/Cileungsi,+Bogor+Regency,+West+Java/@-6.394091,106.9323074,12z" 
                       target="_blank"
                       class="inline-flex items-center justify-center w-full px-6 py-3 border-2 border-green-600 text-green-600 font-semibold rounded-xl hover:bg-green-50 transition-all duration-300">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        Buka di Google Maps
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ========================================
     FAQ SECTION
     ======================================== --}}
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        {{-- Section Header --}}
        <div class="text-center mb-12">
            <h2 class="text-3xl sm:text-4xl font-extrabold text-gray-900 mb-4">
                Pertanyaan yang Sering Diajukan
            </h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Temukan jawaban atas pertanyaan umum tentang TokiToki
            </p>
        </div>

        {{-- FAQ Accordion --}}
        <div class="space-y-4">
            @php
            $faqs = [
                [
                    'question' => 'Berapa lama respon pesan dari TokiToki?',
                    'answer' => 'Tim customer service kami akan merespons pesan Anda dalam waktu maksimal 24 jam pada hari kerja. Untuk pertanyaan mendesak, Anda dapat menghubungi kami melalui telepon di 0812-3456-7890.'
                ],
                [
                    'question' => 'Bagaimana cara memesan layanan di TokiToki?',
                    'answer' => 'Anda dapat memesan layanan melalui website kami dengan memilih layanan yang diinginkan, mengisi detail pesanan, melakukan pembayaran, dan menunggu konfirmasi. Proses pemesanan sangat mudah dan cepat.'
                ],
                [
                    'question' => 'Bagaimana cara menjadi mitra layanan TokiToki?',
                    'answer' => 'Untuk menjadi mitra layanan TokiToki, Anda dapat mendaftar melalui halaman "Daftar Jadi Mitra" di website kami. Tim kami akan menghubungi Anda untuk proses verifikasi dan onboarding.'
                ],
                [
                    'question' => 'Apakah layanan TokiToki tersedia di seluruh Indonesia?',
                    'answer' => 'Saat ini TokiToki melayani wilayah Jakarta dan sekitarnya. Kami terus berkembang dan berencana untuk memperluas jangkauan layanan ke kota-kota besar lainnya di Indonesia.'
                ],
                [
                    'question' => 'Apakah pembayaran di TokiToki aman?',
                    'answer' => 'Ya, sangat aman. Kami menggunakan sistem pembayaran yang terenkripsi dan bekerja sama dengan payment gateway terpercaya untuk menjamin keamanan transaksi Anda.'
                ],
                [
                    'question' => 'Bagaimana jika saya tidak puas dengan layanan yang diberikan?',
                    'answer' => 'Kepuasan pelanggan adalah prioritas kami. Jika Anda tidak puas dengan layanan yang diberikan, silakan hubungi customer service kami dan kami akan membantu menyelesaikan masalah Anda dengan cepat.'
                ],
            ];
            @endphp

            @foreach($faqs as $index => $faq)
            <div class="bg-white border-2 border-gray-200 rounded-xl overflow-hidden hover:border-green-500 transition-all duration-300">
                <button 
                    type="button"
                    class="w-full px-6 py-5 text-left flex items-center justify-between focus:outline-none group"
                    onclick="toggleFaq({{ $index }})"
                >
                    <span class="text-lg font-semibold text-gray-900 group-hover:text-green-600 transition-colors">
                        {{ $faq['question'] }}
                    </span>
                    <svg 
                        id="faq-icon-{{ $index }}"
                        class="w-6 h-6 text-gray-500 transform transition-transform duration-300"
                        fill="none" 
                        stroke="currentColor" 
                        viewBox="0 0 24 24"
                    >
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div 
                    id="faq-content-{{ $index }}"
                    class="hidden px-6 pb-5"
                >
                    <p class="text-gray-600 leading-relaxed">
                        {{ $faq['answer'] }}
                    </p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ========================================
     CTA SECTION
     ======================================== --}}
<section class="py-16 lg:py-24 bg-gradient-to-br from-green-50 via-teal-50 to-emerald-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 gap-8">
            {{-- CTA Card 1: Saya Pelanggan --}}
            <div class="bg-white rounded-2xl p-8 shadow-lg border-2 border-gray-200 hover:border-green-500 hover:shadow-xl transition-all duration-300">
                <div class="flex items-start mb-6">
                    <div class="flex-shrink-0 w-16 h-16 bg-gradient-to-br from-green-500 to-teal-500 rounded-2xl flex items-center justify-center text-white">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                        </svg>
                    </div>
                    <div class="ml-6">
                        <h3 class="text-2xl font-bold text-gray-900 mb-2">
                            Saya Pelanggan
                        </h3>
                        <p class="text-gray-600 leading-relaxed">
                            Butuh layanan jasa cepat dan terpercaya? Pesan sekarang dan nikmati kemudahan layanan TokiToki.
                        </p>
                    </div>
                </div>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('layanan-info.index') }}" 
                       class="w-full px-6 py-3 bg-gradient-to-r from-green-600 to-teal-600 text-white font-semibold rounded-xl text-center hover:shadow-lg hover:scale-105 transition-all duration-300">
                        Pesan Layanan
                    </a>
                </div>
            </div>

            {{-- CTA Card 2: Saya Mitra Layanan --}}
            <div class="bg-white rounded-2xl p-8 shadow-lg border-2 border-gray-200 hover:border-green-500 hover:shadow-xl transition-all duration-300">
                <div class="flex items-start mb-6">
                    <div class="flex-shrink-0 w-16 h-16 bg-gradient-to-br from-green-500 to-teal-500 rounded-2xl flex items-center justify-center text-white">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <div class="ml-6">
                        <h3 class="text-2xl font-bold text-gray-900 mb-2">
                            Saya Mitra Layanan
                        </h3>
                        <p class="text-gray-600 leading-relaxed">
                            Bergabunglah dengan TokiToki dan kembangkan bisnis layanan Anda bersama kami.
                        </p>
                    </div>
                </div>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="https://wa.me/6285771062740?text=Halo%20TokiToki,%20saya%20ingin%20mendaftar%20sebagai%20*Mitra%20Layanan*%0A%0ANama:%0ALayanan%20yang%20ditawarkan:%0APengalaman:%0ANo.%20Telepon:%0AAlamat:%0ACatatan%20Tambahan:" 
                       target="_blank"
                       class="w-full px-6 py-3 bg-gradient-to-r from-green-600 to-teal-600 text-white font-semibold rounded-xl text-center hover:shadow-lg hover:scale-105 transition-all duration-300">
                        Daftar Jadi Mitra
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
function toggleFaq(index) {
    const content = document.getElementById(`faq-content-${index}`);
    const icon = document.getElementById(`faq-icon-${index}`);
    
    if (content.classList.contains('hidden')) {
        content.classList.remove('hidden');
        icon.style.transform = 'rotate(180deg)';
    } else {
        content.classList.add('hidden');
        icon.style.transform = 'rotate(0deg)';
    }
}
</script>

@endsection
