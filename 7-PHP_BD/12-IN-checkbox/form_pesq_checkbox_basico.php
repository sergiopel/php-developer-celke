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
    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    ?>

    <form method="POST" action="">
        <label>Pesquisar:</label><br><br>
        <input type="checkbox" name="nivel_acesso[]" value="1">Super Administrador<br>
        <input type="checkbox" name="nivel_acesso[]" value="2">Administrador<br>
        <input type="checkbox" name="nivel_acesso[]" value="3">Aluno<br>
        <input type="checkbox" name="nivel_acesso[]" value="4">Financeiro<br><br>

        <input type="submit" value="Pesquisar" name="PesqUsuario"><br><br>
    </form>

    <?php

    if (!empty($dados['PesqUsuario'])) {
        var_dump($dados);
        var_dump($dados['nivel_acesso']);

        $valor_pesq = "";
        if(isset($dados['nivel_acesso'][0])){
            $valor_pesq = $dados['nivel_acesso'][0];
        }
        
        if(isset($dados['nivel_acesso'][1])){
            $valor_pesq .=  ", ". $dados['nivel_acesso'][1];
        }
        
        if(isset($dados['nivel_acesso'][2])){
            $valor_pesq .=  ", ".  $dados['nivel_acesso'][2];
        }
        
        if(isset($dados['nivel_acesso'][3])){
            $valor_pesq .=  ", ".  $dados['nivel_acesso'][3];
        }

        $query_usuarios = "SELECT id, nome, email, niveis_acesso_id 
                FROM usuarios
                WHERE niveis_acesso_id IN ($valor_pesq)
                ORDER BY id DESC";
        $result_usuarios = $conn->prepare($query_usuarios);
        $result_usuarios->execute();

        while ($row_usuario = $result_usuarios->fetch(PDO::FETCH_ASSOC)) {
            extract($row_usuario);
            echo "ID: $id <br>";
            echo "Nome: $nome <br>";
            echo "E-mail: $email <br>";
            echo "ID do nível de acesso: $niveis_acesso_id <br>";
            echo "<hr>";
        }
    }
    ?>

</body>

</html>