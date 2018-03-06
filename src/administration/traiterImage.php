<?php 
	$repertoire = "../illustration/";
	$source = $_FILES['illustration']['tmp_name'];
	$destination = $repertoire.$_FILES['illustration']['name'];
	//print_r($_FILES['illustration']['name']);
	If(move_uploaded_file($source, $destination)){
	?>
	<img src="../illustration/<?php echo($_FILES['illustration']['name']) ?>">
	<?php
	}
?>