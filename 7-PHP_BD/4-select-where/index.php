<?php
include_once "conexao.php";
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Sergio - Where</title>
    <link rel="shortcut icon" href="images/favicon.ico">
</head>

<body>
    <h2>Visualizar Usuário pelo ID</h2>
    <?php
    $query_usuario = "SELECT id, nome, email
                        FROM usuarios
                        WHERE id = 14
                        LIMIT 1";
    $result_usuario = $conn->prepare($query_usuario);
    $result_usuario->execute();

    $row_usuario = $result_usuario->fetch(PDO::FETCH_ASSOC);
    //var_dump($row_usuario);
    extract($row_usuario);

    echo "Id: $id <br>";
    echo "Nome: $nome <br>";
    echo "E-mail: $email <br>";

    echo "<hr>";

    echo "<h2>Pesquisar Usuário pelo e-mail</h2>";

    $query_usuario_b = "SELECT id, nome, email
                        FROM usuarios
                        WHERE email = 'marcos7@celke.com.br'
                        LIMIT 1";
    $result_usuario_b = $conn->prepare($query_usuario_b);
    $result_usuario_b->execute();

    $row_usuario_b = $result_usuario_b->fetch(PDO::FETCH_ASSOC);
    //var_dump($row_usuario);
    extract($row_usuario_b);

    echo "Id: $id <br>";
    echo "Nome: $nome <br>";
    echo "E-mail: $email <br>";

    echo "<hr>";

    echo "<h2>Pesquisar Usuários Ativos</h2>";

    $query_usuarios_c = "SELECT id, nome, email, sits_usuario_id AS situacao
                        FROM usuarios
                        WHERE sits_usuario_id = 1
                        LIMIT 10";
    $result_usuarios_c = $conn->prepare($query_usuarios_c);
    $result_usuarios_c->execute();

    while ($row_usuario_c = $result_usuarios_c->fetch(PDO::FETCH_ASSOC)) {
        //var_dump($row_usuario_c);
        extract($row_usuario_c);
        echo "Id: $id <br>";
        echo "Nome: $nome <br>";
        echo "E-mail: $email <br>";
        echo "Id da Situação: $situacao <br>";

        echo "<hr>";
    }

    echo "<h2>Pesquisar os Usuários com Nível Acesso Administrador</h2>";

    $query_usuarios_d = "SELECT id, nome, email, sits_usuario_id AS situacao, niveis_acesso_id AS nivel
                        FROM usuarios
                        WHERE niveis_acesso_id = 2
                        LIMIT 10";
    $result_usuarios_d = $conn->prepare($query_usuarios_d);
    $result_usuarios_d->execute();

    while ($row_usuario_d = $result_usuarios_d->fetch(PDO::FETCH_ASSOC)) {
        //var_dump($row_usuario_d);
        extract($row_usuario_d);
        echo "Id: $id <br>";
        echo "Nome: $nome <br>";
        echo "E-mail: $email <br>";
        echo "Id da Situação: $situacao <br>";
        echo "Id do Nível de Acesso: $nivel <br>";

        echo "<hr>";
    }

    ?>

</body>

</html>