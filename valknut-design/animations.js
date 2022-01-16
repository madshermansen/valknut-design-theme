var speed = 80
var speed2 = 120
var pause = 500
var textpos = 0

// messages and selectors
var message = ['We make websites. Really, really cool websites']
var selector = "#frontpage-text"
// typewriter effects + br and span with colors
typerwriter = () => {
    document.querySelector(selector).innerHTML = message[0].substring(0, textpos)
    if (textpos++ != message[0].length) {
        if (message[0].charAt(textpos-2) == ".") {
            message = [message[0].slice(0, textpos) + "</span>" + message[0].slice(textpos)]
            textpos += 7
            message = [message[0].slice(0, textpos) + "<br>" + message[0].slice(textpos)]
            textpos += 4
            textpos++
            setTimeout(typerwriter, pause);
        } else if (message[0].charAt(textpos-2) == ",") {
            setTimeout(typerwriter, pause);
            textpos++
        } else if (message[0].slice(textpos-4, textpos) == "cool") {
            setTimeout(typerwriter, speed);
            message = [message[0].slice(0, textpos) + "<br>" + message[0].slice(textpos)]
            textpos += 4
        } else if (textpos+2 == 10) {
            setTimeout(typerwriter, speed);
            message = [message[0].slice(0, textpos) + "<span class='aqua'>" + message[0].slice(textpos)]
            textpos += 19
        } else if (textpos+2 == 44) {
            setTimeout(typerwriter, speed);
            message = [message[0].slice(0, textpos) + "</span>" + message[0].slice(textpos)]
            textpos += 7
        } else if (textpos == 80) {
            setTimeout(typerwriter, speed);
            message = [message.slice(0, textpos) + "<span class='aqua'>.</span>"];
            textpos += 27
        }
        else {
            setTimeout(typerwriter, speed);
        }
    }
}

function runtypewriterslow() {
    setTimeout(typerwriter, 1100)
}

// Typewriter general
var pos = 0

function gettext(selector) {
    return [(document.querySelector(selector).innerHTML)]
}

function typewriter(message, selector) {
    document.querySelector(selector).innerHTML = message[0].substring(0, pos);
    if (pos++ != message[0].length) {
        setTimeout(function () {typewriter(message, selector)}, speed2);
}
}

// Event listeners
window.addEventListener("load", runtypewriterslow)

// File upload animation
function uploadPicture() {
    console.log("hi")
    document.getElementById("paper-clip-animation").innerHTML = '<object type="image/svg+xml" data="wp-content/themes/valknut-design/assets/icons/checkmark.svg"></object>'
    document.getElementById("paper-clip-animation").style.borderColor = "#00C11C"
  }

// navbar 
var hamburgernav = document.getElementById('hamburgernav');
hamburgernav.addEventListener("click", function() {
hamburgernav.classList.toggle('open');
    document.getElementById("slidingnav").classList.toggle('showslidingnav');
    });


// intersector observer api
var selector1 = "#header-front-page"
const target1 = document.querySelector(selector1)
const target2 = document.querySelector("#our-team")
var checktrue1 = false
var checktrue2 = false
var checktrue3 = false
var checktrue4 = false
var text1 = gettext(selector1)
var aboutus = document.querySelector("#about-us")
var bottomsvg = document.querySelector("#bottom-section")

function handleIntersectiontypewriter(entries) {
  entries.map((entry) => {
    if (entry.isIntersecting) {
        if (checktrue1 == false) {
            pos = 0
            typewriter(text1, selector1);
        }
        checktrue1 = true
    // entry.element.classList.add('slide')
    } else {
        if (checktrue1 == false) {
            target1.innerHTML = ""
        }
    }
  });
}

// a series of svg implementationm 

function handleIntersectionanimations(entries) {
    entries.map((entry) => {
      if (entry.isIntersecting) {
          if (checktrue2 == false) {
            target2.innerHTML = '<object class="svg-we-are-team" type="image/svg+xml" data="wp-content/themes/valknut-design/assets/svg-animations/We-Are-a-Team-Mobile-BG-Horizontal.svg"></object>' + target2.innerHTML
          }
          checktrue2 = true
      // entry.element.classList.add('slide')
      } else {
      }
    });
  }

  function handleIntersectionanimations2(entries) {
    entries.map((entry) => {
      if (entry.isIntersecting) {
          if (checktrue3 == false) {
            aboutus.innerHTML = '<object class="svg-about-us lowest-index" type="image/svg+xml" data="wp-content/themes/valknut-design/assets/svg-animations/svg-about-us.svg"></object>' + aboutus.innerHTML
          }
          checktrue3 = true
      // entry.element.classList.add('slide')
      } else {
      }
    });
  }

  function handleIntersectionanimations3(entries) {
    entries.map((entry) => {
      if (entry.isIntersecting) {
          if (checktrue4 == false) {
            bottomsvg.innerHTML = bottomsvg.innerHTML + '<object class="svg-contact lowest-index" type="image/svg+xml" data="wp-content/themes/valknut-design/assets/svg-animations/bottomsvg.svg"></object>'
          }
          checktrue4 = true
      // entry.element.classList.add('slide')
      } else {
      }
    });
  }



const options = {
    root: null,
    rootMargin: "-10px"
}

const observertypewriter = new IntersectionObserver(handleIntersectiontypewriter, options);
const observeranimation = new IntersectionObserver(handleIntersectionanimations, options);
const observeranimation2 = new IntersectionObserver(handleIntersectionanimations2, options);
const observeranimation3 = new IntersectionObserver(handleIntersectionanimations3, options);

observertypewriter.observe(target1);
observeranimation.observe(target2);
observeranimation2.observe(aboutus)
observeranimation3.observe(bottomsvg)
