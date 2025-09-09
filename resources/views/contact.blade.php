@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-lg-6">
            <h1 class="display-4 mb-4">Contact Us</h1>
            <p class="lead mb-5">We'd love to hear from you. Send us a message and we'll respond as soon as possible.</p>
            
            <div class="row g-4 mb-5">
                <div class="col-md-6">
                    <div class="d-flex">
                        <div class="me-3 text-primary">
                            <i class="bi bi-geo-alt" style="font-size: 1.5rem;"></i>
                        </div>
                        <div>
                            <h5 class="h6 mb-1">Our Location</h5>
                            <p class="mb-0 text-muted">Perumahan Grand Mutiara 2, Blok B1 No.1<br>Setu Sari, Kec. Cileungsi<br>Kabupaten Bogor, Jawa Barat 16820</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex">
                        <div class="me-3 text-primary">
                            <i class="bi bi-envelope" style="font-size: 1.5rem;"></i>
                        </div>
                        <div>
                            <h5 class="h6 mb-1">Email Us</h5>
                            <p class="mb-0">
                                <a href="mailto:info@example.com" class="text-decoration-none">info@example.com</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex">
                        <div class="me-3 text-primary">
                            <i class="bi bi-telephone" style="font-size: 1.5rem;"></i>
                        </div>
                        <div>
                            <h5 class="h6 mb-1">Call Us</h5>
                            <p class="mb-0">
                                <a href="tel:+62218901234" class="text-decoration-none">+62 21 890 1234</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex">
                        <div class="me-3 text-primary">
                            <i class="bi bi-clock" style="font-size: 1.5rem;"></i>
                        </div>
                        <div>
                            <h5 class="h6 mb-1">Working Hours</h5>
                            <p class="mb-0 text-muted">Monday - Friday<br>9:00 AM - 6:00 PM</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="social-links mb-5">
                <h5 class="h6 mb-3">Follow Us</h5>
                <a href="#" class="text-decoration-none me-3" style="font-size: 1.5rem;">
                    <i class="bi bi-facebook text-primary"></i>
                </a>
                <a href="#" class="text-decoration-none me-3" style="font-size: 1.5rem;">
                    <i class="bi bi-twitter text-info"></i>
                </a>
                <a href="#" class="text-decoration-none me-3" style="font-size: 1.5rem;">
                    <i class="bi bi-instagram text-danger"></i>
                </a>
                <a href="#" class="text-decoration-none me-3" style="font-size: 1.5rem;">
                    <i class="bi bi-linkedin text-primary"></i>
                </a>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card shadow-sm">
                <div class="card-body p-4">
                    <h2 class="h4 mb-4">Send us a message</h2>
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Your name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" placeholder="name@example.com" required>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" id="phone" placeholder="+1 (123) 456-7890">
                        </div>
                        <div class="mb-3">
                            <label for="subject" class="form-label">Subject</label>
                            <input type="text" class="form-control" id="subject" placeholder="How can we help?" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" rows="4" placeholder="Your message here..." required></textarea>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-lg">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Map Section -->
    <div class="row mt-5">
        <div class="col-12">
            <div class="ratio ratio-21x9 rounded-3 overflow-hidden">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.124139358848!2d107.02248212508948!3d-6.426979556669683!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNsKwMjUnMzcuMTMiUyAxMDfCsDAxJzIwLkQ1Ikc!5e0!3m2!1sen!2sid!4v1620000000000!5m2!1sen!2sid" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </div>
</div>
@endsection