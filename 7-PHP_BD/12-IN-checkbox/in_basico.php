<?php
include_once "conexao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <title>Celke - IN</title>
    <link rel="shortcut icon" href="images/favicon.ico" />
</head>

<body>
    <h2>Listar Usuários</h2>

    <?php
    $query_usuarios = "SELECT id, nome, email, niveis_acesso_id 
                FROM usuarios
                WHERE niveis_acesso_id IN (1, 2, 4)
                ORDER BY id DESC";
    $result_usuarios = $conn->prepare($query_usuarios);
    $result_usuarios->execute();

    while($row_usuario = $result_usuarios->fetch(PDO::FETCH_ASSOC)){
        extract($row_usuario);
        echo "ID: $id <br>";
        echo "Nome: $nome <br>";
        echo "E-mail: $email <br>";
        echo "ID do nível de acesso: $niveis_acesso_id <br>";
        echo "<hr>";
    }
    ?>

</body>

</html>