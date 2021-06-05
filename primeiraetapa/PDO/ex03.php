<?php
// PDO --> PHP DATA OBJECT
$conn = new PDO("mysql:dbname=dbphp7;host=127.0.0.1", "root","");

$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin=:LOGIN, dessenha=:PASSWORD WHERE idusuario=:ID");

$login = "Usuario321";
$password = "qwerty";
$id = 3;
$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID", $id);

echo ($stmt->execute()==1)?"ALTERADO OK":"ERRO";

?>