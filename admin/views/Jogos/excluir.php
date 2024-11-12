<?php

if (isset($_GET['id'] )&& !empty($_GET['id'])) {
   //// Requisito o controlador
   require_once '../../controllers/JogoController.php';

   //// Remove Dados
   $JogoController = new JogoController();
   $rs = $JogoController->remove($_GET['id']);

    if($rs) {

    header("location: ./");
    exit();

    }
}

