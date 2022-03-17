<?php
include_once __DIR__ . '/header.php';
?>

<main class="wrapper">
    <div class="secondary-header">
        <a href="javascript:history.back()">
            <img src="svg/ui-back-arrow.svg" class="back-arrow">
        </a>
        <h1>Order History</h1>
        <div class="shop-cart-button"></div>
    </div>

    <?php

    include __DIR__ . '/order-history-item.php';

    include_once __DIR__ . '/footer.php';
    ?>