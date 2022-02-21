<?php
include_once __DIR__ . '/header.php';
?>

<main class="wrapper">
            <div class="pop-up white-background">
                <a href="front.php" class="close"><img src="svg/ui-cross.svg" height="20" width="20"></a>
                <h2>Pick Up Times</h2>
                <form id="pick-up-time">

                    <label class="pick-up-time" for="asap">
                        <input type="radio" id="asap" name="asap">
                        <div class="pick-up-input">
                            <p>ASAP</p>
                        </div>
                    </label>

                    <label class="pick-up-time" for="asap">
                        <input type="radio" id="asap" name="asap">
                        <div class="pick-up-input">
                            <p>10:45</p>
                        </div>
                    </label>

                    <label class="pick-up-time" for="asap">
                        <input type="radio" id="asap" name="asap">
                        <div class="pick-up-input">
                            <p>11:00</p>
                        </div>
                    </label>

                    <label class="pick-up-time" for="asap">
                        <input type="radio" id="asap" name="asap">
                        <div class="pick-up-input">
                            <p>11:15</p>
                        </div>
                    </label>

                    <label class="pick-up-time" for="asap">
                        <input type="radio" id="asap" name="asap">
                        <div class="pick-up-input">
                            <p>11:30</p>
                        </div>
                    </label>
                    <a href="menu.php" id="confirm-pick-up-time">Confirm</a>
                </div>
  

                <div id="tip-choose">
                <label class="tip-label" for="0-percent-tip">
                    <input type="radio" id="0-percent-tip" name="tip-amount" value="$0.00">
                    <div class="tip-input" id="first-box">
                        <p>0%</p>
                        <p>$0.00</p>
                    </div>
                </label>

                <label class="tip-label" for="10-percent-tip">
                    <input type="radio" id="10-percent-tip" name="tip-amount" value="$1.00">
                    <div class="tip-input">
                        <p>10%</p>
                        <p>$1.00</p>
                    </div>
                </label>

                <label class="tip-label" for="15-percent-tip">
                    <input type="radio" id="15-percent-tip" name="tip-amount" value="$1.50">
                    <div class="tip-input">
                        <p>15%</p>
                        <p>$1.50</p>
                    </div>
                </label>

                <label class="tip-label" for="20-percent-tip">
                    <input type="radio" id="20-percent-tip" name="tip-amount" value="$2.00">
                    <div class="tip-input" id="last-box">
                        <p>20%</p>
                        <p>$2.00</p>
                    </div>
                </label>
            </div>

<?php
include_once __DIR__ . '/footer.php';
?>