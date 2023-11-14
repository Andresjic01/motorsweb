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

<section class="products section bg-gray">
	<div class="row">
		<div class="filtros col-md-3">
			<article class="card-filtros">
				<div class="filtro-prod">
					<input type="checkbox" name="" id="" class="checkebox">
					<h2>Producto 1</h2>
				</div>
				<div class="filtro-prod">
					<i class="fa-regular fa-circle"></i>
					<h2>Producto 1</h2>
				</div>
				<div class="filtro-prod">
					<i class="fa-regular fa-circle"></i>
					<h2>Producto 1</h2>
				</div>
				<div class="filtro-prod">
					<i class="fa-regular fa-circle"></i>
					<h2>Producto 1</h2>
				</div>
				<div class="filtro-prod">
					<i class="fa-regular fa-circle"></i>
					<h2>Producto 1</h2>
				</div>
				<div class="filtro-prod">
					<i class="fa-regular fa-circle"></i>
					<h2>Producto 1</h2>
				</div>
				<div class="filtro-prod">
					<i class="fa-regular fa-circle"></i>
					<h2>Producto 1</h2>
				</div>
				<div class="filtro-prod">
					<i class="fa-regular fa-circle"></i>
					<h2>Producto 1</h2>
				</div>
				<div class="filtro-prod">
					<i class="fa-regular fa-circle"></i>
					<h2>Producto 1</h2>
				</div>
				</article>

				<article class="card-filtros">
					<div class="filtro-prod">
						<input type="checkbox" name="" id="" class="checkebox">
						<h2>Producto 1</h2>
					</div>
					<div class="filtro-prod">
						<i class="fa-regular fa-circle"></i>
						<h2>Producto 1</h2>
					</div>
					<div class="filtro-prod">
						<i class="fa-regular fa-circle"></i>
						<h2>Producto 1</h2>
					</div>
					<div class="filtro-prod">
						<i class="fa-regular fa-circle"></i>
						<h2>Producto 1</h2>
					</div>
					<div class="filtro-prod">
						<i class="fa-regular fa-circle"></i>
						<h2>Producto 1</h2>
					</div>
					<div class="filtro-prod">
						<i class="fa-regular fa-circle"></i>
						<h2>Producto 1</h2>
					</div>
					<div class="filtro-prod">
						<i class="fa-regular fa-circle"></i>
						<h2>Producto 1</h2>
					</div>
					<div class="filtro-prod">
						<i class="fa-regular fa-circle"></i>
						<h2>Producto 1</h2>
					</div>
					<div class="filtro-prod">
						<i class="fa-regular fa-circle"></i>
						<h2>Producto 1</h2>
					</div>
				</article>
		</div>
		<div class="container col-md-9">
		<div class="row">
			<div class="title text-center">
				<h2>Mas vendidos</h2>
			</div>
		</div>
		<div class="row">
			
			<div class="col-md-4">
				<div class="product-item">
					<div class="product-thumb imagenesP" data-aos="zoom-in"  data-aos-duration="1500">
						<span class="bage">Descuento</span>
						<img class="img-responsive" src="../Cliensite/images/shop/products/product-1.jpg" alt="product-img" style="height: 400px;" />
									
										<div class="preview-meta">
					<div class="calif">
						<ul class="star-calif">
							<li>
										<i class="fa-solid fa-star"></i>
										<i class="fa-solid fa-star"></i>
										<i class="fa-solid fa-star"></i>
										<i class="fa-solid fa-star"></i>
										<i class="fa-solid fa-star"></i>
							</li>
						</ul>
					</div>
							<ul>
								<li>
									<span  data-toggle="modal" data-target="#product-modal">
										<i class="tf-ion-ios-search-strong"></i>
									</span>
								</li>
								<li>
			                        <a href="#!" ><i class="tf-ion-ios-heart"></i></a>
								</li>
								<li>
									<a href="#!"><i class="tf-ion-android-cart"></i></a>
								</li>
							</ul>
                      	</div>
					</div>
					<div class="product-content">
						<h4><a href="../Cliensite/product-single.html">Amortiguador de maletero</a></h4>
						<p class="price">$200</p>
					</div>

				</div>
			</div>
			<div class="col-md-4">
				<div class="product-item">
					<div class="product-thumb" data-aos="zoom-in"  data-aos-duration="1500">
						<img class="img-responsive" src="../Cliensite/images/shop/products/product-2.png" alt="product-img" style="height: 400px;"/>
						<div class="preview-meta">
							<ul>
								<li>
									<span  data-toggle="modal" data-target="#product-modal">
										<i class="tf-ion-ios-search-strong"></i>
									</span>
								</li>
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
					<div class="product-thumb" data-aos="zoom-in"  data-aos-duration="1500">
						<img class="img-responsive" src="../Cliensite/images/shop/products/product-3.jpg" alt="product-img" style="height: 400px;" />
						<div class="preview-meta">
							<ul>
								<li>
									<span  data-toggle="modal" data-target="#product-modal">
										<i class="tf-ion-ios-search-strong"></i>
									</span>
								</li>
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
					<div class="product-thumb" data-aos="zoom-in"  data-aos-duration="1500">
						<img class="img-responsive" src="../Cliensite/images/shop/products/product-4.jpg" alt="product-img" style="height: 400px;" />
						<div class="preview-meta">
							<ul>
								<li>
									<span  data-toggle="modal" data-target="#product-modal">
										<i class="tf-ion-ios-search-strong"></i>
									</span>
								</li>
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
					<div class="product-thumb" data-aos="zoom-in"  data-aos-duration="1500">
						<img class="img-responsive" src="../Cliensite/images/shop/products/product-5.jpg" alt="product-img"  style="height: 400px;"/>
						<div class="preview-meta">
							<ul>
								<li>
									<span  data-toggle="modal" data-target="#product-modal">
										<i class="tf-ion-ios-search-strong"></i>
									</span>
								</li>
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
					<div class="product-thumb" data-aos="zoom-in"  data-aos-duration="1500">
						<img class="img-responsive" src="../Cliensite/images/shop/products/product-6.jpg" alt="product-img"  style="height: 400px;"/>
						<div class="preview-meta">
							<ul>
								<li>
									<span  data-toggle="modal" data-target="#product-modal">
										<i class="tf-ion-ios-search-strong"></i>
									</span>
								</li>
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
			<div class="col-md-4">
				<div class="product-item">
					<div class="product-thumb" data-aos="zoom-in"  data-aos-duration="1500">
						<span class="bage">Sale</span>
						<img class="img-responsive" src="../Cliensite/images/shop/products/product-7.jpg" alt="product-img" style="height: 400px;"/>
						<div class="preview-meta">
							<ul>
								<li>
									<span  data-toggle="modal" data-target="#product-modal">
										<i class="tf-ion-ios-search-strong"></i>
									</span>
								</li>
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
						<h4><a href="../Cliensite/product-single.html">Parabrisas</a></h4>
						<p class="price">$200</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="product-item">
					<div class="product-thumb" data-aos="zoom-in"  data-aos-duration="1500">
						<img class="img-responsive" src="../Cliensite/images/shop/products/product-8.jpg" alt="product-img" style="height: 400px;"/>
						<div class="preview-meta">
							<ul>
								<li>
									<span  data-toggle="modal" data-target="#product-modal">
										<i class="tf-ion-ios-search-strong"></i>
									</span>
								</li>
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
						<h4><a href="../Cliensite/product-single.html">Portabicicletas</a></h4>
						<p class="price">$200</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="product-item">
					<div class="product-thumb" data-aos="zoom-in"  data-aos-duration="1500">
						<img class="img-responsive" src="..
						/Cliensite/images/shop/products/product-9.jpg" alt="product-img" style="height: 400px; "/>
						<div class="preview-meta">
							<ul>
								<li>
									<span  data-toggle="modal" data-target="#product-modal">
										<i class="tf-ion-ios-search-strong"></i>
									</span>
								</li>
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
						<h4><a href="product-single.html">Retrovisores</a></h4>
						<p class="price">$200</p>
					</div>
				</div>
			</div>
		
		<!-- Modal -->
		<div class="modal product-modal fade" id="product-modal">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<i class="tf-ion-close"></i>
			</button>
		  	<div class="modal-dialog " role="document">
		    	<div class="modal-content">
			      	<div class="modal-body">
			        	<div class="row">
			        		<div class="col-md-8 col-sm-6 col-xs-12">
			        			<div class="modal-image">
				        			<img class="img-responsive" src="../Cliensite/images/shop/products/modal-product.jpg" alt="product-img" style="height: 400px; "/>
			        			</div>
			        		</div>
			        		<div class="col-md-4 col-sm-6 col-xs-12">
			        			<div class="product-short-details">
			        				<h2 class="product-title">GM Pendant, Basalt Grey</h2>
			        				<p class="product-price">$200</p>
			        				<p class="product-short-description">
			        					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem iusto nihil cum. Illo laborum numquam rem aut officia dicta cumque.
			        				</p>
			        				<a href="views/Cliensite/cart.html" class="btn btn-main">Add To Cart</a>
			        				<a href="views/Cliensite/product-single.html" class="btn btn-transparent">View Product Details</a>
			        			</div>
			        		</div>
			        	</div>
			        </div>
		    	</div>
		  	</div>
		</div>
		<!-- /.modal -->

		</div>
		</div>
	</div>
</section>


<?php
	include("include-footer.php")
?>
   
	</body>
	</html>