<?php

class Usuario
{
    public string $nome;
    public int $idade;
    public string $email;
    
    public function cadastrar($nome, $idade, $email): string //indica o retorno string, poderia ser int, void
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->email = $email;

        //exit(); // força a saída

        // posso retornar concatenando, ou usando as chaves, dentro das aspas duplas, tanto faz
        return "O usuário <strong>" . $this->nome . "</strong> possui a idade <strong> {$this->idade} </strong> com e-mail <strong> {$this->email} </strong> cadastrado com sucesso!";

    }
}
