<?php

namespace Sts\Models;

use PDO;
use PDOException;

abstract class Conn
{
    private string $db = "mysql";
    private string $host = "localhost";
    private string $user = "root";
    private string $pass = "";
    private string $dbname = "banco_mvc";
    private int $port = 3306;
    private object $connect;

    public function connectDb()
    {
        try{
            //$this->connect = new PDO('mysql:host=localhost;port=3306;dbname=banco_mvc','root','');
            $this->connect = new PDO($this->db . ':host=' . $this->host . ';port=' . $this->port . ';dbname=' . $this->dbname, $this->user, $this->pass);
            //echo "Conexão realizada com sucesso!";
            return $this->connect;
        }catch (PDOException $err){
            die('Erro: Por favor tente novamente. Caso o problema persista, entre em contato com o administrador adm@empresa.com');
        }
    }

}
