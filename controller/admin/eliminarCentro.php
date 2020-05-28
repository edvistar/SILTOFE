<?php

require_once('../../model/conexion.php');
require_once('../../model/consulta.php');


if(isset($_GET['id_centroE'])){
    $idEliminar = $_GET['id_centroE'];
    $consulta = new Consulta();
    $result = $consulta->eliminarCentros($idEliminar);
}else{
    echo '<script>alert("error)</script>';
}



?>