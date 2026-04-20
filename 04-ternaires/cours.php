<?php
$age = 16;
$statut = ($age >= 18) ? "Majeur" : "Mineur";
$estConnecte = false;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>04 - Ternaires</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h2>Version if... else</h2>
    <?php if ($age >= 18): ?>
        <p>Statut : Majeur</p>
    <?php else: ?>
        <p>Statut : Mineur</p>
    <?php endif; ?>

    <h2>Version ternaire</h2>
    <p>Statut : <?= $statut ?> </p>

    <div class="badge <?= ($estConnecte) ? 'badge-success' : 'badge-danger' ?>">
        <?= ($estConnecte) ? "Connecté" : "Déconnecté" ?>
    </div>
</body>

</html>