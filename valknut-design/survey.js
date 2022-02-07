var count = 0
var shownCounter = document.getElementById("completed-amount")
var questions = document.getElementsByClassName("surveyblock").length
var filter = 300
var filterto = ""
var huerotateto = 110
var huechange = (filter - huerotateto) / questions

function startsurvey() {
    count += 1
    var background = document.getElementById("svgtop-questionaire")
    var prevpage = document.getElementById(("surveyblock" + (count - 1)))
    var currentpage = document.getElementById(("surveyblock" + count))
    var page = document.getElementById("introsurvey")
    if (count == 1) {
        background.innerHTML = '<object id="test" class="svg-questionaire lowest-index" type="image/svg+xml" data="../wp-content/themes/valknut-design/assets/svg-animations/animateinforquestionaire.svg"></object>'
        var backgroundChangeFilter = document.getElementById("test")
        console.log(backgroundChangeFilter)
        page.classList.add('hide');
        var nav = document.getElementById("nav")
        nav.classList.add('hide');
        nav.classList.remove("show")
        page.classList.remove("show")
        backgroundChangeFilter.style.filter = "grayscale(100%) brightness(40%) sepia(100%) hue-rotate(" + filter + "deg) saturate(1000%) contrast(0.8)"
    } else {
        var backgroundChangeFilter = document.getElementById("test")
        filter = filter - huechange
        console.log(filter)
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
    
    if (count > questions) {return}
    shownCounter.innerHTML = count + "/" + questions
  }

function questionback() {
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
    startsurvey()
    var output = document.getElementById("estimated-price")
    var price = 21332
    var amount = getRndInteger(20, 100)
    setTimeout(() => {
    randomprice(amount, price, output)
    }, 30);
}

function randomprice(amount, price, output) {
    if (amount > 0) {
        output.innerHTML = getRndInteger(5, price - 5000)
        setTimeout(() => {
            randomprice(amount, price, output)
            }, getRndInteger(5, 50 + amount));
    } else {
        output.innerHTML = 1
    }
    amount = amount - 1
    
}

function getRndInteger(min, max) {
    return Math.floor(Math.random() * (max - min) ) + min;
  }