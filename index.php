<?php
include './components/header.php';
?>
<div class="home-slide">
    <!-- <img src="./home_images/head_1.jpg" width="100%"> -->
    <div class="home-slide-content">
        <h1>Welcome to Helgeo Guesthouse</h1>
        <div class="description"><p><span>1</span> located in Bela Bela township</p></div>
        <a href="#start">Scroll Down</a>
    </div>
</div>
<style>
    .home-slide {
        width: 100%;
        height: 600px;
        background: black;
        background-image: url("./home_images/head_1.jpg");
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        position: relative;
        animation: bg 5s linear infinite;
        transition: .3s;
    }

    @keyframes bg {
        0% {
            background-size: 100%;
        }

        75% {
            background-size: 120%;
        }

        95% {
            background-size: 200%;
        }

        100% {
            background-size: 180%;
        }
    }

    .home-slide-content {
        position: absolute;
        width: 90%;
        height: 100%;
        background: rgb(0, 0, 0, 0.6);
        color: white;
        display: flex;
        flex-direction: column;
        padding-left: 10%;
        /* padding-top: 10%; */
        top: 0;
        left: 0;
    }

    .home-slide-content a {
        text-decoration: none;
        color: white;
    }

    .home-slide-content a:hover {
        text-decoration: none;
        color: orange;
    }

    .home-slide-content h1 {
        font-size: 56px;
    }

    .description {
        /* display: flex; */
        font-size: 20px;
    } 
    .description p{
        display: flex;
    }

    .description span {
        width: 20px;
        height: 20px;
        background: white;
        color: black;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        margin-right: 30px;
        padding: 5px;
    }
</style>
<script>
    const imagesObject = [{
        image: "./home_images/head_1.jpg",
        title: "",
        description: "<p><span>2</span> located in Bela Bela township</p>",
    }, {
        image: "./home_images/head_2.jpg",
        title: "",
        description: "<p><span>3</span> located in Bela Bela township</p>",
    }, {
        image: "./home_images/head_3.jpg",
        title: "",
        description: "<p><span>4</span> located in Bela Bela township</p>",
    }, ]
    const welcomeSlide = document.querySelector('.home-slide');
    const description = document.querySelector('.description');
    let count = 0;

    function homeSlide() {
        count++;
        if (count > imagesObject.length - 1) {
            count = 0
            description.innerHTML = "";
            description.innerHTML = `<p><span>1</span> located in Bela Bela township</p>`;
        };
        welcomeSlide.style.backgroundImage = `url(${imagesObject[count].image})`;
        description.innerHTML += `${imagesObject[count].description}`;
    }

    setInterval(() => {
        homeSlide()
    }, 5000);
