<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Choisir une mdp</title>
</head>
<body>
    <h1>Choisissez un mot de passe</h1>
    <form action="decrypt_password.php" method="post">
        <label for="password">Mot de passe :</label>
         <input type="text" id="password" name="password">
         <label for="password">Mot de passe chiffré :</label>
         <input type="password" id="password-crypted" name="password-crypted">
        <button type="submit">Valider</button>
    </form>
</body>
</html>