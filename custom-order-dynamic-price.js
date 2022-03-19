let mozzarella = document.getElementById("mozzarella");
let parmesan = document.getElementById("parmesan");
let pepperoni = document.getElementById("pepperoni");
let sausage = document.getElementById("sausage");
let spinach = document.getElementById("spinach");
let arugula = document.getElementById("arugula");
let roasted_garlic = document.getElementById("rosted-garlic");
let mushrooms = document.getElementById("mushrooms");
let cherry_tomato = document.getElementById("cherry-tomato");
let roasted_red_pepper = document.getElementById("roasted-red-pepper");
let caramelized_onion = document.getElementById("caramelized-onion");
let pear = document.getElementById("pear");
let onions = document.getElementById("onions");

let displayedCustomOrderPrice = document.getElementById("customize-pizza-price");

let custom_order_price = 12;

function updatePrice(x){
    if (x.checked === true){
        custom_order_price += 1;
    } else if (x.checked === false) {
        custom_order_price -= 1;
    }

    if (custom_order_price < 12){
        custom_order_price = 12;
    }

    console.log(displayedCustomOrderPrice);
    displayedCustomOrderPrice.innerHTML = "Total Price: $" + custom_order_price.toFixed(2);
}
