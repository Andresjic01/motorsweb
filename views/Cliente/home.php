<?php
require_once("../../models/conexion.php");
require_once("../../models/consultas.php");
require_once("../../models/seguridadCliente.php");
require_once("../../controllers/mostrarInfoCliente.php");
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
  <link rel="shortcut icon" type="image/x-icon" href="../Cliensite/images/favicon.png" />
  
  <!-- Aos Animate -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <!-- icons -->
  <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-straight/css/uicons-solid-straight.css'>
  <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-brands/css/uicons-brands.css'>
  <!-- Themefisher Icon font -->
  <script src="https://kit.fontawesome.com/a6c0b2cb0d.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../Cliensite/plugins/themefisher-font/style.css">
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="../Cliensite/plugins/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  
  <!-- Animate css -->
  <link rel="stylesheet" href="../Cliensite/plugins/animate/animate.css">
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="../Cliensite/plugins/slick/slick.css">
  <link rel="stylesheet" href="../Cliensite/plugins/slick/slick-theme.css">
  
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="../Cliensite/css/style.css">
  
</head>
<body id="body">

<?php
	include("include-pag.php")
?>

<div class="hero-slider">
  <div class="slider-item th-fullpage hero-area" style="background-image: url(../Cliensite/images/slider/slider-1.jpg);">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 text-center">
          <p data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".1">Repuestos</p>
          <h1 data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".5">En este apartado podras encontrar todo lo relacionado con los repuestos que tu vehiculo nesecita.</h1>
          <a data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".8" class="btn" href="views/Cliensite/shop.html">Visitar</a>
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
  <div class="slider-item th-fullpage hero-area" style="background-image: url(../Cliensite/images/slider/slider-2.jpg);">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 text-right">
          <p data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".1">Servicios</p>
          <h1 data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".5">En este apartado podras encontrar Los servicios brindados por los talleres asociados a nuestro sitio web.</h1>
          <a data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".8" class="btn" href="views/Cliensite/Service.html">Visitar</a>
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
						<img src="..
						/Cliensite/images/shop/category/category-1.jpg" alt="" />
						<div class="content">
							<h3>Repuestos</h3>
							<p>Shop New Season Clothing</p>
						</div>
					</a>	
				</div>
				<div class="category-box">
					<a href="#!">
						<img src="..
						/Cliensite/images/shop/category/category-2.jpg" alt="" />
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
						<img style="width: 625px;" src="..
						/Cliensite/images/shop/category/category-2.jpg" alt="" />
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

<section class="products section bg-gray cdestacadas">
	<div class="container">
		<div class="row">
			<div class="title text-center">
				<h2>Mas vendidos</h2>
			</div>
		</div>
	
		
	<section id="cdestacadas">
		<div class="container">
			<div class="row clasesDes">
			<div class="col-md-4">
				<div class="product-item" >
					<div class="product-thumb imagenesP card-destacadas">
						<span class="bage">Descuento</span>
						<img class="img-responsive" src="../Cliensite/images/arrow-products/chinmay-jade.jpg" alt="product-img" style="height: 400px;" />		
							<div class="preview-meta">
							<p class="Pdescri">XD Wheels ha estado redefiniendo el rendimiento dentro y fuera del asfalto desde 1995 con la búsqueda incesante de afrontar las posibilidades.</p>
							<ul>
								<!-- <li>
									<span  data-toggle="modal" data-target="#product-modal">
										<i class="tf-ion-ios-search-strong"></i>
									</span>
								</li> -->
								<li>
			                        <a href="#!" ><i class="tf-ion-ios-heart"></i></a>
								</li>
								<li>
									<a href="#!"><i class="tf-ion-android-cart"></i></a>
								</li>
								<li>
											<a href="#!" onclick="mostrarPopup()"><i class="tf-ion-eye"></i></a>
										</li>

										<!-- Ventana emergente -->
										<div class="popup" id="miPopup">
        <!-- Contenido de la ventana emergente -->
												<img src="../Cliensite/images/arrow-products/chinmay-jade.jpg" alt="product-img">
												<h2>XD Wheels</h2>
												<p>Este componente específico está diseñado para encajar perfectamente en el sistema correspondiente de tu automóvil.

