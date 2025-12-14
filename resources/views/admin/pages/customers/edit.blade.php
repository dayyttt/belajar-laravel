@extends('admin.layouts.main')
@section('title', 'Edit Data Pelanggan')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="mb-0">Edit Data Pelanggan</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('customers.update', $customer->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        @include('admin.pages.customers._form')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection