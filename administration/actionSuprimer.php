
<?php
	$choi = $_POST['valider'];
	if($choi == "oui"){
		include_once "baseDeDonner.php";
		$id = $_POST['id'];
		//var_dump($choi);
		$SQL_EFFACER_JEU = "DELETE FROM jeuxVideo WHERE ID = '". $id ."'";
		$requete = $basededonnees->prepare($SQL_EFFACER_JEU);
		$requete->execute();
		echo("<p>jeu suprimer</p>");
	}
?>
