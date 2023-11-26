<?php

require_once("../models/conexion.php");
require_once("../models/consultas.php");
//aterrizar variable que enviamos atraves del metodo get desde el boton de la tabla
if(isset($_POST['carrito'])){
    echo '<script> 
            swal.fire({
                icon: "error",
                title: "Para agregar un producto por favor inicie sesion",
                confirmButtonText: "OK"
            }).then(function() {
                window.location = "../views/Cliensite/shop-sidebar.php";
            });</script>';
}elseif(isset($_POST['megusta'])){
    echo '<script> 
            swal.fire({
                icon: "error",
                title: "Para agregar a favoritos debes iniciar sesion",
                confirmButtonText: "OK"
            }).then(function() {
                window.location = "../views/Cliensite/shop-sidebar.php";
            });</script>';
}




?>