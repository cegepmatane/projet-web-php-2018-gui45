<?php
	include_once "baseDeDonner.php";
	include"actionSuprimer.php";
	$id = $_GET['id'];
	$basededonnees->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$requete = $basededonnees->prepare("SELECT * FROM jeuxVideo WHERE ID = '". $id ."'" );
	$requete->execute();
	$jeu = $requete->fetch();

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
		<form method="POST" action="">
			<label>voulez vous vraiment suprimer <?=$jeu['Nom']?></label>
			<input type="hidden" name="id" value="<?=$id?>">
			<input type="submit" name="valider" value="oui">
			<input type="submit" name="valider" value="non">
		</form>
		<a href="pageAdministration.php">retour</a>
			
	</section>

</body>
</html>