<?php
    if(!(isset($_GET["password"]) && $_GET["password"] == "thiagosanprivatewebsite")){
        header("Location: index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">

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
    <meta property="og:image" content="https://thiagosan.com/img/bg.jpg" />
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

        .featured-album-area {
            overflow: auto;
        }

        .copywrite-text a {
            color: blueviolet !important;
            font-weight: 600 !important;

        }
        .icons .fa{
            color: white;
            margin-left: 1rem;
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
                    <nav class="classy-navbar dark justify-content-between" id="thiago_sanNav">

                        <!-- Nav brand -->
                        <a href="https://ishr.cm/thiagosan_vamos"  target="_blank" class="nav-brand">
                            Thiago San
                        </a>

                        <div class="icons" >
                                    <a href="https://www.instagram.com/thiagosank98/?hl=fr"><i class="fa fa-instagram"
                                            aria-hidden="true"></i></a>
                                    <a href="https://www.youtube.com/channel/UCZNP_vwHBgexy0KyHW-Wtbw/?sub_confirmation=1"><i
                                            class="fa fa-youtube" aria-hidden="true"></i></a>
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
                <div class="slide-img bg-img" style="background-image: url(img/bg.jpg);"></div>
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

      <!-- ##### About Us Area Start ##### -->
      <div class="about-us-area section-padding-100-0 bg-img bg-overlay" style="background-image: url('img/bg-2.jpg');"
        id="about">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h2>He talks about the project</h2>
                        <!-- <h6>Sed porta cursus enim, vitae maximus felis luctus iaculis.</h6> -->
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- About Thumbnail -->
                <div class="col-12 col-lg-6">
                    <div class="about-thumbnail mb-100" style="height: 80%">
                        <img src="img/thiago.jpg" style="object-fit: cover; height: 100%;" alt="Thiago San - Vamos">
                    </div>
                </div>
                <!-- About Content -->
                <div class="col-12 col-lg-6 " style="display: flex; align-items: center">
                    <div class="about-content mb-100">
                        <h4>Hi girls, Hi guys
</h4>
                        <p>



The main goal of VAMO$ is just to show that by working
hard and praying hard everyone can live his best life
and continue to create the future he wanna.
           <br/><br/>


Thank you for the precommands !

           <br/><br/>
God bless you all !  </p>
                        <!-- <img src="img/core-img/signature.png" alt=""> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### About Us Area End ##### -->


    <!-- ##### Featured Album Area Start ##### -->
    <div class="featured-album-area section-padding-100 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="featured-album-content d-flex flex-wrap">

                        <!-- Album Songs -->
                        <div class="album-songs h-100">

                            <!-- Album Info -->
                            <div class="album-info mb-50 d-flex flex-wrap align-items-center justify-content-between">
                                <div class="album-title">
                                    <h6>Album</h6>
                                    <h4>Vamos</h4>
                                </div>
                                <div class="album-buy-now">
                                    <a target="_blank" href="https://ishr.cm/thiagosan_vamos"
                                        class="btn thiago_san-btn">Precommand the album</a>
                                </div>
                            </div>

                            <div class="album-all-songs">

                                <!-- Music Playlist -->
                                <div class="music-playlist">
                                    <!-- Single Song -->
                                </div>
                            </div>


                        </div>


                        <!-- Album Thumbnail -->
                        <div class="album-thumbnail h-100 bg-img" style="background-image: url(img/pochette.jpg); background-size: contain">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Featured Album Area End ##### -->


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
                            <script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved <br />Made by
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


                                <li><a href="https://www.youtube.com/channel/UCZNP_vwHBgexy0KyHW-Wtbw/?sub_confirmation=1">
                                        YouTube</a></li>


                                <li><a href="https://www.instagram.com/thiagosank98/?hl=fr">Instagram</a></li>
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
                        <form class="subscribe-form" onsubmit="subscribe_to_newsletter(event)">
                            <input type="email" name="subscribe-email" id="email" placeholder="Enter your email">
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
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> -->
    <script>
        function subscribe_to_newsletter(e) {
            e.preventDefault()
            $.ajax({
                url: 'https://newsletters.lamater.tech/api/contacts', // La ressource ciblée
                type: 'POST', // Le type de la requête HTTP.
                dataType: 'json',
                contentType: "application/json",
                data: JSON.stringify({
                    id_form: "MdnGBTQubx",
                    tel: $("#email").val()
                }),
                success: function (code_html, statut) { // code_html contient le HTML renvoyé
                    $("#email").val("")
                    alert("Thank you for subscribing to our newsletter!")
                }
            })
        }
    </script>

    <script>
        let album = [
            {
                title: "Get Out Of My Life / Sors De Ma Vie",
                link: "audio/SDMV_EXTRACT.wav",
                id: "sors_de_ma_vie"
            },
            {
                title: "Looking For You / J'te cherche",
                link: "audio/JteChercheNewExtract.wav",
                id: "jte_cherche"
            },
        ]
        album.forEach(morceau => {
            $(".music-playlist").append(`
                <div class="single-music ${morceau.id}" >
                    <h6>${morceau.title}</h6>
                    <audio preload="auto" controls
                  >
                        <source src="${morceau.link}">
                    </audio>
                </div>
            `)
        })
        $('audio').audioPlayer();


    </script>
</body>

</html>
