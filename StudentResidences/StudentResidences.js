document.addEventListener("DOMContentLoaded", function () {

    // Fetch rents from the database and populate the page
    function fetchRents() {
        fetch("get_rents.php")
            .then(response => response.json())
            .then(rents => {
                const rentContainer = document.querySelector(".rent-list .container"); // Assurez-vous d'avoir un conteneur dans votre HTML
                rentContainer.innerHTML = ""; // Vider le conteneur avant d'ajouter de nouvelles annonces

                rents.forEach(rent => {
                    const rentItem = document.createElement("div");
                    rentItem.classList.add("rent-item");

                    // Générer les images du slider
                    const imagesHTML = rent.images.length > 0
                        ? rent.images.map((img, index) => 
                            `<div class="slide"><img src="${img}" alt="${rent.title} - Image ${index + 1}"></div>`
                          ).join("")
                        : `<div class="slide"><img src="default-image.jpg" alt="No image available"></div>`;

                    rentItem.innerHTML = `
                        <div class="rent-image">
                            <div class="slider">${imagesHTML}</div>
                            <button class="prev-btn">&#10094;</button>
                            <button class="next-btn">&#10095;</button>
                        </div>
                        <div class="rent-info">
                            <h3>${rent.title}</h3>
                            <p class="university">🏛 Université : ${rent.university}</p>
                            <p class="city">📍 Ville : ${rent.city}</p>
                            <p class="budget">💰 Budget : ${rent.budget} DH</p>
                            <p class="duration">📅 Durée : ${rent.duration}</p>
                        </div>
                    `;

                    rentContainer.appendChild(rentItem);
                });

                setupSliders(); // Réactiver les sliders après l'ajout dynamique des annonces
                applyFilters(); // Appliquer les filtres immédiatement après le chargement des annonces
            })
            .catch(error => console.error("Error fetching rents:", error));
    }

    // Slider functionality for cycling through images
    function setupSliders() {
        document.querySelectorAll(".rent-image").forEach((imageContainer) => {
            const slides = imageContainer.querySelectorAll(".slide");
            let currentSlide = 0;

            if (slides.length > 0) slides[0].classList.add("active");

            const showSlide = (index) => {
                slides.forEach((slide, i) => {
                    slide.classList.toggle("active", i === index);
                });
            };

            imageContainer.querySelector(".prev-btn").addEventListener("click", () => {
                currentSlide = (currentSlide - 1 + slides.length) % slides.length;
                showSlide(currentSlide);
            });

            imageContainer.querySelector(".next-btn").addEventListener("click", () => {
                currentSlide = (currentSlide + 1) % slides.length;
                showSlide(currentSlide);
            });
        });
    }

    // Function to toggle the visibility of the filter dropdowns
    function toggleFilter(filterId) {
        const dropdown = document.querySelector(`#${filterId}`);
        if (dropdown) {
            dropdown.classList.toggle("show"); 
        }
    }

    // Function to apply filters
    function applyFilters() {
        const selectedUniversity = document.querySelector("input[name='university']:checked")?.value || null;
        const selectedCity = document.querySelector("input[name='city']:checked")?.value || null;
        const selectedBudget = document.querySelector("input[name='budget']:checked")?.value || null;
        const selectedDuration = document.querySelector("input[name='duration']:checked")?.value || null;

        let minBudget = 0, maxBudget = Infinity;

        if (selectedBudget === "less-5000") {
            maxBudget = 5000;
        } else if (selectedBudget === "5000-8000") {
            minBudget = 5000;
            maxBudget = 8000;
        } else if (selectedBudget === "more-8000") {
            minBudget = 8000;
            maxBudget = Infinity;
        }

        document.querySelectorAll(".rent-item").forEach(rentItem => {
            const rentBudget = parseInt(rentItem.querySelector(".rent-info .budget").textContent.replace(/\D/g, "")) || 0;

            const matchesUniversity = !selectedUniversity || rentItem.querySelector(".rent-info .university").textContent.includes(selectedUniversity);
            const matchesCity = !selectedCity || rentItem.querySelector(".rent-info .city").textContent.includes(selectedCity);
            const matchesDuration = !selectedDuration || rentItem.querySelector(".rent-info .duration").textContent.includes(selectedDuration);
            const matchesBudget = rentBudget >= minBudget && rentBudget <= maxBudget;

            rentItem.style.display = (matchesUniversity && matchesCity && matchesDuration && matchesBudget) ? "block" : "none";
        });
    }

    // Attach event listeners to filter radio buttons
    document.querySelectorAll(".filter-dropdown input[type='radio']").forEach(input => {
        input.addEventListener("change", applyFilters);
    });

    // Attach click events to filter buttons to toggle dropdown visibility
    document.querySelectorAll(".filter-btn").forEach(button => {
        const filterId = button.nextElementSibling.id;
        button.addEventListener("click", () => toggleFilter(filterId));
    });

    // Add a listener for the "Clear Filters" button to reload the page
    document.querySelector(".clear-filters").addEventListener("click", () => {
        window.location.reload();
    });

    // Fetch rents from the server and populate the page
    fetchRents();
});
