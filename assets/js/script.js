document.addEventListener("DOMContentLoaded", function () {
  const slider = document.querySelector(".custom-slider-inner");
  const slides = document.querySelectorAll(".custom-slide");
  const prevBtn = document.querySelector(".custom-prev");
  const nextBtn = document.querySelector(".custom-next");
  const slideWidth = slides[0].offsetWidth; // Assuming all slides have the same width
  const slidesToShow = 3; // Number of slides to show at a time
  const slideStep = 1; // Number of slides to move at a time
  const slideCount = slides.length;
  const transitionDuration = 500; // Duration of the transition in milliseconds
  const transitionTimingFunction = "cubic-bezier(0.25, 0.46, 0.45, 0.94)"; // Cubic bezier timing function for smoother transition
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

  // Set the width of slider container to fit slides
  const containerWidth = slideWidth * slidesToShow;
  slider.style.width = `${containerWidth}px`;

  // Show the initial slides
  showSlide(currentIndex);

  // Add event listeners to buttons
  prevBtn.addEventListener("click", prevSlide);
  nextBtn.addEventListener("click", nextSlide);

  // Reset transition after it ends
  slider.addEventListener("transitionend", () => {
    slider.style.transition = "";
  });
});
