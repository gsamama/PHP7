<?php
// pulling querystring... so far looks like old fashion PHP
  $nome = $_GET["a"];
  $teste = (int)$_GET["b"];
  var_dump($nome);
  var_dump($teste);
  $ip = $_SERVER['REMOTE_ADDR'];
  $ip1 = $_SERVER['SCRIPT_NAME'];
  
//  echo $ip;
var_dump($ip);
//  echo $ip1;
var_dump($ip1);  
?>