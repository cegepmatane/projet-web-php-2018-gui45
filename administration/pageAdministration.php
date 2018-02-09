<?php
	include"baseDeDonner.php";
	
	$basededonnees->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$requete = $basededonnees->prepare("SELECT * FROM jeuxVideo");
	$requete->execute();
	$jeux = $requete->fetchAll();
?>
<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<header>
		<h1>Page administration</h1>
		
	</header>
	
	<section id="formAjouter">
		<header><h2>options d'administration</h2></header>
		
		<?php
			foreach($jeux as $jeu)
			{
				//echo($jeu);
				?>
				<h3>
				<?=$jeu['Nom']?>
				<a href="suprimer.php?id=<?=$jeu['ID']?>">suprimer</a>
				<a href="modifierJeu.php?id=<?=$jeu['ID']?>">modifier</a>
				</h3>
				<?php
			}
		?>
		
	</section>

</body>
</html>