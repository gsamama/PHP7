<?php

//setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");
if (setlocale(LC_ALL, 'he_IL') === false) {
  throw new Exception("Locale not available on this machine.");
}

echo strftime("%A %B");

echo "<br />";

?>