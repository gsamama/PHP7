<?php
  $frase = "A repetição é mãe da retenção.";
  $palavra = "mãe"; 

  $q = strpos($frase, $palavra);
  //var_dump($q); // 17



  $texto = substr($frase, 0 , $q);
  //var_dump($texto);  //A repetição é 
  
  $texto2 = substr($frase, $q);
  //var_dump($texto2); //string(19) "mãe da retenção."

  $texto3 = substr($frase, $q+strlen($palavra)); // strlen("mãe") = 3
  var_dump($texto3); // string(15) " da retenção."

  



?>