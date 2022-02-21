<?php

if (!empty($_POST)) {

    if (empty($_POST['username']) || empty($_POST['passwd'])) {

        echo 'please fill in both the user name and password';

    } else {

        if (verify_user('usernames.txt',$_POST['username'],$_POST['passwd']) == 1)) {

            echo "User name matched!<br />";

        } else {

            echo "username does not exist";
        }
    }
}
?>