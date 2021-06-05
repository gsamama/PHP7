<?php

class Pessoa{
  public $nome;
  public function falar(){
    return "O meu nome é : " . $this->nome;
  }
}

$gilbert = new Pessoa();

$gilbert->nome = "Gilbert";
echo $gilbert->falar();
?>