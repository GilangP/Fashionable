<!doctype html>
<html class="no-js">
<head>
<title>FO STYLE</title>
<meta charset="utf-8">
<!--[if lt IE 9]><script src="js/html5.js"></script><![endif]-->
<link rel="stylesheet" media="all" href="css/style.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- JS -->
<script src="js/jquery-1.7.1.min.js"></script>
<script src="js/custom.js"></script>
<script src="js/tabs.js"></script>
<script src="js/css3-mediaqueries.js"></script>
<script src="js/jquery.columnizer.min.js"></script>
<!-- Isotope -->
<script src="js/jquery.isotope.min.js"></script>
<!-- Lof slider -->
<script src="js/jquery.easing.js"></script>
<script src="js/lof-slider.js"></script>
<link rel="stylesheet" href="css/lof-slider.css" media="all" >
<!-- ENDS slider -->
<!-- Tweet -->
<link rel="stylesheet" href="css/jquery.tweet.css" media="all">
<!-- ENDS Tweet -->
<!-- superfish -->
<link rel="stylesheet" media="screen" href="css/superfish.css">
<script src="js/superfish-1.4.8/js/hoverIntent.js"></script>
<script src="js/superfish-1.4.8/js/superfish.js"></script>
<script src="js/superfish-1.4.8/js/supersubs.js"></script>
<!-- ENDS superfish -->
<!-- prettyPhoto -->
<script src="js/prettyPhoto/js/jquery.prettyPhoto.js"></script>
<link rel="stylesheet" href="js/prettyPhoto/css/prettyPhoto.css" media="screen">
<!-- ENDS prettyPhoto -->
<!-- poshytip -->
<link rel="stylesheet" href="js/poshytip-1.1/src/tip-twitter/tip-twitter.css" >
<link rel="stylesheet" href="js/poshytip-1.1/src/tip-yellowsimple/tip-yellowsimple.css" >
<script src="js/poshytip-1.1/src/jquery.poshytip.min.js"></script>
<!-- ENDS poshytip -->
<!-- JCarousel -->
<script type="text/javascript" src="js/jquery.jcarousel.min.js"></script>
<link rel="stylesheet" media="screen" href="css/carousel.css">
<!-- ENDS JCarousel -->
<!-- GOOGLE FONTS -->
<link href='http://fonts.googleapis.com/css?family=Voltaire' rel='stylesheet' type='text/css'>
<!-- modernizr -->
<script src="js/modernizr.js"></script>
<!-- SKIN -->
<link rel="stylesheet" media="all" href="css/skin.css">
<!-- Less framework -->
<link rel="stylesheet" media="all" href="css/lessframework.css">
<!-- jplayer -->
<link href="player-skin/jplayer-black-and-yellow.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/jquery.jplayer.min.js"></script>
<!-- flexslider -->
<link rel="stylesheet" href="css/flexslider.css" >
<script src="js/jquery.flexslider.js"></script>
<!-- reply move form -->
<script src="js/moveform.js"></script>
</head>
<body class="page" onLoad="">
<!-- HEADER -->
<header>
  <div class="wrapper cf">
    <div id="logo"> <a href="index.html"><img  src="img/logo.png" alt=""></a> </div>
    <!-- nav -->
    <ul id="nav" class="sf-menu">
      <li><a href="index.php">HOME</a></li>
      <li><a href="about.php">ABOUT</a></li>      
      <li class="current-menu-item"><a href="contact.php">CONTACT</a></li>
    </ul>
    <div id="combo-holder"></div>
    <!-- ends nav -->
  </div>
</header>
<!-- ENDS HEADER -->
<!-- MAIN -->
<div id="main">
  <div class="wrapper cf">
    <!-- page content-->
    <div id="page-content" class="cf">
      <!-- Map -->
      <script src="https://maps.google.com/maps/api/js?sensor=true"></script>
      <script>
	  function initialize() {
		  var latlng = new google.maps.LatLng(3.588694, 98.637337);
		  var myOptions = {
			  zoom: 8,
			  center: latlng,
			  mapTypeId: google.maps.MapTypeId.ROADMAP
		  };
		  var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
	  }
      </script>
      <div id="map-holder">
        <div id="map_canvas"></div>
        <div id="map-content">
          <p>
          <h3>LOKASI</h3>
          <p>Lokasi Kantor kami berdomisili di kota Medan.</p>          
          <p style="font-weight:bolder">CONTAC FORM</p>
          <p>HP  : 087867312742 (Gilang Prasetya)</p> 
          <p>BBM : 5fde326c (Muhammad Fahmi)</p>         
        </div>
      </div>
      <!-- ENDS Map -->
      <p>     
      <!-- ENDS form -->
    </div>
    <!-- ENDS page content-->
  </div>
  <!-- ENDS WRAPPER -->
</div>
<!-- ENDS MAIN -->
<!-- FOOTER -->
<footer>
  <div class="wrapper cf">
    <!-- widgets -->    
    <!-- bottom -->
    <div class="footer-bottom">
      <div class="left"><h3>&copy; Copyright 2016 <a href="#">FO STYLE</a></h3></div>
      <ul id="social-bar" class="cf sb">
        <li><a href="#" class="facebook" title="Facebook">Facebook</a></li>
        <li><a href="#" class="twitter" title="Twitter"></a></li>
        <li><a href="#" class="plus" title="Plus One"></a></li>
      </ul>
    </div>
    <!-- ENDS bottom -->
  </div>
</footer>
<!-- ENDS FOOTER -->
<!-- Start google map -->
<script>initialize();</script>
</body>
</html>
