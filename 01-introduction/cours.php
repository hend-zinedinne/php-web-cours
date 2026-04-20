<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>01 - Introduction</title>
</head>

<body>
    <p>Introduction cours PHP-WEB</p>
    <!-- Code PHP -->
    <?php
    // Nous sommes désormais sur PHP.
    echo "<p>Introduction au cours PHP-WEB</p>";
    echo "<h2>BTS SIO 1</h2>";
    ?>

    <?= "<p>pluh pluh</p>" ?>

    <!-- Afficher la date du jour au format d/m/Y dans une baliase p. -->

    <p>Nous sommes le <span style="color:cornflowerblue;font-weight:bolder
    "><?= date('d/m/Y') ?></span></p>

</body>

</html>