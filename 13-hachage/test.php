<?php
$password = "secret123";
// Calculer un hash du mot de passe
$hash = password_hash($password, PASSWORD_DEFAULT);

echo $hash, PHP_EOL;

/* $hash = password_hash($password, PASSWORD_DEFAULT);

echo $hash, PHP_EOL;

$hash = password_hash($password, PASSWORD_ARGON2I);

echo $hash, PHP_EOL; */

// Vérifier un MDP

echo password_verify($password, $hash);