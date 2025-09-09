@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-6 p-lg-5 mx-auto my-5">
        <h1 class="display-4 fw-bold">Welcome to Our Company</h1>
        <h3 class="fw-normal text-muted mb-4">Innovative Solutions for Your Business</h3>
        <div class="d-flex gap-3 justify-content-center">
            <a href="/about" class="btn btn-primary btn-lg px-4">Learn More</a>
            <a href="/contact" class="btn btn-outline-secondary btn-lg px-4">Contact Us</a>
        </div>
    </div>
    <div class="product-device shadow-sm d-none d-md-block"></div>
    <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
</div>

<!-- Features Section -->
<div class="container px-4 py-5" id="featured-3">
    <h2 class="pb-2 text-center">Why Choose Us</h2>
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
        <div class="feature col text-center">
            <div class="feature-icon d-inline-flex align-items-center justify-content-center bg-primary bg-gradient text-white fs-2 mb-3 p-3 rounded-circle mx-auto">
                <i class="bi bi-tools"></i>
            </div>
            <h3>Expert Team</h3>
            <p>Our team of experienced professionals is dedicated to delivering exceptional results for every project.</p>
            <a href="/about" class="icon-link">
                Learn more
                <i class="bi bi-arrow-right"></i>
            </a>
        </div>
        <div class="feature col text-center">
            <div class="feature-icon d-inline-flex align-items-center justify-content-center bg-primary bg-gradient text-white fs-2 mb-3 p-3 rounded-circle mx-auto">
                <i class="bi bi-lightbulb"></i>
            </div>
            <h3>Innovative Solutions</h3>
            <p>We provide cutting-edge solutions tailored to meet your specific business needs and challenges.</p>
            <a href="/service" class="icon-link">
                Learn more
                <i class="bi bi-arrow-right"></i>
            </a>
        </div>
        <div class="feature col text-center">
            <div class="feature-icon d-inline-flex align-items-center justify-content-center bg-primary bg-gradient text-white fs-2 mb-3 p-3 rounded-circle mx-auto">
                <i class="bi bi-headset"></i>
            </div>
            <h3>24/7 Support</h3>
            <p>Our dedicated support team is always available to assist you with any questions or concerns.</p>
            <a href="/contact" class="icon-link">
                Learn more
                <i class="bi bi-arrow-right"></i>
            </a>
        </div>
    </div>
</div>

<!-- About Section -->
<div class="bg-light">
    <div class="container px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
                <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&h=600&q=80" class="d-block mx-lg-auto img-fluid rounded shadow" alt="Our Team" loading="lazy">
            </div>
            <div class="col-lg-6">
                <h1 class="display-5 fw-bold lh-1 mb-3">About Our Company</h1>
                <p class="lead">We are a team of passionate professionals dedicated to helping businesses grow and succeed in the digital age. With years of experience and a commitment to excellence, we deliver innovative solutions that drive results.</p>
                <div class="d-grid gap-2 d-md-flex">
                    <a href="/about" class="btn btn-primary btn-lg px-4 me-md-2">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Services Preview -->
<div class="container px-4 py-5">
    <h2 class="pb-2 text-center">Our Services</h2>
    <div class="row g-4 py-5">
        <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body text-center p-4">
                    <div class="mb-3">
                        <img src="https://images.unsplash.com/photo-1467232004584-a241de8bcf5d?ixlib=rb-1.2.1&auto=format&fit=crop&w=300&h=200&q=80" class="img-fluid rounded" alt="Web Development">
                    </div>
                    <h4>Web Development</h4>
                    <p class="card-text">Custom websites and web applications built with the latest technologies.</p>
                    <a href="/service" class="btn btn-outline-primary">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body text-center p-4">
                    <div class="mb-3">
                        <img src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?ixlib=rb-1.2.1&auto=format&fit=crop&w=300&h=200&q=80" class="img-fluid rounded" alt="Mobile App Development">
                    </div>
                    <h4>Mobile App Development</h4>
                    <p class="card-text">Native and cross-platform mobile applications for iOS and Android.</p>
                    <a href="/service" class="btn btn-outline-primary">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body text-center p-4">
                    <div class="mb-3">
                        <img src="https://images.unsplash.com/photo-1432888622747-4eb9a8efeb07?ixlib=rb-1.2.1&auto=format&fit=crop&w=300&h=200&q=80" class="img-fluid rounded" alt="Digital Marketing">
                    </div>
                    <h4>Digital Marketing</h4>
                    <p class="card-text">Comprehensive digital marketing strategies to grow your online presence.</p>
                    <a href="/service" class="btn btn-outline-primary">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center mt-3">
        <a href="/service" class="btn btn-primary btn-lg">View All Services</a>
    </div>
</div>

<!-- CTA Section -->
<div class="bg-primary text-white">
    <div class="container px-4 py-5 text-center">
        <h2 class="display-6 fw-bold">Ready to get started?</h2>
        <p class="lead mb-4">Contact us today to discuss how we can help your business grow.</p>
        <a href="/contact" class="btn btn-light btn-lg">Get in Touch</a>
    </div>
</div>
@endsection