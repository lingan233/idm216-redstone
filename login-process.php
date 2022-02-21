<?php
include_once __DIR__ . '/header.php';

if (!empty($_POST)) {

    if (empty($_POST['username']) || empty($_POST['password'])) {

        echo 'please fill in both the user name and password';
    } else {

        // if (verify_user('usernames.txt',$_POST['username'],$_POST['password']) == 1) {

        //     echo "User name matched!<br />";

        // } else {

        //     echo "username does not exist";
        // }

        echo "User name matched! <br><br> Order start in 3 seconds";
    }
}
?>

<script>
    setTimeout(function() {
        window.location.href = 'menu.php';
    }, 3000);
</script>