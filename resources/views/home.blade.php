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
                    <a href="#home" class="nav-item nav-link active">Accueil</a>
                    <a href="#about" class="nav-item nav-link">Société</a>
                    <a href="#services" class="nav-item nav-link">Services</a>
                    <a href="#partners" class="nav-item nav-link">Partenaires</a>

                    <a href="/contact" class="nav-item nav-link">Contact</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Nav Bar End -->


    <!-- Carousel Start -->
    <div class="carousel">
        <div class="container-fluid">
            <div class="carousel-item">
                <div class="carousel-img">
                    <img src="{{ asset('mainassets2/img/carousel-bg.png') }}" alt="Image">
                </div>

                <div class="carousel-text ">
                    <div>
                        <img style="height: 12em" src="{{ asset('mainassets2/svg/ids-logo.svg') }}" alt="IDS">
                    </div>
                    <h1 style="text-transform: uppercase; font-weight: 900">Informatique</h1>
                    <p style="text-transform: uppercase ; letter-spacing: 0.55em;">
                        L'informatique Autrement
                    </p>
                    <div class="carousel-btn">
                        <a class="btn" href="/contact"><i class="fa fa-link"></i>Commancer votre CyberProjet</a>
                        {{--  <a class="btn" href="/contact"><i class="fa fa-link"></i>Nous Contacter</a --}}

                        {{-- <a class="btn btn-play" data-toggle="modal"
                            data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal"><i
                                class="fa fa-play"></i>Watch Video</a> --}}
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Carousel End -->




    <body>






        <!-- About Start -->
        <div id="about" class="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="about-img">
                            <div class="about-img-1">
                                <img src="{{ asset('mainassets2/img/about-2.jpg') }}" alt="Image">
                            </div>
                            <div class="about-img-2">
                                <img src="{{ asset('mainassets2/img/about-1.jpg') }}" alt="Image">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="section-header">
                            <h2>Qui Somme nous ?</h2>
                            <p>
                                En savoir plus sur nous</p>

                        </div>
                        <div class="about-text">
                            <p>
                                L’idée principale était de créer une nouvelle approche de l'infogérance en se
                                positionnant
                                non plus comme simple prestataire de service, mais bel et bien comme un partenaire
                                accompagnant les entreprises tout au long de leur développement.
                            </p>
                            <p>
                                Depuis notre création nous n'avons cessé d'évoluer et de nous agrandir tout en demeurant
                                toujours à taille humaine. Aujourd'hui nous totalisons près de 500 clients et c'est plus
                                de
                                200 projets de grande ampleur qui ont été menés à travers le globe.
                            </p>
                            <p>
                                Nous vous proposons des solutions sûres et efficaces capable de prendre en charge
                                n'importe
                                quel type de système d'information et de répondre à la totalité des problèmatiques
                                actuelles.

                            <p>
                                Toujours à la recherche de nouvelles demandes à satisfaire, nous tenons à être un
                                partenaire
                                de choix pour toute entreprise désireuse d'améliorer, d'optimiser et de sécuriser son
                                système d'information.

                            </p>


                            </p>
                            Nos propositions sont réalisées sur-mesure, en fonction de vos besoins réels. En plus
                            d'assurer une globalisation et une diminution des coûts, vous vous dotez d'un partenaire
                            capable d'intervenir rapidement, d'améliorer votre système et de vous conseiller sur son
                            évolution.
                            <p>


                            </p>



                            <!--    <a class="btn" href="">Learn More</a>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->



        <!-- Fact Start -->
        <div class="fact">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-6">
                        <div class="fact-item">
                            <img src="{{ asset('mainassets2/img/icon-4.png') }}" alt="Icon">
                            <h2>2000 Interventions par an</h2>
                            <div class="about-text">
                                <p>
                                    La volonté de l’excellence et des valeurs fortes pour concrétiser tous vos projets
                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="fact-item">
                            <img src="{{ asset('mainassets2/img/icon-1.png') }}" alt="Icon">
                            <h2>282 Projets menés à travers le monde </h2>
                            <div class="about-text">
                                <p>
                                    Une réactivité et une disponibilité affirmé pour des relations de confiances
                                    mutuelles
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="fact-item">
                            <img src="{{ asset('mainassets2/img/icon-8.png') }}" alt="Icon">
                            <h2>16 ans d’expertise </h2>
                            <div class="about-text">
                                <p>
                                    Un ADN identifié par le partage des connaissances et des savoir faire</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="fact-item">
                            <img src="{{ asset('mainassets2/img/icon-6.png') }}" alt="Icon">
                            <h2>98% clients Satifaites</h2>

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
                </div>
            </div>
        </div>
        <!-- Fact Start -->



        <!-- Service Start -->
        <div id="services" class="service">
            <div class="container">
                <div class="section-header">
                    <h2>Nos services</h2>
                    <p>Consultez Services</p>

                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <img src="{{ asset('mainassets2/svg/ids-diag.svg') }}" alt="Icon">
                            <h3>IDS DIAG </h3>
                            <h3>Evaluer votre infrastructure Informatique</h3>
                            <p>
                                Optimisez la stratégie informatique de votre entreprise avec notre étude complète et
                                personnalisée, assurant performance, sécurité et évolution, pour des recommandations
                                adaptées à vos besoins </p>
                            <a href="/s1">Savoir plus</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <img style='filter: brightness(0) saturate(100%) invert(73%) sepia(72%) saturate(963%) hue-rotate(356deg) brightness(106%) contrast(97%);'
                                src="{{ asset('mainassets2/svg/ids-cyber.svg') }}" alt="Icon">
                            <h3>IDS Cyber- travail</h3>
                            <h3> Le pack Télétravail opérationnel</h3>
                            <p>
                                Optimisez la sécurité et la performance du télétravail avec notre pack clé en main,
                                personnalisé pour répondre aux besoins croissants de votre entreprise.
                            </p>
                            <a href="/s2">Savoir plus</a>
                        </div>
                    </div>



                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <img src="{{ asset('mainassets2/svg/ids-rgpd.svg') }}" alt="Icon">
                            <h3>IDS RGPD
                            </h3>
                            <h3>
                                La Conformité clé en main </h3>
                            <p>

                                Garantissez la conformité RGPD en toute tranquillité avec les solutions sur mesure de
                                IDS. Simplifiez votre projet de protection des données pour votre société et vos
                                collaborateurs. Travaillons ensemble pour assurer la conformité en toute efficacité !
                            </p>
                            <a href="/s3">Savoir plus</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <img style='filter: brightness(0) saturate(100%) invert(56%) sepia(99%) saturate(699%) hue-rotate(346deg) brightness(99%) contrast(96%);'
                                src="{{ asset('mainassets2/svg/ids-serv.svg') }}" alt="Icon">
                            <h3>IDS Serv</h3>
                            <h3>Sécurisez votre Serveur</h3>
                            <p>
                                Dynamisez votre infrastructure sans investir dans un nouveau serveur. Optez pour la
                                réactivité, la mobilité, la performance et la sécurité en passant à un serveur
                                externalisé !
                            </p>
                            <a href="/s4">Savoir plus</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <img src="{{ asset('mainassets2/svg/ids-connect.svg') }}" alt="Icon">
                            <h3> IDS Connect </h3>
                            <h3> Travailler, apprendre, organiser, communiquer et créer !</h3>
                            <p>
                                Boostez votre communication et collaboration avec une solution sécurisée adaptée à vos
                                besoins. Protégez vos données, améliorez la cybersécurité, et permettez à vos équipes de
                                travailler efficacement, où qu'elles soient.

                            </p>
                            <a href="/s5">Savoir plus</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <img style='filter: brightness(0) saturate(100%) invert(32%) sepia(95%) saturate(429%) hue-rotate(179deg) brightness(96%) contrast(83%);'
                                src="{{ asset('mainassets2/svg/ids-supervision.svg') }}" alt="Icon">
                            <h3> IDS‘upervision </h3>
                            <h3> Infogérez votre Informatique </h3>
                            <p>

                                Optimisez votre parc informatique avec notre service complet : fonctionnement optimal,
                                utilisation simplifiée, efficacité accrue, le tout adapté à vos besoins pour une
                                tranquillité d'esprit totale. </p>
                            <a href="/s6">Savoir plus</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <img style='filter: brightness(0) saturate(100%) invert(47%) sepia(49%) saturate(5632%) hue-rotate(350deg) brightness(99%) contrast(91%);'
                                src="{{ asset('mainassets2/svg/ids-devices.svg') }}" alt="Icon">
                            <h3>IDS Devices</h3>
                            <h3>Equipez-vous selon vos besoins </h3>
                            <p>
                                Maximisez votre efficacité avec nos recommandations personnalisées et un matériel prêt à
                                l'emploi, configuré selon les normes de sécurité par nos experts. Travailler de manière
                                optimale, en toute simplicité. </p>
                            <a href="/s7">Savoir plus</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <img src="{{ asset('mainassets2/svg/ids-save.svg') }}" alt="Icon">
                            <h3>IDS Save</h3>
                            <h3>Protéger et Sauvegarder vos données</h3>
                            <p>

                                Assurez la pérennité de votre activité en optant pour la sauvegarde externalisée :
                                garantie de sécurité et de récupération de vos données vitales, où que vous soyez, quand
                                vous en avez besoin ! </p>
                            <a href="/s8">Savoir plus</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->

  <!-- 

        <div id="partners" class="partners">
            <div class="testimonial">
                <div class="section-header">
                    <p>Meet Our Advisors</p>
                    <h2>Our Professional Consulting Team</h2>
                </div>
                <div class="container">

                    <section class="customer-logos slider">
                        <div class="slide"><img src="{{ asset('mainassets2/img/partner/acronis.jpg') }}"></div>
                        <div class="slide"><img src="{{ asset('mainassets2/img/partner/barracuda.png') }}"></div>
                        <div class="slide"><img src="{{ asset('mainassets2/img/partner/eset.jpg') }}"></div>
                        <div class="slide"><img src="{{ asset('mainassets2/img/partner/hp.png') }}"></div>
                        <div class="slide"><img src="{{ asset('mainassets2/img/partner/inf.png') }}"></div>
                        <div class="slide"><img src="{{ asset('mainassets2/img/partner/ovh.jpg') }}"></div>
                        <div class="slide"><img src="{{ asset('mainassets2/img/partner/sage.jpg') }}"></div>
                        <div class="slide"><img src="{{ asset('mainassets2/img/partner/win.jpg') }}"></div>


                    </section>
                </div>
            </div>
        </div> -->







      <!-- Partners Start -->
      <div   id="partners" class="team">
        <div class="container">
            <div class="section-header">
                <h2>Nos partenaires</h2>
                <p>nos partenaires</p>

            </div>
            <div class="row">
                <div class="container">

                    <section class="customer-logos slider">
                        <div class="slide"><img src="{{ asset('mainassets2/img/partner/acronis.jpg') }}"></div>
                        <div class="slide"><img src="{{ asset('mainassets2/img/partner/barracuda.png') }}"></div>
                        <div class="slide"><img src="{{ asset('mainassets2/img/partner/eset.jpg') }}"></div>
                        <div class="slide"><img src="{{ asset('mainassets2/img/partner/hp.png') }}"></div>
                        <div class="slide"><img src="{{ asset('mainassets2/img/partner/inf.png') }}"></div>
                        <div class="slide"><img src="{{ asset('mainassets2/img/partner/ovh.jpg') }}"></div>
                        <div class="slide"><img src="{{ asset('mainassets2/img/partner/sage.jpg') }}"></div>
                        <div class="slide"><img src="{{ asset('mainassets2/img/partner/win.jpg') }}"></div>


                    </section>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


















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
                                    <a href="">partenaires</a>
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
    </body>

</html>
