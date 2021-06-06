<?php

  $filename = "usuarios.csv";
  if(file_exists($filename)){
    $file = fopen($filename, "r");
    $data = array();
    $linha = array();
    $headers = explode(",",fgets($file));

    while($row=fgets($file)){
      $rowData = explode(",", $row);
      for($i=0;$i<count($headers);$i++){
        $linha[$headers[$i]] = $rowData[$i];
      }
      array_push($data, $linha);
    }
    echo json_encode($data);
    fclose($file);
  }
?>