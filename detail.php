<?php
	$usager = 'root';
	$motdepasse = 'admin1';
	$hote = 'localhost';
	$base = 'jeux';
	$dsn = 'mysql:dbname='.$base.';host=' . $hote;
	$basededonnees = new PDO($dsn, $usager, $motdepasse);
	// je pourrais passer la description en url ,mais elle risque d'etre trop longue car je permet d'avoir 1000 charatere
	$basededonnees->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$requete = $basededonnees->prepare("SELECT * FROM jeuxVideo");
	$requete->execute();
	$jeux = $requete->fetchAll();
	//print_r($jeux);
	$id=(int)$_GET['id'];
	//print_r($id);
	foreach($jeux as $jeu)
	{
		if($jeu[ID] == $id)
			$item=$jeu;
	}
	//var_dump($item);
?>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>detail</title>
	</head>
	<body>
		<h1>page detail</h1>
		<p><?php print_r($item[description]) ?></p>
		<a href="liste.php">retour</a>
	</body>
</html>