<?php

$session_id = session_id();

$price = 0;
$menu_price = 0;
$custom_price = 0;
$cart_query = "SELECT * FROM `cart-" . $session_id . "`"; //Asks for the database to Select all results from recipes
$cart_result = mysqli_query($db_connection, $cart_query);

$custom_order_query = "SELECT * FROM `custom-order-" . $session_id . "`"; //Asks for the database to Select all results from recipes
$custom_order_result = mysqli_query($db_connection,  $custom_order_query);
if ($custom_order_result) {
    while ($row = mysqli_fetch_assoc($custom_order_result)){

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
        <section class="order-confirmation">
            <div>
                <img src="imgs/menu/plain-pizza.png" alt=""></img>
            </div>
            <div class="cart-item-text">
                <h3>Custom Order</h3>
                <p>' . $varString . '</p>
                <p class="price orange-text">$' . $row['price'] . '</p>
            </div>
        </section>
        ';

        $custom_price += $row['price'];
    }
}

if ($cart_result){
    while ($row = mysqli_fetch_assoc($cart_result)) {
                    
        $menu_item = $row['menu-item']; 
        $cart_item_query = "SELECT * FROM `menu` WHERE `id` = $menu_item";
        $cart_item_result = mysqli_query($db_connection, $cart_item_query);
        if (!$cart_item_result) {
            die("Cart item query failed..");
        };
                                
        while ($row = mysqli_fetch_assoc($cart_item_result)){

                    echo '<section class="order-confirmation">
                            <div>
                                <img src="imgs/menu/' . $row['img'] . '" width="100px" alt=""></img>
                            </div>
                            <div class="cart-item-text">
                                <h3>' . $row['name'] . '</h3>
                            <p class="price orange-text">$' . $row['price'] . '</p>
                        </div>
                        </section>';

                $menu_price += $row['price'];
                }
        };


    };


$price = $menu_price + $custom_price;

?>