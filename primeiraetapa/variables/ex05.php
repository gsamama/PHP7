<?php
  $nome = "Gilbert";
  
  function teste(){
    global $nome;
    echo $nome;


  }

  function teste2(){
    $nome = "Alan";
    echo "agora no teste 2 : " . $nome;
  }
  teste();
  teste2();
  
?>