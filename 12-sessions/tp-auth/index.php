<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'accueil</title>
</head>

<body>
    <!-- Tester si l'utilisateur est connecté -->

    <h1>Accueil du site</h1>

    <?php if (isset($_SESSION["utilisateur"])): ?>
        <p>Bonjour <?= $_SESSION['utilisateur']['prenom'] ?></p>
        <p><a href="page-protegee2.php">Accès à mon profil</a></p>
        <p><a href="page-protegee.php">Accès à mon espace protégé</a></p>
        <p><a href="deconnexion.php">Se déconnecter</a></p>
    <?php else: ?>
        <p>Vous n'êtes pas connecté.</p>
        <p><a href="connexion.php">Se connecter</a></p>
    <?php endif; ?>



</body>

</html>