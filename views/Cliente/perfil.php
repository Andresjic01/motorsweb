
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
    
                

    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
              <?php
                pefilEditar()
              ?>
            </div>
        </div>
    </div>





    


<!-- <div class="section video-testimonial bg-1 overly-white text-center mt-50">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Video presentation</h2>
				<a class="play-icon" href="https://www.youtube.com/watch?v=oyEuk8j8imI&amp;rel=0" data-toggle="lightbox">
					<i class="tf-ion-ios-play"></i>
				</a>
			</div>
		</div>
	</div>
</div> -->



<?php
	include("include-footer.php")
?>
	
    


  </body>
  </html>