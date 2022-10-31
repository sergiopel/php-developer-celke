<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Sergio - Select</title>
    <link rel="shortcut icon" href="images/favicon.ico">
</head>

<body>

    <?php

    // Início da conexão com o banco de dados utilizando PDO
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "sergio2";
    $port = 3306;

    try {
        // Conexão utilizando a porta
        //$conn = new PDO("mysql:host=$host;port=$port;dbname=" . $dbname,$user,$pass);
        //echo "Conexão com banco de dados realizado com sucesso.";

        // Conexão sem a porta (alguns servidores aceitam)
        $conn = new PDO("mysql:host=$host;dbname=" . $dbname, $user, $pass);
        //echo "Conexão com banco de dados realizado com sucesso.";
    } catch (PDOException $err) {
        echo "Erro: ConexãO com banco de dados não foi realizado com sucesso. Erro gerado " . $err->getMessage();
    }

    // Fim da conexão com o banco de dados utilizando PDO

    echo "<h2>Listar usuários</h2>";

    $query_usuarios = "SELECT id, nome, email, created, modified FROM usuarios";
    $result_usuarios = $conn->prepare($query_usuarios);
    $result_usuarios->execute();

    while($row_usuario = $result_usuarios->fetch(PDO::FETCH_ASSOC)){
        //var_dump($row_usuario);

        echo "ID: " . $row_usuario["id"] . "<br>";
        echo "NOME: " . $row_usuario["nome"] . "<br>";
        echo "E-MAIL: " . $row_usuario["email"] . "<br>";
        //echo "SENHA: " . $row_usuario["senha"] . "<br>";
        //converter data para o formato brasileiro (dd/mm/aaaa)
        echo "CADASTRADO: " . date('d/m/Y H:i:s', strtotime($row_usuario["created"])) . "<br>";
        echo "MODIFICADO: ";
        if(!empty($row_usuario["modified"])){
            echo date('d/m/Y H:i:s', strtotime($row_usuario["modified"]));
        }
        echo "<br>";
        
        echo "<hr>";
         
    }

    echo "<hr>";
    echo "<h2>Listar usuários otimizado - usa a chave do array como variável</h2>";

    // Demonstração para usar a chave do array como variável, assim otimiza o código
    // o que faz com que isso funcione é a utilização do FETCH_ASSOC e o extract
    $query_usuarios_b = "SELECT id, nome, email, created, modified FROM usuarios";
    $result_usuarios_b = $conn->prepare($query_usuarios_b);
    $result_usuarios_b->execute();

    while($row_usuario_b = $result_usuarios_b->fetch(PDO::FETCH_ASSOC)){
        //var_dump($row_usuario);

        extract($row_usuario_b);

        echo "ID: " . $id . "<br>";
        echo "NOME: " . $nome . "<br>";
        echo "E-MAIL: " . $email . "<br>";
        //echo "SENHA: " . $row_usuario["senha"] . "<br>";
        //converter data para o formato brasileiro (dd/mm/aaaa)
        echo "CADASTRADO: " . date('d/m/Y H:i:s', strtotime($created)) . "<br>";
        echo "MODIFICADO: ";
        if(!empty($modified)){
            echo date('d/m/Y H:i:s', strtotime($modified));
        }
        echo "<br>";
        
        echo "<hr>";
         
    }
    


    ?>

</body>

</html>