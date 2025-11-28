--
-- Fichier d'initialisation de la base de données : site.sql
-- Contient la structure des tables et des données initiales.
--

-- ** 1. Création de la Base de Données **
-- Décommentez la ligne ci-dessous si vous exécutez le script pour la première fois
-- sur un serveur sans la base de données existante.
CREATE DATABASE IF NOT EXISTS tmd_expo_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

-- Sélectionner la base de données pour les opérations suivantes
USE tmd_expo_db;

-- --------------------------------------------------------

-- ** 2. Structure de la table `utilisateurs` **
-- Pour gérer les comptes utilisateur (connexion et inscription)
--
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `nom_complet` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255) NOT NULL UNIQUE,
  `mot_de_passe` VARCHAR(255) NOT NULL, -- Doit contenir le HASH du mot de passe (ex: password_hash() en PHP)
  `role` ENUM('client', 'admin') NOT NULL DEFAULT 'client',
  `date_inscription` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

-- ** 3. Structure de la table `realisations` **
-- Pour stocker les événements ou projets présentés sur la page d'accueil
--
CREATE TABLE IF NOT EXISTS `realisations` (
  `id` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `titre` VARCHAR(255) NOT NULL,
  `categorie` VARCHAR(100) DEFAULT NULL, -- Ex: Événement saisonnier, Événement sportif, Festival
  `description_courte` TEXT,
  `image_url` VARCHAR(255) NOT NULL,
  `date_evenement` DATE DEFAULT NULL,
  `est_publie` BOOLEAN NOT NULL DEFAULT TRUE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

-- ** 4. Insertion de données initiales dans `realisations` **
--
INSERT INTO `realisations` (`titre`, `categorie`, `description_courte`, `image_url`, `date_evenement`) VALUES
('Marché de Noël', 'Événement saisonnier', 'Accompagnement logistique pour un marché de Noël en ville.', 'assets/images/realisation_marche_noel.jpg', '2025-12-01'),
('Hippodrome de Longchamp', 'Événement sportif', 'Installation de structures pour les événements de l''hippodrome.', 'assets/images/realisation_hippodrome.jpg', '2025-09-10'),
('La Fête de l''Humanité', 'Festival culturel', 'Gestion complète de la logistique d''un grand festival.', 'assets/images/realisation_fete_humanite.jpg', '2025-09-13');

-- --------------------------------------------------------

-- ** 5. Structure de la table `messages_contact` **
-- Pour enregistrer les messages envoyés via le formulaire de contact
--
CREATE TABLE IF NOT EXISTS `messages_contact` (
  `id` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `nom_complet` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `message` TEXT NOT NULL,
  `date_soumission` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `est_traite` BOOLEAN NOT NULL DEFAULT FALSE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;