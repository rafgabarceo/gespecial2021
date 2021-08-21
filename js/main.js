$(document).scroll(function () {
  var y = $(this).scrollTop();
  if (y > 1) {
    $('.navbar-tls').fadeIn();
  } else {
    $('.navbar-tls').fadeOut();
  }
});


const btn = document.querySelector('.mob-button');
const menu = document.querySelector('.mobile-menu');

btn.addEventListener('click', () => {
  menu.classList.toggle("hidden");
});