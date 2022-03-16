// When the user scrolls down 80px from the top of the document, resize the customized pizza
window.onscroll = function () { scrollFunction() };

function scrollFunction() {
  if ($(window).width() < 1200) {

    if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
      // When scrolling
      document.getElementById("customize-pizza-price").style.fontSize = "1rem";
      document.getElementById("sticky-customize-pizza").style.width = "min-content";
      document.getElementById("sticky-customize-pizza").style.margin = "0 0 0 auto";



    } else {
      // When unscrolling
      document.getElementById("customize-pizza-price").style.fontSize = "2.25rem";
      document.getElementById("sticky-customize-pizza").style.width = "max-content";
      document.getElementById("sticky-customize-pizza").style.margin = "auto";
    }
  } else {
    // When it is on desktop
    document.getElementById("sticky-customize-pizza").style.width = "fit-content";
    document.getElementById("customize-pizza-price").style.fontSize = "2.25rem";
  }
}