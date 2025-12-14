@extends('admin.layouts.main')
@section('title', 'Tambah Pelanggan Baru')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="mb-0">Tambah Pelanggan Baru</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('customers.store') }}" method="POST">
                        @include('admin.pages.customers._form')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection