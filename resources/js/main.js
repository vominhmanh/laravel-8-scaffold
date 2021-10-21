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

  var originalImageSrc = $('#avatar').attr('src');
  $('#avatar_upload').change(() => {
    let reader = new FileReader();

    reader.onload = (e) => {
      $('#avatar').attr('src', e.target.result);
      $('#avatar_upload_label').toggleClass('hidden');
      $('#avatar_submit_label').toggleClass('hidden');
      $('#avatar_upload_cancel_label').toggleClass('hidden');
    }
    let input = document.getElementById('avatar_upload');
    reader.readAsDataURL(input.files[0]);
  });

  $('#avatar_upload_cancel_label').click(() => {
    $('#avatar_upload_label').toggleClass('hidden');
    $('#avatar_submit_label').toggleClass('hidden');
    $('#avatar_upload_cancel_label').toggleClass('hidden');
    $('#avatar_upload').val('');
    $('#avatar').attr('src', originalImageSrc);
  })

  // Javascript to enable link to tab
  var hash = location.hash.replace(/^#/, ''); // ^ means starting, meaning only match the first hash
  if (hash) {
    $('.nav-tabs a[href="#' + hash + '"]').tab('show');
  }

  // Change hash for page-reload
  $('.nav-tabs a').on('shown.bs.tab', function(e) {
    e.preventDefault();
    window.location.hash = e.target.hash;
    return false;
  })
});
