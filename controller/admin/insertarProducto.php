<?php

require_once('../../model/conexion.php');
require_once('../../model/consulta.php');



$id_producto  = $_POST['id_producto'];
$nombre       = $_POST['nombre'];
$peso         = $_POST['peso'];
$costo        = $_POST['costo'];



if(strlen($id_producto) > 0 && strlen($nombre) > 0 && strlen($peso) > 0 && strlen($costo) > 0 ){
    
    $consulta = new Consulta();
    $result = $consulta->insertProductos($id_producto, $nombre, $peso, $costo);
        
    }else{
        echo  "<script>alert('Complete todos los campos')</script>";
        echo '<script>location.href="../../views/admin/registrarProductos.php"</script>';
    }


?>