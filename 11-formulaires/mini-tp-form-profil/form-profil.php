<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="card-form-profil">
        <h2 class="titre">Créer un profil</h2>
        <form action="#" method="POST">

            <div class="champ">
                <label for="champ-pseudo">Pseudo <span class="rouge">*</span> :</label>
                <input type="text" id="champ-pseudo" name="pseudo" placeholder="Votre pseudonyme :" class="input" />
                <p class="disclaimer">3 caractères minimum.</p>
            </div>

            <div class="champ">
                <label for="champ-email">Email <span class="rouge">*</span> :</label>
                <input type="email" id="champ-email" name="email" placeholder="votre@email.fr" class="input" />
            </div>

            <div class="champ">
                <label for="liste-statut">Statut <span class="rouge">*</span> :</label>
                <select name="statut" id="liste-statut" class="input">
                    <option value="">Sélectionnez un statut</option>
                    <option value="admin">Administratif</option>
                    <option value="enseignant">Enseignant</option>
                    <option value="etudiant">Etudiant</option>
                </select>
            </div>

            <p class="asterisk-disclaimer">Le caractère <span class='rouge'>*</span> indique un champ obligatoire.</p>

            <button type="submit" class="bouton-submit">Créer profil</button>
        </form>
    </div>
</body>

</html>