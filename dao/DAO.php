<?php
	include "baseDeDonner.php";
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
			$requete = $basededonnees->prepare("SELECT * FROM jeuxVideo WHERE ID = '".$id."'");
			$requete->execute();
			$jeu = $requete->fetch();
			
			return $jeu;
		}
		function ajouter($nom, $description)
		{
			global $basededonnees;
			$SQL_AJOUTER_JEU = "INSERT INTO jeuxVideo(nom, description) VALUES('". $nom ."','". $description ."')";
			$basededonnees->exec($SQL_AJOUTER_JEU);
		}
		function suprimer($id)
		{
			global $basededonnees;
			$SQL_EFFACER_JEU = "DELETE FROM jeuxVideo WHERE ID = '". $id ."'";
			$requete = $basededonnees->prepare($SQL_EFFACER_JEU);
			$requete->execute();
		}
		function modifier($nom, $description, $id)
		{
			global $basededonnees;
			$SQL_MODIFIER_JEU = "UPDATE jeuxvideo SET Nom = '". $nom ."', description = '". $description ."' WHERE jeuxvideo.ID = '". $id ."';";
			$requete = $basededonnees->prepare($SQL_MODIFIER_JEU);
			$requete->execute();
		}
	}
?>