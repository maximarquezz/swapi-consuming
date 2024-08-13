const heroSlider = document.getElementById("heroSlider");
const heroSliderWidth = heroSlider.offsetWidth;
const moveLeft = document.getElementById("moveLeft");
const moveRight = document.getElementById("moveRight");

moveLeft.addEventListener('click', () => {
    heroSlider.scrollBy({
        left: -(heroSliderWidth * 2),
        behavior: 'smooth'
    });
});

moveRight.addEventListener('click', () => {
    heroSlider.scrollBy({
        left: heroSliderWidth * 2,
        behavior: 'smooth'
    });
});

// const crawl = document.getElementById("crawl");

// crawl.style.transform = "rotateX(20deg)";

// window.onscroll = function() {
//     const scrollPosition = window.scrollY;

//     if (scrollPosition >= 656 && scrollPosition < 3300) {
//         // Aplicar translateY además de la rotación
//         crawl.style.transform = `rotateX(20deg) translateY(${656 - scrollPosition}px)`;
//     } else {
//         // Solo aplicar la rotación
//         crawl.style.transform = "rotateX(20deg)";
//     }
// };