<?php
	if(!empty($_POST["nom"]))
	{
		include "lib/PHPMailer/class.phpmailer.php";
		require_once('lib/PHPMailer/class.smtp.php');
		
		$couriel = new PHPMailer(true);
		
		$couriel->From = "Desjardins-Marceau.Guillaume@cgmatane.qc.ca";
		$couriel->FromName = "serveur";
		$couriel->AddAddress($_POST["addresse"], $_POST["nom"]);
		$couriel->AddAddress($_POST["addresseEnvoyeur"], $_POST["nomEnvoyeur"]);
		$couriel->Subject = "message serveur";
		$couriel->msgHTML('<html><head></head><body><div><h3>'.$_POST["salutation"].'</h3><p>'.$_POST["contenu"].'</p></div></body></html>');
		
		$couriel->send();
	}
?>