<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="css/style.css">
</head>
    <form method="POST" action="/clients/connecter" />
		
		<label for="nom">Nom de connexion : </label>
		<input type="text" name="login" id="nom">
		<label for="nom">Mot de passe : </label>
		<input type="text" name="mdp" id="mdp">
		
		<input type="submit" value="se connecter">
    </form>
</html>
<?php /**PATH /var/www/html/project-e-commerce/laravel/resources/views/vue-connexion.blade.php ENDPATH**/ ?>