<?php
$other_query = "SELECT * FROM `menu` WHERE `category` = 3"; //Asks for the database to Select all results from recipes
$other_result = mysqli_query($db_connection, $other_query);
if (!$pizza_result) {
    die("Database query failed.");
}
?>

<?php
while ($row = mysqli_fetch_assoc($other_result)) {

    echo '<section>
                <div>
                    <img src="imgs/menu/' . $row['img'] . '" alt=""></img>
                </div>
                <div class="menu-item-text">
                    <h3>' . $row['name'] . '</h3>
                    <p>' . $row['description'] . '</p>
                    <p class="price orange-text">$' . $row['price'] . '</p>
                 </div>
            </section>';
}


?>