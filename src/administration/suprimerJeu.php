<?php
	include_once "connecterAdmin.php";
	include_once "../dao/JeuDao.php";

	$id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
	$jeuDao = new JeuDao();
	$jeu= $jeuDao->lireJeu($id);

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

	<section id="">
		<header><h2>suprimer un jeu</h2></header>
		<form method="POST" action="pageAdministration.php">
			<label>voulez vous vraiment suprimer <?=$jeu->Nom?></label>
			<input type="hidden" name="id" value="<?=$id?>">
			<input type="submit" name="valider" value="oui">
			<input type="submit" name="valider" value="non">
		</form>
		<p><a href="pageAdministration.php">pageAdministration/</a>suprimerJeu</p>
	</section>

</body>
</html>
