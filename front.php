<?php
include_once __DIR__ . '/header.php';
?>
<?php
// //On page 2.
$var_value = $_SESSION['login'];
if ($var_value == True) {
    echo "<div class='welcome-text-on-front-page'>
            <h1>Hello, John!</h1>
        </div>";
} else {
    echo "<div class='welcome-text-on-front-page'>
            <h1>Welcome to Redstone!</h1>
        </div>";
}
?>

<main class="wrapper">

    <?php
    // //On page 2.
    $var_value = $_SESSION['login'];
    if ($var_value == True) {
        echo "<div class='action-box'>
        <h2>Start order by selecting menu items</h2>
        <a class='big-red-button' href='menu.php'>start order / menu</a>
            </div>";
    } else {
        echo "<div class='action-box'>
        <h2>Start by logging in or checking out the menu</h2>
        <a class='big-red-button' href='login.php'>login</a>
        <p id='action-box-or'>or</p>
        <a class='big-red-button' href='menu.php'>menu</a>
            </div>";
    }
    ?>

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