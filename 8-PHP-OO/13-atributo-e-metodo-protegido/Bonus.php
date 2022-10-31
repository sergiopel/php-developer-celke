<?php

class Bonus extends Funcionario
{
    public function verBonus(): string
    {
        return "O funcionário tem o bônus de R$ " . $this->bonusCalculado() . "<br>";
    }
}
