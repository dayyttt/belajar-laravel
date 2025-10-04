@extends('layouts.app')
@section('content')
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
@endsection