<?php
/**
 * @package organisateurApercu
 * @version 0.1
 */
/*
Plugin Name: organisateurApercu
Plugin URI: http://localhost/wordpress/plugins/organisateurApercu/
Description: changer les apercu des articles
Version: 0.1
Author URI:
*/
function color_style(){
  echo "<style>";
  include 'style.css';
  echo "</style>";
}
add_action("wp_head", "color_style");
