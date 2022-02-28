// When the user scrolls down 80px from the top of the document, resize the customized pizza
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
      // When scrolling
    document.getElementById("customize-pizza-img").style.width = "50%";
    document.getElementById("customize-pizza-img").style.margin = "0 0 0 300px";
    // When unscrolling
  } else {
    document.getElementById("customize-pizza-img").style.width = "100%";
    document.getElementById("customize-pizza-img").style.margin = "0";
  }
}