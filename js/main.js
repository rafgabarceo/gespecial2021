$(document).scroll(function() {
    var y = $(this).scrollTop();
    if (y > 800) {
      $('.navbar-tls').fadeIn();
    } else {
      $('.navbar-tls').fadeOut();
    }
  });