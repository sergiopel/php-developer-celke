<?php

class Conn
{
    public $host = "localhost";
    public $user = "root";
    public $pass = "";
    public $dbname = "banco1";
    public $port = 3306;
    public $connect = null;

    public function conectar()
    {
        try {
            $this->connect = new PDO("mysql:host=" . $this->host . ";port=" . $this->port . ";dbname=" . $this->dbname, $this->user, $this->pass);
            //echo "Conexão realizada com sucesso!";
            return $this->connect;
        } catch (PDOException $err) {
            //echo "Erro: Não foi possível conectar ao banco de dados!";
            echo "Erro: Não foi possível conectar ao banco de dados! Erro gerado: " . $err->getMessage();
            return false;
        }
    }
}
