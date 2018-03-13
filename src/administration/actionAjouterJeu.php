<?php
	
	if(!empty($_POST["ajouter"]))
	{
		include_once"../dao/DAO.php";
		$jeuDao = new JeuDAO();
		
		$filtreJeux = array();
		$filtreJeux['nom'] = FILTER_SANITIZE_STRING;
		$filtreJeux['description'] = FILTER_SANITIZE_STRING;
		$filtreJeux['idGenre'] = FILTER_SANITIZE_NUMBER_INT;
		$listeJeux = filter_var_array($_POST, $filtreJeux);
		
		$jeuDao->ajouter($listeJeux);
		echo("<p>jeu ajouter</p>");
	}
?>

