<?php
	include"actionAjouterUnJeu.php"
?>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<header>
		<h1>ajouter un jeu</h1>
		
	</header>
	
	<section id="formAjouter">
		<header><h2>ajout d'un jeu</h2></header>
		<form method="post" action="pageAdministration.php">
			<div>
				<label for="nom"></label>
				<input type="text" name="nom" id="nom">
			</div>
			<div>
				<label for="description"></label>
				<textarea name="description" id="description"></textarea>
			</div>
			<input type="hidden" value = "oui" name="ajouter">
			<input type="submit" value="valider">
		</form
	</section>
	<a href="pageAdministration.php">retour</a>

</body>
</html>