document.addEventListener("DOMContentLoaded", () => {
  const slides = document.querySelectorAll(".restaurant-about__slide");
  const dots = document.querySelectorAll(".restaurant-about__dot");
  const burger = document.getElementById('burger');
  const btnBurger = document.getElementById('lines');
  const mobileMenu = document.getElementById('mobileMenu');

  btnBurger.addEventListener('click', () => {
    burger.classList.toggle('active');
    mobileMenu.classList.toggle('active');
  });

  let currentSlide = 0;
  let slideInterval;

  function showSlide(index) {
    slides.forEach((slide) => (slide.style.opacity = 0));
    dots.forEach(
      (dot) => (dot.style.backgroundColor = "rgba(255, 255, 255, 0.5)")
    );

    slides[index].style.opacity = 1;
    dots[index].style.backgroundColor = "white";
    currentSlide = index;
  }

  function startSlideInterval() {
    slideInterval = setInterval(() => {
      currentSlide = (currentSlide + 1) % slides.length;
      showSlide(currentSlide);
    }, 5000);
  }

  dots.forEach((dot, index) => {
    dot.addEventListener("click", () => {
      clearInterval(slideInterval);
      showSlide(index);
      startSlideInterval();
    });
  });

 const scrollElements = document.querySelectorAll('.scroll');
  const parallaxRange = 30;
  let currentOffset = 0;
  let targetOffset = 0;
  let isAnimating = false;
  let lastScrollTime = 0;
  let isTouching = false;

  function applyTransform() {
    scrollElements.forEach(element => {
      element.style.transform = `translateY(${currentOffset}px)`;
    });
  }

  function animate() {
    if (!isAnimating) return;

    currentOffset += (targetOffset - currentOffset) * 0.1;
    
    if (Math.abs(targetOffset - currentOffset) < 0.1) {
      currentOffset = targetOffset;
      isAnimating = false;
    }

    applyTransform();
    requestAnimationFrame(animate);
  }

  window.addEventListener('wheel', (e) => {
    if (isTouching) return;
    const now = Date.now();
    if (now - lastScrollTime < 16) return;
    lastScrollTime = now;

    const scrollDelta = e.deltaY * 0.3;
    targetOffset = Math.max(-parallaxRange, Math.min(parallaxRange, targetOffset - scrollDelta));
    
    if (!isAnimating) {
      isAnimating = true;
      requestAnimationFrame(animate);
    }
  }, { passive: true });

  let touchStartY = 0;
  let touchId = null;

  window.addEventListener('touchstart', (e) => {
    if (e.touches.length > 1) return;
    isTouching = true;
    touchId = e.touches[0].identifier;
    touchStartY = e.touches[0].clientY;
    targetOffset = currentOffset;
  }, { passive: true });

  window.addEventListener('touchmove', (e) => {
    if (!isTouching || e.touches.length > 1) return;
    const touch = Array.from(e.touches).find(t => t.identifier === touchId);
    if (!touch) return;

    const deltaY = touchStartY - touch.clientY;
    const newOffset = targetOffset + deltaY * 0.5;
    
    targetOffset = Math.max(-parallaxRange, Math.min(parallaxRange, newOffset));
    
    if (!isAnimating) {
      isAnimating = true;
      requestAnimationFrame(animate);
    }
  }, { passive: true });

  window.addEventListener('touchend', () => {
    isTouching = false;
    touchId = null;
    targetOffset = currentOffset;
  });

  scrollElements.forEach(element => {
    element.style.willChange = 'transform';
    element.style.touchAction = 'none'; 
    element.style.transition = 'transform 0.1s linear';
  });
});