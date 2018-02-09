<?php
	include"baseDeDonner.php";
	$SQL_AJOUTER_JEU = "ALTER TABLE test CHANGE nom ". $POST['nom'] ." TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL";
	$requete = $baseDeDonnee->prepare($SQL_EFFACER_JEU);
	$requete->execute();
?>