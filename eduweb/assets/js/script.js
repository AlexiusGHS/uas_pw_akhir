'use strict';



/**
 * add event on element
 */

const addEventOnElem = function (elem, type, callback) {
  if (elem.length > 1) {
    for (let i = 0; i < elem.length; i++) {
      elem[i].addEventListener(type, callback);
    }
  } else {
    elem.addEventListener(type, callback);
  }
}



/**
 * navbar toggle
 */

const navbar = document.querySelector("[data-navbar]");
const navTogglers = document.querySelectorAll("[data-nav-toggler]");
const navLinks = document.querySelectorAll("[data-nav-link]");
const overlay = document.querySelector("[data-overlay]");

const toggleNavbar = function () {
  navbar.classList.toggle("active");
  overlay.classList.toggle("active");
}

addEventOnElem(navTogglers, "click", toggleNavbar);

const closeNavbar = function () {
  navbar.classList.remove("active");
  overlay.classList.remove("active");
}

addEventOnElem(navLinks, "click", closeNavbar);



/**
 * header active when scroll down to 100px
 */

const header = document.querySelector("[data-header]");
const backTopBtn = document.querySelector("[data-back-top-btn]");

const activeElem = function () {
  if (window.scrollY > 100) {
    header.classList.add("active");
    backTopBtn.classList.add("active");
  } else {
    header.classList.remove("active");
    backTopBtn.classList.remove("active");
  }
}

addEventOnElem(window, "scroll", activeElem);



/*BLOG*/
document.addEventListener('DOMContentLoaded', () => {
  let loadMoreBtn = document.getElementById('load-more');
  let loadLessBtn = document.getElementById('load-less');
  let items = [...document.querySelectorAll('.blog-card')];
  let currentItem = 3;

  if (!loadMoreBtn || !loadLessBtn) {
    console.error('Load More or Load Less button not found.');
    return;
  }

  // Initial hide for items beyond the initial count
  items.forEach((item, index) => {
    if (item) { // Check if item is defined
      if (index >= currentItem) {
        item.style.display = 'none';
      } else {
        item.style.display = 'block'; // Display items as block
      }
    }
  });

  loadMoreBtn.onclick = () => {
    for (let i = currentItem; i < currentItem + 3 && i < items.length; i++) {
      if (items[i]) { // Check if item is defined
        items[i].style.display = 'block'; // Display items as block
      }
    }
    currentItem += 3;

    if (currentItem >= items.length) {
      loadMoreBtn.style.display = 'none';
      loadLessBtn.style.display = 'inline-block';
    } else {
      loadMoreBtn.style.display = 'inline-block';
      loadLessBtn.style.display = 'none';
    }
  };

  loadLessBtn.onclick = () => {
    for (let i = currentItem - 1; i >= currentItem - 3 && i >= 3; i--) {
      if (items[i]) { // Check if item is defined and index is valid
        items[i].style.display = 'none';
      }
    }
    currentItem -= 3;

    if (currentItem <= 3) {
      loadLessBtn.style.display = 'none';
      loadMoreBtn.style.display = 'inline-block';
    } else {
      loadMoreBtn.style.display = 'none';
      loadLessBtn.style.display = 'inline-block';
    }
  };
});



