<?php

interface Veiculo {
    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);
}

abstract class Automovel implements Veiculo{
  public function acelerar($velocidade){
    $modelo = get_class($this);
    echo "o $modelo acelerou até $velocidade km/h<hr />";
  }
  public function frenar($velocidade){
    $modelo = get_class($this);
    echo "o $modelo frenou até $velocidade km/h<hr />";
  }
  public function trocarMarcha($marcha){
    $modelo = get_class($this);
    echo "o $modelo engatou a marcha $marcha<hr />";
  }
}

class DelRey extends Automovel{
  public function empurrar(){
    echo "empurrando...";
  }
}
$carro = new DelRey();
$carro->acelerar(200);


?>