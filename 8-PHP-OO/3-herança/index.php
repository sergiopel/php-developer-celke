<!DOCTYPE html>
<hmtl lang="pt-br">

<head>
    <title>Herança</title>
    <meta charset="UTF-8">
</head>

<body>

<?php
    require './Cliente.php';
    require './ClientePessoaFisica.php';
    require './ClientePessoaJuridica.php';

    $cliente = new Cliente();
    $cliente->logradouro = "Av. Aldino Pinotti, 601";
    $cliente->bairro = "Centro";
    $msg = $cliente->verEndereco();
    echo $msg;
    echo "<hr>";

    $clientePF = new ClientePessoaFisica();
    $clientePF->logradouro = "Av. Senador Vergueiro, 608";
    $clientePF->bairro = "Centro";
    $clientePF->nome = "Sergio";
    $clientePF->cpf = 11122233344;
    $msgPF = $clientePF->verInformacaoUsuario();
    echo $msgPF;
    echo "<hr>";

    $clientePJ = new ClientePessoaJuridica();
    $clientePJ->logradouro = "Av. Jurubatuba, 100";
    $clientePJ->bairro = "Centro";
    $clientePJ->nomeFantasia = "Serpel";
    $clientePJ->cnpj = 44555665000115;
    $msgPJ = $clientePJ->verInformacaoEmpresa();
    echo $msgPJ;
    echo "<hr>";

?>

</body>

</hmtl>