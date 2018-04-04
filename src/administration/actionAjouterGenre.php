<?php
	include_once "connecterAdmin.php";
	if(!empty($_POST["ajouterGenre"]))
	{
		include_once "../dao/DAO.php";
		$jeuDao = new JeuDAO();

		$filtreGenres = array();
		$filtreGenres['nom'] = FILTER_SANITIZE_STRING;
		$filtreGenres['description'] = FILTER_SANITIZE_STRING;
		$listeGenre = filter_var_array($_POST, $filtreGenres);

		$jeuDao->ajouterGenre($listeGenre);
		echo("<p>genre ajouter</p>");
	}
?>
