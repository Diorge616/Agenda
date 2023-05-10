<?php 
    require_once("contato_controller.php");
    $contatoController = new ContatoController();
    $contatoDao = new ContatoDAO();
    $contatos = $contatoDao -> selecionarTodos();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="imagens/favicon.png">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/agenda.css">
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/jquery.mask.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
    <title>AGENDA</title>
</head>
<body>
    <nav class="navbar bg-primary">
        <div class="container-fluid">
            <a href="#"> <img src="imagens/favicon.png" alt="Agenda">Agenda de Contato</a>
        </div>
    </nav>
    <div class="container contatos">
        <a href="router.php?modo=adicionar" class="btn btn-success float-right" id="adicionar">Novo Contato</a>
        <table class="table table-hover table-bordered">
            <thead calss="bg-primary">
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Celular</th>
                    <th class="text-center">#</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($contatos as $contato){
                    $contatoController->gerarLinhaTabela($contato);
                }
                ?>
            </tbody>
        </table>
    </div>
    <footer class="bg-primary">
        <div class="container-fluid">
            <span>Desenvolvido por Diorge S.Pereira</span>
            <span class="float-right"> Todos os direitos reservados-2023</span>
        </div>
    </footer>
</body>
</html>