</p>
												<p>Precio: $200</p>
												<button onclick="cerrarPopup()">Cerrar</button>
											</div>

											<!-- Fondo oscuro detrás de la ventana emergente -->
											<div class="overlay" id="miOverlay" onclick="cerrarPopup()"></div>

											<script>
												function mostrarPopup() {
													document.getElementById("miPopup").style.display = "block";
													document.getElementById("miOverlay").style.display = "block";
												}

												function cerrarPopup() {
													document.getElementById("miPopup").style.display = "none";
													document.getElementById("miOverlay").style.display = "none";
												}
										</script>
							</ul>
                      	</div>
					</div>
					<div class="product-content cont-info">
						<h3>XD Wheels</h3>
                        <p>200$</p>
					</div>

				</div>
			</div>
			<div class="col-md-4">
				<div class="product-item">
					<div class="product-thumb" >
						<img class="img-responsive" src="../Cliensite/images/arrow-products/chinmay-jade.jpg" alt="product-img" style="height: 400px;"/>
						<div class="preview-meta">
						<p class="Pdescri">XD Wheels ha estado redefiniendo el rendimiento dentro y fuera del asfalto desde 1995 con la búsqueda incesante de afrontar las posibilidades.</p>
							<ul>
								<!-- <li>
									<span  data-toggle="modal" data-target="#product-modal">
										<i class="tf-ion-ios-search-strong"></i>
									</span>
								</li> -->
								<li>
			                        <a href="#" ><i class="tf-ion-ios-heart"></i></a>
								</li>
								<li>
									<a href="#!"><i class="tf-ion-android-cart"></i></a>
								</li>
							</ul>
                      	</div>
					</div>
					<div class="product-content cont-info">
						<h3>XD Wheels</h3>
                        <p>200$</p>
					</div>
				
				</div>
			</div>
			<div class="col-md-4">
				<div class="product-item">
					<div class="product-thumb" >
						<img class="img-responsive" src="../Cliensite/images/arrow-products/chinmay-jade.jpg" alt="product-img" style="height: 400px;" />
						<div class="preview-meta">
						<p class="Pdescri">XD Wheels ha estado redefiniendo el rendimiento dentro y fuera del asfalto desde 1995 con la búsqueda incesante de afrontar las posibilidades.</p>
							<ul>
								<!-- <li>
									<span  data-toggle="modal" data-target="#product-modal">
										<i class="tf-ion-ios-search-strong"></i>
									</span>
								</li> -->
								<li>
			                        <a href="#" ><i class="tf-ion-ios-heart"></i></a>
								</li>
								<li>
									<a href="#!"><i class="tf-ion-android-cart"></i></a>
								</li>
							</ul>
                      	</div>
					</div>
					<div class="product-content cont-info">
						<h3>XD Wheels</h3>
                        <p>200$</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="product-item">
					<div class="product-thumb" >
						<img class="img-responsive" src="../Cliensite/images/arrow-products/chinmay-jade.jpg" alt="product-img" style="height: 400px;" />
						<div class="preview-meta">
						<p class="Pdescri">XD Wheels ha estado redefiniendo el rendimiento dentro y fuera del asfalto desde 1995 con la búsqueda incesante de afrontar las posibilidades.</p>
							<ul>
								<!-- <li>
									<span  data-toggle="modal" data-target="#product-modal">
										<i class="tf-ion-ios-search-strong"></i>
									</span>
								</li> -->
								<li>
			                        <a href="#" ><i class="tf-ion-ios-heart"></i></a>
								</li>
								<li>
									<a href="#!"><i class="tf-ion-android-cart"></i></a>
								</li>
							</ul>
                      	</div>
					</div>
					<div class="product-content cont-info">
						<h3>XD Wheels</h3>
                        <p>200$</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="product-item">
					<div class="product-thumb">
						<img class="img-responsive" src="../Cliensite/images/arrow-products/chinmay-jade.jpg" alt="product-img"  style="height: 400px;"/>
						<div class="preview-meta">
						<p class="Pdescri">XD Wheels ha estado redefiniendo el rendimiento dentro y fuera del asfalto desde 1995 con la búsqueda incesante de afrontar las posibilidades.</p>
							<ul>
								<!-- <li>
									<span  data-toggle="modal" data-target="#product-modal">
										<i class="tf-ion-ios-search-strong"></i>
									</span>
								</li> -->
								<li>
			                        <a href="#" ><i class="tf-ion-ios-heart"></i></a>
								</li>
								<li>
									<a href="#!"><i class="tf-ion-android-cart"></i></a>
								</li>
							</ul>
                      	</div>
					</div>
					<div class="product-content cont-info">
						<h3>XD Wheels</h3>
                        <p>200$</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="product-item">
					<div class="product-thumb" ">
						<img class="img-responsive" src="../Cliensite/images/arrow-products/chinmay-jade.jpg" alt="product-img"  style="height: 400px;"/>
						<div class="preview-meta">
						<p class="Pdescri">XD Wheels ha estado redefiniendo el rendimiento dentro y fuera del asfalto desde 1995 con la búsqueda incesante de afrontar las posibilidades.</p>
							<ul>
								<!-- <li>
									<span  data-toggle="modal" data-target="#product-modal">
										<i class="tf-ion-ios-search-strong"></i>
									</span>
								</li> -->
								<li>
			                        <a href="#" ><i class="tf-ion-ios-heart"></i></a>
								</li>
								<li>
									<a href="#!"><i class="tf-ion-android-cart"></i></a>
								</li>
							</ul>
                      	</div>
					</div>
					<div class="product-content cont-info">
						<h3>XD Wheels</h3>
                        <p>200$</p>
					</div>
				</div>
			</div>
	</section>

	<!-- <section id="ver-more">
	<div class="boton" onclick="mostrarPopup()">Abrir Ventana Emergente</div>
	<div class="popup" id="miPopup">
        <p>¡Hola! Esto es una ventana emergente.</p>
        <button onclick="cerrarPopup()">Cerrar</button>
    </div>

    <!-- Fondo oscuro detrás de la ventana emergente -->
    <!-- <div class="overlay" id="miOverlay" onclick="cerrarPopup()"></div>

    <script>
        function mostrarPopup() {
            document.getElementById("miPopup").style.display = "block";
            document.getElementById("miOverlay").style.display = "block";
        }

        function cerrarPopup() {
            document.getElementById("miPopup").style.display = "none";
            document.getElementById("miOverlay").style.display = "none";
        }
    </script>

	</section> --> -->




	<div class="row">
			<div class="title text-center">
				<h2>Rines</h2>
			</div>
		</div>

	<section id="cdestacadas">
		<div class="container">
			<div class="row clasesDes">
			<div class="col-md-4">
				<div class="product-item">
					<div class="product-thumb imagenesP card-destacadas" ">
						<span class="bage">Descuento</span>
						<img class="img-responsive" src="../Cliensite/images/arrow-products/chinmay-jade.jpg" alt="product-img" style="height: 400px;" />		
							<div class="preview-meta">
							<p class="Pdescri">XD Wheels ha estado redefiniendo el rendimiento dentro y fuera del asfalto desde 1995 con la búsqueda incesante de afrontar las posibilidades.</p>
							<ul>
								<!-- <li>
									<span  data-toggle="modal" data-target="#product-modal">
										<i class="tf-ion-ios-search-strong"></i>
									</span>
								</li> -->
								<li>
			                        <a href="#!" ><i class="tf-ion-ios-heart"></i></a>
								</li>
								<li>
									<a href="#!"><i class="tf-ion-android-cart"></i></a>
								</li>
							</ul>
                      	</div>
					</div>
					<div class="product-content cont-info">
						<h3>XD Wheels</h3>
                        <p>200$</p>
					</div>

				</div>
			</div>
			<div class="col-md-4">
				<div class="product-item">
					<div class="product-thumb">
						<img class="img-responsive" src="../Cliensite/images/arrow-products/chinmay-jade.jpg" alt="product-img" style="height: 400px;"/>
						<div class="preview-meta">
						<p class="Pdescri">XD Wheels ha estado redefiniendo el rendimiento dentro y fuera del asfalto desde 1995 con la búsqueda incesante de afrontar las posibilidades.</p>
							<ul>
								<!-- <li>
									<span  data-toggle="modal" data-target="#product-modal">
										<i class="tf-ion-ios-search-strong"></i>
									</span>
								</li> -->
								<li>
			                        <a href="#" ><i class="tf-ion-ios-heart"></i></a>
								</li>
								<li>
									<a href="#!"><i class="tf-ion-android-cart"></i></a>
								</li>
							</ul>
                      	</div>
					</div>
					<div class="product-content cont-info">
						<h3>XD Wheels</h3>
                        <p>200$</p>
					</div>
				
				</div>
			</div>
			<div class="col-md-4">
				<div class="product-item">
					<div class="product-thumb" ">
						<img class="img-responsive" src="../Cliensite/images/arrow-products/chinmay-jade.jpg" alt="product-img" style="height: 400px;" />
						<div class="preview-meta">
						<p class="Pdescri">XD Wheels ha estado redefiniendo el rendimiento dentro y fuera del asfalto desde 1995 con la búsqueda incesante de afrontar las posibilidades.</p>
							<ul>
								<!-- <li>
									<span  data-toggle="modal" data-target="#product-modal">
										<i class="tf-ion-ios-search-strong"></i>
									</span>
								</li> -->
								<li>
			                        <a href="#" ><i class="tf-ion-ios-heart"></i></a>
								</li>
								<li>
									<a href="#!"><i class="tf-ion-android-cart"></i></a>
								</li>
							</ul>
                      	</div>
					</div>
					<div class="product-content cont-info">
						<h3>XD Wheels</h3>
                        <p>200$</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="product-item">
					<div class="product-thumb" ">
						<img class="img-responsive" src="../Cliensite/images/arrow-products/chinmay-jade.jpg" alt="product-img" style="height: 400px;" />
						<div class="preview-meta">
						<p class="Pdescri">XD Wheels ha estado redefiniendo el rendimiento dentro y fuera del asfalto desde 1995 con la búsqueda incesante de afrontar las posibilidades.</p>
							<ul>
								<!-- <li>
									<span  data-toggle="modal" data-target="#product-modal">
										<i class="tf-ion-ios-search-strong"></i>
									</span>
								</li> -->
								<li>
			                        <a href="#" ><i class="tf-ion-ios-heart"></i></a>
								</li>
								<li>
									<a href="#!"><i class="tf-ion-android-cart"></i></a>
								</li>
							</ul>
                      	</div>
					</div>
					<div class="product-content cont-info">
						<h3>XD Wheels</h3>
                        <p>200$</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="product-item">
					<div class="product-thumb">
						<img class="img-responsive" src="../Cliensite/images/arrow-products/chinmay-jade.jpg" alt="product-img"  style="height: 400px;"/>
						<div class="preview-meta">
						<p class="Pdescri">XD Wheels ha estado redefiniendo el rendimiento dentro y fuera del asfalto desde 1995 con la búsqueda incesante de afrontar las posibilidades.</p>
							<ul>
								<!-- <li>
									<span  data-toggle="modal" data-target="#product-modal">
										<i class="tf-ion-ios-search-strong"></i>
									</span>
								</li> -->
								<li>
			                        <a href="#" ><i class="tf-ion-ios-heart"></i></a>
								</li>
								<li>
									<a href="#!"><i class="tf-ion-android-cart"></i></a>
								</li>
							</ul>
                      	</div>
					</div>
					<div class="product-content cont-info">
						<h3>XD Wheels</h3>
                        <p>200$</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="product-item">
					<div class="product-thumb" ">
						<img class="img-responsive" src="../Cliensite/images/arrow-products/chinmay-jade.jpg" alt="product-img"  style="height: 400px;"/>
						<div class="preview-meta">
						<p class="Pdescri">XD Wheels ha estado redefiniendo el rendimiento dentro y fuera del asfalto desde 1995 con la búsqueda incesante de afrontar las posibilidades.</p>
							<ul>
								<!-- <li>
									<span  data-toggle="modal" data-target="#product-modal">
										<i class="tf-ion-ios-search-strong"></i>
									</span>
								</li> -->
								<li>
			                        <a href="#" ><i class="tf-ion-ios-heart"></i></a>
								</li>
								<li>
									<a href="#!"><i class="tf-ion-android-cart"></i></a>
								</li>
							</ul>
                      	</div>
					</div>
					<div class="product-content cont-info">
						<h3>XD Wheels</h3>
                        <p>200$</p>
					</div>
				</div>
			</div>
	</section>
	
	<div class="row">
			<div class="title text-center">
				<h2>servicios</h2>
			</div>
		</div>

	<section id="cdestacadas">
		<div class="container">
			<div class="row clasesDes">
			<div class="col-md-4">
				<div class="product-item">
					<div class="product-thumb imagenesP card-destacadas" ">
						<span class="bage">Descuento</span>
						<img class="img-responsive" src="../Cliensite/images/arrow-products/chinmay-jade.jpg" alt="product-img" style="height: 400px;" />		
							<div class="preview-meta">
							<p class="Pdescri">XD Wheels ha estado redefiniendo el rendimiento dentro y fuera del asfalto desde 1995 con la búsqueda incesante de afrontar las posibilidades.</p>
							<ul>
								<!-- <li>
									<span  data-toggle="modal" data-target="#product-modal">
										<i class="tf-ion-ios-search-strong"></i>
									</span>
								</li> -->
								<li>
			                        <a href="#!" ><i class="tf-ion-ios-heart"></i></a>
								</li>
								<li>
									<a href="#!"><i class="tf-ion-android-cart"></i></a>
								</li>
							</ul>
                      	</div>
					</div>
					<div class="product-content cont-info">
						<h3>XD Wheels</h3>
                        <p>200$</p>
					</div>

				</div>
			</div>
			<div class="col-md-4">
				<div class="product-item">
					<div class="product-thumb">
						<img class="img-responsive" src="../Cliensite/images/arrow-products/chinmay-jade.jpg" alt="product-img" style="height: 400px;"/>
						<div class="preview-meta">
						<p class="Pdescri">XD Wheels ha estado redefiniendo el rendimiento dentro y fuera del asfalto desde 1995 con la búsqueda incesante de afrontar las posibilidades.</p>
							<ul>
								<!-- <li>
									<span  data-toggle="modal" data-target="#product-modal">
										<i class="tf-ion-ios-search-strong"></i>
									</span>
								</li> -->
								<li>
			                        <a href="#" ><i class="tf-ion-ios-heart"></i></a>
								</li>
								<li>
									<a href="#!"><i class="tf-ion-android-cart"></i></a>
								</li>
							</ul>
                      	</div>
					</div>
					<div class="product-content cont-info">
						<h3>XD Wheels</h3>
                        <p>200$</p>
					</div>
				
				</div>
			</div>
			<div class="col-md-4">
				<div class="product-item">
					<div class="product-thumb" ">
						<img class="img-responsive" src="../Cliensite/images/arrow-products/chinmay-jade.jpg" alt="product-img" style="height: 400px;" />
						<div class="preview-meta">
						<p class="Pdescri">XD Wheels ha estado redefiniendo el rendimiento dentro y fuera del asfalto desde 1995 con la búsqueda incesante de afrontar las posibilidades.</p>
							<ul>
								<!-- <li>
									<span  data-toggle="modal" data-target="#product-modal">
										<i class="tf-ion-ios-search-strong"></i>
									</span>
								</li> -->
								<li>
			                        <a href="#" ><i class="tf-ion-ios-heart"></i></a>
								</li>
								<li>
									<a href="#!"><i class="tf-ion-android-cart"></i></a>
								</li>
							</ul>
                      	</div>
					</div>
					<div class="product-content cont-info">
						<h3>XD Wheels</h3>
                        <p>200$</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="product-item">
					<div class="product-thumb" ">
						<img class="img-responsive" src="../Cliensite/images/arrow-products/chinmay-jade.jpg" alt="product-img" style="height: 400px;" />
						<div class="preview-meta">
						<p class="Pdescri">XD Wheels ha estado redefiniendo el rendimiento dentro y fuera del asfalto desde 1995 con la búsqueda incesante de afrontar las posibilidades.</p>
							<ul>
								<!-- <li>
									<span  data-toggle="modal" data-target="#product-modal">
										<i class="tf-ion-ios-search-strong"></i>
									</span>
								</li> -->
								<li>
			                        <a href="#" ><i class="tf-ion-ios-heart"></i></a>
								</li>
								<li>
									<a href="#!"><i class="tf-ion-android-cart"></i></a>
								</li>
							</ul>
                      	</div>
					</div>
					<div class="product-content cont-info">
						<h3>XD Wheels</h3>
                        <p>200$</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="product-item">
					<div class="product-thumb">
						<img class="img-responsive" src="../Cliensite/images/arrow-products/chinmay-jade.jpg" alt="product-img"  style="height: 400px;"/>
						<div class="preview-meta">
						<p class="Pdescri">XD Wheels ha estado redefiniendo el rendimiento dentro y fuera del asfalto desde 1995 con la búsqueda incesante de afrontar las posibilidades.</p>
							<ul>
								<!-- <li>
									<span  data-toggle="modal" data-target="#product-modal">
										<i class="tf-ion-ios-search-strong"></i>
									</span>
								</li> -->
								<li>
			                        <a href="#" ><i class="tf-ion-ios-heart"></i></a>
								</li>
								<li>
									<a href="#!"><i class="tf-ion-android-cart"></i></a>
								</li>
							</ul>
                      	</div>
					</div>
					<div class="product-content cont-info">
						<h3>XD Wheels</h3>
                        <p>200$</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="product-item">
					<div class="product-thumb" ">
						<img class="img-responsive" src="../Cliensite/images/arrow-products/chinmay-jade.jpg" alt="product-img"  style="height: 400px;"/>
						<div class="preview-meta">
						<p class="Pdescri">XD Wheels ha estado redefiniendo el rendimiento dentro y fuera del asfalto desde 1995 con la búsqueda incesante de afrontar las posibilidades.</p>
							<ul>
								<!-- <li>
									<span  data-toggle="modal" data-target="#product-modal">
										<i class="tf-ion-ios-search-strong"></i>
									</span>
								</li> -->
								<li>
			                        <a href="#" ><i class="tf-ion-ios-heart"></i></a>
								</li>
								<li>
									<a href="#!"><i class="tf-ion-android-cart"></i></a>
								</li>
							</ul>
                      	</div>
					</div>
					<div class="product-content cont-info">
						<h3>XD Wheels</h3>
                        <p>200$</p>
					</div>
				</div>
			</div>
	</section>

	<div class="row">
			<div class="title text-center">
				<h2>Sistema Electrico</h2>
			</div>
		</div>

	<section id="cdestacadas">
		<div class="container">
			<div class="row clasesDes">
			<div class="col-md-4">
				<div class="product-item">
					<div class="product-thumb imagenesP card-destacadas" ">
						<span class="bage">Descuento</span>
						<img class="img-responsive" src="../Cliensite/images/arrow-products/chinmay-jade.jpg" alt="product-img" style="height: 400px;" />		
							<div class="preview-meta">
							<p class="Pdescri">XD Wheels ha estado redefiniendo el rendimiento dentro y fuera del asfalto desde 1995 con la búsqueda incesante de afrontar las posibilidades.</p>
							<ul>
								<!-- <li>
									<span  data-toggle="modal" data-target="#product-modal">
										<i class="tf-ion-ios-search-strong"></i>
									</span>
								</li> -->
								<li>
			                        <a href="#!" ><i class="tf-ion-ios-heart"></i></a>
								</li>
								<li>
									<a href="#!"><i class="tf-ion-android-cart"></i></a>
								</li>
							</ul>
                      	</div>
					</div>
					<div class="product-content cont-info">
						<h3>XD Wheels</h3>
                        <p>200$</p>
					</div>

				</div>
			</div>
			<div class="col-md-4">
				<div class="product-item">
					<div class="product-thumb">
						<img class="img-responsive" src="../Cliensite/images/arrow-products/chinmay-jade.jpg" alt="product-img" style="height: 400px;"/>
						<div class="preview-meta">
						<p class="Pdescri">XD Wheels ha estado redefiniendo el rendimiento dentro y fuera del asfalto desde 1995 con la búsqueda incesante de afrontar las posibilidades.</p>
							<ul>
								<!-- <li>
									<span  data-toggle="modal" data-target="#product-modal">
										<i class="tf-ion-ios-search-strong"></i>
									</span>
								</li> -->
								<li>
			                        <a href="#" ><i class="tf-ion-ios-heart"></i></a>
								</li>
								<li>
									<a href="#!"><i class="tf-ion-android-cart"></i></a>
								</li>
							</ul>
                      	</div>
					</div>
					<div class="product-content cont-info">
						<h3>XD Wheels</h3>
                        <p>200$</p>
					</div>
				
				</div>
			</div>
			<div class="col-md-4">
				<div class="product-item">
					<div class="product-thumb" ">
						<img class="img-responsive" src="../Cliensite/images/arrow-products/chinmay-jade.jpg" alt="product-img" style="height: 400px;" />
						<div class="preview-meta">
						<p class="Pdescri">XD Wheels ha estado redefiniendo el rendimiento dentro y fuera del asfalto desde 1995 con la búsqueda incesante de afrontar las posibilidades.</p>
							<ul>
								<!-- <li>
									<span  data-toggle="modal" data-target="#product-modal">
										<i class="tf-ion-ios-search-strong"></i>
									</span>
								</li> -->
								<li>
			                        <a href="#" ><i class="tf-ion-ios-heart"></i></a>
								</li>
								<li>
									<a href="#!"><i class="tf-ion-android-cart"></i></a>
								</li>
							</ul>
                      	</div>
					</div>
					<div class="product-content cont-info">
						<h3>XD Wheels</h3>
                        <p>200$</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="product-item">
					<div class="product-thumb" ">
						<img class="img-responsive" src="../Cliensite/images/arrow-products/chinmay-jade.jpg" alt="product-img" style="height: 400px;" />
						<div class="preview-meta">
						<p class="Pdescri">XD Wheels ha estado redefiniendo el rendimiento dentro y fuera del asfalto desde 1995 con la búsqueda incesante de afrontar las posibilidades.</p>
							<ul>
								<!-- <li>
									<span  data-toggle="modal" data-target="#product-modal">
										<i class="tf-ion-ios-search-strong"></i>
									</span>
								</li> -->
								<li>
			                        <a href="#" ><i class="tf-ion-ios-heart"></i></a>
								</li>
								<li>
									<a href="#!"><i class="tf-ion-android-cart"></i></a>
								</li>
							</ul>
                      	</div>
					</div>
					<div class="product-content cont-info">
						<h3>XD Wheels</h3>
                        <p>200$</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="product-item">
					<div class="product-thumb">
						<img class="img-responsive" src="../Cliensite/images/arrow-products/chinmay-jade.jpg" alt="product-img"  style="height: 400px;"/>
						<div class="preview-meta">
						<p class="Pdescri">XD Wheels ha estado redefiniendo el rendimiento dentro y fuera del asfalto desde 1995 con la búsqueda incesante de afrontar las posibilidades.</p>
							<ul>
								<!-- <li>
									<span  data-toggle="modal" data-target="#product-modal">
										<i class="tf-ion-ios-search-strong"></i>
									</span>
								</li> -->
								<li>
			                        <a href="#" ><i class="tf-ion-ios-heart"></i></a>
								</li>
								<li>
									<a href="#!"><i class="tf-ion-android-cart"></i></a>
								</li>
							</ul>
                      	</div>
					</div>
					<div class="product-content cont-info">
						<h3>XD Wheels</h3>
                        <p>200$</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="product-item">
					<div class="product-thumb" ">
						<img class="img-responsive" src="../Cliensite/images/arrow-products/chinmay-jade.jpg" alt="product-img"  style="height: 400px;"/>
						<div class="preview-meta">
						<p class="Pdescri">XD Wheels ha estado redefiniendo el rendimiento dentro y fuera del asfalto desde 1995 con la búsqueda incesante de afrontar las posibilidades.</p>
							<ul>
								<!-- <li>
									<span  data-toggle="modal" data-target="#product-modal">
										<i class="tf-ion-ios-search-strong"></i>
									</span>
								</li> -->
								<li>
			                        <a href="#" ><i class="tf-ion-ios-heart"></i></a>
								</li>
								<li>
									<a href="#!"><i class="tf-ion-android-cart"></i></a>
								</li>
							</ul>
                      	</div>
					</div>
					<div class="product-content cont-info">
						<h3>XD Wheels</h3>
                        <p>200$</p>
					</div>
				</div>
			</div>
	</section>

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
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    
    <!-- Main jQuery -->
    <script src="../Cliensite/plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.1 -->
    <script src="../Cliensite/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <!-- Bootstrap Touchpin -->
    <script src="../Cliensite/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js"></script>
    <!-- Instagram Feed Js -->
    <script src="../Cliensite/plugins/instafeed/instafeed.min.js"></script>
    <!-- Video Lightbox Plugin -->
    <script src="../Cliensite/plugins/ekko-lightbox/dist/ekko-lightbox.min.js"></script>
    <!-- Count Down Js -->
    <script src="../Cliensite/plugins/syo-timer/build/jquery.syotimer.min.js"></script>
    <!-- slick Carousel -->
    <script src="../Cliensite/plugins/slick/slick.min.js"></script>
    <script src="../Cliensite/plugins/slick/slick-animation.min.js"></script>
    <!-- Google Mapl -->
    <script src="../Cliensite/https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
    <script type="text/javascript" src="../Cliensite/plugins/google-map/gmap.js"></script>
	<!-- Animaciones -->
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
		<script>
			AOS.init();

			$(document).ready(function(){
            $('.clasesDes').slick({
                dots: false,
                infinite: true,
                speed: 300,
                slidesToShow: 3,
                slidesToScroll: 1,
                responsive: [
                    {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: false
                    }
                    },
                    {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                    },
                    {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
        });

      </script>
		</script>
    <!-- Main Js File -->
    <script src="../Cliensite/js/script.js"></script>


   
	</body>
	</html>