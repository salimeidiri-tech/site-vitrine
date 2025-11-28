<?php

/**
 * Fichier de connexion à la base de données
 * Utilise l'extension PDO (PHP Data Objects)
 */

// ------------------------------------
// 1. PARAMÈTRES DE CONNEXION
// ------------------------------------

// Définir les constantes pour les paramètres de connexion
define('DB_HOST', 'localhost');
define('DB_NAME', 'tmd_expo_db'); // Assurez-vous d'avoir créé cette DB dans phpMyAdmin
define('DB_USER', 'root');
define('DB_PASSWORD', ''); 


// ------------------------------------
// 2. TENTATIVE DE CONNEXION
// ------------------------------------

try {
    // Construction de la chaîne DSN (Data Source Name)
    $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4";
    
    // Création d'une nouvelle instance de PDO
    $pdo = new PDO($dsn, DB_USER, DB_PASSWORD);

    // Configuration des attributs de PDO pour la gestion des erreurs
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Configuration pour récupérer les résultats par défaut sous forme de tableau associatif
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    // Affichage d'un message d'erreur clair en cas d'échec de connexion
    
    $error_message = "Erreur de connexion à la base de données : ";
    
    // Code d'erreur 1049 signifie "Unknown database" (base de données inconnue)
    if ($e->getCode() == 1049) {
        $error_message .= "La base de données 'tmd_expo_db' n'a pas été trouvée. Avez-vous importé 'site.sql' dans phpMyAdmin ?";
    } else {
        $error_message .= $e->getMessage();
    }
    
    // Arrêter l'exécution du script et afficher le message d'erreur
    die($error_message);
}

// L'objet $pdo est prêt à être utilisé.