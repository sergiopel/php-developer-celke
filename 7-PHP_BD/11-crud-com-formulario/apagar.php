<?php

session_start(); //utilizar sessão

include_once "conexao.php";

// pega o nome da variável enviada via GET pelo index.php
$id_usuario = filter_input(INPUT_GET, "id_usuario", FILTER_SANITIZE_NUMBER_INT);

if ($id_usuario) {
    try {
        $query_usuario = "DELETE FROM usuarios WHERE id=:id LIMIT 1";
        $apagar_usuario = $conn->prepare($query_usuario);
        $apagar_usuario->bindParam(':id', $id_usuario, PDO::PARAM_INT);

        if ($apagar_usuario->execute()) {
            //cria variável global para poder mostrar a mensagem no index.php
            $_SESSION['msg'] = "<p style='color: green;'>Usuário apagado com sucesso!</p>";
            //redireciona para a página principal
            header("Location: index.php");
        } else {
            $_SESSION['msg'] = "<p style='color: #f00;'>Erro: Usuário não apagado com sucesso!</p>";
            //redireciona para a página principal
            header("Location: index.php");
        }
    } catch (PDOException $erro) {
        $_SESSION['msg'] = "<p style='color: #f00;'>Erro: Usuário não apagado com sucesso!</p>";
        //$_SESSION['msg'] = "<p style='color: #f00;'>Erro: Usuário não apagado com sucesso! Erro gerado: " . $erro->getMessage() . "</p>";
        //redireciona para a página principal
        header("Location: index.php");
    }
} else {
    $_SESSION['msg'] = "<p style='color: #f00;'>Erro: Usuário não encontrado!</p>";
    //redireciona para a página principal
    header("Location: index.php");
}
