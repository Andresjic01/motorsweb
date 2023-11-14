<?php
require_once("models/conexion.php");
require_once("models/consultas.php");
require_once("controllers/mostrarInfoCliente.php");



?>


<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en">

<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Motors Web</title>

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Construction Html5 Template">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
	<meta name="author" content="Themefisher">
	<meta name="generator" content="Themefisher Constra HTML Template v1.0">

	<!-- theme meta -->
	<meta name="theme-name" content="aviato" />

	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="views/Cliensite/images/favicon.png" />

	<!-- Themefisher Icon font -->
	<link rel="stylesheet" href="views/Cliensite/plugins/themefisher-font/style.css">
	<script src="https://kit.fontawesome.com/a6c0b2cb0d.js" crossorigin="anonymous"></script>
	<!-- bootstrap.min css -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<link rel="stylesheet" href="views/Cliensite/plugins/bootstrap/css/bootstrap.min.css">

	<!-- Animate css -->
	<link rel="stylesheet" href="views/Cliensite/plugins/animate/animate.css">
	<!-- Slick Carousel -->
	<link rel="stylesheet" href="views/Cliensite/plugins/slick/slick.css">
	<link rel="stylesheet" href="views/Cliensite/plugins/slick/slick-theme.css">

	<!-- Main Stylesheet -->
	<link rel="stylesheet" href="views/Cliensite/css/style-index.css">
	<link rel="stylesheet" href="views/Cliensite/css/style.css">


</head>

