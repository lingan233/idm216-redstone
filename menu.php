<?php
include_once __DIR__ . '/header.php';

?>
<main class="gray-background">
    <div class="wrapper">
        <div class="secondary-header">
            <a href="front.php"><img src="svg/ui-back-arrow.svg" height="32" width="32"></a>
            <h1>Menu</h1>
        </div>
        <h2 class="menu-subhead">10-Inch Pizza</h2>
        <?php

        $itemLink = 'select-base.php';
        $itemImg = 'plain-pizza.png';
        $itemName = 'Custom Order';
        $itemDescription = 'Customize your own pizza for pickup!';
        $itemPrice = '$12.00';

        include 'pizza-item.php';
        mysqli_free_result($pizza_result);
        ?>
        
        <h2 class="menu-subhead">Salads</h2>
        
        <?php
        include 'other-item.php';
        mysqli_free_result($other_result);
        ?>

        <h2 class="menu-subhead">Drinks</h2>

        <?php
        include 'drink-item.php';
        mysqli_free_result($drink_result);
        mysqli_close($db_connection);
        ?>


    </div>
</main>

<?php
include_once __DIR__ . '/footer.php';
?>