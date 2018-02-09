<?php
	$usager = 'root';
	$motdepasse = 'admin1';
	$hote = 'localhost';
	$base = 'basededonnertest';
	$dsn = 'mysql:dbname='.$base.';host=' . $hote;
	$basededonnees = new PDO($dsn, $usager, $motdepasse);
	
	$id = 1;//$_POST['ID']
	$basededonnees->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$requete = $basededonnees->prepare("SELECT * FROM test WHERE ID=".$id);
	$requete->execute();
	$jeux = $requete->fetch();

	?>
	
	<html lang="fr">
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<header>
		<h1>administration</h1>
		
	</header>
	
	<section id="">
		<header><h2>suprimer un jeu</h2></header>
		<form method="POST" action="actionSuprimer.php">
		<label>voulez vous vraiment suprimer <? //$jeux['nom'];?></label>
		<input type="hidden" value="<?4;//$id?>">
			<input type="submit" name="oui" value="oui">
			<input type="submit" name="non" value="non">
			
	</section>

</body>
</html>