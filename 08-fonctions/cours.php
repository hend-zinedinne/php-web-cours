<?php
function sayHello(): string
{
    // Eviter préférablement le 'echo' dans les fonctions
    return "Hello world!";
}

function saluer(string $prenom): string
{
    return "Bonjour $prenom !";
}

$prenom = "Zinédinne";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>08 - Fonctions</title>
</head>

<body>
    <h1>Les fonctions</h1>
    <h2>Dire bonjour</h2>
    <p><?= sayHello() ?></p>
    <p><?= saluer($prenom) ?></p>
</body>

</html>