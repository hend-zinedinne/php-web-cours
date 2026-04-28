<?php
session_start();

// Vérifier si l'utilisateur est connecté
// Sinon, rediriger vers page de connexion

if (!isset($_SESSION["utilisateur"])) {
    header("Location: connexion.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espace personnel</title>
</head>

<body>
    <h1>Mon espace personnel</h1>
    <p>Vous êtes connecté avec le compte</p>
    <ul>
        <li>Login : <?= $_SESSION["utilisateur"]["login"] ?></li>
        <li>Nom : <?= $_SESSION["utilisateur"]["nom"] ?></li>
        </li>
        <li>Prénom : <?= $_SESSION["utilisateur"]["prénom"] ?></li>
        </li>
    </ul>

    <p><a href="index.php">Retour à l'accueil</a></p>
</body>

</html>