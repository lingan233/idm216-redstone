<?php
include_once __DIR__ . '/header.php';
?>

<div>
    <h3 class="align-center-text">Pick-up at: Drexel University</h3>
</div>

<main class="gray-background">
    <div class="wrapper">
        <div class="secondary-header">
            <img src="https://via.placeholder.com/50" alt="" onclick="history.back()"></img>
            <h1>Cart</h1>
            <img src="https://via.placeholder.com/50" alt=""></img>
        </div>

        <?php
        $itemImg = 'plain-pizza.png';
        $itemName = 'Custom Order';
        $itemDescription = 'Customize your own pizza for pickup!';
        $itemPrice = '$12.00';
        include __DIR__ . '/pizza-item.php';
        ?>

        <form>
            <textarea>Order Instructions...</textarea>
        </form>
        <a href="cart-login.php">
            <button>Payment</button>
        </a>

    </div>
</main>

<?php
include_once __DIR__ . '/footer.php';
?>