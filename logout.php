<?php
include_once __DIR__ . '/header.php';
session_destroy();
?>

<div class="wrapper">
    <div class="logout">
        <p>You have been logged out.</p>
        <a href="front.php" class="big-red-button">Go back</a>
    </div>

</div>

<?php
include_once __DIR__ . '/footer.php';
?>