<?php
	include "baseDeDonner.php";
	class JeuDAO
	{
		function lireListe()
		{
			global $basededonnees;
			//$basededonnees->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$requete = $basededonnees->prepare("SELECT * FROM jeuxVideo");
			$requete->execute();
			$jeux = $requete->fetchAll();
			
			return $jeux;
		}
		function lireJeu($id)
		{
			global $basededonnees;
			//$basededonnees->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$requete = $basededonnees->prepare("SELECT * FROM jeuxVideo WHERE ID = '".$id."'");
			$requete->execute();
			$jeu = $requete->fetch();
			
			return $jeu;
		}
		function ajouter($jeu)
		{
			
		}
		function suprimer($jeu)
		{
			
		}
		function modifier($jeu)
		{
			
		}
	}
?>