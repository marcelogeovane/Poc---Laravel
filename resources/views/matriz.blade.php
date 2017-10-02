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
   <link href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}"
   rel="stylesheet">

<!-- Theme CSS -->
<link href="{{ asset('assets/css/freelancer.css') }}"
   rel="stylesheet">

<!-- Custom Fonts -->
<link href="{{ asset('assets/plugins/font-awesome/css/font-awesome.min.css') }}"
   rel="stylesheet"
   type="text/css">
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

    .navbar-custom .navbar-nav li a {
        color: RGB(160, 82, 45);
    }

	.navbar-custom .navbar-nav li a:hover{
		color: RGB(160, 82, 45);
	}

	.navbar-custom .navbar-nav li.active a {
	  color: white;
	  background: RGB(205, 133, 63);
	}

	.navbar-custom .navbar-nav li.active a,
	.navbar-custom .navbar-nav li.active a:active,
	.navbar-custom .navbar-nav li.active a:focus,
	.navbar-custom .navbar-nav li.active a:hover{
		color:RGB(205, 133, 63);
		background: white;
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

    .btn-success {
    color: #fff;
    background-color: RGB(160, 82, 45);
    border-color: RGB(160, 82, 45);
    font-weight: 700;
}

.btn-primary{
	background-color: RGB(205, 133, 63);
	color: #fff;
	border-color: RGB(205, 133, 63);
	 font-size: 1.0em;
}

.btn-primary.active,
.btn-primary:active,
.btn-primary:focus,
.btn-primary:hover,
.open .dropdown-toggle.btn-primary{
color:#fff;
background-color:RGB(140, 85, 45);
border-color:RGB(140, 85, 45);
}
.btn-success.active,
.btn-success:active,
.btn-success:focus,
.btn-success:hover,
.open .dropdown-toggle.btn-success{
    color:#fff;
    background-color:RGB(140, 85, 45);
    border-color:RGB(140, 85, 45);}

	body{
		font-size:20px;
	}

    btn-primary:active:hover,
.btn-primary.active:hover,
.open > .dropdown-toggle.btn-primary:hover,
.btn-primary:active:focus,
.btn-primary.active:focus,
.open > .dropdown-toggle.btn-primary:focus,
.btn-primary:active.focus,
.btn-primary.active.focus,
.open > .dropdown-toggle.btn-primary.focus {
  color:RGB(160, 82, 45);
background-color: RGB(205, 133, 63);
border-color: RGB(205, 133, 63);
}

    #map {
        height: 400px;
        width: 100%;
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
            <a class="navbar-brand" href="{{url('/')}}">PTFMG</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li class="page-scroll active">
                    <div class="btn-group">
                        <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                            Prédios
                        </button>
                        <ul class="dropdown-menu">
                        <li class="active">
                                <a href="{{url('/estacao')}}">Antiga Estação Ferroviária</a>
                            </li>
                            <li class="active">
                                <a href="{{url('/matadouro')}}">Antigo Matadouro da Alvorada</a>
                            </li>
                            <li class="active">
                                <a href="{{url('/engenheiro')}}">Casa do Engenheiros</a>
                            </li>
                            <li class="active">
                                <a href="{{url('/vicentinos')}}">Casarão dos Vicentinos</a>
                            </li>
                            <li class="active">
                                <a href="{{url('/antoniovieira')}}">Edifício Antônio Vieira</a>
                            </li>
                            <li class="active">
                                <a href="{{url('/emart')}}">EMART</a>
                            </li>
                            <li class="active">
                                <a href="{{url('/rodarte')}}">Escola Estadual Joaquim Rodarte</a>
                            </li>
                            <li class="active">
                                <a href="{{url('/matriz')}}">Matriz São Vicente Férrer</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="page-scroll">
                    <button  class="btn btn-primary">
                    <a href="#history">História</a>
                        </button>
                </li>
                <li class="page-scroll">
                    <button  class="btn btn-primary"><a href="#contact">
                            Comentários
                            </a>
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
                        <h3 class="name">Matriz São Vicente Férrer</h3>
                        <hr class="star-light">
                        <img class="img-responsive" src="assets/img/matriz.png" alt="">
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
            <div class="col-lg-8">
        
           <table class="table hidden"> 
           		<td>
           			<tr>Nome: </tr>
           			<tr>Matriz São Vicente Férrer</tr>
           		</td>
           		<br>
           		<td>
           			<tr>Endereço: </tr>
           			<tr>Praça São Vicente Ferrer - Centro, Formiga - MG, 35570-000
           				<br>
						Latitude:-20.4643069
						<br>
						Longitude: -45.4263189
					</tr>
           		</td>
           </table>
            </div>
            <div class="col-lg-4"  >
                
                    <div id="map"></div>
                
                </div>

            
        </div>
    </section>

    <!-- About Section -->
    <section id="history" class="primary">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>História</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <p>Sua construção teve início em 1749, nesse período era a primeira capela de Formiga. Em
                    1765, a primeira fase de sua construção foi finalizada, mas em 1873 ela sofreu uma
                    ampliação, construindo o altar-mor onde está a imagem de São Vicente Férrer. É
                    importante ressaltar que ela foi construída no período de transição entre o Barroco e o
                    Rococó, por isso possui traços destes dois estilos de construção.</p>
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
                    <p>Antigamente só existia vegetação perto da igreja, a praça da Matriz foi construída em
                    1958. Ao redor da igreja existem atualmente alguns casarões feitos no mesmo estilo de
                    construção da época</p>
                </div>
                <div class="col-lg-4">
                <p>Tanto o exterior e o interior do edifício aparentam ser bem conservados, porém, o
                segundo andar não está no mesmo estado. Existem muitos cupins em muitas das mobílias
                de madeira, e o piso está um pouco rachado, de forma que um peso muito grande poderia
                quebra-lo.</p>
               </div>
            </div>
        </div>
    </section>
    <!-- Contact Section -->
    <section id="contact">
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

<script>
       function initMap() {
        
                var map = new google.maps.Map(document.getElementById('map'), {
                  zoom: 10,
                  center: {lat: -20.4643069, lng: -45.4263189}
                });
        
                // Create an array of alphabetical characters used to label the markers.
                var labels = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        
                // Add some markers to the map.
                // Note: The code uses the JavaScript Array.prototype.map() method to
                // create an array of markers based on a given "locations" array.
                // The map() method here has nothing to do with the Google Maps API.
                var markers = locations.map(function(location, i) {
                  return new google.maps.Marker({
                    position: location,
                    label: labels[i % labels.length]
                  });
                });
        
                // Add a marker clusterer to manage the markers.
                var markerCluster = new MarkerClusterer(map, markers,
                    {imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});
              }
              var locations = [
                {lat: -20.4729402, lng: -45.4292153},
                {lat: -20.460393,  lng: -45.431176},
                {lat: -20.4641161, lng: -45.4266165},
                {lat: -20.4643069, lng: -45.4263189},
                {lat: -20.461882, lng: -45.431169},
                {lat: -20.460673, lng: -45.432049},
                {lat: -20.461844, lng: -45.425339},
                {lat: -20.467250, lng: -45.427260}
              ]
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBC-zlbgsbJtjrbMKAS-IywFE0WikfWPY0&callback=initMap">
    </script>

<script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
    </script>

</body>

</html>
