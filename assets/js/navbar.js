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
