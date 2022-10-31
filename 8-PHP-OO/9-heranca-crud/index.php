<?php
    session_start(); //a inicialização da sessão sempre deve ser a primeira instrução da página
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Herança para listar registros</title>
</head>
<body>
    
    <a href="index.php">Listar</a><br>
    <a href="create.php">Cadastrar</a><br>

    <h1>Listar Usuários</h1>

    <?php
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']); //destrói a variável global
        }
        
        require './Conn.php';
        require './User.php';
        
        $listUsers = new User();
        $result_users = $listUsers->list();

        foreach($result_users as $row_user){  //usado para percorrer o array
            //var_dump($row_user);
            extract($row_user); //com extract dá pra imprimir direto pelo nome da chave do array

            //echo "ID: " . $row_user['id'] . "<br>";
            echo "ID: $id <br>";

            //echo "Name: " . $row_user['name'] . "<br>";
            echo "Name: $name <br>";

            //echo "E-mail: " . $row_user['email'] . "<br>";
            echo "E-mail: $email <br>";
            echo "<a href='view.php?id=$id'>Visualizar</a><br>";
            echo "<a href='edit.php?id=$id'>Editar</a><br>";
            echo "<a href='delete.php?id=$id'>Apagar</a><br>";
            echo "<hr>";
        }
    ?>

</body>
</html>