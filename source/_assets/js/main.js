/**
 * Smooth Scroll
 */
import SmoothScroll from 'smooth-scroll/dist/smooth-scroll.min.js'

var scroll = new SmoothScroll('a[href*="#"]');

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
