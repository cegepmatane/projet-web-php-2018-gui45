<?php
include_once '../dao/GenreDao.php';
$genreDao = new GenreDao;

require 'C:\Users\gui\vendor\autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
$fichier = 'liste.xlsx';
if(!file_exists($fichier)){
  $document = new spreadsheet();
  $feuille = $document->getActiveSheet();

  $genres= $genreDao->lireGenres();

  foreach($genres as $genre){
    $feuille->setCellValue('A'. $genre->ID, $genre->Nom);
  }


  $imprimeur = new Xlsx($document);
  $imprimeur->save($fichier);
}
if (file_exists($fichier)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($fichier).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($fichier));
    readfile($fichier);
    exit;
}

header("location: http://localhost/projet-web-php-2018-gui45/src/public/liste.php");
die();

?>
