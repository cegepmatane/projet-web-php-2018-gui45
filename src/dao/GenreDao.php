<?php
include_once "baseDeDonner.php";
$langue = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
if($langue == 'en' || $langue == 'fr')
  $local = $langue;
else
  $local = 'fr';
class GenreDao
{
}
?>
