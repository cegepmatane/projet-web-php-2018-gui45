<?php
	include_once "../dao/DaoPublic.php";
	include_once "connecter.php";
	$jeuDao = new DaoPublic();
	$jeux = $jeuDao->lireGenreJeu($_GET['id']);
	//print_r($jeux);
?>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>liste jeux</title>
	</head>
	<body>
		<h1><?=_("Projet Liste")?></h1>
		<h2><?=_("liste de jeu")?></h2>
		<div>
			<h3><?=$_GET['nom']?></h3>
			<p><?=$_GET['description']?></p>
			<?php
			foreach($jeux as $jeu)
			{
				?>
				<a href="detail.php?id=<?=$jeu['ID']?>"><?=$jeu['Nom']?></a>
				<?php
			}?>
		</div>
		<a href="liste.php"><?=_("retour")?></a>
	</body>
	<link rel="stylesheet" type="text/css" href="style.css">
</html>
