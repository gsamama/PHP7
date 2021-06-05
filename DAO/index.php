<?php

require_once("config.php");

$sql = new Sql();

$usuario = new Usuario();
// just one user
//$usuario->getById(2);

//echo "single record: " . $usuario;
//echo "<hr />";

// many users
//$list = Usuario::getAll();
//echo "list: <br />";
//echo json_encode($list);
//$list2 = Usuario::search("ei");
//echo json_encode($list2);

// load user with login and password
$usuario->login("Weisfooder","123123");
echo $usuario;

?>