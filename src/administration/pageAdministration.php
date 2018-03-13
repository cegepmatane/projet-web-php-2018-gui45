<?php
	include_once"../dao/DAO.php";
	
	include"baseDeDonner.php";
	include"actionModifierJeu.php";
	include"actionSuprimerJeu.php";
	include"actionAjouterJeu.php";
	include"actionModifierGenre.php";
	include"actionSuprimerGenre.php";
	include"actionAjouterGenre.php";
	
	$jeudao = new JeuDAO();
	$genres = $jeudao->lireGenres();
	$jeux = array();
	$jeux['1'] = $jeudao->lireGenre(1);
	$jeux['2'] = $jeudao->lireGenre(2);
	$jeux['3'] = $jeudao->lireGenre(3);
	$jeux['4'] = $jeudao->lireGenre(4);
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
		<h3><a href="ajouterGenre.php">ajouter un genre</a></h3>
		<?php
			foreach($genres as $genre)
			{
				//echo($jeu);
				?>
				<h3>
				<?=$genre['Nom']?>
				<a href="suprimerGenre.php?id=<?=$genre['ID']?>">suprimer</a>
				<a href="modifierGenre.php?id=<?=$genre['ID']?>">modifier</a>
				</h3>
				<?php
			}
		?>
	</section>
</body>
</html>