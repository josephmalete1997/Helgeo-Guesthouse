<?php
include './components/header.php';
?>
<div class="home-slide">
    <!-- <img src="./home_images/head_1.jpg" width="100%"> -->
    <div class="home-slide-content">
        <h1>Welcome to <span style="color:orange;font-family:'Handycheera Regular';font-weight:100;">Helgeo Guesthouse</span></h1>
        <h2>Travellers destination of choice</h2>
        <div class="description">
            <p class="first"><span><i class="fa-solid fa-person-booth"></i></span> We Accommodate single travellers, couples, friends and family.</p>
        </div>
        <a href="#start"><i class="fa-solid fa-computer-mouse"></i>Scroll Down</a>
    </div>
</div>
<style>
    .home-slide {
        width: 100%;
        height: 600px;
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

        100% {
            background-size: 130%;
        }
    }

    .home-slide-content {
        position: absolute;
        width: 90%;
        height: 100%;
        background: rgb(0, 0, 0, 0.3);
        color: white;
        display: flex;
        flex-direction: column;
        padding-left: 10%;
        top: 0;
        left: 0;
    }

    .home-slide-content p {
        transition: .5s;
        transform: translateX(-50%);
        opacity: 0;
        transform-origin: left;
    }

    .home-slide-content p.show-point {
        transform: translateX(0%);
        opacity: 1;
    }

    .home-slide-content a {
        text-decoration: none;
        color: white;
        position: absolute;
        right: 10%;
        top: 60%;
    }

    .home-slide-content a .fa-solid {
        margin-right: 5px;
        transition: .3s;
    }

    .home-slide-content a:hover .fa-solid {
        margin-right: 15px;
    }

    .home-slide-content a:hover {
        text-decoration: none;
        color: orange;
    }

    .home-slide-content h1 {
        font-size: 46px;
    } .home-slide-content h2 {
        font-family:'GreatVibes-Regular';
        font-weight:100;
        margin:0px;
        font-size:46px;
    }

    .description {
        /* display: flex; */
        font-size: 20px;
    }

    .description p {
        display: flex;
        align-items: center;
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
        margin-right: 15px;
        padding: 10px;
    }

    @media screen and (max-width:600px){
        @keyframes bg {
        0% {
            background-size: 250%;
        }

        75% {
            background-size: 270%;
        }

        100% {
            background-size: 260%;
        }}
        .home-slide {
            width: 100%;
            height: 100vh;
            background-image: url("./home_images/head_1.jpg");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            position: relative;
            animation: none;
            transition: .3s;
        }
    .home-slide-content  {
        width: 95%;
        padding:0% 2.5%;
    }
    
    .home-slide-content a {
       bottom:0%;
       margin: 50% auto;
       width:50%;
       left:30%;
        right:none;
        padding: 10px;
        border-radius: 20px;
        align-items: center;
    }
    
    .home-slide-content a .fa-solid {
        margin-right: 5px;
        transition: .3s;
    }

    .home-slide-content a:hover .fa-solid {
        margin-right: 15px;
    }

    .home-slide-content a:hover {
        text-decoration: none;
        color: orange;
    }

    .home-slide-content h1 {
        font-size: 32px;
    }
    
    .home-slide-content h2 {
        font-size: 30px;
    }

    .description {
        /* display: flex; */
        margin-top: 20px;
    }

    .description p {
        display: flex;
        align-items: center; font-size: 16px;
    }

    .description span {
        width: 10px;
        height: 10px;
        background: white;
        color: black;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        margin-right: 5px;
        padding: 15px;
    }

    }
