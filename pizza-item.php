<?php
    $pizza_query = "SELECT * FROM `menu` WHERE `category` = 1"; //Asks for the database to Select all results from recipes
    $pizza_result = mysqli_query($db_connection, $pizza_query);
    if (!$pizza_result){
        die("Database query failed.");
    }
?>
    
<?php

while($row = mysqli_fetch_assoc($pizza_result)){

    echo '<section>
                <div>
                    <img src="imgs/menu/<?php echo $itemImg; ?>" alt=""></img>
                </div>
                <div class="menu-item-text">
                    <h3>' . $row['name'] . '</h3>
                    <p>' . $row['description'] . '</p>
                    <p class="price orange-text">$' . $row['price'] . '</p>
                 </div>
            </section>' ;
}


?>
