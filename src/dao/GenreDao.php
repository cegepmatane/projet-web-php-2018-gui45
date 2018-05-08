<?php
include_once "baseDeDonner.php";
$langue = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
if($langue == 'en' || $langue == 'fr')
  $local = $langue;
else
  $local = 'fr';
class GenreDao
{
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
  function suprimerGenre($id)
  {
    global $basededonnees;
    $SQL_EFFACER_GENRE = "DELETE FROM genre WHERE ID = :id";
    $requete = $basededonnees->prepare($SQL_EFFACER_GENRE);
    $requete->bindParam(':id', $id, PDO::PARAM_INT);
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
  function lireGenres()
  {
    global $local;
    global $basededonnees;
    $SQL_LIRE_GENRES = "SELECT ID, Nom, description_".$local." AS description FROM genre";
    $requete = $basededonnees->prepare($SQL_LIRE_GENRES);
    $requete->execute();
    $genres = $requete->fetchAll();

    return $genres;
  }
  function lireGenre($id)
  {
    global $local;
    global $basededonnees;
    $SQL_LIRE_GENRE = "SELECT ID, Nom, description_".$local." AS description FROM genre WHERE ID=:id";
    $requete = $basededonnees->prepare($SQL_LIRE_GENRE);
    $requete->bindParam(':id', $id, PDO::PARAM_INT);
    $requete->execute();
    $genre = $requete->fetch();

    return $genre;
  }
}
?>
