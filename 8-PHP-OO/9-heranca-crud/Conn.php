<?php

abstract class Conn
{
    public string $db = "mysql";
    public string $host = "localhost";
    public string $user = "root";
    public string $pass = "";
    public string $dbname = "sergio3";
    public int $port = 3306;
    public object $connect;

    public function connectDb()
    {
        try{
            //no mysql dá pra conectar com a porta ou sem, dependendo do servidor
            $this->connect = new PDO($this->db . ':host=' . $this->host . ';port=' . $this->port . ';dbname=' . $this->dbname, $this->user, $this->pass);
            //echo "Conexão com o banco de dados realizada com sucesso!<br>";
            return $this->connect;
        }catch(Exception $err){
            die('Erro de conexão: Por favor tente novamente. Caso o problema persista, entre em contato com o administrador adm@serpel.com.br');
            //echo "Erro: Conexão com o banco de dados não realizada com sucesso! Erro gerado: " . $err->getMessage();
        }
    }
}
