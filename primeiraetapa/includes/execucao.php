<?php
  //include "incs/ex01.php";
  require_once "incs/ex01.php";
  require_once "incs/ex01.php"; // skips if there's already a require
  
  $resultado = somar(101, 20);
  echo $resultado;

?>