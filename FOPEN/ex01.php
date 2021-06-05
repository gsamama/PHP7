<?php

$file = fopen("log.txt","a+"); // w+ = write (creates if is a new file) 
fwrite($file, date("Y-m-d H:i:s")."\r\n");
fclose($file);
echo "created !!!";
?>