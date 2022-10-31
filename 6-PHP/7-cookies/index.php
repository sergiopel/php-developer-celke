<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="images/favicon.ico">
    <title>PHP - Cookies</title>
</head>

<body>
    <?php
    // O cookie é salvo no navegador do usuário
    echo "<h2>Cookies</h2>";
    setcookie("afiliado", "5323", (time() + (7 * 24 * 3600))); // validade de 7 dias

    if (isset($_COOKIE['afiliado'])) {
        $afiliado = $_COOKIE['afiliado']; //recupera o cookie
        echo "Número do afiliado: $afiliado <br>";
    };

    setcookie("logado", "Cesar", (time() + (7 * 3600)));
    if (isset($_COOKIE["logado"])){
        echo "Usuário " . $_COOKIE["logado"] . " logado. <br>";
    } else{
        echo "Cookie inválido!<br>";
    }

    ?>
</body>

</html>