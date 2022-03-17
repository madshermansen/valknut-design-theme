// navbar 
var navmobile = document.getElementById("nav-mobile")
var mobilenav = document.getElementById("mobilenavlist")
var hamburgernav = document.getElementById('hamburgernav');
var closingnav = document.getElementById("nav-mobile-close")

var runhamburgernav = function() {
  if (!(hamburgernav.classList.contains("open"))) {
    hamburgernav.classList.add('open');
    navmobile.style.zIndex = 100
    navmobile.innerHTML = ""
    navmobile.innerHTML = '<object class="nav-mobile" id="shown-nav"type="image/svg+xml" data="../wp-content/themes/valknut-design/assets/svg-animations/mobile-nav.svg"></object>'
    navmobile.innerHTML += '<object class="nav-mobile" id="shown-nav"type="image/svg+xml" data="wp-content/themes/valknut-design/assets/svg-animations/mobile-nav.svg"></object>'
    mobilenav.style.zIndex = 101
    mobilenav.style.opacity = 1
    mobilenav.style.visibility = "visible"
    closingnav.style.zIndex = 101
    setTimeout(() => {
      navmobile.style.zIndex = 100
      mobilenav.style.zIndex = 101
      closingnav.style.zIndex = 101
 }, 500);

  } else {
    hamburgernav.classList.remove('open');
    elements = document.querySelectorAll("#shown-nav")
    for (var i = 0; i < elements.length; i++ ) {
      elements[i].classList.toggle("close-nav")
  }
  mobilenav.style.opacity = 0
  mobilenav.style.visibility = "hidden"
  setTimeout(() => {
       mobilenav.style.zIndex = 0
       navmobile.style.zIndex = 0
       closingnav.style.zIndex = -1
  }, 500);
  // mobilenav.style.zIndex = 0
  // navmobile.style.zIndex = 0
  // closingnav.style.zIndex = -1
    closingnav.innerHTML = ""
    closingnav.innerHTML = '<object class="nav-mobile close-nav" id="hidden-nav" type="image/svg+xml" data="wp-content/themes/valknut-design/assets/svg-animations/mobile-nav-reverse.svg"></object><object class="nav-mobile hidden-nav" id="hidden-nav" type="image/svg+xml" data="wp-content/themes/valknut-design/assets/svg-animations/mobile-nav-reverse.svg"></object><object class="nav-mobile close-nav" id="hidden-nav" type="image/svg+xml" data="wp-content/themes/valknut-design/assets/svg-animations/mobile-nav-reverse.svg"></object><object class="nav-mobile hidden-nav" id="hidden-nav" type="image/svg+xml" data="../wp-content/themes/valknut-design/assets/svg-animations/mobile-nav-reverse.svg"></object>'
  }
}

$(window).on("scroll", function() {
  var scrollTop = $(this).scrollTop();
  $(".hamburgerchange").each(function() {
    var topDistance = $(this).offset().top;
    if ( (topDistance) < scrollTop ) {
      $('.hamburgernav span').css('background',$(this).attr('data-color'));
  }
  })
})