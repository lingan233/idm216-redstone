<?php
include_once __DIR__ . '/header.php';
?>

<main class="wrapper">
    <div class="secondary-header">
        <a href="front.php"><img src="svg/ui-back-arrow.svg" height="32" width="32"></a>
        <h1>Order History</h1>
    </div>
   
    <?php

    include __DIR__ . '/order-history-item.php';

    include_once __DIR__ . '/footer.php';
    ?>