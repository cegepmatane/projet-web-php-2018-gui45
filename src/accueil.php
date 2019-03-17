<?php
	include_once "configuration_dev.php";
	include_once "public/connecter.php";
	include_once "dao/JeuDao.php";
	$dao = new JeuDao();

	if(!empty($_POST['recherche'])){
		//print_r($_POST);
		$recherche = filter_var($_POST['recherche'], FILTER_SANITIZE_STRING);
		$jeux = $dao->rechercherListe($recherche);
		//print_r($liste[0]['Nom']);
	}
	else {
		$jeux= $dao->lireListe();
	}
?>
<!doctype html>
<html lang="fr">
<head>
	<script type="text/javascript" src="lib/Ajax.js"></script>
	<script>
	function rechercher(){
		console.log("keyup");
		ajax = new Ajax();
		donnee = document.getElementById("recherche").value;
		if(donnee != "")
			ajax.executer("GET", "http://localhost/projet-web-php-2018-gui45/src/suggestion.php", "valeur="+donnee, recevoir);
		else
			document.getElementById("sugestions").innerHTML = "";
	}
	function afficher(valeur)
	{
		//console.log(valeur);
		document.getElementById("recherche").value = valeur;
	}
	function recevoir(ajax)
	{
		//console.log(ajax.responseText);
		document.getElementById("sugestions").innerHTML = ajax.responseText;

	}
	</script>
	<meta charset="utf-8">
	<title>accueil</title>
	<link rel="stylesheet" type="text/css" href="public/style.css">
</head>
	<body>
		<h1><?=_("Projet Liste")?></h1>
		<h2><?=_("accueil")?></h2>
		<div>
			<a href="public/liste"><?=_("Page liste")?></a>
			<a href="public/contact"><?=_("Page contact")?></a>
		</div>
		<a href="public/page1inscription"><?=_("s'inscrire")?></a>
		<a href="public/connexion"><?=_("se connecter")?></a>
		<div>
			<form method="post" action="" id="formulaire-recherche">
				<input type="text" name="recherche" id="recherche" onkeyup="rechercher()">
				<input type="submit" value="rechercher" name="action-recherche">
				<div id="sugestions" class="sugestions">
				</div>
			</form>

		</div>
		<h3><?=_("liste")?></h3>
		<?php foreach($jeux as $jeu){ ?>
		<div>
				<a href="public/detail/<?=$jeu->ID?>/"><?=$jeu->Nom?></a>
		</div>
	<?php } ?>
	</body>
</html>
