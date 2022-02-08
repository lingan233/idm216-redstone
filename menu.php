<?php
include_once __DIR__ . '/header.php';
?>
<main class="gray-background">
    <div class="wrapper">
        <div class="secondary-header">
            <img src="https://via.placeholder.com/50" alt="" onclick="history.back()"></img>
            <h1>Menu</h1>
            <img src="https://via.placeholder.com/50" alt=""></img>
        </div>
        <h2>12" Inch Pizza</h2>

        <?php

        $itemImg = 'plain-pizza.png';
        $itemName = 'Custom Order';
        $itemDescription = 'Customize your own pizza for pickup!';
        $itemPrice = '$12.00';

        include __DIR__ . '/pizza-item.php';
        ?>

        <?php
        include __DIR__ . '/pizza-item.php';
        ?>

        <?php
        include __DIR__ . '/pizza-item.php';
        ?>

        <a href="select-base.php">
            <button class="cart-button">Cart
                <div>1</div>
            </button>
        </a>

    </div>
</main>

<?php
include_once __DIR__ . '/footer.php';
?>