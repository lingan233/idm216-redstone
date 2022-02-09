<?php
include_once __DIR__ . '/header.php';
?>

<div class="welcome-text-on-front-page">
    <h1>Good Afternoon!</h1>
    <p class="large-text">Today we're at Drexel University from 11AM to 5PM</p>
</div>
<main class="wrapper">
    <img class="map" src="imgs/map-placeholder.png" alt="map">
    <a href="front-pick-up.php" class="front-link">Start a New Order</a>
    <a href="" class="front-link">Review Order History</a>
            <div class="pop-up white-background">
                <a href="front.php" class="close"><img src="svg/ui-cross.svg" height="20" width="20"></a>
                <h2>Pick Up Times</h2>
                <a class="true-pick-up-time">ASAP</a>
                <a class="false-pick-up-time">10:45 AM</a>
                <a class="false-pick-up-time">11:00 AM</a>
                <a class="false-pick-up-time">11:15 AM</a>
                <a class="false-pick-up-time">11:30 AM</a>
                <a href="menu.php" id="confirm-pick-up-time">Confirm</a>
            <div>

<?php
include_once __DIR__ . '/footer.php';
?>