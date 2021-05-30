<?php
  require_once("config.php");

  echo session_save_path();

  echo "<br/>";

  var_dump(session_status()); // 0: not active, 1: active but not set, 2: active and set 

?>