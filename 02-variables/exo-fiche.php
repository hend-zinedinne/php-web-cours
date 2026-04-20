<?php
$nomProduit = "Fromage Cheddar";
$categorie = "Produits Laitiers";
$prixHT = 3.0;
$tauxTVA = 0.2;
$prixTTC = $prixHT * (1 + $tauxTVA);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>02 - Variables</title>
</head>

<body>
    <?= "<h1>Produit : $nomProduit</h1>"; ?>
    <?= "<h2>Categorie : $categorie</h2>"; ?>
    <?= "<p>Prix TTC : <strong>$prixTTC €</strong></p>"; ?>
</body>

</html>