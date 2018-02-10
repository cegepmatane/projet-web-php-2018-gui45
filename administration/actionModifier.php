
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<header>
		<h1>administration</h1>
		
	</header>
	<?php
		include_once "baseDeDonner.php";
		$basededonnees->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$SQL_EFFACER_JEU = "UPDATE jeuxvideo SET Nom = '". $_POST['nom'] ."', description = '". $_POST['description'] ."' WHERE jeuxvideo.ID = '". $_POST['id'] ."';";
		$requete = $basededonnees->prepare($SQL_EFFACER_JEU);
		$requete->execute();
	?>
	<a href="pageAdministration.php">retour</a>
</body>
</html>