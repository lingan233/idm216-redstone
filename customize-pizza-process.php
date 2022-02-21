<?php
session_start();
// print_r(array_values($CustomizeArray[]));
$customizeArray = [];

$customizeArray = $_POST;
include __DIR__ . '/menu-with-cart.php';

$customizeValues = array_values($customizeArray);

// echo '+' . $customizeValues[0];
// echo '+' . $customizeValues[1];
// echo '+' . $customizeValues[2];
// echo '+' . $customizeValues[3];
// echo '+' . $customizeValues[4];

echo '<pre>  $customizeValues: <br>';
var_dump($customizeValues);
echo '</pre>';

//On page 1.
$_SESSION['customizeValues'] = $customizeValues;
