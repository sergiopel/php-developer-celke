<?php
include_once "conexao.php";
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Sergio - Update</title>
    <link rel="shortcut icon" href="images/favicon.ico">
</head>

<body>
    <h2>UPDATE - atualização da tabela do banco de dados</h2>
    <?php
        $id = 1;
        $nome = "Sergio 4";
        $email = "sergio4@gmail.com";

        $query_usuario = "UPDATE usuarios SET nome=:nome, email=:email WHERE id=:id";
        $up_usuario = $conn->prepare($query_usuario);
        $up_usuario->bindParam(':nome', $nome, PDO::PARAM_STR);
        $up_usuario->bindParam(':email', $email, PDO::PARAM_STR);
        $up_usuario->bindParam(':id', $id, PDO::PARAM_INT);

        if($up_usuario->execute()){
            echo "Usuário editado com sucesso!";
        } else {
            echo "Erro: Usuário não editado com sucesso!";
        }

    ?>


</body>

</html>