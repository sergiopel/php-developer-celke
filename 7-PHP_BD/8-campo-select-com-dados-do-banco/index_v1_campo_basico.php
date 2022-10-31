<?php
include_once "conexao.php";
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Sergio - Insert com formulário</title>
    <link rel="shortcut icon" href="images/favicon.ico">
</head>

<body>
    <h2>Cadastrar usuário com formulário / campo select com dados do banco</h2>
    <?php
    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    if (!empty($dados['SendCadUsuario'])) {
        //var_dump($dados);

        // try.. catch, se der erro cai no catch e emite mensagem personalizada e não o default do servidor
        try {

            $query_usuario = "INSERT INTO usuarios (nome, email, senha, sits_usuario_id, niveis_acesso_id, created)
             VALUES(:nome, :email, :senha, :sits_usuario_id, :niveis_acesso_id, NOW())";
            // A instrução PDO:PARAM_XXX não é obrigatório colocar
            $cad_usuario = $conn->prepare($query_usuario);
            $cad_usuario->bindParam(':nome', $dados['nome'], PDO::PARAM_STR);
            $cad_usuario->bindParam(':email', $dados['email']);
            // criptografando a senha
            // com essa criptografia, a senha cadastrada pode até ser igual (ex: 123456), mas a criptografia
            // sempre fica diferente
            $senha_cript = password_hash($dados['senha'], PASSWORD_DEFAULT);
            $cad_usuario->bindParam(':senha', $senha_cript);
            $cad_usuario->bindParam(':sits_usuario_id', $dados['sits_usuario_id'], PDO::PARAM_INT);
            $cad_usuario->bindParam(':niveis_acesso_id', $dados['niveis_acesso_id'], PDO::PARAM_INT);

            $cad_usuario->execute();

            // if abaixo compara com 1 na verdade, e se for 1 é verdadeiro e cadastrou com sucesso
            if ($cad_usuario->rowCount()) {
                echo "Usuário cadastrado com sucesso!<br>";
                //destruir a variável $dados para que retorne os campos sem valores
                unset($dados);
            }
            /*
            else {
                echo "Usuário não cadastrado com sucesso!<br>";
            }
            */
        } catch (PDOException $erro) {
            echo "Usuário não cadastrado com sucesso!<br>";
            //echo "Erro: Usuário não cadastrado com sucesso! Erro gerado: " . $erro->getMessage() . "<br>";
        }
    }

    ?>

    <form method="POST" action="">
        <label>Nome: </label>
        <!-- manter o nome preenchido se der erro ao tentar cadastrar -->
        <!-- tudo na mesma linha, ao identar o código, fica conforme abaixo, então dá pra fazer de outra
        forma, conforme mostrado no campo e-mail
        Se for cadastrado com sucesso deve apagar o conteúdo dos campos -->
        <input type="text" name="nome" placeholder="Nome completo" value="<?php if (isset($dados['nome'])) {
                                                                                echo $dados['nome'];
                                                                            } ?>" required><br><br>

        <label>E-mail: </label>
        <?php
        $email = "";
        if (isset($dados['email'])) {
            $email = $dados['email'];
        }
        ?>
        <input type="email" name="email" placeholder="Melhor e-mail do usuário" value="<?php echo $email; ?>" required><br><br>

        <label>Senha: </label>
        <?php
        $senha = "";
        if (isset($dados['senha'])) {
            $senha = $dados['senha'];
        }
        ?>
        <input type="password" name="senha" placeholder="Senha do usuário" value="<?php echo $senha; ?>" required><br><br>

        <label>Situação do Usuário: </label>
        <?php
        $sits_usuario_id = "";
        if (isset($dados['sits_usuario_id'])) {
            $sits_usuario_id = $dados['sits_usuario_id'];
        }
        ?>
        <input type="number" name="sits_usuario_id" placeholder="Situação do usuário" value="<?php echo $sits_usuario_id; ?>" required><br><br>

        <label>Nível de Acesso: </label>
        <?php
        $niveis_acesso_id = "";
        if (isset($dados['niveis_acesso_id'])) {
            $niveis_acesso_id = $dados['niveis_acesso_id'];
        }
        ?>
        <input type="number" name="niveis_acesso_id" placeholder="Nível de acesso do usuário" value="<?= $niveis_acesso_id; ?>" required><br><br>

        <input type="submit" name="SendCadUsuario" value="Cadastrar">
    </form>
</body>

</html>