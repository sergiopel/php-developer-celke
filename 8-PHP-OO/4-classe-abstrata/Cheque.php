<?php

// uma clase abstrata não pode ser instanciada, é usada como modelo para as classes filhas
abstract class Cheque
{
    //Implementação de construtor nas versões anteriores a 8 do PHP, precisa definir os atributos e depois
    // utiliza-los como parametros do construtor e então fazer a atribuição no corpo do construtor
    /*
    public float $valor;
    public string $tipo;

    public function __construct(float $valor, string $tipo)
    {
        $this->valor = $valor;
        $this->tipo = $tipo;
    }
    */

    //NO PHP8, o construtor pode ser otimizado, eliminando a declaração dos atributos e a atribuição dentro do construtor
    public function __construct(public float $valor, public string $tipo)
    {
        
    }

    /*public function verValor(): string
    {
        return "Valor do cheque {$this->tipo} é R$ {$this->valor} <br>";
    }*/

    public function convertReal(float $valor): string
    {
        return number_format($valor, '2', ',', '.');
    }
}
