<?php
	if(!empty($_POST["modifier"]))
	{
		include_once "baseDeDonner.php";
		$basededonnees->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$SQL_EFFACER_JEU = "UPDATE jeuxvideo SET Nom = '". $_POST['nom'] ."', description = '". $_POST['description'] ."' WHERE jeuxvideo.ID = '". $_POST['id'] ."';";
		$requete = $basededonnees->prepare($SQL_EFFACER_JEU);
		$requete->execute();
		echo("<p>modifications appiquer</p>");
	}
?>
