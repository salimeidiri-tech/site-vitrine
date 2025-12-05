<?php
// Chemins relatifs depuis le dossier main vers le dossier include dans le répertoire parent.

// 1. Connexion à la base de données
require_once '../include/db.php';

// 2. Inclusion de l'en-tête
require_once '../include/header.php';

// 3. Inclusion de la barre de navigation
require_once '../include/navbar.php';

// Gestion de l'inscription
$message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = trim($_POST['nom'] ?? '');
    $prenom = trim($_POST['prenom'] ?? '');
    $numero = trim($_POST['numero'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $mot_de_passe = $_POST['mot_de_passe'] ?? '';
    $confirmer_mot_de_passe = $_POST['confirmer_mot_de_passe'] ?? '';

    // Validation
    if (empty($nom) || empty($prenom) || empty($numero) || empty($email) || empty($mot_de_passe) || empty($confirmer_mot_de_passe)) {
        $message = '<div class="alert alert-danger">Tous les champs sont obligatoires.</div>';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = '<div class="alert alert-danger">Adresse email invalide.</div>';
    } elseif (strlen($mot_de_passe) < 6) {
        $message = '<div class="alert alert-danger">Le mot de passe doit contenir au moins 6 caractères.</div>';
    } elseif ($mot_de_passe !== $confirmer_mot_de_passe) {
        $message = '<div class="alert alert-danger">Les mots de passe ne correspondent pas.</div>';
    } else {
        // Vérifier si l'email existe déjà
        $stmt = $pdo->prepare("SELECT id FROM utilisateurs WHERE email = ?");
        $stmt->execute([$email]);
        if ($stmt->fetch()) {
            $message = '<div class="alert alert-danger">Cette adresse email est déjà utilisée.</div>';
        } else {
            // Hacher le mot de passe
            $hash = password_hash($mot_de_passe, PASSWORD_DEFAULT);

            // Insérer l'utilisateur
            $stmt = $pdo->prepare("INSERT INTO utilisateurs (nom, prenom, numero, email, mot_de_passe) VALUES (?, ?, ?, ?, ?)");
            if ($stmt->execute([$nom, $prenom, $numero, $email, $hash])) {
                $message = '<div class="alert alert-success">Inscription réussie ! Vous pouvez maintenant vous connecter.</div>';
            } else {
                $message = '<div class="alert alert-danger">Erreur lors de l\'inscription. Veuillez réessayer.</div>';
            }
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
                        <h2 class="display-5 mb-4 text-center">Inscription</h2>
                        <div class="d-flex justify-content-center mb-4">
                            <hr class="green-underline">
                        </div>

                        <?php echo $message; ?>

                        <form method="POST" action="">
                            <div class="mb-3">
                                <label for="nom" class="form-label">Nom</label>
                                <input type="text" class="form-control" id="nom" name="nom" required>
                            </div>
                            <div class="mb-3">
                                <label for="prenom" class="form-label">Prénom</label>
                                <input type="text" class="form-control" id="prenom" name="prenom" required>
                            </div>
                            <div class="mb-3">
                                <label for="numero" class="form-label">Numéro de téléphone</label>
                                <input type="tel" class="form-control" id="numero" name="numero" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Adresse email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="mot_de_passe" class="form-label">Mot de passe</label>
                                <input type="password" class="form-control" id="mot_de_passe" name="mot_de_passe" required>
                            </div>
                            <div class="mb-3">
                                <label for="confirmer_mot_de_passe" class="form-label">Confirmer le mot de passe</label>
                                <input type="password" class="form-control" id="confirmer_mot_de_passe" name="confirmer_mot_de_passe" required>
                            </div>
                            <button type="submit" class="btn btn-success btn-lg w-100">
                                S'inscrire <i class="fas fa-user-plus ms-2"></i>
                            </button>
                        </form>

                        <div class="text-center mt-3">
                            <p>Déjà un compte ? <a href="login.php" class="text-success">Se connecter</a></p>
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
