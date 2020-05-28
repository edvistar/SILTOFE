<?php

require_once('../../model/conexion.php');
require_once('../../model/consulta.php');


if(isset($_GET['id_rutaE'])){
    $idEliminar = $_GET['id_rutaE'];
    $consulta = new Consulta();
    $result = $consulta->eliminarRutas($idEliminar);
}else{
    echo '<script>alert("error)</script>';
}



?>