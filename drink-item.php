<?php
$drink_query = "SELECT * FROM `menu` WHERE `category` = 2"; //Asks for the database to Select all results from recipes
$drink_result = mysqli_query($db_connection, $drink_query);
if (!$drink_result) {
    die("Database query failed.");
}

?>


<?php
while ($row = mysqli_fetch_assoc($drink_result)) {

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