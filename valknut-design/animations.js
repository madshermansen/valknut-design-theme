var speed = 80
var pause = 500
var textpos = 0

// messages and selectors
var message = ['We make websites. Really, REALLY(?) cool websites']
var selector = "#frontpage-text"
var message2 = ["About Us"]
var selector2 = "#header-front-page"
var message3 = ["Contact"]
var selector3 = "#we-are-a-team"
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
var checktrue = true
var checktrue2 = true
function typerwritergenmsg2(){
    document.querySelector(selector2).innerHTML = message2[0].substring(0, pos);
    if (pos++ != message2[0].length) {
        setTimeout(typerwritergenmsg2, speed);
    }

}

function typerwritergenmsg3(){
    document.querySelector(selector3).innerHTML = message3[0].substring(0, pos);
    if (pos++ != message2[0].length) {
        setTimeout(typerwritergenmsg3, speed);
    }

}

// Scroll checking
function checkscrollpos() {
    var pixels = window.innerHeight;
    var currentScrollPos = window.pageYOffset;
    var prevScrollpos = currentScrollPos;
    if (prevScrollpos > 10 && checktrue) {
        typerwritergenmsg2()
        checktrue = false
    }
    var prevScrollpos = currentScrollPos;
    if (prevScrollpos > pixels*3 && checktrue2) {
        console.log("hi")
        typerwritergenmsg3()
        checktrue2 = false
    }

  }


// Event listeners
window.addEventListener("load", runtypewriterslow)

document.addEventListener("scroll", checkscrollpos)

// File upload animation
function uploadPicture() {
    console.log("hi")
    document.getElementById("paper-clip-animation").innerHTML = '<object type="image/svg+xml" data="wp-content/themes/valknut-design/assets/icons/checkmark.svg"></object>'
    document.getElementById("paper-clip-animation").style.borderColor = "#00C11C"
  }