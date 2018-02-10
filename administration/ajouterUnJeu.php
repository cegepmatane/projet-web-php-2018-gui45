
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
		include"baseDeDonner.php";
		
		$nom = $_POST['nom'];
		$description = $_POST['description'];
		//var_dump($_POST);
		$SQL_AJOUTER_JEU = "INSERT INTO jeuxVideo(nom, description) VALUES('". $nom ."','". $description ."')";
		$basededonnees->exec($SQL_AJOUTER_JEU);
	?>
	<a href="pageAdministration.php">retour</a>

</body>
</html>

