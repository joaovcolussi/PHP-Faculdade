<?php
class Funcionario{
  public function cargo(){
    return "O funcionário trabalha como generalista.";
  }
}
class Gerente{
  public function cargo(){
  return "O gerente supervisiona a equipe.";
  }
}
class lider extends Funcionario{
  public function cargo(){
    return "O lider ele inspira a equipe.";
  } 
}

$gerente = new Gerente();
echo $gerente->cargo();
$lider = new lider();
echo $lider->cargo();

?>