<script src="{{asset('assets/js/jquery-min.js')}}"></script>
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/owl.carousel.js')}}"></script> 
    <script src="{{asset('assets/js/jquery.mixitup.js')}}"></script>       
    <script src="{{asset('assets/js/jquery.nav.js')}}"></script>    
    <script src="{{asset('assets/js/scrolling-nav.js')}}"></script>    
    <script src="{{asset('assets/js/jquery.easing.min.js')}}"></script>     
    <script src="{{asset('assets/js/wow.js')}}"></script>   
    <script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>     
    <script src="{{asset('assets/js/nivo-lightbox.js')}}"></script>     
    <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>         
    <script src="{{asset('assets/js/waypoints.min.js')}}"></script>      
    <script src="{{asset('assets/js/form-validator.min.js')}}"></script>
    <script src="{{asset('assets/js/contact-form-script.js')}}"></script>   
    <script src="{{asset('assets/js/main.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Custom JavaScript for form handling (Simulation)
        function handleFormSubmit(event) {
            event.preventDefault(); // Prevent actual form submission

            const form = document.getElementById('contactForm');
            const submitBtn = document.getElementById('submitBtn');
            const msgSubmit = document.getElementById('msgSubmit');
            
            // Basic validation
            if (!form.checkValidity()) {
                form.classList.add('was-validated');
                return;
            }

            // Clear previous message
            msgSubmit.textContent = '';
            msgSubmit.className = 'mt-3 fs-5 fw-bold';

            // Disable button and show loading
            submitBtn.disabled = true;
            submitBtn.textContent = 'Mengirim...';
            submitBtn.classList.add('opacity-75');

            // Simulate network delay (2 seconds)
            setTimeout(() => {
                
                // Success message
                msgSubmit.textContent = 'Pesan Berhasil Terkirim! Terima kasih.';
                msgSubmit.classList.add('text-success');
                
                // Reset form and button
                form.reset();
                form.classList.remove('was-validated');
                
                submitBtn.disabled = false;
                submitBtn.textContent = 'Kirim Pesan';
                submitBtn.classList.remove('opacity-75');

                console.log('Form Submitted Successfully.');

            }, 2000); 
        }

        // Custom JavaScript for Active Link Handling (Bootstrap ScrollSpy adds 'active', 
        // this script adds a specific class for custom border)
        document.addEventListener('DOMContentLoaded', () => {
            const navLinks = document.querySelectorAll('#navbarNav .nav-link');
            
            // Use Bootstrap's built-in ScrollSpy
            const scrollSpy = new bootstrap.ScrollSpy(document.body, {
                target: '#mainNav'
            });

            // Add a mutation observer to listen for Bootstrap's 'active' class change
            const observer = new MutationObserver((mutations) => {
                mutations.forEach((mutation) => {
                    if (mutation.type === 'attributes' && mutation.attributeName === 'class') {
                        const target = mutation.target;
                        
                        // Remove active-link from all
                        navLinks.forEach(link => link.classList.remove('active-link'));
                        
                        // Add active-link to the one that Bootstrap set 'active'
                        if (target.classList.contains('active')) {
                            target.classList.add('active-link');
                        }
                    }
                });
            });

            navLinks.forEach(link => {
                observer.observe(link, { attributes: true });
            });
            
            // Initial setting for Home link
            document.querySelector('.nav-item a[href="#home"]').classList.add('active-link');
        });
        
    </script>
