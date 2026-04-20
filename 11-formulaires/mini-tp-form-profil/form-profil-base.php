<?php
$statutOptions =
    [
        "" => "-- Sélectionnez un statut --",
        "etudiant" => "Etudiant",
        "enseignant" => "Enseignant",
        "administrateur" => "Administrateur",
    ];



// Définir une variable par champs du formulaire
$pseudo = '';
$email = '';
$statut = '';
$erreurs = []; // Tableau associatif pour les erreurs
$succes = false;

// Détecter la soumission du formulaire.
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // le formulaire est soumis.
    // Récupérer chaque champ
    $pseudo = trim($_POST["pseudo"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $statut = trim($_POST["statut"] ?? "");

    // Validation du pseudo
    if ($pseudo == '') {
        // Le pseudo n'a pas été saisi
        $erreurs["pseudo"] = "Le pseudo n'a pas été saisi.";
    } elseif (mb_strlen($pseudo) < 3) {
        $erreurs["pseudo"] = "Le pseudo a moins de 3 caractères.";
    }
    // Validation de l'e-mail
    if ($email == '') {
        // Le pseudo n'a pas été saisi
        $erreurs["email"] = "L'e-mail n'a pas été saisi.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erreurs["email"] = "Le format de l'e-mail est invalide.";
    }
    // Validation du statut
    if ($statut == '') {
        // Le pseudo n'a pas été saisi
        $erreurs["statut"] = "Aucun statut n'a été séléctionné.";
    } elseif (!array_key_exists($statut, $statutOptions)) {
        $erreurs["statut"] = "Le statut séléctionné est invalide.";
    }

    // Traitement des données saisies, uniquement dans le cas où aucune erreur n'a été produite.

    if (empty($erreurs)) {
        $succes = true;
        // Réinitialiser les variables avec ''
        $pseudo = "";
        $email = "";
        $statut = "";
    }
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer un profil</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="card">

        <header class="card-header">
            <h1>Créer un profil</h1>
            <hr>
        </header>
        <!-- Message de soumission et traitement des données -->
        <?php if ($succes): ?>
            <div class="message-succes">Le profil a été créé avec succès.</div>
        <?php endif; ?>

        <form action="" method="POST" autocomplete="off" novalidate>

            <!-- PSEUDO -->
            <div class="form-group">
                <label for="pseudo">Pseudo <span class="required">*</span> :</label>
                <input type="text" id="pseudo" name="pseudo" placeholder="Ex: FL39" value="<?= $pseudo ?>" required
                    minlength="3">
                <!-- Afficher l'erreur si présente -->
                <?php if (isset($erreurs["pseudo"])): ?>
                    <div class="message-erreur"><?= $erreurs['pseudo'] ?></div>
                <?php endif; ?>
                <div class="hint">3 caractères minimum</div>
            </div>

            <!-- EMAIL -->
            <div class="form-group">
                <label for="email">Email <span class="required">*</span> :</label>
                <input type="email" id="email" name="email" placeholder="votre@email.fr" value="<?= $email ?>" required>
                <?php if (isset($erreurs["email"])): ?>
                    <div class="message-erreur"><?= $erreurs['email'] ?></div>
                <?php endif; ?>
            </div>

            <!-- STATUT -->
            <div class="form-group">
                <label for="statut">Statut <span class="required">*</span> :</label>
                <select id="statut" name="statut" " required>
                    <?php foreach ($statutOptions as $valeur => $statutOption): ?>
                            <option value=" <?= $valeur ?>" <?php if ($valeur == $statut): ?>selected<?php endif; ?>>
                        <?= $statutOption ?>
                        </option>
                    <?php endforeach; ?>
                    <!-- remplissage dynamique des options -->
                </select>
                <?php if (isset($erreurs["statut"])): ?>
                    <div class="message-erreur"><?= $erreurs['statut'] ?></div>
                <?php endif; ?>
            </div>

            <p class="legend">Le caractère <span class="required">*</span> indique un champ obligatoire.</p>

            <button type="submit" class="btn-submit">
                Créer profil
            </button>

        </form>

    </div>

</body>

</html>