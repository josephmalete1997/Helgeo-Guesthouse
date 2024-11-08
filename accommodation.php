<?php
include './components/header.php';
?>
<div class="content w-80">
    <h1 id="accommodation-title" class="fr-c"></h1>
    <p>Please Note:All images are for reference & illustration purposes.Units might vary in layout & size for different
        options.</p>
    <div class="fr">
        <img class="flx-1-5 floor-plan">
        <div id="bottom-pictures" class="flx-1">
            <div class='fr-c rl image-scroll'>
                <i class="fa-solid fa-chevron-left rd-50 ab lt-10" id="left-scroll" onclick="moveSlide(-1)"></i>
                <i class="fa-solid fa-chevron-right rd-50 ab rt-10" id="right-scroll" onclick="moveSlide(1)"></i>
            </div>
        </div>
    </div>
    <div class="flx-1 p-l-20">
        <h2>Features</h2>
        <div class="fr">
            <div class="unit-features flx-1">

            </div>
            <div class="flx-1">
            </div>
        </div>
    </div>
</div>

<script>
const unitFeature = document.querySelector('.unit-features');
const bottomPictures = document.querySelector('#bottom-pictures');
const accommodateObject = JSON.parse(localStorage.getItem('accommodation'));
document.querySelector("#accommodation-title").innerHTML = `
    ${accommodateObject.name}
    <span style="
        color: black;
        border-radius:30px;
        font-size: 14px;
        padding:5px 10px;
        font-family:'montserrat-light';
        margin:0 20px;
        background:rgb(0,0,0);
        color: white;
    ">
        ${accommodateObject.catering}
    </span>
    <span>
        <i class="fa-solid fa-tag"></i> 
        R${accommodateObject.price}
    </span>
`;
document.querySelector('.floor-plan').src = accommodateObject.floorPlan;

// Display features
accommodateObject.features.forEach(item => {
    const feature = document.createElement('div');
    feature.innerHTML = item;
    feature.classList.add("feature");
    unitFeature.append(feature);
});

// Set the document title
document.title = localStorage.getItem('title');

// Display images and store them in local storage
accommodateObject.photos.forEach((item, index) => {
    const bottomPicture = document.createElement('img');
    bottomPicture.style.width = '40%';
    bottomPicture.classList.add('bottom-picture');
    bottomPicture.classList.add('carousel-image');
    bottomPicture.src = item;
    bottomPictures.append(bottomPicture);
});

// Initialize the carousel
let currentIndex = parseInt(localStorage.getItem('currentIndex')) || 0; // Load from localStorage or default to 0
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
    localStorage.setItem('currentIndex', currentIndex); // Store the current index in localStorage
}

// Initialize the carousel by showing the current image
showSlide(currentIndex);

// Add event listeners for scroll buttons
document.getElementById('left-scroll').addEventListener('click', () => moveSlide(-1));
document.getElementById('right-scroll').addEventListener('click', () => moveSlide(1));

</script>
<script>
    document.querySelectorAll('.header .nav a')[3].classList.add('active-nav');
</script>
<?php
include './components/footer.php';
?>