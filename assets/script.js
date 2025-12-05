// Responsive JavaScript pour le site TMD EXPO
// Ce script gère le défilement fluide, les animations, la navigation mobile, 
// les corrections de modales (popups) et la gestion du formulaire de contact.

document.addEventListener('DOMContentLoaded', function() {
    // Vérification de l'existence de la librairie Bootstrap (utile pour le débogage)
    if (typeof bootstrap === 'undefined' || typeof bootstrap.Modal === 'undefined') {
        console.warn("Avertissement: La librairie JavaScript de Bootstrap n'est pas chargée. Les fonctionnalités comme les modales et la navigation mobile pourraient ne pas fonctionner.");
    }

    // --- 1. Gestion Professionnelle des Modales de Réalisations ---
    // Système robuste pour fermer automatiquement les modales ouvertes
    const realisationCards = document.querySelectorAll('.realisation-card[data-bs-toggle="modal"]');
    realisationCards.forEach(card => {
        card.addEventListener('click', function(e) {
            e.preventDefault();

            // Fermer immédiatement toutes les modales ouvertes
            const openModals = document.querySelectorAll('.modal.show');
            openModals.forEach(modal => {
                const bsModal = bootstrap.Modal.getInstance(modal);
                if (bsModal) {
                    bsModal.hide();
                } else {
                    // Forcer la fermeture si pas d'instance Bootstrap
                    modal.classList.remove('show');
                    modal.style.display = 'none';
                    modal.setAttribute('aria-hidden', 'true');
                    document.body.classList.remove('modal-open');
                    const backdrop = document.querySelector('.modal-backdrop');
                    if (backdrop) {
                        backdrop.remove();
                    }
                }
            });

            // Ouvrir la nouvelle modale après un court délai
            setTimeout(() => {
                const targetModalId = this.getAttribute('data-bs-target');
                const targetModal = document.querySelector(targetModalId);
                if (targetModal) {
                    const newModal = new bootstrap.Modal(targetModal, {
                        backdrop: 'static', // Empêche la fermeture en cliquant sur le fond
                        keyboard: true,     // Permet la fermeture avec Échap
                        focus: true         // Focus automatique sur la modale
                    });
                    newModal.show();
                }
            }, 200);
        });
    });

    // --- 2. Défilement en douceur (Smooth scrolling) ---
    const navLinks = document.querySelectorAll('a[href^="#"]');
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            const targetSection = document.querySelector(targetId);
            if (targetSection) {
                // Décalage pour la barre de navigation fixe (si elle existe, -70px)
                const offsetTop = targetSection.offsetTop - 70; 
                window.scrollTo({
                    top: offsetTop,
                    behavior: 'smooth'
                });
            }
        });
    });

    // --- 3. Fermeture automatique du menu mobile ---
    const navbarCollapse = document.querySelector('.navbar-collapse');
    
    navLinks.forEach(link => {
        link.addEventListener('click', function() {
            // Utiliser le mécanisme Bootstrap pour cacher la navbar si elle est ouverte sur mobile
            if (navbarCollapse && navbarCollapse.classList.contains('show')) {
                // Obtient l'instance Collapse de Bootstrap et la cache
                const bsCollapse = bootstrap.Collapse.getInstance(navbarCollapse) || new bootstrap.Collapse(navbarCollapse, { toggle: false });
                bsCollapse.hide();
            }
        });
    });

    // --- 4. Amélioration des images (Lazy Loading pour performance) ---
    function handleResponsiveImages() {
        const images = document.querySelectorAll('img');
        images.forEach(img => {
            if (!img.hasAttribute('loading')) {
                img.setAttribute('loading', 'lazy'); 
            }
        });
    }
    handleResponsiveImages();

    // --- 5. Ajustements responsive pour les cartes (récupéré de votre code original) ---
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

    // --- 6. Ajustements responsive pour le formulaire de contact (récupéré de votre code original) ---
    function adjustContactForm() {
        const contactRow = document.querySelector('#contact .row');
        if (contactRow) {
            if (window.innerWidth < 768) {
                contactRow.classList.remove('justify-content-center');
                // Votre code original avait une logique complexe de changement de classe.
                // J'ai besoin de simplifier cette logique pour ne pas avoir d'erreur si la classe n'est pas trouvée.
                // En utilisant le système de grille de Bootstrap, on s'assure que la classe col-lg-10 est présente.
                const colLg10 = contactRow.querySelector('.col-lg-10');
                if (colLg10) {
                     colLg10.classList.remove('col-lg-10');
                     colLg10.classList.add('col-12');
                }
            } else {
                contactRow.classList.add('justify-content-center');
                const col12 = contactRow.querySelector('.col-12');
                if (col12) {
                    col12.classList.remove('col-12');
                    col12.classList.add('col-lg-10');
                }
            }
        }
    }

    adjustContactForm();
    window.addEventListener('resize', adjustContactForm);


    // --- 7. Styles responsives simplifiés ---
    const style = document.createElement('style');
    style.textContent = `
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


    // --- 8. Gestion du Formulaire de Contact (EmailJS - Original) ---
    // Ceci est votre code original pour l'envoi via EmailJS.
    document.getElementById('contactForm').addEventListener('submit', function(e) {
        e.preventDefault();

        // Vérifiez que la librairie emailjs est bien chargée dans votre HTML!
        if (typeof emailjs === 'undefined') {
             alert("Erreur: La librairie EmailJS n'est pas chargée. Envoi impossible.");
             return;
        }

        emailjs.send("service_gfbuffa", "template_1dqrsvf", {
            name: document.getElementById('name').value,
            email: document.getElementById('email').value,
            message: document.getElementById('message').value
        })
        .then(() => {
            alert("Message envoyé !");
            document.getElementById('contactForm').reset();
        })
        .catch((error) => {
            alert("Erreur : " + JSON.stringify(error));
        });
    });
});