<?php
  $id = filter_var($_GET['id'], FILTER_VALIDATE_INT);
  require('../dao/JeuDao.php');
  $dao = new JeuDao();
  $jeu = $dao->lireJeu($id);
  require('../lib/fpdf/fpdf.php');

  $pdf = new FPDF();
  $pdf->AddPage();
  $pdf->SetFont('Arial','B',12);
  $pdf->Write(10, 'Jeu : ' . $jeu->Nom);
  $pdf->Ln();
  $pdf->Ln();
  $pdf->Write(10, 'Id : ' . $jeu->ID);
  $pdf->Ln();
  $pdf->Ln();
  $pdf->Write(10, 'Description : ' . $jeu->description);
  $pdf->Ln();
  $pdf->Ln();
  $pdf->Write(10, 'idGenre : ' . $jeu->idGenre);
  $pdf->Ln();
  $pdf->Ln();
  $pdf->Write(10, 'image : ' . $jeu->image);

  $pdf->Output();
?>
