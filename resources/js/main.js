$(function() {
  $('.feedback-list').slick({
    dots: true,
    infinite: true,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 3000,
    speed: 300,
    slidesToShow: 2,
    slidesToScroll: 2,
    responsive: [{
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    }, ]
  });

  if ($('#loginModal').hasClass('show-modal')) {
    $('#loginModal').modal('show');
  }

  if ($('#loginNavTab').hasClass('show-tab')) {
    $('#loginNavTab').tab('show');
  }

  if ($('#registerNavTab').hasClass('show-tab')) {
    $('#registerNavTab').tab('show');
  }

  $('.navbar-btn').on('click', () => {
    if ($('.navbar-btn').attr('aria-expanded') == "false")
      $('.navbar-btn span').addClass('expanding');
    else
      $('.navbar-btn span').removeClass('expanding');
  });

  setTimeout(function() {
    $("#successAlert").alert('close');
  }, 5000);

  setTimeout(function() {
    $("#dangerAlert").alert('close');
  }, 5000);
});
