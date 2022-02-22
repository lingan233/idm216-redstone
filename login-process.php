<?php
include_once __DIR__ . '/header.php';
?>
<?php
include_once __DIR__ . '/front.php';
?>
<div class="pop-up white-background">
<a href="front.php" class="close"><img src="svg/ui-cross.svg" height="20" width="20"></a>
    <?php
    if (!empty($_POST)) {

        if (empty($_POST['username']) || empty($_POST['password'])) {
            echo 'please fill in both the user name and password';
        } else {
            echo "User name matched! <br><br> Order start in 3 seconds";
        }
    }
    ?>
</div>


<!-- <script>
    setTimeout(function() {
        window.location.href = 'menu.php';
    }, 3000);
</script> -->