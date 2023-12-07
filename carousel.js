
    document.getElementById('actorCarousel').scrollBy({
        left: -150, // Adjust according to the size of your actor div
        behavior: 'smooth'
    });



    document.getElementById('actorCarousel').scrollBy({
        left: 150, // Adjust according to the size of your actor div
        behavior: 'smooth'
    });


    function updateVisibility() {
        const carousel = document.getElementById('actorCarousel');
        const actors = carousel.getElementsByClassName('actor');
    
        for (let actor of actors) {
            // Get the bounding box of the actor
            const rect = actor.getBoundingClientRect();
            const carouselRect = carousel.getBoundingClientRect();
    
            // Check if the actor is partially outside of the carousel
            if (rect.left < carouselRect.left || rect.right > carouselRect.right) {
                actor.classList.add('partially-visible');
            } else {
                actor.classList.remove('partially-visible');
            }
        }
    }
    
    // Call this function on scroll and initially
    document.getElementById('actorCarousel').addEventListener('scroll', updateVisibility);
    updateVisibility(); // Initial call to set up the opacities correctly
    