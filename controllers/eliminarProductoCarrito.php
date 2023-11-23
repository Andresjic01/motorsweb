<?php


require_once("../models/conexion.php");
require_once("../models/consultas.php");
//aterrizamos la variable que enviamos desde el metodo get
$id= $_GET['id'];

$objConsultas = new Consultas();
$result = $objConsultas->eliminarProductoCarrito($id);

?>