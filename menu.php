<?php
include_once __DIR__ . '/header.php';

?>
<main class="gray-background">
    <div class="wrapper">
        <div class="secondary-header">
            <a href="front.php"><img src="svg/ui-back-arrow.svg" height="32" width="32"></a>
            <h1>Menu</h1>
        </div>
        <h2 class="menu-subhead">12" Inch Pizza</h2>
        <?php
         include 'pizza-item.php';
         mysqli_free_result($pizza_result);
         mysqli_close($db_connection);
        ?>

    </div>
</main>

<?php
include_once __DIR__ . '/footer.php';
?>