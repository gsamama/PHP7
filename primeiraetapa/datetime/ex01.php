<?php

$tempo = time();
echo $tempo;
echo "<br/>";
  echo date("d/m/Y H:i:s", 1 );
  echo "<br/>";
  //$ts = strtotime("2001-09-11");
  $ts = strtotime("+1week");
  
  echo date("d/m/Y l", $ts);
  echo "<br/>";
?>