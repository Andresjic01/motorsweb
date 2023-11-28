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
<body id="bodys">

<?php
	include("include-pag.php")
?>

<section class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="content">
					<h1 class="page-name">Repuestos</h1>
					<ol class="breadcrumb">
						<li><a href="home.php">incio</a></li>
						<li class="active">Repuestos</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
</section>



<section class="products section">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				
				<div class="widget product-category">
					<h4 class="widget-title">Categorias</h4>
					<div class="panel-group commonAccordion" id="accordion" role="tablist" aria-multiselectable="true">
					  	<div class="panel panel-default">
						    <div class="panel-heading" role="tab" id="headingOne">
						      	<h4 class="panel-title">
						        	<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						          	Repuestos internos
						        	</a>
						      	</h4>
						    </div>
					    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
							<div class="panel-body">
								<ul>
									<li><a href="#!">Partes de motor</a></li>
									<li><a href="#!">Baterias</a></li>
									<li><a href="#!">Bujias</a></li>
									<li><a href="#!">Enfriadores de caja</a></li>
									<li><a href="#!">sensores</a></li>
									<li><a href="#!">Aire acondicionado</a></li>
									<li><a href="#!">Radiadores</a></li>
									<li><a href="#!">Sistemas de freno</a></li>
									<li><a href="#!">Amortiguadores</a></li>
									<li><a href="#!">Suspenciones</a></li>
								</ul>
							</div>
					    </div>
					  </div>
					  <div class="panel panel-default">
					    <div class="panel-heading" role="tab" id="headingTwo">
					      <h4 class="panel-title">
					        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
					         	Repuestos Externos
					        </a>
					      </h4>
					    </div>
					    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
					    	<div class="panel-body">
					     		<ul>
									<li><a href="#!">Capo</a></li>
									<li><a href="#!">Llantas</a></li>
									<li><a href="#!">Parachoques</a></li>
									<li><a href="#!">Parabrisa</a></li>
									<li><a href="#!">Puertas</a></li>
									<li><a href="#!">Retrovisores</a></li>
									<li><a href="#!">Rines</a></li>
									<li><a href="#!">Farolas y Exploradoras</a></li>
									<li><a href="#!">Stop</a></li>
									<li><a href="#!"></a></li>
								</ul>
					    	</div>
					    </div>
					  </div>
					</div>
					
				</div>
			</div>
			<div class="col-md-9">
			<div class="input">
					<form action="" method="GET">
					<input type="text" placeholder="Buscar" id="buscador" name="busqueda" >
					<button class="Buscar" type="submit" name="enviar">Buscar</button>
			</div>
			<div class="row">

				

			<?php

			if(isset($_GET['enviar'])){
				$busqueda = $_GET['busqueda'];
				

				$objConexion = new Conexion();
            	$conexion = $objConexion-> get_conexion();

				$consulta = $conexion->query("SELECT * FROM productos WHERE NomProducto LIKE '%$busqueda%'");


				while ($resultado = $consulta->fetch()){
					
					echo'<div class="col-md-4">
					<div class="product-item">
						<div class="product-thumb">
							<span class="bage">Sale</span>
							<img class="img-responsive" src="../'.$resultado['Foto1'].'" alt="product-img" style="height: 330px; " />
							<div class="preview-meta">
								<ul>
									<li>
										<span  data-toggle="modal" data-target="#'.$resultado['IdProducto'].'">
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
							<h4><a href="product-single.html">'.$resultado['NomProducto'].'</a></h4>
							<p class="price">$'.$resultado['Precio'].'</p>
						</div>
					</div>
				</div>'
				;
				}
				
			}else{
				$objConexion = new Conexion();
            	$conexion = $objConexion-> get_conexion();

				$consulta = $conexion->query("SELECT * FROM productos ");


				while ($f = $consulta->fetch()){
					
					echo'<div class="col-md-4">
					<div class="product-item">
						<div class="product-thumb">
							<span class="bage">Sale</span>
							<img class="img-responsive" src="../'.$f['Foto1'].'" alt="product-img" style="height: 330px;" />
							<div class="preview-meta">
								<ul>
									<li>
										<span  data-toggle="modal" data-target="#'.$f['IdProducto'].'">
											<i class="tf-ion-ios-search-strong"></i>
										</span>
									</li>
									<li>
										<a href="#!" ><i class="tf-ion-ios-heart"></i></a>
									</li>
									<li>
									<form action="" id="miFormulario">
										<input type="hidden" value="'.$f['IdProducto'].'" name="id" id="id">
										<input type="hidden" value="'.$f['NomProducto'].'" name="nombre" id="nombre">
										<input type="hidden" value="'.$f['Precio'].'" name="precio" id="precio">
										<input type="hidden" value="1" name="cantidad" id="cantidad"> <br>
										<button id="agregar"> <i class="tf-ion-android-cart"></i> </button>
									</form>
										
									</li>
								</ul>
							  </div>
						</div>
						<div class="product-content">
							<h4><a href="product-single.html">'.$f['NomProducto'].'</a></h4>
							<p class="price">$'.$f['Precio'].'</p>
						</div>
					</div>
				</div>'
				;
				}

			}

			?>

			</form>
	</div>
					<?php
						modalProductos()
					?>

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
