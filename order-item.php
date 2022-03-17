<?php

$session_id = session_id();

$price = 0;
$cart_query = "SELECT * FROM `cart-" . $session_id . "`"; //Asks for the database to Select all results from recipes
$cart_result = mysqli_query($db_connection, $cart_query);
if (!$cart_result) {
    die("Cart query failed..");
}

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

            $price += $row['price'];
    };


};


?>