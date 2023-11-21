<?php
    include "db.php";

    $_email= $_POST['email'];
    $_senha= $_POST['senha'];
    $_emailoriginal = $_POST['emailoriginal'];

    $sql = "UPDATE usuario SET 
    email = '$_email',
    senha = '$_senha'
    WHERE email = '$_emailoriginal'";

     if(mysqli_query($conexao, $sql)){
        header("Location: exibe.php");
    } else {
        echo "erro no cadastro";
    }
?>