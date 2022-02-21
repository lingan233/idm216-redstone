//Cart Number Script

//The purpose of this script is to create a number that auto increments based on the total cart items the user has selected.


let shoppingCartNumber = document.getElementById("order-shopping-cart-number");
// ^^^ This establishes the existance of an Element with an id of #order-shopping-cart-number inside the document.

let shoppingCartAdd = document.getElementById("add-to-cart-button");
let shoppingCartRemove = document.getElementById("remove-from-cart-button");
// ^^^ These two lines are temporary.
// ^^^ Basically, I have the set up so that currently the user presses a button and it changes the value of "shoppingCartNumber" by one. 

let testNumber;

// ^^^ This is the number that is being represented in the tally.

if (sessionStorage.getItem('testnumber')){
    testNumber = sessionStorage.getItem('testnumber');
} else if (localStorage.getItem('testnumber') == undefined){
    localStorage.setItem('testnumber', 0);
};


console.log(`${localStorage.getItem('testnumber')}`);



// ADDING A NUMBER TO THE CART

// An event listner is listening for the shoppingCartAdd button to get clicked.
// When it hears it, it adds a set value (in this case, 1) to testNumber.
// The shopping cart number then updates with the new number.

shoppingCartAdd.addEventListener('click', function(){
    // testNumber += 1;

    if (testNumber >= 0){
        testNumber += 1;
    } else {
        testNumber = 0;
    }


    shoppingCartNumber.innerHTML = `${testNumber}`;
})



// REMOVING A NUMBER FROM THE CART

// An event listner is listening for the shoppingCartRemove button to get clicked.
// When it hears it, it adds a set value (in this case, 1) to testNumber.
// The shopping cart number then updates with the new number.

shoppingCartRemove.addEventListener('click', function(){
    
    if (testNumber > 0){
        testNumber -= 1;
    } else {
        testNumber = 0;
    }

    shoppingCartNumber.innerHTML = `${testNumber}`;
})


// let clearStorage = document.getElementById("clear-storage");

// clearStorage.addEventListener('click', function(){
// Storage.clear();
// })