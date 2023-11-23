<?php

require_once("../../models/conexion.php");
require_once("../../models/consultas.php");



$arg_id_usuario = $_SESSION['id'];




function cargarProductoCarritoIcono() {
    $arg_id_usuario = $_SESSION['id'];
    $objConsulta = new Consultas();
    $result = $objConsulta->mostrarProductoCarrito($arg_id_usuario);

    if (!isset($result)) {
        echo '<h2>Tu carrito esta vacio</h2>';
    } else {
        foreach ($result as $f) {
            echo  '
            <div class="media">
								<a class="pull-left" href="#!">
                <img style="width: 150px; height: 150px; object-fit: cover; object-position: center; margin-top:30px" src="../' . $f['Foto1'] . '" alt="" />
								</a>
								<div class="media-body">
									<h4 class="media-heading"><a href="#!">' . $f['NomProducto'] . '</a></h4>
									<div class="cart-price">
										<span>' . $f['Precio'] . '</span>
									</div>
									<h5><strong>Cantidad: ' . $f['Cantidad'] . '</strong></h5>
								</div>
								<a href="#!" class="remove"><i class="tf-ion-close"></i></a>
							</div><!-- / Cart Item -->
              

            ';
        }
    }
}




?>