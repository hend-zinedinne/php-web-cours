<?php
$estConnecte = true;
$prenom = "Zinédinne";
$nom = "Hend";

require_once __DIR__ . "/../lib/fonctions.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $titre ?></title>
</head>

<body>
    <header>Mon super header type shit
        <nav>
            <ul>
                <li><a href="cours.php">Cours</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
        <?php if ($estConnecte): ?>
            <p><?= getMessageConnexion($prenom, $nom) ?></p>
        <?php endif; ?>
    </header>