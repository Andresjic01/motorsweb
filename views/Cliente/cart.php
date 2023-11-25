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
      <div class="row">
        <div class="col-md-8 ">
          <div class="block">
            <div class="product-list">
				<h2 style="margin-bottom:19px ;">Productos</h2>
				
              <form method="POST">
                <table class="table">
                  <tbody>
                    <tr class="">
                      <td class="">
                        <div class="product-info">
                          <img width="80" src="../Cliensite/images/shop/cart/cart-1.jpg" alt="" />
                          <a href="#!">Sunglass</a>
                        </div>
                      </td>
                      <td class="">$200.00</td>
                      <td class="">
                        <a class="product-remove" href="#!">Eliminar</a>
                      </td>
                    </tr>
					
                  </tbody>
                </table>
              </form>
            </div>
          </div>
        </div>

		<div class="col-md-4">
			<h2>Resumen de compra</h2>
			<hr>
			<p>Productos</p>
			<p>Envio</p>
			<p><strong>Total</strong></p>
			<button>Continuar compra</button>
		</div>
      </div>
    </div>
  </div>
</div>


<?php
	include("include-footer.php")
?>


  </body>
  </html>
