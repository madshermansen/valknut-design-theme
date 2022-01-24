var count = 0
var shownCounter = document.getElementById("completed-amount")
var questions = 15

function startsurvey() {
    count += 1
    var prevpage = document.getElementById(("surveyblock" + (count - 1)))
    var currentpage = document.getElementById(("surveyblock" + count))
    var page = document.getElementById("introsurvey")
    var nav = document.getElementById("nav")
    page.classList.add('hide');
    nav.classList.add('hide');
    if (count > 1) {
        prevpage.classList.remove("show")
    }
    currentpage.classList.add("show")
    currentpage.style.opacity = 0
    currentpage.style.opacity = 1
    if (count > questions) {return}
    shownCounter.innerHTML = count + "/" + questions
  }

function questionback() {
    var prevpage = document.getElementById(("surveyblock" + (count - 1)))
    var currentpage = document.getElementById(("surveyblock" + count))
    var page = document.getElementById("introsurvey")
    var nav = document.getElementById("nav")
    if (count == 1) {
        page.classList.remove('hide');
        nav.classList.remove('hide');
        currentpage.classList.remove("show")
    }
    else {
        currentpage.classList.remove("show")
        prevpage.classList.add('show');

    }
    if (currentpage.style.removeProperty) {
        currentpage.style.removeProperty('opacity');
    } else {
        currentpage.style.removeAttribute('opacity');
    }
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
        output.innerHTML = price
    }
    amount = amount - 1
    
}

function getRndInteger(min, max) {
    return Math.floor(Math.random() * (max - min) ) + min;
  }

