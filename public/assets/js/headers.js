// Headers.blade.php JavaScript
document.addEventListener('DOMContentLoaded', function() {
    // Mobile menu toggle
    const mobileMenuToggle = document.getElementById('mobileMenuToggle');
    const mobileMenu = document.getElementById('mobileMenu');
    
    if (mobileMenuToggle && mobileMenu) {
        mobileMenuToggle.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
        });
    }

    // Hero background slideshow
    const heroImages = [
        '/assets/img/bg/Bg-home1.jpg',
        '/assets/img/bg/Bg-home2.jpg',
        '/assets/img/bg/Bg-home3.jpg',
        '/assets/img/bg/Bg-home4.jpg'
    ];
    
    let currentHeroIndex = 0;
    const heroSection = document.getElementById('heroSection');

    function changeHeroBackground() {
        if (heroSection) {
            heroSection.style.backgroundImage = 'url(' + heroImages[currentHeroIndex] + ')';
            currentHeroIndex = (currentHeroIndex + 1) % heroImages.length;
        }
    }

    // Set initial background and start slideshow
    if (heroSection) {
        changeHeroBackground();
        setInterval(changeHeroBackground, 4500); // Change every 4.5 seconds
    }
});

// About Page Header JavaScript
document.addEventListener('DOMContentLoaded', function() {
    // About page mobile menu toggle
    const aboutMobileMenuToggle = document.getElementById('aboutMobileMenuToggle');
    const aboutMobileMenu = document.getElementById('aboutMobileMenu');
    
    if (aboutMobileMenuToggle && aboutMobileMenu) {
        aboutMobileMenuToggle.addEventListener('click', function() {
            aboutMobileMenu.classList.toggle('hidden');
        });
    }

    // Counter animation for about page
    function animateCounters() {
        const counters = document.querySelectorAll('.about-counter');
        
        counters.forEach(counter => {
            const target = parseInt(counter.getAttribute('data-target'));
            const duration = 2000; // 2 seconds
            const increment = target / (duration / 16); // 60fps
            let current = 0;
            
            const updateCounter = () => {
                if (current < target) {
                    current += increment;
                    counter.textContent = Math.floor(current);
                    requestAnimationFrame(updateCounter);
                } else {
                    counter.textContent = target;
                }
            };
            
            updateCounter();
        });
    }

    // Intersection Observer for counter animation
    const aboutHeroContent = document.querySelector('.about-hero-content');
    if (aboutHeroContent) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    setTimeout(animateCounters, 800); // Start after hero animation
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });
        
        observer.observe(aboutHeroContent);
    }

    // Smooth scroll for CTA button
    const ctaButton = document.querySelector('.about-cta-button');
    if (ctaButton) {
        ctaButton.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector('#story');
            if (target) {
                target.scrollIntoView({ 
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    }

    // Parallax effect for background elements
    function handleParallax() {
        const scrolled = window.pageYOffset;
        const parallaxElements = document.querySelectorAll('.about-bg-circle, .about-floating-shape');
        
        parallaxElements.forEach((element, index) => {
            const speed = 0.5 + (index * 0.1);
            const yPos = -(scrolled * speed);
            element.style.transform = `translateY(${yPos}px)`;
        });
    }

    // Throttled scroll event for performance
    let ticking = false;
    function requestTick() {
        if (!ticking) {
            requestAnimationFrame(handleParallax);
            ticking = true;
            setTimeout(() => { ticking = false; }, 16);
        }
    }

    window.addEventListener('scroll', requestTick);

    // Add stagger animation to fade-in elements
    const fadeInElements = document.querySelectorAll('.about-fade-in-up');
    fadeInElements.forEach((element, index) => {
        element.style.animationDelay = `${0.2 + (index * 0.1)}s`;
    });
});