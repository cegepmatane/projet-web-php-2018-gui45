<?php
	$usager = 'root';
	$motdepasse = 'admin1';
	$hote = 'localhost';
	$base = 'jeux';
	$dsn = 'mysql:dbname='.$base.';host=' . $hote;
	$basededonnees = new PDO($dsn, $usager, $motdepasse);
?>