<?php
include_once "baseDeDonner.php";
$langue = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
if($langue == 'en' || $langue == 'fr')
  $local = $langue;
else
  $local = 'fr';
class JeuDao
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
  function lireListe()
  {
    global $local;
    global $basededonnees;
    $SQL_LIRE_LISTE = "SELECT ID, Nom,  description_".$local." AS description, idGenre, image FROM jeuxVideo";
    $requete = $basededonnees->prepare($SQL_LIRE_LISTE);
    $requete->execute();
    $jeux = $requete->fetchAll(PDO::FETCH_OBJ);

    return $jeux;
  }
  function rechercherListe($recherche)
  {
    global $local;
    global $basededonnees;
    $SQL_RECHERCHER_LISTE = "SELECT ID, Nom,  description_".$local." AS description, idGenre, image FROM jeuxVideo WHERE Nom LIKE '%".$recherche."%'";
    $requete = $basededonnees->prepare($SQL_RECHERCHER_LISTE);
    $requete->bindParam(':recherche', $recherche, PDO::PARAM_STR);
    $requete->bindParam(':recherche', $recherche, PDO::PARAM_STR);
    $requete->execute();
    $jeux = $requete->fetchAll(PDO::FETCH_OBJ);

    return $jeux;
  }
  function lireGenreJeu($id)
  {
    global $local;
    global $basededonnees;
    $SQL_LIRE_GENRE_JEU = "SELECT ID, Nom,  description_".$local." AS description, idGenre, image FROM jeuxVideo WHERE idGenre=:id";
    $requete = $basededonnees->prepare($SQL_LIRE_GENRE_JEU);
    $requete->bindParam(':id', $id, PDO::PARAM_INT);
    $requete->execute();
    $jeux = $requete->fetchAll(PDO::FETCH_OBJ);

    return $jeux;
  }
  function lireJeu($id)
  {
    global $local;
    global $basededonnees;
    $SQL_LIRE_JEU = "SELECT ID, Nom,  description_".$local." AS description, idGenre, image, date FROM jeuxVideo WHERE ID = :id";
    $requete = $basededonnees->prepare($SQL_LIRE_JEU);
    $requete->bindParam(':id', $id, PDO::PARAM_INT);
    $requete->execute();
    $jeu = $requete->fetch(PDO::FETCH_OBJ);

    return $jeu;
  }
  function rechercherSuggestion($recherche)
  {
    global $basededonnees;
    $SQL_RECHERCHER_LISTE = "SELECT Nom FROM jeuxVideo WHERE Nom LIKE '%".$recherche."%'";
    $requete = $basededonnees->prepare($SQL_RECHERCHER_LISTE);
    $requete->bindParam(':recherche', $recherche, PDO::PARAM_STR);
    $requete->execute();
    $jeux = $requete->fetchAll(PDO::FETCH_OBJ);

    return $jeux;
  }
}
?>
