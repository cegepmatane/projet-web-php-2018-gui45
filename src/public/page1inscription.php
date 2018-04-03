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
		<form method="POST" action="page2inscription.php">
      <div>
        <label for="prenom">prenom</label>
        <input type="text" name="prenom" id="prenom">
      </div>
			<div>
				<label for="nom">nom</label>
				<input type="text" name="nom" id="nom">
			</div>
			<div>
				<label for="couriel">couriel</label>
				<input type="email" name="couriel" id="couriel">
			</div>
			<div>
				<label for="telephone">telephone</label>
				<input type="text" name="telephone" id="telephone">
			</div>
      <div>
        <label for="adresse">adresse</label>
        <input type="text" name="adresse" id="adresse">
      </div>
			<input type="submit" value="suivant">
    </form>
	</section>
	<a href="../accueil.php">retour</a>
</body>
</html>
