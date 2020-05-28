<?php

require_once('../../model/conexion.php');
require_once('../../model/consulta.php');



$placa           = $_POST['placa'];
$capacidad       = $_POST['capacidad'];
$seguro          = $_POST['seguro'];
$tecnomecanica   = $_POST['tecnomecanica'];
$tipo_vehiculo   = $_POST['tipo_vehiculo'];
$conductor       = $_POST['conductor'];
$costo_flete     = $_POST['costo_flete'];
$gps             = $_POST['gps'];
$estado          = $_POST['estado'];
$fecha_registro  = $_POST['fecha_registro'];



if(strlen($placa) > 0 && strlen($capacidad) > 0 && strlen($seguro) > 0 && strlen($tecnomecanica) > 0 && strlen($tipo_vehiculo) > 0  && strlen($conductor) > 0 && strlen($costo_flete) > 0 && strlen($gps) > 0 && strlen($estado) > 0 && strlen($fecha_registro) > 0 ){
    
    $consulta = new Consulta();
    $result = $consulta->insertVehiculos($placa, $capacidad, $seguro, $tecnomecanica, $tipo_vehiculo, $conductor, $costo_flete, $gps, $estado, $fecha_registro);
        
    }else{
        echo  "<script>alert('Complete todos los campos')</script>";
        echo '<script>location.href="../../views/admin/registrarVehiculo.php"</script>';
    }


?>