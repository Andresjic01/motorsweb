<?php

require_once("../models/conexion.php");
require_once("../models/consultas.php");
//aterrizar variable que enviamos atraves del metodo get desde el boton de la tabla
$comentario = $_POST['comentario'];
$producto = $_POST['producto'];
$cliente = $_POST['cliente'];
$fecha= date('Y-m-d H:i:s');

if(strlen($comentario)>0){

    $objconsultas = new Consultas();
    $result = $objconsultas->enviarComentarioCli($comentario,$producto, $cliente, $fecha);
}else{
    echo '<script> 
            swal.fire({
                icon: "error",
                title: "No puedes enviar un comentario vacio",
                confirmButtonText: "OK"
            }).then(function() {
                window.location = "../views/Cliente/product-single.php?id='.$producto.'";
            });</script>';
}



?>