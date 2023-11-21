<?php
    include "db.php";

    $_email = $_POST['email_user'];

    $sql = "DELETE FROM usuario
    WHERE email = '$_email'";

     if(mysqli_query($conexao, $sql)){
        header("Location: exibe.php");
    } else {
        echo "erro no cadastro";
    }
?>