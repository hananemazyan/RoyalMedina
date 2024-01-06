// Wait for the DOM to be fully loaded before attaching event listeners
document.addEventListener("DOMContentLoaded", function () {
    // Get references to the close icon, delivery message, and header
    const closeIcon = document.getElementById("closeIcon");
    const deliveryMessage = document.getElementById("deliveryMessage");
    const header = document.querySelector("header");

    // Add a click event listener to the close icon
    closeIcon.addEventListener("click", function () {
        // Hide the delivery message
        deliveryMessage.style.display = "none";
        // Adjust the header position after closing the message
        header.style.top = "0";
    });
});

// Get a reference to the header
const header = document.querySelector("header");

// Add a scroll event listener to toggle the "stickey" class based on the scroll position
window.addEventListener("scroll", function () {
    header.classList.toggle("stickey", this.window.scrollY > 0);
});

// Get references to the menu icon and the navigation menu
let menu = document.querySelector('#menu-icon');
let navmenu = document.querySelector('.navmenu');

// Add a click event listener to toggle the "bx-x" class and "open" class on the menu and navigation menu
menu.onclick = () => {
    menu.classList.toggle('bx-x');
    navmenu.classList.toggle('open');
};




/* banner */

const btns = document.querySelectorAll(".nav-btn"); // Fix typo here
const slides = document.querySelectorAll(".img-slide");
const contents = document.querySelectorAll(".content");

var sliderNav = function (manual) {
    btns.forEach((btn) => {
        btn.classList.remove("active");
    });

    slides.forEach((slide) => {
        slide.classList.remove("active");
    });

    contents.forEach((content) => {
        content.classList.remove("active");
    });

    btns[manual].classList.add("active");
    slides[manual].classList.add("active");
    contents[manual].classList.add("active");
};

btns.forEach((btn, i) => {
    btn.addEventListener("click", () => {
        sliderNav(i);
    });
});




var swiper = new Swiper('.image-block.swiper-container', {
    slidesPerView: 3,
    spaceBetween: 20,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});