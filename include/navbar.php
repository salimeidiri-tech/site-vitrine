<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNavbar">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="index.php">
            <i class="fas fa-truck-moving text-success me-2"></i>
            <span class="fw-bold text-dark">TMD EXPO</span>
        </a>

        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item mx-2">
                    <a class="nav-link fw-medium" href="index.php">Accueil</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link fw-medium" href="index.php#services">Services</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link fw-medium" href="index.php#realisations">Réalisations</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link fw-medium" href="index.php#partenaires">Partenaires</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link fw-medium" href="index.php#contact">Contact</a>
                </li>
            </ul>

            <ul class="navbar-nav">
                <?php if (isset($_SESSION['utilisateur_id'])): ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle fw-medium" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-user me-1"></i><?php echo htmlspecialchars($_SESSION['nom_complet']); ?>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end shadow-sm">
                            <?php if ($_SESSION['role'] === 'admin'): ?>
                                <li><a class="dropdown-item" href="admin.php">
                                    <i class="fas fa-cog me-2"></i>Administration
                                </a></li>
                            <?php endif; ?>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="logout.php">
                                <i class="fas fa-sign-out-alt me-2"></i>Déconnexion
                            </a></li>
                        </ul>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link fw-medium" href="login.php">Connexion</a>
                    </li>
                    <li class="nav-item ms-2">
                        <a class="btn btn-success btn-sm px-3 rounded-pill" href="inscription.php">S'inscrire</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>

<style>
/* Navbar professionnel */
#mainNavbar {
    background: rgba(255, 255, 255, 0.95);
    backdrop-filter: blur(20px);
    -webkit-backdrop-filter: blur(20px);
    border-bottom: 1px solid rgba(0, 0, 0, 0.08);
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    padding: 0.75rem 0;
    z-index: 1030;
}

#mainNavbar.scrolled {
    background: rgba(255, 255, 255, 0.98);
    box-shadow: 0 2px 20px rgba(0, 0, 0, 0.15);
    padding: 0.5rem 0;
}

/* Logo et marque */
.navbar-brand {
    font-size: 1.5rem;
    transition: transform 0.2s ease;
}

.navbar-brand:hover {
    transform: translateY(-1px);
}

/* Liens de navigation */
.nav-link {
    color: #2d3748 !important;
    font-weight: 500;
    position: relative;
    transition: all 0.3s ease;
    padding: 0.5rem 1rem !important;
}

.nav-link:hover {
    color: #28a745 !important;
    transform: translateY(-1px);
}

.nav-link::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 50%;
    width: 0;
    height: 2px;
    background: linear-gradient(90deg, #28a745, #20c997);
    transition: all 0.3s ease;
    transform: translateX(-50%);
}

.nav-link:hover::after {
    width: 80%;
}

/* Bouton d'inscription */
.btn-success {
    background: linear-gradient(135deg, #28a745, #20c997);
    border: none;
    font-weight: 500;
    transition: all 0.3s ease;
}

.btn-success:hover {
    background: linear-gradient(135deg, #218838, #1aa085);
    transform: translateY(-1px);
    box-shadow: 0 4px 12px rgba(40, 167, 69, 0.3);
}

/* Menu déroulant */
.dropdown-menu {
    border: none;
    border-radius: 8px;
    box-shadow: 0 4px 25px rgba(0, 0, 0, 0.15);
    margin-top: 0.5rem;
}

.dropdown-item {
    padding: 0.75rem 1.5rem;
    transition: all 0.2s ease;
}

.dropdown-item:hover {
    background-color: #f8f9fa;
    color: #28a745;
    transform: translateX(2px);
}

/* Toggle button */
.navbar-toggler {
    border: 1px solid rgba(0, 0, 0, 0.1);
    border-radius: 6px;
    padding: 0.375rem 0.75rem;
    transition: all 0.3s ease;
}

.navbar-toggler:hover {
    background-color: rgba(40, 167, 69, 0.1);
    border-color: #28a745;
}

.navbar-toggler:focus {
    box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
}

/* Mobile responsive */
@media (max-width: 991.98px) {
    .navbar-collapse {
        background: white;
        border-radius: 0 0 12px 12px;
        box-shadow: 0 4px 25px rgba(0, 0, 0, 0.15);
        padding: 1.5rem;
        margin-top: 1rem;
        border: 1px solid rgba(0, 0, 0, 0.05);
    }

    .navbar-nav {
        text-align: center;
    }

    .nav-item {
        margin-bottom: 0.5rem;
    }

    .nav-link {
        padding: 0.75rem 0 !important;
        border-bottom: 1px solid rgba(0, 0, 0, 0.05);
    }

    .nav-link:last-child {
        border-bottom: none;
    }

    .btn-success {
        width: 100%;
        margin-top: 1rem;
    }
}

/* Animation au scroll */
@media (min-width: 992px) {
    #mainNavbar.scrolled .navbar-brand {
        transform: scale(0.95);
    }

    #mainNavbar.scrolled .nav-link {
        font-size: 0.95rem;
    }
}
</style>

<script>
// Navbar scroll behavior
document.addEventListener('DOMContentLoaded', function() {
    const navbar = document.getElementById('mainNavbar');
    let lastScrollTop = 0;

    window.addEventListener('scroll', function() {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

        if (scrollTop > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }

        lastScrollTop = scrollTop;
    });

    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                const offsetTop = target.offsetTop - 80;
                window.scrollTo({
                    top: offsetTop,
                    behavior: 'smooth'
                });
            }
        });
    });
});
</script>
