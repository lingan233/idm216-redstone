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
            <a href="front.php">
                <img src="svg/ui-back-arrow.svg" height="32" width="32">
            </a>
        </div>
        <div class="customize-pizza-grid">
            <div id="sticky-customize-pizza">
                <img src="imgs/menu/plain_pizza_menu.png" alt="customize pizza" id="customize-pizza-img">
                <h1 id="customize-pizza-price">Total Price: $12.00</h1>
            </div>

            <div class="topping-container white-background">
                <form action="customize-pizza-process.php" method="post">
                    <h2 class="orange-text">Add Toppings</h2>
                    <h4>Extra Cheese</h4>
                    <label class="container">
                        <input type="checkbox" value="Mozzarella" id="mozzarella" name="mozzarella" onchange="updatePrice(mozzarella)" >
                        <span class="checkmark"></span>Mozzarella
                        <span class="topping-price">+$1.00</span>
                    </label>
                    <label class="container">
                        <input type="checkbox" value="Parmesan" id="parmesan" name="parmesan" onchange="updatePrice(parmesan)">
                        <span class="checkmark"></span>Parmesan
                        <span class="topping-price">+$1.00</span>
                    </label>

                    <h4>Meats</h4>
                    <label class="container">
                        <input type="checkbox" value="Pepperoni" id="pepperoni" name="pepperoni" onchange="updatePrice(pepperoni)">
                        <span class="checkmark"></span>Pepperoni
                        <span class="topping-price">+$1.00</span>
                    </label>
                    <label class="container">
                        <input type="checkbox" value="Sausage" id="sausage" name="sausage" onchange="updatePrice(sausage)">
                        <span class="checkmark"></span>Sausage
                        <span class="topping-price">+$1.00</span>
                    </label>

                    <h4>Vegetables</h4>
                    <label class="container">
                        <input type="checkbox" value="Spinach" id="spinach" name="spinach" onchange="updatePrice(spinach)">
                        <span class="checkmark"></span>Spinach
                        <span class="topping-price">+$1.00</span>
                    </label>
                    <label class="container">
                        <input type="checkbox" value="Arugula" id="arugula" name="arugula" onchange="updatePrice(arugula)">
                        <span class="checkmark"></span>Arugula
                        <span class="topping-price">+$1.00</span>
                    </label>
                    <label class="container">
                        <input type="checkbox" value="Rosted Garlic" id="rosted-garlic" name="rosted-garlic" onchange="updatePrice(roasted_garlic)">
                        <span class="checkmark"></span>Rosted Garlic
                        <span class="topping-price">+$1.00</span>
                    </label>
                    <label class="container">
                        <input type="checkbox" value="Mushrooms" id="mushrooms" name="mushrooms" onchange="updatePrice(mushrooms)">
                        <span class="checkmark"></span>Mushrooms
                        <span class="topping-price">+$1.00</span>
                    </label>
                    <label class="container">
                        <input type="checkbox" value="Cherry Tomato" id="cherry-tomato" name="cherry-tomato" onchange="updatePrice(cherry_tomato)">
                        <span class="checkmark"></span>Cherry Tomato
                        <span class="topping-price">+$1.00</span>
                    </label>
                    <label class="container">
                        <input type="checkbox" value="Roasted Red Pepper" id="roasted-red-pepper" name="roasted-red-pepper" onchange="updatePrice(roasted_red_pepper)">
                        <span class="checkmark"></span>Roasted Red Pepper
                        <span class="topping-price">+$1.00</span>
                    </label>
                    <label class="container">
                        <input type="checkbox" value="Caramelized Onion" id="caramelized-onion" name="caramelized-onion" onchange="updatePrice(caramelized_onion)">
                        <span class="checkmark"></span>Caramelized Onion
                        <span class="topping-price">+$1.00</span>
                    </label>
                    <label class="container">
                        <input type="checkbox" value="Pear" id="pear" name="pear" onchange="updatePrice(pear)">
                        <span class="checkmark"></span>Pear
                        <span class="topping-price">+$1.00</span>
                    </label>
                    <label class="container">
                        <input type="checkbox" value="Onions" id="onions" name="onions" onchange="updatePrice(onions)">
                        <span class="checkmark"></span>Onions
                        <span class="topping-price">+$1.00</span>
                    </label>
                    <input type="submit" value="Done" class="button done-link">
                </form>
            </div>
        </div>

    </div>
</main>

<script src="customize-pizza.js"></script>
<script src="custom-order-dynamic-price.js"></script>

<?php
include_once __DIR__ . '/footer.php';
?>