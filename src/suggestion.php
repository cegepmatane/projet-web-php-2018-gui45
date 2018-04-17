<?php

$recherche = filter_var($_GET['valeur'], FILTER_SANITIZE_STRING);
$jeux = $dao->rechercherListe($recherche);

?>

<ul>
<?php

?>

</ul>
<?php } ?>
