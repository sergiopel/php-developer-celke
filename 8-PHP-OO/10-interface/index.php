<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Interface</title>
    </head>
    <body>
        <?php

            // Incluir os arquivos
            require './Icurso.php';
            require './CursoPosGraduacao.php';
            require './CursoGraduacao.php';

            // Instacia a classe CursoPosGraduacao, criando o objeto 
            $cursoPosGraducao = new CursoPosGraduacao;
            // Instancia o método disciplina
            // Ao invés de eu atribuir a uma variável pra depois imprimir na tela,
            // eu posso já dar o echo direto, pois já está recebendo a string
            echo $cursoPosGraducao->disciplina("Matemática");
            // Instancia o método professor
            echo $cursoPosGraducao->professor("Aristóteles");

            $cursoGraduacao = new CursoGraduacao;
            echo $cursoGraduacao->disciplina("Desenvolvimento PHP");
            echo $cursoGraduacao->professor("Cesar");

        ?>

    </body>
</html>

