<?php

$pessoa = array(
  'nome'=>'Gilbert',
  'idade'=>44
);
foreach($pessoa as &$value){
  if(gettype($value)==='integer') $value +=10;
  echo $value . "<br />";
}
print_r($pessoa);
?>