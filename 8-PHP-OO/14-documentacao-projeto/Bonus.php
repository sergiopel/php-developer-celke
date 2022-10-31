<?php

/**
 * A classe Bonus é classe filha da classe Funcionario
 * 
 * @author Sergio
 */
class Bonus extends Funcionario
{
    /**
     * Método para ver o bônus
     *
     * @return string retorna o bônus calculado
     */
    public function verBonus(): string
    {
        return "O funcionário tem o bônus de R$ " . $this->bonusCalculado() . "<br>";
    }
}
