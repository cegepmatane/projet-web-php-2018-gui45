<?php
if(!empty($_POST['nomGenre'])){
	include_once"../dao/DAO.php";
	$jeuDao = new JeuDAO();
	
	$filtreGenres = array();
	$filtreGenres['nomGenre'] = FILTER_SANITIZE_STRING;
	$filtreGenres['description'] = FILTER_SANITIZE_STRING;
	$filtreGenres['idGenre'] = FILTER_SANITIZE_NUMBER_INT;
	$listeGenres = filter_var_array($_POST, $filtreGenres);
	
	$jeuDao->modifierGenre($listeGenres);
			
	echo("<p>genre modifier</p>");
}
?>