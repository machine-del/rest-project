document.addEventListener('DOMContentLoaded', () => {
    const slides = document.querySelectorAll('.restaurant-about__slide');
    const dots = document.querySelectorAll('.restaurant-about__dot');
    let currentSlide = 0;
    
    let slideInterval;

    function showSlide(index) {
        slides.forEach(slide => slide.style.opacity = 0);
        dots.forEach(dot => dot.style.backgroundColor = 'rgba(255, 255, 255, 0.5)');
        
        slides[index].style.opacity = 1;
        dots[index].style.backgroundColor = 'white';
        currentSlide = index;
    }

    function startSlideInterval() {
        slideInterval = setInterval(() => {
            currentSlide = (currentSlide + 1) % slides.length;
            showSlide(currentSlide);
        }, 5000);
    }

    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            clearInterval(slideInterval);
            showSlide(index);
            startSlideInterval();
        });
    });

    startSlideInterval();

    const cardsSlider = document.querySelector('.dishes-cards__slider');
    const cards = document.querySelectorAll('.dishes-card');
    let isDragging = false;
    let startPos = 0;
    let currentTranslate = 0;
    let prevTranslate = 0;
    let animationID;
    let currentIndex = 0;

    cards.forEach(card => {
        const cardImage = card.querySelector('img');
        if (cardImage) {
            cardImage.addEventListener('dragstart', (e) => e.preventDefault());
        }
    });

    cardsSlider.addEventListener('touchstart', touchStart, { passive: false });
    cardsSlider.addEventListener('touchend', touchEnd, { passive: true });
    cardsSlider.addEventListener('touchmove', touchMove, { passive: false });

    cardsSlider.addEventListener('mousedown', touchStart);
    cardsSlider.addEventListener('mouseup', touchEnd);
    cardsSlider.addEventListener('mouseleave', touchEnd);
    cardsSlider.addEventListener('mousemove', touchMove);

    function touchStart(e) {
        clearInterval(slideInterval);
        
        if (e.type === 'touchstart') {
            startPos = e.touches[0].clientX;
        } else {
            startPos = e.clientX;
            e.preventDefault();
        }
        isDragging = true;
        animationID = requestAnimationFrame(animation);
        cardsSlider.style.cursor = 'grabbing';
    }

    function touchEnd() {
        if (!isDragging) return;
        
        isDragging = false;
        cancelAnimationFrame(animationID);
        
        const movedBy = currentTranslate - prevTranslate;
        
        if (movedBy < -100 && currentIndex < cards.length - 1) {
            currentIndex += 1;
        }
        
        if (movedBy > 100 && currentIndex > 0) {
            currentIndex -= 1;
        }
        
        setPositionByIndex();
        cardsSlider.style.cursor = 'grab';
        
        startSlideInterval();
    }

    function touchMove(e) {
        if (!isDragging) return;
        
        const currentPosition = e.type === 'touchmove' ? e.touches[0].clientX : e.clientX;
        currentTranslate = prevTranslate + currentPosition - startPos;
        
        if (e.type === 'touchmove') {
            e.preventDefault();
        }
    }

    function animation() {
        setSliderPosition();
        if (isDragging) requestAnimationFrame(animation);
    }

    function setSliderPosition() {
        cardsSlider.style.transform = `translateX(${currentTranslate}px)`;
    }

    function setPositionByIndex() {
        const cardWidth = cards[0].offsetWidth + 20;
        currentTranslate = currentIndex * -cardWidth;
        prevTranslate = currentTranslate;
        setSliderPosition();
    }

    setPositionByIndex();
});