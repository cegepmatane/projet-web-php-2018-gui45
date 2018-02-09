<?php
	include"baseDeDonner.php";
	
	$id = $_POST['ID']
	$basededonnees->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$requete = $basededonnees->prepare("SELECT * FROM jeuxVideo WHERE ID='"$id"' ");
	$requete->execute();
	$jeux = $requete->fetchAll();
	//	foreach($jeux as $jeu)
	//{
	//	if($jeu[ID] == $id)
	//		$item=$jeu;
	//}
	?>
	
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<header>
		<h1>ajouter un jeu</h1>
		
	</header>
	
	<section id="">
		<header><h2>ajout dun jeu</h2></header>
		<form method="POST" action="actionModifier.php">
			<div>
				<label for="nom"></label>
				<input type="text" name="nom" id="nom" value="<?php $item[nom]?>">
			</div>
			<div>
				<label for="description"></label>
				<textarea name="description" id="description" value="<?php $item[description]?>">
			</div>
			<input type="hidden" id="id" value="<?php $item[ID];?>">
			<input type="submit" value="valider">
			
	</section>

</body>
</html>