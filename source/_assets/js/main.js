/**
 * Browser Smooth Scroll
 */

// Find all anchor elements with a href attribute starting with "#"
const anchorElements = document.querySelectorAll('a[href*="#"]');

// Add a click event listener to each anchor element
anchorElements.forEach(anchor => {
  anchor.addEventListener('click', (event) => {
    event.preventDefault(); // Prevent the default anchor behavior

    const targetId = anchor.getAttribute('href').substring(1); // Get the target element's ID
    const targetElement = document.getElementById(targetId);

    if (targetElement) {
      // Use the scrollIntoView API with a smooth behavior option
      targetElement.scrollIntoView({ behavior: 'smooth' });
    }
  });
});

/**
 * Hide nav on scroll
 * @type {[type]}
 */
var navLinks = document.querySelectorAll('.nav-links');
var backToTop = document.getElementById('back-to-top');

var prevScrollpos = window.pageYOffset;

window.onscroll = function() {

  var currentScrollPos = window.pageYOffset;

  if (currentScrollPos < 10) {
    for (var i = 0; i < navLinks.length; i++) {
      navLinks[i].classList.remove('hidden');
      backToTop.classList.add('hidden');
    }
  } else {
    for (var i = 0; i < navLinks.length; i++) {
      navLinks[i].classList.add('hidden');
      backToTop.classList.remove('hidden');
    }
  }
  prevScrollpos = currentScrollPos;
}