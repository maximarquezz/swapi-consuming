const crawl = document.getElementById("crawl");

// Inicializar la transformación
crawl.style.transform = "rotateX(20deg)";

window.onscroll = function() {
    const scrollPosition = window.scrollY;

    if (scrollPosition >= 1300 && scrollPosition < 8000) {
        // Aplicar translateY además de la rotación
        crawl.style.transform = `rotateX(20deg) translateY(${1300 - scrollPosition}px)`;
    } else {
        // Solo aplicar la rotación
        crawl.style.transform = "rotateX(20deg)";
    }
};
