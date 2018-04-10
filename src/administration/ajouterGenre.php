<?php
	include_once "connecterAdmin.php";
 ?>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<header>
		<h1>Page administration</h1>

	</header>

	<section id="formAjouter">
		<header><h2>ajouter un genre</h2></header>
		<form method="post" action="pageAdministration.php">
			<div>
				<label for="nom">nom</label>
				<input type="text" name="nom" id="nom">
			</div>
			<div>
				<label for="description">description</label>
				<input type="text" name="description" id="description">
			</div>
			<input type="hidden" value = "oui" name="ajouterGenre">
			<input type="submit" value="valider">
		</form
	</section>
	<a href="pageAdministration.php">retour</a>

</body>
</html>
