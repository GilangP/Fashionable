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
<!-- flexslider -->
<link rel="stylesheet" href="css/flexslider.css" >
<script src="js/jquery.flexslider.js"></script>
</head>
<body class="home">
<?php 
  include 'config/koneksi.php';  
?>
<!-- HEADER -->
<header>
  <div class="wrapper cf">
    <div id="logo"> <a href="index.php"><img  src="img/logo.png" alt=""></a> </div>
    <!-- nav -->
    <ul id="nav" class="sf-menu">
      <li class="current-menu-item"><a href="index.php">HOME</a></li>
      <li><a href="about.php">ABOUT</a></li>      
      <li><a href="contact.php">CONTACT</a></li>
    </ul>
    <div id="combo-holder"></div>
    <!-- ends nav -->
    <!-- SLIDER -->
    <div id="home-slider" class="lof-slidecontent">
      <div class="preload">
        <div></div>
      </div>
      <!-- slider content -->
      <div class="main-slider-content" >
        <ul class="sliders-wrap-inner">
          <li> <img src="img/dummies/slides/01.jpg" alt="">            
          </li>
          <li> <img src="img/dummies/slides/02.jpg" alt="">            
          </li>
          <li> <img src="img/dummies/slides/03.jpg" alt="">            
          </li>
          <li> <img src="img/dummies/slides/04.jpg" alt="">           
          </li>
          <li> <img src="img/dummies/slides/05.jpg" alt="">           
          </li>
          <li> <img src="img/dummies/slides/06.jpg" alt="">            
          </li>
          <li> <img src="img/dummies/slides/07.jpg" alt="">            
          </li>
        </ul>
      </div>
      <!-- ENDS slider content -->
      <!-- slider nav -->
      <div class="navigator-content">
        <div class="navigator-wrapper">
          <ul class="navigator-wrap-inner">
            <li><img src="img/dummies/slides/01_thumb.jpg" alt=""></li>
            <li><img src="img/dummies/slides/02_thumb.jpg" alt=""></li>
            <li><img src="img/dummies/slides/03_thumb.jpg" alt=""></li>
            <li><img src="img/dummies/slides/04_thumb.jpg" alt=""></li>
            <li><img src="img/dummies/slides/05_thumb.jpg" alt=""></li>
            <li><img src="img/dummies/slides/06_thumb.jpg" alt=""></li>
            <li><img src="img/dummies/slides/07_thumb.jpg" alt=""></li>
          </ul>
        </div>
        <div class="button-next">Next</div>
        <div  class="button-previous">Previous</div>
        <!-- REMOVED TILL FIXED <div class="button-control"><span>STOP</span></div> -->
      </div>
      <!-- slider nav -->
    </div>
    <!-- ENDS SLIDER -->
  </div>
</header>
<!-- ENDS HEADER -->
<!-- MAIN -->
<div id="main">
  <div class="wrapper cf">
    <!-- featured -->
    <div class="home-featured">
      <ul id="filter-buttons">
        <li><a href="#" data-filter="*" class="selected">SEMUA</a></li>
        <li><a href="#" data-filter=".web">BAJU</a></li>
        <li><a href="#" data-filter=".print">CELANA</a></li>
        <li><a href="#" data-filter=".design">SEPATU</a></li>
        <li><a href="#" data-filter=".photo">GELANG</a></li>
        <li><a href="#" data-filter=".rambut">RAMBUT</a></li>
      </ul>
      <!-- Filter container -->
      <div id="filter-container" class="cf">       
        <?php 
          $query ="SELECT * FROM pakaian WHERE jenis_pakaian = 1";  
          $hasil = $konek->query($query);          
          while ($data = $hasil->fetch_assoc()) {
            ?>
             <figure class="web">
              <a href="project.html" class="thumb"><?php echo "<img style=\"width:300px; height:350px\" src=\"File/Pakaian/".$data['foto']."\">" ?></a>
              <figcaption>            
                  <h3 class="heading"><?php echo "$data[merk_pakaian]"; ?></h3>
                  <?php echo "$data[deskripsi_pakaian]"; ?>
              </figcaption>
            </figure>        

            <?php
          }
        ?>        


         <?php 
          $query ="SELECT * FROM pakaian WHERE jenis_pakaian = 2";  
          $hasil = $konek->query($query);          
          while ($data = $hasil->fetch_assoc()) {
            ?>
             <figure class="print">
              <a href="project.html" class="thumb"><?php echo "<img style=\"width:300px; height:350px\" src=\"File/Pakaian/".$data['foto']."\">" ?></a>
              <figcaption>            
                  <h3 class="heading"><?php echo "$data[merk_pakaian]"; ?></h3>
                  <?php echo "$data[deskripsi_pakaian]"; ?>
              </figcaption>
            </figure>        

            <?php
          }
        ?>        

         <?php 
          $query ="SELECT * FROM pakaian WHERE jenis_pakaian = 3";  
          $hasil = $konek->query($query);          
          while ($data = $hasil->fetch_assoc()) {
            ?>
             <figure class="design">
              <a href="project.html" class="thumb"><?php echo "<img style=\"width:300px; height:350px\" src=\"File/Pakaian/".$data['foto']."\">" ?></a>
              <figcaption>            
                  <h3 class="heading"><?php echo "$data[merk_pakaian]"; ?></h3>
                  <?php echo "$data[deskripsi_pakaian]"; ?>
              </figcaption>
            </figure>        

            <?php
          }
        ?>      

         <?php 
          $query ="SELECT * FROM pakaian WHERE jenis_pakaian = 4";  
          $hasil = $konek->query($query);          
          while ($data = $hasil->fetch_assoc()) {
            ?>
             <figure class="photo">
              <a href="project.html" class="thumb"><?php echo "<img style=\"width:300px; height:350px\" src=\"File/Pakaian/".$data['foto']."\">" ?></a>
              <figcaption>            
                  <h3 class="heading"><?php echo "$data[merk_pakaian]"; ?></h3>
                  <?php echo "$data[deskripsi_pakaian]"; ?>
              </figcaption>
            </figure>        

            <?php
          }
        ?> 
        <?php 
          $query ="SELECT * FROM rambut";  
          $hasil = $konek->query($query);          
          while ($data = $hasil->fetch_assoc()) {
            ?>
             <figure class="rambut">
              <a href="project.html" class="thumb"><?php echo "<img style=\"width:300px; height:350px\" src=\"File/Rambut/".$data['foto']."\">" ?></a>
              <figcaption>            
                  <h3 class="heading"><?php echo "$data[jenis_rambut]"; ?></h3>
                  <?php echo "$data[deskripsi_rambut]"; ?>
              </figcaption>
            </figure>        

            <?php
          }
        ?>          
          
      </div>
      <!-- ENDS Filter container -->
    </div>
    <!-- ENDS featured -->
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
</body>
</html>
