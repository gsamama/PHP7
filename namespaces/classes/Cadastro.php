<?php

class Cadastro{

  // private attributes
  private $nome;
  private $email;
  private $senha;

  // getters and setters
  public function getNome():string{return $this->nome; }
  public function setNome($nome){$this->nome = $nome;}

  public function getEmail():string{return $this->email; }
  public function setEmail($email){$this->email = $email;}

  public function getSenha():string{return $this->senha; }
  public function setSenha($senha){$this->senha = $senha;}


  public function __toString():string{
    return json_encode(
      array(
        'nome'=>$this->getNome(), 
        'email'=>$this->getEmail(), 
        'senha'=>$this->getSenha()
      )
      );
  }
}

?>