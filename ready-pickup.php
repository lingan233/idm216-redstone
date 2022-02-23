


<?php
include_once __DIR__ . '/header.php';
?>
<main class="wrapper">
    <img id="pizza-pickup" src="imgs/pickup_image.png" alt="pizza">
    <section id="pickup-details">

        <h1>Ready for Pickup!</h1>

        <div id="pickup-number">
            <h2>Order #: </h2>
            <p id="order-number">A7F32</p>
        </div>

        <div id="pickup-time">
            <h2>Pick-up Time:</h2>
            <p id="order-time">ASAP</p>
        </div>

        <div id="pickup-locale">
            <h2>Pick-up Location:</h2>
            <br>
            <p id="order-locale">3315 Market St, Philadelphia, PA 19104</p>
        </div>

    </section>  

    <a href="front.php" class="button no-underline">Done</a>
</main>

<?php
include_once __DIR__ . '/footer.php';
?>