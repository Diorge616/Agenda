<?php
    //Função que retorna uma conexão com o banco de dados.
    function getDatabaseConnection(){
        try {
            mysqli_report(MYSQLI_REPORT_STRICT);
            $conexao = new mysqli("127.0.0.1" , "root", "", "agenda");
            $conexao->autocommit(true);
            $conexao->set_charset("utf8");
            return $conexao;
        } catch (Exception $e){
            die("Erro interno ao conectar ao banco de dados. Tente novamente mais tarde");
        }

        

    }


?>