<?php
	include_once "baseDeDonner.php";
	
	$id = $_GET['id'];
	$basededonnees->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$requete = $basededonnees->prepare("SELECT * FROM jeuxVideo WHERE ID = '". $id ."'" );
	$requete->execute();
	$jeu = $requete->fetch();
	//	foreach($jeux as $jeu)
	//{
	//	if($jeu[ID] == $id)
	//		$item=$jeu;
	//}
	?>
<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<header>
		<h1>ajouter un jeu</h1>
		
	</header>
	
	<section id="sectionFormulaire">
		<header><h2>ajout dun jeu</h2></header>
		<form method="POST" action="actionModifier.php">
			<div>
				<label for="nom"></label>
				<input type="text" name="nom" id="nom" value="<?=$jeu['Nom']?>">
			</div>
			<div>
				<label for="description"></label>
				<textarea name="description" id="description" ><?=$jeu['description']?></textarea>
			</div>
			<input type="hidden" name="id" id="id" value="<?=$jeu['ID']?>">
			<input type="submit" value="valider">
			
	</section>

</body>
</html>