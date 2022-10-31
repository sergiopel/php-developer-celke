<?php

class ChequeComum extends Cheque
{
    public function calcularJuro(): string
    {
        
        
        //usando método da classe pai
        //$valorConvReal = parent::convertReal($this->valor);

        //ou posso simplesmente usar desta forma
        $valorSemJuros = $this->convertReal($this->valor);
        $valorComJuros = $this->convertReal($this->valor + ($this->valor * 0.2));
        return "Valor do cheque {$this->tipo} sem juros é R$ {$valorSemJuros} e com juros é R$ {$valorComJuros}<br>";
    }
}