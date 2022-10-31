<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="images/favicon.ico">
    <title>PHP - function recursiva</title>
</head>

<body>
    <?php
    // função recursiva chama a si mesma
    echo "<h2>Função recursiva</h2>";
    function exibe($num)
    {
        if ($num >= 1) {
            echo "Valor passado para a função: $num <br>";
            $num2 = $num - 1;
            exibe($num2);
        }
    }

    exibe(10);

    ?>
</body>

</html>