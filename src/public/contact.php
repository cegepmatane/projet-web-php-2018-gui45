<?php
	include_once "connecter.php";
	include_once "configuration_dev.php";
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
		<form>

			<div>
				<label for=""><?=_("nom")?></label>
				<input type="" name="" id="">
			</div>
			<div>
				<label for=""><?=_("addresse")?></label>
				<input type="" name="" id="">
			</div>
			<div>
				<label for=""><?=_("telephone")?></label>
				<input type="" name="" id="">
			</div>

			<input type="submit" value="valider">

	</section>
	<a href="../accueil.php"><?=_("retour")?></a>
</body>
</html>
