document.addEventListener('DOMContentLoaded', () => {
    const slides = document.querySelector('.slides');
    let index = 0;

    setInterval(() => {
        index = (index + 1) % 3; // assuming 3 slides
        slides.style.transform = `translateX(-${index * 100}%)`;
    }, 5000); // change slide every 5 seconds
});

/*le bouton de slide*/

let currentSlide = 0;

function changeSlide(direction) {
    const slides = document.querySelectorAll('.slide');
    currentSlide += direction;

    if (currentSlide >= slides.length) {
        currentSlide = 0;
    } else if (currentSlide < 0) {
        currentSlide = slides.length - 1;
    }

    const slidesContainer = document.querySelector('.slides');
    slidesContainer.style.transform = `translateX(-${currentSlide * 100}%)`;
}
