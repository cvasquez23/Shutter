(function($) {
  //Hamburger Menu
  $(document).ready(function() {
    $('button').click(function() {
      $('button:first').toggleClass('is-active');
      $('body').toggleClass('ofh');
      console.log('Well this worked');
    });
  });

  //Disable .is-active When .nav-link Clicked
  $(document).ready(function() {
    $('.nav-link').click(function() {
      $('button:first').toggleClass('is-active');
      $('#slidingNav').css('display', 'none');
      $('body').removeClass('ofh');
    });
  });

  //Sliding Mobile Nav
  $(document).ready(function() {
    $('[data-toggle="slide-collapse"]').on('click', function() {
      $navMenuCont = $($(this).data('target'));
      $navMenuCont.animate({ width: 'toggle' }, 350);
    });
  });

  //Smooth Scroll Nav Links
  jQuery(document).ready(function() {
    jQuery('a[href^="#"]').click(function(e) {
      e.preventDefault();

      let position = jQuery(jQuery(this).attr('href')).offset().top;

      jQuery('body, html').animate(
        {
          scrollTop: position
        },
        500,
        'linear'
      );
    });
  });

  //Other Fade In
  $(document).on('scroll', function() {
    let pageTop = $(document).scrollTop();
    let pageBottom = pageTop + $(window).height();
    let tags = $('.tag');

    for (let i = 0; i < tags.length; i++) {
      let tag = tags[i];

      if ($(tag).position().top < pageBottom) {
        $(tag).addClass('visible');
      }
    }
  });

  // Defer offscreen images
  function init() {
    var imgDefer = document.getElementsByClassName(
      'contact-photo',
      'pic',
      'modula-item'
    );
    for (var i = 0; i < imgDefer.length; i++) {
      if (imgDefer[i].getAttribute('data-src')) {
        imgDefer[i].setAttribute('src', imgDefer[i].getAttribute('data-src'));
      }
    }
  }
  window.onload = init;
})(jQuery);
