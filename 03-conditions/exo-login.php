<?php
$estConnecte = false;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>03 - Conditions</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <button>

        <?php if ($estConnecte): ?>
            <a href="#">Déconnexion</a>
        <?php else: ?>
            <a href="#">Se connecter</a>
        <?php endif; ?>

    </button>
</body>

</html>