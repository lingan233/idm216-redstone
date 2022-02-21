<?php
session_start();
// $_SESSION['name'] = $_POST['name'];
// echo $_SESSION['name'];
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

<div class="hamburger-menu-background-darken">
    <div class="hamburger-menu">
        <div class="hamburger-menu-exit"><img src="svg/ui-cross.svg" type="image/svg+xml"></div>
        <a class="hamburger-menu-link" href="index.php">Home</a>
        <a class="hamburger-menu-link" href="menu.php">Menu</a>
        <a class="hamburger-menu-link" href="order-history.php">Past Orders</a>
        <div class="hamburger-menu-logout" onclick="logoutUser()">Logout</div>
    </div>
</div>

<header>
    <div id="header-hamburger-navigation"></div>
    <div id="header-logo"><img src="svg/small-logo.svg" type="image/svg+xml"></div>
    <div id="header-search"></div>
</header>

