<?php
    //Variáveis para receber as informações de configuração
    $server_host = "localhost";
    $server_user = "root";
    $server_password = "";
    $database = "crud";

    //Função mysqli_connect realiza a conexão com o banco de dados
    $conexao = mysqli_connect($server_host, $server_user, $server_password, $database);
?>