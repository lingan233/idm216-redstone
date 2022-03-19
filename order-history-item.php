<?php
$username = $_SESSION['username'];
$order_history_query = "SELECT * FROM `user-" . $username . "` ORDER BY `id` DESC";
$order_history_result = mysqli_query($db_connection, $order_history_query);
if (!$order_history_result) {
    die("You have no previous orders. :-(");
}
?>

<?php
while ($row = mysqli_fetch_assoc($order_history_result)) {

    $order_number = $row['order-number'];
    $order_id = $row['id'];
    $order_price = $row['total'];
    $order_list_query = "SELECT * FROM `cart-" . $order_number . "`";
    $order_list_result = mysqli_query($db_connection, $order_list_query);
    $custom_order_query = "SELECT * FROM `custom-order-" . $order_number . "`";
    $custom_order_result = mysqli_query($db_connection, $custom_order_query);

    echo '
    <div class="order-info">
        <h2> Order #' . $order_id .'</h2>
    ';

 if ($custom_order_result){
    while ($row = mysqli_fetch_assoc($custom_order_result)) {

        $usable_array = explode(",", $row['selections']);

        $var_value = $usable_array;


            if (!$var_value){
            } else {
                $varString = '';
                foreach ($var_value as $value) {
                    $varString .= "+ $value <br>";
                }
            }

        echo '
        <p><b>Custom Order</b></p>
        <p>' . $varString . '</p>
        ';
    };
};
        
if ($order_list_result){
    while ($row = mysqli_fetch_assoc($order_list_result)) {

        $menu_item = $row['menu-item'];
        $cart_item_query = "SELECT * FROM `menu` WHERE `id` = $menu_item";
        $cart_item_result = mysqli_query($db_connection, $cart_item_query);
        if (!$cart_item_result) {
            die("Cart item query failed!");
        };

        while ($row = mysqli_fetch_assoc($cart_item_result)) {

            echo '
                    <p> - ' . $row['name'] . '</p>
                ';
        };

        
    };
};

    echo '<p class="price orange-text">$' . $order_price . '</p>
    </div>';

    
};



mysqli_free_result($order_history_result);
mysqli_free_result($order_list_result);
mysqli_free_result($cart_item_result);
    