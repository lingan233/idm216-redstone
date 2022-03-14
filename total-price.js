let total;
let displayTotal = document.getElementById("order-total-price");

function totalPrice(subtotal, tax, tip){
    total = subtotal + tax + tip;
    readableTotal = total.toFixed(2)
    console.log(total)
    displayTotal.innerHTML = readableTotal;
}