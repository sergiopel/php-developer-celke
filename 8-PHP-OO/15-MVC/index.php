<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Mvc - core</title>
        <meta charset="UTF-8">
    </head>
    <body>
    
    </body>
</html>

<?php
    // Agora não é preciso incluir arquivo por arquivo com o require,
    // tem o composer pra fazer isso automaticamente.
    // Basta dar um único require do composer.
    require './vendor/autoload.php';

    $url = new Core\ConfigController();
    $url->loadPage();

?>
