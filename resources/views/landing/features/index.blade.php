@extends('layouts.app')
@section('content')
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
@endsection
