const galleryItem = document.querySelectorAll('.gallery-nav-item');
const featureList = document.querySelector('#feature-list');
const category = document.querySelector('#category');
const galleryPicture = document.querySelector('.picture-gallery');
const buttonLeft = document.querySelector('#left');
const buttonRight = document.querySelector('#right');
const dots = document.querySelector('.dots');


function clearActiveDot(item) {
    item.forEach(item => {
        item.classList.remove('active-dot');
    })
}

const units = [{
        name: 'Two Sleeper Unit(A)',
        features: [
            `<i class="fa-solid fa-tv"></i> LCD TV`,
            `<i class="fa-solid fa-chair"></i> Study table and chair`,
            `<i class="fa-solid fa-fire-burner"></i> Stove`,
            `<i class="fa-solid fa-calendar-week"></i> Microwave oven`,
            `<i class="fa-solid fa-box"></i> Fridge`,
            `<span style="display:flex;flex-direction: column;"><i class="fa-solid fa-square"></i><i class="fa-solid fa-square"></i></span> Wardrope`,
            `<i class="fa-solid fa-bed"></i> Double bed`,
            `<i class="fa-solid fa-bath"></i> Bathroom`,
            `<i class="fa-solid fa-fan"></i> Fan`,
            `<i class="fa-solid fa-couch"></i> Sofa`,
        ],
        photos: [
            './gallery_images/unit1/a8.jpg',
            './gallery_images/unit1/a1.jpg',
            './gallery_images/unit1/a2.jpg',
            './gallery_images/unit1/a3.jpg',
            './gallery_images/unit1/a4.jpg',
            './gallery_images/unit1/a5.jpg',
            './gallery_images/unit1/a6.jpg',
            './gallery_images/unit1/a7.jpg',
        ],
        catering: 'Self-Catering',
        price: 650,
        floorPlan: `./plans/two-sleeper(SC)Mobile.png`
    },
    {
        name: 'Two Sleeper Unit(B)',
        features: [
            `<i class="fa-solid fa-tv"></i> LCD TV`,
            `<i class="fa-solid fa-box"></i> Fridge`,
            `<i class="fa-solid fa-bed"></i> Double bed`,
            `<i class="fa-solid fa-bath"></i> Bathroom`,
            `<i class="fa-solid fa-fan"></i> Fan`,
            `<i class="fa-solid fa-couch"></i> Sofa`,
        ],
        photos: [
            './gallery_images/unit2/b1.jpg',
            './gallery_images/unit2/b2.jpg',
            './gallery_images/unit2/b3.jpg',
            './gallery_images/unit2/b4.jpg',
            './gallery_images/unit2/b5.jpg',
            './gallery_images/unit2/b6.jpg',
            './gallery_images/unit2/b7.jpg',
            './gallery_images/unit2/b8.jpg',
            './gallery_images/unit2/b9.jpg',
            './gallery_images/unit2/b10.jpg',
        ],
        catering: 'Standard',
        price: 450,
        floorPlan: `./plans/two-sleeper(SD)Mobile.png`
    },
    {
        name: 'Four Sleeper Unit',
        features: [
            `<i class="fa-solid fa-tv"></i> LCD TV`,
            `<i class="fa-solid fa-chair"></i> Bar chairs`,
            `<i class="fa-solid fa-fire-burner"></i> Stove`,
            `<i class="fa-solid fa-calendar-week"></i> Kitchen unit and counter`,
            `<i class="fa-solid fa-box"></i> Fridge`,
            `<span style="display:flex;flex-direction: column;"><i class="fa-solid fa-square"></i><i class="fa-solid fa-square"></i></span>x2 Wardrope`,
            `<i class="fa-solid fa-bed"></i> X2 Bed room`,
            `<i class="fa-solid fa-bath"></i> x2 Bathroom`,
            `<i class="fa-solid fa-fan"></i> Fan`,
            `<i class="fa-solid fa-couch"></i> Sofa`,
        ],
        photos: [
            './gallery_images/unit3/c1.jpg',
            './gallery_images/unit3/c2.jpg',
            './gallery_images/unit3/c3.jpg',
            './gallery_images/unit3/c4.jpg',
            './gallery_images/unit3/c5.jpg',
            './gallery_images/unit3/c6.jpg',
            './gallery_images/unit3/c7.jpg',
        ],
        catering: 'Self-Catering',
        price: 1200,
        floorPlan: `./plans/four-sleeperMobile.png`
    },
    {
        name: 'Six Sleeper Unit',
        features: [
            `<i class="fa-solid fa-tv"></i> LCD TV`,
            `<i class="fa-solid fa-chair"></i> Bar chairs`,
            `<i class="fa-solid fa-fire-burner"></i> Stove`,
            `<i class="fa-solid fa-calendar-week"></i> Kitchen unit and counter`,
            `<i class="fa-solid fa-box"></i> Fridge`,
            `<span style="display:flex;flex-direction: column;"><i class="fa-solid fa-square"></i><i class="fa-solid fa-square"></i></span>x3 Wardrope`,
            `<i class="fa-solid fa-bed"></i> X3 Bed room`,
            `<i class="fa-solid fa-bath"></i> Bathroom`,
            `<i class="fa-solid fa-fan"></i> Fan`,
            `<i class="fa-solid fa-couch"></i> Lounge`,
        ],
        photos: [
            './gallery_images/unit4/d1.jpg',
            './gallery_images/unit4/d3.jpg',
            './gallery_images/unit4/d2.jpg',
            './gallery_images/unit4/d4.jpg',
            './gallery_images/unit4/d5.jpg',
            './gallery_images/unit4/d6.jpg',
            './gallery_images/unit4/d7.jpg',
            './gallery_images/unit4/d8.jpg',
            './gallery_images/unit4/d9.jpg',
            './gallery_images/unit4/d10.jpg',
        ],
        catering: 'Self-Catering',
        price: 1800,
        floorPlan: `./plans/six-sleeperMobile.png`
    },
]

