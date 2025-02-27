document.addEventListener("DOMContentLoaded", function () {
    const barIcon = document.querySelector("header .container nav i");
    const menu = document.querySelector("header .container nav ul");

    function toggleMenu() {
        menu.classList.toggle("active");

        if (menu.classList.contains("active")) {
            menu.style.display = "block";
        } else {
            menu.style.display = "none";
        }
    }

    function checkScreenWidth() {
        if (window.innerWidth <= 767) {
            barIcon.addEventListener("click", toggleMenu);
        } else {
            barIcon.removeEventListener("click", toggleMenu);
            menu.style.display = ""; // Reset to default
        }
    }

    checkScreenWidth();
    window.addEventListener("resize", checkScreenWidth);
});
