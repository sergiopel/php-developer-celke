<?php

session_start();
ob_start();

// Receber o id da URL
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

// Verificar se o ID possui valor
if (!empty($id)) {
    // Incluir os arquivos
    require './Conn.php';
    require './User.php';

    // Instanciar a classe e criar o objeto
    $deleteUser = new User();

    // Evniar o ID  para o atributo da classe User
    $deleteUser->id = $id;

    // Instanciar o método apagar
    $deletou = $deleteUser->delete();

    if ($deletou) {
        $_SESSION['msg'] = "<p style='color: green;'>Usuário excluído com sucesso!</p>";
        header("Location: index.php");
    } else {
        $_SESSION['msg'] = "<p style='color: #f00;'>Erro: O usuário não foi excluído!</p>";
        header("Location: index.php");
    }
} else {
    $_SESSION['msg'] = "<p style='color: #f00;'>Erro: Usuário não encontrado!</p>";
    header("Location: index.php");
}
