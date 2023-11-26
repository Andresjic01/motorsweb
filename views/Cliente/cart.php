<?php
require_once("../../models/conexion.php");
require_once("../../models/consultas.php");
require_once("../../models/seguridadCliente.php");
require_once("../../controllers/mostrarInfoCliente.php");
include ("../../controllers/infoCarrito.php");

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
  <title>MotorsWeb</title>

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Construction Html5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Constra HTML Template v1.0">
  
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
  
  <!-- Themefisher Icon font -->
  <link rel="stylesheet" href="../Cliensite/plugins/themefisher-font/style.css">
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="../Cliensite/plugins/bootstrap/css/bootstrap.min.css">
  
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

<section class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="content">
					<h1 class="page-name">Carrito</h1>
					<ol class="breadcrumb">
						<li><a href="index.html">inicio</a></li>
						<li class="active">carrito</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
</section>



<div class="page-wrapper">
  <div class="cart shopping">
    <div class="container">

        <?php if(!empty($_SESSION['carrito'])){ ?>

      <div class="row">
        <div class="col-md-8 ">
          <div class="block">
            <div class="product-list">
				      <h2 style="margin-bottom:19px ;">Productos</h2>
				
              <form method="POST">
                <?php $total=0;?>
                <?php foreach($_SESSION['carrito'] as $indice=>$f){?>
                <table class="table">
                  <tbody>
                    <tr class="">
                      <td class="">
                        <div class="product-info">
                          <img width="90" height="100" src="../<?php echo $f['foto']?>" alt="" />
                          <a href="#!"><?php echo $f['nombre']?></a>
                        </div>
                      </td>
                      <td class=""><?php echo $f['precio']?></td>
                      <td class="">

                        <form action="" method="POST">
                          <input type="hidden" name="ide" value="<?php echo $f['Id']?>">
                        <button style="background:none; border:none;"
                        type="submit"
                        name="btnAccion"
                        value="Eliminar" >Eliminar</button>
                        </form>

                      </td>
                    </tr>
                  </tbody>
                </table>
                <?php $total=$total+($f['precio']*$f['cantidad']);?>
                  <?php } ?>
              </form>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <h2>Resumen de compra</h2>
          <hr>
          <p style="text-align:;">Productos <span style="margin-left:90px;"><?php echo number_format($total,2)?></span></p>
          <p>Envio <span style="margin-left:130px;">Gratis</span></p>
          <p><strong>Total</strong><span style="margin-left:130px;"><?php echo number_format($total,2)?></span></p>
          <a href="checkout.php"><button style="width:250px; height:35px; background:black; border-radius:5px; color:white;">Continuar compra</button></a>
        </div>
      </div>

      <div></div>

          <?php }else {?>
            <div style="text-align:center;">
              <h2>No hay productos en el carrito</h2>
              <p>Empieza a comprar ¡ahora!</p>
            </div>
          <?php }?>
    </div>
  </div>
</div>


<footer class="footer section text-center">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ul class="social-media">
					<li>
						<a href="https://www.facebook.com/themefisher">
							<i class="tf-ion-social-facebook"></i>
						</a>
					</li>
					<li>
						<a href="https://www.instagram.com/themefisher">
							<i class="tf-ion-social-instagram"></i>
						</a>
					</li>
					<li>
						<a href="https://www.twitter.com/themefisher">
							<i class="tf-ion-social-twitter"></i>
						</a>
					</li>
					<li>
						<a href="https://www.pinterest.com/themefisher/">
							<i class="tf-ion-social-pinterest"></i>
						</a>
					</li>
				</ul>
				<ul class="footer-menu text-uppercase">
					<li>
						<a href="contact.html">CONTACT</a>
					</li>
					<li>
						<a href="shop.html">SHOP</a>
					</li>
					<li>
						<a href="pricing.html">Pricing</a>
					</li>
					<li>
						<a href="contact.html">PRIVACY POLICY</a>
					</li>
				</ul>
				<p class="copyright-text">Copyright &copy;2021, Designed &amp; Developed by <a href="https://themefisher.com/">Themefisher</a></p>
			</div>
		</div>
	</div>
</footer>

    <!-- 
    Essential Scripts
    =====================================-->
    
    <!-- Main jQuery -->
    <script src="../Cliensite/plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.1 -->
    <script src="../Cliensite/plugins/bootstrap/js/bootstrap.min.js"></script>
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
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
    <script type="text/javascript" src="plugins/google-map/gmap.js"></script>

    <!-- Main Js File -->
    <script src="../Cliensite/js/script.js"></script>
    


  </body>
  </html>
