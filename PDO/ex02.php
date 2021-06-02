<?php
// PDO --> PHP DATA OBJECT
$conn = new PDO("mysql:dbname=dbphp7;host=127.0.0.1", "root","");

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) values(:LOGIN, :PASSWORD)");

$login = "Usuario123";
$password = "qwertyuiop123123";
$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);

echo $stmt->execute();

?>