<?php

$SQL_EFFACER_JEU = "DELETE FROM jeuxVideo 	WHERE ID = ".$POST['id'];

include"baseDeDonner.php";
$requete = $baseDeDonnee->prepare($SQL_EFFACER_JEU);
$requete->execute();

?>