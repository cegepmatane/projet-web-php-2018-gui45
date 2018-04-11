<?php
	include_once "connecter.php";
	include_once "../dao/DAO.php";
	$jeuDao = new JeuDAO();
	$genres = $jeuDao->lireGenres();
	//print_r($jeux);

?>
<html lang="fr">
	<head>
		<link type="text/JavaScript" href="../../lib/Ajax.js">
		<script>
		var precedent = null;
			function afficher(genre)
			{
				//console.log(genre);
				//genre.innerHTML = "allo"
				if(null != precedent)precedent.innerHTML = "";
				precedent = genre;
			}
		</script>
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
				<h3 onclick="afficher(<?=$genre['Nom']?>)"><?=$genre['Nom']?></h3>
				<div id="<?=$genre['Nom']?>"></div>
				<?php
			}?>
		</div>
		<a href="../accueil.php">retour</a>
	</body>
	<link rel="stylesheet" type="text/css" href="style.css">
</html>
