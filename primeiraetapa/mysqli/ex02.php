<?php

$conn = new mysqli("127.0.0.1", "root","","dbphp7");
if($conn->connect_error){
  echo "Erro: " . $conn->connect_error;
}


$result = $conn->query("SELECT * FROM tb_usuarios order by deslogin");
$data = array();

while($row = $result->fetch_assoc()){ // or fetch_assoc for associative references
  array_push($data, $row);
  //var_dump($row);
  //echo $row["deslogin"] ." - ". $row["dessenha"] . "[" . $row["dtcadastro"] . "]" ."<hr />";
}
echo json_encode($data);
?>