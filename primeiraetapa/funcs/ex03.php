<?php
function ola($texto = "todos", $periodo="bom dia"){
  return "ola $texto! $periodo<br />";

}

echo ola("você", "boa noite");
echo ola("Gilbert", "");
echo ola("Alan", "boa tarde");

echo ola("teste");

?>