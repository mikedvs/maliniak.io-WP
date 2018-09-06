// OFF-CANVAS NAVIGATION
var bodyEl = document.body,
    navButtonArray = document.querySelectorAll('.nav-controller');

    // Set initial scroll value as up
    bodyEl.setAttribute('data-scroll', 'up');

// Add Event Listeners to all nav items
navButtonArray.forEach(function(elem) {
    elem.addEventListener('click', function() {
        // Toggle Class on Body Element
        bodyEl.classList.toggle("nav-open");
    });
});

// SCROLLING UP OR DOWN
var previousPosition = window.pageYOffset || document.documentElement.scrollTop;

window.onscroll = function() {
  var currentPosition = window.pageYOffset || document.documentElement.scrollTop;

  if (previousPosition > currentPosition) {
    bodyEl.setAttribute('data-scroll', 'up');
  } else {
    bodyEl.setAttribute('data-scroll', 'down');
  }
  previousPosition = currentPosition;
};