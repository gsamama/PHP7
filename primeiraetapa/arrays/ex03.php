<?php
$json = '[{"nome":"Gilbert","idade":44},{"nome":"Alan","idade":3}]';

$data = json_decode($json);
var_dump($data);
?>