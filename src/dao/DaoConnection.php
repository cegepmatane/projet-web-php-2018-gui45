<?php
	include_once "baseDeDonner.php";
	class DaoConnection
	{
    function ajouterMembre($membre)
		{
			global $basededonnees;
			$SQL_AJOUTER_MEMBRE = "INSERT INTO membre(prenom, nom, couriel, telephone, adresse, motDePasse, sexe) VALUES(:prenom, :nom, :couriel, :telephone, :adresse, :motDePasse, :sexe)";
			$requete = $basededonnees->prepare($SQL_AJOUTER_MEMBRE);
			$requete->bindParam(':prenom', $membre['prenom'], PDO::PARAM_STR);
			$requete->bindParam(':nom', $membre['nom'], PDO::PARAM_STR);
			$requete->bindParam(':couriel', $membre['couriel'], PDO::PARAM_STR);
			$requete->bindParam(':telephone', $membre['telephone'], PDO::PARAM_STR);
			$requete->bindParam(':adresse', $membre['adresse'], PDO::PARAM_STR);
			$requete->bindParam(':motDePasse', $membre['motDePasse'], PDO::PARAM_STR);
			$requete->bindParam(':sexe', $membre['sexe'], PDO::PARAM_STR);
			$requete->execute();
		}
    function trouverMembre($membre)
    {
      global $basededonnees;
      $SQL_TROUVER_MEMBRE = "SELECT * FROM membre WHERE prenom = :prenom";
      $requete = $basededonnees->prepare($SQL_TROUVER_MEMBRE);
      $requete->bindParam(':prenom', $membre['prenom'], PDO::PARAM_STR);
      $requete->execute();
      $membreTrouve =$requete->fetch();
      if(strcmp($membre["motDePasse"],$membreTrouve["motDePasse"]) == 0)
      {
        session_start();
        $_SESSION['membre'] = $membreTrouve;
        //print_r($_SESSION['membre']);
      }
      else {
        echo("erreur avec le mot de passe ou le prenom");
      }
    }
  }
?>
