<?php
/**
 * @package color
 * @version 0.1
 */
/*
Plugin Name: color
Plugin URI: http://localhost/wordpress/plugins/color/
Description: un plugin qui chamge des couleurs
Version: 0.1
Author URI:
*/
function color_style(){
  echo "<style>";
  include 'style.css';
  echo "</style>";
}
add_action("wp_head", "color_style");
