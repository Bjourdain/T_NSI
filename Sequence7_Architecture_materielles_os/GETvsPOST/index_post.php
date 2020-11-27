<!DOCTYPE html>
<html>
	<head>
		<title>GET vs POST</title>
		<meta charset="UTF-8">
		<link rel="icon" type="image/png" href="favicon.png"/>
	</head>
	<body>
		<h1>UN SITE POUR DES TESTS</h1>
		<p>Passage de paramètres d'un navigateur à un site Web</p>
		<p>Le programme de traitement en langage PHP est sur le serveur.</p>
		<p>Vous venez de recevoir la ressource demandée au format HTML.</p>
		<?php
			//Si les paramètres existent
			if (isset($_POST['nom']) AND isset($_POST['password']) AND isset($_POST['nombre']))
			{
				$Nom = $_POST['nom'];
				$Password = $_POST['password'];
				$nb = $_POST['nombre'];
				echo 'Bonjour ' . $Nom . ' <br />';
				//On force la conversion en nombre entier
				$nb = (int) $nb;

				//Le nombre doit être compris entre 1 et 50
				if ($nb >= 1 AND $nb <= 50) 
				{	
					for ($i = 0 ; $i < $nb ; $i++)
					{
						echo 'Votre mot de passe est : ' . $Password . ' !<br />';
					}
				}
			}
			else
			{
			   echo 'Il faut renseigner un nom, un mot de passe et un nombre de répétitions !' . ' !<br />';
			   echo 'sous la forme ?nom=xxxx&password=yyyy&nombre=z';
			}
?>
	</body>
</html> 
