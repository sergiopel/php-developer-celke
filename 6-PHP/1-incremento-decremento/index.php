<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="images/favicon.ico">
    <title>Sergio - Incremento e Decremento</title>
</head>

<body>
    <?php
        echo "<h3>Pré-incremento</h3>";
        $a = 5;
        echo "Deve ser 6: " . ++$a . "<br>";
        echo "Deve ser 6: " . $a . "<br><br>";

        echo "<h3>Pós-incremento</h3>";
        $a = 5;
        echo "Deve ser 5: " . $a++ . "<br>";
        echo "Deve ser 6: " . $a . "<br><br>";

        echo "<h3>Pré-decremento</h3>";
        $a = 15;
        echo "Deve ser 14: " . --$a . "<br>";
        echo "Deve ser 14: " . $a . "<br><br>";

        echo "<h3>Pós-decremento</h3>";
        $a = 10;
        echo "Deve ser 10: " . $a-- . "<br>";
        echo "Deve ser 9: " . $a . "<br><br>";
    ?>
</body>

</html>


