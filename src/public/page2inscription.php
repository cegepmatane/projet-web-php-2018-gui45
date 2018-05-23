<?php
	include_once "../configuration_dev.php";
	session_start();
	$filtreValeurs = array();
	$filtreValeurs['prenom'] = FILTER_SANITIZE_ENCODED;
	$filtreValeurs['nom'] = FILTER_SANITIZE_ENCODED;
	$filtreValeurs['couriel'] = FILTER_SANITIZE_ENCODED;
	$filtreValeurs['telephone'] = FILTER_SANITIZE_ENCODED;
	$filtreValeurs['adresse'] = FILTER_SANITIZE_ENCODED;
	$_SESSION['membre'] = filter_var_array($_POST, $filtreValeurs);
?>
<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<section id="">
		<h1><?=_("Projet Liste")?></h1>
		<h2><?=_("Inscription")?></h2>
		<form method="POST" action="actionInscription">
      <div>
        <label for="motDePasse"><?=_("mot De Passe")?></label>
        <input type="password" name="motDePasse" id="motDePasse">
      </div>
  		<div>
  			<label ><?=_("sexe")?></label>
        <label for="homme"><?=_("homme")?></label>
  			<input type="radio" name="sexe" id="homme" value="homme">
        <label for="femme"><?=_("femme")?></label>
        <input type="radio" name="sexe" id="femme" value="femme">
        <label for="autre"><?=_("autre")?></label>
        <input type="radio" name="sexe" id="autre" value="autre">
  		</div>
  			<input type="submit" value="soumettre">
    </form>
	</section>
	<p><a href="../accueil">accueil/</a>insciption</p>
</body>
</html>
