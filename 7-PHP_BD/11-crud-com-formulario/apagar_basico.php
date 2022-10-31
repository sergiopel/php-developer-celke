<?php
include_once "conexao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <title>Sergio - Crud com formulário</title>
    <link rel="shortcut icon" href="images/favicon.ico" />
</head>

<body>
    <h2>Crud com formulário</h2>
    <?php
        $id = 25;
        $query_usuario = "DELETE FROM usuarios WHERE id=:id LIMIT 1";
        $apagar_usuario = $conn->prepare($query_usuario);
        $apagar_usuario->bindParam(':id', $id, PDO::PARAM_INT);

        if($apagar_usuario->execute()){
            echo "Usuário apagado com sucesso!<br>";
        }else{
            echo "Usuário não apagado com sucesso!<br>";
        }

    ?>
</body>

</html>