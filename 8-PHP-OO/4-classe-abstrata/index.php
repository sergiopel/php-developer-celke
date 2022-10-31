<!DOCTYPE html>
<hmtl lang="pt-br">

<head>
    <title>Classe Abstrata</title>
    <meta charset="UTF-8">
</head>

<body>

<h3>Classe abstrata é um modelo, não pode ser instanciada. Somente as classes filhas podem ser instanciadas</h3>
<?php
    require './Cheque.php';
    require './ChequeComum.php';
    require './ChequeEspecial.php';
    
    //A CLASSE ABSTRATA NÃO PODE SER INSTANCIADA
    //$cheque = new Cheque(1248.58, "comum");
    //$msg = $cheque->verValor();
    //echo $msg;

    $chequeComum = new ChequeComum(5697.23, "comum");
    $msgChequeComum = $chequeComum->calcularJuro();
    echo $msgChequeComum;

    $chequeEspecial = new ChequeEspecial(9600.00, "especial");
    $msgChequeEspecial = $chequeEspecial->calcularJuro();
    echo $msgChequeEspecial;
?>

</body>

</hmtl>