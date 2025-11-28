<?php
// Chemins relatifs depuis le dossier main vers le dossier include dans le répertoire parent.

// 1. Connexion à la base de données
// Doit être fait en premier car il peut être utilisé par le header/navbar.
require_once '../include/db.php';

// 2. Inclusion de l'en-tête (Ouvre <html>, <head>, <body>)
require_once '../include/header.php';

// 3. Inclusion de la barre de navigation
require_once '../include/navbar.php';
?>

<main>
    <section id="services" class="py-5 bg-light text-center">
        <div class="container">
            <h2 class="display-4 mb-2">Nos services</h2>
            <div class="d-flex justify-content-center">
                <hr class="green-underline">
            </div>
            <p class="lead mb-5">Une gamme complète de prestations pour la réussite de vos événements</p>
            
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="service-card p-4 h-100 bg-white shadow-sm border rounded">
                        <i class="icon-truck display-5 mb-3 text-success"></i> <h5 class="font-weight-bold">Transport & logistique événementielle</h5>
                        <p class="text-muted">Acheminement sécurisé de vos équipements et matériels sur tous les sites événementiels de France.</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="service-card p-4 h-100 bg-white shadow-sm border rounded">
                        <i class="icon-wrench display-5 mb-3 text-success"></i> <h5 class="font-weight-bold">Montage et installation de structures</h5>
                        <p class="text-muted">Installation professionnelle de stands, structures modulaires et aménagements sur mesure.</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="service-card p-4 h-100 bg-white shadow-sm border rounded">
                        <i class="icon-tools display-5 mb-3 text-success"></i> <h5 class="font-weight-bold">Assistance technique et maintenance</h5>
                        <p class="text-muted">Support technique sur site pendant toute la durée de votre événement pour garantir son bon déroulement.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="service-card p-4 h-100 bg-white shadow-sm border rounded">
                        <i class="icon-box display-5 mb-3 text-success"></i> <h5 class="font-weight-bold">Stockage & coordination</h5>
                        <p class="text-muted">Gestion du stockage, manutention et coordination avec vos prestataires (Jaulin, Alive Events...).</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section id="realisations" class="py-5 text-center">
        <div class="container">
            <h2 class="display-4 mb-2">Nos réalisations</h2>
            <div class="d-flex justify-content-center">
                <hr class="green-underline">
            </div>
            <p class="lead mb-5">Découvrez quelques-uns des événements que nous avons accompagnés</p>
            
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="realisation-card border rounded overflow-hidden shadow-sm">
                        <img src="https://clickatlife.gr/fu/p/20232/1200/10000/00000000004cbc50/1/xristougenna-parisi-agora-la-defense.jpg" class="img-fluid" alt="Marché de Noël">
                        <div class="p-3">
                            <small class="text-success">Événement saisonnier</small>
                            <h5 class="mb-0">Marché de Noël</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="realisation-card border rounded overflow-hidden shadow-sm">
                        <img src="https://cdn.cultura.com/cdn-cgi/image/width=768/media/pim/TITELIVE/51_9782357334830_1_75.jpg" class="img-fluid" alt="Hippodrome de Longchamp">
                        <div class="p-3">
                            <small class="text-success">Événement sportif</small>
                            <h5 class="mb-0">Hippodrome de Longchamp</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="realisation-card border rounded overflow-hidden shadow-sm">
                        <img src="https://open-images.acast.com/shows/686e315a8d3d6839f4ea5f73/1752053451511-2a449818-ae7f-47ec-aa20-fb42b1271e21.jpeg?height=800" class="img-fluid" alt="Fête de l'Humanité">
                        <div class="p-3">
                            <small class="text-success">Festival culturel</small>
                            <h5 class="mb-0">Fête de l'Humanité</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="realisation-card border rounded overflow-hidden shadow-sm">
                        <img src="https://logo.com/image-cdn/images/kts928pd/production/59f2aa87d3c8527e5f6adfb709080f5bf69c11f7-1024x600.png?w=1200&q=72&fm=webp" class="img-fluid" alt="Hermes salon">
                        <div class="p-3">
                            <small class="text-success">hermes</small>
                            <h5 class="mb-0">Hermes salon</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="realisation-card border rounded overflow-hidden shadow-sm">
                        <img src="https://uploads.lebonbon.fr/source/2025/Lyon/avril/foire-lyon-2025.jpg" class="img-fluid" alt="Foire de Lyon">
                        <div class="p-3">
                            <small class="text-success">Foire commerciale</small>
                            <h5 class="mb-0">Foire de Lyon</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="realisation-card border rounded overflow-hidden shadow-sm">
                        <img src="https://www.univers-habitat.eu/wp-content/uploads/2025/04/Univers-Habitat-Le-Salon-du-Made-In-France-revient-du-6-au-9-novembre-2025-750x450.png" class="img-fluid" alt="Salon du Made in France">
                        <div class="p-3">
                            <small class="text-success">Salon professionnel</small>
                            <h5 class="mb-0">Salon du Made in France</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
                                <form method="POST" action="traitement_formulaire.php"> 
                                    <div class="mb-3">
                                        <label for="nom_complet" class="form-label visually-hidden">Nom complet</label>
                                        <input type="text" class="form-control" id="nom_complet" name="nom_complet" placeholder="Nom complet" required>
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
require_once __DIR__ . '/../include/footer.php';
?>