</style>
<script>
    const imagesObject = [{
        image: "./home_images/head_1.jpg",
        title: ``,
        description: `<p class="first"><span>1</span> offer its guests easy access to shopping
                complex, ATMs, <br>filling stations, restaurants
                and other places of entertainment</p>`,
    }, {
        image: "./home_images/head_2.jpg",
        title: "",
        description: `<p class="second"><span><i class="fa-solid fa-bath"></i></span> All rooms have
                bathroom and TV with selected
                satellite channels.</p>`,
    }, {
        image: "./home_images/head_3.jpg",
        title: "",
        description: `<p class="third"><span><i class="fa-solid fa-house"></i></span> Helgeo Guesthouse offers comfortable and affordable accommodation for all.</p>`,
    }, {
        image: "./home_images/head_4.jpg",
        title: "",
        description: `<p class="last"><span><i class="fa-solid fa-store"></i></span> We offer guests easy access to shopping
                complex, ATMs, <br>filling stations, restaurants
                and other places of entertainment.</p>`,
    }, ]
    const welcomeSlide = document.querySelector('.home-slide');
    const description = document.querySelector('.description');
    let count = 0;

    setTimeout(() => {
        document.querySelector('.first').classList.add("show-point");
    }, 1000);

    function homeSlide() {
        count++;
        if (count > imagesObject.length - 1) {
            count = 0;
            welcomeSlide.style.backgroundImage = `url(${imagesObject[count].image})`;
            description.innerHTML = "";
            description.innerHTML = `<p class="first"><span><i class="fa-solid fa-person-booth"></i></span> We Accommodate single travellers, couples, friends and family.</p>`;
            setTimeout(() => {
                document.querySelector('.first').classList.add("show-point");
            }, 1000);
        } else {
            welcomeSlide.style.backgroundImage = `url(${imagesObject[count].image})`;
            description.innerHTML += `${imagesObject[count].description}`;
            setTimeout(() => {
                document.querySelector('.second').classList.add("show-point");
            }, 1000);

            setTimeout(() => {
                document.querySelector('.third').classList.add("show-point");
            }, 1000);

            setTimeout(() => {
                document.querySelector('.last').classList.add("show-point");
            }, 1000);
        }

    }

    setInterval(() => {
        homeSlide()
    }, 5000);
</script>
<div id="start"></div>
<div class="content">
    <h1>About Us</h1>
    <div class="fc">
        <div class="flx-1">
            <p>Helgeo Guesthouse is located in Bela Bela township(28 Moloto street) 2.2 km away from the hot water
                springs(Warmbaths). Our surroundings offer guests easy access to shopping
                complex, ATMs, filling stations, restaurants
                and other places of entertainment. Our facilities consist of five self-catering units and seven
                standard rooms, which can accommodate single travellers, couples, friends and family. All rooms have
                bathroom and TV with selected
                satellite channels. Helgeo Guesthouse offers comfortable and affordable accommodation for all. This
                makes Helgeo Guesthouse a prefect traveller's destination of choice.</p>
        </div>
        <div class="images fr">
            <div class="item">
                <div class="img" id="img-one">
                    <i class="fa-solid fa-wine-glass"></i>
                </div>
                <div class="over-lay">
                    <p>Enjoy refreshing moments at the kitchen counter and bar chairs.</p>
                </div>
            </div>
            <div class="item">
                <div class="img" id="img-two">
                    <i class="fa-solid fa-fire-burner"></i>
                </div>
                <div class="over-lay">
                    <p>Self-cater with our fully-equipped kitchen units and stoves.</p>
                </div>
            </div>
            <div class="item">
                <div class="img" id="img-three">
                    <i class="fa-solid fa-utensils"></i>
                </div>
                <div class="over-lay">
                    <p>Create unforgettable family dinners filled with fun and laughter.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="fr pd-">
        <div class="flx-2">
            <h2>Nearby Facilities</h2>
            <!-- <div class="fr facilities-icons">
                <i class="fa-solid fa-utensils"></i>
                <i class="fa-solid fa-store"></i>
                <i class="fa-solid fa-gas-pump"></i>
                <i class="fa-solid fa-person-swimming"></i>
            </div> -->
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
    document.querySelectorAll('.header .nav a')[0].classList.add('active-nav');
</script>
<?php
include './components/footer.php';
?>