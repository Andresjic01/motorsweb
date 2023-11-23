<?php

require_once("../models/conexion.php");
require_once("../models/consultas.php");

session_start();

$producto = $_GET['id_producto'];
$usuario = isset($_SESSION['id']) ? $_SESSION['id'] : null;

if (!$usuario) {
    echo "<script>alert('Inicia sesion.')</script>";
    echo "<script>location.href='../views/Cliensite/login.html'</script>";
} else {
    $objconexion = new consultas();
    $conexion = $objconexion->agregarCarrito($producto, $usuario);
}

?>
