<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "sergio22";
$port = 3306;

try{
    // Conexão utilizando a porta
    //$conn = new PDO("mysql:host=$host;port=$port;dbname=" . $dbname,$user,$pass);
    //echo "Conexão com banco de dados realizado com sucesso.";
    
    // Conexão sem a porta (alguns servidores aceitam)
    $conn = new PDO("mysql:host=$host;dbname=" . $dbname,$user,$pass);
    echo "Conexão com banco de dados realizado com sucesso.";
} catch(PDOException $err){
    echo "Erro: ConexãO com banco de dados não foi realizado com sucesso. Erro gerado " . $err->getMessage();
}
