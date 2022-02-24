// navbar 
var navmobile = document.getElementById("nav-mobile")
var hamburgernav = document.getElementById('hamburgernav');

hamburgernav.addEventListener("click", function() {
  hamburgernav.classList.toggle('open');
  if (hamburgernav.classList.contains("open")) {
    document.getElementById("mobilenavlist").style.display = "block"
    document.getElementById("mobilenavlist").style.opacity = 0
    setTimeout(() => {
      document.getElementById("mobilenavlist").style.opacity = 1
    }, 100);
    document.getElementById("nav-mobile-close").innerHTML = ""
    document.getElementById("nav-mobile-close").style.zIndex = 100
    document.getElementById("nav-mobile").style.zIndex = 100
    navmobile.innerHTML = '<object class="nav-mobile shown-nav" id="shown-nav"type="image/svg+xml" data="../wp-content/themes/valknut-design/assets/svg-animations/mobile-nav.svg"></object>'
    navmobile.innerHTML += '<object class="nav-mobile shown-nav" id="shown-nav"type="image/svg+xml" data="wp-content/themes/valknut-design/assets/svg-animations/mobile-nav.svg"></object>'
  } else {    
    var shownNav = document.getElementsByClassName('shown-nav');
    for (var i = 0; i < shownNav.length; i++) {
      shownNav[i].style.opacity = 0
      shownNav[i].style.transitionDelay = "1s"
    }
    setTimeout(() => {
      document.getElementById("nav-mobile-close").style.zIndex = -5
      document.getElementById("nav-mobile").style.zIndex = -5
    }, 700);
    document.getElementById("mobilenavlist").style.opacity = 0
    setTimeout(() => {
      document.getElementById("mobilenavlist").style.display = "none"
    }, 1000);

    document.getElementById("nav-mobile-close").innerHTML += '<object class="nav-mobile" id="hidden-nav" type="image/svg+xml" data="wp-content/themes/valknut-design/assets/svg-animations/mobile-nav-reverse.svg"></object><object class="nav-mobile hidden-nav" id="hidden-nav" type="image/svg+xml" data="wp-content/themes/valknut-design/assets/svg-animations/mobile-nav-reverse.svg"></object>'
    document.getElementById("mobilenavlist").classList.toggle("show-nav")
  }
    });