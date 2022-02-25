<?php
include_once __DIR__ . '/header.php';
include_once __DIR__ . '/payment.php';
?>

<div class="wrapper">
    <div class="pop-up white-background">
        <a href="payment.php" class="close">
            <img src="svg/ui-cross.svg" height="30" width="30" class="black-svg">
        </a>

        <h2>Pick Up Times</h2>
        <form id="pick-up-time">
            <label class="pick-up-time" for="asap">
                <input type="radio" id="asap" name="time-choices">
                <div class="pick-up-input">
                    <p>ASAP</p>
                </div>
            </label>
            <label class="pick-up-time" for="time-one">
                <input type="radio" id="time-one" name="time-choices">
                <div class="pick-up-input">
                    <p>10:45 AM</p>
                </div>
            </label>
            <label class="pick-up-time" for="time-two">
                <input type="radio" id="time-two" name="time-choices">
                <div class="pick-up-input">
                    <p>11:00 AM</p>
                </div>
            </label>
            <label class="pick-up-time" for="time-three">
                <input type="radio" id="time-three" name="time-choices">
                <div class="pick-up-input">
                    <p>11:15 AM</p>
                </div>
            </label>
            <label class="pick-up-time" for="time-four">
                <input type="radio" id="time-four" name="time-choices">
                <div class="pick-up-input">
                    <p>11:30 AM</p>
                </div>
            </label>
            <a href="ready-pickup.php" class="big-red-button" id="confirm-pick-up-time">Confirm</a>
        </form>
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