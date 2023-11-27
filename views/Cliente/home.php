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
<?php
	include("include-head.php")
?>
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
	
		
	<div id="cdestacadas">
		<div class="container">
			<div class="row clasesDes">
			
			<div class="col-md-4">
				<div class="product-item">
					<div class="product-thumb imagenesP card-destacadas" ">
						<span class="bage">Descuento</span>
						<img class="img-responsive" src="../Cliensite/images/shop/products/product-1.jpg" alt="product-img" style="height: 400px;" />		
							<div class="preview-meta">
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
                        <p>XD Wheels ha estado redefiniendo el rendimiento dentro y fuera del asfalto desde 1995 con la búsqueda incesante de afrontar las posibilidades.</p>
					</div>

				</div>
			</div>
			<div class="col-md-4">
				<div class="product-item">
					<div class="product-thumb" ">
						<img class="img-responsive" src="../Cliensite/images/shop/products/product-2.png" alt="product-img" style="height: 400px;"/>
						<div class="preview-meta">
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
					<div class="product-content">
						<h4><a href="../Cliensite/product-single.html">Barras de techo</a></h4>
						<p class="price">$200</p>
					</div>
				
				</div>
			</div>
			<div class="col-md-4">
				<div class="product-item">
					<div class="product-thumb" ">
						<img class="img-responsive" src="../Cliensite/images/shop/products/product-3.jpg" alt="product-img" style="height: 400px;" />
						<div class="preview-meta">
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
					<div class="product-content">
						<h4><a href="../Cliensite/product-single.html">Bujias</a></h4>
						<p class="price">$230</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="product-item">
					<div class="product-thumb" ">
						<img class="img-responsive" src="../Cliensite/images/shop/products/product-4.jpg" alt="product-img" style="height: 400px;" />
						<div class="preview-meta">
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
					<div class="product-content">
						<h4><a href="../Cliensite/product-single.html">Bujias de precalentamiento</a></h4>
						<p class="price">$200</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="product-item">
					<div class="product-thumb">
						<img class="img-responsive" src="../Cliensite/images/shop/products/product-5.jpg" alt="product-img"  style="height: 400px;"/>
						<div class="preview-meta">
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
					<div class="product-content">
						<h4><a href="../Cliensite/product-single.html">Correa trapecial</a></h4>
						<p class="price">$200</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="product-item">
					<div class="product-thumb" ">
						<img class="img-responsive" src="../Cliensite/images/shop/products/product-6.jpg" alt="product-img"  style="height: 400px;"/>
						<div class="preview-meta">
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
					<div class="product-content">
						<h4><a href="../Cliensite/product-single.html">Juntas</a></h4>
						<p class="price">$200</p>
					</div>
				</div>
			</div>
	</div>
	

		</div>
	</div>
</section>


<?php
	include("include-footer.php")
?>


   
	</body>
	</html>