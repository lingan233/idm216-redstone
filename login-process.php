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
        <?php
        $session_id = session_id();

        $login = False;
        $username = "";
        if (!empty($_POST)) {
            if (empty($_POST['username']) || empty($_POST['password'])) {
                echo "<p>Please fill in both the user name and password. </p> <br> <a class='big-red-button' href='login.php'>Go Back</a>";
            } else {
                $username = $_POST['username'];
                $login = True;
                echo "<p>Username and password matched!</p> <br> 
                <a class='big-red-button' href='menu.php'>Start Order</a> ";
                $create_order_query = "CREATE TABLE `local_redstone-pizza`.`cart-" . $session_id . "` ( `id` INT(11) NOT NULL AUTO_INCREMENT COMMENT 'ID' , `menu-item` INT(11) NOT NULL COMMENT 'ID of the menu item.' , PRIMARY KEY (`id`)) ENGINE = InnoDB; ";
                $create_order_result = mysqli_query($db_connection, $create_order_query);
            }
        }
        // echo '<pre>  $login: <br>';
        // var_dump($login);
        // echo '</pre>';
        $_SESSION['login'] = $login;
        $_SESSION['username'] = $username;
        ?>
    </div>
</div>
