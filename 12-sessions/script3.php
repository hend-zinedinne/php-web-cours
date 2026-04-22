<?php
session_start();

//Supprimer le prénom de la session

unset($_SESSION['prenom']);

// Supprimer toutes les données de la session
// Cette ligne ne supprimde pas le fichier de session mais supprime les données contenues à l'intérieur.
$_SESSION = [];

// Supprimer le fichier de session

session_destroy();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Script 3</title>
</head>

<body>
    <h1>Script 3</h1>

</body>

</html>