<?php
  include_once "../dao/DaoConnection.php";
  $jeuDao = new DaoConnection();
  $filtreValeurs = array();
  $filtreValeurs['motDePasse'] = FILTER_SANITIZE_ENCODED;
  $filtreValeurs['prenom'] = FILTER_SANITIZE_ENCODED;
  $listeValeurs = filter_var_array($_POST, $filtreValeurs);
  $jeuDao->trouverMembre($listeValeurs);
//  print_r($_SESSION['membre']);
?>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<section id="">
		<h1>Projet Liste</h1>
		<h2>connexion</h2>
	  <p>connexion terminer</p>
    <div>
      <a href="../accueil.php">retourner a l'accueil</a>
    </div>
	</section>

</body>
</html>
