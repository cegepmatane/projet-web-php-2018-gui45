<?php
	include_once"../dao/DAO.php";
	
	$id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
	$jeuDao = new JeuDAO();
	$jeu= $jeuDao->lireJeu($id);

	?>
	
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<header>
		<h1>administration</h1>
		
	</header>
	
	<section id="">
		<header><h2>suprimer un jeu</h2></header>
		<form method="POST" action="pageAdministration.php">
			<label>voulez vous vraiment suprimer <?=$jeu['Nom']?></label>
			<input type="hidden" name="id" value="<?=$id?>">
			<input type="submit" name="valider" value="oui">
			<input type="submit" name="valider" value="non">
		</form>
		<a href="pageAdministration.php">retour</a>
			
	</section>

</body>
</html>