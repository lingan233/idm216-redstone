<?php
session_start();
// $_SESSION['name'] = $_POST['name'];
// echo $_SESSION['name'];
?>

<?php
include 'connection.php'; //adds in the DB Connection File

if (mysqli_connect_errno()) {
    die ("Database connection failed: " . //Checks to see if we get a response. Kills the site if the response fails.
      mysqli_connect_error() .
      " (" . mysqli_connect_errno() . ")"
    );
  }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REDSTONE PIZZA</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/app.css">
    <link rel="icon" sizes="any" type="image/png" href="imgs/favicon.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="main.js"></script>
</head>

<body>
    <div class="hamburger-menu-background-darken" id="hamburger-menu-toggle" style="display: none">
        <div class="hamburger-menu">
            <div id="hamburger-menu-exit" onclick="menuClose()" style="display: none"><img src="svg/ui-cross.svg" type="image/svg+xml"></div>
            <a class="hamburger-menu-link" href="front.php">Home</a>
            <a class="hamburger-menu-link" href="menu.php">Menu</a>
            <a class="hamburger-menu-link" href="order-history.php">Past Orders</a>
            <a href="logout.php" class="no-underline">
                <div class="hamburger-menu-logout" onclick="logoutUser()">Logout</div>
            </a>

        </div>
    </div>

    <header>
        <!-- <a href="front.php"> -->
        <div id="header-hamburger-navigation" onclick="menuOpen()" style="display: flex">
            <img id="hamburger-icon " src="svg/ui-hamburger.svg" type="image/svg+xml">
        </div>
        <!-- </a> -->

        <div id="header-logo"><img src="svg/small-logo.svg" type="image/svg+xml"></div>
        <div id="header-search"></div>
    </header>