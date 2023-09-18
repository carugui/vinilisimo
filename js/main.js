// PARA LAS REVIEWS DE LA LANDING

const wrapper = document.querySelector('.reviews__wrapper');
const indicators = [...document.querySelectorAll('.indicators button')];

let currentTestimonial = 0; // Default 0

indicators.forEach((item, i) => {
    item.addEventListener('click', () => {
        indicators[currentTestimonial].classList.remove('button--active');
        wrapper.style.marginLeft = `-${60 * i}%`;
        item.classList.add('button--active');
        currentTestimonial = i;
    })
})



// PARA LOS ACORDEONES DEL FAQ

var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    /* Toggle between adding and removing the "active" class,
    to highlight the button that controls the panel */
    this.classList.toggle("active");

    /* Toggle between hiding and showing the active panel */
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  });
}


// PARA EL MENÚ HAMBURGUESA DEL NAVEGADOR IZQUIERDA DEL TOPBAR

const topbar = document.querySelector(".topbar");
const menu = document.querySelector(".nav__left");
const menuItems = document.querySelectorAll(".nav__left__item");
const hamburger= document.querySelector(".hamburger");
const closeIcon= document.querySelector(".hamburger__icon--close");
const menuIcon = document.querySelector(".hamburger__icon");

function toggleMenu() {
  if (menu.classList.contains("showMenu")) {
    menu.classList.remove("showMenu");
    closeIcon.style.display = "none";
    menuIcon.style.display = "block";
    topbar.classList.remove("topbar--classic");
  } else {
    menu.classList.add("showMenu");
    closeIcon.style.display = "block";
    menuIcon.style.display = "none";
    topbar.classList.add("topbar--classic");
  }
}

hamburger.addEventListener("click", toggleMenu);

menuItems.forEach( 
  function(menuItem) { 
    menuItem.addEventListener("click", toggleMenu);
  }
)


window.onscroll = function () { 
    if (document.body.scrollTop >= 100 || document.documentElement.scrollTop >= 100 ) {
        topbar.classList.add("topbar--scroll");
        topbar.classList.remove("nav-transparent");
    } 
    else {
        topbar.classList.add("nav-transparent");
        topbar.classList.remove("topbar--scroll");
    }
};
