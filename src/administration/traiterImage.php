<?php 
if(!empty($_FILES['illustration']))
	{
		$repertoire = "../illustration/";
		$source = $_FILES['illustration']['tmp_name'];
		$destination = $repertoire.$_FILES['illustration']['name'];
		echo( "destination : " .$destination);
		echo( "source : " .$source);
		//print_r($_FILES['illustration']['name']);
		if(move_uploaded_file($source, $destination)){
			?>
			<img src="../illustration/<?=$_FILES['illustration']['name']?>">
			<?php
		}
	}
?>