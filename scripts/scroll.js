let currentIndex = 0;
const images = document.querySelectorAll('.carousel-image');

function showSlide(index) {
    images.forEach((img, i) => {
        img.style.display = (i === index) ? 'block' : 'none';
    });
}

function moveSlide(direction) {
    currentIndex += direction;

    // Loop around the images
    if (currentIndex < 0) {
        currentIndex = images.length - 1;
    } else if (currentIndex >= images.length) {
        currentIndex = 0;
    }

    showSlide(currentIndex);
}

// Initialize the carousel by showing the first image
showSlide(currentIndex);