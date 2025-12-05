<?php
// Chemins relatifs depuis le dossier main vers le dossier include dans le répertoire parent.

// 1. Connexion à la base de données
require_once '../include/db.php';

// 2. Inclusion de l'en-tête
require_once '../include/header.php';

// 3. Inclusion de la barre de navigation
require_once '../include/navbar.php';

// Gestion de la connexion
$message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email'] ?? '');
    $mot_de_passe = $_POST['mot_de_passe'] ?? '';

    // Validation
    if (empty($email) || empty($mot_de_passe)) {
        $message = '<div class="alert alert-danger">Tous les champs sont obligatoires.</div>';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = '<div class="alert alert-danger">Adresse email invalide.</div>';
    } else {
        // Vérifier si c'est l'admin
        if ($email === 'admin@gmail.com' && $mot_de_passe === 'admin7410') {
            // Connexion admin réussie
            $_SESSION['utilisateur_id'] = 0; // ID spécial pour admin
            $_SESSION['nom_complet'] = 'Administrateur';
            $_SESSION['numero'] = '';
            $_SESSION['email'] = $email;
            $_SESSION['role'] = 'admin';
            header('Location: admin.php');
            exit;
        }

        // Vérifier les identifiants dans la base de données pour les autres utilisateurs
        $stmt = $pdo->prepare("SELECT id, nom, prenom, numero, mot_de_passe, role FROM utilisateurs WHERE email = ?");
        $stmt->execute([$email]);
        $utilisateur = $stmt->fetch();

        if ($utilisateur && password_verify($mot_de_passe, $utilisateur['mot_de_passe'])) {
            // Connexion réussie
            $_SESSION['utilisateur_id'] = $utilisateur['id'];
            $_SESSION['nom_complet'] = $utilisateur['nom'] . ' ' . $utilisateur['prenom'];
            $_SESSION['numero'] = $utilisateur['numero'];
            $_SESSION['email'] = $email;
            $_SESSION['role'] = $utilisateur['role'];

            // Redirection selon le rôle
            if ($utilisateur['role'] === 'admin') {
                header('Location: admin.php');
            } else {
                header('Location: index.php');
            }
            exit;
        } else {
            $message = '<div class="alert alert-danger">Identifiants incorrects.</div>';
        }
    }
}
?>

<main>
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card p-4 shadow-lg border-0">
                        <h2 class="display-5 mb-4 text-center">Connexion</h2>
                        <div class="d-flex justify-content-center mb-4">
                            <hr class="green-underline">
                        </div>

                        <?php echo $message; ?>

                        <form method="POST" action="">
                            <div class="mb-3">
                                <label for="email" class="form-label">Adresse email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="mot_de_passe" class="form-label">Mot de passe</label>
                                <input type="password" class="form-control" id="mot_de_passe" name="mot_de_passe" required>
                            </div>
                            <button type="submit" class="btn btn-success btn-lg w-100">
                                Se connecter <i class="fas fa-sign-in-alt ms-2"></i>
                            </button>
                        </form>

                        <div class="text-center mt-3">
                            <p>Pas encore de compte ? <a href="inscription.php" class="text-success">S'inscrire</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
// 4. Inclusion du pied de page
require_once '../include/footer.php';
?>
