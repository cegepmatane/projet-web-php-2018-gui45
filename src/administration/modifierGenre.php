<?php
	include_once"../dao/DAO.php";
	$jeuDAO = new JeuDAO();
	$genre = $jeuDAO->LireGenre($_GET['id']);
	$jeux = $jeuDAO->lireGenreJeu($_GET['id']);
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
		<header><h2>options d'administration</h2></header>
		<form method="POST" action="pageAdministration.php">
			<div>
				<label for="nomGenre">nom</label>
				<input type="text" name="nomGenre" id="nom" value="<?=$genre['Nom']?>">
			</div>
			<input type="hidden" name="idGenre" id="id" value="<?=$genre['ID']?>">
			<input type="submit" value="valider">
		</form>
		<h3><a href="ajouterJeu.php?idGenre=<?=$genre['ID']?>">ajouter un jeu</a></h3>
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
	<a href="pageAdministration.php">retour</a>
</body>
</html>