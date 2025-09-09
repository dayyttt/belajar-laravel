@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h1 class="text-center mb-5">Our Products</h1>
    
    <div class="row">
        <!-- Product 1 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixlib=rb-1.2.1&auto=format&fit=crop&w=300&h=200&q=80" class="card-img-top" alt="Premium Product">
                <div class="card-body">
                    <h5 class="card-title">Premium Product</h5>
                    <p class="card-text">High-quality premium product designed for optimal performance and durability.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="h5 mb-0">Rp 1.499.000</span>
                        <button class="btn btn-primary">Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Product 2 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&auto=format&fit=crop&w=300&h=200&q=80" class="card-img-top" alt="Standard Package">
                <div class="card-body">
                    <h5 class="card-title">Standard Package</h5>
                    <p class="card-text">Reliable and efficient solution for your everyday needs at an affordable price.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="h5 mb-0">Rp 899.000</span>
                        <button class="btn btn-primary">Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Product 3 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?ixlib=rb-1.2.1&auto=format&fit=crop&w=300&h=200&q=80" class="card-img-top" alt="Basic Solution">
                <div class="card-body">
                    <h5 class="card-title">Basic Solution</h5>
                    <p class="card-text">Simple yet effective solution for those just getting started.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="h5 mb-0">Rp 449.000</span>
                        <button class="btn btn-primary">Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="h4 mb-4">Why Choose Our Products?</h3>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="d-flex">
                                <div class="me-3">
                                    <i class="bi bi-check-circle-fill text-success"></i>
                                </div>
                                <div>
                                    <h5>Quality Assurance</h5>
                                    <p>Rigorous testing ensures top-notch quality for all our products.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="d-flex">
                                <div class="me-3">
                                    <i class="bi bi-truck text-primary"></i>
                                </div>
                                <div>
                                    <h5>Fast Shipping</h5>
                                    <p>Quick delivery to your doorstep, no matter where you are.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="d-flex">
                                <div class="me-3">
                                    <i class="bi bi-headset text-info"></i>
                                </div>
                                <div>
                                    <h5>24/7 Support</h5>
                                    <p>Our customer service team is always here to help you.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection