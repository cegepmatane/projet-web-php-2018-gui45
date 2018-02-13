<?php
	include"dao/DAO.php";
	$jeuDao = new JeuDAO();
	$id = $_GET['id'];
	$item = $jeuDao->lireJeu($id);
	
?>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>detail</title>
	</head>
	<body>
		<h1>page detail</h1>
		<p><?php print_r($item['description']) ?></p>
		<a href="liste.php">retour</a>
	</body>
</html>