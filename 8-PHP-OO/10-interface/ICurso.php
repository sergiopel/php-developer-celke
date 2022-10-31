<?php
// INTERFACE
//
// Uma Interface indica quais são os método que as classes filhas devem implementar e as
// classes filhas são obrigadas a implementar todos os métodos da classe pai.
// Os métodos da classe pai não devem ter conteúdo e devem ser públicos

interface ICurso
{
    public function disciplina(string $nomeDisciplina);
    public function professor(string $nomeProfessor);
}