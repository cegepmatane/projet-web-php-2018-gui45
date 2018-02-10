
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
		$id = $_POST['id'];
		$choi = $_POST['valider'];
		//var_dump($choi);
		if($choi == "oui")
		{
			$SQL_EFFACER_JEU = "DELETE FROM jeuxVideo WHERE ID = '". $id ."'";
			$requete = $basededonnees->prepare($SQL_EFFACER_JEU);
			$requete->execute();
			echo("<p>jeu suprimer</p>");
		}else
			echo("<p>jeu non suprimer</p>");
	?>
	<a href="pageAdministration.php">retour</a>

</body>
</html>

