<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
header('Content-Type: text/html');

session_start();

if (!isset($_GET['logout']) && isset($_SESSION['username'])) {
  header("Location: content1.php");
}

if (isset($_GET['logout'])) {
  session_destroy();
}

echo '<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Login</title>
</head>
<body>
  <form action="content1.php" method="POST">
  Username:<br>
  <input type="text" name="username">
  <br><br>
  <input type="submit" value="Login">
</body>
</html>';
?>