@extends('layouts.app')
@section('content')
<section id="screenshots" class="screens-shot section bg-light-gray py-5 py-md-5">
    <div class="container">
        <div class="section-header text-center mb-5">
            <p class="btn btn-primary btn-subtitle wow fadeInDown" data-wow-delay="0.2s">
                DESAIN & INTUITIF
            </p>
            <h2 class="section-title display-4 fw-bold text-dark mt-3">
                Antarmuka yang Indah & Mudah Digunakan
            </h2>
            <p class="lead text-secondary mx-auto mt-3" style="max-width: 600px;">
                Lihat sendiri bagaimana AppName menggabungkan fungsionalitas yang kuat dengan tata letak yang bersih dan pengalaman pengguna yang mulus. Geser untuk melihat semua tampilan.
            </p>
        </div>
        <div class="row">
            <div class="touch-slider owl-carousel screenshots-carousel">
                <div class="item">
                    <div class="screenshot-thumb shadow-lg rounded-3 animated-hover-scale">
                        <img class="img-fluid" src="assets/img/screenshot/img-1.png" alt="Tampilan Dasbor Utama">
                    </div>
                </div>
                <div class="item">
                    <div class="screenshot-thumb shadow-lg rounded-3 animated-hover-scale">
                        <img class="img-fluid" src="assets/img/screenshot/img-2.png" alt="Tampilan Pengaturan Akun">
                    </div>
                </div>
                <div class="item">
                    <div class="screenshot-thumb shadow-lg rounded-3 animated-hover-scale">
                        <img class="img-fluid" src="assets/img/screenshot/img-3.png" alt="Tampilan Analisis Data">
                    </div>
                </div>
                <div class="item">
                    <div class="screenshot-thumb shadow-lg rounded-3 animated-hover-scale">
                        <img class="img-fluid" src="assets/img/screenshot/img-4.png" alt="Tampilan Kolaborasi Tim">
                    </div>
                </div>
                <div class="item">
                    <div class="screenshot-thumb shadow-lg rounded-3 animated-hover-scale">
                        <img class="img-fluid" src="assets/img/screenshot/img-5.png" alt="Tampilan Notifikasi">
                    </div>
                </div>
                <div class="item">
                    <div class="screenshot-thumb shadow-lg rounded-3 animated-hover-scale">
                        <img class="img-fluid" src="assets/img/screenshot/img-6.png" alt="Tampilan Laporan Bulanan">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection