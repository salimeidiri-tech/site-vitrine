<?php
session_start();

// Chemins relatifs depuis le dossier main vers le dossier include dans le répertoire parent.

// 1. Connexion à la base de données
// Doit être fait en premier car il peut être utilisé par le header/navbar.
require_once '../include/db.php';

// 2. Inclusion de l'en-tête (Ouvre <html>, <head>, <body>)
// J'ai mis un commentaire sur les liens Bootstrap, assurez-vous qu'ils sont bien dans votre header.php ou ici !
// <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
// <link rel="stylesheet" href="style.css">
// <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
require_once '../include/header.php';

// 3. Inclusion de la barre de navigation
require_once '../include/navbar.php';
?>

<main>
    <!-- SECTION À PROPOS DE TMD EXPO (VERSION AMÉLIORÉE) -->
<section id="about" class="py-5 bg-gradient-to-br from-white to-gray-50 text-center position-relative overflow-hidden">
    <div class="container">
        <!-- En-tête avec animation -->
        <div class="mb-5">
            <h2 class="display-4 mb-3 fw-bold text-dark animate-fade-in">
                TMD EXPO
                <span class="d-block fs-5 fw-normal text-success mt-2">L'excellence événementielle depuis 2021</span>
            </h2>
            <div class="d-flex justify-content-center">
                <hr class="green-underline">
            </div>
        </div>

        <!-- Section principale avec contenu amélioré -->
        <div class="row align-items-center mb-5">
            <div class="col-lg-7 text-start">
                <div class="hero-content">
                    <p class="lead mb-4" style="color: var(--tmd-dark); font-size: 1.25rem; line-height: 1.6;">
                        <strong class="text-success">Fondée en 2021</strong> et basée au cœur de Saint-Ouen, TMD EXPO s'est imposée comme le partenaire privilégié des grands acteurs de l'événementiel français.
                    </p>

                    <p class="mb-4" style="font-size: 1.1rem; color: #5a6268; line-height: 1.7;">
                        Notre équipe d'experts intervient sur l'ensemble de la chaîne logistique événementielle : du transport sécurisé à l'installation sur mesure, en passant par la coordination technique et la maintenance 24/7. <strong>Chaque projet est une promesse tenue.</strong>
                    </p>

                    <div class="highlight-box p-3 mb-4 bg-light rounded-3 border-start border-success border-4">
                        <p class="mb-0" style="font-size: 1.05rem; color: #495057;">
                            <i class="fas fa-quote-left text-success me-2"></i>
                            <em>"Notre mission : transformer vos visions en réalités événementielles exceptionnelles, partout en France."</em>
                            <i class="fas fa-quote-right text-success ms-2"></i>
                        </p>
                    </div>

                    <p class="mb-0" style="font-size: 1.1rem; color: #5a6268;">
                        <strong>Salons professionnels, foires commerciales, événements corporate, festivals...</strong> Quel que soit votre secteur, TMD EXPO met son savoir-faire au service de votre succès.
                    </p>
                </div>
            </div>

            <div class="col-lg-5 d-none d-lg-block position-relative">
                <!-- Image principale avec overlay -->
                <div class="image-container position-relative">
                    <img src="https://images.unsplash.com/photo-1521737852567-6949f3f9f2b5?w=500&h=400&fit=crop&crop=center" class="img-fluid rounded-3 shadow-lg main-image" alt="Équipe TMD EXPO" loading="lazy">

                    <!-- Badge d'expérience -->
                    <div class="experience-badge position-absolute top-0 end-0 bg-success text-white px-3 py-2 rounded-pill shadow-sm">
                        <small class="fw-bold">3+ ans d'expérience</small>
                    </div>

                    <!-- Statistiques flottantes -->
                    <div class="stats-overlay position-absolute bottom-0 start-0 bg-white p-3 rounded-3 shadow-sm border">
                        <div class="d-flex align-items-center">
                            <div class="stat-icon me-2">
                                <i class="fas fa-map-marked-alt text-success"></i>
                            </div>
                            <div>
                                <div class="fw-bold text-dark">France entière</div>
                                <small class="text-muted">Couverture nationale</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Cartes Indicateurs Clés (Version améliorée) -->
        <div class="row justify-content-center pt-4">
            <!-- Indicateur 1: Excellence -->
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="about-card p-4 h-100 bg-white border-0 rounded-4 shadow-sm hover-lift position-relative overflow-hidden">
                    <div class="card-icon-wrapper mb-3">
                        <div class="icon-circle bg-success bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                            <i class="fas fa-medal text-success display-6"></i>
                        </div>
                    </div>
                    <h5 class="font-weight-bold mb-3 text-dark">Excellence Technique</h5>
                    <p class="text-muted mb-0">Équipements haut de gamme et finitions irréprochables pour des événements mémorables.</p>
                    <div class="card-accent bg-success"></div>
                </div>
            </div>

            <!-- Indicateur 2: Équipe -->
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="about-card p-4 h-100 bg-white border-0 rounded-4 shadow-sm hover-lift position-relative overflow-hidden">
                    <div class="card-icon-wrapper mb-3">
                        <div class="icon-circle bg-success bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                            <i class="fas fa-users text-success display-6"></i>
                        </div>
                    </div>
                    <h5 class="font-weight-bold mb-3 text-dark">Équipe Passionnée</h5>
                    <p class="text-muted mb-0">Professionnels expérimentés, disponibles 24/7 pour garantir le succès de vos projets.</p>
                    <div class="card-accent bg-success"></div>
                </div>
            </div>

            <!-- Indicateur 3: National -->
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="about-card p-4 h-100 bg-white border-0 rounded-4 shadow-sm hover-lift position-relative overflow-hidden">
                    <div class="card-icon-wrapper mb-3">
                        <div class="icon-circle bg-success bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                            <i class="fas fa-map-marker-alt text-success display-6"></i>
                        </div>
                    </div>
                    <h5 class="font-weight-bold mb-3 text-dark">Couverture Nationale</h5>
                    <p class="text-muted mb-0">Intervention sur tout le territoire français avec une logistique optimisée.</p>
                    <div class="card-accent bg-success"></div>
                </div>
            </div>

            <!-- Nouvel indicateur: Innovation -->
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="about-card p-4 h-100 bg-white border-0 rounded-4 shadow-sm hover-lift position-relative overflow-hidden">
                    <div class="card-icon-wrapper mb-3">
                        <div class="icon-circle bg-success bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                            <i class="fas fa-lightbulb text-success display-6"></i>
                        </div>
                    </div>
                    <h5 class="font-weight-bold mb-3 text-dark">Innovation Continue</h5>
                    <p class="text-muted mb-0">Solutions sur-mesure et technologies modernes pour des événements d'exception.</p>
                    <div class="card-accent bg-success"></div>
                </div>
            </div>
        </div>

        <!-- Call-to-action subtil -->
        <div class="text-center mt-5">
            <p class="text-muted mb-4">Prêt à donner vie à votre prochain événement ?</p>
            <a href="#contact" class="btn btn-success btn-lg px-4 py-3 rounded-pill shadow-sm">
                <i class="fas fa-handshake me-2"></i>Discutons de votre projet
            </a>
        </div>
    </div>

    <!-- Éléments décoratifs -->
    <div class="decoration-circle position-absolute top-0 end-0 translate-middle opacity-25 d-none d-lg-block">
        <div class="bg-success rounded-circle" style="width: 200px; height: 200px;"></div>
    </div>
    <div class="decoration-circle position-absolute bottom-0 start-0 translate-middle opacity-25 d-none d-lg-block">
        <div class="bg-success rounded-circle" style="width: 150px; height: 150px;"></div>
    </div>
</section>
   <!-- SECTION NOS SERVICES (AMÉLIORÉE) -->
<section id="services" class="py-5 bg-light text-center">
    <div class="container">
        <h2 class="display-4 mb-2">Nos services</h2>
        <div class="d-flex justify-content-center">
            <hr class="green-underline">
        </div>
        <p class="lead mb-5">Une gamme complète de prestations pour la réussite de vos événements</p>
        
        <div class="row">
            <!-- Service 1: Transport & Logistique -->
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="service-card p-4 h-100 bg-white shadow-sm border rounded">
                    <div class="service-icon-box mx-auto mb-4">
                        <i class="fa-solid fa-truck-fast display-5 text-success"></i>
                    </div>
                    <h5 class="font-weight-bold text-dark mb-3">Transport & logistique événementielle</h5>
                    <p class="text-muted small">Acheminement sécurisé de vos équipements et matériels sur tous les sites événementiels de France, avec un suivi en temps réel.</p>
                </div>
            </div>
            
            <!-- Service 2: Montage et installation -->
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="service-card p-4 h-100 bg-white shadow-sm border rounded">
                    <div class="service-icon-box mx-auto mb-4">
                        <i class="fas fa-hammer display-5 text-success"></i>
                    </div>
                    <h5 class="font-weight-bold text-dark mb-3">Montage et installation de structures</h5>
                    <p class="text-muted small">Installation professionnelle de stands sur mesure, de structures modulaires et d'aménagements complexes, respectant les délais serrés.</p>
                </div>
            </div>
            
            <!-- Service 3: Assistance technique -->
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="service-card p-4 h-100 bg-white shadow-sm border rounded">
                    <div class="service-icon-box mx-auto mb-4">
                        <i class="fas fa-hands-helping display-5 text-success"></i>
                    </div>
                    <h5 class="font-weight-bold text-dark mb-3">Assistance technique et maintenance</h5>
                    <p class="text-muted small">Support technique réactif sur site, disponible pendant toute la durée de votre événement, pour garantir un déroulement sans faille.</p>
                </div>
            </div>

            <!-- Service 4: Stockage & coordination -->
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="service-card p-4 h-100 bg-white shadow-sm border rounded">
                    <div class="service-icon-box mx-auto mb-4">
                        <i class="fas fa-boxes display-5 text-success"></i>
                    </div>
                    <h5 class="font-weight-bold text-dark mb-3">Stockage & coordination</h5>
                    <p class="text-muted small">Gestion complète du stockage, manutention et coordination stratégique avec tous vos prestataires (Jaulin, Alive Events...).</p>
                </div>
            </div>
        </div>
    </div>
</section>




    
    <!-- SECTION NOS RÉALISATIONS -->
    <section id="realisations" class="py-5 text-center">
        <div class="container">
            <h2 class="display-4 mb-2">Nos réalisations</h2>
            <div class="d-flex justify-content-center">
                <hr class="green-underline">
            </div>
            <p class="lead mb-5">Découvrez quelques-uns des événements que nous avons accompagnés</p>
            
            <div class="row">
                <!-- CARTE 1 : Marché de Noël (Déclencheur de Modale) -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <a href="#modalMarcheNoel" class="realisation-link" data-bs-toggle="modal" data-bs-target="#modalMarcheNoel">
                        <div class="realisation-card rounded overflow-hidden shadow-sm">
                            <img src="https://clickatlife.gr/fu/p/20232/1200/10000/00000000004cbc50/1/xristougenna-parisi-agora-la-defense.jpg" class="img-fluid" alt="Marché de Noël">
                            <div class="p-3">
                                <small class="text-success">Événement saisonnier</small>
                                <h5 class="mb-0">Marché de Noël</h5>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- CARTE 2 : Hippodrome de Longchamp (Déclencheur de Modale) -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <a href="#modalLongchamp" class="realisation-link" data-bs-toggle="modal" data-bs-target="#modalLongchamp">
                        <div class="realisation-card rounded overflow-hidden shadow-sm">
                            <img src="https://cdn.cultura.com/cdn-cgi/image/width=768/media/pim/TITELIVE/51_9782357334830_1_75.jpg" class="img-fluid" alt="Hippodrome de Longchamp">
                            <div class="p-3">
                                <small class="text-success">Événement sportif</small>
                                <h5 class="mb-0">Hippodrome de Longchamp</h5>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- CARTE 3 : Fête de l'Humanité (Déclencheur de Modale) -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <a href="#modalFeteHuma" class="realisation-link" data-bs-toggle="modal" data-bs-target="#modalFeteHuma">
                        <div class="realisation-card rounded overflow-hidden shadow-sm">
                            <img src="https://open-images.acast.com/shows/686e315a8d3d6839f4ea5f73/1752053451511-2a449818-ae7f-47ec-aa20-fb42b1271e21.jpeg?height=800" class="img-fluid" alt="Fête de l'Humanité">
                            <div class="p-3">
                                <small class="text-success">Festival culturel</small>
                                <h5 class="mb-0">Fête de l'Humanité</h5>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- CARTE 4 : Salon Hermès (Déclencheur de Modale) -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <a href="#modalHermes" class="realisation-link" data-bs-toggle="modal" data-bs-target="#modalHermes">
                        <div class="realisation-card rounded overflow-hidden shadow-sm bg-orange">
                            <img src="https://logo.com/image-cdn/images/kts928pd/production/59f2aa87d3c8527e5f6adfb709080f5bf69c11f7-1024x600.png?w=1200&q=72&fm=webp" class="img-fluid" alt="Hermes salon">
                            <div class="p-3 bg-white">
                                <small class="text-success">Luxe & Prestige</small>
                                <h5 class="mb-0">Salon Hermès</h5>
                            </div>
                        </div>
                    </a>
                </div>
                
                <!-- CARTE 5 : Foire de Lyon (Déclencheur de Modale) -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <a href="#modalFoireLyon" class="realisation-link" data-bs-toggle="modal" data-bs-target="#modalFoireLyon">
                        <div class="realisation-card rounded overflow-hidden shadow-sm">
                            <img src="https://uploads.lebonbon.fr/source/2025/Lyon/avril/foire-lyon-2025.jpg" class="img-fluid" alt="Foire de Lyon">
                            <div class="p-3">
                                <small class="text-success">Foire commerciale</small>
                                <h5 class="mb-0">Foire de Lyon</h5>
                            </div>
                        </div>
                    </a>
                </div>
                
                <!-- CARTE 6 : Salon du Made in France (Déclencheur de Modale) -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <a href="#modalMif" class="realisation-link" data-bs-toggle="modal" data-bs-target="#modalMif">
                        <div class="realisation-card rounded overflow-hidden shadow-sm">
                            <img src="https://www.univers-habitat.eu/wp-content/uploads/2025/04/Univers-Habitat-Le-Salon-du-Made-In-France-revient-du-6-au-9-novembre-2025-750x450.png" class="img-fluid" alt="Salon du Made in France">
                            <div class="p-3">
                                <small class="text-success">Salon professionnel</small>
                                <h5 class="mb-0">Salon du Made in France</h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <!-- ************************************ -->
            <!-- DÉFINITION DES MODALES (Popups) -->
            <!-- ************************************ -->

            <!-- MODALE 1 : Marché de Noël -->
            <div class="modal fade" id="modalMarcheNoel" tabindex="-1" aria-labelledby="modalMarcheNoelLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-xl">
                    <div class="modal-content modal-realisation">
                        <div class="modal-body p-0">
                            <div class="row g-0">
                                <div class="col-md-5 realisation-img" style="background-image: url('https://clickatlife.gr/fu/p/20232/1200/10000/00000000004cbc50/1/xristougenna-parisi-agora-la-defense.jpg');">
                                    <div class="overlay"></div>
                                </div>
                                <div class="col-md-7 p-4 p-md-5 text-start">
                                    <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                                    <h3 class="modal-title mb-1 text-success" id="modalMarcheNoelLabel">Marché de Noël (La Défense)</h3>
                                    <p class="lead mb-4 text-muted">Création d'une ambiance festive et sécurisée pour un événement saisonnier majeur.</p>

                                    <h4>Objectifs et Réalisations</h4>
                                    <p>Mandatés pour l'ensemble de la logistique événementielle, nous avons assuré l'installation et la maintenance de la structure éphémère du marché, garantissant une expérience visiteur optimale en plein cœur du quartier d'affaires.</p>
                                    
                                    <div class="row mt-4">
                                        <div class="col-6">
                                            <h5 class="text-primary">Notre Rôle</h5>
                                            <ul>
                                                <li>Gestion de 350+ exposants</li>
                                                <li>Sécurité et signalétique</li>
                                                <li>Coordination des animations</li>
                                            </ul>
                                        </div>
                                        <div class="col-6">
                                            <h5 class="text-primary">Partenaires Clés</h5>
                                            <p>Collaboration avec l'équipe de **Jaulin** pour les structures et le pôle événementiel local.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- MODALE 2 : Hippodrome de Longchamp -->
            <div class="modal fade" id="modalLongchamp" tabindex="-1" aria-labelledby="modalLongchampLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-xl">
                    <div class="modal-content modal-realisation">
                        <div class="modal-body p-0">
                            <div class="row g-0">
                                <div class="col-md-5 realisation-img" style="background-image: url('https://cdn.cultura.com/cdn-cgi/image/width=768/media/pim/TITELIVE/51_9782357334830_1_75.jpg');">
                                    <div class="overlay"></div>
                                </div>
                                <div class="col-md-7 p-4 p-md-5 text-start">
                                    <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                                    <h3 class="modal-title mb-1 text-success" id="modalLongchampLabel">Hippodrome de Longchamp</h3>
                                    <p class="lead mb-4 text-muted">Mise en œuvre technique pour les grands prix hippiques et événements musicaux.</p>

                                    <h4>Un Cadre Prestigieux</h4>
                                    <p>Notre expertise a été sollicitée pour la mise en place d'infrastructures audiovisuelles et scéniques complexes. Que ce soit pour les courses emblématiques ou les festivals (ex: Solidays), nous assurons une qualité technique irréprochable.</p>
                                    
                                    <div class="row mt-4">
                                        <div class="col-6">
                                            <h5 class="text-primary">Notre Rôle</h5>
                                            <ul>
                                                <li>Scénographie et éclairage</li>
                                                <li>Sonorisation des tribunes</li>
                                                <li>Écrans géants LED (Alive Events)</li>
                                            </ul>
                                        </div>
                                        <div class="col-6">
                                            <h5 class="text-primary">Partenaires Clés</h5>
                                            <p>Collaboration étroite avec **Alive Events** pour le matériel son/lumière de haute qualité.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modalFeteHuma" tabindex="-1" aria-labelledby="modalFeteHumaLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content modal-realisation">
                    <div class="modal-body p-0">
                        <div class="row g-0">
                            <div class="col-md-5 realisation-img" style="background-image: url('https://open-images.acast.com/shows/686e315a8d3d6839f4ea5f73/1752053451511-2a449818-ae7f-47ec-aa20-fb42b1271e21.jpeg?height=800');">
                                <div class="overlay"></div>
                            </div>
                            <div class="col-md-7 p-4 p-md-5 text-start">
                                <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                                <h3 class="modal-title mb-1 text-success" id="modalFeteHumaLabel">Fête de l'Humanité</h3>
                                <p class="lead mb-4 text-muted">Accompagnement logistique et technique de l'un des plus grands festivals français.</p>

                                <h4>Un Événement Massif</h4>
                                <p>La Fête de l'Humanité est un projet d'envergure. Nous gérons la coordination des multiples scènes, villages thématiques et espaces d'exposition, assurant une circulation fluide et la conformité des installations pour les milliers de festivaliers.</p>
                                
                                <div class="row mt-4">
                                    <div class="col-6">
                                        <h5 class="text-primary">Notre Rôle</h5>
                                        <ul>
                                            <li>Montage/Démontage rapide</li>
                                            <li>Distribution électrique temporaire</li>
                                            <li>Gestion des zones de restauration</li>
                                        </ul>
                                    </div>
                                    <div class="col-6">
                                        <h5 class="text-primary">Partenaires Clés</h5>
                                        <p>Travail en étroite collaboration avec l'équipe logistique interne pour la gestion de l'espace.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modalHermes" tabindex="-1" aria-labelledby="modalHermesLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content modal-realisation">
                    <div class="modal-body p-0">
                        <div class="row g-0">
                            <div class="col-md-5 realisation-img" style="background-image: url('https://logo.com/image-cdn/images/kts928pd/production/59f2aa87d3c8527e5f6adfb709080f5bf69c11f7-1024x600.png?w=1200&q=72&fm=webp');">
                                <div class="overlay"></div>
                            </div>
                            <div class="col-md-7 p-4 p-md-5 text-start">
                                <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                                <h3 class="modal-title mb-1 text-success" id="modalHermesLabel">Salon Hermès (Événements Privés)</h3>
                                <p class="lead mb-4 text-muted">Réalisation de stands et d'espaces d'exposition sur-mesure pour la Maison de Luxe.</p>

                                <h4>Excellence et Raffinement</h4>
                                <p>Pour des marques de luxe comme Hermès, l'exigence est maximale. Nous concevons et réalisons des structures éphémères qui respectent le cahier des charges très haut de gamme, en mettant l'accent sur la qualité des matériaux et les finitions parfaites.</p>
                                
                                <div class="row mt-4">
                                    <div class="col-6">
                                        <h5 class="text-primary">Notre Rôle</h5>
                                        <ul>
                                            <li>Design et fabrication de stand</li>
                                            <li>Gestion du mobilier et des décors</li>
                                            <li>Solutions d'éclairage d'ambiance</li>
                                        </ul>
                                    </div>
                                    <div class="col-6">
                                        <h5 class="text-primary">Partenaires Clés</h5>
                                        <p>Des fournisseurs de prestige et des architectes d'intérieur spécialisés dans le luxe.</p>
                                        <p>Vous êtes toujours notre partenaire pour les missions les plus exigeantes.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modalFoireLyon" tabindex="-1" aria-labelledby="modalFoireLyonLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content modal-realisation">
                    <div class="modal-body p-0">
                        <div class="row g-0">
                            <div class="col-md-5 realisation-img" style="background-image: url('https://uploads.lebonbon.fr/source/2025/Lyon/avril/foire-lyon-2025.jpg');">
                                <div class="overlay"></div>
                            </div>
                            <div class="col-md-7 p-4 p-md-5 text-start">
                                <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                                <h3 class="modal-title mb-1 text-success" id="modalFoireLyonLabel">Foire de Lyon</h3>
                                <p class="lead mb-4 text-muted">Accompagnement de la **GL Events** pour les grandes foires commerciales au Parc Eurexpo.</p>

                                <h4>Espaces d'Exposition Géants</h4>
                                <p>Nous intervenons sur la partie structurelle et modulaire des stands pour les exposants de la Foire de Lyon. Notre collaboration avec **GL Events** nous positionne comme un partenaire clé pour la fourniture de structures et l'aménagement intérieur.</p>
                                
                                <div class="row mt-4">
                                    <div class="col-6">
                                        <h5 class="text-primary">Notre Rôle</h5>
                                        <ul>
                                            <li>Montage de cloisons modulaires</li>
                                            <li>Installation de moquettes et podiums</li>
                                            <li>Logistique des livraisons/réceptions</li>
                                        </ul>
                                    </div>
                                    <div class="col-6">
                                        <h5 class="text-primary">Partenaires Clés</h5>
                                        <p>**GL Events** (gestionnaire du lieu) et les fournisseurs de matériaux d'exposition (**TMD Expo**).</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modalMif" tabindex="-1" aria-labelledby="modalMifLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content modal-realisation">
                    <div class="modal-body p-0">
                        <div class="row g-0">
                            <div class="col-md-5 realisation-img" style="background-image: url('https://www.univers-habitat.eu/wp-content/uploads/2025/04/Univers-Habitat-Le-Salon-du-Made-In-France-revient-du-6-au-9-novembre-2025-750x450.png');">
                                <div class="overlay"></div>
                            </div>
                            <div class="col-md-7 p-4 p-md-5 text-start">
                                <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                                <h3 class="modal-title mb-1 text-success" id="modalMifLabel">Salon du Made in France (MIF)</h3>
                                <p class="lead mb-4 text-muted">Valorisation du savoir-faire français à travers des aménagements dédiés.</p>

                                <h4>Promotion de l'Industrie Locale</h4>
                                <p>Pour le Salon du Made in France, nous mettons en place des dispositifs scénographiques qui mettent en lumière les produits et entreprises locales. Le challenge est de créer des espaces visuellement attrayants tout en respectant une démarche écologique et durable.</p>
                                
                                <div class="row mt-4">
                                    <div class="col-6">
                                        <h5 class="text-primary">Notre Rôle</h5>
                                        <ul>
                                            <li>Conception de stands écologiques</li>
                                            <li>Fourniture de mobilier éco-responsable</li>
                                            <li>Gestion des flux visiteurs</li>
                                        </ul>
                                    </div>
                                    <div class="col-6">
                                        <h5 class="text-primary">Partenaires Clés</h5>
                                        <p>Partenariat avec des entreprises françaises pour l'ensemble des structures (**TMD Expo**).</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>

    <!-- SECTION NOS PARTENAIRES (Reprise de votre code original) -->
    <section id="partenaires" class="py-5 bg-light text-center">
        <div class="container">
            <h2 class="display-4 mb-2">Nos partenaires</h2>
            <div class="d-flex justify-content-center">
                <hr class="green-underline">
            </div>
            <p class="lead mb-5">Nous collaborons avec des acteurs majeurs de l'événementiel pour garantir la réussite de chaque projet</p>
            
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="partenaire-card p-4 h-100 bg-white shadow-sm border rounded d-flex align-items-center justify-content-center">
                        <img src="https://marquage-4g.com/media/images/accueil/logo32.jpg" alt="Logo Jaulin" class="img-fluid" style="max-height: 80px;">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="partenaire-card p-4 h-100 bg-white shadow-sm border rounded d-flex align-items-center justify-content-center">
                        <img src="https://www.alive-technology.fr/wp-content/uploads/2023/03/AliveEvents_Profil-300x300.jpg" alt="Logo Alive Events" class="img-fluid" style="max-height: 80px;">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="partenaire-card p-4 h-100 bg-white shadow-sm border rounded d-flex align-items-center justify-content-center">
                        <img src="https://www.gl-events.com/sites/default/files/logo_cookies/gl-events-logo2x_0.png" alt="Logo GL Events" class="img-fluid" style="max-height: 80px;">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="py-5">
        <div class="container">
            <h2 class="display-4 mb-2 text-center">Contactez-nous</h2>
            <div class="d-flex justify-content-center">
                <hr class="green-underline">
            </div>
            <p class="lead mb-5 text-center">Besoin d'un devis ou d'informations ? Notre équipe est à votre écoute</p>
            
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="card p-4 shadow-lg border-0">
                        <div class="row">
                            <div class="col-md-5 mb-4 mb-md-0">
                                <h3 class="mb-4">Nos coordonnées</h3>
                                <div class="mb-3 d-flex align-items-start">
                                    <i class="fas fa-map-marker-alt text-success me-3 mt-1"></i> <div>
                                        <strong>Adresse</strong>
                                        <p class="mb-0">13 rue Palouzie</p>
                                        <p class="mb-0">93400 Saint-Ouen-sur-Seine</p>
                                    </div>
                                </div>
                                <div class="mb-3 d-flex align-items-start">
                                    <i class="fas fa-envelope text-success me-3 mt-1"></i> <div>
                                        <strong>Email</strong>
                                        <p class="mb-0">tmd.expo@gmail.com</p>
                                    </div>
                                </div>
                                <div class="mb-4 d-flex align-items-start">
                                    <i class="fas fa-phone-alt text-success me-3 mt-1"></i> <div>
                                        <strong>Téléphone</strong>
                                        <p class="mb-0">06 04502278</p>
                                    </div>
                                </div>

                                <div class="map-placeholder border rounded overflow-hidden" style="height: 250px;">
                                    <iframe 
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2622.618608492049!2d2.348427815676722!3d48.91000607929112!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66f27b95d4d3d%3A0x86b0f16f5c5b2067!2s13%20Rue%20Palouzie%2C%2093400%20Saint-Ouen-sur-Seine!5e0!3m2!1sfr!2sfr!4v1700000000000!5m2!1sfr!2sfr" 
                                        width="100%" 
                                        height="100%" 
                                        style="border:0;" 
                                        allowfullscreen="" 
                                        loading="lazy" 
                                        referrerpolicy="no-referrer-when-downgrade">
                                    </iframe>
                                </div>
                            </div>
                            
                            <div class="col-md-7">
                                <h3 class="mb-4">Contacter Nous</h3>
                                <form id="contactForm">
                                    <div class="mb-3">
                                        <label for="name" class="form-label visually-hidden">Nom complet</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Nom complet" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label visually-hidden">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="jean.dupont@exemple.fr" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="message" class="form-label visually-hidden">Message</label>
                                        <textarea class="form-control" id="message" name="message" rows="5" placeholder="Décrivez votre projet..." required></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-success btn-lg w-100">
                                        Envoyer <i class="fas fa-paper-plane ms-2"></i> </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php
// 4. Inclusion du pied de page (Ferme <body> et <html>)
// Correction du chemin pour plus de robustesse.
require_once __DIR__ . '/../include/footer.php';
?>