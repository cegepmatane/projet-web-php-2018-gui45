<?php
  include_once "DAO.php";

  $dao = new JeuDAO();
  $listeGenre = $dao->lireGenres();

  header("Content-type: text/xml");
  echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<jeux>
  <?php foreach($listeGenre as $genre){ ?>
    <<?=$genre['Nom']?>>
      <?php
        $listeJeux = $dao->lireGenreJeu($genre['ID']);
        foreach ($listeJeux as $jeu) { ?>
          <jeu>
            <nom><?=$jeu['Nom']?></nom>
            <id><?=$jeu['ID']?></id>
          </jeu>
        <?php }?>
    </<?=$genre['Nom']?>>
  <?php } ?>
</jeux>
