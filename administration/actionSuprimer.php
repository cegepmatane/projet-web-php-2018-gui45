
<?php
	if(!empty($_POST['valider'])){
		if($_POST['valider'] == "oui")
		{
			include_once"../dao/DAO.php";
			
			$filtreJeux = array();
			$filtreJeux['id'] = FILTER_SANITIZE_NUMBER_INT;
			$jeu = filter_var_array($_POST, $filtreJeux);
			$jeuDao = new JeuDAO();
			$jeuDao->suprimer($jeu);
			
			echo("<p>jeu suprimer</p>");
		}
	}
?>