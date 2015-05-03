<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
header('Content-Type: text/html');


echo '<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Multiplication Table</title>
</head>
<body>';

$validInput = True;

// Checks min-multiplier.
if (!isset($_GET['min-multiplier'])) {
  echo '<p>Missing parameter min-multiplier.</p>';
  $validInput = False;
}

else {
  if(!ctype_digit($_GET['min-multiplier'])) {
  	$validInput = False;
    echo '<p>min-multiplier is not a whole number.</p>';
  }
}

// Checks max-multiplier.
if (!isset($_GET['max-multiplier'])) {
  echo '<p>Missing parameter max-multiplier.</p>';
  $validInput = False;
}

else {
  if(!ctype_digit($_GET['max-multiplier'])) {
  	$validInput = False;
    echo '<p>max-multiplier is not a whole number.</p>';
  }
}

// Checks min-multiplicand.
if (!isset($_GET['min-multiplicand'])) {
  echo '<p>Missing parameter min-multiplicand.</p>';
  $validInput = False;
}

else {
  if(!ctype_digit($_GET['min-multiplicand'])) {
  	$validInput = False;
    echo '<p>min-multiplicand is not a whole number.</p>';
  }
}

// Checks max-multiplicand
if (!isset($_GET['max-multiplicand'])) {
  echo '<p>Missing parameter max-multiplicand.</p>';
  $validInput = False;
}

else {
  if (!ctype_digit($_GET['max-multiplicand'])) {
  	$validInput = False;
    echo '<p>max-multiplicand is not a whole number.</p>';
  }
}

// Checks that mins are not greater than maxs.
if ($validInput) {
  if ($_GET['min-multiplier'] > $_GET['max-multiplier']) {
  	$validInput = False;
  	echo '<p>Minimum multiplier greater than maximum.</p>';
  }

  if ($_GET['min-multiplicand'] > $_GET['max-multiplicand']) {
  	$validInput = False;
  	echo '<p>Minimum multiplicand greater than maximum.</p>';
  }
}

// Creates table if input is valid.
if ($validInput) {
  echo '<table>
  <tr><th></th>';

  for ($i = $_GET['min-multiplier']; $i <= $_GET['max-multiplier']; $i++) {
    echo '<th>'.$i.'</th>';
  }

  echo '</tr>';

  for ($i = $_GET['min-multiplicand']; $i <= $_GET['max-multiplicand']; $i++) {
    echo '<tr><th>'.$i.'</th>';

    for ($j = $_GET['min-multiplier']; $j <= $_GET['max-multiplier']; $j++) {
      echo '<td>'.($i*$j).'</td>';
    }
  }

  echo '</tr></table>';
}

echo '</body></html>';
?>