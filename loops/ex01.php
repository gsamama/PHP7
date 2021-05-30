<?php
  for($i = 0; $i < 1000; $i+= 5){
    if($i >= 150 && $i <= 800) continue;
    echo $i . "<br />";
    if($i==900) break;
  }


?>