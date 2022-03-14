<?php
$pizza_query = "SELECT * FROM `menu` WHERE `category` = 1"; //Asks for the database to Select all results from recipes
$pizza_result = mysqli_query($db_connection, $pizza_query);
if (!$pizza_result) {
    die("Database query failed.");
}
?>

<a href="<?php echo $itemLink; ?>" class="no-underline menu-item">
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
</a>

<?php
while ($row = mysqli_fetch_assoc($pizza_result)) {

    echo '
        <form method="post" class="menu-item-form">
        <input type="hidden" name="id" value=" ' . $row['id'] . '"> 
        <button name="add-item" type="submit" href="cart.php?id=' . $row['id'] . '" class="no-underline  menu-item">
            <section>
                <div>
                    <img src="imgs/menu/' . $row['img'] . '" alt=""></img>
                </div>
                <div class="menu-item-text">
                    <h3>' . $row['name'] . '</h3>
                    <p>' . $row['description'] . '</p>
                    <p class="price orange-text">$' . $row['price'] . '</p>
                </div>
            </section>
        </button>
        </form>';
}
?>