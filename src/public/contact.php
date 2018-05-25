<?php
	include_once "connecter.php";
	include_once "../configuration_dev.php";
 ?>
<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<section id="">
		<h1><?=_("Projet Liste")?></h1>
		<h2><?=_("page contact")?></h2>
		<form action="../accueil.php" method="post">

			<div>
				<label for="nom"><?=_("nom")?></label>
				<input type="text" name="nom" id="nom">
			</div>
			<div>
				<label for="addresse"><?=_("addresse")?></label>
				<input type="email" name="addresse" id="addresse">
			</div>
			<div>
				<label for="nomEnvoyeur"><?=_("nom envoyeur")?></label>
				<input type="text" name="nomEnvoyeur" id="nomEnvoyeur">
			</div>
			<div>
				<label for="addresseEnvoyeur"><?=_("addresse envoyeur")?></label>
				<input type="email" name="addresseEnvoyeur" id="addresseEnvoyeur">
			</div>
			<div>
				<label for="contenu"><?=_("contenu")?></label>
				<input type="text" name="contenu" id="contenu">
			</div>
			<div>
				<label ><?=_("salutation")?></label>
				<label for="bonjour"><?=_("bonjour")?></label>
				<input type="radio" name="salutation" id="bonjour" value="bonjour">
				<label for="salut"><?=_("salut")?></label>
				<input type="radio" name="salutation" id="salut" value="salut">
			</div>
			<input type="submit" value="valider">

	</section>
	<p><a href="../accueil.php">accueil/</a>contact</p>
</body>
</html>
