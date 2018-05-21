<?php
	include_once "connecterAdmin.php";
	include_once "../dao/GenreDao.php";
	include_once "../dao/JeuDao.php";
	$genreDao = new GenreDao();
	$jeuDao = new JeuDao();
	$genre = $genreDao->LireGenre($_GET['id']);
	$jeux = $jeuDao->lireGenreJeu($_GET['id']);
	//var_dump($genre);
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

	<section id="formAjouter">
		<header><h2>modifier un genre</h2></header>
		<form method="POST" action="pageAdministration.php">
			<div>
				<label for="nomGenre">nom</label>
				<input type="text" name="nomGenre" id="nom" value="<?=$genre->Nom?>">
			</div>
			<div>
				<label for="description">description</label>
				<input type="text" name="description" id="description" value="<?=$genre->description?>">
			</div>
			<input type="hidden" name="idGenre" id="id" value="<?=$genre->ID?>">
			<input type="submit" value="valider">
		</form>
		<h3><a href="ajouterJeu.php?idGenre=<?=$genre->ID?>">ajouter un jeu</a></h3>
		<?php
			foreach($jeux as $jeu)
				{
					?>
					<h3>
					<?=$jeu['Nom']?>
					<a href="suprimerJeu.php?id=<?=$jeu['ID']?>">suprimer</a>
					<a href="modifierJeu.php?id=<?=$jeu['ID']?>">modifier</a>
					</h3>
					<?php
				}?>
	</section>
	<p><a href="pageAdministration.php">pageAdministration/</a>modifierGenre</p>
</body>
</html>
