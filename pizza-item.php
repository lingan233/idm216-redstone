<?php
$itemImg = 'plain-pizza.png';
$itemName = 'Custom Order';
$itemDescription = 'Customize your own pizza for pickup!';
$itemPrice = '$12.00';

?>

<section>
    <div>
        <img src="imgs/menu/<?php echo $itemImg; ?>" alt=""></img>
    </div>
    <div class="menu-item-text">
        <h3><?php echo $itemName; ?></h3>
        <p><?php echo $itemDescription; ?></p>
        <p class="price orange-text"><?php echo $itemPrice; ?></p>
    </div>

</section>