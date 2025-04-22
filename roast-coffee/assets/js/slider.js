document.addEventListener('DOMContentLoaded', function() {
    // Initialize Swiper
    const heroSlider = new Swiper('.hero.hero-slider-layout .swiper', {
        effect: 'fade',
        slidesPerView: 1,
        speed: 1000,
        spaceBetween: 0,
        loop: true,
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.hero-pagination',
            clickable: true,
        },
    });

    // Initialize WOW.js for animations
    new WOW().init();

    // Text animation for headings with class text-anime-style-3
    const textAnimeElements = document.querySelectorAll('.text-anime-style-3');
    if (textAnimeElements.length && typeof SplitText !== 'undefined') {
        textAnimeElements.forEach(element => {
            let split = new SplitText(element, {
                type: "chars, words"
            });
            
            gsap.from(split.chars, {
                duration: 0.8,
                opacity: 0,
                scale: 0,
                y: 80,
                rotationX: 180,
                transformOrigin: "0% 50% -50",
                stagger: 0.01
            });
        });
    }
});

