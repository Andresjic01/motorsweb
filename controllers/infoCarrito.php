<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}


$mensaje="";

if (isset($_POST['btnAccion'])) {

    switch($_POST['btnAccion']){
      case 'agregar':
        
        if(is_numeric($_POST['id'])){
            $Id=$_POST['id'];
            $mensaje.="Ok Id correcto".$Id ."</br>";
        }else{
            $mensaje.="No existe tu id".$Id; break;
        }

        if(is_numeric($_POST['cantidad'])){
            $cantidad=$_POST['cantidad'];
            $mensaje.="Ok la cantidad es correcta".$cantidad."</br>";
        }else{
            $mensaje.="No existe tu id".$cantidad; break;
        }
        if(is_numeric($_POST['precio'])){
            $precio=$_POST['precio'];
            $mensaje.="Ok el precio es correcto".$precio."</br>";
        }else{
            $mensaje.="No existe tu precio".$precio."</br>"; break;
        }
        if(is_string($_POST['nombre'])){
            $nombre=$_POST['nombre'];
            $mensaje.= "tu nombre es correcto".$nombre."</br>"; 
        }else{
            $mensaje.= "No existe ese nombre"; break;
        }

        if(is_string($_POST['fotos'])){
            $foto=$_POST['fotos'];
            $mensaje.= $foto;
        }else{
            $mensaje.= "No existe"; break;
        }

        if(!isset($_SESSION['carrito'])){

            $producto=array(
                'Id'=>$Id,
                'cantidad'=>$cantidad,
                'precio'=>$precio,
                'nombre'=>$nombre,
                'foto'=>$foto,
            );
            $_SESSION['carrito'][0]=$producto;
        }else{
            $idProducto=array_column($_SESSION['carrito'], "Id");
            if(in_array($Id,$idProducto)){
                echo'<script> 
                swal.fire({
                    icon: "error",
                    title: "Lo siento ya agregaste este producto",
                    confirmButtonText: "OK"
                })</script>';
            }else{
            $numeroProductos=count($_SESSION['carrito']);

            $producto=array(
                'Id'=>$Id,
                'cantidad'=>$cantidad,
                'precio'=>$precio,
                'nombre'=>$nombre,
                'foto'=>$foto,
            );
            $_SESSION['carrito'][$numeroProductos]=$producto;
        }
        }
        $mensaje= print_r($_SESSION['carrito'],true);
      break;
      
      case "Eliminar":
        if(is_numeric($_POST['ide'])){
            $Identificacion=$_POST['ide'];

            foreach($_SESSION['carrito'] as $indice=>$f){
                if($f['Id']==$Identificacion){
                    unset($_SESSION['carrito'][$indice]);
                    echo '<script> 
                    swal.fire({
                        icon: "success",
                        title: "Borraste este producto",
                        confirmButtonText: "OK"
                    })</script>';;
                }
            }
        }else{
            $mensaje.="No existe tu id".$Id; break;
        }
        break;
    }
}else{"No hay productos en el carrito";}

?>