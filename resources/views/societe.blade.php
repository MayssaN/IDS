<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>site</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Consulting Website Template Free Download" name="keywords">
    <meta content="Consulting Website Template Free Download" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Oswald:wght@200;300;400&display=swap"
        rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('mainassets2/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('mainassets2/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('mainassets2/css/infographic.css') }}" rel="stylesheet">

    <!-- Template Stylesheet  -->
    <link href="{{ asset('mainassets2/css/style.css') }}" rel="stylesheet">
</head>

<body>

    @include('cookie-consent::index')




    <!-- Top Bar Start -->
    <div id="home" class="top-bar d-none d-md-block">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="top-bar-left">
                        <div class="text">
                            <i class="far fa-clock"></i>
                            <h2>Lundi-Vendredi</h2>
                            <p>9h-12h30 / 14:00-19h:00</p>
                        </div>
                        <div class="text">
                            <i class="fa fa-phone-alt"></i>
                            <h2>01 87 48 00 00</h2>
                            <p>Service client IDS</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Top Bar End -->

    <!-- Header Section Begin -->
    <header class="header">
        <!-- Nav Bar Start -->
        <div class="navbar navbar-expand-lg bg-dark navbar-dark">
            <div class="container-fluid">
                <a href="/" class="navbar-brand">
                    <img style="height: 12em" src="{{ asset('mainassets2/svg/ids-logo-globe.svg') }}" alt="IDS">
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div id="navbar-nav" class="navbar-nav ml-auto">
                        <a href="/" class="nav-item nav-link">Accueil</a>
                        <a href="/societe" class="nav-item nav-link active">Société</a>
                        <a href="/#services" class="nav-item nav-link">Services</a>
                        <a href="/#partners" class="nav-item nav-link">Partenaires</a>
                        <a href="/contact" class="nav-item nav-link">Contact</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Nav Bar End -->
        <!-- Carousel Start -->
        <div class="carousel" style="height: 30vh; min-height: 300px">
            <div class="container-fluid">
                <div class="carousel-item" style="display:flex ; flex-direction: column; align-items:center">
                    <div class="carousel-img">
                        <img src="{{ asset('mainassets2/img/BG-Company.png') }}" alt="Image">
                    </div>

                    <div class="carousel-text" style="padding: 5em 0em 0em 2em">

                        <h1 style="text-transform: uppercase; font-weight: 900; color :white">Societe</h1>

                    </div>
                </div>

            </div>
        </div>
        <!-- Carousel End -->
    </header>
    <!-- Header Section End -->

    <!-- Carousel End -->











    <!-- Feature Start -->
    <div class="feature">
        <div class="container">
              <img class="globe-1" src="{{ asset('mainassets2/img/globe-sm.png') }}" alt="Image">
                            <img class="globe-2" src="{{ asset('mainassets2/img/globe-sm.png') }}" alt="Image">
                            <img class="globe-3" src="{{ asset('mainassets2/img/globe-sm.png') }}" alt="Image">
                            <img class="globe-4" src="{{ asset('mainassets2/img/globe-sm.png') }}" alt="Image">
            <div class="row align-items-end">
                <div class="col-md-6">
                    <div class="feature-img">
                        <img src="{{ asset('mainassets2/img/bg.png') }}" alt="Image">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="section-header">
                        <p>
                        <h2 style="color: black" >Notre histoire?</h2>
                        <p style="color:white"> Our Feature</p>
                    </div>
                    <p style=" font-size: 16px;  color : black ;  text-align: justify" >
                        Quelle idée merveilleuse en 2008 de vouloir créer IDS INFORMATIQUE !
                        S’il y a des projets dans une vie qui vous rendent plus forts, qui vous apportent éclat,
                        épanouissement et connaissances ; celui de fonder une Entreprise en fait partie.
                        Lorsque Monsieur HADDAD décide de se lancer dans ce fabuleux projet, motivé, travailleur et
                        désireux de vouloir apporter ses services et son savoir-faire ; loin de lui l’idée de savoir au
                        combien ses différentes rencontres et expériences lui auront apporté…et ne cesseront de lui
                        apporter encore ! </p>

                </div>






            </div>


            <br>
            <div>

                  <p style="font-size: 16px;  color : black;  text-align: justify">
                Toujours soutenus et dans une constante envie de vouloir aller plus loin, fiers de la confiance que nos
                partenaires nous portent, nous totalisons à ce jour près de 700 clients en ayant eu le privilège d’avoir
                mené à leurs côtés, plus de 280 projets de grande ampleur à travers le globe, et nous continuons jour
                après jour à en réaliser de nouveaux.</p>
              <p style="font-size: 16px;  color : black;  text-align: justify">
                Aujourd’hui, forts de notre expérience et entourés de collaborateurs performants, nous formons une
                équipe dynamique toujours en quête de nouveaux projets et de nouvelles rencontres.
                Parce que « l’Humain » est un des piliers de notre philosophie de travail, nous souhaitons avant tout
                comprendre les problématiques de chacun afin de travailler ensemble pour améliorer, développer
                l’existant et nourrir le souhait commun d’évoluer ensemble.</p>
                <p style="font-size: 16px;  color : black;  text-align: justify">
                    Nous souhaitons accompagner nos partenaires tout au long de leur développement, évoluer conjointement
                dans la Bienveillance et le Respect, avec ce lien précieux qu’est la confiance.
                Cette formidable expérience n’aurait jamais vu le jour sans vous, chers partenaires, alors Merci.
                Si vous aussi vous souhaitez faire partie de cette formidable aventure, écrivons la suite de notre
                histoire ensemble !</p>

            </div>

            <!--<button class="btnsocite" type="button">Click me</button>-->
            <div  class="btnsocite">

                        <a class="btn" href="/contact">Començons ensemble</a>

            </div>


        </div>
    </div>
    <!-- Feature End -->


 <!-- Fact Start -->
 <div class="factSociete">
    <div class="container">
        <div class="row">



            <div class="col-lg-3 col-md-6">

                <div class="fact-item">
                    <h2 style="font-size:25px">98%</h2>
                    <h2 > clients Satifaites</h2>

                    <div class="about-text">
                        <p>
                            Une équipe attentive, humaine
                            et professionelle.
                            <br />
                            votre satisfaction est notre prioriete
                        </p>

                    </div>

                </div>

        </div>

            <div class="col-lg-3 col-md-6">
                <div class="fact-item">
                    <h2 style="font-size:25px">16 ans</h2>
                    <h2  > d’expertise </h2>
                    <div class="about-text">
                        <p>
                            Un ADN identifié par le partage des connaissances et des savoir faire</p>

                    </div>
                </div>
            </div>
                    <div class="col-lg-3 col-md-6">
                <div class="fact-item">
                    <h2 style="font-size:25px">280</h2>
                    <h2 >Projets menés à travers le monde </h2>
                    <div class="about-text">
                        <p>

                                  La volonté de l’excellence et des valeurs fortes pour concrétiser tous vos projets
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="fact-item">
                    <h2 style="font-size:25px">2000</h2>
                    <h2  > Interventions par an</h2>
                    <div class="about-text">
                        <p>
                                            Une réactivité et une disponibilité affirmé pour des relations de confiances mutuelles
                        </p>

                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
