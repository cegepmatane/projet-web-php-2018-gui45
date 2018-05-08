
<?php
	include_once "connecterAdmin.php";
	if(!empty($_POST['valider'])){
		if($_POST['valider'] == "oui")
		{
			include_once "../dao/JeuDao.php";

			$jeu = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
			$jeuDao = new JeuDao();
			$jeuDao->suprimer($jeu);

			echo("<p>jeu suprimer</p>");
		}
	}
?>
