<?php

$conn = new mysqli("127.0.0.1", "root","","dbphp7");
if($conn->connect_error){
  echo "Erro: " . $conn->connect_error;
}
$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) values(? , ?)");

$stmt->bind_param("ss", $user, $pass);
$user = "user2";
$pass = "123456";

echo $stmt->execute();

?>