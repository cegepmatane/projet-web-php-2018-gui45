<?php
$site = new stdClass();
$site->chemin = new stdClass();
$site->chemin->racine = $_SERVER['DOCUMENT_ROOT'] . '/projet-web-php-2018-gui45/src/'
$site->chemin->illustration = $site->chemin->racine . 'illustration/';
$site->url = new stdClass();
$site->url->racine = 'http://localhost/projet-web-php-2018-gui45/src/';

$traduction = new stdClass();
$traduction->chemin = $site->chemin->racine . 'locale/';
$traduction->domaine = 'messages';
$traduction->locale = 'en_CA.utf8';
$traduction->locales = ['fr_CA.utf8','en_CA.utf8'];
