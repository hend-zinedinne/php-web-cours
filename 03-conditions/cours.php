<?php
$stock = 0;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>O3 - Conditions</title>
</head>

<body>
    <h1>Structures conditionnelles if ... else</h1>
    <h2>Version classique</h2>
    <?php if ($stock > 0) { ?>
        <p>Produit disponible.</p>
    <?php } else { ?>
        <p>Produit en rupture de stock.</p>
    <?php } ?>

    <h2>Version alternative</h2>

    <?php if ($stock > 0): ?>
        <p>Produit disponible.</p>
    <?php else: ?>
        <p>Produit en rupture de stock.</p>
    <?php endif; ?>

    <?php if ($stock > 0) {
        echo "<p>Produit disponible.</p>";
    } else {
        echo "<p>Produit en rupture de stock!</p>";
    } ?>
</body>

</html>