function clearActive() {
    galleryItem.forEach(item => {
        item.classList.remove('active');
    })
}


galleryItem.forEach((item, index) => {
    item.addEventListener('click', () => {
        let count = 0;
        localStorage.setItem('index', index);
        localStorage.setItem('count', count);
        activateScroll(item, localStorage.getItem('index') || index, localStorage.getItem('count') || count)
        item.classList.add('active');
    })
})

function activateScroll(item, index, count) {
    clearActive();
    featureList.innerHTML = '';
    dots.innerHTML = '';
    category.innerHTML = units[index].catering;

    units[index].features.forEach(item => {
        const feature = document.createElement('div');
        feature.innerHTML = item;
        featureList.append(feature);
    })

    units[index].photos.forEach(item => {
        const dot = document.createElement('div');
        dot.classList.add('dot');
        dots.append(dot);
    })

    galleryPicture.style.backgroundImage = `url("${units[index].photos[localStorage.getItem('count') || count]}")`;
    buttonLeft.addEventListener('click', () => {
        const dots = document.querySelectorAll('.dot')
        count--;
        localStorage.setItem('count', count);
        if (count < 0) count = units[index].photos.length - 1;
        galleryPicture.style.backgroundImage = `url("${units[index].photos[count]}")`;
        clearActiveDot(dots);
        dots[localStorage.getItem('count') || count].classList.add('active-dot');
    });
    buttonRight.addEventListener('click', () => {
        const dots = document.querySelectorAll('.dot')
        count++;
        localStorage.setItem('count', count);
        if (count > units[index].photos.length - 1) count = 0;
        galleryPicture.style.backgroundImage = `url("${units[index].photos[count]}")`;
        clearActiveDot(dots);
        dots[localStorage.getItem('count') || count].classList.add('active-dot');
    })
    document.querySelectorAll('.dot')[localStorage.getItem('count') || 0].classList.add('active-dot');
}
if (featureList) {
    activateScroll(galleryItem[0], localStorage.getItem('index') || 0, localStorage.getItem('count') || 0)
    galleryItem[localStorage.getItem('index') || 0].classList.add('active');
};

export default units;