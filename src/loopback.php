<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
header('Content-Type: application/json');

if (count($_POST) > 0) {
  echo "{\"Type\":\"POST\",\"parameters\":".json_encode($_POST)."}";
}

else if (count($_GET) > 0) {
  echo "{\"Type\":\"GET\",\"parameters\":".json_encode($_GET)."}";
}

else {
  echo "{\"Type\":\"GET\",\"parameters\":null}";
}
?>