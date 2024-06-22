// carousel.js

document.addEventListener('DOMContentLoaded', function () {
    const carousel = document.querySelector('.carousel-inner');
    const items = document.querySelectorAll('.carousel-item');
    const prevButton = document.querySelector('.carousel-button.prev');
    const nextButton = document.querySelector('.carousel-button.next');
    let index = 0;
    const visibleItems = 3; // Número de ítems visibles
    const totalItems = items.length;

    function updateCarousel() {
        carousel.style.transform = `translateX(-${index * (100 / visibleItems)}%)`;
    }

    function showNextItem() {
        index = (index + 1) % (totalItems - visibleItems + 1);
        updateCarousel();
    }

    function showPrevItem() {
        index = (index - 1 + (totalItems - visibleItems + 1)) % (totalItems - visibleItems + 1);
        updateCarousel();
    }

    nextButton.addEventListener('click', showNextItem);
    prevButton.addEventListener('click', showPrevItem);

    setInterval(showNextItem, 3000); // Cambia cada 3 segundos
});
