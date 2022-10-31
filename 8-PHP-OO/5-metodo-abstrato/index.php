<!DOCTYPE html>
<hmtl lang="pt-br">

<head>
    <title>Classe Abstrata</title>
    <meta charset="UTF-8">
</head>

<body>

<h3>Método Abstrato</h3>
<h4>É um método que deve ser criado na classe pai, sem o corpo (a regra do negócio), e dessa forma,<br>
    obriga a imprementação desse método nas classes filhas, caso contrário dá erro.<br>
    Além disso, pra usar o método abstrato na classe pai, obriga que a classe pai seja também abstrata.<br>
    No método abstrato não precisa abrir e fechar as chaves.</h4>
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