<!-- Fact Start -->



    <div id="aide" class="aide">

        <div class="container">
            <p style="color:white ;   text-align: center; font-size: 20px ; font-family:arimo">
                Écrivez-nous, nous sommes à votre écoute pour répondre à toutes vos questions!
            </p>
            <p
                style="text-transform: uppercase; font-weight: 900; color:white ;    text-align: center; font-family:brosh ; font-size:90px">
                besoin d’aide ?
            </p>
            <div class="besoin">


                <a class="btn2" href="/contact">Commençons ensemble</a>
           <!-- <button class="btn2" type="button">Contactez-nous</button>-->
            </div>
        </div>




    </div>
















    <!-- Footer Start -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="footer-contact">
                                <h2>Mieux nous connaitre</h2>
                                <p><i class="fa fa-map-marker-alt"></i>14 place claudel, 78180
                                    Montigny-le-Bretonneux</p>
                                <p><i class="fa fa-phone-alt"></i>01 87 48 00 00 - 01 87 48 00 10</p>
                                <p><i class="fa fa-envelope"></i>ids@idsinfo.com</p>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="footer-link">
                                <h2>Accées rapide</h2>
                                <a href="">Acceuil</a>
                                <a href="">Société</a>
                                <a href="/#partners">partenaires</a>
                                <a href="">contact</a>
                                <a href="">Services</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="footer-newsletter">
                        <h2>Restons en Contact !</h2>
                        <div class="footer-social">
                            <a href="https://www.facebook.com/people/IDS-Informatique/100066943629476/"><i
                                    class="fab fa-facebook-f">
                                    <p> Facebook</p>
                                </i></a>
                            <a href=""><i class="fab fa-linkedin-in">
                                    <p> Linkedin</p>
                                </i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container copyright">
            <div class="row">
                <div class="col-md-6">
                    <p>&copy; <a href="#">2015 - 2024 par IDS Informatique</a></p>
                </div>

            </div>
        </div>
    </div>
    <!-- Footer End -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>

    <!-- partner   -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>


    <!-- template   -->

    <script src="{{ asset('mainassets2/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('mainassets2/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('mainassets2/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('mainassets2/lib/counterup/counterup.min.js') }}"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('mainassets2/js/menu.js') }}"></script>
    <script src="{{ asset('mainassets2/js/main.js') }}"></script>
    <script src="{{ asset('mainassets2/js/partner.js') }}"></script>
    <script src="{{ asset('mainassets2/js/infographic.js') }}"></script>
</body>

</html>
