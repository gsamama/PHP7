<?php
$frutas = array("laranja", "abacaxi", "melancia");

//print_r($frutas);

$carros[0][0] = "GM";
$carros[0][1] = "Cobalt";
$carros[0][2] = "Onix";
$carros[0][3] = "Camaro";
 
$carros[1][0] = "Ford";
$carros[1][1] = "Fiesta";
$carros[1][2] = "Fusion";
$carros[1][3] = "Ecosport";


echo $carros[0][3] . "<hr />";

echo end($carros[0]) . "<hr />";
echo end($carros[1]) . "<hr />";

$pessoas = array();
array_push($pessoas, array(
  'nome'=>'Gilbert',
  'idade'=>44
));
array_push($pessoas, array(
  'nome'=>'Alan',
  'idade'=>3
));

print_r($pessoas);
echo "<hr />";
print_r($pessoas[0]['nome']);
echo "<hr />";


?>