<?php
	include_once "baseDeDonner.php";
	class JeuDAO
	{
		function lireListe()
		{
			global $basededonnees;
			$requete = $basededonnees->prepare("SELECT * FROM jeuxVideo");
			$requete->execute();
			$jeux = $requete->fetchAll();
			
			return $jeux;
		}
		function lireJeu($id)
		{
			global $basededonnees;
			$requete = $basededonnees->prepare("SELECT * FROM jeuxVideo WHERE ID = :id");
			$requete->bindParam(':id', $id, PDO::PARAM_INT);
			$requete->execute();
			$jeu = $requete->fetch();
			
			return $jeu;
		}
		function ajouter($jeux)
		{
			global $basededonnees;
			$SQL_AJOUTER_JEU = "INSERT INTO jeuxVideo(nom, description) VALUES(:nom,:description)";
			$requete = $basededonnees->prepare($SQL_AJOUTER_JEU);
			$requete->bindParam(':nom', $jeux['nom'], PDO::PARAM_STR);
			$requete->bindParam(':description', $jeux['description'], PDO::PARAM_STR);
			$requete->execute();
		}
		function suprimer($id)
		{
			global $basededonnees;
			$SQL_EFFACER_JEU = "DELETE FROM jeuxVideo WHERE ID = :id";
			$requete = $basededonnees->prepare($SQL_EFFACER_JEU);
			$requete->bindParam(':id', $id, PDO::PARAM_INT);
			$requete->execute();
		}
		function modifier($jeu)
		{
			global $basededonnees;
			$SQL_MODIFIER_JEU = "UPDATE jeuxvideo SET Nom = :nom, description = :description WHERE jeuxvideo.ID = :id;";
			$requete = $basededonnees->prepare($SQL_MODIFIER_JEU);
			$requete->bindParam(':nom', $jeu['nom'], PDO::PARAM_STR);
			$requete->bindParam(':description', $jeu['description'], PDO::PARAM_STR);
			$requete->bindParam(':id', $jeu['id'], PDO::PARAM_INT);
			$requete->execute();
		}
	}
?>