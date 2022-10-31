<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title></title>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
            require './Disciplina.php';

            //Acessar o atributo $media. Como é um atributo estático, não precisa criar o objeto
            echo "Média: " . Disciplina::$media . "<br><hr>";

            $disciplina = new Disciplina("Sergio", 5, 3);
            echo $disciplina->situacao();

            //Acessar o método situacaoAluno. Como é um método estático, não precisa criar o objeto
            echo Disciplina::situacaoAluno(6);
        ?>
    </body>
</html>