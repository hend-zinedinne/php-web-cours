<?php
$montantAchat = 101;

if ($montantAchat > 100) {
    $montantAchat *= 0.9;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>03 - Conditions</title>
</head>

<body>
    <h1>Montant à payer :</h1>
    <?= "$montantAchat €"; ?>

</body>

</html>