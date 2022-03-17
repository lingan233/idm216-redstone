<?php
include_once __DIR__ . '/header.php';
?>
<main class="wrapper">
    <div class="secondary-header">
        <a href="javascript:history.back()">
            <img src="svg/ui-back-arrow.svg" class="back-arrow">
        </a>
        <h1>Review Order</h1>
        <div class="shop-cart-button"></div>
    </div>
    <h2></h2>

    <?php
    include __DIR__ . '/order-item.php';
    ?>

    <section class="debit-card white-background">
        <div id="card-thumbnail">
            <img src="imgs/visa_icon.png" alt=""></img>
        </div>

        <div id="card-choice">
            <p id="payment-type">Debit Card</p>
            <p id="card-number"> 1234 **** **** ****</p>
        </div>
    </section>

    <div class="other-payment-link">
        <a href="" class="white-text">
            <p>
                Use a different payment method?
            </p>
        </a>
    </div>


    <div id="order-details" class="white-background">
        <div id="subtotal-details">
            <h4>Subtotal</h4>
            <p><?php
                echo '$' . number_format($price, 2);
            ?></p>
        </div>

        <div id="tax-details">
            <h4>Tax & Fees</h4>
            <p><?php
                $tax = $price * 0.23;
                echo '$' . number_format($tax, 2);
            ?></p>
        </div>

        <div id="tip-details">
            <h4>Tips</h4>
            <div id="tip-choose">
                <label class="tip-label" for="0-percent-tip">
                    <input type="radio" id="0-percent-tip" name="tip-amount" value="$0.00" onclick="totalPrice(<?php echo $price ?> , <?php echo $tax ?>, ((<?php echo $price ?> + <?php echo $tax ?>) * .0));">
                    <div class="tip-input" id="first-box">
                        <p>0%</p>
                        <p><?php
                            $zero_percent_tip = ($price + $tax) * 0;
                            echo '$' . number_format($zero_percent_tip, 2);
                            ?></p>
                    </div>
                </label>

                <label class="tip-label" for="10-percent-tip">
                    <input type="radio" id="10-percent-tip" name="tip-amount" value="$1.00" onclick="totalPrice(<?php echo $price ?> , <?php echo $tax ?>, ((<?php echo $price ?> + <?php echo $tax ?>) * .10));">
                    <div class="tip-input">
                        <p>10%</p>
                        <p><?php
                            $ten_percent_tip = ($price + $tax) * 0.10;
                            echo '$' . number_format($ten_percent_tip, 2);
                            ?></p>
                    </div>
                </label>

                <label class="tip-label" for="15-percent-tip">
                    <input type="radio" id="15-percent-tip" name="tip-amount" value="$1.50" onclick="totalPrice(<?php echo $price ?> , <?php echo $tax ?>, ((<?php echo $price ?> + <?php echo $tax ?>) * .15));">
                    <div class="tip-input">
                        <p>15%</p>
                        <p><?php
                            $fifteen_percent_tip = ($price + $tax) * 0.15;
                            echo '$' . number_format($fifteen_percent_tip, 2);
                            ?></p>
                    </div>
                </label>

                <label class="tip-label" for="20-percent-tip">
                    <input type="radio" id="20-percent-tip" name="tip-amount" value="$2.00" onclick="totalPrice(<?php echo $price ?> , <?php echo $tax ?>, ((<?php echo $price ?> + <?php echo $tax ?>) * .20));">
                    <div class="tip-input" id="last-box">
                        <p>20%</p>
                        <p><?php
                            $twenty_percent_tip = ($price + $tax) * 0.20;
                            echo '$' . number_format($twenty_percent_tip, 2);
                            ?></p>
                    </div>
                </label>
            </div>
        </div>
        <a id="custom-tip" href="">Enter custom amount</a>

        <div id="total-details">
            <h3>Total</h3>
            <p id="order-total-price"><?php $order_total = $price + $tax;
                                            echo number_format($order_total, 2); ?></p>
        </div>
    </div>

    <form method="post" class="payment-confirmation">
        <input type="hidden" name="order-number" value="<?php echo $session_id; ?>">
        <input type="hidden" name="order-total" value="<?php echo $order_total; ?>">
        <button name="create-order" type="submit" onclick>Confirm Order</button>
    </form>

    <a href="pick-up-time.php" class="button">Confirm Order</a>


    <?php

if (isset($_POST['create-order'])) {
    $username = $_SESSION['username'];
    $create_user_table_query = "CREATE TABLE `local_redstone-pizza`.`user-" . $username . "` ( `id` INT(11) NOT NULL AUTO_INCREMENT COMMENT 'Order ID' , `order-number` VARCHAR(250) NOT NULL COMMENT 'Cart ID' , `total` DECIMAL(10,2) NOT NULL COMMENT 'Total Price' , PRIMARY KEY (`id`)) ENGINE = InnoDB; ";
    $create_user_table_result = mysqli_query($db_connection, $create_user_table_query);
    $order_number = mysqli_real_escape_string($db_connection, $_POST['order-number']);
    $order_price = mysqli_real_escape_string($db_connection, $_POST['order-total']);
    $query = "INSERT INTO `user-{$username}`(`order-number`, `total`) VALUES ('{$order_number}','{$order_price}')";

    $db_results = mysqli_query($db_connection, $query);
    if ($db_results) {
        // header('Location: index.php');
        die();
    } else {
        echo $username;
        echo "Query didn't work";
    }
}
    ?>

</main>
<script src="total-price.js"></script>
<?php
include_once __DIR__ . '/footer.php';
?>