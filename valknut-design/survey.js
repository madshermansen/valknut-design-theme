var count = 0
var shownCounter = document.getElementById("completed-amount")
var questions = document.getElementsByClassName("surveyblock").length
var backtosurvey = document.getElementById("back-to-survey")
var filter = 300
var filterto = ""
var huerotateto = 130
var huechange = (filter - huerotateto) / questions
var frontbutton = document.getElementById("front")
var backbutton = document.getElementById("back")

function startsurvey() {
    if (count < questions) {count += 1}
    if (count == questions) {frontbutton.style.opacity = 0;frontbutton.disabled = true}
    var background = document.getElementById("svgtop-questionaire")
    var prevpage = document.getElementById(("surveyblock" + (count - 1)))
    var currentpage = document.getElementById(("surveyblock" + count))
    var page = document.getElementById("introsurvey")
    counter()
    if (count == 1) {
        backtosurvey.style.opacity = 1
        backtosurvey.style.pointerEvents = "all"
        shownCounter.style.opacity = 1
        frontbutton.disabled = false
        backbutton.disabled = false
        frontbutton.style.opacity = 1
        backbutton.style.opacity = 1
        background.innerHTML = '<object id="test" class="svg-questionaire lowest-index" type="image/svg+xml" data="../wp-content/themes/valknut-design/assets/svg-animations/animateinforquestionaire.svg"></object>'
        var backgroundChangeFilter = document.getElementById("test")
        page.classList.add('hide');
        var nav = document.querySelector("nav")
        nav.classList.add('hide');
        nav.classList.remove("show")
        page.classList.remove("show")
        backgroundChangeFilter.style.filter = "grayscale(100%) brightness(40%) sepia(100%) hue-rotate(" + filter + "deg) saturate(1000%) contrast(0.8)"
    } else {
        var backgroundChangeFilter = document.getElementById("test")
        filter = filter - huechange
        backgroundChangeFilter.style.filter = "grayscale(100%) brightness(40%) sepia(100%) hue-rotate(" + filter + "deg) saturate(1000%) contrast(0.8)"
    }
    // Delay as seen when you go to next question
    currentpage.style.opacity = 0
    setTimeout(() => {
      if (currentpage.style.removeProperty) {
        currentpage.style.removeProperty('opacity');
    } else {
        currentpage.style.removeAttribute('opacity');
    }
    }, 200);
    currentpage.classList.add("show")
    prevpage.classList.remove("show")    

  }

function counter() {
    if (count > questions) {return}
    shownCounter.innerHTML = count + "/" + questions
}

function questionback() {
    if (count < questions) {frontbutton.style.opacity = 1;frontbutton.disabled = false}
    var backgroundChangeFilter = document.getElementById("test")
    var prevpage = document.getElementById(("surveyblock" + (count - 1)))
    var currentpage = document.getElementById(("surveyblock" + count))
    var page = document.getElementById("introsurvey")
    var nav = document.getElementById("nav")
    filter = filter + huechange
    if (count == 1) {
        nav.classList.add("show")
        page.classList.add("show")
        page.classList.remove('hide');
        nav.classList.remove('hide');
        currentpage.classList.remove("show")
        var background = document.getElementById("svgtop-questionaire")
        background.innerHTML = ""
        frontbutton.disabled = true
        backbutton.disabled = true
        frontbutton.style.opacity = 0
        backbutton.style.opacity = 0
        shownCounter.style.opacity = 0
        backtosurvey.style.opacity = 0
        backtosurvey.style.pointerEvents = "none"

    }
    else {
        currentpage.classList.add("hide")
        currentpage.classList.remove("show")
        prevpage.classList.remove("hide")
        prevpage.classList.add('show');

    }
    backgroundChangeFilter.style.filter = "grayscale(100%) brightness(40%) sepia(100%) hue-rotate(" + filter + "deg) saturate(1000%) contrast(0.8)"
    count = count - 1
    if (count > questions) {return}
    shownCounter.innerHTML = count + "/" + questions
    
}

function priceEstimate() {
    var dict = { "have-website" : document.querySelector('input[name="have-website"]:checked').value, 
    "improve-website" : document.querySelector('input[name="improve"]:checked').value,
    "goal" : document.querySelector('input[name="goal"]:checked').value,
    "page-count" : document.querySelector('input[name="page-count"]').value,
    "artwork" : document.querySelector('input[name="artwork"]:checked').value,
    "brand-kit" : document.querySelector('input[name="brand-kit"]:checked').value,
    "animations" : document.querySelector('input[name="animations"]:checked').value,
    "SEO" : document.querySelector('input[name="SEO"]:checked').value,
    "text-content" : document.querySelector('input[name="text-content"]:checked').value,
    "user-login" : document.querySelector('input[name="user-login"]:checked').value,
    "security-features" : document.querySelector('input[name="security-features"]:checked').value,
    "website-inspiration" : document.querySelector('input[name="website-inspiration"]:checked').value,
    "budget" : document.querySelector('input[name="budget"]').value,
    "website-launch" : document.querySelector('input[name="website-launch"]').value,
      };
    console.log(dict)
    
    startsurvey()
}

function saveandsend() {
    var contact = {
        "improve-website" : document.querySelector('input[name="email"]').value,
        "improve-website" : document.querySelector('input[name="company"]').value,
        "improve-website" : document.querySelector('input[name="phone"]').value,
        "improve-website" : document.querySelector('input[name="project"]').value,
    }
    console.log(contact)
}

function changecolor() {

    function rgbToHex(r, g, b) {
        return "#" + componentToHex(r) + componentToHex(g) + componentToHex(b);
      }

      function componentToHex(c) {
        var hex = c.toString(16);
        return hex.length == 1 ? "0" + hex : hex;
      }

    var slider = document.querySelector('input[name="page-count"]')
    red = Math.ceil((slider.value / 10) * 255)
    green = Math.ceil(((11 - slider.value) / 10) * 255)
    blue = Math.ceil(((11 - slider.value) / 10) * 255)
    color = rgbToHex(red, green, blue)
    document.getElementById("page-count").style.setProperty('--scrollbar-background', color);
}