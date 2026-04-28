<?php
session_start();

//Simuler la table utilisateurs

$utilisateurs = [
    [
        "login" => "alice@test.fr",
        "password" => "azerty123",
        "prenom" => "Alice",
        "nom" => "Pluhliciious"
    ],
    [
        "login" => "bob@test.fr",
        "password" => "secret456",
        "prenom" => "Bob",
        "nom" => "Blueball"
    ]
];

// Gérer la soumission du formulaire

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $login = trim($_POST["login"] ?? '');
    $password = trim($_POST["password"] ?? '');

    // rechercher dans le tableau si un utilisateur existe 

    $utilisateurTrouve = null;

    foreach ($utilisateurs as $utilisateur) {
        if ($utilisateur['login'] == $login and $utilisateur['password'] == $password) {
            $utilisateurTrouve = $utilisateur;
            break;
        }
    }

    print_r($utilisateurTrouve);

    if ($utilisateurTrouve !== null) {
        // Informer PHP que je suis connecté
        $_SESSION["utilisateur"] = [
            "login" => $utilisateurTrouve["login"],
            "prenom" => $utilisateurTrouve["prenom"],
            "nom" => $utilisateurTrouve['nom'],
            "password" => $utilisateurTrouve['password'],
        ];

        // On ne reste jamais sur la page du formulaire lorsque celui ci a été soumis.
        // Rediriger l'utilisateur vers une autre page du site

        header("Location:index.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>

<body>
    <h1>Connexion </h1>

    <form action="connexion.php" method="post">
        <div>
            <label for="login">Login</label>
            <input type="text" id="login" name="login">
        </div>

        <div>
            <label for="password">MDP</label>
            <input type="password" id="password" name="password">
        </div>

        <button type="submit">Se connecter</button>
    </form>
</body>

</html>