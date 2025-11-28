// Responsive JavaScript for TMD EXPO website

document.addEventListener('DOMContentLoaded', function() {
    // Smooth scrolling for navigation links
    const navLinks = document.querySelectorAll('a[href^="#"]');
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            const targetSection = document.querySelector(targetId);
            if (targetSection) {
                const offsetTop = targetSection.offsetTop - 70; // Adjust for fixed navbar
                window.scrollTo({
                    top: offsetTop,
                    behavior: 'smooth'
                });
            }
        });
    });

    // Mobile menu auto-close on link click
    const navbarCollapse = document.querySelector('.navbar-collapse');
    const navbarToggler = document.querySelector('.navbar-toggler');

    navLinks.forEach(link => {
        link.addEventListener('click', function() {
            if (window.innerWidth < 992) { // Bootstrap lg breakpoint
                if (navbarCollapse.classList.contains('show')) {
                    navbarToggler.click();
                }
            }
        });
    });

    // Responsive image handling
    function handleResponsiveImages() {
        const images = document.querySelectorAll('img');
        images.forEach(img => {
            // Add loading="lazy" for better performance
            if (!img.hasAttribute('loading')) {
                img.setAttribute('loading', 'lazy');
            }
        });
    }

    handleResponsiveImages();

    // Responsive card adjustments
    function adjustCardsForMobile() {
        const cards = document.querySelectorAll('.realisation-card, .service-card, .partenaire-card');
        cards.forEach(card => {
            if (window.innerWidth < 768) { // Bootstrap md breakpoint
                card.style.minHeight = 'auto';
            } else {
                card.style.minHeight = '';
            }
        });
    }

    adjustCardsForMobile();
    window.addEventListener('resize', adjustCardsForMobile);

    // Contact form responsive adjustments
    function adjustContactForm() {
        const contactRow = document.querySelector('#contact .row');
        if (contactRow) {
            if (window.innerWidth < 768) {
                contactRow.classList.remove('justify-content-center');
                contactRow.querySelector('.col-lg-10').classList.remove('col-lg-10');
                contactRow.querySelector('.col-lg-10').classList.add('col-12');
            } else {
                contactRow.classList.add('justify-content-center');
                const col = contactRow.querySelector('.col-12');
                if (col) {
                    col.classList.remove('col-12');
                    col.classList.add('col-lg-10');
                }
            }
        }
    }

    adjustContactForm();
    window.addEventListener('resize', adjustContactForm);

    // Scroll animations for better UX
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-in');
            }
        });
    }, observerOptions);

    // Observe sections for animation
    const sections = document.querySelectorAll('section');
    sections.forEach(section => {
        observer.observe(section);
    });

    // Add CSS for animations (injected via JS for simplicity)
    const style = document.createElement('style');
    style.textContent = `
        section {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.6s ease, transform 0.6s ease;
        }
        section.animate-in {
            opacity: 1;
            transform: translateY(0);
        }
        .navbar-toggler:focus {
            box-shadow: none;
        }
        @media (max-width: 767.98px) {
            .display-4 {
                font-size: 2rem;
            }
            .service-card, .realisation-card, .partenaire-card {
                margin-bottom: 1rem;
            }
        }
    `;
    document.head.appendChild(style);
});
