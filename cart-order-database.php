<?php

if (isset($_GET['id'])){
    $id = $_GET['id'];
    
    $order_query = "SELECT * FROM pizza-order";

    $order_result = mysqli_query($db_connection, $order_query);

    $row = mysqli_fetch_assoc($order_result);

    if ($row['item-1'] == '0'){
        "INSERT INTO 'pizza-order' ('item-1') VALUES ($id)";
    } else if ($row['item-2'] == '0'){
        "INSERT INTO 'pizza-order' ('item-2') VALUES ($id)";
    } else if ($row['item-3'] == '0'){
        "INSERT INTO 'pizza-order' ('item-3') VALUES ($id)";
    } else if ($row['item-4'] == '0'){
        "INSERT INTO 'pizza-order' ('item-4') VALUES ($id)";
    } else if ($row['item-5'] == '0'){
        "INSERT INTO 'pizza-order' ('item-5') VALUES ($id)";
    } else if ($row['item-6'] == '0'){
        "INSERT INTO 'pizza-order' ('item-6') VALUES ($id)";
    } else if ($row['item-7'] == '0'){
        "INSERT INTO 'pizza-order' ('item-7') VALUES ($id)";
    } else if ($row['item-8'] == '0'){
        "INSERT INTO 'pizza-order' ('item-8') VALUES ($id)";
    } else if ($row['item-9'] == '0'){
        "INSERT INTO 'pizza-order' ('item-9') VALUES ($id)";
    } else if ($row['item-10'] == '0'){
        "INSERT INTO 'pizza-order' ('item-10') VALUES ($id)";
    } else {
        echo 'Maximum items reached. Please remove a menu item to continue.';
    }
}

?>