<?php

require_once("config.php");

$sql = new Sql();

//$usuarios = $sql->select("SELECT * FROM tb_usuarios");

$usuario = new Usuario();

$usuario->loadById(2);

//echo json_encode($usuarios);
echo $usuario;

?>