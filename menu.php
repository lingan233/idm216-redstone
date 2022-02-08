<?php
include_once __DIR__ . '/header.php';
?>
<main class="gray-background">
    <div class="wrapper">
        <div class="secondary-header">
            <img src="https://via.placeholder.com/50" alt="" onclick="history.back()"></img>
            <h1>Menu</h1>
            <img src="https://via.placeholder.com/50" alt=""></img>
        </div>
        <h2>12" Inch Pizza</h2>

        <?php
        $itemImg = 'plain-pizza.png';
        $itemName = 'Custom Order';
        $itemDescription = 'Customize your own pizza for pickup!';
        $itemPrice = '$12.00';
        include __DIR__ . '/pizza-item.php';

        $itemImg = 'plain-pizza.png';
        $itemName = 'Pepperoni';
        $itemDescription = 'Fresh tomato sauce, mozzarella and pepperoni';
        $itemPrice = '$12.00';
        include __DIR__ . '/pizza-item.php';

        $itemImg = 'margarita-pizza.png';
        $itemName = 'Margarita';
        $itemDescription = 'Chunky tomato sauce, fresh mozzarella, fresh basil and olive oil';
        $itemPrice = '$10.00';
        include __DIR__ . '/pizza-item.php';

        $itemImg = 'bianca-pizza.png';
        $itemName = 'Bianca';
        $itemDescription = 'Garlic herb sauce, spinach, mozzarella, ricotta cheese, roasted garlic, red peppers';
        $itemPrice = '$12.00';
        include __DIR__ . '/pizza-item.php';

        $itemImg = 'grilled-veggie-pizza.png';
        $itemName = 'Grilled Veggie';
        $itemDescription = 'Eggplant, zucchini, red pepper, red onion, mozzarella, basil, and balsamic glaze';
        $itemPrice = '$12.00';
        include __DIR__ . '/pizza-item.php';

        $itemImg = 'pear-pizza.png';
        $itemName = 'Pear';
        $itemDescription = 'Pecorino cheese, goat cheese, mozzarella, fresh pear, honey and sage';
        $itemPrice = '$12.00';
        include __DIR__ . '/pizza-item.php';

        $itemImg = 'mushroom-pizza.png';
        $itemName = 'Mushroom';
        $itemDescription = 'Shitake mushrooms, white mushrooms, fresh mozzarella, truffle oil, and arugula';
        $itemPrice = '$12.00';
        include __DIR__ . '/pizza-item.php';

        $itemImg = 'angry-pizza.png';
        $itemName = 'Angry';
        $itemDescription = 'Cream sauce, onion, chorizo, mozzarella, jalapeno, chile de arbol cilantro';
        $itemPrice = '$12.00';
        include __DIR__ . '/pizza-item.php';

        $itemImg = 'spinach-bacon-pizza.png';
        $itemName = 'Spinach and Bacon';
        $itemDescription = 'Herb garlic base, mozzarella, spinach, caramelized onions, and bacon';
        $itemPrice = '$12.00';
        include __DIR__ . '/pizza-item.php';

        $itemImg = 'shrimp-tomato-pizza.png';
        $itemName = 'Shrimp and Tomato';
        $itemDescription = 'Fresh tomato sauce, mozzarella, roasted garlic, cherry tomato, shrimp, fresh parsley, and lemon';
        $itemPrice = '$12.00';
        include __DIR__ . '/pizza-item.php';

        $itemImg = 'meatlover-pizza.png';
        $itemName = 'Meatlover';
        $itemDescription = 'Fresh tomato sauce, mozzarella, pecorino cheese, bacon, pepperoni, sausage';
        $itemPrice = '$13.00';
        include __DIR__ . '/pizza-item.php';

        ?>

        <h2>Salad</h2>

        <?php
        $itemImg = 'argulua-salad.png';
        $itemName = 'Arugula Salad';
        $itemDescription = 'Fresh arugula, pears, goat cheese, red onion, and champagne vinaigrette';
        $itemPrice = '$8.00';
        include __DIR__ . '/pizza-item.php';

        ?>


        <a href="select-base.php">
            <button class="cart-button">Cart
                <div>1</div>
            </button>
        </a>

    </div>
</main>

<?php
include_once __DIR__ . '/footer.php';
?>