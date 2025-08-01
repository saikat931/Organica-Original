'use strict';



/**
 * navbar toggle
 */

const navOpenBtn = document.querySelector("[data-nav-open-btn]");
const navbar = document.querySelector("[data-navbar]");
const navCloseBtn = document.querySelector("[data-nav-close-btn]");

const navElems = [navOpenBtn, navCloseBtn];

for (let i = 0; i < navElems.length; i++) {
  navElems[i].addEventListener("click", function () {
    navbar.classList.toggle("active");
  });
}

// navOpenBtn.addEventListener("click", () => {
//   navbar.classList.add("active");
//   navOpenBtn.classList.add("is-active");
// });

// navCloseBtn.addEventListener("click", () => {
//   navbar.classList.remove("active");
//   navOpenBtn.classList.remove("is-active");
// });








/**
 * search toggle
 */

const searchContainer = document.querySelector("[data-search-wrapper]");
const searchBtn = document.querySelector("[data-search-btn]");

searchBtn.addEventListener("click", function () {
  searchContainer.classList.toggle("active");
});



/**
 * whishlist & cart toggle
 */

const panelBtns = document.querySelectorAll("[data-panel-btn]");
const sidePanels = document.querySelectorAll("[data-side-panel]");

for (let i = 0; i < panelBtns.length; i++) {
  panelBtns[i].addEventListener("click", function () {

    let clickedElemDataValue = this.dataset.panelBtn;

    for (let i = 0; i < sidePanels.length; i++) {

      if (clickedElemDataValue === sidePanels[i].dataset.sidePanel) {
        sidePanels[i].classList.toggle("active");
      } else {
        sidePanels[i].classList.remove("active");
      }

    }

  });
}



/**
 * back to top
 */

const backTopBtn = document.querySelector("[data-back-top-btn]");

window.addEventListener("scroll", function () {
  window.scrollY >= 100 ? backTopBtn.classList.add("active")
    : backTopBtn.classList.remove("active");
});



/**
 * product details page
 */

const productDisplay = document.querySelector("[data-product-display]");
const productThumbnails = document.querySelectorAll("[data-product-thumbnail]");

for (let i = 0; i < productThumbnails.length; i++) {
  productThumbnails[i].addEventListener("click", function () {
    productDisplay.src = this.src;
    productDisplay.classList.add("fade-anim");

    setTimeout(function () {
      productDisplay.classList.remove("fade-anim");
    }, 250);

  });
}


// All Organic Products

let tabButtons = document.querySelectorAll(".filter-btn");

let tabContains = document.querySelectorAll(".grid-list");

tabButtons.forEach((button, gridIndex) => {
    button.addEventListener("click", () => {
      tabButtons.forEach(button => button.classList.remove("active"));
      tabContains.forEach(content => content.classList.remove("active"));

      button.classList.add("active");
      tabContains[gridIndex].classList.add("active");

    })
})


// let tabButtons = document.querySelectorAll(".filter-btn");
// let tabContains = document.querySelectorAll(".grid-list");

// tabButtons.forEach((button, gridIndex) => {
//   button.addEventListener("click", () => {
//     // Remove "active" from all buttons and content blocks
//     tabButtons.forEach(button => button.classList.remove("active"));
//     tabContains.forEach(content => content.classList.remove("active"));

//     // Add "active" to the clicked button and corresponding content
//     button.classList.add("active");
//     tabContains[gridIndex].classList.add("active");
//   });
// });

// const tabHeads = document.querySelectorAll('.filter-btn');
// const tabBodies = document.querySelectorAll('.grid-list');

// tabHeads.forEach((head, index) => {
//   head.addEventListener('click', () => {
//     tabHeads.forEach(h => h.classList.remove('active'));
//     tabBodies.forEach(b => b.classList.remove('active'));

//     head.classList.add('active');
//     tabBodies[index].classList.add('active');
//   });
// });

