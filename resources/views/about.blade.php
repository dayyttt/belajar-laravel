@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-lg-6">
            <h1 class="display-4 mb-4">About Us</h1>
            <p class="lead">Welcome to Our Company</p>
            <p>We are a dedicated team of professionals committed to delivering exceptional products and services to our customers. With years of experience in the industry, we take pride in our commitment to quality, innovation, and customer satisfaction.</p>
            <p>Our mission is to provide innovative solutions that help businesses grow and succeed in today's competitive market. We believe in building long-term relationships with our clients based on trust, integrity, and outstanding service.</p>
        </div>
        <div class="col-lg-6">
            <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&h=400&q=80" alt="Professional Team" class="img-fluid rounded shadow">
        </div>
    </div>
    
    <div class="row mt-5">
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h3 class="h4">Our Vision</h3>
                    <p>To be the leading provider of innovative solutions that transform businesses and enhance lives.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h3 class="h4">Our Mission</h3>
                    <p>To deliver exceptional value through innovative products and outstanding customer service.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h3 class="h4">Our Values</h3>
                    <ul class="list-unstyled">
                        <li>• Integrity</li>
                        <li>• Innovation</li>
                        <li>• Excellence</li>
                        <li>• Customer Focus</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection