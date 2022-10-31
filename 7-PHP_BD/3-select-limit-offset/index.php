<?php
include_once "conexao.php";
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Sergio - Select com Limit e Offset</title>
    <link rel="shortcut icon" href="images/favicon.ico">
</head>

<body>
    <h2>Listar usuários com LIMIT</h2>
    <?php
        $query_usuarios = "SELECT id, nome, email FROM usuarios LIMIT 2";
        $result_usuarios = $conn->prepare($query_usuarios);
        $result_usuarios->execute();

        while($row_usuario = $result_usuarios->fetch(PDO::FETCH_ASSOC)){
            //var_dump($row_usuario);
            extract($row_usuario);
            echo "Id: $id <br>";
            echo "Nome: $nome <br>"; 
            echo "E-mail: $email <br>";
            echo "<hr>";
        }
    
        echo "<h2>Listar usuários com LIMIT e OFFSET</h2>";

        // LIMIT 5 - pesquisa 15 registros
        // OFFSET 15 - a partir do registro 15 (não considera o 15)
        $query_usuarios_b = "SELECT id, nome, email FROM usuarios LIMIT 5 OFFSET 15";
        $result_usuarios_b = $conn->prepare($query_usuarios_b);
        $result_usuarios_b->execute();

        while($row_usuario_b = $result_usuarios_b->fetch(PDO::FETCH_ASSOC)){
            //var_dump($row_usuario);
            extract($row_usuario_b);
            echo "Id: $id <br>";
            echo "Nome: $nome <br>"; 
            echo "E-mail: $email <br>";
            echo "<hr>";
        }

    
    ?>


</body>

</html>