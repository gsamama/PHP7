<?php
// spl = standard php library
//spl_autoload_register(){}
/*
  function __autoload($nomeClasse){
    require_once("/abstratas/$nomeClasse.php");
  }
*/

function incluirClasses($nomeClasse){
  if(file_exists($nomeClasse.".php")===true){
    require_once($nomeClasse.".php");
  }
}
spl_autoload_register("incluirClasses");
spl_autoload_register(function($nomeClasse){
  if(file_exists("abstratas/$nomeClasse.php")===true){
    require_once("abstratas/$nomeClasse.php");
  }
});

  $carro = new DelRey();
  $carro->acelerar(120);

?>