<body id="body">

	<!-- Start Top Header Bar -->
	<section class="top-header">
		<div class="container justify-content-between">
			<div class="row">
				<div class="col-md-4  col-xs-12 col-sm-4 text-center">
					<p>"Potencia tu auto con repuestos de calidad. Encuentra lo que necesitas para seguir en camino."
					</p>
				</div>
				<div class="col-md-4 col-xs-12 col-sm-4">
					<!-- Site Logo -->
					<div class="logo text-center">
						<a href="index.php">
							<img src="views/Cliensite/images/logo.png" alt="" style="width: 160px;	height: 50px;">
						</a>
					</div>
				</div>
				<div class="col-md-4 col-xs-12 col-sm-4">
					<!-- Cart -->
					<ul class="top-menu text-right list-inline">
						<li class="dropdown cart-nav dropdown-slide">
							<a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"><i
									class="tf-ion-android-cart"></i></a>
							<div class="dropdown-menu cart-dropdown">
								<!-- Cart Item -->
								<div class="media">
									<a class="pull-left" href="#!">
										<img class="media-object" src="views/Cliensite/images/shop/cart/cart-1.jpg"
											alt="image" />
									</a>
									<div class="media-body">
										<h4 class="media-heading"><a href="#!">Ladies Bag</a></h4>
										<div class="cart-price">
											<span>1 x</span>
											<span>1250.00</span>
										</div>
										<h5><strong>$1200</strong></h5>
									</div>
									<a href="#!" class="remove"><i class="tf-ion-close"></i></a>
								</div><!-- / Cart Item -->
								<!-- Cart Item -->
								<div class="media">
									<a class="pull-left" href="#!">
										<img class="media-object" src="views/Cliensite/images/shop/cart/cart-2.jpg"
											alt="image" />
									</a>
									<div class="media-body">
										<h4 class="media-heading"><a href="#!">Ladies Bag</a></h4>
										<div class="cart-price">
											<span>1 x</span>
											<span>1250.00</span>
										</div>
										<h5><strong>$1200</strong></h5>
									</div>
									<a href="#!" class="remove"><i class="tf-ion-close"></i></a>
								</div><!-- / Cart Item -->

								<div class="cart-summary">
									<span>Total</span>
									<span class="total-price">$1799.00</span>
								</div>
								<ul class="text-center cart-buttons">
									<li><a href="views/Cliensite/cart.html" class="btn btn-small">View Cart</a></li>
									<li><a href="views/Cliensite/checkout.html"
											class="btn btn-small btn-solid-border">Checkout</a></li>
								</ul>
							</div>

						</li><!-- / Cart -->

						<!-- Search -->
						<li class="dropdown search dropdown-slide">
							<a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"><i
									class="tf-ion-ios-search-strong"></i> Buscar</a>
							<ul class="dropdown-menu search-dropdown">
								<li>
									<form action="post"><input type="search" class="form-control"
											placeholder="Search..."></form>
								</li>
							</ul>
						</li><!-- / Search -->



					</ul><!-- / .nav .navbar-nav .navbar-right -->
				</div>
			</div>
		</div>
	</section><!-- End Top Header Bar -->


	<!-- Main Menu Section -->
	<section class="menu">
		<nav class="navbar navigation">
			<div class="container">
				<div class="navbar-header">
					<h2 class="menu-title">Main Menu</h2>
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
						aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>

				</div><!-- / .navbar-header -->

				<!-- Navbar Links -->
				<div id="navbar" class="navbar-collapse collapse text-center">
					<ul class="nav navbar-nav">

						<!-- Home -->
						<li class="hoverred">
							<a href="index.php">Inicio</a>
						</li>
						<!-- / Home -->

						<li class="dropdown width:130px dropdown-slide hoverred">
							<a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
								data-delay="350" role="button" aria-haspopup="true" aria-expanded="false">Talleres<span
									class="tf-ion-ios-arrow-down"></span></a>
							<div class="dropdown-menu">
								<div class="row">

									<!-- Servicios -->
									<div class="col-sm-12 col-xs-6">
										<ul>
											<li class="dropdown-header">Servicios</li>
											<li role="separator" class="divider"></li>
											<li><a href="views/Cliensite/Service.php">Mecanica automotriz <br>
													General</a></li>
											<li><a href="views/Cliensite/llanteras.php">Llanteras</a></li>
										</ul>
									</div>
								</div>
							</div>
						</li>

						<li class="dropdown width:130px dropdown-slide hoverred">
							<a href="views/Cliensite/shop-sidebar.php">Repuestos<span></span></a>

						</li>


						<!-- Pages -->
						<!-- <li class="dropdown full-width dropdown-slide">
						<a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="350"
							role="button" aria-haspopup="true" aria-expanded="false">Mi taller <span
								class="tf-ion-ios-arrow-down"></span></a>
						<div class="dropdown-menu">
							<div class="row"> -->

						<!-- Introduction -->
						<!-- <div class="col-sm-6 col-xs-12">
									<ul>
										<li class="dropdown-header">Introduction</li>
										<li role="separator" class="divider"></li>
										<li><a href="contact.html">Contact Us</a></li>
										<li><a href="about.html">About Us</a></li>
										<li><a href="404.html">404 Page</a></li>
										<li><a href="coming-soon.html">Coming Soon</a></li>
										<li><a href="faq.html">FAQ</a></li>
									</ul>
								</div> -->

						<!-- Contact -->
						<!-- <div class="col-sm-6 col-xs-12">
									<ul>
										<li class="dropdown-header">Dashboard</li>
										<li role="separator" class="divider"></li>
										<li><a href="dashboard.html">User Interface</a></li>
										<li><a href="order.html">Orders</a></li>
										<li><a href="address.html">Address</a></li>
										<li><a href="profile-details.html">Profile Details</a></li>
									</ul>
								</div>
							</div>
						</div>
					</li> -->

						<li class="hoverred">
							<a href="views/Cliensite/about.html">Informacion del sitio</a>
						</li>
						<!-- inicio de sesion -->
						<li class="dropdown dropdown-slide hoverred">
							<a href="views/Cliensite/login.html">Iniciar sesion</a>

						</li><!-- / inisio de sesion -->

						<!-- Registro -->
						<li class="dropdown dropdown-slide hoverred">
							<a href="views/Cliensite/signin.html">Registro</a>

						</li><!-- / Registo -->

					</ul><!-- / .nav .navbar-nav -->

				</div>
				<!--/.navbar-collapse -->
			</div><!-- / .container -->
		</nav>
	</section>

	<div class="hero-slider">
		<div class="slider-item th-fullpage hero-area"
			style="background-image: url(views/Cliensite/images/slider/slider-1.jpg);">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 text-center">
						<p data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".1">Repuestos</p>
						<h1 data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".5">En este apartado
							podras encontrar todo lo relacionado con los repuestos que tu vehiculo nesecita.</h1>
						<a data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".8" class="btn"
							href="views/Cliensite/shop.html">Visitar</a>
					</div>
				</div>
			</div>
		</div>
		<!-- <div class="slider-item th-fullpage hero-area" style="background-image: url(images/slider/slider-3.jpg);">
	<div class="container">
	  <div class="row">
		<div class="col-lg-8 text-left">
		  <p data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".1">PRODUCTS</p>
		  <h1 data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".5">The beauty of nature <br> is hidden in details.</h1>
		  <a data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".8" class="btn" href="shop.html">Shop Now</a>
		</div>
	  </div>
	</div>
  </div> -->
		<div class="slider-item th-fullpage hero-area"
			style="background-image: url(views/Cliensite/images/slider/slider-2.jpg);">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 text-right">
						<p data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".1">Servicios</p>
						<h1 data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".5">En este apartado
							podras encontrar Los servicios brindados por los talleres asociados a nuestro sitio web.
						</h1>
						<a data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".8" class="btn"
							href="views/Cliensite/Service.html">Visitar</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- <section class="product-category section tama">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="title text-center">
					<h2>¿Que buscas?</h2>
				</div>
			</div>
			<div class="col-md-6">
				<div class="category-box category-box-2" >
					<a href="#!">
						<img src="views/Cliensite/images/shop/category/category-1.jpg" alt="" />
						<div class="content">
							<h3>Repuestos</h3>
							<p>Shop New Season Clothing</p>
						</div>
					</a>	
				</div>
				<div class="category-box">
					<a href="#!">
						<img src="views/Cliensite/images/shop/category/category-2.jpg" alt="" />
						<div class="content">
							<h3>Servicios</h3>
							<p>Get Wide Range Selection</p>
						</div>
					</a>	
				</div>
			</div>
			<div class="col-md-6">
				<div class="category-box category-box-2">
					<a href="#!">
						<img style="width: 625px;" src="views/Cliensite/images/shop/category/category-2.jpg" alt="" />
						<div class="content">
							<h3>Jewellery</h3>
							<p>Special Design Comes First</p>
						</div>
					</a>	
				</div>
			</div>
		</div>
	</div>
