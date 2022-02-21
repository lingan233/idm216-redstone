<?php
include_once __DIR__ . '/header.php';
?>

<?php
include_once __DIR__ . '/front.php';
?>
<div class="wrapper">
    <div class="pop-up white-background">
        <a href="cart.php" class="close"><img src="svg/ui-cross.svg" height="20" width="20"></a>
        <h2>Login to Account</h2>
        <form action="login-process.php">
            <input class="login-text" type="text" placeholder="Username">
            <input class="login-text" type="text" placeholder="Password">
            <a class="google-login" href="payment.php">Login with Google</a>
            <a href="menu.php" class="small-button" id="confirm-pick-up-time">Confirm</a>
        </form>

        <div>
        </div>
    </div>

    <?php
    include_once __DIR__ . '/footer.php';
    ?>