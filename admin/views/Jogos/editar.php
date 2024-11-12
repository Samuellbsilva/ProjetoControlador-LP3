<?php

/////Requisita o Controlador
require_once "../../controllers/JogoController.php";
///// Instancia o Controlador
$JogoController = new JogoController;

///verificação
if ( isset($_POST) && count($_POST) > 0 )  {
   
///gravar dados
$c = new Jogo();
$c->setId(htmlspecialchars($_POST['campoId']));//// Colocar os dados do campo id
$c->setRegras(htmlspecialchars($_POST['campoRegras']));//// Colocar os dados do campo Regras
$c->setNmrtInt(htmlspecialchars($_POST['campoNmrtInt']));//// Colocar os dados do campo Número de integrantes
$c->setJogo(htmlspecialchars($_POST['campoJogo']));//// Colocar os dados do campo Jogos

////// Executa método edit
$rs =$JogoController->edit($c); //// return set

////// Redireciona para a Index
if($rs){
    header("location: ./");
    exit();
}


}
else if(isset($_GET['id']) && !empty($_GET['id'])){

    $dado = $JogoController->findId($_GET['id']);
    
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "../includes/head.php"; ?>
</head>

<body>
    <div class="container">
        <div class="row mt-3">
            <?php include "../includes/menu.php"; ?>
            <div class="col-9">
                <h3>Cadastro de categorias</h3>
                <form action="" method="post">
                    <input type="hidden" name="campoId" value="<?= $dado->getId(); ?>">
                    <div class="mb-3">
                        <label for="idNome" class="form-label">Nome:</label>
                        <input type="text" class="form-control" name="campoNome" 
                            id="idNome" placeholder="Seu nome completo"
                            value=" <?= $dado->getNome(); ?> ">
                    </div>
                    <div class="mt-3 mb-3">
                        <label for="idRegras" class="form-label">Regras</label>
                        <textarea class="form-control" id="idRegras" name="campoRegras" ><?= $dado->getRegras(); ?></textarea>
                    </div>
                    <div class="mt-3 mb-3">
                        <label for="idNmrtInt" class="form-label">Número Integrantes</label>
                        <input class="form-control" id="idNmrtInt" name="campoNmrInt" value="<?= $dado->getNmrInt(); ?>">
                    </div>
                    <div class="mt-3 mb-3">
                        <label for="idDescricao" class="form-label">Jogo</label>
                        <input class="form-control" id="idJogo" name="campoJogo" value="<?= $dado->getJogo(); ?>">
                    </div>
                    <button type="submit" class="btn btn-success">Gravar</button>
                    <a href="./" class="btn btn-primary">Voltar</a>
                </form>
            </div>
        </div>
    </div>
    <?php include "../includes/js.php"; ?>
</body>

</html>