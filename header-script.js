document.addEventListener("DOMContentLoaded", function() {
    // Get the current page's URL path without trailing slashes
    const currentPage = window.location.href;

    // Select all the header links
    const navLinks = document.querySelectorAll('nav ul li a');

    // Loop through the links and match the href with the current URL path
    navLinks.forEach(link => {
        // Get the href of the link without trailing slashes
        const linkHref = link.href;
        // If the link's href matches the current page, add the 'active' class
        if (linkHref === currentPage) {
            link.classList.add('active');
        }
    });

    // Scroll functionality
    let lastScrollTop = 0;
    const header = document.getElementById("header");

    window.addEventListener("scroll", function() {
        const currentScroll = window.pageYOffset || document.documentElement.scrollTop;

        if (currentScroll > lastScrollTop) {
            // Scrolling down
            header.classList.add("hidden"); // Hide the header
        } else {
            // Scrolling up
            header.classList.remove("hidden"); // Show the header
        }
        lastScrollTop = currentScroll <= 0 ? 0 : currentScroll; // For Mobile or negative scrolling
    });
});
