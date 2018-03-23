<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<section id="">
		<h1>Projet Liste</h1>
		<h2>Inscription</h2>
		<form method="POST" action="actionInscription.php">
      <div>
        <label for="motDePasse">mot De Passe</label>
        <input type="password" name="motDePasse" id="motDePasse">
      </div>
  		<div>
  			<label >sexe</label>
        <label for="homme">homme</label>
  			<input type="radio" name="sexe" id="homme" value="homme">
        <label for="femme">femme</label>
        <input type="radio" name="sexe" id="femme" value="femme">
        <label for="autre">autre</label>
        <input type="radio" name="sexe" id="autre" value="autre">
  		</div>
      <div>
        <input type="hidden" name="prenom" value="<?=$_POST['prenom']?>">
        <input type="hidden" name="nom" value="<?=$_POST['nom']?>">
        <input type="hidden" name="couriel" value="<?=$_POST['couriel']?>">
        <input type="hidden" name="telephone" value="<?=$_POST['telephone']?>">
        <input type="hidden" name="adresse" value="<?=$_POST['adresse']?>">
      </div>
  			<input type="submit" value="soumettre">
    </form>
	</section>
	<a href="../accueil.html">retour</a>
</body>
</html>
