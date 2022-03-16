<?php
include_once __DIR__ . '/header.php';

?>
<main class="gray-background">
    <div class="wrapper">
        <div class="secondary-header">
            <a href="front.php">
                <img src="svg/ui-back-arrow.svg" class="back-arrow">
            </a>
            <h1>Menu</h1>
            <a href="cart.php" class="shop-cart-button">
                <img src="svg/shopcart.svg" alt="shop cart" class="shop-cart">
            </a>
        </div>

        <h2 class="menu-subhead">Pizza (10-Inch) </h2>
        <div class="menu-container">
            <?php
            $itemLink = 'select-base.php';
            $itemImg = 'plain-pizza.png';
            $itemName = 'Custom Order';
            $itemDescription = 'Customize your own pizza for pickup!';
            $itemPrice = '$12.00';

            include 'pizza-item.php';
            mysqli_free_result($pizza_result);
            ?>
        </div>

        <h2 class="menu-subhead">Salads</h2>
        <div class="menu-container">
            <?php
            include 'other-item.php';
            mysqli_free_result($other_result);
            ?>
        </div>


        <h2 class="menu-subhead">Drinks</h2>
        <div class="menu-container">
            <?php
            include 'drink-item.php';
            mysqli_free_result($drink_result);
            ?>
        </div>

    </div>
</main>

<?php
    if (isset($_POST['add-item'])) {
        $session_id = session_id();
        $menu_item = mysqli_real_escape_string($db_connection, $_POST['id']);
        $query = "INSERT INTO `cart-{$session_id}`(`menu-item`) VALUES ('{$menu_item}')";
        $db_results = mysqli_query($db_connection, $query);
        if ($db_results) {
            /* header('Location: menu-with-cart.php'); */
            die();
        } else {
            echo "Query didn't work";
        }
    }
?>

<?php
mysqli_close($db_connection);
include_once __DIR__ . '/footer.php';
?>