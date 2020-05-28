<?php

require_once('../../model/conexion.php');
require_once('../../model/consulta.php');



$id_centro = $_POST['id_centro'];
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$whatsapp = $_POST['whatsapp'];
$departamento = $_POST['departamento'];
$ciudad = $_POST['ciudad'];
$encargado = $_POST['encargado'];
$lugar = $_POST['lugar'];


if(strlen($id_centro) > 0 && strlen($nombre) > 0 && strlen($email) > 0 && strlen($telefono) > 0 && strlen($whatsapp) > 0  && strlen($departamento) > 0 && strlen($ciudad) > 0 && strlen($encargado) > 0 && strlen($lugar) > 0){
    
    $consulta = new Consulta();
    $result = $consulta->modificarCentro($id_centro, $nombre, $email, $telefono, $whatsapp, $departamento, $ciudad, $encargado, $lugar);
                
    }else{
        echo  "<script>alert('Complete todos los campos')</script>";
        echo '<script>location.href="../../views/admin/registrarCentros.php"</script>';
    }


?>