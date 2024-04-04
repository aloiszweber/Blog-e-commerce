const carousel = document.querySelector(".carousel");
const slides = document.querySelector(".slides");
const prevBtn = document.querySelector(".prev");
const nextBtn = document.querySelector(".next");
const slideCount = slides.childElementCount;
let slideIndex = 0;

nextBtn.addEventListener("click", () => {
  slideIndex++;
  showSlides();
});

prevBtn.addEventListener("click", () => {
  slideIndex--;
  showSlides();
});

function showSlides() {
  if (slideIndex === slideCount) {
    slideIndex = 0; // Revenir à la première image
  } else if (slideIndex === -1) {
    slideIndex = slideCount - 1; // Revenir à la dernière image
  }

  const slideWidth = 100; // Calcul de la largeur de chaque diapositive en vw
  const translateValue = -slideIndex * slideWidth;
  slides.style.transform = `translateX(${translateValue}%)`;
}

function startAutoSlide() {
  autoSlideInterval = setInterval(() => {
    slideIndex++;
    showSlides();
  }, 3500); // Défilement automatique toutes les 5 secondes (5000 ms)
}

function stopAutoSlide() {
  clearInterval(autoSlideInterval);
}

// Démarrer le défilement automatique au chargement de la page
startAutoSlide();

// Arrêter le défilement automatique lorsque la souris survole le carrousel
carousel.addEventListener("mouseover", stopAutoSlide);

// Reprendre le défilement automatique lorsque la souris quitte le carrousel
carousel.addEventListener("mouseout", startAutoSlide);
