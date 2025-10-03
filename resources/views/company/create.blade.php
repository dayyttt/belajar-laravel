@extends('layouts.app')
@section('content')
<div class="col-lg-6">
            <div class="card shadow-sm">
                <div class="card-body p-4">
                    <h2 class="h4 mb-4">Bikin Perusahaan Baru</h2>
                    <form method="post" action="/company/store">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Perusahaan</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Nama Perusahaan" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="tel" class="form-control" id="phone" name="phone" placeholder="+1 (123) 456-7890">
                        </div>
                        <div class="mb-3">
                            <label for="subject" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="subject" name="address" placeholder="Alamat" required>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-lg">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection