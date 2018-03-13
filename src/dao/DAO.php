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
		function lireGenres()
		{
			global $basededonnees;
			$requete = $basededonnees->prepare("SELECT * FROM genre");
			$requete->execute();
			$genres = $requete->fetchAll();
			
			return $genres;
		}
		function lireGenre($id)
		{
			global $basededonnees;
			$requete = $basededonnees->prepare("SELECT * FROM genre WHERE ID=:id");
			$requete->bindParam(':id', $id, PDO::PARAM_INT);
			$requete->execute();
			$genre = $requete->fetch();
			
			return $genre;
		}
		function lireGenreJeu($id)
		{
			global $basededonnees;
			$requete = $basededonnees->prepare("SELECT * FROM jeuxVideo WHERE idGenre=:id");
			$requete->bindParam(':id', $id, PDO::PARAM_INT);
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
			//$SQL_AJOUTER_JEU = "INSERT INTO jeuxVideo(nom, description, idGenre) VALUES('".$jeux['nom']."','".$jeux['description']."','".$jeux['idGenre']."')";
			$SQL_AJOUTER_JEU = "INSERT INTO jeuxVideo(nom, description, idGenre) VALUES(:nom,:description,:idGenre)";
			$requete = $basededonnees->prepare($SQL_AJOUTER_JEU);
			$requete->bindParam(':nom', $jeux['nom'], PDO::PARAM_STR);
			$requete->bindParam(':description', $jeux['description'], PDO::PARAM_STR);
			$requete->bindParam(':idGenre', $jeux['idGenre'], PDO::PARAM_INT);
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
			$SQL_MODIFIER_JEU = "UPDATE jeuxvideo SET Nom = :nom, description = :description, idGenre=:idGenre WHERE jeuxvideo.ID = :id;";
			$requete = $basededonnees->prepare($SQL_MODIFIER_JEU);
			$requete->bindParam(':nom', $jeu['nom'], PDO::PARAM_STR);
			$requete->bindParam(':description', $jeu['description'], PDO::PARAM_STR);
			$requete->bindParam(':id', $jeu['id'], PDO::PARAM_INT);
			$requete->bindParam(':idGenre', $jeu['idGenre'], PDO::PARAM_INT);
			$requete->execute();
		}
		function modifierGenre($genre)
		{
			echo("allo");
			global $basededonnees;
			//$SQL_MODIFIER_JEU = "UPDATE genre SET Nom = '".$genre['nomGenre']."' WHERE genre.ID = '".$genre['idGenre']."';";
			$SQL_MODIFIER_JEU = "UPDATE genre SET Nom = :nom WHERE genre.ID = :id;";
			$requete = $basededonnees->prepare($SQL_MODIFIER_JEU);
			$requete->bindParam(':nom', $genre['nomGenre'], PDO::PARAM_STR);
			$requete->bindParam(':id', $genre['idGenre'], PDO::PARAM_INT);
			$requete->execute();
		}
	}
?>