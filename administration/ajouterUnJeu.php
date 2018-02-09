<?php
	include"baseDeDonner.php";
	
	$nom = $POST['nom'];
	$description = $POST['description'];
	
	$SQL_AJOUTER_JEU = "INSERT INTO jauxVideo(nom, description) VALUES('". $nom ."','". $description ."')";
	$basededonnees->exec($SQL_AJOUTER_JEU);
?>
