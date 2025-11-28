@extends('layouts.app')
@section('content')
<section id="features" class="py-20 bg-[#a3c585]"> 
    <div class="container py-5">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-lg-8">
                <h2 class="display-5 fw-bold text-[#1A6A4E] mb-3">Mengapa AppName?</h2>
                <p class="lead text-[#3C7B5D]">Kami menawarkan alat yang dirancang untuk pertumbuhan. Berikut adalah fitur-fitur unggulan kami:</p>
            </div>
        </div>
        
        <div class="row g-4 justify-content-center"> {{-- Menggunakan grid Bootstrap 4 kolom --}}
            
            <div class="col-md-6 col-lg-4">
                <div class="custom-card p-4 text-center bg-white shadow-sm h-100 border-top border-5 border-[#1A6A4E]">
                    <i class="fas fa-robot fa-3x text-[#1A6A4E] mb-3"></i>
                    <h5 class="fw-bold text-[#1A6A4E]">Otomatisasi Penuh</h5>
                    <p class="text-secondary small">Hilangkan tugas repetitif. Biarkan AI kami bekerja 24/7 untuk Anda.</p>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4">
                <div class="custom-card p-4 text-center bg-white shadow-sm h-100 border-top border-5 border-[#3C7B5D]">
                    <i class="fas fa-lock fa-3x text-[#3C7B5D] mb-3"></i>
                    <h5 class="fw-bold text-[#1A6A4E]">Keamanan Data</h5>
                    <p class="text-secondary small">Enkripsi end-to-end memastikan data sensitif Anda selalu aman dan terlindungi.</p>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4">
                <div class="custom-card p-4 text-center bg-white shadow-sm h-100 border-top border-5 border-[#28A745]">
                    <i class="fas fa-chart-line fa-3x text-[#28A745] mb-3"></i>
                    <h5 class="fw-bold text-[#1A6A4E]">Analisis Real-Time</h5>
                    <p class="text-secondary small">Akses laporan dan wawasan bisnis yang mudah dicerna, kapan saja Anda membutuhkannya.</p>
                </div>
            </div>

            {{-- Fitur Baru untuk Melengkapi 6 Kartu --}}
            
            <div class="col-md-6 col-lg-4">
                <div class="custom-card p-4 text-center bg-white shadow-sm h-100 border-top border-5 border-[#1A6A4E]">
                    <i class="fas fa-users-cog fa-3x text-[#1A6A4E] mb-3"></i>
                    <h5 class="fw-bold text-[#1A6A4E]">Kolaborasi Tim</h5>
                    <p class="text-secondary small">Hubungkan tim Anda di satu platform untuk komunikasi dan koordinasi proyek yang mulus.</p>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4">
                <div class="custom-card p-4 text-center bg-white shadow-sm h-100 border-top border-5 border-[#3C7B5D]">
                    <i class="fas fa-mobile-alt fa-3x text-[#3C7B5D] mb-3"></i>
                    <h5 class="fw-bold text-[#1A6A4E]">Akses Seluler</h5>
                    <p class="text-secondary small">Kelola pekerjaan Anda di mana saja, kapan saja, melalui aplikasi seluler kami yang responsif.</p>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4">
                <div class="custom-card p-4 text-center bg-white shadow-sm h-100 border-top border-5 border-[#28A745]">
                    <i class="fas fa-headset fa-3x text-[#28A745] mb-3"></i>
                    <h5 class="fw-bold text-[#1A6A4E]">Dukungan Prioritas</h5>
                    <p class="text-secondary small">Dukungan pelanggan 24/7 untuk memastikan Anda tidak pernah tertinggal.</p>
                </div>
            </div>
            
        </div>
    </div>
</section>

@endsection
