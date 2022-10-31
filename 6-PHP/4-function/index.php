<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="images/favicon.ico">
    <title>PHP - foreach</title>
</head>

<body>
    <?php
        $codigo = "cursophpdev";

        promocao($codigo);

        /* quando coloca o parâmetro da function ex: $valor = null, desobriga que se coloque o parâmetro
           na chamada da função
        */
        function promocao($valor = null){
            echo "Acessou a função<br>";
            echo "Parâmetro: $valor <br>";
            if($valor == "cursophp"){
                //echo "Código válido<br>";
                $msg = "Código válido.";
            }else{
                //echo "Código inválido<br>";
                $msg = "Código inválido.";
            }

            return $msg;
        }

        echo "<hr>";

        $codigo_curso = "cursophp";
        $retorno_dados_funcao = promocao($codigo_curso);
        echo $retorno_dados_funcao . "<br>";

        echo "<hr>";

        $codigo_curso = "cursophp";
        $retorno_dados_funcao = promocao();
        echo $retorno_dados_funcao;

    ?>
</body>

</html>