@extends('layouts.app')
@section('content')
<section id="contact" class="py-5 py-md-5 bg-light">
            <div class="container py-5">
                <div class="row justify-content-center text-center mb-5">
                    <div class="col-lg-8">
                        <h2 class="display-5 fw-bold text-dark mb-3">Hubungi Kami</h2>
                        <p class="lead text-dark">Kami senang mendengar masukan, pertanyaan, atau ide kolaborasi Anda.</p>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="custom-card p-4 p-md-5 shadow-lg" style="box-shadow: 0 .5rem 1rem rgba(0, 123, 255, .5)!important;">
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
                                        <button type="submit" id="submitBtn" class="btn btn-primary btn-lg w-100 w-md-auto shadow-md">
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
