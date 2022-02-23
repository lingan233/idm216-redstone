function menuOpen(){
    const menu = document.getElementById('hamburger-menu-toggle');
    const close = document.getElementById('hamburger-menu-exit');
    const hamburger = document.getElementById('header-hamburger-navigation')
    if (menu.style.display === 'none'){ //If the menu is hidden, then the menu will be revealed, and the menu div + settings div will have new classes. These classes add in animation rules that play out once the user clicks on the link.
        menu.style.display = 'flex';
        close.style.display = 'flex';
        hamburger.style.display = 'none';
    }
}

function menuClose(){
    const menu = document.getElementById('hamburger-menu-toggle');
    const close = document.getElementById('hamburger-menu-exit');
    const hamburger = document.getElementById('header-hamburger-navigation')
    if (menu.style.display === 'flex');{
        menu.style.display = 'none';
        close.style.display = 'none';
        hamburger.style.display = 'flex';
    }
}