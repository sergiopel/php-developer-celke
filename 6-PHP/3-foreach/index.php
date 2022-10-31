<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="images/favicon.ico">
    <title>PHP - foreach</title>
</head>

<body>
    <?php
        //forma mais usual para navegar entre os elementos de um array
        // utilizado também quando quer retornar informações de um banco de dados
        $alunos = ["A", "B", "C","D"];
        //var_dump($alunos);
        echo "<br>";

        foreach($alunos as $aluno){
            echo "Nome: $aluno <br>";
        }
    ?>
</body>

</html>