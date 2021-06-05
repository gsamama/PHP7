<?php

$name = "images";
if(!is_dir($name)){
  mkdir($name);
  echo "/$name created";
}
/*
else{
  echo "/$name already exists, removing";
  rmdir($name);
}
*/



?>