<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Male_Fashion Template">
    <meta name="keywords" content="Male_Fashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IDS Informatique</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
        rel="stylesheet">


    <!-- CSS Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Css Styles -->
    <link href=" {{ asset('mainassets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <link rel="stylesheet" href=" {{ asset('mainassets/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href=" {{ asset(' mainassets/css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href=" {{ asset('mainassets/css/elegant-icons.css') }}" type="text/css">
    <link rel="stylesheet" href=" {{ asset('mainassets/css/magnific-popup.css') }}" type="text/css">
    <link rel="stylesheet" href=" {{ asset('mainassets/css/nice-select.css') }}" type="text/css">
    <link rel="stylesheet" href=" {{ asset('mainassets/css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href=" {{ asset('mainassets/css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href=" {{ asset('mainassets/css/style.css') }}" type="text/css">
    <link rel="stylesheet" href=" {{ asset('mainassets2/css/style.css') }}" type="text/css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>


    <link href="https://fonts.cdnfonts.com/css/broshk4blue" rel="stylesheet">

    <style type="text/css">
        #map {
            height: 400px;
        }



        .success {
            color: #155724;
            background-color: #d4edda;
            border-color: #c3e6cb;
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid transparent;
            border-radius: 4px;
        }

        .error {
            color: #721c24;
            background-color: #f8d7da;
            border-color: #f5c6cb;
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid transparent;
            border-radius: 4px;
        }
    </style>

</head>

<body>

















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
                        <a href="/societe" class="nav-item nav-link">Société</a>
                        <a href="/#services" class="nav-item nav-link">Services</a>
                        <a href="/#partners" class="nav-item nav-link">Partenaires</a>
                        <a href="/contact" class="nav-item nav-link active">Contact</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Nav Bar End -->
        <!-- Carousel Start -->
        <div class="carousel" style="height: 30vh; min-height: 300px">
            <div class="container-fluid">
                <div class="carousel-item" style="display:flex ; flex-direction: column; align-items: center">
                    <div class="carousel-img">
                        <img src="{{ asset('mainassets2/img/BG-Contact.png') }}" alt="Image">
                    </div>

                    <div class="carousel-text" style="padding: 5em 0em 0em 2em">

                        <h1 style="text-transform: uppercase; font-weight: 900; color :white;font-family: 'BroshK4Blue', sans-serif ;font-size:80px">Contact</h1>

                    </div>
                </div>

            </div>
        </div>
        <!-- Carousel End -->
    </header>
    <!-- Header Section End -->

    <!-- Carousel End -->








    <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
            <div class="section-header">
                <h2 style="color:black">Contactez-nous pour toutes questions</h2>
                <p>Contact</p>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="contact__text">

                        <!-- Map Begin -->
                        <div class="map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2629.6286950777453!2d2.0325270917560267!3d48.76988663299059!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e68125ba04a703%3A0x10ca1df4f0a0687d!2sMairie%20de%20Montigny-le-Bretonneux!5e0!3m2!1sfr!2stn!4v1707217879968!5m2!1sfr!2stn"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <!-- Map End -->

                    </div>
                </div>
                <div class="col-lg-6 col-md-6">





                    @if (session('message'))
                        <p class="{{ session('status') }}">{{ session('message') }}</p>
                    @endif

                    @if ($errors->has('g-recaptcha-response'))
                        <div>
                            <p class="alert alert-danger">{{ $errors->first('g-recaptcha-response') }}</p>
                        </div>
                    @endif

                    <div class="contact__form">

                        <form id="myForm" action="/contact/save" method="POST">
                            @csrf
                            <div class="row">

                                <div class="col-lg-6">
                                    <input type="text" required name="nom" placeholder="Nom*">
                                </div>
                                <!-- @error('nom')
    <div class="alert alert-danger">
                                                                {{ 'le nom est obligatoire ' }}
                                                            </div>
@enderror  !-->
                                <div class="col-lg-6">
                                    <input type="email" required name="email" placeholder="Email*">
                                </div>
                                <!-- @error('email')
    <div class="alert alert-danger">
                                                                {{ 'lemail est obligatoire ' }}
                                                            </div>
@enderror !-->
                                <div class="col-lg-6">
                                    <input type="text" required name="adresse" placeholder="Adresse*">
                                </div>

                                <div class="col-lg-6">
                                    <input type="tel" pattern="[0-9]{10}" required name="telephone"
                                        placeholder="Télépphone*">
                                </div>

                                <div class="col-lg-12" style="margin-bottom:30px">

                                    <select class="select2-multiple form-control" name="countries[]" id="countries"
                                        multiple="multiple" required>
                                        <option value="IDS-DIAG">IDS-DIAG</option>
                                        <option value="IDS-Cyber gestion">IDS-Cyber gestion</option>
                                        <option value="IDS Connect">IDS Connect</option>
                                        <option value="IDS cyber-travail">IDS cyber-travail</option>
                                        <option value="IDS Devices">IDS Devices</option>
                                        <option value="IDS RGPD">IDS RGPD</option>
                                        <option value="IDS Save">IDS Save</option>
                                        <option value="IDS Serve">IDS Serve</option>
                                    </select>
                                </div>





                                <div class="col-lg-12">
                                    <textarea placeholder="Message" required name="message"></textarea>
                                </div>


                                <!--@error('g-recaptcha-response')
    <div class="alert alert-danger">
                                                                {{ 'g-recaptcha-response ' }}
                                                            </div>
@enderror !-->


                                <div class="col-lg-12" style="margin-bottom:30px">


                                    <!--  Google reCaptcha v2 methode 1 with javascript   -->
                                    <div class="g-recaptcha" data-sitekey="6LeAN4ApAAAAAJqBQGX6cUt2QE8j9ery1_3qMEXk">


                                    </div>



                                    <!-- Google reCaptcha v2
                                    {!! htmlFormSnippet() !!} -->






                                </div>
                                <br />




                                <div class="col-lg-12">
                                    <button type="submit" onclick="submitForm()"
                                        style="color: black; background:#1eedeb">Envoyer</button>
                                </div>

                            </div>
                        </form>






                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Footer Start -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="footer-contact">
                                <h2>Our Head Office</h2>
                                <p><i class="fa fa-map-marker-alt"></i>14 place claudel, 78180
                                    Montigny-le-Bretonneux</p>
                                <p><i class="fa fa-phone-alt"></i>01 87 48 00 00 - 01 87 48 00 10</p>
                                <p><i class="fa fa-envelope"></i>ids@idsinfo.com</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="footer-link">
                                <h2>Quick Links</h2>
                                <a href="/">Acceuil</a>
                                <a href="/societe">Société</a>

                                <a href="/#partners">partenaires</a>
                                <a href="/contact">contact</a>
                                <a href="/services">Services</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="footer-newsletter">
                        <h2>Contact</h2>
                        <div class="footer-social">
                            <a href=""><i class="fab fa-facebook-f">
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




    <!-- Js Plugins -->

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        $(document).ready(function() {
            // Select2 Multiple
            $('.select2-multiple').select2({
                placeholder: "Services*",

                allowClear: true
            });

        });
    </script>
    <!--
<script>
    function submitForm() {
        var response = grecaptcha.getResponse();

        if (response.length === 0) {
            alert('ne pas oublier de cocher le Recaptcha.');
        } else {
            // Submit the form
            document.getElementById('myForm').submit();
        }
    }
</script>

-->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>


    <!-- JavaScript Libraries -->
    <!--<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>-->



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
