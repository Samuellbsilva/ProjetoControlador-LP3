<?php
if (isset($_POST) && count($_POST) > 0) {
   
    /////// Faz requisição do Controlador
    require_once "../../controllers/JogoController.php";
    
    ////// Instaciando o Objeto 
    $c = new Jogo();
    
    ////// Monta objeto categoria
    $c->setNome(htmlspecialchars($_POST['campoNome']));//// Colocar os dados do campo Nome
    $c->setJogo(htmlspecialchars($_POST['campoJogo']));//// Colocar os dados do campo Jogos
    $c->setRegras(htmlspecialchars($_POST['campoRegras']));//// Colocar os dados do campo Regras
    $c->setNmrtInt(htmlspecialchars($_POST['campoNmrtInt']));//// Colocar os dados do campo Número Integrantes
    
    ///// Instancia o controlador
    $JogoController = new JogoController();

    ////// Executa método add
    $rs =$JogoController->add($c); //// return set

    ////// Redireciona para a Index
    if($rs){
        header("location: ./");
        exit();
    }
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
                    <div class="mb-3">
                        <label for="idNome" class="form-label">Nome:</label>
                        <input type="text" class="form-control" name="campoNome" id="idNome" placeholder="Informe a categoria">
                    </div>
                    <div class="mt-3 mb-3">
                        <label for="idDescricao" class="form-label">Número Integrantes:</label>
                        <input class="form-control" id="idNmrtInt" name="campoNmrtInt" placeholder="Insira os integrantes">
                    </div>
                    <div class="mt-3 mb-3">
                        <label for="idDescricao" class="form-label">Jogo:</label>
                        <input class="form-control" id="idJogo" name="campoJogo" placeholder="Insira os jogos">
                    </div>
                    <div class="mt-3 mb-3">
                        <label for="idDescricao" class="form-label">Regras:</label>
                        <textarea class="form-control" id="idRegras" name="campoRegras" placeholder="Insira as regras"></textarea>
                    </div>

                    <button type="submit" class="btn btn-success">Gravar</button>
                    <a href="./" class="btn btn-primary">Voltar</a>
                </form>
            </div>
        </div>
    </div>
    <?php include "../includes/js.php"; ?>
</body>

<script>



</script>
</html>