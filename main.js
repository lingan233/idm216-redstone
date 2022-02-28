function menuOpen() {
    const menu = document.getElementById('hamburger-menu-toggle');
    const close = document.getElementById('hamburger-menu-exit');
    const hamburger = document.getElementById('header-hamburger-navigation')
    if (menu.style.display === 'none') { //If the menu is hidden, then the menu will be revealed, and the menu div + settings div will have new classes. These classes add in animation rules that play out once the user clicks on the link.
        menu.style.display = 'flex';
        close.style.display = 'flex';
        hamburger.style.display = 'none';
    }
}

function menuClose() {
    const menu = document.getElementById('hamburger-menu-toggle');
    const close = document.getElementById('hamburger-menu-exit');
    const hamburger = document.getElementById('header-hamburger-navigation')
    if (menu.style.display === 'flex'); {
        menu.style.display = 'none';
        close.style.display = 'none';
        hamburger.style.display = 'flex';
    }
}

// jQuery code on the toggle button on payment-method.php
// click on toggle button
$(document).ready(function () {
    $('.toggle-button').click(function () {
        $(this).addClass('toggle-button-active');
        // remove the active class from all elements with active class
        $('.toggle-button-active').removeClass('toggle-button-active')
        // add active class to clicked element
        $(this).addClass('toggle-button-active');
    });
    // hide the form when clicking on the cash option
    $('#cash-option').click(function () {
        $('.toggle-form').hide();
    });
    // show the form when clicking on the card option
    $('#card-option').click(function () {
        $('.toggle-form').show();
    });
});


