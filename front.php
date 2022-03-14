<?php
include_once __DIR__ . '/header.php';
?>
<main class="wrapper">
    <div class="front-layout">
        <div>
        <?php
        // //On page 2.
        $var_value = $_SESSION['login'];
        if ($var_value == True) {
            echo "<div class='welcome-text-on-front-page'>
            <h1>Hello, John!</h1>
        </div>";
        } else {
            echo "<div class='welcome-text-on-front-page'>
            <h1>Welcome to Red Stone!</h1>
        </div>";
        }


        // //On page 2.
        $var_value = $_SESSION['login'];
        if ($var_value == True) {
            echo "<div class='action-box'>
        <p>Start order by selecting menu items</p>
        <a class='big-red-button' href='menu.php'>start order / menu</a>
            </div>";
        } else {
            echo "<div class='action-box'>
        <p>Start by logging in or checking out the menu</p>
        <a class='big-red-button' href='login.php'>login</a>
        <p>OR</p>
        <a class='big-red-button' href='menu.php'>menu</a>
            </div>";
        }
        ?>
    </div>


    <div class="we-are-located-container">
        <h2 class="align-center-text">We're Located At:</h2>
        <div class="location-section-on-front-page">
            <div class="map">
                <img src="imgs/map-placeholder.png" alt="map">
            </div>

            <div class="map-location-information flex-container">
                <div class="map-location-text">
                    <p class="map-location-information-bold">Red Stone Pizza</p>
                    <p class="map-location-information-details">3315 Market Street</p>
                    <p class="map-location-information-details">Philadelphia, PA</p>
                    <p class="map-location-information-details">19104</p>
                </div>
            </div>
        </div>
    </div>
    


        <?php
        include_once __DIR__ . '/footer.php';
        ?>