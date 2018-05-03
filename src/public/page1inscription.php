<?php
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
		<h2><?=_("Inscription")?></h2>
		<form method="POST" action="page2inscription.php">
      <div>
        <label for="prenom"><?=_("prenom")?></label>
        <input type="text" name="prenom" id="prenom">
      </div>
			<div>
				<label for="nom"><?=_("nom")?></label>
				<input type="text" name="nom" id="nom">
			</div>
			<div>
				<label for="couriel"><?=_("couriel")?></label>
				<input type="email" name="couriel" id="couriel">
			</div>
			<div>
				<label for="telephone"><?=_("telephone")?></label>
				<input type="text" name="telephone" id="telephone">
			</div>
      <div>
        <label for="adresse"><?=_("adresse")?></label>
        <input type="text" name="adresse" id="adresse">
      </div>
			<input type="submit" value="suivant">
    </form>
	</section>
	<a href="../accueil.php"><?=_("retour")?></a>
</body>
</html>
