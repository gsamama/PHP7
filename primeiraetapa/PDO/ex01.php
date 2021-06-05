<?php
// PDO --> PHP DATA OBJECT
$conn = new PDO("mysql:dbname=dbphp7;host=127.0.0.1", "root","");

$stmt = $conn->prepare("SELECT * FROM tb_usuarios order by deslogin");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
//var_dump(json_encode($results));
echo "<ul>";
foreach ($results as $row) {
  echo "<li>";
  foreach ($row as $key => $value) {
    echo "<b>$key</b> - <i style='color:#f00'>$value</i> ";
  }
  echo "</li>";
}
echo "</ul>";
?>