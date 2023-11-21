<?php
    include "db.php";

    $_sql_lista = "SELECT * FROM usuario";

    $_dadostabela = mysqli_query($conexao, $_sql_lista);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuarios</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>email</th>
                <th>senha</th>
            </tr>
        </thead>
        <tbody>
            <?php while($dados = mysqli_fetch_array($_dadostabela)) {?>
                <tr>
                    <td><?php echo $dados['email']; ?></td>
                    <td><?php echo $dados['senha']; ?></td>
                    <td>
                        <form action="formatualiza.php" method="post">
                            <input type="text" name="email_user" value="<?php echo $dados['email']; ?>" hidden>
                            <input type="submit" value="atualizar">
                        </form>
                    </td>
                    <td>
                        <form action="deletar.php" method="post">
                            <input type="text" name="email_user" value="<?php echo $dados['email']; ?>" hidden>
                            <input type="submit" value="deletar">
                        </form>
                    </td>
                </tr>
            <?php } ?>
            
        </tbody>
    </table>
    
</body>
</html>