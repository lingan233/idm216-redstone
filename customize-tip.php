<?php
include_once __DIR__ . '/header.php';
?>

<div class="wrapper">
    <div class="flex-container">
        <form action="payment.php" class="customize-tip" method="post">
            <h1>Customize Your Tip</h1>
            <input type="number" id="quantity" name="quantity" min="0" max="100">
            <label for="percent">%</label>
            <input type="submit" value="Save">
        </form>
    </div>

</div>



<?php
include_once __DIR__ . '/footer.php';
?>