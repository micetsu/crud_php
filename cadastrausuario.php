<?php
   include "db.php";

    $_email= $_POST['email'];
    $_senha= $_POST['senha'];
    
    $sql="INSERT INTO usuario (email, senha) VALUES ('$_email', '$_senha')";
    
    if(mysqli_query($conexao, $sql)){
        header("Location: exibe.php");
    } else {
        echo "erro no cadastro";
    }
?>