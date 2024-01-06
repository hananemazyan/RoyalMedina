document.addEventListener('DOMContentLoaded', function () {
    // Initialize Slick Carousel for the product slider
    $('.product-slider').slick({
        slidesToShow: 3, // Number of items to show in a single view
        slidesToScroll: 1, // Number of items to scroll at a time
        dots: true, // Show navigation dots
        responsive: [
            {
                breakpoint: 768, // Breakpoint for smaller screens
                settings: {
                    slidesToShow: 1 // Adjust the number of items for smaller screens
                }
            }
        ]
    });
});
