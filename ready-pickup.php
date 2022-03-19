


<?php
include_once __DIR__ . '/header.php';

if (isset($_POST['create-order'])) {
    $username = $_SESSION['username'];
    $create_user_table_query = "CREATE TABLE `local_redstone-pizza`.`user-" . $username . "` ( `id` INT(11) NOT NULL AUTO_INCREMENT COMMENT 'Order ID' , `order-number` VARCHAR(250) NOT NULL COMMENT 'Cart ID' , `total` DECIMAL(10,2) NOT NULL COMMENT 'Total Price' , PRIMARY KEY (`id`)) ENGINE = InnoDB; ";
    $create_user_table_result = mysqli_query($db_connection, $create_user_table_query);
    $order_number = mysqli_real_escape_string($db_connection, $_POST['order-number']);
    $order_price = mysqli_real_escape_string($db_connection, $_POST['order-total']);
    $query = "INSERT INTO `user-{$username}`(`order-number`, `total`) VALUES ('{$order_number}','{$order_price}')";

    $db_results = mysqli_query($db_connection, $query);
    if ($db_results) {
        echo '<main class="wrapper">
        <img src="svg/pizza.svg" alt="pizza graphic" id="ready-pickup-pizza">
        <section id="pickup-details">
    
            <h1>Ready for Pickup!</h1>
    
            <div id="pickup-number">
                <h2>Order #: </h2>
                <p id="order-number">A7F32</p>
            </div>
    
            <div id="pickup-time">
                <h2>Pick-up Time:</h2>
                <p id="order-time">ASAP</p>
            </div>
    
            <div id="pickup-locale">
                <h2>Pick-up Location:</h2>
                <br>
                <p id="order-locale">3315 Market St, Philadelphia, PA 19104</p>
            </div>
    
        </section>  
    
        <a href="front.php" class="button no-underline">Done</a>
    </main>';
        
    } else {
        echo $username;
        echo "Query didn't work";
    };
};
    ?>


<?php
include_once __DIR__ . '/footer.php';
?>