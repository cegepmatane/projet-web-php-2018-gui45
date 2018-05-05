
<?php
	include_once "connecterAdmin.php";
	if(!empty($_POST['valider'])){
		if($_POST['valider'] == "oui")
		{
			include_once "../dao/DaoAdmin.php";

			$jeu = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
			$jeuDao = new DaoAdmin();
			$jeuDao->suprimer($jeu);

			echo("<p>jeu suprimer</p>");
		}
	}
?>
