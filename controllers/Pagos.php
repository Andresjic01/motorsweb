<?php
require_once("../models/conexion.php");
require_once("../models/consultas.php");
include ("infoCarrito.php");

if($_POST){
    $total=0;
    $nombre=$_POST['nombre'];
    $direccion=$_POST['direccion'];
    $ciudad=$_POST['ciudad'];
    $barrio=$_POST['barrio'];
    $telefono=$_POST['telefono'];
    $Id=$_POST['comprador'];
    $clave=session_id();
    $productos=$_SESSION['carrito'];
    $Estatus="Pendiente";

    foreach($_SESSION['carrito'] as $indice=>$f){
        $total=$total+($f['precio']*$f['cantidad']);
    }

    if(strlen($nombre)>0 && strlen($direccion)>0 && strlen($ciudad)>0 && strlen($barrio)>0 && strlen($telefono)>0){

    $objConsultas = new Consultas();
    $result = $objConsultas -> insertarVenta($Id, $productos, $total);
    
    
}else{

    echo '<script> 
            swal.fire({
                icon: "error",
                title: "Complete todos los datos",
                confirmButtonText: "OK"
            }).then(function() {
                window.location = "../views/Cliente/checkout.php";
            });</script>';
    
}

}




?>