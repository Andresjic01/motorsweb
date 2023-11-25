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

<section class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="content">
					<h1 class="page-name">Servicios</h1>
					<ol class="breadcrumb">
						<li><a href="home.php">inicio</a></li>
						<li class="active">Servicios</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="products section">
	<div class="container">
		<div class="row">
			
			<?php
				mostrarServiciosIndexcliente();
			?>

			<?php
				modal();
			?>
      		<?php
				modalForm();
			?>
			

		</div>
	</div>
</section>




<?php
	include("include-footer.php")
?>
    


  </body>
  </html>
