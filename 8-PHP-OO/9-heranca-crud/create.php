<?php
    session_start(); //inicia a sessão; a inicialização da sessão sempre deve ser a primeira instrução da página
    ob_start(); // limpa o buffer de saída para não dar erro no redirecionamento de página
                // caso utilize um hospedagem compartilhada limitada
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Herança para cadastrar registros</title>
</head>

<body>

    <a href="index.php">Listar</a><br>
    <a href="create.php">Cadastrar</a><br>

    <h1>Cadastrar Usuário</h1>

    <?php
    require './Conn.php';
    require './User.php';

    // o submit envia para a mesma página, pois action="", então usarei ocomandos filter_input_array
    // para receber os dados enviados e armazenar numa array
    $formData = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    
    // verifica se o botão foi clicado para apresentar o var_dump
    if (!empty($formData['SendAddUser'])) {
        //var_dump($formData);
        $createUser = new User();
        $createUser->formData = $formData;
        $criou = $createUser->create();

        if($criou){
            //variável global da sessão recebe a mensagem
            $_SESSION['msg'] =  "<p style='color: green;'>Usuário cadastrado com sucesso!</p>";
            header("Location: index.php"); //faz o redirecionamento para a página de listagem, quando criar o registro
        } else{
            echo "<p style='color: #f00;'>Erro: Usuário não foi cadastrado!</p>";
        }

    }
    
    ?>

    <form name="CreateUser" method="POST" action="">
        <label>Nome: </label>
        <input type="text" name="name" placeholder="Nome completo" required><br><br>

        <label>E-mail: </label>
        <input type="email" name="email" placeholder="Seu melhor e-mail" required><br><br>

        <input type="submit" value="Cadastrar" name="SendAddUser"><br><br>
    </form>

</body>

</html>