</section> -->

	<!-- MAIN-lealjh -->
				
<section id="aliados">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 info-aliados">
				<article>
					<h2>Somos Tu Mejor Aliado</h2>
					<p>Somos un comercializador de repuestos de vehículos para el mercado colombiano con más de 22 años de experiencia. Contamos con cinco puntos deventa en Medellín y uno en Bogotá.Creemos en las personas y es por ello que somos una gran familia que está dispuesta a ofrecerle a los clientes el mejor servicio, con excelente actitud, profesionalismo, un amplio conocimientoen 
					marcas y repuestos para diferentes vehículos.</p>
					<div class="button-aliado">
						<button><a href="#">Contactanos</a></button>
					</div>
				</article>
			</div>
			
			<div class="col-lg-6 carrousel-aliados">
				<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
					<div class="carousel-inner">
						<div class="carousel-item active">
						<img src="views/Cliensite/images/carrousels/carrousel-aliados-img1.jpeg" class="d-block w-100" alt="...">
						</div>
						<div class="carousel-item">
						<img src="views/Cliensite/images/carrousels/carrousel-aliados-img2.png" class="d-block w-100" alt="...">
						</div>
						<div class="carousel-item">
						<img src="views/Cliensite/images/carrousels/carrousel-aliados-img3.jpg" class="d-block w-100" alt="...">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<section id="importadores">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<img src="views/Cliensite/images/carrousels/Img-mecanico.jpg" alt="">
			</div>
			<div class="col-md-6 import-info">
				<p>SOMOS IMPORTADORES DIRECTOS DE REPUESTOS AUTOMOTRICES ORIGINALES Y HOMOLOGADOS</p>
				<article class="icons">
					<div class="icon1">
						<i class="fa-solid fa-map-location"></i>
						<p>Envios a Todo el Pais</p>
					</div>
					<div class="icon1">
						<i class="fa-solid fa-medal"></i>
						<p>Calidad Garantizada</p>
					</div>
					<div class="icon1">
						<i class="fa-solid fa-headset"></i>
						<p>Soporte Continuo (Chats)</p>
					</div>
				</article>
				<button><a href="#">Conoce Nuestro Portafolio</a></button>
			</div>
		</div>
	</div>
</section>


	<footer class="footer section text-center">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ul class="social-media">
					<li>
						<a href="#">
							<i class="tf-ion-social-facebook"></i>
							</a>
						</li>
						<li>
							<a href="#">
								<i class="tf-ion-social-instagram"></i>
							</a>
						</li>
					</ul>
					<ul class="footer-menu text-uppercase">
						<li>
							<a href="contact.php">CONTACTO</a>
						</li>
						<li>
							<a href="shop-slidebar.html">REPUESTOS</a>
						</li>
						<li>
							<a href="#">POLITICAS DE PRIVACIDAD</a>
						</li>
					</ul>
					<p class="copyright-text">©MotorsWeb 2023, Developed by <a href="#">MotorsWeb</a></p>
				</div>
			</div>
		</div>
	</footer>

	<!-- 
	Essential Scripts
	=====================================-->

	<!-- Main jQuery -->
	<script src="views/Cliensite/plugins/jquery/dist/jquery.min.js"></script>
	<!-- Bootstrap 3.1 -->
	<script src="views/Cliensite/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
	<!-- Bootstrap Touchpin -->
	<script src="views/Cliensite/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js"></script>
	<!-- Instagram Feed Js -->
	<script src="views/Cliensite/plugins/instafeed/instafeed.min.js"></script>
	<!-- Video Lightbox Plugin -->
	<script src="views/Cliensite/plugins/ekko-lightbox/dist/ekko-lightbox.min.js"></script>
	<!-- Count Down Js -->
	<script src="views/Cliensite/plugins/syo-timer/build/jquery.syotimer.min.js"></script>

	<!-- slick Carousel -->
	<script src="views/Cliensite/plugins/slick/slick.min.js"></script>
	<script src="views/Cliensite/plugins/slick/slick-animation.min.js"></script>

	<!-- Google Mapl -->
	<script
		src="views/Cliensite/https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
	<script type="text/javascript" src="views/Cliensite/plugins/google-map/gmap.js"></script>

	<!-- Main Js File -->
	<script src="views/Cliensite/js/script.js"></script>





</body>

</html>