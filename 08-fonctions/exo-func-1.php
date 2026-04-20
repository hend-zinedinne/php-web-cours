<?php
function appliquerRemise(float $prix, float $pourcentageRemise): float
{
    return $prix * (1 - $pourcentageRemise / 100);
}
$listePrix = [120.50, 150.00, 99.99];
$pourcentageRemise = 10.0;
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>08 - Fonctions</title>
</head>

<body>
    <h1>Exo - Fonctions 1</h1>

    <p>Pourcentage de remise : <?= $pourcentageRemise ?> %</p>

    <ul> Prix originaux :
        <?php foreach ($listePrix as $prix): ?>
            <li><?= number_format($prix, 2, ',', ' ') ?> €</li>
        <?php endforeach; ?>
    </ul>

    <ul> Prix soldés :
        <?php foreach ($listePrix as $prix): ?>
            <li><?= number_format(appliquerRemise($prix, $pourcentageRemise), 2, ',', ' ') ?> €</li>
        <?php endforeach; ?>
    </ul>
</body>

</html>