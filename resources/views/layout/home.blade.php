<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <!-- The above 3 meta tags *must* come first in the head -->

    <!-- SITE TITLE -->
    <title>worldwidewealthinc.com, Team Tiger</title>
    <meta name="description" content="Event, Conference & Meetup HTML5 Template"/>
    <meta name="keywords" content="event,conference, confrenece template , Responsive, HTML5"/>
    <meta name="author" content="themearth.com"/>

    <!-- twitter card starts from here, if you don't need remove this section -->
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:site" content="@yourtwitterusername"/>
    <meta name="twitter:creator" content="@yourtwitterusername"/>
    <meta name="twitter:url" content="http://yourdomain.com"/>
    <meta name="twitter:title" content="Your home page title, max 140 char"/>
    <!-- maximum 140 char -->
    <meta name="twitter:description" content="Your site description, maximum 140 char "/>
    <!-- maximum 140 char -->
    <meta name="twitter:image" content="assets/img/twittercardimg/twittercard-280-150.jpg"/>
    <!-- when you post this page url in twitter , this image will be shown -->
    <!-- twitter card ends from here -->

    <!-- facebook open graph starts from here, if you don't need then delete open graph related  -->
    <meta property="og:title" content="Your home page title"/>
    <meta property="og:url" content="http://your domain here.com"/>
    <meta property="og:locale" content="en_US"/>
    <meta property="og:site_name" content="Your site name here"/>
    <!--meta property="fb:admins" content="" /-->  <!-- use this if you have  -->
    <meta property="og:type" content="website"/>
    <meta property="og:image" content="assets/img/opengraph/fbphoto.jpg"/>
    <!-- when you post this page url in facebook , this image will be shown -->
    <!-- facebook open graph ends from here -->

    <!--  FAVICON AND TOUCH ICONS -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon/favicon.png"/>
    <!-- this icon shows in browser toolbar -->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon/favicon.png"/>
    <!-- this icon shows in browser toolbar -->
    <link rel="apple-touch-icon" sizes="57x57" href="assets/img/favicon/favicon.png">
    
    <link rel="manifest" href="assets/img/favicon/manifest.json">

    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="assets/libs/bootstrap/css/bootstrap.min.css" media="all"/>

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="assets/libs/fontawesome/css/font-awesome.min.css" media="all"/>

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="assets/libs/maginificpopup/magnific-popup.css" media="all"/>

    <!-- Time Circle -->
    <link rel="stylesheet" href="assets/libs/timer/TimeCircles.css" media="all"/>

    <!-- OWL CAROUSEL CSS -->
    <link rel="stylesheet" href="assets/libs/owlcarousel/owl.carousel.min.css" media="all" />
    <link rel="stylesheet" href="assets/libs/owlcarousel/owl.theme.default.min.css" media="all" />

    <!-- GOOGLE FONT -->
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Oswald:400,700%7cLora:400,400i,700,700i"/>

    <link rel="stylesheet" href="assets/libs/animate/animate.css" media="all" />

    <!-- MASTER  STYLESHEET  -->
    <link id="lgx-master-style" rel="stylesheet" href="assets/css/style-default.css" media="all"/>

    <!-- MODERNIZER CSS  -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
	
	 <!--Font awesome-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	
	<style>
   .scontent{
       font-size:40px;
	   padding:5px;
   
   }
   .scontent1{
       font-size:35px;
	   padding:10px;
   
   }
    .scontent2{
       font-size:30px;
	   padding:10px;
   
   }
   .center {
	  margin-top:8%;
	  
	  padding: 20px;
   }
    .center2 {
	  margin-top:3%;
	  
	  padding: 10px;
   }
   
   .center4{
	  margin-top:5%;
	  
	  padding: 10px;
   }
   
   .img{
	  height:300px;
    }
	.pra{
	  text-align: justify;
	  font-size:20px;
	  
	}
	.wwd{
	  color:white;
	}
	.logo{
	  width:226px;
	  height:74px;
	}
	.abtacn{
	  margin-top:5%;
	  
	  padding: 10px;
	}
	.rw{
	   margin-top:15px;
	
	}
	

</style>
</head>
<body class="home">

<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->

<div class="lgx-container">
    <!-- ***  ADD YOUR SITE CONTENT HERE *** -->

@include('layout.topbar')


   
@yield('content')	
	

    
@include('layout.footer')


  


   


</div>
<!--//.LGX SITE CONTAINER-->
<!-- *** ADD YOUR SITE SCRIPT HERE *** -->
<!-- JQUERY  -->
<script src="assets/js/vendor/jquery-1.12.4.min.js"></script>

<!-- BOOTSTRAP JS  -->
<script src="assets/libs/bootstrap/js/bootstrap.min.js"></script>


<script src="assets/libs/jquery.smooth-scroll.js"></script>

<!-- SKILLS SCRIPT  -->
<script src="assets/libs/jquery.validate.js"></script>

<!-- if load google maps then load this api, change api key as it may expire for limit cross as this is provided with any theme -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=XXXXXXXXXXXXXXXXXXXX"></script>

<!-- CUSTOM GOOGLE MAP -->
<script type="text/javascript" src="assets/libs/gmap/jquery.googlemap.js"></script>

<!-- adding magnific popup js library -->
<script type="text/javascript" src="assets/libs/maginificpopup/jquery.magnific-popup.min.js"></script>

<!-- Owl Carousel  -->
<script src="assets/libs/owlcarousel/owl.carousel.min.js"></script>

<!-- COUNTDOWN   -->
<script src="assets/libs/countdown.js"></script>
<script src="assets/libs/timer/TimeCircles.js"></script>

<!-- SMOTH SCROLL -->
<script src="assets/libs/jquery.smooth-scroll.min.js"></script>
<script src="assets/libs/jquery.easing.min.js"></script>

<!-- type js -->
<script src="assets/libs/typed/typed.min.js"></script>

<!-- CUSTOM SCRIPT  -->
<script src="assets/js/custom.script.js"></script>


</body>
</html>