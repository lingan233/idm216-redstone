<?php
include_once __DIR__ . '/header.php';

$session_id = session_id();

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

// echo '<pre>  $customizeValues: <br>';
// var_dump($customizeValues);
// echo '</pre>';

//On page 1.
$_SESSION['customizeValues'] = $customizeValues;

$toppings_cost = count($_SESSION['customizeValues']);
$price = $toppings_cost + 12;

$selections = implode(",", $_SESSION['customizeValues']);


$create_custom_pizza_query = "CREATE TABLE `local_redstone-pizza`.`custom-order-" . $session_id . "` ( `id` INT(11) NOT NULL AUTO_INCREMENT COMMENT 'Custom Order ID' , `order-number` VARCHAR(250) NOT NULL COMMENT 'Session associated with the order number.' , `selections` VARCHAR(9000) NOT NULL COMMENT 'User selected toppings' , `price` DECIMAL(10,2) NOT NULL COMMENT 'Total price of order with customizations' , PRIMARY KEY (`id`)) ENGINE = InnoDB; ";
$add_custom_order_query = "INSERT INTO `custom-order-" . $session_id . "` (`order-number`, `selections`, `price`) VALUES ('{$session_id}', '$selections', '{$price}')";
$create_custom_pizza_result = mysqli_query($db_connection, $create_custom_pizza_query);
$add_custom_order_result = mysqli_query($db_connection, $add_custom_order_query);

var_dump($price);
var_dump($_SESSION['customizeValues']);
