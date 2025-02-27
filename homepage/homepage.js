new Swiper('.testimonials-slider', {
    slidesPerView: 1,
    spaceBetween: 30,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    breakpoints: {
        768: {
            slidesPerView: 2,
        }
    }
});
document.addEventListener("DOMContentLoaded", function () {
    const elements = document.querySelectorAll(".fade-in-up");

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("animate");
            }
        });
    }, { threshold: 0.2 });

    elements.forEach(element => observer.observe(element));
});
