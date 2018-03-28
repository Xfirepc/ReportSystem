jQuery(document).ready(function($) {
  $(".scroll").click(function(event){
    event.preventDefault();
    $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
  });
});
$(function() {
  var pull 		= $('#pull');
    menu 		= $('nav ul');
    menuHeight	= menu.height();
  $(pull).on('click', function(e) {
    e.preventDefault();
    menu.slideToggle();
  });
  $(window).resize(function(){
        var w = $(window).width();
        if(w > 320 && menu.is(':hidden')) {
          menu.removeAttr('style');
        }
    });
});

$(function () {
  // Slideshow 4
  $("#slider4").responsiveSlides({
    auto: true,
    pager: true,
    nav: true,
    speed: 500,
    namespace: "callbacks",
    before: function () {
      $('.events').append("<li>before event fired.</li>");
    },
    after: function () {
      $('.events').append("<li>after event fired.</li>");
    }
  });

});


$(function () {
  var filterList = {
    init: function () {

      // MixItUp plugin
      // http://mixitup.io
      $('#portfoliolist').mixitup({
        targetSelector: '.portfolio',
        filterSelector: '.filter',
        effects: ['fade'],
        easing: 'snap',
        // call the hover effect
        onMixEnd: filterList.hoverEffect()
      });

    },
    hoverEffect: function () {
      // Simple parallax effect
      $('#portfoliolist .portfolio').hover(
        function () {
          $(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
          $(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');
        },
        function () {
          $(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
          $(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');
        }
      );

    }

  };
  // Run the show!
  filterList.init();
});


$(document).ready(function() {
  /*
  var defaults = {
      containerID: 'toTop', // fading element id
    containerHoverID: 'toTopHover', // fading element hover id
    scrollSpeed: 1200,
    easingType: 'linear'
  };
  */

  $().UItoTop({ easingType: 'easeOutQuart' });

});
