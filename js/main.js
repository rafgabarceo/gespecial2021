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




var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {
    slideIndex = 1
  }
  if (n < 1) {
    slideIndex = slides.length
  }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  console.log(slideIndex);
  slides[slideIndex - 1].style.display = "block";
  dots[slideIndex - 1].className += " active";
}