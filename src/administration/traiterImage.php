<?php 
	echo"FILES:";
	PRINT_R($_FILES);
	$source = $_FILES["illustration"]{"temp_img"};
	$illustration = $_SERVER["illustration"];
	
	if(move_uploaded_file($image, $illustration)){
		?>
	<img src="Illustration/<?$_FILES['illustration']['nom']?>">
	<?php
	}
	
?>