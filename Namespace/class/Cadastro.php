<?php

class Cadastro {

  private $name;

  //Getters And Setters
  public function getEmail():string
  {
    return $this->email;
  }

  public function getSenha():string
  {
    return $this->senha;
  }

  public function getName():string {
    return $this->name;
  }

  public function setNome($nome){
    $this->name = $nome;
  }

  public function setEmail($email){
    $this->email = $email;
  }

  public function setSenha($senha){
    $this->senha = $senha;
  }

  //Montar a exibição em string do objeto da classe automaticamente
  public function __toString(){

    return json_encode(array(
      "name" => $this->getName(),
      "email" => $this->getEmail(),
      "senha" => $this->getSenha()
    ));
  }

}
 ?>
