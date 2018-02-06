<?php
	$usager = 'root';
	$motdepasse = 'admin1';
	$hote = 'localhost';
	$base = 'jeux';
	$dsn = 'mysql:dbname='.$base.';host=' . $hote;
	$basededonnees = new PDO($dsn, $usager, $motdepasse);
	
	$nom = $POST['nom'];
	$nom = $POST['description'];
	
	$SQL_AJOUTER_JEU = "INSERT INTO jeuxVideo(nom, description) 
	VALUES('". $_POST['nom'] ."','". $_POST['description'])"';
	echo $SQL_AJOUTER_JEU;
	$basededonnees->exec($SQL_AJOUTER_JEU);
	