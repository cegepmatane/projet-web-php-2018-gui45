<?php
  session_start();
  //print_r($_SESSION['membre']);
  if(!empty($_SESSION["membre"]) && $_SESSION['admin'])
    echo( $_SESSION["membre"]["prenom"]. " est connexter");
  else
    exit(0);
?>
