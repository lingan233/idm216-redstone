<?php
include_once __DIR__ . '/header.php';
?>

<div>
    <h3 class="align-center-text">Pick-up at: Drexel University</h3>
</div>

<main class="gray-background">
    <div class="wrapper">
        <div class="secondary-header">
            <a href="front.php"><img src="svg/ui-back-arrow.svg" height="32" width="32"></a>
            <h1 id="cart">Cart</h1>
        </div>

        <?php
        // echo $customizeValues = $_GET['customizeValues'];
        // //On page 2.
        // $var_value = $_SESSION['customizeValues'];
        // echo '<pre>  $var_value: <br>';
        // var_dump($var_value);
        // echo '</pre>';
        $itemImg = 'plain-pizza.png';
        $itemName = 'Custom Order';
        $itemDescription = '+' . $customizeValues[0];
        // echo '<pre>  $CustomizeValues: <br>';
        // var_dump($customizeValues);
        // echo '</pre>';

        $itemPrice = '$12.00';
        include __DIR__ . '/pizza-item.php';
        ?>

        <form>
            <textarea placeholder="Order Instructions..."></textarea>
        </form>
        <a class="button" href="cart-login.php"> Payment
        </a>

    </div>
</main>

<?php
include_once __DIR__ . '/footer.php';
?>