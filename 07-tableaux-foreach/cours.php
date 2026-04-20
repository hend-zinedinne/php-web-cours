<?php
$categories = ["Informatique", "Audio", "Photo"];
$produit = [
    "marque" => "Apple",
    "modele" => "iPhone 15"
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>07 - Tableaux Foreach</title>
</head>

<body>
    <h1>Boucles foreach</h1>
    <h2>Version classique</h2>
    <?php foreach ($categories as $categorie) { ?>
        <p>Rayon : <?= $categorie ?></p>
    <?php } ?>
    <h2>Version alternative</h2>
    <?php foreach ($categories as $categorie): ?>
        <p>Rayon : <?= $categorie ?></p>
    <?php endforeach; ?>

    <!-- Utiliser foreach pour une liste à puces -->
    <ul>
        <?php foreach ($produit as $cle => $specificite): ?>
            <li><?= $specificite ?></li>
        <?php endforeach; ?>
    </ul>

</body>

</html>