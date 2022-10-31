<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Sergio - Listar</title>
</head>

<body>
    <?php
    // Inclui o arquivo
    require './Usuarios.php';
    
    //Instanciando a classe
    //Criado o objeto $listarUsuarios
    $listarUsuarios = new Usuarios();
    
    //Instanciar o método listar
    $result_usuarios = $listarUsuarios->listar();
    
    foreach($result_usuarios as $row_usuario){
        //var_dump($row_usuario);
        extract($row_usuario);
        echo "ID do usuário $id <br>";
        echo "Nome do usuário $nome <br>";
        echo "E-mail do usuário $email <br>";
        echo "<hr>";
    }
    
    ?>
</body>

</html>