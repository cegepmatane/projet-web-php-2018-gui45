<?php
	include_once "../configuration_dev.php";
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
		<form method="POST" action="actionConnexion">
      <div>
        <label for="motDePasse"><?=_("mot De Passe")?></label>
        <input type="password" name="motDePasse" id="motDePasse">
      </div>
  		<div>
        <label for="prenom"><?=_("prenom")?></label>
        <input type="text" name="prenom" id="prenom">
  		</div>
  			<input type="submit" value="soumettre">
    </form>
	</section>
	<p><a href="../accueil">accueil/</a>connexion</p>
</body>
</html>
