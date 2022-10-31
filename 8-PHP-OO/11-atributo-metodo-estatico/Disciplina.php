<?php

class Disciplina
{
    public static $media = 0;

    /*
    public string $aluno;
    public float $notaTrabalho;
    public float $notaProva;
    function __construct(string $aluno, float $notaTrabalho, float $notaProva)
    {
        $this->aluno = $aluno;
        $this->notaTrabalho = $notaTrabalho;
        $this->notaProva = $notaProva;
        self::$media = $this->notaProva + $this->notaTrabalho;
    }
    */


    // Otimizando o construtor. Não precisa criar os atributos; nos parâmetros acrescentar o public
    // e no corpo não é preciso atribuir os parâmetros publicos aos atributos, fica assim:
    function __construct(public string $aluno, public float $notaTrabalho, public float $notaProva)
    {
        self::$media = $this->notaProva + $this->notaTrabalho;
    }


    public function situacao(): string
    {
        if(self::$media >= 7){
            return "Aluno {$this->aluno} está <strong>aprovado</strong> com a média " . self::$media . "<hr>";
        } else {
            return "Aluno {$this->aluno} está <strong>reprovado</strong> com a média " . self::$media . "<hr>";
        }
    }

    static function situacaoAluno(float $nota): string
    {
        if($nota >= 7){
            return "Aluno está <strong>aprovado</strong> com a média " . $nota . "<hr>";
        }else{
            return "Aluno está <strong>reprovado</strong> com a média " . $nota . "<hr>";
        }
    }
}