</script>
<div id="start"></div>
<div class="content">
    <h1>About Us</h1>
    <div class="fr">
        <div class="flx-1">
            <p>Helgeo Guesthouse is located in Bela Bela township(28 Moloto street) 2.2 km away from the hot water
                springs(Warmbaths).<br><br> Helgeo Guesthouse surroundings offer its guests easy access to shopping
                complex, ATMs, filling stations, restaurants
                and other places of entertainment.<br><br> Our facilities consist of five self-catering units and seven
                standard rooms, which can accommodate single travellers, couples, friends and family. All rooms have
                bathroom and TV with selected
                satellite channels. Helgeo Guesthouse offers comfortable and affordable accommodation for all. This
                makes Helgeo Guesthouse a prefect traveller's destination of choice.</p>
        </div>
        <div class="images flx-1">
            <div class="fr">
                <div class="img image-bg"></div>
                <div class="img image-bg"></div>
            </div>
            <div class="img image-bg"></div>
        </div>
    </div>

    <div class="fr pd-">
        <div class="flx-2">
            <h2>Nearby Facilities</h2>
            <div class="fr facilities-icons">
                <i class="fa-solid fa-utensils"></i>
                <i class="fa-solid fa-store"></i>
                <i class="fa-solid fa-gas-pump"></i>
                <i class="fa-solid fa-person-swimming"></i>
            </div>
            <div class="fr facility">
                <img src="https://belamall.co.za/wp-content/uploads/2021/07/logo.png
                    " width="30%">
                <div class="">
                    <h2>1.6 Km Away from Bela Mall</h2>
                    <span><i class="fa-solid fa-walking a"></i>
                        <p>22 minutes walking</p>
                    </span>
                    <span><i class="fa-solid fa-car b"></i>
                        <p>4 minutes driving</p>
                    </span>
                    <a href="https://www.google.com/maps/dir/28+Molotto+St,+Bela-Bela,+0480/Warmbaths,+A+Forever+Resort,+Chris+Hani+Way,+Bela-Bela/@-24.8870579,28.2934525,16z/data=!3m1!4b1!4m13!4m12!1m5!1m1!1s0x1ebf7329896dd041:0x75e9628e76457847!2m2!1d28.305518!2d-24.8878587!1m5!1m1!1s0x1ee8310b11ee24d1:0x8d75fd8e62d42f65!2m2!1d28.2906496!2d-24.8880559?entry=ttu&g_ep=EgoyMDI0MTAyOS4wIKXMDSoASAFQAw%3D%3D
                        " target="_blank"><i class="fa-solid fa-diamond-turn-right"></i>
                        <p>Direction</p>
                    </a>
                </div>
            </div>
            <div class="fr facility">
                <img src="https://www.foreverwarmbaths.co.za/img/entertainment/IMG_8889.JPG" width="30%">
                <div class="">
                    <h2>2.2 Km Away from Forver Resorts</h2>
                    <span><i class="fa-solid fa-walking a"></i>
                        <p>29 minutes walking</p>
                    </span>
                    <span><i class="fa-solid fa-car b"></i>
                        <p>5 minutes driving</p>
                    </span>
                    <a href="https://www.google.com/maps/dir/28+Molotto+St,+Bela-Bela,+0480/Bela+Mall,+Bela-Bela,+0480/@-24.8914609,28.295091,16z/data=!3m1!4b1!4m13!4m12!1m5!1m1!1s0x1ebf7329896dd041:0x75e9628e76457847!2m2!1d28.305518!2d-24.8878587!1m5!1m1!1s0x1ebf0cd3b1b6930b:0x41285652302a9db7!2m2!1d28.2950463!2d-24.8952382?entry=ttu&g_ep=EgoyMDI0MTAyOS4wIKXMDSoASAFQAw%3D%3D" target="_blank"><i class="fa-solid fa-diamond-turn-right"></i>
                        <p>Direction</p>
                    </a>
                </div>
            </div>
            <!-- <h1>Google Maps</h1>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3619.2783194055123!2d28.304305636891836!3d-24.888486421493297!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1ebf7329896dd041%3A0x75e9628e76457847!2s28%20Molotto%20St%2C%20Bela-Bela%2C%200480!5e0!3m2!1sen!2sza!4v1730636451637!5m2!1sen!2sza"
                    width="100%" height="450" style="border:0px solid orange;border-radius:20px;box-shadow:2px 2px 20px rgb(0,0,0,0.2);" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe> -->
        </div>
        <div class="flx-1 pd-5">
            <h1>Google reviews</h1>
            <div class="controllers fr">
                <i class="fa-solid fa-chevron-left"></i>
                <i class="fa-solid fa-chevron-right"></i>
            </div>
            <div class="card mt-2">
                <div class="card-body">
                    <h2 class="card-title">Cynthia Baloyi</h2>
                    <p class="card-text">It might be at the location but it provides the service of what they might at
                        kasi.It is very clean and the stuff are friendly.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .card {
        background: white;
        border-radius: 10px;
        padding: 10px;
        border: 1px solid #ccc;
    }
</style>
<script>
    document.title = "Home";
    document.querySelectorAll('.header .nav a')[1].classList.add('active-nav');
</script>
<?php
include './components/footer.php';
?>