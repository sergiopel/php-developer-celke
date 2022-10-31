<?php
session_start();
include_once "conexao.php";
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Sergio - Cadastrar usuário</title>
    <link rel="shortcut icon" href="images/favicon.ico">
</head>

<body>
    <h2>Cadastrar usuário</h2>
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
                $_SESSION['msg'] = "<p style='color: green;'>Usuário cadastrado com sucesso!</p>";
                //destruir a variável $dados para que retorne os campos sem valores
                unset($dados);
                header("Location: index.php");
            }else {
                $_SESSION['msg'] = "<p style='color: #f00;'>Erro: Usuário não cadastrado com sucesso!</p>";
                //redireciona para a página principal
                header("Location: index.php");
            }
            
        } catch (PDOException $erro) {
            echo "Usuário não cadastrado com sucesso!<br>";
            echo "Erro: Usuário não cadastrado com sucesso! Erro gerado: " . $erro->getMessage() . "<br>";
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

        <?php
            $query_sits_usuarios = "SELECT id, nome FROM sits_usuarios ORDER BY nome ASC";
            $result_sits_usuarios = $conn->prepare($query_sits_usuarios);
            $result_sits_usuarios->execute();
        ?>
        <label>Situação do Usuário: </label>
        <select name="sits_usuario_id" required>
            <option value="">Selecione</option>
            <?php
                while($row_sit_usuario = $result_sits_usuarios->fetch(PDO::FETCH_ASSOC)){
                    $select_sit_usuario = "";
                    if(isset($dados['sits_usuario_id']) AND ($dados['sits_usuario_id'] == $row_sit_usuario['id'])){
                        $select_sit_usuario = "selected";
                    }
                    echo "<option value='" . $row_sit_usuario['id'] . "' $select_sit_usuario >" . $row_sit_usuario['nome'] . "</option>";
                }
            ?>

        </select>
        <br><br>
        <?php
            $query_niveis_acessos = "SELECT id, nome FROM niveis_acessos ORDER BY nome ASC";
            $result_niveis_acessos = $conn->prepare($query_niveis_acessos);
            $result_niveis_acessos->execute();
        ?>        
        <label>Nível de Acesso: </label>
        <select name="niveis_acesso_id" required>
            <option value="">Selecione</option>
            <?php
                while($row_nivel_acesso = $result_niveis_acessos->fetch(PDO::FETCH_ASSOC)){
                    $select_nivel_acesso = "";
                    if(isset($dados['niveis_acesso_id']) AND ($dados['niveis_acesso_id'] == $row_nivel_acesso['id'])){
                        $select_nivel_acesso = "selected";
                    }
                    echo "<option value='" . $row_nivel_acesso['id'] . "' $select_nivel_acesso >" . $row_nivel_acesso['nome'] . "</option>";
                }
            ?>

        </select>
        <br><br>

        <input type="submit" name="SendCadUsuario" value="Cadastrar">
    </form>
</body>

</html>