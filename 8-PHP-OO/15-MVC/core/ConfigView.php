<?php

namespace Core;

class ConfigView
{
    
    /* Construct antes do PHP 8
    private string $nome;
    private array $dados;

    public function __construct(string $nome, array $dados)
    {
        $this->nome = $nome;
        $this->dados = $dados;
        //var_dump($this->nome);
        //var_dump($this->dados);
    }
    */

    // Construct partir do PHP 8
    public function __construct(private string $nome, private array $dados)
    {
        
    }

    public function renderizar()
    {
        if(file_exists('app/' . $this->nome . '.php')){
            include 'app/' . $this->nome . '.php';
        }else{
            echo "Erro: Por favor tente novamente. Caso o problema persista, entre em contato com o administrador adm@empresa.com";
        }

    }
}