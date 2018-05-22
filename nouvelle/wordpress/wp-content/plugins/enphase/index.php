<?php
/**
 * @package enphase
 * @version 0.1
 */
/*
Plugin Name: enphase
Plugin URI: http://localhost/wordpress/plugins/enphase/
Description: separer les phare et insere un symbole decoratif
Version: 0.1
Author URI:
*/
function enphase_phrase($contenu){
  $contenu = explode(".", $contenu);
  $contenu = implode("<a href ='http://localhost/projet-web-php-2018-gui45/src/' >. Allo .</a>", $contenu);
  return $contenu;
}
add_filter("the_content", "enphase_phrase");
