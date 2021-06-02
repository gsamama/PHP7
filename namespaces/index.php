<?php
require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();
$cad->setNome("Gilbert");
$cad->setEmail("email@domain.com");
$cad->setSenha("umaSenhaDeTestes");
$cad->registrarVenda();
echo $cad;

?>
