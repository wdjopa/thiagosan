<?php
    if(!(isset($_GET["password"]) && $_GET["password"] == "thiagosanprivatewebsite")){
        header("Location: private.php?password=thiagosanprivatewebsite");
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
        .single-hero-slide{
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            height: 100vh;
            width: 100vw;
        }
    </style>
</head>

<body>
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
                <h2 class="big-text">Coming Soon</h2>
            </div>

        </div>
      
    </section>
    <!-- ##### Hero Area End ##### -->

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
