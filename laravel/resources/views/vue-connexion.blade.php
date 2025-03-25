<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce</title>
    <link rel="stylesheet" href="css/style.css">
    <style>        
        h2 {
            text-align: center;
        }
    </style>
</head>
<body>
	<h2>Se connecter</h2>
	@if( !empty( $connexion_nok))
		<p>Connexion refusée</p>
	@endif
	<p>Veuillez vous saisier votre nom de connexion et votre mot de passe :</p>
	<form method="POST" action="/clients/connecter" />
   
		{{ csrf_field()}}
					
		<label for="nom">Nom de connexion : </label>
		<input type="text" name="login" id="nom">
		<label for="nom">Mot de passe : </label>
		<input type="text" name="mdp" id="mdp">
		<input type="submit" value="se connecter">
	</form>
</body>
</html>
