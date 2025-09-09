@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="text-center mb-5">
        <h1 class="display-4">Our Services</h1>
        <p class="lead">Professional solutions tailored to your needs</p>
    </div>

    <div class="row g-4">
        <!-- Service 1 -->
        <div class="col-md-6 col-lg-4">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body text-center p-4">
                    <div class="mb-4" style="width: 80px; height: 80px;">
                        <img src="https://images.unsplash.com/photo-1467232004584-a241de8bcf5d?ixlib=rb-1.2.1&auto=format&fit=crop&w=160&h=160&q=80" class="img-fluid rounded-circle shadow" alt="Web Development">
                    </div>
                    <h3 class="h4">Web Development</h3>
                    <p class="text-muted">Custom websites and web applications built with the latest technologies to help your business grow online.</p>
                    <a href="#" class="btn btn-outline-primary">Learn More</a>
                </div>
            </div>
        </div>

        <!-- Service 2 -->
        <div class="col-md-6 col-lg-4">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body text-center p-4">
                    <div class="mb-4" style="width: 80px; height: 80px;">
                        <img src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?ixlib=rb-1.2.1&auto=format&fit=crop&w=160&h=160&q=80" class="img-fluid rounded-circle shadow" alt="Mobile App Development">
                    </div>
                    <h3 class="h4">Mobile App Development</h3>
                    <p class="text-muted">Native and cross-platform mobile applications for iOS and Android platforms.</p>
                    <a href="#" class="btn btn-outline-success">Learn More</a>
                </div>
            </div>
        </div>

        <!-- Service 3 -->
        <div class="col-md-6 col-lg-4">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body text-center p-4">
                    <div class="mb-4" style="width: 80px; height: 80px;">
                        <img src="https://images.unsplash.com/photo-1432888622747-4eb9a8efeb07?ixlib=rb-1.2.1&auto=format&fit=crop&w=160&h=160&q=80" class="img-fluid rounded-circle shadow" alt="Digital Marketing">
                    </div>
                    <h3 class="h4">Digital Marketing</h3>
                    <p class="text-muted">Comprehensive digital marketing strategies to increase your online presence and reach more customers.</p>
                    <a href="#" class="btn btn-outline-warning">Learn More</a>
                </div>
            </div>
        </div>

        <!-- Service 4 -->
        <div class="col-md-6 col-lg-4">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body text-center p-4">
                    <div class="mb-4" style="width: 80px; height: 80px;">
                        <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-1.2.1&auto=format&fit=crop&w=160&h=160&q=80" class="img-fluid rounded-circle shadow" alt="SEO Services">
                    </div>
                    <h3 class="h4">SEO Services</h3>
                    <p class="text-muted">Improve your search engine rankings and drive more organic traffic to your website.</p>
                    <a href="#" class="btn btn-outline-info">Learn More</a>
                </div>
            </div>
        </div>

        <!-- Service 5 -->
        <div class="col-md-6 col-lg-4">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body text-center p-4">
                    <div class="mb-4" style="width: 80px; height: 80px;">
                        <img src="https://images.unsplash.com/photo-1501504905252-473c47e087f8?ixlib=rb-1.2.1&auto=format&fit=crop&w=160&h=160&q=80" class="img-fluid rounded-circle shadow" alt="Content Creation">
                    </div>
                    <h3 class="h4">Content Creation</h3>
                    <p class="text-muted">Engaging and SEO-friendly content that resonates with your target audience.</p>
                    <a href="#" class="btn btn-outline-danger">Learn More</a>
                </div>
            </div>
        </div>

        <!-- Service 6 -->
        <div class="col-md-6 col-lg-4">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body text-center p-4">
                    <div class="mb-4" style="width: 80px; height: 80px;">
                        <img src="https://images.unsplash.com/photo-1585241936939-be4099591252?ixlib=rb-1.2.1&auto=format&fit=crop&w=160&h=160&q=80" class="img-fluid rounded-circle shadow" alt="24/7 Support">
                    </div>
                    <h3 class="h4">24/7 Support</h3>
                    <p class="text-muted">Round-the-clock technical support to ensure your business operations run smoothly.</p>
                    <a href="#" class="btn btn-outline-secondary">Contact Us</a>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="row mt-5">
        <div class="col-12">
            <div class="bg-primary text-white rounded-3 p-5 text-center">
                <h2 class="mb-4">Ready to get started?</h2>
                <p class="lead mb-4">Let's discuss how we can help your business grow</p>
                <a href="/contact" class="btn btn-light btn-lg px-4">Get in Touch</a>
            </div>
        </div>
    </div>
</div>
@endsection