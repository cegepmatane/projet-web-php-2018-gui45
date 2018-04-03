<?php
  include_once"../dao/DAO.php";
  session_start();
  $jeuDao = new JeuDAO();

  $filtreValeurs = array();
  $filtreValeurs['motDePasse'] = FILTER_SANITIZE_ENCODED;
  $filtreValeurs['sexe'] = FILTER_SANITIZE_ENCODED;
  $listeValeurs = filter_var_array($_POST, $filtreValeurs);
  //var_dump($listeValeurs);
  $_SESSION['membre'] = array_merge($_SESSION['membre'], $listeValeurs);
  //print_r($_SESSION['membre']);
  $jeuDao->ajouterMembre($_SESSION['membre']);
?>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<section id="">
		<h1>Projet Liste</h1>
		<h2>Inscription</h2>
	  <p>Inscription terminer avec succes</p>
    <div>
      <a href="../accueil.php">retourner a l'accueil</a>
    </div>
	</section>

</body>
</html>
