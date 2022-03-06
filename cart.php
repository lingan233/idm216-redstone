<?php
include_once __DIR__ . '/header.php';
?>

<div>
    <h3 class="align-center-text">Pick-up at: Drexel University</h3>
</div>

<main class="gray-background">
    <div class="wrapper">
        <div class="secondary-header">
            <a href="front.php">
                <img src="svg/ui-back-arrow.svg" class="back-arrow">
            </a>
            <h1 id="cart">Cart</h1>
            <div class="shop-cart-button"></div>
        </div>

        <?php

        include 'cart-order-database.php'

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

        <a class="button" href="payment.php"> Payment
        </a>

    </div>
</main>

<?php
include_once __DIR__ . '/footer.php';
?>