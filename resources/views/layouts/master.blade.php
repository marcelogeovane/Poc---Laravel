<html>

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
    color: white;
    background-color: RGB(160, 82, 45);
    border-color: RGB(160, 82, 45);
    font-weight: 700;
}

.btn-primary{
	color: white;
    background-color: RGB(205, 133, 63);
	border-color: RGB(205, 133, 63);
	 font-size: 1.0em;
}

.btn-primary.active,
.btn-primary:active,
.btn-primary:focus,
.btn-primary:hover,
.open .dropdown-toggle.btn-primary{
color:white;
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

.btn-primary:active:hover,
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

@include('layouts.nav')

<section id="situaçao" class="primary">
    <div class="container">

        @yield('content')

    </div> 
</section>

@include('layouts.coment')

@include('posts.show')

@include('layouts.footer')


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