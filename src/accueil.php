<?php
	include_once "configuration_dev.php";
	include_once "public/connecter.php";
	include_once "dao/DaoPublic.php";
	$dao = new DaoPublic();

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
		ajax.executer("GET", "http://localhost/projet-web-php-2018-gui45/src/suggestion.php", "valeur="+donnee, recevoir);
	}
	function afficher(valeur)
	{
		//console.log(valeur);
		document.getElementById("recherche").value = valeur;
	}
	function recevoir(ajax)
	{
		//console.log(ajax.responseText);
		document.getElementById("suggestion").innerHTML = ajax.responseText;
	}
	</script>
	<meta charset="utf-8">
	<title>accueil</title>
</head>
	<body>
		<h1><?=_("Projet Liste")?></h1>
		<h2><?=_("accueil")?></h2>
		<div>
			<a href="public/liste.php"><?=_("Page liste")?></a>
			<a href="public/contact.php"><?=_("Page contact")?></a>
		</div>
		<a href="public/page1inscription.php"><?=_("s'inscrire")?></a>
		<a href="public/connexion.php"><?=_("se connecter")?></a>
		<div>
			<form method="post" action="" id="formulaire-recherche">
				<input type="text" name="recherche" id="recherche" onkeyup="rechercher()">
				<input type="submit" value="rechercher" name="action-recherche">
			</form>
			<div id="suggestion">
			</div>
		</div>
		<h3><?=_("liste")?></h3>
		<?php foreach($jeux as $jeu){ ?>
		<div>
				<a href="public/detail.php?id=<?=$jeu['ID']?>"><?=$jeu['Nom']?></a>
		</div>
	<?php } ?>
	</body>
</html>
