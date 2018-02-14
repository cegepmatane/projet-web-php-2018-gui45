<?php
	if(!empty($_POST["modifier"]))
	{
		include_once "baseDeDonner.php";
		include_once"../dao/DAO.php";
		
		$jeuDao = new JeuDAO();
		$jeuDao->modifier($_POST['nom'], $_POST['description'], $_POST['id']);
		
		echo("<p>modifications appiquer</p>");
	}
?>
