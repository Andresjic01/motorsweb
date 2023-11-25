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
	include("menu2.php")
?>


<section class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="content">
					<h1 class="page-name">Denuncias</h1>
					<ol class="breadcrumb">
						<li><a href="index.html">inicio</a></li>
						<li class="active">Denuncias</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
</section>




<section class="page-wrapper">
	<div class="contact-section">
		<div class="container">
			<div class="row">
				<!-- Contact Form -->
				<div class="contact-form col-md-12 " style="display:flex; flex-direction: column; align-items:center;">
					<h3 style="text-align:center;">Si tienes alguna queja general del sitio o de un servicio recibido <br> denuncialo aqui <br> <br></h3>
					<form id="contact-form" style="width:60%;" method="post" action="../../controllers/registrarDenunciasCliente.php" role="form">
					
						<div class="form-group">
							<input type="text" placeholder="nombre de usuario" class="form-control" name="nombreUsuario" id="email">
						</div>
						
						<div class="form-group">
							<input type="text" placeholder="Asunto" class="form-control" name="asunto" id="subject">
						</div>
						
						<div class="form-group">
							<textarea rows="6" placeholder="descripcion" class="form-control" name="descripcion" id="message"></textarea>	
						</div>
						
						
						<div id="cf-submit">
							<button type="submit"id="contact-submit" class="btn btn-transparent">Enviar</button>
							<!-- <input type="submit" id="contact-submit" class="btn btn-transparent" value="Enviar"> -->
						</div>						
						
					</form>
				</div>
				
				

			
			</div> <!-- end row -->
		</div> <!-- end container -->
	</div>
</section>
	

  





<?php
	include("include-footer.php")
?>
  </body>
  </html>