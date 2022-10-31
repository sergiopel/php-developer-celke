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
    <title>Herança para editar registros</title>
</head>

<body>

    <a href="index.php">Listar</a><br>
    <a href="create.php">Cadastrar</a><br>

    <h1>Editar o Usuário</h1> <!-- esse programa serve para listar todos os detalhes do usuário clicado -->

    <?php
    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']); //destrói a variável global
    }

    //inclui os arquivos
    require './Conn.php';
    require './User.php';
    
    //Receber os dados do formulário
    $formData = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    if (!empty($formData['SendEditUser'])) { // se foi clicado o botão Editar, mostra
        //var_dump($formData);
        $editUser = new User();
        $editUser->formData = $formData;
        $editou = $editUser->edit();

        if ($editou) {
            //variável global da sessão recebe a mensagem
            $_SESSION['msg'] =  "<p style='color: green;'>Usuário editado com sucesso!</p>";
            header("Location: index.php"); //faz o redirecionamento para a página de listagem, quando editar o registro
        } else {
            echo "<p style='color: #f00;'>Erro: Usuário não foi editado!</p>";
        }
    }

    if (!empty($id)) { //verifica se o id possui valor
        
        // instanciar a classe e criar o objeto
        $viewUser = new User();

        // enviando o id para o atributo id da classe User
        $viewUser->id = $id;

        // instancia o método view da classe User pra pegar o retorno da pesquisa do usuário
        $retornoUser = $viewUser->view();
        //var_dump($retornoUser);
        extract($retornoUser);
    ?>
        <form name="EditUser" method="POST" action="">
            <label>Nome: </label>
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type="text" name="name" value="<?php echo $name; ?>" placeholder="Nome completo" required><br><br>

            <label>E-mail: </label>
            <input type="email" name="email" value="<?php echo $email; ?>" placeholder="Seu melhor e-mail" required><br><br>

            <input type="submit" value="Editar" name="SendEditUser"><br><br>
        </form>

    <?php
    } else {
        $_SESSION['msg'] =  "<p style='color: #f00;'>Erro: Usuário não encontrado!</p>";
        header("Location: index.php"); //faz o redirecionamento para a página de listagem, quando o usuário não existir
    }




    ?>

</body>

</html>