<?php
    session_start(); //a inicialização da sessão sempre deve ser a primeira instrução da página
    ob_start(); // limpa o buffer de saída se houver redirecionamento

    //Receber o id do usuário
    //Recebe um único dado que vem pela url, então é método get, campo id e é um inteiro
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT); 
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Herança para visualizar registros</title>
</head>
<body>
    
    <a href="index.php">Listar</a><br>
    <a href="create.php">Cadastrar</a><br>

    <h1>Detalhes do Usuário</h1> <!-- esse programa serve para listar todos os detalhes do usuário clicado -->

    <?php
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']); //destrói a variável global
        }
        
        if(!empty($id)){ //verifica se o id possui valor
            //inclui os arquivos
            require './Conn.php';
            require './User.php';

            // instanciar a classe e criar o objeto
            $viewUser = new User();
            
            // enviando o id para o atributo id da classe User
            $viewUser->id = $id;
            
            // instancia o método view da classe User pra pegar o retorno da pesquisa do usuário
            $retornoUser = $viewUser->view();
            //var_dump($retornoUser);
            extract($retornoUser);
            echo "Id do usuário: $id<br>";
            echo "Nome do usuário: $name<br>";
            echo "E-mail do usuário: $email<br>";
            echo "Cadastrado: " . date('d/m/Y H:i:s', strtotime($created)). "<br>";
            
            echo "Editado: ";
            if(!empty($modified)){
                echo date('d/m/Y H:i:s', strtotime($modified));
            }
            echo "<br>";
            
        } else {
            $_SESSION['msg'] =  "<p style='color: #f00;'>Erro: Usuário não encontrado!</p>";
            header("Location: index.php"); //faz o redirecionamento para a página de listagem, quando o usuário não existir
        }

        
        
        
    ?>

</body>
</html>