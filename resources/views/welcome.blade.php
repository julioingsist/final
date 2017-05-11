<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
 
<head>

    <meta http-equiv="content-type" content="text/html; charset=UTF-8">

    <title>PrestaMaxx</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    
    <!-- Bootstrap Css -->
    <link href="bootstrap-assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Style -->
    <link href="plugins/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="plugins/owl-carousel/owl.theme.css" rel="stylesheet">
    <link href="plugins/owl-carousel/owl.transitions.css" rel="stylesheet">
    <link href="plugins/Lightbox/dist/css/lightbox.css" rel="stylesheet">
    <link href="plugins/Icons/et-line-font/style.css" rel="stylesheet">
    <link href="plugins/animate.css/animate.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <!-- Icons Font -->
    <link rel="stylesheet" href="font-awesome.min.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
</head>

<body>
    <!-- Preloader
	============================================= -->
    <div class="preloader"><i class="fa fa-circle-o-notch fa-spin fa-2x"></i></div>
    <!-- Header
	============================================= -->
    <section class="main-header">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img src="img/logo/logo1.png" height="95" width ="95" class="img-responsive" alt="logo"></a>
                </div>
                <div class="collapse navbar-collapse text-center" id="bs-example-navbar-collapse-1">
                    <div class="col-md-8 col-xs-12 nav-wrap">
                        <ul class="nav navbar-nav">
                            <li><a href="#owl-hero" class="page-scroll">Inicio</a></li>
                            <li><a href="#services" class="page-scroll">Requisitos</a></li>
                        
                            <li><a href="#team" class="page-scroll">Equipo</a></li>
                            <li><a href="#testimonials" class="page-scroll">Testimonios</a></li>
                            <li><a href="#contact" class="page-scroll">Contactanos</a></li>
                        </ul>
                    </div>
                    <div class="social-media hidden-sm hidden-xs">
                        <ul class="nav navbar-nav">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <div id="owl-hero" class="owl-carousel owl-theme">
            <div class="item" style="background-image: url(img/sliders/Slide.jpg)">
                <div class="caption">
                    <h6>Préstamos / Fácil/ Rápido /Seguro </h6>
                    <h1>Somos <span>PrestaMaxx</span></h1>
                    <a class="btn btn-transparent" href="{{url('/login')}}">Inicia sesión</a>
                </div>
            </div>
            <div class="item" style="background-image: url(img/sliders/Slide2.jpg)">
                <div class="caption">
                    <h6>Préstamos / Fácil/ Rápido /Seguro </h6>
                    <h1>Somos <span>PrestaMaxx</span></h1>
                    <a class="btn btn-transparent" href="{{url('/login')}}">Inicia sesión</a>
                </div>
            </div>
            <div class="item" style="background-image: url(img/sliders/Slide3.jpg)">
                <div class="caption">
                    <h6>Préstamos / Fácil/ Rápido /Seguro </h6>
                    <h1>Somos <span>PrestaMaxx</span></h1>
                    <a class="btn btn-transparent" href="{{url('/login')}}">Inicia sesión</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Welcome
	============================================= -->
    <section id="welcome">
        <div class="container">
            <h2>Bienvenidos a <span>PrestaMaxx</span></h2>
            <hr class="sep">
            <p>Obten tu préstamo, fécil, rápido y seguro</p>
            <img class="img-responsive center-block wow fadeInUp" data-wow-delay=".3s" src="img/logo/logo1.png" alt="logo">
        </div>
    </section>

    <!-- Services
	============================================= -->
    <section id="services">
        <div class="container">
            <h2>Requisitos</h2>
            <hr class="light-sep">
            <p>Obten tu crédito con : </p>
            <div class="services-box">
                <div class="row wow fadeInUp" data-wow-delay=".3s">
                    <div class="col-md-4">
                        <div class="media-left"><span class="icon-flag"></span></div>
                        <div class="media-body">
                            <h3>Ser mexicano o mexicana</h3>
                            <p>Al ser una empresa 100 % mexicana creada para mexicanos como tú.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="media-left"><span class="icon-calendar"></span></div>
                        <div class="media-body">
                            <h3>Tener entre 18 y 55 años</h3>
                            <p>Tienes que contar con la mayoría de edad.</p>
                        </div>

                    </div>
                    <div class="col-md-4">
                        <div class="media-left"><span class="icon-picture"></span></div>
                        <div class="media-body">
                            <h3>Contar con INE vigente</h3>
                            <p>Es uno de los requisitos más importantes</p>
                        </div>

                    </div>

                    <div class="row wow fadeInUp" data-wow-delay=".6s">
                        <div class="col-md-4">
                            <div class="media-left"><span class="icon-ok"></span></div>
                            <div class="media-body">
                                <h3>Historial crediticio sano.</h3>
                                <p>Si no cuentas con él, nosotros te lo creamos.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- nuestro equipo
    ============================================= -->
    <section id="team">
        <div class="container">
            <h2> Nuestro equipo</h2>
            <hr class="sep">
            <p></p>
            <div class="row wow fadeInUp" data-wow-delay=".3s">
                <div class="col-md-4">
                    <div class="team">
                        <img class="img-responsive center-block" height="150" width="150" src="img/team/irma.jpg" alt="1" >
                        <h4>Irma Gomez</h4>
                        <p>Diseñadora</p>
                        <div class="team-social-icons">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team">
                        <img class="img-responsive center-block" src="img/team/cristian.jpg" alt="2">
                        <h4>Cristian Ibarra</h4>
                        <p>Desarrollador</p>
                        <div class="team-social-icons">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team">
                        <img class="img-responsive center-block" src="img/team/julio.jpg" alt="3">
                        <h4>Julio Castro</h4>
                        <p>Desarrollador</p>
                        <div class="team-social-icons">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                        </div>
                    </div>
                     <div class="col-md-4">
                    <div class="team">
                        <img class="img-responsive center-block" src="img/team/mario.jpg" alt="4">
                        <h4>Mario Miranda</h4>
                        <p>Tester</p>
                        <div class="team-social-icons">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonios
    ============================================= -->
    <section id="testimonials">
        <div class="container">
            <h2>Testimonios</h2>
            <hr class="light-sep">
            <p>lo que nuestros clientes dicen de nosotros</p>
            <div id="owl-testi" class="owl-carousel owl-theme">
                <div class="item">
                    <div class="quote">
                        <i class="fa fa-quote-left left fa-2x"></i>
                        <h5>Exelente servicio, rapido, efectivo.<i class="fa fa-quote-right right fa-2x"></i></h5>

                    </div>
                </div>
                <div class="item">
                    <div class="quote">
                        <i class="fa fa-quote-left left fa-2x"></i>
                        <h5>Estoy impresionado.<i class="fa fa-quote-right right fa-2x"></i></h5>

                    </div>
                </div>
                <div class="item">
                    <div class="quote">
                        <i class="fa fa-quote-left left fa-2x"></i>
                        <h5>El mejor servicio de prestamos que e provado.<i class="fa fa-quote-right right fa-2x"></i></h5>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contactanos
    ============================================= -->
    <section id="contact">
        <div class="container">
            <h2>Contactanos</h2>
            <hr class="sep">
            <p>quejas y mejoras</p>
            <div class="col-md-6 col-md-offset-3 wow fadeInUp" data-wow-delay=".3s">
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" id="Nombre" placeholder="Nombre">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="Correo" placeholder="Correo">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" rows="3" placeholder="Mensaje"></textarea>
                    </div>
                    <a href="{{url('/index')}}" class="btn-block">Enviar</a>
                </form>
            </div>
        </div>
    </section>
    
    <!-- Footer

    ============================================= -->
    <footer>
        <div class="container">
            <h1>PrestaMaxx</h1>
            <div class="social">
                <a href="#"><i class="fa fa-facebook fa-2x"></i></a>
                <a href="#"><i class="fa fa-twitter fa-2x"></i></a>
                <a href="#"><i class="fa fa-dribbble fa-2x"></i></a>
            </div>
            <h6>&copy; 2017 PrestaMaxx </h6>
        </div>
    </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap-assets/js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
    <!-- JS PLUGINS -->
    <script src="plugins/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="plugins/waypoints/jquery.waypoints.min.js"></script>
    <script src="plugins/countTo/jquery.countTo.js"></script>
    <script src="plugins/inview/jquery.inview.min.js"></script>
    <script src="plugins/Lightbox/dist/js/lightbox.min.js"></script>
    <script src="plugins/WOW/dist/wow.min.js"></script>
    <!-- GOOGLE MAP -->
    <script src="js/google-maps.js"></script>
</body>

</html>