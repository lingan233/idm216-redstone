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
        <a href="payment-method.php" class="white-text">
            <p>
                Use a different payment method?
            </p>
        </a>
    </div>


    <div id="order-details" class="white-background">
        <div id="subtotal-details">
            <h4>Subtotal</h4>
            <p>$12.00</p>
        </div>

        <div id="tax-details">
            <h4>Tax & Fees</h4>
            <p>$2.75</p>
        </div>

        <div id="tip-details">
            <h4>Tips</h4>
            <div id="tip-choose">
                <label class="tip-label" for="0-percent-tip">
                    <input type="radio" id="0-percent-tip" name="tip-amount" value="$0.00">
                    <div class="tip-input" id="first-box">
                        <p>0%</p>
                        <p>$0.00</p>
                    </div>
                </label>

                <label class="tip-label" for="10-percent-tip">
                    <input type="radio" id="10-percent-tip" name="tip-amount" value="$1.00">
                    <div class="tip-input">
                        <p>10%</p>
                        <p>$1.00</p>
                    </div>
                </label>

                <label class="tip-label" for="15-percent-tip">
                    <input type="radio" id="15-percent-tip" name="tip-amount" value="$1.50">
                    <div class="tip-input">
                        <p>15%</p>
                        <p>$1.50</p>
                    </div>
                </label>

                <label class="tip-label" for="20-percent-tip">
                    <input type="radio" id="20-percent-tip" name="tip-amount" value="$2.00">
                    <div class="tip-input" id="last-box">
                        <p>20%</p>
                        <p>$2.00</p>
                    </div>
                </label>
            </div>
        </div>
        <a id="custom-tip" href="customize-tip.php">Enter custom amount</a>

        <div id="total-details">
            <h3>Total</h3>
            <p>$12.75</p>
        </div>
    </div>

    <a href="pick-up-time.php" class="button">Confirm Order</a>


</main>
<?php
include_once __DIR__ . '/footer.php';
?>