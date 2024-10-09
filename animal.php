<?php
class Animal{
  public function som(){
    return "Este animal faz um som.";
  }
}

class Cachorro extends Animal{
  public function som(){
    return "O cachorro late.";
  }
}

$meucachorro = new Cachorro();
echo $meucachorro->som();

?>