<?php
include_once __DIR__ . '/header.php';
?>
<main class="wrapper">


<?php
include_once __DIR__ . '/front.php';
?>
            <div class="pop-up">
                <a href="front.php" class="close"><img src="https://via.placeholder.com/32"></a>
                <h2>Pick Up Times</h2>
                <a class="true-pick-up-time">ASAP</a>
                <a class="false-pick-up-time">10:45 AM</a>
                <a class="false-pick-up-time">11:00 AM</a>
                <a class="false-pick-up-time">11:15 AM</a>
                <a class="false-pick-up-time">11:30 AM</a>
                <a href="menu.php" id="confirm-pick-up-time">Confirm</a>
            <div>
</main>

<?php
include_once __DIR__ . '/footer.php';
?>