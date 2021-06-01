<?php
$a = 10;
// by reference(memory address)
function trocaValor(&$b){
  $b += 50;
  return $b;
}

echo trocaValor($a);
echo "<br />";
echo trocaValor($a);
echo "<br />";
echo $a;
?>