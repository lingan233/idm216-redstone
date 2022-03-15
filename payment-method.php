<?php
include_once __DIR__ . '/header.php';

?>
<main class="gray-background">
    <div class="wrapper">
        <div class="secondary-header">
            <a href="front.php">
                <img src="svg/ui-back-arrow.svg" class="back-arrow">
            </a>
            <h1>Payment Method</h1>
            <div class="shop-cart-button"></div>
        </div>

        <div class="payment-method-grid">
            <div>
                <div class="white-background payment-method-container">
                    <h2>Cash</h2>
                    <div class="toggle-button" id="cash-option"></div>
                </div>
                <div class="white-background payment-method-container">
                    <h2>Debit Card</h2>
                    <div class="toggle-button toggle-button-active" id="card-option"></div>
                </div>
            </div>

            <form action="payment.php" method="post">
                <div class="toggle-form">
                    <input class="card-name" name="card-name" type="text" placeholder="Full Name" />
                    <input class="card-number" maxlength="19" name="card-number" pattern="\d*" placeholder="Card Number" type="tel" />
                    <input class="card-expires" maxlength="7" name="card-expires" pattern="\d*" placeholder="MM / YY" type="tel" />
                    <input class="card-cvc" maxlength="4" name="card-cvc" pattern="\d*" placeholder="CVC" type="tel" />
                    <a href="https://www.cvvnumber.com/" target="_blank" class="white-text align-right-text">What's CVC?</a>
                </div>
                <input class="button done-link" type="submit" value="Continue to Order">
            </form>
        </div>

    </div>
</main>

<?php
include_once __DIR__ . '/footer.php';
?>