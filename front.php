<?php
include_once __DIR__ . '/header.php';
?>

<div class="welcome-text-on-front-page">
    <h1>Welcome to Redstone!</h1>
</div>
<main class="wrapper">

<div class="action-box">
    <h2>Start by logging in or checking out the menu</h2>
    <a class="big-red-button" href="menu.php">new order</a>
    <p id="action-box-or">or</p>
    <a class="big-red-button">login</a>
    
</div>
<h2>We're Located At</h2>
<div class="location-section-on-front-page">
    <img class="map" src="imgs/map-placeholder.png" alt="map">
    <div class="map-location-information">
        <p class="map-location-information-bold">Redstone Pizza</p>
        <p class="map-location-information-details">3315 Market Street</p>
        <p class="map-location-information-details">Philadelphia, PA</p>
        <p class="map-location-information-details">19104</p>
    </div>

<?php
include_once __DIR__ . '/footer.php';
?>