
<?php
	if(!empty($_POST['valider'])){
		if($_POST['valider'] == "oui")
		{
			include_once"../dao/DAO.php";
			
			$id = $_POST['id'];
			$jeuDao = new JeuDAO();
			$jeuDao->suprimer($id);
			
			echo("<p>jeu suprimer</p>");
		}
	}
?>