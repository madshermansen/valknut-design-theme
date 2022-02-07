// navbar 
var navmobile = document.getElementById("nav-mobile")
var hamburgernav = document.getElementById('hamburgernav');

hamburgernav.addEventListener("click", function() {
  hamburgernav.classList.toggle('open');
  if (hamburgernav.classList.contains("open")) {
    document.getElementById("nav-mobile-close").innerHTML = ""
    document.getElementById("mobilenavlist").classList.toggle("show-nav")
    navmobile.innerHTML = '<object class="../nav-mobile shown-nav" id="shown-nav"type="image/svg+xml" data="../wp-content/themes/valknut-design/assets/svg-animations/mobile-nav.svg"></object>'
    mobilenavlist .style.zIndex = 100
    navmobile.innerHTML += '<object class="nav-mobile shown-nav" id="shown-nav"type="image/svg+xml" data="wp-content/themes/valknut-design/assets/svg-animations/mobile-nav.svg"></object>'
  } else {    
    var shownNav = document.getElementById('shown-nav');
    var hiddenNav = document.getElementById('hidden-nav');
    navmobile.style.zIndex = -5
    shownNav.style.opacity = 0
    shownNav.style.transitionDelay = "0.1s"
    document.getElementById("nav-mobile-close").innerHTML += '<object class="nav-mobile" id="hidden-nav" type="image/svg+xml" data="wp-content/themes/valknut-design/assets/svg-animations/mobile-nav-reverse.svg"></object><object class="nav-mobile hidden-nav" id="hidden-nav" type="image/svg+xml" data="wp-content/themes/valknut-design/assets/svg-animations/mobile-nav-reverse.svg"></object>'
    document.getElementById("mobilenavlist").classList.toggle("show-nav")
  }
    });