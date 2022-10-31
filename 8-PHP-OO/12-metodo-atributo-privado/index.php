<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Celke</title>
    </head>
    <body>
        <?php
            require './Funcionario.php';

            $funcionario = new Funcionario();
            $funcionario->nome = "Cesar";
            $funcionario->salario = 7961.52;
            echo $funcionario->verSalario();

            // Dá erro, pois atributo privado não pode ser acessado fora da clase
            //$funcionario->salarioConvertido = 9999.99;

            // Dá erro, pois método privado não pode ser acessado fora da classe
            //$funcionario->converterSalario();

        ?>
    </body>
</html>
