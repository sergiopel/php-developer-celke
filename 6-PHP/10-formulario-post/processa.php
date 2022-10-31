<?php
echo "<h3>Receber os dados de cada campo individualmente</h3>";
$nome_cliente = filter_input(INPUT_POST, "nome_cliente", FILTER_SANITIZE_STRING);
$email_cliente = filter_input(INPUT_POST, "email_cliente", FILTER_SANITIZE_EMAIL);
$password_cliente = filter_input(INPUT_POST, "password_cliente", FILTER_SANITIZE_EMAIL);

echo "Nome do cliente: $nome_cliente <br><br>";
echo "E-mail do cliente: $email_cliente <br><br>";
echo "Password do cliente: $password_cliente <br><br>";

echo "<hr>";
echo "<h3>Não usar mais esse padrão (ver código fonte)</h3>";
$nome_cliente_nao_usar = $_POST['nome_cliente'];
echo "Nome do cliente: $nome_cliente_nao_usar <br><br>";

echo "<hr>";

echo "<h3>Receber os dados de todos os campos do formulário com filter_input_array</h3>";
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
echo "<pre>";
var_dump($dados);
echo "</pre>";

echo "<br>";
echo "Nome do cliente: " . $dados['nome_cliente'] . "<br><br>";
echo "E-mail do cliente: " . $dados['email_cliente'] . "<br><br>";
echo "Password do cliente: " . $dados['password_cliente'] . "<br><br>";