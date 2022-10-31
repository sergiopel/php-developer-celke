<?php

class CursoGraduacao implements ICurso
{

    public string $nomeDisciplina;
    public string $nomeProfessor;

    public function disciplina(string $nomeDisciplina): string
    {
        // o atributo recebe o nome da disciplina e depois retorna a string
        $this->nomeDisciplina = $nomeDisciplina;
        return "Nome da disciplina: {$this->nomeDisciplina} <br>";
    }

    public function professor(string $nomeProfessor): string
    {
        $this->nomeProfessor = $nomeProfessor;
        return "Nome do professor: {$this->nomeProfessor} <hr>";
    }
}
