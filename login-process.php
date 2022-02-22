<?php
include_once __DIR__ . '/header.php';
?>
<?php
include_once __DIR__ . '/front.php';
?>
<div class="wrapper">
    <div class="pop-up white-background">
        <a href="front.php" class="close"><img src="svg/ui-cross.svg" height="20" width="20"></a>
        <!-- <div class="secondary-header">
                <a href="front.php"><img src="svg/ui-back-arrow.svg" height="32" width="32"></a>
        </div> -->
        <?php
        $login = False;
        if (!empty($_POST)) {
            if (empty($_POST['username']) || empty($_POST['password'])) {
                echo "<p>Please fill in both the user name and password. </p> <br> <a class='big-red-button' href='login.php'>Go Back</a>";
            } else {
                $login = True;
                echo "<p>Username and password matched!</p> <br> <a class='big-red-button' href='menu.php'>Start Order</a> ";
            }
        }
        // echo '<pre>  $login: <br>';
        // var_dump($login);
        // echo '</pre>';
        $_SESSION['login'] = $login;
        ?>
    </div>
</div>


<!-- <script>
    setTimeout(function() {
        window.location.href = 'menu.php';
    }, 3000);
</script> -->