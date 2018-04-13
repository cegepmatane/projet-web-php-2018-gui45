<?php
	include_once "baseDeDonner.php";
	class JeuDAO
	{
		function ajouterImage($image, $id)
		{
			global $basededonnees;
			$SQL_AJOUTER_JEU = "UPDATE jeuxvideo SET image=:image WHERE jeuxvideo.ID = :id;";
			$requete = $basededonnees->prepare($SQL_AJOUTER_JEU);
			$requete->bindParam(':image', $image, PDO::PARAM_STR);
			$requete->bindParam(':id', $id, PDO::PARAM_LOB);
			$requete->execute();
		}
		function lireListe()
		{
			global $basededonnees;
			$requete = $basededonnees->prepare("SELECT * FROM jeuxVideo");
			$requete->execute();
			$jeux = $requete->fetchAll();

			return $jeux;
		}
		function rechercherListe($recherche)
		{
			global $basededonnees;
			$requete = $basededonnees->prepare("SELECT * FROM jeuxVideo WHERE Nom LIKE '%".$recherche."%' OR description LIKE '%".$recherche."%'");
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
		function ajouterGenre($genre)
		{
			global $basededonnees;
			$SQL_AJOUTER_GENRE = "INSERT INTO genre(nom, description) VALUES(:nom, :description)";
			$requete = $basededonnees->prepare($SQL_AJOUTER_GENRE);
			$requete->bindParam(':nom', $genre['nom'], PDO::PARAM_STR);
			$requete->bindParam(':description', $genre['description'], PDO::PARAM_STR);
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
		function suprimerGenre($id)
		{
			global $basededonnees;
			$SQL_EFFACER_GENRE = "DELETE FROM genre WHERE ID = :id";
			$requete = $basededonnees->prepare($SQL_EFFACER_GENRE);
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
			$SQL_MODIFIER_GENRE = "UPDATE genre SET Nom = :nom, description = :description WHERE genre.ID = :id;";
			$requete = $basededonnees->prepare($SQL_MODIFIER_GENRE);
			$requete->bindParam(':nom', $genre['nomGenre'], PDO::PARAM_STR);
			$requete->bindParam(':description', $genre['description'], PDO::PARAM_STR);
			$requete->bindParam(':id', $genre['idGenre'], PDO::PARAM_INT);
			$requete->execute();
		}
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
