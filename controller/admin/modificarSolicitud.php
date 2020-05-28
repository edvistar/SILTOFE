<?php

require_once('../../model/conexion.php');
require_once('../../model/consulta.php');



$id_solicitud = $_POST['id_solicitud'];
$solicitud      = $_POST['solicitud'];
$descripcion        = $_POST['descripcion'];
$cantidad_kilos       = $_POST['cantidad_kilos'];



if(strlen($id_solicitud) > 0 && strlen($solicitud) > 0 && strlen($descripcion) > 0 && strlen($cantidad_kilos) > 0 ){
    
    $consulta = new Consulta();
    $result = $consulta->modificarsolicitud($id_solicitud, $solicitud, $descripcion, $cantidad_kilos);
        
    }else{
        echo  "<script>alert('Complete todos los campos')</script>";
        echo '<script>location.href="../../views/admin/registrarSolicitud.php"</script>';
    }


?>