<?php 
	echo"FILES:";
	PRINT_R($_FILES)
	$source = $_FILES["illustration"]{"temp_img"};
	$illustration = $_SERVER["illustration"];
	
	if(move_uploader_file()$image, $illustration){
		?>
	<img src="illustration/<?$_FILES['illustration']['nom']?>">
	<?php
	}
	
?>