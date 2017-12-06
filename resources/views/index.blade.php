<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible"
          content="IE=edge">
    <meta name="viewport"
          content="width=device-width, initial-scale=1">
    <meta name="description"
          content="">
    <meta name="author"
          content="">

    <title>Freelancer - Start Bootstrap Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}"
          rel="stylesheet">

    <!-- Theme CSS -->
    <link href="{{ asset('assets/css/freelancer.css') }}"
          rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ asset('assets/plugins/font-awesome/css/font-awesome.min.css') }}"
          rel="stylesheet"
          type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700"
          rel="stylesheet"
          type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic"
          rel="stylesheet"
          type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
    
        #portfolio .portfolio-item .portfolio-link .caption {
            background: rgba(160, 82, 45, .9) !important;
        }

        #mainNav {
            background-color: RGB(205, 133, 63);
        }

        #mainNav .page-scroll {

        }

        header {
            background: RGB(160, 82, 45);
        }

        section #about {
            background: RGB(160, 82, 45);

        }

        section #portfolio {
            background: rgb(245,245,245);
        }

        hr.star-primary:after {
            background-color: RGB(160, 82, 45);
            color: white;
        }

        .navbar-custom .navbar-nav li a:hover {
            color: RGB(160, 82, 45);
        }

        section.success {
            background: RGB(160, 82, 45);
            color: #fff
        }

        .navbar-custom .navbar-nav li.active a, .navbar-custom .navbar-nav li.active a:active, .navbar-custom .navbar-nav li.active a:focus, .navbar-custom .navbar-nav li.active a:hover {
            color: #fff;
            background: RGB(160, 82, 45);
        }

        footer .footer-above {
            background-color: RGB(205, 133, 63);
        }

        footer .footer-below {
            background-color: RGB(195, 133, 63);
        }

        a, a.active, a:active, a:focus, a:hover {
            color: RGB(205, 133, 63);
        }

        .btn-outline.active, .btn-outline:active, .btn-outline:focus, .btn-outline:hover {
            color: RGB(205, 133, 63);
            background: #fff;
            border: 2px solid #fff
        }

        .btn-success {
            color: #fff;
            background-color: RGB(160, 82, 45);
            border-color: RGB(160, 82, 45);
            font-weight: 700;
        }

        .btn-primary.active, .btn-primary:active, .btn-primary:focus, .btn-primary:hover, .open .dropdown-toggle.btn-primary {
            color: #fff;
            background-color: RGB(140, 85, 45);
            border-color: RGB(140, 85, 45);
        }

        .btn-success.active, .btn-success:active, .btn-success:focus, .btn-success:hover, .open .dropdown-toggle.btn-success {
            color: #fff;
            background-color: RGB(140, 85, 45);
            border-color: RGB(140, 85, 45);
        }

        body {
            font-size: 20px;
        }

        hr.star-light{
            background-color:white;
            color: white;
        }        

        

    </style>

</head>

<body id="page-top"
      class="index">


<!-- Navigation -->
<nav id="mainNav"
     class="navbar navbar-default navbar-fixed-top navbar-custom">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button"
                    class="navbar-toggle"
                    data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand"
               href="#page-top">PTFMG</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse"
             id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li class="page-scroll">
                    <a href="#portfolio">Prédios</a>
                </li>
                <li class="page-scroll">
                    <a href="#about">Sobre</a>
                </li>
                <li class="page-scroll">
                    <a href="#contact">Contate-nos</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

<!-- Header -->
<header>
    <div class="container"
         id="maincontent"
         tabindex="-1">
        <div class="row">
            <div class="col-lg-12">
                <img class="img-responsive"
                     src="{{ asset('assets/img/profile.png') }}"
                     alt="">
                <div class="intro-text">
                    <h3 class="name">Patrimônio Tombado de Formiga - MG</h3>
                    <hr class="star-primary">
                    <span class="skills">Site desenvolvido para exposição dos prédios tombados de Formiga Minas Gerais.</span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Portfolio Grid Section -->
