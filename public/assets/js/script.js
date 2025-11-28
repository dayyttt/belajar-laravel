 
document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');
            const menuIcon = document.getElementById('menu-icon');
            const closeIcon = document.getElementById('close-icon');
            const navLinks = document.querySelectorAll('.mobile-nav-link, .lg\\:flex a[href^="#"]');
            
            // --- 1. Mobile Menu Toggle ---
            mobileMenuButton.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
                menuIcon.classList.toggle('hidden');
                closeIcon.classList.toggle('hidden');
            });

            // Close mobile menu when a link is clicked
            navLinks.forEach(link => {
                link.addEventListener('click', () => {
                    // Check if the link is inside the mobile menu drawer before closing
                    if (mobileMenu && !mobileMenu.classList.contains('hidden')) {
                         mobileMenu.classList.add('hidden');
                         menuIcon.classList.remove('hidden');
                         closeIcon.classList.add('hidden');
                    }
                });
            });


            // --- 2. Contact Form Submission Handler (Simulasi) ---
            const contactForm = document.getElementById('contactForm');
            const submitBtn = document.getElementById('submitBtn');
            const msgSubmit = document.getElementById('msgSubmit');

            contactForm.addEventListener('submit', function(e) {
                e.preventDefault();

                // Simple form validation check
                if (!contactForm.checkValidity()) {
                    return;
                }

                // Show loading state
                submitBtn.disabled = true;
                submitBtn.textContent = 'Mengirim...';
                msgSubmit.textContent = '';
                msgSubmit.classList.remove('text-green-600', 'text-red-600');

                // Simulate API Call delay
                setTimeout(() => {
                    // Simulation result: Success
                    const message = 'Pesan Anda berhasil dikirim! Kami akan segera menghubungi Anda.';
                    msgSubmit.textContent = message;
                    msgSubmit.classList.add('text-green-600');
                    
                    // Reset form and button
                    contactForm.reset();
                    submitBtn.disabled = false;
                    submitBtn.textContent = 'Kirim dan Mulai Gratis';
                }, 2000);
            });
            
            // --- 3. Navbar Scroll Effect ---
            const navbar = document.getElementById('navbar');
            
            // Kelas untuk tampilan saat SCROLLED (Putih, blur, shadow)
            const scrolledClasses = 'bg-white/95 backdrop-blur-md shadow-md border-gray-200';
            
            // Kelas untuk tampilan saat TIDAK SCROLLED (Transparan, tanpa shadow)
            const unscrolledClasses = 'bg-transparent border-transparent shadow-none';

            function handleScroll() {
                // Ambang batas scroll (misalnya 50 piksel)
                if (window.scrollY > 50) {
                    // Hapus kelas unscrolled dan tambahkan kelas scrolled
                    navbar.classList.remove(...unscrolledClasses.split(' '));
                    navbar.classList.add(...scrolledClasses.split(' '));
                } else {
                    // Hapus kelas scrolled dan tambahkan kelas unscrolled
                    navbar.classList.remove(...scrolledClasses.split(' '));
                    navbar.classList.add(...unscrolledClasses.split(' '));
                }
            }

            // Tambahkan listener saat jendela di-scroll
            window.addEventListener('scroll', handleScroll);
            
            // Jalankan fungsi sekali saat dimuat untuk menyesuaikan status awal
            handleScroll();
        });
