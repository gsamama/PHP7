<?php

$pessoas = array();
array_push($pessoas, array(
  'nome'=>'Gilbert',
  'idade'=>44
));
array_push($pessoas, array(
  'nome'=>'Alan',
  'idade'=>3
));

echo json_encode($pessoas);
?>