<?php
	include_once "connecter.php";
	include_once "../dao/JeuDao.php";
	include_once "../configuration_dev.php";
	$jeuDao = new JeuDao();
	$id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
	$item = $jeuDao->lireJeu($id);
?>
<html lang="fr">
	<link rel="stylesheet" type="text/css" href="../../style.css">
	<head>
		<meta charset="utf-8">
		<title>detail</title>
	</head>
	<body>
		<h1><?=_("Projet Liste")?></h1>
		<h2><?=_("page detail")?></h2>
		<h3><?=$item->Nom?></h3>
		<img src="<?="../../".$item->image?>">
		<p><?php print_r($item->description) ?></p>
		<p>date de sortie : <?=$item->date?></p>
		<a href="../../../export/pdf.php?id=<?=$item->ID?>">pdf de cet item</a>
		<p><a href="../../../accueil">accueil/</a><a href="../../liste">liste/</a>details</p>
	</body>
</html>
