@extends('layouts.app')

@section('content')
@yield('content')
<body data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" tabindex="0">
    <main>
        
        <!-- 1. HOME Section (Hero) -->
        <section id="home" class="py-5 text-center d-flex align-items-center" style="min-height: 100vh;">
            <div class="container pt-5">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <span class="badge text-uppercase mb-3 px-3 py-2 border border-primary text-primary-color">Inovasi Masa Depan</span>
                        <h1 class="display-3 hero-title text-light mb-4">
                            Ubah Cara Kerja Anda dengan <span class="gradient-text">Aplikasi Cerdas</span> Kami.
                        </h1>
                        <p class="lead text-secondary mb-5">
                            AppName adalah solusi all-in-one yang memanfaatkan teknologi terbaru untuk mengoptimalkan produktivitas Anda. Lebih cepat, lebih pintar, lebih efisien.
                        </p>
                        <a href="#download" class="btn btn-gradient btn-lg me-3 shadow-lg">
                            Mulai Gratis Sekarang <i class="fas fa-arrow-right ms-2"></i>
                        </a>
                        <a href="#features" class="btn btn-outline-light btn-lg">
                            Lihat Fitur <i class="fas fa-cogs ms-2"></i>
                        </a>

                        <!-- Mock App Screenshot (Placeholder) -->
                        <div class="mt-5 p-4 custom-card shadow-lg border-primary" style="border-width: 2px;">
                            <img src="https://placehold.co/1200x650/1e1e1e/6a11cb?text=DASHBOARD+APLIKASI+MODERN" class="img-fluid rounded-lg" alt="Mockup Dashboard Aplikasi">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 2. FEATURES Section -->
        <section id="features" class="py-5 py-md-5 bg-dark">
            <div class="container py-5">
                <div class="row justify-content-center text-center mb-5">
                    <div class="col-lg-8">
                        <h2 class="display-5 fw-bold text-light mb-3">Mengapa AppName?</h2>
                        <p class="lead text-secondary">Kami menawarkan alat yang dirancang untuk pertumbuhan. Berikut adalah fitur-fitur unggulan kami:</p>
                    </div>
                </div>
                
                <div class="row g-4">
                    <!-- Feature 1 -->
                    <div class="col-md-6 col-lg-3">
                        <div class="custom-card p-4 text-center">
                            <i class="fas fa-robot fa-3x text-primary-color mb-3"></i>
                            <h5 class="fw-bold text-light">Otomatisasi Penuh</h5>
                            <p class="text-secondary small">Hilangkan tugas repetitif. Biarkan AI kami bekerja 24/7 untuk Anda.</p>
                        </div>
                    </div>
                    <!-- Feature 2 -->
                    <div class="col-md-6 col-lg-3">
                        <div class="custom-card p-4 text-center">
                            <i class="fas fa-lock fa-3x text-info mb-3"></i>
                            <h5 class="fw-bold text-light">Keamanan Data</h5>
                            <p class="text-secondary small">Enkripsi end-to-end memastikan data sensitif Anda selalu aman dan terlindungi.</p>
                        </div>
                    </div>
                    <!-- Feature 3 -->
                    <div class="col-md-6 col-lg-3">
                        <div class="custom-card p-4 text-center">
                            <i class="fas fa-chart-line fa-3x text-success mb-3"></i>
                            <h5 class="fw-bold text-light">Analisis Real-Time</h5>
                            <p class="text-secondary small">Akses laporan dan wawasan bisnis yang mudah dicerna, kapan saja Anda membutuhkannya.</p>
                        </div>
                    </div>
                    <!-- Feature 4 -->
                    <div class="col-md-6 col-lg-3">
                        <div class="custom-card p-4 text-center">
                            <i class="fas fa-users-cog fa-3x text-warning mb-3"></i>
                            <h5 class="fw-bold text-light">Kolaborasi Tim</h5>
                            <p class="text-secondary small">Hubungkan tim Anda di satu platform untuk komunikasi dan koordinasi proyek yang mulus.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 3. SCREENSHOTS Section -->
        <section id="screenshots" class="py-5 py-md-5">
            <div class="container py-5">
                <div class="row justify-content-center text-center mb-5">
                    <div class="col-lg-8">
                        <h2 class="display-5 fw-bold text-light mb-3">Antarmuka yang Indah & Intuitif</h2>
                        <p class="lead text-secondary">Lihat sekilas bagaimana AppName menggabungkan fungsionalitas yang kuat dengan desain yang elegan.</p>
                    </div>
                </div>

                <!-- Simple Screenshot Grid -->
                <div class="row g-4 justify-content-center">
                    <div class="col-md-6 col-lg-4">
                        <div class="custom-card p-3 shadow-lg">
                            <img src="https://placehold.co/600x400/2a2a2a/f8f9fa?text=SCREENSHOT+1%0APengaturan" class="img-fluid rounded-lg" alt="Screenshot 1">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="custom-card p-3 shadow-lg">
                            <img src="https://placehold.co/600x400/2a2a2a/f8f9fa?text=SCREENSHOT+2%0ADasbor" class="img-fluid rounded-lg" alt="Screenshot 2">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="custom-card p-3 shadow-lg">
                            <img src="https://placehold.co/600x400/2a2a2a/f8f9fa?text=SCREENSHOT+3%0APekerjaan+Tim" class="img-fluid rounded-lg" alt="Screenshot 3">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- 4. TESTIMONIAL Section -->
        <section id="testimonial" class="py-5 py-md-5 gradient-bg text-center">
            <div class="container py-5">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <h2 class="display-6 fw-bold text-white mb-5">Apa Kata Klien Kami?</h2>
                        
                        <!-- Testimonial Card -->
                        <div class="custom-card bg-light text-dark p-5 shadow-lg">
                            <i class="fas fa-quote-left fa-3x text-primary-color mb-3"></i>
                            <blockquote class="blockquote mb-4">
                                <p class="mb-0 fs-5 fw-normal">"AppName benar-benar mengubah permainan untuk operasi harian kami. Fitur otomatisasi menghemat waktu berharga tim kami, memungkinkan kami fokus pada strategi. Sangat direkomendasikan!"</p>
                            </blockquote>
                            <figcaption class="blockquote-footer mt-3 mb-0">
                                John Doe, <cite title="Source Title">CEO Teknologi Inovasi</cite>
                            </figcaption>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 5. PLANS Section (Pricing) -->
        <section id="plans" class="py-5 py-md-5 bg-dark">
            <div class="container py-5">
                <div class="row justify-content-center text-center mb-5">
                    <div class="col-lg-8">
                        <h2 class="display-5 fw-bold text-light mb-3">Rencana Harga yang Fleksibel</h2>
                        <p class="lead text-secondary">Pilih paket yang paling sesuai dengan kebutuhan dan skala bisnis Anda.</p>
                    </div>
                </div>

                <div class="row g-4 justify-content-center">
                    <!-- Plan 1: Starter -->
                    <div class="col-md-6 col-lg-4">
                        <div class="custom-card p-4 h-100 d-flex flex-column">
                            <h3 class="fw-bold text-light">Starter</h3>
                            <p class="text-secondary mb-4">Untuk pengguna individu.</p>
                            <div class="d-flex align-items-center mb-4">
                                <span class="display-4 fw-bold text-light me-2">$0</span>
                                <span class="text-secondary">/ selamanya</span>
                            </div>
                            <ul class="list-unstyled mb-4 flex-grow-1">
                                <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> 1 Pengguna</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> 100 Tugas Otomatis</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Penyimpanan 1GB</li>
                                <li class="mb-2 text-secondary"><i class="fas fa-times-circle text-danger me-2"></i> Dukungan Premium</li>
                            </ul>
                            <a href="#" class="btn btn-outline-primary mt-auto">Mulai Gratis</a>
                        </div>
                    </div>
                    
                    <!-- Plan 2: Pro (Highlighted) -->
                    <div class="col-md-6 col-lg-4">
                        <div class="custom-card p-5 h-100 d-flex flex-column border-primary shadow-lg" style="border-width: 3px !important; transform: scale(1.05);">
                            <span class="badge bg-primary text-light mb-3 p-2 fw-bold position-absolute top-0 start-50 translate-middle rounded-pill">PILIHAN TERBAIK</span>
                            <h3 class="fw-bold text-light">Pro</h3>
                            <p class="text-secondary mb-4">Untuk tim yang sedang berkembang.</p>
                            <div class="d-flex align-items-center mb-4">
                                <span class="display-4 fw-bold text-light me-2">$49</span>
                                <span class="text-secondary">/ bulan</span>
                            </div>
                            <ul class="list-unstyled mb-4 flex-grow-1">
                                <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Hingga 10 Pengguna</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Otomatisasi Tanpa Batas</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Penyimpanan 500GB</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Dukungan Prioritas 24/7</li>
                            </ul>
                            <a href="#" class="btn btn-gradient mt-auto shadow-sm">Upgrade ke Pro</a>
                        </div>
                    </div>

                    <!-- Plan 3: Enterprise -->
                    <div class="col-md-6 col-lg-4">
                        <div class="custom-card p-4 h-100 d-flex flex-column">
                            <h3 class="fw-bold text-light">Enterprise</h3>
                            <p class="text-secondary mb-4">Untuk kebutuhan korporasi besar.</p>
                            <div class="d-flex align-items-center mb-4">
                                <span class="display-4 fw-bold text-light me-2">Kustom</span>
                            </div>
                            <ul class="list-unstyled mb-4 flex-grow-1">
                                <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Pengguna Tak Terbatas</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Kepatuhan Keamanan Khusus</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Solusi Kustomisasi</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Manajer Akun Khusus</li>
                            </ul>
                            <a href="#contact" class="btn btn-outline-info mt-auto">Hubungi Penjualan</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 6. DOWNLOAD Section (CTA) -->
        <section id="download" class="py-5 py-md-5 gradient-bg text-center">
            <div class="container py-5">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <h2 class="display-5 fw-bold text-white mb-4">Unduh AppName Sekarang!</h2>
                        <p class="lead text-light opacity-75 mb-5">Tersedia untuk Android, iOS, dan Desktop. Mulai tingkatkan produktivitas Anda dalam beberapa klik.</p>
                        
                        <div class="d-flex flex-column flex-md-row justify-content-center gap-3">
                            <a href="#" class="btn btn-light btn-lg text-dark shadow-sm">
                                <i class="fab fa-apple me-2"></i> App Store
                            </a>
                            <a href="#" class="btn btn-dark btn-lg border border-light">
                                <i class="fab fa-google-play me-2 text-success"></i> Google Play
                            </a>
                            <a href="#" class="btn btn-dark btn-lg border border-light">
                                <i class="fas fa-desktop me-2 text-info"></i> Desktop App
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 7. CONTACT Section -->
        <section id="contact" class="py-5 py-md-5 bg-dark">
            <div class="container py-5">
                <div class="row justify-content-center text-center mb-5">
                    <div class="col-lg-8">
                        <h2 class="display-5 fw-bold text-light mb-3">Hubungi Kami</h2>
                        <p class="lead text-secondary">Kami senang mendengar masukan, pertanyaan, atau ide kolaborasi Anda.</p>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="custom-card p-4 p-md-5 shadow-lg">
                            <form id="contactForm" onsubmit="handleFormSubmit(event)">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="name" class="form-label text-light">Nama</label>
                                        <input type="text" class="form-control" id="name" placeholder="Nama Anda" required>
                                        <div class="invalid-feedback">Harap masukkan nama Anda.</div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="email" class="form-label text-light">Email</label>
                                        <input type="email" class="form-control" id="email" placeholder="email@contoh.com" required>
                                        <div class="invalid-feedback">Harap masukkan email yang valid.</div>
                                    </div>
                                    <div class="col-12">
                                        <label for="subject" class="form-label text-light">Subjek</label>
                                        <input type="text" class="form-control" id="subject" placeholder="Subjek pesan" required>
                                    </div>
                                    <div class="col-12">
                                        <label for="message" class="form-label text-light">Pesan</label>
                                        <textarea class="form-control" id="message" rows="5" placeholder="Tulis pesan Anda di sini..." required></textarea>
                                    </div>
                                    <div class="col-12 text-center mt-4">
                                        <button type="submit" id="submitBtn" class="btn btn-gradient btn-lg w-100 w-md-auto shadow-md">
                                            Kirim Pesan
                                        </button>
                                        <div id="msgSubmit" class="mt-3 fs-5 fw-bold"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
@endsection