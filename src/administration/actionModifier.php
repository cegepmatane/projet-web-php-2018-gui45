<?php
	if(!empty($_POST["modifier"]))
	{
		include_once"../dao/DAO.php";
		
		$jeuDao = new JeuDAO();
		
		$filtreJeux = array();
		$filtreJeux['nom'] = FILTER_SANITIZE_STRING;
		$filtreJeux['description'] = FILTER_SANITIZE_STRING;
		$filtreJeux['id'] = FILTER_SANITIZE_NUMBER_INT;
		$listeJeux = filter_var_array($_POST, $filtreJeux);
		
		$jeuDao->modifier($listeJeux);
		
		echo("<p>modifications appiquer</p>");
	}
?>
