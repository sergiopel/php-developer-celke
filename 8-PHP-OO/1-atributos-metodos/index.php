<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Sergio - Classe e Objetos</title>
</head>

<body>
    <?php
        require './Usuario.php';
        $usuario = new Usuario();
        $msg = $usuario->cadastrar("Sergio", 50, "serpel@gmail.com");
        echo $msg;
    ?>
</body>

</html>