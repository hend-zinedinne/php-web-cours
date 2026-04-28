<?php
session_start();

// supprimer dans la session les informations liées à la connexion de l'utilisateur
// --> La clé 'utilisateur' dans $_SESSION

unset($_SESSION["utilisateur"]);

//$_SESSION = [];
//session_destroy(); // Supprime le fichier de session sur le serveur

// Supprimer le cookie de session sur le navigateur


header("Location: index.php");
exit;
?>