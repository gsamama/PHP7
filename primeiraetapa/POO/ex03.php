<?php

class Documento {

  private $numero;

  public function getNumero(){ return $this->numero; }
  public function setNumero($numero){
    if($this->validarCpf($numero)) $this->numero=$numero;
  }

  public function validarCpf($cpf){
    //Verifica se um numero foi informado;
    if(empty($cpf)) return false;

    // elimina possivel mascara
    $cpf = preg_replace('[^0-9]', '', $cpf);
    $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);

    if(strlen($cpf) !=11) return false;

    //verifica se nenhuma das sequencias invalidas abaixo foi digitada, se tiver, retorna falso;
     else if ($cpf == '0000000000000' ||
     $cpf == '1111111111111' ||
     $cpf == '2222222222222' ||
     $cpf == '3333333333333' ||
     $cpf == '4444444444444' ||
     $cpf == '5555555555555' ||
     $cpf == '6666666666666' ||
     $cpf == '7777777777777' ||
     $cpf == '8888888888888' ||
     $cpf == '9999999999999') return false;

     //calcula digito verificador
    else {
      for($t = 9; $t < 11; $t++){
        for($d = 0, $c = 0; $c < $t ; $c++){
          $d += $cpf[$c] * (($t+1) -$c);
        }
        $d = ((10*$d)%11)%10;
        if($cpf[$c] != $d) return false;
      }
    }
    return true;
  }
}
$cpf = new Documento();
$cpf->setNumero("12345678912");
echo "<hr />";
//var_dump($cpf->getNumero());
var_dump(Documento::validarCpf("12345678912"));
?>