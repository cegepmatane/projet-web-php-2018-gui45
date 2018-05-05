<?php
	include_once "connecterAdmin.php";
	if(!empty($_POST['validerGenre'])){

		if($_POST['validerGenre'] == "oui")
		{
			include_once "../dao/DaoAdmin.php";
			include_once "../dao/DaoPublic.php";
			$daoPublic = new DaoPublic();
			$daoAdmin = new DaoAdmin();
			$listeJeux = $daoPublic->lireGenreJeu($_POST['id']);
			if(count($listeJeux) < 1)
			{
				$genre = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
				$daoAdmin->suprimerGenre($genre);
				echo("<p>genre suprimer</p>");
			}
			else
			{
				echo("<p>veuiller dabord suprimer les jeux a l'interieur du genre</p>");
			}
		}
	}
?>
