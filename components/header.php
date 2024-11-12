<?php
include './config/db.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="styles/layouts.css" />
    <link rel="stylesheet" href="styles/style.css" />
    <link rel="stylesheet" href="styles/footer.css" />
    <link rel="stylesheet" href="styles/buttons.css" />
    <link rel="stylesheet" href="styles/gallery.css" />
    <link rel="stylesheet" href="styles/fonts.css" />
    <link rel="stylesheet" href="styles/accommodation.css" />
    <link rel="stylesheet" href="styles/facilities.css" />
    <link rel="stylesheet" href="styles/facilities.css" />
    <link rel="stylesheet" href="fontAwesome/fontAwesome/css/all.min.css" />
    <script src="https://kit.fontawesome.com/062d0051ac.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="fr top-item" id="top">
        <p><i class="fa-solid fa-clock"></i> Monday to Sunday</p>
        <a href="https://www.google.com/maps/place/28+Molotto+St,+Bela-Bela,+0480/@-24.8878536,28.3033432,17z/data=!3m1!4b1!4m5!3m4!1s0x1ebf7329891295df:0x740534a7334ad521!8m2!3d-24.8878536!4d28.3055319"
            target="_blank"><i class="fa-solid fa-location-dot"></i> 28 Moloto street, Bela-Bela, 0480</a>
        <a href="https://popia.co.za/" target="_blank"><i class="fa-solid fa-legal"></i> POPIA Compliant</a>
        <a href="https://www.facebook.com/helgeo.guesthouse.09" target="_blank"><i class="fa-brands fa-facebook"></i>
            Facebook</a>
        <p><i class="fa-solid fa-phone"></i> 072 380 3066</p>
    </div>
    <div class="header">
        <a href="./"><img src="./logo-helgeo.png" class="logo-mobile" width=""></a>
        <a href="./" class="logo"></a>
        <div class="nav">
            <a href="./">Home</a>
            <a href="./gallery">Gallery</a>
            <a href="#" class="sub-item">Accommodation
                <div class="sub-nav">
                </div>
            </a>
            <a href="./specials">Specials</a>
            <a href="./contact">Contact</a>
            <a href="./booking" class="booking"><i class="fa-solid fa-calendar"></i> Bookings</a>
        </div>
    </div>
    <style>
    @font-face {
        font-family: 'montserrat-light';
        src: url('./Montserrat/Montserrat-Light.ttf') format('truetype');
        font-weight: normal;
        font-style: normal;
    }

    @font-face {
        font-family: 'montserrat-extra-bold';
        src: url('./Montserrat/Montserrat-ExtraBold.ttf') format('truetype');
        font-weight: normal;
        font-style: normal;
    }

    @font-face {
        font-family: 'montserrat-normal';
        src: url('./Montserrat/Montserrat-Medium.ttf') format('truetype');
        font-weight: normal;
        font-style: normal;
    }

    @font-face {
        font-family: 'GreatVibes-Regular';
        src: url('./Montserrat/GreatVibes-Regular.ttf') format('truetype');
        font-weight: normal;
        font-style: normal;
    }

    @font-face {
        font-family: 'Handycheera Regular';
        src: url('./Montserrat/Handycheera Regular.otf') format('truetype');
        font-weight: normal;
        font-style: normal;
    }

    .logo {
        margin: 5px;
        margin-left: 200px;
        background-image: url("./logo-helgeo.png");
        background-position: center;
        background-repeat: no-repeat;
        background-size: 98%;
        width: 400px;
        height: 80px;
    }

    .logo-mobile {
        display: none;
    }

    @media screen and (max-width:600px) {
        .logo {
            display: none;
        }

        .logo-mobile {
            display: block;
            width: 50%;
            margin: 2% 25%;
        }
    }
    </style>