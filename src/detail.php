<?php
	include_once"dao/DAO.php";
	$jeuDao = new JeuDAO();
	$id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
	$item = $jeuDao->lireJeu($id);
	
?>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>detail</title>
	</head>
	<body>
		<h1>Projet Liste</h1>
		<h2>page detail</h2>
		<p><?php print_r($item['description']) ?></p>
		<a href="liste.php">retour</a>
	</body>
</html>