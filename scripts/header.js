const header = document.querySelector('.header');
const footer = document.querySelector('.footer');
const head = document.querySelector('head');


const headerContent = document.createElement('div');
headerContent.className = 'fc';
header.innerHTML = `
<div class="nav">
<a href="./"><img src="../logo-helgeo.png" alt="logo" width="60%"></a>
    <a href="./">Home</a>
    <a href="./gallery">Gallery</a>
    <a href="#" class="sub-item">Accommodation
    <div class="sub-nav"></div>
    </a>
    <a href="./">Specials</a>
    <a href="./contact/index.php">Contact</a>
    <a href="./" class="booking"><i class="fa-solid fa-calendar"></i> Bookings</a>
</div>`;

footer.innerHTML = `  
<div>
<h1>Contact Us</h1>
<p>
    <i class="fa-solid fa-phone"></i> Cellphone :072 380 3066</p>
<p><i class="fa-solid fa-envelope"></i> Email: info@helgeo.co.za</p>
<p>Also visit: Bela-Bela Guesthouse</p>
</div>
<div class="fc">
<a href="./">Home</a>
    <a href="./gallery">Gallery</a>
    <a href="#" class="sub-item">Accommodation
    <div class="sub-nav"></div>
    </a>
    <a href="./">Specials</a>
    <a href="./contact">Contact</a>
    <a href="./" class="booking"><i class="fa-solid fa-calendar"></i> Bookings</a>
</div>
<div class="fc">
<a href="#top" class="go-to-top">Go to top</a>
</div>
`;

header.appendChild(headerContent);

function createHeadStyle(...styles) {
    styles.forEach(item => {
        const headContent = document.createElement('link');
        headContent.setAttribute('rel', 'stylesheet');
        if (document.title == 'Home') {
            headContent.setAttribute('href', `./styles/${item}`);
        } else {
            headContent.setAttribute('href', `../styles/${item}`);
        }
        head.append(headContent);
    })
}

function addIcons(item) {
    const headContent = document.createElement('script');
    headContent.setAttribute('crossorigin', 'anonymous');
    headContent.setAttribute('src', `${item}`);
    head.append(headContent);
}

function addScripts(...items) {
    const headContent = document.createElement('script');
    headContent.setAttribute('type', `module`);
    items.forEach(item => {
        if (document.title == 'Home') {
            headContent.setAttribute('src', `./scripts/${item}`);
        } else {
            headContent.setAttribute('src', `../scripts/${item}`);
        }
    })
    document.body.append(headContent);
}

createHeadStyle('layouts.css', 'style.css', 'footer.css', 'buttons.css', 'gallery.css', 'fonts.css', 'accommodation.css', 'facilities.css');
addIcons('https://kit.fontawesome.com/062d0051ac.js');
addScripts('nav.js');