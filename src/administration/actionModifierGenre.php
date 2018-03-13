<?php
if(!empty($_POST['nomGenre'])){
	include_once"../dao/DAO.php";
	$jeuDao = new JeuDAO();
	
	$filtreJeux = array();
	$filtreJeux['nomGenre'] = FILTER_SANITIZE_STRING;
	$filtreJeux['idGenre'] = FILTER_SANITIZE_NUMBER_INT;
	$listeGenres = filter_var_array($_POST, $filtreJeux);
	
	$jeuDao->modifierGenre($listeGenres);
			
	echo("<p>genre modifier</p>");
}
?>