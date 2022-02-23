<?php
include_once __DIR__ . '/header.php';
?>

<div class="welcome-text-on-front-page">
    <h1>Create your Account!</h1>
    <p class="large-text"> </p>
</div>
<main class="wrapper">
    <div class="sign-up-box">
        <form>
            <input class="login-text" type="text" placeholder="Username"><br>
            <input class="login-text" type="password" placeholder="Password"><br>
            <input class="login-text" type="password" placeholder="Confirm Password"><br>
            <input class="login-text" type="text" placeholder="Email"><br>
        </form>

        <a href="front.php" class="big-red-button">Create</a>
    </div class="login">

<?php
include_once __DIR__ . '/footer.php';
?>