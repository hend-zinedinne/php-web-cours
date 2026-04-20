<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les formulaires</title>
</head>

<body>
    <h1>Les formulaires</h1>


    <form action="traitement.php" method="POST">
        <div>
            <label for="champ-prenom">Prénom : </label>
            <input type="text" id="champ-prenom" name="prenom" placeholder="Prénom : " />
        </div>

        <div>
            <label for="champ-password">Mot de passe : </label>
            <input type="password" id="champ-password" name="password" placeholder="Mot de passe... : " />
        </div>
        <div>
            <label for="champ-email">Email : </label>
            <input type="email" id="champ-email" name="email" placeholder="Email..." />
        </div>

        <h2>Listes déroulantes</h2>
        <select name="pays" id="liste-pays">
            <option value="">Saisir un pays</option>
            <option value="france">France</option>
            <option value="italie">Italie</option>
            <option value="espagne">Espagne</option>
            <option value="suisse">Suisse</option>
            <option value="allemagne">Allemagne</option>
            <option value="portugal">Portugal</option>
        </select>

        <h2>Boutons Radio (choix unique)</h2>

        <label>
            <input type="radio" name="radio-civilite" value="M" checked /> Monsieur
        </label>

        <label>
            <input type="radio" name="radio-civilite" value="Mme" checked /> Madame
        </label>

        <h2>Cases à cocher (choix multiples)</h2>
        <label>
            <input type="checkbox" name="sport" value="foot" /> Football
        </label>

        <label>
            <input type="checkbox" name="musique" value="musique" /> Guitare
        </label>

        <h2>Autres types de champs</h2>
        <textarea name="description" id="description" rows="6" placeholder="Description..."></textarea>
        <input type="number" name="age" id="age" min="1" max="120">
        <input type="date" name="anniversaire">
        <h2>Bouton de soumission</h2>

        <button type="submit">Envoyer</button>

    </form>
</body>

</html>