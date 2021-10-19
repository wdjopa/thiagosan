<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <meta property="og:type" content="Music" />
    <meta property="og:title" content="Achetez l'album Vamos - Thiago San" />
    <meta property="og:description" content="Soutenez le projet et achetez le dernier album de Thiago San" />
    <meta property="og:url" content="https://thiagosan.com/" />
    <meta property="og:image" content="https://thiagosan.com/img/logo.png" />
    <meta property="og:site_name" content="Vamos - Thiago San" />

    <!-- Title -->
    <title>Thiago San - Vamos</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <style>
        .nav-brand {
            font-family: "Allura", cursive;
            color: white !important;
            font-size: 4rem !important;
            max-width: unset !important;

        }

        .nav-brand:hover {
            font-family: "Allura", cursive;

        }

        @media only screen and (max-width: 767px) {
            .featured-album-content .album-thumbnail {
                height: 400px !important;
            }
        }
        .copywrite-text a{
            color: blueviolet!important;
            font-weight: 600!important;

        }    
        </style>
</head>

<body>
    <!-- ##### Preloader ##### -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="circle-preloader">
            <img src="img/core-img/compact-disc.png" alt="">
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <!-- Navbar Area -->
        <div class="thiago_san-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container-fluid">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="thiago_sanNav">

                        <!-- Nav brand -->
                        <a href="index.html" class="nav-brand">
                            Thiago San
                            <!-- <img src="img/core-img/logo.png" alt=""> -->
                        </a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <!-- <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul> -->

                                <!-- Social Button -->
                                <div class="top-social-info">
                                    <!-- <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a> -->
                                    <a href="https://www.instagram.com/thiago_san_k98/"><i class="fa fa-instagram"
                                            aria-hidden="true"></i></a>
                                    <a href="https://www.youtube.com/channel/UCZNP_vwHBgexy0KyHW-Wtbw"><i
                                            class="fa fa-youtube" aria-hidden="true"></i></a>
                                </div>

                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Hero Area Start ##### -->
    <section class="hero-area">
        <div class="hero-slides owl-carousel">

            <!-- Single Hero Slide -->
            <div class="single-hero-slide d-flex align-items-center justify-content-center">
                <!-- Slide Img -->
                <div class="slide-img bg-img" style="background-image: url(img/pochette.jpg);"></div>
                <!-- Slide Content -->
                <div class="hero-slides-content text-center">
                    <h2 data-animation="fadeInUp" data-delay="100ms">Thiago San <span>Thiago San</span></h2>
                    <p data-animation="fadeInUp" data-delay="300ms">Vamos</p>
                </div>
                <!-- Big Text -->
                <h2 class="big-text">Thiago San</h2>
            </div>

        </div>
        <!-- bg gradients -->
        <!-- <div class="bg-gradients"></div> -->

        <!-- <div class="slide-down" id="scrollDown">
            <h6>Slide Down</h6>
            <div class="line"></div>
        </div> -->
    </section>
    <!-- ##### Hero Area End ##### -->
    <!-- ##### Featured Album Area Start ##### -->
    <div class="featured-album-area section-padding-100 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="featured-album-content d-flex flex-wrap">

                        <!-- Album Thumbnail -->
                        <div class="album-thumbnail h-100 bg-img" style="background-image: url(img/pochette.jpg);">
                        </div>

                        <!-- Album Songs -->
                        <div class="album-songs h-100">

                            <!-- Album Info -->
                            <div class="album-info mb-50 d-flex flex-wrap align-items-center justify-content-between">
                                <div class="album-title">
                                    <h6>Dernier album</h6>
                                    <h4>Vamos</h4>
                                </div>
                                <div class="album-buy-now">
                                    <a href="#" class="btn thiago_san-btn">Acheter l'album</a>
                                </div>
                            </div>

                            <div class="album-all-songs">

                                <!-- Music Playlist -->
                                <div class="music-playlist">
                                    <!-- Single Song -->
                                </div>
                            </div>

                            <!-- Now Playing -->
                            <div class="now-playing d-flex flex-wrap align-items-center justify-content-between">
                                <div class="songs-name">
                                    <p>Playing</p>
                                    <h6 class="playing-song">La Ronneda</h6>
                                </div>
                                <audio preload="auto" controls>
                                    <source src="audio/la_ronneda.aac">
                                </audio>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Featured Album Area End ##### -->
    <!-- ##### About Us Area Start ##### -->
    <div class="about-us-area section-padding-100-0 bg-img bg-overlay" style="background-image: url('img/thiago.jpg');"
        id="about">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h2>Il parle du projet</h2>
                        <!-- <h6>Sed porta cursus enim, vitae maximus felis luctus iaculis.</h6> -->
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- About Thumbnail -->
                <div class="col-12 col-lg-6">
                    <div class="about-thumbnail mb-100">
                        <img src="img/thiago.jpg" alt="">
                    </div>
                </div>
                <!-- About Content -->
                <div class="col-12 col-lg-6">
                    <div class="about-content mb-100">
                        <h4>Hello la mif, c'est Thiago San</h4>
                        <p>Nulla pretium tincidunt felis, nec sollicitudin mauris lobortis in. Aliquam eu feugiat
                            ligula, laoreet efficitur nulla. Morbi nec neque porta, elementum massa at, vehicula nunc.
                            Nulla facilisi. Donec id purus eu lectus imperdiet varius. Curabitur consectetur nunc sem,
                            vitae cursus enim tempor eget. Praesent pellentesque nisi urna, sit amet suscipit ligula
                            posuere id. Aenean id tortor vel quam ornare gravida. Phasellus luctus feugiat nunc, quis
                            vulputate ipsum convallis quis. Integer vel nulla erat. Donec erat metus, luctus quis
                            maximus quis, volutpat eu tellus. Interdum et malesuada fames ac ante ipsum primis in
                            faucibus.</p>
                        <img src="img/core-img/signature.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### About Us Area End ##### -->

    <!-- ##### Career Timeline Area Start ##### -->
    <div class="career-timeline-area section-padding-100 d-none">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h2>My Life &amp; career</h2>
                        <h6>Sed porta cursus enim, vitae maximus felis luctus iaculis.</h6>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">

                    <!-- Single Timeline Area -->
                    <div class="single-timeline-area d-flex">
                        <!-- Timeline Date -->
                        <div class="timeline-date">
                            <h2>17 <span>July 1983</span></h2>
                        </div>
                        <!-- Timeline Content -->
                        <div class="timeline-content">
                            <h5>My childhood</h5>
                            <p>Nulla facilisi. Donec id purus eu lectus imperdiet varius. Curabitur consectetur nunc
                                sem,
                                vitae cursus enim tempor eget. Praesent pellentesque nisi urna, sit amet suscipit ligula
                                posuere id. Aenean id tortor vel quam ornare gravida. Phasellus luctus feugiat nunc,
                                quis
                                vulputate ipsum convallis quis. Integer vel nulla erat. Donec erat metus, luctus quis
                                maximus quis, volutpat eu tellus. Interdum et malesuada fames ac ante ipsum primis in
                                faucibus. </p>
                        </div>
                    </div>

                    <!-- Single Timeline Area -->
                    <div class="single-timeline-area d-flex">
                        <!-- Timeline Date -->
                        <div class="timeline-date">
                            <h2>25 <span>May 2004</span></h2>
                        </div>
                        <!-- Timeline Content -->
                        <div class="timeline-content">
                            <h5>Early career years</h5>
                            <p>Nulla facilisi. Donec id purus eu lectus imperdiet varius. Curabitur consectetur nunc
                                sem,
                                vitae cursus enim tempor eget. Praesent pellentesque nisi urna, sit amet suscipit ligula
                                posuere id. Aenean id tortor vel quam ornare gravida. Phasellus luctus feugiat nunc,
                                quis
                                vulputate ipsum convallis quis. Integer vel nulla erat. Donec erat metus, luctus quis
                                maximus quis, volutpat eu tellus. Interdum et malesuada fames ac ante ipsum primis in
                                faucibus. </p>
                        </div>
                    </div>

                    <!-- Single Timeline Area -->
                    <div class="single-timeline-area d-flex">
                        <!-- Timeline Date -->
                        <div class="timeline-date">
                            <h2>08 <span>May 2007</span></h2>
                        </div>
                        <!-- Timeline Content -->
                        <div class="timeline-content">
                            <h5>First Album Release</h5>
                            <p>Nulla facilisi. Donec id purus eu lectus imperdiet varius. Curabitur consectetur nunc
                                sem,
                                vitae cursus enim tempor eget. Praesent pellentesque nisi urna, sit amet suscipit ligula
                                posuere id. Aenean id tortor vel quam ornare gravida. Phasellus luctus feugiat nunc,
                                quis
                                vulputate ipsum convallis quis. Integer vel nulla erat. Donec erat metus, luctus quis
                                maximus quis, volutpat eu tellus. Interdum et malesuada fames ac ante ipsum primis in
                                faucibus. </p>
                        </div>
                    </div>

                    <!-- Single Timeline Area -->
                    <div class="single-timeline-area d-flex">
                        <!-- Timeline Date -->
                        <div class="timeline-date">
                            <h2>30 <span>May 2009</span></h2>
                        </div>
                        <!-- Timeline Content -->
                        <div class="timeline-content">
                            <h5>My First Live Concert</h5>
                            <p>Nulla facilisi. Donec id purus eu lectus imperdiet varius. Curabitur consectetur nunc
                                sem,
                                vitae cursus enim tempor eget. Praesent pellentesque nisi urna, sit amet suscipit ligula
                                posuere id. Aenean id tortor vel quam ornare gravida. Phasellus luctus feugiat nunc,
                                quis
                                vulputate ipsum convallis quis. Integer vel nulla erat. Donec erat metus, luctus quis
                                maximus quis, volutpat eu tellus. Interdum et malesuada fames ac ante ipsum primis in
                                faucibus. </p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="timeline-btn text-center mt-100">
                        <a href="#" class="btn thiago_san-btn">Load More</a>
                    </div>
                </div>
            </div>

        </div>

        <!-- Side Thumbs -->
        <div class="first-img">
            <img src="img/bg-img/man.png" alt="">
        </div>
        <div class="second-img">
            <img src="img/bg-img/microphone.png" alt="">
        </div>
    </div>
    <!-- ##### Career Timeline Area End ##### -->


    <!-- ##### Upcoming Shows Area Start ##### -->
    <div class="upcoming-shows-area section-padding-100 d-none">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h2>Upcoming shows</h2>
                        <h6>Sed porta cursus enim, vitae maximus felis luctus iaculis.</h6>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <!-- Upcoming Shows Content -->
                    <div class="upcoming-shows-content">

                        <!-- Single Upcoming Shows -->
                        <div class="single-upcoming-shows d-flex align-items-center flex-wrap">
                            <div class="shows-date">
                                <h2>17 <span>July</span></h2>
                            </div>
                            <div class="shows-desc d-flex align-items-center">
                                <div class="shows-img">
                                    <img src="img/bg-img/s1.jpg" alt="">
                                </div>
                                <div class="shows-name">
                                    <h6>Electric castle Festival</h6>
                                    <p>Cluj, Romania</p>
                                </div>
                            </div>
                            <div class="shows-location">
                                <p>At the Castle</p>
                            </div>
                            <div class="shows-time">
                                <p>20:30</p>
                            </div>
                            <div class="buy-tickets">
                                <a href="#" class="btn thiago_san-btn">Buy Tikets</a>
                            </div>
                        </div>

                        <!-- Single Upcoming Shows -->
                        <div class="single-upcoming-shows d-flex align-items-center flex-wrap">
                            <div class="shows-date">
                                <h2>23 <span>July</span></h2>
                            </div>
                            <div class="shows-desc d-flex align-items-center">
                                <div class="shows-img">
                                    <img src="img/bg-img/s2.jpg" alt="">
                                </div>
                                <div class="shows-name">
                                    <h6>Electric Festival</h6>
                                    <p>Manhathan, NY, USA</p>
                                </div>
                            </div>
                            <div class="shows-location">
                                <p>Main Stadium</p>
                            </div>
                            <div class="shows-time">
                                <p>21:30</p>
                            </div>
                            <div class="buy-tickets">
                                <a href="#" class="btn thiago_san-btn">Buy Tikets</a>
                            </div>
                        </div>

                        <!-- Single Upcoming Shows -->
                        <div class="single-upcoming-shows d-flex align-items-center flex-wrap">
                            <div class="shows-date">
                                <h2>25 <span>July</span></h2>
                            </div>
                            <div class="shows-desc d-flex align-items-center">
                                <div class="shows-img">
                                    <img src="img/bg-img/s3.jpg" alt="">
                                </div>
                                <div class="shows-name">
                                    <h6>Sunflower festival</h6>
                                    <p>Paris, France</p>
                                </div>
                            </div>
                            <div class="shows-location">
                                <p>Sunflower Arena</p>
                            </div>
                            <div class="shows-time">
                                <p>20:30</p>
                            </div>
                            <div class="buy-tickets">
                                <a href="#" class="btn thiago_san-btn">Buy Tikets</a>
                            </div>
                        </div>

                        <!-- Single Upcoming Shows -->
                        <div class="single-upcoming-shows d-flex align-items-center flex-wrap">
                            <div class="shows-date">
                                <h2>30 <span>July</span></h2>
                            </div>
                            <div class="shows-desc d-flex align-items-center">
                                <div class="shows-img">
                                    <img src="img/bg-img/s4.jpg" alt="">
                                </div>
                                <div class="shows-name">
                                    <h6>Electric castle Festival</h6>
                                    <p>Cluj, Romania</p>
                                </div>
                            </div>
                            <div class="shows-location">
                                <p>At the Castle</p>
                            </div>
                            <div class="shows-time">
                                <p>20:30</p>
                            </div>
                            <div class="buy-tickets">
                                <a href="#" class="btn thiago_san-btn">Buy Tikets</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Upcoming Shows Area End ##### -->

    <!-- ##### Music Player Area Start ##### -->
    <div class="music-player-area section-padding-100 d-none">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="music-player-slides owl-carousel">

                        <!-- Single Music Player -->
                        <div class="single-music-player">
                            <img src="img/bg-img/mp1.jpg" alt="">

                            <div class="music-info d-flex justify-content-between">
                                <div class="music-text">
                                    <h5>Artist’s/Band Name</h5>
                                    <p>Love is all Around</p>
                                </div>
                                <div class="music-play-icon">
                                    <audio preload="auto" controls>
                                        <source src="audio/dummy-audio.mp3">
                                    </audio>
                                </div>
                            </div>
                        </div>

                        <!-- Single Music Player -->
                        <div class="single-music-player">
                            <img src="img/bg-img/mp2.jpg" alt="">

                            <div class="music-info d-flex justify-content-between">
                                <div class="music-text">
                                    <h5>Artist’s/Band Name</h5>
                                    <p>Love is all Around</p>
                                </div>
                                <div class="music-play-icon">
                                    <audio preload="auto" controls>
                                        <source src="audio/dummy-audio.mp3">
                                    </audio>
                                </div>
                            </div>
                        </div>

                        <!-- Single Music Player -->
                        <div class="single-music-player">
                            <img src="img/bg-img/mp3.jpg" alt="">

                            <div class="music-info d-flex justify-content-between">
                                <div class="music-text">
                                    <h5>Artist’s/Band Name</h5>
                                    <p>Love is all Around</p>
                                </div>
                                <div class="music-play-icon">
                                    <audio preload="auto" controls>
                                        <source src="audio/dummy-audio.mp3">
                                    </audio>
                                </div>
                            </div>
                        </div>

                        <!-- Single Music Player -->
                        <div class="single-music-player">
                            <img src="img/bg-img/mp4.jpg" alt="">

                            <div class="music-info d-flex justify-content-between">
                                <div class="music-text">
                                    <h5>Artist’s/Band Name</h5>
                                    <p>Love is all Around</p>
                                </div>
                                <div class="music-play-icon">
                                    <audio preload="auto" controls>
                                        <source src="audio/dummy-audio.mp3">
                                    </audio>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Music Player Area End ##### -->

    <!-- ##### CTA Area Start ##### -->
    <div class="thiago_san-cta-area section-padding-100 bg-img bg-overlay2 d-none"
        style="background-image: url(img/bg-img/bg-8.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cta-content">
                        <div class="cta-text">
                            <span>Unique Way to see a</span>
                            <h2>Music Concert</h2>
                            <h4>Search for the best music</h4>
                        </div>
                        <div class="cta-btn mt-30">
                            <a href="#" class="btn thiago_san-btn">elements</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### CTA Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area section-padding-100-0">
        <div class="container-fluid">
            <div class="row">

                <!-- Footer Widget Area -->
                <div class="col-12 col-md-4">
                    <div class="footer-widget-area mb-100">
                        <a href="#" style="font-size: 4rem; font-family: 'Allura', cursive;">Thiago San</a>
                        <p class="copywrite-text">
                            Copyright &copy;
                            <script>document.write(new Date().getFullYear());</script> All rights reserved | Made by
                            <a href="https://lamater.tech" target="_blank">La Mater Tech</a> and hosted with <a
                                href="https://hostme.space" target="_blank">Hostme.space</a>.
                        </p>
                    </div>
                </div>



                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-4 ">
                    <div class="footer-widget-area mb-100">
                        <div class="widget-title">
                            <h4>Social</h4>
                        </div>
                        <nav>
                            <ul class="footer-nav">


                                <li><a href="https://www.youtube.com/channel/UCZNP_vwHBgexy0KyHW-Wtbw"> YouTube</a></li>


                                <li><a href="https://www.instagram.com/thiago_san_k98/">Instagram</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-md-4">
                    <div class="footer-widget-area mb-100">
                        <div class="widget-title">
                            <h4>Subscribe</h4>
                        </div>
                        <form action="#" method="post" class="subscribe-form">
                            <input type="email" name="subscribe-email" id="subscribeemail"
                                placeholder="Enter your email">
                            <button type="submit">subscribe</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>

    <script>
        let album = [
            {
                title: "La Ronneda",
                link: "audio/la_ronneda.aac",
            },
            {
                title: "J'te cherche ft Thalia",
                link: "audio/la_ronneda.aac",
            },
            {
                title: "Passion",
                link: "audio/la_ronneda.aac",
            },
            {
                title: "Dis moi oui",
                link: "audio/la_ronneda.aac",
            },
            {
                title: "Célibataire",
                link: "audio/la_ronneda.aac",
            },
            {
                title: "Le charbon doit surpasser le don",
                link: "audio/la_ronneda.aac",
            },
            {
                title: "Dis moi tu rêves de quoi",
                link: "audio/la_ronneda.aac",
            },
            {
                title: "Level up",
                link: "audio/la_ronneda.aac",
            },
            {
                title: "Ne reviens plus",
                link: "audio/la_ronneda.aac",
            },
        ]

        album.forEach(morceau => {
            $(".music-playlist").append(`
                <div class="single-music">
                    <h6>${morceau.title}</h6>
                    <audio preload="auto" controls>
                        <source src="${morceau.link}">
                    </audio>
                </div>
            `)
        })
        $('audio').audioPlayer();

    </script>
</body>

</html>