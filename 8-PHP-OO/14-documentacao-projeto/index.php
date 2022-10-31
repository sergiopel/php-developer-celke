<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Celke</title>
</head>

<body>
    <?php

    /*
        Link para documentação:
        https://www.php-fig.org/psr/
        https://github.com/php-fig/fig-standards/blob/master/proposed/phpdoc.md
        https://github.com/php-fig/fig-standards/blob/master/proposed/phpdoc-tags.md
        E tambem é preciso instalar no VsCode a extensão PHP DocBlocker, do Neil Brayfield
    */
 
    require './Funcionario.php';
    require './Bonus.php';

    $funcionario = new Funcionario();

    // atributo público pode ser acessado de qualquer lugar
    $funcionario->nome = "Cesar";
    $funcionario->salario = 7961.52;
    echo $funcionario->verSalario();

    // Dá erro, pois atributo privado não pode ser acessado fora da clase
    //$funcionario->salarioConvertido = 9999.99;

    // Dá erro, pois método privado não pode ser acessado fora da classe
    //$funcionario->converterSalario();

    // Dá erro, pois atributo protegido não pode ser acessado fora da classe, exceto pela própria classe e
    // pela classe filha (herdada)
    //$funcionario->bonus;

    // Dá erro, pois método protegido não pode ser acessado fora da classe, exceto pela própria classe e
    // pela classe filha (herdada)
    //$funcionario->bonusCalculado();

    $funcBonus = new Bonus();
    echo $funcBonus->verBonus();



    ?>
</body>

</html>