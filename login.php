<?php
include_once __DIR__ . '/header.php';
?>

<?php
include_once __DIR__ . '/front.php';
?>
<div class="background-overlay-center">
    <div class="pop-up white-background">
        <a href="front.php" class="close">
            <img src="svg/ui-cross.svg" height="30" width="30" class="black-svg">
        </a>

        <h2>Login to Account</h2>

        <form action="login-process.php" method="post">
            <input class="login-text" type="text" placeholder="Username" id="username" name="username">
            <input class="login-text" type="password" placeholder="Password" id="password" name="password">
            <a href="" class="align-right-text small-text">Forget Password?</a>
            <a class="small-button google-login" href="">
                <img src="svg/google.svg" alt="google icon">
                Login with Google
            </a>
            <input type="submit" value="Login" class="small-button" id="confirm-pick-up-time">
            <a href="">Create an account</a>
        </form>

    </div>
</div>
<?php

// echo '<pre>  $_POST: <br>';
// var_dump($_POST);
// echo '</pre>';
include_once __DIR__ . '/footer.php';
?>