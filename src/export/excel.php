<?php
require 'C:\Users\gui\vendor\autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
$document = new spreadsheet();
$feuille = $document->getActiveSheet();

$document = new Spreadsheet();
$feuille = $document->getActiveSheet();
$feuille->setCellValue('A1', 'Hello World !');

$imprimeur = new Xlsx($document);
$imprimeur->save('test.xlsx');
?>
