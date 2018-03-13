<?php
	include_once"../dao/DAO.php";
	$jeudao = new JeuDAO();
	$jeux = $jeudao->lireListe();
	
	include"baseDeDonner.php";
	include"actionModifierJeu.php";
	include"actionSuprimerJeu.php";
	include"actionAjouterJeu.php";
	
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
		<h3><a href="ajouterJeu.php">ajouter un jeu</a></h3>
		<?php
			foreach($jeux as $jeu)
			{
				//echo($jeu);
				?>
				<h3>
				<?=$jeu['Nom']?>
				<a href="suprimerJeu.php?id=<?=$jeu['ID']?>">suprimer</a>
				<a href="modifierJeu.php?id=<?=$jeu['ID']?>">modifier</a>
				</h3>
				<?php
			}
		?>
		
	</section>
</body>
</html>