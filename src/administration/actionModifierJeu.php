<?php
	if(!empty($_POST["modifier"]))
	{
		include_once"../dao/DAO.php";
		
		$jeuDao = new JeuDAO();
		
		$filtreJeux = array();
		$filtreJeux['nom'] = FILTER_SANITIZE_STRING;
		$filtreJeux['description'] = FILTER_SANITIZE_STRING;
		$filtreJeux['id'] = FILTER_SANITIZE_NUMBER_INT;
		$filtreJeux['idGenre'] = FILTER_SANITIZE_NUMBER_INT;
		$listeJeux = filter_var_array($_POST, $filtreJeux);
		
		$jeuDao->modifier($listeJeux);
		
		echo("<p>modifications appiquer</p>");
		//var_dump($_FILES['illustration']);
		if(!empty($_FILES['illustration']))
		{
			$repertoire = "../illustration/";
			$source = $_FILES['illustration']['tmp_name'];
			$destination = $repertoire.$_FILES['illustration']['name'];
			//echo( "destination : " .$destination);
			//echo( "source : " .$source);
			//print_r($_FILES['illustration']['name']);
			if(move_uploaded_file($source, $destination)){
				
				$jeuDao->ajouterImage($repertoire . $_FILES['illustration']['name'], $_POST['id']);
				
			}
		}
	}
?>
