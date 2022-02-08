<?php
include_once __DIR__ . '/header.php';
?>

<main class="wrapper">
    <h1>Good Afternoon!</h1>
    <p class="large-text">Today we're at Drexel University from 11AM to 5PM</p>
    <img class="map" src="imgs/map-placeholder.png" alt="map">
    <a href="front-pick-up.php">
        <button>Start a New Order</button>
    </a>
    <a href="">
        <button>Review Order History</button>
    </a>
            <div class="pop-up white-background">
                <a href="front.php" class="close"><img src="https://via.placeholder.com/32"></a>
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