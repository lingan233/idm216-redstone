<?php
include_once __DIR__ . '/header.php';
?>

<div>
    <h3 class="align-center-text">Pick-up at: Drexel University</h3>
</div>

<main class="gray-background">
    <div class="wrapper">
        <div class="secondary-header">
            <img src="https://via.placeholder.com/50" alt=""></img>
            <h1>Cart</h1>
            <img src="https://via.placeholder.com/50" alt=""></img>
        </div>

        <?php
        include __DIR__ . '/pizza-item.php';
        ?>

        <form>
            <textarea>Order Instructions...</textarea>
        </form>

        <button>Payment</button>
        <div class="pop-up">
                <a href="cart.php" class="close"><img src="https://via.placeholder.com/32"></a>
                <h2>Login to Account</h2>
                <input class="login-text" type="text" placeholder="Username" >
                <input class="login-text" type="text" placeholder="Password">
                <a class="google-login" href="google.com">Login with Google</a>
                <a href="payment.php" id="confirm-pick-up-time">Confirm</a>
            <div>
    </div>


</main>

<?php
include_once __DIR__ . '/footer.php';
?>