<?php
  include_once"../dao/DAO.php";

  $jeuDao = new JeuDAO();

  $filtreValeurs = array();
  $filtreValeurs['prenom'] = FILTER_SANITIZE_STRING;
  $filtreValeurs['nom'] = FILTER_SANITIZE_STRING;
  $filtreValeurs['couriel'] = FILTER_SANITIZE_STRING;
  $filtreValeurs['telephone'] = FILTER_SANITIZE_STRING;
  $filtreValeurs['adresse'] = FILTER_SANITIZE_STRING;
  $filtreValeurs['motDePasse'] = FILTER_SANITIZE_STRING;
  $filtreValeurs['sexe'] = FILTER_SANITIZE_STRING;
  $listeValeurs = filter_var_array($_POST, $filtreValeurs);
  //var_dump($listeValeurs);
  $jeuDao->ajouterMembre($listeValeurs);
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
      <a href="../accueil.html">retourner a l'accueil</a>
    </div>
	</section>

</body>
</html>
