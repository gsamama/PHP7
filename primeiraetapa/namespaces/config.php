<?php

  spl_autoload_register(function($nomeClasse){
    $dirClass = "classes";
    $fileName = $dirClass . DIRECTORY_SEPARATOR . $nomeClasse . ".php";
    
    if(file_exists($fileName)===true) {
      require_once($fileName);
    }
  });


?>