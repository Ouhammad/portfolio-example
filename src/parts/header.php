<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mouhammad - Web Developper</title>

    <!-- Style css -->

    <!-- <link rel="stylesheet" href="assets/css/menu.css"> -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/contact.css">
    <link rel="stylesheet" href="assets/css/contributor.css">


    <!-- Style for Smartphones -->
    <link rel="stylesheet" href="assets/css/smartphone.css">


    <link rel="stylesheet" href="assets/css/tab.css">

    <script src="assets/js/main.js" async>
        document.addEventListener("DOMContentLoaded", (event) => {
            console.log("DOM fully loaded and parsed");
        }); </script>

</head>

<body>
    <!-- Portfolio header with banner in background -->
    <header class="fixed-top">
        <div class="header-container" id="header">
            <h1 class="logo">HMB</h1>

            <nav>
                <a href="#menu-mob" class="mob-tab"><img src="src-svg/bars.svg" alt=""></a>
                <ul class="large-screen" id="menu-mob">
                    <li><a href="/">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#work">Work</a></li>
                    <li><a href="#blog">Blog</a></li>
                    <li><a href="#contact">contact</a></li>
                    <li class="menu-mob-close"><a href="">X</a></li>
                </ul>
            </nav>
        </div>
    </header>


    <!-- Section Hero start -->
    <div class="hero">
        <div class="overlay"></div>
        <div class="container-hero">
            <h1 class="whoami-title-hero"><span class="whoami-title-hero--intro">I am </span>Hadj Mouhammad Ba</h1>
            <p class="subtitle-hero">
                <span class="subtitle-hero-intro">working As</span> <span class="subtitle-hero--content"></span>
            </p>
        </div>
    </div>
    <main>