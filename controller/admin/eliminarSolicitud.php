<?php

require_once('../../model/conexion.php');
require_once('../../model/consulta.php');


if(isset($_GET['id_solicitudE'])){
    $idEliminar = $_GET['id_solicitudE'];
    $consulta = new Consulta();
    $result = $consulta->eliminarSolicitudes($idEliminar);
}else{
    echo '<script>alert("error)</script>';
}



?>