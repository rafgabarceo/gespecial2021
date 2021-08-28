$(document).scroll(function () {
  var y = $(this).scrollTop();
  if (y > 800) {
    $('.navbar-tls').fadeIn();
  } else {
    $('.navbar-tls').fadeOut();
  }
});

// grab everything we need
const btn = document.querySelector("button.mob-button");
const menu = document.querySelector(".mobile-menu");

// add event listeners
btn.addEventListener("click", () => {
  menu.classList.toggle("hidden");
});