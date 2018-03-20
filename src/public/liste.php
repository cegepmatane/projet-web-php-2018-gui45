<?php
	include_once"../dao/DAO.php";
	$jeuDao = new JeuDAO();
	$genres = $jeuDao->lireGenres();
	//print_r($jeux);
?>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>liste jeux</title>

	</head>
	<body>
		<h1>Projet Liste</h1>
		<h2>liste de genres</h2>
		<div>
			<?php
			foreach($genres as $genre)
			{
				?>
				<h3>
				<a href="listeItem.php?id=<?=$genre['ID']?>&nom=<?=$genre['Nom']?>&description=<?=$genre['description']?>"><?=$genre['Nom']?></a>
				</h3>
				<?php
			}?>
		</div>
		<a href="../accueil.html">retour</a>
	</body>
	<link rel="stylesheet" type="text/css" href="style.css">
</html>