<section id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="name">Prédios</h2>
                <hr class="star-light">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 portfolio-item">
                <a href="{{ url('/rodarte') }}"
                   class="portfolio-link">
                    <div class="caption">
                        <div class="caption-content">
                            Escola Estadual Professor Joaquim Rodarte
                        </div>
                    </div>
                    <img src="{{ asset('assets/img/predios/rodarte.png') }}"
                         class="img-responsive"
                         alt="Cabin">
                </a>
            </div>
            <div class="col-sm-4 portfolio-item">
                <a href="{{ url('/matriz') }}"
                   class="portfolio-link">
                    <div class="caption">
                        <div class="caption-content">
                            Matriz São Vicente Férrer
                        </div>
                    </div>
                    <img src="{{ asset('assets/img/predios/matriz.png') }}"
                         class="img-responsive"
                         alt="Slice of cake">
                </a>
            </div>
            <div class="col-sm-4 portfolio-item">
                <a href="{{ url('/vicentinos') }}"
                   class="portfolio-link">
                    <div class="caption">
                        <div class="caption-content">
                            Casarão dos Vicentinos
                        </div>
                    </div>
                    <img src="{{ asset('assets/img/predios/vicentinos.png') }}"
                         class="img-responsive"
                         alt="Circus tent">
                </a>
            </div>
            <div class="col-sm-4 portfolio-item">
                <a href="{{ url('/antoniovieira') }}"
                   class="portfolio-link">
                    <div class="caption">
                        <div class="caption-content">
                            Edifício Antônio Vieira
                        </div>
                    </div>
                    <img src="{{ asset('assets/img/predios/antoniovieira.png') }}"
                         class="img-responsive"
                         alt="Game controller">
                </a>
            </div>
            <div class="col-sm-4 portfolio-item">
                <a href="{{ url('/engenheiro') }}"
                   class="portfolio-link fundo">
                    <div class="caption">
                        <div class="caption-content">
                            Casa do Engenheiro
                        </div>
                    </div>
                    <img src="{{ asset('assets/img/predios/casarao.png') }}"
                         class="img-responsive"
                         alt="Safe">
                </a>
            </div>
            <div class="col-sm-4 portfolio-item">
                <a href="{{ url('/emart') }}"
                   class="portfolio-link">
                    <div class="caption">
                        <div class="caption-content">
                            Escola Municipal da Arte da Dança
                        </div>
                    </div>
                    <img src="{{ asset('assets/img/predios/emart.png') }}"
                         class="img-responsive"
                         alt="Submarine">
                </a>
            </div>
            <div class="col-sm-4 portfolio-item">
                <a href="{{ url('/estacao') }}"
                   class="portfolio-link">
                    <div class="caption">
                        <div class="caption-content">
                            Antiga Estação Ferroviária
                        </div>
                    </div>
                    <img src="{{ asset('assets/img/predios/estacao.png') }}"
                         class="img-responsive"
                         alt="Submarine">
                </a>
            </div>
            <div class="col-sm-4 portfolio-item">
                <a href="{{ url('/matadouro') }}"
                   class="portfolio-link">
                    <div class="caption">
                        <div class="caption-content">
                            Antigo Matadouro do Alvorada
                        </div>
                    </div>
                    <img src="{{ asset('assets/img/predios/matadouro.png') }}"
                         class="img-responsive"
                         alt="Submarine">
                </a>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="success"
         id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>About</h2>
                <hr class="star-primary">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-lg-offset-2">
                <p>Freelancer is a free bootstrap theme created by Start Bootstrap. The download includes the complete
                   source files including HTML, CSS, and JavaScript as well as optional LESS stylesheets for easy
                   customization.</p>
            </div>
            <div class="col-lg-4">
                <p>Whether you're a student looking to showcase your work, a professional looking to attract clients, or
                   a graphic artist looking to share your projects, this template is the perfect starting point!</p>
            </div>
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <a href="#"
                   class="btn btn-lg btn-outline">
                    <i class="fa fa-download"></i> Download Theme
                </a>
            </div>
        </div>
    </div>
</section>

@include('layouts.contato')

<!-- Footer -->
<footer class="text-center">
    <div class="footer-above">
        <div class="container">
            <div class="row">
                <div class="footer-col col-md-4">
                    <h3>Location</h3>
                    <p>3481 Melrose Place
                        <br>Beverly Hills, CA 90210</p>
                </div>
                <div class="footer-col col-md-4">
                    <h3>Around the Web</h3>
                    <ul class="list-inline">
                        <li>
                            <a href="#"
                               class="btn-social btn-outline"><span class="sr-only">Facebook</span><i class="fa fa-fw fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#"
                               class="btn-social btn-outline"><span class="sr-only">Google Plus</span><i class="fa fa-fw fa-google-plus"></i></a>
                        </li>
                        <li>
                            <a href="#"
                               class="btn-social btn-outline"><span class="sr-only">Twitter</span><i class="fa fa-fw fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"
                               class="btn-social btn-outline"><span class="sr-only">Linked In</span><i class="fa fa-fw fa-linkedin"></i></a>
                        </li>
                        <li>
                            <a href="#"
                               class="btn-social btn-outline"><span class="sr-only">Dribble</span><i class="fa fa-fw fa-dribbble"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="footer-col col-md-4">
                    <h3>About Freelancer</h3>
                    <p>Freelance is a free to use, open source Bootstrap theme created by
                        <a href="http://startbootstrap.com">Start Bootstrap</a>.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-below">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    Copyright &copy; Your Website 2016
                </div>
            </div>
            <div class="row">
                    <a align="right" href="{{url('/login')}}">Entre como administrador</a>
                </div>
        </div>
    </div>
</footer>

<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
<div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
    <a class="btn btn-primary"
       href="#page-top">
        <i class="fa fa-chevron-up"></i>
    </a>
</div>

<!-- jQuery -->
<script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

<!-- Plugin JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

<!-- Contact Form JavaScript -->
<script src="{{ asset('assets/js/jqBootstrapValidation.js') }}"></script>
<script src="{{ asset('assets/js/contact_me.js') }}"></script>

<!-- Theme JavaScript -->
<script src="{{ asset('assets/js/freelancer.min.js') }}"></script>

</body>

</html>
