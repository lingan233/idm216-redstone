<?php
include_once __DIR__ . '/header.php';
include_once __DIR__ . '/payment.php';
?>

<div class="wrapper">
    <div class="pop-up white-background">
        <a href="front.php" class="close"><img src="svg/ui-cross.svg" height="20" width="20"></a>
        <h2>Pick Up Times</h2>
        <a class="true-pick-up-time">ASAP</a>
        <a class="false-pick-up-time">10:45 AM</a>
        <a class="false-pick-up-time">11:00 AM</a>
        <a class="false-pick-up-time">11:15 AM</a>
        <a class="false-pick-up-time">11:30 AM</a>
        <a href="ready-pickup.php" class="small-button" id="confirm-pick-up-time">Confirm</a>
    </div>
</div>

<!-- <div class="wrapper">
    <div class="white-background">
        <h2>Pick Up Times</h2>
        <a class="true-pick-up-time">ASAP</a>
        <a class="false-pick-up-time">10:45 AM</a>
        <a class="false-pick-up-time">11:00 AM</a>
        <a class="false-pick-up-time">11:15 AM</a>
        <a class="false-pick-up-time">11:30 AM</a>
        <a href="menu.php" class="small-button" id="confirm-pick-up-time">Confirm</a>
    </div>
</div> -->

<?php
include_once __DIR__ . '/footer.php';
?>