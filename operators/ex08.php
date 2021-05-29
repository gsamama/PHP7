<?php
  $resultado = 10 + 3 / 2;
  echo "resultado de 10 + 3 / 2 = " . $resultado;
  echo "<hr />";
  $resultado1 = (10 + 3) / 2;
  echo "resultado de (10 + 3) / 2 = " . $resultado1;
  echo "<hr />";
  $resultado2 = (10 + 3) / 2 > 5 && 10 + 5 < 3;
  echo "resultado de (10 + 3) / 2 > 5 && 10+5 < 3 = ";
  var_dump($resultado2);
  echo "<hr />";
  $resultado3 = (10 + 3) / 2 > 5 || 10 + 5 < 3;
  echo "resultado de (10 + 3) / 2 > 5 || 10+5 < 3 = ";
  var_dump($resultado3);
  echo "<hr />";
  
  
?>