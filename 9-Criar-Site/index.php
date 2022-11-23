<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Sergio</title>
</head>
<body>
    <?php

        require './vendor/autoload.php';

        $url = new Core\ConfigController();
        $url->loadPage();
    ?>
</body>
</html>