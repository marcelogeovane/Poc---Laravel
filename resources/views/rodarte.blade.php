<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Freelancer - Start Bootstrap Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/freelancer.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
        
      #portfolio .portfolio-item .portfolio-link .caption {
    background: rgba(160,82,45,.9) !important;}

    #mainNav {
        background-color: RGB(205, 133, 63) ;
    }

    #mainNav .page-scroll {

    }

    header{
        background: RGB(245, 245, 245);
        color: RGB(0, 0, 0);
    }

    hr .star-light{
        background-color:RGB(245, 245, 245);
        color:#000000; 
    }

    section #about {
        background: RGB(160, 82, 45) ; 

    }
    hr .star-light:after{
        background: RGB(245, 245, 245) ;
        color:#FFF;
    }

  .navbar-custom .navbar-nav li a:hover{
    color: RGB(160, 82, 45);
}

hr.star-light:after{
    background-color:RGB(245, 245, 245);
    color:#000;
}

section.success{
    background:RGB(205, 133, 63);
    color:#fff
}

section.primary{
    background-color: RGB(245, 245, 245);
    color:#000;
}

.navbar-custom .navbar-nav li.active a,.navbar-custom .navbar-nav li.active a:active,.navbar-custom .navbar-nav li.active a:focus,.navbar-custom .navbar-nav li.active a:hover{color:#fff;background:RGB(160, 82, 45);}


footer .footer-above{
    background-color: RGB(205, 133, 63);
}
footer .footer-below{
    background-color: RGB(195, 133, 63);
}


a, a.active, a:active, a:focus, a:hover {
    color: RGB(205, 133, 63);
}

.btn-outline.active,.btn-outline:active,.btn-outline:focus,.btn-outline:hover{
    color: RGB(205, 133, 63);
    background:#fff;
    border:2px 
    solid #fff}

    .btn-success {
    color: #fff;
    background-color: RGB(160, 82, 45);
    border-color: RGB(160, 82, 45);
    font-weight: 700;
}

.btn-primary.active,.btn-primary:active,.btn-primary:focus,.btn-primary:hover,.open .dropdown-toggle.btn-primary{color:#fff;background-color:RGB(140, 85, 45);
border-color:RGB(140, 85, 45);
}
.btn-success.active,.btn-success:active,.btn-success:focus,.btn-success:hover,.open .dropdown-toggle.btn-success{color:#fff;background-color:RGB(140, 85, 45);border-color:RGB(140, 85, 45);}

    body{
        font-size:20px;
    }

    </style>

</head>

<body id="page-top" class="index">
<div id="skipnav"><a href="#maincontent">Skip to main content</a></div>

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#page-top">PTFMG</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#predios">Prédios</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#about">Sobre</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contact">Comentários</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container" id="maincontent" tabindex="-1">
            <div class="row">
                <div class="col-lg-12">
                    
                    <div class="intro-text">
                        <h3 class="name">Escola Estadual Professor Joaquim Rodarte</h3>
                        <hr class="star-light">
                        <img class="img-responsive" src="img/predios/rodarte.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Portfolio Grid Section -->
    <section id="dados" class="success">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Dados</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
           <table class="table hidden"> 
           		<td>
           			<tr>Nome: </tr>
           			<tr>Escola Estadual Professor Joaquim Rodarte</tr>
           		</td>
           		<br>
           		<td>
           			<tr>Endereço: </tr>
           			<tr>Rua Bernardes de Faria, nº 60, Centro – Formiga- MG, 35570-000
           				<br>
						Latitude:20.461810
						<br>
						Longitude: 45.4324615
					</tr>
           		</td>
           </table>
            	
            </div>

            
        </div>
    </section>

    <!-- About Section -->
    <section class="primary" id="history">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>História</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <p>No início, a escola funciona somente para séries iniciais, conhecidas hoje como
fundamental I. As atividades se expandiram e passaram a ser até o fundamental II,
isso foi até 1995. Depois desse período, a escola passou a ter o ensino médio
também. Antigamente o local era denominado de “grupo escolar”, mas por conta de
ter atendido o fundamental II e o ensino médio, ela passou a ser uma escola.</p>
                </div>
            </div>
        </div>
    </section>

<section id="situaçao" class="success">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Situação e Exterior</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2">
                    <p>Apesar de ser um espaço físico pequeno, a direção da escola tenta preservar ao
máximo o local com plantas, flores e coisas verdes para embelezar o ambiente no
sentido estético e também biológico. Por se localizar no centro da cidade, ao redor da
escola há lojas, sorveterias e uma igreja bem à frente. Próximo ao local há muito
movimento, pois além da circulação dos alunos em si, há também a circulação das
pessoas da cidade. A escola se localiza em um rua principal do centro, que é passagem
para praticamente tudo em Formiga.</p>
                </div>
                <div class="col-lg-4">
                <p>O local sofre manutenção de tempo em tempo, para que suas características visuais possam
permanecer intactas. Apesar da idade (72 anos), a escola é bastante conservada, tendo em
vista o número de pessoas que passaram e que ainda passam por lá até hoje. Além da
conservação estrutural do edifício, também pudemos observar na limpeza. A direção da
escolatrata sempre de assear o lugar e ajudar na conservação como pode. Nós observamos
isso quando vimos uma tela de arame colocada sobre o teto da cantina pelos funcionários,
para evitar a sujeira dos pombos e de outros bichos.</p>
               </div>
            </div>
        </div>
    </section>
    <!-- Contact Section -->
    <section class="primary" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Comente</h2>
                    <i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i><h5>EM MANUTENÇÃO</h5>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                  
                      
            </div>
        </div>
    </section>

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
                                <a href="#" class="btn-social btn-outline"><span class="sr-only">Facebook</span><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><span class="sr-only">Google Plus</span><i class="fa fa-fw fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><span class="sr-only">Twitter</span><i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><span class="sr-only">Linked In</span><i class="fa fa-fw fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><span class="sr-only">Dribble</span><i class="fa fa-fw fa-dribbble"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>About Freelancer</h3>
                        <p>Freelance is a free to use, open source Bootstrap theme created by <a href="http://startbootstrap.com">Start Bootstrap</a>.</p>
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
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    


    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="../js/freelancer.min.js"></script>

</body>

</html>
