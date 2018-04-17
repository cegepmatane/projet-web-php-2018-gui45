<?php
include_once "dao/DaoPublic.php";
$dao = new DaoPublic();
$recherche = filter_var($_GET['valeur'], FILTER_SANITIZE_STRING);
$jeux = $dao->rechercherSuggestion($recherche);
?>

<ul>
<?php foreach($jeux as $jeu){ ?>
	<li><a href="#" onclick="afficher('<?=$jeu['Nom']?>')"><?=$jeu['Nom']?></a></li>
<?php } ?>
</ul>
