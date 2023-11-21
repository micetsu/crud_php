<?php 
    include "db.php";

    $_email = $_POST['email_user'];

    $_sql = "SELECT * FROM usuario WHERE usuario.email = '$_email'";

    $dados_db = mysqli_query($conexao,$_sql);

    $dados_email = mysqli_fetch_array($dados_db);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud</title>
</head>
<body>
    <h1>atualiza formulario</h1>
    <form action="atualiza.php" method="post">
        <input type="text" name="emailoriginal" value="<?php echo $dados_email['email'] ?>" hidden>
        <label for="email">email</label>
        <input type="email" name="email" value="<?php echo $dados_email['email'] ?>" required>
        <label for="senha">senha</label>
        <input type="password" name="senha" value="<?php echo $dados_email['senha'] ?>" required>
        <input type="submit" value="envio">
    </form>

</body>
</html>