<?php
include_once __DIR__ . '/header.php';
?>

<div>
    <h3 class="align-center-text">Pick-up at: Drexel University</h3>
</div>

<main class="gray-background">
    <div class="wrapper">
        <div class="secondary-header">
            <a href="menu-with-cart.php">
                <img src="svg/ui-back-arrow.svg" class="back-arrow">
            </a>
            <h1 id="cart">Cart</h1>
            <div class="shop-cart-button"></div>
        </div>

        <?php
            $cart_query = "SELECT * FROM `cart`"; //Asks for the database to Select all results from recipes
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

                        echo '
                                <section>
                                    <div>
                                        <img src="imgs/menu/' . $row['img'] . '" alt=""></img>
                                    </div>
                                    <div class="menu-item-text">
                                        <h3>' . $row['name'] . '</h3>
                                        <p>' . $row['description'] . '</p>
                                        <p class="price orange-text">$' . $row['price'] . '</p>
                                    </div>
                                </section>';
                    
                        $price = $row['price'];
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
            <?php
        




        // //On page 2.
/*         $var_value = $_SESSION['customizeValues'];
        $varString = '';

        foreach ($var_value as $value) {
            $varString .= "+ $value <br>";
        }

        $itemImg = 'plain-pizza.png';
        $itemName = 'Custom Order';
        $itemDescription = $varString;
        $itemPrice = '$12.00';
        include __DIR__ . '/cart-item.php'; */




        ?>

        <form>
            <textarea placeholder="Order Instructions..."></textarea>
        </form>


        <form method="post">
        
        <input type="hidden" name="id" value="<?php echo $id;?>">
        <input type="submit" name="add-item">
        <label for="add-item">
            <a class="button" href="payment.php"> <?php 
                echo 'Payment ' . $price;
                ?>
            </a>
        </label>
        </form>

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
        ?>

    </div>
</main>

<?php
include_once __DIR__ . '/footer.php';
?>