<?php
	include_once "baseDeDonner.php";
	$langue = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
	if($langue == 'en' || $langue == 'fr')
		$local = $langue;
	else
		$local = 'fr';
	class DaoAdmin
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
    function ajouter($jeux)
		{
			global $local;
			global $basededonnees;
			$SQL_AJOUTER_JEU = "INSERT INTO jeuxVideo(nom, description_".$local.", idGenre) VALUES(:nom,:description,:idGenre)";
			$requete = $basededonnees->prepare($SQL_AJOUTER_JEU);
			$requete->bindParam(':nom', $jeux['nom'], PDO::PARAM_STR);
			$requete->bindParam(':description', $jeux['description'], PDO::PARAM_STR);
			$requete->bindParam(':idGenre', $jeux['idGenre'], PDO::PARAM_INT);
			$requete->execute();
		}
		function ajouterGenre($genre)
		{
			global $local;
			global $basededonnees;
			$SQL_AJOUTER_GENRE = "INSERT INTO genre(nom, description_".$local.") VALUES(:nom, :description)";
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
			global $local;
      global $basededonnees;
      $SQL_MODIFIER_JEU = "UPDATE jeuxvideo SET Nom = :nom, description_".$local." = :description, idGenre=:idGenre WHERE jeuxvideo.ID = :id;";
      $requete = $basededonnees->prepare($SQL_MODIFIER_JEU);
      $requete->bindParam(':nom', $jeu['nom'], PDO::PARAM_STR);
      $requete->bindParam(':description', $jeu['description'], PDO::PARAM_STR);
      $requete->bindParam(':id', $jeu['id'], PDO::PARAM_INT);
      $requete->bindParam(':idGenre', $jeu['idGenre'], PDO::PARAM_INT);
      $requete->execute();
    }
    function modifierGenre($genre)
    {
      global $local;
      global $basededonnees;
      $SQL_MODIFIER_GENRE = "UPDATE genre SET Nom = :nom, description_".$local." = :description WHERE genre.ID = :id;";
      $requete = $basededonnees->prepare($SQL_MODIFIER_GENRE);
      $requete->bindParam(':nom', $genre['nomGenre'], PDO::PARAM_STR);
      $requete->bindParam(':description', $genre['description'], PDO::PARAM_STR);
      $requete->bindParam(':id', $genre['idGenre'], PDO::PARAM_INT);
      $requete->execute();
    }
  }
  ?>
