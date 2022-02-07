<?php
include_once __DIR__ . '/header.php';
?>

<div>
    <h3 class="align-center-text">Pick-up at: Drexel University</h3>
</div>

<?php
include_once __DIR__ . '/cart.php';
?>

<div class="pop-up">
    <a href="cart.php" class="close"><img src="https://via.placeholder.com/32"></a>
    <h2>Login to Account</h2>
    <input class="login-text" type="text" placeholder="Username">
    <input class="login-text" type="text" placeholder="Password">
    <a class="google-login" href="google.com">Login with Google</a>
    <a href="payment.php" id="confirm-pick-up-time">Confirm</a>
    <div>
    </div>


    <?php
    include_once __DIR__ . '/footer.php';
    ?>