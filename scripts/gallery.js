import getUnits from "./units_data.js";

const galleryItems = document.querySelectorAll('.gallery-nav-item');
const featureList = document.querySelector('#feature-list');
const category = document.querySelector('#category');
const galleryPicture = document.querySelector('.picture-gallery');
const buttonLeft = document.querySelector('#left');
const buttonRight = document.querySelector('#right');
const dotsContainer = document.querySelector('.dots');

let currentIndex = parseInt(localStorage.getItem('index')) || 0;
let currentCount = parseInt(localStorage.getItem('count')) || 0;

async function loadUnits() {
    return await getUnits();
}

function clearActiveDot(dots) {
    dots.forEach(dot => dot.classList.remove('active-dot'));
}

function clearActiveGalleryItems() {
    galleryItems.forEach(item => item.classList.remove('active'));
}

async function activateScroll(index) {
    const units = await loadUnits();

    units.forEach((item, index) => {
        galleryItems[index].innerHTML = item.name + ' unit';
    })

    clearActiveGalleryItems();
    featureList.innerHTML = '';
    dotsContainer.innerHTML = '';

    category.innerHTML = units[index].catering;

    // Display features
    units[index].features.forEach(feature => {
        const featureDiv = document.createElement('div');
        featureDiv.innerHTML = feature;
        featureList.append(featureDiv);
    });

    // Create dots for the gallery
    units[index].photos.forEach(() => {
        const dot = document.createElement('div');
        dot.classList.add('dot');
        dotsContainer.append(dot);
    });

    updateGalleryPicture(index, currentCount);
    updateActiveDot();
}

async function updateGalleryPicture(index, count) {
    const units = await loadUnits();
    galleryPicture.style.backgroundImage = `url("${units[index].photos[count]}")`;
}

function updateActiveDot() {
    const dots = document.querySelectorAll('.dot');
    clearActiveDot(dots);
    dots[currentCount].classList.add('active-dot');
}

galleryItems.forEach((item, index) => {
    item.addEventListener('click', async() => {
        currentIndex = index;
        currentCount = 0;
        localStorage.setItem('index', currentIndex);
        localStorage.setItem('count', currentCount);
        await activateScroll(currentIndex);
        item.classList.add('active');
    });
});

buttonLeft.addEventListener('click', async() => {
    const units = await loadUnits();
    const totalPhotos = units[currentIndex].photos.length;
    currentCount = (currentCount - 1 + totalPhotos) % totalPhotos;
    localStorage.setItem('count', currentCount);
    await updateGalleryPicture(currentIndex, currentCount);
    updateActiveDot();
});

buttonRight.addEventListener('click', async() => {
    const units = await loadUnits();
    const totalPhotos = units[currentIndex].photos.length;
    currentCount = (currentCount + 1) % totalPhotos;
    localStorage.setItem('count', currentCount);
    await updateGalleryPicture(currentIndex, currentCount);
    updateActiveDot();
});

// Initial activation
(async() => {
    await activateScroll(currentIndex);
    galleryItems[currentIndex].classList.add('active');
})();