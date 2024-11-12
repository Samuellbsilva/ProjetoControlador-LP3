<?php

if (isset($_GET['id'] )&& !empty($_GET['id'])) {
   //// Requisito o controlador
   require_once '../../controllers/CategoriaController.php';

   //// Remove Dados
   $CategoriaController = new CategoriaController();
   $rs = $CategoriaController->remove($_GET['id']);

    if($rs) {

    header("location: ./");
    exit();

    }
}

