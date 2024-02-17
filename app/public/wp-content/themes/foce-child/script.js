//Parralax title//
let parallax = document.querySelector(".parallax");
let imageBanner = document.querySelector(".banner-image");
console.log('working');

window.addEventListener("scroll", function () {
    let offset = window.scrollY;
    if (offset < parallax.offsetParent.offsetTop + parallax.offsetTop) {
        parallax.style.transform = "translateY(" + offset * 0.6 + "px)";
    }
});


//Title Animations//
let observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('animationTitle');
            return;
        };
        entry.target.classList.remove('animationTitle');
    });
},
    {
        threshold: 1
    });

let elementsToObserve = document.querySelectorAll('.sectionTitles')
elementsToObserve.forEach((sectionTitle) => {
    observer.observe(sectionTitle);
});



// Burger Menu //
let activeLines = document.querySelector('.active');
let linesChanged = document.querySelector('.lines');
let burgerButton = document.querySelector('.burgerButton');
let openedMenu = document.querySelector('.opened-menu');
let closeTitles = document.querySelector('.listBurger');


burgerButton.addEventListener('click', function () {
    openedMenu.style.display = (openedMenu.style.display === 'none') ? '' : 'none';
    linesChanged.classList.toggle('active');
    openedMenu.classList.toggle('toggled');

});

closeTitles.addEventListener('click', function () {
    openedMenu.style.display = (openedMenu.style.display === 'none') ? '' : 'none';
    linesChanged.classList.toggle('active');
    openedMenu.classList.toggle('toggled');

});


// Scrolling flowers //
const fleur = document.querySelector('.hibiscusHistoire');
const sunflower = document.querySelector('.sunflowerHistoire');

window.addEventListener('scroll', () => {
    const speed = window.scrollY * 0.01;
    const speedLimit = 8;
    const limitedSpeed = Math.min(speed, speedLimit);
    console.log(limitedSpeed)
    sunflower.style.animationDuration = `${13 - limitedSpeed}s`;
    fleur.style.animationDuration = `${13 - limitedSpeed}s`;
});


// Parallax Clouds//
window.addEventListener('scroll', function () {
    const bigCloud = document.querySelector('.bigCloud');
    const littleCloud = document.querySelector('.littleCloud');
    const sectionPlace = document.querySelector('#place');
    const sectionOffsetTop = sectionPlace.offsetTop;
    const scrollPosition = window.scrollY;

    if (scrollPosition >= sectionOffsetTop) {
        const parallaxValue = (scrollPosition - sectionOffsetTop) / 4;
        const translationX = Math.min(parallaxValue, 300);
        bigCloud.style.transform = 'translateX(' + (-translationX) + 'px)';
        littleCloud.style.transform = 'translateX(' + (-translationX) + 'px)';
    }
});

var swiper = new Swiper(".mySwiper", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
    },
    pagination: {
        el: ".swiper-pagination",
    },
});


// Sections Scroll//
document.addEventListener("DOMContentLoaded", function() {
    window.addEventListener('scroll', function() {
      const sections = document.querySelectorAll('.fade-in-section');
   
      sections.forEach(section => {
        const sectionTop = section.getBoundingClientRect().top;
        const windowHeight = window.innerHeight;
        if (sectionTop < windowHeight) {
          section.classList.add('fade-in');
        }
      });
    });
  });