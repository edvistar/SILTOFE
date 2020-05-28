<?php

require_once('../../model/conexion.php');
require_once('../../model/consulta.php');



$id_ruta        = $_POST['id_ruta'];
$destino        = $_POST['destino'];
$fecha_ruta     = $_POST['fecha_ruta'];
$hora_salida    = $_POST['hora_salida'];
$hora_llegada   = $_POST['hora_llegada'];
$descripcion    = $_POST['descripcion'];
$tipo_ruta      = $_POST['tipo_ruta'];
$precinto       = $_POST['precinto'];
$identificacion = $_POST['identificacion'];
$placa          = $_POST['placa'];
$id_centro      = $_POST['id_centro'];


if(strlen($id_ruta) > 0 && strlen($destino) > 0 && strlen($fecha_ruta) > 0 && strlen($hora_salida) > 0 && strlen($hora_llegada) > 0  && strlen($descripcion) > 0 && strlen($tipo_ruta) > 0 && strlen($precinto) > 0 && strlen($identificacion) > 0 && strlen($placa) > 0 && strlen($id_centro) > 0){
    
    $consulta = new Consulta();
    $result = $consulta->modificarRuta($id_ruta, $destino, $fecha_ruta, $hora_salida, $hora_llegada, $descripcion, $tipo_ruta, $precinto, $identificacion, $placa, $id_centro);
        
    }else{
        echo  "<script>alert('Complete todos los campos')</script>";
        echo '<script>location.href="../../views/admin/registrarRutas.php"</script>';
    }


?>