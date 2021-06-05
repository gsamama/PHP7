<?php
//////////////////////////////////////////////////////
//basic variables
  $nome = "Gilbert";
  $site = 'github.com/gsamama';

  $ano = 1977;
  $salario = 20000.99;
  $bloqueado = false;
//////////////////////////////////////////////////////
//composed variables
$frutas = array("abacaxi", "laranja", "manga");

//echo $frutas[2];

$nascimento = new DateTime();
//var_dump($nascimento);
/* output from this var_dump

object(DateTime)#1 (3) {
  ["date"]=>
  string(26) "2021-05-29 15:36:14.663755"
  ["timezone_type"]=>
  int(3)
  ["timezone"]=>
  string(13) "Europe/Berlin"
}
*/
$arquivo = fopen("ex03.php", "r");
//var_dump($arquivo);
/**
 * output from this var_dump
 * resource(3) of type (stream)
 */
$nulo = NULL;
echo $nulo;

//////////////////////////////////////////////////////
?>