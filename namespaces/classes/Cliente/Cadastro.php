<?php

namespace Cliente; 

class Cadastro extends \Cadastro {
  public function registrarVenda(){
    echo "foi registrada uma venda par ao cliente ". $this->getNome();
  }
}

?>