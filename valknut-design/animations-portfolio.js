function changeportfolio () {
    var nodelist = document.querySelectorAll(".hidden");
  
    var nodelistfirst = document.querySelectorAll(".first");
  
    for (var i = 0; i < nodelist.length; i++) {
      array = nodelist[i].id.split("")
      var firstelement = nodelistfirst[0]
      firstelement.classList.remove('first');
      firstelement.classList.add('hidden');
      firstelement.style.transform = "translateY(50%) rotateX(90deg)"
      firstelement.style.opacity = 0
      var temphidden = "hidden" + nodelist.length;
      firstelement.id = temphidden
      console.log(temphidden)
      setTimeout(() => {
        if (firstelement.style.removeProperty) {
          firstelement.style.removeProperty('transform');
          firstelement.style.removeProperty('opacity');
      } else {
        firstelement.style.removeAttribute('transform');
        firstelement.style.removeAttribute('opacity');
      }
      }, 1000);
      
       if (array.slice(-1)[0] == 1) {
          nodelist[i].classList.add('first');
          nodelist[i].classList.remove('hidden');
          nodelist[i].id = "hidden0"
       } else {
         var temphidden = "hidden" + i;
         nodelist[i].removeAttribute(temphidden);
         var temphidden = "hidden" + (nodelist[i].id.split("").slice(-1)[0] - 1);
        nodelist[i].id = temphidden;
       }
    }
    setTimeout(function () {changeportfolio()}, 4000);
  
  }
  
  
  function runchangewithtimeout() {
    setTimeout(changeportfolio, 4000)
  }
  
  window.addEventListener("load", runchangewithtimeout())
