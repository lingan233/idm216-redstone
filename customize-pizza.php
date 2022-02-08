<?php
include_once __DIR__ . '/header.php';
?>
<main class="gray-background">
    <div class="wrapper">
        <div class="button-nav">
            <button class="small-button" onclick="history.back()">Back</button>
            <a href="cart.php">
                <button class="small-button">Done</button>
            </a>
        </div>

        <img src="https://via.placeholder.com/300" alt="">

        <div class="topping-container white-background">

            <form action="">
                <h2 class="orange-text">Add Toppings</h2>
                <h4>Extra Cheese</h4>
                <label class="container">
                    <input type="checkbox">
                    <span class="checkmark"></span>Mozzarella
                    <span class="topping-price">+$1.00</span>
                </label>
                <label class="container">
                    <input type="checkbox">
                    <span class="checkmark"></span>Parmesan
                    <span class="topping-price">+$1.00</span>
                </label>

                <h4>Meats</h4>
                <label class="container">
                    <input type="checkbox">
                    <span class="checkmark"></span>Pepperoni
                    <span class="topping-price">+$1.00</span>
                </label>
                <label class="container">
                    <input type="checkbox">
                    <span class="checkmark"></span>Sausage
                    <span class="topping-price">+$1.00</span>
                </label>

                <h4>Vegetables</h4>
                <label class="container">
                    <input type="checkbox">
                    <span class="checkmark"></span>Spinach
                    <span class="topping-price">+$1.00</span>
                </label>
                <label class="container">
                    <input type="checkbox">
                    <span class="checkmark"></span>Arugula
                    <span class="topping-price">+$1.00</span>
                </label>
                <label class="container">
                    <input type="checkbox">
                    <span class="checkmark"></span>Rosted Garlic
                    <span class="topping-price">+$1.00</span>
                </label>
                <label class="container">
                    <input type="checkbox">
                    <span class="checkmark"></span>Mushrooms
                    <span class="topping-price">+$1.00</span>
                </label>
                <label class="container">
                    <input type="checkbox">
                    <span class="checkmark"></span>Cherry Tomato
                    <span class="topping-price">+$1.00</span>
                </label>
                <label class="container">
                    <input type="checkbox">
                    <span class="checkmark"></span>Roasted Red Pepper
                    <span class="topping-price">+$1.00</span>
                </label>
                <label class="container">
                    <input type="checkbox">
                    <span class="checkmark"></span>Caramelized Onion
                    <span class="topping-price">+$1.00</span>
                </label>
                <label class="container">
                    <input type="checkbox">
                    <span class="checkmark"></span>Pear
                    <span class="topping-price">+$1.00</span>
                </label>
                <label class="container">
                    <input type="checkbox">
                    <span class="checkmark"></span>Onions
                    <span class="topping-price">+$1.00</span>
                </label>
            </form>
            <a href="cart.php">
                <button>Done</button>
            </a>
        </div>
    </div>
</main>

<?php
include_once __DIR__ . '/footer.php';
?>