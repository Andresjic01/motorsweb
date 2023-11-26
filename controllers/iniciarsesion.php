<?php

    //enlazar las dependencia
    require_once("../models/conexion.php");
    require_once("../models/consultas.php");

    // aterrizamos en variables los datos ingresados por el usuario, los cuales viajan a traves del method=post y los name de los campos
    $identificacion = $_POST['identificacion'];
    $clave = md5($_POST['clave']);

    //validar los datos
    if(strlen($identificacion)>0 && strlen($clave)>0){

        //crear objeto 
        $objValidar = new Validarsesion();
        $result = $objValidar -> iniciarSesion($identificacion,$clave);

    }else{

        echo '<script> 
            swal.fire({
                icon: "error",
                title: "ingrese su identificacion y contraseña",
                confirmButtonText: "OK"
            }).then(function() {
                window.location = "../views/Cliensite/login.html";
            });</script>';
        
    }

?>
