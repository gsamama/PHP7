<?php

abstract class Animal{
  public function falar(){
    return "Som";
  }
  public function mover(){
    return "Anda";
  }
}

class Cachorro extends Animal{
  public function falar(){
    return "Late";
  }
}

class Gato extends Animal{
  public function falar(){
    return "Miar";
  }
}

class Passaro extends Animal{
  public function falar(){
    return "Canta";
  }
  public function mover(){
    // using current class method and parent method, the parent method must be STATIC
    return "Voar" . parent::mover();
  }
}

$pluto = new Cachorro();
echo $pluto->falar() . "<hr />";
echo $pluto->mover() . "<hr />";
//-----------------------------------------------

echo "<br /><br /><br /><br />";
$garfield = new Gato();
echo $garfield->falar() . "<hr />";
echo $garfield->mover() . "<hr />";

//-----------------------------------------------
echo "<br /><br /><br /><br />";

$ave = new Passaro();
echo $ave->falar() . "<hr />";
echo $ave->mover() . "<hr />";

?>