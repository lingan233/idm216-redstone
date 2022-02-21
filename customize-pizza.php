<?php
include_once __DIR__ . '/header.php';
?>
<main class="gray-background">
    <div class="wrapper">
        <!-- <div class="button-nav">
            <a class="small-button" href="select-base.php">Back</a>
            <a href="menu-with-cart.php" class="small-button">Done</a>
        </div> -->

        <div class="secondary-header">
                <a href="front.php"><img src="svg/ui-back-arrow.svg" height="32" width="32"></a>
        </div>

        <img src="imgs/menu/plain_pizza_menu.png" alt="">

        <div class="topping-container white-background">
            <form action="customize-pizza-process.php" method="post">
                <h2 class="orange-text">Add Toppings</h2>
                <h4>Extra Cheese</h4>
                <label class="container">
                    <input type="checkbox" value="Mozzarella" id="mozzarella" name="mozzarella">
                    <span class="checkmark"></span>Mozzarella
                    <span class="topping-price">+$1.00</span>
                </label>
                <label class="container">
                    <input type="checkbox" value="Parmesan" id="parmesan" name="parmesan">
                    <span class="checkmark"></span>Parmesan
                    <span class="topping-price">+$1.00</span>
                </label>

                <h4>Meats</h4>
                <label class="container">
                    <input type="checkbox" value="Pepperoni">
                    <span class="checkmark"></span>Pepperoni
                    <span class="topping-price">+$1.00</span>
                </label>
                <label class="container">
                    <input type="checkbox" value="Sausage">
                    <span class="checkmark"></span>Sausage
                    <span class="topping-price">+$1.00</span>
                </label>

                <h4>Vegetables</h4>
                <label class="container">
                    <input type="checkbox" value="Spinach">
                    <span class="checkmark"></span>Spinach
                    <span class="topping-price">+$1.00</span>
                </label>
                <label class="container">
                    <input type="checkbox" value="Arugula">
                    <span class="checkmark"></span>Arugula
                    <span class="topping-price">+$1.00</span>
                </label>
                <label class="container">
                    <input type="checkbox" value="Rosted Garlic">
                    <span class="checkmark"></span>Rosted Garlic
                    <span class="topping-price">+$1.00</span>
                </label>
                <label class="container">
                    <input type="checkbox" value="Mushrooms">
                    <span class="checkmark"></span>Mushrooms
                    <span class="topping-price">+$1.00</span>
                </label>
                <label class="container">
                    <input type="checkbox" value="Cherry Tomato">
                    <span class="checkmark"></span>Cherry Tomato
                    <span class="topping-price">+$1.00</span>
                </label>
                <label class="container">
                    <input type="checkbox" value="Roasted Red Pepper">
                    <span class="checkmark"></span>Roasted Red Pepper
                    <span class="topping-price">+$1.00</span>
                </label>
                <label class="container">
                    <input type="checkbox" value="Caramelized Onion">
                    <span class="checkmark"></span>Caramelized Onion
                    <span class="topping-price">+$1.00</span>
                </label>
                <label class="container">
                    <input type="checkbox" value="Pear">
                    <span class="checkmark"></span>Pear
                    <span class="topping-price">+$1.00</span>
                </label>
                <label class="container">
                    <input type="checkbox" value="Onions">
                    <span class="checkmark"></span>Onions
                    <span class="topping-price">+$1.00</span>
                </label>
                <input type="submit" value="Done" class="button" id="done-link">
            </form>
        </div>
    </div>
</main>

<?php
include_once __DIR__ . '/footer.php';
?>