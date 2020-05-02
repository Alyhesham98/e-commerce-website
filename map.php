<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>VINTAGE VIOLET</title>
 <link rel="icon" href="images/icon2.jpg" />
 <link rel='stylesheet'href ='css/bootstrap.css'/>
        <link rel='stylesheet'href ='css/font-awesome.min.css'/>
        <link rel='stylesheet'href ='css/style.css'/>
        <link rel='stylesheet'href='css/media.css'/>
        <link rel='stylesheet'href='css/animate.css'/>
 <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
</head>


<body>


<!-- start nav bar  -->

<!-- f awel tag ana shelt el navbar default w 5aleto inverse -->
<!-- w kman zawed navbar-fixed-top 3ashan 
	el nav bar tfdl enzl maya mahama 3mlt scroll -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
    	<!-- hna da button el code bt3 el zorar ely feh 3 shorat mn el gamb w shakl el 3 shorat da el span mmkn ashelhom w 7ot shakl tani mn 3ady -->
    	<!-- hna kman feh el data target de feha id #navtest da bywadeni 3al mkan ely lama ados 3l button yft7li eh -->
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navtest" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <!-- da code el logo  -->
      <a class="navbar-brand" href="#"> Vintage<span>Violet</span></a>
    </div>

    <!-- aho da el id ely lama button elu mn el gamb ado 3aleh hyft7li da -->
    <div class="collapse navbar-collapse" id="navtest">
		      <ul class="nav navbar-nav navbar-right">
		        <li ><a href="home.php">Home</a></li>
		        
		        <li ><a href="shop.php">Shoping cart</a></li>
		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categories<span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="#">Dresses</a></li>
		            <li><a href="#">Blouses</a></li>
		            <li><a href="#">Pants</a></li>
		            <li role="separator" class="divider"></li>
		            <li><a href="#">Heels</a></li>
		            <li><a href="#">Bags</a></li>

		          </ul>
              </li>
               <li class="active"><a href="map.php">Find Us<span class="sr-only"></span></a></li>
		          <li><a href="login.html">Login</a></li>
		          
		        
		      </ul>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<!-- end navbar -->


<section class="map-about text-center wow bounceIn" data-wow-duration="8s" data-wow-offset="300" > <!-- el text center da hy5li el goz2 da f el nos -->
	<!-- el hidden da by5ali el el h1 de f el mobile le m2as el so3'er t5tfii -->
	<h1 class="hidden-xs">Please Come Visit us</h1>
	<!-- el visible hna el gomla de htban bm2as as3'r f el mobile w matbnsh f el pc  -->
	<h3 class="visible-xs">Meet our new template </h5>

    <p class="lead">At City Center Alexandria </p> <!-- el lead da by5li el css f el p mo5talef w a7la -->

</section>
<!--Google map-->
<div class="map-responsive">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3413.8830627463344!2d29.92971631449362!3d31.168519931487413!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f5c26d673fdc49%3A0xd34e54a8f040c1af!2sCity+Centre+Alexandria!5e0!3m2!1sen!2seg!4v1548608163575" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
<!-- end map -->


<!-- start Footer -->
<section class="footer">
	<div class="container">
		<div class="row ">
			<div class="col-lg-6">
				<h2>Site Map</h2>
				<ul class="list-unstyled threecol ">
					<li>Home</li>
					<li>Shop</li>
					<li>categories</li>
					<li>Dresses & Jump Suites</li>
					<li>Out Wear</li>
					<li>Tops & Kintwear</li>
					<li>Skirts & Trousers</li>
					<li>Accessories</li>
					<li>Perfumes</li>
					<li>Find Us</li>
					<li>Contact Us</li>

				</ul>
			</div>
			<div class="col-lg-6">
				<h2>Follow us </h2>
				<ul class="list-unstyled icons">
					<li> <i class="fa fa-facebook fa-5x " aria-hidden="true"></i></li>
					 <li><i class="fa fa-instagram fa-5x" aria-hidden="true"></i></li>
					<li> <i class="fa fa-pinterest fa-5x" aria-hidden="true"></i></li>
					<li><i class="fa fa-youtube-play fa-5x" aria-hidden="true"></i></li>
				</ul>
			</div>
			
		</div>
		
	</div>

	<div class="copyright text-center">
                   Copyright&copy;2019 <span>VintageViolet</span>.Nagham
            </div>
        </section>
        <!-- End Footer -->




<!--  -->


<!--Start Loading Screen-->
      <!--   <section class="loading-overlay">
        	      <div class="sk-folding-cube text-center">
  <div class="sk-cube1 sk-cube"></div>
  <div class="sk-cube2 sk-cube"></div>
  <div class="sk-cube4 sk-cube"></div>
  <div class="sk-cube3 sk-cube"></div>
</div>
        </section> -->
      
         <!--End Loading Screen-->

 <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/wow.min.js"></script>
        <script>new WOW().init();</script>

</body>
</html>﻿