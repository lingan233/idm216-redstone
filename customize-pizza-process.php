<?php
// print_r(array_values($CustomizeArray[]));


if (!empty($_POST)) {
    echo "submited";
    echo '<pre>  $_POST: <br>';
    var_dump($_POST);
    echo '</pre>';

    include __DIR__ . 'menu-with-cart.php';
} else {
    echo "not submited";
}