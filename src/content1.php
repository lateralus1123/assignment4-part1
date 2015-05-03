<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
header('Content-Type: text/html');

session_start();

if (!isset($_SESSION['username']) && !isset($_POST['username'])) {
  header("Location: login.php");
}

echo '<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Content 1</title>
</head>
<body>';

if(isset($_POST['username'])) {
  if ($_POST['username'] == "" || $_POST['username'] === null) {
    echo 'A username must be entered. Click <a href = "login.php">here</a> to return to the login screen.';
  }

  else {
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['visits'] = 0;
  }
}

if (isset($_SESSION['username'])) {
	$_SESSION['visits']++;

  echo 'Hello, '.$_SESSION['username'].'. You have visited this page '.$_SESSION['visits'].' times before.';
  echo '<br>';
  echo 'Click <a href = "login?logout">here</a> to logout.';
  echo '<br><br>';
  echo 'Visit the next page! Click <a href = "content2.php">here</a>.';
}

echo '</body></html>';
?>