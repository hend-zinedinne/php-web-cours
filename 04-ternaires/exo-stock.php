<?php
$quantite = 7;
$stockCritique = ($quantite < 5) ? true : false;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <p>
        Quantité : <?= $quantite; ?> ( <span
            class="quantite <?= ($stockCritique) ? 'stock-danger' : 'stock-ok' ?>"><?= ($stockCritique) ? "Stock critique !" : "Stock suffisant."; ?></span>
        )
    </p>
    <?= ($stockCritique) ? "<a href='#' class='bouton-commander'>Commander</a>" : ""; ?>
</body>

</html>