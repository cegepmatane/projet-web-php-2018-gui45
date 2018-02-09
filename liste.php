<?php
	include_once "baseDeDonner.php";
	
	$basededonnees->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$requete = $basededonnees->prepare("SELECT * FROM jeuxVideo");
	$requete->execute();
	$jeux = $requete->fetchAll();
	//print_r($jeux);
?>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>liste jeux</title>

	</head>
	<body>
		<h1>Liste jeux</h1>
		<div>
			<div id="MMO">
				<h2>MMO</h2>
				<?php
					foreach($jeux as $jeu)
					{
						if(strpos($jeu[description],'mmo') !==false){
							echo("<a href='detail.php?id=$jeu[ID]'>$jeu[Nom]</a>");
						}
					}
				?>
			</div>
			<div id="FPS">
				<h2>FPS</h2>
				<?php
					foreach($jeux as $jeu)
					{
						if(strpos($jeu[description],'fps') !==false){
							echo("<a href='detail.php?id=$jeu[ID]'>$jeu[Nom]</a>");
						}
					}
				?>
			</div>
		</div>
		
	</body>
	<link rel="stylesheet" type="text/css" href="style.css">
</html>