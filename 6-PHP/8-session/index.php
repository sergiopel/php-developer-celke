<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="images/favicon.ico">
    <title>PHP - Session</title>
</head>

<body>
    <?php
    // Ao contrário do cookie, a sessão é salva no servidor e só será eliminada quando fechar o browser
    // ou quando excluir a sessão através do código.
    // Iniciar a sessão sempre precisa ser a primeira instrução da página.
    // A sessão pode ser recuperada em qualquer página do mesmo site (mesma url)
    echo "<h2>Session</h2>";
    
    //criar a sessão
    $_SESSION['id'] = 2;
    $_SESSION['nome'] = 'Sergio';

    //verificar se existe a sessão
    if(isset($_SESSION['id'])){
        echo "Id do usuário " . $_SESSION['id'] . " e o  nome é " . $_SESSION['nome'] . "<br>";
    } else {
        echo "Sessão não encontrada!<br>";
    }

    echo "<hr>";

    //excluir a sessão
    unset($_SESSION['id'], $_SESSION['nome']);

    //verificar se existe a sessão
    if(isset($_SESSION['id'])){
        echo "Id do usuário " . $_SESSION['id'] . " e o  nome é " . $_SESSION['nome'] . "<br>";
    } else {
        echo "Sessão não encontrada!<br>";
    }

    ?>
</body>

</html>