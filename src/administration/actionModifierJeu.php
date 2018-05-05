<?php
	include_once "connecterAdmin.php";
	if(!empty($_POST["modifier"]))
	{
		include_once "../dao/DaoAdmin.php";

		$jeuDao = new DaoAdmin();

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
			$image = $repertoire . $_FILES['illustration']['name'];
			//print_r($image);

			if(move_uploaded_file($source, $destination)){
				$copy = imagecreatefrompng($image);
				list($width, $height) = getimagesize($image);
				//var_dump($copy);
				$miniature = imagecreatetruecolor($width/2, $height/2);
				imageCopyResized($miniature, $copy, 0,0,0,0,$width/2,$height/2,$width,$height);
				//var_dump($miniature);
				$miniatureImage = $repertoire."miniature".$_FILES['illustration']['name'];
				imagepng($miniature, $miniatureImage);
				unlink($image);//supression de fichier inutile
				$jeuDao->ajouterImage($miniatureImage, $_POST['id']);
			}
		}
	}
?>
