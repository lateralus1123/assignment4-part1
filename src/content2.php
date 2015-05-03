<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
header('Content-Type: text/html');

session_start();

if (!isset($_SESSION['username'])) {
  header("Location: login.php");
}

echo '<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Content 2</title>
</head>
<body>';

echo 'This page is just for you. Click <a href = content1.php>here</a> to go back.';

echo '</body></html>';
?>