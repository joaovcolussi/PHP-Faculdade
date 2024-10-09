<?php
class Pessoa {
  public $nome;
  public $idade;

  public function __construct($nome, $idade) {
    $this->nome = $nome;
    $this->idade = $idade;
  }

  public function apresentar() {
    return "O nome do aluno é $this->nome e a idade: $this->idade\n";
  }
}

class Estudante extends Pessoa {
  public $curso;

  public function __construct($nome, $idade, $curso) {
    parent::__construct($nome, $idade);
    $this->curso = $curso;
  }

  public function infocurso() {
    return "O curso que o aluno está fazendo é: $this->curso";
  }
}

$estudante1 = new Estudante("João",20,"Análise e desenvolvimento de sistemas.");
$estudante1->apresentar();
$estudante1->infocurso();



?>