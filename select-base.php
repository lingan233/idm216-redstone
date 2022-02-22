<?php
include_once __DIR__ . '/header.php';
?>
<main class="wrapper select-base">

    <?php
    // //On page 2.
    $var_value = $_SESSION['login'];
    if ($var_value == True) {
    } else {
        echo "<p> You are not logged in. Please login to start order. </p> <br> <a class='big-red-button' href='login.php'>Login</a>";
        die;
    }
    ?>

    <div class="secondary-header">
        <a href="menu.php"><img src="svg/ui-back-arrow.svg" height="32" width="32"></a>
        <h1>Select Base</h1>
    </div>
    <img src="imgs/menu/plain_pizza_menu.png" alt="">
    <a class="button" href="customize-pizza.php">Classic Red</a>
    <img src="imgs/menu/white_pizza.png" alt="">
    <a class="button" href="customize-pizza.php">White</a>
    <img src="imgs/menu/stuffed_crust.png" alt="">
    <a class="button" href="customize-pizza.php">Stuffed Crust</a>
</main>

<?php
include_once __DIR__ . '/footer.php';
?>