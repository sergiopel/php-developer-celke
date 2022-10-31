<?php

/**
 * A classe Funcionario calcula o salário do colaborador
 * 
 * @author Sergio <serpel@gmail.com>
 */
class Funcionario
{
    /** @var string $nome Recebe o nome do colaborador */
    public string $nome;
    /** @var float $salario Recebe o salario do colaborador */
    public float $salario;
    /** @var string $salarioConvertido Recebe o salario convertido para R$ */
    private string $salarioConvertido;
    /** @var float $bonus Recebe o bonus do colaborador */
    protected float $bonus = 2500;

    /**
     * Criar a frase com o nome e o salário do colaborador
     *
     * @return string Retorna a frase com o nome e o salário do colaborador
     */
    public function verSalario(): string
    {
        return "O funcionário {$this->nome} tem o salário R$ {$this->converterSalario($this->salario)} <br>";
    }

    /**
     * Recebe o salário e retorna convertido para R$.
     * Método privado, somente pode ser chamado na classe
     * 
     * @param float $valor Deve ser enviado o parâmetro numérico
     * @return string Retorna o valor convertido para R$
     */
    private function converterSalario(float $valor): string
    {
        $this->salarioConvertido = number_format($valor, '2', ',', '.');
        return $this->salarioConvertido;
    }

    /**
     * Método protegido, somente pode ser chamado na classe ou na classe filha
     *
     * @return string Retorna o bônus
     */
    protected function bonusCalculado(): string
    {
        return $this->converterSalario($this->bonus);
    }
}
