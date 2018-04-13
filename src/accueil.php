<?php
	include_once "public/connecter.php";
	include_once "dao/DAO.php";
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
	<meta charset="utf-8">
	<title>accueil</title>
</head>
	<body>
		<h1>Projet Liste</h1>
		<h2>accueil</h2>
		<div>
			<a href="public/liste.php">Page liste</a>
			<a href="public/contact.php">Page contact</a>
		</div>
		<a href="public/page1inscription.php">s'inscrire</a>
		<a href="public/connexion.php">se connecter</a>
		<div>
			<form method="post" action="" id="formulaire-recherche">
				<input type="text" name="recherche" id="recherche" value="<?=$_POST['recherche']?>">
				<input type="submit" value="rechercher" name="action-recherche">
			</form>
		</div>
		<?php foreach($jeux as $jeu){ ?>
		<div>
				<a href="public/detail.php?id=<?=$jeu['ID']?>"><?=$jeu['Nom']?></a>
		</div>
	<?php } ?>
	</body>
</html>
