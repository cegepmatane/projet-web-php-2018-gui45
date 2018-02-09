<?php
	include"baseDeDonner.php";
	
	$nom = $_POST['nom'];
	$description = $_POST['description'];
	var_dump($_POST);
	$SQL_AJOUTER_JEU = "INSERT INTO jeuxVideo(nom, description) VALUES('". $nom ."','". $description ."')";
	$basededonnees->exec($SQL_AJOUTER_JEU);
?>
