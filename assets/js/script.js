document.addEventListener("DOMContentLoaded", function () {
  const slider = document.querySelector(".custom-slider-inner");
  const slides = document.querySelectorAll(".custom-slide");
  const prevBtn = document.querySelector(".custom-prev");
  const nextBtn = document.querySelector(".custom-next");
  const slideWidth = slides[0].offsetWidth;
  const slidesToShow = 3;
  const slideStep = 1;
  const slideCount = slides.length;
  const transitionDuration = 500;
  const transitionTimingFunction = "cubic-bezier(0.25, 0.46, 0.45, 0.94)";
  let currentIndex = 0;

  function showSlide(index) {
    if (index < 0) {
      index = slideCount - 1;
    } else if (index >= slideCount) {
      index = 0;
    }

    const startPos = -index * slideWidth;
    slider.style.transition = `transform ${transitionDuration}ms ${transitionTimingFunction}`;
    slider.style.transform = `translateX(${startPos}px)`;

    currentIndex = index;
  }

  function nextSlide() {
    showSlide(currentIndex + slideStep);
  }

  function prevSlide() {
    showSlide(currentIndex - slideStep);
  }

  const containerWidth = slideWidth * slidesToShow;
  slider.style.width = `${containerWidth}px`;

  showSlide(currentIndex);

  prevBtn.addEventListener("click", prevSlide);
  nextBtn.addEventListener("click", nextSlide);

  slider.addEventListener("transitionend", () => {
    slider.style.transition = "";
  });
});
