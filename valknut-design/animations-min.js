// Load in for footer svg and observer
var checktrue4 = false
var bottomsvg = document.querySelector("#bottom-section")

function handleIntersectionanimations3(entries) {
    entries.map((entry) => {
      if (entry.isIntersecting) {

          if (checktrue4 == false) {

            bottomsvg.innerHTML = bottomsvg.innerHTML + '<object class="svg-contact lowest-index" type="image/svg+xml" data="../wp-content/themes/valknut-design/assets/svg-animations/bottomsvg.svg"></object>'
          }
          checktrue4 = true
      // entry.element.classList.add('slide')
      } else {
      }
    });
  }

  const options = {
    root: null,
    rootMargin: "-10px",
    threshold: 0.4
}

const observeranimation3 = new IntersectionObserver(handleIntersectionanimations3, options);
observeranimation3.observe(bottomsvg)