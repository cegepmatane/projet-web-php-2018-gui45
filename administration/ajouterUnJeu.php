<?php
	$usager = 'root';
	$motdepasse = 'admin1';
	$hote = 'localhost';
	$base = 'jeux';
	$dsn = 'mysql:dbname='.$base.';host=' . $hote;
	$basededonnees = new PDO($dsn, $usager, $motdepasse);
	
	$nom = $POST['nom'];
	$description = $POST['description'];
	
	$SQL_AJOUTER_JEU = "INSERT INTO jauxVideo(nom, description) VALUES('". $nom ."','". $description ."')";
	$basededonnees->exec($SQL_AJOUTER_JEU);
?>
