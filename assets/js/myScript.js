var didScroll;
var lastScrollTop = 0;
var delta = 5;
var navbarHeight = $('header').outerHeight();
(function ($) {


  $(function () {
       $('.parallax').parallax();
  });

  $(window).scroll(function(event){
        var scroll = $(window).scrollTop();
      didScroll = true;

            if(scroll > 300){
        $('.fixed-action-btn').show();
      }else{
$('.fixed-action-btn').hide();
      }

  });

  setInterval(function() {
      if (didScroll) {
          hasScrolled();
          didScroll = false;
      }
  }, 250);
})(jQuery); // end of jQuery name space




    $(".totop").click(function() {
  $("html, body").animate({ scrollTop: 0 }, "slow");
  return false;
});

function hasScrolled() {
    var st = $(this).scrollTop();

    // Make sure they scroll more than delta
    if(Math.abs(lastScrollTop - st) <= delta)
        return;

    // If they scrolled down and are past the navbar, add class .nav-up.
    // This is necessary so you never see what is "behind" the navbar.
    if (st > lastScrollTop && st > navbarHeight){
        // Scroll Down
        $('header').removeClass('nav-down').addClass('nav-up');
    } else {
        // Scroll Up
        if(st + $(window).height() < $(document).height()) {
            $('header').removeClass('nav-up').addClass('nav-down');
        }
    }

    lastScrollTop = st;
}
