<?php
// print_r(array_values($CustomizeArray[]));
$customizeArray = [];

if (!empty($_POST)) {
    // echo "submited";
    // echo '<pre>  $_POST: <br>';
    // var_dump($_POST);
    // echo '</pre>';
    $customizeArray = $_POST;
    // echo '<pre>  $CustomizeArray: <br>';
    // var_dump($customizeArray);
    // echo '</pre>';
} else {
    echo "not submited";
}

// echo '<pre>  $CustomizeArray: <br>';
// var_dump($customizeArray);
// echo '</pre>';

// print_r($customizeArray);

$customizeValues = array_values($customizeArray);

echo '+' . $customizeValues[0];
echo '+' . $customizeValues[1];
echo '+' . $customizeValues[2];
echo '+' . $customizeValues[3];
echo '+' . $customizeValues[4];

include __DIR__ . '/menu-with-cart.php';
