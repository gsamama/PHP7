<?php

class Documento{
  private $numero;
  public function getNumero(){return $this->numero;}
  public function setNumero($numero){$this->numero = $numero;}
}

class CPF extends Documento{
  public function validar():bool
  {
      // aqui viria a regra de validacao

      $numeroCPF = $this->getNumero(); // método buscado da classe-pai

      return true;
  }
}

$doc = new CPF();
$doc->setNumero("12345678912");
var_dump($doc->validar());
echo "<hr />";
echo $doc->getNumero();
?>