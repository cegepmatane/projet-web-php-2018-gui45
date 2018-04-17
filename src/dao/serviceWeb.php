<?php
  include_once "DaoPublic.php";

  $dao = new DaoPublic();
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
