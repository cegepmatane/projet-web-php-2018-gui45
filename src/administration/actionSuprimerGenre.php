
<?php
	if(!empty($_POST['validerGenre'])){
		if($_POST['validerGenre'] == "oui")
		{
			include_once"../dao/DAO.php";
			
			$genre = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
			$jeuDao = new JeuDAO();
			$jeuDao->suprimerGenre($genre);
			
			echo("<p>genre suprimer</p>");
		}
	}
?>