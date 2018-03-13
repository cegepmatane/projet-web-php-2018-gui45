
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<header>
		<h1>ajouter un jeu</h1>
		
	</header>
	
	<section id="formAjouter">
		<header><h2>ajout d'un jeu</h2></header>
		<form method="post" action="pageAdministration.php">
			<div>
				<label for="nom">nom</label>
				<input type="text" name="nom" id="nom">
			</div>
			<input type="hidden" name="idGenre" id="idGenre" value=<?=$_GET['idGenre']?>>
			<div>
				<label for="description">description</label>
				<textarea name="description" id="description"></textarea>
			</div>
			<input type="hidden" value = "oui" name="ajouter">
			<input type="submit" value="valider">
		</form
	</section>
	<a href="pageAdministration.php">retour</a>

</body>
</html>