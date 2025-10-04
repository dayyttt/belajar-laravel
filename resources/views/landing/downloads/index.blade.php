@extends('layouts.app')
@section('content')
   <section id="download" class="py-5 py-md-5 gradient-bg text-center">
            <div class="container py-5">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <h2 class="display-5 fw-bold text-primary mb-4">Unduh AppName Sekarang!</h2>
                        <p class="lead text-dark opacity-75 mb-5">Tersedia untuk Android, iOS, dan Desktop. Mulai tingkatkan produktivitas Anda dalam beberapa klik.</p>
                        
                        <div class="d-flex flex-column flex-md-row justify-content-center gap-3">
                            <a href="#" class="btn btn-dark btn-lg text-light shadow-sm">
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
@endsection
