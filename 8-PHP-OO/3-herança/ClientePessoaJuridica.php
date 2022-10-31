<?php

class ClientePessoaJuridica extends Cliente
{
    public int $cnpj;
    public string $nomeFantasia;

    public function verInformacaoEmpresa(): string
    {
        $dados = "Endereço da Pessoa Jurídica<br>";
        $dados .= "Endereço: {$this->logradouro}<br>";
        $dados .= "Bairro: {$this->bairro}<br>";
        $dados .= "CNPJ: {$this->cnpj}<br>";
        $dados .= "Nome Fantasia: {$this->nomeFantasia}<br>";
        
        return "<p>$dados</p>";
    }
}
