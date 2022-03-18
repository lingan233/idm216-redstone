<?php
include_once __DIR__ . '/header.php';
?>

<main class="gray-background">
    <div class="wrapper">
        <div class="secondary-header">
            <a href="menu.php">
                <img src="svg/ui-back-arrow.svg" class="back-arrow">
            </a>
            <h1 id="cart">Cart</h1>
            <div class="shop-cart-button"></div>
        </div>
        <div class="menu-container">
            <?php
            $session_id = session_id();

            $price = 0;
            $cart_query = "SELECT * FROM `cart-" . $session_id . "`"; //Asks for the database to Select all results from recipes
            $cart_result = mysqli_query($db_connection, $cart_query);
            if (!$cart_result) {
                die("Cart query failed..");
            }

            $custom_order_query = "SELECT * FROM `custom-order-" . $session_id . "`"; //Asks for the database to Select all results from recipes
            $custom_order_result = mysqli_query($db_connection,  $custom_order_query);

           /*  $var_value = $_SESSION['customizeValues'];
            if (!$var_value){
            } else {
                $varString = '';
                foreach ($var_value as $value) {
                    $varString .= "+ $value <br>";
                }
                $itemImg = 'plain-pizza.png';
                $itemName = 'Custom Order';
                $itemDescription = $varString;
                $itemPrice = 12.00;
                include __DIR__ . '/cart-item.php';
            }; */



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
                <section class="cart-item">
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

                $custom_price = $row['price'];
            }





            while ($row = mysqli_fetch_assoc($cart_result)) {

                $menu_item = $row['menu-item'];
                $cart_item_query = "SELECT * FROM `menu` WHERE `id` = $menu_item";
                $cart_item_result = mysqli_query($db_connection, $cart_item_query);
                if (!$cart_item_result) {
                    die("Cart item query failed..");
                };


                while ($row = mysqli_fetch_assoc($cart_item_result)) {

                    echo '
                                <section class="cart-item">
                                    <div>
                                        <img src="imgs/menu/' . $row['img'] . '" alt=""></img>
                                    </div>
                                    <div class="cart-item-text">
                                        <h3>' . $row['name'] . '</h3>
                                        <p>' . $row['description'] . '</p>
                                        <p class="price orange-text">$' . $row['price'] . '</p>
                                    </div>
                                </section>
                            ';


                    $price += $row['price'];
                };
            };







            /*         if (isset($_GET['id'])){
            $id = $_GET['id'];
            
            $pizza_query = "SELECT * FROM `menu` WHERE `id` = $id"; //Asks for the database to Select all results from recipes
            
            $pizza_result = mysqli_query($db_connection, $pizza_query);
            if (!$pizza_result) {
                die("Database query failed.");
            }
            
            while ($row = mysqli_fetch_assoc($pizza_result)) {

                echo '
                    <a href="cart.php?id=' . $row['id'] . '" class="no-underline  menu-item">
                        <section>
                            <div>
                                <img src="imgs/menu/' . $row['img'] . '" alt=""></img>
                            </div>
                            <div class="menu-item-text">
                                <h3>' . $row['name'] . '</h3>
                                <p>' . $row['description'] . '</p>
                                <p class="price orange-text">$' . $row['price'] . '</p>
                            </div>
                        </section>
                    </a>';
            
                $price = $row['price'];
            
                }

        } */
            ?>

        </div>

        <?php





        // //On page 2.

        ?>

        <form class="order-instructions">
            <textarea placeholder="Order Instructions..."></textarea>
        </form>

        <a class="button" href="payment.php">
            <?php
            echo 'Payment $' . $price + $custom_price . '.00';
            ?>
        </a>


        <?php
        /*       if (isset($_POST['add-item'])) {

            $menu_item = mysqli_real_escape_string($db_connection, $_POST['id']);

            $query = "INSERT INTO `cart`(`menu-item`) VALUES ('{$menu_item}')";

            $db_results = mysqli_query($db_connection, $query);
            if ($db_results) {
              header('Location: menu-with-cart.php');
              die();
            } else {
                echo "Query didn't work";
            }

        } */
        mysqli_free_result($cart_result);
        mysqli_free_result($cart_item_result);
        ?>

    </div>
</main>

<?php
include_once __DIR__ . '/footer.php';
?>