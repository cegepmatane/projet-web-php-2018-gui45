<?php
include_once '../dao/JeuDao.php';
include_once '../dao/GenreDao.php';
$genreDao = new GenreDao;
$jeuDao = new JeuDao;

require 'C:\Users\gui\vendor\autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
$document = new spreadsheet();
$feuille = $document->getActiveSheet();

$genres= $genreDao->lireGenres();

foreach($genres as $genre){
  $feuille->setCellValue('A'. $genre['ID'], $genre['Nom']);
}


$imprimeur = new Xlsx($document);
$imprimeur->save('liste.xlsx');
?>
