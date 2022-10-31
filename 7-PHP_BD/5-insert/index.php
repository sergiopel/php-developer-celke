<?php
include_once "conexao.php";
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Sergio - Insert</title>
    <link rel="shortcut icon" href="images/favicon.ico">
</head>

<body>
    <h2>Cadastrar usuário</h2>
    <?php

        //Colocando valores direto na Query (não recomendado)
        /*
        $query_usuario = "INSERT INTO usuarios (nome, email, senha, sits_usuario_id, niveis_acesso_id, created)
         VALUES ('Valdir', 'valdir@gmail.com', '123456a', 3, 3, NOW())";
        $cad_usuario = $conn->prepare($query_usuario);
        $cad_usuario->execute();
        */

        //Colocar a variável com valor direto na Query (não recomendado)
        /*
        $nome = "Ana";
        $email = "ana@gmail.com";
        $senha = "123456k";
        $sits_usuario_id = 3;
        $niveis_acesso_id = 2;

        $query_usuario = "INSERT INTO usuarios (nome, email, senha, sits_usuario_id, niveis_acesso_id, created)
         VALUES ('$nome', '$email', '$senha', $sits_usuario_id, $niveis_acesso_id, NOW())";
        $cad_usuario = $conn->prepare($query_usuario);
        $cad_usuario->execute();
        */

        //Atribuir o link na Query e substituir o link pelo valor com bindParam (recomendado, fica mais seguro)
        $nome = "Sophia";
        $email = "sophia@gmail.com";
        $senha = "123456s";
        $sits_usuario_id = 3;
        $niveis_acesso_id = 2;

        $query_usuario = "INSERT INTO usuarios (nome, email, senha, sits_usuario_id, niveis_acesso_id, created)
         VALUES (:nome, :email, :senha, :sits_usuario_id, :niveis_acesso_id, NOW())";
        
        $cad_usuario = $conn->prepare($query_usuario);
        
        $cad_usuario->bindParam(':nome', $nome, PDO::PARAM_STR);
        $cad_usuario->bindParam(':email', $email, PDO::PARAM_STR);
        $cad_usuario->bindParam(':senha', $senha, PDO::PARAM_STR);
        $cad_usuario->bindParam(':sits_usuario_id', $sits_usuario_id, PDO::PARAM_INT);
        $cad_usuario->bindParam(':niveis_acesso_id', $niveis_acesso_id, PDO::PARAM_INT);
        
        $cad_usuario->execute();

        if($cad_usuario->rowCount()){
            echo "Usuário cadastrado com sucesso!<br>";
            var_dump($cad_usuario->rowCount()); // retorna 1, por isso cadatrou com sucesso
            var_dump($conn->lastInsertId()); // retorna o código do último Id que foi inserido
            $ultimo_id = $conn->lastInsertId(); //retorna o código do último Id que foi inserido
            echo "Id do registro cadastrado: $ultimo_id <br>";
        }else{
            echo "Usuário não cadastrado com sucesso!<br>";
        }

    ?>

</body>

</html>