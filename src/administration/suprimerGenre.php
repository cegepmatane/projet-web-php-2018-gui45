<?php
	include_once "connecterAdmin.php";
	include_once "../dao/GenreDao.php";

	$id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
	$jeuDao = new GenreDao();
	$genre= $jeuDao->lireGenre($id);

	?>

<html lang="fr">
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<header>
		<h1>Page administration</h1>

	</header>

	<section id="">
		<header><h2>suprimer un genre</h2></header>
		<form method="POST" action="pageAdministration.php">
			<label>voulez vous vraiment suprimer <?=$genre->Nom?></label>
			<input type="hidden" name="id" value="<?=$id?>">
			<input type="submit" name="validerGenre" value="oui">
			<input type="submit" name="validerGenre" value="non">
		</form>
		<p><a href="pageAdministration.php">pageAdministration/</a>suprimerGenre</p>
	</section>

</body>
</html>
