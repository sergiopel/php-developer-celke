<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <link rel="shortcut icon" href="images/favicon.ico" />
    <title>Celke - Passagem de parametros por valor e referencia</title>
</head>

<body>
    <?php

    echo "<h4>Passagem por valor</h4>";

    function salario($num){
        $num += 50;
        echo "Dentro da função - Salário com aumento: $num <br>";
    }

    $salario = 8200;
    salario($salario);
    echo "Salário sem aumento: $salario <br>";
    echo "<hr>";

    function salario_a($num){
        $num += 100;
        echo "Dentro da função - Salário com aumento: $num <br>";
        return $num;
    }
    $salario_a = 8500.47;
    $salario_com_aumento = salario_a($salario_a);
    echo "Salário sem aumento: $salario_a <br>";
    echo "Fora da função, imprimindo o retorno - Salário com aumento: $salario_com_aumento <br>";
    echo "<hr>";

    echo "<h4>Passagem por referência</h4>";
    function salario_b(&$num){
        $num +=200;
        echo "Dentro da função - Salário com aumento: $num <br>";
    }
    $salario_b = 9300;
    echo "Salário sem aumento: $salario_b <br>";
    salario_b($salario_b);
    echo "Salário com aumento: $salario_b <br>";

    ?>
</body>

</html>