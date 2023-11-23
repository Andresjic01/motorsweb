<?php

require_once("../../models/conexion.php");
require_once("../../models/consultas.php");



$arg_id_usuario = $_SESSION['id'];




function cargarProductoCarrito() {
    $arg_id_usuario = $_SESSION['id'];
    $objConsulta = new Consultas();
    $result = $objConsulta->mostrarProductoCarrito($arg_id_usuario);

    if (!isset($result)) {
        echo '<h2>Tu carrito esta vacio</h2>';
    } else {
        foreach ($result as $f) {
            echo  '
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
                          <img style="width: 150px; height: 150px; object-fit: cover; object-position: center; margin-top:30px" src="../' . $f['Foto1'] . '" alt="" />
                          <a href="#!">Nombre: ' . $f['NomProducto'] . '</a>
                          <a href="#!">Proveedor: ' . $f['Proveedor'] . '</a>
                          <a href="#!">Precio: ' . $f['Precio'] . '</a> 
                        </div>
                        <td class="">
                        <a   class="botonpagar1" style="color:red" href="../../controllers/eliminarProductoCarrito.php?id=' . $f['id_carrito'] . '">Elminar del carrito</a>
                        </td>
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
			<button style="width:250px; height:35px; background:black; border-radius:5px; color:white;">Continuar compra</button>
		</div>
      </div>
    </div>
  </div>
</div>

            ';
        }
    }
}




?>