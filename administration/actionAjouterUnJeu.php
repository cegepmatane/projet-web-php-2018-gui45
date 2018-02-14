<?php
	
	if(!empty($_POST["ajouter"]))
	{
		include"../dao/DAO.php";
		$jeuDao = new JeuDAO();
		$jeuDao->ajouter($_POST['nom'], $_POST['description']);
		echo("<p>jeu ajouter</p>");
	}
?>

