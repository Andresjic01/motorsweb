<?php

    session_start();

    if(!isset($_SESSION['AUTENTICADO'])){

        echo '<script> 
        swal.fire({
            icon: "error",
            title: "Por favor inicie sesion",
            confirmButtonText: "OK"
        }).then(function() {
            window.location = "../Cliensite/login.html";
        });</script>';
    }

    if($_SESSION['rol'] !="Administrador"){
        echo '<script>window.history.back();</script>';
    }
?>