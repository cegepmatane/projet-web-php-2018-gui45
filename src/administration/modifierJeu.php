<?php
	include_once"../dao/DAO.php";
	$jeuDao = new JeuDAO();
	$id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
	$jeu = $jeuDao->lireJeu($id);
	
	?>
<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<header>
		<h1>Page administration</h1>
	</header>
	
	<section id="sectionFormulaire">
		<header><h2>modifier un jeu</h2></header>
		<form method="POST" action="pageAdministration.php">
			<div>
				<label for="nom">nom</label>
				<input type="text" name="nom" id="nom" value="<?=$jeu['Nom']?>">
			</div>
			<div>
				<label for="idGenre">idGenre</label>
				<input type="number" name="idGenre" id="idGenre" value="<?=$jeu['idGenre']?>">
			</div>
			<div>
				<label for="description">description</label>
				<textarea name="description" id="description" ><?=$jeu['description']?></textarea>
			</div>
			<input type="hidden" name="id" id="id" value="<?=$jeu['ID']?>">
			<input type="hidden" value = "oui" name="modifier">
			<input type="submit" value="valider">
			
	</section>
	<a href="pageAdministration.php">retour</a>

</body>
</html>