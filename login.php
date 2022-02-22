<?php
include_once __DIR__ . '/header.php';
?>

<?php
include_once __DIR__ . '/front.php';
?>
<div class="wrapper">
    <div class="pop-up white-background">
        <a href="front.php" class="close"><img src="svg/ui-cross.svg" height="20" width="20"></a>
        <h2>Login to Account</h2>

        <form action="login-process.php" method="post">
            <input class="login-text" type="text" placeholder="Username" id="username" name="username">
            <input class="login-text" type="text" placeholder="Password" id="password" name="password">
            <a class="small-button google-login" href="">Login with Google</a>
            <input type="submit" value="Login" class="small-button" id="confirm-pick-up-time">
        </form>

        <div>
        </div>
    </div>

    <?php
    
// echo '<pre>  $_POST: <br>';
// var_dump($_POST);
// echo '</pre>';
    include_once __DIR__ . '/footer.php';
    ?>