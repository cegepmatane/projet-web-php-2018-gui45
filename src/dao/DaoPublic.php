<?php
	include_once "baseDeDonner.php";
	$local = 'fr';
	class DaoPublic
	{
    function lireListe()
    {
      global $basededonnees;
      $SQL_LIRE_LISTE = "SELECT * FROM jeuxVideo";
      $requete = $basededonnees->prepare($SQL_LIRE_LISTE);
      $requete->execute();
      $jeux = $requete->fetchAll();

      return $jeux;
    }
    function rechercherListe($recherche)
    {
      global $basededonnees;
      $SQL_RECHERCHER_LISTE = "SELECT * FROM jeuxVideo WHERE Nom LIKE '%".$recherche."%'";
      $requete = $basededonnees->prepare($SQL_RECHERCHER_LISTE);
      $requete->bindParam(':recherche', $recherche, PDO::PARAM_STR);
      $requete->bindParam(':recherche', $recherche, PDO::PARAM_STR);
      $requete->execute();
      $jeux = $requete->fetchAll();

      return $jeux;
    }
    function lireGenres()
    {
      global $basededonnees;
      $SQL_LIRE_GENRES = "SELECT ID, Nom, description-:local AS description FROM genre";
      $requete = $basededonnees->prepare($SQL_LIRE_GENRES);
			$requete->bindParam(':local', $local, PDO::PARAM_STR);
      $requete->execute();
      $genres = $requete->fetchAll();

      return $genres;
    }
    function lireGenre($id)
    {
      global $basededonnees;
      $SQL_LIRE_GENRE = "SELECT * FROM genre WHERE ID=:id";
      $requete = $basededonnees->prepare($SQL_LIRE_GENRE);
      $requete->bindParam(':id', $id, PDO::PARAM_INT);
      $requete->execute();
      $genre = $requete->fetch();

      return $genre;
    }
    function lireGenreJeu($id)
    {
      global $basededonnees;
      $SQL_LIRE_GENRE_JEU = "SELECT * FROM jeuxVideo WHERE idGenre=:id";
      $requete = $basededonnees->prepare($SQL_LIRE_GENRE_JEU);
      $requete->bindParam(':id', $id, PDO::PARAM_INT);
      $requete->execute();
      $jeux = $requete->fetchAll();

      return $jeux;
    }
    function lireJeu($id)
    {
      global $basededonnees;
      $SQL_LIRE_JEU = "SELECT * FROM jeuxVideo WHERE ID = :id";
      $requete = $basededonnees->prepare($SQL_LIRE_JEU);
      $requete->bindParam(':id', $id, PDO::PARAM_INT);
      $requete->execute();
      $jeu = $requete->fetch();

      return $jeu;
    }
    function rechercherSuggestion($recherche)
		{
			global $basededonnees;
			$SQL_RECHERCHER_LISTE = "SELECT Nom FROM jeuxVideo WHERE Nom LIKE '%".$recherche."%'";
			$requete = $basededonnees->prepare($SQL_RECHERCHER_LISTE);
			$requete->bindParam(':recherche', $recherche, PDO::PARAM_STR);
			$requete->execute();
			$jeux = $requete->fetchAll();

			return $jeux;
		}
  }
?>
