<?php
	include_once"../dao/DAO.php";
	$jeudao = new JeuDAO();
	$jeux = $jeudao->lireListe();
	
	include"baseDeDonner.php";
	include"actionModifier.php";
	include"actionSuprimer.php";
	include"actionAjouterUnJeu.php";
	
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
		<h3><a href="ajouterUnJeu.php">ajouter un jeu</a></h3>
		<?php
			foreach($jeux as $jeu)
			{
				//echo($jeu);
				?>
				<h3>
				<?=$jeu['Nom']?>
				<a href="suprimer.php?id=<?=$jeu['ID']?>">suprimer</a>
				<a href="modifierJeu.php?id=<?=$jeu['ID']?>">modifier</a>
				</h3>
				<?php
			}
		?>
		
	</section>

</body>
</html>