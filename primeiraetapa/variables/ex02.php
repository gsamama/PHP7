<?php
	$nome = "Variable test";
	echo $nome . "<hr />";
  unset($nome); 
  if(isset($nome)){
    echo "nome set [".$nome."]";
  }else{
    echo "nome not set";
  }
?>